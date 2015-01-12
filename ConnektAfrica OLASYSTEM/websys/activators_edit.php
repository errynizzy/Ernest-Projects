<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/activators_variables.php");
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
$page_layouts["activators_edit"] = $layout;

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


$templatefile = GetTemplateName("activators", "edit");


$keys = array();
$savedKeys = array();
$keysChanged = false;
$keys["ID"] = postvalue("editid1");
$savedKeys["ID"] = postvalue("editid1");

	
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
		//	select only owned records
	$strWhereClause = whereAdd($strWhereClause,SecuritySQL("Edit"));
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
	

//	processing pos_type - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_pos_type = $pageObject->getControl("pos_type", $id);
		$control_pos_type->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing pos_type - end
//	processing Manager_Name - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Manager_Name = $pageObject->getControl("Manager_Name", $id);
		$control_Manager_Name->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Manager_Name - end
//	processing Manager_Number - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Manager_Number = $pageObject->getControl("Manager_Number", $id);
		$control_Manager_Number->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Manager_Number - end
//	processing Manager_Title - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Manager_Title = $pageObject->getControl("Manager_Title", $id);
		$control_Manager_Title->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Manager_Title - end
//	processing Activator_Name - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Activator_Name = $pageObject->getControl("Activator_Name", $id);
		$control_Activator_Name->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Activator_Name - end
//	processing Activator_Number - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Activator_Number = $pageObject->getControl("Activator_Number", $id);
		$control_Activator_Number->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Activator_Number - end
//	processing business_name - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_business_name = $pageObject->getControl("business_name", $id);
		$control_business_name->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing business_name - end
//	processing altenative_number - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_altenative_number = $pageObject->getControl("altenative_number", $id);
		$control_altenative_number->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing altenative_number - end
//	processing pos_iccid - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_pos_iccid = $pageObject->getControl("pos_iccid", $id);
		$control_pos_iccid->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing pos_iccid - end
//	processing registration_date - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_registration_date = $pageObject->getControl("registration_date", $id);
		$control_registration_date->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing registration_date - end
//	processing gender - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_gender = $pageObject->getControl("gender", $id);
		$control_gender->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing gender - end
//	processing DOB - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_DOB = $pageObject->getControl("DOB", $id);
		$control_DOB->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing DOB - end
//	processing Area - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Area = $pageObject->getControl("Area", $id);
		$control_Area->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Area - end
//	processing Route - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Route = $pageObject->getControl("Route", $id);
		$control_Route->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Route - end
//	processing id_type - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_id_type = $pageObject->getControl("id_type", $id);
		$control_id_type->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing id_type - end
//	processing id_number - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_id_number = $pageObject->getControl("id_number", $id);
		$control_id_number->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing id_number - end
//	processing Team_Leader - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Team_Leader = $pageObject->getControl("Team_Leader", $id);
		$control_Team_Leader->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Team_Leader - end
//	processing Working_Location - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Working_Location = $pageObject->getControl("Working_Location", $id);
		$control_Working_Location->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Working_Location - end
//	processing Batch_Paid - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_Batch_Paid = $pageObject->getControl("Batch_Paid", $id);
		$control_Batch_Paid->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Batch_Paid - end
//	processing lat - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_lat = $pageObject->getControl("lat", $id);
		$control_lat->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing lat - end
//	processing lon - begin
	$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode

	if($condition)
	{
		$control_lon = $pageObject->getControl("lon", $id);
		$control_lon->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing lon - end

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
//	processing pos_type - begin
				$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_pos_type->afterSuccessfulSave();
				}
//	processing pos_type - end
//	processing Manager_Name - begin
				$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Manager_Name->afterSuccessfulSave();
				}
//	processing Manager_Name - end
//	processing Manager_Number - begin
				$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Manager_Number->afterSuccessfulSave();
				}
//	processing Manager_Number - end
//	processing Manager_Title - begin
				$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Manager_Title->afterSuccessfulSave();
				}
//	processing Manager_Title - end
//	processing Activator_Name - begin
				$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Activator_Name->afterSuccessfulSave();
				}
//	processing Activator_Name - end
//	processing Activator_Number - begin
				$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Activator_Number->afterSuccessfulSave();
				}
//	processing Activator_Number - end
//	processing business_name - begin
				$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_business_name->afterSuccessfulSave();
				}
