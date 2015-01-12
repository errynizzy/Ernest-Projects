<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
include("include/dbcommon.php");
include('classes/searchclause.php');
include 'classes/runnerpage.php';
include('include/xtempl.php');

if (@$_REQUEST["format"]!="excel" && @$_REQUEST["format"]!="word") 
	add_nocache_headers();

include("include/form_tracking_Report_variables.php");

RunnerPage::reloginAndLogoutProcess("P");

if(!isLogged())
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	redirectToLogin();
}

// check user permissions
if(!CheckTablePermissions($strTableName, "P"))
{
	HeaderRedirect("menu");
}

$cipherer = new RunnerCipherer($strTableName);

$xt = new Xtempl();




$layout = new TLayout("report_print", "RoundedBlue_white", "MobileBlue_white");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";

$layout->blocks["top"][] = "master";
$layout->skins["pdf"] = "empty";

$layout->blocks["top"][] = "pdf";
$layout->containers["grid"] = array();
$layout->containers["grid"][] = array("name"=>"report_print", 
	"block"=>"", "substyle"=>1  );

$layout->skins["grid"] = "empty";

$layout->blocks["top"][] = "grid";
$page_layouts["form_tracking_Report_rprint"] = $layout;

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



$id = postvalue("id") != "" ? postvalue("id") : 1;

//array of params for classes
$params = array("pageType" => PAGE_RPRINT, "id" =>$id, "tName"=>$strTableName);
$params["templatefile"] = GetTemplateName("form_tracking_Report", "rprint");
$params["xt"] = &$xt;
$pageObject = new RunnerPage($params);
$pageObject->init();
$pageObject->AddJSFile("include/lang/".getLangFileName(mlang_getcurrentlang()).".js");

// add button events if exist
$pageObject->addButtonHandlers();

$sessionPrefix = $strTableName;

$cross_table = 0;

if($cross_table)
{
	include("classes/crosstable_report.php");
//	include("include/reportfunctions.php");
}

//	Before Process event
if($eventObj->exists("BeforeProcessPrint"))
	$eventObj->BeforeProcessPrint($conn, $pageObject);
	
$forExport = false;

if (@$_REQUEST["format"]=="excel")
{
	$forExport = "excel";
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment;Filename=form_tracking_Report.xls");
	echo "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">";
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
}
else if (@$_REQUEST["format"]=="word")
{
	$forExport = "word";
	header("Content-Type: application/vnd.ms-word");
	header("Content-Disposition: attachment;Filename=form_tracking_Report.doc");
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
}

if(!$_SESSION[$sessionPrefix."_pagenumber"])
	$_SESSION[$sessionPrefix."_pagenumber"]=1;
	
if(!$_SESSION[$sessionPrefix."_pagesize"])
	$_SESSION[$sessionPrefix."_pagesize"]=30;

$bAll = isset($_REQUEST["all"]) && $_REQUEST["all"];
$pagestart = ($_SESSION[$sessionPrefix."_pagenumber"]-1)*$_SESSION[$sessionPrefix."_pagesize"];

if (@$_REQUEST["format"])
{
	//$forExport = true;
	// read stylesheet file
	//$cssdata = myfile_get_contents(getabspath("/include/style.css"), "r");
	//$xt->assign("cssdata",$cssdata);
	$xt->assign("stylesheetlink",false);
	//$bAll=false;
}
else
{
	$xt->assign("stylesheetlink",true);	
}

$strWhereClause = @$_SESSION[$sessionPrefix."_where"];

$strSQL = $gQuery->gSQLWhere($strWhereClause);

$strOrderBy = $_SESSION[$strTableName."_order"];
if(!$strOrderBy)
	$strOrderBy=$gstrOrderBy;
$strSQL.=" ".trim($strOrderBy);

$strSQLbak = $strSQL;

if($eventObj->exists("BeforeQueryPrint"))
	$eventObj->BeforeQueryPrint($strSQL,$strWhereClause,$strOrderBy, $pageObject);

$strSQL = $gQuery->gSQLWhere($strWhereClause);



//	Rebuild SQL if needed

