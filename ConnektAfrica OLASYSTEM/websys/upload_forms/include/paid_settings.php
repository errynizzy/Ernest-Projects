<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapaid = array();	
	$tdatapaid[".truncateText"] = true;
	$tdatapaid[".NumberOfChars"] = 80; 
	$tdatapaid[".ShortName"] = "paid";
	$tdatapaid[".OwnerID"] = "mydata";
	$tdatapaid[".OriginalTable"] = "paid";

//	field labels
$fieldLabelspaid = array();
$fieldToolTipspaid = array();
$pageTitlespaid = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspaid["English"] = array();
	$fieldToolTipspaid["English"] = array();
	$pageTitlespaid["English"] = array();
	$fieldLabelspaid["English"]["ID"] = "ID";
	$fieldToolTipspaid["English"]["ID"] = "";
	$fieldLabelspaid["English"]["Paid_MSISDN"] = "Paid MSISDN";
	$fieldToolTipspaid["English"]["Paid_MSISDN"] = "";
	$fieldLabelspaid["English"]["Date_Paid"] = "Date Paid";
	$fieldToolTipspaid["English"]["Date_Paid"] = "";
	$fieldLabelspaid["English"]["mydata"] = "Mydata";
	$fieldToolTipspaid["English"]["mydata"] = "";
	if (count($fieldToolTipspaid["English"]))
		$tdatapaid[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspaid[""] = array();
	$fieldToolTipspaid[""] = array();
	$pageTitlespaid[""] = array();
	$fieldLabelspaid[""]["Paid_MSISDN"] = "Paid MSISDN";
	$fieldToolTipspaid[""]["Paid_MSISDN"] = "";
	if (count($fieldToolTipspaid[""]))
		$tdatapaid[".isUseToolTips"] = true;
}
	
	
	$tdatapaid[".NCSearch"] = true;



$tdatapaid[".shortTableName"] = "paid";
$tdatapaid[".nSecOptions"] = 1;
$tdatapaid[".recsPerRowList"] = 1;
$tdatapaid[".mainTableOwnerID"] = "mydata";
$tdatapaid[".moveNext"] = 1;
$tdatapaid[".nType"] = 0;

$tdatapaid[".strOriginalTableName"] = "paid";




$tdatapaid[".showAddInPopup"] = false;

$tdatapaid[".showEditInPopup"] = false;

