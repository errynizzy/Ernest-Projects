<?php 
include("include/dbcommon.php");

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

add_nocache_headers();
include("include/pos_live_balance_variables.php");
include('include/xtempl.php');
include('classes/addpage.php');
include('include/lookuplinks.php');

InitLookupLinks();

RunnerPage::reloginAndLogoutProcess("A");

if ((postvalue("editType") != "inline") && (postvalue("editType") != ADD_POPUP)) {
	$_SESSION["MyURL"] = $_SERVER["SCRIPT_NAME"];
	if(!isLogged())
	{ 
		redirectToLogin();
	}
}


$returnJSON = array();
if ((sizeof($_POST)==0) && (postvalue('ferror'))){
	if (postvalue("inline")){
		$returnJSON['success'] = false;
		$returnJSON['message'] = "Error occurred";
		$returnJSON['fatalError'] = true;
		echo printJSON($returnJSON);
		exit();
	}
	else if (postvalue("fly")){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_add"] = "<< "."Error occurred"." >>";
	}
}




$layout = new TLayout("add2", "RoundedBlue_white", "MobileBlue_white");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["all"] = array();
$layout->containers["all"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"add" );
$layout->containers["add"] = array();
$layout->containers["add"][] = array("name"=>"addheader", 
	"block"=>"addheader", "substyle"=>2  );

$layout->containers["add"][] = array("name"=>"message", 
	"block"=>"message_block", "substyle"=>1  );

