<?php
require_once(getabspath("classes/cipherer.php"));




$tdataActive_Freelancers_ = array();	
	$tdataActive_Freelancers_[".truncateText"] = true;
	$tdataActive_Freelancers_[".NumberOfChars"] = 80; 
	$tdataActive_Freelancers_[".ShortName"] = "Active_Freelancers_";
	$tdataActive_Freelancers_[".OwnerID"] = "";
	$tdataActive_Freelancers_[".OriginalTable"] = "activated_sims";

//	field labels
$fieldLabelsActive_Freelancers_ = array();
$fieldToolTipsActive_Freelancers_ = array();
$pageTitlesActive_Freelancers_ = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsActive_Freelancers_["English"] = array();
	$fieldToolTipsActive_Freelancers_["English"] = array();
	$pageTitlesActive_Freelancers_["English"] = array();
	$fieldLabelsActive_Freelancers_["English"]["Manager_Name"] = "Manager Name";
	$fieldToolTipsActive_Freelancers_["English"]["Manager_Name"] = "";
	$fieldLabelsActive_Freelancers_["English"]["Date"] = "Date";
	$fieldToolTipsActive_Freelancers_["English"]["Date"] = "";
	$fieldLabelsActive_Freelancers_["English"]["Title"] = "Title";
	$fieldToolTipsActive_Freelancers_["English"]["Title"] = "";
	$fieldLabelsActive_Freelancers_["English"]["Active_FL"] = "Active FL";
	$fieldToolTipsActive_Freelancers_["English"]["Active_FL"] = "";
	if (count($fieldToolTipsActive_Freelancers_["English"]))
		$tdataActive_Freelancers_[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsActive_Freelancers_[""] = array();
	$fieldToolTipsActive_Freelancers_[""] = array();
	$pageTitlesActive_Freelancers_[""] = array();
	$fieldLabelsActive_Freelancers_[""]["Date"] = "Date";
	$fieldToolTipsActive_Freelancers_[""]["Date"] = "";
	$fieldLabelsActive_Freelancers_[""]["Title"] = "Title";
	$fieldToolTipsActive_Freelancers_[""]["Title"] = "";
	$fieldLabelsActive_Freelancers_[""]["Active_FL"] = "Active FL";
	$fieldToolTipsActive_Freelancers_[""]["Active_FL"] = "";
	if (count($fieldToolTipsActive_Freelancers_[""]))
		$tdataActive_Freelancers_[".isUseToolTips"] = true;
}
	
	
	$tdataActive_Freelancers_[".NCSearch"] = true;



$tdataActive_Freelancers_[".shortTableName"] = "Active_Freelancers_";
$tdataActive_Freelancers_[".nSecOptions"] = 0;
$tdataActive_Freelancers_[".recsPerRowList"] = 1;
$tdataActive_Freelancers_[".mainTableOwnerID"] = "";
$tdataActive_Freelancers_[".moveNext"] = 1;
$tdataActive_Freelancers_[".nType"] = 1;

$tdataActive_Freelancers_[".strOriginalTableName"] = "activated_sims";




$tdataActive_Freelancers_[".showAddInPopup"] = false;

$tdataActive_Freelancers_[".showEditInPopup"] = false;

