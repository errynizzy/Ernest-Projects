<?php
require_once(getabspath("classes/cipherer.php"));




$tdataActive_Freelancers_per_TL = array();	
	$tdataActive_Freelancers_per_TL[".truncateText"] = true;
	$tdataActive_Freelancers_per_TL[".NumberOfChars"] = 80; 
	$tdataActive_Freelancers_per_TL[".ShortName"] = "Active_Freelancers_per_TL";
	$tdataActive_Freelancers_per_TL[".OwnerID"] = "";
	$tdataActive_Freelancers_per_TL[".OriginalTable"] = "activated_sims";

//	field labels
$fieldLabelsActive_Freelancers_per_TL = array();
$fieldToolTipsActive_Freelancers_per_TL = array();
$pageTitlesActive_Freelancers_per_TL = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsActive_Freelancers_per_TL["English"] = array();
	$fieldToolTipsActive_Freelancers_per_TL["English"] = array();
	$pageTitlesActive_Freelancers_per_TL["English"] = array();
	$fieldLabelsActive_Freelancers_per_TL["English"]["Team_Leader"] = "Team Leader";
	$fieldToolTipsActive_Freelancers_per_TL["English"]["Team_Leader"] = "";
	$fieldLabelsActive_Freelancers_per_TL["English"]["Manager_Name"] = "Manager Name";
	$fieldToolTipsActive_Freelancers_per_TL["English"]["Manager_Name"] = "";
	$fieldLabelsActive_Freelancers_per_TL["English"]["Title"] = "Title";
	$fieldToolTipsActive_Freelancers_per_TL["English"]["Title"] = "";
	$fieldLabelsActive_Freelancers_per_TL["English"]["Date"] = "Date";
	$fieldToolTipsActive_Freelancers_per_TL["English"]["Date"] = "";
	$fieldLabelsActive_Freelancers_per_TL["English"]["Active_FL"] = "Active FL";
	$fieldToolTipsActive_Freelancers_per_TL["English"]["Active_FL"] = "";
	if (count($fieldToolTipsActive_Freelancers_per_TL["English"]))
		$tdataActive_Freelancers_per_TL[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsActive_Freelancers_per_TL[""] = array();
	$fieldToolTipsActive_Freelancers_per_TL[""] = array();
	$pageTitlesActive_Freelancers_per_TL[""] = array();
	if (count($fieldToolTipsActive_Freelancers_per_TL[""]))
		$tdataActive_Freelancers_per_TL[".isUseToolTips"] = true;
}
	
	
	$tdataActive_Freelancers_per_TL[".NCSearch"] = true;



$tdataActive_Freelancers_per_TL[".shortTableName"] = "Active_Freelancers_per_TL";
$tdataActive_Freelancers_per_TL[".nSecOptions"] = 0;
$tdataActive_Freelancers_per_TL[".recsPerRowList"] = 1;
$tdataActive_Freelancers_per_TL[".mainTableOwnerID"] = "";
$tdataActive_Freelancers_per_TL[".moveNext"] = 1;
$tdataActive_Freelancers_per_TL[".nType"] = 1;

$tdataActive_Freelancers_per_TL[".strOriginalTableName"] = "activated_sims";




$tdataActive_Freelancers_per_TL[".showAddInPopup"] = false;

$tdataActive_Freelancers_per_TL[".showEditInPopup"] = false;

