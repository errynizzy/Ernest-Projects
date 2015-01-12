<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEfficiency = array();	
	$tdataEfficiency[".truncateText"] = true;
	$tdataEfficiency[".NumberOfChars"] = 80; 
	$tdataEfficiency[".ShortName"] = "Efficiency";
	$tdataEfficiency[".OwnerID"] = "";
	$tdataEfficiency[".OriginalTable"] = "activators";

//	field labels
$fieldLabelsEfficiency = array();
$fieldToolTipsEfficiency = array();
$pageTitlesEfficiency = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEfficiency["English"] = array();
	$fieldToolTipsEfficiency["English"] = array();
	$pageTitlesEfficiency["English"] = array();
	$fieldLabelsEfficiency["English"]["Manager_Name"] = "Manager Name";
	$fieldToolTipsEfficiency["English"]["Manager_Name"] = "";
	$fieldLabelsEfficiency["English"]["Date"] = "Date";
	$fieldToolTipsEfficiency["English"]["Date"] = "";
	$fieldLabelsEfficiency["English"]["Actual_Visits"] = "Actual Visits";
	$fieldToolTipsEfficiency["English"]["Actual_Visits"] = "";
	$fieldLabelsEfficiency["English"]["Planned_Visits"] = "Planned Visits";
	$fieldToolTipsEfficiency["English"]["Planned_Visits"] = "";
	$fieldLabelsEfficiency["English"]["Percent"] = "Percent";
	$fieldToolTipsEfficiency["English"]["Percent"] = "";
	if (count($fieldToolTipsEfficiency["English"]))
		$tdataEfficiency[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEfficiency[""] = array();
	$fieldToolTipsEfficiency[""] = array();
	$pageTitlesEfficiency[""] = array();
	if (count($fieldToolTipsEfficiency[""]))
		$tdataEfficiency[".isUseToolTips"] = true;
}
	
	
	$tdataEfficiency[".NCSearch"] = true;



$tdataEfficiency[".shortTableName"] = "Efficiency";
$tdataEfficiency[".nSecOptions"] = 0;
$tdataEfficiency[".recsPerRowList"] = 1;
$tdataEfficiency[".mainTableOwnerID"] = "";
$tdataEfficiency[".moveNext"] = 1;
$tdataEfficiency[".nType"] = 1;

$tdataEfficiency[".strOriginalTableName"] = "activators";




$tdataEfficiency[".showAddInPopup"] = false;

$tdataEfficiency[".showEditInPopup"] = false;

