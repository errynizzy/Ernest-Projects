<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("classes/searchclause.php");
include('include/xtempl.php');
include('classes/runnerpage.php');

add_nocache_headers();

include("include/inout_variables.php");

RunnerPage::reloginAndLogoutProcess("P");

if(!isLogged())
{ 
	redirectToLogin();
}

// check user permissions
if(!CheckTablePermissions($strTableName, "P"))
{
	HeaderRedirect("menu");
}




$layout = new TLayout("print", "RoundedBlue_white", "MobileBlue_white");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["grid"] = array();
$layout->containers["grid"][] = array("name"=>"printgrid", 
	"block"=>"grid_block", "substyle"=>1  );

$layout->skins["grid"] = "empty";

$layout->blocks["center"][] = "grid";
$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";

$layout->blocks["top"][] = "master";
$layout->skins["pdf"] = "empty";

$layout->blocks["top"][] = "pdf";
$page_layouts["inout_print"] = $layout;

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




$cipherer = new RunnerCipherer($strTableName);

$xt = new Xtempl();
$id = postvalue("id") != "" ? postvalue("id") : 1;
$all = postvalue("all");
$pageName = GetTableLink("print");

//array of params for classes
$params = array("id" => $id,
				"tName" => $strTableName,
				"pageType" => PAGE_PRINT);
$params["xt"] = &$xt;
			
$pageObject = new RunnerPage($params);
$pageObject->init();

// add button events if exist
$pageObject->addButtonHandlers();

// Modify query: remove blob fields from fieldlist.
// Blob fields on a print page are shown using imager.php (for example).
// They don't need to be selected from DB in print.php itself.
$noBlobReplace = false;
if(!postvalue("pdf") && !$noBlobReplace)
	$gQuery->ReplaceFieldsWithDummies($pageObject->pSet->getBinaryFieldsIndices());

//	Before Process event
if($eventObj->exists("BeforeProcessPrint"))
	$eventObj->BeforeProcessPrint($conn, $pageObject);

$strWhereClause="";
$strHavingClause="";
$strSearchCriteria="and";

$selected_recs=array();
if (@$_REQUEST["a"]!="") 
{
	$sWhere = "1=0";	
	
//	process selection
	if (@$_REQUEST["mdelete"])
	{
		foreach(@$_REQUEST["mdelete"] as $ind)
		{
			$keys=array();
			$keys["ACCT_BOOK_ID"]=refine($_REQUEST["mdelete1"][mdeleteIndex($ind)]);
			$selected_recs[]=$keys;
		}
	}
	elseif(@$_REQUEST["selection"])
	{
		foreach(@$_REQUEST["selection"] as $keyblock)
		{
			$arr=explode("&",refine($keyblock));
			if(count($arr)<1)
				continue;
			$keys=array();
			$keys["ACCT_BOOK_ID"]=urldecode($arr[0]);
			$selected_recs[]=$keys;
		}
	}

	foreach($selected_recs as $keys)
	{
		$sWhere = $sWhere . " or ";
		$sWhere.=KeyWhere($keys);
	}
	$strSQL = $gQuery->gSQLWhere($sWhere);
	$strWhereClause=$sWhere;
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
if(postvalue("pdf"))
	$strWhereClause = @$_SESSION[$strTableName."_pdfwhere"];

$_SESSION[$strTableName."_pdfwhere"] = $strWhereClause;


$strOrderBy = $_SESSION[$strTableName."_order"];
if(!$strOrderBy)
	$strOrderBy=$gstrOrderBy;
$strSQL.=" ".trim($strOrderBy);

$strSQLbak = $strSQL;
if($eventObj->exists("BeforeQueryPrint"))
	$eventObj->BeforeQueryPrint($strSQL,$strWhereClause,$strOrderBy, $pageObject);

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

$mypage=(integer)$_SESSION[$strTableName."_pagenumber"];
if(!$mypage)
	$mypage=1;

//	page size
$PageSize=(integer)$_SESSION[$strTableName."_pagesize"];
if(!$PageSize)
	$PageSize = $pageObject->pSet->getInitialPageSize();

if($PageSize<0)
	$all = 1;	
	
$recno = 1;
$records = 0;	
$maxpages = 1;
$pageindex = 1;
$pageno=1;

// build arrays for sort (to support old code in user-defined events)
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
}

