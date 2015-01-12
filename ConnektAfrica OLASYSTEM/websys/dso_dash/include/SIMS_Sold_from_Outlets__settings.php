<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSIMS_Sold_from_Outlets_ = array();	
	$tdataSIMS_Sold_from_Outlets_[".truncateText"] = true;
	$tdataSIMS_Sold_from_Outlets_[".NumberOfChars"] = 80; 
	$tdataSIMS_Sold_from_Outlets_[".ShortName"] = "SIMS_Sold_from_Outlets_";
	$tdataSIMS_Sold_from_Outlets_[".OwnerID"] = "";
	$tdataSIMS_Sold_from_Outlets_[".OriginalTable"] = "activators";

//	field labels
$fieldLabelsSIMS_Sold_from_Outlets_ = array();
$fieldToolTipsSIMS_Sold_from_Outlets_ = array();
$pageTitlesSIMS_Sold_from_Outlets_ = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSIMS_Sold_from_Outlets_["English"] = array();
	$fieldToolTipsSIMS_Sold_from_Outlets_["English"] = array();
	$pageTitlesSIMS_Sold_from_Outlets_["English"] = array();
	$fieldLabelsSIMS_Sold_from_Outlets_["English"]["Manager_Name"] = "Manager Name";
	$fieldToolTipsSIMS_Sold_from_Outlets_["English"]["Manager_Name"] = "";
	$fieldLabelsSIMS_Sold_from_Outlets_["English"]["Total_Activations"] = "Total Activations";
	$fieldToolTipsSIMS_Sold_from_Outlets_["English"]["Total_Activations"] = "";
	$fieldLabelsSIMS_Sold_from_Outlets_["English"]["With_Airtime"] = "With Airtime";
	$fieldToolTipsSIMS_Sold_from_Outlets_["English"]["With_Airtime"] = "";
	$fieldLabelsSIMS_Sold_from_Outlets_["English"]["Title"] = "Title";
	$fieldToolTipsSIMS_Sold_from_Outlets_["English"]["Title"] = "";
	$fieldLabelsSIMS_Sold_from_Outlets_["English"]["Date"] = "Date";
	$fieldToolTipsSIMS_Sold_from_Outlets_["English"]["Date"] = "";
	$fieldLabelsSIMS_Sold_from_Outlets_["English"]["No_Airtime"] = "No Airtime";
	$fieldToolTipsSIMS_Sold_from_Outlets_["English"]["No_Airtime"] = "";
	if (count($fieldToolTipsSIMS_Sold_from_Outlets_["English"]))
		$tdataSIMS_Sold_from_Outlets_[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSIMS_Sold_from_Outlets_[""] = array();
	$fieldToolTipsSIMS_Sold_from_Outlets_[""] = array();
	$pageTitlesSIMS_Sold_from_Outlets_[""] = array();
	$fieldLabelsSIMS_Sold_from_Outlets_[""]["Title"] = "Title";
	$fieldToolTipsSIMS_Sold_from_Outlets_[""]["Title"] = "";
	$fieldLabelsSIMS_Sold_from_Outlets_[""]["Date"] = "Date";
	$fieldToolTipsSIMS_Sold_from_Outlets_[""]["Date"] = "";
	$fieldLabelsSIMS_Sold_from_Outlets_[""]["No_Airtime"] = "No Airtime";
	$fieldToolTipsSIMS_Sold_from_Outlets_[""]["No_Airtime"] = "";
	if (count($fieldToolTipsSIMS_Sold_from_Outlets_[""]))
		$tdataSIMS_Sold_from_Outlets_[".isUseToolTips"] = true;
}
	
	
	$tdataSIMS_Sold_from_Outlets_[".NCSearch"] = true;



$tdataSIMS_Sold_from_Outlets_[".shortTableName"] = "SIMS_Sold_from_Outlets_";
$tdataSIMS_Sold_from_Outlets_[".nSecOptions"] = 0;
$tdataSIMS_Sold_from_Outlets_[".recsPerRowList"] = 1;
$tdataSIMS_Sold_from_Outlets_[".mainTableOwnerID"] = "";
$tdataSIMS_Sold_from_Outlets_[".moveNext"] = 1;
$tdataSIMS_Sold_from_Outlets_[".nType"] = 1;

