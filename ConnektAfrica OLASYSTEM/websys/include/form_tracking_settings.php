<?php
require_once(getabspath("classes/cipherer.php"));




$tdataform_tracking = array();	
	$tdataform_tracking[".truncateText"] = true;
	$tdataform_tracking[".NumberOfChars"] = 80; 
	$tdataform_tracking[".ShortName"] = "form_tracking";
	$tdataform_tracking[".OwnerID"] = "";
	$tdataform_tracking[".OriginalTable"] = "form_tracking";

//	field labels
$fieldLabelsform_tracking = array();
$fieldToolTipsform_tracking = array();
$pageTitlesform_tracking = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsform_tracking["English"] = array();
	$fieldToolTipsform_tracking["English"] = array();
	$pageTitlesform_tracking["English"] = array();
	$fieldLabelsform_tracking["English"]["ID"] = "ID";
	$fieldToolTipsform_tracking["English"]["ID"] = "";
	$fieldLabelsform_tracking["English"]["D_SL_DSO_RDO"] = "D SL DSO RDO";
	$fieldToolTipsform_tracking["English"]["D_SL_DSO_RDO"] = "";
	$fieldLabelsform_tracking["English"]["TOTAL_SIMCARDS_GIVEN"] = "TOTAL SIMCARDS GIVEN";
	$fieldToolTipsform_tracking["English"]["TOTAL_SIMCARDS_GIVEN"] = "";
	$fieldLabelsform_tracking["English"]["SIMCARDS_ACTIVATED"] = "SIMCARDS ACTIVATED";
	$fieldToolTipsform_tracking["English"]["SIMCARDS_ACTIVATED"] = "";
	$fieldLabelsform_tracking["English"]["SIMCARDS_RETURNED"] = "SIMCARDS RETURNED";
	$fieldToolTipsform_tracking["English"]["SIMCARDS_RETURNED"] = "";
	$fieldLabelsform_tracking["English"]["SIMCARDS_REJECTED"] = "SIMCARDS REJECTED";
	$fieldToolTipsform_tracking["English"]["SIMCARDS_REJECTED"] = "";
	$fieldLabelsform_tracking["English"]["SIMCARDS_NOT_RETURNED"] = "SIMCARDS NOT RETURNED";
	$fieldToolTipsform_tracking["English"]["SIMCARDS_NOT_RETURNED"] = "";
	if (count($fieldToolTipsform_tracking["English"]))
		$tdataform_tracking[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsform_tracking[""] = array();
	$fieldToolTipsform_tracking[""] = array();
	$pageTitlesform_tracking[""] = array();
	if (count($fieldToolTipsform_tracking[""]))
		$tdataform_tracking[".isUseToolTips"] = true;
}
	
	
	$tdataform_tracking[".NCSearch"] = true;



$tdataform_tracking[".shortTableName"] = "form_tracking";
$tdataform_tracking[".nSecOptions"] = 0;
$tdataform_tracking[".recsPerRowList"] = 1;
$tdataform_tracking[".mainTableOwnerID"] = "";
$tdataform_tracking[".moveNext"] = 1;
$tdataform_tracking[".nType"] = 0;

$tdataform_tracking[".strOriginalTableName"] = "form_tracking";

	


$tdataform_tracking[".showAddInPopup"] = true;

$tdataform_tracking[".showEditInPopup"] = true;

