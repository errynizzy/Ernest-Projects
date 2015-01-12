<?php
require_once(getabspath("classes/cipherer.php"));




$tdatareturned_msisdn = array();	
	$tdatareturned_msisdn[".truncateText"] = true;
	$tdatareturned_msisdn[".NumberOfChars"] = 80; 
	$tdatareturned_msisdn[".ShortName"] = "returned_msisdn";
	$tdatareturned_msisdn[".OwnerID"] = "";
	$tdatareturned_msisdn[".OriginalTable"] = "returned_msisdn";

//	field labels
$fieldLabelsreturned_msisdn = array();
$fieldToolTipsreturned_msisdn = array();
$pageTitlesreturned_msisdn = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreturned_msisdn["English"] = array();
	$fieldToolTipsreturned_msisdn["English"] = array();
	$pageTitlesreturned_msisdn["English"] = array();
	$fieldLabelsreturned_msisdn["English"]["ID"] = "ID";
	$fieldToolTipsreturned_msisdn["English"]["ID"] = "";
	$fieldLabelsreturned_msisdn["English"]["MSISDN"] = "MSISDN";
	$fieldToolTipsreturned_msisdn["English"]["MSISDN"] = "";
	$fieldLabelsreturned_msisdn["English"]["Status"] = "Status";
	$fieldToolTipsreturned_msisdn["English"]["Status"] = "";
	$fieldLabelsreturned_msisdn["English"]["Date"] = "Date";
	$fieldToolTipsreturned_msisdn["English"]["Date"] = "";
	if (count($fieldToolTipsreturned_msisdn["English"]))
		$tdatareturned_msisdn[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsreturned_msisdn[""] = array();
	$fieldToolTipsreturned_msisdn[""] = array();
	$pageTitlesreturned_msisdn[""] = array();
	$fieldLabelsreturned_msisdn[""]["ID"] = "ID";
	$fieldToolTipsreturned_msisdn[""]["ID"] = "";
	if (count($fieldToolTipsreturned_msisdn[""]))
		$tdatareturned_msisdn[".isUseToolTips"] = true;
}
	
	
	$tdatareturned_msisdn[".NCSearch"] = true;



$tdatareturned_msisdn[".shortTableName"] = "returned_msisdn";
$tdatareturned_msisdn[".nSecOptions"] = 0;
$tdatareturned_msisdn[".recsPerRowList"] = 1;
$tdatareturned_msisdn[".mainTableOwnerID"] = "";
$tdatareturned_msisdn[".moveNext"] = 1;
$tdatareturned_msisdn[".nType"] = 0;

$tdatareturned_msisdn[".strOriginalTableName"] = "returned_msisdn";




$tdatareturned_msisdn[".showAddInPopup"] = false;

$tdatareturned_msisdn[".showEditInPopup"] = false;