if($strSQL!=$strSQLbak)
{
//	changed $strSQL - old style	
	$numrows=GetRowCount($strSQL);
}
else
{
	//$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
	$strSQL = SQLQuery::gSQLWhere_having($gQuery->HeadToSql(), $gQuery->FromToSql().$joinFromPart, $gQuery->WhereToSql(),
			$gQuery->GroupByToSql(), $gQuery->Having()->toSql($gQuery), $strWhereClause, $strHavingClause, $strSearchCriteria);
			
	$strSQL.=" ".trim($strOrderBy);
	
	$rowcount=false;
	if($eventObj->exists("ListGetRowCount"))
	{
		$masterKeysReq=array();
		for($i = 0; $i < count($pageObject->detailKeysByM); $i ++)
			$masterKeysReq[]=$_SESSION[$strTableName."_masterkey".($i + 1)];
			$rowcount=$eventObj->ListGetRowCount($pageObject->searchClauseObj,$_SESSION[$strTableName."_mastertable"],$masterKeysReq,$selected_recs, $pageObject);
	}
	if($rowcount!==false)
		$numrows=$rowcount;
	else
	{
		//$numrows = $gQuery->gSQLRowCount($strWhereClause, $strHavingClause, $strSearchCriteria); 
		$numrows = SQLQuery::gSQLRowCount_int($gQuery->HeadToSql(), $gQuery->FromToSql().$joinFromPart, $gQuery->WhereToSql(), $gQuery->GroupByToSql(), 
				$gQuery->Having()->toSql($gQuery), $strWhereClause, $strHavingClause, $strSearchCriteria);		
	}
}


LogInfo($strSQL);

//////////////////////////////////////////////////////////////////////////////////////
include('classes/reportlib.php');

// array with all params
$params = array();
$params['sessionPrefix'] = $sessionPrefix;
// report table info
$params['tName'] = $strTableName;
$params['repGroupFieldsCount'] = 6;
$params['repPageSummary'] = 1;
$params['repGlobalSummary'] = 1;
$params['repLayout'] = 2;
$params['showGroupSummaryCount'] = 6;
$params['repShowDet'] = 1;
$params['mode'] = MODE_PRINT;


// report field info
$repGroupFields = array();
$groupField = array();
$groupField['strGroupField'] = "D_SL_DSO_RDO";
$groupField['groupInterval'] = 0;
$groupField['groupOrder'] = 1;
$groupField['strGroupField'] = "D_SL_DSO_RDO";
$groupField['showGroupSummary'] = "1";
$repGroupFields[] = $groupField;
$groupField = array();
$groupField['strGroupField'] = "TOTAL_SIMCARDS_GIVEN";
$groupField['groupInterval'] = 0;
$groupField['groupOrder'] = 2;
$groupField['strGroupField'] = "TOTAL_SIMCARDS_GIVEN";
$groupField['showGroupSummary'] = "1";
$repGroupFields[] = $groupField;
$groupField = array();
$groupField['strGroupField'] = "SIMCARDS_ACTIVATED";
$groupField['groupInterval'] = 0;
$groupField['groupOrder'] = 3;
$groupField['strGroupField'] = "SIMCARDS_ACTIVATED";
$groupField['showGroupSummary'] = "1";
$repGroupFields[] = $groupField;
$groupField = array();
$groupField['strGroupField'] = "SIMCARDS_RETURNED";
$groupField['groupInterval'] = 0;
$groupField['groupOrder'] = 4;
$groupField['strGroupField'] = "SIMCARDS_RETURNED";
$groupField['showGroupSummary'] = "1";
$repGroupFields[] = $groupField;
$groupField = array();
$groupField['strGroupField'] = "SIMCARDS_REJECTED";
$groupField['groupInterval'] = 0;
$groupField['groupOrder'] = 5;
$groupField['strGroupField'] = "SIMCARDS_REJECTED";
$groupField['showGroupSummary'] = "1";
$repGroupFields[] = $groupField;
$groupField = array();
$groupField['strGroupField'] = "SIMCARDS_NOT_RETURNED";
$groupField['groupInterval'] = 0;
$groupField['groupOrder'] = 6;
$groupField['strGroupField'] = "SIMCARDS_NOT_RETURNED";
$groupField['showGroupSummary'] = "1";
$repGroupFields[] = $groupField;
$params['repGroupFields'] = &$repGroupFields;



// current table key fields
$params['tKeyFields'] = $pageObject->pSet->getTableKeys();
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


$whereComponents = $pageObject->getWhereComponents();
$searchWhereClause = $whereComponents["searchWhere"];
$searchHavingClause = $whereComponents["searchHaving"];
$searchCommonWhere = $whereComponents["commonWhere"];
$filterWhere = $pageObject->getFiltersWhere();
$filterHaving = $pageObject->getFiltersHaving();

