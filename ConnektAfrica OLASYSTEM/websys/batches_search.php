<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
add_nocache_headers();

include("include/batches_variables.php");
include("classes/searchcontrol.php");
include("classes/advancedsearchcontrol.php");
include("classes/panelsearchcontrol.php");
include("classes/searchclause.php");

$sessionPrefix = $strTableName;

//Basic includes js files
$includes="";
// predefined fields num
$predefFieldNum = 0;

$chrt_array=array();
$rpt_array=array();

if(!isLogged())
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	redirectToLogin();
}
$accessGranted = CheckTablePermissions($strTableName, "S");
if(!$accessGranted && 0 < strlen(@$rpt_array['status']))
{
	$accessGranted = @$rpt_array['status'] != "private" || @$rpt_array['owner'] != @$_SESSION["UserID"];
}
if(!$accessGranted && 0 < strlen(@$chrt_array['status']))
{
	$accessGranted = @$chrt_array['status'] != "private" || @$chrt_array['owner'] != @$_SESSION["UserID"];
}
if(!$accessGranted)
{
	HeaderRedirect("menu");
}





$layout = new TLayout("search2", "RoundedBlue_white", "MobileBlue_white");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["search"] = array();
$layout->containers["search"][] = array("name"=>"srchheader", 
	"block"=>"", "substyle"=>2  );

$layout->containers["search"][] = array("name"=>"srchconditions", 
	"block"=>"conditions_block", "substyle"=>1  );

