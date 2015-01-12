<?php
require_once(getabspath("classes/cipherer.php"));




$tdataNew_Outlets_Per_week = array();	
	$tdataNew_Outlets_Per_week[".truncateText"] = true;
	$tdataNew_Outlets_Per_week[".NumberOfChars"] = 80; 
	$tdataNew_Outlets_Per_week[".ShortName"] = "New_Outlets_Per_week";
	$tdataNew_Outlets_Per_week[".OwnerID"] = "";
	$tdataNew_Outlets_Per_week[".OriginalTable"] = "activators";

//	field labels
$fieldLabelsNew_Outlets_Per_week = array();
$fieldToolTipsNew_Outlets_Per_week = array();
$pageTitlesNew_Outlets_Per_week = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsNew_Outlets_Per_week["English"] = array();
	$fieldToolTipsNew_Outlets_Per_week["English"] = array();
	$pageTitlesNew_Outlets_Per_week["English"] = array();
	$fieldLabelsNew_Outlets_Per_week["English"]["Manager_Name"] = "Manager Name";
	$fieldToolTipsNew_Outlets_Per_week["English"]["Manager_Name"] = "";
	$fieldLabelsNew_Outlets_Per_week["English"]["New_POS"] = "New POS";
	$fieldToolTipsNew_Outlets_Per_week["English"]["New_POS"] = "";
	$fieldLabelsNew_Outlets_Per_week["English"]["Week_Start"] = "Week Start";
	$fieldToolTipsNew_Outlets_Per_week["English"]["Week_Start"] = "";
	$fieldLabelsNew_Outlets_Per_week["English"]["Week_End"] = "Week End";
	$fieldToolTipsNew_Outlets_Per_week["English"]["Week_End"] = "";
	$fieldLabelsNew_Outlets_Per_week["English"]["Title"] = "Title";
	$fieldToolTipsNew_Outlets_Per_week["English"]["Title"] = "";
	if (count($fieldToolTipsNew_Outlets_Per_week["English"]))
		$tdataNew_Outlets_Per_week[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsNew_Outlets_Per_week[""] = array();
	$fieldToolTipsNew_Outlets_Per_week[""] = array();
	$pageTitlesNew_Outlets_Per_week[""] = array();
	$fieldLabelsNew_Outlets_Per_week[""]["Week_Start"] = "Week Start";
	$fieldToolTipsNew_Outlets_Per_week[""]["Week_Start"] = "";
	$fieldLabelsNew_Outlets_Per_week[""]["Week_End"] = "Week End";
	$fieldToolTipsNew_Outlets_Per_week[""]["Week_End"] = "";
	$fieldLabelsNew_Outlets_Per_week[""]["Title"] = "Title";
	$fieldToolTipsNew_Outlets_Per_week[""]["Title"] = "";
	if (count($fieldToolTipsNew_Outlets_Per_week[""]))
		$tdataNew_Outlets_Per_week[".isUseToolTips"] = true;
}
	
	
	$tdataNew_Outlets_Per_week[".NCSearch"] = true;



$tdataNew_Outlets_Per_week[".shortTableName"] = "New_Outlets_Per_week";
$tdataNew_Outlets_Per_week[".nSecOptions"] = 0;
$tdataNew_Outlets_Per_week[".recsPerRowList"] = 1;
$tdataNew_Outlets_Per_week[".mainTableOwnerID"] = "";
$tdataNew_Outlets_Per_week[".moveNext"] = 1;
$tdataNew_Outlets_Per_week[".nType"] = 1;

$tdataNew_Outlets_Per_week[".strOriginalTableName"] = "activators";




$tdataNew_Outlets_Per_week[".showAddInPopup"] = false;

$tdataNew_Outlets_Per_week[".showEditInPopup"] = false;

