<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEffectiveness = array();	
	$tdataEffectiveness[".truncateText"] = true;
	$tdataEffectiveness[".NumberOfChars"] = 80; 
	$tdataEffectiveness[".ShortName"] = "Effectiveness";
	$tdataEffectiveness[".OwnerID"] = "";
	$tdataEffectiveness[".OriginalTable"] = "activators";

//	field labels
$fieldLabelsEffectiveness = array();
$fieldToolTipsEffectiveness = array();
$pageTitlesEffectiveness = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEffectiveness["English"] = array();
	$fieldToolTipsEffectiveness["English"] = array();
	$pageTitlesEffectiveness["English"] = array();
	$fieldLabelsEffectiveness["English"]["Manager_Name"] = "Manager Name";
	$fieldToolTipsEffectiveness["English"]["Manager_Name"] = "";
	$fieldLabelsEffectiveness["English"]["Total_Visits"] = "Total Visits";
	$fieldToolTipsEffectiveness["English"]["Total_Visits"] = "";
	$fieldLabelsEffectiveness["English"]["Visits_with_Sales"] = "Visits With Sales";
	$fieldToolTipsEffectiveness["English"]["Visits_with_Sales"] = "";
	$fieldLabelsEffectiveness["English"]["MY_Sales"] = "MY Sales";
	$fieldToolTipsEffectiveness["English"]["MY_Sales"] = "";
	$fieldLabelsEffectiveness["English"]["Date"] = "Date";
	$fieldToolTipsEffectiveness["English"]["Date"] = "";
	$fieldLabelsEffectiveness["English"]["Percent"] = "Percent";
	$fieldToolTipsEffectiveness["English"]["Percent"] = "";
	if (count($fieldToolTipsEffectiveness["English"]))
		$tdataEffectiveness[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEffectiveness[""] = array();
	$fieldToolTipsEffectiveness[""] = array();
	$pageTitlesEffectiveness[""] = array();
	if (count($fieldToolTipsEffectiveness[""]))
		$tdataEffectiveness[".isUseToolTips"] = true;
}
	
	
	$tdataEffectiveness[".NCSearch"] = true;



$tdataEffectiveness[".shortTableName"] = "Effectiveness";
$tdataEffectiveness[".nSecOptions"] = 0;
$tdataEffectiveness[".recsPerRowList"] = 1;
$tdataEffectiveness[".mainTableOwnerID"] = "";
$tdataEffectiveness[".moveNext"] = 1;
$tdataEffectiveness[".nType"] = 1;

$tdataEffectiveness[".strOriginalTableName"] = "activators";




$tdataEffectiveness[".showAddInPopup"] = false;

$tdataEffectiveness[".showEditInPopup"] = false;

