<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
include("include/dbcommon.php");
include('classes/runnerpage.php');
include('include/xtempl.php');

add_nocache_headers();

include("include/form_tracking_Report_variables.php");

RunnerPage::reloginAndLogoutProcess('S');

if( !CheckTablePermissions($strTableName, 'S') && isLogged() )
{
	HeaderRedirect("menu");
	exit();
}

if( !isLogged() && !$lookupInRegisterPage )
{ 
	redirectToLogin();
}

if( !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"], "Search") )
{
	echo "<p>"."You don't have permissions to access this table"." <a href=\"".GetTableLink("login")."\">"."Back to login page"."</a></p>";
	return;
}

include('classes/reportpage.php');
include('classes/searchclause.php');
include("classes/searchpanel.php");
include("classes/searchpanelsimple.php");	
include("classes/searchcontrol.php");
include("classes/panelsearchcontrol.php");	




$layout = new TLayout("report_centered_vert", "RoundedBlue_white", "MobileBlue_white");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["recordcontrols"] = array();
$layout->containers["recordcontrols"][] = array("name"=>"toplinks_print", 
	"block"=>"prints_block", "substyle"=>1  );

$layout->containers["recordcontrols"][] = array("name"=>"toplinks_advsearch", 
	"block"=>"asearch_link", "substyle"=>1  );

$layout->containers["recordcontrols"][] = array("name"=>"toplinks_export_links", 
	"block"=>"export_link", "substyle"=>1  );

$layout->skins["recordcontrols"] = "2";

$layout->blocks["center"][] = "recordcontrols";
$layout->containers["message"] = array();
$layout->containers["message"][] = array("name"=>"message", 
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "2";

$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();
$layout->containers["grid"][] = array("name"=>"report", 
	"block"=>"", "substyle"=>1  );

$layout->skins["grid"] = "grid";

$layout->blocks["center"][] = "grid";
$layout->containers["pagination_bottom"] = array();
$layout->containers["pagination_bottom"][] = array("name"=>"pagination", 
	"block"=>"pagination_block", "substyle"=>1  );

$layout->skins["pagination_bottom"] = "2";

$layout->blocks["center"][] = "pagination_bottom";
$layout->blocks["left"] = array();
$layout->containers["left"] = array();
$layout->containers["left"][] = array("name"=>"vmenu", 
	"block"=>"menu_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"searchpanel", 
	"block"=>"searchPanel", "substyle"=>1  );

$layout->skins["left"] = "menu";

$layout->blocks["left"][] = "left";
$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";

$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();
$layout->containers["toplinks"][] = array("name"=>"loggedas", 
	"block"=>"security_block", "substyle"=>1  );

$layout->skins["toplinks"] = "empty";

$layout->blocks["top"][] = "toplinks";
$layout->containers["hmenu"] = array();
$layout->containers["hmenu"][] = array("name"=>"search", 
	"block"=>"searchform_block", "substyle"=>1  );

$layout->containers["hmenu"][] = array("name"=>"search_buttons", 
	"block"=>"searchformbuttons_block", "substyle"=>1  );

$layout->containers["hmenu"][] = array("name"=>"search_saving_buttons", 
	"block"=>"searchsaving_block", "substyle"=>1  );

$layout->containers["hmenu"][] = array("name"=>"details_found", 
	"block"=>"details_block", "substyle"=>1  );

$layout->containers["hmenu"][] = array("name"=>"page_of", 
	"block"=>"pages_block", "substyle"=>1  );

$layout->containers["hmenu"][] = array("name"=>"recsperpage", 
	"block"=>"recordspp_block", "substyle"=>1  );

$layout->skins["hmenu"] = "undermenu";

$layout->blocks["top"][] = "hmenu";
$page_layouts["form_tracking_Report_report"] = $layout;

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



$sessionPrefix = $strTableName;

$cross_table = 0;
include('classes/reportlib.php');

$xt = new Xtempl();

$id = postvalue("id");
$id = $id ? $id : 1;
// assign the page's id
$xt->assign("id", $id);

//	process reqest data, fill session variables
if(!count($_POST) && !count($_GET))
{
	$sess_unset = array();
	foreach($_SESSION as $key=>$value)
		if(substr($key,0,strlen($strTableName)+1)==$strTableName."_" &&
			strpos(substr($key,strlen($strTableName)+1),"_")===false)
			$sess_unset[] = $key;
	foreach($sess_unset as $key)
		unset($_SESSION[$key]);
}

//array of params for ReportPage constructor
$params = array();
$params["id"] = $id;
$params["tName"] = $strTableName;
$params["pageType"] = PAGE_REPORT;
$params["isGroupSecurity"] = $isGroupSecurity;
$params["isDisplayLoading"] = $gSettings->displayLoading();
$params["arrRecsPerPage"] = $gSettings->getRecordsPerPageArray();
$params["arrGroupsPerPage"] = $gSettings->getGroupsPerPageArray();
$params["reportGroupFields"] = $gSettings->isReportWithGroups();
$params["masterTable"] = postvalue("mastertable");
$params["xt"] = &$xt;

if( postvalue("mode") )
	$params["mode"] = postvalue("mode");
	
if( isset($_REQUEST["masterKeys"]) ) 
	$masterKeys = my_json_decode($_REQUEST["masterKeys"]);

//	copy master keys to params	
$i = 0;
$masterkey = '';
$params["masterKeysReq"] = array();
while (true)
{
	$i++;
	if (isset($_REQUEST["masterkey".$i]))
		$_masterKey = $_REQUEST["masterkey".$i];
	elseif (isset($masterKeys["masterkey".$i]))
		$_masterKey = $masterKeys["masterkey".$i];
	else
		break;
	$params["masterKeysReq"][$i] = $_masterKey;
	$masterkey .= $_masterKey;
}
$params["masterkey"] = $masterkey;

if(!$_SESSION[$sessionPrefix."_pagesize"])
{
	$_SESSION[$sessionPrefix."_pagesize"] = 5;
}
$pageSize = $_SESSION[$sessionPrefix."_pagesize"];

if( !$_SESSION[$sessionPrefix.$masterkey."_pagenumber"] )
	$_SESSION[$sessionPrefix.$masterkey."_pagenumber"] = 1;

if( isset($_REQUEST["goto"]) )
	$_SESSION[$sessionPrefix.$masterkey."_pagenumber"] = intval($_REQUEST["goto"]);
	
$params["pageSize"] = $pageSize;
$params["pagestart"] = ($_SESSION[$sessionPrefix.$masterkey."_pagenumber"] - 1) * $pageSize;
$params["crosstable_refresh"] = postvalue("crosstable_refresh");

$pageObject = new ReportPage($params);
$pageObject->init();

$pageObject->copyMasterKeysToSession();


// Save search
if( postvalue("saveSearch") && postvalue("searchName") && !is_null($pageObject->searchLogger) ) 
{
	$searchName = postvalue("searchName");
	$searchParams = $pageObject->getSearchParamsForSaving();
	$pageObject->searchLogger->saveSearch( $searchName, $searchParams );
	
	$pageObject->searchClauseObj->savedSearchIsRun = true;
	$_SESSION[$pageObject->sessionPrefix.'_advsearch'] = serialize( $pageObject->searchClauseObj );
	
	echo my_json_encode( $searchParams );
	exit();
}
// Delete the saved search
if( postvalue("deleteSearch") && postvalue("searchName") && !is_null($pageObject->searchLogger) ) 
{
	$searchName = postvalue("searchName");
	$pageObject->searchLogger->deleteSearch( $searchName );
	exit();
}

// process details layout and css/js files data


$pageObject->addCommonJs();
// add button events if exist
$pageObject->addButtonHandlers();
$pageObject->commonAssign();

//	Before Process event
if($eventObj->exists("BeforeProcessReport"))
	$eventObj->BeforeProcessReport($conn, $pageObject);


////////////////////////////////////////////////////////////////////////////////////////

// array with all params
$params = array();

$params['sessionPrefix'] = $sessionPrefix;
// report table info
$params['tName'] = $strTableName;
$params['shortTName'] = "form_tracking_Report";
$params['repGroupFieldsCount'] = 6;
$params['repPageSummary'] = 1;
$params['repGlobalSummary'] = 1;
$params['repLayout'] = 2;
$params['showGroupSummaryCount'] = 6;
$params['repShowDet'] = 1;

// report field info
$repGroupFields = array();
$groupField = array();
$groupField['strGroupField'] = "D_SL_DSO_RDO";
$groupField['groupInterval'] = 0;
$groupField['groupOrder'] = 1;
$groupField['showGroupSummary'] = "1";
$groupField['crossTabAxis'] = "0";
$repGroupFields[] = $groupField;
$groupField = array();
$groupField['strGroupField'] = "TOTAL_SIMCARDS_GIVEN";
$groupField['groupInterval'] = 0;
$groupField['groupOrder'] = 2;
$groupField['showGroupSummary'] = "1";
$groupField['crossTabAxis'] = "0";
$repGroupFields[] = $groupField;
$groupField = array();
$groupField['strGroupField'] = "SIMCARDS_ACTIVATED";
$groupField['groupInterval'] = 0;
$groupField['groupOrder'] = 3;
$groupField['showGroupSummary'] = "1";
$groupField['crossTabAxis'] = "0";
$repGroupFields[] = $groupField;
$groupField = array();
$groupField['strGroupField'] = "SIMCARDS_RETURNED";
$groupField['groupInterval'] = 0;
$groupField['groupOrder'] = 4;
$groupField['showGroupSummary'] = "1";
$groupField['crossTabAxis'] = "0";
$repGroupFields[] = $groupField;
$groupField = array();
$groupField['strGroupField'] = "SIMCARDS_REJECTED";
$groupField['groupInterval'] = 0;
$groupField['groupOrder'] = 5;
$groupField['showGroupSummary'] = "1";
$groupField['crossTabAxis'] = "0";
$repGroupFields[] = $groupField;
$groupField = array();
$groupField['strGroupField'] = "SIMCARDS_NOT_RETURNED";
$groupField['groupInterval'] = 0;
$groupField['groupOrder'] = 6;
$groupField['showGroupSummary'] = "1";
$groupField['crossTabAxis'] = "0";
$repGroupFields[] = $groupField;
$params['repGroupFields'] = &$repGroupFields;

// current table key fields
$params['tKeyFields'] = $gSettings->getTableKeys();
// if any field used for totals
$params['isExistTotalFields'] = true;
// table fields list


$params['fieldsArr'] = array();
$fieldArr = array();
$fieldArr['name'] = "D_SL_DSO_RDO";
//'fName' added for maps
$fieldArr['fName'] = "D_SL_DSO_RDO";
$fieldArr['label'] = GetFieldLabel("form_tracking_Report","D_SL_DSO_RDO");
$fieldArr['goodName'] = "D_SL_DSO_RDO";
$fieldArr['repPage'] = "1";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['imageWidth'] = 457;
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = true;
$fieldArr['totalMin'] = true;
$fieldArr['totalAvg'] = true;
$fieldArr['totalSum'] = true;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "TOTAL_SIMCARDS_GIVEN";
//'fName' added for maps
$fieldArr['fName'] = "TOTAL_SIMCARDS_GIVEN";
$fieldArr['label'] = GetFieldLabel("form_tracking_Report","TOTAL_SIMCARDS_GIVEN");
$fieldArr['goodName'] = "TOTAL_SIMCARDS_GIVEN";
$fieldArr['repPage'] = "1";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['imageWidth'] = 457;
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = true;
$fieldArr['totalMin'] = true;
$fieldArr['totalAvg'] = true;
$fieldArr['totalSum'] = true;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "SIMCARDS_ACTIVATED";
//'fName' added for maps
$fieldArr['fName'] = "SIMCARDS_ACTIVATED";
$fieldArr['label'] = GetFieldLabel("form_tracking_Report","SIMCARDS_ACTIVATED");
$fieldArr['goodName'] = "SIMCARDS_ACTIVATED";
$fieldArr['repPage'] = "1";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['imageWidth'] = 457;
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = true;
$fieldArr['totalMin'] = true;
$fieldArr['totalAvg'] = true;
$fieldArr['totalSum'] = true;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "SIMCARDS_RETURNED";
//'fName' added for maps
$fieldArr['fName'] = "SIMCARDS_RETURNED";
$fieldArr['label'] = GetFieldLabel("form_tracking_Report","SIMCARDS_RETURNED");
$fieldArr['goodName'] = "SIMCARDS_RETURNED";
$fieldArr['repPage'] = "1";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['imageWidth'] = 457;
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = true;
$fieldArr['totalMin'] = true;
$fieldArr['totalAvg'] = true;
$fieldArr['totalSum'] = true;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "SIMCARDS_REJECTED";
//'fName' added for maps
$fieldArr['fName'] = "SIMCARDS_REJECTED";
$fieldArr['label'] = GetFieldLabel("form_tracking_Report","SIMCARDS_REJECTED");
$fieldArr['goodName'] = "SIMCARDS_REJECTED";
$fieldArr['repPage'] = "1";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['imageWidth'] = 457;
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = true;
$fieldArr['totalMin'] = true;
$fieldArr['totalAvg'] = true;
$fieldArr['totalSum'] = true;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "SIMCARDS_NOT_RETURNED";
//'fName' added for maps
$fieldArr['fName'] = "SIMCARDS_NOT_RETURNED";
$fieldArr['label'] = GetFieldLabel("form_tracking_Report","SIMCARDS_NOT_RETURNED");
$fieldArr['goodName'] = "SIMCARDS_NOT_RETURNED";
$fieldArr['repPage'] = "1";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['imageWidth'] = 457;
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = true;
$fieldArr['totalMin'] = true;
$fieldArr['totalAvg'] = true;
$fieldArr['totalSum'] = true;
$params['fieldsArr'][] = $fieldArr;

$pageObject->setGoogleMapsParams($params['fieldsArr']);

if ($pageObject->googleMapCfg['isUseGoogleMap'])
{
	$pageObject->initGmaps();
}

$pageObject->setStandartData($params);


if( $pageObject->isShowMenu() )
	$xt->assign("menu_block", true);
	
if( isMobile() )
	$xt->assign('tableinfomobile_block', true);
	
$strPerm = GetUserPermissions();
$allow_search = (strpos($strPerm,"S") !== false);
$allow_export = (strpos($strPerm,"P") !== false);

$xt->assign("toplinks_block", $allow_search);
$xt->assign("asearch_link", $allow_search);
$xt->assign("print_link", $allow_export);
if( !$cross_table )
	$xt->assign("printall_link", $allow_export && $pageObject->arrReport['countRows'] > $pageSize && $pageSize > 0);

$xt->assign("export_link", $allow_export);
$xt->assign("printlink_attrs","id=print_".$id." href='#'");
$xt->assign("printalllink_attrs","id=printAll_".$id." href='#'");
$xt->assign("excellink_attrs","id=export_to_excel".$id." href='#'");
$xt->assign("wordlink_attrs","id=export_to_word".$id." href='#'");
$xt->assign("pdflink_attrs","id=export_to_pdf".$id." href='#'");
$xt->assign("prints_block", $allow_export && ($cross_table || $pageObject->arrReport['countRows'] > 0));
$xt->assign("advsearchlink_attrs", "id=\"advButton".$id."\"");

if(!$cross_table && $allow_search && ($pageObject->reportGroupFields && count($pageObject->arrGroupsPerPage) || !$pageObject->reportGroupFields && count($pageObject->arrRecsPerPage)))
{
	$xt->assign("recordspp_block",true);
	$pageObject->createPerPage();
}
	
$xt->assign("grid_block", $allow_search);

$xt->assign("changepwd_link",$_SESSION["AccessLevel"] != ACCESS_LEVEL_GUEST && $_SESSION["fromFacebook"] == false);
$xt->assign("changepwdlink_attrs","onclick=\"window.location.href='".GetTableLink("changepwd")."';return false;\"");

//set the Search panel
$xt->assign("searchPanel", true);

$additionalScripts = "";
$pageObject->body["begin"] .= GetBaseScriptsForPage($pageObject->isDisplayLoading, $additionalScripts);

if( !isMobile() )
	$pageObject->body["begin"] .= "<div id=\"search_suggest\" class=\"search_suggest\"></div>";
	
// assign body end in such way, to prevent collisions with flyId increment 
$pageObject->body['end'] = array();
AssignMethod($pageObject->body['end'], "assignBodyEnd", $pageObject);

$xt->assignbyref('body', $pageObject->body);

$xt->assign("left_block", true);

$xt->assign("details_block", $pageObject->arrReport['countRows']!=0);
$xt->assign("records_found", $pageObject->arrReport['countRows']);
$xt->assign("pages_block", $pageObject->arrReport['countRows']!=0);
$xt->assign("page", $pageObject->myPage);
$xt->assign("maxpages", $pageObject->maxPages);

$xt->assign("style_block",true);
$xt->assign("shiftstyle_block", true);

if($eventObj->exists("BeforeShowReport"))
	$eventObj->BeforeShowReport($xt, $pageObject->templatefile, $pageObject);
	
// display the 'Back to Master' link and master table info
$pageObject->displayMasterTableInfo();	
	
	
	
if (postvalue("mode")=="listdetails")
{
	$pageObject->addControlsJSAndCSS();
	$pageObject->fillSetCntrlMaps();
	$xt->assign("id",$id);
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$pageObject->body["begin"] = '';
	$pageObject->body["end"] = '';
	$xt->assign("body",$pageObject->body);	
	$xt->assign("style_block",true);
	$xt->assign("guestlink_block", false);
	$xt->assign("container_toplinks", false);
	$xt->assign("container_search", false);
	$xt->assign("container_left", false);
	$xt->assign("container_master", false);
	$xt->assign("cross_controls", false);
	$xt->assign("container_recordcontrols", false);
	$xt->assign("container_hmenu", false);
	$xt->assign("container_pageinfo", false);	
	$xt->assign("container_searchpanel", false);
	$xt->assign("container_menu", false);

	$pageObject->displayAJAX($pageObject->templatefile, $id+1);
	exit();
}
if (postvalue("mode")=="listdetailspopup")
{
	$bricksExcept = array("grid","pagination");
	$xt->assign("container_master", false);
	$xt->unassign('header');
	$xt->unassign('footer');
	$pageObject->body["begin"] = '';
	$pageObject->body["end"] = '';
	$xt->assign("cross_controls", false);
	$xt->hideAllBricksExcept($bricksExcept);
	$xt->prepare_template($pageObject->templatefile);
	$respArr = array();
	$respArr['success'] = true;	
	$respArr['body'] = $xt->fetch_loaded("body");
	$respArr['counter'] = postvalue('counter');

	echo printJSON($respArr);
	exit();
}
	
$pageObject->display($pageObject->templatefile);

?>