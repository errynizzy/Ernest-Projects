<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCopy_of_controller = array();	
	$tdataCopy_of_controller[".truncateText"] = true;
	$tdataCopy_of_controller[".NumberOfChars"] = 80; 
	$tdataCopy_of_controller[".ShortName"] = "Copy_of_controller";
	$tdataCopy_of_controller[".OwnerID"] = "";
	$tdataCopy_of_controller[".OriginalTable"] = "controller";

//	field labels
$fieldLabelsCopy_of_controller = array();
$fieldToolTipsCopy_of_controller = array();
$pageTitlesCopy_of_controller = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCopy_of_controller["English"] = array();
	$fieldToolTipsCopy_of_controller["English"] = array();
	$pageTitlesCopy_of_controller["English"] = array();
	$fieldLabelsCopy_of_controller["English"]["ID"] = "ID";
	$fieldToolTipsCopy_of_controller["English"]["ID"] = "";
	$fieldLabelsCopy_of_controller["English"]["Sales_Coordinator_Name"] = "Sales Coordinator Name";
	$fieldToolTipsCopy_of_controller["English"]["Sales_Coordinator_Name"] = "";
	$fieldLabelsCopy_of_controller["English"]["Sales_Coordinator_Number"] = "Sales Coordinator Number";
	$fieldToolTipsCopy_of_controller["English"]["Sales_Coordinator_Number"] = "";
	$fieldLabelsCopy_of_controller["English"]["Team_Leader_Name"] = "Team Leader Name";
	$fieldToolTipsCopy_of_controller["English"]["Team_Leader_Name"] = "";
	$fieldLabelsCopy_of_controller["English"]["Team_Leader_Number"] = "Team Leader Number";
	$fieldToolTipsCopy_of_controller["English"]["Team_Leader_Number"] = "";
	$fieldLabelsCopy_of_controller["English"]["mydata"] = "Mydata";
	$fieldToolTipsCopy_of_controller["English"]["mydata"] = "";
	if (count($fieldToolTipsCopy_of_controller["English"]))
		$tdataCopy_of_controller[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCopy_of_controller[""] = array();
	$fieldToolTipsCopy_of_controller[""] = array();
	$pageTitlesCopy_of_controller[""] = array();
	if (count($fieldToolTipsCopy_of_controller[""]))
		$tdataCopy_of_controller[".isUseToolTips"] = true;
}
	
	
	$tdataCopy_of_controller[".NCSearch"] = true;



$tdataCopy_of_controller[".shortTableName"] = "Copy_of_controller";
$tdataCopy_of_controller[".nSecOptions"] = 0;
$tdataCopy_of_controller[".recsPerRowList"] = 1;
$tdataCopy_of_controller[".mainTableOwnerID"] = "";
$tdataCopy_of_controller[".moveNext"] = 1;
$tdataCopy_of_controller[".nType"] = 1;

$tdataCopy_of_controller[".strOriginalTableName"] = "controller";




$tdataCopy_of_controller[".showAddInPopup"] = false;

$tdataCopy_of_controller[".showEditInPopup"] = false;

