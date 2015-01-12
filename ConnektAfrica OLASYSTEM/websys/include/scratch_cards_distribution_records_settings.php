<?php
require_once(getabspath("classes/cipherer.php"));




$tdatascratch_cards_distribution_records = array();	
	$tdatascratch_cards_distribution_records[".truncateText"] = true;
	$tdatascratch_cards_distribution_records[".NumberOfChars"] = 80; 
	$tdatascratch_cards_distribution_records[".ShortName"] = "scratch_cards_distribution_records";
	$tdatascratch_cards_distribution_records[".OwnerID"] = "";
	$tdatascratch_cards_distribution_records[".OriginalTable"] = "scratch_cards_distribution_records";

//	field labels
$fieldLabelsscratch_cards_distribution_records = array();
$fieldToolTipsscratch_cards_distribution_records = array();
$pageTitlesscratch_cards_distribution_records = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsscratch_cards_distribution_records["English"] = array();
	$fieldToolTipsscratch_cards_distribution_records["English"] = array();
	$pageTitlesscratch_cards_distribution_records["English"] = array();
	$fieldLabelsscratch_cards_distribution_records["English"]["Dist_ID"] = "Dist ID";
	$fieldToolTipsscratch_cards_distribution_records["English"]["Dist_ID"] = "";
	$fieldLabelsscratch_cards_distribution_records["English"]["Dist_Date"] = "Dist Date";
	$fieldToolTipsscratch_cards_distribution_records["English"]["Dist_Date"] = "";
	$fieldLabelsscratch_cards_distribution_records["English"]["Serial_No_From"] = "Serial No From";
	$fieldToolTipsscratch_cards_distribution_records["English"]["Serial_No_From"] = "";
	$fieldLabelsscratch_cards_distribution_records["English"]["Serial_No_To"] = "Serial No To";
	$fieldToolTipsscratch_cards_distribution_records["English"]["Serial_No_To"] = "";
	$fieldLabelsscratch_cards_distribution_records["English"]["Full_Name"] = "Full Name";
	$fieldToolTipsscratch_cards_distribution_records["English"]["Full_Name"] = "";
	$fieldLabelsscratch_cards_distribution_records["English"]["POS_ALT_Number"] = "POS ALT Number";
	$fieldToolTipsscratch_cards_distribution_records["English"]["POS_ALT_Number"] = "";
	$fieldLabelsscratch_cards_distribution_records["English"]["Area"] = "Area";
	$fieldToolTipsscratch_cards_distribution_records["English"]["Area"] = "";
	$fieldLabelsscratch_cards_distribution_records["English"]["Alt_Number"] = "Alt Number";
	$fieldToolTipsscratch_cards_distribution_records["English"]["Alt_Number"] = "";
	$fieldLabelsscratch_cards_distribution_records["English"]["Denomination"] = "Denomination";
	$fieldToolTipsscratch_cards_distribution_records["English"]["Denomination"] = "";
	$fieldLabelsscratch_cards_distribution_records["English"]["Quantity"] = "Quantity";
	$fieldToolTipsscratch_cards_distribution_records["English"]["Quantity"] = "";
	$fieldLabelsscratch_cards_distribution_records["English"]["Lat"] = "Lat";
	$fieldToolTipsscratch_cards_distribution_records["English"]["Lat"] = "";
	$fieldLabelsscratch_cards_distribution_records["English"]["Lon"] = "Lon";
	$fieldToolTipsscratch_cards_distribution_records["English"]["Lon"] = "";
	$fieldLabelsscratch_cards_distribution_records["English"]["DSO_Name"] = "DSO Name";
	$fieldToolTipsscratch_cards_distribution_records["English"]["DSO_Name"] = "";
	$fieldLabelsscratch_cards_distribution_records["English"]["DSO_Number"] = "DSO Number";
	$fieldToolTipsscratch_cards_distribution_records["English"]["DSO_Number"] = "";
	if (count($fieldToolTipsscratch_cards_distribution_records["English"]))
		$tdatascratch_cards_distribution_records[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsscratch_cards_distribution_records[""] = array();
	$fieldToolTipsscratch_cards_distribution_records[""] = array();
	$pageTitlesscratch_cards_distribution_records[""] = array();
	$fieldLabelsscratch_cards_distribution_records[""]["Dist_ID"] = "Dist ID";
	$fieldToolTipsscratch_cards_distribution_records[""]["Dist_ID"] = "";
	$fieldLabelsscratch_cards_distribution_records[""]["Dist_Date"] = "Dist Date";
	$fieldToolTipsscratch_cards_distribution_records[""]["Dist_Date"] = "";
	$fieldLabelsscratch_cards_distribution_records[""]["Serial_No_From"] = "Serial No From";
	$fieldToolTipsscratch_cards_distribution_records[""]["Serial_No_From"] = "";
	$fieldLabelsscratch_cards_distribution_records[""]["Serial_No_To"] = "Serial No To";
	$fieldToolTipsscratch_cards_distribution_records[""]["Serial_No_To"] = "";
	$fieldLabelsscratch_cards_distribution_records[""]["Full_Name"] = "Full Name";
	$fieldToolTipsscratch_cards_distribution_records[""]["Full_Name"] = "";
	$fieldLabelsscratch_cards_distribution_records[""]["POS_ALT_Number"] = "POS ALT Number";
	$fieldToolTipsscratch_cards_distribution_records[""]["POS_ALT_Number"] = "";
	$fieldLabelsscratch_cards_distribution_records[""]["Area"] = "Area";
	$fieldToolTipsscratch_cards_distribution_records[""]["Area"] = "";
	$fieldLabelsscratch_cards_distribution_records[""]["Alt_Number"] = "Alt Number";
	$fieldToolTipsscratch_cards_distribution_records[""]["Alt_Number"] = "";
	$fieldLabelsscratch_cards_distribution_records[""]["Denomination"] = "Denomination";
	$fieldToolTipsscratch_cards_distribution_records[""]["Denomination"] = "";
	$fieldLabelsscratch_cards_distribution_records[""]["Quantity"] = "Quantity";
	$fieldToolTipsscratch_cards_distribution_records[""]["Quantity"] = "";
	$fieldLabelsscratch_cards_distribution_records[""]["Lat"] = "Lat";
	$fieldToolTipsscratch_cards_distribution_records[""]["Lat"] = "";
	$fieldLabelsscratch_cards_distribution_records[""]["Lon"] = "Lon";
	$fieldToolTipsscratch_cards_distribution_records[""]["Lon"] = "";
	$fieldLabelsscratch_cards_distribution_records[""]["DSO_Name"] = "DSO Name";
	$fieldToolTipsscratch_cards_distribution_records[""]["DSO_Name"] = "";
	$fieldLabelsscratch_cards_distribution_records[""]["DSO_Number"] = "DSO Number";
	$fieldToolTipsscratch_cards_distribution_records[""]["DSO_Number"] = "";
	if (count($fieldToolTipsscratch_cards_distribution_records[""]))
		$tdatascratch_cards_distribution_records[".isUseToolTips"] = true;
}
	
	
	$tdatascratch_cards_distribution_records[".NCSearch"] = true;



