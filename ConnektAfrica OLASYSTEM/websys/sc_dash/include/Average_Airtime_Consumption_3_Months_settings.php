<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAverage_Airtime_Consumption_3_Months = array();	
	$tdataAverage_Airtime_Consumption_3_Months[".truncateText"] = true;
	$tdataAverage_Airtime_Consumption_3_Months[".NumberOfChars"] = 80; 
	$tdataAverage_Airtime_Consumption_3_Months[".ShortName"] = "Average_Airtime_Consumption_3_Months";
	$tdataAverage_Airtime_Consumption_3_Months[".OwnerID"] = "";
	$tdataAverage_Airtime_Consumption_3_Months[".OriginalTable"] = "activated_sims";

//	field labels
$fieldLabelsAverage_Airtime_Consumption_3_Months = array();
$fieldToolTipsAverage_Airtime_Consumption_3_Months = array();
$pageTitlesAverage_Airtime_Consumption_3_Months = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAverage_Airtime_Consumption_3_Months["English"] = array();
	$fieldToolTipsAverage_Airtime_Consumption_3_Months["English"] = array();
	$pageTitlesAverage_Airtime_Consumption_3_Months["English"] = array();
	$fieldLabelsAverage_Airtime_Consumption_3_Months["English"]["Activator_Number"] = "Activator Number";
	$fieldToolTipsAverage_Airtime_Consumption_3_Months["English"]["Activator_Number"] = "";
	$fieldLabelsAverage_Airtime_Consumption_3_Months["English"]["Subscriber_Number"] = "Subscriber Number";
	$fieldToolTipsAverage_Airtime_Consumption_3_Months["English"]["Subscriber_Number"] = "";
	$fieldLabelsAverage_Airtime_Consumption_3_Months["English"]["Activator_Name"] = "Activator Name";
	$fieldToolTipsAverage_Airtime_Consumption_3_Months["English"]["Activator_Name"] = "";
	$fieldLabelsAverage_Airtime_Consumption_3_Months["English"]["Manager_Name"] = "Manager Name";
	$fieldToolTipsAverage_Airtime_Consumption_3_Months["English"]["Manager_Name"] = "";
	$fieldLabelsAverage_Airtime_Consumption_3_Months["English"]["Title"] = "Title";
	$fieldToolTipsAverage_Airtime_Consumption_3_Months["English"]["Title"] = "";
	$fieldLabelsAverage_Airtime_Consumption_3_Months["English"]["Date_Activated"] = "Date Activated";
	$fieldToolTipsAverage_Airtime_Consumption_3_Months["English"]["Date_Activated"] = "";
	$fieldLabelsAverage_Airtime_Consumption_3_Months["English"]["Consumption"] = "Consumption";
	$fieldToolTipsAverage_Airtime_Consumption_3_Months["English"]["Consumption"] = "";
	$fieldLabelsAverage_Airtime_Consumption_3_Months["English"]["End_of_3_Month"] = "End Of 3 Month";
	$fieldToolTipsAverage_Airtime_Consumption_3_Months["English"]["End_of_3_Month"] = "";
	if (count($fieldToolTipsAverage_Airtime_Consumption_3_Months["English"]))
		$tdataAverage_Airtime_Consumption_3_Months[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAverage_Airtime_Consumption_3_Months[""] = array();
	$fieldToolTipsAverage_Airtime_Consumption_3_Months[""] = array();
	$pageTitlesAverage_Airtime_Consumption_3_Months[""] = array();
	if (count($fieldToolTipsAverage_Airtime_Consumption_3_Months[""]))
		$tdataAverage_Airtime_Consumption_3_Months[".isUseToolTips"] = true;
}
	
	
	$tdataAverage_Airtime_Consumption_3_Months[".NCSearch"] = true;



$tdataAverage_Airtime_Consumption_3_Months[".shortTableName"] = "Average_Airtime_Consumption_3_Months";
$tdataAverage_Airtime_Consumption_3_Months[".nSecOptions"] = 0;
$tdataAverage_Airtime_Consumption_3_Months[".recsPerRowList"] = 1;
$tdataAverage_Airtime_Consumption_3_Months[".mainTableOwnerID"] = "";
$tdataAverage_Airtime_Consumption_3_Months[".moveNext"] = 1;
$tdataAverage_Airtime_Consumption_3_Months[".nType"] = 1;