$tdataSIMS_Sold_from_Outlets_[".strOriginalTableName"] = "activators";




$tdataSIMS_Sold_from_Outlets_[".showAddInPopup"] = false;

$tdataSIMS_Sold_from_Outlets_[".showEditInPopup"] = false;

$tdataSIMS_Sold_from_Outlets_[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSIMS_Sold_from_Outlets_[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSIMS_Sold_from_Outlets_[".fieldsForRegister"] = array();

$tdataSIMS_Sold_from_Outlets_[".listAjax"] = false;

	$tdataSIMS_Sold_from_Outlets_[".audit"] = false;

	$tdataSIMS_Sold_from_Outlets_[".locking"] = false;


$tdataSIMS_Sold_from_Outlets_[".list"] = true;



$tdataSIMS_Sold_from_Outlets_[".exportTo"] = true;



$tdataSIMS_Sold_from_Outlets_[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdataSIMS_Sold_from_Outlets_[".searchSaving"] = false;
//

$tdataSIMS_Sold_from_Outlets_[".showSearchPanel"] = true;
		$tdataSIMS_Sold_from_Outlets_[".flexibleSearch"] = true;		

if (isMobile())
	$tdataSIMS_Sold_from_Outlets_[".isUseAjaxSuggest"] = false;
else 
	$tdataSIMS_Sold_from_Outlets_[".isUseAjaxSuggest"] = true;

$tdataSIMS_Sold_from_Outlets_[".rowHighlite"] = true;



$tdataSIMS_Sold_from_Outlets_[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSIMS_Sold_from_Outlets_[".isUseTimeForSearch"] = false;





$tdataSIMS_Sold_from_Outlets_[".allSearchFields"] = array();
$tdataSIMS_Sold_from_Outlets_[".filterFields"] = array();
$tdataSIMS_Sold_from_Outlets_[".requiredSearchFields"] = array();

$tdataSIMS_Sold_from_Outlets_[".allSearchFields"][] = "Manager_Name";
	$tdataSIMS_Sold_from_Outlets_[".allSearchFields"][] = "Title";
	$tdataSIMS_Sold_from_Outlets_[".allSearchFields"][] = "Date";
	$tdataSIMS_Sold_from_Outlets_[".allSearchFields"][] = "Total_Activations";
	$tdataSIMS_Sold_from_Outlets_[".allSearchFields"][] = "With_Airtime";
	$tdataSIMS_Sold_from_Outlets_[".allSearchFields"][] = "No_Airtime";
	

$tdataSIMS_Sold_from_Outlets_[".googleLikeFields"] = array();
$tdataSIMS_Sold_from_Outlets_[".googleLikeFields"][] = "Manager_Name";
$tdataSIMS_Sold_from_Outlets_[".googleLikeFields"][] = "Title";
$tdataSIMS_Sold_from_Outlets_[".googleLikeFields"][] = "Date";
$tdataSIMS_Sold_from_Outlets_[".googleLikeFields"][] = "Total_Activations";
$tdataSIMS_Sold_from_Outlets_[".googleLikeFields"][] = "With_Airtime";
$tdataSIMS_Sold_from_Outlets_[".googleLikeFields"][] = "No_Airtime";


$tdataSIMS_Sold_from_Outlets_[".advSearchFields"] = array();
$tdataSIMS_Sold_from_Outlets_[".advSearchFields"][] = "Manager_Name";
$tdataSIMS_Sold_from_Outlets_[".advSearchFields"][] = "Title";
$tdataSIMS_Sold_from_Outlets_[".advSearchFields"][] = "Date";
$tdataSIMS_Sold_from_Outlets_[".advSearchFields"][] = "Total_Activations";
$tdataSIMS_Sold_from_Outlets_[".advSearchFields"][] = "With_Airtime";
$tdataSIMS_Sold_from_Outlets_[".advSearchFields"][] = "No_Airtime";

$tdataSIMS_Sold_from_Outlets_[".tableType"] = "list";

$tdataSIMS_Sold_from_Outlets_[".printerPageOrientation"] = 0;
$tdataSIMS_Sold_from_Outlets_[".nPrinterPageScale"] = 100;

$tdataSIMS_Sold_from_Outlets_[".nPrinterSplitRecords"] = 40;

$tdataSIMS_Sold_from_Outlets_[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataSIMS_Sold_from_Outlets_[".pageSize"] = 15;

$tdataSIMS_Sold_from_Outlets_[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSIMS_Sold_from_Outlets_[".strOrderBy"] = $tstrOrderBy;

$tdataSIMS_Sold_from_Outlets_[".orderindexes"] = array();

$tdataSIMS_Sold_from_Outlets_[".sqlHead"] = "SELECT Manager_Name,  Manager_Title as Title,  Event_date as Date,  SUM(simcards_batches.`Status` = 'Active') AS Total_Activations,  SUM(simcards_batches.`Airtime_transered` > 999) AS With_Airtime,  SUM(simcards_batches.`Airtime_transered` < 1000) AS No_Airtime";
$tdataSIMS_Sold_from_Outlets_[".sqlFrom"] = "FROM simcards_batches";
$tdataSIMS_Sold_from_Outlets_[".sqlWhereExpr"] = "(Manager_Title = 'DSO' OR Manager_Title = 'RDO') AND (Status = 'Active')";
$tdataSIMS_Sold_from_Outlets_[".sqlTail"] = "GROUP BY Manager_Name, Event_date";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSIMS_Sold_from_Outlets_[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSIMS_Sold_from_Outlets_[".arrGroupsPerPage"] = $arrGPP;

$tdataSIMS_Sold_from_Outlets_[".highlightSearchResults"] = true;

$tableKeysSIMS_Sold_from_Outlets_ = array();
$tdataSIMS_Sold_from_Outlets_[".Keys"] = $tableKeysSIMS_Sold_from_Outlets_;

$tdataSIMS_Sold_from_Outlets_[".listFields"] = array();
$tdataSIMS_Sold_from_Outlets_[".listFields"][] = "Manager_Name";
$tdataSIMS_Sold_from_Outlets_[".listFields"][] = "Title";
$tdataSIMS_Sold_from_Outlets_[".listFields"][] = "Date";
$tdataSIMS_Sold_from_Outlets_[".listFields"][] = "Total_Activations";
$tdataSIMS_Sold_from_Outlets_[".listFields"][] = "With_Airtime";
$tdataSIMS_Sold_from_Outlets_[".listFields"][] = "No_Airtime";

$tdataSIMS_Sold_from_Outlets_[".hideMobileList"] = array();


$tdataSIMS_Sold_from_Outlets_[".viewFields"] = array();
$tdataSIMS_Sold_from_Outlets_[".viewFields"][] = "Title";
$tdataSIMS_Sold_from_Outlets_[".viewFields"][] = "Date";
$tdataSIMS_Sold_from_Outlets_[".viewFields"][] = "No_Airtime";

$tdataSIMS_Sold_from_Outlets_[".addFields"] = array();

$tdataSIMS_Sold_from_Outlets_[".inlineAddFields"] = array();

$tdataSIMS_Sold_from_Outlets_[".editFields"] = array();

$tdataSIMS_Sold_from_Outlets_[".inlineEditFields"] = array();

$tdataSIMS_Sold_from_Outlets_[".exportFields"] = array();
$tdataSIMS_Sold_from_Outlets_[".exportFields"][] = "Manager_Name";
$tdataSIMS_Sold_from_Outlets_[".exportFields"][] = "Title";
$tdataSIMS_Sold_from_Outlets_[".exportFields"][] = "Date";
$tdataSIMS_Sold_from_Outlets_[".exportFields"][] = "Total_Activations";
$tdataSIMS_Sold_from_Outlets_[".exportFields"][] = "With_Airtime";
$tdataSIMS_Sold_from_Outlets_[".exportFields"][] = "No_Airtime";

$tdataSIMS_Sold_from_Outlets_[".importFields"] = array();
$tdataSIMS_Sold_from_Outlets_[".importFields"][] = "Title";
$tdataSIMS_Sold_from_Outlets_[".importFields"][] = "Date";
$tdataSIMS_Sold_from_Outlets_[".importFields"][] = "No_Airtime";

$tdataSIMS_Sold_from_Outlets_[".printFields"] = array();
$tdataSIMS_Sold_from_Outlets_[".printFields"][] = "Title";
$tdataSIMS_Sold_from_Outlets_[".printFields"][] = "Date";
$tdataSIMS_Sold_from_Outlets_[".printFields"][] = "No_Airtime";

//	Manager_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Manager_Name";
	$fdata["GoodName"] = "Manager_Name";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("SIMS_Sold_from_Outlets_","Manager_Name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Manager_Name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Manager_Name";
	
		
		
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
			$edata["EditParams"].= " maxlength=600";
	
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

	

	
	$tdataSIMS_Sold_from_Outlets_["Manager_Name"] = $fdata;
//	Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Title";
	$fdata["GoodName"] = "Title";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("SIMS_Sold_from_Outlets_","Title"); 
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

	

	
	$tdataSIMS_Sold_from_Outlets_["Title"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("SIMS_Sold_from_Outlets_","Date"); 
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

	

	
	$tdataSIMS_Sold_from_Outlets_["Date"] = $fdata;
//	Total_Activations
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Total_Activations";
	$fdata["GoodName"] = "Total_Activations";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("SIMS_Sold_from_Outlets_","Total_Activations"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Total_Activations"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(simcards_batches.`Status` = 'Active')";
	
		
		
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

	

	
	$tdataSIMS_Sold_from_Outlets_["Total_Activations"] = $fdata;
//	With_Airtime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "With_Airtime";
	$fdata["GoodName"] = "With_Airtime";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("SIMS_Sold_from_Outlets_","With_Airtime"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "With_Airtime"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(simcards_batches.`Airtime_transered` > 999)";
	
		
		
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

	

	
	$tdataSIMS_Sold_from_Outlets_["With_Airtime"] = $fdata;
//	No_Airtime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "No_Airtime";
	$fdata["GoodName"] = "No_Airtime";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("SIMS_Sold_from_Outlets_","No_Airtime"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "No_Airtime"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(simcards_batches.`Airtime_transered` < 1000)";
	
		
		
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

	

	
	$tdataSIMS_Sold_from_Outlets_["No_Airtime"] = $fdata;

	
$tables_data["SIMS Sold from Outlets "]=&$tdataSIMS_Sold_from_Outlets_;
$field_labels["SIMS_Sold_from_Outlets_"] = &$fieldLabelsSIMS_Sold_from_Outlets_;
$fieldToolTips["SIMS Sold from Outlets "] = &$fieldToolTipsSIMS_Sold_from_Outlets_;
$page_titles["SIMS_Sold_from_Outlets_"] = &$pageTitlesSIMS_Sold_from_Outlets_;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["SIMS Sold from Outlets "] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["SIMS Sold from Outlets "] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_SIMS_Sold_from_Outlets_()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Manager_Name,  Manager_Title as Title,  Event_date as Date,  SUM(simcards_batches.`Status` = 'Active') AS Total_Activations,  SUM(simcards_batches.`Airtime_transered` > 999) AS With_Airtime,  SUM(simcards_batches.`Airtime_transered` < 1000) AS No_Airtime";
$proto0["m_strFrom"] = "FROM simcards_batches";
$proto0["m_strWhere"] = "(Manager_Title = 'DSO' OR Manager_Title = 'RDO') AND (Status = 'Active')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY Manager_Name, Event_date";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(Manager_Title = 'DSO' OR Manager_Title = 'RDO') AND (Status = 'Active')";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(Manager_Title = 'DSO' OR Manager_Title = 'RDO') AND (Status = 'Active')"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "Manager_Title = 'DSO' OR Manager_Title = 'RDO'";
$proto3["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "Manager_Title = 'DSO' OR Manager_Title = 'RDO'"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
						$proto5=array();
$proto5["m_sql"] = "Manager_Title = 'DSO'";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "SIMS Sold from Outlets "
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "= 'DSO'";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto3["m_contained"][]=$obj;
						$proto7=array();
$proto7["m_sql"] = "Manager_Title = 'RDO'";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "SIMS Sold from Outlets "
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "= 'RDO'";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

			$proto3["m_contained"][]=$obj;
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto9=array();
$proto9["m_sql"] = "Status = 'Active'";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "SIMS Sold from Outlets "
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "= 'Active'";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = true;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

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
	"m_strName" => "Manager_Name",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "SIMS Sold from Outlets "
));

$proto13["m_sql"] = "Manager_Name";
$proto13["m_srcTableName"] = "SIMS Sold from Outlets ";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "SIMS Sold from Outlets "
));

$proto15["m_sql"] = "Manager_Title";
$proto15["m_srcTableName"] = "SIMS Sold from Outlets ";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "Title";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_date",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "SIMS Sold from Outlets "
));

$proto17["m_sql"] = "Event_date";
$proto17["m_srcTableName"] = "SIMS Sold from Outlets ";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Date";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$proto20=array();
$proto20["m_functiontype"] = "SQLF_SUM";
$proto20["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "simcards_batches.`Status` = 'Active'"
));

$proto20["m_arguments"][]=$obj;
$proto20["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto20);

$proto19["m_sql"] = "SUM(simcards_batches.`Status` = 'Active')";
$proto19["m_srcTableName"] = "SIMS Sold from Outlets ";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "Total_Activations";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$proto23=array();
$proto23["m_functiontype"] = "SQLF_SUM";
$proto23["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "simcards_batches.`Airtime_transered` > 999"
));

$proto23["m_arguments"][]=$obj;
$proto23["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto23);

$proto22["m_sql"] = "SUM(simcards_batches.`Airtime_transered` > 999)";
$proto22["m_srcTableName"] = "SIMS Sold from Outlets ";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "With_Airtime";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$proto26=array();
$proto26["m_functiontype"] = "SQLF_SUM";
$proto26["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "simcards_batches.`Airtime_transered` < 1000"
));

$proto26["m_arguments"][]=$obj;
$proto26["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto26);

$proto25["m_sql"] = "SUM(simcards_batches.`Airtime_transered` < 1000)";
$proto25["m_srcTableName"] = "SIMS Sold from Outlets ";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "No_Airtime";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "simcards_batches";
$proto29["m_srcTableName"] = "SIMS Sold from Outlets ";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "ID";
$proto29["m_columns"][] = "batch_name";
$proto29["m_columns"][] = "ICCID";
$proto29["m_columns"][] = "Status";
$proto29["m_columns"][] = "Manager_Name";
$proto29["m_columns"][] = "Manager_Title";
$proto29["m_columns"][] = "Activator_Number";
$proto29["m_columns"][] = "Activator_Name";
$proto29["m_columns"][] = "Team_Leader";
$proto29["m_columns"][] = "Event_date";
$proto29["m_columns"][] = "time";
$proto29["m_columns"][] = "Active_MSISDN";
$proto29["m_columns"][] = "New_MSISDN";
$proto29["m_columns"][] = "Swap_Date";
$proto29["m_columns"][] = "Airtime_transered";
$proto29["m_columns"][] = "Transfer_date";
$proto29["m_columns"][] = "Activation_Commission";
$proto29["m_columns"][] = "Form_Commission";
$proto29["m_columns"][] = "Form_Paid_Date";
$proto29["m_columns"][] = "Form_Returned";
$proto29["m_columns"][] = "Form_Status";
$proto29["m_columns"][] = "Form_Date";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "simcards_batches";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "SIMS Sold from Outlets ";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "Manager_Name",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "SIMS Sold from Outlets "
));

$proto32["m_column"]=$obj;
$obj = new SQLGroupByItem($proto32);

$proto0["m_groupby"][]=$obj;
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "Event_date",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "SIMS Sold from Outlets "
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="SIMS Sold from Outlets ";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_SIMS_Sold_from_Outlets_ = createSqlQuery_SIMS_Sold_from_Outlets_();


	
						
	
$tdataSIMS_Sold_from_Outlets_[".sqlquery"] = $queryData_SIMS_Sold_from_Outlets_;

$tableEvents["SIMS Sold from Outlets "] = new eventsBase;
$tdataSIMS_Sold_from_Outlets_[".hasEvents"] = false;

?>