$tdataActive_Freelancers_[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataActive_Freelancers_[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataActive_Freelancers_[".fieldsForRegister"] = array();

$tdataActive_Freelancers_[".listAjax"] = false;

	$tdataActive_Freelancers_[".audit"] = false;

	$tdataActive_Freelancers_[".locking"] = false;


$tdataActive_Freelancers_[".list"] = true;

$tdataActive_Freelancers_[".inlineAdd"] = true;

$tdataActive_Freelancers_[".import"] = true;

$tdataActive_Freelancers_[".exportTo"] = true;

$tdataActive_Freelancers_[".printFriendly"] = true;


$tdataActive_Freelancers_[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataActive_Freelancers_[".searchSaving"] = false;
//

$tdataActive_Freelancers_[".showSearchPanel"] = true;
		$tdataActive_Freelancers_[".flexibleSearch"] = true;		

if (isMobile())
	$tdataActive_Freelancers_[".isUseAjaxSuggest"] = false;
else 
	$tdataActive_Freelancers_[".isUseAjaxSuggest"] = true;

$tdataActive_Freelancers_[".rowHighlite"] = true;



$tdataActive_Freelancers_[".addPageEvents"] = false;

// use timepicker for search panel
$tdataActive_Freelancers_[".isUseTimeForSearch"] = false;





$tdataActive_Freelancers_[".allSearchFields"] = array();
$tdataActive_Freelancers_[".filterFields"] = array();
$tdataActive_Freelancers_[".requiredSearchFields"] = array();

$tdataActive_Freelancers_[".allSearchFields"][] = "Manager_Name";
	$tdataActive_Freelancers_[".allSearchFields"][] = "Title";
	$tdataActive_Freelancers_[".allSearchFields"][] = "Date";
	$tdataActive_Freelancers_[".allSearchFields"][] = "Active_FL";
	

$tdataActive_Freelancers_[".googleLikeFields"] = array();
$tdataActive_Freelancers_[".googleLikeFields"][] = "Manager_Name";
$tdataActive_Freelancers_[".googleLikeFields"][] = "Title";
$tdataActive_Freelancers_[".googleLikeFields"][] = "Date";
$tdataActive_Freelancers_[".googleLikeFields"][] = "Active_FL";


$tdataActive_Freelancers_[".advSearchFields"] = array();
$tdataActive_Freelancers_[".advSearchFields"][] = "Manager_Name";
$tdataActive_Freelancers_[".advSearchFields"][] = "Title";
$tdataActive_Freelancers_[".advSearchFields"][] = "Date";
$tdataActive_Freelancers_[".advSearchFields"][] = "Active_FL";

$tdataActive_Freelancers_[".tableType"] = "list";

$tdataActive_Freelancers_[".printerPageOrientation"] = 0;
$tdataActive_Freelancers_[".nPrinterPageScale"] = 100;

$tdataActive_Freelancers_[".nPrinterSplitRecords"] = 40;

$tdataActive_Freelancers_[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataActive_Freelancers_[".pageSize"] = 20;

$tdataActive_Freelancers_[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataActive_Freelancers_[".strOrderBy"] = $tstrOrderBy;

$tdataActive_Freelancers_[".orderindexes"] = array();

$tdataActive_Freelancers_[".sqlHead"] = "SELECT simcards_batches.`Manager_Name` , Manager_Title as Title, Event_date as Date, count( DISTINCT(simcards_batches.Activator_Number )) AS Active_FL";
$tdataActive_Freelancers_[".sqlFrom"] = "FROM `simcards_batches`";
$tdataActive_Freelancers_[".sqlWhereExpr"] = "simcards_batches.`Status` = 'Active'  AND (Manager_Title = 'SC' OR Manager_Title = 'D/S')";
$tdataActive_Freelancers_[".sqlTail"] = "GROUP BY   simcards_batches.`Manager_Name` , Event_date";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataActive_Freelancers_[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataActive_Freelancers_[".arrGroupsPerPage"] = $arrGPP;

$tdataActive_Freelancers_[".highlightSearchResults"] = true;

$tableKeysActive_Freelancers_ = array();
$tdataActive_Freelancers_[".Keys"] = $tableKeysActive_Freelancers_;

$tdataActive_Freelancers_[".listFields"] = array();
$tdataActive_Freelancers_[".listFields"][] = "Manager_Name";
$tdataActive_Freelancers_[".listFields"][] = "Title";
$tdataActive_Freelancers_[".listFields"][] = "Date";
$tdataActive_Freelancers_[".listFields"][] = "Active_FL";

$tdataActive_Freelancers_[".hideMobileList"] = array();


$tdataActive_Freelancers_[".viewFields"] = array();
$tdataActive_Freelancers_[".viewFields"][] = "Manager_Name";
$tdataActive_Freelancers_[".viewFields"][] = "Title";
$tdataActive_Freelancers_[".viewFields"][] = "Date";
$tdataActive_Freelancers_[".viewFields"][] = "Active_FL";

$tdataActive_Freelancers_[".addFields"] = array();

$tdataActive_Freelancers_[".inlineAddFields"] = array();

$tdataActive_Freelancers_[".editFields"] = array();

$tdataActive_Freelancers_[".inlineEditFields"] = array();

$tdataActive_Freelancers_[".exportFields"] = array();
$tdataActive_Freelancers_[".exportFields"][] = "Manager_Name";
$tdataActive_Freelancers_[".exportFields"][] = "Title";
$tdataActive_Freelancers_[".exportFields"][] = "Date";
$tdataActive_Freelancers_[".exportFields"][] = "Active_FL";

$tdataActive_Freelancers_[".importFields"] = array();
$tdataActive_Freelancers_[".importFields"][] = "Manager_Name";
$tdataActive_Freelancers_[".importFields"][] = "Title";
$tdataActive_Freelancers_[".importFields"][] = "Date";
$tdataActive_Freelancers_[".importFields"][] = "Active_FL";

$tdataActive_Freelancers_[".printFields"] = array();
$tdataActive_Freelancers_[".printFields"][] = "Manager_Name";
$tdataActive_Freelancers_[".printFields"][] = "Title";
$tdataActive_Freelancers_[".printFields"][] = "Date";
$tdataActive_Freelancers_[".printFields"][] = "Active_FL";

//	Manager_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Manager_Name";
	$fdata["GoodName"] = "Manager_Name";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Active_Freelancers_","Manager_Name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Manager_Name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "simcards_batches.`Manager_Name`";
	
		
		
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

	

	
	$tdataActive_Freelancers_["Manager_Name"] = $fdata;
//	Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Title";
	$fdata["GoodName"] = "Title";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Active_Freelancers_","Title"); 
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

	

	
	$tdataActive_Freelancers_["Title"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Active_Freelancers_","Date"); 
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

	

	
	$tdataActive_Freelancers_["Date"] = $fdata;
//	Active_FL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Active_FL";
	$fdata["GoodName"] = "Active_FL";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Active_Freelancers_","Active_FL"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Active_FL"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "count( DISTINCT(simcards_batches.Activator_Number ))";
	
		
		
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

	

	
	$tdataActive_Freelancers_["Active_FL"] = $fdata;

	
$tables_data["Active Freelancers "]=&$tdataActive_Freelancers_;
$field_labels["Active_Freelancers_"] = &$fieldLabelsActive_Freelancers_;
$fieldToolTips["Active Freelancers "] = &$fieldToolTipsActive_Freelancers_;
$page_titles["Active_Freelancers_"] = &$pageTitlesActive_Freelancers_;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Active Freelancers "] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Active Freelancers "] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Active_Freelancers_()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "simcards_batches.`Manager_Name` , Manager_Title as Title, Event_date as Date, count( DISTINCT(simcards_batches.Activator_Number )) AS Active_FL";
$proto0["m_strFrom"] = "FROM `simcards_batches`";
$proto0["m_strWhere"] = "simcards_batches.`Status` = 'Active'  AND (Manager_Title = 'SC' OR Manager_Title = 'D/S')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY   simcards_batches.`Manager_Name` , Event_date";
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
	"m_srcTableName" => "Active Freelancers "
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
	"m_srcTableName" => "Active Freelancers "
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
	"m_srcTableName" => "Active Freelancers "
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
	"m_strName" => "Manager_Name",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Active Freelancers "
));

$proto13["m_sql"] = "simcards_batches.`Manager_Name`";
$proto13["m_srcTableName"] = "Active Freelancers ";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Active Freelancers "
));

$proto15["m_sql"] = "Manager_Title";
$proto15["m_srcTableName"] = "Active Freelancers ";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "Title";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_date",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Active Freelancers "
));

