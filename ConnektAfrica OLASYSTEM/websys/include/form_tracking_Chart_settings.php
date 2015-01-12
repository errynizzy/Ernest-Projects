<?php
require_once(getabspath("classes/cipherer.php"));




$tdataform_tracking_Chart = array();	
	$tdataform_tracking_Chart[".truncateText"] = true;
	$tdataform_tracking_Chart[".NumberOfChars"] = 80; 
	$tdataform_tracking_Chart[".ShortName"] = "form_tracking_Chart";
	$tdataform_tracking_Chart[".OwnerID"] = "";
	$tdataform_tracking_Chart[".OriginalTable"] = "form_tracking";

//	field labels
$fieldLabelsform_tracking_Chart = array();
$fieldToolTipsform_tracking_Chart = array();
$pageTitlesform_tracking_Chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsform_tracking_Chart["English"] = array();
	$fieldToolTipsform_tracking_Chart["English"] = array();
	$pageTitlesform_tracking_Chart["English"] = array();
	$fieldLabelsform_tracking_Chart["English"]["D_SL_DSO_RDO"] = "D SL DSO RDO";
	$fieldToolTipsform_tracking_Chart["English"]["D_SL_DSO_RDO"] = "";
	$fieldLabelsform_tracking_Chart["English"]["TOTAL_SIMCARDS_GIVEN"] = "TOTAL SIMCARDS GIVEN";
	$fieldToolTipsform_tracking_Chart["English"]["TOTAL_SIMCARDS_GIVEN"] = "";
	$fieldLabelsform_tracking_Chart["English"]["SIMCARDS_ACTIVATED"] = "SIMCARDS ACTIVATED";
	$fieldToolTipsform_tracking_Chart["English"]["SIMCARDS_ACTIVATED"] = "";
	$fieldLabelsform_tracking_Chart["English"]["SIMCARDS_RETURNED"] = "SIMCARDS RETURNED";
	$fieldToolTipsform_tracking_Chart["English"]["SIMCARDS_RETURNED"] = "";
	$fieldLabelsform_tracking_Chart["English"]["SIMCARDS_REJECTED"] = "SIMCARDS REJECTED";
	$fieldToolTipsform_tracking_Chart["English"]["SIMCARDS_REJECTED"] = "";
	$fieldLabelsform_tracking_Chart["English"]["SIMCARDS_NOT_RETURNED"] = "SIMCARDS NOT RETURNED";
	$fieldToolTipsform_tracking_Chart["English"]["SIMCARDS_NOT_RETURNED"] = "";
	if (count($fieldToolTipsform_tracking_Chart["English"]))
		$tdataform_tracking_Chart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsform_tracking_Chart[""] = array();
	$fieldToolTipsform_tracking_Chart[""] = array();
	$pageTitlesform_tracking_Chart[""] = array();
	if (count($fieldToolTipsform_tracking_Chart[""]))
		$tdataform_tracking_Chart[".isUseToolTips"] = true;
}
	
	
	$tdataform_tracking_Chart[".NCSearch"] = true;

	$tdataform_tracking_Chart[".ChartRefreshTime"] = 0;


$tdataform_tracking_Chart[".shortTableName"] = "form_tracking_Chart";
$tdataform_tracking_Chart[".nSecOptions"] = 0;
$tdataform_tracking_Chart[".recsPerRowList"] = 1;
$tdataform_tracking_Chart[".mainTableOwnerID"] = "";
$tdataform_tracking_Chart[".moveNext"] = 1;
$tdataform_tracking_Chart[".nType"] = 3;

$tdataform_tracking_Chart[".strOriginalTableName"] = "form_tracking";

	


$tdataform_tracking_Chart[".showAddInPopup"] = false;

$tdataform_tracking_Chart[".showEditInPopup"] = false;

$tdataform_tracking_Chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataform_tracking_Chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataform_tracking_Chart[".fieldsForRegister"] = array();

$tdataform_tracking_Chart[".listAjax"] = false;

	$tdataform_tracking_Chart[".audit"] = false;

	$tdataform_tracking_Chart[".locking"] = false;