$layout->containers["add"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
$layout->containers["fields"][] = array("name"=>"addfields", 
	"block"=>"", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"addbuttons", 
	"block"=>"addbuttons", "substyle"=>2  );

$layout->skins["fields"] = "fields";


$layout->skins["add"] = "1";


$layout->skins["all"] = "empty";

$layout->blocks["top"][] = "all";
$page_layouts["pos_live_balance_add"] = $layout;

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





$filename = "";
$status = "";
$message = "";
$mesClass = "rnr-error";
$usermessage = "";
$error_happened = false;
$readavalues = false;

$keys = array();
$showValues = array();
$showRawValues = array();
$showFields = array();
$showDetailKeys = array();
$IsSaved = false;
$HaveData = true;
$popUpSave = false;

$sessionPrefix = $strTableName;

$onFly = false;
if(postvalue("onFly"))
	$onFly = true;

if(@$_REQUEST["editType"]=="inline")
	$inlineadd = ADD_INLINE;
elseif(@$_REQUEST["editType"]==ADD_POPUP)
{
	$inlineadd = ADD_POPUP;
	if(@$_POST["a"]=="added" && postvalue("field")=="" && postvalue("category")=="")
		$popUpSave = true;	
}
elseif(@$_REQUEST["editType"]==ADD_MASTER)
	$inlineadd = ADD_MASTER;
elseif($onFly)
{
	$inlineadd = ADD_ONTHEFLY;
	$sessionPrefix = $strTableName."_add";
}
else
	$inlineadd = ADD_SIMPLE;

if($inlineadd == ADD_INLINE)
{
	$templatefile = GetTemplateName("pos_live_balance", "inline_add");
}
else
{
	$templatefile = GetTemplateName("pos_live_balance", "add");
}

$id = postvalue("id");
if(intval($id)==0)
	$id = 1;

//If undefined session value for mastet table, but exist post value master table, than take second
//It may be happen only when use dpInline mode on page add
if(!@$_SESSION[$sessionPrefix."_mastertable"] && postvalue("mastertable"))
	$_SESSION[$sessionPrefix."_mastertable"] = postvalue("mastertable");
	
$xt = new Xtempl();
	
// assign an id
$xt->assign("id",$id);
	
$auditObj = GetAuditObject($strTableName);

//array of params for classes
$params = array("pageType" => PAGE_ADD,"id" => $id,"mode" => $inlineadd);

$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['locale_info'] = $locale_info;
$params['baseTableName'] = postvalue("table");
$params['useTabsOnAdd'] = $gSettings->useTabsOnAdd();
$params['templatefile'] = $templatefile;
$params['pageAddLikeInline'] = ($inlineadd==ADD_INLINE);
$params['needSearchClauseObj'] = false;
$params['strOriginalTableName'] = $strOriginalTableName;

if($params['useTabsOnAdd'])
	$params['arrAddTabs'] = $gSettings->getAddTabs();
	
$pageObject = new AddPage($params);
$pageObject->init();

if(isset($_REQUEST['afteradd'])){
		HeaderRedirect("pos_live_balance", "add");
	if($eventObj->exists("AfterAdd") && isset($_SESSION['after_add_data'][$_REQUEST['afteradd']])){
	
		$data = $_SESSION['after_add_data'][$_REQUEST['afteradd']];
		$eventObj->AfterAdd($data['avalues'], $data['keys'],$data['inlineadd'], $pageObject);
	
	}
	unset($_SESSION['after_add_data'][$_REQUEST['afteradd']]);
	
	foreach (is_array($_SESSION['after_add_data']) ? $_SESSION['after_add_data'] : array() as $k=>$v){
		if (!is_array($v) or !array_key_exists('time',$v)) {
			unset($_SESSION['after_add_data'][$k]);
			continue;
		}
		if ($v['time'] < time() - 3600){
			unset($_SESSION['after_add_data'][$k]);
		}
	}
		exit();
}

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;

//Array of fields, which appear on add page
$addFields = $pageObject->getFieldsByPageType();

// add button events if exist
if ($inlineadd == ADD_SIMPLE || $inlineadd == ADD_ONTHEFLY)
	$pageObject->addButtonHandlers();


//For show detail tables on master page add
if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{
	$dpParams = array();
	if($pageObject->isShowDetailTables  && !isMobile())
	{
		$ids = $id;
		$countDetailsIsShow = 0;
		$pageObject->jsSettings['tableSettings'][$strTableName]['isShowDetails'] = $countDetailsIsShow > 0 ? true : false;
		$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}
}

//	Before Process event
if($eventObj->exists("BeforeProcessAdd"))
{
	$eventObj->BeforeProcessAdd($conn, $pageObject);
}

// proccess captcha
if ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{
	if($pageObject->captchaExists())
	{
		$pageObject->doCaptchaCode();
	}
}
	
// insert new record if we have to
if(@$_POST["a"]=="added")
{
	$afilename_values=array();
	$avalues=array();
	$blobfields=array();
//	processing BALANCE - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_BALANCE = $pageObject->getControl("BALANCE", $id);
		$control_BALANCE->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing BALANCE - end
//	processing EVENT_DATE - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_EVENT_DATE = $pageObject->getControl("EVENT_DATE", $id);
		$control_EVENT_DATE->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing EVENT_DATE - end



	$lookupMainSettings = getLookupMainTableSettings($strTableName, postvalue("table"), postvalue("field"));
	if($lookupMainSettings)
	{
		$mainField = postvalue("field");
		if($lookupMainSettings->useCategory($mainField) && !isset($avalues[$lookupMainSettings->getCategoryFilter($mainField)]))
		{
			$avalues[$lookupMainSettings->getCategoryFilter($mainField)] = postvalue("category");
		}
	}

	$failed_inline_add=false;
	//	add filenames to values
	foreach($afilename_values as $akey=>$value)
		$avalues[$akey]=$value;
		
//	before Add event
	$retval = true;
	if($eventObj->exists("BeforeAdd"))
		$retval = $eventObj->BeforeAdd($avalues,$usermessage,(bool)$inlineadd, $pageObject);
	
	if($retval)
	{
		//check if some values are duplicated for the fields not allowing duplicates
		$retval = !$pageObject->hasDeniedDuplicateValues($avalues, $usermessage);	
	}

	// if get save data and user is logged and not check permission
	if ($avalues && !CheckTablePermissions($strTableName, "A") && isLogged()) {
		$retval = false;
		$usermessage = 'You have no permissions to complete this action.';
	}
	
	// if get save data and user is not logged or guest
	if ($avalues && ((!CheckTablePermissions($strTableName, "A") && isLoggedAsGuest()) || !isLogged())) {
		$retval = false;
		$usermessage = "Your session has expired." . "<a href='#' id='loginButtonContinue" . $pageObject->id . "'>" . "Login" . "</a>" . " to save data.";
	}

	if($retval && $pageObject->isCaptchaOk)
	{
		//add or set updated lat-lng values for all map fileds with 'UpdateLatLng' ticked
		$pageObject->setUpdatedLatLng( $avalues );
		
		$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
		
		$customAddResult = true;
		$customAddError = false;
		if($eventObj->exists("CustomAdd"))
		{
			$customAddResult = $eventObj->CustomAdd($avalues, $keys, $customAddError, (boolean)$inlineadd, $pageObject);
			if($keys && !is_array($keys))
				$keys = array("ID" => $keys);
			elseif((is_array($keys) && !count($keys)) || !$keys)
				$keys = prepareTableKeysAfterInsert($strOriginalTableName, $avalues, $pageObject, $keys);
			
			if(!$customAddResult && !$customAddError)
				$mesClass = "";
		}

		if($customAddResult && !$customAddError)
		{
			if(DoInsertRecord($strOriginalTableName,$avalues,$blobfields,$id,$pageObject, $pageObject->cipherer, $keys))
			{
				$IsSaved=true;
//	after edit event
				if($auditObj || $eventObj->exists("AfterAdd"))
				{
					foreach($keys as $idx=>$val)
						$avalues[$idx]=$val;
				}
				
				if($auditObj)
					$auditObj->LogAdd($strTableName,$avalues,$keys);
				
// Give possibility to all edit controls to clean their data				
//	processing BALANCE - start
				$inlineAddOption = true;
				if($inlineAddOption)
				{
					$control_BALANCE->afterSuccessfulSave();
				}
//	processing BALANCE - end
//	processing EVENT_DATE - start
				$inlineAddOption = true;
				if($inlineAddOption)
				{
					$control_EVENT_DATE->afterSuccessfulSave();
				}
//	processing EVENT_DATE - end
	
				$afterAdd_id = '';	
				if($eventObj->exists("AfterAdd") && $inlineadd!=ADD_MASTER){
					$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd, $pageObject);
				} else if ($eventObj->exists("AfterAdd") && $inlineadd==ADD_MASTER){
					if($onFly)
						$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd, $pageObject);
					else{
						$afterAdd_id = generatePassword(20);	
					
						$_SESSION['after_add_data'][$afterAdd_id] = array(
							'avalues'=>$avalues,
							'keys'=>$keys,
							'inlineadd'=>(bool)$inlineadd,
							'time' => time()
						);	
					}
				}
					
				if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER)
				{
					$permis = array();
					$keylink = "";$k = 0;
					foreach($keys as $idx=>$val)
					{
						if($k!=0)
							$keylink .="&";
						$keylink .="editid".(++$k)."=".runner_htmlspecialchars(rawurlencode(@$val));
					}
					$permis = $pageObject->getPermissions();				
					if (count($keys))
					{
						$message .="</br>";
						if($pageObject->pSet->hasEditPage() && $permis['edit'])
							$message .="&nbsp;<a href='".GetTableLink("pos_live_balance", "edit", $keylink)."'>"."Edit"."</a>&nbsp;";
						if($pageObject->pSet->hasViewPage() && $permis['search'])
							$message .="&nbsp;<a href='".GetTableLink("pos_live_balance", "view", $keylink)."'>"."View"."</a>&nbsp;";
					}
					$mesClass = "";	
				}
			}
		}
		elseif($customAddError)
			$message = $customAddError;
	}
	else
	{
		$message = $usermessage;
		$status = "DECLINED";
		$readavalues = true;
	}
}
if($message)
	$message = "<div class='".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if (no_output_done() && $inlineadd==ADD_SIMPLE && $IsSaved)
{
	// saving message
	$_SESSION["message_add"] = ($message ? $message : "");
	// redirect
	HeaderRedirect("pos_live_balance", $pageObject->getPageType());
	// turned on output buffering, so we need to stop script
	exit();
}

