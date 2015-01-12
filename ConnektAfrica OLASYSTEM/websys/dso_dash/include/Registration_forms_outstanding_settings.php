<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRegistration_forms_outstanding = array();	
	$tdataRegistration_forms_outstanding[".truncateText"] = true;
	$tdataRegistration_forms_outstanding[".NumberOfChars"] = 80; 
	$tdataRegistration_forms_outstanding[".ShortName"] = "Registration_forms_outstanding";
	$tdataRegistration_forms_outstanding[".OwnerID"] = "";
	$tdataRegistration_forms_outstanding[".OriginalTable"] = "activators";

//	field labels
$fieldLabelsRegistration_forms_outstanding = array();
$fieldToolTipsRegistration_forms_outstanding = array();
$pageTitlesRegistration_forms_outstanding = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRegistration_forms_outstanding["English"] = array();
	$fieldToolTipsRegistration_forms_outstanding["English"] = array();
	$pageTitlesRegistration_forms_outstanding["English"] = array();
	$fieldLabelsRegistration_forms_outstanding["English"]["Manager_Name"] = "Manager Name";
	$fieldToolTipsRegistration_forms_outstanding["English"]["Manager_Name"] = "";
	$fieldLabelsRegistration_forms_outstanding["English"]["Total_Activations"] = "Total Activations";
	$fieldToolTipsRegistration_forms_outstanding["English"]["Total_Activations"] = "";
	$fieldLabelsRegistration_forms_outstanding["English"]["Rejects"] = "Rejects";
	$fieldToolTipsRegistration_forms_outstanding["English"]["Rejects"] = "";
	$fieldLabelsRegistration_forms_outstanding["English"]["Returned"] = "Returned";
	$fieldToolTipsRegistration_forms_outstanding["English"]["Returned"] = "";
	$fieldLabelsRegistration_forms_outstanding["English"]["Not_Returned"] = "Not Returned";
	$fieldToolTipsRegistration_forms_outstanding["English"]["Not_Returned"] = "";
	$fieldLabelsRegistration_forms_outstanding["English"]["Title"] = "Title";
	$fieldToolTipsRegistration_forms_outstanding["English"]["Title"] = "";
	$fieldLabelsRegistration_forms_outstanding["English"]["Date"] = "Date";
	$fieldToolTipsRegistration_forms_outstanding["English"]["Date"] = "";
	if (count($fieldToolTipsRegistration_forms_outstanding["English"]))
		$tdataRegistration_forms_outstanding[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRegistration_forms_outstanding[""] = array();
	$fieldToolTipsRegistration_forms_outstanding[""] = array();
	$pageTitlesRegistration_forms_outstanding[""] = array();
	$fieldLabelsRegistration_forms_outstanding[""]["Returned"] = "Returned";
	$fieldToolTipsRegistration_forms_outstanding[""]["Returned"] = "";
	$fieldLabelsRegistration_forms_outstanding[""]["Not_Returned"] = "Not Returned";
	$fieldToolTipsRegistration_forms_outstanding[""]["Not_Returned"] = "";
	$fieldLabelsRegistration_forms_outstanding[""]["Title"] = "Title";
	$fieldToolTipsRegistration_forms_outstanding[""]["Title"] = "";
	$fieldLabelsRegistration_forms_outstanding[""]["Date"] = "Date";
	$fieldToolTipsRegistration_forms_outstanding[""]["Date"] = "";
	if (count($fieldToolTipsRegistration_forms_outstanding[""]))
		$tdataRegistration_forms_outstanding[".isUseToolTips"] = true;
}
	
	
	$tdataRegistration_forms_outstanding[".NCSearch"] = true;



$tdataRegistration_forms_outstanding[".shortTableName"] = "Registration_forms_outstanding";
$tdataRegistration_forms_outstanding[".nSecOptions"] = 0;
$tdataRegistration_forms_outstanding[".recsPerRowList"] = 1;
$tdataRegistration_forms_outstanding[".mainTableOwnerID"] = "";
$tdataRegistration_forms_outstanding[".moveNext"] = 1;
$tdataRegistration_forms_outstanding[".nType"] = 1;