$tdataActive_Freelancers_per_TL[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataActive_Freelancers_per_TL[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataActive_Freelancers_per_TL[".fieldsForRegister"] = array();

$tdataActive_Freelancers_per_TL[".listAjax"] = false;

	$tdataActive_Freelancers_per_TL[".audit"] = false;

	$tdataActive_Freelancers_per_TL[".locking"] = false;


$tdataActive_Freelancers_per_TL[".list"] = true;

$tdataActive_Freelancers_per_TL[".inlineAdd"] = true;

$tdataActive_Freelancers_per_TL[".import"] = true;

$tdataActive_Freelancers_per_TL[".exportTo"] = true;

$tdataActive_Freelancers_per_TL[".printFriendly"] = true;


$tdataActive_Freelancers_per_TL[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataActive_Freelancers_per_TL[".searchSaving"] = false;
//

$tdataActive_Freelancers_per_TL[".showSearchPanel"] = true;
		$tdataActive_Freelancers_per_TL[".flexibleSearch"] = true;		

if (isMobile())
	$tdataActive_Freelancers_per_TL[".isUseAjaxSuggest"] = false;
else 
	$tdataActive_Freelancers_per_TL[".isUseAjaxSuggest"] = true;

$tdataActive_Freelancers_per_TL[".rowHighlite"] = true;



$tdataActive_Freelancers_per_TL[".addPageEvents"] = false;

// use timepicker for search panel
$tdataActive_Freelancers_per_TL[".isUseTimeForSearch"] = false;





$tdataActive_Freelancers_per_TL[".allSearchFields"] = array();
$tdataActive_Freelancers_per_TL[".filterFields"] = array();
$tdataActive_Freelancers_per_TL[".requiredSearchFields"] = array();

$tdataActive_Freelancers_per_TL[".allSearchFields"][] = "Team_Leader";
	$tdataActive_Freelancers_per_TL[".allSearchFields"][] = "Manager_Name";
	$tdataActive_Freelancers_per_TL[".allSearchFields"][] = "Title";
	$tdataActive_Freelancers_per_TL[".allSearchFields"][] = "Date";
	$tdataActive_Freelancers_per_TL[".allSearchFields"][] = "Active_FL";
	

$tdataActive_Freelancers_per_TL[".googleLikeFields"] = array();
$tdataActive_Freelancers_per_TL[".googleLikeFields"][] = "Team_Leader";
$tdataActive_Freelancers_per_TL[".googleLikeFields"][] = "Manager_Name";
$tdataActive_Freelancers_per_TL[".googleLikeFields"][] = "Title";
$tdataActive_Freelancers_per_TL[".googleLikeFields"][] = "Date";
$tdataActive_Freelancers_per_TL[".googleLikeFields"][] = "Active_FL";


$tdataActive_Freelancers_per_TL[".advSearchFields"] = array();
$tdataActive_Freelancers_per_TL[".advSearchFields"][] = "Team_Leader";
$tdataActive_Freelancers_per_TL[".advSearchFields"][] = "Manager_Name";
$tdataActive_Freelancers_per_TL[".advSearchFields"][] = "Title";
$tdataActive_Freelancers_per_TL[".advSearchFields"][] = "Date";
$tdataActive_Freelancers_per_TL[".advSearchFields"][] = "Active_FL";

$tdataActive_Freelancers_per_TL[".tableType"] = "list";

$tdataActive_Freelancers_per_TL[".printerPageOrientation"] = 0;
$tdataActive_Freelancers_per_TL[".nPrinterPageScale"] = 100;

$tdataActive_Freelancers_per_TL[".nPrinterSplitRecords"] = 40;

$tdataActive_Freelancers_per_TL[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataActive_Freelancers_per_TL[".pageSize"] = 20;

$tdataActive_Freelancers_per_TL[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataActive_Freelancers_per_TL[".strOrderBy"] = $tstrOrderBy;

$tdataActive_Freelancers_per_TL[".orderindexes"] = array();

$tdataActive_Freelancers_per_TL[".sqlHead"] = "SELECT simcards_batches.`Team_Leader` , Manager_Name, Manager_Title as Title, Event_date as Date, count( DISTINCT(simcards_batches.Activator_Number) ) AS Active_FL";
$tdataActive_Freelancers_per_TL[".sqlFrom"] = "FROM `simcards_batches`";
$tdataActive_Freelancers_per_TL[".sqlWhereExpr"] = "simcards_batches.`Status` = 'Active'  AND (Manager_Title = 'SC' OR Manager_Title = 'D/S')";
$tdataActive_Freelancers_per_TL[".sqlTail"] = "GROUP BY  simcards_batches.`Team_Leader` , Event_date";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataActive_Freelancers_per_TL[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataActive_Freelancers_per_TL[".arrGroupsPerPage"] = $arrGPP;

$tdataActive_Freelancers_per_TL[".highlightSearchResults"] = true;

$tableKeysActive_Freelancers_per_TL = array();
$tdataActive_Freelancers_per_TL[".Keys"] = $tableKeysActive_Freelancers_per_TL;

$tdataActive_Freelancers_per_TL[".listFields"] = array();
$tdataActive_Freelancers_per_TL[".listFields"][] = "Team_Leader";
$tdataActive_Freelancers_per_TL[".listFields"][] = "Manager_Name";
$tdataActive_Freelancers_per_TL[".listFields"][] = "Title";
$tdataActive_Freelancers_per_TL[".listFields"][] = "Date";
$tdataActive_Freelancers_per_TL[".listFields"][] = "Active_FL";

$tdataActive_Freelancers_per_TL[".hideMobileList"] = array();


$tdataActive_Freelancers_per_TL[".viewFields"] = array();
$tdataActive_Freelancers_per_TL[".viewFields"][] = "Team_Leader";
$tdataActive_Freelancers_per_TL[".viewFields"][] = "Manager_Name";
$tdataActive_Freelancers_per_TL[".viewFields"][] = "Title";
$tdataActive_Freelancers_per_TL[".viewFields"][] = "Date";
$tdataActive_Freelancers_per_TL[".viewFields"][] = "Active_FL";

$tdataActive_Freelancers_per_TL[".addFields"] = array();

$tdataActive_Freelancers_per_TL[".inlineAddFields"] = array();

$tdataActive_Freelancers_per_TL[".editFields"] = array();

$tdataActive_Freelancers_per_TL[".inlineEditFields"] = array();

$tdataActive_Freelancers_per_TL[".exportFields"] = array();
$tdataActive_Freelancers_per_TL[".exportFields"][] = "Team_Leader";
$tdataActive_Freelancers_per_TL[".exportFields"][] = "Manager_Name";
$tdataActive_Freelancers_per_TL[".exportFields"][] = "Title";
$tdataActive_Freelancers_per_TL[".exportFields"][] = "Date";
$tdataActive_Freelancers_per_TL[".exportFields"][] = "Active_FL";

$tdataActive_Freelancers_per_TL[".importFields"] = array();
$tdataActive_Freelancers_per_TL[".importFields"][] = "Team_Leader";
$tdataActive_Freelancers_per_TL[".importFields"][] = "Manager_Name";
$tdataActive_Freelancers_per_TL[".importFields"][] = "Title";
$tdataActive_Freelancers_per_TL[".importFields"][] = "Date";
$tdataActive_Freelancers_per_TL[".importFields"][] = "Active_FL";

$tdataActive_Freelancers_per_TL[".printFields"] = array();
$tdataActive_Freelancers_per_TL[".printFields"][] = "Team_Leader";
$tdataActive_Freelancers_per_TL[".printFields"][] = "Manager_Name";
$tdataActive_Freelancers_per_TL[".printFields"][] = "Title";
$tdataActive_Freelancers_per_TL[".printFields"][] = "Date";
$tdataActive_Freelancers_per_TL[".printFields"][] = "Active_FL";

//	Team_Leader
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Team_Leader";
	$fdata["GoodName"] = "Team_Leader";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Active_Freelancers_per_TL","Team_Leader"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Team_Leader"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "simcards_batches.`Team_Leader`";
	
		
		
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

	

	
	$tdataActive_Freelancers_per_TL["Team_Leader"] = $fdata;
//	Manager_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Manager_Name";
	$fdata["GoodName"] = "Manager_Name";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Active_Freelancers_per_TL","Manager_Name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdataActive_Freelancers_per_TL["Manager_Name"] = $fdata;
//	Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Title";
	$fdata["GoodName"] = "Title";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Active_Freelancers_per_TL","Title"); 
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

	

	
	$tdataActive_Freelancers_per_TL["Title"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Active_Freelancers_per_TL","Date"); 
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

	

	
	$tdataActive_Freelancers_per_TL["Date"] = $fdata;
//	Active_FL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Active_FL";
	$fdata["GoodName"] = "Active_FL";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Active_Freelancers_per_TL","Active_FL"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Active_FL"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "count( DISTINCT(simcards_batches.Activator_Number) )";
	
		
		
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

	

	
	$tdataActive_Freelancers_per_TL["Active_FL"] = $fdata;

	
$tables_data["Active Freelancers per TL"]=&$tdataActive_Freelancers_per_TL;
$field_labels["Active_Freelancers_per_TL"] = &$fieldLabelsActive_Freelancers_per_TL;
$fieldToolTips["Active Freelancers per TL"] = &$fieldToolTipsActive_Freelancers_per_TL;
$page_titles["Active_Freelancers_per_TL"] = &$pageTitlesActive_Freelancers_per_TL;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Active Freelancers per TL"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Active Freelancers per TL"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Active_Freelancers_per_TL()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "simcards_batches.`Team_Leader` , Manager_Name, Manager_Title as Title, Event_date as Date, count( DISTINCT(simcards_batches.Activator_Number) ) AS Active_FL";
$proto0["m_strFrom"] = "FROM `simcards_batches`";
$proto0["m_strWhere"] = "simcards_batches.`Status` = 'Active'  AND (Manager_Title = 'SC' OR Manager_Title = 'D/S')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY  simcards_batches.`Team_Leader` , Event_date";
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
	"m_srcTableName" => "Active Freelancers per TL"
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
	"m_srcTableName" => "Active Freelancers per TL"
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
	"m_srcTableName" => "Active Freelancers per TL"
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
	"m_strName" => "Team_Leader",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Active Freelancers per TL"
));

$proto13["m_sql"] = "simcards_batches.`Team_Leader`";
$proto13["m_srcTableName"] = "Active Freelancers per TL";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Name",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Active Freelancers per TL"
));

$proto15["m_sql"] = "Manager_Name";
$proto15["m_srcTableName"] = "Active Freelancers per TL";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Active Freelancers per TL"
));

$proto17["m_sql"] = "Manager_Title";
$proto17["m_srcTableName"] = "Active Freelancers per TL";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Title";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_date",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Active Freelancers per TL"
));