if($inlineadd==ADD_MASTER && $IsSaved)
	$_SESSION["message_add"] = ($message ? $message : "");
	
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if($inlineadd==ADD_SIMPLE && isset($_SESSION["message_add"]))
{
	$message = $_SESSION["message_add"];
	unset($_SESSION["message_add"]);
}

$defvalues=array();

//	copy record
if(array_key_exists("copyid1",$_REQUEST) || array_key_exists("editid1",$_REQUEST))
{
	$copykeys=array();
	if(array_key_exists("copyid1",$_REQUEST))
	{
	}
	else
	{
	}
	$strWhere=KeyWhere($copykeys);
	$strSQL = $gQuery->gSQLWhere($strWhere);

	LogInfo($strSQL);
	$rs = db_query($strSQL,$conn);
	$defvalues = $pageObject->cipherer->DecryptFetchedArray($rs);
	if(!$defvalues)
		$defvalues=array();
//call CopyOnLoad event
	if($eventObj->exists("CopyOnLoad"))
		$eventObj->CopyOnLoad($defvalues,$strWhere, $pageObject);
}
else
{
}




$lookupMainSettings = getLookupMainTableSettings($strTableName, postvalue("table"), postvalue("field"));
if($lookupMainSettings)
{
	$mainField = postvalue("field");
	if($lookupMainSettings->useCategory($mainField) && !isset($avalues[$lookupMainSettings->getCategoryFilter($mainField)]))
	{
		$defvalues[$lookupMainSettings->getCategoryFilter($mainField)] = postvalue("category");
	}
}