$tdataRegistration_forms_outstanding[".strOriginalTableName"] = "activators";




$tdataRegistration_forms_outstanding[".showAddInPopup"] = false;

$tdataRegistration_forms_outstanding[".showEditInPopup"] = false;

$tdataRegistration_forms_outstanding[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRegistration_forms_outstanding[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRegistration_forms_outstanding[".fieldsForRegister"] = array();

$tdataRegistration_forms_outstanding[".listAjax"] = false;

	$tdataRegistration_forms_outstanding[".audit"] = false;

	$tdataRegistration_forms_outstanding[".locking"] = false;


$tdataRegistration_forms_outstanding[".list"] = true;



$tdataRegistration_forms_outstanding[".exportTo"] = true;



$tdataRegistration_forms_outstanding[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdataRegistration_forms_outstanding[".searchSaving"] = false;
//

$tdataRegistration_forms_outstanding[".showSearchPanel"] = true;
		$tdataRegistration_forms_outstanding[".flexibleSearch"] = true;		

if (isMobile())
	$tdataRegistration_forms_outstanding[".isUseAjaxSuggest"] = false;
else 
	$tdataRegistration_forms_outstanding[".isUseAjaxSuggest"] = true;

$tdataRegistration_forms_outstanding[".rowHighlite"] = true;



$tdataRegistration_forms_outstanding[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRegistration_forms_outstanding[".isUseTimeForSearch"] = false;





$tdataRegistration_forms_outstanding[".allSearchFields"] = array();
$tdataRegistration_forms_outstanding[".filterFields"] = array();
$tdataRegistration_forms_outstanding[".requiredSearchFields"] = array();

$tdataRegistration_forms_outstanding[".allSearchFields"][] = "Manager_Name";
	$tdataRegistration_forms_outstanding[".allSearchFields"][] = "Title";
	$tdataRegistration_forms_outstanding[".allSearchFields"][] = "Date";
	$tdataRegistration_forms_outstanding[".allSearchFields"][] = "Total_Activations";
	$tdataRegistration_forms_outstanding[".allSearchFields"][] = "Returned";
	$tdataRegistration_forms_outstanding[".allSearchFields"][] = "Not_Returned";
	$tdataRegistration_forms_outstanding[".allSearchFields"][] = "Rejects";
	

$tdataRegistration_forms_outstanding[".googleLikeFields"] = array();
$tdataRegistration_forms_outstanding[".googleLikeFields"][] = "Manager_Name";
$tdataRegistration_forms_outstanding[".googleLikeFields"][] = "Title";
$tdataRegistration_forms_outstanding[".googleLikeFields"][] = "Date";
$tdataRegistration_forms_outstanding[".googleLikeFields"][] = "Total_Activations";
$tdataRegistration_forms_outstanding[".googleLikeFields"][] = "Returned";
$tdataRegistration_forms_outstanding[".googleLikeFields"][] = "Not_Returned";
$tdataRegistration_forms_outstanding[".googleLikeFields"][] = "Rejects";


$tdataRegistration_forms_outstanding[".advSearchFields"] = array();
$tdataRegistration_forms_outstanding[".advSearchFields"][] = "Manager_Name";
$tdataRegistration_forms_outstanding[".advSearchFields"][] = "Title";
$tdataRegistration_forms_outstanding[".advSearchFields"][] = "Date";
$tdataRegistration_forms_outstanding[".advSearchFields"][] = "Total_Activations";
$tdataRegistration_forms_outstanding[".advSearchFields"][] = "Returned";
$tdataRegistration_forms_outstanding[".advSearchFields"][] = "Not_Returned";
$tdataRegistration_forms_outstanding[".advSearchFields"][] = "Rejects";

$tdataRegistration_forms_outstanding[".tableType"] = "list";

$tdataRegistration_forms_outstanding[".printerPageOrientation"] = 0;
$tdataRegistration_forms_outstanding[".nPrinterPageScale"] = 100;

$tdataRegistration_forms_outstanding[".nPrinterSplitRecords"] = 40;

$tdataRegistration_forms_outstanding[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataRegistration_forms_outstanding[".pageSize"] = 15;

$tdataRegistration_forms_outstanding[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRegistration_forms_outstanding[".strOrderBy"] = $tstrOrderBy;

$tdataRegistration_forms_outstanding[".orderindexes"] = array();

$tdataRegistration_forms_outstanding[".sqlHead"] = "SELECT Manager_Name,  Manager_Title as Title,  Event_date as Date,  SUM(simcards_batches.`Status` = 'Active') AS Total_Activations,  SUM(simcards_batches.`Form_Returned` = 'Yes') AS Returned,  SUM(simcards_batches.`Form_Returned` = '') AS Not_Returned,  SUM(simcards_batches.`Form_Status` = 'x') AS Rejects";
$tdataRegistration_forms_outstanding[".sqlFrom"] = "FROM simcards_batches";
$tdataRegistration_forms_outstanding[".sqlWhereExpr"] = "(Manager_Title = 'DSO' OR Manager_Title = 'RDO') AND (Status = 'Active')";
$tdataRegistration_forms_outstanding[".sqlTail"] = "GROUP BY Manager_Name, Event_date";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRegistration_forms_outstanding[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRegistration_forms_outstanding[".arrGroupsPerPage"] = $arrGPP;

$tdataRegistration_forms_outstanding[".highlightSearchResults"] = true;

$tableKeysRegistration_forms_outstanding = array();
$tdataRegistration_forms_outstanding[".Keys"] = $tableKeysRegistration_forms_outstanding;

$tdataRegistration_forms_outstanding[".listFields"] = array();
$tdataRegistration_forms_outstanding[".listFields"][] = "Manager_Name";
$tdataRegistration_forms_outstanding[".listFields"][] = "Title";
$tdataRegistration_forms_outstanding[".listFields"][] = "Date";
$tdataRegistration_forms_outstanding[".listFields"][] = "Total_Activations";
$tdataRegistration_forms_outstanding[".listFields"][] = "Returned";
$tdataRegistration_forms_outstanding[".listFields"][] = "Not_Returned";
$tdataRegistration_forms_outstanding[".listFields"][] = "Rejects";

$tdataRegistration_forms_outstanding[".hideMobileList"] = array();


$tdataRegistration_forms_outstanding[".viewFields"] = array();
$tdataRegistration_forms_outstanding[".viewFields"][] = "Manager_Name";
$tdataRegistration_forms_outstanding[".viewFields"][] = "Title";
$tdataRegistration_forms_outstanding[".viewFields"][] = "Date";
$tdataRegistration_forms_outstanding[".viewFields"][] = "Total_Activations";
$tdataRegistration_forms_outstanding[".viewFields"][] = "Returned";
$tdataRegistration_forms_outstanding[".viewFields"][] = "Not_Returned";
$tdataRegistration_forms_outstanding[".viewFields"][] = "Rejects";

$tdataRegistration_forms_outstanding[".addFields"] = array();
$tdataRegistration_forms_outstanding[".addFields"][] = "Manager_Name";

$tdataRegistration_forms_outstanding[".inlineAddFields"] = array();
$tdataRegistration_forms_outstanding[".inlineAddFields"][] = "Manager_Name";

$tdataRegistration_forms_outstanding[".editFields"] = array();
$tdataRegistration_forms_outstanding[".editFields"][] = "Manager_Name";

$tdataRegistration_forms_outstanding[".inlineEditFields"] = array();
$tdataRegistration_forms_outstanding[".inlineEditFields"][] = "Manager_Name";

$tdataRegistration_forms_outstanding[".exportFields"] = array();
$tdataRegistration_forms_outstanding[".exportFields"][] = "Manager_Name";
$tdataRegistration_forms_outstanding[".exportFields"][] = "Title";
$tdataRegistration_forms_outstanding[".exportFields"][] = "Date";
$tdataRegistration_forms_outstanding[".exportFields"][] = "Total_Activations";
$tdataRegistration_forms_outstanding[".exportFields"][] = "Returned";
$tdataRegistration_forms_outstanding[".exportFields"][] = "Not_Returned";
$tdataRegistration_forms_outstanding[".exportFields"][] = "Rejects";

$tdataRegistration_forms_outstanding[".importFields"] = array();
$tdataRegistration_forms_outstanding[".importFields"][] = "Manager_Name";
$tdataRegistration_forms_outstanding[".importFields"][] = "Title";
$tdataRegistration_forms_outstanding[".importFields"][] = "Date";
$tdataRegistration_forms_outstanding[".importFields"][] = "Total_Activations";
$tdataRegistration_forms_outstanding[".importFields"][] = "Returned";
$tdataRegistration_forms_outstanding[".importFields"][] = "Not_Returned";
$tdataRegistration_forms_outstanding[".importFields"][] = "Rejects";

$tdataRegistration_forms_outstanding[".printFields"] = array();
$tdataRegistration_forms_outstanding[".printFields"][] = "Manager_Name";
$tdataRegistration_forms_outstanding[".printFields"][] = "Title";
$tdataRegistration_forms_outstanding[".printFields"][] = "Date";
$tdataRegistration_forms_outstanding[".printFields"][] = "Total_Activations";
$tdataRegistration_forms_outstanding[".printFields"][] = "Returned";
$tdataRegistration_forms_outstanding[".printFields"][] = "Not_Returned";
$tdataRegistration_forms_outstanding[".printFields"][] = "Rejects";

//	Manager_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Manager_Name";
	$fdata["GoodName"] = "Manager_Name";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Registration_forms_outstanding","Manager_Name"); 
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

	

	
	$tdataRegistration_forms_outstanding["Manager_Name"] = $fdata;
//	Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Title";
	$fdata["GoodName"] = "Title";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Registration_forms_outstanding","Title"); 
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

	

	
	$tdataRegistration_forms_outstanding["Title"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Registration_forms_outstanding","Date"); 
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

	

	
	$tdataRegistration_forms_outstanding["Date"] = $fdata;
//	Total_Activations
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Total_Activations";
	$fdata["GoodName"] = "Total_Activations";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Registration_forms_outstanding","Total_Activations"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
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

	

	
	$tdataRegistration_forms_outstanding["Total_Activations"] = $fdata;
//	Returned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Returned";
	$fdata["GoodName"] = "Returned";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Registration_forms_outstanding","Returned"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Returned"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(simcards_batches.`Form_Returned` = 'Yes')";
	
		
		
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

	

	
	$tdataRegistration_forms_outstanding["Returned"] = $fdata;
//	Not_Returned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Not_Returned";
	$fdata["GoodName"] = "Not_Returned";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Registration_forms_outstanding","Not_Returned"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Not_Returned"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(simcards_batches.`Form_Returned` = '')";
	
		
		
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

	

	
	$tdataRegistration_forms_outstanding["Not_Returned"] = $fdata;
//	Rejects
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Rejects";
	$fdata["GoodName"] = "Rejects";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Registration_forms_outstanding","Rejects"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Rejects"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(simcards_batches.`Form_Status` = 'x')";
	
		
		
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

	

	
	$tdataRegistration_forms_outstanding["Rejects"] = $fdata;

	
$tables_data["Registration forms outstanding"]=&$tdataRegistration_forms_outstanding;
$field_labels["Registration_forms_outstanding"] = &$fieldLabelsRegistration_forms_outstanding;
$fieldToolTips["Registration forms outstanding"] = &$fieldToolTipsRegistration_forms_outstanding;
$page_titles["Registration_forms_outstanding"] = &$pageTitlesRegistration_forms_outstanding;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Registration forms outstanding"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Registration forms outstanding"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Registration_forms_outstanding()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Manager_Name,  Manager_Title as Title,  Event_date as Date,  SUM(simcards_batches.`Status` = 'Active') AS Total_Activations,  SUM(simcards_batches.`Form_Returned` = 'Yes') AS Returned,  SUM(simcards_batches.`Form_Returned` = '') AS Not_Returned,  SUM(simcards_batches.`Form_Status` = 'x') AS Rejects";
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
	"m_srcTableName" => "Registration forms outstanding"
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
	"m_srcTableName" => "Registration forms outstanding"
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
	"m_srcTableName" => "Registration forms outstanding"
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
	"m_srcTableName" => "Registration forms outstanding"
));

$proto13["m_sql"] = "Manager_Name";
$proto13["m_srcTableName"] = "Registration forms outstanding";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Registration forms outstanding"
));

$proto15["m_sql"] = "Manager_Title";
$proto15["m_srcTableName"] = "Registration forms outstanding";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "Title";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_date",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Registration forms outstanding"
));

$proto17["m_sql"] = "Event_date";
$proto17["m_srcTableName"] = "Registration forms outstanding";
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
$proto19["m_srcTableName"] = "Registration forms outstanding";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "Total_Activations";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$proto23=array();
$proto23["m_functiontype"] = "SQLF_SUM";
$proto23["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "simcards_batches.`Form_Returned` = 'Yes'"
));

$proto23["m_arguments"][]=$obj;
$proto23["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto23);

$proto22["m_sql"] = "SUM(simcards_batches.`Form_Returned` = 'Yes')";
$proto22["m_srcTableName"] = "Registration forms outstanding";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "Returned";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$proto26=array();
$proto26["m_functiontype"] = "SQLF_SUM";
$proto26["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "simcards_batches.`Form_Returned` = ''"
));

$proto26["m_arguments"][]=$obj;
$proto26["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto26);

$proto25["m_sql"] = "SUM(simcards_batches.`Form_Returned` = '')";
$proto25["m_srcTableName"] = "Registration forms outstanding";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "Not_Returned";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$proto29=array();
$proto29["m_functiontype"] = "SQLF_SUM";
$proto29["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "simcards_batches.`Form_Status` = 'x'"
));

$proto29["m_arguments"][]=$obj;
$proto29["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto29);

$proto28["m_sql"] = "SUM(simcards_batches.`Form_Status` = 'x')";
$proto28["m_srcTableName"] = "Registration forms outstanding";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "Rejects";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "simcards_batches";
$proto32["m_srcTableName"] = "Registration forms outstanding";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "ID";
$proto32["m_columns"][] = "batch_name";
$proto32["m_columns"][] = "ICCID";
$proto32["m_columns"][] = "Status";
$proto32["m_columns"][] = "Manager_Name";
$proto32["m_columns"][] = "Manager_Title";
$proto32["m_columns"][] = "Activator_Number";
$proto32["m_columns"][] = "Activator_Name";
$proto32["m_columns"][] = "Team_Leader";
$proto32["m_columns"][] = "Event_date";
$proto32["m_columns"][] = "time";
$proto32["m_columns"][] = "Active_MSISDN";
$proto32["m_columns"][] = "New_MSISDN";
$proto32["m_columns"][] = "Swap_Date";
$proto32["m_columns"][] = "Airtime_transered";
$proto32["m_columns"][] = "Transfer_date";
$proto32["m_columns"][] = "Activation_Commission";
$proto32["m_columns"][] = "Form_Commission";
$proto32["m_columns"][] = "Form_Paid_Date";
$proto32["m_columns"][] = "Form_Returned";
$proto32["m_columns"][] = "Form_Status";
$proto32["m_columns"][] = "Form_Date";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "simcards_batches";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "Registration forms outstanding";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "Manager_Name",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Registration forms outstanding"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "Event_date",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Registration forms outstanding"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Registration forms outstanding";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Registration_forms_outstanding = createSqlQuery_Registration_forms_outstanding();


	
							
	
$tdataRegistration_forms_outstanding[".sqlquery"] = $queryData_Registration_forms_outstanding;

$tableEvents["Registration forms outstanding"] = new eventsBase;
$tdataRegistration_forms_outstanding[".hasEvents"] = false;

?>