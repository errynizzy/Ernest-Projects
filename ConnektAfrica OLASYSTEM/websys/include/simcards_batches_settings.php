<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasimcards_batches = array();	
	$tdatasimcards_batches[".truncateText"] = true;
	$tdatasimcards_batches[".NumberOfChars"] = 80; 
	$tdatasimcards_batches[".ShortName"] = "simcards_batches";
	$tdatasimcards_batches[".OwnerID"] = "";
	$tdatasimcards_batches[".OriginalTable"] = "simcards_batches";

//	field labels
$fieldLabelssimcards_batches = array();
$fieldToolTipssimcards_batches = array();
$pageTitlessimcards_batches = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssimcards_batches["English"] = array();
	$fieldToolTipssimcards_batches["English"] = array();
	$pageTitlessimcards_batches["English"] = array();
	$fieldLabelssimcards_batches["English"]["Manager_Name"] = "Manager Name";
	$fieldToolTipssimcards_batches["English"]["Manager_Name"] = "";
	$fieldLabelssimcards_batches["English"]["Total_Activation"] = "Total Activation";
	$fieldToolTipssimcards_batches["English"]["Total_Activation"] = "";
	$fieldLabelssimcards_batches["English"]["With_Airtime"] = "With Airtime";
	$fieldToolTipssimcards_batches["English"]["With_Airtime"] = "";
	$fieldLabelssimcards_batches["English"]["Without_Airtime"] = "Without Airtime";
	$fieldToolTipssimcards_batches["English"]["Without_Airtime"] = "";
	$fieldLabelssimcards_batches["English"]["Event_date"] = "Event Date";
	$fieldToolTipssimcards_batches["English"]["Event_date"] = "";
	$fieldLabelssimcards_batches["English"]["Airtime_transered"] = "Percentage %";
	$fieldToolTipssimcards_batches["English"]["Airtime_transered"] = "";
	if (count($fieldToolTipssimcards_batches["English"]))
		$tdatasimcards_batches[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssimcards_batches[""] = array();
	$fieldToolTipssimcards_batches[""] = array();
	$pageTitlessimcards_batches[""] = array();
	if (count($fieldToolTipssimcards_batches[""]))
		$tdatasimcards_batches[".isUseToolTips"] = true;
}
	
	
	$tdatasimcards_batches[".NCSearch"] = true;



$tdatasimcards_batches[".shortTableName"] = "simcards_batches";
$tdatasimcards_batches[".nSecOptions"] = 0;
$tdatasimcards_batches[".recsPerRowList"] = 1;
$tdatasimcards_batches[".mainTableOwnerID"] = "";
$tdatasimcards_batches[".moveNext"] = 1;
$tdatasimcards_batches[".nType"] = 0;

$tdatasimcards_batches[".strOriginalTableName"] = "simcards_batches";

	


$tdatasimcards_batches[".showAddInPopup"] = true;

$tdatasimcards_batches[".showEditInPopup"] = true;

