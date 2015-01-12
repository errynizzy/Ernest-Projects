<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCopy_of_batches = array();	
	$tdataCopy_of_batches[".truncateText"] = true;
	$tdataCopy_of_batches[".NumberOfChars"] = 80; 
	$tdataCopy_of_batches[".ShortName"] = "Copy_of_batches";
	$tdataCopy_of_batches[".OwnerID"] = "";
	$tdataCopy_of_batches[".OriginalTable"] = "batches";

//	field labels
$fieldLabelsCopy_of_batches = array();
$fieldToolTipsCopy_of_batches = array();
$pageTitlesCopy_of_batches = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCopy_of_batches["English"] = array();
	$fieldToolTipsCopy_of_batches["English"] = array();
	$pageTitlesCopy_of_batches["English"] = array();
	$fieldLabelsCopy_of_batches["English"]["ID"] = "ID";
	$fieldToolTipsCopy_of_batches["English"]["ID"] = "";
	$fieldLabelsCopy_of_batches["English"]["Batch_Number"] = "Batch Number";
	$fieldToolTipsCopy_of_batches["English"]["Batch_Number"] = "";
	$fieldLabelsCopy_of_batches["English"]["Given_Batch_Number"] = "Given Batch Number";
	$fieldToolTipsCopy_of_batches["English"]["Given_Batch_Number"] = "";
	$fieldLabelsCopy_of_batches["English"]["Batch_size"] = "Batch Size";
	$fieldToolTipsCopy_of_batches["English"]["Batch_size"] = "";
	$fieldLabelsCopy_of_batches["English"]["Status"] = "Status";
	$fieldToolTipsCopy_of_batches["English"]["Status"] = "";
	if (count($fieldToolTipsCopy_of_batches["English"]))
		$tdataCopy_of_batches[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCopy_of_batches[""] = array();
	$fieldToolTipsCopy_of_batches[""] = array();
	$pageTitlesCopy_of_batches[""] = array();
	if (count($fieldToolTipsCopy_of_batches[""]))
		$tdataCopy_of_batches[".isUseToolTips"] = true;
}
	
	
	$tdataCopy_of_batches[".NCSearch"] = true;



$tdataCopy_of_batches[".shortTableName"] = "Copy_of_batches";
$tdataCopy_of_batches[".nSecOptions"] = 0;
$tdataCopy_of_batches[".recsPerRowList"] = 1;
$tdataCopy_of_batches[".mainTableOwnerID"] = "";
$tdataCopy_of_batches[".moveNext"] = 1;
$tdataCopy_of_batches[".nType"] = 1;

$tdataCopy_of_batches[".strOriginalTableName"] = "batches";

	


$tdataCopy_of_batches[".showAddInPopup"] = true;

$tdataCopy_of_batches[".showEditInPopup"] = true;

