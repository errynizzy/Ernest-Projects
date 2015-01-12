<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
include("include/dbcommon.php");
include("classes/searchclause.php");
include("classes/sql.php");
session_cache_limiter("none");

include("include/pos_visits_variables.php");




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
$page_layouts["pos_visits_export"] = $layout;

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
			$keys["ID"] = refine($_REQUEST["mdelete1"][mdeleteIndex($ind)]);
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
			$keys["ID"] = urldecode($arr[0]);
			$selected_recs[] = $keys;
		}
	}

	foreach($selected_recs as $keys)
	{
		$sWhere = $sWhere . " or ";
		$sWhere.=KeyWhere($keys);
	}

	$sWhere = whereAdd($sWhere,SecuritySQL("Search"));

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
	if($strWhereClause == "")
		$strWhereClause = whereAdd($strWhereClause,SecuritySQL("Search"));
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

$pageObject->display(GetTemplateName("pos_visits", "export"));

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
			$values["Manager_Name"] = $pageObject->getExportValue("Manager_Name", $row);
			$values["Activator_Name"] = $pageObject->getExportValue("Activator_Name", $row);
			$values["Activator_Number"] = $pageObject->getExportValue("Activator_Number", $row);
			$values["business_name"] = $pageObject->getExportValue("business_name", $row);
			$values["altenative_number"] = $pageObject->getExportValue("altenative_number", $row);
			$values["Area"] = $pageObject->getExportValue("Area", $row);
			$values["Date"] = $pageObject->getExportValue("Date", $row);
			$values["last_chekin"] = $pageObject->getExportValue("last_chekin", $row);
			$values["Sale"] = $pageObject->getExportValue("Sale", $row);
			$values["Transfer_Amount"] = $pageObject->getExportValue("Transfer_Amount", $row);
			$values["Transfer_From"] = $pageObject->getExportValue("Transfer_From", $row);
			$values["Transfer_Date"] = $pageObject->getExportValue("Transfer_Date", $row);
			$values["My_Transfer"] = $pageObject->getExportValue("My_Transfer", $row);
		
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
	$outstr.= "\"Manager_Name\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Activator_Name\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Activator_Number\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"business_name\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"altenative_number\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Area\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Date\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"last_chekin\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Sale\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Transfer_Amount\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Transfer_From\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Transfer_Date\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"My_Transfer\"";
	echo $outstr;
	echo "\r\n";

// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "csv";
	while((!$nPageSize || $iNumberOfRows < $nPageSize) && $row)
	{
		$values = array();
			$values["Manager_Name"] = $pageObject->getViewControl("Manager_Name")->getExportValue($row, "");
			$values["Activator_Name"] = $pageObject->getViewControl("Activator_Name")->getExportValue($row, "");
			$values["Activator_Number"] = $pageObject->getViewControl("Activator_Number")->getExportValue($row, "");
			$values["business_name"] = $pageObject->getViewControl("business_name")->getExportValue($row, "");
			$values["altenative_number"] = $pageObject->getViewControl("altenative_number")->getExportValue($row, "");
			$values["Area"] = $pageObject->getViewControl("Area")->getExportValue($row, "");
			$values["Date"] = $pageObject->getViewControl("Date")->getExportValue($row, "");
			$values["last_chekin"] = $pageObject->getViewControl("last_chekin")->getExportValue($row, "");
			$values["Sale"] = $pageObject->getViewControl("Sale")->getExportValue($row, "");
			$values["Transfer_Amount"] = $pageObject->getViewControl("Transfer_Amount")->getExportValue($row, "");
			$values["Transfer_From"] = $pageObject->getViewControl("Transfer_From")->getExportValue($row, "");
			$values["Transfer_Date"] = $pageObject->getViewControl("Transfer_Date")->getExportValue($row, "");
			$values["My_Transfer"] = $pageObject->getViewControl("My_Transfer")->getExportValue($row, "");

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
			$outstr.='"'.str_replace('"', '""', $values["Manager_Name"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Activator_Name"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Activator_Number"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["business_name"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["altenative_number"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Area"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Date"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["last_chekin"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Sale"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Transfer_Amount"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Transfer_From"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Transfer_Date"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["My_Transfer"]).'"';
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
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("pos_visits","Manager_Name")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("pos_visits","Activator_Name")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("pos_visits","Activator_Number")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("pos_visits","business_name")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("pos_visits","altenative_number")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("pos_visits","Area")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("pos_visits","Date")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("pos_visits","last_chekin")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("pos_visits","Sale")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("pos_visits","Transfer_Amount")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("pos_visits","Transfer_From")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("pos_visits","Transfer_Date")).'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel(GetFieldLabel("pos_visits","My_Transfer")).'</td>';	
	}
	else
	{
		echo "<td>".GetFieldLabel("pos_visits","Manager_Name")."</td>";
		echo "<td>".GetFieldLabel("pos_visits","Activator_Name")."</td>";
		echo "<td>".GetFieldLabel("pos_visits","Activator_Number")."</td>";
		echo "<td>".GetFieldLabel("pos_visits","business_name")."</td>";
		echo "<td>".GetFieldLabel("pos_visits","altenative_number")."</td>";
		echo "<td>".GetFieldLabel("pos_visits","Area")."</td>";
		echo "<td>".GetFieldLabel("pos_visits","Date")."</td>";
		echo "<td>".GetFieldLabel("pos_visits","last_chekin")."</td>";
		echo "<td>".GetFieldLabel("pos_visits","Sale")."</td>";
		echo "<td>".GetFieldLabel("pos_visits","Transfer_Amount")."</td>";
		echo "<td>".GetFieldLabel("pos_visits","Transfer_From")."</td>";
		echo "<td>".GetFieldLabel("pos_visits","Transfer_Date")."</td>";
		echo "<td>".GetFieldLabel("pos_visits","My_Transfer")."</td>";
	}
	echo "</tr>";
	
// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "export";
	while((!$nPageSize || $iNumberOfRows<$nPageSize) && $row)
	{
		countTotals($totals, $totalsFields, $row);
		
		$values = array();
	
					$values["Manager_Name"] = $pageObject->getViewControl("Manager_Name")->getExportValue($row, "");
					$values["Activator_Name"] = $pageObject->getViewControl("Activator_Name")->getExportValue($row, "");
					$values["Activator_Number"] = $pageObject->getViewControl("Activator_Number")->getExportValue($row, "");
					$values["business_name"] = $pageObject->getViewControl("business_name")->getExportValue($row, "");
					$values["altenative_number"] = $pageObject->getViewControl("altenative_number")->getExportValue($row, "");
					$values["Area"] = $pageObject->getViewControl("Area")->getExportValue($row, "");
					$values["Date"] = $pageObject->getViewControl("Date")->getExportValue($row, "");
					$values["last_chekin"] = $pageObject->getViewControl("last_chekin")->getExportValue($row, "");
					$values["Sale"] = $pageObject->getViewControl("Sale")->getExportValue($row, "");
					$values["Transfer_Amount"] = $pageObject->getViewControl("Transfer_Amount")->getExportValue($row, "");
					$values["Transfer_From"] = $pageObject->getViewControl("Transfer_From")->getExportValue($row, "");
					$values["Transfer_Date"] = $pageObject->getViewControl("Transfer_Date")->getExportValue($row, "");
					$values["My_Transfer"] = $pageObject->getViewControl("My_Transfer")->getExportValue($row, "");
		
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
						echo PrepareForExcel($values["Manager_Name"]);
					else
						echo $values["Manager_Name"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Activator_Name"]);
					else
						echo $values["Activator_Name"];
			echo '</td>';
							echo '<td>';
			
									echo $values["Activator_Number"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["business_name"]);
					else
						echo $values["business_name"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["altenative_number"]);
					else
						echo $values["altenative_number"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Area"]);
					else
						echo $values["Area"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Date"]);
					else
						echo $values["Date"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["last_chekin"]);
					else
						echo $values["last_chekin"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Sale"]);
					else
						echo $values["Sale"];
			echo '</td>';
							echo '<td>';
			
									echo $values["Transfer_Amount"];
			echo '</td>';
							echo '<td>';
			
									echo $values["Transfer_From"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["Transfer_Date"]);
					else
						echo $values["Transfer_Date"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["My_Transfer"]);
					else
						echo $values["My_Transfer"];
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
