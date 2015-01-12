<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSimcards_in_Outlets = array();	
	$tdataSimcards_in_Outlets[".truncateText"] = true;
	$tdataSimcards_in_Outlets[".NumberOfChars"] = 80; 
	$tdataSimcards_in_Outlets[".ShortName"] = "Simcards_in_Outlets";
	$tdataSimcards_in_Outlets[".OwnerID"] = "";
	$tdataSimcards_in_Outlets[".OriginalTable"] = "simcards_batches";

//	field labels
$fieldLabelsSimcards_in_Outlets = array();
$fieldToolTipsSimcards_in_Outlets = array();
$pageTitlesSimcards_in_Outlets = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSimcards_in_Outlets["English"] = array();
	$fieldToolTipsSimcards_in_Outlets["English"] = array();
	$pageTitlesSimcards_in_Outlets["English"] = array();
	$fieldLabelsSimcards_in_Outlets["English"]["pos_number"] = "Pos Number";
	$fieldToolTipsSimcards_in_Outlets["English"]["pos_number"] = "";
	$fieldLabelsSimcards_in_Outlets["English"]["supplier_name"] = "Supplier Name";
	$fieldToolTipsSimcards_in_Outlets["English"]["supplier_name"] = "";
	$fieldLabelsSimcards_in_Outlets["English"]["Total"] = "Total";
	$fieldToolTipsSimcards_in_Outlets["English"]["Total"] = "";
	if (count($fieldToolTipsSimcards_in_Outlets["English"]))
		$tdataSimcards_in_Outlets[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSimcards_in_Outlets[""] = array();
	$fieldToolTipsSimcards_in_Outlets[""] = array();
	$pageTitlesSimcards_in_Outlets[""] = array();
	if (count($fieldToolTipsSimcards_in_Outlets[""]))
		$tdataSimcards_in_Outlets[".isUseToolTips"] = true;
}
	
	
	$tdataSimcards_in_Outlets[".NCSearch"] = true;



$tdataSimcards_in_Outlets[".shortTableName"] = "Simcards_in_Outlets";
$tdataSimcards_in_Outlets[".nSecOptions"] = 0;
$tdataSimcards_in_Outlets[".recsPerRowList"] = 1;
$tdataSimcards_in_Outlets[".mainTableOwnerID"] = "";
$tdataSimcards_in_Outlets[".moveNext"] = 1;
$tdataSimcards_in_Outlets[".nType"] = 1;

$tdataSimcards_in_Outlets[".strOriginalTableName"] = "simcards_batches";

	


$tdataSimcards_in_Outlets[".showAddInPopup"] = true;

$tdataSimcards_in_Outlets[".showEditInPopup"] = true;

