<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/returned_msisdn_variables.php");
include('include/xtempl.php');
include('classes/viewpage.php');
include("classes/searchclause.php");

add_nocache_headers();

RunnerPage::reloginAndLogoutProcess("S");

if(!isLogged())
{ 
	redirectToLogin();
}

if( !postvalue("onFly") ) 
	$_SESSION["MyURL"] = $_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
// check user permissions
if(!CheckTablePermissions($strTableName, "S"))
{
	HeaderRedirect("menu");
}




$layout = new TLayout("view2", "RoundedBlue_white", "MobileBlue_white");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["all"] = array();
$layout->containers["all"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"main" );
$layout->containers["main"] = array();
$layout->containers["main"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"view" );
$layout->containers["view"] = array();
$layout->containers["view"][] = array("name"=>"viewheader", 
	"block"=>"viewheader", "substyle"=>2  );

$layout->containers["view"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
$layout->containers["fields"][] = array("name"=>"viewfields", 
	"block"=>"", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"viewbuttons", 
	"block"=>"viewbuttons", "substyle"=>2  );

$layout->skins["fields"] = "fields";


$layout->skins["view"] = "1";


$layout->skins["main"] = "empty";


$layout->containers["all"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"details" );
$layout->containers["details"] = array();
$layout->containers["details"][] = array("name"=>"viewdetails", 
	"block"=>"detail_tables", "substyle"=>1  );

$layout->skins["details"] = "empty";


$layout->skins["all"] = "empty";

$layout->blocks["top"][] = "all";
$page_layouts["returned_msisdn_view"] = $layout;

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




	
						


$layout = new TLayout("list_centered_vert", "RoundedBlue_white", "MobileBlue_white");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["recordcontrols"] = array();
$layout->containers["recordcontrols"][] = array("name"=>"recordcontrol", 
	"block"=>"record_controls_block", "substyle"=>1  );

$layout->containers["recordcontrols"][] = array("name"=>"toplinks", 
	"block"=>"more_list", "substyle"=>1  );

$layout->skins["recordcontrols"] = "2";

$layout->blocks["center"][] = "recordcontrols";
$layout->containers["message"] = array();
$layout->containers["message"][] = array("name"=>"message", 
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "2";

$layout->blocks["center"][] = "message";
$layout->containers["pagination"] = array();
$layout->containers["pagination"][] = array("name"=>"details_found", 
	"block"=>"details_block", "substyle"=>1  );

$layout->containers["pagination"][] = array("name"=>"pagination", 
	"block"=>"pagination_block", "substyle"=>1  );

$layout->containers["pagination"][] = array("name"=>"page_of", 
	"block"=>"pages_block", "substyle"=>1  );

$layout->containers["pagination"][] = array("name"=>"recsperpage", 
	"block"=>"recordspp_block", "substyle"=>1  );

$layout->skins["pagination"] = "2";

$layout->blocks["center"][] = "pagination";
$layout->containers["grid"] = array();
$layout->containers["grid"][] = array("name"=>"grid", 
	"block"=>"grid_block", "substyle"=>1  );

$layout->skins["grid"] = "grid";

$layout->blocks["center"][] = "grid";
$layout->containers["pagination_bottom"] = array();
$layout->containers["pagination_bottom"][] = array("name"=>"details_found", 
	"block"=>"details_block", "substyle"=>1  );

$layout->containers["pagination_bottom"][] = array("name"=>"pagination", 
	"block"=>"pagination_block", "substyle"=>1  );

$layout->containers["pagination_bottom"][] = array("name"=>"page_of", 
	"block"=>"pages_block", "substyle"=>1  );

$layout->containers["pagination_bottom"][] = array("name"=>"recsperpage", 
	"block"=>"recordspp_block", "substyle"=>1  );

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
$layout->containers["master"] = array();
$layout->containers["master"][] = array("name"=>"masterinfo", 
	"block"=>"mastertable_block", "substyle"=>1  );

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

$layout->skins["hmenu"] = "undermenu";

$layout->blocks["top"][] = "hmenu";
$page_layouts["simcards_batches_list"] = $layout;

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
$query = $gQuery->Copy();

$message = "";
$next = array();
$prev = array();
$all = postvalue("all");
$pdf = postvalue("pdf");

//Show view page as popUp or not
$inlineview = postvalue("onFly") ? true : false;
//If show view as popUp, get parent Id
$parId = $inlineview ? postvalue("parId") : 0;

//Set page id
$id = postvalue("id");
$id = $id ? $id : 1;	
$xt->assign("id", $id);

$keys = array();
$keys["ID"] = postvalue("editid1");

//array of params for classes
$params = array("pageType" => PAGE_VIEW);
$params["id"] = $id;
$params["xt"] = &$xt;
$params["all"] = $all;
$params["keys"] = $keys;
$params["tName"] = $strTableName;
//Get array of tabs for edit page
$params['useTabsOnView'] = $gSettings->useTabsOnView();
if( $params['useTabsOnView'] )
	$params['arrViewTabs'] = $gSettings->getViewTabs();
	
$pageObject = new ViewPage($params);
$pageObject->init();

// SearchClause class stuff
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

// proccess big google maps

// add button events if exist
$pageObject->addButtonHandlers();

//For show detail tables on master page view
$dpParams = array();
if($pageObject->isShowDetailTables && !isMobile())
{
	$ids = $id;
	
		$dpPermis = $pageObject->getPermissions("simcards_batches");
	if ($dpPermis['search']){
		$mKeys["simcards_batches"] = $pageObject->pSet->getMasterKeysByDetailTable("simcards_batches");
		$dpParams['strTableNames'][] = "simcards_batches";
		$dpParams['ids'][] = ++$ids;
				$dpParams['type'][] = "list";
		$dpParams['params'][] = array();
	}
	$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array();
}

//	Before Process event
if($eventObj->exists("BeforeProcessView"))
	$eventObj->BeforeProcessView($conn, $pageObject);
	
//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();

if (!sizeof($data)) 
{
	HeaderRedirect("returned_msisdn", "list", "a=return");
	exit();
}

$out = "";
$fieldsArr = array();
$arr = array();
$arr['fName'] = "ID";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ID");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "MSISDN";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("MSISDN");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Status";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Status");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Date";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Date");
$fieldsArr[] = $arr;

$mainTableOwnerID = $pageObject->pSet->getTableOwnerIdField();
$ownerIdValue = "";

$pageObject->setGoogleMapsParams($fieldsArr);

$hideEmptyFields = $pageObject->pSet->hideEmptyViewFields();

while($data)
{
	$xt->assign("show_key1", $pageObject->showDBValue("ID", $data));

	$keylink = "";
	$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["ID"]));

	$value = $pageObject->showDBValue("ID", $data, $keylink);
	if( $mainTableOwnerID == "ID" )
		$ownerIdValue = $value;
	$xt->assign("ID_value",$value);
	if(!$pageObject->isAppearOnTabs("ID"))
		$xt->assign("ID_fieldblock",true);
	else
		$xt->assign("ID_tabfieldblock",true);
		
	if( $hideEmptyFields && $value == "" ) 
		$pageObject->hideField("ID");
	$value = $pageObject->showDBValue("MSISDN", $data, $keylink);
	if( $mainTableOwnerID == "MSISDN" )
		$ownerIdValue = $value;
	$xt->assign("MSISDN_value",$value);
	if(!$pageObject->isAppearOnTabs("MSISDN"))
		$xt->assign("MSISDN_fieldblock",true);
	else
		$xt->assign("MSISDN_tabfieldblock",true);
		
	if( $hideEmptyFields && $value == "" ) 
		$pageObject->hideField("MSISDN");
	$value = $pageObject->showDBValue("Status", $data, $keylink);
	if( $mainTableOwnerID == "Status" )
		$ownerIdValue = $value;
	$xt->assign("Status_value",$value);
	if(!$pageObject->isAppearOnTabs("Status"))
		$xt->assign("Status_fieldblock",true);
	else
		$xt->assign("Status_tabfieldblock",true);
		
	if( $hideEmptyFields && $value == "" ) 
		$pageObject->hideField("Status");
	$value = $pageObject->showDBValue("Date", $data, $keylink);
	if( $mainTableOwnerID == "Date" )
		$ownerIdValue = $value;
	$xt->assign("Date_value",$value);
	if(!$pageObject->isAppearOnTabs("Date"))
		$xt->assign("Date_fieldblock",true);
	else
		$xt->assign("Date_tabfieldblock",true);
		
	if( $hideEmptyFields && $value == "" ) 
		$pageObject->hideField("Date");

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
	
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
			$options['masterTable'] = "returned_msisdn";
			$options['firstTime'] = 1;
			
			$strTableName = $dpParams['strTableNames'][$d];
			include_once("include/".GetTableURL($strTableName)."_settings.php");
			if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
			{
				$strTableName = "returned_msisdn";
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
			$options['masterTable'] = "returned_msisdn";
			$options['firstTime'] = 1;
			$options['tName'] = $strTableName;
			$options['id'] = $dpParams['ids'][$d];
			$options['flyId'] = $pageObject->genId()+1;
			$options['shortTableName'] = GetTableURL($strTableName);
			include_once("include/".GetTableURL($strTableName)."_settings.php");
			if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
			{
				$strTableName = "returned_msisdn";
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
		
		} else
		{	// list
			$options = array();
			//array of params for classes
			$options["mode"] = LIST_DETAILS;
			$options["pageType"] = PAGE_LIST;
			$options["masterPageType"] = PAGE_VIEW;
			$options["mainMasterPageType"] = PAGE_VIEW;
			$options['masterTable'] = "returned_msisdn";
			$options['firstTime'] = 1;
			
			$strTableName = $dpParams['strTableNames'][$d];
			include_once("include/".GetTableURL($strTableName)."_settings.php");
			if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
			{
				$strTableName = "returned_msisdn";
				continue;
			}
			
			$layout = GetPageLayout(GoodFieldName($strTableName), PAGE_LIST);
			if($layout)
			{
				$pageObject->AddCSSFile($layout->getCSSFiles(isRTL(), isMobile()));
			}
			
			$options['xt'] = new Xtempl();
			$options['id'] = $dpParams['ids'][$d];
			$options['flyId'] = $pageObject->genId()+1;
			$mkr = 1;
			foreach($mKeys[$strTableName] as $mk)
			{
				$options['masterKeysReq'][$mkr++] = $data[$mk];
			}

			$listPageObject = ListPage::createListPage($strTableName, $options);
			
			// prepare code
			$listPageObject->prepareForBuildPage();
			
			// show page
			if($listPageObject->permis[$strTableName]['search'] && $listPageObject->rowsFound)
			{
				//set page events
				foreach($listPageObject->eventsObject->events as $event => $name)
					$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
				
				//add detail settings to master settings
				$listPageObject->addControlsJSAndCSS();
				$listPageObject->fillSetCntrlMaps();
				$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
				$dControlsMap[$strTableName] = $listPageObject->controlsMap;
				$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
				foreach($listPageObject->jsSettings['global']['shortTNames'] as $keySet=>$val)
				{
					if(!array_key_exists($keySet,$pageObject->settingsMap["globalSettings"]['shortTNames']))
						$pageObject->settingsMap["globalSettings"]['shortTNames'][$keySet] = $val;
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
		}
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap; 
	$strTableName = "returned_msisdn";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin prepare for Next Prev button
if(!@$_SESSION[$strTableName."_noNextPrev"] && !$pdf) 
{
	$pageObject->getNextPrevRecordKeys($data,"Search",$next,$prev);
}
//End prepare for Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if ($pageObject->googleMapCfg['isUseGoogleMap'])
{
	$pageObject->initGmaps();
}

$pageObject->addCommonJs();

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 

if(!$inlineview)
{
	$pageObject->body["begin"].= GetBaseScriptsForPage(false);
		
	$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $pageObject->jsKeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]['keyFields'] = $pageObject->keyFields;
	
	// assign body end
	$pageObject->body['end'] = array();
	AssignMethod($pageObject->body['end'], "assignBodyEnd", $pageObject);
	
	$xt->assign("flybody", true);
	$xt->assign("body", $pageObject->body);
	$pageObject->assignFormFooterAndHeaderBricks( true );
}
else
{
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody",$pageObject->body);
	$xt->assign("body",true);
	$xt->assign("pdflink_block",false);
	
	$pageObject->fillSetCntrlMaps();
}
$xt->assign("style_block",true);
$xt->assign("stylefiles_block",true);

$editlink = "";
$editkeys = array();
	$editkeys["editid1"]=postvalue("editid1");
foreach($editkeys as $key=>$val)
{
	if($editlink)
		$editlink.= "&";
	$editlink.= $key."=".$val;
}
$xt->assign("editlink_attrs","id=\"editLink".$id."\" name=\"editLink".$id."\" onclick=\"window.location.href='".GetTableLink("returned_msisdn", "edit", $editlink)."'\"");

$strPerm = GetUserPermissions($strTableName);
if(CheckSecurity($ownerIdValue,"Edit") && !$inlineview && strpos($strPerm, "E")!==false)
	$xt->assign("edit_button",true);
else
	$xt->assign("edit_button",false);

if(!$pdf && !$all) 
{
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin show Next Prev button
	$nextlink=$prevlink="";
	if(count($next))
	{
		$xt->assign("next_button", true);
	 		$nextlink .="editid1=".runner_htmlspecialchars(rawurlencode($next[1-1]));
		$xt->assign("nextbutton_attrs", "id=\"nextButton".$id."\"");
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
			$prevlink .="editid1=".runner_htmlspecialchars(rawurlencode($prev[1-1]));
		$xt->assign("prevbutton_attrs", "id=\"prevButton".$id."\"");
	}
	else if( count($next) )
	{
		$xt->assign("prev_button", true);
		$xt->assign("prevbutton_class", "rnr-invisible-button");
	}
	else
		$xt->assign("prev_button", false);
//End show Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	if(!$inlineview) 
	{
		$xt->assign("back_button",true);
		$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
	}
	else
	{
		$xt->assign("close_button",true);
		$xt->assign("closebutton_attrs","id=\"closeButton".$id."\"");
	}
	
	$permis = $pageObject->getPermissions();	
	if($pageObject->pSet->hasEditPage() && $permis['edit'])
	{
		$xt->assign("edit_page_button", true);
		$xt->assign("edit_page_button_attrs","id=\"editPageButton".$id."\"");
	}
}

$oldtemplatefile = $pageObject->templatefile;

if(!$all)
{
	if($eventObj->exists("BeforeShowView"))
	{
		$templatefile = $pageObject->templatefile;
		$eventObj->BeforeShowView($xt,$templatefile,$data, $pageObject);
		$pageObject->templatefile = $templatefile;
	}
	if(!$pdf)
	{
		if(!$inlineview)
			$pageObject->display($pageObject->templatefile);
		else
		{
			$pageObject->displayAJAX($pageObject->templatefile, $id+1);
			exit(); // .net compatibility
		}
	}
	break;
}
}


?>