$tdataform_tracking_Chart[".edit"] = true;
$tdataform_tracking_Chart[".inlineEdit"] = true;
$tdataform_tracking_Chart[".inlineAdd"] = true;
$tdataform_tracking_Chart[".view"] = true;



$tdataform_tracking_Chart[".delete"] = true;

$tdataform_tracking_Chart[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataform_tracking_Chart[".searchSaving"] = false;
//

$tdataform_tracking_Chart[".showSearchPanel"] = true;
		$tdataform_tracking_Chart[".flexibleSearch"] = true;		

if (isMobile())
	$tdataform_tracking_Chart[".isUseAjaxSuggest"] = false;
else 
	$tdataform_tracking_Chart[".isUseAjaxSuggest"] = true;




$tdataform_tracking_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdataform_tracking_Chart[".isUseTimeForSearch"] = false;





$tdataform_tracking_Chart[".allSearchFields"] = array();
$tdataform_tracking_Chart[".filterFields"] = array();
$tdataform_tracking_Chart[".requiredSearchFields"] = array();

$tdataform_tracking_Chart[".allSearchFields"][] = "D_SL_DSO_RDO";
		$tdataform_tracking_Chart[".allSearchFields"][] = "TOTAL_SIMCARDS_GIVEN";
		$tdataform_tracking_Chart[".allSearchFields"][] = "SIMCARDS_ACTIVATED";
		$tdataform_tracking_Chart[".allSearchFields"][] = "SIMCARDS_RETURNED";
		$tdataform_tracking_Chart[".allSearchFields"][] = "SIMCARDS_REJECTED";
		$tdataform_tracking_Chart[".allSearchFields"][] = "SIMCARDS_NOT_RETURNED";
		
$tdataform_tracking_Chart[".googleLikeFields"] = array();
$tdataform_tracking_Chart[".googleLikeFields"][] = "D_SL_DSO_RDO";
$tdataform_tracking_Chart[".googleLikeFields"][] = "TOTAL_SIMCARDS_GIVEN";
$tdataform_tracking_Chart[".googleLikeFields"][] = "SIMCARDS_ACTIVATED";
$tdataform_tracking_Chart[".googleLikeFields"][] = "SIMCARDS_RETURNED";
$tdataform_tracking_Chart[".googleLikeFields"][] = "SIMCARDS_REJECTED";
$tdataform_tracking_Chart[".googleLikeFields"][] = "SIMCARDS_NOT_RETURNED";


$tdataform_tracking_Chart[".advSearchFields"] = array();
$tdataform_tracking_Chart[".advSearchFields"][] = "D_SL_DSO_RDO";
$tdataform_tracking_Chart[".advSearchFields"][] = "TOTAL_SIMCARDS_GIVEN";
$tdataform_tracking_Chart[".advSearchFields"][] = "SIMCARDS_ACTIVATED";
$tdataform_tracking_Chart[".advSearchFields"][] = "SIMCARDS_RETURNED";
$tdataform_tracking_Chart[".advSearchFields"][] = "SIMCARDS_REJECTED";
$tdataform_tracking_Chart[".advSearchFields"][] = "SIMCARDS_NOT_RETURNED";

$tdataform_tracking_Chart[".tableType"] = "chart";

	



// Access doesn't support subqueries from the same table as main





$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataform_tracking_Chart[".strOrderBy"] = $tstrOrderBy;

$tdataform_tracking_Chart[".orderindexes"] = array();

$tdataform_tracking_Chart[".sqlHead"] = "SELECT D_SL_DSO_RDO,  TOTAL_SIMCARDS_GIVEN,  SIMCARDS_ACTIVATED,  SIMCARDS_RETURNED,  SIMCARDS_REJECTED,  SIMCARDS_NOT_RETURNED";
$tdataform_tracking_Chart[".sqlFrom"] = "FROM form_tracking";
$tdataform_tracking_Chart[".sqlWhereExpr"] = "";
$tdataform_tracking_Chart[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataform_tracking_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataform_tracking_Chart[".arrGroupsPerPage"] = $arrGPP;

$tdataform_tracking_Chart[".highlightSearchResults"] = true;

$tableKeysform_tracking_Chart = array();
$tableKeysform_tracking_Chart[] = "D_SL_DSO_RDO";
$tdataform_tracking_Chart[".Keys"] = $tableKeysform_tracking_Chart;

$tdataform_tracking_Chart[".listFields"] = array();
$tdataform_tracking_Chart[".listFields"][] = "D_SL_DSO_RDO";
$tdataform_tracking_Chart[".listFields"][] = "TOTAL_SIMCARDS_GIVEN";
$tdataform_tracking_Chart[".listFields"][] = "SIMCARDS_ACTIVATED";
$tdataform_tracking_Chart[".listFields"][] = "SIMCARDS_RETURNED";
$tdataform_tracking_Chart[".listFields"][] = "SIMCARDS_REJECTED";
$tdataform_tracking_Chart[".listFields"][] = "SIMCARDS_NOT_RETURNED";

$tdataform_tracking_Chart[".hideMobileList"] = array();


$tdataform_tracking_Chart[".viewFields"] = array();
$tdataform_tracking_Chart[".viewFields"][] = "D_SL_DSO_RDO";
$tdataform_tracking_Chart[".viewFields"][] = "TOTAL_SIMCARDS_GIVEN";
$tdataform_tracking_Chart[".viewFields"][] = "SIMCARDS_ACTIVATED";
$tdataform_tracking_Chart[".viewFields"][] = "SIMCARDS_RETURNED";
$tdataform_tracking_Chart[".viewFields"][] = "SIMCARDS_REJECTED";
$tdataform_tracking_Chart[".viewFields"][] = "SIMCARDS_NOT_RETURNED";

$tdataform_tracking_Chart[".addFields"] = array();
$tdataform_tracking_Chart[".addFields"][] = "D_SL_DSO_RDO";
$tdataform_tracking_Chart[".addFields"][] = "TOTAL_SIMCARDS_GIVEN";
$tdataform_tracking_Chart[".addFields"][] = "SIMCARDS_ACTIVATED";
$tdataform_tracking_Chart[".addFields"][] = "SIMCARDS_RETURNED";
$tdataform_tracking_Chart[".addFields"][] = "SIMCARDS_REJECTED";
$tdataform_tracking_Chart[".addFields"][] = "SIMCARDS_NOT_RETURNED";

$tdataform_tracking_Chart[".inlineAddFields"] = array();
$tdataform_tracking_Chart[".inlineAddFields"][] = "D_SL_DSO_RDO";
$tdataform_tracking_Chart[".inlineAddFields"][] = "TOTAL_SIMCARDS_GIVEN";
$tdataform_tracking_Chart[".inlineAddFields"][] = "SIMCARDS_ACTIVATED";
$tdataform_tracking_Chart[".inlineAddFields"][] = "SIMCARDS_RETURNED";
$tdataform_tracking_Chart[".inlineAddFields"][] = "SIMCARDS_REJECTED";
$tdataform_tracking_Chart[".inlineAddFields"][] = "SIMCARDS_NOT_RETURNED";

$tdataform_tracking_Chart[".editFields"] = array();
$tdataform_tracking_Chart[".editFields"][] = "D_SL_DSO_RDO";
$tdataform_tracking_Chart[".editFields"][] = "TOTAL_SIMCARDS_GIVEN";
$tdataform_tracking_Chart[".editFields"][] = "SIMCARDS_ACTIVATED";
$tdataform_tracking_Chart[".editFields"][] = "SIMCARDS_RETURNED";
$tdataform_tracking_Chart[".editFields"][] = "SIMCARDS_REJECTED";
$tdataform_tracking_Chart[".editFields"][] = "SIMCARDS_NOT_RETURNED";

$tdataform_tracking_Chart[".inlineEditFields"] = array();
$tdataform_tracking_Chart[".inlineEditFields"][] = "D_SL_DSO_RDO";
$tdataform_tracking_Chart[".inlineEditFields"][] = "TOTAL_SIMCARDS_GIVEN";
$tdataform_tracking_Chart[".inlineEditFields"][] = "SIMCARDS_ACTIVATED";
$tdataform_tracking_Chart[".inlineEditFields"][] = "SIMCARDS_RETURNED";
$tdataform_tracking_Chart[".inlineEditFields"][] = "SIMCARDS_REJECTED";
$tdataform_tracking_Chart[".inlineEditFields"][] = "SIMCARDS_NOT_RETURNED";

$tdataform_tracking_Chart[".exportFields"] = array();
$tdataform_tracking_Chart[".exportFields"][] = "D_SL_DSO_RDO";
$tdataform_tracking_Chart[".exportFields"][] = "TOTAL_SIMCARDS_GIVEN";
$tdataform_tracking_Chart[".exportFields"][] = "SIMCARDS_ACTIVATED";
$tdataform_tracking_Chart[".exportFields"][] = "SIMCARDS_RETURNED";
$tdataform_tracking_Chart[".exportFields"][] = "SIMCARDS_REJECTED";
$tdataform_tracking_Chart[".exportFields"][] = "SIMCARDS_NOT_RETURNED";

$tdataform_tracking_Chart[".printFields"] = array();
$tdataform_tracking_Chart[".printFields"][] = "D_SL_DSO_RDO";
$tdataform_tracking_Chart[".printFields"][] = "TOTAL_SIMCARDS_GIVEN";
$tdataform_tracking_Chart[".printFields"][] = "SIMCARDS_ACTIVATED";
$tdataform_tracking_Chart[".printFields"][] = "SIMCARDS_RETURNED";
$tdataform_tracking_Chart[".printFields"][] = "SIMCARDS_REJECTED";
$tdataform_tracking_Chart[".printFields"][] = "SIMCARDS_NOT_RETURNED";

//	D_SL_DSO_RDO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "D_SL_DSO_RDO";
	$fdata["GoodName"] = "D_SL_DSO_RDO";
	$fdata["ownerTable"] = "form_tracking";
	$fdata["Label"] = GetFieldLabel("form_tracking_Chart","D_SL_DSO_RDO"); 
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
	
		$fdata["strField"] = "D_SL_DSO_RDO"; 
		$fdata["FullName"] = "D_SL_DSO_RDO";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataform_tracking_Chart["D_SL_DSO_RDO"] = $fdata;
//	TOTAL_SIMCARDS_GIVEN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TOTAL_SIMCARDS_GIVEN";
	$fdata["GoodName"] = "TOTAL_SIMCARDS_GIVEN";
	$fdata["ownerTable"] = "form_tracking";
	$fdata["Label"] = GetFieldLabel("form_tracking_Chart","TOTAL_SIMCARDS_GIVEN"); 
	$fdata["FieldType"] = 20;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TOTAL_SIMCARDS_GIVEN"; 
		$fdata["FullName"] = "TOTAL_SIMCARDS_GIVEN";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataform_tracking_Chart["TOTAL_SIMCARDS_GIVEN"] = $fdata;
//	SIMCARDS_ACTIVATED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SIMCARDS_ACTIVATED";
	$fdata["GoodName"] = "SIMCARDS_ACTIVATED";
	$fdata["ownerTable"] = "form_tracking";
	$fdata["Label"] = GetFieldLabel("form_tracking_Chart","SIMCARDS_ACTIVATED"); 
	$fdata["FieldType"] = 20;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "SIMCARDS_ACTIVATED"; 
		$fdata["FullName"] = "SIMCARDS_ACTIVATED";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataform_tracking_Chart["SIMCARDS_ACTIVATED"] = $fdata;
//	SIMCARDS_RETURNED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SIMCARDS_RETURNED";
	$fdata["GoodName"] = "SIMCARDS_RETURNED";
	$fdata["ownerTable"] = "form_tracking";
	$fdata["Label"] = GetFieldLabel("form_tracking_Chart","SIMCARDS_RETURNED"); 
	$fdata["FieldType"] = 20;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "SIMCARDS_RETURNED"; 
		$fdata["FullName"] = "SIMCARDS_RETURNED";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataform_tracking_Chart["SIMCARDS_RETURNED"] = $fdata;
//	SIMCARDS_REJECTED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SIMCARDS_REJECTED";
	$fdata["GoodName"] = "SIMCARDS_REJECTED";
	$fdata["ownerTable"] = "form_tracking";
	$fdata["Label"] = GetFieldLabel("form_tracking_Chart","SIMCARDS_REJECTED"); 
	$fdata["FieldType"] = 20;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "SIMCARDS_REJECTED"; 
		$fdata["FullName"] = "SIMCARDS_REJECTED";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataform_tracking_Chart["SIMCARDS_REJECTED"] = $fdata;
//	SIMCARDS_NOT_RETURNED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SIMCARDS_NOT_RETURNED";
	$fdata["GoodName"] = "SIMCARDS_NOT_RETURNED";
	$fdata["ownerTable"] = "form_tracking";
	$fdata["Label"] = GetFieldLabel("form_tracking_Chart","SIMCARDS_NOT_RETURNED"); 
	$fdata["FieldType"] = 20;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "SIMCARDS_NOT_RETURNED"; 
		$fdata["FullName"] = "SIMCARDS_NOT_RETURNED";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
		
	
		
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataform_tracking_Chart["SIMCARDS_NOT_RETURNED"] = $fdata;

	$tdataform_tracking_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">form_tracking Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>
		
		<attr value="parameters">';
	$tdataform_tracking_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">TOTAL_SIMCARDS_GIVEN</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdataform_tracking_Chart[".chartXml"] .= '</attr>';
	$tdataform_tracking_Chart[".chartXml"] .= '<attr value="1">
			<attr value="name">SIMCARDS_ACTIVATED</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdataform_tracking_Chart[".chartXml"] .= '</attr>';
	$tdataform_tracking_Chart[".chartXml"] .= '<attr value="2">
			<attr value="name">SIMCARDS_RETURNED</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdataform_tracking_Chart[".chartXml"] .= '</attr>';
	$tdataform_tracking_Chart[".chartXml"] .= '<attr value="3">
			<attr value="name">SIMCARDS_REJECTED</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdataform_tracking_Chart[".chartXml"] .= '</attr>';
	$tdataform_tracking_Chart[".chartXml"] .= '<attr value="4">
			<attr value="name">SIMCARDS_NOT_RETURNED</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">0</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdataform_tracking_Chart[".chartXml"] .= '</attr>';
	$tdataform_tracking_Chart[".chartXml"] .= '<attr value="5">
		<attr value="name">D_SL_DSO_RDO</attr>
	</attr>';
	$tdataform_tracking_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';
	$tdataform_tracking_Chart[".chartXml"] .= '<attr value="scolor11">FF0000</attr>
			<attr value="scolor12">FF0000</attr>';
	$tdataform_tracking_Chart[".chartXml"] .= '<attr value="scolor21">008000</attr>
			<attr value="scolor22">008000</attr>';
	$tdataform_tracking_Chart[".chartXml"] .= '<attr value="scolor31">0000FF</attr>
			<attr value="scolor32">0000FF</attr>';
	$tdataform_tracking_Chart[".chartXml"] .= '<attr value="scolor41">DC143C</attr>
			<attr value="scolor42">DC143C</attr>';
	$tdataform_tracking_Chart[".chartXml"] .= '<attr value="scolor51">2E8B57</attr>
			<attr value="scolor52">2E8B57</attr>';

	$tdataform_tracking_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("Forms Tracking").'</attr>
<attr value="foot">'.xmlencode("Forms").'</attr>
<attr value="y_axis_label">'.xmlencode("TOTAL SIMCARDS GIVEN").'</attr>

<attr value="color51">49563A</attr>
<attr value="color52">49563A</attr>
<attr value="color61">49563A</attr>
<attr value="color62">49563A</attr>
<attr value="color71">C7CDC1</attr>
<attr value="color72">C7CDC1</attr>
<attr value="color81">ECF0E8</attr>
<attr value="color82">ECF0E8</attr>
<attr value="color91">68838B</attr>
<attr value="color92">68838B</attr>
<attr value="color101">48505A</attr>
<attr value="color102">48505A</attr>
<attr value="color111">45595F</attr>
<attr value="color112">45595F</attr>
<attr value="color121"></attr>
<attr value="color122"></attr>
<attr value="color131">000000</attr>
<attr value="color132">000000</attr>
<attr value="color141">000000</attr>
<attr value="color142">000000</attr>

<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">false</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="saxes">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">300</attr>
<attr value="cscroll">true</attr>
<attr value="maxbarscroll">10</attr>';
$tdataform_tracking_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataform_tracking_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">D_SL_DSO_RDO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("form_tracking_Chart","D_SL_DSO_RDO")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataform_tracking_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">TOTAL_SIMCARDS_GIVEN</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("form_tracking_Chart","TOTAL_SIMCARDS_GIVEN")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataform_tracking_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">SIMCARDS_ACTIVATED</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("form_tracking_Chart","SIMCARDS_ACTIVATED")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataform_tracking_Chart[".chartXml"] .= '<attr value="3">
		<attr value="name">SIMCARDS_RETURNED</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("form_tracking_Chart","SIMCARDS_RETURNED")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataform_tracking_Chart[".chartXml"] .= '<attr value="4">
		<attr value="name">SIMCARDS_REJECTED</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("form_tracking_Chart","SIMCARDS_REJECTED")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataform_tracking_Chart[".chartXml"] .= '<attr value="5">
		<attr value="name">SIMCARDS_NOT_RETURNED</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("form_tracking_Chart","SIMCARDS_NOT_RETURNED")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataform_tracking_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">form_tracking Chart</attr>
<attr value="short_table_name">form_tracking_Chart</attr>
</attr>

</chart>';
	
$tables_data["form_tracking Chart"]=&$tdataform_tracking_Chart;
$field_labels["form_tracking_Chart"] = &$fieldLabelsform_tracking_Chart;
$fieldToolTips["form_tracking Chart"] = &$fieldToolTipsform_tracking_Chart;
$page_titles["form_tracking_Chart"] = &$pageTitlesform_tracking_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["form_tracking Chart"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["form_tracking Chart"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_form_tracking_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "D_SL_DSO_RDO,  TOTAL_SIMCARDS_GIVEN,  SIMCARDS_ACTIVATED,  SIMCARDS_RETURNED,  SIMCARDS_REJECTED,  SIMCARDS_NOT_RETURNED";
$proto0["m_strFrom"] = "FROM form_tracking";
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
	"m_strName" => "D_SL_DSO_RDO",
	"m_strTable" => "form_tracking"
));

$proto5["m_sql"] = "D_SL_DSO_RDO";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTAL_SIMCARDS_GIVEN",
	"m_strTable" => "form_tracking"
));

