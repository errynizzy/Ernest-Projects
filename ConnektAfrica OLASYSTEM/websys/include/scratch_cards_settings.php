<?php
require_once(getabspath("classes/cipherer.php"));




$tdatascratch_cards = array();	
	$tdatascratch_cards[".truncateText"] = true;
	$tdatascratch_cards[".NumberOfChars"] = 80; 
	$tdatascratch_cards[".ShortName"] = "scratch_cards";
	$tdatascratch_cards[".OwnerID"] = "";
	$tdatascratch_cards[".OriginalTable"] = "scratch_cards";

//	field labels
$fieldLabelsscratch_cards = array();
$fieldToolTipsscratch_cards = array();
$pageTitlesscratch_cards = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsscratch_cards["English"] = array();
	$fieldToolTipsscratch_cards["English"] = array();
	$pageTitlesscratch_cards["English"] = array();
	$fieldLabelsscratch_cards["English"]["RECHARGE_DATE"] = "RECHARGE DATE";
	$fieldToolTipsscratch_cards["English"]["RECHARGE_DATE"] = "";
	$fieldLabelsscratch_cards["English"]["ACC_NBR"] = "ACC NBR";
	$fieldToolTipsscratch_cards["English"]["ACC_NBR"] = "";
	$fieldLabelsscratch_cards["English"]["DENOMINATION"] = "DENOMINATION";
	$fieldToolTipsscratch_cards["English"]["DENOMINATION"] = "";
	$fieldLabelsscratch_cards["English"]["SERIAL_NO"] = "SERIAL NO";
	$fieldToolTipsscratch_cards["English"]["SERIAL_NO"] = "";
	if (count($fieldToolTipsscratch_cards["English"]))
		$tdatascratch_cards[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsscratch_cards[""] = array();
	$fieldToolTipsscratch_cards[""] = array();
	$pageTitlesscratch_cards[""] = array();
	$fieldLabelsscratch_cards[""]["RECHARGE_DATE"] = "RECHARGE DATE";
	$fieldToolTipsscratch_cards[""]["RECHARGE_DATE"] = "";
	$fieldLabelsscratch_cards[""]["ACC_NBR"] = "ACC NBR";
	$fieldToolTipsscratch_cards[""]["ACC_NBR"] = "";
	$fieldLabelsscratch_cards[""]["DENOMINATION"] = "DENOMINATION";
	$fieldToolTipsscratch_cards[""]["DENOMINATION"] = "";
	$fieldLabelsscratch_cards[""]["SERIAL_NO"] = "SERIAL NO";
	$fieldToolTipsscratch_cards[""]["SERIAL_NO"] = "";
	if (count($fieldToolTipsscratch_cards[""]))
		$tdatascratch_cards[".isUseToolTips"] = true;
}
	
	
	$tdatascratch_cards[".NCSearch"] = true;



$tdatascratch_cards[".shortTableName"] = "scratch_cards";
$tdatascratch_cards[".nSecOptions"] = 0;
$tdatascratch_cards[".recsPerRowList"] = 1;
$tdatascratch_cards[".mainTableOwnerID"] = "";
$tdatascratch_cards[".moveNext"] = 1;
$tdatascratch_cards[".nType"] = 0;

$tdatascratch_cards[".strOriginalTableName"] = "scratch_cards";

	


$tdatascratch_cards[".showAddInPopup"] = false;

$tdatascratch_cards[".showEditInPopup"] = false;

