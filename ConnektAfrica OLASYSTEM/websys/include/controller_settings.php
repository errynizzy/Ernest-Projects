<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacontroller = array();	
	$tdatacontroller[".truncateText"] = true;
	$tdatacontroller[".NumberOfChars"] = 80; 
	$tdatacontroller[".ShortName"] = "controller";
	$tdatacontroller[".OwnerID"] = "mydata";
	$tdatacontroller[".OriginalTable"] = "controller";

//	field labels
$fieldLabelscontroller = array();
$fieldToolTipscontroller = array();
$pageTitlescontroller = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscontroller["English"] = array();
	$fieldToolTipscontroller["English"] = array();
	$pageTitlescontroller["English"] = array();
	$fieldLabelscontroller["English"]["ID"] = "ID";
	$fieldToolTipscontroller["English"]["ID"] = "";
	$fieldLabelscontroller["English"]["Sales_Coordinator_Name"] = "SC / DSO / RDO Name";
	$fieldToolTipscontroller["English"]["Sales_Coordinator_Name"] = "";
	$fieldLabelscontroller["English"]["Sales_Coordinator_Number"] = "SC / DSO / RDO Number";
	$fieldToolTipscontroller["English"]["Sales_Coordinator_Number"] = "";
	$fieldLabelscontroller["English"]["Team_Leader_Name"] = "TL Name";
	$fieldToolTipscontroller["English"]["Team_Leader_Name"] = "";
	$fieldLabelscontroller["English"]["Team_Leader_Number"] = "TL Number";
	$fieldToolTipscontroller["English"]["Team_Leader_Number"] = "";
	$fieldLabelscontroller["English"]["mydata"] = "Mydata";
	$fieldToolTipscontroller["English"]["mydata"] = "";
	if (count($fieldToolTipscontroller["English"]))
		$tdatacontroller[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscontroller[""] = array();
	$fieldToolTipscontroller[""] = array();
	$pageTitlescontroller[""] = array();
	if (count($fieldToolTipscontroller[""]))
		$tdatacontroller[".isUseToolTips"] = true;
}
	
	
	$tdatacontroller[".NCSearch"] = true;



$tdatacontroller[".shortTableName"] = "controller";
$tdatacontroller[".nSecOptions"] = 1;
$tdatacontroller[".recsPerRowList"] = 1;
$tdatacontroller[".mainTableOwnerID"] = "mydata";
$tdatacontroller[".moveNext"] = 1;
$tdatacontroller[".nType"] = 0;

$tdatacontroller[".strOriginalTableName"] = "controller";

	


$tdatacontroller[".showAddInPopup"] = true;

$tdatacontroller[".showEditInPopup"] = true;