$tdataAverage_Airtime_Consumption_3_Months[".strOriginalTableName"] = "activated_sims";




$tdataAverage_Airtime_Consumption_3_Months[".showAddInPopup"] = false;

$tdataAverage_Airtime_Consumption_3_Months[".showEditInPopup"] = false;

$tdataAverage_Airtime_Consumption_3_Months[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAverage_Airtime_Consumption_3_Months[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAverage_Airtime_Consumption_3_Months[".fieldsForRegister"] = array();

$tdataAverage_Airtime_Consumption_3_Months[".listAjax"] = false;

	$tdataAverage_Airtime_Consumption_3_Months[".audit"] = false;

	$tdataAverage_Airtime_Consumption_3_Months[".locking"] = false;


$tdataAverage_Airtime_Consumption_3_Months[".list"] = true;

$tdataAverage_Airtime_Consumption_3_Months[".inlineAdd"] = true;

$tdataAverage_Airtime_Consumption_3_Months[".import"] = true;

$tdataAverage_Airtime_Consumption_3_Months[".exportTo"] = true;

$tdataAverage_Airtime_Consumption_3_Months[".printFriendly"] = true;


$tdataAverage_Airtime_Consumption_3_Months[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataAverage_Airtime_Consumption_3_Months[".searchSaving"] = false;
//

$tdataAverage_Airtime_Consumption_3_Months[".showSearchPanel"] = true;
		$tdataAverage_Airtime_Consumption_3_Months[".flexibleSearch"] = true;		

if (isMobile())
	$tdataAverage_Airtime_Consumption_3_Months[".isUseAjaxSuggest"] = false;
else 
	$tdataAverage_Airtime_Consumption_3_Months[".isUseAjaxSuggest"] = true;

$tdataAverage_Airtime_Consumption_3_Months[".rowHighlite"] = true;



$tdataAverage_Airtime_Consumption_3_Months[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAverage_Airtime_Consumption_3_Months[".isUseTimeForSearch"] = false;





$tdataAverage_Airtime_Consumption_3_Months[".allSearchFields"] = array();
$tdataAverage_Airtime_Consumption_3_Months[".filterFields"] = array();
$tdataAverage_Airtime_Consumption_3_Months[".requiredSearchFields"] = array();

$tdataAverage_Airtime_Consumption_3_Months[".allSearchFields"][] = "Activator_Number";
	$tdataAverage_Airtime_Consumption_3_Months[".allSearchFields"][] = "Activator_Name";
	$tdataAverage_Airtime_Consumption_3_Months[".allSearchFields"][] = "Manager_Name";
	$tdataAverage_Airtime_Consumption_3_Months[".allSearchFields"][] = "Title";
	$tdataAverage_Airtime_Consumption_3_Months[".allSearchFields"][] = "Subscriber_Number";
	$tdataAverage_Airtime_Consumption_3_Months[".allSearchFields"][] = "Date_Activated";
	$tdataAverage_Airtime_Consumption_3_Months[".allSearchFields"][] = "Consumption";
	$tdataAverage_Airtime_Consumption_3_Months[".allSearchFields"][] = "End_of_3_Month";
	

$tdataAverage_Airtime_Consumption_3_Months[".googleLikeFields"] = array();
$tdataAverage_Airtime_Consumption_3_Months[".googleLikeFields"][] = "Activator_Number";
$tdataAverage_Airtime_Consumption_3_Months[".googleLikeFields"][] = "Activator_Name";
$tdataAverage_Airtime_Consumption_3_Months[".googleLikeFields"][] = "Manager_Name";
$tdataAverage_Airtime_Consumption_3_Months[".googleLikeFields"][] = "Title";
$tdataAverage_Airtime_Consumption_3_Months[".googleLikeFields"][] = "Subscriber_Number";
$tdataAverage_Airtime_Consumption_3_Months[".googleLikeFields"][] = "Date_Activated";
$tdataAverage_Airtime_Consumption_3_Months[".googleLikeFields"][] = "Consumption";
$tdataAverage_Airtime_Consumption_3_Months[".googleLikeFields"][] = "End_of_3_Month";


$tdataAverage_Airtime_Consumption_3_Months[".advSearchFields"] = array();
$tdataAverage_Airtime_Consumption_3_Months[".advSearchFields"][] = "Activator_Number";
$tdataAverage_Airtime_Consumption_3_Months[".advSearchFields"][] = "Activator_Name";
$tdataAverage_Airtime_Consumption_3_Months[".advSearchFields"][] = "Manager_Name";
$tdataAverage_Airtime_Consumption_3_Months[".advSearchFields"][] = "Title";
$tdataAverage_Airtime_Consumption_3_Months[".advSearchFields"][] = "Subscriber_Number";
$tdataAverage_Airtime_Consumption_3_Months[".advSearchFields"][] = "Date_Activated";
$tdataAverage_Airtime_Consumption_3_Months[".advSearchFields"][] = "Consumption";
$tdataAverage_Airtime_Consumption_3_Months[".advSearchFields"][] = "End_of_3_Month";

$tdataAverage_Airtime_Consumption_3_Months[".tableType"] = "list";

$tdataAverage_Airtime_Consumption_3_Months[".printerPageOrientation"] = 0;
$tdataAverage_Airtime_Consumption_3_Months[".nPrinterPageScale"] = 100;

$tdataAverage_Airtime_Consumption_3_Months[".nPrinterSplitRecords"] = 40;

$tdataAverage_Airtime_Consumption_3_Months[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataAverage_Airtime_Consumption_3_Months[".pageSize"] = 20;

$tdataAverage_Airtime_Consumption_3_Months[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAverage_Airtime_Consumption_3_Months[".strOrderBy"] = $tstrOrderBy;

$tdataAverage_Airtime_Consumption_3_Months[".orderindexes"] = array();

$tdataAverage_Airtime_Consumption_3_Months[".sqlHead"] = "SELECT simcards_batches.Activator_Number, simcards_batches.Activator_Name, simcards_batches.Manager_Name, simcards_batches.Manager_Title as Title, simcards_batches.Active_MSISDN as Subscriber_Number, simcards_batches.Event_date As Date_Activated, SUM(pos_out.CHARGE) AS Consumption   ,DATE_FORMAT( DATE_ADD(STR_TO_DATE(`Event_date`, '%m/%d/%Y'), INTERVAL 90 DAY), '%m/%d/%Y' ) as End_of_3_Month";
$tdataAverage_Airtime_Consumption_3_Months[".sqlFrom"] = "FROM `simcards_batches`, pos_out";
$tdataAverage_Airtime_Consumption_3_Months[".sqlWhereExpr"] = "(simcards_batches.Active_MSISDN = pos_out.DEST_SERVICE_NUMBER)  AND  (pos_out.TRANSFER_DATE  BETWEEN   DATE_FORMAT( STR_TO_DATE( `Event_date` , '%m/%d/%Y' ) , '%m/%d/%Y' )  AND  DATE_FORMAT( DATE_ADD(STR_TO_DATE(`Event_date`, '%m/%d/%Y'), INTERVAL 90 DAY), '%m/%d/%Y' ))";
$tdataAverage_Airtime_Consumption_3_Months[".sqlTail"] = "GROUP BY  simcards_batches.Active_MSISDN";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAverage_Airtime_Consumption_3_Months[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAverage_Airtime_Consumption_3_Months[".arrGroupsPerPage"] = $arrGPP;

$tdataAverage_Airtime_Consumption_3_Months[".highlightSearchResults"] = true;

$tableKeysAverage_Airtime_Consumption_3_Months = array();
$tdataAverage_Airtime_Consumption_3_Months[".Keys"] = $tableKeysAverage_Airtime_Consumption_3_Months;

$tdataAverage_Airtime_Consumption_3_Months[".listFields"] = array();
$tdataAverage_Airtime_Consumption_3_Months[".listFields"][] = "Activator_Number";
$tdataAverage_Airtime_Consumption_3_Months[".listFields"][] = "Activator_Name";
$tdataAverage_Airtime_Consumption_3_Months[".listFields"][] = "Manager_Name";
$tdataAverage_Airtime_Consumption_3_Months[".listFields"][] = "Title";
$tdataAverage_Airtime_Consumption_3_Months[".listFields"][] = "Subscriber_Number";
$tdataAverage_Airtime_Consumption_3_Months[".listFields"][] = "Date_Activated";
$tdataAverage_Airtime_Consumption_3_Months[".listFields"][] = "Consumption";
$tdataAverage_Airtime_Consumption_3_Months[".listFields"][] = "End_of_3_Month";

$tdataAverage_Airtime_Consumption_3_Months[".hideMobileList"] = array();


$tdataAverage_Airtime_Consumption_3_Months[".viewFields"] = array();
$tdataAverage_Airtime_Consumption_3_Months[".viewFields"][] = "Activator_Number";
$tdataAverage_Airtime_Consumption_3_Months[".viewFields"][] = "Activator_Name";
$tdataAverage_Airtime_Consumption_3_Months[".viewFields"][] = "Manager_Name";
$tdataAverage_Airtime_Consumption_3_Months[".viewFields"][] = "Title";
$tdataAverage_Airtime_Consumption_3_Months[".viewFields"][] = "Subscriber_Number";
$tdataAverage_Airtime_Consumption_3_Months[".viewFields"][] = "Date_Activated";
$tdataAverage_Airtime_Consumption_3_Months[".viewFields"][] = "Consumption";
$tdataAverage_Airtime_Consumption_3_Months[".viewFields"][] = "End_of_3_Month";

$tdataAverage_Airtime_Consumption_3_Months[".addFields"] = array();
$tdataAverage_Airtime_Consumption_3_Months[".addFields"][] = "Activator_Number";
$tdataAverage_Airtime_Consumption_3_Months[".addFields"][] = "Subscriber_Number";

$tdataAverage_Airtime_Consumption_3_Months[".inlineAddFields"] = array();
$tdataAverage_Airtime_Consumption_3_Months[".inlineAddFields"][] = "Activator_Number";
$tdataAverage_Airtime_Consumption_3_Months[".inlineAddFields"][] = "Subscriber_Number";

$tdataAverage_Airtime_Consumption_3_Months[".editFields"] = array();
$tdataAverage_Airtime_Consumption_3_Months[".editFields"][] = "Activator_Number";
$tdataAverage_Airtime_Consumption_3_Months[".editFields"][] = "Subscriber_Number";

$tdataAverage_Airtime_Consumption_3_Months[".inlineEditFields"] = array();
$tdataAverage_Airtime_Consumption_3_Months[".inlineEditFields"][] = "Activator_Number";
$tdataAverage_Airtime_Consumption_3_Months[".inlineEditFields"][] = "Subscriber_Number";

$tdataAverage_Airtime_Consumption_3_Months[".exportFields"] = array();
$tdataAverage_Airtime_Consumption_3_Months[".exportFields"][] = "Activator_Number";
$tdataAverage_Airtime_Consumption_3_Months[".exportFields"][] = "Activator_Name";
$tdataAverage_Airtime_Consumption_3_Months[".exportFields"][] = "Manager_Name";
$tdataAverage_Airtime_Consumption_3_Months[".exportFields"][] = "Title";
$tdataAverage_Airtime_Consumption_3_Months[".exportFields"][] = "Subscriber_Number";
$tdataAverage_Airtime_Consumption_3_Months[".exportFields"][] = "Date_Activated";
$tdataAverage_Airtime_Consumption_3_Months[".exportFields"][] = "Consumption";
$tdataAverage_Airtime_Consumption_3_Months[".exportFields"][] = "End_of_3_Month";

$tdataAverage_Airtime_Consumption_3_Months[".importFields"] = array();
$tdataAverage_Airtime_Consumption_3_Months[".importFields"][] = "Activator_Number";
$tdataAverage_Airtime_Consumption_3_Months[".importFields"][] = "Activator_Name";
$tdataAverage_Airtime_Consumption_3_Months[".importFields"][] = "Manager_Name";
$tdataAverage_Airtime_Consumption_3_Months[".importFields"][] = "Title";
$tdataAverage_Airtime_Consumption_3_Months[".importFields"][] = "Subscriber_Number";
$tdataAverage_Airtime_Consumption_3_Months[".importFields"][] = "Date_Activated";
$tdataAverage_Airtime_Consumption_3_Months[".importFields"][] = "Consumption";
$tdataAverage_Airtime_Consumption_3_Months[".importFields"][] = "End_of_3_Month";

$tdataAverage_Airtime_Consumption_3_Months[".printFields"] = array();
$tdataAverage_Airtime_Consumption_3_Months[".printFields"][] = "Activator_Number";
$tdataAverage_Airtime_Consumption_3_Months[".printFields"][] = "Activator_Name";
$tdataAverage_Airtime_Consumption_3_Months[".printFields"][] = "Manager_Name";
$tdataAverage_Airtime_Consumption_3_Months[".printFields"][] = "Title";
$tdataAverage_Airtime_Consumption_3_Months[".printFields"][] = "Subscriber_Number";
$tdataAverage_Airtime_Consumption_3_Months[".printFields"][] = "Date_Activated";
$tdataAverage_Airtime_Consumption_3_Months[".printFields"][] = "Consumption";
$tdataAverage_Airtime_Consumption_3_Months[".printFields"][] = "End_of_3_Month";

//	Activator_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Activator_Number";
	$fdata["GoodName"] = "Activator_Number";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Average_Airtime_Consumption_3_Months","Activator_Number"); 
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
	
		$fdata["strField"] = "Activator_Number"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "simcards_batches.Activator_Number";
	
		
		
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

	

	
	$tdataAverage_Airtime_Consumption_3_Months["Activator_Number"] = $fdata;
//	Activator_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Activator_Name";
	$fdata["GoodName"] = "Activator_Name";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Average_Airtime_Consumption_3_Months","Activator_Name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Activator_Name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "simcards_batches.Activator_Name";
	
		
		
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

	

	
	$tdataAverage_Airtime_Consumption_3_Months["Activator_Name"] = $fdata;
//	Manager_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Manager_Name";
	$fdata["GoodName"] = "Manager_Name";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Average_Airtime_Consumption_3_Months","Manager_Name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Manager_Name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "simcards_batches.Manager_Name";
	
		
		
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

	

	
	$tdataAverage_Airtime_Consumption_3_Months["Manager_Name"] = $fdata;
//	Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Title";
	$fdata["GoodName"] = "Title";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Average_Airtime_Consumption_3_Months","Title"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Manager_Title"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "simcards_batches.Manager_Title";
	
		
		
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

	

	
	$tdataAverage_Airtime_Consumption_3_Months["Title"] = $fdata;
//	Subscriber_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Subscriber_Number";
	$fdata["GoodName"] = "Subscriber_Number";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Average_Airtime_Consumption_3_Months","Subscriber_Number"); 
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
	
		$fdata["strField"] = "Active_MSISDN"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "simcards_batches.Active_MSISDN";
	
		
		
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
			$edata["EditParams"].= " maxlength=20";
	
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

	

	
	$tdataAverage_Airtime_Consumption_3_Months["Subscriber_Number"] = $fdata;
//	Date_Activated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Date_Activated";
	$fdata["GoodName"] = "Date_Activated";
	$fdata["ownerTable"] = "simcards_batches";
	$fdata["Label"] = GetFieldLabel("Average_Airtime_Consumption_3_Months","Date_Activated"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Event_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "simcards_batches.Event_date";
	
		
		
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

	

	
	$tdataAverage_Airtime_Consumption_3_Months["Date_Activated"] = $fdata;
//	Consumption
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Consumption";
	$fdata["GoodName"] = "Consumption";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Average_Airtime_Consumption_3_Months","Consumption"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Consumption"; 
	
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

	

	
	$tdataAverage_Airtime_Consumption_3_Months["Consumption"] = $fdata;
//	End_of_3_Month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "End_of_3_Month";
	$fdata["GoodName"] = "End_of_3_Month";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Average_Airtime_Consumption_3_Months","End_of_3_Month"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "End_of_3_Month"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE_FORMAT( DATE_ADD(STR_TO_DATE(`Event_date`, '%m/%d/%Y'), INTERVAL 90 DAY), '%m/%d/%Y' )";
	
		
		
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

	

	
	$tdataAverage_Airtime_Consumption_3_Months["End_of_3_Month"] = $fdata;

	
$tables_data["Average Airtime Consumption 3 Months"]=&$tdataAverage_Airtime_Consumption_3_Months;
$field_labels["Average_Airtime_Consumption_3_Months"] = &$fieldLabelsAverage_Airtime_Consumption_3_Months;
$fieldToolTips["Average Airtime Consumption 3 Months"] = &$fieldToolTipsAverage_Airtime_Consumption_3_Months;
$page_titles["Average_Airtime_Consumption_3_Months"] = &$pageTitlesAverage_Airtime_Consumption_3_Months;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Average Airtime Consumption 3 Months"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Average Airtime Consumption 3 Months"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Average_Airtime_Consumption_3_Months()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "simcards_batches.Activator_Number, simcards_batches.Activator_Name, simcards_batches.Manager_Name, simcards_batches.Manager_Title as Title, simcards_batches.Active_MSISDN as Subscriber_Number, simcards_batches.Event_date As Date_Activated, SUM(pos_out.CHARGE) AS Consumption   ,DATE_FORMAT( DATE_ADD(STR_TO_DATE(`Event_date`, '%m/%d/%Y'), INTERVAL 90 DAY), '%m/%d/%Y' ) as End_of_3_Month";
$proto0["m_strFrom"] = "FROM `simcards_batches`, pos_out";
$proto0["m_strWhere"] = "(simcards_batches.Active_MSISDN = pos_out.DEST_SERVICE_NUMBER)  AND  (pos_out.TRANSFER_DATE  BETWEEN   DATE_FORMAT( STR_TO_DATE( `Event_date` , '%m/%d/%Y' ) , '%m/%d/%Y' )  AND  DATE_FORMAT( DATE_ADD(STR_TO_DATE(`Event_date`, '%m/%d/%Y'), INTERVAL 90 DAY), '%m/%d/%Y' ))";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "GROUP BY  simcards_batches.Active_MSISDN";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(simcards_batches.Active_MSISDN = pos_out.DEST_SERVICE_NUMBER)  AND  (pos_out.TRANSFER_DATE  BETWEEN   DATE_FORMAT( STR_TO_DATE( `Event_date` , '%m/%d/%Y' ) , '%m/%d/%Y' )  AND  DATE_FORMAT( DATE_ADD(STR_TO_DATE(`Event_date`, '%m/%d/%Y'), INTERVAL 90 DAY), '%m/%d/%Y' ))";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(simcards_batches.Active_MSISDN = pos_out.DEST_SERVICE_NUMBER)  AND  (pos_out.TRANSFER_DATE  BETWEEN   DATE_FORMAT( STR_TO_DATE( `Event_date` , '%m/%d/%Y' ) , '%m/%d/%Y' )  AND  DATE_FORMAT( DATE_ADD(STR_TO_DATE(`Event_date`, '%m/%d/%Y'), INTERVAL 90 DAY), '%m/%d/%Y' ))"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "simcards_batches.Active_MSISDN = pos_out.DEST_SERVICE_NUMBER";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Active_MSISDN",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Average Airtime Consumption 3 Months"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "= pos_out.DEST_SERVICE_NUMBER";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "pos_out.TRANSFER_DATE  BETWEEN   DATE_FORMAT( STR_TO_DATE( `Event_date` , '%m/%d/%Y' ) , '%m/%d/%Y' )  AND  DATE_FORMAT( DATE_ADD(STR_TO_DATE(`Event_date`, '%m/%d/%Y'), INTERVAL 90 DAY), '%m/%d/%Y' )";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "TRANSFER_DATE",
	"m_strTable" => "pos_out",
	"m_srcTableName" => "Average Airtime Consumption 3 Months"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "BETWEEN   DATE_FORMAT( STR_TO_DATE( `Event_date` , '%m/%d/%Y' ) , '%m/%d/%Y' )  AND  DATE_FORMAT( DATE_ADD(STR_TO_DATE(`Event_date`, '%m/%d/%Y'), INTERVAL 90 DAY), '%m/%d/%Y' )";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = true;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto7=array();
$proto7["m_sql"] = "";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Activator_Number",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Average Airtime Consumption 3 Months"
));

$proto9["m_sql"] = "simcards_batches.Activator_Number";
$proto9["m_srcTableName"] = "Average Airtime Consumption 3 Months";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Activator_Name",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Average Airtime Consumption 3 Months"
));

$proto11["m_sql"] = "simcards_batches.Activator_Name";
$proto11["m_srcTableName"] = "Average Airtime Consumption 3 Months";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Name",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Average Airtime Consumption 3 Months"
));

$proto13["m_sql"] = "simcards_batches.Manager_Name";
$proto13["m_srcTableName"] = "Average Airtime Consumption 3 Months";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Average Airtime Consumption 3 Months"
));