$tdatascratch_cards[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatascratch_cards[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatascratch_cards[".fieldsForRegister"] = array();

$tdatascratch_cards[".listAjax"] = false;

	$tdatascratch_cards[".audit"] = false;

	$tdatascratch_cards[".locking"] = false;

$tdatascratch_cards[".view"] = true;

$tdatascratch_cards[".exportTo"] = true;



$tdatascratch_cards[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatascratch_cards[".searchSaving"] = false;
//

$tdatascratch_cards[".showSearchPanel"] = true;
		$tdatascratch_cards[".flexibleSearch"] = true;		

if (isMobile())
	$tdatascratch_cards[".isUseAjaxSuggest"] = false;
else 
	$tdatascratch_cards[".isUseAjaxSuggest"] = true;

$tdatascratch_cards[".rowHighlite"] = true;



$tdatascratch_cards[".addPageEvents"] = false;

// use timepicker for search panel
$tdatascratch_cards[".isUseTimeForSearch"] = false;





$tdatascratch_cards[".allSearchFields"] = array();
$tdatascratch_cards[".filterFields"] = array();
$tdatascratch_cards[".requiredSearchFields"] = array();

$tdatascratch_cards[".allSearchFields"][] = "SERIAL_NO";
		$tdatascratch_cards[".allSearchFields"][] = "ACC_NBR";
		$tdatascratch_cards[".allSearchFields"][] = "DENOMINATION";
		$tdatascratch_cards[".allSearchFields"][] = "RECHARGE_DATE";
		
$tdatascratch_cards[".googleLikeFields"] = array();
$tdatascratch_cards[".googleLikeFields"][] = "RECHARGE_DATE";
$tdatascratch_cards[".googleLikeFields"][] = "ACC_NBR";
$tdatascratch_cards[".googleLikeFields"][] = "DENOMINATION";
$tdatascratch_cards[".googleLikeFields"][] = "SERIAL_NO";


$tdatascratch_cards[".advSearchFields"] = array();
$tdatascratch_cards[".advSearchFields"][] = "SERIAL_NO";
$tdatascratch_cards[".advSearchFields"][] = "ACC_NBR";
$tdatascratch_cards[".advSearchFields"][] = "DENOMINATION";
$tdatascratch_cards[".advSearchFields"][] = "RECHARGE_DATE";

$tdatascratch_cards[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdatascratch_cards[".pageSize"] = 20;

$tdatascratch_cards[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatascratch_cards[".strOrderBy"] = $tstrOrderBy;

$tdatascratch_cards[".orderindexes"] = array();

$tdatascratch_cards[".sqlHead"] = "SELECT RECHARGE_DATE,   ACC_NBR,   DENOMINATION,   SERIAL_NO";
$tdatascratch_cards[".sqlFrom"] = "FROM scratch_cards";
$tdatascratch_cards[".sqlWhereExpr"] = "";
$tdatascratch_cards[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatascratch_cards[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatascratch_cards[".arrGroupsPerPage"] = $arrGPP;

$tdatascratch_cards[".highlightSearchResults"] = true;

$tableKeysscratch_cards = array();
$tableKeysscratch_cards[] = "SERIAL_NO";
$tdatascratch_cards[".Keys"] = $tableKeysscratch_cards;

$tdatascratch_cards[".listFields"] = array();
$tdatascratch_cards[".listFields"][] = "SERIAL_NO";
$tdatascratch_cards[".listFields"][] = "ACC_NBR";
$tdatascratch_cards[".listFields"][] = "DENOMINATION";
$tdatascratch_cards[".listFields"][] = "RECHARGE_DATE";

$tdatascratch_cards[".hideMobileList"] = array();


$tdatascratch_cards[".viewFields"] = array();
$tdatascratch_cards[".viewFields"][] = "SERIAL_NO";
$tdatascratch_cards[".viewFields"][] = "ACC_NBR";
$tdatascratch_cards[".viewFields"][] = "DENOMINATION";
$tdatascratch_cards[".viewFields"][] = "RECHARGE_DATE";

$tdatascratch_cards[".addFields"] = array();

$tdatascratch_cards[".inlineAddFields"] = array();

$tdatascratch_cards[".editFields"] = array();

$tdatascratch_cards[".inlineEditFields"] = array();

$tdatascratch_cards[".exportFields"] = array();
$tdatascratch_cards[".exportFields"][] = "SERIAL_NO";
$tdatascratch_cards[".exportFields"][] = "ACC_NBR";
$tdatascratch_cards[".exportFields"][] = "DENOMINATION";
$tdatascratch_cards[".exportFields"][] = "RECHARGE_DATE";

$tdatascratch_cards[".printFields"] = array();

//	RECHARGE_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "RECHARGE_DATE";
	$fdata["GoodName"] = "RECHARGE_DATE";
	$fdata["ownerTable"] = "scratch_cards";
	$fdata["Label"] = GetFieldLabel("scratch_cards","RECHARGE_DATE"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "RECHARGE_DATE"; 
		$fdata["FullName"] = "RECHARGE_DATE";
	
		
		
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

	

	
	$tdatascratch_cards["RECHARGE_DATE"] = $fdata;
//	ACC_NBR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ACC_NBR";
	$fdata["GoodName"] = "ACC_NBR";
	$fdata["ownerTable"] = "scratch_cards";
	$fdata["Label"] = GetFieldLabel("scratch_cards","ACC_NBR"); 
	$fdata["FieldType"] = 3;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ACC_NBR"; 
		$fdata["FullName"] = "ACC_NBR";
	
		
		
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

	

	
	$tdatascratch_cards["ACC_NBR"] = $fdata;
//	DENOMINATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DENOMINATION";
	$fdata["GoodName"] = "DENOMINATION";
	$fdata["ownerTable"] = "scratch_cards";
	$fdata["Label"] = GetFieldLabel("scratch_cards","DENOMINATION"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DENOMINATION"; 
		$fdata["FullName"] = "DENOMINATION";
	
		
		
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

	

	
	$tdatascratch_cards["DENOMINATION"] = $fdata;
//	SERIAL_NO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SERIAL_NO";
	$fdata["GoodName"] = "SERIAL_NO";
	$fdata["ownerTable"] = "scratch_cards";
	$fdata["Label"] = GetFieldLabel("scratch_cards","SERIAL_NO"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "SERIAL_NO"; 
		$fdata["FullName"] = "SERIAL_NO";
	
		
		
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

	

	
	$tdatascratch_cards["SERIAL_NO"] = $fdata;

	
$tables_data["scratch_cards"]=&$tdatascratch_cards;
$field_labels["scratch_cards"] = &$fieldLabelsscratch_cards;
$fieldToolTips["scratch_cards"] = &$fieldToolTipsscratch_cards;
$page_titles["scratch_cards"] = &$pageTitlesscratch_cards;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["scratch_cards"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["scratch_cards"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_scratch_cards()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "RECHARGE_DATE,   ACC_NBR,   DENOMINATION,   SERIAL_NO";
$proto0["m_strFrom"] = "FROM scratch_cards";
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
	"m_strName" => "RECHARGE_DATE",
	"m_strTable" => "scratch_cards"
));

$proto5["m_sql"] = "RECHARGE_DATE";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ACC_NBR",
	"m_strTable" => "scratch_cards"
));

$proto7["m_sql"] = "ACC_NBR";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "DENOMINATION",
	"m_strTable" => "scratch_cards"
));

$proto9["m_sql"] = "DENOMINATION";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "SERIAL_NO",
	"m_strTable" => "scratch_cards"
));

$proto11["m_sql"] = "SERIAL_NO";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "scratch_cards";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "RECHARGE_DATE";
$proto14["m_columns"][] = "ACC_NBR";
$proto14["m_columns"][] = "DENOMINATION";
$proto14["m_columns"][] = "SERIAL_NO";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "scratch_cards";
$proto13["m_alias"] = "";
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
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_scratch_cards = createSqlQuery_scratch_cards();

				
	
$tdatascratch_cards[".sqlquery"] = $queryData_scratch_cards;

$tableEvents["scratch_cards"] = new eventsBase;
$tdatascratch_cards[".hasEvents"] = false;

$cipherer = new RunnerCipherer("scratch_cards");

?>