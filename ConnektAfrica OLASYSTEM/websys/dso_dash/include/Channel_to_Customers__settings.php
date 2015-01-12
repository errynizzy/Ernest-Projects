<?php
require_once(getabspath("classes/cipherer.php"));




$tdataChannel_to_Customers_ = array();	
	$tdataChannel_to_Customers_[".truncateText"] = true;
	$tdataChannel_to_Customers_[".NumberOfChars"] = 80; 
	$tdataChannel_to_Customers_[".ShortName"] = "Channel_to_Customers_";
	$tdataChannel_to_Customers_[".OwnerID"] = "";
	$tdataChannel_to_Customers_[".OriginalTable"] = "activators";

//	field labels
$fieldLabelsChannel_to_Customers_ = array();
$fieldToolTipsChannel_to_Customers_ = array();
$pageTitlesChannel_to_Customers_ = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsChannel_to_Customers_["English"] = array();
	$fieldToolTipsChannel_to_Customers_["English"] = array();
	$pageTitlesChannel_to_Customers_["English"] = array();
	$fieldLabelsChannel_to_Customers_["English"]["Outlet_Manager"] = "Outlet Manager";
	$fieldToolTipsChannel_to_Customers_["English"]["Outlet_Manager"] = "";
	$fieldLabelsChannel_to_Customers_["English"]["Outlet_Number"] = "Outlet Number";
	$fieldToolTipsChannel_to_Customers_["English"]["Outlet_Number"] = "";
	$fieldLabelsChannel_to_Customers_["English"]["Date"] = "Date";
	$fieldToolTipsChannel_to_Customers_["English"]["Date"] = "";
	$fieldLabelsChannel_to_Customers_["English"]["Sales"] = "Sales";
	$fieldToolTipsChannel_to_Customers_["English"]["Sales"] = "";
	$fieldLabelsChannel_to_Customers_["English"]["Total_Sales"] = "Total Sales";
	$fieldToolTipsChannel_to_Customers_["English"]["Total_Sales"] = "";
	if (count($fieldToolTipsChannel_to_Customers_["English"]))
		$tdataChannel_to_Customers_[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsChannel_to_Customers_[""] = array();
	$fieldToolTipsChannel_to_Customers_[""] = array();
	$pageTitlesChannel_to_Customers_[""] = array();
	if (count($fieldToolTipsChannel_to_Customers_[""]))
		$tdataChannel_to_Customers_[".isUseToolTips"] = true;
}
	
	
	$tdataChannel_to_Customers_[".NCSearch"] = true;



$tdataChannel_to_Customers_[".shortTableName"] = "Channel_to_Customers_";
$tdataChannel_to_Customers_[".nSecOptions"] = 0;
$tdataChannel_to_Customers_[".recsPerRowList"] = 1;
$tdataChannel_to_Customers_[".mainTableOwnerID"] = "";
$tdataChannel_to_Customers_[".moveNext"] = 1;
$tdataChannel_to_Customers_[".nType"] = 1;

$tdataChannel_to_Customers_[".strOriginalTableName"] = "activators";




$tdataChannel_to_Customers_[".showAddInPopup"] = false;

$tdataChannel_to_Customers_[".showEditInPopup"] = false;

