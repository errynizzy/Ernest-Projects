<?php
require_once(getabspath("classes/cipherer.php"));




$tdataoutside_stock = array();	
	$tdataoutside_stock[".truncateText"] = true;
	$tdataoutside_stock[".NumberOfChars"] = 80; 
	$tdataoutside_stock[".ShortName"] = "outside_stock";
	$tdataoutside_stock[".OwnerID"] = "";
	$tdataoutside_stock[".OriginalTable"] = "outside_stock";

//	field labels
$fieldLabelsoutside_stock = array();
$fieldToolTipsoutside_stock = array();
$pageTitlesoutside_stock = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsoutside_stock["English"] = array();
	$fieldToolTipsoutside_stock["English"] = array();
	$pageTitlesoutside_stock["English"] = array();
	$fieldLabelsoutside_stock["English"]["ID"] = "ID";
	$fieldToolTipsoutside_stock["English"]["ID"] = "";
	$fieldLabelsoutside_stock["English"]["ICCID"] = "ICCID";
	$fieldToolTipsoutside_stock["English"]["ICCID"] = "";
	$fieldLabelsoutside_stock["English"]["Status"] = "Status";
	$fieldToolTipsoutside_stock["English"]["Status"] = "";
	$fieldLabelsoutside_stock["English"]["Manager_Name"] = "Manager Name";
	$fieldToolTipsoutside_stock["English"]["Manager_Name"] = "";
	$fieldLabelsoutside_stock["English"]["Activator_Number"] = "Activator Number";
	$fieldToolTipsoutside_stock["English"]["Activator_Number"] = "";
	$fieldLabelsoutside_stock["English"]["Activator_Name"] = "Activator Name";
	$fieldToolTipsoutside_stock["English"]["Activator_Name"] = "";
	$fieldLabelsoutside_stock["English"]["Team_Leader"] = "Team Leader";
	$fieldToolTipsoutside_stock["English"]["Team_Leader"] = "";
	$fieldLabelsoutside_stock["English"]["Event_date"] = "Event Date";
	$fieldToolTipsoutside_stock["English"]["Event_date"] = "";
	$fieldLabelsoutside_stock["English"]["time"] = "Time";
	$fieldToolTipsoutside_stock["English"]["time"] = "";
	$fieldLabelsoutside_stock["English"]["Active_MSISDN"] = "Active MSISDN";
	$fieldToolTipsoutside_stock["English"]["Active_MSISDN"] = "";
	$fieldLabelsoutside_stock["English"]["New_MSISDN"] = "New MSISDN";
	$fieldToolTipsoutside_stock["English"]["New_MSISDN"] = "";
	$fieldLabelsoutside_stock["English"]["Airtime_transered"] = "Airtime Transered";
	$fieldToolTipsoutside_stock["English"]["Airtime_transered"] = "";
	$fieldLabelsoutside_stock["English"]["Form_Returned"] = "Form Returned";
	$fieldToolTipsoutside_stock["English"]["Form_Returned"] = "";
	$fieldLabelsoutside_stock["English"]["Form_Status"] = "Form Status";
	$fieldToolTipsoutside_stock["English"]["Form_Status"] = "";
	$fieldLabelsoutside_stock["English"]["Form_Date"] = "Form Date";
	$fieldToolTipsoutside_stock["English"]["Form_Date"] = "";
	$fieldLabelsoutside_stock["English"]["Swap_Date"] = "Swap Date";
	$fieldToolTipsoutside_stock["English"]["Swap_Date"] = "";
	$fieldLabelsoutside_stock["English"]["Transfer_date"] = "Transfer Date";
	$fieldToolTipsoutside_stock["English"]["Transfer_date"] = "";
	$fieldLabelsoutside_stock["English"]["Activation_Commission"] = "Activation Commission";
	$fieldToolTipsoutside_stock["English"]["Activation_Commission"] = "";
	$fieldLabelsoutside_stock["English"]["Form_Commission"] = "Form Commission";
	$fieldToolTipsoutside_stock["English"]["Form_Commission"] = "";
	$fieldLabelsoutside_stock["English"]["Form_Paid_Date"] = "Form Paid Date";
	$fieldToolTipsoutside_stock["English"]["Form_Paid_Date"] = "";
	$fieldLabelsoutside_stock["English"]["Manager_Title"] = "Manager Title";
	$fieldToolTipsoutside_stock["English"]["Manager_Title"] = "";
	if (count($fieldToolTipsoutside_stock["English"]))
		$tdataoutside_stock[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsoutside_stock[""] = array();
	$fieldToolTipsoutside_stock[""] = array();
	$pageTitlesoutside_stock[""] = array();
	if (count($fieldToolTipsoutside_stock[""]))
		$tdataoutside_stock[".isUseToolTips"] = true;
}
	
	
	$tdataoutside_stock[".NCSearch"] = true;



