<?php
require_once(getabspath("classes/cipherer.php"));




$tdataActivations_per_active_FL = array();	
	$tdataActivations_per_active_FL[".truncateText"] = true;
	$tdataActivations_per_active_FL[".NumberOfChars"] = 80; 
	$tdataActivations_per_active_FL[".ShortName"] = "Activations_per_active_FL";
	$tdataActivations_per_active_FL[".OwnerID"] = "";
	$tdataActivations_per_active_FL[".OriginalTable"] = "activated_sims";

//	field labels
$fieldLabelsActivations_per_active_FL = array();
$fieldToolTipsActivations_per_active_FL = array();
$pageTitlesActivations_per_active_FL = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsActivations_per_active_FL["English"] = array();
	$fieldToolTipsActivations_per_active_FL["English"] = array();
	$pageTitlesActivations_per_active_FL["English"] = array();
	$fieldLabelsActivations_per_active_FL["English"]["Activator_Number"] = "Activator Number";
	$fieldToolTipsActivations_per_active_FL["English"]["Activator_Number"] = "";
	$fieldLabelsActivations_per_active_FL["English"]["Activator_Name"] = "Activator Name";
	$fieldToolTipsActivations_per_active_FL["English"]["Activator_Name"] = "";
	$fieldLabelsActivations_per_active_FL["English"]["Manager_Name"] = "Manager Name";
	$fieldToolTipsActivations_per_active_FL["English"]["Manager_Name"] = "";
	$fieldLabelsActivations_per_active_FL["English"]["Manager_Title"] = "Manager Title";
	$fieldToolTipsActivations_per_active_FL["English"]["Manager_Title"] = "";
	$fieldLabelsActivations_per_active_FL["English"]["Date"] = "Date";
	$fieldToolTipsActivations_per_active_FL["English"]["Date"] = "";
	$fieldLabelsActivations_per_active_FL["English"]["Activations"] = "Activations";
	$fieldToolTipsActivations_per_active_FL["English"]["Activations"] = "";
	$fieldLabelsActivations_per_active_FL["English"]["With_Airtime"] = "With Airtime";
	$fieldToolTipsActivations_per_active_FL["English"]["With_Airtime"] = "";
	$fieldLabelsActivations_per_active_FL["English"]["No_Airtime"] = "No Airtime";
	$fieldToolTipsActivations_per_active_FL["English"]["No_Airtime"] = "";
	$fieldLabelsActivations_per_active_FL["English"]["Percent"] = "Percent";
	$fieldToolTipsActivations_per_active_FL["English"]["Percent"] = "";
	if (count($fieldToolTipsActivations_per_active_FL["English"]))
		$tdataActivations_per_active_FL[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsActivations_per_active_FL[""] = array();
	$fieldToolTipsActivations_per_active_FL[""] = array();
	$pageTitlesActivations_per_active_FL[""] = array();
	if (count($fieldToolTipsActivations_per_active_FL[""]))
		$tdataActivations_per_active_FL[".isUseToolTips"] = true;
}
	
	
	$tdataActivations_per_active_FL[".NCSearch"] = true;



$tdataActivations_per_active_FL[".shortTableName"] = "Activations_per_active_FL";
$tdataActivations_per_active_FL[".nSecOptions"] = 0;
$tdataActivations_per_active_FL[".recsPerRowList"] = 1;
$tdataActivations_per_active_FL[".mainTableOwnerID"] = "";
$tdataActivations_per_active_FL[".moveNext"] = 1;
$tdataActivations_per_active_FL[".nType"] = 1;

$tdataActivations_per_active_FL[".strOriginalTableName"] = "activated_sims";




$tdataActivations_per_active_FL[".showAddInPopup"] = false;

$tdataActivations_per_active_FL[".showEditInPopup"] = false;

