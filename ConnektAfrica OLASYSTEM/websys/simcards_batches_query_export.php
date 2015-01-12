<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
include("include/dbcommon.php");
include("classes/searchclause.php");
include("classes/sql.php");
session_cache_limiter("none");

include("include/simcards_batches_query_variables.php");




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







$layout = new TLayout("export2", "RoundedBlue_white", "MobileBlue_white");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["export"] = array();
$layout->containers["export"][] = array("name"=>"exportheader", 
	"block"=>"", "substyle"=>2  );

$layout->containers["export"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"range" );
$layout->containers["range"] = array();
$layout->containers["range"][] = array("name"=>"exprange", 
	"block"=>"range_block", "substyle"=>1  );

$layout->skins["range"] = "fields";


$layout->containers["export"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
$layout->containers["fields"][] = array("name"=>"expoutput", 
	"block"=>"", "substyle"=>1  );

$layout->skins["fields"] = "fields";


$layout->containers["export"][] = array("name"=>"expbuttons", 
	"block"=>"", "substyle"=>2  );

$layout->skins["export"] = "1";

$layout->blocks["top"][] = "export";
$page_layouts["simcards_batches_query_export"] = $layout;

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



// Modify query: remove blob fields from fieldlist.
// Blob fields on an export page are shown using imager.php (for example).
// They don't need to be selected from DB in export.php itself.
//$gQuery->ReplaceFieldsWithDummies(GetBinaryFieldsIndices());

$cipherer = new RunnerCipherer($strTableName);

$strWhereClause = "";
$strHavingClause = "";
$strSearchCriteria = "and";
$selected_recs = array();
$options = "1";

header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 
include('include/xtempl.php');
include('classes/runnerpage.php');
$xt = new Xtempl();
$id = postvalue("id") != "" ? postvalue("id") : 1;

$phpVersion = (int)substr(phpversion(), 0, 1); 
if($phpVersion > 4)
{
	include("include/export_functions.php");
	$xt->assign("groupExcel", true);
}
else
	$xt->assign("excel", true);

//array of params for classes
$params = array("pageType" => PAGE_EXPORT, "id" => $id, "tName" => $strTableName);
$params["xt"] = &$xt;
if(!$eventObj->exists("ListGetRowCount") && !$eventObj->exists("ListQuery"))
	$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);
$pageObject->init();

//	Before Process event
if($eventObj->exists("BeforeProcessExport"))
	$eventObj->BeforeProcessExport($conn, $pageObject);

if (@$_REQUEST["a"]!="")
{
	$options = "";
	$sWhere = "1=0";	

//	process selection
	$selected_recs = array();
	if (@$_REQUEST["mdelete"])
	{
		foreach(@$_REQUEST["mdelete"] as $ind)
		{
			$keys=array();
			$keys["ICCID"] = refine($_REQUEST["mdelete1"][mdeleteIndex($ind)]);
			$selected_recs[] = $keys;
		}
	}
	elseif(@$_REQUEST["selection"])
	{
		foreach(@$_REQUEST["selection"] as $keyblock)
		{
			$arr=explode("&",refine($keyblock));
			if(count($arr)<1)
				continue;
			$keys = array();
			$keys["ICCID"] = urldecode($arr[0]);
			$selected_recs[] = $keys;
		}
	}

	foreach($selected_recs as $keys)
	{
		$sWhere = $sWhere . " or ";
		$sWhere.=KeyWhere($keys);
	}


	$strSQL = $gQuery->gSQLWhere($sWhere);
	$strWhereClause=$sWhere;
	
	$_SESSION[$strTableName."_SelectedSQL"] = $strSQL;
	$_SESSION[$strTableName."_SelectedWhere"] = $sWhere;
	$_SESSION[$strTableName."_SelectedRecords"] = $selected_recs;
}