if($readavalues)
{
	$defvalues["BALANCE"]=@$avalues["BALANCE"];
	$defvalues["EVENT_DATE"]=@$avalues["EVENT_DATE"];
}

if($eventObj->exists("ProcessValuesAdd"))
	$eventObj->ProcessValuesAdd($defvalues, $pageObject);


//for basic files
$includes="";

if($inlineadd!=ADD_INLINE)
{
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$includes .= GetBaseScriptsForPage(false);
		if (!isMobile())
			$includes.="<div id=\"search_suggest\"></div>\r\n";
	}
	
	if(!$pageObject->isAppearOnTabs("BALANCE"))
		$xt->assign("BALANCE_fieldblock",true);
	else
		$xt->assign("BALANCE_tabfieldblock",true);
	$xt->assign("BALANCE_label",true);
	if(isEnableSection508())
		$xt->assign_section("BALANCE_label","<label for=\"".GetInputElementId("BALANCE", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("EVENT_DATE"))
		$xt->assign("EVENT_DATE_fieldblock",true);
	else
		$xt->assign("EVENT_DATE_tabfieldblock",true);
	$xt->assign("EVENT_DATE_label",true);
	if(isEnableSection508())
		$xt->assign_section("EVENT_DATE_label","<label for=\"".GetInputElementId("EVENT_DATE", $id, PAGE_ADD)."\">","</label>");
	
	
	
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$pageObject->body["begin"] .= $includes;
				$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
		$xt->assign("mbackbutton_attrs","id=\"extraBackButton".$id."\"");
		$xt->assign("back_button",true);
	}
	else
	{		
		$xt->assign("cancelbutton_attrs", "id=\"cancelButton".$id."\"");
		$xt->assign("cancel_button",true);
		$xt->assign("header","");
	}
	$xt->assign("save_button",true);
}
$xt->assign("savebutton_attrs","id=\"saveButton".$id."\"");
$xt->assign("message_block",true);
$xt->assign("message",$message);
if(!strlen($message))
{
	$xt->displayBrickHidden("message");
}

//	show readonly fields
$linkdata="";

$i = 0;
$jsKeys = array();
$keyFields = array();
foreach($keys as $field=>$value)
{
	$keyFields[$i] = $field;
	$jsKeys[$i++] = $value;
}