$tdatareturned_msisdn[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatareturned_msisdn[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatareturned_msisdn[".fieldsForRegister"] = array();

$tdatareturned_msisdn[".listAjax"] = false;

	$tdatareturned_msisdn[".audit"] = false;

	$tdatareturned_msisdn[".locking"] = false;


$tdatareturned_msisdn[".list"] = true;


$tdatareturned_msisdn[".import"] = true;

$tdatareturned_msisdn[".exportTo"] = true;



$tdatareturned_msisdn[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatareturned_msisdn[".searchSaving"] = false;
//

$tdatareturned_msisdn[".showSearchPanel"] = true;
		$tdatareturned_msisdn[".flexibleSearch"] = true;		

if (isMobile())
	$tdatareturned_msisdn[".isUseAjaxSuggest"] = false;
else 
	$tdatareturned_msisdn[".isUseAjaxSuggest"] = true;

$tdatareturned_msisdn[".rowHighlite"] = true;



$tdatareturned_msisdn[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareturned_msisdn[".isUseTimeForSearch"] = false;





$tdatareturned_msisdn[".allSearchFields"] = array();
$tdatareturned_msisdn[".filterFields"] = array();
$tdatareturned_msisdn[".requiredSearchFields"] = array();

$tdatareturned_msisdn[".allSearchFields"][] = "MSISDN";
	$tdatareturned_msisdn[".allSearchFields"][] = "Status";
	

$tdatareturned_msisdn[".googleLikeFields"] = array();
$tdatareturned_msisdn[".googleLikeFields"][] = "ID";
$tdatareturned_msisdn[".googleLikeFields"][] = "MSISDN";
$tdatareturned_msisdn[".googleLikeFields"][] = "Status";
$tdatareturned_msisdn[".googleLikeFields"][] = "Date";


$tdatareturned_msisdn[".advSearchFields"] = array();
$tdatareturned_msisdn[".advSearchFields"][] = "MSISDN";
$tdatareturned_msisdn[".advSearchFields"][] = "Status";

$tdatareturned_msisdn[".tableType"] = "list";

$tdatareturned_msisdn[".printerPageOrientation"] = 0;
$tdatareturned_msisdn[".nPrinterPageScale"] = 100;

$tdatareturned_msisdn[".nPrinterSplitRecords"] = 40;

$tdatareturned_msisdn[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatareturned_msisdn[".pageSize"] = 20;

$tdatareturned_msisdn[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatareturned_msisdn[".strOrderBy"] = $tstrOrderBy;

$tdatareturned_msisdn[".orderindexes"] = array();

$tdatareturned_msisdn[".sqlHead"] = "SELECT ID,   MSISDN,   Status,   `Date`";
$tdatareturned_msisdn[".sqlFrom"] = "FROM returned_msisdn";
$tdatareturned_msisdn[".sqlWhereExpr"] = "";
$tdatareturned_msisdn[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareturned_msisdn[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareturned_msisdn[".arrGroupsPerPage"] = $arrGPP;

$tdatareturned_msisdn[".highlightSearchResults"] = true;

$tableKeysreturned_msisdn = array();
$tableKeysreturned_msisdn[] = "ID";
$tdatareturned_msisdn[".Keys"] = $tableKeysreturned_msisdn;

$tdatareturned_msisdn[".listFields"] = array();
$tdatareturned_msisdn[".listFields"][] = "MSISDN";
$tdatareturned_msisdn[".listFields"][] = "Status";

$tdatareturned_msisdn[".hideMobileList"] = array();


$tdatareturned_msisdn[".viewFields"] = array();

$tdatareturned_msisdn[".addFields"] = array();

$tdatareturned_msisdn[".inlineAddFields"] = array();

$tdatareturned_msisdn[".editFields"] = array();

$tdatareturned_msisdn[".inlineEditFields"] = array();

$tdatareturned_msisdn[".exportFields"] = array();
$tdatareturned_msisdn[".exportFields"][] = "MSISDN";
$tdatareturned_msisdn[".exportFields"][] = "Status";

$tdatareturned_msisdn[".importFields"] = array();
$tdatareturned_msisdn[".importFields"][] = "MSISDN";
$tdatareturned_msisdn[".importFields"][] = "Status";

$tdatareturned_msisdn[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "returned_msisdn";
	$fdata["Label"] = GetFieldLabel("returned_msisdn","ID"); 
	$fdata["FieldType"] = 20;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";
	
		
		
				
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
	
	
	
	

	

	
	$tdatareturned_msisdn["ID"] = $fdata;
//	MSISDN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MSISDN";
	$fdata["GoodName"] = "MSISDN";
	$fdata["ownerTable"] = "returned_msisdn";
	$fdata["Label"] = GetFieldLabel("returned_msisdn","MSISDN"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MSISDN"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MSISDN";
	
		
		
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

	

	
	$tdatareturned_msisdn["MSISDN"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "returned_msisdn";
	$fdata["Label"] = GetFieldLabel("returned_msisdn","Status"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Status"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status";
	
		
		
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
			$edata["EditParams"].= " maxlength=20";
	
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

	

	
	$tdatareturned_msisdn["Status"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "returned_msisdn";
	$fdata["Label"] = GetFieldLabel("returned_msisdn","Date"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Date`";
	
		
		
				
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
	
	
	
	

	

	
	$tdatareturned_msisdn["Date"] = $fdata;

	
$tables_data["returned_msisdn"]=&$tdatareturned_msisdn;
$field_labels["returned_msisdn"] = &$fieldLabelsreturned_msisdn;
$fieldToolTips["returned_msisdn"] = &$fieldToolTipsreturned_msisdn;
$page_titles["returned_msisdn"] = &$pageTitlesreturned_msisdn;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["returned_msisdn"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["returned_msisdn"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_returned_msisdn()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   MSISDN,   Status,   `Date`";
$proto0["m_strFrom"] = "FROM returned_msisdn";
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
	"m_strTable" => "returned_msisdn",
	"m_srcTableName" => "returned_msisdn"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "returned_msisdn";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "MSISDN",
	"m_strTable" => "returned_msisdn",
	"m_srcTableName" => "returned_msisdn"
));

$proto7["m_sql"] = "MSISDN";
$proto7["m_srcTableName"] = "returned_msisdn";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "returned_msisdn",
	"m_srcTableName" => "returned_msisdn"
));

$proto9["m_sql"] = "Status";
$proto9["m_srcTableName"] = "returned_msisdn";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "returned_msisdn",
	"m_srcTableName" => "returned_msisdn"
));

$proto11["m_sql"] = "`Date`";
$proto11["m_srcTableName"] = "returned_msisdn";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "returned_msisdn";
$proto14["m_srcTableName"] = "returned_msisdn";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "ID";
$proto14["m_columns"][] = "MSISDN";
$proto14["m_columns"][] = "Status";
$proto14["m_columns"][] = "Date";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "returned_msisdn";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "returned_msisdn";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="returned_msisdn";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_returned_msisdn = createSqlQuery_returned_msisdn();


	
				
	
$tdatareturned_msisdn[".sqlquery"] = $queryData_returned_msisdn;

$tableEvents["returned_msisdn"] = new eventsBase;
$tdatareturned_msisdn[".hasEvents"] = false;

?>