$tdataActivations_per_active_FL[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataActivations_per_active_FL[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataActivations_per_active_FL[".fieldsForRegister"] = array();

$tdataActivations_per_active_FL[".listAjax"] = false;

	$tdataActivations_per_active_FL[".audit"] = false;

	$tdataActivations_per_active_FL[".locking"] = false;


$tdataActivations_per_active_FL[".list"] = true;

$tdataActivations_per_active_FL[".inlineAdd"] = true;

$tdataActivations_per_active_FL[".import"] = true;

$tdataActivations_per_active_FL[".exportTo"] = true;

$tdataActivations_per_active_FL[".printFriendly"] = true;


$tdataActivations_per_active_FL[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataActivations_per_active_FL[".searchSaving"] = false;
//

$tdataActivations_per_active_FL[".showSearchPanel"] = true;
		$tdataActivations_per_active_FL[".flexibleSearch"] = true;		

if (isMobile())
	$tdataActivations_per_active_FL[".isUseAjaxSuggest"] = false;
else 
	$tdataActivations_per_active_FL[".isUseAjaxSuggest"] = true;

$tdataActivations_per_active_FL[".rowHighlite"] = true;



$tdataActivations_per_active_FL[".addPageEvents"] = false;

// use timepicker for search panel
$tdataActivations_per_active_FL[".isUseTimeForSearch"] = false;





$tdataActivations_per_active_FL[".allSearchFields"] = array();
$tdataActivations_per_active_FL[".filterFields"] = array();
$tdataActivations_per_active_FL[".requiredSearchFields"] = array();

$tdataActivations_per_active_FL[".allSearchFields"][] = "Activator_Number";
	$tdataActivations_per_active_FL[".allSearchFields"][] = "Activator_Name";
	$tdataActivations_per_active_FL[".allSearchFields"][] = "Manager_Name";
	$tdataActivations_per_active_FL[".allSearchFields"][] = "Manager_Title";
	$tdataActivations_per_active_FL[".allSearchFields"][] = "Date";
	$tdataActivations_per_active_FL[".allSearchFields"][] = "Activations";
	$tdataActivations_per_active_FL[".allSearchFields"][] = "With_Airtime";
	$tdataActivations_per_active_FL[".allSearchFields"][] = "No_Airtime";
	$tdataActivations_per_active_FL[".allSearchFields"][] = "Percent";
	

$tdataActivations_per_active_FL[".googleLikeFields"] = array();
$tdataActivations_per_active_FL[".googleLikeFields"][] = "Activator_Number";
$tdataActivations_per_active_FL[".googleLikeFields"][] = "Activator_Name";
$tdataActivations_per_active_FL[".googleLikeFields"][] = "Manager_Name";
$tdataActivations_per_active_FL[".googleLikeFields"][] = "Manager_Title";
$tdataActivations_per_active_FL[".googleLikeFields"][] = "Date";
$tdataActivations_per_active_FL[".googleLikeFields"][] = "Activations";
$tdataActivations_per_active_FL[".googleLikeFields"][] = "With_Airtime";
$tdataActivations_per_active_FL[".googleLikeFields"][] = "No_Airtime";
$tdataActivations_per_active_FL[".googleLikeFields"][] = "Percent";


$tdataActivations_per_active_FL[".advSearchFields"] = array();
$tdataActivations_per_active_FL[".advSearchFields"][] = "Activator_Number";
$tdataActivations_per_active_FL[".advSearchFields"][] = "Activator_Name";
$tdataActivations_per_active_FL[".advSearchFields"][] = "Manager_Name";
$tdataActivations_per_active_FL[".advSearchFields"][] = "Manager_Title";
$tdataActivations_per_active_FL[".advSearchFields"][] = "Date";
$tdataActivations_per_active_FL[".advSearchFields"][] = "Activations";
$tdataActivations_per_active_FL[".advSearchFields"][] = "With_Airtime";
$tdataActivations_per_active_FL[".advSearchFields"][] = "No_Airtime";
$tdataActivations_per_active_FL[".advSearchFields"][] = "Percent";

$tdataActivations_per_active_FL[".tableType"] = "list";

$tdataActivations_per_active_FL[".printerPageOrientation"] = 0;
$tdataActivations_per_active_FL[".nPrinterPageScale"] = 100;

$tdataActivations_per_active_FL[".nPrinterSplitRecords"] = 40;

$tdataActivations_per_active_FL[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataActivations_per_active_FL[".pageSize"] = 20;

$tdataActivations_per_active_FL[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataActivations_per_active_FL[".strOrderBy"] = $tstrOrderBy;

$tdataActivations_per_active_FL[".orderindexes"] = array();

$tdataActivations_per_active_FL[".sqlHead"] = "SELECT simcards_batches.`Activator_Number`, simcards_batches.`Activator_Name`, simcards_batches.`Manager_Name` , Manager_Title, Event_date as Date, sum( simcards_batches.`Status` = 'Active' ) AS Activations, sum( simcards_batches.`Airtime_transered` > 999 ) AS With_Airtime, sum( simcards_batches.`Airtime_transered` < 1000 ) AS No_Airtime  , '' as Percent";
$tdataActivations_per_active_FL[".sqlFrom"] = "FROM `simcards_batches`";
$tdataActivations_per_active_FL[".sqlWhereExpr"] = "simcards_batches.`Status` = 'Active'  AND (Manager_Title = 'SC' OR Manager_Title = 'D/S')";
$tdataActivations_per_active_FL[".sqlTail"] = "GROUP BY simcards_batches.`Activator_Number` , Event_date";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataActivations_per_active_FL[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataActivations_per_active_FL[".arrGroupsPerPage"] = $arrGPP;

$tdataActivations_per_active_FL[".highlightSearchResults"] = true;

$tableKeysActivations_per_active_FL = array();
$tdataActivations_per_active_FL[".Keys"] = $tableKeysActivations_per_active_FL;

$tdataActivations_per_active_FL[".listFields"] = array();
$tdataActivations_per_active_FL[".listFields"][] = "Activator_Number";
$tdataActivations_per_active_FL[".listFields"][] = "Activator_Name";
$tdataActivations_per_active_FL[".listFields"][] = "Manager_Name";
$tdataActivations_per_active_FL[".listFields"][] = "Manager_Title";
$tdataActivations_per_active_FL[".listFields"][] = "Date";
$tdataActivations_per_active_FL[".listFields"][] = "Activations";
$tdataActivations_per_active_FL[".listFields"][] = "With_Airtime";
$tdataActivations_per_active_FL[".listFields"][] = "No_Airtime";
$tdataActivations_per_active_FL[".listFields"][] = "Percent";

$tdataActivations_per_active_FL[".hideMobileList"] = array();


$tdataActivations_per_active_FL[".viewFields"] = array();
$tdataActivations_per_active_FL[".viewFields"][] = "Activator_Number";
$tdataActivations_per_active_FL[".viewFields"][] = "Activator_Name";
$tdataActivations_per_active_FL[".viewFields"][] = "Manager_Name";
$tdataActivations_per_active_FL[".viewFields"][] = "Manager_Title";
$tdataActivations_per_active_FL[".viewFields"][] = "Date";
$tdataActivations_per_active_FL[".viewFields"][] = "Activations";
$tdataActivations_per_active_FL[".viewFields"][] = "With_Airtime";
$tdataActivations_per_active_FL[".viewFields"][] = "No_Airtime";
$tdataActivations_per_active_FL[".viewFields"][] = "Percent";

$tdataActivations_per_active_FL[".addFields"] = array();
$tdataActivations_per_active_FL[".addFields"][] = "Activator_Number";

$tdataActivations_per_active_FL[".inlineAddFields"] = array();
$tdataActivations_per_active_FL[".inlineAddFields"][] = "Activator_Number";

$tdataActivations_per_active_FL[".editFields"] = array();
$tdataActivations_per_active_FL[".editFields"][] = "Activator_Number";

$tdataActivations_per_active_FL[".inlineEditFields"] = array();
$tdataActivations_per_active_FL[".inlineEditFields"][] = "Activator_Number";

$tdataActivations_per_active_FL[".exportFields"] = array();
$tdataActivations_per_active_FL[".exportFields"][] = "Activator_Number";
$tdataActivations_per_active_FL[".exportFields"][] = "Activator_Name";
$tdataActivations_per_active_FL[".exportFields"][] = "Manager_Name";
$tdataActivations_per_active_FL[".exportFields"][] = "Manager_Title";
$tdataActivations_per_active_FL[".exportFields"][] = "Date";
$tdataActivations_per_active_FL[".exportFields"][] = "Activations";
$tdataActivations_per_active_FL[".exportFields"][] = "With_Airtime";
$tdataActivations_per_active_FL[".exportFields"][] = "No_Airtime";
$tdataActivations_per_active_FL[".exportFields"][] = "Percent";

$tdataActivations_per_active_FL[".importFields"] = array();
$tdataActivations_per_active_FL[".importFields"][] = "Activator_Number";
$tdataActivations_per_active_FL[".importFields"][] = "Activator_Name";
$tdataActivations_per_active_FL[".importFields"][] = "Manager_Name";
$tdataActivations_per_active_FL[".importFields"][] = "Manager_Title";
$tdataActivations_per_active_FL[".importFields"][] = "Date";
$tdataActivations_per_active_FL[".importFields"][] = "Activations";
$tdataActivations_per_active_FL[".importFields"][] = "With_Airtime";
$tdataActivations_per_active_FL[".importFields"][] = "No_Airtime";
$tdataActivations_per_active_FL[".importFields"][] = "Percent";

$tdataActivations_per_active_FL[".printFields"] = array();
$tdataActivations_per_active_FL[".printFields"][] = "Activator_Number";
$tdataActivations_per_active_FL[".printFields"][] = "Activator_Name";
$tdataActivations_per_active_FL[".printFields"][] = "Manager_Name";
$tdataActivations_per_active_FL[".printFields"][] = "Manager_Title";
$tdataActivations_per_active_FL[".printFields"][] = "Date";
$tdataActivations_per_active_FL[".printFields"][] = "Activations";
$tdataActivations_per_active_FL[".printFields"][] = "With_Airtime";
$tdataActivations_per_active_FL[".printFields"][] = "No_Airtime";
$tdataActivations_per_active_FL[".printFields"][] = "Percent";

//	Activator_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Activator_Number";
	$fdata["GoodName"] = "Activator_Number";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Activations_per_active_FL","Activator_Number"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Activator_Number"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "simcards_batches.`Activator_Number`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataActivations_per_active_FL["Activator_Number"] = $fdata;
//	Activator_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Activator_Name";
	$fdata["GoodName"] = "Activator_Name";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Activations_per_active_FL","Activator_Name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Activator_Name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "simcards_batches.`Activator_Name`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataActivations_per_active_FL["Activator_Name"] = $fdata;
//	Manager_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Manager_Name";
	$fdata["GoodName"] = "Manager_Name";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Activations_per_active_FL","Manager_Name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Manager_Name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "simcards_batches.`Manager_Name`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataActivations_per_active_FL["Manager_Name"] = $fdata;
//	Manager_Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Manager_Title";
	$fdata["GoodName"] = "Manager_Title";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Activations_per_active_FL","Manager_Title"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Manager_Title"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Manager_Title";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataActivations_per_active_FL["Manager_Title"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Activations_per_active_FL","Date"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Event_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Event_date";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataActivations_per_active_FL["Date"] = $fdata;
//	Activations
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Activations";
	$fdata["GoodName"] = "Activations";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Activations_per_active_FL","Activations"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Activations"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sum( simcards_batches.`Status` = 'Active' )";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataActivations_per_active_FL["Activations"] = $fdata;
//	With_Airtime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "With_Airtime";
	$fdata["GoodName"] = "With_Airtime";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Activations_per_active_FL","With_Airtime"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "With_Airtime"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sum( simcards_batches.`Airtime_transered` > 999 )";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataActivations_per_active_FL["With_Airtime"] = $fdata;
//	No_Airtime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "No_Airtime";
	$fdata["GoodName"] = "No_Airtime";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Activations_per_active_FL","No_Airtime"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "No_Airtime"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sum( simcards_batches.`Airtime_transered` < 1000 )";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 0;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataActivations_per_active_FL["No_Airtime"] = $fdata;
//	Percent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Percent";
	$fdata["GoodName"] = "Percent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Activations_per_active_FL","Percent"); 
	$fdata["FieldType"] = 129;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Percent"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataActivations_per_active_FL["Percent"] = $fdata;

	
$tables_data["Activations per active FL"]=&$tdataActivations_per_active_FL;
$field_labels["Activations_per_active_FL"] = &$fieldLabelsActivations_per_active_FL;
$fieldToolTips["Activations per active FL"] = &$fieldToolTipsActivations_per_active_FL;
$page_titles["Activations_per_active_FL"] = &$pageTitlesActivations_per_active_FL;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Activations per active FL"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Activations per active FL"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Activations_per_active_FL()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "simcards_batches.`Activator_Number`, simcards_batches.`Activator_Name`, simcards_batches.`Manager_Name` , Manager_Title, Event_date as Date, sum( simcards_batches.`Status` = 'Active' ) AS Activations, sum( simcards_batches.`Airtime_transered` > 999 ) AS With_Airtime, sum( simcards_batches.`Airtime_transered` < 1000 ) AS No_Airtime  , '' as Percent";
$proto0["m_strFrom"] = "FROM `simcards_batches`";
$proto0["m_strWhere"] = "simcards_batches.`Status` = 'Active'  AND (Manager_Title = 'SC' OR Manager_Title = 'D/S')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY simcards_batches.`Activator_Number` , Event_date";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "simcards_batches.`Status` = 'Active'  AND (Manager_Title = 'SC' OR Manager_Title = 'D/S')";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "simcards_batches.`Status` = 'Active'  AND (Manager_Title = 'SC' OR Manager_Title = 'D/S')"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "simcards_batches.`Status` = 'Active'";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Activations per active FL"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "= 'Active'";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "Manager_Title = 'SC' OR Manager_Title = 'D/S'";
$proto5["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "Manager_Title = 'SC' OR Manager_Title = 'D/S'"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
						$proto7=array();
$proto7["m_sql"] = "Manager_Title = 'SC'";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Activations per active FL"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "= 'SC'";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

			$proto5["m_contained"][]=$obj;
						$proto9=array();
$proto9["m_sql"] = "Manager_Title = 'D/S'";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Activations per active FL"
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "= 'D/S'";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = false;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

			$proto5["m_contained"][]=$obj;
$proto5["m_strCase"] = "";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = true;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Activator_Number",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Activations per active FL"
));

$proto13["m_sql"] = "simcards_batches.`Activator_Number`";
$proto13["m_srcTableName"] = "Activations per active FL";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Activator_Name",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Activations per active FL"
));

$proto15["m_sql"] = "simcards_batches.`Activator_Name`";
$proto15["m_srcTableName"] = "Activations per active FL";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Name",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Activations per active FL"
));