$tdataEfficiency[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEfficiency[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEfficiency[".fieldsForRegister"] = array();

$tdataEfficiency[".listAjax"] = false;

	$tdataEfficiency[".audit"] = false;

	$tdataEfficiency[".locking"] = false;


$tdataEfficiency[".list"] = true;



$tdataEfficiency[".exportTo"] = true;



$tdataEfficiency[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdataEfficiency[".searchSaving"] = false;
//

$tdataEfficiency[".showSearchPanel"] = true;
		$tdataEfficiency[".flexibleSearch"] = true;		

if (isMobile())
	$tdataEfficiency[".isUseAjaxSuggest"] = false;
else 
	$tdataEfficiency[".isUseAjaxSuggest"] = true;

$tdataEfficiency[".rowHighlite"] = true;



$tdataEfficiency[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEfficiency[".isUseTimeForSearch"] = false;





$tdataEfficiency[".allSearchFields"] = array();
$tdataEfficiency[".filterFields"] = array();
$tdataEfficiency[".requiredSearchFields"] = array();

$tdataEfficiency[".allSearchFields"][] = "Manager_Name";
	$tdataEfficiency[".allSearchFields"][] = "Date";
	$tdataEfficiency[".allSearchFields"][] = "Planned_Visits";
	$tdataEfficiency[".allSearchFields"][] = "Actual_Visits";
	$tdataEfficiency[".allSearchFields"][] = "Percent";
	

$tdataEfficiency[".googleLikeFields"] = array();
$tdataEfficiency[".googleLikeFields"][] = "Manager_Name";
$tdataEfficiency[".googleLikeFields"][] = "Date";
$tdataEfficiency[".googleLikeFields"][] = "Planned_Visits";
$tdataEfficiency[".googleLikeFields"][] = "Actual_Visits";
$tdataEfficiency[".googleLikeFields"][] = "Percent";


$tdataEfficiency[".advSearchFields"] = array();
$tdataEfficiency[".advSearchFields"][] = "Manager_Name";
$tdataEfficiency[".advSearchFields"][] = "Date";
$tdataEfficiency[".advSearchFields"][] = "Planned_Visits";
$tdataEfficiency[".advSearchFields"][] = "Actual_Visits";
$tdataEfficiency[".advSearchFields"][] = "Percent";

$tdataEfficiency[".tableType"] = "list";

$tdataEfficiency[".printerPageOrientation"] = 0;
$tdataEfficiency[".nPrinterPageScale"] = 100;

$tdataEfficiency[".nPrinterSplitRecords"] = 40;

$tdataEfficiency[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataEfficiency[".pageSize"] = 15;

$tdataEfficiency[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEfficiency[".strOrderBy"] = $tstrOrderBy;

$tdataEfficiency[".orderindexes"] = array();

$tdataEfficiency[".sqlHead"] = "SELECT Manager_Name,  `Date`,  30 AS Planned_Visits,  COUNT(Activator_Number) AS Actual_Visits,  'Percent%' as Percent";
$tdataEfficiency[".sqlFrom"] = "FROM pos_visits";
$tdataEfficiency[".sqlWhereExpr"] = "";
$tdataEfficiency[".sqlTail"] = "GROUP BY `Date`, Manager_Number";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEfficiency[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEfficiency[".arrGroupsPerPage"] = $arrGPP;

$tdataEfficiency[".highlightSearchResults"] = true;

$tableKeysEfficiency = array();
$tdataEfficiency[".Keys"] = $tableKeysEfficiency;

$tdataEfficiency[".listFields"] = array();
$tdataEfficiency[".listFields"][] = "Manager_Name";
$tdataEfficiency[".listFields"][] = "Date";
$tdataEfficiency[".listFields"][] = "Planned_Visits";
$tdataEfficiency[".listFields"][] = "Actual_Visits";
$tdataEfficiency[".listFields"][] = "Percent";

$tdataEfficiency[".hideMobileList"] = array();


$tdataEfficiency[".viewFields"] = array();

$tdataEfficiency[".addFields"] = array();

$tdataEfficiency[".inlineAddFields"] = array();

$tdataEfficiency[".editFields"] = array();

$tdataEfficiency[".inlineEditFields"] = array();

$tdataEfficiency[".exportFields"] = array();
$tdataEfficiency[".exportFields"][] = "Manager_Name";
$tdataEfficiency[".exportFields"][] = "Date";
$tdataEfficiency[".exportFields"][] = "Planned_Visits";
$tdataEfficiency[".exportFields"][] = "Actual_Visits";
$tdataEfficiency[".exportFields"][] = "Percent";

$tdataEfficiency[".importFields"] = array();

$tdataEfficiency[".printFields"] = array();

//	Manager_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Manager_Name";
	$fdata["GoodName"] = "Manager_Name";
	$fdata["ownerTable"] = "pos_visits";
	$fdata["Label"] = GetFieldLabel("Efficiency","Manager_Name"); 
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

	

	
	$tdataEfficiency["Manager_Name"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "pos_visits";
	$fdata["Label"] = GetFieldLabel("Efficiency","Date"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
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

	

	
	$tdataEfficiency["Date"] = $fdata;
//	Planned_Visits
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Planned_Visits";
	$fdata["GoodName"] = "Planned_Visits";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Efficiency","Planned_Visits"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Planned_Visits"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "30";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["export"] = $vdata;
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
	
		
				
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = true;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataEfficiency["Planned_Visits"] = $fdata;
//	Actual_Visits
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Actual_Visits";
	$fdata["GoodName"] = "Actual_Visits";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Efficiency","Actual_Visits"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Actual_Visits"; 
	
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

	

	
	$tdataEfficiency["Actual_Visits"] = $fdata;
//	Percent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Percent";
	$fdata["GoodName"] = "Percent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Efficiency","Percent"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
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

	

	
	$tdataEfficiency["Percent"] = $fdata;

	
$tables_data["Efficiency"]=&$tdataEfficiency;
$field_labels["Efficiency"] = &$fieldLabelsEfficiency;
$fieldToolTips["Efficiency"] = &$fieldToolTipsEfficiency;
$page_titles["Efficiency"] = &$pageTitlesEfficiency;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Efficiency"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Efficiency"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Efficiency()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Manager_Name,  `Date`,  30 AS Planned_Visits,  COUNT(Activator_Number) AS Actual_Visits,  'Percent%' as Percent";
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
	"m_srcTableName" => "Efficiency"
));

$proto5["m_sql"] = "Manager_Name";
$proto5["m_srcTableName"] = "Efficiency";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "pos_visits",
	"m_srcTableName" => "Efficiency"
));

$proto7["m_sql"] = "`Date`";
$proto7["m_srcTableName"] = "Efficiency";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "30"
));

$proto9["m_sql"] = "30";
$proto9["m_srcTableName"] = "Efficiency";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "Planned_Visits";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$proto12=array();
$proto12["m_functiontype"] = "SQLF_COUNT";
$proto12["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "Activator_Number",
	"m_strTable" => "pos_visits",
	"m_srcTableName" => "Efficiency"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto12);

$proto11["m_sql"] = "COUNT(Activator_Number)";
$proto11["m_srcTableName"] = "Efficiency";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "Actual_Visits";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'Percent%'"
));

$proto14["m_sql"] = "'Percent%'";
$proto14["m_srcTableName"] = "Efficiency";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Percent";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "pos_visits";
$proto17["m_srcTableName"] = "Efficiency";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ID";
$proto17["m_columns"][] = "pos_type";
$proto17["m_columns"][] = "Manager_Name";
$proto17["m_columns"][] = "Manager_Number";
$proto17["m_columns"][] = "Activator_Name";
$proto17["m_columns"][] = "Activator_Number";
$proto17["m_columns"][] = "business_name";
$proto17["m_columns"][] = "altenative_number";
$proto17["m_columns"][] = "Area";
$proto17["m_columns"][] = "Date";
$proto17["m_columns"][] = "last_chekin";
$proto17["m_columns"][] = "Sale";
$proto17["m_columns"][] = "Transfer_Amount";
$proto17["m_columns"][] = "Transfer_From";
$proto17["m_columns"][] = "Transfer_Date";
$proto17["m_columns"][] = "My_Transfer";
$proto17["m_columns"][] = "mydata";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "pos_visits";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "Efficiency";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "pos_visits",
	"m_srcTableName" => "Efficiency"
));

$proto20["m_column"]=$obj;
$obj = new SQLGroupByItem($proto20);

$proto0["m_groupby"][]=$obj;
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "Manager_Number",
	"m_strTable" => "pos_visits",
	"m_srcTableName" => "Efficiency"
));

$proto22["m_column"]=$obj;
$obj = new SQLGroupByItem($proto22);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Efficiency";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Efficiency = createSqlQuery_Efficiency();


	
					
	
$tdataEfficiency[".sqlquery"] = $queryData_Efficiency;

$tableEvents["Efficiency"] = new eventsBase;
$tdataEfficiency[".hasEvents"] = false;

?>