$tdataoutside_stock[".shortTableName"] = "outside_stock";
$tdataoutside_stock[".nSecOptions"] = 0;
$tdataoutside_stock[".recsPerRowList"] = 1;
$tdataoutside_stock[".mainTableOwnerID"] = "";
$tdataoutside_stock[".moveNext"] = 1;
$tdataoutside_stock[".nType"] = 0;

$tdataoutside_stock[".strOriginalTableName"] = "outside_stock";

	


$tdataoutside_stock[".showAddInPopup"] = true;

$tdataoutside_stock[".showEditInPopup"] = true;

$tdataoutside_stock[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
			;
$popupPagesLayoutNames["add"] = "view2";
			;
$popupPagesLayoutNames["edit"] = "view2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdataoutside_stock[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataoutside_stock[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataoutside_stock[".listAjax"] = true;
else 
	$tdataoutside_stock[".listAjax"] = false;

	$tdataoutside_stock[".audit"] = false;

	$tdataoutside_stock[".locking"] = false;

$tdataoutside_stock[".inlineEdit"] = true;
$tdataoutside_stock[".view"] = true;

$tdataoutside_stock[".exportTo"] = true;



$tdataoutside_stock[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataoutside_stock[".searchSaving"] = false;
//

$tdataoutside_stock[".showSearchPanel"] = true;
		$tdataoutside_stock[".flexibleSearch"] = true;		

if (isMobile())
	$tdataoutside_stock[".isUseAjaxSuggest"] = false;
else 
	$tdataoutside_stock[".isUseAjaxSuggest"] = true;

$tdataoutside_stock[".rowHighlite"] = true;



$tdataoutside_stock[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoutside_stock[".isUseTimeForSearch"] = false;





$tdataoutside_stock[".allSearchFields"] = array();
$tdataoutside_stock[".filterFields"] = array();
$tdataoutside_stock[".requiredSearchFields"] = array();

$tdataoutside_stock[".allSearchFields"][] = "Manager_Title";
		$tdataoutside_stock[".allSearchFields"][] = "Activator_Number";
		$tdataoutside_stock[".allSearchFields"][] = "Activator_Name";
		$tdataoutside_stock[".allSearchFields"][] = "Team_Leader";
		$tdataoutside_stock[".allSearchFields"][] = "Manager_Name";
		$tdataoutside_stock[".allSearchFields"][] = "Event_date";
		$tdataoutside_stock[".allSearchFields"][] = "time";
		$tdataoutside_stock[".allSearchFields"][] = "Status";
		$tdataoutside_stock[".allSearchFields"][] = "ICCID";
		$tdataoutside_stock[".allSearchFields"][] = "Active_MSISDN";
		$tdataoutside_stock[".allSearchFields"][] = "New_MSISDN";
		$tdataoutside_stock[".allSearchFields"][] = "Swap_Date";
		$tdataoutside_stock[".allSearchFields"][] = "Airtime_transered";
		$tdataoutside_stock[".allSearchFields"][] = "Transfer_date";
		$tdataoutside_stock[".allSearchFields"][] = "Activation_Commission";
		$tdataoutside_stock[".allSearchFields"][] = "Form_Returned";
		$tdataoutside_stock[".allSearchFields"][] = "Form_Status";
		$tdataoutside_stock[".allSearchFields"][] = "Form_Commission";
		$tdataoutside_stock[".allSearchFields"][] = "Form_Paid_Date";
		
$tdataoutside_stock[".googleLikeFields"] = array();
$tdataoutside_stock[".googleLikeFields"][] = "ID";
$tdataoutside_stock[".googleLikeFields"][] = "ICCID";
$tdataoutside_stock[".googleLikeFields"][] = "Status";
$tdataoutside_stock[".googleLikeFields"][] = "Manager_Name";
$tdataoutside_stock[".googleLikeFields"][] = "Manager_Title";
$tdataoutside_stock[".googleLikeFields"][] = "Activator_Number";
$tdataoutside_stock[".googleLikeFields"][] = "Activator_Name";
$tdataoutside_stock[".googleLikeFields"][] = "Team_Leader";
$tdataoutside_stock[".googleLikeFields"][] = "Event_date";
$tdataoutside_stock[".googleLikeFields"][] = "time";
$tdataoutside_stock[".googleLikeFields"][] = "Active_MSISDN";
$tdataoutside_stock[".googleLikeFields"][] = "New_MSISDN";
$tdataoutside_stock[".googleLikeFields"][] = "Swap_Date";
$tdataoutside_stock[".googleLikeFields"][] = "Airtime_transered";
$tdataoutside_stock[".googleLikeFields"][] = "Transfer_date";
$tdataoutside_stock[".googleLikeFields"][] = "Activation_Commission";
$tdataoutside_stock[".googleLikeFields"][] = "Form_Commission";
$tdataoutside_stock[".googleLikeFields"][] = "Form_Paid_Date";
$tdataoutside_stock[".googleLikeFields"][] = "Form_Returned";
$tdataoutside_stock[".googleLikeFields"][] = "Form_Status";
$tdataoutside_stock[".googleLikeFields"][] = "Form_Date";


$tdataoutside_stock[".advSearchFields"] = array();
$tdataoutside_stock[".advSearchFields"][] = "Manager_Title";
$tdataoutside_stock[".advSearchFields"][] = "Activator_Number";
$tdataoutside_stock[".advSearchFields"][] = "Activator_Name";
$tdataoutside_stock[".advSearchFields"][] = "Team_Leader";
$tdataoutside_stock[".advSearchFields"][] = "Manager_Name";
$tdataoutside_stock[".advSearchFields"][] = "Event_date";
$tdataoutside_stock[".advSearchFields"][] = "time";
$tdataoutside_stock[".advSearchFields"][] = "Status";
$tdataoutside_stock[".advSearchFields"][] = "ICCID";
$tdataoutside_stock[".advSearchFields"][] = "Active_MSISDN";
$tdataoutside_stock[".advSearchFields"][] = "New_MSISDN";
$tdataoutside_stock[".advSearchFields"][] = "Swap_Date";
$tdataoutside_stock[".advSearchFields"][] = "Airtime_transered";
$tdataoutside_stock[".advSearchFields"][] = "Transfer_date";
$tdataoutside_stock[".advSearchFields"][] = "Activation_Commission";
$tdataoutside_stock[".advSearchFields"][] = "Form_Returned";
$tdataoutside_stock[".advSearchFields"][] = "Form_Status";
$tdataoutside_stock[".advSearchFields"][] = "Form_Commission";
$tdataoutside_stock[".advSearchFields"][] = "Form_Paid_Date";

$tdataoutside_stock[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdataoutside_stock[".pageSize"] = 20;

$tdataoutside_stock[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataoutside_stock[".strOrderBy"] = $tstrOrderBy;

$tdataoutside_stock[".orderindexes"] = array();

$tdataoutside_stock[".sqlHead"] = "SELECT ID,   ICCID,   Status,   Manager_Name,   Manager_Title,   Activator_Number,   Activator_Name,   Team_Leader,   Event_date,   `time`,   Active_MSISDN,   New_MSISDN,   Swap_Date,   Airtime_transered,   Transfer_date,   Activation_Commission,   Form_Commission,   Form_Paid_Date,   Form_Returned,   Form_Status,   Form_Date";
$tdataoutside_stock[".sqlFrom"] = "FROM outside_stock";
$tdataoutside_stock[".sqlWhereExpr"] = "";
$tdataoutside_stock[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoutside_stock[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoutside_stock[".arrGroupsPerPage"] = $arrGPP;

$tdataoutside_stock[".highlightSearchResults"] = true;

$tableKeysoutside_stock = array();
$tableKeysoutside_stock[] = "ICCID";
$tdataoutside_stock[".Keys"] = $tableKeysoutside_stock;

$tdataoutside_stock[".listFields"] = array();
$tdataoutside_stock[".listFields"][] = "Manager_Title";
$tdataoutside_stock[".listFields"][] = "Activator_Number";
$tdataoutside_stock[".listFields"][] = "Activator_Name";
$tdataoutside_stock[".listFields"][] = "Team_Leader";
$tdataoutside_stock[".listFields"][] = "Manager_Name";
$tdataoutside_stock[".listFields"][] = "Event_date";
$tdataoutside_stock[".listFields"][] = "time";
$tdataoutside_stock[".listFields"][] = "Status";
$tdataoutside_stock[".listFields"][] = "ICCID";
$tdataoutside_stock[".listFields"][] = "Active_MSISDN";
$tdataoutside_stock[".listFields"][] = "New_MSISDN";
$tdataoutside_stock[".listFields"][] = "Swap_Date";
$tdataoutside_stock[".listFields"][] = "Airtime_transered";
$tdataoutside_stock[".listFields"][] = "Transfer_date";
$tdataoutside_stock[".listFields"][] = "Activation_Commission";
$tdataoutside_stock[".listFields"][] = "Form_Returned";
$tdataoutside_stock[".listFields"][] = "Form_Status";
$tdataoutside_stock[".listFields"][] = "Form_Commission";
$tdataoutside_stock[".listFields"][] = "Form_Paid_Date";

$tdataoutside_stock[".hideMobileList"] = array();


$tdataoutside_stock[".viewFields"] = array();
$tdataoutside_stock[".viewFields"][] = "Manager_Title";
$tdataoutside_stock[".viewFields"][] = "Activator_Number";
$tdataoutside_stock[".viewFields"][] = "Activator_Name";
$tdataoutside_stock[".viewFields"][] = "Team_Leader";
$tdataoutside_stock[".viewFields"][] = "Manager_Name";
$tdataoutside_stock[".viewFields"][] = "Event_date";
$tdataoutside_stock[".viewFields"][] = "time";
$tdataoutside_stock[".viewFields"][] = "Status";
$tdataoutside_stock[".viewFields"][] = "ICCID";
$tdataoutside_stock[".viewFields"][] = "Active_MSISDN";
$tdataoutside_stock[".viewFields"][] = "New_MSISDN";
$tdataoutside_stock[".viewFields"][] = "Swap_Date";
$tdataoutside_stock[".viewFields"][] = "Airtime_transered";
$tdataoutside_stock[".viewFields"][] = "Transfer_date";
$tdataoutside_stock[".viewFields"][] = "Activation_Commission";
$tdataoutside_stock[".viewFields"][] = "Form_Returned";
$tdataoutside_stock[".viewFields"][] = "Form_Status";
$tdataoutside_stock[".viewFields"][] = "Form_Commission";
$tdataoutside_stock[".viewFields"][] = "Form_Paid_Date";

$tdataoutside_stock[".addFields"] = array();

$tdataoutside_stock[".inlineAddFields"] = array();

$tdataoutside_stock[".editFields"] = array();

$tdataoutside_stock[".inlineEditFields"] = array();

$tdataoutside_stock[".exportFields"] = array();
$tdataoutside_stock[".exportFields"][] = "Manager_Title";
$tdataoutside_stock[".exportFields"][] = "Activator_Number";
$tdataoutside_stock[".exportFields"][] = "Activator_Name";
$tdataoutside_stock[".exportFields"][] = "Team_Leader";
$tdataoutside_stock[".exportFields"][] = "Manager_Name";
$tdataoutside_stock[".exportFields"][] = "Event_date";
$tdataoutside_stock[".exportFields"][] = "time";
$tdataoutside_stock[".exportFields"][] = "Status";
$tdataoutside_stock[".exportFields"][] = "ICCID";
$tdataoutside_stock[".exportFields"][] = "Active_MSISDN";
$tdataoutside_stock[".exportFields"][] = "New_MSISDN";
$tdataoutside_stock[".exportFields"][] = "Swap_Date";
$tdataoutside_stock[".exportFields"][] = "Airtime_transered";
$tdataoutside_stock[".exportFields"][] = "Transfer_date";
$tdataoutside_stock[".exportFields"][] = "Activation_Commission";
$tdataoutside_stock[".exportFields"][] = "Form_Returned";
$tdataoutside_stock[".exportFields"][] = "Form_Status";
$tdataoutside_stock[".exportFields"][] = "Form_Commission";
$tdataoutside_stock[".exportFields"][] = "Form_Paid_Date";

$tdataoutside_stock[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "outside_stock";
	$fdata["Label"] = GetFieldLabel("outside_stock","ID"); 
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
	
	
	
	

	

	
	$tdataoutside_stock["ID"] = $fdata;
//	ICCID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ICCID";
	$fdata["GoodName"] = "ICCID";
	$fdata["ownerTable"] = "outside_stock";
	$fdata["Label"] = GetFieldLabel("outside_stock","ICCID"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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
			$edata["EditParams"].= " maxlength=18";
	
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

	

	
	$tdataoutside_stock["ICCID"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "outside_stock";
	$fdata["Label"] = GetFieldLabel("outside_stock","Status"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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

	

	
	$tdataoutside_stock["Status"] = $fdata;
//	Manager_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Manager_Name";
	$fdata["GoodName"] = "Manager_Name";
	$fdata["ownerTable"] = "outside_stock";
	$fdata["Label"] = GetFieldLabel("outside_stock","Manager_Name"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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

	

	
	$tdataoutside_stock["Manager_Name"] = $fdata;
//	Manager_Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Manager_Title";
	$fdata["GoodName"] = "Manager_Title";
	$fdata["ownerTable"] = "outside_stock";
	$fdata["Label"] = GetFieldLabel("outside_stock","Manager_Title"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Manager_Title"; 
		$fdata["FullName"] = "Manager_Title";
	
		
		
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
			$edata["EditParams"].= " maxlength=10";
	
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

	

	
	$tdataoutside_stock["Manager_Title"] = $fdata;
//	Activator_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Activator_Number";
	$fdata["GoodName"] = "Activator_Number";
	$fdata["ownerTable"] = "outside_stock";
	$fdata["Label"] = GetFieldLabel("outside_stock","Activator_Number"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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

	

	
	$tdataoutside_stock["Activator_Number"] = $fdata;
//	Activator_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Activator_Name";
	$fdata["GoodName"] = "Activator_Name";
	$fdata["ownerTable"] = "outside_stock";
	$fdata["Label"] = GetFieldLabel("outside_stock","Activator_Name"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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

	

	
	$tdataoutside_stock["Activator_Name"] = $fdata;
//	Team_Leader
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Team_Leader";
	$fdata["GoodName"] = "Team_Leader";
	$fdata["ownerTable"] = "outside_stock";
	$fdata["Label"] = GetFieldLabel("outside_stock","Team_Leader"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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

	

	
	$tdataoutside_stock["Team_Leader"] = $fdata;
//	Event_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Event_date";
	$fdata["GoodName"] = "Event_date";
	$fdata["ownerTable"] = "outside_stock";
	$fdata["Label"] = GetFieldLabel("outside_stock","Event_date"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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

	

	
	$tdataoutside_stock["Event_date"] = $fdata;
//	time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "time";
	$fdata["GoodName"] = "time";
	$fdata["ownerTable"] = "outside_stock";
	$fdata["Label"] = GetFieldLabel("outside_stock","time"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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

	

	
	$tdataoutside_stock["time"] = $fdata;
//	Active_MSISDN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Active_MSISDN";
	$fdata["GoodName"] = "Active_MSISDN";
	$fdata["ownerTable"] = "outside_stock";
	$fdata["Label"] = GetFieldLabel("outside_stock","Active_MSISDN"); 
	$fdata["FieldType"] = 3;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataoutside_stock["Active_MSISDN"] = $fdata;
//	New_MSISDN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "New_MSISDN";
	$fdata["GoodName"] = "New_MSISDN";
	$fdata["ownerTable"] = "outside_stock";
	$fdata["Label"] = GetFieldLabel("outside_stock","New_MSISDN"); 
	$fdata["FieldType"] = 3;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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
			$edata["EditParams"].= " maxlength=10";
	
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

	

	
	$tdataoutside_stock["New_MSISDN"] = $fdata;
//	Swap_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Swap_Date";
	$fdata["GoodName"] = "Swap_Date";
	$fdata["ownerTable"] = "outside_stock";
	$fdata["Label"] = GetFieldLabel("outside_stock","Swap_Date"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataoutside_stock["Swap_Date"] = $fdata;
//	Airtime_transered
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Airtime_transered";
	$fdata["GoodName"] = "Airtime_transered";
	$fdata["ownerTable"] = "outside_stock";
	$fdata["Label"] = GetFieldLabel("outside_stock","Airtime_transered"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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

	

	
	$tdataoutside_stock["Airtime_transered"] = $fdata;
//	Transfer_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Transfer_date";
	$fdata["GoodName"] = "Transfer_date";
	$fdata["ownerTable"] = "outside_stock";
	$fdata["Label"] = GetFieldLabel("outside_stock","Transfer_date"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataoutside_stock["Transfer_date"] = $fdata;
//	Activation_Commission
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Activation_Commission";
	$fdata["GoodName"] = "Activation_Commission";
	$fdata["ownerTable"] = "outside_stock";
	$fdata["Label"] = GetFieldLabel("outside_stock","Activation_Commission"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Activation_Commission"; 
		$fdata["FullName"] = "Activation_Commission";
	
		
		
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

	

	
	$tdataoutside_stock["Activation_Commission"] = $fdata;
//	Form_Commission
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Form_Commission";
	$fdata["GoodName"] = "Form_Commission";
	$fdata["ownerTable"] = "outside_stock";
	$fdata["Label"] = GetFieldLabel("outside_stock","Form_Commission"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataoutside_stock["Form_Commission"] = $fdata;
//	Form_Paid_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Form_Paid_Date";
	$fdata["GoodName"] = "Form_Paid_Date";
	$fdata["ownerTable"] = "outside_stock";
	$fdata["Label"] = GetFieldLabel("outside_stock","Form_Paid_Date"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataoutside_stock["Form_Paid_Date"] = $fdata;
//	Form_Returned
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Form_Returned";
	$fdata["GoodName"] = "Form_Returned";
	$fdata["ownerTable"] = "outside_stock";
	$fdata["Label"] = GetFieldLabel("outside_stock","Form_Returned"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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
			$edata["EditParams"].= " maxlength=4";
	
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

	

	
	$tdataoutside_stock["Form_Returned"] = $fdata;
//	Form_Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Form_Status";
	$fdata["GoodName"] = "Form_Status";
	$fdata["ownerTable"] = "outside_stock";
	$fdata["Label"] = GetFieldLabel("outside_stock","Form_Status"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
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
			$edata["EditParams"].= " maxlength=2";
	
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

	

	
	$tdataoutside_stock["Form_Status"] = $fdata;
//	Form_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Form_Date";
	$fdata["GoodName"] = "Form_Date";
	$fdata["ownerTable"] = "outside_stock";
	$fdata["Label"] = GetFieldLabel("outside_stock","Form_Date"); 
	$fdata["FieldType"] = 200;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Form_Date"; 
		$fdata["FullName"] = "Form_Date";
	
		
		
				
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
	
	
	
	

	

	
	$tdataoutside_stock["Form_Date"] = $fdata;

	
$tables_data["outside_stock"]=&$tdataoutside_stock;
$field_labels["outside_stock"] = &$fieldLabelsoutside_stock;
$fieldToolTips["outside_stock"] = &$fieldToolTipsoutside_stock;
$page_titles["outside_stock"] = &$pageTitlesoutside_stock;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["outside_stock"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["outside_stock"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_outside_stock()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "ID,   ICCID,   Status,   Manager_Name,   Manager_Title,   Activator_Number,   Activator_Name,   Team_Leader,   Event_date,   `time`,   Active_MSISDN,   New_MSISDN,   Swap_Date,   Airtime_transered,   Transfer_date,   Activation_Commission,   Form_Commission,   Form_Paid_Date,   Form_Returned,   Form_Status,   Form_Date";
$proto3["m_strFrom"] = "FROM outside_stock";
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
	"m_strTable" => "outside_stock"
));

$proto8["m_sql"] = "ID";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ICCID",
	"m_strTable" => "outside_stock"
));

$proto10["m_sql"] = "ICCID";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "outside_stock"
));

$proto12["m_sql"] = "Status";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Name",
	"m_strTable" => "outside_stock"
));

$proto14["m_sql"] = "Manager_Name";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "outside_stock"
));

$proto16["m_sql"] = "Manager_Title";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Activator_Number",
	"m_strTable" => "outside_stock"
));

$proto18["m_sql"] = "Activator_Number";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Activator_Name",
	"m_strTable" => "outside_stock"
));

$proto20["m_sql"] = "Activator_Name";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Team_Leader",
	"m_strTable" => "outside_stock"
));

$proto22["m_sql"] = "Team_Leader";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto3["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_date",
	"m_strTable" => "outside_stock"
));

$proto24["m_sql"] = "Event_date";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto3["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "time",
	"m_strTable" => "outside_stock"
));

$proto26["m_sql"] = "`time`";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto3["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Active_MSISDN",
	"m_strTable" => "outside_stock"
));

$proto28["m_sql"] = "Active_MSISDN";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto3["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "New_MSISDN",
	"m_strTable" => "outside_stock"
));

$proto30["m_sql"] = "New_MSISDN";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto3["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Swap_Date",
	"m_strTable" => "outside_stock"
));

$proto32["m_sql"] = "Swap_Date";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto3["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Airtime_transered",
	"m_strTable" => "outside_stock"
));

$proto34["m_sql"] = "Airtime_transered";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto3["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Transfer_date",
	"m_strTable" => "outside_stock"
));

$proto36["m_sql"] = "Transfer_date";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto3["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Activation_Commission",
	"m_strTable" => "outside_stock"
));

$proto38["m_sql"] = "Activation_Commission";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto3["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Form_Commission",
	"m_strTable" => "outside_stock"
));

$proto40["m_sql"] = "Form_Commission";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto3["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Form_Paid_Date",
	"m_strTable" => "outside_stock"
));

$proto42["m_sql"] = "Form_Paid_Date";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto3["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Form_Returned",
	"m_strTable" => "outside_stock"
));

$proto44["m_sql"] = "Form_Returned";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto3["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Form_Status",
	"m_strTable" => "outside_stock"
));

