<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapos_live_balance = array();	
	$tdatapos_live_balance[".truncateText"] = true;
	$tdatapos_live_balance[".NumberOfChars"] = 80; 
	$tdatapos_live_balance[".ShortName"] = "pos_live_balance";
	$tdatapos_live_balance[".OwnerID"] = "";
	$tdatapos_live_balance[".OriginalTable"] = "pos_live_balance";

//	field labels
$fieldLabelspos_live_balance = array();
$fieldToolTipspos_live_balance = array();
$pageTitlespos_live_balance = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspos_live_balance["English"] = array();
	$fieldToolTipspos_live_balance["English"] = array();
	$pageTitlespos_live_balance["English"] = array();
	$fieldLabelspos_live_balance["English"]["EVENT_DATE"] = "EVENT DATE";
	$fieldToolTipspos_live_balance["English"]["EVENT_DATE"] = "";
	$fieldLabelspos_live_balance["English"]["BALANCE"] = "BALANCE";
	$fieldToolTipspos_live_balance["English"]["BALANCE"] = "";
	$fieldLabelspos_live_balance["English"]["pos_type"] = "Pos Type";
	$fieldToolTipspos_live_balance["English"]["pos_type"] = "";
	$fieldLabelspos_live_balance["English"]["Activator_Number"] = "Activator Number";
	$fieldToolTipspos_live_balance["English"]["Activator_Number"] = "";
	$fieldLabelspos_live_balance["English"]["Activator_Name"] = "Activator Name";
	$fieldToolTipspos_live_balance["English"]["Activator_Name"] = "";
	$fieldLabelspos_live_balance["English"]["Area"] = "Area";
	$fieldToolTipspos_live_balance["English"]["Area"] = "";
	if (count($fieldToolTipspos_live_balance["English"]))
		$tdatapos_live_balance[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspos_live_balance[""] = array();
	$fieldToolTipspos_live_balance[""] = array();
	$pageTitlespos_live_balance[""] = array();
	if (count($fieldToolTipspos_live_balance[""]))
		$tdatapos_live_balance[".isUseToolTips"] = true;
}
	
	
	$tdatapos_live_balance[".NCSearch"] = true;



$tdatapos_live_balance[".shortTableName"] = "pos_live_balance";
$tdatapos_live_balance[".nSecOptions"] = 0;
$tdatapos_live_balance[".recsPerRowList"] = 1;
$tdatapos_live_balance[".mainTableOwnerID"] = "";
$tdatapos_live_balance[".moveNext"] = 1;
$tdatapos_live_balance[".nType"] = 0;

$tdatapos_live_balance[".strOriginalTableName"] = "pos_live_balance";

	


$tdatapos_live_balance[".showAddInPopup"] = true;

$tdatapos_live_balance[".showEditInPopup"] = true;

