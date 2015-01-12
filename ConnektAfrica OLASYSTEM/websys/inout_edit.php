<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/inout_variables.php");
include('include/xtempl.php');
include('classes/editpage.php');
include("classes/searchclause.php");

add_nocache_headers();

RunnerPage::reloginAndLogoutProcess("E");

if( postvalue("editType") != "inline" && postvalue("editType") != EDIT_POPUP )
{
	$_SESSION["MyURL"] = $_SERVER["SCRIPT_NAME"]."?editid1=".$_POST["editid1"];
	if( !isLogged() )
	{ 
		redirectToLogin();
	}
}




$layout = new TLayout("edit2", "RoundedBlue_white", "MobileBlue_white");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["all"] = array();
$layout->containers["all"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"edit" );
$layout->containers["edit"] = array();
$layout->containers["edit"][] = array("name"=>"editheader", 
	"block"=>"editheader", "substyle"=>2  );

$layout->containers["edit"][] = array("name"=>"message", 
	"block"=>"message_block", "substyle"=>1  );

$layout->containers["edit"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
$layout->containers["fields"][] = array("name"=>"editfields", 
	"block"=>"", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"editbuttons", 
	"block"=>"editbuttons", "substyle"=>2  );

$layout->skins["fields"] = "fields";


$layout->skins["edit"] = "1";


$layout->skins["all"] = "empty";

$layout->blocks["top"][] = "all";
$page_layouts["inout_edit"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");





$returnJSON = array();

if( sizeof($_POST) == 0 && postvalue('ferror') && !postvalue("editid1") )
{
	$returnJSON['success'] = false;
	$returnJSON['message'] = "Error occurred";
	$returnJSON['fatalError'] = true;
	echo printJSON($returnJSON);
	exit();
} 
if( sizeof($_POST) == 0 && postvalue('ferror') && postvalue("editid1") )
{
	if( postvalue('fly') )
	{
		echo -1;
		exit();
	}
	else 
		$_SESSION["message_edit"] = "<< "."Error occurred"." >>";
}

/////////////////////////////////////////////////////////////
//init variables
/////////////////////////////////////////////////////////////
if(postvalue("editType")=="inline")
	$inlineedit = EDIT_INLINE;
elseif(postvalue("editType")==EDIT_POPUP)
	$inlineedit = EDIT_POPUP;
else
	$inlineedit = EDIT_SIMPLE;

	
$xt = new Xtempl();	
	
$id = postvalue("id");
if(intval($id)==0)
	$id = 1;
// assign an id
$xt->assign("id", $id);


if($inlineedit == EDIT_INLINE)
	$templatefile = GetTemplateName("inout", "inline_edit");
else 
	$templatefile = GetTemplateName("inout", "edit");


$keys = array();
$savedKeys = array();
$keysChanged = false;
$keys["ACCT_BOOK_ID"] = postvalue("editid1");
$savedKeys["ACCT_BOOK_ID"] = postvalue("editid1");

	
//array of params for classes
$params = array("pageType" => PAGE_EDIT);
$params["id"] = $id;
$params["keys"] = $keys;
$params['tName'] = $strTableName;
$params['xt'] = &$xt;
$params['mode'] = $inlineedit;
$params['locale_info'] = $locale_info;
$params['templatefile'] = $templatefile;
$params['pageEditLikeInline'] = $inlineedit == EDIT_INLINE;
//Get array of tabs for edit page
$params['useTabsOnEdit'] = $gSettings->useTabsOnEdit();
if($params['useTabsOnEdit'])
	$params['arrEditTabs'] = $gSettings->getEditTabs();

$pageObject = new EditPage($params);
$pageObject->init();


//	For ajax request 
if($_REQUEST["action"] != "")
{
	if($pageObject->lockingObj)
	{
		$arrkeys = explode("&",urldecode(refine($_REQUEST["keys"])));
		foreach($arrkeys as $ind=>$val)
			$arrkeys[$ind]=urldecode($val);
		
		if($_REQUEST["action"]=="unlock")
		{
			$pageObject->lockingObj->UnlockRecord($strTableName,$arrkeys,$_REQUEST["sid"]);
			exit();	
		}
		else if($_REQUEST["action"]=="lockadmin" && (IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP))
		{
			$pageObject->lockingObj->UnlockAdmin($strTableName,$arrkeys,$_REQUEST["startEdit"]=="yes");
			if($_REQUEST["startEdit"]=="no")
				echo "unlock";
			else if($_REQUEST["startEdit"]=="yes")
				echo "lock";
			exit();	
		}
		else if($_REQUEST["action"]=="confirm")
		{
			$lockMessage = "";
			if(!$pageObject->lockingObj->ConfirmLock($strTableName, $arrkeys, $lockMessage))
				echo $lockMessage;
			exit();
		}
	}
	else
		exit();
}

$status = "";
$message = "";
$mesClass = "rnr-error";
$usermessage = "";
$strWhereClause = "";

$showValues = array();
$showRawValues = array();
$showFields = array();
$showDetailKeys = array();
$next = array();
$prev = array();
$enableCtrlsForEditing = true;
$error_happened = false;
$readevalues = false;
$IsSaved = false;

$auditObj = GetAuditObject($strTableName);

// SearchClause class stuff
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);


//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;


if($pageObject->lockingObj)
{
	$system_attrs = "style='display:none;'";
	$system_message = "";
}

if ($inlineedit!=EDIT_INLINE)
{
	// add button events if exist
	$pageObject->addButtonHandlers();
}

//	Before Process event
if($eventObj->exists("BeforeProcessEdit"))
	$eventObj->BeforeProcessEdit($conn, $pageObject);


//For show detail tables on master page edit
if($inlineedit!=EDIT_INLINE)
{
	$dpParams = array();
	if($pageObject->isShowDetailTables && !isMobile())
	{
		$ids = $id;
		$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}
}
/////////////////////////////////////////////////////////////
//	process entered data, read and save
/////////////////////////////////////////////////////////////

// proccess captcha
if ($inlineedit!=EDIT_INLINE)
	if($pageObject->captchaExists())
		$pageObject->doCaptchaCode();	
		
if(@$_POST["a"] == "edited")
{
	$strWhereClause = whereAdd($strWhereClause,KeyWhere($keys));
		$hasDenyDuplicatesFields = $pageObject->pSet->editPageHasDenyDuplicatesFields();
	$oldValuesRead = false;	
	if($eventObj->exists("AfterEdit") || $eventObj->exists("BeforeEdit") || $auditObj || $pageObject->isTableGeoUpdatable()
		|| $globalEvents->exists("IsRecordEditable", $strTableName) || $hasDenyDuplicatesFields)
	{
		//	read old values
		$rsold = db_query($gQuery->gSQLWhere($strWhereClause), $conn);
		$dataold = $pageObject->cipherer->DecryptFetchedArray($rsold);
		$oldValuesRead = true;
	}
	if($globalEvents->exists("IsRecordEditable", $strTableName))
	{
		if(!$globalEvents->IsRecordEditable($dataold, true, $strTableName))
			return SecurityRedirect($inlineedit);
	}
	$evalues = array();
	$efilename_values = array();
	$blobfields = array();
	

//	processing ACCT_BOOK_ID - begin
	$condition = 1;

	if($condition)
	{
		$control_ACCT_BOOK_ID = $pageObject->getControl("ACCT_BOOK_ID", $id);
		$control_ACCT_BOOK_ID->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		//	update key value
		if($control_ACCT_BOOK_ID->getWebValue()!==false)
			$keys["ACCT_BOOK_ID"] = $control_ACCT_BOOK_ID->getWebValue();
	}
//	processing ACCT_BOOK_ID - end
//	processing EVENT_DATE - begin
	$condition = 1;

	if($condition)
	{
		$control_EVENT_DATE = $pageObject->getControl("EVENT_DATE", $id);
		$control_EVENT_DATE->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing EVENT_DATE - end
//	processing CUST_NAME - begin
	$condition = 1;

	if($condition)
	{
		$control_CUST_NAME = $pageObject->getControl("CUST_NAME", $id);
		$control_CUST_NAME->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing CUST_NAME - end
//	processing ACC_NBR - begin
	$condition = 1;

	if($condition)
	{
		$control_ACC_NBR = $pageObject->getControl("ACC_NBR", $id);
		$control_ACC_NBR->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ACC_NBR - end
//	processing PRE_BALANCE - begin
	$condition = 1;

	if($condition)
	{
		$control_PRE_BALANCE = $pageObject->getControl("PRE_BALANCE", $id);
		$control_PRE_BALANCE->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing PRE_BALANCE - end
//	processing CHARGE - begin
	$condition = 1;

	if($condition)
	{
		$control_CHARGE = $pageObject->getControl("CHARGE", $id);
		$control_CHARGE->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing CHARGE - end
//	processing TRANSFER_MODE - begin
	$condition = 1;

	if($condition)
	{
		$control_TRANSFER_MODE = $pageObject->getControl("TRANSFER_MODE", $id);
		$control_TRANSFER_MODE->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing TRANSFER_MODE - end

	foreach($keys as $i=>$key)
	{
		if($key != $savedKeys[$i]) 
		{
			$keysChanged = true;
			break;
		}
	}


	foreach($efilename_values as $ekey=>$value)
		$evalues[$ekey] = $value;


//	handle locking stuff before saving the record
	if($pageObject->lockingObj)
	{
		$lockmessage = "";
		if( $keysChanged )
		{
			$lockResult = $pageObject->lockingObj->ConfirmLock($strTableName,$savedKeys,$lockmessage);
			if( $lockResult )
				$lockResult = $pageObject->lockingObj->LockRecord($strTableName, $keys );
		}
		else
		{
			$lockResult = $pageObject->lockingObj->ConfirmLock($strTableName,$savedKeys,$lockmessage);
		}
		if( !$lockResult )
		{
			$enableCtrlsForEditing = false;
			$system_attrs = "style='display:block;'";
			if($inlineedit == EDIT_INLINE)
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$lockmessage = $pageObject->lockingObj->GetLockInfo($strTableName,$savedKeys,false,$id);
				
				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				$returnJSON['enableCtrls'] = $enableCtrlsForEditing;
				$returnJSON['confirmTime'] = $pageObject->lockingObj->ConfirmTime;
				echo printJSON($returnJSON);
				exit();
			}
			else
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$system_message = $pageObject->lockingObj->GetLockInfo($strTableName,$savedKeys,true,$id);
				else
					$system_message = $lockmessage;
			}
			$status = "DECLINED";
			$readevalues = true;
		}
	}
	
	if($readevalues==false)
	{
	//	do event
		$retval = true;
		if($eventObj->exists("BeforeEdit"))
			$retval=$eventObj->BeforeEdit($evalues,$strWhereClause,$dataold,$keys,$usermessage,(bool)$inlineedit, $pageObject);
		
		if($hasDenyDuplicatesFields && $retval)
		{
			$changedValues = array();
			foreach($evalues as $fieldName => $value)
			{
				if($dataold[$fieldName] != $value)
				{
					$changedValues[$fieldName] = $value;
				}
			}
			//check if some values are duplicated for the fields not allowing duplicates
			$retval = !$pageObject->hasDeniedDuplicateValues($changedValues, $usermessage);
		}
		
		// if get save data and user is logged and not check permission
		if ($evalues && !CheckTablePermissions($strTableName, "E") && isLogged()) {
			$retval = false;
			$usermessage = 'You have no permissions to complete this action.';
		}
		
		// if get save data and user is not logged or guest
		if ($evalues && ((!CheckTablePermissions($strTableName, "E") && isLoggedAsGuest()) || !isLogged())) {
			$retval = false;
			$usermessage = "Your session has expired." . "<a href='#' id='loginButtonContinue" . $pageObject->id . "'>" . "Login" . "</a>" . " to save data.";
		}
			
		if($retval && $pageObject->isCaptchaOk)
		{		
			if($inlineedit!=EDIT_INLINE)
				$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
		
			//set updated lat-lng values for all map fileds with 'UpdateLatLng' ticked	
            if( $pageObject->isTableGeoUpdatable() ) 			
				$pageObject->setUpdatedLatLng( $evalues, $dataold );	
			
			$customEditResult = true;
			if($eventObj->exists("CustomEdit"))
				$customEditResult = $eventObj->CustomEdit($evalues, $strWhereClause, $dataold, $keys, $usermessage, (bool)$inlineedit, $pageObject);
			
			if(!$customEditResult)
			{
				// custom procedure worked
				$IsSaved = ($usermessage == "");
			}
			else
			{
				$IsSaved = DoUpdateRecord($strOriginalTableName,$evalues,$blobfields,$strWhereClause,$id,$pageObject, $pageObject->cipherer);
				$usermessage = $message;
			}

			if($IsSaved)
			{	
// Give possibility to all edit controls to clean their data				
//	processing ACCT_BOOK_ID - begin
				$condition = 1;
			
				if($condition)
				{
					$control_ACCT_BOOK_ID->afterSuccessfulSave();
				}
//	processing ACCT_BOOK_ID - end
//	processing EVENT_DATE - begin
				$condition = 1;
			
				if($condition)
				{
					$control_EVENT_DATE->afterSuccessfulSave();
				}
//	processing EVENT_DATE - end
//	processing CUST_NAME - begin
				$condition = 1;
			
				if($condition)
				{
					$control_CUST_NAME->afterSuccessfulSave();
				}
//	processing CUST_NAME - end
//	processing ACC_NBR - begin
				$condition = 1;
			
				if($condition)
				{
					$control_ACC_NBR->afterSuccessfulSave();
				}
//	processing ACC_NBR - end
//	processing PRE_BALANCE - begin
				$condition = 1;
			
				if($condition)
				{
					$control_PRE_BALANCE->afterSuccessfulSave();
				}
//	processing PRE_BALANCE - end
//	processing CHARGE - begin
				$condition = 1;
			
				if($condition)
				{
					$control_CHARGE->afterSuccessfulSave();
				}
//	processing CHARGE - end
//	processing TRANSFER_MODE - begin
				$condition = 1;
			
				if($condition)
				{
					$control_TRANSFER_MODE->afterSuccessfulSave();
				}
//	processing TRANSFER_MODE - end
				
				//	after edit event
				if($pageObject->lockingObj)
				{
					if( $keysChanged )
					{
						//remove from the locking table a record with the old keys 
						$pageObject->lockingObj->UnlockRecord($strTableName, $savedKeys, "");
					}
					
					if( $inlineedit == EDIT_INLINE || $inlineedit == EDIT_POPUP && !$pageObject->pSet->useMoveNext() )
					{
						$pageObject->lockingObj->UnlockRecord($strTableName, $keys , "");
					}

				}
				if($auditObj || $eventObj->exists("AfterEdit"))
				{
					foreach($dataold as $idx=>$val)
					{
						if(!array_key_exists($idx,$evalues))
							$evalues[$idx] = $val;
					}
				}

				if($auditObj)
					$auditObj->LogEdit($strTableName,$evalues,$dataold,$keys);
				if($eventObj->exists("AfterEdit"))
					$eventObj->AfterEdit($evalues,KeyWhere($keys),$dataold,$keys,(bool)$inlineedit, $pageObject);
							
				$mesClass = "";
			}
			else
			{
				$message = $usermessage;
				$readevalues = true;
				$status = "DECLINED";
			}	
		}
		else
		{
			$message = $usermessage;
			$readevalues = true;
			$status = "DECLINED";
		}
	}
//	saving was not successful
	if($readevalues)
	{
		if($pageObject->lockingObj && $keysChanged)
		{	
		// free the record with new key values locked before saving
			$pageObject->lockingObj->UnlockRecord($strTableName, $keys , "");
		}
		
		$keys = $savedKeys;
	}
}



if($message)
	$message = "<div class='message ".$mesClass."'>".$message."</div>";


// redirect after saving to avoid POSTDATA resending 
if ($IsSaved && no_output_done() && $inlineedit == EDIT_SIMPLE)
{
	// saving message
	$_SESSION["message_edit"] = ($message ? $message : "");
	// key get query
	$keyGetQ = "";
		$keyGetQ.="editid1=".rawurldecode($keys["ACCT_BOOK_ID"])."&";
	// cut last &
	$keyGetQ = substr($keyGetQ, 0, strlen($keyGetQ)-1);	
	// redirect
	HeaderRedirect("inout", $pageObject->getPageType(), $keyGetQ);
	// turned on output buffering, so we need to stop script
	exit();
}
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if ($inlineedit == EDIT_SIMPLE && isset($_SESSION["message_edit"]))
{
	$message = $_SESSION["message_edit"];
	unset($_SESSION["message_edit"]);
}
// lock record before printing controls
if($pageObject->lockingObj && !( $IsSaved  && ( $inlineedit == EDIT_INLINE || $inlineedit == EDIT_POPUP ) ))
{
	$enableCtrlsForEditing = $pageObject->lockingObj->LockRecord($strTableName, $keys);
	if(!$enableCtrlsForEditing)
	{
		if($inlineedit == EDIT_INLINE)
		{
			if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
				$lockmessage = $pageObject->lockingObj->GetLockInfo($strTableName,$keys,false,$id);
			else
				$lockmessage = $pageObject->lockingObj->LockUser;
			$returnJSON['success'] = false;
			$returnJSON['message'] = $lockmessage;
			$returnJSON['enableCtrls'] = $enableCtrlsForEditing;
			$returnJSON['confirmTime'] = $pageObject->lockingObj->ConfirmTime;
			echo printJSON($returnJSON);
			exit();
		}
		
		$system_attrs = "style='display:block;'";
		$system_message = $pageObject->lockingObj->LockUser;
		
		if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
		{
			$rb = $pageObject->lockingObj->GetLockInfo($strTableName,$keys,true,$id);
			if($rb!="")
				$system_message = $rb;
		}
	}
}

if($pageObject->lockingObj && $inlineedit!=EDIT_INLINE)
	$pageObject->body["begin"] .='<div class="rnr-locking" '.$system_attrs.'>'.$system_message.'</div>';


$pageObject->setKeys($keys);
$pageObject->readEditValues = $readevalues;
if($readevalues)
	$pageObject->editValues = $evalues;

//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();
if(!$data)
{
	if($inlineedit == EDIT_SIMPLE)
	{
		HeaderRedirect("inout", "list", "a=return");
		exit();
	}
	else
		$data = array();
}


if($globalEvents->exists("IsRecordEditable", $strTableName))
{
	if(!$globalEvents->IsRecordEditable($data, true, $strTableName) && $inlineedit != EDIT_INLINE)
	{
		return SecurityRedirect($inlineedit);
	}
}


//global variable use in BuildEditControl function
//	show readonly fields

	$xt->assign("show_key1", $pageObject->showDBValue("ACCT_BOOK_ID", $data));


if($readevalues)
{
	$data["ACCT_BOOK_ID"] = $evalues["ACCT_BOOK_ID"];
	$data["EVENT_DATE"] = $evalues["EVENT_DATE"];
	$data["CUST_NAME"] = $evalues["CUST_NAME"];
	$data["ACC_NBR"] = $evalues["ACC_NBR"];
	$data["PRE_BALANCE"] = $evalues["PRE_BALANCE"];
	$data["CHARGE"] = $evalues["CHARGE"];
	$data["TRANSFER_MODE"] = $evalues["TRANSFER_MODE"];
}

/////////////////////////////////////////////////////////////
//	assign values to $xt class, prepare page for displaying
/////////////////////////////////////////////////////////////
//Basic includes js files
$includes = "";
//javascript code
	
if($inlineedit != EDIT_INLINE)
{
	if($inlineedit == EDIT_SIMPLE)
	{
		$includes .= GetBaseScriptsForPage(false);
		if (!isMobile())
			$includes.= "<div id=\"search_suggest".$id."\"></div>\r\n";
			
		$pageObject->body["begin"].= $includes;
	}	

	if(!$pageObject->isAppearOnTabs("ACCT_BOOK_ID"))
		$xt->assign("ACCT_BOOK_ID_fieldblock",true);
	else
		$xt->assign("ACCT_BOOK_ID_tabfieldblock",true);
	$xt->assign("ACCT_BOOK_ID_label",true);
	if(isEnableSection508())
		$xt->assign_section("ACCT_BOOK_ID_label","<label for=\"".GetInputElementId("ACCT_BOOK_ID", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("EVENT_DATE"))
		$xt->assign("EVENT_DATE_fieldblock",true);
	else
		$xt->assign("EVENT_DATE_tabfieldblock",true);
	$xt->assign("EVENT_DATE_label",true);
	if(isEnableSection508())
		$xt->assign_section("EVENT_DATE_label","<label for=\"".GetInputElementId("EVENT_DATE", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("CUST_NAME"))
		$xt->assign("CUST_NAME_fieldblock",true);
	else
		$xt->assign("CUST_NAME_tabfieldblock",true);
	$xt->assign("CUST_NAME_label",true);
	if(isEnableSection508())
		$xt->assign_section("CUST_NAME_label","<label for=\"".GetInputElementId("CUST_NAME", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("ACC_NBR"))
		$xt->assign("ACC_NBR_fieldblock",true);
	else
		$xt->assign("ACC_NBR_tabfieldblock",true);
	$xt->assign("ACC_NBR_label",true);
	if(isEnableSection508())
		$xt->assign_section("ACC_NBR_label","<label for=\"".GetInputElementId("ACC_NBR", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("PRE_BALANCE"))
		$xt->assign("PRE_BALANCE_fieldblock",true);
	else
		$xt->assign("PRE_BALANCE_tabfieldblock",true);
	$xt->assign("PRE_BALANCE_label",true);
	if(isEnableSection508())
		$xt->assign_section("PRE_BALANCE_label","<label for=\"".GetInputElementId("PRE_BALANCE", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("CHARGE"))
		$xt->assign("CHARGE_fieldblock",true);
	else
		$xt->assign("CHARGE_tabfieldblock",true);
	$xt->assign("CHARGE_label",true);
	if(isEnableSection508())
		$xt->assign_section("CHARGE_label","<label for=\"".GetInputElementId("CHARGE", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("TRANSFER_MODE"))
		$xt->assign("TRANSFER_MODE_fieldblock",true);
	else
		$xt->assign("TRANSFER_MODE_tabfieldblock",true);
	$xt->assign("TRANSFER_MODE_label",true);
	if(isEnableSection508())
		$xt->assign_section("TRANSFER_MODE_label","<label for=\"".GetInputElementId("TRANSFER_MODE", $id, PAGE_EDIT)."\">","</label>");
		

	//$xt->assign('editForm',true);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	if(!@$_SESSION[$strTableName."_noNextPrev"] && $inlineedit != EDIT_INLINE)
	{
		$next = array();
		$prev = array();
		$pageObject->getNextPrevRecordKeys($data,"Edit",$next,$prev);
	}
	$nextlink = $prevlink = "";
	if(count($next))
	{
		$xt->assign("next_button", true);
				$nextlink.= "editid1=".runner_htmlspecialchars(rawurlencode($next[1-1]));
		$xt->assign("nextbutton_attrs", "id=\"nextButton".$id."\" align=\"absmiddle\"");
	}
	else if( count($prev) )
	{
		$xt->assign("next_button", true);
		$xt->assign("nextbutton_class", "rnr-invisible-button");		
	}
	else
		$xt->assign("next_button", false);
	
	if(count($prev))
	{
		$xt->assign("prev_button", true);
				$prevlink.= "editid1=".runner_htmlspecialchars(rawurlencode($prev[1-1]));
		$xt->assign("prevbutton_attrs", "id=\"prevButton".$id."\" align=\"absmiddle\"");
	}
	else if( count($next) ) 
	{
		$xt->assign("prev_button", true);
		$xt->assign("prevbutton_class", "rnr-invisible-button");
	}
	else
		$xt->assign("prev_button", false);
	$xt->assign("resetbutton_attrs",'id="resetButton'.$id.'"');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//End Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	if($inlineedit == EDIT_SIMPLE)
	{
		$xt->assign("back_button",true);
		$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
		$xt->assign("mbackbutton_attrs","id=\"extraBackButton".$id."\"");
	}
	if($inlineedit == EDIT_POPUP)
	{
		$xt->assign("close_button",true);
		$xt->assign("closebutton_attrs","id=\"closeButton".$id."\"");
	}
	// onmouseover event, for changing focus. Needed to proper submit form
	//$onmouseover = "this.focus();";
	//$onmouseover = 'onmouseover="'.$onmouseover.'"';
	
	$xt->assign("save_button",true);
	if(!$enableCtrlsForEditing)
		$xt->assign("savebutton_attrs", "id=\"saveButton".$id."\" type=\"disabled\" ");
	else
		$xt->assign("savebutton_attrs", "id=\"saveButton".$id."\"");
		
	$xt->assign("reset_button",true);

	$permis = $pageObject->getPermissions();	
	if($pageObject->pSet->hasViewPage() && $permis['search'])
	{
		$xt->assign("view_page_button", true);
		$xt->assign("view_page_button_attrs","id=\"viewPageButton".$id."\"");
	}
}

$xt->assign("message_block",true);
$xt->assign("message",$message);
if(!strlen($message))
{
	$xt->displayBrickHidden("message");
}
/////////////////////////////////////////////////////////////
//process readonly and auto-update fields
/////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////
//	return new data to the List page or report an error
/////////////////////////////////////////////////////////////
if (postvalue("a")=="edited" && ($inlineedit == EDIT_INLINE || $inlineedit == EDIT_POPUP))
{
	if(!$data)
		$data = $evalues;
	
	//Preparation   view values

//	detail tables

	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["ACCT_BOOK_ID"]));


//	ID - 
	$value = $pageObject->showDBValue("ID", $data, $keylink);
	$showValues["ID"] = $value;
	$showFields[] = "ID";
		$showRawValues["ID"] = substr($data["ID"],0,100);

//	ACCT_BOOK_ID - 
	$value = $pageObject->showDBValue("ACCT_BOOK_ID", $data, $keylink);
	$showValues["ACCT_BOOK_ID"] = $value;
	$showFields[] = "ACCT_BOOK_ID";
		$showRawValues["ACCT_BOOK_ID"] = substr($data["ACCT_BOOK_ID"],0,100);

//	EVENT_DATE - 
	$value = $pageObject->showDBValue("EVENT_DATE", $data, $keylink);
	$showValues["EVENT_DATE"] = $value;
	$showFields[] = "EVENT_DATE";
		$showRawValues["EVENT_DATE"] = substr($data["EVENT_DATE"],0,100);

//	CUST_NAME - 
	$value = $pageObject->showDBValue("CUST_NAME", $data, $keylink);
	$showValues["CUST_NAME"] = $value;
	$showFields[] = "CUST_NAME";
		$showRawValues["CUST_NAME"] = substr($data["CUST_NAME"],0,100);

//	ACC_NBR - 
	$value = $pageObject->showDBValue("ACC_NBR", $data, $keylink);
	$showValues["ACC_NBR"] = $value;
	$showFields[] = "ACC_NBR";
		$showRawValues["ACC_NBR"] = substr($data["ACC_NBR"],0,100);

//	PRE_BALANCE - 
	$value = $pageObject->showDBValue("PRE_BALANCE", $data, $keylink);
	$showValues["PRE_BALANCE"] = $value;
	$showFields[] = "PRE_BALANCE";
		$showRawValues["PRE_BALANCE"] = substr($data["PRE_BALANCE"],0,100);

//	CHARGE - 
	$value = $pageObject->showDBValue("CHARGE", $data, $keylink);
	$showValues["CHARGE"] = $value;
	$showFields[] = "CHARGE";
		$showRawValues["CHARGE"] = substr($data["CHARGE"],0,100);

//	TRANSFER_MODE - 
	$value = $pageObject->showDBValue("TRANSFER_MODE", $data, $keylink);
	$showValues["TRANSFER_MODE"] = $value;
	$showFields[] = "TRANSFER_MODE";
		$showRawValues["TRANSFER_MODE"] = substr($data["TRANSFER_MODE"],0,100);
/////////////////////////////////////////////////////////////
//	start inline output
/////////////////////////////////////////////////////////////
	
	if($IsSaved)
	{
		$returnJSON['success'] = true;
		$returnJSON['keys'] = $pageObject->jsKeys;
		$returnJSON['keyFields'] = $pageObject->keyFields;
		$returnJSON['vals'] = $showValues;
		$returnJSON['fields'] = $showFields;
		$returnJSON['rawVals'] = $showRawValues;
		$returnJSON['detKeys'] = $showDetailKeys;
		$returnJSON['userMess'] = $usermessage;
		$returnJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
		
		if($inlineedit==EDIT_POPUP && isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
			$returnJSON['hideCaptcha'] = true;
			
		if($globalEvents->exists("IsRecordEditable", $strTableName))
		{
			if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
				$returnJSON['nonEditable'] = true;
		}
		
		if($inlineedit == EDIT_POPUP)
		{
			$xt->assign("header", false);
			$xt->assign("footer", false);
			$xt->assign("body", $pageObject->body);
			
			$xt->hideAllBricksExcept( array("editheader") );
			$xt->prepare_template($pageObject->templatefile);
			
			$returnJSON['html'] = $xt->fetch_loaded("body");
			$returnJSON['message'] = $message;
		}
	}
	else
	{
		$returnJSON['success'] = false;
		$returnJSON['message'] = $message;
		
		if($pageObject->lockingObj)
			$returnJSON['lockMessage'] = $system_message;
		
		if($inlineedit == EDIT_POPUP && !$pageObject->isCaptchaOk)
			$returnJSON['captcha'] = false;
	}
	echo printJSON($returnJSON);
	exit();
} 
/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////
//	validation stuff
$control = array();
$controlFields = $pageObject->editFields;

if( $inlineedit == EDIT_INLINE ) //#9069
	$pageObject->removeHiddenColumnsFromInlineFields( $controlFields,  postvalue("screenWidth"), postvalue("screenHeight"), postvalue("orientation") );
	
foreach($controlFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if (!$detailKeys || !in_array($fName, $detailKeys))
	{
		$control[$gfName] = array();
		$parameters = array();
		$parameters["id"] = $id;
		$parameters["ptype"] = PAGE_EDIT;
		$parameters["field"] = $fName;
		$parameters["data"] = $data;
		if(!IsNumberType($pageObject->pSet->getFieldType($fName)) || is_null(@$data[$fName]))
		{
			$parameters["value"] = @$data[$fName];
		}
		else
		{
			$parameters["value"] = str_replace(".",$locale_info["LOCALE_SDECIMAL"],@$data[$fName]);
		}
		$parameters["pageObj"] = $pageObject;
		
		//	Begin Add validation
		$arrValidate = $pageObject->pSet->getValidation($fName);
		$parameters["validate"] = $arrValidate;
		//	End Add validation	
		$additionalCtrlParams = array();
		$additionalCtrlParams["disabled"] = !$enableCtrlsForEditing;
		$parameters["additionalCtrlParams"] = $additionalCtrlParams;
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	
	if($inlineedit == EDIT_INLINE)
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))
			$parameters["mode"]="inline_edit";
		$controls["controls"]['mode'] = "inline_edit";
	}
	else{
			if (!$detailKeys || !in_array($fName, $detailKeys))
				$parameters["mode"] = "edit";
			$controls["controls"]['mode'] = "edit";
		}
	
	if(!$detailKeys || !in_array($fName, $detailKeys))
	{
		AssignFunction($control[$gfName], "xt_buildeditcontrol", $parameters);
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	}
	elseif($detailKeys && in_array($fName, $detailKeys))
	{
		$controls["controls"]['value'] = @$data[$fName];
	}
		
	// category control field
	$strCategoryControl = $pageObject->getMainLookupFieldNameForDependant($fName);
	
	if($strCategoryControl !== "" && in_array($strCategoryControl, $controlFields))
	{
		$vals = array($fName => @$data[$fName],$strCategoryControl => @$data[$strCategoryControl]);
	}
	else
	{
		$vals = array($fName => @$data[$fName]);
	}
		
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
		$controls["controls"]['preloadData'] = $preload;
	
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker
	if($pageObject->pSet->getEditFormat($fName) == 'Time')	
		$pageObject->fillTimePickSettings($fName, $data[$fName]);
	
	if($pageObject->pSet->getViewFormat($fName) == FORMAT_MAP)	
		$pageObject->googleMapCfg['isUseGoogleMap'] = true;
		
	if($detailKeys && in_array($fName, $detailKeys) && array_key_exists($fName, $data))
	{
		$value = $pageObject->showDBValue($fName, $data);
		
		$xt->assign($gfName."_editcontrol",$value);
	}
}
//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $pageObject->jsKeys;
$pageObject->jsSettings['tableSettings'][$strTableName]['keyFields'] = $pageObject->keyFields;
$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
if($pageObject->lockingObj)
{
	$pageObject->jsSettings['tableSettings'][$strTableName]["sKeys"] = implode("&", $savedKeys);;
	$pageObject->jsSettings['tableSettings'][$strTableName]["enableCtrls"] = $enableCtrlsForEditing;
	$pageObject->jsSettings['tableSettings'][$strTableName]["confirmTime"] = $pageObject->lockingObj->ConfirmTime;
}

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && $inlineedit!=EDIT_INLINE && !isMobile())
{
	if(count($dpParams['ids']))
	{
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		$xt->assign("detail_tables",true);	
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
	$pageObject->flyId = $ids+1;
	
	global $useFlashChartLibrary;
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		if ($dpParams['type'][$d] == "chart")
		{
			$options = array();
			//array of params for classes
			$options["xt"] = new Xtempl();
			$options["mode"] = LIST_DETAILS;
			$options["pageType"] = PAGE_CHART;
			$options["masterPageType"] = PAGE_VIEW;
			$options["mainMasterPageType"] = PAGE_VIEW;
			$options['masterTable'] = "inout";
			$options['firstTime'] = 1;
			
			$strTableName = $dpParams['strTableNames'][$d];
			include_once("include/".GetTableURL($strTableName)."_settings.php");
			if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
			{
				$strTableName = "inout";
				continue;
			}
			
			$layout = GetPageLayout(GoodFieldName($strTableName), PAGE_CHART);
			if($layout)
			{
				$pageObject->AddCSSFile($layout->getCSSFiles(isRTL(), isMobile()));
			}

			$options['id'] = $dpParams['ids'][$d];
			$options['flyId'] = $pageObject->genId()+1;
			$options['tName'] = $strTableName;
			$options['pageType'] = PAGE_CHART;
			$options['shortTableName'] = GetTableURL($strTableName);
			$_params["chartname"] = GetTableURL($strTableName);
			$_params["table"] = $strTableName;
			$_params["ctype"] = $dpParams['params'][$d];
			$_params["singlePage"] = true;
			$_params["id"] = $options['flyId'];
			$options["xt"]->assign_function($options['shortTableName']."_chart","xt_showchart", $_params);

			$chartPageObject = new RunnerPage($options);
			$chartPageObject->init();
			$options["xt"]->assign("chart_block",true);
			$options["xt"]->assign("asearch_link",true);
			$options["xt"]->assign("search_records_block",true);
			$options["xt"]->assign("exportpdflink_attrs","onclick='chart.saveAsPDF();'");
			$options["xt"]->assign("searchform_showall",true);
			$options["xt"]->assign("showallbutton_attrs","onclick=\"window.location.href='".GetTableLink($options['shortTableName'], "chart", "a=showall")."';\"");
			$options["xt"]->assign("advsearchlink_attrs", "id=\"advButton".$id."\"");
			$options["xt"]->assign("style_block",true);
			$options["xt"]->assign("shiftstyle_block", true);
			$chartPageObject->addControlsJSAndCSS();
			$chartPageObject->fillSetCntrlMaps();
			$chartPageObject->body["begin"] = '';
			$chartPageObject->body["end"] = '';
			$options["xt"]->assign("body",$chartPageObject->body);	
			$options["xt"]->assign("style_block",true);
			$options["xt"]->assign("guestlink_block", false);
			$options["xt"]->assign("container_toplinks", false);
			$options["xt"]->assign("container_search", false);
			$options["xt"]->assign("container_left", false);
			
			$mkr = 1;
			foreach($mKeys[$strTableName] as $mk)
			{
				$options['masterKeysReq'][$mkr++] = $data[$mk];
			}
			
			$masterKeysReq = $options['masterKeysReq'];
			if(count($masterKeysReq))
			{
					//	copy keys to session
					for($i = 1;$i<=count($masterKeysReq);$i++)
							$_SESSION[$strTableName."_masterkey".$i]= $masterKeysReq[$i];

					if(isset($_SESSION[$strTableName."_masterkey".$i]))
							unset($_SESSION[$strTableName."_masterkey".$i]);
			}
			
			//add detail settings to master settings
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $chartPageObject->jsSettings['tableSettings'][$strTableName];
			$pageObject->AddJSFile('libs/js/AnyChart.js');
			$pageObject->AddJSFile('libs/js/AnyChartHTML5.js');
			$dControlsMap[$strTableName] = $chartPageObject->controlsMap;
			$dControlsMap[$strTableName]['useFlashChartLibrary'] = $useFlashChartLibrary;
			$dViewControlsMap[$strTableName] = $chartPageObject->viewControlsMap;
			foreach($chartPageObject->jsSettings['global']['shortTNames'] as $keySet=>$val)
			{
					if(!array_key_exists($keySet,$pageObject->settingsMap["globalSettings"]['shortTNames']))
							$pageObject->settingsMap["globalSettings"]['shortTNames'][$keySet] = $val;
			}

			//Add detail's js files to master's files
			$pageObject->copyAllJSFiles($chartPageObject->grabAllJSFiles());

			//Add detail's css files to master's files
			$pageObject->copyAllCSSFiles($chartPageObject->grabAllCSSFiles());

			$xt->assign("details_".GoodFieldName($chartPageObject->tName), true);
			$xtParams = array("params" => $chartPageObject->templatefile);
			AssignMethod($xtParams, 'showPageDp', $chartPageObject);
			$xt->assign("displayDetailTable_".GoodFieldName($chartPageObject->tName), $xtParams);

			$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id'], 'pType'=>PAGE_CHART, 'pParam'=>$_params);
		} elseif ($dpParams['type'][$d] == "report")
		{
			include_once('classes/reportpage.php');
			$strTableName = $dpParams['strTableNames'][$d];	
			$options = array();
			//array of params for classes
			$options["xt"] = new Xtempl();
			$options["mode"] = LIST_DETAILS;
			$options["pageType"] = PAGE_REPORT;
			$options["masterPageType"] = PAGE_VIEW;
			$options["mainMasterPageType"] = PAGE_VIEW;
			$options['masterTable'] = "inout";
			$options['firstTime'] = 1;
			$options['tName'] = $strTableName;
			$options['id'] = $dpParams['ids'][$d];
			$options['flyId'] = $pageObject->genId()+1;
			$options['shortTableName'] = GetTableURL($strTableName);
			include_once("include/".GetTableURL($strTableName)."_settings.php");
			if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
			{
				$strTableName = "inout";
				continue;
			}
			$layout = GetPageLayout(GoodFieldName($strTableName), PAGE_REPORT);
			if($layout)
			{
				$pageObject->AddCSSFile($layout->getCSSFiles(isRTL(), isMobile()));
			}
			$mkr = 1;
			$masterkey = '';
			foreach($mKeys[$strTableName] as $mk)
			{
				$options['masterKeysReq'][$mkr++] = $data[$mk];
				$masterkey .= $data[$mk];
			}
			
			$options["pageSize"] = $_SESSION[$strTableName."_pagesize"];
			$options["masterkey"] = $masterkey;
			$options["crosstable_refresh"] = postvalue("crosstable_refresh");
			$reportPageObject = new ReportPage($options);
			$reportPageObject->init();
			$reportPageObject->prepareDetailForEditViewPage($dpParams['params'][$d]);

			//add detail settings to master settings
			$reportPageObject->addControlsJSAndCSS();
			$reportPageObject->fillSetCntrlMaps();
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $reportPageObject->jsSettings['tableSettings'][$strTableName];
			$dControlsMap[$strTableName] = $reportPageObject->controlsMap;
			$dViewControlsMap[$strTableName] = $reportPageObject->viewControlsMap;
			foreach($reportPageObject->jsSettings['global']['shortTNames'] as $keySet=>$val)
			{
					if(!array_key_exists($keySet,$pageObject->settingsMap["globalSettings"]['shortTNames']))
							$pageObject->settingsMap["globalSettings"]['shortTNames'][$keySet] = $val;
			}

			//Add detail's js files to master's files
			$pageObject->copyAllJSFiles($reportPageObject->grabAllJSFiles());

			//Add detail's css files to master's files
			$pageObject->copyAllCSSFiles($reportPageObject->grabAllCSSFiles());

			$xt->assign("details_".GoodFieldName($reportPageObject->tName), true);
			$xtParams = array("params" => $reportPageObject->templatefile);
			AssignMethod($xtParams, 'showPageDp', $reportPageObject);
			$xt->assign("displayDetailTable_".GoodFieldName($reportPageObject->tName), $xtParams);

			$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id'], 'pType'=>PAGE_REPORT);
		
		} else {
			$options = array();
			//array of params for classes
			$options["mode"] = LIST_DETAILS;
			$options["pageType"] = PAGE_LIST;
			$options["masterPageType"] = PAGE_EDIT;
			$options["mainMasterPageType"] = PAGE_EDIT;
			$options['masterTable'] = "inout";
			$options['firstTime'] = 1;
			
			$strTableName = $dpParams['strTableNames'][$d];
			
			if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")){
				$strTableName = "inout";
				continue;
			}
			
			include_once("include/".GetTableURL($strTableName)."_settings.php");
			
			$layout = GetPageLayout(GoodFieldName($strTableName), PAGE_LIST);
			if($layout)
			{
				$pageObject->AddCSSFile($layout->getCSSFiles(isRTL(), isMobile()));
			}	
			
			$options['xt'] = new Xtempl();
			$options['id'] = $dpParams['ids'][$d];
			$options['flyId'] = $pageObject->flyId++;
			$masterKeys = array();
			$mkr = 1;
			
			$options['masterKeysReq'] = array();
			foreach($mKeys[$strTableName] as $mk){
				$options['masterKeysReq'][$mkr] = $data[$mk];
				$masterKeys['masterKey'.$mkr] = $data[$mk];
				$mkr++;
			}
			
			$listPageObject = ListPage::createListPage($strTableName, $options);
			
			// prepare code
			$listPageObject->prepareForBuildPage();
			
			// show page
			if($listPageObject->isDispGrid())
			{
				//set page events
				foreach($listPageObject->eventsObject->events as $event => $name)
					$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
				
				//add detail settings to master settings
				$listPageObject->addControlsJSAndCSS();
				$listPageObject->fillSetCntrlMaps();
				
				$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
				
				foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
					$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
				}
				
				$dControlsMap[$strTableName] = $listPageObject->controlsMap;
				$dControlsMap[$strTableName]['masterKeys'] = $masterKeys;
				$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
				
				//Add detail's js files to master's files
				$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
				
				//Add detail's css files to master's files
				$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
					
				$xt->assign("details_".GoodFieldName($listPageObject->tName), true);
		


				$xtParams = array("params" => false);
				AssignMethod($xtParams, 'showPage', $listPageObject);

				$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
				
				$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id'], 'pType'=>PAGE_LIST);
			}
			$pageObject->flyId = $listPageObject->recId+1;
		}
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap; 
	$strTableName = "inout";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap

$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

if($inlineedit == EDIT_SIMPLE)
{
	// assign body end
	$pageObject->body['end'] = array();
	AssignMethod($pageObject->body['end'], "assignBodyEnd", $pageObject);
	
	$xt->assign("flybody", true);
	$xt->assign("body", $pageObject->body);
	
	$pageObject->assignFormFooterAndHeaderBricks( true );
}

if($inlineedit == EDIT_POPUP)
{
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("body",$pageObject->body);
}

$xt->assign("style_block",true);


$viewlink = "";
$viewkeys = array();
	$viewkeys["editid1"] = postvalue("editid1");
foreach($viewkeys as $key => $val)
{
	if($viewlink)
		$viewlink.="&";
	$viewlink.=$key."=".$val;
}
$xt->assign("viewlink_attrs","id=\"viewButton".$id."\" name=\"viewButton"
	.$id."\" onclick=\"window.location.href='".GetTableLink("inout", "view", $viewlink)."'\"");
if(CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search") && $inlineedit == EDIT_SIMPLE)
	$xt->assign("view_button",true);
else
	$xt->assign("view_button",false);

/////////////////////////////////////////////////////////////
//display the page
/////////////////////////////////////////////////////////////
if($eventObj->exists("BeforeShowEdit"))
	$eventObj->BeforeShowEdit($xt,$templatefile,$data, $pageObject);

if($inlineedit != EDIT_SIMPLE)
{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}
	
if($inlineedit == EDIT_POPUP || $inlineedit == EDIT_INLINE)
{
	if($globalEvents->exists("IsRecordEditable", $strTableName))
	{
		if(!$globalEvents->IsRecordEditable($data, true, $strTableName))
			return SecurityRedirect($inlineedit);
	}
}
if($inlineedit == EDIT_POPUP)
{
	$pageObject->displayAJAX($templatefile, $pageObject->flyId + 1);
	 exit(); // .net compatibility
}
elseif($inlineedit == EDIT_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($controlFields as $fName)
	{
		if($detailKeys && in_array($fName, $detailKeys))
			continue;
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");
	}
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON["additionalCSS"] = $pageObject->grabAllCSSFiles();
	echo printJSON($returnJSON); 
	exit(); // .net compatibility
}
else
	$pageObject->display($templatefile);
	
function SecurityRedirect($inlineedit)
{
	if($inlineedit == EDIT_INLINE)
	{
		echo printJSON(array("success" => false, "message" => "The record is not editable"));
		return;
	}
	
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	HeaderRedirect("menu", "message=expired");	
}
?>
