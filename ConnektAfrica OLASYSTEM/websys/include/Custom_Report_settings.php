<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCustom_Report = array();	
	$tdataCustom_Report[".truncateText"] = true;
	$tdataCustom_Report[".NumberOfChars"] = 80; 
	$tdataCustom_Report[".ShortName"] = "Custom_Report";
	$tdataCustom_Report[".OwnerID"] = "";
	$tdataCustom_Report[".OriginalTable"] = "simcards_batches";

//	field labels
$fieldLabelsCustom_Report = array();
$fieldToolTipsCustom_Report = array();
$pageTitlesCustom_Report = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCustom_Report["English"] = array();
	$fieldToolTipsCustom_Report["English"] = array();
	$pageTitlesCustom_Report["English"] = array();
	$fieldLabelsCustom_Report["English"]["batch_name"] = "Batch Name";
	$fieldToolTipsCustom_Report["English"]["batch_name"] = "";
	$fieldLabelsCustom_Report["English"]["ICCID"] = "ICCID";
	$fieldToolTipsCustom_Report["English"]["ICCID"] = "";
	$fieldLabelsCustom_Report["English"]["supplier_name"] = "Supplier Name";
	$fieldToolTipsCustom_Report["English"]["supplier_name"] = "";
	$fieldLabelsCustom_Report["English"]["supplier_number"] = "Supplier Number";
	$fieldToolTipsCustom_Report["English"]["supplier_number"] = "";
	$fieldLabelsCustom_Report["English"]["Activation_Status"] = "Activation Status";
	$fieldToolTipsCustom_Report["English"]["Activation_Status"] = "";
	$fieldLabelsCustom_Report["English"]["Event_date"] = "Event Date";
	$fieldToolTipsCustom_Report["English"]["Event_date"] = "";
	$fieldLabelsCustom_Report["English"]["time"] = "Time";
	$fieldToolTipsCustom_Report["English"]["time"] = "";
	$fieldLabelsCustom_Report["English"]["Active_MSISDN"] = "Active MSISDN";
	$fieldToolTipsCustom_Report["English"]["Active_MSISDN"] = "";
	$fieldLabelsCustom_Report["English"]["Activator_Number"] = "Activator Number";
	$fieldToolTipsCustom_Report["English"]["Activator_Number"] = "";
	if (count($fieldToolTipsCustom_Report["English"]))
		$tdataCustom_Report[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCustom_Report[""] = array();
	$fieldToolTipsCustom_Report[""] = array();
	$pageTitlesCustom_Report[""] = array();
	if (count($fieldToolTipsCustom_Report[""]))
		$tdataCustom_Report[".isUseToolTips"] = true;
}
	
	
	$tdataCustom_Report[".NCSearch"] = true;



$tdataCustom_Report[".shortTableName"] = "Custom_Report";
$tdataCustom_Report[".nSecOptions"] = 0;
$tdataCustom_Report[".recsPerRowList"] = 1;
$tdataCustom_Report[".mainTableOwnerID"] = "";
$tdataCustom_Report[".moveNext"] = 1;
$tdataCustom_Report[".nType"] = 1;

$tdataCustom_Report[".strOriginalTableName"] = "simcards_batches";

	


$tdataCustom_Report[".showAddInPopup"] = true;

$tdataCustom_Report[".showEditInPopup"] = true;