$layout->containers["search"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
$layout->containers["fields"][] = array("name"=>"srchfields", 
	"block"=>"", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"srchbuttons", 
	"block"=>"", "substyle"=>2  );

$layout->skins["fields"] = "fields";


$layout->skins["search"] = "1";

$layout->blocks["top"][] = "search";
$page_layouts["batches_search"] = $layout;

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



include('include/xtempl.php');
include('classes/runnerpage.php');
$xt = new Xtempl();

// id that used to add to controls names
if(postvalue("id"))
	$id = postvalue("id");
else
	$id = 1;
	
// for usual page show proccess
$mode = SEARCH_SIMPLE;
$templatefile = GetTemplateName("batches", "search");

// for ajax query, used when page buffers new control
if(postvalue("mode")=="inlineLoadCtrl"){
	$mode = SEARCH_LOAD_CONTROL;
}	


$params = array();
$params["id"] = $id;
$params["mode"] = $mode;
$params['xt'] = &$xt;
$params['templatefile'] = $templatefile;
$params['shortTableName'] = 'batches';
$params['origTName'] = $strOriginalTableName;
$params['sessionPrefix'] = $sessionPrefix;
$params['tName'] = $strTableName;
$params['locale_info'] = $locale_info;
$params['pageType'] = PAGE_SEARCH;

$pageObject = new RunnerPage($params);
$pageObject->init();

// create reusable searchControl builder instance
$searchControllerId = (postvalue('searchControllerId') ? postvalue('searchControllerId') : $pageObject->id);

//	Before Process event
if($eventObj->exists("BeforeProcessSearch"))
	$eventObj->BeforeProcessSearch($conn, $pageObject);

// add constants and files for simple view
if ($mode==SEARCH_SIMPLE)
{
	$searchControlBuilder = new AdvancedSearchControl($searchControllerId, $strTableName, $pageObject->searchClauseObj, $pageObject);

	// add button events if exist
	$pageObject->addButtonHandlers();

	$includes .= GetBaseScriptsForPage(false);
	
	// if not simple, this div already exist on page
	if (!isMobile())
		$includes.="<div id=\"search_suggest\" class=\"search_suggest\"></div>";

	// search panel radio button assign
	$searchRadio = $searchControlBuilder->getSearchRadio();
	$xt->assign_section("all_checkbox_label", $searchRadio['all_checkbox_label'][0], $searchRadio['all_checkbox_label'][1]);
	$xt->assign_section("any_checkbox_label", $searchRadio['any_checkbox_label'][0], $searchRadio['any_checkbox_label'][1]);
	$xt->assignbyref("all_checkbox",$searchRadio['all_checkbox']);
	$xt->assignbyref("any_checkbox",$searchRadio['any_checkbox']);
	
	// search fields data
	
	if($pageObject->pSet->getLookupTable("Batch_Number"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("Batch_Number")] = GetTableURL($pageObject->pSet->getLookupTable("Batch_Number"));
	
	$pageObject->fillFieldToolTips("Batch_Number");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("Batch_Number");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "Batch_Number";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = $pageObject->pSet->getDefaultValue( "Batch_Number" );
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("Batch_Number_label","<label for=\"".GetInputElementId("Batch_Number", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("Batch_Number_label", true);
	
	$xt->assign("Batch_Number_fieldblock", true);
	$xt->assignbyref("Batch_Number_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("Batch_Number_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("Batch_Number_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_Batch_Number", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("Batch_Number");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"Batch_Number", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"Batch_Number", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("Given_Batch_Number"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("Given_Batch_Number")] = GetTableURL($pageObject->pSet->getLookupTable("Given_Batch_Number"));
	
	$pageObject->fillFieldToolTips("Given_Batch_Number");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("Given_Batch_Number");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "Given_Batch_Number";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = $pageObject->pSet->getDefaultValue( "Given_Batch_Number" );
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("Given_Batch_Number_label","<label for=\"".GetInputElementId("Given_Batch_Number", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("Given_Batch_Number_label", true);
	
	$xt->assign("Given_Batch_Number_fieldblock", true);
	$xt->assignbyref("Given_Batch_Number_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("Given_Batch_Number_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("Given_Batch_Number_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_Given_Batch_Number", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("Given_Batch_Number");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"Given_Batch_Number", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"Given_Batch_Number", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("Batch_size"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("Batch_size")] = GetTableURL($pageObject->pSet->getLookupTable("Batch_size"));
	
	$pageObject->fillFieldToolTips("Batch_size");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("Batch_size");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "Batch_size";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = $pageObject->pSet->getDefaultValue( "Batch_size" );
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("Batch_size_label","<label for=\"".GetInputElementId("Batch_size", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("Batch_size_label", true);
	
	$xt->assign("Batch_size_fieldblock", true);
	$xt->assignbyref("Batch_size_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("Batch_size_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("Batch_size_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_Batch_size", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("Batch_size");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"Batch_size", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"Batch_size", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	// search fields data
	
	if($pageObject->pSet->getLookupTable("Status"))
		$pageObject->settingsMap["globalSettings"]['shortTNames'][$pageObject->pSet->getLookupTable("Status")] = GetTableURL($pageObject->pSet->getLookupTable("Status"));
	
	$pageObject->fillFieldToolTips("Status");	
	
	$srchFields = $pageObject->searchClauseObj->getSearchCtrlParams("Status");
	$firstFieldParams = array();
	if (count($srchFields))
	{
		$firstFieldParams = $srchFields[0];
	}
	else
	{
		$firstFieldParams['fName'] = "Status";
		$firstFieldParams['eType'] = '';
		$firstFieldParams['value1'] = $pageObject->pSet->getDefaultValue( "Status" );
		$firstFieldParams['opt'] = '';
		$firstFieldParams['value2'] = '';
		$firstFieldParams['not'] = false;
	}
	// create control	
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $firstFieldParams['fName'], 0, $firstFieldParams['opt'], $firstFieldParams['not'], false, $firstFieldParams['value1'], $firstFieldParams['value2']);	
		
	if(isEnableSection508())
		$xt->assign_section("Status_label","<label for=\"".GetInputElementId("Status", $id, PAGE_SEARCH)."\">","</label>");
	else 
		$xt->assign("Status_label", true);
	
	$xt->assign("Status_fieldblock", true);
	$xt->assignbyref("Status_editcontrol", $ctrlBlockArr['searchcontrol']);
	$xt->assign("Status_notbox", $ctrlBlockArr['notbox']);
	// create second control, if need it
	$xt->assignbyref("Status_editcontrol1", $ctrlBlockArr['searchcontrol1']);
	// create search type select
	$xt->assign("searchtype_Status", $ctrlBlockArr['searchtype']);
	$isFieldNeedSecCtrl = $searchControlBuilder->isNeedSecondCtrl("Status");
	$ctrlInd = 0;
	if ($isFieldNeedSecCtrl)
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"Status", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd, 1=>($ctrlInd+1)));
		$ctrlInd+=2;
	}
	else
	{
		$pageObject->controlsMap["search"]["searchBlocks"][] = array('fName'=>"Status", 'recId'=>$id, 'ctrlsMap'=>array(0=>$ctrlInd));			
		$ctrlInd++;
	}
	
	//--------------------------------------------------------
	
	$pageObject->body["begin"] .= $includes;
	
	$pageObject->addCommonJs();
	
	$xt->assignbyref("body",$pageObject->body);
	
	$xt->assign("contents_block", true);
	
	$xt->assign("conditions_block",true);
	$xt->assign("search_button",true);
	$xt->assign("reset_button",true);
	$xt->assign("back_button",true);
	
	
	$xt->assign("searchbutton_attrs","id=\"searchButton".$id."\"");
	$xt->assign("resetbutton_attrs","id=\"resetButton".$id."\"");
	$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
	

	// for crosse report 
	
	if (postvalue('axis_x')!=''){
		$xtCrosseElem = "<input type=\"hidden\" id=\"select_group_x\" value=\"".postvalue('axis_x')."\">
						<input type=\"hidden\" id=\"select_group_y\" value=\"".postvalue('axis_y')."\">
						<input type=\"hidden\" id=\"select_data\" value=\"".postvalue('field')."\">
						<input type=\"hidden\" id=\"group_func_hidden\" value=\"".postvalue('group_func')."\">
						";
		$xt->assign("CrossElem",$xtCrosseElem);
	}
	// for crosse report
	if($eventObj->exists("BeforeShowSearch"))
		$eventObj->BeforeShowSearch($xt,$templatefile, $pageObject);
	// load controls for first page loading	
	
	
	$pageObject->fillSetCntrlMaps();
	
	$pageObject->body['end'] .= '<script>';
	$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
	$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
	$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";";
	$pageObject->body['end'] .= '</script>';
		$pageObject->body['end'] .= "<script language=\"JavaScript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>\r\n";
	$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";
	
	$xt->assignbyref("body",$pageObject->body);
	$pageObject->display($templatefile);
}
else if($mode==SEARCH_LOAD_CONTROL)
{
	$searchControlBuilder = new PanelSearchControl($searchControllerId, $strTableName, $pageObject->searchClauseObj, $pageObject);
	$ctrlField = postvalue('ctrlField');
	$defaultValue = $pageObject->pSet->getDefaultValue( $ctrlField );
	$ctrlBlockArr = $searchControlBuilder->buildSearchCtrlBlockArr($id, $ctrlField, 0, '', false, true, $defaultValue, '');	
	
	// build array for encode
	$resArr = array();
	$resArr['control1'] = trim($xt->call_func($ctrlBlockArr['searchcontrol']));
	$resArr['control2'] = trim($xt->call_func($ctrlBlockArr['searchcontrol1']));
	$resArr['comboHtml'] = trim($ctrlBlockArr['searchtype']);
	$resArr['delButt'] = trim($ctrlBlockArr['delCtrlButt']);
	$resArr['delButtId'] =  trim($searchControlBuilder->getDelButtonId($ctrlField, $id));
	$resArr['divInd'] = trim($id);	
	$resArr['fLabel'] = GetFieldLabel(GoodFieldName($strTableName),GoodFieldName($ctrlField));
	$resArr['ctrlMap'] = $pageObject->controlsMap['controls'];
	
	if (postvalue('isNeedSettings') == 'true')
	{
		$pageObject->fillSettings();
		$resArr['settings'] = $pageObject->jsSettings;
	}
	
	// return JSON
	echo printJSON($resArr);
	exit();
}

?>
