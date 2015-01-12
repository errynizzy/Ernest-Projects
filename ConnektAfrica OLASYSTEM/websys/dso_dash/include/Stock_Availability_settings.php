<?php
require_once(getabspath("classes/cipherer.php"));




$tdataStock_Availability = array();	
	$tdataStock_Availability[".truncateText"] = true;
	$tdataStock_Availability[".NumberOfChars"] = 80; 
	$tdataStock_Availability[".ShortName"] = "Stock_Availability";
	$tdataStock_Availability[".OwnerID"] = "";
	$tdataStock_Availability[".OriginalTable"] = "activators";

//	field labels
$fieldLabelsStock_Availability = array();
$fieldToolTipsStock_Availability = array();
$pageTitlesStock_Availability = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsStock_Availability["English"] = array();
	$fieldToolTipsStock_Availability["English"] = array();
	$pageTitlesStock_Availability["English"] = array();
	$fieldLabelsStock_Availability["English"]["Manager_Name"] = "Manager Name";
	$fieldToolTipsStock_Availability["English"]["Manager_Name"] = "";
	$fieldLabelsStock_Availability["English"]["Previous_Day"] = "Previous Day";
	$fieldToolTipsStock_Availability["English"]["Previous_Day"] = "";
	$fieldLabelsStock_Availability["English"]["Current_Day"] = "Current Day";
	$fieldToolTipsStock_Availability["English"]["Current_Day"] = "";
	$fieldLabelsStock_Availability["English"]["Title"] = "Title";
	$fieldToolTipsStock_Availability["English"]["Title"] = "";
	if (count($fieldToolTipsStock_Availability["English"]))
		$tdataStock_Availability[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsStock_Availability[""] = array();
	$fieldToolTipsStock_Availability[""] = array();
	$pageTitlesStock_Availability[""] = array();
	if (count($fieldToolTipsStock_Availability[""]))
		$tdataStock_Availability[".isUseToolTips"] = true;
}
	
	
	$tdataStock_Availability[".NCSearch"] = true;



$tdataStock_Availability[".shortTableName"] = "Stock_Availability";
$tdataStock_Availability[".nSecOptions"] = 0;
$tdataStock_Availability[".recsPerRowList"] = 1;
$tdataStock_Availability[".mainTableOwnerID"] = "";
$tdataStock_Availability[".moveNext"] = 1;
$tdataStock_Availability[".nType"] = 1;

$tdataStock_Availability[".strOriginalTableName"] = "activators";




$tdataStock_Availability[".showAddInPopup"] = false;

$tdataStock_Availability[".showEditInPopup"] = false;