$tdataCustom_Report[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
			;
$popupPagesLayoutNames["add"] = "view2";
			;
$popupPagesLayoutNames["edit"] = "view2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdataCustom_Report[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCustom_Report[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataCustom_Report[".listAjax"] = true;
else 
	$tdataCustom_Report[".listAjax"] = false;

	$tdataCustom_Report[".audit"] = false;

	$tdataCustom_Report[".locking"] = false;

$tdataCustom_Report[".view"] = true;

$tdataCustom_Report[".exportTo"] = true;



$tdataCustom_Report[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataCustom_Report[".searchSaving"] = false;
//

$tdataCustom_Report[".showSearchPanel"] = true;
		$tdataCustom_Report[".flexibleSearch"] = true;		

if (isMobile())
	$tdataCustom_Report[".isUseAjaxSuggest"] = false;
else 
	$tdataCustom_Report[".isUseAjaxSuggest"] = true;

$tdataCustom_Report[".rowHighlite"] = true;



$tdataCustom_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCustom_Report[".isUseTimeForSearch"] = false;





$tdataCustom_Report[".allSearchFields"] = array();
$tdataCustom_Report[".filterFields"] = array();
$tdataCustom_Report[".requiredSearchFields"] = array();

$tdataCustom_Report[".allSearchFields"][] = "supplier_name";
		$tdataCustom_Report[".allSearchFields"][] = "supplier_number";
		$tdataCustom_Report[".allSearchFields"][] = "batch_name";
		$tdataCustom_Report[".allSearchFields"][] = "ICCID";
		$tdataCustom_Report[".allSearchFields"][] = "Event_date";
		$tdataCustom_Report[".allSearchFields"][] = "time";
		$tdataCustom_Report[".allSearchFields"][] = "Activation_Status";
		$tdataCustom_Report[".allSearchFields"][] = "Activator_Number";
		$tdataCustom_Report[".allSearchFields"][] = "Active_MSISDN";
		
$tdataCustom_Report[".googleLikeFields"] = array();
$tdataCustom_Report[".googleLikeFields"][] = "supplier_name";
$tdataCustom_Report[".googleLikeFields"][] = "supplier_number";
$tdataCustom_Report[".googleLikeFields"][] = "batch_name";
$tdataCustom_Report[".googleLikeFields"][] = "ICCID";
$tdataCustom_Report[".googleLikeFields"][] = "Event_date";
$tdataCustom_Report[".googleLikeFields"][] = "time";
$tdataCustom_Report[".googleLikeFields"][] = "Activation_Status";
$tdataCustom_Report[".googleLikeFields"][] = "Activator_Number";
$tdataCustom_Report[".googleLikeFields"][] = "Active_MSISDN";


$tdataCustom_Report[".advSearchFields"] = array();
$tdataCustom_Report[".advSearchFields"][] = "supplier_name";
$tdataCustom_Report[".advSearchFields"][] = "supplier_number";
$tdataCustom_Report[".advSearchFields"][] = "batch_name";
$tdataCustom_Report[".advSearchFields"][] = "ICCID";
$tdataCustom_Report[".advSearchFields"][] = "Event_date";
$tdataCustom_Report[".advSearchFields"][] = "time";
$tdataCustom_Report[".advSearchFields"][] = "Activation_Status";
$tdataCustom_Report[".advSearchFields"][] = "Activator_Number";
$tdataCustom_Report[".advSearchFields"][] = "Active_MSISDN";

$tdataCustom_Report[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdataCustom_Report[".pageSize"] = 20;

$tdataCustom_Report[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCustom_Report[".strOrderBy"] = $tstrOrderBy;

$tdataCustom_Report[".orderindexes"] = array();

$tdataCustom_Report[".sqlHead"] = "SELECT simcards.supplier_name,  simcards.supplier_number,  simcards_batches.batch_name,  simcards_batches.ICCID,  simcards_batches.Event_date,  simcards_batches.`time`,  simcards_batches.Status AS Activation_Status,  simcards_batches.Activator_Number,  simcards_batches.Active_MSISDN";
$tdataCustom_Report[".sqlFrom"] = "FROM simcards_batches  , simcards";
$tdataCustom_Report[".sqlWhereExpr"] = "simcards.batch_number = simcards_batches.batch_name";
$tdataCustom_Report[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCustom_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCustom_Report[".arrGroupsPerPage"] = $arrGPP;

$tdataCustom_Report[".highlightSearchResults"] = true;

$tableKeysCustom_Report = array();
$tableKeysCustom_Report[] = "ICCID";
$tdataCustom_Report[".Keys"] = $tableKeysCustom_Report;

$tdataCustom_Report[".listFields"] = array();
$tdataCustom_Report[".listFields"][] = "Activator_Number";
$tdataCustom_Report[".listFields"][] = "Active_MSISDN";
$tdataCustom_Report[".listFields"][] = "Event_date";
$tdataCustom_Report[".listFields"][] = "time";
$tdataCustom_Report[".listFields"][] = "Activation_Status";
$tdataCustom_Report[".listFields"][] = "supplier_name";
$tdataCustom_Report[".listFields"][] = "supplier_number";
$tdataCustom_Report[".listFields"][] = "batch_name";
$tdataCustom_Report[".listFields"][] = "ICCID";

$tdataCustom_Report[".hideMobileList"] = array();


$tdataCustom_Report[".viewFields"] = array();
$tdataCustom_Report[".viewFields"][] = "supplier_name";
$tdataCustom_Report[".viewFields"][] = "supplier_number";
$tdataCustom_Report[".viewFields"][] = "batch_name";
$tdataCustom_Report[".viewFields"][] = "ICCID";
$tdataCustom_Report[".viewFields"][] = "Event_date";
$tdataCustom_Report[".viewFields"][] = "time";
$tdataCustom_Report[".viewFields"][] = "Activation_Status";
$tdataCustom_Report[".viewFields"][] = "Activator_Number";
$tdataCustom_Report[".viewFields"][] = "Active_MSISDN";

$tdataCustom_Report[".addFields"] = array();

$tdataCustom_Report[".inlineAddFields"] = array();

$tdataCustom_Report[".editFields"] = array();

$tdataCustom_Report[".inlineEditFields"] = array();

$tdataCustom_Report[".exportFields"] = array();
$tdataCustom_Report[".exportFields"][] = "supplier_name";
$tdataCustom_Report[".exportFields"][] = "supplier_number";
$tdataCustom_Report[".exportFields"][] = "batch_name";
$tdataCustom_Report[".exportFields"][] = "ICCID";
$tdataCustom_Report[".exportFields"][] = "Event_date";
$tdataCustom_Report[".exportFields"][] = "time";
$tdataCustom_Report[".exportFields"][] = "Activation_Status";
$tdataCustom_Report[".exportFields"][] = "Activator_Number";
$tdataCustom_Report[".exportFields"][] = "Active_MSISDN";

$tdataCustom_Report[".printFields"] = array();

//	supplier_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "supplier_name";
	$fdata["GoodName"] = "supplier_name";
	$fdata["ownerTable"] = "simcards";
	$fdata["Label"] = GetFieldLabel("Custom_Report","supplier_name"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "supplier_name"; 
		$fdata["FullName"] = "simcards.supplier_name";
	
		
		
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

	

	
	$tdataCustom_Report["supplier_name"] = $fdata;
//	supplier_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "supplier_number";
	$fdata["GoodName"] = "supplier_number";
	$fdata["ownerTable"] = "simcards";
	$fdata["Label"] = GetFieldLabel("Custom_Report","supplier_number"); 
	$fdata["FieldType"] = 20;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "supplier_number"; 
		$fdata["FullName"] = "simcards.supplier_number";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataCustom_Report["supplier_number"] = $fdata;
//	batch_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "batch_name";
	$fdata["GoodName"] = "batch_name";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Custom_Report","batch_name"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "batch_name"; 
		$fdata["FullName"] = "simcards_batches.batch_name";
	
		
		
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
			$edata["EditParams"].= " maxlength=200";
	
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

	

	
	$tdataCustom_Report["batch_name"] = $fdata;
//	ICCID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ICCID";
	$fdata["GoodName"] = "ICCID";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Custom_Report","ICCID"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ICCID"; 
		$fdata["FullName"] = "simcards_batches.ICCID";
	
		
		
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
			$edata["EditParams"].= " maxlength=200";
	
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

	

	
	$tdataCustom_Report["ICCID"] = $fdata;
//	Event_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Event_date";
	$fdata["GoodName"] = "Event_date";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Custom_Report","Event_date"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Event_date"; 
		$fdata["FullName"] = "simcards_batches.Event_date";
	
		
		
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

	

	
	$tdataCustom_Report["Event_date"] = $fdata;
//	time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "time";
	$fdata["GoodName"] = "time";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Custom_Report","time"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "time"; 
		$fdata["FullName"] = "simcards_batches.`time`";
	
		
		
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

	

	
	$tdataCustom_Report["time"] = $fdata;
//	Activation_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Activation_Status";
	$fdata["GoodName"] = "Activation_Status";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Custom_Report","Activation_Status"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Status"; 
		$fdata["FullName"] = "simcards_batches.Status";
	
		
		
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

	

	
	$tdataCustom_Report["Activation_Status"] = $fdata;
//	Activator_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Activator_Number";
	$fdata["GoodName"] = "Activator_Number";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Custom_Report","Activator_Number"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Activator_Number"; 
		$fdata["FullName"] = "simcards_batches.Activator_Number";
	
		
		
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

	

	
	$tdataCustom_Report["Activator_Number"] = $fdata;
//	Active_MSISDN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Active_MSISDN";
	$fdata["GoodName"] = "Active_MSISDN";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Custom_Report","Active_MSISDN"); 
	$fdata["FieldType"] = 3;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Active_MSISDN"; 
		$fdata["FullName"] = "simcards_batches.Active_MSISDN";
	
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataCustom_Report["Active_MSISDN"] = $fdata;

	
$tables_data["Custom Report"]=&$tdataCustom_Report;
$field_labels["Custom_Report"] = &$fieldLabelsCustom_Report;
$fieldToolTips["Custom Report"] = &$fieldToolTipsCustom_Report;
$page_titles["Custom_Report"] = &$pageTitlesCustom_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Custom Report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Custom Report"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Custom_Report()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "simcards.supplier_name,  simcards.supplier_number,  simcards_batches.batch_name,  simcards_batches.ICCID,  simcards_batches.Event_date,  simcards_batches.`time`,  simcards_batches.Status AS Activation_Status,  simcards_batches.Activator_Number,  simcards_batches.Active_MSISDN";
$proto3["m_strFrom"] = "FROM simcards_batches  , simcards";
$proto3["m_strWhere"] = "simcards.batch_number = simcards_batches.batch_name";
$proto3["m_strOrderBy"] = "";
$proto3["m_strTail"] = "";
			$proto3["cipherer"] = null;
$proto4=array();
$proto4["m_sql"] = "simcards.batch_number = simcards_batches.batch_name";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "batch_number",
	"m_strTable" => "simcards"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= simcards_batches.batch_name";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto3["m_where"] = $obj;
$proto6=array();
$proto6["m_sql"] = "";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

$proto3["m_having"] = $obj;
$proto3["m_fieldlist"] = array();
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "supplier_name",
	"m_strTable" => "simcards"
));

$proto8["m_sql"] = "simcards.supplier_name";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "supplier_number",
	"m_strTable" => "simcards"
));

$proto10["m_sql"] = "simcards.supplier_number";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "batch_name",
	"m_strTable" => "simcards_batches"
));

