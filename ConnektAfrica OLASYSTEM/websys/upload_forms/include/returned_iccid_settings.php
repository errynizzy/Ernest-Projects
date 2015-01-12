<?php
require_once(getabspath("classes/cipherer.php"));




$tdatareturned_iccid = array();	
	$tdatareturned_iccid[".truncateText"] = true;
	$tdatareturned_iccid[".NumberOfChars"] = 80; 
	$tdatareturned_iccid[".ShortName"] = "returned_iccid";
	$tdatareturned_iccid[".OwnerID"] = "";
	$tdatareturned_iccid[".OriginalTable"] = "returned_iccid";

//	field labels
$fieldLabelsreturned_iccid = array();
$fieldToolTipsreturned_iccid = array();
$pageTitlesreturned_iccid = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreturned_iccid["English"] = array();
	$fieldToolTipsreturned_iccid["English"] = array();
	$pageTitlesreturned_iccid["English"] = array();
	$fieldLabelsreturned_iccid["English"]["ID"] = "ID";
	$fieldToolTipsreturned_iccid["English"]["ID"] = "";
	$fieldLabelsreturned_iccid["English"]["ICCID"] = "ICCID";
	$fieldToolTipsreturned_iccid["English"]["ICCID"] = "";
	$fieldLabelsreturned_iccid["English"]["Status"] = "Status";
	$fieldToolTipsreturned_iccid["English"]["Status"] = "";
	$fieldLabelsreturned_iccid["English"]["Date"] = "Date";
	$fieldToolTipsreturned_iccid["English"]["Date"] = "";
	if (count($fieldToolTipsreturned_iccid["English"]))
		$tdatareturned_iccid[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsreturned_iccid[""] = array();
	$fieldToolTipsreturned_iccid[""] = array();
	$pageTitlesreturned_iccid[""] = array();
	if (count($fieldToolTipsreturned_iccid[""]))
		$tdatareturned_iccid[".isUseToolTips"] = true;
}
	
	
	$tdatareturned_iccid[".NCSearch"] = true;



$tdatareturned_iccid[".shortTableName"] = "returned_iccid";
$tdatareturned_iccid[".nSecOptions"] = 0;
$tdatareturned_iccid[".recsPerRowList"] = 1;
$tdatareturned_iccid[".mainTableOwnerID"] = "";
$tdatareturned_iccid[".moveNext"] = 1;
$tdatareturned_iccid[".nType"] = 0;

$tdatareturned_iccid[".strOriginalTableName"] = "returned_iccid";




$tdatareturned_iccid[".showAddInPopup"] = false;

$tdatareturned_iccid[".showEditInPopup"] = false;