$tdataCopy_of_batches[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdataCopy_of_batches[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCopy_of_batches[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataCopy_of_batches[".listAjax"] = true;
else 
	$tdataCopy_of_batches[".listAjax"] = false;

	$tdataCopy_of_batches[".audit"] = false;

	$tdataCopy_of_batches[".locking"] = false;

$tdataCopy_of_batches[".edit"] = true;
$tdataCopy_of_batches[".inlineEdit"] = true;
$tdataCopy_of_batches[".inlineAdd"] = true;
$tdataCopy_of_batches[".view"] = true;

$tdataCopy_of_batches[".exportTo"] = true;

$tdataCopy_of_batches[".printFriendly"] = true;

$tdataCopy_of_batches[".delete"] = true;

$tdataCopy_of_batches[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataCopy_of_batches[".searchSaving"] = false;
//

$tdataCopy_of_batches[".showSearchPanel"] = true;
		$tdataCopy_of_batches[".flexibleSearch"] = true;		

if (isMobile())
	$tdataCopy_of_batches[".isUseAjaxSuggest"] = false;
else 
	$tdataCopy_of_batches[".isUseAjaxSuggest"] = true;

$tdataCopy_of_batches[".rowHighlite"] = true;



$tdataCopy_of_batches[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCopy_of_batches[".isUseTimeForSearch"] = false;





$tdataCopy_of_batches[".allSearchFields"] = array();
$tdataCopy_of_batches[".filterFields"] = array();
$tdataCopy_of_batches[".requiredSearchFields"] = array();

$tdataCopy_of_batches[".allSearchFields"][] = "ID";
		$tdataCopy_of_batches[".allSearchFields"][] = "Batch_Number";
		$tdataCopy_of_batches[".allSearchFields"][] = "Given_Batch_Number";
		$tdataCopy_of_batches[".allSearchFields"][] = "Batch_size";
		$tdataCopy_of_batches[".allSearchFields"][] = "Status";
		
$tdataCopy_of_batches[".googleLikeFields"] = array();
$tdataCopy_of_batches[".googleLikeFields"][] = "ID";
$tdataCopy_of_batches[".googleLikeFields"][] = "Batch_Number";
$tdataCopy_of_batches[".googleLikeFields"][] = "Given_Batch_Number";
$tdataCopy_of_batches[".googleLikeFields"][] = "Batch_size";
$tdataCopy_of_batches[".googleLikeFields"][] = "Status";


$tdataCopy_of_batches[".advSearchFields"] = array();
$tdataCopy_of_batches[".advSearchFields"][] = "ID";
$tdataCopy_of_batches[".advSearchFields"][] = "Batch_Number";
$tdataCopy_of_batches[".advSearchFields"][] = "Given_Batch_Number";
$tdataCopy_of_batches[".advSearchFields"][] = "Batch_size";
$tdataCopy_of_batches[".advSearchFields"][] = "Status";

$tdataCopy_of_batches[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdataCopy_of_batches[".pageSize"] = 20;

$tdataCopy_of_batches[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCopy_of_batches[".strOrderBy"] = $tstrOrderBy;

$tdataCopy_of_batches[".orderindexes"] = array();

$tdataCopy_of_batches[".sqlHead"] = "SELECT *";
$tdataCopy_of_batches[".sqlFrom"] = "FROM batches";
$tdataCopy_of_batches[".sqlWhereExpr"] = "Status = ''";
$tdataCopy_of_batches[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCopy_of_batches[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCopy_of_batches[".arrGroupsPerPage"] = $arrGPP;

$tdataCopy_of_batches[".highlightSearchResults"] = true;

$tableKeysCopy_of_batches = array();
$tableKeysCopy_of_batches[] = "ID";
$tdataCopy_of_batches[".Keys"] = $tableKeysCopy_of_batches;

$tdataCopy_of_batches[".listFields"] = array();
$tdataCopy_of_batches[".listFields"][] = "Batch_Number";
$tdataCopy_of_batches[".listFields"][] = "Given_Batch_Number";
$tdataCopy_of_batches[".listFields"][] = "Batch_size";
$tdataCopy_of_batches[".listFields"][] = "Status";

$tdataCopy_of_batches[".hideMobileList"] = array();


$tdataCopy_of_batches[".viewFields"] = array();
$tdataCopy_of_batches[".viewFields"][] = "Batch_Number";
$tdataCopy_of_batches[".viewFields"][] = "Given_Batch_Number";
$tdataCopy_of_batches[".viewFields"][] = "Batch_size";
$tdataCopy_of_batches[".viewFields"][] = "Status";

$tdataCopy_of_batches[".addFields"] = array();
$tdataCopy_of_batches[".addFields"][] = "Batch_Number";
$tdataCopy_of_batches[".addFields"][] = "Given_Batch_Number";
$tdataCopy_of_batches[".addFields"][] = "Batch_size";
$tdataCopy_of_batches[".addFields"][] = "Status";

$tdataCopy_of_batches[".inlineAddFields"] = array();
$tdataCopy_of_batches[".inlineAddFields"][] = "Batch_Number";
$tdataCopy_of_batches[".inlineAddFields"][] = "Given_Batch_Number";
$tdataCopy_of_batches[".inlineAddFields"][] = "Batch_size";
$tdataCopy_of_batches[".inlineAddFields"][] = "Status";

$tdataCopy_of_batches[".editFields"] = array();
$tdataCopy_of_batches[".editFields"][] = "Batch_Number";
$tdataCopy_of_batches[".editFields"][] = "Given_Batch_Number";
$tdataCopy_of_batches[".editFields"][] = "Batch_size";
$tdataCopy_of_batches[".editFields"][] = "Status";

$tdataCopy_of_batches[".inlineEditFields"] = array();
$tdataCopy_of_batches[".inlineEditFields"][] = "Batch_Number";
$tdataCopy_of_batches[".inlineEditFields"][] = "Given_Batch_Number";
$tdataCopy_of_batches[".inlineEditFields"][] = "Batch_size";
$tdataCopy_of_batches[".inlineEditFields"][] = "Status";

$tdataCopy_of_batches[".exportFields"] = array();
$tdataCopy_of_batches[".exportFields"][] = "Batch_Number";
$tdataCopy_of_batches[".exportFields"][] = "Given_Batch_Number";
$tdataCopy_of_batches[".exportFields"][] = "Batch_size";
$tdataCopy_of_batches[".exportFields"][] = "Status";

$tdataCopy_of_batches[".printFields"] = array();
$tdataCopy_of_batches[".printFields"][] = "Batch_Number";
$tdataCopy_of_batches[".printFields"][] = "Given_Batch_Number";
$tdataCopy_of_batches[".printFields"][] = "Batch_size";
$tdataCopy_of_batches[".printFields"][] = "Status";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Copy_of_batches","ID"); 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
				
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ID"; 
				$fdata["FullName"] = "`batches`.`ID`";
	
		
		
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

	

	
	$tdataCopy_of_batches["ID"] = $fdata;
//	Batch_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Batch_Number";
	$fdata["GoodName"] = "Batch_Number";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Copy_of_batches","Batch_Number"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Batch_Number"; 
				$fdata["FullName"] = "`batches`.`Batch_Number`";
	
		
		
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
			$edata["EditParams"].= " maxlength=200";
	
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

	

	
	$tdataCopy_of_batches["Batch_Number"] = $fdata;
//	Given_Batch_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Given_Batch_Number";
	$fdata["GoodName"] = "Given_Batch_Number";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Copy_of_batches","Given_Batch_Number"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Given_Batch_Number"; 
				$fdata["FullName"] = "`batches`.`Given_Batch_Number`";
	
		
		
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
			$edata["EditParams"].= " maxlength=200";
	
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

	

	
	$tdataCopy_of_batches["Given_Batch_Number"] = $fdata;
//	Batch_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Batch_size";
	$fdata["GoodName"] = "Batch_size";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Copy_of_batches","Batch_size"); 
	$fdata["FieldType"] = 3;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Batch_size"; 
				$fdata["FullName"] = "`batches`.`Batch_size`";
	
		
		
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

	

	
	$tdataCopy_of_batches["Batch_size"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Copy_of_batches","Status"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Status"; 
				$fdata["FullName"] = "`batches`.`Status`";
	
		
		
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
			$edata["EditParams"].= " maxlength=200";
	
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

	

	
	$tdataCopy_of_batches["Status"] = $fdata;

	
$tables_data["Copy of batches"]=&$tdataCopy_of_batches;
$field_labels["Copy_of_batches"] = &$fieldLabelsCopy_of_batches;
$fieldToolTips["Copy of batches"] = &$fieldToolTipsCopy_of_batches;
$page_titles["Copy_of_batches"] = &$pageTitlesCopy_of_batches;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Copy of batches"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Copy of batches"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Copy_of_batches()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "*";
$proto3["m_strFrom"] = "FROM batches";
$proto3["m_strWhere"] = "Status = ''";
$proto3["m_strOrderBy"] = "";
$proto3["m_strTail"] = "";
			$proto3["cipherer"] = null;
$proto4=array();
$proto4["m_sql"] = "Status = ''";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "batches"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= ''";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "*"
));

$proto8["m_sql"] = "*";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "batches";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID";
$proto11["m_columns"][] = "Batch_Number";
$proto11["m_columns"][] = "Given_Batch_Number";
$proto11["m_columns"][] = "Batch_size";
$proto11["m_columns"][] = "Status";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "batches";
$proto10["m_alias"] = "";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_Copy_of_batches = createSqlQuery_Copy_of_batches();

					
	
$tdataCopy_of_batches[".sqlquery"] = $queryData_Copy_of_batches;

$tableEvents["Copy of batches"] = new eventsBase;
$tdataCopy_of_batches[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Copy of batches");

?>