$tdataEffectiveness[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEffectiveness[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEffectiveness[".fieldsForRegister"] = array();

$tdataEffectiveness[".listAjax"] = false;

	$tdataEffectiveness[".audit"] = false;

	$tdataEffectiveness[".locking"] = false;


$tdataEffectiveness[".list"] = true;



$tdataEffectiveness[".exportTo"] = true;



$tdataEffectiveness[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdataEffectiveness[".searchSaving"] = false;
//

$tdataEffectiveness[".showSearchPanel"] = true;
		$tdataEffectiveness[".flexibleSearch"] = true;		

if (isMobile())
	$tdataEffectiveness[".isUseAjaxSuggest"] = false;
else 
	$tdataEffectiveness[".isUseAjaxSuggest"] = true;

$tdataEffectiveness[".rowHighlite"] = true;



$tdataEffectiveness[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEffectiveness[".isUseTimeForSearch"] = false;





$tdataEffectiveness[".allSearchFields"] = array();
$tdataEffectiveness[".filterFields"] = array();
$tdataEffectiveness[".requiredSearchFields"] = array();

$tdataEffectiveness[".allSearchFields"][] = "Manager_Name";
	$tdataEffectiveness[".allSearchFields"][] = "Date";
	$tdataEffectiveness[".allSearchFields"][] = "Total_Visits";
	$tdataEffectiveness[".allSearchFields"][] = "Visits_with_Sales";
	$tdataEffectiveness[".allSearchFields"][] = "MY_Sales";
	$tdataEffectiveness[".allSearchFields"][] = "Percent";
	

$tdataEffectiveness[".googleLikeFields"] = array();
$tdataEffectiveness[".googleLikeFields"][] = "Manager_Name";
$tdataEffectiveness[".googleLikeFields"][] = "Date";
$tdataEffectiveness[".googleLikeFields"][] = "Total_Visits";
$tdataEffectiveness[".googleLikeFields"][] = "Visits_with_Sales";
$tdataEffectiveness[".googleLikeFields"][] = "MY_Sales";
$tdataEffectiveness[".googleLikeFields"][] = "Percent";


$tdataEffectiveness[".advSearchFields"] = array();
$tdataEffectiveness[".advSearchFields"][] = "Manager_Name";
$tdataEffectiveness[".advSearchFields"][] = "Date";
$tdataEffectiveness[".advSearchFields"][] = "Total_Visits";
$tdataEffectiveness[".advSearchFields"][] = "Visits_with_Sales";
$tdataEffectiveness[".advSearchFields"][] = "MY_Sales";
$tdataEffectiveness[".advSearchFields"][] = "Percent";

$tdataEffectiveness[".tableType"] = "list";

$tdataEffectiveness[".printerPageOrientation"] = 0;
$tdataEffectiveness[".nPrinterPageScale"] = 100;

$tdataEffectiveness[".nPrinterSplitRecords"] = 40;

$tdataEffectiveness[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataEffectiveness[".pageSize"] = 15;

$tdataEffectiveness[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEffectiveness[".strOrderBy"] = $tstrOrderBy;

$tdataEffectiveness[".orderindexes"] = array();

$tdataEffectiveness[".sqlHead"] = "SELECT Manager_Name,  `Date`,  COUNT(Activator_Number) AS Total_Visits,  SUM(`Sale` = 'Yes') AS Visits_with_Sales,  SUM(`My_Transfer` = 'Yes') AS MY_Sales,  'Percent%' AS `Percent`";
$tdataEffectiveness[".sqlFrom"] = "FROM pos_visits";
$tdataEffectiveness[".sqlWhereExpr"] = "";
$tdataEffectiveness[".sqlTail"] = "GROUP BY `Date`, Manager_Number";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEffectiveness[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEffectiveness[".arrGroupsPerPage"] = $arrGPP;

$tdataEffectiveness[".highlightSearchResults"] = true;

$tableKeysEffectiveness = array();
$tdataEffectiveness[".Keys"] = $tableKeysEffectiveness;

$tdataEffectiveness[".listFields"] = array();
$tdataEffectiveness[".listFields"][] = "Manager_Name";
$tdataEffectiveness[".listFields"][] = "Date";
$tdataEffectiveness[".listFields"][] = "Total_Visits";
$tdataEffectiveness[".listFields"][] = "Visits_with_Sales";
$tdataEffectiveness[".listFields"][] = "MY_Sales";
$tdataEffectiveness[".listFields"][] = "Percent";

$tdataEffectiveness[".hideMobileList"] = array();


$tdataEffectiveness[".viewFields"] = array();
$tdataEffectiveness[".viewFields"][] = "Manager_Name";
$tdataEffectiveness[".viewFields"][] = "Date";
$tdataEffectiveness[".viewFields"][] = "Total_Visits";
$tdataEffectiveness[".viewFields"][] = "Visits_with_Sales";
$tdataEffectiveness[".viewFields"][] = "MY_Sales";
$tdataEffectiveness[".viewFields"][] = "Percent";

$tdataEffectiveness[".addFields"] = array();
$tdataEffectiveness[".addFields"][] = "Manager_Name";

$tdataEffectiveness[".inlineAddFields"] = array();
$tdataEffectiveness[".inlineAddFields"][] = "Manager_Name";

$tdataEffectiveness[".editFields"] = array();
$tdataEffectiveness[".editFields"][] = "Manager_Name";

$tdataEffectiveness[".inlineEditFields"] = array();
$tdataEffectiveness[".inlineEditFields"][] = "Manager_Name";

$tdataEffectiveness[".exportFields"] = array();
$tdataEffectiveness[".exportFields"][] = "Manager_Name";
$tdataEffectiveness[".exportFields"][] = "Date";
$tdataEffectiveness[".exportFields"][] = "Total_Visits";
$tdataEffectiveness[".exportFields"][] = "Visits_with_Sales";
$tdataEffectiveness[".exportFields"][] = "MY_Sales";
$tdataEffectiveness[".exportFields"][] = "Percent";

$tdataEffectiveness[".importFields"] = array();
$tdataEffectiveness[".importFields"][] = "Manager_Name";
$tdataEffectiveness[".importFields"][] = "Date";
$tdataEffectiveness[".importFields"][] = "Total_Visits";
$tdataEffectiveness[".importFields"][] = "Visits_with_Sales";
$tdataEffectiveness[".importFields"][] = "MY_Sales";
$tdataEffectiveness[".importFields"][] = "Percent";

$tdataEffectiveness[".printFields"] = array();
$tdataEffectiveness[".printFields"][] = "Manager_Name";
$tdataEffectiveness[".printFields"][] = "Date";
$tdataEffectiveness[".printFields"][] = "Total_Visits";
$tdataEffectiveness[".printFields"][] = "Visits_with_Sales";
$tdataEffectiveness[".printFields"][] = "MY_Sales";
$tdataEffectiveness[".printFields"][] = "Percent";

//	Manager_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Manager_Name";
	$fdata["GoodName"] = "Manager_Name";
	$fdata["ownerTable"] = "pos_visits";
	$fdata["Label"] = GetFieldLabel("Effectiveness","Manager_Name"); 
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

	

	
	$tdataEffectiveness["Manager_Name"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "pos_visits";
	$fdata["Label"] = GetFieldLabel("Effectiveness","Date"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Date`";
	
		
		
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

	

	
	$tdataEffectiveness["Date"] = $fdata;
//	Total_Visits
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Total_Visits";
	$fdata["GoodName"] = "Total_Visits";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Effectiveness","Total_Visits"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Total_Visits"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(Activator_Number)";
	
		
		
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

	

	
	$tdataEffectiveness["Total_Visits"] = $fdata;
//	Visits_with_Sales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Visits_with_Sales";
	$fdata["GoodName"] = "Visits_with_Sales";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Effectiveness","Visits_with_Sales"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Visits_with_Sales"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(`Sale` = 'Yes')";
	
		
		
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

	

	
	$tdataEffectiveness["Visits_with_Sales"] = $fdata;
//	MY_Sales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MY_Sales";
	$fdata["GoodName"] = "MY_Sales";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Effectiveness","MY_Sales"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MY_Sales"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(`My_Transfer` = 'Yes')";
	
		
		
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

	

	
	$tdataEffectiveness["MY_Sales"] = $fdata;
//	Percent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Percent";
	$fdata["GoodName"] = "Percent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Effectiveness","Percent"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Percent"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "'Percent%'";
	
		
		
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

	

	
	$tdataEffectiveness["Percent"] = $fdata;

	
$tables_data["Effectiveness"]=&$tdataEffectiveness;
$field_labels["Effectiveness"] = &$fieldLabelsEffectiveness;
$fieldToolTips["Effectiveness"] = &$fieldToolTipsEffectiveness;
$page_titles["Effectiveness"] = &$pageTitlesEffectiveness;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Effectiveness"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Effectiveness"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Effectiveness()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Manager_Name,  `Date`,  COUNT(Activator_Number) AS Total_Visits,  SUM(`Sale` = 'Yes') AS Visits_with_Sales,  SUM(`My_Transfer` = 'Yes') AS MY_Sales,  'Percent%' AS `Percent`";
$proto0["m_strFrom"] = "FROM pos_visits";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY `Date`, Manager_Number";
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
	"m_strName" => "Manager_Name",
	"m_strTable" => "pos_visits",
	"m_srcTableName" => "Effectiveness"
));

$proto5["m_sql"] = "Manager_Name";
$proto5["m_srcTableName"] = "Effectiveness";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "pos_visits",
	"m_srcTableName" => "Effectiveness"
));

$proto7["m_sql"] = "`Date`";
$proto7["m_srcTableName"] = "Effectiveness";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$proto10=array();
$proto10["m_functiontype"] = "SQLF_COUNT";
$proto10["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "Activator_Number",
	"m_strTable" => "pos_visits",
	"m_srcTableName" => "Effectiveness"
));

$proto10["m_arguments"][]=$obj;
$proto10["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto10);

$proto9["m_sql"] = "COUNT(Activator_Number)";
$proto9["m_srcTableName"] = "Effectiveness";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "Total_Visits";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_SUM";
$proto13["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`Sale` = 'Yes'"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "SUM(`Sale` = 'Yes')";
$proto12["m_srcTableName"] = "Effectiveness";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "Visits_with_Sales";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$proto16=array();
$proto16["m_functiontype"] = "SQLF_SUM";
$proto16["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`My_Transfer` = 'Yes'"
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "SUM(`My_Transfer` = 'Yes')";
$proto15["m_srcTableName"] = "Effectiveness";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "MY_Sales";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'Percent%'"
));

$proto18["m_sql"] = "'Percent%'";
$proto18["m_srcTableName"] = "Effectiveness";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "Percent";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "pos_visits";
$proto21["m_srcTableName"] = "Effectiveness";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ID";
$proto21["m_columns"][] = "pos_type";
$proto21["m_columns"][] = "Manager_Name";
$proto21["m_columns"][] = "Manager_Number";
$proto21["m_columns"][] = "Activator_Name";
$proto21["m_columns"][] = "Activator_Number";
$proto21["m_columns"][] = "business_name";
$proto21["m_columns"][] = "altenative_number";
$proto21["m_columns"][] = "Area";
$proto21["m_columns"][] = "Date";
$proto21["m_columns"][] = "last_chekin";
$proto21["m_columns"][] = "Sale";
$proto21["m_columns"][] = "Transfer_Amount";
$proto21["m_columns"][] = "Transfer_From";
$proto21["m_columns"][] = "Transfer_Date";
$proto21["m_columns"][] = "My_Transfer";
$proto21["m_columns"][] = "mydata";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "pos_visits";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "Effectiveness";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "pos_visits",
	"m_srcTableName" => "Effectiveness"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "Manager_Number",
	"m_strTable" => "pos_visits",
	"m_srcTableName" => "Effectiveness"
));

$proto26["m_column"]=$obj;
$obj = new SQLGroupByItem($proto26);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Effectiveness";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Effectiveness = createSqlQuery_Effectiveness();


	
						
	
$tdataEffectiveness[".sqlquery"] = $queryData_Effectiveness;

$tableEvents["Effectiveness"] = new eventsBase;
$tdataEffectiveness[".hasEvents"] = false;

?>