$tdatareturned_iccid[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatareturned_iccid[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatareturned_iccid[".fieldsForRegister"] = array();

$tdatareturned_iccid[".listAjax"] = false;

	$tdatareturned_iccid[".audit"] = false;

	$tdatareturned_iccid[".locking"] = false;


$tdatareturned_iccid[".list"] = true;


$tdatareturned_iccid[".import"] = true;

$tdatareturned_iccid[".exportTo"] = true;



$tdatareturned_iccid[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatareturned_iccid[".searchSaving"] = false;
//

$tdatareturned_iccid[".showSearchPanel"] = true;
		$tdatareturned_iccid[".flexibleSearch"] = true;		

if (isMobile())
	$tdatareturned_iccid[".isUseAjaxSuggest"] = false;
else 
	$tdatareturned_iccid[".isUseAjaxSuggest"] = true;

$tdatareturned_iccid[".rowHighlite"] = true;



$tdatareturned_iccid[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareturned_iccid[".isUseTimeForSearch"] = false;





$tdatareturned_iccid[".allSearchFields"] = array();
$tdatareturned_iccid[".filterFields"] = array();
$tdatareturned_iccid[".requiredSearchFields"] = array();

$tdatareturned_iccid[".allSearchFields"][] = "ICCID";
	$tdatareturned_iccid[".allSearchFields"][] = "Status";
	

$tdatareturned_iccid[".googleLikeFields"] = array();
$tdatareturned_iccid[".googleLikeFields"][] = "ID";
$tdatareturned_iccid[".googleLikeFields"][] = "ICCID";
$tdatareturned_iccid[".googleLikeFields"][] = "Status";
$tdatareturned_iccid[".googleLikeFields"][] = "Date";


$tdatareturned_iccid[".advSearchFields"] = array();
$tdatareturned_iccid[".advSearchFields"][] = "ICCID";
$tdatareturned_iccid[".advSearchFields"][] = "Status";

$tdatareturned_iccid[".tableType"] = "list";

$tdatareturned_iccid[".printerPageOrientation"] = 0;
$tdatareturned_iccid[".nPrinterPageScale"] = 100;

$tdatareturned_iccid[".nPrinterSplitRecords"] = 40;

$tdatareturned_iccid[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatareturned_iccid[".pageSize"] = 20;

$tdatareturned_iccid[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatareturned_iccid[".strOrderBy"] = $tstrOrderBy;

$tdatareturned_iccid[".orderindexes"] = array();

$tdatareturned_iccid[".sqlHead"] = "SELECT ID,  ICCID,  Status,  `Date`";
$tdatareturned_iccid[".sqlFrom"] = "FROM returned_iccid";
$tdatareturned_iccid[".sqlWhereExpr"] = "";
$tdatareturned_iccid[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareturned_iccid[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareturned_iccid[".arrGroupsPerPage"] = $arrGPP;

$tdatareturned_iccid[".highlightSearchResults"] = true;

$tableKeysreturned_iccid = array();
$tableKeysreturned_iccid[] = "ID";
$tdatareturned_iccid[".Keys"] = $tableKeysreturned_iccid;

$tdatareturned_iccid[".listFields"] = array();
$tdatareturned_iccid[".listFields"][] = "ICCID";
$tdatareturned_iccid[".listFields"][] = "Status";

$tdatareturned_iccid[".hideMobileList"] = array();


$tdatareturned_iccid[".viewFields"] = array();

$tdatareturned_iccid[".addFields"] = array();

$tdatareturned_iccid[".inlineAddFields"] = array();

$tdatareturned_iccid[".editFields"] = array();

$tdatareturned_iccid[".inlineEditFields"] = array();

$tdatareturned_iccid[".exportFields"] = array();
$tdatareturned_iccid[".exportFields"][] = "ICCID";
$tdatareturned_iccid[".exportFields"][] = "Status";

$tdatareturned_iccid[".importFields"] = array();
$tdatareturned_iccid[".importFields"][] = "ICCID";
$tdatareturned_iccid[".importFields"][] = "Status";

$tdatareturned_iccid[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "returned_iccid";
	$fdata["Label"] = GetFieldLabel("returned_iccid","ID"); 
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
	
	
	
	

	

	
	$tdatareturned_iccid["ID"] = $fdata;
//	ICCID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ICCID";
	$fdata["GoodName"] = "ICCID";
	$fdata["ownerTable"] = "returned_iccid";
	$fdata["Label"] = GetFieldLabel("returned_iccid","ICCID"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ICCID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ICCID";
	
		
		
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
			$edata["EditParams"].= " maxlength=18";
	
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

	

	
	$tdatareturned_iccid["ICCID"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "returned_iccid";
	$fdata["Label"] = GetFieldLabel("returned_iccid","Status"); 
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

	

	
	$tdatareturned_iccid["Status"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "returned_iccid";
	$fdata["Label"] = GetFieldLabel("returned_iccid","Date"); 
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
	
	
	
	

	

	
	$tdatareturned_iccid["Date"] = $fdata;

	
$tables_data["returned_iccid"]=&$tdatareturned_iccid;
$field_labels["returned_iccid"] = &$fieldLabelsreturned_iccid;
$fieldToolTips["returned_iccid"] = &$fieldToolTipsreturned_iccid;
$page_titles["returned_iccid"] = &$pageTitlesreturned_iccid;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["returned_iccid"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["returned_iccid"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_returned_iccid()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  ICCID,  Status,  `Date`";
$proto0["m_strFrom"] = "FROM returned_iccid";
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
	"m_strTable" => "returned_iccid",
	"m_srcTableName" => "returned_iccid"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "returned_iccid";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ICCID",
	"m_strTable" => "returned_iccid",
	"m_srcTableName" => "returned_iccid"
));

$proto7["m_sql"] = "ICCID";
$proto7["m_srcTableName"] = "returned_iccid";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "returned_iccid",
	"m_srcTableName" => "returned_iccid"
));

$proto9["m_sql"] = "Status";
$proto9["m_srcTableName"] = "returned_iccid";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "returned_iccid",
	"m_srcTableName" => "returned_iccid"
));

$proto11["m_sql"] = "`Date`";
$proto11["m_srcTableName"] = "returned_iccid";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "returned_iccid";
$proto14["m_srcTableName"] = "returned_iccid";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "ID";
$proto14["m_columns"][] = "ICCID";
$proto14["m_columns"][] = "Status";
$proto14["m_columns"][] = "Date";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "returned_iccid";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "returned_iccid";
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
$proto0["m_srcTableName"]="returned_iccid";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_returned_iccid = createSqlQuery_returned_iccid();


	
				
	
$tdatareturned_iccid[".sqlquery"] = $queryData_returned_iccid;

$tableEvents["returned_iccid"] = new eventsBase;
$tdatareturned_iccid[".hasEvents"] = false;

?>