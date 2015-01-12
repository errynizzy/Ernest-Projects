<?php
require_once(getabspath("classes/cipherer.php"));




$tdatateam_leader = array();	
	$tdatateam_leader[".truncateText"] = true;
	$tdatateam_leader[".NumberOfChars"] = 80; 
	$tdatateam_leader[".ShortName"] = "team_leader";
	$tdatateam_leader[".OwnerID"] = "mydata";
	$tdatateam_leader[".OriginalTable"] = "team_leader";

//	field labels
$fieldLabelsteam_leader = array();
$fieldToolTipsteam_leader = array();
$pageTitlesteam_leader = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsteam_leader["English"] = array();
	$fieldToolTipsteam_leader["English"] = array();
	$pageTitlesteam_leader["English"] = array();
	$fieldLabelsteam_leader["English"]["ID"] = "ID";
	$fieldToolTipsteam_leader["English"]["ID"] = "";
	$fieldLabelsteam_leader["English"]["Team_Leader_Name"] = "Team Leader Name";
	$fieldToolTipsteam_leader["English"]["Team_Leader_Name"] = "";
	$fieldLabelsteam_leader["English"]["POS_Number"] = "POS Number";
	$fieldToolTipsteam_leader["English"]["POS_Number"] = "";
	$fieldLabelsteam_leader["English"]["Sales_Coordinator_Name"] = "Sales Coordinator Name";
	$fieldToolTipsteam_leader["English"]["Sales_Coordinator_Name"] = "";
	$fieldLabelsteam_leader["English"]["mydata"] = "Mydata";
	$fieldToolTipsteam_leader["English"]["mydata"] = "";
	if (count($fieldToolTipsteam_leader["English"]))
		$tdatateam_leader[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsteam_leader[""] = array();
	$fieldToolTipsteam_leader[""] = array();
	$pageTitlesteam_leader[""] = array();
	$fieldLabelsteam_leader[""]["POS_Number"] = "POS Number";
	$fieldToolTipsteam_leader[""]["POS_Number"] = "";
	if (count($fieldToolTipsteam_leader[""]))
		$tdatateam_leader[".isUseToolTips"] = true;
}
	
	
	$tdatateam_leader[".NCSearch"] = true;



$tdatateam_leader[".shortTableName"] = "team_leader";
$tdatateam_leader[".nSecOptions"] = 1;
$tdatateam_leader[".recsPerRowList"] = 1;
$tdatateam_leader[".mainTableOwnerID"] = "mydata";
$tdatateam_leader[".moveNext"] = 1;
$tdatateam_leader[".nType"] = 0;

$tdatateam_leader[".strOriginalTableName"] = "team_leader";

	


$tdatateam_leader[".showAddInPopup"] = false;

$tdatateam_leader[".showEditInPopup"] = false;