if(!$all)
{	
	if($numrows)
	{
		$maxRecords = $numrows;
		$maxpages = ceil($maxRecords/$PageSize);
					
		if($mypage > $maxpages)
			$mypage = $maxpages;
		
		if($mypage < 1) 
			$mypage = 1;
		
		$maxrecs = $PageSize;
	}
	$listarray = false;
	if($eventObj->exists("ListQuery"))
		$listarray = $eventObj->ListQuery($pageObject->searchClauseObj, $arrFieldForSort, $arrHowFieldSort, 
			$_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $PageSize, $mypage, $pageObject);
	if($listarray!==false)
		$rs = $listarray;
	else
	{
			if($numrows)
		{
			$strSQL.=" limit ".(($mypage-1)*$PageSize).",".$PageSize;
		}
		$rs = db_query($strSQL,$conn);
	}
	
	//	hide colunm headers if needed
	$recordsonpage = $numrows-($mypage-1)*$PageSize;
	if($recordsonpage>$PageSize)
		$recordsonpage = $PageSize;
		
	$xt->assign("page_number",true);
	$xt->assign("maxpages",$maxpages);
	$xt->assign("pageno",$mypage);
}
else
{
	$listarray = false;
	if($eventObj->exists("ListQuery"))
		$listarray=$eventObj->ListQuery($pageObject->searchClauseObj, $arrFieldForSort, $arrHowFieldSort,
			$_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $PageSize, $mypage, $pageObject);
	if($listarray!==false)
		$rs = $listarray;
	else
		$rs = db_query($strSQL,$conn);
	$recordsonpage = $numrows;
	$maxpages = ceil($recordsonpage/30);
	$xt->assign("page_number",true);
	$xt->assign("maxpages",$maxpages);
}


$fieldsArr = array();
$arr = array();
$arr['fName'] = "ID";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ID");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ACCT_BOOK_ID";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ACCT_BOOK_ID");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "EVENT_DATE";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("EVENT_DATE");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "CUST_NAME";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("CUST_NAME");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ACC_NBR";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ACC_NBR");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "PRE_BALANCE";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("PRE_BALANCE");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "CHARGE";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("CHARGE");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "TRANSFER_MODE";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("TRANSFER_MODE");
$fieldsArr[] = $arr;
$pageObject->setGoogleMapsParams($fieldsArr);

$isVerticalLayout = false; 

$colsonpage=1;
if($colsonpage>$recordsonpage)
	$colsonpage=$recordsonpage;
if($colsonpage<1)
	$colsonpage=1;


//	fill $rowinfo array
	$pages = array();
	$rowinfo = array();
	$rowinfo["data"] = array();
	if($eventObj->exists("ListFetchArray"))
		$data = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$data = $cipherer->DecryptFetchedArray($rs);

	while($data)
	{
		if($eventObj->exists("BeforeProcessRowPrint"))
		{
			if(!$eventObj->BeforeProcessRowPrint($data, $pageObject))
			{
				if($eventObj->exists("ListFetchArray"))
					$data = $eventObj->ListFetchArray($rs, $pageObject);
				else
					$data = $cipherer->DecryptFetchedArray($rs);
				continue;
			}
		}
		break;
	}
	
	while($data && ($all || $recno<=$PageSize))
	{
		$row = array();
		$row["grid_record"] = array();
		$row["grid_record"]["data"] = array();
		for($col=1;$data && ($all || $recno<=$PageSize) && $col<=1;$col++)
		{
			$record = array();
			$recno++;
			$records++;
			$keylink="";
			$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["ACCT_BOOK_ID"]));

//	ID - 
			$record["ID_value"] = $pageObject->showDBValue("ID", $data, $keylink);
			$record["ID_class"] = $pageObject->fieldClass("ID");
//	ACCT_BOOK_ID - 
			$record["ACCT_BOOK_ID_value"] = $pageObject->showDBValue("ACCT_BOOK_ID", $data, $keylink);
			$record["ACCT_BOOK_ID_class"] = $pageObject->fieldClass("ACCT_BOOK_ID");
//	EVENT_DATE - 
			$record["EVENT_DATE_value"] = $pageObject->showDBValue("EVENT_DATE", $data, $keylink);
			$record["EVENT_DATE_class"] = $pageObject->fieldClass("EVENT_DATE");
//	CUST_NAME - 
			$record["CUST_NAME_value"] = $pageObject->showDBValue("CUST_NAME", $data, $keylink);
			$record["CUST_NAME_class"] = $pageObject->fieldClass("CUST_NAME");