if($cross_table)
{
	$cross_array = array();
	$cross_array["tables"][]="form_tracking Report";
	foreach($repGroupFields as $ind=>$value)
	{
		$cross_array["group_fields"][$ind]["name"]=$value["strGroupField"];
		$cross_array["group_fields"][$ind]["int_type"]=$value["groupInterval"];
		$cross_array["group_fields"][$ind]["group_type"]="all";
	}
	$sum_x = 0;
	$sum_y = 0;
	
	$lastPos = count($cross_array["group_fields"]);
	
	if($sum_x || $sum_y)
		$cross_array["group_fields"][$lastPos]["sum_total"] = true;
	else
		$cross_array["group_fields"][$lastPos]["sum_total"] = false;
	if($sum_x)
		$cross_array["group_fields"][$lastPos]["sum_x"]=true;
	else
		$cross_array["group_fields"][$lastPos]["sum_x"]=false;
	if($sum_y)
		$cross_array["group_fields"][$lastPos]["sum_y"]=true;
	else
		$cross_array["group_fields"][$lastPos]["sum_y"]=false;
	
	foreach($params["fieldsArr"] as $ind=>$value)
	{
		$cross_array["totals"][$value["name"]]["name"]=$value["name"];
		$cross_array["totals"][$value["name"]]["label"]=$value["label"];
		if($value["totalMax"])
			$cross_array["totals"][$value["name"]]["max"]=true;
		else
			$cross_array["totals"][$value["name"]]["max"]=false;
		if($value["totalMin"])
			$cross_array["totals"][$value["name"]]["min"]=true;
		else
			$cross_array["totals"][$value["name"]]["min"]=false;
		if($value["totalSum"])
			$cross_array["totals"][$value["name"]]["sum"]=true;
		else
			$cross_array["totals"][$value["name"]]["sum"]=false;
		if($value["totalAvg"])
			$cross_array["totals"][$value["name"]]["avg"]=true;
		else
			$cross_array["totals"][$value["name"]]["avg"]=false;
	}
		
	$cross_array = array(
		"tables" => $cross_array["tables"],
		"group_fields" => $cross_array["group_fields"],
		"totals" => $cross_array["totals"],
		"table_type" => "project", 
		"fromWizard" => true
	);	
	
	$strSecuritySql = SecuritySQL("Search", $pageObject->tName);
	$gsqlWhereExpr = combineSQLCriteria( array( $strSecuritySql, $filterWhere, $searchCommonWhere) );
	$searchHavingClause = whereAdd($searchHavingClause, $filterHaving);
	
	$strSQL = $gQuery->gSQLWhere_having_fromQuery($gsqlWhereExpr, $searchWhereClause, $searchHavingClause, $pageObject->searchClauseObj->getCriteriaCombineType());
		
	$crosstableObj = new CrossTableReport($cross_array, $strSQL);
	
	if(postvalue("crosstable_refresh"))
	{
		$crosstableObj->ajax_refresh_crosstable();
		exit();
	}
	
	$xt->assign("report_cross_header",$crosstableObj->getPrintCrossHeader(postvalue("axis_x"),postvalue("axis_y"),postvalue("field"),postvalue("group_func")));
	$xt->assign("select_group_x",$crosstableObj->getGroupFields("x"));
	$xt->assign("select_group_y",$crosstableObj->getGroupFields("y"));
	$grid_row["data"]=$crosstableObj->getCrossTableData();
	$arr_res=$crosstableObj->getValuesControl();
	$res=$arr_res[0];
	$first_field=$arr_res[1];
	if($res)
	{
		$xt->assign("select_data",$res);
		$xt->assign("group_func",$crosstableObj->getRadioGroupFunctions());
		//$arr_value = $crosstableObj->getSelectedValue();
		//$field = $arr_value[postvalue("field")];
		//$group_func=$crosstableObj->getTotalsName($crosstableObj->getGroupFunction($field,postvalue("group_func")));
		$group_func = $crosstableObj->getTotalsName( $crosstableObj->getCurrentGroupFunction() );
		$xt->assign("totals", $group_func);
	}
	if(count($grid_row["data"])>0)
	{
		$xt->assign("grid_row",$grid_row);
		$xt->assignbyref("group_header",$crosstableObj->getCrossTableHeader());
		$xt->assignbyref("col_summary",$crosstableObj->getCrossTableSummary());	
		$xt->assignbyref("total_summary",$crosstableObj->getTotalSummary());
		if($sum_x || $sum_y)
			$xt->assign("cross_totals",true);
	}
	$pages[0]['grid_row'] = $grid_row;
	$pages[0]['begin'] = "<div name=page class=printpage>";
	$pages[0]['end'] = "</div>";
	$xt->assign("pageno",1);
	$xt->assign("maxpages",1);
}
else
{	
	$PageSize = $_SESSION[$sessionPrefix."_pagesize"];
	$gsqlWhereExpr = combineSQLCriteria( array($whereComponents["commonWhere"], $filterWhere) );
	$gsqlHavingExpr = whereAdd($whereComponents["commonHaving"], $filterHaving);
	
	$sqlArray = array($gQuery->HeadToSql(), $gQuery->FromToSql(), $gsqlWhereExpr, $gQuery->GroupByToSql(), $gsqlHavingExpr);
	$rb = new Report($sqlArray, $pageObject->pSet->GetTableData(".orderindexes"), $conn, $PageSize, 30, $params, $searchWhereClause, $searchHavingClause, $pageObject);
	$rb->forExport = $forExport;

	$_SESSION[$sessionPrefix.'_advsearch'] = serialize($pageObject->searchClauseObj);

	$arrReport = $rb->getReport($bAll ? -1 : $pagestart);
	//////////////////////////////////////////////////////////////////////////////////////
	$pages = array();
	if($pagestart == -1 || $bAll)
	{
		$pages = $rb->getPages();
		for($i = 0; $i < count($pages); $i++)
		{
			$pages[$i]['grid_row'] = array("data" => $arrReport['list'][$i]);
			$pages[$i]['begin'] = ($i < count($pages) - 1) ? "<div name=\"page\" class=\"printpage\">" : "<div name=page>";
			$pages[$i]['end'] = "</div>";
			$pages[$i]['pageno'] = $i+1;
		}
		$xt->assign("maxpages",count($pages));
	}
	else
	{
		$pages[0]['grid_row'] = array("data" => $arrReport['list']);
		$pages[0]['begin'] = "<div name=page>";
		$pages[0]['end'] = "</div>";
		$xt->assign("pageno",$_SESSION[$sessionPrefix."_pagenumber"]);
		$xt->assign("maxpages",$arrReport['maxpages']);
	}

	foreach($arrReport['page'] as $key => $value)
		$xt->assign($key, $value);

			foreach($arrReport['global'] as $key => $value)
			$xt->assign($key, $value);
	  
		if(0 == count($pages))
			$pages []= array();
			
		$pages[count($pages) - 1]['global_summary'] = true;
		$pages[count($pages) - 1]['begin'] = "<div name=page>";
		$pages[count($pages) - 1]['end'] = "</div>";

	$mypage = $_SESSION[$sessionPrefix."_pagenumber"];
	$maxpages = count($pages);
}
$xt->assign_loopsection("pages", $pages);