if ($_SESSION[$strTableName."_SelectedSQL"]!="" && @$_REQUEST["records"]=="") 
{
	$strSQL = $_SESSION[$strTableName."_SelectedSQL"];
	$strWhereClause = @$_SESSION[$strTableName."_SelectedWhere"];
	$selected_recs = $_SESSION[$strTableName."_SelectedRecords"];
}
else
{
	$strWhereClause = @$_SESSION[$strTableName."_where"];
	$strHavingClause = @$_SESSION[$strTableName."_having"];
	$strSearchCriteria = @$_SESSION[$strTableName."_criteria"];
	$joinFromPart = @$_SESSION[$strTableName."_joinFromPart"];
	//$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
	$strSQL = SQLQuery::gSQLWhere_having($gQuery->HeadToSql(), $gQuery->FromToSql().$joinFromPart, $gQuery->WhereToSql(),
			$gQuery->GroupByToSql(), $gQuery->Having()->toSql($gQuery), $strWhereClause, $strHavingClause, $strSearchCriteria);		
}

$mypage = 1;
if(@$_REQUEST["type"])
{
//	order by
	$strOrderBy = $_SESSION[$strTableName."_order"];
	if(!$strOrderBy)
		$strOrderBy = $gstrOrderBy;
	$strSQL.=" ".trim($strOrderBy);

	$strSQLbak = $strSQL;
	if($eventObj->exists("BeforeQueryExport"))
		$eventObj->BeforeQueryExport($strSQL,$strWhereClause,$strOrderBy, $pageObject);
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
				$masterKeysReq[] = $_SESSION[$strTableName."_masterkey".($i + 1)];
			$rowcount = $eventObj->ListGetRowCount($pageObject->searchClauseObj,$_SESSION[$strTableName."_mastertable"],$masterKeysReq,$selected_recs, $pageObject);
		}
		if($rowcount !== false)
			$numrows = $rowcount;
		else
		{
			//$numrows = $gQuery->gSQLRowCount($strWhereClause,$strHavingClause,$strSearchCriteria); 
			$numrows = SQLQuery::gSQLRowCount_int($gQuery->HeadToSql(), $gQuery->FromToSql().$joinFromPart, $gQuery->WhereToSql(), $gQuery->GroupByToSql(), 
					$gQuery->Having()->toSql($gQuery), $strWhereClause, $strHavingClause, $strSearchCriteria);
		}
	}
	LogInfo($strSQL);

//	 Pagination:

	$nPageSize = 0;
	if(@$_REQUEST["records"]=="page" && $numrows)
	{
		$mypage = (integer)@$_SESSION[$strTableName."_pagenumber"];
		$nPageSize = (integer)@$_SESSION[$strTableName."_pagesize"];
		
		if(!$nPageSize)
			$nPageSize = $gSettings->getInitialPageSize();
				
		if($nPageSize<0)
			$nPageSize = 0;
			
		if($nPageSize>0)
		{
			if($numrows<=($mypage-1)*$nPageSize)
				$mypage = ceil($numrows/$nPageSize);
		
			if(!$mypage)
				$mypage = 1;
			
					$strSQL.=" limit ".(($mypage-1)*$nPageSize).",".$nPageSize;
		}
	}
	$listarray = null;
	if($eventObj->exists("ListQuery"))
	{
		$arrFieldForSort = array();
		$arrHowFieldSort = array();
		require_once getabspath('classes/orderclause.php');
		$fieldList = unserialize($_SESSION[$strTableName."_orderFieldsList"]);
		for($i = 0; $i < count($fieldList); $i++)
		{
			$arrFieldForSort[] = $fieldList[$i]->fieldIndex; 
			$arrHowFieldSort[] = $fieldList[$i]->orderDirection; 
		}
		$listarray = $eventObj->ListQuery($pageObject->searchClauseObj, $arrFieldForSort, $arrHowFieldSort,
			$_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $nPageSize, $mypage, $pageObject);
	}
	if($listarray != null)
	{
		$rs = $listarray;
	}
	elseif($nPageSize>0)
	{
					$rs = db_query($strSQL,$conn);
	}
	else
		$rs = db_query($strSQL,$conn);

	if(!ini_get("safe_mode"))
		set_time_limit(300);
	
	if(substr(@$_REQUEST["type"],0,5)=="excel")
	{
//	remove grouping
		$locale_info["LOCALE_SGROUPING"]="0";
		$locale_info["LOCALE_SMONGROUPING"]="0";
				if($phpVersion > 4)
			ExportToExcel($rs, $nPageSize, $eventObj, $cipherer, $pageObject);
		else
			ExportToExcel_old($rs, $nPageSize, $strTableName, $eventObj, $cipherer, $pageObject);
	}
	else if(@$_REQUEST["type"]=="word")
	{
		ExportToWord($rs, $nPageSize, $strTableName, $eventObj, $cipherer, $pageObject);
	}
	else if(@$_REQUEST["type"]=="xml")
	{
		ExportToXML($rs, $nPageSize, $strTableName, $eventObj, $cipherer, $pageObject);
	}
	else if(@$_REQUEST["type"]=="csv")
	{
		$locale_info["LOCALE_SGROUPING"]="0";
		$locale_info["LOCALE_SDECIMAL"]=".";
		$locale_info["LOCALE_SMONGROUPING"]="0";
		$locale_info["LOCALE_SMONDECIMALSEP"]=".";
		ExportToCSV($rs, $nPageSize, $strTableName, $eventObj, $cipherer, $pageObject);
	}
	db_close($conn);
	return;
}

