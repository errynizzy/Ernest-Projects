<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasimcards_batches_query = array();	
	$tdatasimcards_batches_query[".ShortName"] = "simcards_batches_query";
	$tdatasimcards_batches_query[".OwnerID"] = "";
	$tdatasimcards_batches_query[".OriginalTable"] = "simcards_batches";

//	field labels
$fieldLabelssimcards_batches_query = array();
$fieldToolTipssimcards_batches_query = array();
$pageTitlessimcards_batches_query = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssimcards_batches_query["English"] = array();
	$fieldToolTipssimcards_batches_query["English"] = array();
	$pageTitlessimcards_batches_query["English"] = array();
	$fieldLabelssimcards_batches_query["English"]["Event_date"] = "Event Date";
	$fieldToolTipssimcards_batches_query["English"]["Event_date"] = "";
	$fieldLabelssimcards_batches_query["English"]["Active_MSISDN"] = "Subscriber MSISDN";
	$fieldToolTipssimcards_batches_query["English"]["Active_MSISDN"] = "";
	$fieldLabelssimcards_batches_query["English"]["FL_or_POS_Name"] = "FL Or POS Name";
	$fieldToolTipssimcards_batches_query["English"]["FL_or_POS_Name"] = "";
	$fieldLabelssimcards_batches_query["English"]["TL_Name"] = "TL Name";
	$fieldToolTipssimcards_batches_query["English"]["TL_Name"] = "";
	$fieldLabelssimcards_batches_query["English"]["SC_DSO_RDO_Name"] = "SC DSO RDO Name";
	$fieldToolTipssimcards_batches_query["English"]["SC_DSO_RDO_Name"] = "";
	$fieldLabelssimcards_batches_query["English"]["POS_Number"] = "POS Number";
	$fieldToolTipssimcards_batches_query["English"]["POS_Number"] = "";
	$fieldLabelssimcards_batches_query["English"]["Airtime_transered"] = "Airtime Transered";
	$fieldToolTipssimcards_batches_query["English"]["Airtime_transered"] = "";
	$fieldLabelssimcards_batches_query["English"]["batch_name"] = "Batch Name";
	$fieldToolTipssimcards_batches_query["English"]["batch_name"] = "";
	$fieldLabelssimcards_batches_query["English"]["ICCID"] = "ICCID";
	$fieldToolTipssimcards_batches_query["English"]["ICCID"] = "";
	$fieldLabelssimcards_batches_query["English"]["time"] = "Time";
	$fieldToolTipssimcards_batches_query["English"]["time"] = "";
	$fieldLabelssimcards_batches_query["English"]["Activation_Status"] = "Activation Status";
	$fieldToolTipssimcards_batches_query["English"]["Activation_Status"] = "";
	$fieldLabelssimcards_batches_query["English"]["Form_Returned"] = "Form Returned";
	$fieldToolTipssimcards_batches_query["English"]["Form_Returned"] = "";
	$fieldLabelssimcards_batches_query["English"]["New_MSISDN"] = "New MSISDN";
	$fieldToolTipssimcards_batches_query["English"]["New_MSISDN"] = "";
	$fieldLabelssimcards_batches_query["English"]["Transfer_date"] = "Transfer Date";
	$fieldToolTipssimcards_batches_query["English"]["Transfer_date"] = "";
	$fieldLabelssimcards_batches_query["English"]["Activation_Commission"] = "Activation Commission";
	$fieldToolTipssimcards_batches_query["English"]["Activation_Commission"] = "";
	$fieldLabelssimcards_batches_query["English"]["Form_Commission"] = "Form Commission";
	$fieldToolTipssimcards_batches_query["English"]["Form_Commission"] = "";
	$fieldLabelssimcards_batches_query["English"]["Form_Paid_Date"] = "Form Paid Date";
	$fieldToolTipssimcards_batches_query["English"]["Form_Paid_Date"] = "";
	$fieldLabelssimcards_batches_query["English"]["Form_Status"] = "Form Status";
	$fieldToolTipssimcards_batches_query["English"]["Form_Status"] = "";
	$fieldLabelssimcards_batches_query["English"]["Swap_Date"] = "Swap Date";
	$fieldToolTipssimcards_batches_query["English"]["Swap_Date"] = "";
	if (count($fieldToolTipssimcards_batches_query["English"]))
		$tdatasimcards_batches_query[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssimcards_batches_query[""] = array();
	$fieldToolTipssimcards_batches_query[""] = array();
	$pageTitlessimcards_batches_query[""] = array();
	if (count($fieldToolTipssimcards_batches_query[""]))
		$tdatasimcards_batches_query[".isUseToolTips"] = true;
}
	
	
	$tdatasimcards_batches_query[".NCSearch"] = true;