$pageObject->body["begin"] .= GetBaseScriptsForPage(false);

$pageObject->fillSetCntrlMaps();
$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";";
$pageObject->body['end'] .= '</script>';
$pageObject->body["end"] .= "<script language=\"JavaScript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>\r\n";
$pageObject->addCommonJs();


//$pageObject->body["end"] .= "<script type=\"text/javascript\">".$pageObject->PrepareJS()."</script>";
	
	
$xt->assignbyref("body",$pageObject->body);
$xt->assign("grid_block",true);
$xt->assign("grid_header",true);

$xt->assign("D_SL_DSO_RDO_fieldheader",true);
$xt->assign("TOTAL_SIMCARDS_GIVEN_fieldheader",true);
$xt->assign("SIMCARDS_ACTIVATED_fieldheader",true);
$xt->assign("SIMCARDS_RETURNED_fieldheader",true);
$xt->assign("SIMCARDS_REJECTED_fieldheader",true);
$xt->assign("SIMCARDS_NOT_RETURNED_fieldheader",true);



	




if (@$_REQUEST["format"] && $_REQUEST["format"]!="pdf")
{
	$pages[0]["page_summary"]=false;
	$xt->assign_loopsection("pages",$pages);
	$xt->assign("pdflink_block",false);
	$pageObject->body["begin"]="";
	$pageObject->body["end"]="";
	$xt->assignbyref("body",$pageObject->body);
}

if($eventObj->exists("BeforeShowPrint"))
	$eventObj->BeforeShowPrint($xt,$pageObject->templatefile, $pageObject);

$xt->assign("bodyattrs", 'style="margin:10px;"');

if(!postvalue("pdf"))
{
	if(@$_REQUEST["format"]=="excel" || @$_REQUEST["format"]=="word") 
	{
		$xt->load_template($pageObject->templatefile);
		$contents = $xt->template;
		$pos1=0;
		while($pos1!==false)
		{
			$pos1=stripos($contents,"<link ",$pos1);
			if($pos1!==false)
			{
				$pos2=strpos($contents,">",$pos1);
				if(!$pos2==false)
					$contents=substr($contents,0,$pos1-1).substr($contents,$pos2+1);
				$pos1+=1;
			}
		}
		
		$contents=str_ireplace("<img src=\"/".GetRootPathForResources("images/spacer.gif")."\">","",$contents);
		$contents=str_ireplace("<img src=\"/".GetRootPathForResources("images/spacer.gif")."\"/>","",$contents);
		$contents=str_ireplace("<img src=\"@webRootPath/images/spacer.gif\" />","",$contents); // .net template compatibility
		$xt->template=$contents;
		xt_process_template($xt,$xt->template);
	}	
	elseif (@$_REQUEST["format"]=="pdf")
	{
		$xt->load_template($pageObject->templatefile);
		$pageObject->body["end"] .= "<script>$(window).load(function() { Runner.Pdf.RunPDF();});</script>";	
		xt_process_template($xt,$xt->template);
	}		
	else
		$pageObject->display($pageObject->templatefile);

}
else
{
}
?>