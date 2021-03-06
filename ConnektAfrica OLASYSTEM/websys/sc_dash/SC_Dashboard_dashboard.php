<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("classes/searchclause.php");
include('include/xtempl.php');
include('classes/runnerpage.php');
include('classes/dashboardpage.php');

add_nocache_headers();

include("include/SC_Dashboard_variables.php");

if( !Security::processPageSecurity( $strtablename, 'S' ) )
	return;




$layout = new TLayout("dashboard", "RoundedBlue_white", "MobileBlue_white");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["search"] = array();
$layout->container_properties["search"] = array(  );
$layout->containers["search"][] = array("name"=>"search_dashboard", 
	"block"=>"", "substyle"=>1  );

$layout->skins["search"] = "1";

$layout->blocks["center"][] = "search";
$layout->containers["dash"] = array();
$layout->container_properties["dash"] = array(  );
$layout->containers["dash"][] = array("name"=>"dashboard", 
	"block"=>"", "substyle"=>1  );

$layout->skins["dash"] = "";

$layout->blocks["center"][] = "dash";
$layout->blocks["top"] = array();
$layout->containers["toplinks"] = array();
$layout->container_properties["toplinks"] = array(  );
$layout->containers["toplinks"][] = array("name"=>"loggedas", 
	"block"=>"security_block", "substyle"=>1  );

$layout->containers["toplinks"][] = array("name"=>"toplinks_dashboard_advsearch", 
	"block"=>"asearch_link", "substyle"=>1  );

$layout->skins["toplinks"] = "empty";

$layout->blocks["top"][] = "toplinks";
$layout->containers["hmenu"] = array();
$layout->container_properties["hmenu"] = array(  );
$layout->containers["hmenu"][] = array("name"=>"hmenu", 
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["hmenu"] = "hmenu";

$layout->blocks["top"][] = "hmenu";
$page_layouts["SC_Dashboard_dashboard"] = $layout;

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



$xt = new Xtempl();
$id = postvalue("id");
$id = $id != "" ? $id : 1;

//array of params for classes
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["tName"] = $strTableName;
$params["pageType"] = PAGE_DASHBOARD;
$params["templatefile"] = GetTemplateName("SC_Dashboard", "dashboard");
				
$pageObject = new DashboardPage($params);
$pageObject->init();

$pageObject->process();
?>