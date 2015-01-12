<?php
require_once(getabspath("classes/cipherer.php"));




$tdataActivations___Airtime_Transfers = array();	
	$tdataActivations___Airtime_Transfers[".truncateText"] = true;
	$tdataActivations___Airtime_Transfers[".NumberOfChars"] = 80; 
	$tdataActivations___Airtime_Transfers[".ShortName"] = "Activations___Airtime_Transfers";
	$tdataActivations___Airtime_Transfers[".OwnerID"] = "";
	$tdataActivations___Airtime_Transfers[".OriginalTable"] = "activated_sims";

//	field labels
$fieldLabelsActivations___Airtime_Transfers = array();
$fieldToolTipsActivations___Airtime_Transfers = array();
$pageTitlesActivations___Airtime_Transfers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsActivations___Airtime_Transfers["English"] = array();
	$fieldToolTipsActivations___Airtime_Transfers["English"] = array();
	$pageTitlesActivations___Airtime_Transfers["English"] = array();
	$fieldLabelsActivations___Airtime_Transfers["English"]["Manager_Name"] = "Manager Name";
	$fieldToolTipsActivations___Airtime_Transfers["English"]["Manager_Name"] = "";
	$fieldLabelsActivations___Airtime_Transfers["English"]["Total_Activations"] = "Total Activations";
	$fieldToolTipsActivations___Airtime_Transfers["English"]["Total_Activations"] = "";
	$fieldLabelsActivations___Airtime_Transfers["English"]["With_Airtime"] = "With Airtime";
	$fieldToolTipsActivations___Airtime_Transfers["English"]["With_Airtime"] = "";
	$fieldLabelsActivations___Airtime_Transfers["English"]["A_Date"] = "A Date";
	$fieldToolTipsActivations___Airtime_Transfers["English"]["A_Date"] = "";
	$fieldLabelsActivations___Airtime_Transfers["English"]["Percent"] = "Percent";
	$fieldToolTipsActivations___Airtime_Transfers["English"]["Percent"] = "";
	$fieldLabelsActivations___Airtime_Transfers["English"]["Title"] = "Title";
	$fieldToolTipsActivations___Airtime_Transfers["English"]["Title"] = "";
	$fieldLabelsActivations___Airtime_Transfers["English"]["No_Airtime"] = "No Airtime";
	$fieldToolTipsActivations___Airtime_Transfers["English"]["No_Airtime"] = "";
	if (count($fieldToolTipsActivations___Airtime_Transfers["English"]))
		$tdataActivations___Airtime_Transfers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsActivations___Airtime_Transfers[""] = array();
	$fieldToolTipsActivations___Airtime_Transfers[""] = array();
	$pageTitlesActivations___Airtime_Transfers[""] = array();
	$fieldLabelsActivations___Airtime_Transfers[""]["A_Date"] = "A Date";
	$fieldToolTipsActivations___Airtime_Transfers[""]["A_Date"] = "";
	$fieldLabelsActivations___Airtime_Transfers[""]["Percent"] = "Percent";
	$fieldToolTipsActivations___Airtime_Transfers[""]["Percent"] = "";
	$fieldLabelsActivations___Airtime_Transfers[""]["Title"] = "Title";
	$fieldToolTipsActivations___Airtime_Transfers[""]["Title"] = "";
	$fieldLabelsActivations___Airtime_Transfers[""]["No_Airtime"] = "No Airtime";
	$fieldToolTipsActivations___Airtime_Transfers[""]["No_Airtime"] = "";
	if (count($fieldToolTipsActivations___Airtime_Transfers[""]))
		$tdataActivations___Airtime_Transfers[".isUseToolTips"] = true;
}
	
	
	$tdataActivations___Airtime_Transfers[".NCSearch"] = true;



$tdataActivations___Airtime_Transfers[".shortTableName"] = "Activations___Airtime_Transfers";
$tdataActivations___Airtime_Transfers[".nSecOptions"] = 0;
$tdataActivations___Airtime_Transfers[".recsPerRowList"] = 1;
$tdataActivations___Airtime_Transfers[".mainTableOwnerID"] = "";
$tdataActivations___Airtime_Transfers[".moveNext"] = 1;
$tdataActivations___Airtime_Transfers[".nType"] = 1;

$tdataActivations___Airtime_Transfers[".strOriginalTableName"] = "activated_sims";




$tdataActivations___Airtime_Transfers[".showAddInPopup"] = false;