$tdatapos_live_balance[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
			;
$popupPagesLayoutNames["add"] = "view2";
			;
$popupPagesLayoutNames["edit"] = "view2";
			;
$popupPagesLayoutNames["view"] = "view2";
$tdatapos_live_balance[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapos_live_balance[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatapos_live_balance[".listAjax"] = true;
else 
	$tdatapos_live_balance[".listAjax"] = false;

	$tdatapos_live_balance[".audit"] = false;

	$tdatapos_live_balance[".locking"] = false;


$tdatapos_live_balance[".exportTo"] = true;



$tdatapos_live_balance[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapos_live_balance[".searchSaving"] = false;
//

$tdatapos_live_balance[".showSearchPanel"] = true;
		$tdatapos_live_balance[".flexibleSearch"] = true;		

if (isMobile())
	$tdatapos_live_balance[".isUseAjaxSuggest"] = false;
else 
	$tdatapos_live_balance[".isUseAjaxSuggest"] = true;

$tdatapos_live_balance[".rowHighlite"] = true;



$tdatapos_live_balance[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapos_live_balance[".isUseTimeForSearch"] = false;





$tdatapos_live_balance[".allSearchFields"] = array();
$tdatapos_live_balance[".filterFields"] = array();
$tdatapos_live_balance[".requiredSearchFields"] = array();

$tdatapos_live_balance[".allSearchFields"][] = "pos_type";
		$tdatapos_live_balance[".allSearchFields"][] = "Activator_Number";
		$tdatapos_live_balance[".allSearchFields"][] = "Activator_Name";
		$tdatapos_live_balance[".allSearchFields"][] = "Area";
		$tdatapos_live_balance[".allSearchFields"][] = "BALANCE";
		$tdatapos_live_balance[".allSearchFields"][] = "EVENT_DATE";
		
$tdatapos_live_balance[".googleLikeFields"] = array();
$tdatapos_live_balance[".googleLikeFields"][] = "pos_type";
$tdatapos_live_balance[".googleLikeFields"][] = "Activator_Number";
$tdatapos_live_balance[".googleLikeFields"][] = "Activator_Name";
$tdatapos_live_balance[".googleLikeFields"][] = "Area";
$tdatapos_live_balance[".googleLikeFields"][] = "BALANCE";
$tdatapos_live_balance[".googleLikeFields"][] = "EVENT_DATE";


$tdatapos_live_balance[".advSearchFields"] = array();
$tdatapos_live_balance[".advSearchFields"][] = "pos_type";
$tdatapos_live_balance[".advSearchFields"][] = "Activator_Number";
$tdatapos_live_balance[".advSearchFields"][] = "Activator_Name";
$tdatapos_live_balance[".advSearchFields"][] = "Area";
$tdatapos_live_balance[".advSearchFields"][] = "BALANCE";
$tdatapos_live_balance[".advSearchFields"][] = "EVENT_DATE";

$tdatapos_live_balance[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdatapos_live_balance[".pageSize"] = 20;

$tdatapos_live_balance[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapos_live_balance[".strOrderBy"] = $tstrOrderBy;

$tdatapos_live_balance[".orderindexes"] = array();

$tdatapos_live_balance[".sqlHead"] = "SELECT activators.pos_type,  activators.Activator_Number,  activators.Activator_Name,  activators.Area,  pos_live_balance.BALANCE,  pos_live_balance.EVENT_DATE";
$tdatapos_live_balance[".sqlFrom"] = "FROM pos_live_balance  , activators";
$tdatapos_live_balance[".sqlWhereExpr"] = "activators.Activator_Number = pos_live_balance.ACC_NBR";
$tdatapos_live_balance[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapos_live_balance[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapos_live_balance[".arrGroupsPerPage"] = $arrGPP;

$tdatapos_live_balance[".highlightSearchResults"] = true;

$tableKeyspos_live_balance = array();
$tdatapos_live_balance[".Keys"] = $tableKeyspos_live_balance;

$tdatapos_live_balance[".listFields"] = array();
$tdatapos_live_balance[".listFields"][] = "pos_type";
$tdatapos_live_balance[".listFields"][] = "Activator_Number";
$tdatapos_live_balance[".listFields"][] = "Activator_Name";
$tdatapos_live_balance[".listFields"][] = "Area";
$tdatapos_live_balance[".listFields"][] = "BALANCE";
$tdatapos_live_balance[".listFields"][] = "EVENT_DATE";

$tdatapos_live_balance[".hideMobileList"] = array();


$tdatapos_live_balance[".viewFields"] = array();

$tdatapos_live_balance[".addFields"] = array();

$tdatapos_live_balance[".inlineAddFields"] = array();

$tdatapos_live_balance[".editFields"] = array();

$tdatapos_live_balance[".inlineEditFields"] = array();

$tdatapos_live_balance[".exportFields"] = array();
$tdatapos_live_balance[".exportFields"][] = "pos_type";
$tdatapos_live_balance[".exportFields"][] = "Activator_Number";
$tdatapos_live_balance[".exportFields"][] = "Activator_Name";
$tdatapos_live_balance[".exportFields"][] = "Area";
$tdatapos_live_balance[".exportFields"][] = "BALANCE";
$tdatapos_live_balance[".exportFields"][] = "EVENT_DATE";

$tdatapos_live_balance[".printFields"] = array();

//	pos_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pos_type";
	$fdata["GoodName"] = "pos_type";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("pos_live_balance","pos_type"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pos_type"; 
		$fdata["FullName"] = "activators.pos_type";
	
		
		
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

	

	
	$tdatapos_live_balance["pos_type"] = $fdata;
//	Activator_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Activator_Number";
	$fdata["GoodName"] = "Activator_Number";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("pos_live_balance","Activator_Number"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Activator_Number"; 
		$fdata["FullName"] = "activators.Activator_Number";
	
		
		
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

	

	
	$tdatapos_live_balance["Activator_Number"] = $fdata;
//	Activator_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Activator_Name";
	$fdata["GoodName"] = "Activator_Name";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("pos_live_balance","Activator_Name"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Activator_Name"; 
		$fdata["FullName"] = "activators.Activator_Name";
	
		
		
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

	

	
	$tdatapos_live_balance["Activator_Name"] = $fdata;
//	Area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Area";
	$fdata["GoodName"] = "Area";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("pos_live_balance","Area"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Area"; 
		$fdata["FullName"] = "activators.Area";
	
		
		
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

	

	
	$tdatapos_live_balance["Area"] = $fdata;
//	BALANCE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "BALANCE";
	$fdata["GoodName"] = "BALANCE";
	$fdata["ownerTable"] = "pos_live_balance";
	$fdata["Label"] = GetFieldLabel("pos_live_balance","BALANCE"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "BALANCE"; 
		$fdata["FullName"] = "pos_live_balance.BALANCE";
	
		
		
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

	

	
	$tdatapos_live_balance["BALANCE"] = $fdata;
//	EVENT_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EVENT_DATE";
	$fdata["GoodName"] = "EVENT_DATE";
	$fdata["ownerTable"] = "pos_live_balance";
	$fdata["Label"] = GetFieldLabel("pos_live_balance","EVENT_DATE"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "EVENT_DATE"; 
		$fdata["FullName"] = "pos_live_balance.EVENT_DATE";
	
		
		
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

	

	
	$tdatapos_live_balance["EVENT_DATE"] = $fdata;

	
$tables_data["pos_live_balance"]=&$tdatapos_live_balance;
$field_labels["pos_live_balance"] = &$fieldLabelspos_live_balance;
$fieldToolTips["pos_live_balance"] = &$fieldToolTipspos_live_balance;
$page_titles["pos_live_balance"] = &$pageTitlespos_live_balance;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pos_live_balance"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["pos_live_balance"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pos_live_balance()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "activators.pos_type,  activators.Activator_Number,  activators.Activator_Name,  activators.Area,  pos_live_balance.BALANCE,  pos_live_balance.EVENT_DATE";
$proto3["m_strFrom"] = "FROM pos_live_balance  , activators";
$proto3["m_strWhere"] = "activators.Activator_Number = pos_live_balance.ACC_NBR";
$proto3["m_strOrderBy"] = "";
$proto3["m_strTail"] = "";
			$proto3["cipherer"] = null;
$proto4=array();
$proto4["m_sql"] = "activators.Activator_Number = pos_live_balance.ACC_NBR";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Activator_Number",
	"m_strTable" => "activators"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= pos_live_balance.ACC_NBR";
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
	"m_strName" => "pos_type",
	"m_strTable" => "activators"
));

$proto8["m_sql"] = "activators.pos_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Activator_Number",
	"m_strTable" => "activators"
));

$proto10["m_sql"] = "activators.Activator_Number";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Activator_Name",
	"m_strTable" => "activators"
));

$proto12["m_sql"] = "activators.Activator_Name";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Area",
	"m_strTable" => "activators"
));

$proto14["m_sql"] = "activators.Area";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "BALANCE",
	"m_strTable" => "pos_live_balance"
));

$proto16["m_sql"] = "pos_live_balance.BALANCE";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "EVENT_DATE",
	"m_strTable" => "pos_live_balance"
));

$proto18["m_sql"] = "pos_live_balance.EVENT_DATE";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "pos_live_balance";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "EVENT_DATE";
$proto21["m_columns"][] = "ACC_NBR";
$proto21["m_columns"][] = "BALANCE";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "pos_live_balance";
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
												$proto24=array();
$proto24["m_link"] = "SQLL_CROSSJOIN";
			$proto25=array();
$proto25["m_strName"] = "activators";
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

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_pos_live_balance = createSqlQuery_pos_live_balance();

						
	
$tdatapos_live_balance[".sqlquery"] = $queryData_pos_live_balance;

$tableEvents["pos_live_balance"] = new eventsBase;
$tdatapos_live_balance[".hasEvents"] = false;

$cipherer = new RunnerCipherer("pos_live_balance");

?>