//	ACC_NBR - 
			$record["ACC_NBR_value"] = $pageObject->showDBValue("ACC_NBR", $data, $keylink);
			$record["ACC_NBR_class"] = $pageObject->fieldClass("ACC_NBR");
//	PRE_BALANCE - 
			$record["PRE_BALANCE_value"] = $pageObject->showDBValue("PRE_BALANCE", $data, $keylink);
			$record["PRE_BALANCE_class"] = $pageObject->fieldClass("PRE_BALANCE");
//	CHARGE - 
			$record["CHARGE_value"] = $pageObject->showDBValue("CHARGE", $data, $keylink);
			$record["CHARGE_class"] = $pageObject->fieldClass("CHARGE");
//	TRANSFER_MODE - 
			$record["TRANSFER_MODE_value"] = $pageObject->showDBValue("TRANSFER_MODE", $data, $keylink);
			$record["TRANSFER_MODE_class"] = $pageObject->fieldClass("TRANSFER_MODE");
			if($col<$colsonpage)
				$record["endrecord_block"] = true;
			$record["grid_recordheader"] = true;
			$record["grid_vrecord"] = true;
			
			if($eventObj->exists("BeforeMoveNextPrint"))
				$eventObj->BeforeMoveNextPrint($data,$row,$record, $pageObject);
						
			if($isVerticalLayout || $colsonpage != 1)
			{ 
				$row["grid_record"]["data"][] = $record;
			} 
			else
			{
				//assigns all $record's content to 'grid_row' (to show all rows added to a grid row in 'Visual Editor')
				foreach($record as $index=>$value)
				{
					$row[$index] = $value;
				}
				$row["grid_record"] = true;
			}
			
			if($eventObj->exists("ListFetchArray"))
				$data = $eventObj->ListFetchArray($rs, $pageObject);
			else
				$data = $cipherer->DecryptFetchedArray($rs);
				
			while($data)
			{
				if($eventObj->exists("BeforeProcessRowPrint"))
				{
					if(!$eventObj->BeforeProcessRowPrint($data, $pageObject))
					{
						if($eventObj->exists("ListFetchArray"))
							$data = $eventObj->ListFetchArray($rs, $pageObject);
						else
							$data = $cipherer->DecryptFetchedArray($rs);
						continue;
					}
				}
				break;
			}
		}
		if($col <= $colsonpage && $row["grid_record"]["data"]) 
		{
			$row["grid_record"]["data"][count($row["grid_record"]["data"])-1]["endrecord_block"] = false;
		}
		$row["grid_rowspace"]=true;
		$row["grid_recordspace"] = array("data"=>array());
		for($i=0;$i<$colsonpage*2-1;$i++)
			$row["grid_recordspace"]["data"][]=true;
		
		$rowinfo["data"][]=$row;
		
		if($all && $records>=30)
		{
			$page=array("grid_row" =>$rowinfo);
			$page["pageno"]=$pageindex;
			$pageindex++;
			$pages[] = $page;
			$records=0;
			$rowinfo=array();
		}
		
	}
	if(count($rowinfo))
	{
		$page=array("grid_row" =>$rowinfo);
		if($all)
			$page["pageno"]=$pageindex;
		$pages[] = $page;
	}
	
	for($i=0;$i<count($pages);$i++)
	{
	 	if($i<count($pages)-1)
			$pages[$i]["begin"]="<div name=page class=printpage>";
		else
		    $pages[$i]["begin"]="<div name=page>";
			
		$pages[$i]["end"]="</div>";
	}

	$page = array();
	$page["data"] = &$pages;
	$xt->assignbyref("page",$page);

	

$strSQL = $_SESSION[$strTableName."_sql"];

$isPdfView = false;
$hasEvents = false;
if ($pageObject->pSet->isUsebuttonHandlers() || $isPdfView || $hasEvents || $pageObject->viewControls->hasUserControls())
{
	$pageObject->body["begin"] .= GetBaseScriptsForPage(false);
		
	$pageObject->fillSetCntrlMaps();
	$pageObject->body['end'] .= '<script>';
	$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
	$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
	$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";";
	$pageObject->body['end'] .= '</script>';
		$pageObject->body["end"] .= "<script language=\"JavaScript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>\r\n";
	$pageObject->addCommonJs();
}


if ($pageObject->pSet->isUsebuttonHandlers() || $isPdfView || $hasEvents || $pageObject->viewControls->hasUserControls())
	$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";

$xt->assignbyref("body",$pageObject->body);
$xt->assign("grid_block",true);