$proto15["m_sql"] = "simcards_batches.Manager_Title";
$proto15["m_srcTableName"] = "Average Airtime Consumption 3 Months";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "Title";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Active_MSISDN",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Average Airtime Consumption 3 Months"
));

$proto17["m_sql"] = "simcards_batches.Active_MSISDN";
$proto17["m_srcTableName"] = "Average Airtime Consumption 3 Months";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "Subscriber_Number";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Event_date",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Average Airtime Consumption 3 Months"
));

$proto19["m_sql"] = "simcards_batches.Event_date";
$proto19["m_srcTableName"] = "Average Airtime Consumption 3 Months";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "Date_Activated";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_SUM";
$proto22["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "CHARGE",
	"m_strTable" => "pos_out",
	"m_srcTableName" => "Average Airtime Consumption 3 Months"
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto22);

$proto21["m_sql"] = "SUM(pos_out.CHARGE)";
$proto21["m_srcTableName"] = "Average Airtime Consumption 3 Months";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "Consumption";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "DATE_FORMAT( DATE_ADD(STR_TO_DATE(`Event_date`, '%m/%d/%Y'), INTERVAL 90 DAY), '%m/%d/%Y' )"
));

$proto24["m_sql"] = "DATE_FORMAT( DATE_ADD(STR_TO_DATE(`Event_date`, '%m/%d/%Y'), INTERVAL 90 DAY), '%m/%d/%Y' )";
$proto24["m_srcTableName"] = "Average Airtime Consumption 3 Months";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "End_of_3_Month";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "simcards_batches";
$proto27["m_srcTableName"] = "Average Airtime Consumption 3 Months";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "ID";
$proto27["m_columns"][] = "batch_name";
$proto27["m_columns"][] = "ICCID";
$proto27["m_columns"][] = "Status";
$proto27["m_columns"][] = "Manager_Name";
$proto27["m_columns"][] = "Manager_Title";
$proto27["m_columns"][] = "Activator_Number";
$proto27["m_columns"][] = "Activator_Name";
$proto27["m_columns"][] = "Team_Leader";
$proto27["m_columns"][] = "Event_date";
$proto27["m_columns"][] = "time";
$proto27["m_columns"][] = "Active_MSISDN";
$proto27["m_columns"][] = "New_MSISDN";
$proto27["m_columns"][] = "Swap_Date";
$proto27["m_columns"][] = "Airtime_transered";
$proto27["m_columns"][] = "Transfer_date";
$proto27["m_columns"][] = "Activation_Commission";
$proto27["m_columns"][] = "Form_Commission";
$proto27["m_columns"][] = "Form_Paid_Date";
$proto27["m_columns"][] = "Form_Returned";
$proto27["m_columns"][] = "Form_Status";
$proto27["m_columns"][] = "Form_Date";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "`simcards_batches`";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "Average Airtime Consumption 3 Months";
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