$tdatascratch_cards_distribution_records[".shortTableName"] = "scratch_cards_distribution_records";
$tdatascratch_cards_distribution_records[".nSecOptions"] = 0;
$tdatascratch_cards_distribution_records[".recsPerRowList"] = 1;
$tdatascratch_cards_distribution_records[".mainTableOwnerID"] = "";
$tdatascratch_cards_distribution_records[".moveNext"] = 1;
$tdatascratch_cards_distribution_records[".nType"] = 0;

$tdatascratch_cards_distribution_records[".strOriginalTableName"] = "scratch_cards_distribution_records";

	


$tdatascratch_cards_distribution_records[".showAddInPopup"] = false;

$tdatascratch_cards_distribution_records[".showEditInPopup"] = false;

$tdatascratch_cards_distribution_records[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatascratch_cards_distribution_records[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatascratch_cards_distribution_records[".fieldsForRegister"] = array();

$tdatascratch_cards_distribution_records[".listAjax"] = false;

	$tdatascratch_cards_distribution_records[".audit"] = false;

	$tdatascratch_cards_distribution_records[".locking"] = false;

$tdatascratch_cards_distribution_records[".view"] = true;

$tdatascratch_cards_distribution_records[".exportTo"] = true;



$tdatascratch_cards_distribution_records[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatascratch_cards_distribution_records[".searchSaving"] = false;
//

$tdatascratch_cards_distribution_records[".showSearchPanel"] = true;
		$tdatascratch_cards_distribution_records[".flexibleSearch"] = true;		

if (isMobile())
	$tdatascratch_cards_distribution_records[".isUseAjaxSuggest"] = false;
else 
	$tdatascratch_cards_distribution_records[".isUseAjaxSuggest"] = true;

$tdatascratch_cards_distribution_records[".rowHighlite"] = true;



$tdatascratch_cards_distribution_records[".addPageEvents"] = false;

// use timepicker for search panel
$tdatascratch_cards_distribution_records[".isUseTimeForSearch"] = false;





$tdatascratch_cards_distribution_records[".allSearchFields"] = array();
$tdatascratch_cards_distribution_records[".filterFields"] = array();
$tdatascratch_cards_distribution_records[".requiredSearchFields"] = array();

$tdatascratch_cards_distribution_records[".allSearchFields"][] = "Dist_ID";
		$tdatascratch_cards_distribution_records[".allSearchFields"][] = "Dist_Date";
		$tdatascratch_cards_distribution_records[".allSearchFields"][] = "Serial_No_From";
		$tdatascratch_cards_distribution_records[".allSearchFields"][] = "Serial_No_To";
		$tdatascratch_cards_distribution_records[".allSearchFields"][] = "Full_Name";
		$tdatascratch_cards_distribution_records[".allSearchFields"][] = "POS_ALT_Number";
		$tdatascratch_cards_distribution_records[".allSearchFields"][] = "Area";
		$tdatascratch_cards_distribution_records[".allSearchFields"][] = "Alt_Number";
		$tdatascratch_cards_distribution_records[".allSearchFields"][] = "Denomination";
		$tdatascratch_cards_distribution_records[".allSearchFields"][] = "Quantity";
		$tdatascratch_cards_distribution_records[".allSearchFields"][] = "Lat";
		$tdatascratch_cards_distribution_records[".allSearchFields"][] = "Lon";
		$tdatascratch_cards_distribution_records[".allSearchFields"][] = "DSO_Name";
		$tdatascratch_cards_distribution_records[".allSearchFields"][] = "DSO_Number";
		
$tdatascratch_cards_distribution_records[".googleLikeFields"] = array();
$tdatascratch_cards_distribution_records[".googleLikeFields"][] = "Dist_ID";
$tdatascratch_cards_distribution_records[".googleLikeFields"][] = "Dist_Date";
$tdatascratch_cards_distribution_records[".googleLikeFields"][] = "Serial_No_From";
$tdatascratch_cards_distribution_records[".googleLikeFields"][] = "Serial_No_To";
$tdatascratch_cards_distribution_records[".googleLikeFields"][] = "Full_Name";
$tdatascratch_cards_distribution_records[".googleLikeFields"][] = "POS_ALT_Number";
$tdatascratch_cards_distribution_records[".googleLikeFields"][] = "Area";
$tdatascratch_cards_distribution_records[".googleLikeFields"][] = "Alt_Number";
$tdatascratch_cards_distribution_records[".googleLikeFields"][] = "Denomination";
$tdatascratch_cards_distribution_records[".googleLikeFields"][] = "Quantity";
$tdatascratch_cards_distribution_records[".googleLikeFields"][] = "Lat";
$tdatascratch_cards_distribution_records[".googleLikeFields"][] = "Lon";
$tdatascratch_cards_distribution_records[".googleLikeFields"][] = "DSO_Name";
$tdatascratch_cards_distribution_records[".googleLikeFields"][] = "DSO_Number";


$tdatascratch_cards_distribution_records[".advSearchFields"] = array();
$tdatascratch_cards_distribution_records[".advSearchFields"][] = "Dist_ID";
$tdatascratch_cards_distribution_records[".advSearchFields"][] = "Dist_Date";
$tdatascratch_cards_distribution_records[".advSearchFields"][] = "Serial_No_From";
$tdatascratch_cards_distribution_records[".advSearchFields"][] = "Serial_No_To";
$tdatascratch_cards_distribution_records[".advSearchFields"][] = "Full_Name";
$tdatascratch_cards_distribution_records[".advSearchFields"][] = "POS_ALT_Number";
$tdatascratch_cards_distribution_records[".advSearchFields"][] = "Area";
$tdatascratch_cards_distribution_records[".advSearchFields"][] = "Alt_Number";
$tdatascratch_cards_distribution_records[".advSearchFields"][] = "Denomination";
$tdatascratch_cards_distribution_records[".advSearchFields"][] = "Quantity";
$tdatascratch_cards_distribution_records[".advSearchFields"][] = "Lat";
$tdatascratch_cards_distribution_records[".advSearchFields"][] = "Lon";
$tdatascratch_cards_distribution_records[".advSearchFields"][] = "DSO_Name";
$tdatascratch_cards_distribution_records[".advSearchFields"][] = "DSO_Number";

$tdatascratch_cards_distribution_records[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdatascratch_cards_distribution_records[".pageSize"] = 20;

$tdatascratch_cards_distribution_records[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatascratch_cards_distribution_records[".strOrderBy"] = $tstrOrderBy;

$tdatascratch_cards_distribution_records[".orderindexes"] = array();

$tdatascratch_cards_distribution_records[".sqlHead"] = "SELECT Dist_ID,   Dist_Date,   Serial_No_From,   Serial_No_To,   Full_Name,   POS_ALT_Number,   Area,   Alt_Number,   Denomination,   Quantity,   Lat,   Lon,   DSO_Name,   DSO_Number";
$tdatascratch_cards_distribution_records[".sqlFrom"] = "FROM scratch_cards_distribution_records";
$tdatascratch_cards_distribution_records[".sqlWhereExpr"] = "";
$tdatascratch_cards_distribution_records[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatascratch_cards_distribution_records[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatascratch_cards_distribution_records[".arrGroupsPerPage"] = $arrGPP;

$tdatascratch_cards_distribution_records[".highlightSearchResults"] = true;

$tableKeysscratch_cards_distribution_records = array();
$tableKeysscratch_cards_distribution_records[] = "Dist_ID";
$tdatascratch_cards_distribution_records[".Keys"] = $tableKeysscratch_cards_distribution_records;

$tdatascratch_cards_distribution_records[".listFields"] = array();
$tdatascratch_cards_distribution_records[".listFields"][] = "Dist_ID";
$tdatascratch_cards_distribution_records[".listFields"][] = "Dist_Date";
$tdatascratch_cards_distribution_records[".listFields"][] = "Serial_No_From";
$tdatascratch_cards_distribution_records[".listFields"][] = "Serial_No_To";
$tdatascratch_cards_distribution_records[".listFields"][] = "Full_Name";
$tdatascratch_cards_distribution_records[".listFields"][] = "POS_ALT_Number";
$tdatascratch_cards_distribution_records[".listFields"][] = "Area";
$tdatascratch_cards_distribution_records[".listFields"][] = "Alt_Number";
$tdatascratch_cards_distribution_records[".listFields"][] = "Denomination";
$tdatascratch_cards_distribution_records[".listFields"][] = "Quantity";
$tdatascratch_cards_distribution_records[".listFields"][] = "Lat";
$tdatascratch_cards_distribution_records[".listFields"][] = "Lon";
$tdatascratch_cards_distribution_records[".listFields"][] = "DSO_Name";
$tdatascratch_cards_distribution_records[".listFields"][] = "DSO_Number";

$tdatascratch_cards_distribution_records[".hideMobileList"] = array();


$tdatascratch_cards_distribution_records[".viewFields"] = array();
$tdatascratch_cards_distribution_records[".viewFields"][] = "Dist_ID";
$tdatascratch_cards_distribution_records[".viewFields"][] = "Dist_Date";
$tdatascratch_cards_distribution_records[".viewFields"][] = "Serial_No_From";
$tdatascratch_cards_distribution_records[".viewFields"][] = "Serial_No_To";
$tdatascratch_cards_distribution_records[".viewFields"][] = "Full_Name";
$tdatascratch_cards_distribution_records[".viewFields"][] = "POS_ALT_Number";
$tdatascratch_cards_distribution_records[".viewFields"][] = "Area";
$tdatascratch_cards_distribution_records[".viewFields"][] = "Alt_Number";
$tdatascratch_cards_distribution_records[".viewFields"][] = "Denomination";
$tdatascratch_cards_distribution_records[".viewFields"][] = "Quantity";
$tdatascratch_cards_distribution_records[".viewFields"][] = "Lat";
$tdatascratch_cards_distribution_records[".viewFields"][] = "Lon";
$tdatascratch_cards_distribution_records[".viewFields"][] = "DSO_Name";
$tdatascratch_cards_distribution_records[".viewFields"][] = "DSO_Number";

$tdatascratch_cards_distribution_records[".addFields"] = array();

$tdatascratch_cards_distribution_records[".inlineAddFields"] = array();

$tdatascratch_cards_distribution_records[".editFields"] = array();

$tdatascratch_cards_distribution_records[".inlineEditFields"] = array();

$tdatascratch_cards_distribution_records[".exportFields"] = array();
$tdatascratch_cards_distribution_records[".exportFields"][] = "Dist_ID";
$tdatascratch_cards_distribution_records[".exportFields"][] = "Dist_Date";
$tdatascratch_cards_distribution_records[".exportFields"][] = "Serial_No_From";
$tdatascratch_cards_distribution_records[".exportFields"][] = "Serial_No_To";
$tdatascratch_cards_distribution_records[".exportFields"][] = "Full_Name";
$tdatascratch_cards_distribution_records[".exportFields"][] = "POS_ALT_Number";
$tdatascratch_cards_distribution_records[".exportFields"][] = "Area";
$tdatascratch_cards_distribution_records[".exportFields"][] = "Alt_Number";
$tdatascratch_cards_distribution_records[".exportFields"][] = "Denomination";
$tdatascratch_cards_distribution_records[".exportFields"][] = "Quantity";
$tdatascratch_cards_distribution_records[".exportFields"][] = "Lat";
$tdatascratch_cards_distribution_records[".exportFields"][] = "Lon";
$tdatascratch_cards_distribution_records[".exportFields"][] = "DSO_Name";
$tdatascratch_cards_distribution_records[".exportFields"][] = "DSO_Number";

$tdatascratch_cards_distribution_records[".printFields"] = array();

//	Dist_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Dist_ID";
	$fdata["GoodName"] = "Dist_ID";
	$fdata["ownerTable"] = "scratch_cards_distribution_records";
	$fdata["Label"] = GetFieldLabel("scratch_cards_distribution_records","Dist_ID"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Dist_ID"; 
		$fdata["FullName"] = "Dist_ID";
	
		
		
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

	

	
	$tdatascratch_cards_distribution_records["Dist_ID"] = $fdata;
//	Dist_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Dist_Date";
	$fdata["GoodName"] = "Dist_Date";
	$fdata["ownerTable"] = "scratch_cards_distribution_records";
	$fdata["Label"] = GetFieldLabel("scratch_cards_distribution_records","Dist_Date"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Dist_Date"; 
		$fdata["FullName"] = "Dist_Date";
	
		
		
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

	

	
	$tdatascratch_cards_distribution_records["Dist_Date"] = $fdata;
//	Serial_No_From
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Serial_No_From";
	$fdata["GoodName"] = "Serial_No_From";
	$fdata["ownerTable"] = "scratch_cards_distribution_records";
	$fdata["Label"] = GetFieldLabel("scratch_cards_distribution_records","Serial_No_From"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Serial_No_From"; 
		$fdata["FullName"] = "Serial_No_From";
	
		
		
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

	

	
	$tdatascratch_cards_distribution_records["Serial_No_From"] = $fdata;
//	Serial_No_To
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Serial_No_To";
	$fdata["GoodName"] = "Serial_No_To";
	$fdata["ownerTable"] = "scratch_cards_distribution_records";
	$fdata["Label"] = GetFieldLabel("scratch_cards_distribution_records","Serial_No_To"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Serial_No_To"; 
		$fdata["FullName"] = "Serial_No_To";
	
		
		
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

	

	
	$tdatascratch_cards_distribution_records["Serial_No_To"] = $fdata;
//	Full_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Full_Name";
	$fdata["GoodName"] = "Full_Name";
	$fdata["ownerTable"] = "scratch_cards_distribution_records";
	$fdata["Label"] = GetFieldLabel("scratch_cards_distribution_records","Full_Name"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Full_Name"; 
		$fdata["FullName"] = "Full_Name";
	
		
		
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

	

	
	$tdatascratch_cards_distribution_records["Full_Name"] = $fdata;
//	POS_ALT_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "POS_ALT_Number";
	$fdata["GoodName"] = "POS_ALT_Number";
	$fdata["ownerTable"] = "scratch_cards_distribution_records";
	$fdata["Label"] = GetFieldLabel("scratch_cards_distribution_records","POS_ALT_Number"); 
	$fdata["FieldType"] = 3;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "POS_ALT_Number"; 
		$fdata["FullName"] = "POS_ALT_Number";
	
		
		
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

	

	
	$tdatascratch_cards_distribution_records["POS_ALT_Number"] = $fdata;
//	Area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Area";
	$fdata["GoodName"] = "Area";
	$fdata["ownerTable"] = "scratch_cards_distribution_records";
	$fdata["Label"] = GetFieldLabel("scratch_cards_distribution_records","Area"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Area"; 
		$fdata["FullName"] = "Area";
	
		
		
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

	

	
	$tdatascratch_cards_distribution_records["Area"] = $fdata;
//	Alt_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Alt_Number";
	$fdata["GoodName"] = "Alt_Number";
	$fdata["ownerTable"] = "scratch_cards_distribution_records";
	$fdata["Label"] = GetFieldLabel("scratch_cards_distribution_records","Alt_Number"); 
	$fdata["FieldType"] = 3;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Alt_Number"; 
		$fdata["FullName"] = "Alt_Number";
	
		
		
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

	

	
	$tdatascratch_cards_distribution_records["Alt_Number"] = $fdata;
//	Denomination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Denomination";
	$fdata["GoodName"] = "Denomination";
	$fdata["ownerTable"] = "scratch_cards_distribution_records";
	$fdata["Label"] = GetFieldLabel("scratch_cards_distribution_records","Denomination"); 
	$fdata["FieldType"] = 3;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Denomination"; 
		$fdata["FullName"] = "Denomination";
	
		
		
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

	

	
	$tdatascratch_cards_distribution_records["Denomination"] = $fdata;
//	Quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Quantity";
	$fdata["GoodName"] = "Quantity";
	$fdata["ownerTable"] = "scratch_cards_distribution_records";
	$fdata["Label"] = GetFieldLabel("scratch_cards_distribution_records","Quantity"); 
	$fdata["FieldType"] = 3;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Quantity"; 
		$fdata["FullName"] = "Quantity";
	
		
		
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

	

	
	$tdatascratch_cards_distribution_records["Quantity"] = $fdata;
//	Lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Lat";
	$fdata["GoodName"] = "Lat";
	$fdata["ownerTable"] = "scratch_cards_distribution_records";
	$fdata["Label"] = GetFieldLabel("scratch_cards_distribution_records","Lat"); 
	$fdata["FieldType"] = 5;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Lat"; 
		$fdata["FullName"] = "Lat";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 4;
	
		
		
		
		
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

	

	
	$tdatascratch_cards_distribution_records["Lat"] = $fdata;
//	Lon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Lon";
	$fdata["GoodName"] = "Lon";
	$fdata["ownerTable"] = "scratch_cards_distribution_records";
	$fdata["Label"] = GetFieldLabel("scratch_cards_distribution_records","Lon"); 
	$fdata["FieldType"] = 5;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Lon"; 
		$fdata["FullName"] = "Lon";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 4;
	
		
		
		
		
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

	

	
	$tdatascratch_cards_distribution_records["Lon"] = $fdata;
//	DSO_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DSO_Name";
	$fdata["GoodName"] = "DSO_Name";
	$fdata["ownerTable"] = "scratch_cards_distribution_records";
	$fdata["Label"] = GetFieldLabel("scratch_cards_distribution_records","DSO_Name"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DSO_Name"; 
		$fdata["FullName"] = "DSO_Name";
	
		
		
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

	

	
	$tdatascratch_cards_distribution_records["DSO_Name"] = $fdata;
//	DSO_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DSO_Number";
	$fdata["GoodName"] = "DSO_Number";
	$fdata["ownerTable"] = "scratch_cards_distribution_records";
	$fdata["Label"] = GetFieldLabel("scratch_cards_distribution_records","DSO_Number"); 
	$fdata["FieldType"] = 3;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DSO_Number"; 
		$fdata["FullName"] = "DSO_Number";
	
		
		
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

	

	
	$tdatascratch_cards_distribution_records["DSO_Number"] = $fdata;

	
$tables_data["scratch_cards_distribution_records"]=&$tdatascratch_cards_distribution_records;
$field_labels["scratch_cards_distribution_records"] = &$fieldLabelsscratch_cards_distribution_records;
$fieldToolTips["scratch_cards_distribution_records"] = &$fieldToolTipsscratch_cards_distribution_records;
$page_titles["scratch_cards_distribution_records"] = &$pageTitlesscratch_cards_distribution_records;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["scratch_cards_distribution_records"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["scratch_cards_distribution_records"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_scratch_cards_distribution_records()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Dist_ID,   Dist_Date,   Serial_No_From,   Serial_No_To,   Full_Name,   POS_ALT_Number,   Area,   Alt_Number,   Denomination,   Quantity,   Lat,   Lon,   DSO_Name,   DSO_Number";
$proto0["m_strFrom"] = "FROM scratch_cards_distribution_records";
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
	"m_strName" => "Dist_ID",
	"m_strTable" => "scratch_cards_distribution_records"
));

$proto5["m_sql"] = "Dist_ID";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Dist_Date",
	"m_strTable" => "scratch_cards_distribution_records"
));

$proto7["m_sql"] = "Dist_Date";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Serial_No_From",
	"m_strTable" => "scratch_cards_distribution_records"
));

$proto9["m_sql"] = "Serial_No_From";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Serial_No_To",
	"m_strTable" => "scratch_cards_distribution_records"
));

$proto11["m_sql"] = "Serial_No_To";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Full_Name",
	"m_strTable" => "scratch_cards_distribution_records"
));

$proto13["m_sql"] = "Full_Name";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "POS_ALT_Number",
	"m_strTable" => "scratch_cards_distribution_records"
));

$proto15["m_sql"] = "POS_ALT_Number";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Area",
	"m_strTable" => "scratch_cards_distribution_records"
));

$proto17["m_sql"] = "Area";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Alt_Number",
	"m_strTable" => "scratch_cards_distribution_records"
));