$tdatasimcards_batches[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
			;
$popupPagesLayoutNames["add"] = "view2";
			;
$popupPagesLayoutNames["edit"] = "view2";
			;
$popupPagesLayoutNames["view"] = "view2";
$tdatasimcards_batches[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasimcards_batches[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatasimcards_batches[".listAjax"] = true;
else 
	$tdatasimcards_batches[".listAjax"] = false;

	$tdatasimcards_batches[".audit"] = false;

	$tdatasimcards_batches[".locking"] = false;


$tdatasimcards_batches[".exportTo"] = true;



$tdatasimcards_batches[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasimcards_batches[".searchSaving"] = false;
//

$tdatasimcards_batches[".showSearchPanel"] = true;
		$tdatasimcards_batches[".flexibleSearch"] = true;		

if (isMobile())
	$tdatasimcards_batches[".isUseAjaxSuggest"] = false;
else 
	$tdatasimcards_batches[".isUseAjaxSuggest"] = true;

$tdatasimcards_batches[".rowHighlite"] = true;



$tdatasimcards_batches[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasimcards_batches[".isUseTimeForSearch"] = false;





$tdatasimcards_batches[".allSearchFields"] = array();
$tdatasimcards_batches[".filterFields"] = array();
$tdatasimcards_batches[".requiredSearchFields"] = array();

$tdatasimcards_batches[".allSearchFields"][] = "Manager_Name";
		$tdatasimcards_batches[".allSearchFields"][] = "Event_date";
		$tdatasimcards_batches[".allSearchFields"][] = "Total_Activation";
		$tdatasimcards_batches[".allSearchFields"][] = "With_Airtime";
		$tdatasimcards_batches[".allSearchFields"][] = "Without_Airtime";
		$tdatasimcards_batches[".allSearchFields"][] = "Airtime_transered";
		
$tdatasimcards_batches[".googleLikeFields"] = array();
$tdatasimcards_batches[".googleLikeFields"][] = "Manager_Name";
$tdatasimcards_batches[".googleLikeFields"][] = "Total_Activation";
$tdatasimcards_batches[".googleLikeFields"][] = "With_Airtime";
$tdatasimcards_batches[".googleLikeFields"][] = "Without_Airtime";
$tdatasimcards_batches[".googleLikeFields"][] = "Event_date";
$tdatasimcards_batches[".googleLikeFields"][] = "Airtime_transered";


$tdatasimcards_batches[".advSearchFields"] = array();
$tdatasimcards_batches[".advSearchFields"][] = "Manager_Name";
$tdatasimcards_batches[".advSearchFields"][] = "Event_date";
$tdatasimcards_batches[".advSearchFields"][] = "Total_Activation";
$tdatasimcards_batches[".advSearchFields"][] = "With_Airtime";
$tdatasimcards_batches[".advSearchFields"][] = "Without_Airtime";
$tdatasimcards_batches[".advSearchFields"][] = "Airtime_transered";

$tdatasimcards_batches[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdatasimcards_batches[".pageSize"] = 20;

$tdatasimcards_batches[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasimcards_batches[".strOrderBy"] = $tstrOrderBy;

$tdatasimcards_batches[".orderindexes"] = array();

$tdatasimcards_batches[".sqlHead"] = "SELECT Manager_Name,  SUM(`Status` = 'Active') AS Total_Activation,  SUM(`Airtime_transered` > 999) AS With_Airtime,  SUM(`Airtime_transered` < 999) AS Without_Airtime,  Event_date,  Airtime_transered";
$tdatasimcards_batches[".sqlFrom"] = "FROM simcards_batches";
$tdatasimcards_batches[".sqlWhereExpr"] = "Status = 'Active'";
$tdatasimcards_batches[".sqlTail"] = "GROUP BY Manager_Name, Event_date";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasimcards_batches[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasimcards_batches[".arrGroupsPerPage"] = $arrGPP;

$tdatasimcards_batches[".highlightSearchResults"] = true;

$tableKeyssimcards_batches = array();
$tdatasimcards_batches[".Keys"] = $tableKeyssimcards_batches;

$tdatasimcards_batches[".listFields"] = array();
$tdatasimcards_batches[".listFields"][] = "Manager_Name";
$tdatasimcards_batches[".listFields"][] = "Event_date";
$tdatasimcards_batches[".listFields"][] = "Total_Activation";
$tdatasimcards_batches[".listFields"][] = "With_Airtime";
$tdatasimcards_batches[".listFields"][] = "Without_Airtime";
$tdatasimcards_batches[".listFields"][] = "Airtime_transered";

$tdatasimcards_batches[".hideMobileList"] = array();


$tdatasimcards_batches[".viewFields"] = array();

$tdatasimcards_batches[".addFields"] = array();

$tdatasimcards_batches[".inlineAddFields"] = array();

$tdatasimcards_batches[".editFields"] = array();

$tdatasimcards_batches[".inlineEditFields"] = array();

$tdatasimcards_batches[".exportFields"] = array();
$tdatasimcards_batches[".exportFields"][] = "Manager_Name";
$tdatasimcards_batches[".exportFields"][] = "Event_date";
$tdatasimcards_batches[".exportFields"][] = "Total_Activation";
$tdatasimcards_batches[".exportFields"][] = "With_Airtime";
$tdatasimcards_batches[".exportFields"][] = "Without_Airtime";
$tdatasimcards_batches[".exportFields"][] = "Airtime_transered";

$tdatasimcards_batches[".printFields"] = array();

//	Manager_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Manager_Name";
	$fdata["GoodName"] = "Manager_Name";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("simcards_batches","Manager_Name"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Manager_Name"; 
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

	

	
	$tdatasimcards_batches["Manager_Name"] = $fdata;
//	Total_Activation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Total_Activation";
	$fdata["GoodName"] = "Total_Activation";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("simcards_batches","Total_Activation"); 
	$fdata["FieldType"] = 14;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Total_Activation"; 
		$fdata["FullName"] = "SUM(`Status` = 'Active')";
	
		
		
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

	

	
	$tdatasimcards_batches["Total_Activation"] = $fdata;
//	With_Airtime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "With_Airtime";
	$fdata["GoodName"] = "With_Airtime";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("simcards_batches","With_Airtime"); 
	$fdata["FieldType"] = 14;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "With_Airtime"; 
		$fdata["FullName"] = "SUM(`Airtime_transered` > 999)";
	
		
		
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

	

	
	$tdatasimcards_batches["With_Airtime"] = $fdata;
//	Without_Airtime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Without_Airtime";
	$fdata["GoodName"] = "Without_Airtime";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("simcards_batches","Without_Airtime"); 
	$fdata["FieldType"] = 14;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Without_Airtime"; 
		$fdata["FullName"] = "SUM(`Airtime_transered` < 999)";
	
		
		
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

	

	
	$tdatasimcards_batches["Without_Airtime"] = $fdata;
//	Event_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Event_date";
	$fdata["GoodName"] = "Event_date";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("simcards_batches","Event_date"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Event_date"; 
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

	

	
	$tdatasimcards_batches["Event_date"] = $fdata;
//	Airtime_transered
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Airtime_transered";
	$fdata["GoodName"] = "Airtime_transered";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("simcards_batches","Airtime_transered"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Airtime_transered"; 
		$fdata["FullName"] = "Airtime_transered";
	
		
		
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

	

	
	$tdatasimcards_batches["Airtime_transered"] = $fdata;

	
$tables_data["simcards_batches"]=&$tdatasimcards_batches;
$field_labels["simcards_batches"] = &$fieldLabelssimcards_batches;
$fieldToolTips["simcards_batches"] = &$fieldToolTipssimcards_batches;
$page_titles["simcards_batches"] = &$pageTitlessimcards_batches;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["simcards_batches"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["simcards_batches"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_simcards_batches()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "Manager_Name,  SUM(`Status` = 'Active') AS Total_Activation,  SUM(`Airtime_transered` > 999) AS With_Airtime,  SUM(`Airtime_transered` < 999) AS Without_Airtime,  Event_date,  Airtime_transered";
$proto3["m_strFrom"] = "FROM simcards_batches";
$proto3["m_strWhere"] = "Status = 'Active'";
$proto3["m_strOrderBy"] = "";
$proto3["m_strTail"] = "GROUP BY Manager_Name, Event_date";
			$proto3["cipherer"] = null;
$proto4=array();
$proto4["m_sql"] = "Status = 'Active'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "simcards_batches"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= 'Active'";
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
	"m_strName" => "Manager_Name",
	"m_strTable" => "simcards_batches"
));

$proto8["m_sql"] = "Manager_Name";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_SUM";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`Status` = 'Active'"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "SUM(`Status` = 'Active')";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Total_Activation";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_functiontype"] = "SQLF_SUM";
$proto14["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`Airtime_transered` > 999"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "SUM(`Airtime_transered` > 999)";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "With_Airtime";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_SUM";
$proto17["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`Airtime_transered` < 999"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "SUM(`Airtime_transered` < 999)";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "Without_Airtime";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_date",
	"m_strTable" => "simcards_batches"
));

$proto19["m_sql"] = "Event_date";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto3["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Airtime_transered",
	"m_strTable" => "simcards_batches"
));

$proto21["m_sql"] = "Airtime_transered";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "simcards_batches";
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
$proto23["m_sql"] = "simcards_batches";
$proto23["m_alias"] = "";
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

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "Manager_Name",
	"m_strTable" => "simcards_batches"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto3["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "Event_date",
	"m_strTable" => "simcards_batches"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto3["m_groupby"][]=$obj;
$proto3["m_orderby"] = array();
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_simcards_batches = createSqlQuery_simcards_batches();

						
	
$tdatasimcards_batches[".sqlquery"] = $queryData_simcards_batches;

$tableEvents["simcards_batches"] = new eventsBase;
$tdatasimcards_batches[".hasEvents"] = false;

$cipherer = new RunnerCipherer("simcards_batches");

?>