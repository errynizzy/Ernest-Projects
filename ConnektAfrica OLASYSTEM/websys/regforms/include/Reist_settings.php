<?php
require_once(getabspath("classes/cipherer.php"));




$tdataReist = array();	
	$tdataReist[".truncateText"] = true;
	$tdataReist[".NumberOfChars"] = 80; 
	$tdataReist[".ShortName"] = "Reist";
	$tdataReist[".OwnerID"] = "";
	$tdataReist[".OriginalTable"] = "activated_sims";

//	field labels
$fieldLabelsReist = array();
$fieldToolTipsReist = array();
$pageTitlesReist = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReist["English"] = array();
	$fieldToolTipsReist["English"] = array();
	$pageTitlesReist["English"] = array();
	$fieldLabelsReist["English"]["Activator_Number"] = "Activator Number";
	$fieldToolTipsReist["English"]["Activator_Number"] = "";
	$fieldLabelsReist["English"]["Activator_Name"] = "Activator Name";
	$fieldToolTipsReist["English"]["Activator_Name"] = "";
	$fieldLabelsReist["English"]["Manager_Name"] = "Manager Name";
	$fieldToolTipsReist["English"]["Manager_Name"] = "";
	$fieldLabelsReist["English"]["Active"] = "Active";
	$fieldToolTipsReist["English"]["Active"] = "";
	$fieldLabelsReist["English"]["Returned_Forms"] = "Returned Forms";
	$fieldToolTipsReist["English"]["Returned_Forms"] = "";
	$fieldLabelsReist["English"]["Rejected_Forms"] = "Rejected Forms";
	$fieldToolTipsReist["English"]["Rejected_Forms"] = "";
	if (count($fieldToolTipsReist["English"]))
		$tdataReist[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsReist[""] = array();
	$fieldToolTipsReist[""] = array();
	$pageTitlesReist[""] = array();
	if (count($fieldToolTipsReist[""]))
		$tdataReist[".isUseToolTips"] = true;
}
	
	
	$tdataReist[".NCSearch"] = true;



$tdataReist[".shortTableName"] = "Reist";
$tdataReist[".nSecOptions"] = 0;
$tdataReist[".recsPerRowList"] = 1;
$tdataReist[".mainTableOwnerID"] = "";
$tdataReist[".moveNext"] = 1;
$tdataReist[".nType"] = 1;

$tdataReist[".strOriginalTableName"] = "activated_sims";

	


$tdataReist[".showAddInPopup"] = false;

$tdataReist[".showEditInPopup"] = false;