$proto19["m_sql"] = "Alt_Number";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Denomination",
	"m_strTable" => "scratch_cards_distribution_records"
));

$proto21["m_sql"] = "Denomination";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantity",
	"m_strTable" => "scratch_cards_distribution_records"
));

$proto23["m_sql"] = "Quantity";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Lat",
	"m_strTable" => "scratch_cards_distribution_records"
));

$proto25["m_sql"] = "Lat";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Lon",
	"m_strTable" => "scratch_cards_distribution_records"
));

$proto27["m_sql"] = "Lon";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "DSO_Name",
	"m_strTable" => "scratch_cards_distribution_records"
));

$proto29["m_sql"] = "DSO_Name";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "DSO_Number",
	"m_strTable" => "scratch_cards_distribution_records"
));

$proto31["m_sql"] = "DSO_Number";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto33=array();
$proto33["m_link"] = "SQLL_MAIN";
			$proto34=array();
$proto34["m_strName"] = "scratch_cards_distribution_records";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "Dist_ID";
$proto34["m_columns"][] = "Dist_Date";
$proto34["m_columns"][] = "Serial_No_From";
$proto34["m_columns"][] = "Serial_No_To";
$proto34["m_columns"][] = "Full_Name";
$proto34["m_columns"][] = "POS_ALT_Number";
$proto34["m_columns"][] = "Area";
$proto34["m_columns"][] = "Alt_Number";
$proto34["m_columns"][] = "Denomination";
$proto34["m_columns"][] = "Quantity";
$proto34["m_columns"][] = "Lat";
$proto34["m_columns"][] = "Lon";
$proto34["m_columns"][] = "DSO_Name";
$proto34["m_columns"][] = "DSO_Number";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "scratch_cards_distribution_records";
$proto33["m_alias"] = "";
$proto35=array();
$proto35["m_sql"] = "";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_scratch_cards_distribution_records = createSqlQuery_scratch_cards_distribution_records();

														
	
$tdatascratch_cards_distribution_records[".sqlquery"] = $queryData_scratch_cards_distribution_records;

$tableEvents["scratch_cards_distribution_records"] = new eventsBase;
$tdatascratch_cards_distribution_records[".hasEvents"] = false;

$cipherer = new RunnerCipherer("scratch_cards_distribution_records");

?>