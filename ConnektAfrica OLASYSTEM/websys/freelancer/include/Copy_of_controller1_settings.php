<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCopy_of_controller1 = array();	
	$tdataCopy_of_controller1[".truncateText"] = true;
	$tdataCopy_of_controller1[".NumberOfChars"] = 80; 
	$tdataCopy_of_controller1[".ShortName"] = "Copy_of_controller1";
	$tdataCopy_of_controller1[".OwnerID"] = "";
	$tdataCopy_of_controller1[".OriginalTable"] = "controller";

//	field labels
$fieldLabelsCopy_of_controller1 = array();
$fieldToolTipsCopy_of_controller1 = array();
$pageTitlesCopy_of_controller1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCopy_of_controller1["English"] = array();
	$fieldToolTipsCopy_of_controller1["English"] = array();
	$pageTitlesCopy_of_controller1["English"] = array();
	$fieldLabelsCopy_of_controller1["English"]["ID"] = "ID";
	$fieldToolTipsCopy_of_controller1["English"]["ID"] = "";
	$fieldLabelsCopy_of_controller1["English"]["Sales_Coordinator_Name"] = "Sales Coordinator Name";
	$fieldToolTipsCopy_of_controller1["English"]["Sales_Coordinator_Name"] = "";
	$fieldLabelsCopy_of_controller1["English"]["Sales_Coordinator_Number"] = "Sales Coordinator Number";
	$fieldToolTipsCopy_of_controller1["English"]["Sales_Coordinator_Number"] = "";
	$fieldLabelsCopy_of_controller1["English"]["Team_Leader_Name"] = "Team Leader Name";
	$fieldToolTipsCopy_of_controller1["English"]["Team_Leader_Name"] = "";
	$fieldLabelsCopy_of_controller1["English"]["Team_Leader_Number"] = "Team Leader Number";
	$fieldToolTipsCopy_of_controller1["English"]["Team_Leader_Number"] = "";
	$fieldLabelsCopy_of_controller1["English"]["mydata"] = "Mydata";
	$fieldToolTipsCopy_of_controller1["English"]["mydata"] = "";
	$fieldLabelsCopy_of_controller1["English"]["Mng"] = "Mng";
	$fieldToolTipsCopy_of_controller1["English"]["Mng"] = "";
	if (count($fieldToolTipsCopy_of_controller1["English"]))
		$tdataCopy_of_controller1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCopy_of_controller1[""] = array();
	$fieldToolTipsCopy_of_controller1[""] = array();
	$pageTitlesCopy_of_controller1[""] = array();
	if (count($fieldToolTipsCopy_of_controller1[""]))
		$tdataCopy_of_controller1[".isUseToolTips"] = true;
}
	
	
	$tdataCopy_of_controller1[".NCSearch"] = true;



$tdataCopy_of_controller1[".shortTableName"] = "Copy_of_controller1";
$tdataCopy_of_controller1[".nSecOptions"] = 0;
$tdataCopy_of_controller1[".recsPerRowList"] = 1;
$tdataCopy_of_controller1[".mainTableOwnerID"] = "";
$tdataCopy_of_controller1[".moveNext"] = 1;
$tdataCopy_of_controller1[".nType"] = 1;

$tdataCopy_of_controller1[".strOriginalTableName"] = "controller";




$tdataCopy_of_controller1[".showAddInPopup"] = false;

$tdataCopy_of_controller1[".showEditInPopup"] = false;

$tdataCopy_of_controller1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCopy_of_controller1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCopy_of_controller1[".fieldsForRegister"] = array();

$tdataCopy_of_controller1[".listAjax"] = false;

	$tdataCopy_of_controller1[".audit"] = false;

	$tdataCopy_of_controller1[".locking"] = false;

$tdataCopy_of_controller1[".edit"] = true;

$tdataCopy_of_controller1[".list"] = true;

$tdataCopy_of_controller1[".inlineEdit"] = true;
$tdataCopy_of_controller1[".inlineAdd"] = true;
$tdataCopy_of_controller1[".view"] = true;

$tdataCopy_of_controller1[".import"] = true;

$tdataCopy_of_controller1[".exportTo"] = true;

$tdataCopy_of_controller1[".printFriendly"] = true;