$proto12["m_sql"] = "simcards_batches.batch_name";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ICCID",
	"m_strTable" => "simcards_batches"
));

$proto14["m_sql"] = "simcards_batches.ICCID";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_date",
	"m_strTable" => "simcards_batches"
));

$proto16["m_sql"] = "simcards_batches.Event_date";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "time",
	"m_strTable" => "simcards_batches"
));

$proto18["m_sql"] = "simcards_batches.`time`";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "simcards_batches"
));

$proto20["m_sql"] = "simcards_batches.Status";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "Activation_Status";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Activator_Number",
	"m_strTable" => "simcards_batches"
));

$proto22["m_sql"] = "simcards_batches.Activator_Number";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto3["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Active_MSISDN",
	"m_strTable" => "simcards_batches"
));

$proto24["m_sql"] = "simcards_batches.Active_MSISDN";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "simcards_batches";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "ID";
$proto27["m_columns"][] = "batch_name";
$proto27["m_columns"][] = "ICCID";
$proto27["m_columns"][] = "Status";
$proto27["m_columns"][] = "Manager_Name";
$proto27["m_columns"][] = "Manager_Title";
$proto27["m_columns"][] = "Activator_Number";
$proto27["m_columns"][] = "Activator_Name";
$proto27["m_columns"][] = "Team_Leader";
$proto27["m_columns"][] = "Event_date";
$proto27["m_columns"][] = "time";
$proto27["m_columns"][] = "Active_MSISDN";
$proto27["m_columns"][] = "New_MSISDN";
$proto27["m_columns"][] = "Swap_Date";
$proto27["m_columns"][] = "Airtime_transered";
$proto27["m_columns"][] = "Transfer_date";
$proto27["m_columns"][] = "Activation_Commission";
$proto27["m_columns"][] = "Form_Commission";
$proto27["m_columns"][] = "Form_Paid_Date";
$proto27["m_columns"][] = "Form_Returned";
$proto27["m_columns"][] = "Form_Status";
$proto27["m_columns"][] = "Form_Date";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "simcards_batches";
$proto26["m_alias"] = "";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto3["m_fromlist"][]=$obj;
												$proto30=array();
$proto30["m_link"] = "SQLL_CROSSJOIN";
			$proto31=array();
$proto31["m_strName"] = "simcards";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "ID";
$proto31["m_columns"][] = "supplier_name";
$proto31["m_columns"][] = "supplier_number";
$proto31["m_columns"][] = "batch_number";
$proto31["m_columns"][] = "batch_size";
$proto31["m_columns"][] = "Date";
$proto31["m_columns"][] = "pos_number";
$proto31["m_columns"][] = "status";
$proto31["m_columns"][] = "mydata";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "simcards";
$proto30["m_alias"] = "";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_Custom_Report = createSqlQuery_Custom_Report();

									
	
$tdataCustom_Report[".sqlquery"] = $queryData_Custom_Report;

$tableEvents["Custom Report"] = new eventsBase;
$tdataCustom_Report[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Custom Report");

?>