$tdataReist[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataReist[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataReist[".fieldsForRegister"] = array();

$tdataReist[".listAjax"] = false;

	$tdataReist[".audit"] = false;

	$tdataReist[".locking"] = false;


$tdataReist[".exportTo"] = true;



$tdataReist[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataReist[".searchSaving"] = false;
//

$tdataReist[".showSearchPanel"] = true;
		$tdataReist[".flexibleSearch"] = true;		

if (isMobile())
	$tdataReist[".isUseAjaxSuggest"] = false;
else 
	$tdataReist[".isUseAjaxSuggest"] = true;

$tdataReist[".rowHighlite"] = true;



$tdataReist[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReist[".isUseTimeForSearch"] = false;





$tdataReist[".allSearchFields"] = array();
$tdataReist[".filterFields"] = array();
$tdataReist[".requiredSearchFields"] = array();

$tdataReist[".allSearchFields"][] = "Activator_Number";
		$tdataReist[".allSearchFields"][] = "Activator_Name";
		$tdataReist[".allSearchFields"][] = "Manager_Name";
		$tdataReist[".allSearchFields"][] = "Active";
		$tdataReist[".allSearchFields"][] = "Returned_Forms";
		$tdataReist[".allSearchFields"][] = "Rejected_Forms";
		
$tdataReist[".googleLikeFields"] = array();
$tdataReist[".googleLikeFields"][] = "Activator_Number";
$tdataReist[".googleLikeFields"][] = "Activator_Name";
$tdataReist[".googleLikeFields"][] = "Manager_Name";
$tdataReist[".googleLikeFields"][] = "Active";
$tdataReist[".googleLikeFields"][] = "Returned_Forms";
$tdataReist[".googleLikeFields"][] = "Rejected_Forms";


$tdataReist[".advSearchFields"] = array();
$tdataReist[".advSearchFields"][] = "Activator_Number";
$tdataReist[".advSearchFields"][] = "Activator_Name";
$tdataReist[".advSearchFields"][] = "Manager_Name";
$tdataReist[".advSearchFields"][] = "Active";
$tdataReist[".advSearchFields"][] = "Returned_Forms";
$tdataReist[".advSearchFields"][] = "Rejected_Forms";

$tdataReist[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdataReist[".pageSize"] = 20;

$tdataReist[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReist[".strOrderBy"] = $tstrOrderBy;

$tdataReist[".orderindexes"] = array();

$tdataReist[".sqlHead"] = "SELECT Activator_Number,  Activator_Name,  Manager_Name,  SUM(Status ='Active') AS Active,  SUM(Form_Returned = 'Yes') AS Returned_Forms,  SUM(Form_Status = 'x') AS Rejected_Forms";
$tdataReist[".sqlFrom"] = "FROM simcards_batches";
$tdataReist[".sqlWhereExpr"] = "(Activator_Number != '')";
$tdataReist[".sqlTail"] = "GROUP BY Activator_Number";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReist[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReist[".arrGroupsPerPage"] = $arrGPP;

$tdataReist[".highlightSearchResults"] = true;

$tableKeysReist = array();
$tdataReist[".Keys"] = $tableKeysReist;

$tdataReist[".listFields"] = array();
$tdataReist[".listFields"][] = "Activator_Number";
$tdataReist[".listFields"][] = "Activator_Name";
$tdataReist[".listFields"][] = "Manager_Name";
$tdataReist[".listFields"][] = "Active";
$tdataReist[".listFields"][] = "Returned_Forms";
$tdataReist[".listFields"][] = "Rejected_Forms";

$tdataReist[".hideMobileList"] = array();


$tdataReist[".viewFields"] = array();

$tdataReist[".addFields"] = array();

$tdataReist[".inlineAddFields"] = array();

$tdataReist[".editFields"] = array();

$tdataReist[".inlineEditFields"] = array();

$tdataReist[".exportFields"] = array();
$tdataReist[".exportFields"][] = "Activator_Number";
$tdataReist[".exportFields"][] = "Activator_Name";
$tdataReist[".exportFields"][] = "Manager_Name";
$tdataReist[".exportFields"][] = "Active";
$tdataReist[".exportFields"][] = "Returned_Forms";
$tdataReist[".exportFields"][] = "Rejected_Forms";

$tdataReist[".printFields"] = array();

//	Activator_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Activator_Number";
	$fdata["GoodName"] = "Activator_Number";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Reist","Activator_Number"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Activator_Number"; 
		$fdata["FullName"] = "Activator_Number";
	
		
		
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataReist["Activator_Number"] = $fdata;
//	Activator_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Activator_Name";
	$fdata["GoodName"] = "Activator_Name";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Reist","Activator_Name"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Activator_Name"; 
		$fdata["FullName"] = "Activator_Name";
	
		
		
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

	

	
	$tdataReist["Activator_Name"] = $fdata;
//	Manager_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Manager_Name";
	$fdata["GoodName"] = "Manager_Name";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Reist","Manager_Name"); 
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

	

	
	$tdataReist["Manager_Name"] = $fdata;
//	Active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Active";
	$fdata["GoodName"] = "Active";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Reist","Active"); 
	$fdata["FieldType"] = 14;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Active"; 
		$fdata["FullName"] = "SUM(Status ='Active')";
	
		
		
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

	

	
	$tdataReist["Active"] = $fdata;
//	Returned_Forms
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Returned_Forms";
	$fdata["GoodName"] = "Returned_Forms";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Reist","Returned_Forms"); 
	$fdata["FieldType"] = 14;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Returned_Forms"; 
		$fdata["FullName"] = "SUM(Form_Returned = 'Yes')";
	
		
		
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

	

	
	$tdataReist["Returned_Forms"] = $fdata;
//	Rejected_Forms
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Rejected_Forms";
	$fdata["GoodName"] = "Rejected_Forms";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Reist","Rejected_Forms"); 
	$fdata["FieldType"] = 14;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Rejected_Forms"; 
		$fdata["FullName"] = "SUM(Form_Status = 'x')";
	
		
		
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

	

	
	$tdataReist["Rejected_Forms"] = $fdata;

	
$tables_data["Reist"]=&$tdataReist;
$field_labels["Reist"] = &$fieldLabelsReist;
$fieldToolTips["Reist"] = &$fieldToolTipsReist;
$page_titles["Reist"] = &$pageTitlesReist;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Reist"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Reist"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Reist()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Activator_Number,  Activator_Name,  Manager_Name,  SUM(Status ='Active') AS Active,  SUM(Form_Returned = 'Yes') AS Returned_Forms,  SUM(Form_Status = 'x') AS Rejected_Forms";
$proto0["m_strFrom"] = "FROM simcards_batches";
$proto0["m_strWhere"] = "(Activator_Number != '')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY Activator_Number";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "Activator_Number != ''";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Activator_Number",
	"m_strTable" => "simcards_batches"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "!= ''";
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
	"m_strName" => "Activator_Number",
	"m_strTable" => "simcards_batches"
));

$proto5["m_sql"] = "Activator_Number";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Activator_Name",
	"m_strTable" => "simcards_batches"
));

$proto7["m_sql"] = "Activator_Name";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Name",
	"m_strTable" => "simcards_batches"
));

$proto9["m_sql"] = "Manager_Name";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$proto12=array();
$proto12["m_functiontype"] = "SQLF_SUM";
$proto12["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Status ='Active'"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto12);

$proto11["m_sql"] = "SUM(Status ='Active')";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "Active";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_SUM";
$proto15["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Form_Returned = 'Yes'"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "SUM(Form_Returned = 'Yes')";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Returned_Forms";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$proto18=array();
$proto18["m_functiontype"] = "SQLF_SUM";
$proto18["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Form_Status = 'x'"
));

$proto18["m_arguments"][]=$obj;
$proto18["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto18);

$proto17["m_sql"] = "SUM(Form_Status = 'x')";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Rejected_Forms";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "simcards_batches";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ID";
$proto21["m_columns"][] = "batch_name";
$proto21["m_columns"][] = "ICCID";
$proto21["m_columns"][] = "Status";
$proto21["m_columns"][] = "Manager_Name";
$proto21["m_columns"][] = "Activator_Number";
$proto21["m_columns"][] = "Activator_Name";
$proto21["m_columns"][] = "Team_Leader";
$proto21["m_columns"][] = "Event_date";
$proto21["m_columns"][] = "time";
$proto21["m_columns"][] = "Active_MSISDN";
$proto21["m_columns"][] = "New_MSISDN";
$proto21["m_columns"][] = "Airtime_transered";
$proto21["m_columns"][] = "Paid";
$proto21["m_columns"][] = "Paid_Date";
$proto21["m_columns"][] = "Form_Returned";
$proto21["m_columns"][] = "Form_Status";
$proto21["m_columns"][] = "Form_Date";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "simcards_batches";
$proto20["m_alias"] = "";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "Activator_Number",
	"m_strTable" => "simcards_batches"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Reist = createSqlQuery_Reist();

						
	
$tdataReist[".sqlquery"] = $queryData_Reist;

$tableEvents["Reist"] = new eventsBase;
$tdataReist[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Reist");

?>