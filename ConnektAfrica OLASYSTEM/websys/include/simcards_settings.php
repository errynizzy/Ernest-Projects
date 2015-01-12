<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasimcards = array();	
	$tdatasimcards[".truncateText"] = true;
	$tdatasimcards[".NumberOfChars"] = 80; 
	$tdatasimcards[".ShortName"] = "simcards";
	$tdatasimcards[".OwnerID"] = "mydata";
	$tdatasimcards[".OriginalTable"] = "simcards";

//	field labels
$fieldLabelssimcards = array();
$fieldToolTipssimcards = array();
$pageTitlessimcards = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssimcards["English"] = array();
	$fieldToolTipssimcards["English"] = array();
	$pageTitlessimcards["English"] = array();
	$fieldLabelssimcards["English"]["ID"] = "ID";
	$fieldToolTipssimcards["English"]["ID"] = "";
	$fieldLabelssimcards["English"]["supplier_name"] = "Supplier Name";
	$fieldToolTipssimcards["English"]["supplier_name"] = "";
	$fieldLabelssimcards["English"]["supplier_number"] = "Supplier Number";
	$fieldToolTipssimcards["English"]["supplier_number"] = "";
	$fieldLabelssimcards["English"]["batch_number"] = "Batch Number";
	$fieldToolTipssimcards["English"]["batch_number"] = "";
	$fieldLabelssimcards["English"]["batch_size"] = "Batch Size";
	$fieldToolTipssimcards["English"]["batch_size"] = "";
	$fieldLabelssimcards["English"]["Date"] = "Date";
	$fieldToolTipssimcards["English"]["Date"] = "";
	$fieldLabelssimcards["English"]["pos_number"] = "Pos Number";
	$fieldToolTipssimcards["English"]["pos_number"] = "";
	$fieldLabelssimcards["English"]["status"] = "Status";
	$fieldToolTipssimcards["English"]["status"] = "";
	$fieldLabelssimcards["English"]["mydata"] = "Mydata";
	$fieldToolTipssimcards["English"]["mydata"] = "";
	if (count($fieldToolTipssimcards["English"]))
		$tdatasimcards[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssimcards[""] = array();
	$fieldToolTipssimcards[""] = array();
	$pageTitlessimcards[""] = array();
	$fieldLabelssimcards[""]["ID"] = "ID";
	$fieldToolTipssimcards[""]["ID"] = "";
	if (count($fieldToolTipssimcards[""]))
		$tdatasimcards[".isUseToolTips"] = true;
}
	
	
	$tdatasimcards[".NCSearch"] = true;



$tdatasimcards[".shortTableName"] = "simcards";
$tdatasimcards[".nSecOptions"] = 1;
$tdatasimcards[".recsPerRowList"] = 1;
$tdatasimcards[".mainTableOwnerID"] = "mydata";
$tdatasimcards[".moveNext"] = 1;
$tdatasimcards[".nType"] = 0;

$tdatasimcards[".strOriginalTableName"] = "simcards";

	


$tdatasimcards[".showAddInPopup"] = true;

$tdatasimcards[".showEditInPopup"] = true;