$tdataStock_Availability[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataStock_Availability[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataStock_Availability[".fieldsForRegister"] = array();

$tdataStock_Availability[".listAjax"] = false;

	$tdataStock_Availability[".audit"] = false;

	$tdataStock_Availability[".locking"] = false;


$tdataStock_Availability[".list"] = true;



$tdataStock_Availability[".exportTo"] = true;



$tdataStock_Availability[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdataStock_Availability[".searchSaving"] = false;
//

$tdataStock_Availability[".showSearchPanel"] = true;
		$tdataStock_Availability[".flexibleSearch"] = true;		

if (isMobile())
	$tdataStock_Availability[".isUseAjaxSuggest"] = false;
else 
	$tdataStock_Availability[".isUseAjaxSuggest"] = true;

$tdataStock_Availability[".rowHighlite"] = true;



$tdataStock_Availability[".addPageEvents"] = false;

// use timepicker for search panel
$tdataStock_Availability[".isUseTimeForSearch"] = false;





$tdataStock_Availability[".allSearchFields"] = array();
$tdataStock_Availability[".filterFields"] = array();
$tdataStock_Availability[".requiredSearchFields"] = array();

$tdataStock_Availability[".allSearchFields"][] = "Manager_Name";
	$tdataStock_Availability[".allSearchFields"][] = "Title";
	$tdataStock_Availability[".allSearchFields"][] = "Previous_Day";
	$tdataStock_Availability[".allSearchFields"][] = "Current_Day";
	

$tdataStock_Availability[".googleLikeFields"] = array();
$tdataStock_Availability[".googleLikeFields"][] = "Manager_Name";
$tdataStock_Availability[".googleLikeFields"][] = "Title";
$tdataStock_Availability[".googleLikeFields"][] = "Previous_Day";
$tdataStock_Availability[".googleLikeFields"][] = "Current_Day";


$tdataStock_Availability[".advSearchFields"] = array();
$tdataStock_Availability[".advSearchFields"][] = "Manager_Name";
$tdataStock_Availability[".advSearchFields"][] = "Title";
$tdataStock_Availability[".advSearchFields"][] = "Previous_Day";
$tdataStock_Availability[".advSearchFields"][] = "Current_Day";

$tdataStock_Availability[".tableType"] = "list";

$tdataStock_Availability[".printerPageOrientation"] = 0;
$tdataStock_Availability[".nPrinterPageScale"] = 100;

$tdataStock_Availability[".nPrinterSplitRecords"] = 40;

$tdataStock_Availability[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataStock_Availability[".pageSize"] = 15;

$tdataStock_Availability[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataStock_Availability[".strOrderBy"] = $tstrOrderBy;

$tdataStock_Availability[".orderindexes"] = array();

$tdataStock_Availability[".sqlHead"] = "SELECT activators.Manager_Name,  activators.Manager_Title as Title,  SUM(pos_live_balance.`BALANCE` = '0') AS Previous_Day,  SUM(pos_live_balancep.`BALANCE` = '0') AS Current_Day";
$tdataStock_Availability[".sqlFrom"] = "FROM pos_live_balance  , pos_live_balancep  , activators";
$tdataStock_Availability[".sqlWhereExpr"] = "(activators.Manager_Name != '') AND (activators.Activator_Number = pos_live_balance.`ACC_NBR`) AND (activators.Activator_Number = pos_live_balancep.`ACC_NBR`)  and (activators.Manager_Title = 'DSO' OR activators.Manager_Title = 'RDO')";
$tdataStock_Availability[".sqlTail"] = "GROUP BY activators.Manager_Name";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataStock_Availability[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataStock_Availability[".arrGroupsPerPage"] = $arrGPP;

$tdataStock_Availability[".highlightSearchResults"] = true;

$tableKeysStock_Availability = array();
$tdataStock_Availability[".Keys"] = $tableKeysStock_Availability;

$tdataStock_Availability[".listFields"] = array();
$tdataStock_Availability[".listFields"][] = "Manager_Name";
$tdataStock_Availability[".listFields"][] = "Title";
$tdataStock_Availability[".listFields"][] = "Previous_Day";
$tdataStock_Availability[".listFields"][] = "Current_Day";

$tdataStock_Availability[".hideMobileList"] = array();


$tdataStock_Availability[".viewFields"] = array();

$tdataStock_Availability[".addFields"] = array();

$tdataStock_Availability[".inlineAddFields"] = array();

$tdataStock_Availability[".editFields"] = array();

$tdataStock_Availability[".inlineEditFields"] = array();

$tdataStock_Availability[".exportFields"] = array();
$tdataStock_Availability[".exportFields"][] = "Manager_Name";
$tdataStock_Availability[".exportFields"][] = "Title";
$tdataStock_Availability[".exportFields"][] = "Previous_Day";
$tdataStock_Availability[".exportFields"][] = "Current_Day";

$tdataStock_Availability[".importFields"] = array();

$tdataStock_Availability[".printFields"] = array();

//	Manager_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Manager_Name";
	$fdata["GoodName"] = "Manager_Name";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("Stock_Availability","Manager_Name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Manager_Name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "activators.Manager_Name";
	
		
		
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

	

	
	$tdataStock_Availability["Manager_Name"] = $fdata;
//	Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Title";
	$fdata["GoodName"] = "Title";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("Stock_Availability","Title"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Manager_Title"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "activators.Manager_Title";
	
		
		
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

	

	
	$tdataStock_Availability["Title"] = $fdata;
//	Previous_Day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Previous_Day";
	$fdata["GoodName"] = "Previous_Day";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Stock_Availability","Previous_Day"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Previous_Day"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(pos_live_balance.`BALANCE` = '0')";
	
		
		
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

	

	
	$tdataStock_Availability["Previous_Day"] = $fdata;
//	Current_Day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Current_Day";
	$fdata["GoodName"] = "Current_Day";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Stock_Availability","Current_Day"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Current_Day"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(pos_live_balancep.`BALANCE` = '0')";
	
		
		
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

	

	
	$tdataStock_Availability["Current_Day"] = $fdata;

	
$tables_data["Stock Availability"]=&$tdataStock_Availability;
$field_labels["Stock_Availability"] = &$fieldLabelsStock_Availability;
$fieldToolTips["Stock Availability"] = &$fieldToolTipsStock_Availability;
$page_titles["Stock_Availability"] = &$pageTitlesStock_Availability;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Stock Availability"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Stock Availability"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Stock_Availability()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "activators.Manager_Name,  activators.Manager_Title as Title,  SUM(pos_live_balance.`BALANCE` = '0') AS Previous_Day,  SUM(pos_live_balancep.`BALANCE` = '0') AS Current_Day";
$proto0["m_strFrom"] = "FROM pos_live_balance  , pos_live_balancep  , activators";
$proto0["m_strWhere"] = "(activators.Manager_Name != '') AND (activators.Activator_Number = pos_live_balance.`ACC_NBR`) AND (activators.Activator_Number = pos_live_balancep.`ACC_NBR`)  and (activators.Manager_Title = 'DSO' OR activators.Manager_Title = 'RDO')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY activators.Manager_Name";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(activators.Manager_Name != '') AND (activators.Activator_Number = pos_live_balance.`ACC_NBR`) AND (activators.Activator_Number = pos_live_balancep.`ACC_NBR`)  and (activators.Manager_Title = 'DSO' OR activators.Manager_Title = 'RDO')";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(activators.Manager_Name != '') AND (activators.Activator_Number = pos_live_balance.`ACC_NBR`) AND (activators.Activator_Number = pos_live_balancep.`ACC_NBR`)  and (activators.Manager_Title = 'DSO' OR activators.Manager_Title = 'RDO')"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "activators.Manager_Name != ''";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Manager_Name",
	"m_strTable" => "activators",
	"m_srcTableName" => "Stock Availability"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "!= ''";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "activators.Activator_Number = pos_live_balance.`ACC_NBR`";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Activator_Number",
	"m_strTable" => "activators",
	"m_srcTableName" => "Stock Availability"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "= pos_live_balance.`ACC_NBR`";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = true;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
						$proto7=array();
$proto7["m_sql"] = "activators.Activator_Number = pos_live_balancep.`ACC_NBR`";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Activator_Number",
	"m_strTable" => "activators",
	"m_srcTableName" => "Stock Availability"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "= pos_live_balancep.`ACC_NBR`";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = true;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

			$proto1["m_contained"][]=$obj;
						$proto9=array();
$proto9["m_sql"] = "activators.Manager_Title = 'DSO' OR activators.Manager_Title = 'RDO'";
$proto9["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "activators.Manager_Title = 'DSO' OR activators.Manager_Title = 'RDO'"
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
						$proto11=array();
$proto11["m_sql"] = "activators.Manager_Title = 'DSO'";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "activators",
	"m_srcTableName" => "Stock Availability"
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "= 'DSO'";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

			$proto9["m_contained"][]=$obj;
						$proto13=array();
$proto13["m_sql"] = "activators.Manager_Title = 'RDO'";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "activators",
	"m_srcTableName" => "Stock Availability"
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "= 'RDO'";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

			$proto9["m_contained"][]=$obj;
$proto9["m_strCase"] = "";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = true;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
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

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Name",
	"m_strTable" => "activators",
	"m_srcTableName" => "Stock Availability"
));

$proto17["m_sql"] = "activators.Manager_Name";
$proto17["m_srcTableName"] = "Stock Availability";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "activators",
	"m_srcTableName" => "Stock Availability"
));

$proto19["m_sql"] = "activators.Manager_Title";
$proto19["m_srcTableName"] = "Stock Availability";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "Title";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_SUM";
$proto22["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "pos_live_balance.`BALANCE` = '0'"
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto22);

$proto21["m_sql"] = "SUM(pos_live_balance.`BALANCE` = '0')";
$proto21["m_srcTableName"] = "Stock Availability";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "Previous_Day";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$proto25=array();
$proto25["m_functiontype"] = "SQLF_SUM";
$proto25["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "pos_live_balancep.`BALANCE` = '0'"
));

$proto25["m_arguments"][]=$obj;
$proto25["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto25);

$proto24["m_sql"] = "SUM(pos_live_balancep.`BALANCE` = '0')";
$proto24["m_srcTableName"] = "Stock Availability";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "Current_Day";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "pos_live_balance";
$proto28["m_srcTableName"] = "Stock Availability";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "EVENT_DATE";
$proto28["m_columns"][] = "ACC_NBR";
$proto28["m_columns"][] = "BALANCE";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "pos_live_balance";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "Stock Availability";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
												$proto31=array();
$proto31["m_link"] = "SQLL_CROSSJOIN";
			$proto32=array();
$proto32["m_strName"] = "pos_live_balancep";
$proto32["m_srcTableName"] = "Stock Availability";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "EVENT_DATE";
$proto32["m_columns"][] = "ACC_NBR";
$proto32["m_columns"][] = "BALANCE";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "pos_live_balancep";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "Stock Availability";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
												$proto35=array();
$proto35["m_link"] = "SQLL_CROSSJOIN";
			$proto36=array();
$proto36["m_strName"] = "activators";
$proto36["m_srcTableName"] = "Stock Availability";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "ID";
$proto36["m_columns"][] = "pos_type";
$proto36["m_columns"][] = "Manager_Name";
$proto36["m_columns"][] = "Manager_Number";
$proto36["m_columns"][] = "Manager_Title";
$proto36["m_columns"][] = "Activator_Name";
$proto36["m_columns"][] = "Activator_Number";
$proto36["m_columns"][] = "business_name";
$proto36["m_columns"][] = "altenative_number";
$proto36["m_columns"][] = "pos_iccid";
$proto36["m_columns"][] = "registration_date";
$proto36["m_columns"][] = "gender";
$proto36["m_columns"][] = "DOB";
$proto36["m_columns"][] = "Area";
$proto36["m_columns"][] = "Route";
$proto36["m_columns"][] = "id_type";
$proto36["m_columns"][] = "id_number";
$proto36["m_columns"][] = "Team_Leader";
$proto36["m_columns"][] = "Working_Location";
$proto36["m_columns"][] = "Batch_Paid";
$proto36["m_columns"][] = "lat";
$proto36["m_columns"][] = "lon";
$proto36["m_columns"][] = "last_chekin";
$proto36["m_columns"][] = "mydata";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "activators";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "Stock Availability";
$proto37=array();
$proto37["m_sql"] = "";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "Manager_Name",
	"m_strTable" => "activators",
	"m_srcTableName" => "Stock Availability"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Stock Availability";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Stock_Availability = createSqlQuery_Stock_Availability();


	
				
	
$tdataStock_Availability[".sqlquery"] = $queryData_Stock_Availability;

$tableEvents["Stock Availability"] = new eventsBase;
$tdataStock_Availability[".hasEvents"] = false;

?>