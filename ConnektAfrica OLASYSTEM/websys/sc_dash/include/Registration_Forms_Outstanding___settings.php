<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRegistration_Forms_Outstanding__ = array();	
	$tdataRegistration_Forms_Outstanding__[".truncateText"] = true;
	$tdataRegistration_Forms_Outstanding__[".NumberOfChars"] = 80; 
	$tdataRegistration_Forms_Outstanding__[".ShortName"] = "Registration_Forms_Outstanding__";
	$tdataRegistration_Forms_Outstanding__[".OwnerID"] = "";
	$tdataRegistration_Forms_Outstanding__[".OriginalTable"] = "activated_sims";

//	field labels
$fieldLabelsRegistration_Forms_Outstanding__ = array();
$fieldToolTipsRegistration_Forms_Outstanding__ = array();
$pageTitlesRegistration_Forms_Outstanding__ = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRegistration_Forms_Outstanding__["English"] = array();
	$fieldToolTipsRegistration_Forms_Outstanding__["English"] = array();
	$pageTitlesRegistration_Forms_Outstanding__["English"] = array();
	$fieldLabelsRegistration_Forms_Outstanding__["English"]["Event_date"] = "Event Date";
	$fieldToolTipsRegistration_Forms_Outstanding__["English"]["Event_date"] = "";
	$fieldLabelsRegistration_Forms_Outstanding__["English"]["Manager_Name"] = "Manager Name";
	$fieldToolTipsRegistration_Forms_Outstanding__["English"]["Manager_Name"] = "";
	$fieldLabelsRegistration_Forms_Outstanding__["English"]["Manager_Title"] = "Manager Title";
	$fieldToolTipsRegistration_Forms_Outstanding__["English"]["Manager_Title"] = "";
	$fieldLabelsRegistration_Forms_Outstanding__["English"]["Activations"] = "Activations";
	$fieldToolTipsRegistration_Forms_Outstanding__["English"]["Activations"] = "";
	$fieldLabelsRegistration_Forms_Outstanding__["English"]["Returned"] = "Returned";
	$fieldToolTipsRegistration_Forms_Outstanding__["English"]["Returned"] = "";
	$fieldLabelsRegistration_Forms_Outstanding__["English"]["Missing"] = "Missing";
	$fieldToolTipsRegistration_Forms_Outstanding__["English"]["Missing"] = "";
	$fieldLabelsRegistration_Forms_Outstanding__["English"]["Percent"] = "Percent";
	$fieldToolTipsRegistration_Forms_Outstanding__["English"]["Percent"] = "";
	if (count($fieldToolTipsRegistration_Forms_Outstanding__["English"]))
		$tdataRegistration_Forms_Outstanding__[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRegistration_Forms_Outstanding__[""] = array();
	$fieldToolTipsRegistration_Forms_Outstanding__[""] = array();
	$pageTitlesRegistration_Forms_Outstanding__[""] = array();
	if (count($fieldToolTipsRegistration_Forms_Outstanding__[""]))
		$tdataRegistration_Forms_Outstanding__[".isUseToolTips"] = true;
}
	
	
	$tdataRegistration_Forms_Outstanding__[".NCSearch"] = true;



$tdataRegistration_Forms_Outstanding__[".shortTableName"] = "Registration_Forms_Outstanding__";
$tdataRegistration_Forms_Outstanding__[".nSecOptions"] = 0;
$tdataRegistration_Forms_Outstanding__[".recsPerRowList"] = 1;
$tdataRegistration_Forms_Outstanding__[".mainTableOwnerID"] = "";
$tdataRegistration_Forms_Outstanding__[".moveNext"] = 1;
$tdataRegistration_Forms_Outstanding__[".nType"] = 1;

$tdataRegistration_Forms_Outstanding__[".strOriginalTableName"] = "activated_sims";




$tdataRegistration_Forms_Outstanding__[".showAddInPopup"] = false;

$tdataRegistration_Forms_Outstanding__[".showEditInPopup"] = false;