$tdatapaid[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapaid[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapaid[".fieldsForRegister"] = array();

$tdatapaid[".listAjax"] = false;

	$tdatapaid[".audit"] = false;

	$tdatapaid[".locking"] = false;


$tdatapaid[".list"] = true;


$tdatapaid[".import"] = true;

$tdatapaid[".exportTo"] = true;



$tdatapaid[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapaid[".searchSaving"] = false;
//

$tdatapaid[".showSearchPanel"] = true;
		$tdatapaid[".flexibleSearch"] = true;		

if (isMobile())
	$tdatapaid[".isUseAjaxSuggest"] = false;
else 
	$tdatapaid[".isUseAjaxSuggest"] = true;

$tdatapaid[".rowHighlite"] = true;



$tdatapaid[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapaid[".isUseTimeForSearch"] = false;





$tdatapaid[".allSearchFields"] = array();
$tdatapaid[".filterFields"] = array();
$tdatapaid[".requiredSearchFields"] = array();

$tdatapaid[".allSearchFields"][] = "Paid_MSISDN";
	$tdatapaid[".allSearchFields"][] = "Date_Paid";
	

$tdatapaid[".googleLikeFields"] = array();
$tdatapaid[".googleLikeFields"][] = "ID";
$tdatapaid[".googleLikeFields"][] = "Paid_MSISDN";
$tdatapaid[".googleLikeFields"][] = "Date_Paid";
$tdatapaid[".googleLikeFields"][] = "mydata";


$tdatapaid[".advSearchFields"] = array();
$tdatapaid[".advSearchFields"][] = "Paid_MSISDN";
$tdatapaid[".advSearchFields"][] = "Date_Paid";

$tdatapaid[".tableType"] = "list";

$tdatapaid[".printerPageOrientation"] = 0;
$tdatapaid[".nPrinterPageScale"] = 100;

$tdatapaid[".nPrinterSplitRecords"] = 40;

$tdatapaid[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatapaid[".pageSize"] = 20;

$tdatapaid[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapaid[".strOrderBy"] = $tstrOrderBy;

$tdatapaid[".orderindexes"] = array();

$tdatapaid[".sqlHead"] = "SELECT ID,   Paid_MSISDN,   Date_Paid,   mydata";
$tdatapaid[".sqlFrom"] = "FROM paid";
$tdatapaid[".sqlWhereExpr"] = "";
$tdatapaid[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapaid[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapaid[".arrGroupsPerPage"] = $arrGPP;

$tdatapaid[".highlightSearchResults"] = true;

$tableKeyspaid = array();
$tableKeyspaid[] = "Paid_MSISDN";
$tdatapaid[".Keys"] = $tableKeyspaid;

$tdatapaid[".listFields"] = array();
$tdatapaid[".listFields"][] = "Paid_MSISDN";
$tdatapaid[".listFields"][] = "Date_Paid";

$tdatapaid[".hideMobileList"] = array();


$tdatapaid[".viewFields"] = array();

$tdatapaid[".addFields"] = array();

$tdatapaid[".inlineAddFields"] = array();

$tdatapaid[".editFields"] = array();

$tdatapaid[".inlineEditFields"] = array();

$tdatapaid[".exportFields"] = array();
$tdatapaid[".exportFields"][] = "Paid_MSISDN";
$tdatapaid[".exportFields"][] = "Date_Paid";

$tdatapaid[".importFields"] = array();
$tdatapaid[".importFields"][] = "Paid_MSISDN";
$tdatapaid[".importFields"][] = "Date_Paid";

$tdatapaid[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "paid";
	$fdata["Label"] = GetFieldLabel("paid","ID"); 
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
	
	
	
	

	

	
	$tdatapaid["ID"] = $fdata;
//	Paid_MSISDN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Paid_MSISDN";
	$fdata["GoodName"] = "Paid_MSISDN";
	$fdata["ownerTable"] = "paid";
	$fdata["Label"] = GetFieldLabel("paid","Paid_MSISDN"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Paid_MSISDN"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Paid_MSISDN";
	
		
		
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

	

	
	$tdatapaid["Paid_MSISDN"] = $fdata;
//	Date_Paid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Date_Paid";
	$fdata["GoodName"] = "Date_Paid";
	$fdata["ownerTable"] = "paid";
	$fdata["Label"] = GetFieldLabel("paid","Date_Paid"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Date_Paid"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Date_Paid";
	
		
		
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

	

	
	$tdatapaid["Date_Paid"] = $fdata;
//	mydata
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "mydata";
	$fdata["GoodName"] = "mydata";
	$fdata["ownerTable"] = "paid";
	$fdata["Label"] = GetFieldLabel("paid","mydata"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "mydata"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mydata";
	
		
		
				
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
	
	
	
	

	

	
	$tdatapaid["mydata"] = $fdata;

	
$tables_data["paid"]=&$tdatapaid;
$field_labels["paid"] = &$fieldLabelspaid;
$fieldToolTips["paid"] = &$fieldToolTipspaid;
$page_titles["paid"] = &$pageTitlespaid;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["paid"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["paid"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_paid()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   Paid_MSISDN,   Date_Paid,   mydata";
$proto0["m_strFrom"] = "FROM paid";
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
	"m_strTable" => "paid",
	"m_srcTableName" => "paid"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "paid";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Paid_MSISDN",
	"m_strTable" => "paid",
	"m_srcTableName" => "paid"
));

$proto7["m_sql"] = "Paid_MSISDN";
$proto7["m_srcTableName"] = "paid";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Date_Paid",
	"m_strTable" => "paid",
	"m_srcTableName" => "paid"
));

$proto9["m_sql"] = "Date_Paid";
$proto9["m_srcTableName"] = "paid";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "mydata",
	"m_strTable" => "paid",
	"m_srcTableName" => "paid"
));

$proto11["m_sql"] = "mydata";
$proto11["m_srcTableName"] = "paid";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "paid";
$proto14["m_srcTableName"] = "paid";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "ID";
$proto14["m_columns"][] = "Paid_MSISDN";
$proto14["m_columns"][] = "Date_Paid";
$proto14["m_columns"][] = "mydata";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "paid";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "paid";
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
$proto0["m_srcTableName"]="paid";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_paid = createSqlQuery_paid();


	
				
	
$tdatapaid[".sqlquery"] = $queryData_paid;

$tableEvents["paid"] = new eventsBase;
$tdatapaid[".hasEvents"] = false;

?>