$proto0["m_fromlist"][]=$obj;
												$proto30=array();
$proto30["m_link"] = "SQLL_CROSSJOIN";
			$proto31=array();
$proto31["m_strName"] = "pos_out";
$proto31["m_srcTableName"] = "Average Airtime Consumption 3 Months";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "ACCT_BOOK_ID";
$proto31["m_columns"][] = "TRANSFER_DATE";
$proto31["m_columns"][] = "ORIGIANL_CUSTOMER";
$proto31["m_columns"][] = "ORG_SERVICE_NUMBER";
$proto31["m_columns"][] = "CHARGE";
$proto31["m_columns"][] = "DESTINATION_CUSTOMER";
$proto31["m_columns"][] = "DEST_SERVICE_NUMBER";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "pos_out";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "Average Airtime Consumption 3 Months";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "Active_MSISDN",
	"m_strTable" => "simcards_batches",
	"m_srcTableName" => "Average Airtime Consumption 3 Months"
));

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Average Airtime Consumption 3 Months";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Average_Airtime_Consumption_3_Months = createSqlQuery_Average_Airtime_Consumption_3_Months();


	
								
	
$tdataAverage_Airtime_Consumption_3_Months[".sqlquery"] = $queryData_Average_Airtime_Consumption_3_Months;

$tableEvents["Average Airtime Consumption 3 Months"] = new eventsBase;
$tdataAverage_Airtime_Consumption_3_Months[".hasEvents"] = false;

?>