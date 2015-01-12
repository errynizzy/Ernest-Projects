<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

include("include/simcards_batches_variables.php");

$mode = postvalue("mode");

if(!isLogged())
{ 
	return;
}
if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{
	return;
}

include('classes/runnerpage.php');
include("classes/searchclause.php");

$cipherer = new RunnerCipherer($strTableName);

include('include/xtempl.php');
$xt = new Xtempl();





$layout = new TLayout("detailspreview", "RoundedBlue_white", "MobileBlue_white");
$layout->version = 2;
$layout->blocks["bare"] = array();
$layout->containers["dcount"] = array();
$layout->containers["dcount"][] = array("name"=>"detailspreviewheader", 
	"block"=>"", "substyle"=>1  );

$layout->containers["dcount"][] = array("name"=>"detailspreviewdetailsfount", 
	"block"=>"", "substyle"=>1  );

$layout->containers["dcount"][] = array("name"=>"detailspreviewdispfirst", 
	"block"=>"display_first", "substyle"=>1  );

$layout->skins["dcount"] = "empty";

$layout->blocks["bare"][] = "dcount";
$layout->containers["detailspreviewgrid"] = array();
$layout->containers["detailspreviewgrid"][] = array("name"=>"detailspreviewfields", 
	"block"=>"details_data", "substyle"=>1  );

$layout->skins["detailspreviewgrid"] = "grid";

$layout->blocks["bare"][] = "detailspreviewgrid";
$page_layouts["simcards_batches_detailspreview"] = $layout;

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



$recordsCounter = 0;

//	process masterkey value
$mastertable = postvalue("mastertable");
$masterKeys = my_json_decode(postvalue("masterKeys"));
if($mastertable != "")
{
	$_SESSION[$strTableName."_mastertable"]=$mastertable;
//	copy keys to session
	$i = 1;
	if(is_array($masterKeys) && count($masterKeys) > 0)
	{
		while(array_key_exists ("masterkey".$i, $masterKeys))
		{
			$_SESSION[$strTableName."_masterkey".$i] = $masterKeys["masterkey".$i];
			$i++;
		}
	}
	if(isset($_SESSION[$strTableName."_masterkey".$i]))
		unset($_SESSION[$strTableName."_masterkey".$i]);
}
else
	$mastertable = $_SESSION[$strTableName."_mastertable"];

$params = array();
$params['id'] = 1;
$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['pageType'] = "detailspreview";
$pageObject = new RunnerPage($params);