$tdataRegistration_Forms_Outstanding__[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRegistration_Forms_Outstanding__[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRegistration_Forms_Outstanding__[".fieldsForRegister"] = array();

$tdataRegistration_Forms_Outstanding__[".listAjax"] = false;

	$tdataRegistration_Forms_Outstanding__[".audit"] = false;

	$tdataRegistration_Forms_Outstanding__[".locking"] = false;


$tdataRegistration_Forms_Outstanding__[".list"] = true;

$tdataRegistration_Forms_Outstanding__[".inlineAdd"] = true;

$tdataRegistration_Forms_Outstanding__[".import"] = true;

$tdataRegistration_Forms_Outstanding__[".exportTo"] = true;

$tdataRegistration_Forms_Outstanding__[".printFriendly"] = true;


$tdataRegistration_Forms_Outstanding__[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataRegistration_Forms_Outstanding__[".searchSaving"] = false;
//

$tdataRegistration_Forms_Outstanding__[".showSearchPanel"] = true;
		$tdataRegistration_Forms_Outstanding__[".flexibleSearch"] = true;		

if (isMobile())
	$tdataRegistration_Forms_Outstanding__[".isUseAjaxSuggest"] = false;
else 
	$tdataRegistration_Forms_Outstanding__[".isUseAjaxSuggest"] = true;

$tdataRegistration_Forms_Outstanding__[".rowHighlite"] = true;



$tdataRegistration_Forms_Outstanding__[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRegistration_Forms_Outstanding__[".isUseTimeForSearch"] = false;





$tdataRegistration_Forms_Outstanding__[".allSearchFields"] = array();
$tdataRegistration_Forms_Outstanding__[".filterFields"] = array();
$tdataRegistration_Forms_Outstanding__[".requiredSearchFields"] = array();

$tdataRegistration_Forms_Outstanding__[".allSearchFields"][] = "Manager_Name";
	$tdataRegistration_Forms_Outstanding__[".allSearchFields"][] = "Manager_Title";
	$tdataRegistration_Forms_Outstanding__[".allSearchFields"][] = "Event_date";
	$tdataRegistration_Forms_Outstanding__[".allSearchFields"][] = "Activations";
	$tdataRegistration_Forms_Outstanding__[".allSearchFields"][] = "Returned";
	$tdataRegistration_Forms_Outstanding__[".allSearchFields"][] = "Missing";
	$tdataRegistration_Forms_Outstanding__[".allSearchFields"][] = "Percent";
	

$tdataRegistration_Forms_Outstanding__[".googleLikeFields"] = array();
$tdataRegistration_Forms_Outstanding__[".googleLikeFields"][] = "Manager_Name";
$tdataRegistration_Forms_Outstanding__[".googleLikeFields"][] = "Manager_Title";
$tdataRegistration_Forms_Outstanding__[".googleLikeFields"][] = "Event_date";
$tdataRegistration_Forms_Outstanding__[".googleLikeFields"][] = "Activations";
$tdataRegistration_Forms_Outstanding__[".googleLikeFields"][] = "Returned";
$tdataRegistration_Forms_Outstanding__[".googleLikeFields"][] = "Missing";
$tdataRegistration_Forms_Outstanding__[".googleLikeFields"][] = "Percent";


$tdataRegistration_Forms_Outstanding__[".advSearchFields"] = array();
$tdataRegistration_Forms_Outstanding__[".advSearchFields"][] = "Manager_Name";
$tdataRegistration_Forms_Outstanding__[".advSearchFields"][] = "Manager_Title";
$tdataRegistration_Forms_Outstanding__[".advSearchFields"][] = "Event_date";
$tdataRegistration_Forms_Outstanding__[".advSearchFields"][] = "Activations";
$tdataRegistration_Forms_Outstanding__[".advSearchFields"][] = "Returned";
$tdataRegistration_Forms_Outstanding__[".advSearchFields"][] = "Missing";
$tdataRegistration_Forms_Outstanding__[".advSearchFields"][] = "Percent";

$tdataRegistration_Forms_Outstanding__[".tableType"] = "list";

$tdataRegistration_Forms_Outstanding__[".printerPageOrientation"] = 0;
$tdataRegistration_Forms_Outstanding__[".nPrinterPageScale"] = 100;

$tdataRegistration_Forms_Outstanding__[".nPrinterSplitRecords"] = 40;

$tdataRegistration_Forms_Outstanding__[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataRegistration_Forms_Outstanding__[".pageSize"] = 20;

$tdataRegistration_Forms_Outstanding__[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRegistration_Forms_Outstanding__[".strOrderBy"] = $tstrOrderBy;

$tdataRegistration_Forms_Outstanding__[".orderindexes"] = array();

$tdataRegistration_Forms_Outstanding__[".sqlHead"] = "SELECT simcards_batches.`Manager_Name` , Manager_Title, Event_date, sum( simcards_batches.`Status` = 'Active' ) AS Activations, sum( simcards_batches.`Form_Returned` = 'Yes' ) AS Returned, sum( simcards_batches.`Form_Returned` = '' ) AS Missing  , '' as Percent";
$tdataRegistration_Forms_Outstanding__[".sqlFrom"] = "FROM `simcards_batches`";
$tdataRegistration_Forms_Outstanding__[".sqlWhereExpr"] = "simcards_batches.`Status` = 'Active'  AND (Manager_Title = 'SC' OR Manager_Title = 'CAS' OR Manager_Title = 'D/S')";
$tdataRegistration_Forms_Outstanding__[".sqlTail"] = "GROUP BY simcards_batches.`Manager_Name` , Event_date";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRegistration_Forms_Outstanding__[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRegistration_Forms_Outstanding__[".arrGroupsPerPage"] = $arrGPP;

$tdataRegistration_Forms_Outstanding__[".highlightSearchResults"] = true;

$tableKeysRegistration_Forms_Outstanding__ = array();
$tdataRegistration_Forms_Outstanding__[".Keys"] = $tableKeysRegistration_Forms_Outstanding__;

$tdataRegistration_Forms_Outstanding__[".listFields"] = array();
$tdataRegistration_Forms_Outstanding__[".listFields"][] = "Manager_Name";
$tdataRegistration_Forms_Outstanding__[".listFields"][] = "Manager_Title";
$tdataRegistration_Forms_Outstanding__[".listFields"][] = "Event_date";
$tdataRegistration_Forms_Outstanding__[".listFields"][] = "Activations";
$tdataRegistration_Forms_Outstanding__[".listFields"][] = "Returned";
$tdataRegistration_Forms_Outstanding__[".listFields"][] = "Missing";
$tdataRegistration_Forms_Outstanding__[".listFields"][] = "Percent";

$tdataRegistration_Forms_Outstanding__[".hideMobileList"] = array();


$tdataRegistration_Forms_Outstanding__[".viewFields"] = array();
$tdataRegistration_Forms_Outstanding__[".viewFields"][] = "Manager_Name";
$tdataRegistration_Forms_Outstanding__[".viewFields"][] = "Manager_Title";
$tdataRegistration_Forms_Outstanding__[".viewFields"][] = "Event_date";
$tdataRegistration_Forms_Outstanding__[".viewFields"][] = "Activations";
$tdataRegistration_Forms_Outstanding__[".viewFields"][] = "Returned";
$tdataRegistration_Forms_Outstanding__[".viewFields"][] = "Missing";
$tdataRegistration_Forms_Outstanding__[".viewFields"][] = "Percent";

$tdataRegistration_Forms_Outstanding__[".addFields"] = array();
$tdataRegistration_Forms_Outstanding__[".addFields"][] = "Event_date";

$tdataRegistration_Forms_Outstanding__[".inlineAddFields"] = array();
$tdataRegistration_Forms_Outstanding__[".inlineAddFields"][] = "Event_date";

$tdataRegistration_Forms_Outstanding__[".editFields"] = array();
$tdataRegistration_Forms_Outstanding__[".editFields"][] = "Event_date";

$tdataRegistration_Forms_Outstanding__[".inlineEditFields"] = array();
$tdataRegistration_Forms_Outstanding__[".inlineEditFields"][] = "Event_date";

$tdataRegistration_Forms_Outstanding__[".exportFields"] = array();
$tdataRegistration_Forms_Outstanding__[".exportFields"][] = "Manager_Name";
$tdataRegistration_Forms_Outstanding__[".exportFields"][] = "Manager_Title";
$tdataRegistration_Forms_Outstanding__[".exportFields"][] = "Event_date";
$tdataRegistration_Forms_Outstanding__[".exportFields"][] = "Activations";
$tdataRegistration_Forms_Outstanding__[".exportFields"][] = "Returned";
$tdataRegistration_Forms_Outstanding__[".exportFields"][] = "Missing";
$tdataRegistration_Forms_Outstanding__[".exportFields"][] = "Percent";

$tdataRegistration_Forms_Outstanding__[".importFields"] = array();
$tdataRegistration_Forms_Outstanding__[".importFields"][] = "Manager_Name";
$tdataRegistration_Forms_Outstanding__[".importFields"][] = "Manager_Title";
$tdataRegistration_Forms_Outstanding__[".importFields"][] = "Event_date";
$tdataRegistration_Forms_Outstanding__[".importFields"][] = "Activations";
$tdataRegistration_Forms_Outstanding__[".importFields"][] = "Returned";
$tdataRegistration_Forms_Outstanding__[".importFields"][] = "Missing";
$tdataRegistration_Forms_Outstanding__[".importFields"][] = "Percent";

$tdataRegistration_Forms_Outstanding__[".printFields"] = array();
$tdataRegistration_Forms_Outstanding__[".printFields"][] = "Manager_Name";
$tdataRegistration_Forms_Outstanding__[".printFields"][] = "Manager_Title";
$tdataRegistration_Forms_Outstanding__[".printFields"][] = "Event_date";
$tdataRegistration_Forms_Outstanding__[".printFields"][] = "Activations";
$tdataRegistration_Forms_Outstanding__[".printFields"][] = "Returned";
$tdataRegistration_Forms_Outstanding__[".printFields"][] = "Missing";
$tdataRegistration_Forms_Outstanding__[".printFields"][] = "Percent";

//	Manager_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Manager_Name";
	$fdata["GoodName"] = "Manager_Name";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Registration_Forms_Outstanding__","Manager_Name"); 
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

	

	
	$tdataRegistration_Forms_Outstanding__["Manager_Name"] = $fdata;
//	Manager_Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Manager_Title";
	$fdata["GoodName"] = "Manager_Title";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Registration_Forms_Outstanding__","Manager_Title"); 
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

	

	
	$tdataRegistration_Forms_Outstanding__["Manager_Title"] = $fdata;
//	Event_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Event_date";
	$fdata["GoodName"] = "Event_date";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Registration_Forms_Outstanding__","Event_date"); 
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

	

	
	$tdataRegistration_Forms_Outstanding__["Event_date"] = $fdata;
//	Activations
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Activations";
	$fdata["GoodName"] = "Activations";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Registration_Forms_Outstanding__","Activations"); 
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

	

	
	$tdataRegistration_Forms_Outstanding__["Activations"] = $fdata;
//	Returned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Returned";
	$fdata["GoodName"] = "Returned";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Registration_Forms_Outstanding__","Returned"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Returned"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sum( simcards_batches.`Form_Returned` = 'Yes' )";
	
		
		
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

	

	
	$tdataRegistration_Forms_Outstanding__["Returned"] = $fdata;
//	Missing
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Missing";
	$fdata["GoodName"] = "Missing";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Registration_Forms_Outstanding__","Missing"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Missing"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sum( simcards_batches.`Form_Returned` = '' )";
	
		
		
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

	

	
	$tdataRegistration_Forms_Outstanding__["Missing"] = $fdata;
//	Percent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Percent";
	$fdata["GoodName"] = "Percent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Registration_Forms_Outstanding__","Percent"); 
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

	

	
	$tdataRegistration_Forms_Outstanding__["Percent"] = $fdata;

	
$tables_data["Registration Forms Outstanding  "]=&$tdataRegistration_Forms_Outstanding__;
$field_labels["Registration_Forms_Outstanding__"] = &$fieldLabelsRegistration_Forms_Outstanding__;
$fieldToolTips["Registration Forms Outstanding  "] = &$fieldToolTipsRegistration_Forms_Outstanding__;
$page_titles["Registration_Forms_Outstanding__"] = &$pageTitlesRegistration_Forms_Outstanding__;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Registration Forms Outstanding  "] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Registration Forms Outstanding  "] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Registration_Forms_Outstanding__()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "simcards_batches.`Manager_Name` , Manager_Title, Event_date, sum( simcards_batches.`Status` = 'Active' ) AS Activations, sum( simcards_batches.`Form_Returned` = 'Yes' ) AS Returned, sum( simcards_batches.`Form_Returned` = '' ) AS Missing  , '' as Percent";
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
	"m_srcTableName" => "Registration Forms Outstanding  "
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
	"m_srcTableName" => "Registration Forms Outstanding  "
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
	"m_srcTableName" => "Registration Forms Outstanding  "
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
	"m_srcTableName" => "Registration Forms Outstanding  "
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
	"m_srcTableName" => "Registration Forms Outstanding  "
));

$proto15["m_sql"] = "simcards_batches.`Manager_Name`";
$proto15["m_srcTableName"] = "Registration Forms Outstanding  ";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Registration Forms Outstanding  "
));

$proto17["m_sql"] = "Manager_Title";
$proto17["m_srcTableName"] = "Registration Forms Outstanding  ";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_date",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Registration Forms Outstanding  "
));

