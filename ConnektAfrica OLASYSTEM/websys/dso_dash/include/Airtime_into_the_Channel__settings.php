<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAirtime_into_the_Channel_ = array();	
	$tdataAirtime_into_the_Channel_[".truncateText"] = true;
	$tdataAirtime_into_the_Channel_[".NumberOfChars"] = 80; 
	$tdataAirtime_into_the_Channel_[".ShortName"] = "Airtime_into_the_Channel_";
	$tdataAirtime_into_the_Channel_[".OwnerID"] = "";
	$tdataAirtime_into_the_Channel_[".OriginalTable"] = "activators";

//	field labels
$fieldLabelsAirtime_into_the_Channel_ = array();
$fieldToolTipsAirtime_into_the_Channel_ = array();
$pageTitlesAirtime_into_the_Channel_ = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAirtime_into_the_Channel_["English"] = array();
	$fieldToolTipsAirtime_into_the_Channel_["English"] = array();
	$pageTitlesAirtime_into_the_Channel_["English"] = array();
	$fieldLabelsAirtime_into_the_Channel_["English"]["pos_type"] = "Pos Type";
	$fieldToolTipsAirtime_into_the_Channel_["English"]["pos_type"] = "";
	$fieldLabelsAirtime_into_the_Channel_["English"]["Activator_Name"] = "Activator Name";
	$fieldToolTipsAirtime_into_the_Channel_["English"]["Activator_Name"] = "";
	$fieldLabelsAirtime_into_the_Channel_["English"]["Sales_Into_Channel"] = "Sales Into Channel";
	$fieldToolTipsAirtime_into_the_Channel_["English"]["Sales_Into_Channel"] = "";
	$fieldLabelsAirtime_into_the_Channel_["English"]["Total_Amount"] = "Total Amount";
	$fieldToolTipsAirtime_into_the_Channel_["English"]["Total_Amount"] = "";
	$fieldLabelsAirtime_into_the_Channel_["English"]["TRANSFER_DATE"] = "TRANSFER DATE";
	$fieldToolTipsAirtime_into_the_Channel_["English"]["TRANSFER_DATE"] = "";
	if (count($fieldToolTipsAirtime_into_the_Channel_["English"]))
		$tdataAirtime_into_the_Channel_[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAirtime_into_the_Channel_[""] = array();
	$fieldToolTipsAirtime_into_the_Channel_[""] = array();
	$pageTitlesAirtime_into_the_Channel_[""] = array();
	if (count($fieldToolTipsAirtime_into_the_Channel_[""]))
		$tdataAirtime_into_the_Channel_[".isUseToolTips"] = true;
}
	
	
	$tdataAirtime_into_the_Channel_[".NCSearch"] = true;



$tdataAirtime_into_the_Channel_[".shortTableName"] = "Airtime_into_the_Channel_";
$tdataAirtime_into_the_Channel_[".nSecOptions"] = 0;
$tdataAirtime_into_the_Channel_[".recsPerRowList"] = 1;
$tdataAirtime_into_the_Channel_[".mainTableOwnerID"] = "";
$tdataAirtime_into_the_Channel_[".moveNext"] = 1;
$tdataAirtime_into_the_Channel_[".nType"] = 1;

$tdataAirtime_into_the_Channel_[".strOriginalTableName"] = "activators";




$tdataAirtime_into_the_Channel_[".showAddInPopup"] = false;

$tdataAirtime_into_the_Channel_[".showEditInPopup"] = false;