$tdatasimcards[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_basic_2col_center";
						
	;
$popupPagesLayoutNames["edit"] = "edit_basic_2col_center";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatasimcards[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasimcards[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatasimcards[".listAjax"] = true;
else 
	$tdatasimcards[".listAjax"] = false;

	$tdatasimcards[".audit"] = false;

	$tdatasimcards[".locking"] = false;

$tdatasimcards[".edit"] = true;
$tdatasimcards[".inlineEdit"] = true;
$tdatasimcards[".inlineAdd"] = true;
$tdatasimcards[".view"] = true;

$tdatasimcards[".exportTo"] = true;


$tdatasimcards[".delete"] = true;

$tdatasimcards[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasimcards[".searchSaving"] = false;
//

$tdatasimcards[".showSearchPanel"] = true;
		$tdatasimcards[".flexibleSearch"] = true;		

if (isMobile())
	$tdatasimcards[".isUseAjaxSuggest"] = false;
else 
	$tdatasimcards[".isUseAjaxSuggest"] = true;

$tdatasimcards[".rowHighlite"] = true;



$tdatasimcards[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasimcards[".isUseTimeForSearch"] = false;





$tdatasimcards[".allSearchFields"] = array();
$tdatasimcards[".filterFields"] = array();
$tdatasimcards[".requiredSearchFields"] = array();

$tdatasimcards[".allSearchFields"][] = "supplier_name";
		$tdatasimcards[".allSearchFields"][] = "supplier_number";
		$tdatasimcards[".allSearchFields"][] = "batch_number";
		$tdatasimcards[".allSearchFields"][] = "batch_size";
		$tdatasimcards[".allSearchFields"][] = "Date";
		$tdatasimcards[".allSearchFields"][] = "pos_number";
		$tdatasimcards[".allSearchFields"][] = "status";
		
$tdatasimcards[".googleLikeFields"] = array();
$tdatasimcards[".googleLikeFields"][] = "ID";
$tdatasimcards[".googleLikeFields"][] = "supplier_name";
$tdatasimcards[".googleLikeFields"][] = "supplier_number";
$tdatasimcards[".googleLikeFields"][] = "batch_number";
$tdatasimcards[".googleLikeFields"][] = "batch_size";
$tdatasimcards[".googleLikeFields"][] = "Date";
$tdatasimcards[".googleLikeFields"][] = "pos_number";
$tdatasimcards[".googleLikeFields"][] = "status";
$tdatasimcards[".googleLikeFields"][] = "mydata";


$tdatasimcards[".advSearchFields"] = array();
$tdatasimcards[".advSearchFields"][] = "supplier_name";
$tdatasimcards[".advSearchFields"][] = "supplier_number";
$tdatasimcards[".advSearchFields"][] = "batch_number";
$tdatasimcards[".advSearchFields"][] = "batch_size";
$tdatasimcards[".advSearchFields"][] = "Date";
$tdatasimcards[".advSearchFields"][] = "pos_number";
$tdatasimcards[".advSearchFields"][] = "status";

$tdatasimcards[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdatasimcards[".pageSize"] = 20;

$tdatasimcards[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasimcards[".strOrderBy"] = $tstrOrderBy;

$tdatasimcards[".orderindexes"] = array();

$tdatasimcards[".sqlHead"] = "SELECT ID,   supplier_name,   supplier_number,   batch_number,   batch_size,   `Date`,   pos_number,   status,   mydata";
$tdatasimcards[".sqlFrom"] = "FROM simcards";
$tdatasimcards[".sqlWhereExpr"] = "";
$tdatasimcards[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasimcards[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasimcards[".arrGroupsPerPage"] = $arrGPP;

$tdatasimcards[".highlightSearchResults"] = true;

$tableKeyssimcards = array();
$tableKeyssimcards[] = "ID";
$tdatasimcards[".Keys"] = $tableKeyssimcards;

$tdatasimcards[".listFields"] = array();
$tdatasimcards[".listFields"][] = "supplier_name";
$tdatasimcards[".listFields"][] = "supplier_number";
$tdatasimcards[".listFields"][] = "batch_number";
$tdatasimcards[".listFields"][] = "batch_size";
$tdatasimcards[".listFields"][] = "Date";
$tdatasimcards[".listFields"][] = "pos_number";
$tdatasimcards[".listFields"][] = "status";

$tdatasimcards[".hideMobileList"] = array();


$tdatasimcards[".viewFields"] = array();
$tdatasimcards[".viewFields"][] = "supplier_name";
$tdatasimcards[".viewFields"][] = "supplier_number";
$tdatasimcards[".viewFields"][] = "batch_number";
$tdatasimcards[".viewFields"][] = "batch_size";
$tdatasimcards[".viewFields"][] = "Date";
$tdatasimcards[".viewFields"][] = "pos_number";
$tdatasimcards[".viewFields"][] = "status";

$tdatasimcards[".addFields"] = array();
$tdatasimcards[".addFields"][] = "supplier_name";
$tdatasimcards[".addFields"][] = "supplier_number";
$tdatasimcards[".addFields"][] = "batch_number";
$tdatasimcards[".addFields"][] = "batch_size";
$tdatasimcards[".addFields"][] = "Date";

$tdatasimcards[".inlineAddFields"] = array();
$tdatasimcards[".inlineAddFields"][] = "supplier_name";
$tdatasimcards[".inlineAddFields"][] = "supplier_number";
$tdatasimcards[".inlineAddFields"][] = "batch_number";
$tdatasimcards[".inlineAddFields"][] = "batch_size";
$tdatasimcards[".inlineAddFields"][] = "Date";

$tdatasimcards[".editFields"] = array();
$tdatasimcards[".editFields"][] = "pos_number";
$tdatasimcards[".editFields"][] = "status";

$tdatasimcards[".inlineEditFields"] = array();
$tdatasimcards[".inlineEditFields"][] = "pos_number";
$tdatasimcards[".inlineEditFields"][] = "status";

$tdatasimcards[".exportFields"] = array();
$tdatasimcards[".exportFields"][] = "supplier_name";
$tdatasimcards[".exportFields"][] = "supplier_number";
$tdatasimcards[".exportFields"][] = "batch_number";
$tdatasimcards[".exportFields"][] = "batch_size";
$tdatasimcards[".exportFields"][] = "Date";
$tdatasimcards[".exportFields"][] = "pos_number";
$tdatasimcards[".exportFields"][] = "status";

$tdatasimcards[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "simcards";
	$fdata["Label"] = GetFieldLabel("simcards","ID"); 
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
	
	
	
	

	

	
	$tdatasimcards["ID"] = $fdata;
//	supplier_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "supplier_name";
	$fdata["GoodName"] = "supplier_name";
	$fdata["ownerTable"] = "simcards";
	$fdata["Label"] = GetFieldLabel("simcards","supplier_name"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "supplier_name"; 
		$fdata["FullName"] = "supplier_name";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "controller";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"supplier_number", 'lookupF'=>"Sales_Coordinator_Number");
	$edata["LCType"] = 1;
		
		
			
	$edata["LinkField"] = "Sales_Coordinator_Name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Sales_Coordinator_Name";
	
		
	$edata["LookupOrderBy"] = "Sales_Coordinator_Name";
	
		
			
		
				
	
	
		
		
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatasimcards["supplier_name"] = $fdata;
//	supplier_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "supplier_number";
	$fdata["GoodName"] = "supplier_number";
	$fdata["ownerTable"] = "simcards";
	$fdata["Label"] = GetFieldLabel("simcards","supplier_number"); 
	$fdata["FieldType"] = 20;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "supplier_number"; 
		$fdata["FullName"] = "supplier_number";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatasimcards["supplier_number"] = $fdata;
//	batch_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "batch_number";
	$fdata["GoodName"] = "batch_number";
	$fdata["ownerTable"] = "simcards";
	$fdata["Label"] = GetFieldLabel("simcards","batch_number"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "batch_number"; 
		$fdata["FullName"] = "batch_number";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Copy of batches";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"batch_size", 'lookupF'=>"Batch_size");
	$edata["LCType"] = 1;
		
		
			
	$edata["LinkField"] = "Given_Batch_Number";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Given_Batch_Number";
	
		
	$edata["LookupOrderBy"] = "Given_Batch_Number";
	
		
			
		
				
	
	
		
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatasimcards["batch_number"] = $fdata;
//	batch_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "batch_size";
	$fdata["GoodName"] = "batch_size";
	$fdata["ownerTable"] = "simcards";
	$fdata["Label"] = GetFieldLabel("simcards","batch_size"); 
	$fdata["FieldType"] = 3;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "batch_size"; 
		$fdata["FullName"] = "batch_size";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatasimcards["batch_size"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "simcards";
	$fdata["Label"] = GetFieldLabel("simcards","Date"); 
	$fdata["FieldType"] = 7;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Date"; 
		$fdata["FullName"] = "`Date`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 0; 
	$edata["LastYearFactor"] = 100; 
	
		
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatasimcards["Date"] = $fdata;
//	pos_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pos_number";
	$fdata["GoodName"] = "pos_number";
	$fdata["ownerTable"] = "simcards";
	$fdata["Label"] = GetFieldLabel("simcards","pos_number"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pos_number"; 
		$fdata["FullName"] = "pos_number";
	
		
		
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

	

	
	$tdatasimcards["pos_number"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "simcards";
	$fdata["Label"] = GetFieldLabel("simcards","status"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "status"; 
		$fdata["FullName"] = "status";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;
		
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Dropped";

		$edata["Multiselect"] = true; 
	
		
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatasimcards["status"] = $fdata;
//	mydata
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "mydata";
	$fdata["GoodName"] = "mydata";
	$fdata["ownerTable"] = "simcards";
	$fdata["Label"] = GetFieldLabel("simcards","mydata"); 
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
	
	
	
	

	

	
	$tdatasimcards["mydata"] = $fdata;

	
$tables_data["simcards"]=&$tdatasimcards;
$field_labels["simcards"] = &$fieldLabelssimcards;
$fieldToolTips["simcards"] = &$fieldToolTipssimcards;
$page_titles["simcards"] = &$pageTitlessimcards;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["simcards"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["simcards"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_simcards()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "ID,   supplier_name,   supplier_number,   batch_number,   batch_size,   `Date`,   pos_number,   status,   mydata";
$proto3["m_strFrom"] = "FROM simcards";
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
	"m_strTable" => "simcards"
));

$proto8["m_sql"] = "ID";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "supplier_name",
	"m_strTable" => "simcards"
));

$proto10["m_sql"] = "supplier_name";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "supplier_number",
	"m_strTable" => "simcards"
));

$proto12["m_sql"] = "supplier_number";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "batch_number",
	"m_strTable" => "simcards"
));

$proto14["m_sql"] = "batch_number";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "batch_size",
	"m_strTable" => "simcards"
));

$proto16["m_sql"] = "batch_size";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "simcards"
));

$proto18["m_sql"] = "`Date`";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "pos_number",
	"m_strTable" => "simcards"
));

$proto20["m_sql"] = "pos_number";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "simcards"
));

$proto22["m_sql"] = "status";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto3["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "mydata",
	"m_strTable" => "simcards"
));

$proto24["m_sql"] = "mydata";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "simcards";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "ID";
$proto27["m_columns"][] = "supplier_name";
$proto27["m_columns"][] = "supplier_number";
$proto27["m_columns"][] = "batch_number";
$proto27["m_columns"][] = "batch_size";
$proto27["m_columns"][] = "Date";
$proto27["m_columns"][] = "pos_number";
$proto27["m_columns"][] = "status";
$proto27["m_columns"][] = "mydata";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "simcards";
$proto26["m_alias"] = "";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_simcards = createSqlQuery_simcards();

									
	
$tdatasimcards[".sqlquery"] = $queryData_simcards;

$tableEvents["simcards"] = new eventsBase;
$tdatasimcards[".hasEvents"] = false;

$cipherer = new RunnerCipherer("simcards");

?>