$tdataCopy_of_controller1[".delete"] = true;

$tdataCopy_of_controller1[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataCopy_of_controller1[".searchSaving"] = false;
//

$tdataCopy_of_controller1[".showSearchPanel"] = true;
		$tdataCopy_of_controller1[".flexibleSearch"] = true;		

if (isMobile())
	$tdataCopy_of_controller1[".isUseAjaxSuggest"] = false;
else 
	$tdataCopy_of_controller1[".isUseAjaxSuggest"] = true;

$tdataCopy_of_controller1[".rowHighlite"] = true;



$tdataCopy_of_controller1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCopy_of_controller1[".isUseTimeForSearch"] = false;





$tdataCopy_of_controller1[".allSearchFields"] = array();
$tdataCopy_of_controller1[".filterFields"] = array();
$tdataCopy_of_controller1[".requiredSearchFields"] = array();

$tdataCopy_of_controller1[".allSearchFields"][] = "ID";
	$tdataCopy_of_controller1[".allSearchFields"][] = "Sales_Coordinator_Name";
	$tdataCopy_of_controller1[".allSearchFields"][] = "Sales_Coordinator_Number";
	$tdataCopy_of_controller1[".allSearchFields"][] = "Team_Leader_Name";
	$tdataCopy_of_controller1[".allSearchFields"][] = "Team_Leader_Number";
	$tdataCopy_of_controller1[".allSearchFields"][] = "mydata";
	$tdataCopy_of_controller1[".allSearchFields"][] = "Mng";
	

$tdataCopy_of_controller1[".googleLikeFields"] = array();
$tdataCopy_of_controller1[".googleLikeFields"][] = "ID";
$tdataCopy_of_controller1[".googleLikeFields"][] = "Sales_Coordinator_Name";
$tdataCopy_of_controller1[".googleLikeFields"][] = "Sales_Coordinator_Number";
$tdataCopy_of_controller1[".googleLikeFields"][] = "Team_Leader_Name";
$tdataCopy_of_controller1[".googleLikeFields"][] = "Team_Leader_Number";
$tdataCopy_of_controller1[".googleLikeFields"][] = "mydata";
$tdataCopy_of_controller1[".googleLikeFields"][] = "Mng";


$tdataCopy_of_controller1[".advSearchFields"] = array();
$tdataCopy_of_controller1[".advSearchFields"][] = "ID";
$tdataCopy_of_controller1[".advSearchFields"][] = "Sales_Coordinator_Name";
$tdataCopy_of_controller1[".advSearchFields"][] = "Sales_Coordinator_Number";
$tdataCopy_of_controller1[".advSearchFields"][] = "Team_Leader_Name";
$tdataCopy_of_controller1[".advSearchFields"][] = "Team_Leader_Number";
$tdataCopy_of_controller1[".advSearchFields"][] = "mydata";
$tdataCopy_of_controller1[".advSearchFields"][] = "Mng";

$tdataCopy_of_controller1[".tableType"] = "list";

$tdataCopy_of_controller1[".printerPageOrientation"] = 0;
$tdataCopy_of_controller1[".nPrinterPageScale"] = 100;

$tdataCopy_of_controller1[".nPrinterSplitRecords"] = 40;

$tdataCopy_of_controller1[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataCopy_of_controller1[".pageSize"] = 20;

$tdataCopy_of_controller1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCopy_of_controller1[".strOrderBy"] = $tstrOrderBy;

$tdataCopy_of_controller1[".orderindexes"] = array();

$tdataCopy_of_controller1[".sqlHead"] = "SELECT controller.ID,  controller.Sales_Coordinator_Name,  controller.Sales_Coordinator_Number,  controller.Team_Leader_Name,  controller.Team_Leader_Number,  controller.mydata,  team_leader.Team_Leader_Name AS Mng";
$tdataCopy_of_controller1[".sqlFrom"] = "FROM controller  , team_leader";
$tdataCopy_of_controller1[".sqlWhereExpr"] = "controller.Sales_Coordinator_Name = team_leader.Sales_Coordinator_Name";
$tdataCopy_of_controller1[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCopy_of_controller1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCopy_of_controller1[".arrGroupsPerPage"] = $arrGPP;

$tdataCopy_of_controller1[".highlightSearchResults"] = true;

$tableKeysCopy_of_controller1 = array();
$tableKeysCopy_of_controller1[] = "ID";
$tdataCopy_of_controller1[".Keys"] = $tableKeysCopy_of_controller1;

$tdataCopy_of_controller1[".listFields"] = array();
$tdataCopy_of_controller1[".listFields"][] = "ID";
$tdataCopy_of_controller1[".listFields"][] = "Sales_Coordinator_Name";
$tdataCopy_of_controller1[".listFields"][] = "Sales_Coordinator_Number";
$tdataCopy_of_controller1[".listFields"][] = "Team_Leader_Name";
$tdataCopy_of_controller1[".listFields"][] = "Team_Leader_Number";
$tdataCopy_of_controller1[".listFields"][] = "mydata";
$tdataCopy_of_controller1[".listFields"][] = "Mng";

$tdataCopy_of_controller1[".hideMobileList"] = array();


$tdataCopy_of_controller1[".viewFields"] = array();
$tdataCopy_of_controller1[".viewFields"][] = "ID";
$tdataCopy_of_controller1[".viewFields"][] = "Sales_Coordinator_Name";
$tdataCopy_of_controller1[".viewFields"][] = "Sales_Coordinator_Number";
$tdataCopy_of_controller1[".viewFields"][] = "Team_Leader_Name";
$tdataCopy_of_controller1[".viewFields"][] = "Team_Leader_Number";
$tdataCopy_of_controller1[".viewFields"][] = "mydata";
$tdataCopy_of_controller1[".viewFields"][] = "Mng";

$tdataCopy_of_controller1[".addFields"] = array();
$tdataCopy_of_controller1[".addFields"][] = "Sales_Coordinator_Name";
$tdataCopy_of_controller1[".addFields"][] = "Sales_Coordinator_Number";
$tdataCopy_of_controller1[".addFields"][] = "Team_Leader_Name";
$tdataCopy_of_controller1[".addFields"][] = "Team_Leader_Number";
$tdataCopy_of_controller1[".addFields"][] = "mydata";

$tdataCopy_of_controller1[".inlineAddFields"] = array();
$tdataCopy_of_controller1[".inlineAddFields"][] = "Sales_Coordinator_Name";
$tdataCopy_of_controller1[".inlineAddFields"][] = "Sales_Coordinator_Number";
$tdataCopy_of_controller1[".inlineAddFields"][] = "Team_Leader_Name";
$tdataCopy_of_controller1[".inlineAddFields"][] = "Team_Leader_Number";
$tdataCopy_of_controller1[".inlineAddFields"][] = "mydata";

$tdataCopy_of_controller1[".editFields"] = array();
$tdataCopy_of_controller1[".editFields"][] = "Sales_Coordinator_Name";
$tdataCopy_of_controller1[".editFields"][] = "Sales_Coordinator_Number";
$tdataCopy_of_controller1[".editFields"][] = "Team_Leader_Name";
$tdataCopy_of_controller1[".editFields"][] = "Team_Leader_Number";
$tdataCopy_of_controller1[".editFields"][] = "mydata";

$tdataCopy_of_controller1[".inlineEditFields"] = array();
$tdataCopy_of_controller1[".inlineEditFields"][] = "Sales_Coordinator_Name";
$tdataCopy_of_controller1[".inlineEditFields"][] = "Sales_Coordinator_Number";
$tdataCopy_of_controller1[".inlineEditFields"][] = "Team_Leader_Name";
$tdataCopy_of_controller1[".inlineEditFields"][] = "Team_Leader_Number";
$tdataCopy_of_controller1[".inlineEditFields"][] = "mydata";

$tdataCopy_of_controller1[".exportFields"] = array();
$tdataCopy_of_controller1[".exportFields"][] = "ID";
$tdataCopy_of_controller1[".exportFields"][] = "Sales_Coordinator_Name";
$tdataCopy_of_controller1[".exportFields"][] = "Sales_Coordinator_Number";
$tdataCopy_of_controller1[".exportFields"][] = "Team_Leader_Name";
$tdataCopy_of_controller1[".exportFields"][] = "Team_Leader_Number";
$tdataCopy_of_controller1[".exportFields"][] = "mydata";
$tdataCopy_of_controller1[".exportFields"][] = "Mng";

$tdataCopy_of_controller1[".importFields"] = array();
$tdataCopy_of_controller1[".importFields"][] = "ID";
$tdataCopy_of_controller1[".importFields"][] = "Sales_Coordinator_Name";
$tdataCopy_of_controller1[".importFields"][] = "Sales_Coordinator_Number";
$tdataCopy_of_controller1[".importFields"][] = "Team_Leader_Name";
$tdataCopy_of_controller1[".importFields"][] = "Team_Leader_Number";
$tdataCopy_of_controller1[".importFields"][] = "mydata";
$tdataCopy_of_controller1[".importFields"][] = "Mng";

$tdataCopy_of_controller1[".printFields"] = array();
$tdataCopy_of_controller1[".printFields"][] = "ID";
$tdataCopy_of_controller1[".printFields"][] = "Sales_Coordinator_Name";
$tdataCopy_of_controller1[".printFields"][] = "Sales_Coordinator_Number";
$tdataCopy_of_controller1[".printFields"][] = "Team_Leader_Name";
$tdataCopy_of_controller1[".printFields"][] = "Team_Leader_Number";
$tdataCopy_of_controller1[".printFields"][] = "mydata";
$tdataCopy_of_controller1[".printFields"][] = "Mng";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "controller";
	$fdata["Label"] = GetFieldLabel("Copy_of_controller1","ID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "controller.ID";
	
		
		
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

	

	
	$tdataCopy_of_controller1["ID"] = $fdata;
//	Sales_Coordinator_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Sales_Coordinator_Name";
	$fdata["GoodName"] = "Sales_Coordinator_Name";
	$fdata["ownerTable"] = "controller";
	$fdata["Label"] = GetFieldLabel("Copy_of_controller1","Sales_Coordinator_Name"); 
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
	$fdata["FullName"] = "controller.Sales_Coordinator_Name";
	
		
		
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

	

	
	$tdataCopy_of_controller1["Sales_Coordinator_Name"] = $fdata;
//	Sales_Coordinator_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Sales_Coordinator_Number";
	$fdata["GoodName"] = "Sales_Coordinator_Number";
	$fdata["ownerTable"] = "controller";
	$fdata["Label"] = GetFieldLabel("Copy_of_controller1","Sales_Coordinator_Number"); 
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
	$fdata["FullName"] = "controller.Sales_Coordinator_Number";
	
		
		
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

	

	
	$tdataCopy_of_controller1["Sales_Coordinator_Number"] = $fdata;
//	Team_Leader_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Team_Leader_Name";
	$fdata["GoodName"] = "Team_Leader_Name";
	$fdata["ownerTable"] = "controller";
	$fdata["Label"] = GetFieldLabel("Copy_of_controller1","Team_Leader_Name"); 
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
	$fdata["FullName"] = "controller.Team_Leader_Name";
	
		
		
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

	

	
	$tdataCopy_of_controller1["Team_Leader_Name"] = $fdata;
//	Team_Leader_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Team_Leader_Number";
	$fdata["GoodName"] = "Team_Leader_Number";
	$fdata["ownerTable"] = "controller";
	$fdata["Label"] = GetFieldLabel("Copy_of_controller1","Team_Leader_Number"); 
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
	$fdata["FullName"] = "controller.Team_Leader_Number";
	
		
		
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

	

	
	$tdataCopy_of_controller1["Team_Leader_Number"] = $fdata;
//	mydata
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mydata";
	$fdata["GoodName"] = "mydata";
	$fdata["ownerTable"] = "controller";
	$fdata["Label"] = GetFieldLabel("Copy_of_controller1","mydata"); 
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
	$fdata["FullName"] = "controller.mydata";
	
		
		
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

	

	
	$tdataCopy_of_controller1["mydata"] = $fdata;
//	Mng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Mng";
	$fdata["GoodName"] = "Mng";
	$fdata["ownerTable"] = "team_leader";
	$fdata["Label"] = GetFieldLabel("Copy_of_controller1","Mng"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Team_Leader_Name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "team_leader.Team_Leader_Name";
	
		
		
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

	

	
	$tdataCopy_of_controller1["Mng"] = $fdata;

	
$tables_data["Copy of controller1"]=&$tdataCopy_of_controller1;
$field_labels["Copy_of_controller1"] = &$fieldLabelsCopy_of_controller1;
$fieldToolTips["Copy of controller1"] = &$fieldToolTipsCopy_of_controller1;
$page_titles["Copy_of_controller1"] = &$pageTitlesCopy_of_controller1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Copy of controller1"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Copy of controller1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Copy_of_controller1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "controller.ID,  controller.Sales_Coordinator_Name,  controller.Sales_Coordinator_Number,  controller.Team_Leader_Name,  controller.Team_Leader_Number,  controller.mydata,  team_leader.Team_Leader_Name AS Mng";
$proto0["m_strFrom"] = "FROM controller  , team_leader";
$proto0["m_strWhere"] = "controller.Sales_Coordinator_Name = team_leader.Sales_Coordinator_Name";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "controller.Sales_Coordinator_Name = team_leader.Sales_Coordinator_Name";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Sales_Coordinator_Name",
	"m_strTable" => "controller",
	"m_srcTableName" => "Copy of controller1"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "= team_leader.Sales_Coordinator_Name";
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
	"m_srcTableName" => "Copy of controller1"
));

$proto5["m_sql"] = "controller.ID";
$proto5["m_srcTableName"] = "Copy of controller1";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Sales_Coordinator_Name",
	"m_strTable" => "controller",
	"m_srcTableName" => "Copy of controller1"
));

$proto7["m_sql"] = "controller.Sales_Coordinator_Name";
$proto7["m_srcTableName"] = "Copy of controller1";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Sales_Coordinator_Number",
	"m_strTable" => "controller",
	"m_srcTableName" => "Copy of controller1"
));