$tdataActivations___Airtime_Transfers[".showEditInPopup"] = false;

$tdataActivations___Airtime_Transfers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataActivations___Airtime_Transfers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataActivations___Airtime_Transfers[".fieldsForRegister"] = array();

$tdataActivations___Airtime_Transfers[".listAjax"] = false;

	$tdataActivations___Airtime_Transfers[".audit"] = false;

	$tdataActivations___Airtime_Transfers[".locking"] = false;


$tdataActivations___Airtime_Transfers[".list"] = true;

$tdataActivations___Airtime_Transfers[".inlineAdd"] = true;

$tdataActivations___Airtime_Transfers[".import"] = true;

$tdataActivations___Airtime_Transfers[".exportTo"] = true;

$tdataActivations___Airtime_Transfers[".printFriendly"] = true;


$tdataActivations___Airtime_Transfers[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataActivations___Airtime_Transfers[".searchSaving"] = false;
//

$tdataActivations___Airtime_Transfers[".showSearchPanel"] = true;
		$tdataActivations___Airtime_Transfers[".flexibleSearch"] = true;		

if (isMobile())
	$tdataActivations___Airtime_Transfers[".isUseAjaxSuggest"] = false;
else 
	$tdataActivations___Airtime_Transfers[".isUseAjaxSuggest"] = true;

$tdataActivations___Airtime_Transfers[".rowHighlite"] = true;



$tdataActivations___Airtime_Transfers[".addPageEvents"] = false;

// use timepicker for search panel
$tdataActivations___Airtime_Transfers[".isUseTimeForSearch"] = false;





$tdataActivations___Airtime_Transfers[".allSearchFields"] = array();
$tdataActivations___Airtime_Transfers[".filterFields"] = array();
$tdataActivations___Airtime_Transfers[".requiredSearchFields"] = array();

$tdataActivations___Airtime_Transfers[".allSearchFields"][] = "Manager_Name";
	$tdataActivations___Airtime_Transfers[".allSearchFields"][] = "Title";
	$tdataActivations___Airtime_Transfers[".allSearchFields"][] = "A_Date";
	$tdataActivations___Airtime_Transfers[".allSearchFields"][] = "Total_Activations";
	$tdataActivations___Airtime_Transfers[".allSearchFields"][] = "With_Airtime";
	$tdataActivations___Airtime_Transfers[".allSearchFields"][] = "No_Airtime";
	$tdataActivations___Airtime_Transfers[".allSearchFields"][] = "Percent";
	

$tdataActivations___Airtime_Transfers[".googleLikeFields"] = array();
$tdataActivations___Airtime_Transfers[".googleLikeFields"][] = "Manager_Name";
$tdataActivations___Airtime_Transfers[".googleLikeFields"][] = "Title";
$tdataActivations___Airtime_Transfers[".googleLikeFields"][] = "A_Date";
$tdataActivations___Airtime_Transfers[".googleLikeFields"][] = "Total_Activations";
$tdataActivations___Airtime_Transfers[".googleLikeFields"][] = "With_Airtime";
$tdataActivations___Airtime_Transfers[".googleLikeFields"][] = "No_Airtime";
$tdataActivations___Airtime_Transfers[".googleLikeFields"][] = "Percent";


$tdataActivations___Airtime_Transfers[".advSearchFields"] = array();
$tdataActivations___Airtime_Transfers[".advSearchFields"][] = "Manager_Name";
$tdataActivations___Airtime_Transfers[".advSearchFields"][] = "Title";
$tdataActivations___Airtime_Transfers[".advSearchFields"][] = "A_Date";
$tdataActivations___Airtime_Transfers[".advSearchFields"][] = "Total_Activations";
$tdataActivations___Airtime_Transfers[".advSearchFields"][] = "With_Airtime";
$tdataActivations___Airtime_Transfers[".advSearchFields"][] = "No_Airtime";
$tdataActivations___Airtime_Transfers[".advSearchFields"][] = "Percent";

$tdataActivations___Airtime_Transfers[".tableType"] = "list";

$tdataActivations___Airtime_Transfers[".printerPageOrientation"] = 0;
$tdataActivations___Airtime_Transfers[".nPrinterPageScale"] = 100;

$tdataActivations___Airtime_Transfers[".nPrinterSplitRecords"] = 40;

$tdataActivations___Airtime_Transfers[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataActivations___Airtime_Transfers[".pageSize"] = 20;

$tdataActivations___Airtime_Transfers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataActivations___Airtime_Transfers[".strOrderBy"] = $tstrOrderBy;

$tdataActivations___Airtime_Transfers[".orderindexes"] = array();

$tdataActivations___Airtime_Transfers[".sqlHead"] = "SELECT simcards_batches.`Manager_Name` , Manager_Title as Title, Event_date as A_Date, sum( simcards_batches.`Status` = 'Active' ) AS Total_Activations, sum( simcards_batches.`Airtime_transered` > 999 ) AS With_Airtime, sum( simcards_batches.`Airtime_transered` < 1000 ) AS No_Airtime  , '' as Percent";
$tdataActivations___Airtime_Transfers[".sqlFrom"] = "FROM `simcards_batches`";
$tdataActivations___Airtime_Transfers[".sqlWhereExpr"] = "simcards_batches.`Status` = 'Active'  AND (Manager_Title = 'SC' OR Manager_Title = 'CAS' OR Manager_Title = 'D/S')";
$tdataActivations___Airtime_Transfers[".sqlTail"] = "GROUP BY simcards_batches.`Manager_Name` , Event_date";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataActivations___Airtime_Transfers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataActivations___Airtime_Transfers[".arrGroupsPerPage"] = $arrGPP;

$tdataActivations___Airtime_Transfers[".highlightSearchResults"] = true;

$tableKeysActivations___Airtime_Transfers = array();
$tdataActivations___Airtime_Transfers[".Keys"] = $tableKeysActivations___Airtime_Transfers;

$tdataActivations___Airtime_Transfers[".listFields"] = array();
$tdataActivations___Airtime_Transfers[".listFields"][] = "Manager_Name";
$tdataActivations___Airtime_Transfers[".listFields"][] = "Title";
$tdataActivations___Airtime_Transfers[".listFields"][] = "A_Date";
$tdataActivations___Airtime_Transfers[".listFields"][] = "Total_Activations";
$tdataActivations___Airtime_Transfers[".listFields"][] = "With_Airtime";
$tdataActivations___Airtime_Transfers[".listFields"][] = "No_Airtime";
$tdataActivations___Airtime_Transfers[".listFields"][] = "Percent";

$tdataActivations___Airtime_Transfers[".hideMobileList"] = array();


$tdataActivations___Airtime_Transfers[".viewFields"] = array();
$tdataActivations___Airtime_Transfers[".viewFields"][] = "Manager_Name";
$tdataActivations___Airtime_Transfers[".viewFields"][] = "Title";
$tdataActivations___Airtime_Transfers[".viewFields"][] = "A_Date";
$tdataActivations___Airtime_Transfers[".viewFields"][] = "Total_Activations";
$tdataActivations___Airtime_Transfers[".viewFields"][] = "With_Airtime";
$tdataActivations___Airtime_Transfers[".viewFields"][] = "No_Airtime";
$tdataActivations___Airtime_Transfers[".viewFields"][] = "Percent";

$tdataActivations___Airtime_Transfers[".addFields"] = array();

$tdataActivations___Airtime_Transfers[".inlineAddFields"] = array();

$tdataActivations___Airtime_Transfers[".editFields"] = array();

$tdataActivations___Airtime_Transfers[".inlineEditFields"] = array();

$tdataActivations___Airtime_Transfers[".exportFields"] = array();
$tdataActivations___Airtime_Transfers[".exportFields"][] = "Manager_Name";
$tdataActivations___Airtime_Transfers[".exportFields"][] = "Title";
$tdataActivations___Airtime_Transfers[".exportFields"][] = "A_Date";
$tdataActivations___Airtime_Transfers[".exportFields"][] = "Total_Activations";
$tdataActivations___Airtime_Transfers[".exportFields"][] = "With_Airtime";
$tdataActivations___Airtime_Transfers[".exportFields"][] = "No_Airtime";
$tdataActivations___Airtime_Transfers[".exportFields"][] = "Percent";

$tdataActivations___Airtime_Transfers[".importFields"] = array();
$tdataActivations___Airtime_Transfers[".importFields"][] = "Manager_Name";
$tdataActivations___Airtime_Transfers[".importFields"][] = "Title";
$tdataActivations___Airtime_Transfers[".importFields"][] = "A_Date";
$tdataActivations___Airtime_Transfers[".importFields"][] = "Total_Activations";
$tdataActivations___Airtime_Transfers[".importFields"][] = "With_Airtime";
$tdataActivations___Airtime_Transfers[".importFields"][] = "No_Airtime";
$tdataActivations___Airtime_Transfers[".importFields"][] = "Percent";

$tdataActivations___Airtime_Transfers[".printFields"] = array();
$tdataActivations___Airtime_Transfers[".printFields"][] = "Manager_Name";
$tdataActivations___Airtime_Transfers[".printFields"][] = "Title";
$tdataActivations___Airtime_Transfers[".printFields"][] = "A_Date";
$tdataActivations___Airtime_Transfers[".printFields"][] = "Total_Activations";
$tdataActivations___Airtime_Transfers[".printFields"][] = "With_Airtime";
$tdataActivations___Airtime_Transfers[".printFields"][] = "No_Airtime";
$tdataActivations___Airtime_Transfers[".printFields"][] = "Percent";

//	Manager_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Manager_Name";
	$fdata["GoodName"] = "Manager_Name";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Activations___Airtime_Transfers","Manager_Name"); 
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

	

	
	$tdataActivations___Airtime_Transfers["Manager_Name"] = $fdata;
//	Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Title";
	$fdata["GoodName"] = "Title";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Activations___Airtime_Transfers","Title"); 
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

	

	
	$tdataActivations___Airtime_Transfers["Title"] = $fdata;
//	A_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "A_Date";
	$fdata["GoodName"] = "A_Date";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Activations___Airtime_Transfers","A_Date"); 
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

	

	
	$tdataActivations___Airtime_Transfers["A_Date"] = $fdata;
//	Total_Activations
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Total_Activations";
	$fdata["GoodName"] = "Total_Activations";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Activations___Airtime_Transfers","Total_Activations"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Total_Activations"; 
	
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

	

	
	$tdataActivations___Airtime_Transfers["Total_Activations"] = $fdata;
//	With_Airtime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "With_Airtime";
	$fdata["GoodName"] = "With_Airtime";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Activations___Airtime_Transfers","With_Airtime"); 
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

	

	
	$tdataActivations___Airtime_Transfers["With_Airtime"] = $fdata;
//	No_Airtime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "No_Airtime";
	$fdata["GoodName"] = "No_Airtime";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Activations___Airtime_Transfers","No_Airtime"); 
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

	

	
	$tdataActivations___Airtime_Transfers["No_Airtime"] = $fdata;
//	Percent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Percent";
	$fdata["GoodName"] = "Percent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Activations___Airtime_Transfers","Percent"); 
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

	

	
	$tdataActivations___Airtime_Transfers["Percent"] = $fdata;

	
$tables_data["Activations & Airtime Transfers"]=&$tdataActivations___Airtime_Transfers;
$field_labels["Activations___Airtime_Transfers"] = &$fieldLabelsActivations___Airtime_Transfers;
$fieldToolTips["Activations & Airtime Transfers"] = &$fieldToolTipsActivations___Airtime_Transfers;
$page_titles["Activations___Airtime_Transfers"] = &$pageTitlesActivations___Airtime_Transfers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Activations & Airtime Transfers"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Activations & Airtime Transfers"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Activations___Airtime_Transfers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "simcards_batches.`Manager_Name` , Manager_Title as Title, Event_date as A_Date, sum( simcards_batches.`Status` = 'Active' ) AS Total_Activations, sum( simcards_batches.`Airtime_transered` > 999 ) AS With_Airtime, sum( simcards_batches.`Airtime_transered` < 1000 ) AS No_Airtime  , '' as Percent";
$proto0["m_strFrom"] = "FROM `simcards_batches`";
$proto0["m_strWhere"] = "simcards_batches.`Status` = 'Active'  AND (Manager_Title = 'SC' OR Manager_Title = 'CAS' OR Manager_Title = 'D/S')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY simcards_batches.`Manager_Name` , Event_date";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "simcards_batches.`Status` = 'Active'  AND (Manager_Title = 'SC' OR Manager_Title = 'CAS' OR Manager_Title = 'D/S')";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "simcards_batches.`Status` = 'Active'  AND (Manager_Title = 'SC' OR Manager_Title = 'CAS' OR Manager_Title = 'D/S')"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "simcards_batches.`Status` = 'Active'";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Activations & Airtime Transfers"
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
$proto5["m_sql"] = "Manager_Title = 'SC' OR Manager_Title = 'CAS' OR Manager_Title = 'D/S'";
$proto5["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "Manager_Title = 'SC' OR Manager_Title = 'CAS' OR Manager_Title = 'D/S'"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
						$proto7=array();
$proto7["m_sql"] = "Manager_Title = 'SC'";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Activations & Airtime Transfers"
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
$proto9["m_sql"] = "Manager_Title = 'CAS'";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Activations & Airtime Transfers"
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "= 'CAS'";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = false;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

			$proto5["m_contained"][]=$obj;
						$proto11=array();
$proto11["m_sql"] = "Manager_Title = 'D/S'";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Activations & Airtime Transfers"
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "= 'D/S'";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

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
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Name",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Activations & Airtime Transfers"
));

