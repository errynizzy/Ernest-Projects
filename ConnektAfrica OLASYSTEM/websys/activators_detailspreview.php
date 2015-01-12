<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

include("include/activators_variables.php");

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
$page_layouts["activators_detailspreview"] = $layout;

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

if($mastertable == "controller")
{
	$where = "";
		$where .= GetFullFieldName("Manager_Number", $strTableName, false)."=".make_db_value("Manager_Number",$_SESSION[$strTableName."_masterkey1"]);
		$where.=" and ";
	$where .= GetFullFieldName("Activator_Number", $strTableName, false)."=".make_db_value("Activator_Number",$_SESSION[$strTableName."_masterkey2"]);
}
if($mastertable == "simcards_batches")
{
	$where = "";
		$where .= GetFullFieldName("Activator_Number", $strTableName, false)."=".make_db_value("Activator_Number",$_SESSION[$strTableName."_masterkey1"]);
}
if($mastertable == "simcards")
{
	$where = "";
		$where .= GetFullFieldName("Manager_Number", $strTableName, false)."=".make_db_value("Manager_Number",$_SESSION[$strTableName."_masterkey1"]);
		$where.=" and ";
	$where .= GetFullFieldName("Activator_Number", $strTableName, false)."=".make_db_value("Activator_Number",$_SESSION[$strTableName."_masterkey2"]);
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
		$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["ID"]));
	
	
	//	pos_type - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("pos_type", $data, $keylink);
			$row["pos_type_value"] = $value;
			$format = $pSet->getViewFormat("pos_type");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("pos_type")))
				$class = ' rnr-field-number';
			$row["pos_type_class"] = $class;
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
	//	Manager_Number - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Manager_Number", $data, $keylink);
			$row["Manager_Number_value"] = $value;
			$format = $pSet->getViewFormat("Manager_Number");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Manager_Number")))
				$class = ' rnr-field-number';
			$row["Manager_Number_class"] = $class;
	//	Activator_Name - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Activator_Name", $data, $keylink);
			$row["Activator_Name_value"] = $value;
			$format = $pSet->getViewFormat("Activator_Name");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Activator_Name")))
				$class = ' rnr-field-number';
			$row["Activator_Name_class"] = $class;
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
	//	business_name - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("business_name", $data, $keylink);
			$row["business_name_value"] = $value;
			$format = $pSet->getViewFormat("business_name");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("business_name")))
				$class = ' rnr-field-number';
			$row["business_name_class"] = $class;
	//	altenative_number - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("altenative_number", $data, $keylink);
			$row["altenative_number_value"] = $value;
			$format = $pSet->getViewFormat("altenative_number");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("altenative_number")))
				$class = ' rnr-field-number';
			$row["altenative_number_class"] = $class;
	//	pos_iccid - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("pos_iccid", $data, $keylink);
			$row["pos_iccid_value"] = $value;
			$format = $pSet->getViewFormat("pos_iccid");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("pos_iccid")))
				$class = ' rnr-field-number';
			$row["pos_iccid_class"] = $class;
	//	registration_date - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("registration_date", $data, $keylink);
			$row["registration_date_value"] = $value;
			$format = $pSet->getViewFormat("registration_date");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("registration_date")))
				$class = ' rnr-field-number';
			$row["registration_date_class"] = $class;
	//	gender - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("gender", $data, $keylink);
			$row["gender_value"] = $value;
			$format = $pSet->getViewFormat("gender");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("gender")))
				$class = ' rnr-field-number';
			$row["gender_class"] = $class;
	//	DOB - Short Date
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("DOB", $data, $keylink);
			$row["DOB_value"] = $value;
			$format = $pSet->getViewFormat("DOB");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("DOB")))
				$class = ' rnr-field-number';
			$row["DOB_class"] = $class;
	//	Area - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Area", $data, $keylink);
			$row["Area_value"] = $value;
			$format = $pSet->getViewFormat("Area");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Area")))
				$class = ' rnr-field-number';
			$row["Area_class"] = $class;
	//	Route - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Route", $data, $keylink);
			$row["Route_value"] = $value;
			$format = $pSet->getViewFormat("Route");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Route")))
				$class = ' rnr-field-number';
			$row["Route_class"] = $class;
	//	id_type - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("id_type", $data, $keylink);
			$row["id_type_value"] = $value;
			$format = $pSet->getViewFormat("id_type");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("id_type")))
				$class = ' rnr-field-number';
			$row["id_type_class"] = $class;
	//	id_number - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("id_number", $data, $keylink);
			$row["id_number_value"] = $value;
			$format = $pSet->getViewFormat("id_number");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("id_number")))
				$class = ' rnr-field-number';
			$row["id_number_class"] = $class;
	//	Team_Leader - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Team_Leader", $data, $keylink);
			$row["Team_Leader_value"] = $value;
			$format = $pSet->getViewFormat("Team_Leader");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Team_Leader")))
				$class = ' rnr-field-number';
			$row["Team_Leader_class"] = $class;
	//	Working_Location - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Working_Location", $data, $keylink);
			$row["Working_Location_value"] = $value;
			$format = $pSet->getViewFormat("Working_Location");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Working_Location")))
				$class = ' rnr-field-number';
			$row["Working_Location_class"] = $class;
	//	Batch_Paid - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Batch_Paid", $data, $keylink);
			$row["Batch_Paid_value"] = $value;
			$format = $pSet->getViewFormat("Batch_Paid");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("Batch_Paid")))
				$class = ' rnr-field-number';
			$row["Batch_Paid_class"] = $class;
	//	lat - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("lat", $data, $keylink);
			$row["lat_value"] = $value;
			$format = $pSet->getViewFormat("lat");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("lat")))
				$class = ' rnr-field-number';
			$row["lat_class"] = $class;
	//	lon - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("lon", $data, $keylink);
			$row["lon_value"] = $value;
			$format = $pSet->getViewFormat("lon");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("lon")))
				$class = ' rnr-field-number';
			$row["lon_class"] = $class;
	//	last_chekin - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("last_chekin", $data, $keylink);
			$row["last_chekin_value"] = $value;
			$format = $pSet->getViewFormat("last_chekin");
			$class = "rnr-field-text";
			if($format==FORMAT_FILE) 
				$class = ' rnr-field-file'; 
			if($format==FORMAT_AUDIO)
				$class = ' rnr-field-audio';
			if($format==FORMAT_CHECKBOX)
				$class = ' rnr-field-checkbox';
			if($format==FORMAT_NUMBER || IsNumberType($pSet->getFieldType("last_chekin")))
				$class = ' rnr-field-number';
			$row["last_chekin_class"] = $class;
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
$xt->load_template(GetTemplateName("activators", "detailspreview"));
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