$proto19["m_sql"] = "Event_date";
$proto19["m_srcTableName"] = "Active Freelancers per TL";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "Date";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_COUNT";
$proto22["m_arguments"] = array();
						$proto23=array();
$proto23["m_functiontype"] = "SQLF_CUSTOM";
$proto23["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "simcards_batches.Activator_Number"
));

$proto23["m_arguments"][]=$obj;
$proto23["m_strFunctionName"] = "DISTINCT";
$obj = new SQLFunctionCall($proto23);

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "count";
$obj = new SQLFunctionCall($proto22);

$proto21["m_sql"] = "count( DISTINCT(simcards_batches.Activator_Number) )";
$proto21["m_srcTableName"] = "Active Freelancers per TL";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "Active_FL";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "simcards_batches";
$proto26["m_srcTableName"] = "Active Freelancers per TL";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "ID";
$proto26["m_columns"][] = "batch_name";
$proto26["m_columns"][] = "ICCID";
$proto26["m_columns"][] = "Status";
$proto26["m_columns"][] = "Manager_Name";
$proto26["m_columns"][] = "Manager_Title";
$proto26["m_columns"][] = "Activator_Number";
$proto26["m_columns"][] = "Activator_Name";
$proto26["m_columns"][] = "Team_Leader";
$proto26["m_columns"][] = "Event_date";
$proto26["m_columns"][] = "time";
$proto26["m_columns"][] = "Active_MSISDN";
$proto26["m_columns"][] = "New_MSISDN";
$proto26["m_columns"][] = "Swap_Date";
$proto26["m_columns"][] = "Airtime_transered";
$proto26["m_columns"][] = "Transfer_date";
$proto26["m_columns"][] = "Activation_Commission";
$proto26["m_columns"][] = "Form_Commission";
$proto26["m_columns"][] = "Form_Paid_Date";
$proto26["m_columns"][] = "Form_Returned";
$proto26["m_columns"][] = "Form_Status";
$proto26["m_columns"][] = "Form_Date";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "`simcards_batches`";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "Active Freelancers per TL";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "Team_Leader",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Active Freelancers per TL"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "Event_date",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Active Freelancers per TL"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Active Freelancers per TL";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Active_Freelancers_per_TL = createSqlQuery_Active_Freelancers_per_TL();


	
					
	
$tdataActive_Freelancers_per_TL[".sqlquery"] = $queryData_Active_Freelancers_per_TL;

$tableEvents["Active Freelancers per TL"] = new eventsBase;
$tdataActive_Freelancers_per_TL[".hasEvents"] = false;

?>