$proto46["m_sql"] = "Form_Status";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto3["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Form_Date",
	"m_strTable" => "outside_stock"
));

$proto48["m_sql"] = "Form_Date";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "outside_stock";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "ID";
$proto51["m_columns"][] = "ICCID";
$proto51["m_columns"][] = "Status";
$proto51["m_columns"][] = "Manager_Name";
$proto51["m_columns"][] = "Manager_Title";
$proto51["m_columns"][] = "Activator_Number";
$proto51["m_columns"][] = "Activator_Name";
$proto51["m_columns"][] = "Team_Leader";
$proto51["m_columns"][] = "Event_date";
$proto51["m_columns"][] = "time";
$proto51["m_columns"][] = "Active_MSISDN";
$proto51["m_columns"][] = "New_MSISDN";
$proto51["m_columns"][] = "Swap_Date";
$proto51["m_columns"][] = "Airtime_transered";
$proto51["m_columns"][] = "Transfer_date";
$proto51["m_columns"][] = "Activation_Commission";
$proto51["m_columns"][] = "Form_Commission";
$proto51["m_columns"][] = "Form_Paid_Date";
$proto51["m_columns"][] = "Form_Returned";
$proto51["m_columns"][] = "Form_Status";
$proto51["m_columns"][] = "Form_Date";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "outside_stock";
$proto50["m_alias"] = "";
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_outside_stock = createSqlQuery_outside_stock();

																					
	
$tdataoutside_stock[".sqlquery"] = $queryData_outside_stock;

$tableEvents["outside_stock"] = new eventsBase;
$tdataoutside_stock[".hasEvents"] = false;

$cipherer = new RunnerCipherer("outside_stock");

?>