if(@$_POST["a"]=="added" && $inlineadd==ADD_ONTHEFLY)
{
	if( !$error_happened && $status!="DECLINED")
	{
		$addedData = $pageObject->GetAddedDataLookupQuery( $keys, false, postvalue("table"), postvalue("field") );
		$data =& $addedData[0];	
		
		if($data)
		{
			$respData = array($addedData[1]["linkField"] => @$data[$addedData[1]["linkFieldIndex"]], $addedData[1]["displayField"] => @$data[$addedData[1]["displayFieldIndex"]]);
		}
		else
		{
			$respData = array($addedData[1]["linkField"] => @$avalues[$addedData[1]["linkField"]], $addedData[1]["displayField"] => @$avalues[$addedData[1]["displayField"]]);
		}		
		$returnJSON['success'] = true;
		$returnJSON['keys'] = $jsKeys;
		$returnJSON['keyFields'] = $keyFields;
		$returnJSON['vals'] = $respData;
		$returnJSON['fields'] = $showFields;
	}
	else
	{
		$returnJSON['success'] = false;
		$returnJSON['message'] = $message;
	}
	echo printJSON($returnJSON);
	exit();
}

if(@$_POST["a"]=="added" && ($inlineadd == ADD_INLINE || $inlineadd == ADD_MASTER || $inlineadd==ADD_POPUP)) 
{
	//Preparation   view values
	//	get current values and show edit controls
	$dispFieldAlias = "";
	$data=0;
	$linkAndDispVals = array();
	if(count($keys))
	{
		$where=KeyWhere($keys);
			
		$forLookup = postvalue('forLookup');
		if ($forLookup)
		{
			$addedData = $pageObject->GetAddedDataLookupQuery( $keys, true, postvalue("table"), postvalue("field") );
			$data =& $addedData[0];
			$linkAndDispVals = array('linkField' => $addedData[0][$addedData[1]["linkField"]], 'displayField' => $addedData[0][$addedData[1]["displayField"]]);
		}
		else
		{
			$strSQL = $gQuery->gSQLWhere_having_fromQuery('', $where, '');		
		
			LogInfo($strSQL);
			$rs=db_query($strSQL,$conn);
			$data = $pageObject->cipherer->DecryptFetchedArray($rs);
		}
	}
	if(!$data)
	{
		$data=$avalues;
		$HaveData=false;
	}
	//check if correct values added



	$keylink="";
	
////////////////////////////////////////////
//	pos_type
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$showValues["pos_type"] = $pageObject->showDBValue("pos_type", $data, $keylink);
		$showFields[] = "pos_type";
	}	
//	Activator_Number
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$showValues["Activator_Number"] = $pageObject->showDBValue("Activator_Number", $data, $keylink);
		$showFields[] = "Activator_Number";
	}	
//	Activator_Name
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$showValues["Activator_Name"] = $pageObject->showDBValue("Activator_Name", $data, $keylink);
		$showFields[] = "Activator_Name";
	}	
//	Area
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$showValues["Area"] = $pageObject->showDBValue("Area", $data, $keylink);
		$showFields[] = "Area";
	}	
//	BALANCE
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$showValues["BALANCE"] = $pageObject->showDBValue("BALANCE", $data, $keylink);
		$showFields[] = "BALANCE";
	}	
//	EVENT_DATE
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$showValues["EVENT_DATE"] = $pageObject->showDBValue("EVENT_DATE", $data, $keylink);
		$showFields[] = "EVENT_DATE";
	}	
		$showRawValues["pos_type"] = substr($data["pos_type"],0,100);
		$showRawValues["Activator_Number"] = substr($data["Activator_Number"],0,100);
		$showRawValues["Activator_Name"] = substr($data["Activator_Name"],0,100);
		$showRawValues["Area"] = substr($data["Area"],0,100);
		$showRawValues["BALANCE"] = substr($data["BALANCE"],0,100);
		$showRawValues["EVENT_DATE"] = substr($data["EVENT_DATE"],0,100);
	
	// for custom expression for display field
	if ($dispFieldAlias)
	{
		$showValues[] = $data[$dispFieldAlias];	
		$showFields[] = $dispFieldAlias;
		$showRawValues[] = substr($data[$dispFieldAlias],0,100);
	}
	
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_POPUP)
	{	
		if($IsSaved && count($showValues))
		{
			$returnJSON['success'] = true;
			if($HaveData){
				$returnJSON['noKeys'] = false;
			}else{
				$returnJSON['noKeys'] = true;
			}
			
			$returnJSON['keys'] = $jsKeys;
			$returnJSON['keyFields'] = $keyFields;
			$returnJSON['vals'] = $showValues;
			$returnJSON['fields'] = $showFields;
			$returnJSON['rawVals'] = $showRawValues;
			$returnJSON['detKeys'] = $showDetailKeys;
			$returnJSON['userMess'] = $usermessage;
			$returnJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
			// add link and display value if list page is lookup with search
			if(array_key_exists('linkField', $linkAndDispVals))
			{
				$returnJSON['linkValue'] = $linkAndDispVals['linkField'];
				$returnJSON['displayValue'] = $linkAndDispVals['displayField'];
			}
			if($globalEvents->exists("IsRecordEditable", $strTableName))
			{ 
				if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
					$returnJSON['nonEditable'] = true;
			}
			
			if($inlineadd==ADD_POPUP && isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
				$returnJSON['hideCaptcha'] = true;
		}
		else
		{
			$returnJSON['success'] = false;
			$returnJSON['message'] = $message;
			if(!$pageObject->isCaptchaOk)
				$returnJSON['captcha'] = false;
		}
		echo printJSON($returnJSON);
		exit();
	}
} 