$proto7["m_sql"] = "TOTAL_SIMCARDS_GIVEN";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "SIMCARDS_ACTIVATED",
	"m_strTable" => "form_tracking"
));

$proto9["m_sql"] = "SIMCARDS_ACTIVATED";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "SIMCARDS_RETURNED",
	"m_strTable" => "form_tracking"
));

$proto11["m_sql"] = "SIMCARDS_RETURNED";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "SIMCARDS_REJECTED",
	"m_strTable" => "form_tracking"
));

$proto13["m_sql"] = "SIMCARDS_REJECTED";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "SIMCARDS_NOT_RETURNED",
	"m_strTable" => "form_tracking"
));

$proto15["m_sql"] = "SIMCARDS_NOT_RETURNED";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "form_tracking";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "ID";
$proto18["m_columns"][] = "D_SL_DSO_RDO";
$proto18["m_columns"][] = "TOTAL_SIMCARDS_GIVEN";
$proto18["m_columns"][] = "SIMCARDS_ACTIVATED";
$proto18["m_columns"][] = "SIMCARDS_RETURNED";
$proto18["m_columns"][] = "SIMCARDS_REJECTED";
$proto18["m_columns"][] = "SIMCARDS_NOT_RETURNED";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "form_tracking";
$proto17["m_alias"] = "";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_form_tracking_Chart = createSqlQuery_form_tracking_Chart();

						
	
$tdataform_tracking_Chart[".sqlquery"] = $queryData_form_tracking_Chart;

$tableEvents["form_tracking Chart"] = new eventsBase;
$tdataform_tracking_Chart[".hasEvents"] = false;

$cipherer = new RunnerCipherer("form_tracking Chart");

?>