$proto9["m_sql"] = "controller.Sales_Coordinator_Number";
$proto9["m_srcTableName"] = "Copy of controller1";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Team_Leader_Name",
	"m_strTable" => "controller",
	"m_srcTableName" => "Copy of controller1"
));

$proto11["m_sql"] = "controller.Team_Leader_Name";
$proto11["m_srcTableName"] = "Copy of controller1";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Team_Leader_Number",
	"m_strTable" => "controller",
	"m_srcTableName" => "Copy of controller1"
));

$proto13["m_sql"] = "controller.Team_Leader_Number";
$proto13["m_srcTableName"] = "Copy of controller1";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "mydata",
	"m_strTable" => "controller",
	"m_srcTableName" => "Copy of controller1"
));

$proto15["m_sql"] = "controller.mydata";
$proto15["m_srcTableName"] = "Copy of controller1";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Team_Leader_Name",
	"m_strTable" => "team_leader",
	"m_srcTableName" => "Copy of controller1"
));

$proto17["m_sql"] = "team_leader.Team_Leader_Name";
$proto17["m_srcTableName"] = "Copy of controller1";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Mng";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "controller";
$proto20["m_srcTableName"] = "Copy of controller1";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "ID";
$proto20["m_columns"][] = "Sales_Coordinator_Name";
$proto20["m_columns"][] = "Sales_Coordinator_Number";
$proto20["m_columns"][] = "Team_Leader_Name";
$proto20["m_columns"][] = "Team_Leader_Number";
$proto20["m_columns"][] = "mydata";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "controller";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "Copy of controller1";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
												$proto23=array();
$proto23["m_link"] = "SQLL_CROSSJOIN";
			$proto24=array();
$proto24["m_strName"] = "team_leader";
$proto24["m_srcTableName"] = "Copy of controller1";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "ID";
$proto24["m_columns"][] = "Team_Leader_Name";
$proto24["m_columns"][] = "POS_Number";
$proto24["m_columns"][] = "Sales_Coordinator_Name";
$proto24["m_columns"][] = "mydata";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "team_leader";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "Copy of controller1";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Copy of controller1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Copy_of_controller1 = createSqlQuery_Copy_of_controller1();


	
							
	
$tdataCopy_of_controller1[".sqlquery"] = $queryData_Copy_of_controller1;

$tableEvents["Copy of controller1"] = new eventsBase;
$tdataCopy_of_controller1[".hasEvents"] = false;

?>