$tdatasimcards_batches_query[".shortTableName"] = "simcards_batches_query";
$tdatasimcards_batches_query[".nSecOptions"] = 0;
$tdatasimcards_batches_query[".recsPerRowList"] = 1;
$tdatasimcards_batches_query[".mainTableOwnerID"] = "";
$tdatasimcards_batches_query[".moveNext"] = 1;
$tdatasimcards_batches_query[".nType"] = 1;

$tdatasimcards_batches_query[".strOriginalTableName"] = "simcards_batches";

	


$tdatasimcards_batches_query[".showAddInPopup"] = true;

$tdatasimcards_batches_query[".showEditInPopup"] = true;

$tdatasimcards_batches_query[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
			;
$popupPagesLayoutNames["add"] = "view2";
			;
$popupPagesLayoutNames["edit"] = "view2";
			;
$popupPagesLayoutNames["view"] = "view2";
$tdatasimcards_batches_query[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasimcards_batches_query[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatasimcards_batches_query[".listAjax"] = true;
else 
	$tdatasimcards_batches_query[".listAjax"] = false;

	$tdatasimcards_batches_query[".audit"] = false;

	$tdatasimcards_batches_query[".locking"] = false;

$tdatasimcards_batches_query[".inlineEdit"] = true;

$tdatasimcards_batches_query[".exportTo"] = true;



$tdatasimcards_batches_query[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasimcards_batches_query[".searchSaving"] = false;
//

$tdatasimcards_batches_query[".showSearchPanel"] = true;
		$tdatasimcards_batches_query[".flexibleSearch"] = true;		

if (isMobile())
	$tdatasimcards_batches_query[".isUseAjaxSuggest"] = false;
else 
	$tdatasimcards_batches_query[".isUseAjaxSuggest"] = true;

$tdatasimcards_batches_query[".rowHighlite"] = true;



$tdatasimcards_batches_query[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasimcards_batches_query[".isUseTimeForSearch"] = false;





$tdatasimcards_batches_query[".allSearchFields"] = array();
$tdatasimcards_batches_query[".filterFields"] = array();
$tdatasimcards_batches_query[".requiredSearchFields"] = array();

$tdatasimcards_batches_query[".allSearchFields"][] = "POS_Number";
		$tdatasimcards_batches_query[".allSearchFields"][] = "FL_or_POS_Name";
		$tdatasimcards_batches_query[".allSearchFields"][] = "TL_Name";
		$tdatasimcards_batches_query[".allSearchFields"][] = "SC_DSO_RDO_Name";
		$tdatasimcards_batches_query[".allSearchFields"][] = "Event_date";
		$tdatasimcards_batches_query[".allSearchFields"][] = "time";
		$tdatasimcards_batches_query[".allSearchFields"][] = "Activation_Status";
		$tdatasimcards_batches_query[".allSearchFields"][] = "Active_MSISDN";
		$tdatasimcards_batches_query[".allSearchFields"][] = "New_MSISDN";
		$tdatasimcards_batches_query[".allSearchFields"][] = "Swap_Date";
		$tdatasimcards_batches_query[".allSearchFields"][] = "batch_name";
		$tdatasimcards_batches_query[".allSearchFields"][] = "ICCID";
		$tdatasimcards_batches_query[".allSearchFields"][] = "Airtime_transered";
		$tdatasimcards_batches_query[".allSearchFields"][] = "Transfer_date";
		$tdatasimcards_batches_query[".allSearchFields"][] = "Activation_Commission";
		$tdatasimcards_batches_query[".allSearchFields"][] = "Form_Returned";
		$tdatasimcards_batches_query[".allSearchFields"][] = "Form_Status";
		$tdatasimcards_batches_query[".allSearchFields"][] = "Form_Commission";
		$tdatasimcards_batches_query[".allSearchFields"][] = "Form_Paid_Date";
		
$tdatasimcards_batches_query[".googleLikeFields"] = array();
$tdatasimcards_batches_query[".googleLikeFields"][] = "POS_Number";
$tdatasimcards_batches_query[".googleLikeFields"][] = "FL_or_POS_Name";
$tdatasimcards_batches_query[".googleLikeFields"][] = "TL_Name";
$tdatasimcards_batches_query[".googleLikeFields"][] = "SC_DSO_RDO_Name";
$tdatasimcards_batches_query[".googleLikeFields"][] = "batch_name";
$tdatasimcards_batches_query[".googleLikeFields"][] = "ICCID";
$tdatasimcards_batches_query[".googleLikeFields"][] = "Event_date";
$tdatasimcards_batches_query[".googleLikeFields"][] = "Form_Returned";
$tdatasimcards_batches_query[".googleLikeFields"][] = "time";
$tdatasimcards_batches_query[".googleLikeFields"][] = "Activation_Status";
$tdatasimcards_batches_query[".googleLikeFields"][] = "Active_MSISDN";
$tdatasimcards_batches_query[".googleLikeFields"][] = "New_MSISDN";
$tdatasimcards_batches_query[".googleLikeFields"][] = "Airtime_transered";
$tdatasimcards_batches_query[".googleLikeFields"][] = "Transfer_date";
$tdatasimcards_batches_query[".googleLikeFields"][] = "Activation_Commission";
$tdatasimcards_batches_query[".googleLikeFields"][] = "Form_Commission";
$tdatasimcards_batches_query[".googleLikeFields"][] = "Form_Paid_Date";
$tdatasimcards_batches_query[".googleLikeFields"][] = "Form_Status";
$tdatasimcards_batches_query[".googleLikeFields"][] = "Swap_Date";


$tdatasimcards_batches_query[".advSearchFields"] = array();
$tdatasimcards_batches_query[".advSearchFields"][] = "POS_Number";
$tdatasimcards_batches_query[".advSearchFields"][] = "FL_or_POS_Name";
$tdatasimcards_batches_query[".advSearchFields"][] = "TL_Name";
$tdatasimcards_batches_query[".advSearchFields"][] = "SC_DSO_RDO_Name";
$tdatasimcards_batches_query[".advSearchFields"][] = "Event_date";
$tdatasimcards_batches_query[".advSearchFields"][] = "time";
$tdatasimcards_batches_query[".advSearchFields"][] = "Activation_Status";
$tdatasimcards_batches_query[".advSearchFields"][] = "Active_MSISDN";
$tdatasimcards_batches_query[".advSearchFields"][] = "New_MSISDN";
$tdatasimcards_batches_query[".advSearchFields"][] = "Swap_Date";
$tdatasimcards_batches_query[".advSearchFields"][] = "batch_name";
$tdatasimcards_batches_query[".advSearchFields"][] = "ICCID";
$tdatasimcards_batches_query[".advSearchFields"][] = "Airtime_transered";
$tdatasimcards_batches_query[".advSearchFields"][] = "Transfer_date";
$tdatasimcards_batches_query[".advSearchFields"][] = "Activation_Commission";
$tdatasimcards_batches_query[".advSearchFields"][] = "Form_Returned";
$tdatasimcards_batches_query[".advSearchFields"][] = "Form_Status";
$tdatasimcards_batches_query[".advSearchFields"][] = "Form_Commission";
$tdatasimcards_batches_query[".advSearchFields"][] = "Form_Paid_Date";

$tdatasimcards_batches_query[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdatasimcards_batches_query[".pageSize"] = 20;

$tdatasimcards_batches_query[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasimcards_batches_query[".strOrderBy"] = $tstrOrderBy;

$tdatasimcards_batches_query[".orderindexes"] = array();

$tdatasimcards_batches_query[".sqlHead"] = "SELECT Activator_Number AS POS_Number,  Activator_Name AS FL_or_POS_Name,  Team_Leader AS TL_Name,  Manager_Name AS SC_DSO_RDO_Name,  batch_name,  ICCID,  Event_date,  Form_Returned,  `time`,  Status AS Activation_Status,  Active_MSISDN,  New_MSISDN,  Airtime_transered,  Transfer_date,  Activation_Commission,  Form_Commission,  Form_Paid_Date,  Form_Status,  Swap_Date";
$tdatasimcards_batches_query[".sqlFrom"] = "FROM simcards_batches";
$tdatasimcards_batches_query[".sqlWhereExpr"] = "Status ='Active'";
$tdatasimcards_batches_query[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasimcards_batches_query[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasimcards_batches_query[".arrGroupsPerPage"] = $arrGPP;

$tdatasimcards_batches_query[".highlightSearchResults"] = true;

$tableKeyssimcards_batches_query = array();
$tableKeyssimcards_batches_query[] = "ICCID";
$tdatasimcards_batches_query[".Keys"] = $tableKeyssimcards_batches_query;

$tdatasimcards_batches_query[".listFields"] = array();
$tdatasimcards_batches_query[".listFields"][] = "POS_Number";
$tdatasimcards_batches_query[".listFields"][] = "Event_date";
$tdatasimcards_batches_query[".listFields"][] = "time";
$tdatasimcards_batches_query[".listFields"][] = "Activation_Status";
$tdatasimcards_batches_query[".listFields"][] = "FL_or_POS_Name";
$tdatasimcards_batches_query[".listFields"][] = "TL_Name";
$tdatasimcards_batches_query[".listFields"][] = "SC_DSO_RDO_Name";
$tdatasimcards_batches_query[".listFields"][] = "batch_name";
$tdatasimcards_batches_query[".listFields"][] = "ICCID";
$tdatasimcards_batches_query[".listFields"][] = "Active_MSISDN";
$tdatasimcards_batches_query[".listFields"][] = "New_MSISDN";
$tdatasimcards_batches_query[".listFields"][] = "Swap_Date";
$tdatasimcards_batches_query[".listFields"][] = "Airtime_transered";
$tdatasimcards_batches_query[".listFields"][] = "Transfer_date";
$tdatasimcards_batches_query[".listFields"][] = "Activation_Commission";
$tdatasimcards_batches_query[".listFields"][] = "Form_Returned";
$tdatasimcards_batches_query[".listFields"][] = "Form_Status";
$tdatasimcards_batches_query[".listFields"][] = "Form_Commission";
$tdatasimcards_batches_query[".listFields"][] = "Form_Paid_Date";

$tdatasimcards_batches_query[".hideMobileList"] = array();


$tdatasimcards_batches_query[".viewFields"] = array();

$tdatasimcards_batches_query[".addFields"] = array();

$tdatasimcards_batches_query[".inlineAddFields"] = array();

$tdatasimcards_batches_query[".editFields"] = array();

$tdatasimcards_batches_query[".inlineEditFields"] = array();

$tdatasimcards_batches_query[".exportFields"] = array();
$tdatasimcards_batches_query[".exportFields"][] = "POS_Number";
$tdatasimcards_batches_query[".exportFields"][] = "Event_date";
$tdatasimcards_batches_query[".exportFields"][] = "time";
$tdatasimcards_batches_query[".exportFields"][] = "Activation_Status";
$tdatasimcards_batches_query[".exportFields"][] = "FL_or_POS_Name";
$tdatasimcards_batches_query[".exportFields"][] = "TL_Name";
$tdatasimcards_batches_query[".exportFields"][] = "SC_DSO_RDO_Name";
$tdatasimcards_batches_query[".exportFields"][] = "batch_name";
$tdatasimcards_batches_query[".exportFields"][] = "ICCID";
$tdatasimcards_batches_query[".exportFields"][] = "Active_MSISDN";
$tdatasimcards_batches_query[".exportFields"][] = "New_MSISDN";
$tdatasimcards_batches_query[".exportFields"][] = "Swap_Date";
$tdatasimcards_batches_query[".exportFields"][] = "Airtime_transered";
$tdatasimcards_batches_query[".exportFields"][] = "Transfer_date";
$tdatasimcards_batches_query[".exportFields"][] = "Activation_Commission";
$tdatasimcards_batches_query[".exportFields"][] = "Form_Returned";
$tdatasimcards_batches_query[".exportFields"][] = "Form_Status";
$tdatasimcards_batches_query[".exportFields"][] = "Form_Commission";
$tdatasimcards_batches_query[".exportFields"][] = "Form_Paid_Date";

$tdatasimcards_batches_query[".printFields"] = array();

//	POS_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "POS_Number";
	$fdata["GoodName"] = "POS_Number";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("simcards_batches_query","POS_Number"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Activator_Number"; 
		$fdata["FullName"] = "Activator_Number";
	
		
		
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
		
	// the end of search options settings	

	

	
	$tdatasimcards_batches_query["POS_Number"] = $fdata;
//	FL_or_POS_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FL_or_POS_Name";
	$fdata["GoodName"] = "FL_or_POS_Name";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("simcards_batches_query","FL_or_POS_Name"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Activator_Name"; 
		$fdata["FullName"] = "Activator_Name";
	
		
		
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
		
	// the end of search options settings	

	

	
	$tdatasimcards_batches_query["FL_or_POS_Name"] = $fdata;
//	TL_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TL_Name";
	$fdata["GoodName"] = "TL_Name";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("simcards_batches_query","TL_Name"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Team_Leader"; 
		$fdata["FullName"] = "Team_Leader";
	
		
		
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
		
	// the end of search options settings	

	

	
	$tdatasimcards_batches_query["TL_Name"] = $fdata;
//	SC_DSO_RDO_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SC_DSO_RDO_Name";
	$fdata["GoodName"] = "SC_DSO_RDO_Name";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("simcards_batches_query","SC_DSO_RDO_Name"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Manager_Name"; 
		$fdata["FullName"] = "Manager_Name";
	
		
		
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
		
	// the end of search options settings	

	

	
	$tdatasimcards_batches_query["SC_DSO_RDO_Name"] = $fdata;
//	batch_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "batch_name";
	$fdata["GoodName"] = "batch_name";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("simcards_batches_query","batch_name"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "batch_name"; 
		$fdata["FullName"] = "batch_name";
	
		
		
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
		
	// the end of search options settings	

	

	
	$tdatasimcards_batches_query["batch_name"] = $fdata;
//	ICCID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ICCID";
	$fdata["GoodName"] = "ICCID";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("simcards_batches_query","ICCID"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ICCID"; 
		$fdata["FullName"] = "ICCID";
	
		
		
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
		
	// the end of search options settings	

	

	
	$tdatasimcards_batches_query["ICCID"] = $fdata;
//	Event_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Event_date";
	$fdata["GoodName"] = "Event_date";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("simcards_batches_query","Event_date"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Event_date"; 
		$fdata["FullName"] = "Event_date";
	
		
		
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
		
	// the end of search options settings	

	

	
	$tdatasimcards_batches_query["Event_date"] = $fdata;
//	Form_Returned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Form_Returned";
	$fdata["GoodName"] = "Form_Returned";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("simcards_batches_query","Form_Returned"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Form_Returned"; 
		$fdata["FullName"] = "Form_Returned";
	
		
		
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
		
	// the end of search options settings	

	

	
	$tdatasimcards_batches_query["Form_Returned"] = $fdata;
//	time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "time";
	$fdata["GoodName"] = "time";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("simcards_batches_query","time"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "time"; 
		$fdata["FullName"] = "`time`";
	
		
		
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
		
	// the end of search options settings	

	

	
	$tdatasimcards_batches_query["time"] = $fdata;
//	Activation_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Activation_Status";
	$fdata["GoodName"] = "Activation_Status";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("simcards_batches_query","Activation_Status"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Status"; 
		$fdata["FullName"] = "Status";
	
		
		
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
		
	// the end of search options settings	

	

	
	$tdatasimcards_batches_query["Activation_Status"] = $fdata;
//	Active_MSISDN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Active_MSISDN";
	$fdata["GoodName"] = "Active_MSISDN";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("simcards_batches_query","Active_MSISDN"); 
	$fdata["FieldType"] = 3;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Active_MSISDN"; 
		$fdata["FullName"] = "Active_MSISDN";
	
		
		
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
		
	// the end of search options settings	

	

	
	$tdatasimcards_batches_query["Active_MSISDN"] = $fdata;
//	New_MSISDN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "New_MSISDN";
	$fdata["GoodName"] = "New_MSISDN";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("simcards_batches_query","New_MSISDN"); 
	$fdata["FieldType"] = 3;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "New_MSISDN"; 
		$fdata["FullName"] = "New_MSISDN";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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
		
	// the end of search options settings	

	

	
	$tdatasimcards_batches_query["New_MSISDN"] = $fdata;
//	Airtime_transered
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Airtime_transered";
	$fdata["GoodName"] = "Airtime_transered";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("simcards_batches_query","Airtime_transered"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Airtime_transered"; 
		$fdata["FullName"] = "Airtime_transered";
	
		
		
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
		
	// the end of search options settings	

	

	
	$tdatasimcards_batches_query["Airtime_transered"] = $fdata;
//	Transfer_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Transfer_date";
	$fdata["GoodName"] = "Transfer_date";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("simcards_batches_query","Transfer_date"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Transfer_date"; 
		$fdata["FullName"] = "Transfer_date";
	
		
		
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
		
	// the end of search options settings	

	

	
	$tdatasimcards_batches_query["Transfer_date"] = $fdata;
//	Activation_Commission
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Activation_Commission";
	$fdata["GoodName"] = "Activation_Commission";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("simcards_batches_query","Activation_Commission"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Activation_Commission"; 
		$fdata["FullName"] = "Activation_Commission";
	
		
		
				$fdata["FieldPermissions"] = true;
	
					
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
	
	// the end of search options settings	

	

	
	$tdatasimcards_batches_query["Activation_Commission"] = $fdata;
//	Form_Commission
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Form_Commission";
	$fdata["GoodName"] = "Form_Commission";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("simcards_batches_query","Form_Commission"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Form_Commission"; 
		$fdata["FullName"] = "Form_Commission";
	
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
	// the end of search options settings	

	

	
	$tdatasimcards_batches_query["Form_Commission"] = $fdata;
//	Form_Paid_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Form_Paid_Date";
	$fdata["GoodName"] = "Form_Paid_Date";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("simcards_batches_query","Form_Paid_Date"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Form_Paid_Date"; 
		$fdata["FullName"] = "Form_Paid_Date";
	
		
		
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
		
	// the end of search options settings	

	

	
	$tdatasimcards_batches_query["Form_Paid_Date"] = $fdata;
//	Form_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Form_Status";
	$fdata["GoodName"] = "Form_Status";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("simcards_batches_query","Form_Status"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Form_Status"; 
		$fdata["FullName"] = "Form_Status";
	
		
		
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
		
	// the end of search options settings	

	

	
	$tdatasimcards_batches_query["Form_Status"] = $fdata;
//	Swap_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Swap_Date";
	$fdata["GoodName"] = "Swap_Date";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("simcards_batches_query","Swap_Date"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Swap_Date"; 
		$fdata["FullName"] = "Swap_Date";
	
		
		
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
		
	// the end of search options settings	

	

	
	$tdatasimcards_batches_query["Swap_Date"] = $fdata;

	
$tables_data["simcards_batches_query"]=&$tdatasimcards_batches_query;
$field_labels["simcards_batches_query"] = &$fieldLabelssimcards_batches_query;
$fieldToolTips["simcards_batches_query"] = &$fieldToolTipssimcards_batches_query;
$page_titles["simcards_batches_query"] = &$pageTitlessimcards_batches_query;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["simcards_batches_query"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["simcards_batches_query"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_simcards_batches_query()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "Activator_Number AS POS_Number,  Activator_Name AS FL_or_POS_Name,  Team_Leader AS TL_Name,  Manager_Name AS SC_DSO_RDO_Name,  batch_name,  ICCID,  Event_date,  Form_Returned,  `time`,  Status AS Activation_Status,  Active_MSISDN,  New_MSISDN,  Airtime_transered,  Transfer_date,  Activation_Commission,  Form_Commission,  Form_Paid_Date,  Form_Status,  Swap_Date";
$proto3["m_strFrom"] = "FROM simcards_batches";
$proto3["m_strWhere"] = "Status ='Active'";
$proto3["m_strOrderBy"] = "";
$proto3["m_strTail"] = "";
			$proto3["cipherer"] = null;
$proto4=array();
$proto4["m_sql"] = "Status ='Active'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "simcards_batches"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "='Active'";
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
	"m_strName" => "Activator_Number",
	"m_strTable" => "simcards_batches"
));

$proto8["m_sql"] = "Activator_Number";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "POS_Number";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Activator_Name",
	"m_strTable" => "simcards_batches"
));

$proto10["m_sql"] = "Activator_Name";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "FL_or_POS_Name";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Team_Leader",
	"m_strTable" => "simcards_batches"
));

$proto12["m_sql"] = "Team_Leader";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "TL_Name";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Name",
	"m_strTable" => "simcards_batches"
));

$proto14["m_sql"] = "Manager_Name";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "SC_DSO_RDO_Name";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "batch_name",
	"m_strTable" => "simcards_batches"
));

$proto16["m_sql"] = "batch_name";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ICCID",
	"m_strTable" => "simcards_batches"
));

$proto18["m_sql"] = "ICCID";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_date",
	"m_strTable" => "simcards_batches"
));

$proto20["m_sql"] = "Event_date";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Form_Returned",
	"m_strTable" => "simcards_batches"
));

$proto22["m_sql"] = "Form_Returned";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto3["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "time",
	"m_strTable" => "simcards_batches"
));

$proto24["m_sql"] = "`time`";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto3["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "simcards_batches"
));

$proto26["m_sql"] = "Status";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "Activation_Status";
$obj = new SQLFieldListItem($proto26);

$proto3["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Active_MSISDN",
	"m_strTable" => "simcards_batches"
));

$proto28["m_sql"] = "Active_MSISDN";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto3["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "New_MSISDN",
	"m_strTable" => "simcards_batches"
));

$proto30["m_sql"] = "New_MSISDN";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto3["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Airtime_transered",
	"m_strTable" => "simcards_batches"
));

$proto32["m_sql"] = "Airtime_transered";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto3["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Transfer_date",
	"m_strTable" => "simcards_batches"
));

$proto34["m_sql"] = "Transfer_date";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto3["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Activation_Commission",
	"m_strTable" => "simcards_batches"
));

$proto36["m_sql"] = "Activation_Commission";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto3["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Form_Commission",
	"m_strTable" => "simcards_batches"
));

$proto38["m_sql"] = "Form_Commission";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto3["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Form_Paid_Date",
	"m_strTable" => "simcards_batches"
));

$proto40["m_sql"] = "Form_Paid_Date";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto3["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Form_Status",
	"m_strTable" => "simcards_batches"
));

$proto42["m_sql"] = "Form_Status";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto3["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Swap_Date",
	"m_strTable" => "simcards_batches"
));

$proto44["m_sql"] = "Swap_Date";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "simcards_batches";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "ID";
$proto47["m_columns"][] = "batch_name";
$proto47["m_columns"][] = "ICCID";
$proto47["m_columns"][] = "Status";
$proto47["m_columns"][] = "Manager_Name";
$proto47["m_columns"][] = "Manager_Title";
$proto47["m_columns"][] = "Activator_Number";
$proto47["m_columns"][] = "Activator_Name";
$proto47["m_columns"][] = "Team_Leader";
$proto47["m_columns"][] = "Event_date";
$proto47["m_columns"][] = "time";
$proto47["m_columns"][] = "Active_MSISDN";
$proto47["m_columns"][] = "New_MSISDN";
$proto47["m_columns"][] = "Swap_Date";
$proto47["m_columns"][] = "Airtime_transered";
$proto47["m_columns"][] = "Transfer_date";
$proto47["m_columns"][] = "Activation_Commission";
$proto47["m_columns"][] = "Form_Commission";
$proto47["m_columns"][] = "Form_Paid_Date";
$proto47["m_columns"][] = "Form_Returned";
$proto47["m_columns"][] = "Form_Status";
$proto47["m_columns"][] = "Form_Date";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "simcards_batches";
$proto46["m_alias"] = "";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_simcards_batches_query = createSqlQuery_simcards_batches_query();

																			
	
$tdatasimcards_batches_query[".sqlquery"] = $queryData_simcards_batches_query;

$tableEvents["simcards_batches_query"] = new eventsBase;
$tdatasimcards_batches_query[".hasEvents"] = false;

$cipherer = new RunnerCipherer("simcards_batches_query");

?>