$tdataCopy_of_controller[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCopy_of_controller[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCopy_of_controller[".fieldsForRegister"] = array();

$tdataCopy_of_controller[".listAjax"] = false;

	$tdataCopy_of_controller[".audit"] = false;

	$tdataCopy_of_controller[".locking"] = false;

$tdataCopy_of_controller[".edit"] = true;

$tdataCopy_of_controller[".list"] = true;

$tdataCopy_of_controller[".inlineEdit"] = true;
$tdataCopy_of_controller[".inlineAdd"] = true;
$tdataCopy_of_controller[".view"] = true;

$tdataCopy_of_controller[".import"] = true;

$tdataCopy_of_controller[".exportTo"] = true;

$tdataCopy_of_controller[".printFriendly"] = true;

$tdataCopy_of_controller[".delete"] = true;

$tdataCopy_of_controller[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataCopy_of_controller[".searchSaving"] = false;
//

$tdataCopy_of_controller[".showSearchPanel"] = true;
		$tdataCopy_of_controller[".flexibleSearch"] = true;		

if (isMobile())
	$tdataCopy_of_controller[".isUseAjaxSuggest"] = false;
else 
	$tdataCopy_of_controller[".isUseAjaxSuggest"] = true;

$tdataCopy_of_controller[".rowHighlite"] = true;



$tdataCopy_of_controller[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCopy_of_controller[".isUseTimeForSearch"] = false;





$tdataCopy_of_controller[".allSearchFields"] = array();
$tdataCopy_of_controller[".filterFields"] = array();
$tdataCopy_of_controller[".requiredSearchFields"] = array();

$tdataCopy_of_controller[".allSearchFields"][] = "ID";
	$tdataCopy_of_controller[".allSearchFields"][] = "Sales_Coordinator_Name";
	$tdataCopy_of_controller[".allSearchFields"][] = "Sales_Coordinator_Number";
	$tdataCopy_of_controller[".allSearchFields"][] = "Team_Leader_Name";
	$tdataCopy_of_controller[".allSearchFields"][] = "Team_Leader_Number";
	$tdataCopy_of_controller[".allSearchFields"][] = "mydata";
	

$tdataCopy_of_controller[".googleLikeFields"] = array();
$tdataCopy_of_controller[".googleLikeFields"][] = "ID";
$tdataCopy_of_controller[".googleLikeFields"][] = "Sales_Coordinator_Name";
$tdataCopy_of_controller[".googleLikeFields"][] = "Sales_Coordinator_Number";
$tdataCopy_of_controller[".googleLikeFields"][] = "Team_Leader_Name";
$tdataCopy_of_controller[".googleLikeFields"][] = "Team_Leader_Number";
$tdataCopy_of_controller[".googleLikeFields"][] = "mydata";


$tdataCopy_of_controller[".advSearchFields"] = array();
$tdataCopy_of_controller[".advSearchFields"][] = "ID";
$tdataCopy_of_controller[".advSearchFields"][] = "Sales_Coordinator_Name";
$tdataCopy_of_controller[".advSearchFields"][] = "Sales_Coordinator_Number";
$tdataCopy_of_controller[".advSearchFields"][] = "Team_Leader_Name";
$tdataCopy_of_controller[".advSearchFields"][] = "Team_Leader_Number";
$tdataCopy_of_controller[".advSearchFields"][] = "mydata";

$tdataCopy_of_controller[".tableType"] = "list";

$tdataCopy_of_controller[".printerPageOrientation"] = 0;
$tdataCopy_of_controller[".nPrinterPageScale"] = 100;

$tdataCopy_of_controller[".nPrinterSplitRecords"] = 40;

$tdataCopy_of_controller[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataCopy_of_controller[".pageSize"] = 20;

$tdataCopy_of_controller[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCopy_of_controller[".strOrderBy"] = $tstrOrderBy;

$tdataCopy_of_controller[".orderindexes"] = array();

$tdataCopy_of_controller[".sqlHead"] = "SELECT ID,   Sales_Coordinator_Name,   Sales_Coordinator_Number,   Team_Leader_Name,   Team_Leader_Number,   mydata";
$tdataCopy_of_controller[".sqlFrom"] = "FROM controller";
$tdataCopy_of_controller[".sqlWhereExpr"] = "";
$tdataCopy_of_controller[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCopy_of_controller[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCopy_of_controller[".arrGroupsPerPage"] = $arrGPP;

$tdataCopy_of_controller[".highlightSearchResults"] = true;

$tableKeysCopy_of_controller = array();
$tableKeysCopy_of_controller[] = "ID";
$tdataCopy_of_controller[".Keys"] = $tableKeysCopy_of_controller;

$tdataCopy_of_controller[".listFields"] = array();
$tdataCopy_of_controller[".listFields"][] = "ID";
$tdataCopy_of_controller[".listFields"][] = "Sales_Coordinator_Name";
$tdataCopy_of_controller[".listFields"][] = "Sales_Coordinator_Number";
$tdataCopy_of_controller[".listFields"][] = "Team_Leader_Name";
$tdataCopy_of_controller[".listFields"][] = "Team_Leader_Number";
$tdataCopy_of_controller[".listFields"][] = "mydata";

$tdataCopy_of_controller[".hideMobileList"] = array();


$tdataCopy_of_controller[".viewFields"] = array();
$tdataCopy_of_controller[".viewFields"][] = "ID";
$tdataCopy_of_controller[".viewFields"][] = "Sales_Coordinator_Name";
$tdataCopy_of_controller[".viewFields"][] = "Sales_Coordinator_Number";
$tdataCopy_of_controller[".viewFields"][] = "Team_Leader_Name";
$tdataCopy_of_controller[".viewFields"][] = "Team_Leader_Number";
$tdataCopy_of_controller[".viewFields"][] = "mydata";

$tdataCopy_of_controller[".addFields"] = array();
$tdataCopy_of_controller[".addFields"][] = "Sales_Coordinator_Name";
$tdataCopy_of_controller[".addFields"][] = "Sales_Coordinator_Number";
$tdataCopy_of_controller[".addFields"][] = "Team_Leader_Name";
$tdataCopy_of_controller[".addFields"][] = "Team_Leader_Number";
$tdataCopy_of_controller[".addFields"][] = "mydata";

$tdataCopy_of_controller[".inlineAddFields"] = array();
$tdataCopy_of_controller[".inlineAddFields"][] = "Sales_Coordinator_Name";
$tdataCopy_of_controller[".inlineAddFields"][] = "Sales_Coordinator_Number";
$tdataCopy_of_controller[".inlineAddFields"][] = "Team_Leader_Name";
$tdataCopy_of_controller[".inlineAddFields"][] = "Team_Leader_Number";
$tdataCopy_of_controller[".inlineAddFields"][] = "mydata";

$tdataCopy_of_controller[".editFields"] = array();
$tdataCopy_of_controller[".editFields"][] = "Sales_Coordinator_Name";
$tdataCopy_of_controller[".editFields"][] = "Sales_Coordinator_Number";
$tdataCopy_of_controller[".editFields"][] = "Team_Leader_Name";
$tdataCopy_of_controller[".editFields"][] = "Team_Leader_Number";
$tdataCopy_of_controller[".editFields"][] = "mydata";

$tdataCopy_of_controller[".inlineEditFields"] = array();
$tdataCopy_of_controller[".inlineEditFields"][] = "Sales_Coordinator_Name";
$tdataCopy_of_controller[".inlineEditFields"][] = "Sales_Coordinator_Number";
$tdataCopy_of_controller[".inlineEditFields"][] = "Team_Leader_Name";
$tdataCopy_of_controller[".inlineEditFields"][] = "Team_Leader_Number";
$tdataCopy_of_controller[".inlineEditFields"][] = "mydata";

$tdataCopy_of_controller[".exportFields"] = array();
$tdataCopy_of_controller[".exportFields"][] = "ID";
$tdataCopy_of_controller[".exportFields"][] = "Sales_Coordinator_Name";
$tdataCopy_of_controller[".exportFields"][] = "Sales_Coordinator_Number";
$tdataCopy_of_controller[".exportFields"][] = "Team_Leader_Name";
$tdataCopy_of_controller[".exportFields"][] = "Team_Leader_Number";
$tdataCopy_of_controller[".exportFields"][] = "mydata";

$tdataCopy_of_controller[".importFields"] = array();
$tdataCopy_of_controller[".importFields"][] = "ID";
$tdataCopy_of_controller[".importFields"][] = "Sales_Coordinator_Name";
$tdataCopy_of_controller[".importFields"][] = "Sales_Coordinator_Number";
$tdataCopy_of_controller[".importFields"][] = "Team_Leader_Name";
$tdataCopy_of_controller[".importFields"][] = "Team_Leader_Number";
$tdataCopy_of_controller[".importFields"][] = "mydata";

$tdataCopy_of_controller[".printFields"] = array();
$tdataCopy_of_controller[".printFields"][] = "ID";
$tdataCopy_of_controller[".printFields"][] = "Sales_Coordinator_Name";
$tdataCopy_of_controller[".printFields"][] = "Sales_Coordinator_Number";
$tdataCopy_of_controller[".printFields"][] = "Team_Leader_Name";
$tdataCopy_of_controller[".printFields"][] = "Team_Leader_Number";
$tdataCopy_of_controller[".printFields"][] = "mydata";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "controller";
	$fdata["Label"] = GetFieldLabel("Copy_of_controller","ID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";
	
		
		
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

	

	
	$tdataCopy_of_controller["ID"] = $fdata;
//	Sales_Coordinator_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Sales_Coordinator_Name";
	$fdata["GoodName"] = "Sales_Coordinator_Name";
	$fdata["ownerTable"] = "controller";
	$fdata["Label"] = GetFieldLabel("Copy_of_controller","Sales_Coordinator_Name"); 
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
	
		$fdata["strField"] = "Sales_Coordinator_Name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sales_Coordinator_Name";
	
		
		
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

	

	
	$tdataCopy_of_controller["Sales_Coordinator_Name"] = $fdata;
//	Sales_Coordinator_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Sales_Coordinator_Number";
	$fdata["GoodName"] = "Sales_Coordinator_Number";
	$fdata["ownerTable"] = "controller";
	$fdata["Label"] = GetFieldLabel("Copy_of_controller","Sales_Coordinator_Number"); 
	$fdata["FieldType"] = 20;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Sales_Coordinator_Number"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sales_Coordinator_Number";
	
		
		
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

	

	
	$tdataCopy_of_controller["Sales_Coordinator_Number"] = $fdata;
//	Team_Leader_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Team_Leader_Name";
	$fdata["GoodName"] = "Team_Leader_Name";
	$fdata["ownerTable"] = "controller";
	$fdata["Label"] = GetFieldLabel("Copy_of_controller","Team_Leader_Name"); 
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
	
		$fdata["strField"] = "Team_Leader_Name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Team_Leader_Name";
	
		
		
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

	

	
	$tdataCopy_of_controller["Team_Leader_Name"] = $fdata;
//	Team_Leader_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Team_Leader_Number";
	$fdata["GoodName"] = "Team_Leader_Number";
	$fdata["ownerTable"] = "controller";
	$fdata["Label"] = GetFieldLabel("Copy_of_controller","Team_Leader_Number"); 
	$fdata["FieldType"] = 20;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Team_Leader_Number"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Team_Leader_Number";
	
		
		
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

	

	
	$tdataCopy_of_controller["Team_Leader_Number"] = $fdata;
//	mydata
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mydata";
	$fdata["GoodName"] = "mydata";
	$fdata["ownerTable"] = "controller";
	$fdata["Label"] = GetFieldLabel("Copy_of_controller","mydata"); 
	$fdata["FieldType"] = 20;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "mydata"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mydata";
	
		
		
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

	

	
	$tdataCopy_of_controller["mydata"] = $fdata;

	
$tables_data["Copy of controller"]=&$tdataCopy_of_controller;
$field_labels["Copy_of_controller"] = &$fieldLabelsCopy_of_controller;
$fieldToolTips["Copy of controller"] = &$fieldToolTipsCopy_of_controller;
$page_titles["Copy_of_controller"] = &$pageTitlesCopy_of_controller;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Copy of controller"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Copy of controller"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Copy_of_controller()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   Sales_Coordinator_Name,   Sales_Coordinator_Number,   Team_Leader_Name,   Team_Leader_Number,   mydata";
$proto0["m_strFrom"] = "FROM controller";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "controller",
	"m_srcTableName" => "Copy of controller"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "Copy of controller";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Sales_Coordinator_Name",
	"m_strTable" => "controller",
	"m_srcTableName" => "Copy of controller"
));

$proto7["m_sql"] = "Sales_Coordinator_Name";
$proto7["m_srcTableName"] = "Copy of controller";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Sales_Coordinator_Number",
	"m_strTable" => "controller",
	"m_srcTableName" => "Copy of controller"
));

$proto9["m_sql"] = "Sales_Coordinator_Number";
$proto9["m_srcTableName"] = "Copy of controller";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Team_Leader_Name",
	"m_strTable" => "controller",
	"m_srcTableName" => "Copy of controller"
));

$proto11["m_sql"] = "Team_Leader_Name";
$proto11["m_srcTableName"] = "Copy of controller";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Team_Leader_Number",
	"m_strTable" => "controller",
	"m_srcTableName" => "Copy of controller"
));

$proto13["m_sql"] = "Team_Leader_Number";
$proto13["m_srcTableName"] = "Copy of controller";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "mydata",
	"m_strTable" => "controller",
	"m_srcTableName" => "Copy of controller"
));

$proto15["m_sql"] = "mydata";
$proto15["m_srcTableName"] = "Copy of controller";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "controller";
$proto18["m_srcTableName"] = "Copy of controller";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "ID";
$proto18["m_columns"][] = "Sales_Coordinator_Name";
$proto18["m_columns"][] = "Sales_Coordinator_Number";
$proto18["m_columns"][] = "Team_Leader_Name";
$proto18["m_columns"][] = "Team_Leader_Number";
$proto18["m_columns"][] = "mydata";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "controller";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "Copy of controller";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Copy of controller";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Copy_of_controller = createSqlQuery_Copy_of_controller();


	
						
	
$tdataCopy_of_controller[".sqlquery"] = $queryData_Copy_of_controller;

$tableEvents["Copy of controller"] = new eventsBase;
$tdataCopy_of_controller[".hasEvents"] = false;

?>