$tdataNew_Outlets_Per_week[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataNew_Outlets_Per_week[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataNew_Outlets_Per_week[".fieldsForRegister"] = array();

$tdataNew_Outlets_Per_week[".listAjax"] = false;

	$tdataNew_Outlets_Per_week[".audit"] = false;

	$tdataNew_Outlets_Per_week[".locking"] = false;


$tdataNew_Outlets_Per_week[".list"] = true;



$tdataNew_Outlets_Per_week[".exportTo"] = true;



$tdataNew_Outlets_Per_week[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdataNew_Outlets_Per_week[".searchSaving"] = false;
//

$tdataNew_Outlets_Per_week[".showSearchPanel"] = true;
		$tdataNew_Outlets_Per_week[".flexibleSearch"] = true;		

if (isMobile())
	$tdataNew_Outlets_Per_week[".isUseAjaxSuggest"] = false;
else 
	$tdataNew_Outlets_Per_week[".isUseAjaxSuggest"] = true;

$tdataNew_Outlets_Per_week[".rowHighlite"] = true;



$tdataNew_Outlets_Per_week[".addPageEvents"] = false;

// use timepicker for search panel
$tdataNew_Outlets_Per_week[".isUseTimeForSearch"] = false;





$tdataNew_Outlets_Per_week[".allSearchFields"] = array();
$tdataNew_Outlets_Per_week[".filterFields"] = array();
$tdataNew_Outlets_Per_week[".requiredSearchFields"] = array();

$tdataNew_Outlets_Per_week[".allSearchFields"][] = "Manager_Name";
	$tdataNew_Outlets_Per_week[".allSearchFields"][] = "Title";
	$tdataNew_Outlets_Per_week[".allSearchFields"][] = "New_POS";
	$tdataNew_Outlets_Per_week[".allSearchFields"][] = "Week_Start";
	$tdataNew_Outlets_Per_week[".allSearchFields"][] = "Week_End";
	

$tdataNew_Outlets_Per_week[".googleLikeFields"] = array();
$tdataNew_Outlets_Per_week[".googleLikeFields"][] = "Manager_Name";
$tdataNew_Outlets_Per_week[".googleLikeFields"][] = "Title";
$tdataNew_Outlets_Per_week[".googleLikeFields"][] = "New_POS";
$tdataNew_Outlets_Per_week[".googleLikeFields"][] = "Week_Start";
$tdataNew_Outlets_Per_week[".googleLikeFields"][] = "Week_End";


$tdataNew_Outlets_Per_week[".advSearchFields"] = array();
$tdataNew_Outlets_Per_week[".advSearchFields"][] = "Manager_Name";
$tdataNew_Outlets_Per_week[".advSearchFields"][] = "Title";
$tdataNew_Outlets_Per_week[".advSearchFields"][] = "New_POS";
$tdataNew_Outlets_Per_week[".advSearchFields"][] = "Week_Start";
$tdataNew_Outlets_Per_week[".advSearchFields"][] = "Week_End";

$tdataNew_Outlets_Per_week[".tableType"] = "list";

$tdataNew_Outlets_Per_week[".printerPageOrientation"] = 0;
$tdataNew_Outlets_Per_week[".nPrinterPageScale"] = 100;

$tdataNew_Outlets_Per_week[".nPrinterSplitRecords"] = 40;

$tdataNew_Outlets_Per_week[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataNew_Outlets_Per_week[".pageSize"] = 15;

$tdataNew_Outlets_Per_week[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataNew_Outlets_Per_week[".strOrderBy"] = $tstrOrderBy;

$tdataNew_Outlets_Per_week[".orderindexes"] = array();

$tdataNew_Outlets_Per_week[".sqlHead"] = "SELECT Manager_Name,  Manager_Title as Title,  COUNT(Activator_Number) AS New_POS,  DATE_FORMAT( DATE_SUB( NOW( ) , INTERVAL 7  DAY ) , '%m/%d/%Y' ) AS Week_Start,  DATE_FORMAT( NOW( ) , '%m/%d/%Y' ) AS Week_End";
$tdataNew_Outlets_Per_week[".sqlFrom"] = "FROM activators";
$tdataNew_Outlets_Per_week[".sqlWhereExpr"] = "(registration_date BETWEEN DATE_FORMAT( DATE_SUB( NOW( ) , INTERVAL 7  DAY ) , '%m/%d/%Y' )  AND DATE_FORMAT( NOW( ) , '%m/%d/%Y' )) AND (Manager_Title = 'DSO' OR Manager_Title = 'RDO')";
$tdataNew_Outlets_Per_week[".sqlTail"] = "GROUP BY Manager_Name";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataNew_Outlets_Per_week[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataNew_Outlets_Per_week[".arrGroupsPerPage"] = $arrGPP;

$tdataNew_Outlets_Per_week[".highlightSearchResults"] = true;

$tableKeysNew_Outlets_Per_week = array();
$tdataNew_Outlets_Per_week[".Keys"] = $tableKeysNew_Outlets_Per_week;

$tdataNew_Outlets_Per_week[".listFields"] = array();
$tdataNew_Outlets_Per_week[".listFields"][] = "Manager_Name";
$tdataNew_Outlets_Per_week[".listFields"][] = "Title";
$tdataNew_Outlets_Per_week[".listFields"][] = "New_POS";
$tdataNew_Outlets_Per_week[".listFields"][] = "Week_Start";
$tdataNew_Outlets_Per_week[".listFields"][] = "Week_End";

$tdataNew_Outlets_Per_week[".hideMobileList"] = array();


$tdataNew_Outlets_Per_week[".viewFields"] = array();

$tdataNew_Outlets_Per_week[".addFields"] = array();

$tdataNew_Outlets_Per_week[".inlineAddFields"] = array();

$tdataNew_Outlets_Per_week[".editFields"] = array();

$tdataNew_Outlets_Per_week[".inlineEditFields"] = array();

$tdataNew_Outlets_Per_week[".exportFields"] = array();
$tdataNew_Outlets_Per_week[".exportFields"][] = "Manager_Name";
$tdataNew_Outlets_Per_week[".exportFields"][] = "Title";
$tdataNew_Outlets_Per_week[".exportFields"][] = "New_POS";
$tdataNew_Outlets_Per_week[".exportFields"][] = "Week_Start";
$tdataNew_Outlets_Per_week[".exportFields"][] = "Week_End";

$tdataNew_Outlets_Per_week[".importFields"] = array();

$tdataNew_Outlets_Per_week[".printFields"] = array();

//	Manager_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Manager_Name";
	$fdata["GoodName"] = "Manager_Name";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("New_Outlets_Per_week","Manager_Name"); 
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

	

	
	$tdataNew_Outlets_Per_week["Manager_Name"] = $fdata;
//	Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Title";
	$fdata["GoodName"] = "Title";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("New_Outlets_Per_week","Title"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
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

	

	
	$tdataNew_Outlets_Per_week["Title"] = $fdata;
//	New_POS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "New_POS";
	$fdata["GoodName"] = "New_POS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("New_Outlets_Per_week","New_POS"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "New_POS"; 
	
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

	

	
	$tdataNew_Outlets_Per_week["New_POS"] = $fdata;
//	Week_Start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Week_Start";
	$fdata["GoodName"] = "Week_Start";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("New_Outlets_Per_week","Week_Start"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Week_Start"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE_FORMAT( DATE_SUB( NOW( ) , INTERVAL 7  DAY ) , '%m/%d/%Y' )";
	
		
		
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

	

	
	$tdataNew_Outlets_Per_week["Week_Start"] = $fdata;
//	Week_End
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Week_End";
	$fdata["GoodName"] = "Week_End";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("New_Outlets_Per_week","Week_End"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Week_End"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE_FORMAT( NOW( ) , '%m/%d/%Y' )";
	
		
		
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

	

	
	$tdataNew_Outlets_Per_week["Week_End"] = $fdata;

	
$tables_data["New Outlets Per week"]=&$tdataNew_Outlets_Per_week;
$field_labels["New_Outlets_Per_week"] = &$fieldLabelsNew_Outlets_Per_week;
$fieldToolTips["New Outlets Per week"] = &$fieldToolTipsNew_Outlets_Per_week;
$page_titles["New_Outlets_Per_week"] = &$pageTitlesNew_Outlets_Per_week;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["New Outlets Per week"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["New Outlets Per week"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_New_Outlets_Per_week()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Manager_Name,  Manager_Title as Title,  COUNT(Activator_Number) AS New_POS,  DATE_FORMAT( DATE_SUB( NOW( ) , INTERVAL 7  DAY ) , '%m/%d/%Y' ) AS Week_Start,  DATE_FORMAT( NOW( ) , '%m/%d/%Y' ) AS Week_End";
$proto0["m_strFrom"] = "FROM activators";
$proto0["m_strWhere"] = "(registration_date BETWEEN DATE_FORMAT( DATE_SUB( NOW( ) , INTERVAL 7  DAY ) , '%m/%d/%Y' )  AND DATE_FORMAT( NOW( ) , '%m/%d/%Y' )) AND (Manager_Title = 'DSO' OR Manager_Title = 'RDO')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY Manager_Name";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(registration_date BETWEEN DATE_FORMAT( DATE_SUB( NOW( ) , INTERVAL 7  DAY ) , '%m/%d/%Y' )  AND DATE_FORMAT( NOW( ) , '%m/%d/%Y' )) AND (Manager_Title = 'DSO' OR Manager_Title = 'RDO')";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(registration_date BETWEEN DATE_FORMAT( DATE_SUB( NOW( ) , INTERVAL 7  DAY ) , '%m/%d/%Y' )  AND DATE_FORMAT( NOW( ) , '%m/%d/%Y' )) AND (Manager_Title = 'DSO' OR Manager_Title = 'RDO')"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "registration_date BETWEEN DATE_FORMAT( DATE_SUB( NOW( ) , INTERVAL 7  DAY ) , '%m/%d/%Y' )  AND DATE_FORMAT( NOW( ) , '%m/%d/%Y' )";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "registration_date",
	"m_strTable" => "activators",
	"m_srcTableName" => "New Outlets Per week"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "BETWEEN DATE_FORMAT( DATE_SUB( NOW( ) , INTERVAL 7  DAY ) , '%m/%d/%Y' )  AND DATE_FORMAT( NOW( ) , '%m/%d/%Y' )";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "Manager_Title = 'DSO' OR Manager_Title = 'RDO'";
$proto5["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "Manager_Title = 'DSO' OR Manager_Title = 'RDO'"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
						$proto7=array();
$proto7["m_sql"] = "Manager_Title = 'DSO'";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "activators",
	"m_srcTableName" => "New Outlets Per week"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "= 'DSO'";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

			$proto5["m_contained"][]=$obj;
						$proto9=array();
$proto9["m_sql"] = "Manager_Title = 'RDO'";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "activators",
	"m_srcTableName" => "New Outlets Per week"
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "= 'RDO'";
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
	"m_strTable" => "activators",
	"m_srcTableName" => "New Outlets Per week"
));

$proto13["m_sql"] = "Manager_Name";
$proto13["m_srcTableName"] = "New Outlets Per week";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "activators",
	"m_srcTableName" => "New Outlets Per week"
));

$proto15["m_sql"] = "Manager_Title";
$proto15["m_srcTableName"] = "New Outlets Per week";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "Title";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$proto18=array();
$proto18["m_functiontype"] = "SQLF_COUNT";
$proto18["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "Activator_Number",
	"m_strTable" => "activators",
	"m_srcTableName" => "New Outlets Per week"
));

$proto18["m_arguments"][]=$obj;
$proto18["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto18);

$proto17["m_sql"] = "COUNT(Activator_Number)";
$proto17["m_srcTableName"] = "New Outlets Per week";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "New_POS";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "DATE_FORMAT( DATE_SUB( NOW( ) , INTERVAL 7  DAY ) , '%m/%d/%Y' )"
));

$proto20["m_sql"] = "DATE_FORMAT( DATE_SUB( NOW( ) , INTERVAL 7  DAY ) , '%m/%d/%Y' )";
$proto20["m_srcTableName"] = "New Outlets Per week";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "Week_Start";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "DATE_FORMAT( NOW( ) , '%m/%d/%Y' )"
));

$proto22["m_sql"] = "DATE_FORMAT( NOW( ) , '%m/%d/%Y' )";
$proto22["m_srcTableName"] = "New Outlets Per week";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "Week_End";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "activators";
$proto25["m_srcTableName"] = "New Outlets Per week";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "ID";
$proto25["m_columns"][] = "pos_type";
$proto25["m_columns"][] = "Manager_Name";
$proto25["m_columns"][] = "Manager_Number";
$proto25["m_columns"][] = "Manager_Title";
$proto25["m_columns"][] = "Activator_Name";
$proto25["m_columns"][] = "Activator_Number";
$proto25["m_columns"][] = "business_name";
$proto25["m_columns"][] = "altenative_number";
$proto25["m_columns"][] = "pos_iccid";
$proto25["m_columns"][] = "registration_date";
$proto25["m_columns"][] = "gender";
$proto25["m_columns"][] = "DOB";
$proto25["m_columns"][] = "Area";
$proto25["m_columns"][] = "Route";
$proto25["m_columns"][] = "id_type";
$proto25["m_columns"][] = "id_number";
$proto25["m_columns"][] = "Team_Leader";
$proto25["m_columns"][] = "Working_Location";
$proto25["m_columns"][] = "Batch_Paid";
$proto25["m_columns"][] = "lat";
$proto25["m_columns"][] = "lon";
$proto25["m_columns"][] = "last_chekin";
$proto25["m_columns"][] = "mydata";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "activators";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "New Outlets Per week";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "Manager_Name",
	"m_strTable" => "activators",
	"m_srcTableName" => "New Outlets Per week"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="New Outlets Per week";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_New_Outlets_Per_week = createSqlQuery_New_Outlets_Per_week();


	
					
	
$tdataNew_Outlets_Per_week[".sqlquery"] = $queryData_New_Outlets_Per_week;

$tableEvents["New Outlets Per week"] = new eventsBase;
$tdataNew_Outlets_Per_week[".hasEvents"] = false;

?>