if($mastertable == "batches")
{
	$where = "";
		$where .= GetFullFieldName("batch_name", $strTableName, false)."=".make_db_value("batch_name",$_SESSION[$strTableName."_masterkey1"]);
		$where.=" and ";
	$where .= GetFullFieldName("batch_name", $strTableName, false)."=".make_db_value("batch_name",$_SESSION[$strTableName."_masterkey2"]);
}
if($mastertable == "returned_iccid")
{
	$where = "";
		$where .= GetFullFieldName("ICCID", $strTableName, false)."=".make_db_value("ICCID",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable == "returned_msisdn")
{
	$where = "";
		$where .= GetFullFieldName("Active_MSISDN", $strTableName, false)."=".make_db_value("Active_MSISDN",$_SESSION[$strTableName."_masterkey1"]);
}

$str = SecuritySQL("Search");
if(strlen($str))
	$where.=" and ".$str;
$strSQL = $gQuery->gSQLWhere($where);

$strSQL.=" ".$gstrOrderBy;

$rowcount = $gQuery->gSQLRowCount($where);

$xt->assign("row_count",$rowcount);
if($rowcount) {
	$xt->assign("details_data",true);
	$rs = db_query($strSQL,$conn);

	$display_count = 10;
	if($mode == "inline")
		$display_count*=2;
	if($rowcount>$display_count+2)
	{
		$xt->assign("display_first",true);
		$xt->assign("display_count",$display_count);
	}
	else
		$display_count = $rowcount;

	$rowinfo = array();
	
	$data = $cipherer->DecryptFetchedArray($rs);
	require_once getabspath('classes/controls/ViewControlsContainer.php');
	$pSet = new ProjectSettings($strTableName, PAGE_LIST);
	$viewContainer = new ViewControlsContainer($pSet, PAGE_LIST);
	$viewContainer->isDetailsPreview = true;
	
	$b = true;
	while($data && $recordsCounter<$display_count) {
		$recordsCounter++;
		$row = array();
		$keylink = "";
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["ICCID"]));
	
	
	//	batch_name - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("batch_name", $data, $keylink);
			$row["batch_name_value"] = $value;
			$format = $pSet->getViewFormat("batch_name");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("batch_name")))
				$class = ' rnr-field-number';
			$row["batch_name_class"] = $class;
	//	ICCID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ICCID", $data, $keylink);
			$row["ICCID_value"] = $value;
			$format = $pSet->getViewFormat("ICCID");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("ICCID")))
				$class = ' rnr-field-number';
			$row["ICCID_class"] = $class;
	//	Status - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Status", $data, $keylink);
			$row["Status_value"] = $value;
			$format = $pSet->getViewFormat("Status");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Status")))
				$class = ' rnr-field-number';
			$row["Status_class"] = $class;
	//	Manager_Name - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Manager_Name", $data, $keylink);
			$row["Manager_Name_value"] = $value;
			$format = $pSet->getViewFormat("Manager_Name");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Manager_Name")))
				$class = ' rnr-field-number';
			$row["Manager_Name_class"] = $class;
	//	Activator_Number - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Activator_Number", $data, $keylink);
			$row["Activator_Number_value"] = $value;
			$format = $pSet->getViewFormat("Activator_Number");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Activator_Number")))
				$class = ' rnr-field-number';
			$row["Activator_Number_class"] = $class;
	//	Event_date - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Event_date", $data, $keylink);
			$row["Event_date_value"] = $value;
			$format = $pSet->getViewFormat("Event_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Event_date")))
				$class = ' rnr-field-number';
			$row["Event_date_class"] = $class;
	//	time - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("time", $data, $keylink);
			$row["time_value"] = $value;
			$format = $pSet->getViewFormat("time");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("time")))
				$class = ' rnr-field-number';
			$row["time_class"] = $class;
	//	Active_MSISDN - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Active_MSISDN", $data, $keylink);
			$row["Active_MSISDN_value"] = $value;
			$format = $pSet->getViewFormat("Active_MSISDN");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Active_MSISDN")))
				$class = ' rnr-field-number';
			$row["Active_MSISDN_class"] = $class;
	//	Form_Returned - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Form_Returned", $data, $keylink);
			$row["Form_Returned_value"] = $value;
			$format = $pSet->getViewFormat("Form_Returned");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Form_Returned")))
				$class = ' rnr-field-number';
			$row["Form_Returned_class"] = $class;
	//	Form_Status - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Form_Status", $data, $keylink);
			$row["Form_Status_value"] = $value;
			$format = $pSet->getViewFormat("Form_Status");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Form_Status")))
				$class = ' rnr-field-number';
			$row["Form_Status_class"] = $class;
	//	Form_Date - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Form_Date", $data, $keylink);
			$row["Form_Date_value"] = $value;
			$format = $pSet->getViewFormat("Form_Date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Form_Date")))
				$class = ' rnr-field-number';
			$row["Form_Date_class"] = $class;
		$rowinfo[] = $row;
		if ($b) {
			$rowinfo2[] = $row;
			$b = false;
		}
		$data = $cipherer->DecryptFetchedArray($rs);
	}
	$xt->assign_loopsection("details_row",$rowinfo);
	$xt->assign_loopsection("details_row_header",$rowinfo2); // assign class for header
}
$returnJSON = array("success" => true);
$xt->load_template(GetTemplateName("simcards_batches", "detailspreview"));
$returnJSON["body"] = $xt->fetch_loaded();

if($mode!="inline")
{
	$returnJSON["counter"] = postvalue("counter");
	$layout = GetPageLayout(GoodFieldName($strTableName), 'detailspreview');
	if($layout)
	{
		foreach($layout->getCSSFiles(isRTL(), isMobile()) as $css)
		{
			$returnJSON['CSSFiles'][] = $css;
		}
	}	
}	

echo printJSON($returnJSON);
exit();
?>