$proto17["m_sql"] = "simcards_batches.`Manager_Name`";
$proto17["m_srcTableName"] = "Activations per active FL";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Activations per active FL"
));

$proto19["m_sql"] = "Manager_Title";
$proto19["m_srcTableName"] = "Activations per active FL";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_date",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Activations per active FL"
));

$proto21["m_sql"] = "Event_date";
$proto21["m_srcTableName"] = "Activations per active FL";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "Date";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$proto24=array();
$proto24["m_functiontype"] = "SQLF_SUM";
$proto24["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "simcards_batches.`Status` = 'Active'"
));

$proto24["m_arguments"][]=$obj;
$proto24["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto24);

$proto23["m_sql"] = "sum( simcards_batches.`Status` = 'Active' )";
$proto23["m_srcTableName"] = "Activations per active FL";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "Activations";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_SUM";
$proto27["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "simcards_batches.`Airtime_transered` > 999"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "sum( simcards_batches.`Airtime_transered` > 999 )";
$proto26["m_srcTableName"] = "Activations per active FL";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "With_Airtime";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$proto30=array();
$proto30["m_functiontype"] = "SQLF_SUM";
$proto30["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "simcards_batches.`Airtime_transered` < 1000"
));

$proto30["m_arguments"][]=$obj;
$proto30["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto30);

$proto29["m_sql"] = "sum( simcards_batches.`Airtime_transered` < 1000 )";
$proto29["m_srcTableName"] = "Activations per active FL";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "No_Airtime";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto32["m_sql"] = "''";
$proto32["m_srcTableName"] = "Activations per active FL";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "Percent";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "simcards_batches";
$proto35["m_srcTableName"] = "Activations per active FL";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "ID";
$proto35["m_columns"][] = "batch_name";
$proto35["m_columns"][] = "ICCID";
$proto35["m_columns"][] = "Status";
$proto35["m_columns"][] = "Manager_Name";
$proto35["m_columns"][] = "Manager_Title";
$proto35["m_columns"][] = "Activator_Number";
$proto35["m_columns"][] = "Activator_Name";
$proto35["m_columns"][] = "Team_Leader";
$proto35["m_columns"][] = "Event_date";
$proto35["m_columns"][] = "time";
$proto35["m_columns"][] = "Active_MSISDN";
$proto35["m_columns"][] = "New_MSISDN";
$proto35["m_columns"][] = "Swap_Date";
$proto35["m_columns"][] = "Airtime_transered";
$proto35["m_columns"][] = "Transfer_date";
$proto35["m_columns"][] = "Activation_Commission";
$proto35["m_columns"][] = "Form_Commission";
$proto35["m_columns"][] = "Form_Paid_Date";
$proto35["m_columns"][] = "Form_Returned";
$proto35["m_columns"][] = "Form_Status";
$proto35["m_columns"][] = "Form_Date";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "`simcards_batches`";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "Activations per active FL";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "Activator_Number",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Activations per active FL"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "Event_date",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Activations per active FL"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Activations per active FL";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Activations_per_active_FL = createSqlQuery_Activations_per_active_FL();


	
									
	
$tdataActivations_per_active_FL[".sqlquery"] = $queryData_Activations_per_active_FL;

$tableEvents["Activations per active FL"] = new eventsBase;
$tdataActivations_per_active_FL[".hasEvents"] = false;

?>