$xt->assign("ID_fieldheadercolumn",true);
$xt->assign("ID_fieldheader",true);
$xt->assign("ID_class", $pageObject->fieldClass("ID"));
$xt->assign("ID_fieldcolumn",true);
$xt->assign("ID_fieldfootercolumn",true);
$xt->assign("ACCT_BOOK_ID_fieldheadercolumn",true);
$xt->assign("ACCT_BOOK_ID_fieldheader",true);
$xt->assign("ACCT_BOOK_ID_class", $pageObject->fieldClass("ACCT_BOOK_ID"));
$xt->assign("ACCT_BOOK_ID_fieldcolumn",true);
$xt->assign("ACCT_BOOK_ID_fieldfootercolumn",true);
$xt->assign("EVENT_DATE_fieldheadercolumn",true);
$xt->assign("EVENT_DATE_fieldheader",true);
$xt->assign("EVENT_DATE_class", $pageObject->fieldClass("EVENT_DATE"));
$xt->assign("EVENT_DATE_fieldcolumn",true);
$xt->assign("EVENT_DATE_fieldfootercolumn",true);
$xt->assign("CUST_NAME_fieldheadercolumn",true);
$xt->assign("CUST_NAME_fieldheader",true);
$xt->assign("CUST_NAME_class", $pageObject->fieldClass("CUST_NAME"));
$xt->assign("CUST_NAME_fieldcolumn",true);
$xt->assign("CUST_NAME_fieldfootercolumn",true);
$xt->assign("ACC_NBR_fieldheadercolumn",true);
$xt->assign("ACC_NBR_fieldheader",true);
$xt->assign("ACC_NBR_class", $pageObject->fieldClass("ACC_NBR"));
$xt->assign("ACC_NBR_fieldcolumn",true);
$xt->assign("ACC_NBR_fieldfootercolumn",true);
$xt->assign("PRE_BALANCE_fieldheadercolumn",true);
$xt->assign("PRE_BALANCE_fieldheader",true);
$xt->assign("PRE_BALANCE_class", $pageObject->fieldClass("PRE_BALANCE"));
$xt->assign("PRE_BALANCE_fieldcolumn",true);
$xt->assign("PRE_BALANCE_fieldfootercolumn",true);
$xt->assign("CHARGE_fieldheadercolumn",true);
$xt->assign("CHARGE_fieldheader",true);
$xt->assign("CHARGE_class", $pageObject->fieldClass("CHARGE"));
$xt->assign("CHARGE_fieldcolumn",true);
$xt->assign("CHARGE_fieldfootercolumn",true);
$xt->assign("TRANSFER_MODE_fieldheadercolumn",true);
$xt->assign("TRANSFER_MODE_fieldheader",true);
$xt->assign("TRANSFER_MODE_class", $pageObject->fieldClass("TRANSFER_MODE"));
$xt->assign("TRANSFER_MODE_fieldcolumn",true);
$xt->assign("TRANSFER_MODE_fieldfootercolumn",true);

	$record_header=array("data"=>array());
	$record_footer=array("data"=>array());
	for($i=0;$i<$colsonpage;$i++)
	{
		$rheader=array();
		$rfooter=array();
		if($i<$colsonpage-1)
		{
			$rheader["endrecordheader_block"]=true;
			$rfooter["endrecordheader_block"]=true;
		}
		$record_header["data"][]=$rheader;
		$record_footer["data"][]=$rfooter;
	}
	$xt->assignbyref("record_header",$record_header);
	$xt->assignbyref("record_footer",$record_footer);
	$xt->assign("grid_header",true);
	$xt->assign("grid_footer",true);

if($eventObj->exists("BeforeShowPrint"))
	$eventObj->BeforeShowPrint($xt,$pageObject->templatefile, $pageObject);

if(!postvalue("pdf"))
	$pageObject->display($pageObject->templatefile);
else
{
	$pageObject->AddCSSFile("styles/defaultPDF.css");
	$pageObject->assignStyleFiles();
	$xt->load_template($pageObject->templatefile);
	$page = $xt->fetch_loaded();
	$pagewidth=postvalue("width")*1.05;
	$pageheight=postvalue("height")*1.05;
	$landscape=false;
		if($pagewidth>$pageheight)
		{
			$landscape=true;
			if($pagewidth/$pageheight<297/210)
				$pagewidth = 297/210*$pageheight;
		}
		else
		{
			if($pagewidth/$pageheight<210/297)
				$pagewidth = 210/297*$pageheight;
		}
}
?>