$proto17["m_sql"] = "Event_date";
$proto17["m_srcTableName"] = "Active Freelancers ";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Date";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$proto20=array();
$proto20["m_functiontype"] = "SQLF_COUNT";
$proto20["m_arguments"] = array();
						$proto21=array();
$proto21["m_functiontype"] = "SQLF_CUSTOM";
$proto21["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "simcards_batches.Activator_Number"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "DISTINCT";
$obj = new SQLFunctionCall($proto21);

$proto20["m_arguments"][]=$obj;
$proto20["m_strFunctionName"] = "count";
$obj = new SQLFunctionCall($proto20);

$proto19["m_sql"] = "count( DISTINCT(simcards_batches.Activator_Number ))";
$proto19["m_srcTableName"] = "Active Freelancers ";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "Active_FL";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "simcards_batches";
$proto24["m_srcTableName"] = "Active Freelancers ";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "ID";
$proto24["m_columns"][] = "batch_name";
$proto24["m_columns"][] = "ICCID";
$proto24["m_columns"][] = "Status";
$proto24["m_columns"][] = "Manager_Name";
$proto24["m_columns"][] = "Manager_Title";
$proto24["m_columns"][] = "Activator_Number";
$proto24["m_columns"][] = "Activator_Name";
$proto24["m_columns"][] = "Team_Leader";
$proto24["m_columns"][] = "Event_date";
$proto24["m_columns"][] = "time";
$proto24["m_columns"][] = "Active_MSISDN";
$proto24["m_columns"][] = "New_MSISDN";
$proto24["m_columns"][] = "Swap_Date";
$proto24["m_columns"][] = "Airtime_transered";
$proto24["m_columns"][] = "Transfer_date";
$proto24["m_columns"][] = "Activation_Commission";
$proto24["m_columns"][] = "Form_Commission";
$proto24["m_columns"][] = "Form_Paid_Date";
$proto24["m_columns"][] = "Form_Returned";
$proto24["m_columns"][] = "Form_Status";
$proto24["m_columns"][] = "Form_Date";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "`simcards_batches`";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "Active Freelancers ";
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
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "Manager_Name",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Active Freelancers "
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "Event_date",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Active Freelancers "
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Active Freelancers ";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Active_Freelancers_ = createSqlQuery_Active_Freelancers_();


	
				
	
$tdataActive_Freelancers_[".sqlquery"] = $queryData_Active_Freelancers_;

$tableEvents["Active Freelancers "] = new eventsBase;
$tdataActive_Freelancers_[".hasEvents"] = false;

?>