/////////////////////////////////////////////////////////////
if($inlineadd==ADD_MASTER)
{
	$respJSON = array();
	if(($_POST["a"]=="added" && $IsSaved))
	{
		$respJSON['afterAddId'] = $afterAdd_id;
		$respJSON['success'] = true;
		$respJSON['fields'] = $showFields;
		$respJSON['vals'] = $showValues;
		if($onFly){
			if($HaveData)
				$respJSON['noKeys'] = false;
			else
				$respJSON['noKeys'] = true;
			$respJSON['keys'] = $jsKeys;
			$respJSON['keyFields'] = $keyFields;
			$respJSON['rawVals'] = $showRawValues;
			$respJSON['detKeys'] = $showDetailKeys;
			$respJSON['userMess'] = $usermessage;
			$respJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
			if($globalEvents->exists("IsRecordEditable", $strTableName))
			{
				if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
					$respJSON['nonEditable'] = true;
			}
		}
		$respJSON['mKeys'] = array();
		for($i=0;$i<count($dpParams['ids']);$i++)
		{
			$data=0;
			if(count($keys))
			{
				$where=KeyWhere($keys);
							$strSQL = $gQuery->gSQLWhere($where);
				LogInfo($strSQL);
				$rs = db_query($strSQL,$conn);
				$data = $pageObject->cipherer->DecryptFetchedArray($rs);
			}
			if(!$data)
				$data=$avalues;
			
			$mKeyId = 1;
			foreach($mKeys[$dpParams['strTableNames'][$i]] as $mk)
			{
				if($data[$mk])
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = $data[$mk];
				else
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = '';
			}
		}
		if(isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
			$respJSON['hidecaptcha'] = true;
	}
	else{
			$respJSON['success'] = false;
			if(!$pageObject->isCaptchaOk)
				$respJSON['captcha'] = false;
			else
				$respJSON['error'] = $message;
			if($onFly)
				$respJSON['message'] = $message;
		}
	echo printJSON($respJSON);
	exit();
}

/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////

//	validation stuff
$control = array();
$controlFields = $addFields;

if( $inlineadd == ADD_INLINE ) //#9069
	$pageObject->removeHiddenColumnsFromInlineFields( $controlFields,  postvalue("screenWidth"), postvalue("screenHeight"), postvalue("orientation") );	
	
foreach($controlFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))
	{
		$control[$gfName] = array();
		$parameters = array();
		$parameters["id"] = $id;
		$parameters["ptype"] = PAGE_ADD;
		$parameters["field"] = $fName;
		$parameters["value"] = @$defvalues[$fName];
		$parameters["pageObj"] = $pageObject;
		
		if($pageObject->pSet->isUseRTE($fName))
			$_SESSION[$strTableName."_".$fName."_rte"] = @$defvalues[$fName];
		
		//	Begin Add validation
		$arrValidate = $pageObject->pSet->getValidation($fName);
		$parameters["validate"] = $arrValidate;
		//	End Add validation
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	//if richEditor for field
	if($pageObject->pSet->isUseRTE($fName))
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))
			$parameters["mode"]="add";
		$controls["controls"]['mode'] = "add";
	}
	else
	{
		if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$parameters["mode"]="inline_add";
			$controls["controls"]['mode'] = "inline_add";
		}
		else
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$parameters["mode"]="add";
			$controls["controls"]['mode'] = "add";
		}
	}
	
	if(!$detailKeys || !in_array($fName, $detailKeys))
	{
		AssignFunction($control[$gfName], "xt_buildeditcontrol", $parameters);
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	}
	elseif($detailKeys && in_array($fName, $detailKeys))
	{
		$controls["controls"]['value'] = @$defvalues[$fName];
	}
	
	// category control field
	$strCategoryControl = $pageObject->getMainLookupFieldNameForDependant($fName);
	
	if($strCategoryControl !== "" && in_array($strCategoryControl, $controlFields))
		$vals = array($fName => @$defvalues[$fName], $strCategoryControl => @$defvalues[$strCategoryControl]);
	else
		$vals = array($fName => @$defvalues[$fName]);
	
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
	{
		$controls["controls"]['preloadData'] = $preload;
		if(!@$defvalues[$fName] && count($preload["vals"])>0)
			$defvalues[$fName] = $preload["vals"][0];
	}
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker
	if($pageObject->pSet->getEditFormat($fName) == 'Time')
		$pageObject->fillTimePickSettings($fName, @$defvalues[$fName]);
	
	if((($detailKeys && in_array($fName, $detailKeys)) || $fName == postvalue("category")) && array_key_exists($fName, $defvalues))
	{
		$value = $pageObject->showDBValue($fName, $defvalues);
		
		$xt->assign($gfName."_editcontrol", $value);
	}
}

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_POPUP) && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		include("classes/searchclause.php");
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
		
	$flyId = $ids+1;
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_ADD;
		$options["mainMasterPageType"] = PAGE_ADD;
		$options['masterTable'] = "pos_live_balance";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		
		$layout = GetPageLayout(GoodFieldName($strTableName), PAGE_LIST);
		if($layout)
		{
			$pageObject->AddCSSFile($layout->getCSSFiles(isRTL(), isMobile()));
		}	
			
		$options['xt'] = new Xtempl();
		$options['id'] = $dpParams['ids'][$d];
		$options['flyId'] = $flyId++;
		$mkr = 1;
		
		foreach($mKeys[$strTableName] as $mk)
		{
			if($defvalues[$mk])
				$options['masterKeysReq'][$mkr++] = $defvalues[$mk];
			else
				$options['masterKeysReq'][$mkr++] = '';
		}
		$listPageObject = ListPage::createListPage($strTableName,$options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		$flyId = $listPageObject->recId+1;
		
		//set page events
		foreach($listPageObject->eventsObject->events as $event => $name)
			$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
		
		//add detail settings to master settings
		$listPageObject->addControlsJSAndCSS();
		$listPageObject->fillSetCntrlMaps();
		$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];

		$dControlsMap[$strTableName] = $listPageObject->controlsMap;
		$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
		
		foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
			$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
		}
		
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
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap;
	$strTableName = "pos_live_balance";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

if($inlineadd == ADD_SIMPLE)
{
	$pageObject->body['end'] = array();
	AssignMethod($pageObject->body['end'], "assignBodyEnd", $pageObject);
	
	$xt->assign("flybody", true);	
	$xt->assign("body", $pageObject->body);
	
	$pageObject->assignFormFooterAndHeaderBricks( true );
}

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{ 
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody", $pageObject->body);
	$xt->assign("body",true);
}	

$xt->assign("style_block",true);

if($eventObj->exists("BeforeShowAdd"))
	$eventObj->BeforeShowAdd($xt, $templatefile, $pageObject);
	
if($inlineadd != ADD_SIMPLE)
{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
{
	$pageObject->displayAJAX($templatefile, $id+1);
	exit(); // .net compatibility
}
elseif ($inlineadd == ADD_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($controlFields as $fName)
	{
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");	
	}	
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON["additionalCSS"] = $pageObject->grabAllCSSFiles();
	echo printJSON($returnJSON); 
	exit(); // .net compatibility
}
else
	$pageObject->display($templatefile);

	
?>