$proto15["m_sql"] = "simcards_batches.`Manager_Name`";
$proto15["m_srcTableName"] = "Activations & Airtime Transfers";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Activations & Airtime Transfers"
));

$proto17["m_sql"] = "Manager_Title";
$proto17["m_srcTableName"] = "Activations & Airtime Transfers";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Title";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_date",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Activations & Airtime Transfers"
));

$proto19["m_sql"] = "Event_date";
$proto19["m_srcTableName"] = "Activations & Airtime Transfers";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "A_Date";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_SUM";
$proto22["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "simcards_batches.`Status` = 'Active'"
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto22);

$proto21["m_sql"] = "sum( simcards_batches.`Status` = 'Active' )";
$proto21["m_srcTableName"] = "Activations & Airtime Transfers";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "Total_Activations";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$proto25=array();
$proto25["m_functiontype"] = "SQLF_SUM";
$proto25["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "simcards_batches.`Airtime_transered` > 999"
));

$proto25["m_arguments"][]=$obj;
$proto25["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto25);

$proto24["m_sql"] = "sum( simcards_batches.`Airtime_transered` > 999 )";
$proto24["m_srcTableName"] = "Activations & Airtime Transfers";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "With_Airtime";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$proto28=array();
$proto28["m_functiontype"] = "SQLF_SUM";
$proto28["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "simcards_batches.`Airtime_transered` < 1000"
));