// add button events if exist
$pageObject->addButtonHandlers();

if($options)
{
	$xt->assign("rangeheader_block",true);
	$xt->assign("range_block",true);
}

$xt->assign("exportlink_attrs", 'id="saveButton'.$pageObject->id.'"');

$pageObject->body["begin"] .= GetBaseScriptsForPage(false);

$pageObject->fillSetCntrlMaps();
$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";";
$pageObject->body['end'] .= '</script>';
$pageObject->body["end"] .= "<script language=\"JavaScript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>\r\n";
$pageObject->addCommonJs();

$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";
$xt->assignbyref("body",$pageObject->body);

$pageObject->display(GetTemplateName("simcards_batches_query", "export"));

function ExportToExcel_old($rs, $nPageSize, $strTableName, $eventObj, $cipherer, $pageObject)
{
	global $cCharset;
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment;Filename=".GetTableURL($strTableName).".xls");

	echo "<html>";
	echo "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">";
	
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
	echo "<body>";
	echo "<table border=1>";

	WriteTableData($rs, $nPageSize, $strTableName, $eventObj, $cipherer, $pageObject);

	echo "</table>";
	echo "</body>";
	echo "</html>";
}

function ExportToWord($rs, $nPageSize, $strTableName, $eventObj, $cipherer, $pageObject)
{
	global $cCharset;
	header("Content-Type: application/vnd.ms-word");
	header("Content-Disposition: attachment;Filename=".GetTableURL($strTableName).".doc");

	echo "<html>";
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
	echo "<body>";
	echo "<table border=1>";

	WriteTableData($rs, $nPageSize, $strTableName, $eventObj, $cipherer, $pageObject);

	echo "</table>";
	echo "</body>";
	echo "</html>";
}