$tdataAirtime_into_the_Channel_[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAirtime_into_the_Channel_[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAirtime_into_the_Channel_[".fieldsForRegister"] = array();

$tdataAirtime_into_the_Channel_[".listAjax"] = false;

	$tdataAirtime_into_the_Channel_[".audit"] = false;

	$tdataAirtime_into_the_Channel_[".locking"] = false;


$tdataAirtime_into_the_Channel_[".list"] = true;



$tdataAirtime_into_the_Channel_[".exportTo"] = true;



$tdataAirtime_into_the_Channel_[".showSimpleSearchOptions"] = true;

// search Saving settings
$tdataAirtime_into_the_Channel_[".searchSaving"] = false;
//

$tdataAirtime_into_the_Channel_[".showSearchPanel"] = true;
		$tdataAirtime_into_the_Channel_[".flexibleSearch"] = true;		

if (isMobile())
	$tdataAirtime_into_the_Channel_[".isUseAjaxSuggest"] = false;
else 
	$tdataAirtime_into_the_Channel_[".isUseAjaxSuggest"] = true;

$tdataAirtime_into_the_Channel_[".rowHighlite"] = true;



$tdataAirtime_into_the_Channel_[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAirtime_into_the_Channel_[".isUseTimeForSearch"] = false;





$tdataAirtime_into_the_Channel_[".allSearchFields"] = array();
$tdataAirtime_into_the_Channel_[".filterFields"] = array();
$tdataAirtime_into_the_Channel_[".requiredSearchFields"] = array();

$tdataAirtime_into_the_Channel_[".allSearchFields"][] = "Activator_Name";
	$tdataAirtime_into_the_Channel_[".allSearchFields"][] = "pos_type";
	$tdataAirtime_into_the_Channel_[".allSearchFields"][] = "Sales_Into_Channel";
	$tdataAirtime_into_the_Channel_[".allSearchFields"][] = "Total_Amount";
	$tdataAirtime_into_the_Channel_[".allSearchFields"][] = "TRANSFER_DATE";
	

$tdataAirtime_into_the_Channel_[".googleLikeFields"] = array();
$tdataAirtime_into_the_Channel_[".googleLikeFields"][] = "Activator_Name";
$tdataAirtime_into_the_Channel_[".googleLikeFields"][] = "pos_type";
$tdataAirtime_into_the_Channel_[".googleLikeFields"][] = "Sales_Into_Channel";
$tdataAirtime_into_the_Channel_[".googleLikeFields"][] = "Total_Amount";
$tdataAirtime_into_the_Channel_[".googleLikeFields"][] = "TRANSFER_DATE";


$tdataAirtime_into_the_Channel_[".advSearchFields"] = array();
$tdataAirtime_into_the_Channel_[".advSearchFields"][] = "Activator_Name";
$tdataAirtime_into_the_Channel_[".advSearchFields"][] = "pos_type";
$tdataAirtime_into_the_Channel_[".advSearchFields"][] = "Sales_Into_Channel";
$tdataAirtime_into_the_Channel_[".advSearchFields"][] = "Total_Amount";
$tdataAirtime_into_the_Channel_[".advSearchFields"][] = "TRANSFER_DATE";

$tdataAirtime_into_the_Channel_[".tableType"] = "list";

$tdataAirtime_into_the_Channel_[".printerPageOrientation"] = 0;
$tdataAirtime_into_the_Channel_[".nPrinterPageScale"] = 100;

$tdataAirtime_into_the_Channel_[".nPrinterSplitRecords"] = 40;

$tdataAirtime_into_the_Channel_[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataAirtime_into_the_Channel_[".pageSize"] = 15;

$tdataAirtime_into_the_Channel_[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAirtime_into_the_Channel_[".strOrderBy"] = $tstrOrderBy;

$tdataAirtime_into_the_Channel_[".orderindexes"] = array();

$tdataAirtime_into_the_Channel_[".sqlHead"] = "SELECT activators.Activator_Name,  activators.pos_type,  COUNT(pos_out.CHARGE) AS Sales_Into_Channel,  SUM(pos_out.CHARGE) AS Total_Amount,  pos_out.TRANSFER_DATE";
$tdataAirtime_into_the_Channel_[".sqlFrom"] = "FROM activators  , pos_out";
$tdataAirtime_into_the_Channel_[".sqlWhereExpr"] = "(activators.pos_type = 'DSO') AND (activators.Activator_Number = pos_out.ORG_SERVICE_NUMBER) AND (pos_out.DEST_SERVICE_NUMBER LIKE '79809%')";
$tdataAirtime_into_the_Channel_[".sqlTail"] = "GROUP BY activators.Activator_Name, pos_out.TRANSFER_DATE";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAirtime_into_the_Channel_[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAirtime_into_the_Channel_[".arrGroupsPerPage"] = $arrGPP;

$tdataAirtime_into_the_Channel_[".highlightSearchResults"] = true;

$tableKeysAirtime_into_the_Channel_ = array();
$tdataAirtime_into_the_Channel_[".Keys"] = $tableKeysAirtime_into_the_Channel_;

$tdataAirtime_into_the_Channel_[".listFields"] = array();
$tdataAirtime_into_the_Channel_[".listFields"][] = "Activator_Name";
$tdataAirtime_into_the_Channel_[".listFields"][] = "pos_type";
$tdataAirtime_into_the_Channel_[".listFields"][] = "Sales_Into_Channel";
$tdataAirtime_into_the_Channel_[".listFields"][] = "Total_Amount";
$tdataAirtime_into_the_Channel_[".listFields"][] = "TRANSFER_DATE";

$tdataAirtime_into_the_Channel_[".hideMobileList"] = array();


$tdataAirtime_into_the_Channel_[".viewFields"] = array();
$tdataAirtime_into_the_Channel_[".viewFields"][] = "Activator_Name";
$tdataAirtime_into_the_Channel_[".viewFields"][] = "pos_type";
$tdataAirtime_into_the_Channel_[".viewFields"][] = "Sales_Into_Channel";
$tdataAirtime_into_the_Channel_[".viewFields"][] = "Total_Amount";
$tdataAirtime_into_the_Channel_[".viewFields"][] = "TRANSFER_DATE";

$tdataAirtime_into_the_Channel_[".addFields"] = array();
$tdataAirtime_into_the_Channel_[".addFields"][] = "Activator_Name";
$tdataAirtime_into_the_Channel_[".addFields"][] = "pos_type";

$tdataAirtime_into_the_Channel_[".inlineAddFields"] = array();
$tdataAirtime_into_the_Channel_[".inlineAddFields"][] = "Activator_Name";
$tdataAirtime_into_the_Channel_[".inlineAddFields"][] = "pos_type";

$tdataAirtime_into_the_Channel_[".editFields"] = array();
$tdataAirtime_into_the_Channel_[".editFields"][] = "Activator_Name";
$tdataAirtime_into_the_Channel_[".editFields"][] = "pos_type";

$tdataAirtime_into_the_Channel_[".inlineEditFields"] = array();
$tdataAirtime_into_the_Channel_[".inlineEditFields"][] = "Activator_Name";
$tdataAirtime_into_the_Channel_[".inlineEditFields"][] = "pos_type";

$tdataAirtime_into_the_Channel_[".exportFields"] = array();
$tdataAirtime_into_the_Channel_[".exportFields"][] = "Activator_Name";
$tdataAirtime_into_the_Channel_[".exportFields"][] = "pos_type";
$tdataAirtime_into_the_Channel_[".exportFields"][] = "Sales_Into_Channel";
$tdataAirtime_into_the_Channel_[".exportFields"][] = "Total_Amount";
$tdataAirtime_into_the_Channel_[".exportFields"][] = "TRANSFER_DATE";

$tdataAirtime_into_the_Channel_[".importFields"] = array();
$tdataAirtime_into_the_Channel_[".importFields"][] = "Activator_Name";
$tdataAirtime_into_the_Channel_[".importFields"][] = "pos_type";
$tdataAirtime_into_the_Channel_[".importFields"][] = "Sales_Into_Channel";
$tdataAirtime_into_the_Channel_[".importFields"][] = "Total_Amount";
$tdataAirtime_into_the_Channel_[".importFields"][] = "TRANSFER_DATE";

$tdataAirtime_into_the_Channel_[".printFields"] = array();
$tdataAirtime_into_the_Channel_[".printFields"][] = "Activator_Name";
$tdataAirtime_into_the_Channel_[".printFields"][] = "pos_type";
$tdataAirtime_into_the_Channel_[".printFields"][] = "Sales_Into_Channel";
$tdataAirtime_into_the_Channel_[".printFields"][] = "Total_Amount";
$tdataAirtime_into_the_Channel_[".printFields"][] = "TRANSFER_DATE";

//	Activator_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Activator_Name";
	$fdata["GoodName"] = "Activator_Name";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("Airtime_into_the_Channel_","Activator_Name"); 
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
	
		$fdata["strField"] = "Activator_Name"; 
	
		$fdata["isSQLExpression"] = true;
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

	

	
	$tdataAirtime_into_the_Channel_["Activator_Name"] = $fdata;
//	pos_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pos_type";
	$fdata["GoodName"] = "pos_type";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("Airtime_into_the_Channel_","pos_type"); 
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
	
		$fdata["strField"] = "pos_type"; 
	
		$fdata["isSQLExpression"] = true;
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
			$edata["EditParams"].= " maxlength=30";
	
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

	

	
	$tdataAirtime_into_the_Channel_["pos_type"] = $fdata;
//	Sales_Into_Channel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Sales_Into_Channel";
	$fdata["GoodName"] = "Sales_Into_Channel";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Airtime_into_the_Channel_","Sales_Into_Channel"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Sales_Into_Channel"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(pos_out.CHARGE)";
	
		
		
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

	

	
	$tdataAirtime_into_the_Channel_["Sales_Into_Channel"] = $fdata;
//	Total_Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Total_Amount";
	$fdata["GoodName"] = "Total_Amount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Airtime_into_the_Channel_","Total_Amount"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Total_Amount"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(pos_out.CHARGE)";
	
		
		
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

	

	
	$tdataAirtime_into_the_Channel_["Total_Amount"] = $fdata;
//	TRANSFER_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TRANSFER_DATE";
	$fdata["GoodName"] = "TRANSFER_DATE";
	$fdata["ownerTable"] = "pos_out";
	$fdata["Label"] = GetFieldLabel("Airtime_into_the_Channel_","TRANSFER_DATE"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TRANSFER_DATE"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pos_out.TRANSFER_DATE";
	
		
		
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

	

	
	$tdataAirtime_into_the_Channel_["TRANSFER_DATE"] = $fdata;

	
$tables_data["Airtime into the Channel "]=&$tdataAirtime_into_the_Channel_;
$field_labels["Airtime_into_the_Channel_"] = &$fieldLabelsAirtime_into_the_Channel_;
$fieldToolTips["Airtime into the Channel "] = &$fieldToolTipsAirtime_into_the_Channel_;
$page_titles["Airtime_into_the_Channel_"] = &$pageTitlesAirtime_into_the_Channel_;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Airtime into the Channel "] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Airtime into the Channel "] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Airtime_into_the_Channel_()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "activators.Activator_Name,  activators.pos_type,  COUNT(pos_out.CHARGE) AS Sales_Into_Channel,  SUM(pos_out.CHARGE) AS Total_Amount,  pos_out.TRANSFER_DATE";
$proto0["m_strFrom"] = "FROM activators  , pos_out";
$proto0["m_strWhere"] = "(activators.pos_type = 'DSO') AND (activators.Activator_Number = pos_out.ORG_SERVICE_NUMBER) AND (pos_out.DEST_SERVICE_NUMBER LIKE '79809%')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY activators.Activator_Name, pos_out.TRANSFER_DATE";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(activators.pos_type = 'DSO') AND (activators.Activator_Number = pos_out.ORG_SERVICE_NUMBER) AND (pos_out.DEST_SERVICE_NUMBER LIKE '79809%')";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(activators.pos_type = 'DSO') AND (activators.Activator_Number = pos_out.ORG_SERVICE_NUMBER) AND (pos_out.DEST_SERVICE_NUMBER LIKE '79809%')"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "activators.pos_type = 'DSO'";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pos_type",
	"m_strTable" => "activators",
	"m_srcTableName" => "Airtime into the Channel "
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "= 'DSO'";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "activators.Activator_Number = pos_out.ORG_SERVICE_NUMBER";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Activator_Number",
	"m_strTable" => "activators",
	"m_srcTableName" => "Airtime into the Channel "
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "= pos_out.ORG_SERVICE_NUMBER";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = true;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
						$proto7=array();
$proto7["m_sql"] = "pos_out.DEST_SERVICE_NUMBER LIKE '79809%'";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DEST_SERVICE_NUMBER",
	"m_strTable" => "pos_out",
	"m_srcTableName" => "Airtime into the Channel "
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "LIKE '79809%'";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = true;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto9=array();
$proto9["m_sql"] = "";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = false;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Activator_Name",
	"m_strTable" => "activators",
	"m_srcTableName" => "Airtime into the Channel "
));

$proto11["m_sql"] = "activators.Activator_Name";
$proto11["m_srcTableName"] = "Airtime into the Channel ";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "pos_type",
	"m_strTable" => "activators",
	"m_srcTableName" => "Airtime into the Channel "
));

$proto13["m_sql"] = "activators.pos_type";
$proto13["m_srcTableName"] = "Airtime into the Channel ";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$proto16=array();
$proto16["m_functiontype"] = "SQLF_COUNT";
$proto16["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "CHARGE",
	"m_strTable" => "pos_out",
	"m_srcTableName" => "Airtime into the Channel "
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "COUNT(pos_out.CHARGE)";
$proto15["m_srcTableName"] = "Airtime into the Channel ";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "Sales_Into_Channel";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_SUM";
$proto19["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "CHARGE",
	"m_strTable" => "pos_out",
	"m_srcTableName" => "Airtime into the Channel "
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "SUM(pos_out.CHARGE)";
$proto18["m_srcTableName"] = "Airtime into the Channel ";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "Total_Amount";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "TRANSFER_DATE",
	"m_strTable" => "pos_out",
	"m_srcTableName" => "Airtime into the Channel "
));

$proto21["m_sql"] = "pos_out.TRANSFER_DATE";
$proto21["m_srcTableName"] = "Airtime into the Channel ";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "activators";
$proto24["m_srcTableName"] = "Airtime into the Channel ";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "ID";
$proto24["m_columns"][] = "pos_type";
$proto24["m_columns"][] = "Manager_Name";
$proto24["m_columns"][] = "Manager_Number";
$proto24["m_columns"][] = "Manager_Title";
$proto24["m_columns"][] = "Activator_Name";
$proto24["m_columns"][] = "Activator_Number";
$proto24["m_columns"][] = "business_name";
$proto24["m_columns"][] = "altenative_number";
$proto24["m_columns"][] = "pos_iccid";
$proto24["m_columns"][] = "registration_date";
$proto24["m_columns"][] = "gender";
$proto24["m_columns"][] = "DOB";
$proto24["m_columns"][] = "Area";
$proto24["m_columns"][] = "Route";
$proto24["m_columns"][] = "id_type";
$proto24["m_columns"][] = "id_number";
$proto24["m_columns"][] = "Team_Leader";
$proto24["m_columns"][] = "Working_Location";
$proto24["m_columns"][] = "Batch_Paid";
$proto24["m_columns"][] = "lat";
$proto24["m_columns"][] = "lon";
$proto24["m_columns"][] = "last_chekin";
$proto24["m_columns"][] = "mydata";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "activators";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "Airtime into the Channel ";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
												$proto27=array();
$proto27["m_link"] = "SQLL_CROSSJOIN";
			$proto28=array();
$proto28["m_strName"] = "pos_out";
$proto28["m_srcTableName"] = "Airtime into the Channel ";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "ACCT_BOOK_ID";
$proto28["m_columns"][] = "TRANSFER_DATE";
$proto28["m_columns"][] = "ORIGIANL_CUSTOMER";
$proto28["m_columns"][] = "ORG_SERVICE_NUMBER";
$proto28["m_columns"][] = "CHARGE";
$proto28["m_columns"][] = "DESTINATION_CUSTOMER";
$proto28["m_columns"][] = "DEST_SERVICE_NUMBER";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "pos_out";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "Airtime into the Channel ";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "Activator_Name",
	"m_strTable" => "activators",
	"m_srcTableName" => "Airtime into the Channel "
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "TRANSFER_DATE",
	"m_strTable" => "pos_out",
	"m_srcTableName" => "Airtime into the Channel "
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Airtime into the Channel ";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Airtime_into_the_Channel_ = createSqlQuery_Airtime_into_the_Channel_();


	
					
	
$tdataAirtime_into_the_Channel_[".sqlquery"] = $queryData_Airtime_into_the_Channel_;

$tableEvents["Airtime into the Channel "] = new eventsBase;
$tdataAirtime_into_the_Channel_[".hasEvents"] = false;

?>