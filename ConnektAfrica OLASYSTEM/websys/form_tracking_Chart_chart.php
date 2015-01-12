<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include('include/xtempl.php');
include('classes/runnerpage.php');
add_nocache_headers();

include("include/form_tracking_Chart_variables.php");

RunnerPage::reloginAndLogoutProcess('S');

if (!CheckTablePermissions($strTableName, 'S') && isLogged())
{
	HeaderRedirect("menu");
	exit();
}

if(!isLogged())
{ 
	redirectToLogin();
}

if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{
	echo "<p>"."You don't have permissions to access this table"." <a href=\"".GetTableLink("login")."\">"."Back to login page"."</a></p>";
	return;
}


//	process request data, fill session variables
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

include('classes/searchclause.php');
include("classes/searchpanel.php");
include("classes/searchpanelsimple.php");	
include("classes/searchcontrol.php");
include("classes/panelsearchcontrol.php");	




$layout = new TLayout("chart2", "RoundedBlue_white", "MobileBlue_white");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["message"] = array();
$layout->containers["message"][] = array("name"=>"message", 
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "2";

$layout->blocks["center"][] = "message";
$layout->containers["form"] = array();
$layout->containers["form"][] = array("name"=>"chart", 
	"block"=>"", "substyle"=>1  );

$layout->skins["form"] = "2";

$layout->blocks["center"][] = "form";
$layout->blocks["left"] = array();
$layout->containers["left"] = array();
$layout->containers["left"][] = array("name"=>"loggedas", 
	"block"=>"security_block", "substyle"=>1  );

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
$layout->containers["toplinks"][] = array("name"=>"toplinks_advsearch", 
	"block"=>"asearch_link", "substyle"=>1  );

$layout->skins["toplinks"] = "2";

$layout->blocks["top"][] = "toplinks";
$layout->containers["search"] = array();
$layout->containers["search"][] = array("name"=>"search", 
	"block"=>"searchform_block", "substyle"=>1  );

$layout->containers["search"][] = array("name"=>"search_buttons", 
	"block"=>"searchformbuttons_block", "substyle"=>1  );

$layout->containers["search"][] = array("name"=>"search_saving_buttons", 
	"block"=>"searchsaving_block", "substyle"=>1  );

$layout->skins["search"] = "2";

$layout->blocks["top"][] = "search";
$page_layouts["form_tracking_Chart_chart"] = $layout;

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




$detailsMode = postvalue("mode") == "listdetailspopup" || postvalue("mode") == "listdetails";
$sessionPrefix = $strTableName;

$xt = new Xtempl();

$id = postvalue("id");
$id = $id ? $id : 1;

// assign an id
$xt->assign("id", $id);

//array of params for, most of them used by searchPanel class
$params = array(
	"id" => $id,
	"tName" => $strTableName,
	"pageType" => PAGE_CHART,
	"shortTableName" => "form_tracking_Chart",
	"isGroupSecurity" => $isGroupSecurity,
	"isDisplayLoading" => $gSettings->displayLoading()
);
$params["xt"] = &$xt;
$params["masterTable"] = postvalue("mastertable");

$pageObject = new RunnerPage($params);
$pageObject->init();

//	copy keys to session
if (isset($_REQUEST["masterKeys"]))
	$masterKeys = my_json_decode($_REQUEST["masterKeys"]);
$i = 0;
while (true) 
{
	$i++;
	if (isset($_REQUEST["masterkey".$i]))
		$_masterKey = $_REQUEST["masterkey".$i];
	elseif (isset($masterKeys["masterkey".$i]))
		$_masterKey = $masterKeys["masterkey".$i];
	else
		break;
	$_SESSION[$pageObject->sessionPrefix."_masterkey".$i] = $_masterKey;
}
if($i > 1 && isset($_SESSION[$pageObject->sessionPrefix."_masterkey".$i]))
	unset($_SESSION[$pageObject->sessionPrefix."_masterkey".$i]);

// Save search processing
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



//	Before Process event
if($eventObj->exists("BeforeProcessChart"))
	$eventObj->BeforeProcessChart($conn, $pageObject);

// SearchClause class stuff
$pageObject->jsSettings['tableSettings'][$pageObject->tName]['simpleSearchActive'] = $pageObject->searchClauseObj->simpleSearchActive;
$agregateFields = $pageObject->pSet->getListOfFieldsByExprType(true);
$pageObject->searchClauseObj->haveAgregateFields = count($agregateFields) > 0;
$_SESSION[$sessionPrefix.'_advsearch'] = serialize($pageObject->searchClauseObj);

// add button events if exist
$pageObject->addButtonHandlers();

$pageObject->addCommonJs();

$pageObject->commonAssign();

if($pageObject->isShowMenu())
	$xt->assign("menu_block",true);
	

if($pageObject->isDynamicPerm && IsAdmin()) 
{
	$xt->assign("adminarea_link", true);
	$xt->assign("adminarealink_attrs", "id=\"adminArea".$id."\"");
}

$xt->assign("changepwd_link", $_SESSION["AccessLevel"] != ACCESS_LEVEL_GUEST && $_SESSION["fromFacebook"] == false);
$xt->assign("changepwdlink_attrs", "onclick=\"window.location.href='".GetTableLink("changepwd")."';return false;\"");


//set params for the 'xt_showchart' method showing the chart

$previewChart = false;
if( postvalue("mode") == "listdetails" || postvalue("mode") == "listdetailspopup")
	$previewChart = true;

$chartXtParams = array(
	"chartname" => "form_tracking_Chart",
	"table" => "form_tracking Chart",
	"ctype" => "2DColumn", 
	"chartPreview" => $previewChart, 
	"resize" => $detailsMode, 
	"id" => postvalue("id")
);
$xt->assign_function("form_tracking_Chart_chart", "xt_showchart", $chartXtParams);


$xt->assign("chart_block", true);
$xt->assign("asearch_link", true);
$xt->assign("search_records_block", true);
$xt->assign("exportpdflink_attrs", "onclick='chart.saveAsPDF();'");
$xt->assign("searchform_showall", true);
$xt->assign("showallbutton_attrs", "onclick=\"window.location.href='".GetTableLink("form_tracking_Chart", "chart", "a=showall")."';\"");
$xt->assign("advsearchlink_attrs", "id=\"advButton".$id."\"");

if(!GetChartXML("form_tracking_Chart"))
	$xt->assign("chart_block",false);

if($pageObject->pSet->noRecordsOnFirstPage() && !$pageObject->searchClauseObj->isSearchFunctionalityActivated())
{
	$xt->assign("chart_block",false);
}

//set the Search panel
$xt->assign("searchPanel", true);

$pageObject->body['begin'].= GetBaseScriptsForPage($pageObject->isDisplayLoading);
if( !isMobile() )
	$pageObject->body['begin'].= "<div id=\"search_suggest\" class=\"search_suggest\"></div>";

// assign body end
$pageObject->body['end'] = array();
AssignMethod($pageObject->body['end'], "assignBodyEnd", $pageObject);

$xt->assignbyref('body', $pageObject->body);

$xt->assign("style_block", true);
$xt->assign("shiftstyle_block", true);


if($eventObj->exists("BeforeShowChart"))
	$eventObj->BeforeShowChart($xt, $pageObject->templatefile, $pageObject);

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
	$xt->assign("container_recordcontrols", false);
	$xt->assign("container_hmenu", false);
	$pageObject->displayAJAX($pageObject->templatefile, $id+1);
	exit();
}

if (postvalue("mode")=="listdetailspopup")
{
	$bricksExcept = array("grid","pagination");
	$xt->unassign('header');
	$xt->unassign('footer');
	$pageObject->body["begin"] = '';
	$pageObject->body["end"] = '';
	$xt->hideAllBricksExcept($bricksExcept);
	$xt->prepare_template($pageObject->templatefile);
	$respArr = array();
	$respArr['success'] = true;	
	$respArr['body'] = $xt->fetch_loaded("body");
	$respArr['counter'] = postvalue('counter');
	$xt->assign("container_master", false);
	
	echo printJSON($respArr);
	exit();
}
	
$pageObject->display($pageObject->templatefile);
?>