function ExportToXML($rs, $nPageSize, $strTableName, $eventObj, $cipherer, $pageObject)
{
	global $cCharset;
	header("Content-Type: text/xml");
	header("Content-Disposition: attachment;Filename=".GetTableURL($strTableName).".xml");
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);	
	//if(!$row)
	//	return;
	
	echo "<?xml version=\"1.0\" encoding=\"".$cCharset."\" standalone=\"yes\"?>\r\n";
	echo "<table>\r\n";
	$i = 0;
	$pageObject->viewControls->forExport = "xml";
	while((!$nPageSize || $i<$nPageSize) && $row)
	{
		$values = array();
			$values["POS_Number"] = $pageObject->getExportValue("POS_Number", $row);
			$values["Event_date"] = $pageObject->getExportValue("Event_date", $row);
			$values["time"] = $pageObject->getExportValue("time", $row);
			$values["Activation_Status"] = $pageObject->getExportValue("Activation_Status", $row);
			$values["FL_or_POS_Name"] = $pageObject->getExportValue("FL_or_POS_Name", $row);
			$values["TL_Name"] = $pageObject->getExportValue("TL_Name", $row);
			$values["SC_DSO_RDO_Name"] = $pageObject->getExportValue("SC_DSO_RDO_Name", $row);
			$values["batch_name"] = $pageObject->getExportValue("batch_name", $row);
			$values["ICCID"] = $pageObject->getExportValue("ICCID", $row);
			$values["Active_MSISDN"] = $pageObject->getExportValue("Active_MSISDN", $row);
			$values["New_MSISDN"] = $pageObject->getExportValue("New_MSISDN", $row);
			$values["Swap_Date"] = $pageObject->getExportValue("Swap_Date", $row);
			$values["Airtime_transered"] = $pageObject->getExportValue("Airtime_transered", $row);
			$values["Transfer_date"] = $pageObject->getExportValue("Transfer_date", $row);
			$values["Activation_Commission"] = $pageObject->getExportValue("Activation_Commission", $row);
			$values["Form_Returned"] = $pageObject->getExportValue("Form_Returned", $row);
			$values["Form_Status"] = $pageObject->getExportValue("Form_Status", $row);
			$values["Form_Commission"] = $pageObject->getExportValue("Form_Commission", $row);
			$values["Form_Paid_Date"] = $pageObject->getExportValue("Form_Paid_Date", $row);
		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
			$eventRes = $eventObj->BeforeOut($row, $values, $pageObject);
		
		if ($eventRes)
		{
			$i++;
			echo "<row>\r\n";
			foreach ($values as $fName => $val)
			{
				$field = runner_htmlspecialchars(XMLNameEncode($fName));
				echo "<".$field.">";
				echo $values[$fName];
				echo "</".$field.">\r\n";
			}
			echo "</row>\r\n";
		}
		
		
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
	}
	echo "</table>\r\n";
}

function ExportToCSV($rs, $nPageSize, $strTableName, $eventObj, $cipherer, $pageObject)
{
	header("Content-Type: application/csv");
	header("Content-Disposition: attachment;Filename=".GetTableURL($strTableName).".csv");
		echo "\xEF\xBB\xBF";
	
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);

// write header
	$outstr = "";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"POS_Number\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Event_date\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"time\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Activation_Status\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"FL_or_POS_Name\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"TL_Name\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"SC_DSO_RDO_Name\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"batch_name\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ICCID\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Active_MSISDN\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"New_MSISDN\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Swap_Date\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Airtime_transered\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Transfer_date\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Activation_Commission\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Form_Returned\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Form_Status\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Form_Commission\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Form_Paid_Date\"";
	echo $outstr;
	echo "\r\n";

// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "csv";
	while((!$nPageSize || $iNumberOfRows < $nPageSize) && $row)
	{
		$values = array();
			$values["POS_Number"] = $pageObject->getViewControl("POS_Number")->getExportValue($row, "");
			$values["Event_date"] = $pageObject->getViewControl("Event_date")->getExportValue($row, "");
			$values["time"] = $pageObject->getViewControl("time")->getExportValue($row, "");
			$values["Activation_Status"] = $pageObject->getViewControl("Activation_Status")->getExportValue($row, "");
			$values["FL_or_POS_Name"] = $pageObject->getViewControl("FL_or_POS_Name")->getExportValue($row, "");
			$values["TL_Name"] = $pageObject->getViewControl("TL_Name")->getExportValue($row, "");
			$values["SC_DSO_RDO_Name"] = $pageObject->getViewControl("SC_DSO_RDO_Name")->getExportValue($row, "");
			$values["batch_name"] = $pageObject->getViewControl("batch_name")->getExportValue($row, "");
			$values["ICCID"] = $pageObject->getViewControl("ICCID")->getExportValue($row, "");
			$values["Active_MSISDN"] = $pageObject->getViewControl("Active_MSISDN")->getExportValue($row, "");
			$values["New_MSISDN"] = $pageObject->getViewControl("New_MSISDN")->getExportValue($row, "");
			$values["Swap_Date"] = $pageObject->getViewControl("Swap_Date")->getExportValue($row, "");
			$values["Airtime_transered"] = $pageObject->getViewControl("Airtime_transered")->getExportValue($row, "");
			$values["Transfer_date"] = $pageObject->getViewControl("Transfer_date")->getExportValue($row, "");
			$values["Activation_Commission"] = $pageObject->getViewControl("Activation_Commission")->getExportValue($row, "");
			$values["Form_Returned"] = $pageObject->getViewControl("Form_Returned")->getExportValue($row, "");
			$values["Form_Status"] = $pageObject->getViewControl("Form_Status")->getExportValue($row, "");
			$values["Form_Commission"] = $pageObject->getViewControl("Form_Commission")->getExportValue($row, "");
			$values["Form_Paid_Date"] = $pageObject->getViewControl("Form_Paid_Date")->getExportValue($row, "");

		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{
			$eventRes = $eventObj->BeforeOut($row,$values, $pageObject);
		}
		if ($eventRes)
		{
			$outstr="";
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["POS_Number"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Event_date"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["time"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Activation_Status"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["FL_or_POS_Name"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["TL_Name"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["SC_DSO_RDO_Name"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["batch_name"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ICCID"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Active_MSISDN"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["New_MSISDN"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Swap_Date"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Airtime_transered"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Transfer_date"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Activation_Commission"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Form_Returned"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Form_Status"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Form_Commission"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Form_Paid_Date"]).'"';
			echo $outstr;
		}
		
		$iNumberOfRows++;
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
			
		if(((!$nPageSize || $iNumberOfRows<$nPageSize) && $row) && $eventRes)
			echo "\r\n";
	}
}

function WriteTableData($rs, $nPageSize, $strTableName, $eventObj, $cipherer, $pageObject)
{	
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);
//	if(!$row)
//		return;
// write header
	echo "<tr>";
	if($_REQUEST["type"]=="excel")
	{
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("simcards_batches_query","POS_Number")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("simcards_batches_query","Event_date")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("simcards_batches_query","time")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("simcards_batches_query","Activation_Status")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("simcards_batches_query","FL_or_POS_Name")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("simcards_batches_query","TL_Name")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("simcards_batches_query","SC_DSO_RDO_Name")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("simcards_batches_query","batch_name")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("simcards_batches_query","ICCID")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("simcards_batches_query","Active_MSISDN")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("simcards_batches_query","New_MSISDN")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("simcards_batches_query","Swap_Date")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("simcards_batches_query","Airtime_transered")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("simcards_batches_query","Transfer_date")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("simcards_batches_query","Activation_Commission")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("simcards_batches_query","Form_Returned")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("simcards_batches_query","Form_Status")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("simcards_batches_query","Form_Commission")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("simcards_batches_query","Form_Paid_Date")).'</td>';	
	}
	else
	{
		echo "<td>".GetFieldLabel("simcards_batches_query","POS_Number")."</td>";
		echo "<td>".GetFieldLabel("simcards_batches_query","Event_date")."</td>";
		echo "<td>".GetFieldLabel("simcards_batches_query","time")."</td>";
		echo "<td>".GetFieldLabel("simcards_batches_query","Activation_Status")."</td>";
		echo "<td>".GetFieldLabel("simcards_batches_query","FL_or_POS_Name")."</td>";
		echo "<td>".GetFieldLabel("simcards_batches_query","TL_Name")."</td>";
		echo "<td>".GetFieldLabel("simcards_batches_query","SC_DSO_RDO_Name")."</td>";
		echo "<td>".GetFieldLabel("simcards_batches_query","batch_name")."</td>";
		echo "<td>".GetFieldLabel("simcards_batches_query","ICCID")."</td>";
		echo "<td>".GetFieldLabel("simcards_batches_query","Active_MSISDN")."</td>";
		echo "<td>".GetFieldLabel("simcards_batches_query","New_MSISDN")."</td>";
		echo "<td>".GetFieldLabel("simcards_batches_query","Swap_Date")."</td>";
		echo "<td>".GetFieldLabel("simcards_batches_query","Airtime_transered")."</td>";
		echo "<td>".GetFieldLabel("simcards_batches_query","Transfer_date")."</td>";
		echo "<td>".GetFieldLabel("simcards_batches_query","Activation_Commission")."</td>";
		echo "<td>".GetFieldLabel("simcards_batches_query","Form_Returned")."</td>";
		echo "<td>".GetFieldLabel("simcards_batches_query","Form_Status")."</td>";
		echo "<td>".GetFieldLabel("simcards_batches_query","Form_Commission")."</td>";
		echo "<td>".GetFieldLabel("simcards_batches_query","Form_Paid_Date")."</td>";
	}
	echo "</tr>";
	
// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "export";
	while((!$nPageSize || $iNumberOfRows<$nPageSize) && $row)
	{
		countTotals($totals, $totalsFields, $row);
		
		$values = array();
	
					$values["POS_Number"] = $pageObject->getViewControl("POS_Number")->getExportValue($row, "");
					$values["Event_date"] = $pageObject->getViewControl("Event_date")->getExportValue($row, "");
					$values["time"] = $pageObject->getViewControl("time")->getExportValue($row, "");
					$values["Activation_Status"] = $pageObject->getViewControl("Activation_Status")->getExportValue($row, "");
					$values["FL_or_POS_Name"] = $pageObject->getViewControl("FL_or_POS_Name")->getExportValue($row, "");
					$values["TL_Name"] = $pageObject->getViewControl("TL_Name")->getExportValue($row, "");
					$values["SC_DSO_RDO_Name"] = $pageObject->getViewControl("SC_DSO_RDO_Name")->getExportValue($row, "");
					$values["batch_name"] = $pageObject->getViewControl("batch_name")->getExportValue($row, "");
					$values["ICCID"] = $pageObject->getViewControl("ICCID")->getExportValue($row, "");
					$values["Active_MSISDN"] = $pageObject->getViewControl("Active_MSISDN")->getExportValue($row, "");
					$values["New_MSISDN"] = $pageObject->getViewControl("New_MSISDN")->getExportValue($row, "");
					$values["Swap_Date"] = $pageObject->getViewControl("Swap_Date")->getExportValue($row, "");
					$values["Airtime_transered"] = $pageObject->getViewControl("Airtime_transered")->getExportValue($row, "");
					$values["Transfer_date"] = $pageObject->getViewControl("Transfer_date")->getExportValue($row, "");
					$values["Activation_Commission"] = $pageObject->getViewControl("Activation_Commission")->getExportValue($row, "");
					$values["Form_Returned"] = $pageObject->getViewControl("Form_Returned")->getExportValue($row, "");
					$values["Form_Status"] = $pageObject->getViewControl("Form_Status")->getExportValue($row, "");
					$values["Form_Commission"] = $pageObject->getViewControl("Form_Commission")->getExportValue($row, "");
					$values["Form_Paid_Date"] = $pageObject->getViewControl("Form_Paid_Date")->getExportValue($row, "");
		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{
			$eventRes = $eventObj->BeforeOut($row, $values, $pageObject);
		}
		if ($eventRes)
		{
			$iNumberOfRows++;
			echo "<tr>";
		
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["POS_Number"]);
					else
						echo $values["POS_Number"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Event_date"]);
					else
						echo $values["Event_date"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["time"]);
					else
						echo $values["time"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Activation_Status"]);
					else
						echo $values["Activation_Status"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["FL_or_POS_Name"]);
					else
						echo $values["FL_or_POS_Name"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["TL_Name"]);
					else
						echo $values["TL_Name"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["SC_DSO_RDO_Name"]);
					else
						echo $values["SC_DSO_RDO_Name"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["batch_name"]);
					else
						echo $values["batch_name"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["ICCID"]);
					else
						echo $values["ICCID"];
			echo '</td>';
							echo '<td>';
			
									echo $values["Active_MSISDN"];
			echo '</td>';
							echo '<td>';
			
									echo $values["New_MSISDN"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Swap_Date"]);
					else
						echo $values["Swap_Date"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Airtime_transered"]);
					else
						echo $values["Airtime_transered"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Transfer_date"]);
					else
						echo $values["Transfer_date"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Activation_Commission"]);
					else
						echo $values["Activation_Commission"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Form_Returned"]);
					else
						echo $values["Form_Returned"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Form_Status"]);
					else
						echo $values["Form_Status"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Form_Commission"]);
					else
						echo $values["Form_Commission"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Form_Paid_Date"]);
					else
						echo $values["Form_Paid_Date"];
			echo '</td>';
			echo "</tr>";
		}
		
		
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
	}
	
}
?>