//	processing business_name - end
//	processing altenative_number - begin
				$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_altenative_number->afterSuccessfulSave();
				}
//	processing altenative_number - end
//	processing pos_iccid - begin
				$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_pos_iccid->afterSuccessfulSave();
				}
//	processing pos_iccid - end
//	processing registration_date - begin
				$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_registration_date->afterSuccessfulSave();
				}
//	processing registration_date - end
//	processing gender - begin
				$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_gender->afterSuccessfulSave();
				}
//	processing gender - end
//	processing DOB - begin
				$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_DOB->afterSuccessfulSave();
				}
//	processing DOB - end
//	processing Area - begin
				$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Area->afterSuccessfulSave();
				}
//	processing Area - end
//	processing Route - begin
				$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Route->afterSuccessfulSave();
				}
//	processing Route - end
//	processing id_type - begin
				$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_id_type->afterSuccessfulSave();
				}
//	processing id_type - end
//	processing id_number - begin
				$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_id_number->afterSuccessfulSave();
				}
//	processing id_number - end
//	processing Team_Leader - begin
				$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Team_Leader->afterSuccessfulSave();
				}
//	processing Team_Leader - end
//	processing Working_Location - begin
				$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Working_Location->afterSuccessfulSave();
				}
//	processing Working_Location - end
//	processing Batch_Paid - begin
				$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_Batch_Paid->afterSuccessfulSave();
				}
//	processing Batch_Paid - end
//	processing lat - begin
				$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_lat->afterSuccessfulSave();
				}
//	processing lat - end
//	processing lon - begin
				$condition = $inlineedit!=EDIT_INLINE;//(!$inlineedit) edit simple mode
			
				if($condition)
				{
					$control_lon->afterSuccessfulSave();
				}
//	processing lon - end
				
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
		$keyGetQ.="editid1=".rawurldecode($keys["ID"])."&";
	// cut last &
	$keyGetQ = substr($keyGetQ, 0, strlen($keyGetQ)-1);	
	// redirect
	HeaderRedirect("activators", $pageObject->getPageType(), $keyGetQ);
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
		HeaderRedirect("activators", "list", "a=return");
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
	$pageObject->readOnlyFields["Manager_Number"] = $pageObject->showDBValue("Manager_Number", $data);

	$xt->assign("show_key1", $pageObject->showDBValue("ID", $data));