$tdatacontroller[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatacontroller[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacontroller[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatacontroller[".listAjax"] = true;
else 
	$tdatacontroller[".listAjax"] = false;

	$tdatacontroller[".audit"] = false;

	$tdatacontroller[".locking"] = false;

$tdatacontroller[".edit"] = true;
$tdatacontroller[".inlineEdit"] = true;
$tdatacontroller[".inlineAdd"] = true;
$tdatacontroller[".view"] = true;

$tdatacontroller[".exportTo"] = true;


$tdatacontroller[".delete"] = true;

$tdatacontroller[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacontroller[".searchSaving"] = false;
//

$tdatacontroller[".showSearchPanel"] = true;
		$tdatacontroller[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacontroller[".isUseAjaxSuggest"] = false;
else 
	$tdatacontroller[".isUseAjaxSuggest"] = true;

$tdatacontroller[".rowHighlite"] = true;



$tdatacontroller[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontroller[".isUseTimeForSearch"] = false;





$tdatacontroller[".allSearchFields"] = array();
$tdatacontroller[".filterFields"] = array();
$tdatacontroller[".requiredSearchFields"] = array();

$tdatacontroller[".allSearchFields"][] = "Sales_Coordinator_Name";
		$tdatacontroller[".allSearchFields"][] = "Sales_Coordinator_Number";
		$tdatacontroller[".allSearchFields"][] = "Team_Leader_Name";
		$tdatacontroller[".allSearchFields"][] = "Team_Leader_Number";
		
$tdatacontroller[".googleLikeFields"] = array();
$tdatacontroller[".googleLikeFields"][] = "ID";
$tdatacontroller[".googleLikeFields"][] = "Sales_Coordinator_Name";
$tdatacontroller[".googleLikeFields"][] = "Sales_Coordinator_Number";
$tdatacontroller[".googleLikeFields"][] = "Team_Leader_Name";
$tdatacontroller[".googleLikeFields"][] = "Team_Leader_Number";
$tdatacontroller[".googleLikeFields"][] = "mydata";


$tdatacontroller[".advSearchFields"] = array();
$tdatacontroller[".advSearchFields"][] = "Sales_Coordinator_Name";
$tdatacontroller[".advSearchFields"][] = "Sales_Coordinator_Number";
$tdatacontroller[".advSearchFields"][] = "Team_Leader_Name";
$tdatacontroller[".advSearchFields"][] = "Team_Leader_Number";

$tdatacontroller[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdatacontroller[".pageSize"] = 20;

$tdatacontroller[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacontroller[".strOrderBy"] = $tstrOrderBy;

$tdatacontroller[".orderindexes"] = array();

$tdatacontroller[".sqlHead"] = "SELECT ID,   Sales_Coordinator_Name,   Sales_Coordinator_Number,   Team_Leader_Name,   Team_Leader_Number,   mydata";
$tdatacontroller[".sqlFrom"] = "FROM controller";
$tdatacontroller[".sqlWhereExpr"] = "";
$tdatacontroller[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontroller[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontroller[".arrGroupsPerPage"] = $arrGPP;

$tdatacontroller[".highlightSearchResults"] = true;

$tableKeyscontroller = array();
$tableKeyscontroller[] = "ID";
$tdatacontroller[".Keys"] = $tableKeyscontroller;

$tdatacontroller[".listFields"] = array();
$tdatacontroller[".listFields"][] = "Sales_Coordinator_Name";
$tdatacontroller[".listFields"][] = "Sales_Coordinator_Number";
$tdatacontroller[".listFields"][] = "Team_Leader_Name";
$tdatacontroller[".listFields"][] = "Team_Leader_Number";

$tdatacontroller[".hideMobileList"] = array();


$tdatacontroller[".viewFields"] = array();
$tdatacontroller[".viewFields"][] = "Sales_Coordinator_Name";
$tdatacontroller[".viewFields"][] = "Sales_Coordinator_Number";
$tdatacontroller[".viewFields"][] = "Team_Leader_Name";
$tdatacontroller[".viewFields"][] = "Team_Leader_Number";

$tdatacontroller[".addFields"] = array();
$tdatacontroller[".addFields"][] = "Sales_Coordinator_Name";
$tdatacontroller[".addFields"][] = "Sales_Coordinator_Number";
$tdatacontroller[".addFields"][] = "Team_Leader_Name";
$tdatacontroller[".addFields"][] = "Team_Leader_Number";

$tdatacontroller[".inlineAddFields"] = array();
$tdatacontroller[".inlineAddFields"][] = "Sales_Coordinator_Name";
$tdatacontroller[".inlineAddFields"][] = "Sales_Coordinator_Number";
$tdatacontroller[".inlineAddFields"][] = "Team_Leader_Name";
$tdatacontroller[".inlineAddFields"][] = "Team_Leader_Number";

$tdatacontroller[".editFields"] = array();
$tdatacontroller[".editFields"][] = "Sales_Coordinator_Name";
$tdatacontroller[".editFields"][] = "Sales_Coordinator_Number";
$tdatacontroller[".editFields"][] = "Team_Leader_Name";
$tdatacontroller[".editFields"][] = "Team_Leader_Number";

$tdatacontroller[".inlineEditFields"] = array();
$tdatacontroller[".inlineEditFields"][] = "Sales_Coordinator_Name";
$tdatacontroller[".inlineEditFields"][] = "Sales_Coordinator_Number";
$tdatacontroller[".inlineEditFields"][] = "Team_Leader_Name";
$tdatacontroller[".inlineEditFields"][] = "Team_Leader_Number";

$tdatacontroller[".exportFields"] = array();
$tdatacontroller[".exportFields"][] = "Sales_Coordinator_Name";
$tdatacontroller[".exportFields"][] = "Sales_Coordinator_Number";
$tdatacontroller[".exportFields"][] = "Team_Leader_Name";
$tdatacontroller[".exportFields"][] = "Team_Leader_Number";

$tdatacontroller[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "controller";
	$fdata["Label"] = GetFieldLabel("controller","ID"); 
	$fdata["FieldType"] = 3;
	
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
	
	
	
	

	

	
	$tdatacontroller["ID"] = $fdata;
//	Sales_Coordinator_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Sales_Coordinator_Name";
	$fdata["GoodName"] = "Sales_Coordinator_Name";
	$fdata["ownerTable"] = "controller";
	$fdata["Label"] = GetFieldLabel("controller","Sales_Coordinator_Name"); 
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";	
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");
	
	//	End validation
	
		
				
		
		$edata["denyDuplicates"] = true;	

		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatacontroller["Sales_Coordinator_Name"] = $fdata;
//	Sales_Coordinator_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Sales_Coordinator_Number";
	$fdata["GoodName"] = "Sales_Coordinator_Number";
	$fdata["ownerTable"] = "controller";
	$fdata["Label"] = GetFieldLabel("controller","Sales_Coordinator_Number"); 
	$fdata["FieldType"] = 20;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Sales_Coordinator_Number"; 
		$fdata["FullName"] = "Sales_Coordinator_Number";
	
		
		
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
			$edata["EditParams"].= " maxlength=9";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";	
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");
	
	//	End validation
	
		
				
		
		$edata["denyDuplicates"] = true;	

		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacontroller["Sales_Coordinator_Number"] = $fdata;
//	Team_Leader_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Team_Leader_Name";
	$fdata["GoodName"] = "Team_Leader_Name";
	$fdata["ownerTable"] = "controller";
	$fdata["Label"] = GetFieldLabel("controller","Team_Leader_Name"); 
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

	

	
	$tdatacontroller["Team_Leader_Name"] = $fdata;
//	Team_Leader_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Team_Leader_Number";
	$fdata["GoodName"] = "Team_Leader_Number";
	$fdata["ownerTable"] = "controller";
	$fdata["Label"] = GetFieldLabel("controller","Team_Leader_Number"); 
	$fdata["FieldType"] = 20;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Team_Leader_Number"; 
		$fdata["FullName"] = "Team_Leader_Number";
	
		
		
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
			$edata["EditParams"].= " maxlength=9";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";	
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");
	
	//	End validation
	
		
				
		
		$edata["denyDuplicates"] = true;	

		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacontroller["Team_Leader_Number"] = $fdata;
//	mydata
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mydata";
	$fdata["GoodName"] = "mydata";
	$fdata["ownerTable"] = "controller";
	$fdata["Label"] = GetFieldLabel("controller","mydata"); 
	$fdata["FieldType"] = 20;
	
		
				
		
		
		
		
		
		
		
		
		
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
	
	
	
	

	

	
	$tdatacontroller["mydata"] = $fdata;

	
$tables_data["controller"]=&$tdatacontroller;
$field_labels["controller"] = &$fieldLabelscontroller;
$fieldToolTips["controller"] = &$fieldToolTipscontroller;
$page_titles["controller"] = &$pageTitlescontroller;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["controller"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["controller"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_controller()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "ID,   Sales_Coordinator_Name,   Sales_Coordinator_Number,   Team_Leader_Name,   Team_Leader_Number,   mydata";
$proto3["m_strFrom"] = "FROM controller";
$proto3["m_strWhere"] = "";
$proto3["m_strOrderBy"] = "";
$proto3["m_strTail"] = "";
			$proto3["cipherer"] = null;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
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
	"m_strName" => "ID",
	"m_strTable" => "controller"
));

$proto8["m_sql"] = "ID";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Sales_Coordinator_Name",
	"m_strTable" => "controller"
));

$proto10["m_sql"] = "Sales_Coordinator_Name";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Sales_Coordinator_Number",
	"m_strTable" => "controller"
));

$proto12["m_sql"] = "Sales_Coordinator_Number";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Team_Leader_Name",
	"m_strTable" => "controller"
));

$proto14["m_sql"] = "Team_Leader_Name";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Team_Leader_Number",
	"m_strTable" => "controller"
));

$proto16["m_sql"] = "Team_Leader_Number";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "mydata",
	"m_strTable" => "controller"
));

$proto18["m_sql"] = "mydata";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "controller";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ID";
$proto21["m_columns"][] = "Sales_Coordinator_Name";
$proto21["m_columns"][] = "Sales_Coordinator_Number";
$proto21["m_columns"][] = "Team_Leader_Name";
$proto21["m_columns"][] = "Team_Leader_Number";
$proto21["m_columns"][] = "mydata";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "controller";
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

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_controller = createSqlQuery_controller();

						
	
$tdatacontroller[".sqlquery"] = $queryData_controller;

$tableEvents["controller"] = new eventsBase;
$tdatacontroller[".hasEvents"] = false;

$cipherer = new RunnerCipherer("controller");

?>