$tdataSimcards_in_Outlets[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
			;
$popupPagesLayoutNames["add"] = "view2";
			;
$popupPagesLayoutNames["edit"] = "view2";
			;
$popupPagesLayoutNames["view"] = "view2";
$tdataSimcards_in_Outlets[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSimcards_in_Outlets[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataSimcards_in_Outlets[".listAjax"] = true;
else 
	$tdataSimcards_in_Outlets[".listAjax"] = false;

	$tdataSimcards_in_Outlets[".audit"] = false;

	$tdataSimcards_in_Outlets[".locking"] = false;


$tdataSimcards_in_Outlets[".exportTo"] = true;



$tdataSimcards_in_Outlets[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataSimcards_in_Outlets[".searchSaving"] = false;
//

$tdataSimcards_in_Outlets[".showSearchPanel"] = true;
		$tdataSimcards_in_Outlets[".flexibleSearch"] = true;		

if (isMobile())
	$tdataSimcards_in_Outlets[".isUseAjaxSuggest"] = false;
else 
	$tdataSimcards_in_Outlets[".isUseAjaxSuggest"] = true;

$tdataSimcards_in_Outlets[".rowHighlite"] = true;



$tdataSimcards_in_Outlets[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSimcards_in_Outlets[".isUseTimeForSearch"] = false;





$tdataSimcards_in_Outlets[".allSearchFields"] = array();
$tdataSimcards_in_Outlets[".filterFields"] = array();
$tdataSimcards_in_Outlets[".requiredSearchFields"] = array();

$tdataSimcards_in_Outlets[".allSearchFields"][] = "pos_number";
		$tdataSimcards_in_Outlets[".allSearchFields"][] = "supplier_name";
		$tdataSimcards_in_Outlets[".allSearchFields"][] = "Total";
		
$tdataSimcards_in_Outlets[".googleLikeFields"] = array();
$tdataSimcards_in_Outlets[".googleLikeFields"][] = "pos_number";
$tdataSimcards_in_Outlets[".googleLikeFields"][] = "supplier_name";
$tdataSimcards_in_Outlets[".googleLikeFields"][] = "Total";


$tdataSimcards_in_Outlets[".advSearchFields"] = array();
$tdataSimcards_in_Outlets[".advSearchFields"][] = "pos_number";
$tdataSimcards_in_Outlets[".advSearchFields"][] = "supplier_name";
$tdataSimcards_in_Outlets[".advSearchFields"][] = "Total";

$tdataSimcards_in_Outlets[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdataSimcards_in_Outlets[".pageSize"] = 20;

$tdataSimcards_in_Outlets[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSimcards_in_Outlets[".strOrderBy"] = $tstrOrderBy;

$tdataSimcards_in_Outlets[".orderindexes"] = array();

$tdataSimcards_in_Outlets[".sqlHead"] = "select pos_number,  supplier_name,  SUM(batch_size) AS Total";
$tdataSimcards_in_Outlets[".sqlFrom"] = "FROM simcards";
$tdataSimcards_in_Outlets[".sqlWhereExpr"] = "status = 'Dropped'";
$tdataSimcards_in_Outlets[".sqlTail"] = "GROUP BY pos_number";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSimcards_in_Outlets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSimcards_in_Outlets[".arrGroupsPerPage"] = $arrGPP;

$tdataSimcards_in_Outlets[".highlightSearchResults"] = true;

$tableKeysSimcards_in_Outlets = array();
$tdataSimcards_in_Outlets[".Keys"] = $tableKeysSimcards_in_Outlets;

$tdataSimcards_in_Outlets[".listFields"] = array();
$tdataSimcards_in_Outlets[".listFields"][] = "pos_number";
$tdataSimcards_in_Outlets[".listFields"][] = "supplier_name";
$tdataSimcards_in_Outlets[".listFields"][] = "Total";

$tdataSimcards_in_Outlets[".hideMobileList"] = array();


$tdataSimcards_in_Outlets[".viewFields"] = array();

$tdataSimcards_in_Outlets[".addFields"] = array();

$tdataSimcards_in_Outlets[".inlineAddFields"] = array();

$tdataSimcards_in_Outlets[".editFields"] = array();

$tdataSimcards_in_Outlets[".inlineEditFields"] = array();

$tdataSimcards_in_Outlets[".exportFields"] = array();
$tdataSimcards_in_Outlets[".exportFields"][] = "pos_number";
$tdataSimcards_in_Outlets[".exportFields"][] = "supplier_name";
$tdataSimcards_in_Outlets[".exportFields"][] = "Total";

$tdataSimcards_in_Outlets[".printFields"] = array();

//	pos_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pos_number";
	$fdata["GoodName"] = "pos_number";
	$fdata["ownerTable"] = "simcards";
	$fdata["Label"] = GetFieldLabel("Simcards_in_Outlets","pos_number"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pos_number"; 
		$fdata["FullName"] = "pos_number";
	
		
		
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

	

	
	$tdataSimcards_in_Outlets["pos_number"] = $fdata;
//	supplier_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "supplier_name";
	$fdata["GoodName"] = "supplier_name";
	$fdata["ownerTable"] = "simcards";
	$fdata["Label"] = GetFieldLabel("Simcards_in_Outlets","supplier_name"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "supplier_name"; 
		$fdata["FullName"] = "supplier_name";
	
		
		
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

	

	
	$tdataSimcards_in_Outlets["supplier_name"] = $fdata;
//	Total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Total";
	$fdata["GoodName"] = "Total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Simcards_in_Outlets","Total"); 
	$fdata["FieldType"] = 14;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Total"; 
		$fdata["FullName"] = "SUM(batch_size)";
	
		
		
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

	

	
	$tdataSimcards_in_Outlets["Total"] = $fdata;

	
$tables_data["Simcards in Outlets"]=&$tdataSimcards_in_Outlets;
$field_labels["Simcards_in_Outlets"] = &$fieldLabelsSimcards_in_Outlets;
$fieldToolTips["Simcards in Outlets"] = &$fieldToolTipsSimcards_in_Outlets;
$page_titles["Simcards_in_Outlets"] = &$pageTitlesSimcards_in_Outlets;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Simcards in Outlets"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Simcards in Outlets"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Simcards_in_Outlets()
{
$proto3=array();
$proto3["m_strHead"] = "select";
$proto3["m_strFieldList"] = "pos_number,  supplier_name,  SUM(batch_size) AS Total";
$proto3["m_strFrom"] = "FROM simcards";
$proto3["m_strWhere"] = "status = 'Dropped'";
$proto3["m_strOrderBy"] = "";
$proto3["m_strTail"] = "GROUP BY pos_number";
			$proto3["cipherer"] = null;
$proto4=array();
$proto4["m_sql"] = "status = 'Dropped'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "simcards"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= 'Dropped'";
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
	"m_strName" => "pos_number",
	"m_strTable" => "simcards"
));

$proto8["m_sql"] = "pos_number";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "supplier_name",
	"m_strTable" => "simcards"
));

$proto10["m_sql"] = "supplier_name";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_SUM";
$proto13["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "batch_size",
	"m_strTable" => "simcards"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "SUM(batch_size)";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "Total";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "simcards";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "ID";
$proto16["m_columns"][] = "supplier_name";
$proto16["m_columns"][] = "supplier_number";
$proto16["m_columns"][] = "batch_number";
$proto16["m_columns"][] = "batch_size";
$proto16["m_columns"][] = "Date";
$proto16["m_columns"][] = "pos_number";
$proto16["m_columns"][] = "status";
$proto16["m_columns"][] = "mydata";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "simcards";
$proto15["m_alias"] = "";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "pos_number",
	"m_strTable" => "simcards"
));

$proto19["m_column"]=$obj;
$obj = new SQLGroupByItem($proto19);

$proto3["m_groupby"][]=$obj;
$proto3["m_orderby"] = array();
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_Simcards_in_Outlets = createSqlQuery_Simcards_in_Outlets();

			
	
$tdataSimcards_in_Outlets[".sqlquery"] = $queryData_Simcards_in_Outlets;

$tableEvents["Simcards in Outlets"] = new eventsBase;
$tdataSimcards_in_Outlets[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Simcards in Outlets");

?>