if($readevalues)
{
	$data["pos_type"] = $evalues["pos_type"];
	$data["Manager_Name"] = $evalues["Manager_Name"];
	$data["Manager_Title"] = $evalues["Manager_Title"];
	$data["Activator_Name"] = $evalues["Activator_Name"];
	$data["Activator_Number"] = $evalues["Activator_Number"];
	$data["business_name"] = $evalues["business_name"];
	$data["altenative_number"] = $evalues["altenative_number"];
	$data["pos_iccid"] = $evalues["pos_iccid"];
	$data["registration_date"] = $evalues["registration_date"];
	$data["gender"] = $evalues["gender"];
	$data["DOB"] = $evalues["DOB"];
	$data["Area"] = $evalues["Area"];
	$data["Route"] = $evalues["Route"];
	$data["id_type"] = $evalues["id_type"];
	$data["id_number"] = $evalues["id_number"];
	$data["Team_Leader"] = $evalues["Team_Leader"];
	$data["Working_Location"] = $evalues["Working_Location"];
	$data["Batch_Paid"] = $evalues["Batch_Paid"];
	$data["lat"] = $evalues["lat"];
	$data["lon"] = $evalues["lon"];
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

	if(!$pageObject->isAppearOnTabs("pos_type"))
		$xt->assign("pos_type_fieldblock",true);
	else
		$xt->assign("pos_type_tabfieldblock",true);
	$xt->assign("pos_type_label",true);
	if(isEnableSection508())
		$xt->assign_section("pos_type_label","<label for=\"".GetInputElementId("pos_type", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Manager_Name"))
		$xt->assign("Manager_Name_fieldblock",true);
	else
		$xt->assign("Manager_Name_tabfieldblock",true);
	$xt->assign("Manager_Name_label",true);
	if(isEnableSection508())
		$xt->assign_section("Manager_Name_label","<label for=\"".GetInputElementId("Manager_Name", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Manager_Number"))
		$xt->assign("Manager_Number_fieldblock",true);
	else
		$xt->assign("Manager_Number_tabfieldblock",true);
	$xt->assign("Manager_Number_label",true);
	if(isEnableSection508())
		$xt->assign_section("Manager_Number_label","<label for=\"".GetInputElementId("Manager_Number", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Manager_Title"))
		$xt->assign("Manager_Title_fieldblock",true);
	else
		$xt->assign("Manager_Title_tabfieldblock",true);
	$xt->assign("Manager_Title_label",true);
	if(isEnableSection508())
		$xt->assign_section("Manager_Title_label","<label for=\"".GetInputElementId("Manager_Title", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Activator_Name"))
		$xt->assign("Activator_Name_fieldblock",true);
	else
		$xt->assign("Activator_Name_tabfieldblock",true);
	$xt->assign("Activator_Name_label",true);
	if(isEnableSection508())
		$xt->assign_section("Activator_Name_label","<label for=\"".GetInputElementId("Activator_Name", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Activator_Number"))
		$xt->assign("Activator_Number_fieldblock",true);
	else
		$xt->assign("Activator_Number_tabfieldblock",true);
	$xt->assign("Activator_Number_label",true);
	if(isEnableSection508())
		$xt->assign_section("Activator_Number_label","<label for=\"".GetInputElementId("Activator_Number", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("business_name"))
		$xt->assign("business_name_fieldblock",true);
	else
		$xt->assign("business_name_tabfieldblock",true);
	$xt->assign("business_name_label",true);
	if(isEnableSection508())
		$xt->assign_section("business_name_label","<label for=\"".GetInputElementId("business_name", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("altenative_number"))
		$xt->assign("altenative_number_fieldblock",true);
	else
		$xt->assign("altenative_number_tabfieldblock",true);
	$xt->assign("altenative_number_label",true);
	if(isEnableSection508())
		$xt->assign_section("altenative_number_label","<label for=\"".GetInputElementId("altenative_number", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("pos_iccid"))
		$xt->assign("pos_iccid_fieldblock",true);
	else
		$xt->assign("pos_iccid_tabfieldblock",true);
	$xt->assign("pos_iccid_label",true);
	if(isEnableSection508())
		$xt->assign_section("pos_iccid_label","<label for=\"".GetInputElementId("pos_iccid", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("registration_date"))
		$xt->assign("registration_date_fieldblock",true);
	else
		$xt->assign("registration_date_tabfieldblock",true);
	$xt->assign("registration_date_label",true);
	if(isEnableSection508())
		$xt->assign_section("registration_date_label","<label for=\"".GetInputElementId("registration_date", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("gender"))
		$xt->assign("gender_fieldblock",true);
	else
		$xt->assign("gender_tabfieldblock",true);
	$xt->assign("gender_label",true);
	if(isEnableSection508())
		$xt->assign_section("gender_label","<label for=\"".GetInputElementId("gender", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("DOB"))
		$xt->assign("DOB_fieldblock",true);
	else
		$xt->assign("DOB_tabfieldblock",true);
	$xt->assign("DOB_label",true);
	if(isEnableSection508())
		$xt->assign_section("DOB_label","<label for=\"".GetInputElementId("DOB", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Area"))
		$xt->assign("Area_fieldblock",true);
	else
		$xt->assign("Area_tabfieldblock",true);
	$xt->assign("Area_label",true);
	if(isEnableSection508())
		$xt->assign_section("Area_label","<label for=\"".GetInputElementId("Area", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Route"))
		$xt->assign("Route_fieldblock",true);
	else
		$xt->assign("Route_tabfieldblock",true);
	$xt->assign("Route_label",true);
	if(isEnableSection508())
		$xt->assign_section("Route_label","<label for=\"".GetInputElementId("Route", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("id_type"))
		$xt->assign("id_type_fieldblock",true);
	else
		$xt->assign("id_type_tabfieldblock",true);
	$xt->assign("id_type_label",true);
	if(isEnableSection508())
		$xt->assign_section("id_type_label","<label for=\"".GetInputElementId("id_type", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("id_number"))
		$xt->assign("id_number_fieldblock",true);
	else
		$xt->assign("id_number_tabfieldblock",true);
	$xt->assign("id_number_label",true);
	if(isEnableSection508())
		$xt->assign_section("id_number_label","<label for=\"".GetInputElementId("id_number", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Team_Leader"))
		$xt->assign("Team_Leader_fieldblock",true);
	else
		$xt->assign("Team_Leader_tabfieldblock",true);
	$xt->assign("Team_Leader_label",true);
	if(isEnableSection508())
		$xt->assign_section("Team_Leader_label","<label for=\"".GetInputElementId("Team_Leader", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Working_Location"))
		$xt->assign("Working_Location_fieldblock",true);
	else
		$xt->assign("Working_Location_tabfieldblock",true);
	$xt->assign("Working_Location_label",true);
	if(isEnableSection508())
		$xt->assign_section("Working_Location_label","<label for=\"".GetInputElementId("Working_Location", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Batch_Paid"))
		$xt->assign("Batch_Paid_fieldblock",true);
	else
		$xt->assign("Batch_Paid_tabfieldblock",true);
	$xt->assign("Batch_Paid_label",true);
	if(isEnableSection508())
		$xt->assign_section("Batch_Paid_label","<label for=\"".GetInputElementId("Batch_Paid", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("lat"))
		$xt->assign("lat_fieldblock",true);
	else
		$xt->assign("lat_tabfieldblock",true);
	$xt->assign("lat_label",true);
	if(isEnableSection508())
		$xt->assign_section("lat_label","<label for=\"".GetInputElementId("lat", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("lon"))
		$xt->assign("lon_fieldblock",true);
	else
		$xt->assign("lon_tabfieldblock",true);
	$xt->assign("lon_label",true);
	if(isEnableSection508())
		$xt->assign_section("lon_label","<label for=\"".GetInputElementId("lon", $id, PAGE_EDIT)."\">","</label>");
		

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
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["ID"]));


//	ID - 
	$value = $pageObject->showDBValue("ID", $data, $keylink);
	$showValues["ID"] = $value;
	$showFields[] = "ID";
		$showRawValues["ID"] = substr($data["ID"],0,100);

//	pos_type - 
	$value = $pageObject->showDBValue("pos_type", $data, $keylink);
	$showValues["pos_type"] = $value;
	$showFields[] = "pos_type";
		$showRawValues["pos_type"] = substr($data["pos_type"],0,100);

//	Manager_Name - 
	$value = $pageObject->showDBValue("Manager_Name", $data, $keylink);
	$showValues["Manager_Name"] = $value;
	$showFields[] = "Manager_Name";
		$showRawValues["Manager_Name"] = substr($data["Manager_Name"],0,100);

//	Manager_Number - 
	$value = $pageObject->showDBValue("Manager_Number", $data, $keylink);
	$showValues["Manager_Number"] = $value;
	$showFields[] = "Manager_Number";
		$showRawValues["Manager_Number"] = substr($data["Manager_Number"],0,100);

//	Manager_Title - 
	$value = $pageObject->showDBValue("Manager_Title", $data, $keylink);
	$showValues["Manager_Title"] = $value;
	$showFields[] = "Manager_Title";
		$showRawValues["Manager_Title"] = substr($data["Manager_Title"],0,100);

//	Activator_Name - 
	$value = $pageObject->showDBValue("Activator_Name", $data, $keylink);
	$showValues["Activator_Name"] = $value;
	$showFields[] = "Activator_Name";
		$showRawValues["Activator_Name"] = substr($data["Activator_Name"],0,100);

//	Activator_Number - 
	$value = $pageObject->showDBValue("Activator_Number", $data, $keylink);
	$showValues["Activator_Number"] = $value;
	$showFields[] = "Activator_Number";
		$showRawValues["Activator_Number"] = substr($data["Activator_Number"],0,100);

//	business_name - 
	$value = $pageObject->showDBValue("business_name", $data, $keylink);
	$showValues["business_name"] = $value;
	$showFields[] = "business_name";
		$showRawValues["business_name"] = substr($data["business_name"],0,100);

//	altenative_number - 
	$value = $pageObject->showDBValue("altenative_number", $data, $keylink);
	$showValues["altenative_number"] = $value;
	$showFields[] = "altenative_number";
		$showRawValues["altenative_number"] = substr($data["altenative_number"],0,100);

//	pos_iccid - 
	$value = $pageObject->showDBValue("pos_iccid", $data, $keylink);
	$showValues["pos_iccid"] = $value;
	$showFields[] = "pos_iccid";
		$showRawValues["pos_iccid"] = substr($data["pos_iccid"],0,100);

//	registration_date - 
	$value = $pageObject->showDBValue("registration_date", $data, $keylink);
	$showValues["registration_date"] = $value;
	$showFields[] = "registration_date";
		$showRawValues["registration_date"] = substr($data["registration_date"],0,100);

//	gender - 
	$value = $pageObject->showDBValue("gender", $data, $keylink);
	$showValues["gender"] = $value;
	$showFields[] = "gender";
		$showRawValues["gender"] = substr($data["gender"],0,100);

//	DOB - Short Date
	$value = $pageObject->showDBValue("DOB", $data, $keylink);
	$showValues["DOB"] = $value;
	$showFields[] = "DOB";
		$showRawValues["DOB"] = substr($data["DOB"],0,100);

//	Area - 
	$value = $pageObject->showDBValue("Area", $data, $keylink);
	$showValues["Area"] = $value;
	$showFields[] = "Area";
		$showRawValues["Area"] = substr($data["Area"],0,100);

//	Route - 
	$value = $pageObject->showDBValue("Route", $data, $keylink);
	$showValues["Route"] = $value;
	$showFields[] = "Route";
		$showRawValues["Route"] = substr($data["Route"],0,100);

//	id_type - 
	$value = $pageObject->showDBValue("id_type", $data, $keylink);
	$showValues["id_type"] = $value;
	$showFields[] = "id_type";
		$showRawValues["id_type"] = substr($data["id_type"],0,100);

//	id_number - 
	$value = $pageObject->showDBValue("id_number", $data, $keylink);
	$showValues["id_number"] = $value;
	$showFields[] = "id_number";
		$showRawValues["id_number"] = substr($data["id_number"],0,100);

//	Team_Leader - 
	$value = $pageObject->showDBValue("Team_Leader", $data, $keylink);
	$showValues["Team_Leader"] = $value;
	$showFields[] = "Team_Leader";
		$showRawValues["Team_Leader"] = substr($data["Team_Leader"],0,100);

//	Working_Location - 
	$value = $pageObject->showDBValue("Working_Location", $data, $keylink);
	$showValues["Working_Location"] = $value;
	$showFields[] = "Working_Location";
		$showRawValues["Working_Location"] = substr($data["Working_Location"],0,100);

//	Batch_Paid - 
	$value = $pageObject->showDBValue("Batch_Paid", $data, $keylink);
	$showValues["Batch_Paid"] = $value;
	$showFields[] = "Batch_Paid";
		$showRawValues["Batch_Paid"] = substr($data["Batch_Paid"],0,100);

//	lat - Number
	$value = $pageObject->showDBValue("lat", $data, $keylink);
	$showValues["lat"] = $value;
	$showFields[] = "lat";
		$showRawValues["lat"] = substr($data["lat"],0,100);

//	lon - 
	$value = $pageObject->showDBValue("lon", $data, $keylink);
	$showValues["lon"] = $value;
	$showFields[] = "lon";
		$showRawValues["lon"] = substr($data["lon"],0,100);

//	last_chekin - 
	$value = $pageObject->showDBValue("last_chekin", $data, $keylink);
	$showValues["last_chekin"] = $value;
	$showFields[] = "last_chekin";
		$showRawValues["last_chekin"] = substr($data["last_chekin"],0,100);

//	mydata - 
	$value = $pageObject->showDBValue("mydata", $data, $keylink);
	$showValues["mydata"] = $value;
	$showFields[] = "mydata";
		$showRawValues["mydata"] = substr($data["mydata"],0,100);
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
			$options['masterTable'] = "activators";
			$options['firstTime'] = 1;
			
			$strTableName = $dpParams['strTableNames'][$d];
			include_once("include/".GetTableURL($strTableName)."_settings.php");
			if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
			{
				$strTableName = "activators";
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
			$options['masterTable'] = "activators";
			$options['firstTime'] = 1;
			$options['tName'] = $strTableName;
			$options['id'] = $dpParams['ids'][$d];
			$options['flyId'] = $pageObject->genId()+1;
			$options['shortTableName'] = GetTableURL($strTableName);
			include_once("include/".GetTableURL($strTableName)."_settings.php");
			if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
			{
				$strTableName = "activators";
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
			$options['masterTable'] = "activators";
			$options['firstTime'] = 1;
			
			$strTableName = $dpParams['strTableNames'][$d];
			
			if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")){
				$strTableName = "activators";
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
	$strTableName = "activators";
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

$pageObject->xt->assign("legend", true);

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
	.$id."\" onclick=\"window.location.href='".GetTableLink("activators", "view", $viewlink)."'\"");
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