$proto19["m_sql"] = "Event_date";
$proto19["m_srcTableName"] = "Registration Forms Outstanding  ";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
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
$proto21["m_srcTableName"] = "Registration Forms Outstanding  ";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "Activations";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$proto25=array();
$proto25["m_functiontype"] = "SQLF_SUM";
$proto25["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "simcards_batches.`Form_Returned` = 'Yes'"
));

$proto25["m_arguments"][]=$obj;
$proto25["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto25);

$proto24["m_sql"] = "sum( simcards_batches.`Form_Returned` = 'Yes' )";
$proto24["m_srcTableName"] = "Registration Forms Outstanding  ";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "Returned";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$proto28=array();
$proto28["m_functiontype"] = "SQLF_SUM";
$proto28["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "simcards_batches.`Form_Returned` = ''"
));

$proto28["m_arguments"][]=$obj;
$proto28["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto28);

$proto27["m_sql"] = "sum( simcards_batches.`Form_Returned` = '' )";
$proto27["m_srcTableName"] = "Registration Forms Outstanding  ";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "Missing";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto30["m_sql"] = "''";
$proto30["m_srcTableName"] = "Registration Forms Outstanding  ";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "Percent";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "simcards_batches";
$proto33["m_srcTableName"] = "Registration Forms Outstanding  ";
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
$proto32["m_srcTableName"] = "Registration Forms Outstanding  ";
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
	"m_srcTableName" => "Registration Forms Outstanding  "
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "Event_date",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Registration Forms Outstanding  "
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Registration Forms Outstanding  ";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Registration_Forms_Outstanding__ = createSqlQuery_Registration_Forms_Outstanding__();


	
							
	
$tdataRegistration_Forms_Outstanding__[".sqlquery"] = $queryData_Registration_Forms_Outstanding__;

$tableEvents["Registration Forms Outstanding  "] = new eventsBase;
$tdataRegistration_Forms_Outstanding__[".hasEvents"] = false;

?>