$tdatateam_leader[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatateam_leader[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatateam_leader[".fieldsForRegister"] = array();

$tdatateam_leader[".listAjax"] = false;

	$tdatateam_leader[".audit"] = false;

	$tdatateam_leader[".locking"] = false;

$tdatateam_leader[".edit"] = true;
$tdatateam_leader[".inlineEdit"] = true;
$tdatateam_leader[".inlineAdd"] = true;
$tdatateam_leader[".view"] = true;

$tdatateam_leader[".exportTo"] = true;


$tdatateam_leader[".delete"] = true;

$tdatateam_leader[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatateam_leader[".searchSaving"] = false;
//

$tdatateam_leader[".showSearchPanel"] = true;
		$tdatateam_leader[".flexibleSearch"] = true;		

if (isMobile())
	$tdatateam_leader[".isUseAjaxSuggest"] = false;
else 
	$tdatateam_leader[".isUseAjaxSuggest"] = true;

$tdatateam_leader[".rowHighlite"] = true;



$tdatateam_leader[".addPageEvents"] = false;

// use timepicker for search panel
$tdatateam_leader[".isUseTimeForSearch"] = false;





$tdatateam_leader[".allSearchFields"] = array();
$tdatateam_leader[".filterFields"] = array();
$tdatateam_leader[".requiredSearchFields"] = array();

$tdatateam_leader[".allSearchFields"][] = "Team_Leader_Name";
		$tdatateam_leader[".allSearchFields"][] = "POS_Number";
		$tdatateam_leader[".allSearchFields"][] = "Sales_Coordinator_Name";
		
$tdatateam_leader[".googleLikeFields"] = array();
$tdatateam_leader[".googleLikeFields"][] = "ID";
$tdatateam_leader[".googleLikeFields"][] = "Team_Leader_Name";
$tdatateam_leader[".googleLikeFields"][] = "POS_Number";
$tdatateam_leader[".googleLikeFields"][] = "Sales_Coordinator_Name";
$tdatateam_leader[".googleLikeFields"][] = "mydata";


$tdatateam_leader[".advSearchFields"] = array();
$tdatateam_leader[".advSearchFields"][] = "Team_Leader_Name";
$tdatateam_leader[".advSearchFields"][] = "POS_Number";
$tdatateam_leader[".advSearchFields"][] = "Sales_Coordinator_Name";

$tdatateam_leader[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdatateam_leader[".pageSize"] = 20;

$tdatateam_leader[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatateam_leader[".strOrderBy"] = $tstrOrderBy;

$tdatateam_leader[".orderindexes"] = array();

$tdatateam_leader[".sqlHead"] = "SELECT ID,   Team_Leader_Name,   POS_Number,   Sales_Coordinator_Name,   mydata";
$tdatateam_leader[".sqlFrom"] = "FROM team_leader";
$tdatateam_leader[".sqlWhereExpr"] = "";
$tdatateam_leader[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatateam_leader[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatateam_leader[".arrGroupsPerPage"] = $arrGPP;

$tdatateam_leader[".highlightSearchResults"] = true;

$tableKeysteam_leader = array();
$tableKeysteam_leader[] = "POS_Number";
$tdatateam_leader[".Keys"] = $tableKeysteam_leader;

$tdatateam_leader[".listFields"] = array();
$tdatateam_leader[".listFields"][] = "Team_Leader_Name";
$tdatateam_leader[".listFields"][] = "POS_Number";
$tdatateam_leader[".listFields"][] = "Sales_Coordinator_Name";

$tdatateam_leader[".hideMobileList"] = array();


$tdatateam_leader[".viewFields"] = array();
$tdatateam_leader[".viewFields"][] = "Team_Leader_Name";
$tdatateam_leader[".viewFields"][] = "POS_Number";
$tdatateam_leader[".viewFields"][] = "Sales_Coordinator_Name";

$tdatateam_leader[".addFields"] = array();
$tdatateam_leader[".addFields"][] = "Team_Leader_Name";
$tdatateam_leader[".addFields"][] = "POS_Number";
$tdatateam_leader[".addFields"][] = "Sales_Coordinator_Name";

$tdatateam_leader[".inlineAddFields"] = array();
$tdatateam_leader[".inlineAddFields"][] = "Team_Leader_Name";
$tdatateam_leader[".inlineAddFields"][] = "POS_Number";
$tdatateam_leader[".inlineAddFields"][] = "Sales_Coordinator_Name";

$tdatateam_leader[".editFields"] = array();
$tdatateam_leader[".editFields"][] = "Team_Leader_Name";
$tdatateam_leader[".editFields"][] = "POS_Number";
$tdatateam_leader[".editFields"][] = "Sales_Coordinator_Name";

$tdatateam_leader[".inlineEditFields"] = array();
$tdatateam_leader[".inlineEditFields"][] = "Team_Leader_Name";
$tdatateam_leader[".inlineEditFields"][] = "POS_Number";
$tdatateam_leader[".inlineEditFields"][] = "Sales_Coordinator_Name";

$tdatateam_leader[".exportFields"] = array();
$tdatateam_leader[".exportFields"][] = "Team_Leader_Name";
$tdatateam_leader[".exportFields"][] = "POS_Number";
$tdatateam_leader[".exportFields"][] = "Sales_Coordinator_Name";

$tdatateam_leader[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "team_leader";
	$fdata["Label"] = GetFieldLabel("team_leader","ID"); 
	$fdata["FieldType"] = 20;
	
		$fdata["AutoInc"] = true;
	
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID"; 
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
	
	
	
	

	

	
	$tdatateam_leader["ID"] = $fdata;
//	Team_Leader_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Team_Leader_Name";
	$fdata["GoodName"] = "Team_Leader_Name";
	$fdata["ownerTable"] = "team_leader";
	$fdata["Label"] = GetFieldLabel("team_leader","Team_Leader_Name"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Team_Leader_Name"; 
		$fdata["FullName"] = "Team_Leader_Name";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatateam_leader["Team_Leader_Name"] = $fdata;
//	POS_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "POS_Number";
	$fdata["GoodName"] = "POS_Number";
	$fdata["ownerTable"] = "team_leader";
	$fdata["Label"] = GetFieldLabel("team_leader","POS_Number"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "POS_Number"; 
		$fdata["FullName"] = "POS_Number";
	
		
		
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
	
			
		$edata["strEditMask"] = "999999999"; 

	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=9";
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatateam_leader["POS_Number"] = $fdata;
//	Sales_Coordinator_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Sales_Coordinator_Name";
	$fdata["GoodName"] = "Sales_Coordinator_Name";
	$fdata["ownerTable"] = "team_leader";
	$fdata["Label"] = GetFieldLabel("team_leader","Sales_Coordinator_Name"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Sales_Coordinator_Name"; 
		$fdata["FullName"] = "Sales_Coordinator_Name";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatateam_leader["Sales_Coordinator_Name"] = $fdata;
//	mydata
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mydata";
	$fdata["GoodName"] = "mydata";
	$fdata["ownerTable"] = "team_leader";
	$fdata["Label"] = GetFieldLabel("team_leader","mydata"); 
	$fdata["FieldType"] = 3;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "mydata"; 
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
	
	
	
	

	

	
	$tdatateam_leader["mydata"] = $fdata;

	
$tables_data["team_leader"]=&$tdatateam_leader;
$field_labels["team_leader"] = &$fieldLabelsteam_leader;
$fieldToolTips["team_leader"] = &$fieldToolTipsteam_leader;
$page_titles["team_leader"] = &$pageTitlesteam_leader;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["team_leader"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["team_leader"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_team_leader()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   Team_Leader_Name,   POS_Number,   Sales_Coordinator_Name,   mydata";
$proto0["m_strFrom"] = "FROM team_leader";
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
	"m_strTable" => "team_leader"
));

$proto5["m_sql"] = "ID";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Team_Leader_Name",
	"m_strTable" => "team_leader"
));

$proto7["m_sql"] = "Team_Leader_Name";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "POS_Number",
	"m_strTable" => "team_leader"
));

$proto9["m_sql"] = "POS_Number";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Sales_Coordinator_Name",
	"m_strTable" => "team_leader"
));

$proto11["m_sql"] = "Sales_Coordinator_Name";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "mydata",
	"m_strTable" => "team_leader"
));

$proto13["m_sql"] = "mydata";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "team_leader";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "ID";
$proto16["m_columns"][] = "Team_Leader_Name";
$proto16["m_columns"][] = "POS_Number";
$proto16["m_columns"][] = "Sales_Coordinator_Name";
$proto16["m_columns"][] = "mydata";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "team_leader";
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

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_team_leader = createSqlQuery_team_leader();

					
	
$tdatateam_leader[".sqlquery"] = $queryData_team_leader;

$tableEvents["team_leader"] = new eventsBase;
$tdatateam_leader[".hasEvents"] = false;

$cipherer = new RunnerCipherer("team_leader");

?>