$proto28["m_arguments"][]=$obj;
$proto28["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto28);

$proto27["m_sql"] = "sum( simcards_batches.`Airtime_transered` < 1000 )";
$proto27["m_srcTableName"] = "Activations & Airtime Transfers";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "No_Airtime";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto30["m_sql"] = "''";
$proto30["m_srcTableName"] = "Activations & Airtime Transfers";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "Percent";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "simcards_batches";
$proto33["m_srcTableName"] = "Activations & Airtime Transfers";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "ID";
$proto33["m_columns"][] = "batch_name";
$proto33["m_columns"][] = "ICCID";
$proto33["m_columns"][] = "Status";
$proto33["m_columns"][] = "Manager_Name";
$proto33["m_columns"][] = "Manager_Title";
$proto33["m_columns"][] = "Activator_Number";
$proto33["m_columns"][] = "Activator_Name";
$proto33["m_columns"][] = "Team_Leader";
$proto33["m_columns"][] = "Event_date";
$proto33["m_columns"][] = "time";
$proto33["m_columns"][] = "Active_MSISDN";
$proto33["m_columns"][] = "New_MSISDN";
$proto33["m_columns"][] = "Swap_Date";
$proto33["m_columns"][] = "Airtime_transered";
$proto33["m_columns"][] = "Transfer_date";
$proto33["m_columns"][] = "Activation_Commission";
$proto33["m_columns"][] = "Form_Commission";
$proto33["m_columns"][] = "Form_Paid_Date";
$proto33["m_columns"][] = "Form_Returned";
$proto33["m_columns"][] = "Form_Status";
$proto33["m_columns"][] = "Form_Date";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "`simcards_batches`";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "Activations & Airtime Transfers";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "Manager_Name",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Activations & Airtime Transfers"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "Event_date",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Activations & Airtime Transfers"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Activations & Airtime Transfers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Activations___Airtime_Transfers = createSqlQuery_Activations___Airtime_Transfers();


	
							
	
$tdataActivations___Airtime_Transfers[".sqlquery"] = $queryData_Activations___Airtime_Transfers;

$tableEvents["Activations & Airtime Transfers"] = new eventsBase;
$tdataActivations___Airtime_Transfers[".hasEvents"] = false;

?>