$tdataChannel_to_Customers_[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataChannel_to_Customers_[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataChannel_to_Customers_[".fieldsForRegister"] = array();

$tdataChannel_to_Customers_[".listAjax"] = false;

	$tdataChannel_to_Customers_[".audit"] = false;

	$tdataChannel_to_Customers_[".locking"] = false;


$tdataChannel_to_Customers_[".list"] = true;

$tdataChannel_to_Customers_[".inlineAdd"] = true;

$tdataChannel_to_Customers_[".import"] = true;

$tdataChannel_to_Customers_[".exportTo"] = true;

$tdataChannel_to_Customers_[".printFriendly"] = true;


$tdataChannel_to_Customers_[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdataChannel_to_Customers_[".searchSaving"] = false;
//

$tdataChannel_to_Customers_[".showSearchPanel"] = true;
		$tdataChannel_to_Customers_[".flexibleSearch"] = true;		

if (isMobile())
	$tdataChannel_to_Customers_[".isUseAjaxSuggest"] = false;
else 
	$tdataChannel_to_Customers_[".isUseAjaxSuggest"] = true;

$tdataChannel_to_Customers_[".rowHighlite"] = true;



$tdataChannel_to_Customers_[".addPageEvents"] = false;

// use timepicker for search panel
$tdataChannel_to_Customers_[".isUseTimeForSearch"] = false;





$tdataChannel_to_Customers_[".allSearchFields"] = array();
$tdataChannel_to_Customers_[".filterFields"] = array();
$tdataChannel_to_Customers_[".requiredSearchFields"] = array();

$tdataChannel_to_Customers_[".allSearchFields"][] = "Outlet_Manager";
	$tdataChannel_to_Customers_[".allSearchFields"][] = "Outlet_Number";
	$tdataChannel_to_Customers_[".allSearchFields"][] = "Date";
	$tdataChannel_to_Customers_[".allSearchFields"][] = "Sales";
	$tdataChannel_to_Customers_[".allSearchFields"][] = "Total_Sales";
	

$tdataChannel_to_Customers_[".googleLikeFields"] = array();
$tdataChannel_to_Customers_[".googleLikeFields"][] = "Outlet_Manager";
$tdataChannel_to_Customers_[".googleLikeFields"][] = "Outlet_Number";
$tdataChannel_to_Customers_[".googleLikeFields"][] = "Date";
$tdataChannel_to_Customers_[".googleLikeFields"][] = "Sales";
$tdataChannel_to_Customers_[".googleLikeFields"][] = "Total_Sales";


$tdataChannel_to_Customers_[".advSearchFields"] = array();
$tdataChannel_to_Customers_[".advSearchFields"][] = "Outlet_Manager";
$tdataChannel_to_Customers_[".advSearchFields"][] = "Outlet_Number";
$tdataChannel_to_Customers_[".advSearchFields"][] = "Date";
$tdataChannel_to_Customers_[".advSearchFields"][] = "Sales";
$tdataChannel_to_Customers_[".advSearchFields"][] = "Total_Sales";

$tdataChannel_to_Customers_[".tableType"] = "list";

$tdataChannel_to_Customers_[".printerPageOrientation"] = 0;
$tdataChannel_to_Customers_[".nPrinterPageScale"] = 100;

$tdataChannel_to_Customers_[".nPrinterSplitRecords"] = 40;

$tdataChannel_to_Customers_[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataChannel_to_Customers_[".pageSize"] = 15;

$tdataChannel_to_Customers_[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataChannel_to_Customers_[".strOrderBy"] = $tstrOrderBy;

$tdataChannel_to_Customers_[".orderindexes"] = array();

$tdataChannel_to_Customers_[".sqlHead"] = "SELECT pos_visits.Manager_Name as Outlet_Manager,  pos_out.ORG_SERVICE_NUMBER as Outlet_Number,  pos_out.TRANSFER_DATE AS Date,   count(pos_out.ORG_SERVICE_NUMBER) as Sales,  sum(pos_out.CHARGE) as Total_Sales";
$tdataChannel_to_Customers_[".sqlFrom"] = "FROM  pos_out, pos_visits";
$tdataChannel_to_Customers_[".sqlWhereExpr"] = "pos_out.ORG_SERVICE_NUMBER = pos_visits.Activator_Number  AND  pos_visits.Sale = 'Yes'";
$tdataChannel_to_Customers_[".sqlTail"] = "GROUP BY  pos_out.ORG_SERVICE_NUMBER, pos_out.TRANSFER_DATE";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataChannel_to_Customers_[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataChannel_to_Customers_[".arrGroupsPerPage"] = $arrGPP;

$tdataChannel_to_Customers_[".highlightSearchResults"] = true;

$tableKeysChannel_to_Customers_ = array();
$tdataChannel_to_Customers_[".Keys"] = $tableKeysChannel_to_Customers_;

$tdataChannel_to_Customers_[".listFields"] = array();
$tdataChannel_to_Customers_[".listFields"][] = "Outlet_Manager";
$tdataChannel_to_Customers_[".listFields"][] = "Outlet_Number";
$tdataChannel_to_Customers_[".listFields"][] = "Date";
$tdataChannel_to_Customers_[".listFields"][] = "Sales";
$tdataChannel_to_Customers_[".listFields"][] = "Total_Sales";

$tdataChannel_to_Customers_[".hideMobileList"] = array();


$tdataChannel_to_Customers_[".viewFields"] = array();
$tdataChannel_to_Customers_[".viewFields"][] = "Outlet_Manager";
$tdataChannel_to_Customers_[".viewFields"][] = "Outlet_Number";
$tdataChannel_to_Customers_[".viewFields"][] = "Date";
$tdataChannel_to_Customers_[".viewFields"][] = "Sales";
$tdataChannel_to_Customers_[".viewFields"][] = "Total_Sales";

$tdataChannel_to_Customers_[".addFields"] = array();

$tdataChannel_to_Customers_[".inlineAddFields"] = array();

$tdataChannel_to_Customers_[".editFields"] = array();

$tdataChannel_to_Customers_[".inlineEditFields"] = array();

$tdataChannel_to_Customers_[".exportFields"] = array();
$tdataChannel_to_Customers_[".exportFields"][] = "Outlet_Manager";
$tdataChannel_to_Customers_[".exportFields"][] = "Outlet_Number";
$tdataChannel_to_Customers_[".exportFields"][] = "Date";
$tdataChannel_to_Customers_[".exportFields"][] = "Sales";
$tdataChannel_to_Customers_[".exportFields"][] = "Total_Sales";

$tdataChannel_to_Customers_[".importFields"] = array();
$tdataChannel_to_Customers_[".importFields"][] = "Outlet_Manager";
$tdataChannel_to_Customers_[".importFields"][] = "Outlet_Number";
$tdataChannel_to_Customers_[".importFields"][] = "Date";
$tdataChannel_to_Customers_[".importFields"][] = "Sales";
$tdataChannel_to_Customers_[".importFields"][] = "Total_Sales";

$tdataChannel_to_Customers_[".printFields"] = array();
$tdataChannel_to_Customers_[".printFields"][] = "Outlet_Manager";
$tdataChannel_to_Customers_[".printFields"][] = "Outlet_Number";
$tdataChannel_to_Customers_[".printFields"][] = "Date";
$tdataChannel_to_Customers_[".printFields"][] = "Sales";
$tdataChannel_to_Customers_[".printFields"][] = "Total_Sales";

//	Outlet_Manager
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Outlet_Manager";
	$fdata["GoodName"] = "Outlet_Manager";
	$fdata["ownerTable"] = "pos_visits";
	$fdata["Label"] = GetFieldLabel("Channel_to_Customers_","Outlet_Manager"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Manager_Name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pos_visits.Manager_Name";
	
		
		
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

	

	
	$tdataChannel_to_Customers_["Outlet_Manager"] = $fdata;
//	Outlet_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Outlet_Number";
	$fdata["GoodName"] = "Outlet_Number";
	$fdata["ownerTable"] = "pos_out";
	$fdata["Label"] = GetFieldLabel("Channel_to_Customers_","Outlet_Number"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ORG_SERVICE_NUMBER"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pos_out.ORG_SERVICE_NUMBER";
	
		
		
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

	

	
	$tdataChannel_to_Customers_["Outlet_Number"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "pos_out";
	$fdata["Label"] = GetFieldLabel("Channel_to_Customers_","Date"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TRANSFER_DATE"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pos_out.TRANSFER_DATE";
	
		
		
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

	

	
	$tdataChannel_to_Customers_["Date"] = $fdata;
//	Sales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Sales";
	$fdata["GoodName"] = "Sales";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Channel_to_Customers_","Sales"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Sales"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "count(pos_out.ORG_SERVICE_NUMBER)";
	
		
		
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

	

	
	$tdataChannel_to_Customers_["Sales"] = $fdata;
//	Total_Sales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Total_Sales";
	$fdata["GoodName"] = "Total_Sales";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Channel_to_Customers_","Total_Sales"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Total_Sales"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sum(pos_out.CHARGE)";
	
		
		
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

	

	
	$tdataChannel_to_Customers_["Total_Sales"] = $fdata;

	
$tables_data["Channel to Customers "]=&$tdataChannel_to_Customers_;
$field_labels["Channel_to_Customers_"] = &$fieldLabelsChannel_to_Customers_;
$fieldToolTips["Channel to Customers "] = &$fieldToolTipsChannel_to_Customers_;
$page_titles["Channel_to_Customers_"] = &$pageTitlesChannel_to_Customers_;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Channel to Customers "] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Channel to Customers "] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Channel_to_Customers_()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pos_visits.Manager_Name as Outlet_Manager,  pos_out.ORG_SERVICE_NUMBER as Outlet_Number,  pos_out.TRANSFER_DATE AS Date,   count(pos_out.ORG_SERVICE_NUMBER) as Sales,  sum(pos_out.CHARGE) as Total_Sales";
$proto0["m_strFrom"] = "FROM  pos_out, pos_visits";
$proto0["m_strWhere"] = "pos_out.ORG_SERVICE_NUMBER = pos_visits.Activator_Number  AND  pos_visits.Sale = 'Yes'";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY  pos_out.ORG_SERVICE_NUMBER, pos_out.TRANSFER_DATE";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "pos_out.ORG_SERVICE_NUMBER = pos_visits.Activator_Number  AND  pos_visits.Sale = 'Yes'";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "pos_out.ORG_SERVICE_NUMBER = pos_visits.Activator_Number  AND  pos_visits.Sale = 'Yes'"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "pos_out.ORG_SERVICE_NUMBER = pos_visits.Activator_Number";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ORG_SERVICE_NUMBER",
	"m_strTable" => "pos_out",
	"m_srcTableName" => "Channel to Customers "
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "= pos_visits.Activator_Number";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "pos_visits.Sale = 'Yes'";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Sale",
	"m_strTable" => "pos_visits",
	"m_srcTableName" => "Channel to Customers "
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "= 'Yes'";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto7=array();
$proto7["m_sql"] = "";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Name",
	"m_strTable" => "pos_visits",
	"m_srcTableName" => "Channel to Customers "
));

$proto9["m_sql"] = "pos_visits.Manager_Name";
$proto9["m_srcTableName"] = "Channel to Customers ";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "Outlet_Manager";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "ORG_SERVICE_NUMBER",
	"m_strTable" => "pos_out",
	"m_srcTableName" => "Channel to Customers "
));

$proto11["m_sql"] = "pos_out.ORG_SERVICE_NUMBER";
$proto11["m_srcTableName"] = "Channel to Customers ";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "Outlet_Number";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "TRANSFER_DATE",
	"m_strTable" => "pos_out",
	"m_srcTableName" => "Channel to Customers "
));

$proto13["m_sql"] = "pos_out.TRANSFER_DATE";
$proto13["m_srcTableName"] = "Channel to Customers ";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "Date";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$proto16=array();
$proto16["m_functiontype"] = "SQLF_COUNT";
$proto16["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "ORG_SERVICE_NUMBER",
	"m_strTable" => "pos_out",
	"m_srcTableName" => "Channel to Customers "
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "count";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "count(pos_out.ORG_SERVICE_NUMBER)";
$proto15["m_srcTableName"] = "Channel to Customers ";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "Sales";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_SUM";
$proto19["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "CHARGE",
	"m_strTable" => "pos_out",
	"m_srcTableName" => "Channel to Customers "
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "sum(pos_out.CHARGE)";
$proto18["m_srcTableName"] = "Channel to Customers ";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "Total_Sales";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "pos_out";
$proto22["m_srcTableName"] = "Channel to Customers ";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "ACCT_BOOK_ID";
$proto22["m_columns"][] = "TRANSFER_DATE";
$proto22["m_columns"][] = "ORIGIANL_CUSTOMER";
$proto22["m_columns"][] = "ORG_SERVICE_NUMBER";
$proto22["m_columns"][] = "CHARGE";
$proto22["m_columns"][] = "DESTINATION_CUSTOMER";
$proto22["m_columns"][] = "DEST_SERVICE_NUMBER";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "pos_out";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "Channel to Customers ";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
												$proto25=array();
$proto25["m_link"] = "SQLL_CROSSJOIN";
			$proto26=array();
$proto26["m_strName"] = "pos_visits";
$proto26["m_srcTableName"] = "Channel to Customers ";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "ID";
$proto26["m_columns"][] = "pos_type";
$proto26["m_columns"][] = "Manager_Name";
$proto26["m_columns"][] = "Manager_Number";
$proto26["m_columns"][] = "Activator_Name";
$proto26["m_columns"][] = "Activator_Number";
$proto26["m_columns"][] = "business_name";
$proto26["m_columns"][] = "altenative_number";
$proto26["m_columns"][] = "Area";
$proto26["m_columns"][] = "Date";
$proto26["m_columns"][] = "last_chekin";
$proto26["m_columns"][] = "Sale";
$proto26["m_columns"][] = "Transfer_Amount";
$proto26["m_columns"][] = "Transfer_From";
$proto26["m_columns"][] = "Transfer_Date";
$proto26["m_columns"][] = "My_Transfer";
$proto26["m_columns"][] = "mydata";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "pos_visits";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "Channel to Customers ";
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
	"m_strName" => "ORG_SERVICE_NUMBER",
	"m_strTable" => "pos_out",
	"m_srcTableName" => "Channel to Customers "
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "TRANSFER_DATE",
	"m_strTable" => "pos_out",
	"m_srcTableName" => "Channel to Customers "
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Channel to Customers ";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Channel_to_Customers_ = createSqlQuery_Channel_to_Customers_();


	
					
	
$tdataChannel_to_Customers_[".sqlquery"] = $queryData_Channel_to_Customers_;

$tableEvents["Channel to Customers "] = new eventsBase;
$tdataChannel_to_Customers_[".hasEvents"] = false;

?>