$tdataform_tracking[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
			;
$popupPagesLayoutNames["add"] = "view2";
			;
$popupPagesLayoutNames["edit"] = "view2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdataform_tracking[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataform_tracking[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataform_tracking[".listAjax"] = true;
else 
	$tdataform_tracking[".listAjax"] = false;

	$tdataform_tracking[".audit"] = false;

	$tdataform_tracking[".locking"] = false;

$tdataform_tracking[".view"] = true;

$tdataform_tracking[".exportTo"] = true;



$tdataform_tracking[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataform_tracking[".searchSaving"] = false;
//

$tdataform_tracking[".showSearchPanel"] = true;
		$tdataform_tracking[".flexibleSearch"] = true;		

if (isMobile())
	$tdataform_tracking[".isUseAjaxSuggest"] = false;
else 
	$tdataform_tracking[".isUseAjaxSuggest"] = true;

$tdataform_tracking[".rowHighlite"] = true;



$tdataform_tracking[".addPageEvents"] = false;

// use timepicker for search panel
$tdataform_tracking[".isUseTimeForSearch"] = false;





$tdataform_tracking[".allSearchFields"] = array();
$tdataform_tracking[".filterFields"] = array();
$tdataform_tracking[".requiredSearchFields"] = array();

$tdataform_tracking[".allSearchFields"][] = "D_SL_DSO_RDO";
		$tdataform_tracking[".allSearchFields"][] = "TOTAL_SIMCARDS_GIVEN";
		$tdataform_tracking[".allSearchFields"][] = "SIMCARDS_ACTIVATED";
		$tdataform_tracking[".allSearchFields"][] = "SIMCARDS_RETURNED";
		$tdataform_tracking[".allSearchFields"][] = "SIMCARDS_REJECTED";
		$tdataform_tracking[".allSearchFields"][] = "SIMCARDS_NOT_RETURNED";
		
$tdataform_tracking[".googleLikeFields"] = array();
$tdataform_tracking[".googleLikeFields"][] = "ID";
$tdataform_tracking[".googleLikeFields"][] = "D_SL_DSO_RDO";
$tdataform_tracking[".googleLikeFields"][] = "TOTAL_SIMCARDS_GIVEN";
$tdataform_tracking[".googleLikeFields"][] = "SIMCARDS_ACTIVATED";
$tdataform_tracking[".googleLikeFields"][] = "SIMCARDS_RETURNED";
$tdataform_tracking[".googleLikeFields"][] = "SIMCARDS_REJECTED";
$tdataform_tracking[".googleLikeFields"][] = "SIMCARDS_NOT_RETURNED";


$tdataform_tracking[".advSearchFields"] = array();
$tdataform_tracking[".advSearchFields"][] = "D_SL_DSO_RDO";
$tdataform_tracking[".advSearchFields"][] = "TOTAL_SIMCARDS_GIVEN";
$tdataform_tracking[".advSearchFields"][] = "SIMCARDS_ACTIVATED";
$tdataform_tracking[".advSearchFields"][] = "SIMCARDS_RETURNED";
$tdataform_tracking[".advSearchFields"][] = "SIMCARDS_REJECTED";
$tdataform_tracking[".advSearchFields"][] = "SIMCARDS_NOT_RETURNED";

$tdataform_tracking[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdataform_tracking[".pageSize"] = 20;

$tdataform_tracking[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataform_tracking[".strOrderBy"] = $tstrOrderBy;

$tdataform_tracking[".orderindexes"] = array();

$tdataform_tracking[".sqlHead"] = "SELECT ID,   D_SL_DSO_RDO,   TOTAL_SIMCARDS_GIVEN,   SIMCARDS_ACTIVATED,   SIMCARDS_RETURNED,   SIMCARDS_REJECTED,   SIMCARDS_NOT_RETURNED";
$tdataform_tracking[".sqlFrom"] = "FROM form_tracking";
$tdataform_tracking[".sqlWhereExpr"] = "";
$tdataform_tracking[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataform_tracking[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataform_tracking[".arrGroupsPerPage"] = $arrGPP;

$tdataform_tracking[".highlightSearchResults"] = true;

$tableKeysform_tracking = array();
$tableKeysform_tracking[] = "D_SL_DSO_RDO";
$tdataform_tracking[".Keys"] = $tableKeysform_tracking;

$tdataform_tracking[".listFields"] = array();
$tdataform_tracking[".listFields"][] = "D_SL_DSO_RDO";
$tdataform_tracking[".listFields"][] = "TOTAL_SIMCARDS_GIVEN";
$tdataform_tracking[".listFields"][] = "SIMCARDS_ACTIVATED";
$tdataform_tracking[".listFields"][] = "SIMCARDS_RETURNED";
$tdataform_tracking[".listFields"][] = "SIMCARDS_REJECTED";
$tdataform_tracking[".listFields"][] = "SIMCARDS_NOT_RETURNED";

$tdataform_tracking[".hideMobileList"] = array();


$tdataform_tracking[".viewFields"] = array();
$tdataform_tracking[".viewFields"][] = "D_SL_DSO_RDO";
$tdataform_tracking[".viewFields"][] = "TOTAL_SIMCARDS_GIVEN";
$tdataform_tracking[".viewFields"][] = "SIMCARDS_ACTIVATED";
$tdataform_tracking[".viewFields"][] = "SIMCARDS_RETURNED";
$tdataform_tracking[".viewFields"][] = "SIMCARDS_REJECTED";
$tdataform_tracking[".viewFields"][] = "SIMCARDS_NOT_RETURNED";

$tdataform_tracking[".addFields"] = array();

$tdataform_tracking[".inlineAddFields"] = array();

$tdataform_tracking[".editFields"] = array();

$tdataform_tracking[".inlineEditFields"] = array();

$tdataform_tracking[".exportFields"] = array();
$tdataform_tracking[".exportFields"][] = "D_SL_DSO_RDO";
$tdataform_tracking[".exportFields"][] = "TOTAL_SIMCARDS_GIVEN";
$tdataform_tracking[".exportFields"][] = "SIMCARDS_ACTIVATED";
$tdataform_tracking[".exportFields"][] = "SIMCARDS_RETURNED";
$tdataform_tracking[".exportFields"][] = "SIMCARDS_REJECTED";
$tdataform_tracking[".exportFields"][] = "SIMCARDS_NOT_RETURNED";

$tdataform_tracking[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "form_tracking";
	$fdata["Label"] = GetFieldLabel("form_tracking","ID"); 
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
	
	
	
	

	

	
	$tdataform_tracking["ID"] = $fdata;
//	D_SL_DSO_RDO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "D_SL_DSO_RDO";
	$fdata["GoodName"] = "D_SL_DSO_RDO";
	$fdata["ownerTable"] = "form_tracking";
	$fdata["Label"] = GetFieldLabel("form_tracking","D_SL_DSO_RDO"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "D_SL_DSO_RDO"; 
		$fdata["FullName"] = "D_SL_DSO_RDO";
	
		
		
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

	

	
	$tdataform_tracking["D_SL_DSO_RDO"] = $fdata;
//	TOTAL_SIMCARDS_GIVEN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TOTAL_SIMCARDS_GIVEN";
	$fdata["GoodName"] = "TOTAL_SIMCARDS_GIVEN";
	$fdata["ownerTable"] = "form_tracking";
	$fdata["Label"] = GetFieldLabel("form_tracking","TOTAL_SIMCARDS_GIVEN"); 
	$fdata["FieldType"] = 20;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TOTAL_SIMCARDS_GIVEN"; 
		$fdata["FullName"] = "TOTAL_SIMCARDS_GIVEN";
	
		
		
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

	

	
	$tdataform_tracking["TOTAL_SIMCARDS_GIVEN"] = $fdata;
//	SIMCARDS_ACTIVATED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SIMCARDS_ACTIVATED";
	$fdata["GoodName"] = "SIMCARDS_ACTIVATED";
	$fdata["ownerTable"] = "form_tracking";
	$fdata["Label"] = GetFieldLabel("form_tracking","SIMCARDS_ACTIVATED"); 
	$fdata["FieldType"] = 20;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "SIMCARDS_ACTIVATED"; 
		$fdata["FullName"] = "SIMCARDS_ACTIVATED";
	
		
		
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

	

	
	$tdataform_tracking["SIMCARDS_ACTIVATED"] = $fdata;
//	SIMCARDS_RETURNED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SIMCARDS_RETURNED";
	$fdata["GoodName"] = "SIMCARDS_RETURNED";
	$fdata["ownerTable"] = "form_tracking";
	$fdata["Label"] = GetFieldLabel("form_tracking","SIMCARDS_RETURNED"); 
	$fdata["FieldType"] = 20;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "SIMCARDS_RETURNED"; 
		$fdata["FullName"] = "SIMCARDS_RETURNED";
	
		
		
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

	

	
	$tdataform_tracking["SIMCARDS_RETURNED"] = $fdata;
//	SIMCARDS_REJECTED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SIMCARDS_REJECTED";
	$fdata["GoodName"] = "SIMCARDS_REJECTED";
	$fdata["ownerTable"] = "form_tracking";
	$fdata["Label"] = GetFieldLabel("form_tracking","SIMCARDS_REJECTED"); 
	$fdata["FieldType"] = 20;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "SIMCARDS_REJECTED"; 
		$fdata["FullName"] = "SIMCARDS_REJECTED";
	
		
		
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

	

	
	$tdataform_tracking["SIMCARDS_REJECTED"] = $fdata;
//	SIMCARDS_NOT_RETURNED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SIMCARDS_NOT_RETURNED";
	$fdata["GoodName"] = "SIMCARDS_NOT_RETURNED";
	$fdata["ownerTable"] = "form_tracking";
	$fdata["Label"] = GetFieldLabel("form_tracking","SIMCARDS_NOT_RETURNED"); 
	$fdata["FieldType"] = 20;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "SIMCARDS_NOT_RETURNED"; 
		$fdata["FullName"] = "SIMCARDS_NOT_RETURNED";
	
		
		
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

	

	
	$tdataform_tracking["SIMCARDS_NOT_RETURNED"] = $fdata;

	
$tables_data["form_tracking"]=&$tdataform_tracking;
$field_labels["form_tracking"] = &$fieldLabelsform_tracking;
$fieldToolTips["form_tracking"] = &$fieldToolTipsform_tracking;
$page_titles["form_tracking"] = &$pageTitlesform_tracking;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["form_tracking"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["form_tracking"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_form_tracking()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "ID,   D_SL_DSO_RDO,   TOTAL_SIMCARDS_GIVEN,   SIMCARDS_ACTIVATED,   SIMCARDS_RETURNED,   SIMCARDS_REJECTED,   SIMCARDS_NOT_RETURNED";
$proto3["m_strFrom"] = "FROM form_tracking";
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
	"m_strTable" => "form_tracking"
));

$proto8["m_sql"] = "ID";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "D_SL_DSO_RDO",
	"m_strTable" => "form_tracking"
));

$proto10["m_sql"] = "D_SL_DSO_RDO";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTAL_SIMCARDS_GIVEN",
	"m_strTable" => "form_tracking"
));

$proto12["m_sql"] = "TOTAL_SIMCARDS_GIVEN";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SIMCARDS_ACTIVATED",
	"m_strTable" => "form_tracking"
));

$proto14["m_sql"] = "SIMCARDS_ACTIVATED";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SIMCARDS_RETURNED",
	"m_strTable" => "form_tracking"
));

$proto16["m_sql"] = "SIMCARDS_RETURNED";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "SIMCARDS_REJECTED",
	"m_strTable" => "form_tracking"
));

$proto18["m_sql"] = "SIMCARDS_REJECTED";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SIMCARDS_NOT_RETURNED",
	"m_strTable" => "form_tracking"
));

$proto20["m_sql"] = "SIMCARDS_NOT_RETURNED";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "form_tracking";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "ID";
$proto23["m_columns"][] = "D_SL_DSO_RDO";
$proto23["m_columns"][] = "TOTAL_SIMCARDS_GIVEN";
$proto23["m_columns"][] = "SIMCARDS_ACTIVATED";
$proto23["m_columns"][] = "SIMCARDS_RETURNED";
$proto23["m_columns"][] = "SIMCARDS_REJECTED";
$proto23["m_columns"][] = "SIMCARDS_NOT_RETURNED";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "form_tracking";
$proto22["m_alias"] = "";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_form_tracking = createSqlQuery_form_tracking();

							
	
$tdataform_tracking[".sqlquery"] = $queryData_form_tracking;

$tableEvents["form_tracking"] = new eventsBase;
$tdataform_tracking[".hasEvents"] = false;

$cipherer = new RunnerCipherer("form_tracking");

?>