<?php
require_once(getabspath("classes/cipherer.php"));




$tdataactivators = array();	
	$tdataactivators[".truncateText"] = true;
	$tdataactivators[".NumberOfChars"] = 80; 
	$tdataactivators[".ShortName"] = "activators";
	$tdataactivators[".OwnerID"] = "mydata";
	$tdataactivators[".OriginalTable"] = "activators";

//	field labels
$fieldLabelsactivators = array();
$fieldToolTipsactivators = array();
$pageTitlesactivators = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsactivators["English"] = array();
	$fieldToolTipsactivators["English"] = array();
	$pageTitlesactivators["English"] = array();
	$fieldLabelsactivators["English"]["ID"] = "ID";
	$fieldToolTipsactivators["English"]["ID"] = "";
	$fieldLabelsactivators["English"]["pos_type"] = "Pos Type";
	$fieldToolTipsactivators["English"]["pos_type"] = "";
	$fieldLabelsactivators["English"]["Manager_Name"] = "SC Name";
	$fieldToolTipsactivators["English"]["Manager_Name"] = "Saler Coordinator Name";
	$fieldLabelsactivators["English"]["Manager_Number"] = "SC Number";
	$fieldToolTipsactivators["English"]["Manager_Number"] = "Sales Coordinator Number";
	$fieldLabelsactivators["English"]["Activator_Name"] = "FL Name";
	$fieldToolTipsactivators["English"]["Activator_Name"] = "Freelancer Name";
	$fieldLabelsactivators["English"]["Activator_Number"] = "POS Number";
	$fieldToolTipsactivators["English"]["Activator_Number"] = "Freelancer Number";
	$fieldLabelsactivators["English"]["business_name"] = "Business Name";
	$fieldToolTipsactivators["English"]["business_name"] = "";
	$fieldLabelsactivators["English"]["altenative_number"] = "Altenative Number";
	$fieldToolTipsactivators["English"]["altenative_number"] = "";
	$fieldLabelsactivators["English"]["pos_iccid"] = "Pos Iccid";
	$fieldToolTipsactivators["English"]["pos_iccid"] = "";
	$fieldLabelsactivators["English"]["registration_date"] = "Registration Date";
	$fieldToolTipsactivators["English"]["registration_date"] = "";
	$fieldLabelsactivators["English"]["gender"] = "Gender";
	$fieldToolTipsactivators["English"]["gender"] = "";
	$fieldLabelsactivators["English"]["DOB"] = "DOB";
	$fieldToolTipsactivators["English"]["DOB"] = "";
	$fieldLabelsactivators["English"]["Area"] = "Area";
	$fieldToolTipsactivators["English"]["Area"] = "";
	$fieldLabelsactivators["English"]["id_type"] = "Id Type";
	$fieldToolTipsactivators["English"]["id_type"] = "";
	$fieldLabelsactivators["English"]["id_number"] = "Id Number";
	$fieldToolTipsactivators["English"]["id_number"] = "";
	$fieldLabelsactivators["English"]["Team_Leader"] = "Team Leader";
	$fieldToolTipsactivators["English"]["Team_Leader"] = "";
	$fieldLabelsactivators["English"]["Working_Location"] = "Working Location";
	$fieldToolTipsactivators["English"]["Working_Location"] = "";
	$fieldLabelsactivators["English"]["Batch_Paid"] = "Batch Paid";
	$fieldToolTipsactivators["English"]["Batch_Paid"] = "";
	$fieldLabelsactivators["English"]["lat"] = "Lat";
	$fieldToolTipsactivators["English"]["lat"] = "";
	$fieldLabelsactivators["English"]["lon"] = "Lon";
	$fieldToolTipsactivators["English"]["lon"] = "";
	$fieldLabelsactivators["English"]["mydata"] = "Mydata";
	$fieldToolTipsactivators["English"]["mydata"] = "";
	$fieldLabelsactivators["English"]["Manager_Title"] = "Manager Title";
	$fieldToolTipsactivators["English"]["Manager_Title"] = "";
	$pageTitlesactivators["English"]["add"] = "Freelancer, Add new Freelancer";
	if (count($fieldToolTipsactivators["English"]))
		$tdataactivators[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsactivators[""] = array();
	$fieldToolTipsactivators[""] = array();
	$pageTitlesactivators[""] = array();
	$fieldLabelsactivators[""]["Activator_Number"] = "POS Number";
	$fieldToolTipsactivators[""]["Activator_Number"] = "";
	if (count($fieldToolTipsactivators[""]))
		$tdataactivators[".isUseToolTips"] = true;
}
	
	
	$tdataactivators[".NCSearch"] = true;



$tdataactivators[".shortTableName"] = "activators";
$tdataactivators[".nSecOptions"] = 1;
$tdataactivators[".recsPerRowList"] = 1;
$tdataactivators[".mainTableOwnerID"] = "mydata";
$tdataactivators[".moveNext"] = 1;
$tdataactivators[".nType"] = 0;

$tdataactivators[".strOriginalTableName"] = "activators";




$tdataactivators[".showAddInPopup"] = false;

$tdataactivators[".showEditInPopup"] = false;

$tdataactivators[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataactivators[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataactivators[".fieldsForRegister"] = array();

$tdataactivators[".listAjax"] = false;

	$tdataactivators[".audit"] = false;

	$tdataactivators[".locking"] = false;

$tdataactivators[".edit"] = true;

$tdataactivators[".list"] = true;

$tdataactivators[".inlineEdit"] = true;
$tdataactivators[".inlineAdd"] = true;
$tdataactivators[".view"] = true;

$tdataactivators[".import"] = true;

$tdataactivators[".exportTo"] = true;


$tdataactivators[".delete"] = true;

$tdataactivators[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataactivators[".searchSaving"] = false;
//

$tdataactivators[".showSearchPanel"] = true;
		$tdataactivators[".flexibleSearch"] = true;		

if (isMobile())
	$tdataactivators[".isUseAjaxSuggest"] = false;
else 
	$tdataactivators[".isUseAjaxSuggest"] = true;

$tdataactivators[".rowHighlite"] = true;



$tdataactivators[".addPageEvents"] = false;

// use timepicker for search panel
$tdataactivators[".isUseTimeForSearch"] = false;





$tdataactivators[".allSearchFields"] = array();
$tdataactivators[".filterFields"] = array();
$tdataactivators[".requiredSearchFields"] = array();

$tdataactivators[".allSearchFields"][] = "pos_type";
	$tdataactivators[".allSearchFields"][] = "Team_Leader";
	$tdataactivators[".allSearchFields"][] = "Manager_Name";
	$tdataactivators[".allSearchFields"][] = "Manager_Number";
	$tdataactivators[".allSearchFields"][] = "Manager_Title";
	$tdataactivators[".allSearchFields"][] = "Activator_Name";
	$tdataactivators[".allSearchFields"][] = "Activator_Number";
	$tdataactivators[".allSearchFields"][] = "altenative_number";
	$tdataactivators[".allSearchFields"][] = "pos_iccid";
	$tdataactivators[".allSearchFields"][] = "registration_date";
	$tdataactivators[".allSearchFields"][] = "gender";
	$tdataactivators[".allSearchFields"][] = "DOB";
	$tdataactivators[".allSearchFields"][] = "Area";
	$tdataactivators[".allSearchFields"][] = "id_type";
	$tdataactivators[".allSearchFields"][] = "id_number";
	

$tdataactivators[".googleLikeFields"] = array();
$tdataactivators[".googleLikeFields"][] = "ID";
$tdataactivators[".googleLikeFields"][] = "pos_type";
$tdataactivators[".googleLikeFields"][] = "Manager_Name";
$tdataactivators[".googleLikeFields"][] = "Manager_Number";
$tdataactivators[".googleLikeFields"][] = "Activator_Name";
$tdataactivators[".googleLikeFields"][] = "Activator_Number";
$tdataactivators[".googleLikeFields"][] = "business_name";
$tdataactivators[".googleLikeFields"][] = "altenative_number";
$tdataactivators[".googleLikeFields"][] = "pos_iccid";
$tdataactivators[".googleLikeFields"][] = "registration_date";
$tdataactivators[".googleLikeFields"][] = "gender";
$tdataactivators[".googleLikeFields"][] = "DOB";
$tdataactivators[".googleLikeFields"][] = "Area";
$tdataactivators[".googleLikeFields"][] = "id_type";
$tdataactivators[".googleLikeFields"][] = "id_number";
$tdataactivators[".googleLikeFields"][] = "Team_Leader";
$tdataactivators[".googleLikeFields"][] = "Working_Location";
$tdataactivators[".googleLikeFields"][] = "Batch_Paid";
$tdataactivators[".googleLikeFields"][] = "lat";
$tdataactivators[".googleLikeFields"][] = "lon";
$tdataactivators[".googleLikeFields"][] = "mydata";
$tdataactivators[".googleLikeFields"][] = "Manager_Title";


$tdataactivators[".advSearchFields"] = array();
$tdataactivators[".advSearchFields"][] = "pos_type";
$tdataactivators[".advSearchFields"][] = "Team_Leader";
$tdataactivators[".advSearchFields"][] = "Manager_Name";
$tdataactivators[".advSearchFields"][] = "Manager_Number";
$tdataactivators[".advSearchFields"][] = "Manager_Title";
$tdataactivators[".advSearchFields"][] = "Activator_Name";
$tdataactivators[".advSearchFields"][] = "Activator_Number";
$tdataactivators[".advSearchFields"][] = "altenative_number";
$tdataactivators[".advSearchFields"][] = "pos_iccid";
$tdataactivators[".advSearchFields"][] = "registration_date";
$tdataactivators[".advSearchFields"][] = "gender";
$tdataactivators[".advSearchFields"][] = "DOB";
$tdataactivators[".advSearchFields"][] = "Area";
$tdataactivators[".advSearchFields"][] = "id_type";
$tdataactivators[".advSearchFields"][] = "id_number";

$tdataactivators[".tableType"] = "list";

$tdataactivators[".printerPageOrientation"] = 0;
$tdataactivators[".nPrinterPageScale"] = 100;

$tdataactivators[".nPrinterSplitRecords"] = 40;

$tdataactivators[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataactivators[".pageSize"] = 20;

$tdataactivators[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataactivators[".strOrderBy"] = $tstrOrderBy;

$tdataactivators[".orderindexes"] = array();

$tdataactivators[".sqlHead"] = "SELECT ID,  pos_type,  Manager_Name,  Manager_Number,  Activator_Name,  Activator_Number,  business_name,  altenative_number,  pos_iccid,  registration_date,  gender,  DOB,  Area,  id_type,  id_number,  Team_Leader,  Working_Location,  Batch_Paid,  lat,  lon,  mydata,  Manager_Title";
$tdataactivators[".sqlFrom"] = "FROM activators";
$tdataactivators[".sqlWhereExpr"] = "(pos_type = 'FREELANCER')";
$tdataactivators[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataactivators[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataactivators[".arrGroupsPerPage"] = $arrGPP;

$tdataactivators[".highlightSearchResults"] = true;

$tableKeysactivators = array();
$tableKeysactivators[] = "Activator_Number";
$tdataactivators[".Keys"] = $tableKeysactivators;

$tdataactivators[".listFields"] = array();
$tdataactivators[".listFields"][] = "Activator_Number";
$tdataactivators[".listFields"][] = "pos_type";
$tdataactivators[".listFields"][] = "Team_Leader";
$tdataactivators[".listFields"][] = "Manager_Name";
$tdataactivators[".listFields"][] = "Manager_Number";
$tdataactivators[".listFields"][] = "Manager_Title";
$tdataactivators[".listFields"][] = "Activator_Name";
$tdataactivators[".listFields"][] = "altenative_number";
$tdataactivators[".listFields"][] = "pos_iccid";
$tdataactivators[".listFields"][] = "registration_date";
$tdataactivators[".listFields"][] = "gender";
$tdataactivators[".listFields"][] = "DOB";
$tdataactivators[".listFields"][] = "Area";
$tdataactivators[".listFields"][] = "id_type";
$tdataactivators[".listFields"][] = "id_number";

$tdataactivators[".hideMobileList"] = array();


$tdataactivators[".viewFields"] = array();
$tdataactivators[".viewFields"][] = "Activator_Number";
$tdataactivators[".viewFields"][] = "pos_type";
$tdataactivators[".viewFields"][] = "Team_Leader";
$tdataactivators[".viewFields"][] = "Manager_Name";
$tdataactivators[".viewFields"][] = "Manager_Number";
$tdataactivators[".viewFields"][] = "Manager_Title";
$tdataactivators[".viewFields"][] = "Activator_Name";
$tdataactivators[".viewFields"][] = "altenative_number";
$tdataactivators[".viewFields"][] = "pos_iccid";
$tdataactivators[".viewFields"][] = "registration_date";
$tdataactivators[".viewFields"][] = "gender";
$tdataactivators[".viewFields"][] = "DOB";
$tdataactivators[".viewFields"][] = "Area";
$tdataactivators[".viewFields"][] = "id_type";
$tdataactivators[".viewFields"][] = "id_number";
$tdataactivators[".viewFields"][] = "Working_Location";
$tdataactivators[".viewFields"][] = "Batch_Paid";

$tdataactivators[".addFields"] = array();
$tdataactivators[".addFields"][] = "Activator_Number";
$tdataactivators[".addFields"][] = "pos_type";
$tdataactivators[".addFields"][] = "Team_Leader";
$tdataactivators[".addFields"][] = "Manager_Name";
$tdataactivators[".addFields"][] = "Manager_Number";
$tdataactivators[".addFields"][] = "Manager_Title";
$tdataactivators[".addFields"][] = "Activator_Name";
$tdataactivators[".addFields"][] = "altenative_number";
$tdataactivators[".addFields"][] = "pos_iccid";
$tdataactivators[".addFields"][] = "registration_date";
$tdataactivators[".addFields"][] = "gender";
$tdataactivators[".addFields"][] = "DOB";
$tdataactivators[".addFields"][] = "Area";
$tdataactivators[".addFields"][] = "id_type";
$tdataactivators[".addFields"][] = "id_number";

$tdataactivators[".inlineAddFields"] = array();
$tdataactivators[".inlineAddFields"][] = "Activator_Number";
$tdataactivators[".inlineAddFields"][] = "pos_type";
$tdataactivators[".inlineAddFields"][] = "Team_Leader";
$tdataactivators[".inlineAddFields"][] = "Manager_Name";
$tdataactivators[".inlineAddFields"][] = "Manager_Number";
$tdataactivators[".inlineAddFields"][] = "Manager_Title";
$tdataactivators[".inlineAddFields"][] = "Activator_Name";
$tdataactivators[".inlineAddFields"][] = "altenative_number";
$tdataactivators[".inlineAddFields"][] = "pos_iccid";
$tdataactivators[".inlineAddFields"][] = "registration_date";
$tdataactivators[".inlineAddFields"][] = "gender";
$tdataactivators[".inlineAddFields"][] = "DOB";
$tdataactivators[".inlineAddFields"][] = "Area";
$tdataactivators[".inlineAddFields"][] = "id_type";
$tdataactivators[".inlineAddFields"][] = "id_number";

$tdataactivators[".editFields"] = array();
$tdataactivators[".editFields"][] = "Activator_Number";
$tdataactivators[".editFields"][] = "pos_type";
$tdataactivators[".editFields"][] = "Team_Leader";
$tdataactivators[".editFields"][] = "Manager_Name";
$tdataactivators[".editFields"][] = "Manager_Number";
$tdataactivators[".editFields"][] = "Manager_Title";
$tdataactivators[".editFields"][] = "Activator_Name";
$tdataactivators[".editFields"][] = "altenative_number";
$tdataactivators[".editFields"][] = "pos_iccid";
$tdataactivators[".editFields"][] = "registration_date";
$tdataactivators[".editFields"][] = "gender";
$tdataactivators[".editFields"][] = "DOB";
$tdataactivators[".editFields"][] = "Area";
$tdataactivators[".editFields"][] = "id_type";
$tdataactivators[".editFields"][] = "id_number";

$tdataactivators[".inlineEditFields"] = array();
$tdataactivators[".inlineEditFields"][] = "Activator_Number";
$tdataactivators[".inlineEditFields"][] = "pos_type";
$tdataactivators[".inlineEditFields"][] = "Team_Leader";
$tdataactivators[".inlineEditFields"][] = "Manager_Name";
$tdataactivators[".inlineEditFields"][] = "Manager_Number";
$tdataactivators[".inlineEditFields"][] = "Manager_Title";
$tdataactivators[".inlineEditFields"][] = "Activator_Name";
$tdataactivators[".inlineEditFields"][] = "altenative_number";
$tdataactivators[".inlineEditFields"][] = "pos_iccid";
$tdataactivators[".inlineEditFields"][] = "registration_date";
$tdataactivators[".inlineEditFields"][] = "gender";
$tdataactivators[".inlineEditFields"][] = "DOB";
$tdataactivators[".inlineEditFields"][] = "Area";
$tdataactivators[".inlineEditFields"][] = "id_type";
$tdataactivators[".inlineEditFields"][] = "id_number";

$tdataactivators[".exportFields"] = array();
$tdataactivators[".exportFields"][] = "Activator_Number";
$tdataactivators[".exportFields"][] = "pos_type";
$tdataactivators[".exportFields"][] = "Team_Leader";
$tdataactivators[".exportFields"][] = "Manager_Name";
$tdataactivators[".exportFields"][] = "Manager_Number";
$tdataactivators[".exportFields"][] = "Manager_Title";
$tdataactivators[".exportFields"][] = "Activator_Name";
$tdataactivators[".exportFields"][] = "altenative_number";
$tdataactivators[".exportFields"][] = "pos_iccid";
$tdataactivators[".exportFields"][] = "registration_date";
$tdataactivators[".exportFields"][] = "gender";
$tdataactivators[".exportFields"][] = "DOB";
$tdataactivators[".exportFields"][] = "Area";
$tdataactivators[".exportFields"][] = "id_type";
$tdataactivators[".exportFields"][] = "id_number";

$tdataactivators[".importFields"] = array();
$tdataactivators[".importFields"][] = "ID";
$tdataactivators[".importFields"][] = "pos_type";
$tdataactivators[".importFields"][] = "Manager_Name";
$tdataactivators[".importFields"][] = "Manager_Number";
$tdataactivators[".importFields"][] = "Activator_Name";
$tdataactivators[".importFields"][] = "Activator_Number";
$tdataactivators[".importFields"][] = "business_name";
$tdataactivators[".importFields"][] = "altenative_number";
$tdataactivators[".importFields"][] = "pos_iccid";
$tdataactivators[".importFields"][] = "registration_date";
$tdataactivators[".importFields"][] = "gender";
$tdataactivators[".importFields"][] = "DOB";
$tdataactivators[".importFields"][] = "Area";
$tdataactivators[".importFields"][] = "id_type";
$tdataactivators[".importFields"][] = "id_number";
$tdataactivators[".importFields"][] = "Team_Leader";
$tdataactivators[".importFields"][] = "Working_Location";
$tdataactivators[".importFields"][] = "Batch_Paid";
$tdataactivators[".importFields"][] = "lat";
$tdataactivators[".importFields"][] = "lon";
$tdataactivators[".importFields"][] = "mydata";
$tdataactivators[".importFields"][] = "Manager_Title";

$tdataactivators[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","ID"); 
	$fdata["FieldType"] = 20;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID"; 
	
		$fdata["isSQLExpression"] = true;
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
	
	
	
	

	

	
	$tdataactivators["ID"] = $fdata;
//	pos_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pos_type";
	$fdata["GoodName"] = "pos_type";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","pos_type"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pos_type"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pos_type";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataactivators["pos_type"] = $fdata;
//	Manager_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Manager_Name";
	$fdata["GoodName"] = "Manager_Name";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","Manager_Name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Manager_Name"; 
	
		$fdata["isSQLExpression"] = true;
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataactivators["Manager_Name"] = $fdata;
//	Manager_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Manager_Number";
	$fdata["GoodName"] = "Manager_Number";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","Manager_Number"); 
	$fdata["FieldType"] = 20;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Manager_Number"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Manager_Number";
	
		
		
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

	

	
	$tdataactivators["Manager_Number"] = $fdata;
//	Activator_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Activator_Name";
	$fdata["GoodName"] = "Activator_Name";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","Activator_Name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Activator_Name"; 
	
		$fdata["isSQLExpression"] = true;
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

	

	
	$tdataactivators["Activator_Name"] = $fdata;
//	Activator_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Activator_Number";
	$fdata["GoodName"] = "Activator_Number";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","Activator_Number"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Activator_Number"; 
	
		$fdata["isSQLExpression"] = true;
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
	
			
		$edata["strEditMask"] = "999999999"; 

	


		$edata["IsRequired"] = true; 
	
		
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";	
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");
	
		
	//	End validation
	
		
				
		
		$edata["denyDuplicates"] = true;	

		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataactivators["Activator_Number"] = $fdata;
//	business_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "business_name";
	$fdata["GoodName"] = "business_name";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","business_name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "business_name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "business_name";
	
		
		
				
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
	
	
	
	

	

	
	$tdataactivators["business_name"] = $fdata;
//	altenative_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "altenative_number";
	$fdata["GoodName"] = "altenative_number";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","altenative_number"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "altenative_number"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "altenative_number";
	
		
		
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
			$edata["EditParams"].= " maxlength=30";
	
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

	

	
	$tdataactivators["altenative_number"] = $fdata;
//	pos_iccid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "pos_iccid";
	$fdata["GoodName"] = "pos_iccid";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","pos_iccid"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pos_iccid"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pos_iccid";
	
		
		
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
	
			
		$edata["strEditMask"] = "9999999999999999999"; 

	


		$edata["IsRequired"] = true; 
	
		
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";	
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");
	
		
	//	End validation
	
		
				
		
		$edata["denyDuplicates"] = true;	

		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataactivators["pos_iccid"] = $fdata;
//	registration_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "registration_date";
	$fdata["GoodName"] = "registration_date";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","registration_date"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "registration_date"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "registration_date";
	
		
		
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
	
	$edata = array("EditFormat" => "Date");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataactivators["registration_date"] = $fdata;
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","gender"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "gender"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gender";
	
		
		
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
		$edata["LCType"] = 4;
		
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Male";
	$edata["LookupValues"][] = "Female";

		
		
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

	

	
	$tdataactivators["gender"] = $fdata;
//	DOB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DOB";
	$fdata["GoodName"] = "DOB";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","DOB"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DOB"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DOB";
	
		
		
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
	
	$edata = array("EditFormat" => "Date");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataactivators["DOB"] = $fdata;
//	Area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Area";
	$fdata["GoodName"] = "Area";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","Area"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Area"; 
	
		$fdata["isSQLExpression"] = true;
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

	

	
	$tdataactivators["Area"] = $fdata;
//	id_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "id_type";
	$fdata["GoodName"] = "id_type";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","id_type"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id_type"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_type";
	
		
		
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

	

	
	$tdataactivators["id_type"] = $fdata;
//	id_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "id_number";
	$fdata["GoodName"] = "id_number";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","id_number"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id_number"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_number";
	
		
		
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

	

	
	$tdataactivators["id_number"] = $fdata;
//	Team_Leader
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Team_Leader";
	$fdata["GoodName"] = "Team_Leader";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","Team_Leader"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Team_Leader"; 
	
		$fdata["isSQLExpression"] = true;
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Copy of controller1";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Manager_Name", 'lookupF'=>"Sales_Coordinator_Name");
	$edata["autoCompleteFields"][] = array('masterF'=>"Manager_Number", 'lookupF'=>"Sales_Coordinator_Number");
	$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "Mng";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Mng";
	
		
	$edata["LookupOrderBy"] = "Mng";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
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

	

	
	$tdataactivators["Team_Leader"] = $fdata;
//	Working_Location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Working_Location";
	$fdata["GoodName"] = "Working_Location";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","Working_Location"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "Working_Location"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Working_Location";
	
		
		
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
	
	
	
	

	

	
	$tdataactivators["Working_Location"] = $fdata;
//	Batch_Paid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Batch_Paid";
	$fdata["GoodName"] = "Batch_Paid";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","Batch_Paid"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "Batch_Paid"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Batch_Paid";
	
		
		
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
	
	
	
	

	

	
	$tdataactivators["Batch_Paid"] = $fdata;
//	lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "lat";
	$fdata["GoodName"] = "lat";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","lat"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "lat"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lat";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataactivators["lat"] = $fdata;
//	lon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "lon";
	$fdata["GoodName"] = "lon";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","lon"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "lon"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lon";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataactivators["lon"] = $fdata;
//	mydata
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "mydata";
	$fdata["GoodName"] = "mydata";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","mydata"); 
	$fdata["FieldType"] = 20;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "mydata"; 
	
		$fdata["isSQLExpression"] = true;
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
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataactivators["mydata"] = $fdata;
//	Manager_Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Manager_Title";
	$fdata["GoodName"] = "Manager_Title";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","Manager_Title"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Manager_Title"; 
	
		$fdata["isSQLExpression"] = true;
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "title_lookup";
	$edata["LookupConnId"] = "Tables";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "Title";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Title";
	
		
	$edata["LookupOrderBy"] = "Title";
	
		
			
		
		$edata["SimpleAdd"] = true;
			
	
	
		
		$edata["SelectSize"] = 1;
		
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

	

	
	$tdataactivators["Manager_Title"] = $fdata;

	
$tables_data["activators"]=&$tdataactivators;
$field_labels["activators"] = &$fieldLabelsactivators;
$fieldToolTips["activators"] = &$fieldToolTipsactivators;
$page_titles["activators"] = &$pageTitlesactivators;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["activators"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["activators"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_activators()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  pos_type,  Manager_Name,  Manager_Number,  Activator_Name,  Activator_Number,  business_name,  altenative_number,  pos_iccid,  registration_date,  gender,  DOB,  Area,  id_type,  id_number,  Team_Leader,  Working_Location,  Batch_Paid,  lat,  lon,  mydata,  Manager_Title";
$proto0["m_strFrom"] = "FROM activators";
$proto0["m_strWhere"] = "(pos_type = 'FREELANCER')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "pos_type = 'FREELANCER'";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "pos_type",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "= 'FREELANCER'";
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
	"m_strName" => "ID",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "activators";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "pos_type",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto7["m_sql"] = "pos_type";
$proto7["m_srcTableName"] = "activators";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Name",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto9["m_sql"] = "Manager_Name";
$proto9["m_srcTableName"] = "activators";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Number",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto11["m_sql"] = "Manager_Number";
$proto11["m_srcTableName"] = "activators";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Activator_Name",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto13["m_sql"] = "Activator_Name";
$proto13["m_srcTableName"] = "activators";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Activator_Number",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto15["m_sql"] = "Activator_Number";
$proto15["m_srcTableName"] = "activators";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "business_name",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto17["m_sql"] = "business_name";
$proto17["m_srcTableName"] = "activators";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "altenative_number",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto19["m_sql"] = "altenative_number";
$proto19["m_srcTableName"] = "activators";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "pos_iccid",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto21["m_sql"] = "pos_iccid";
$proto21["m_srcTableName"] = "activators";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "registration_date",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto23["m_sql"] = "registration_date";
$proto23["m_srcTableName"] = "activators";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto25["m_sql"] = "gender";
$proto25["m_srcTableName"] = "activators";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "DOB",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto27["m_sql"] = "DOB";
$proto27["m_srcTableName"] = "activators";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Area",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto29["m_sql"] = "Area";
$proto29["m_srcTableName"] = "activators";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "id_type",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto31["m_sql"] = "id_type";
$proto31["m_srcTableName"] = "activators";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "id_number",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto33["m_sql"] = "id_number";
$proto33["m_srcTableName"] = "activators";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "Team_Leader",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto35["m_sql"] = "Team_Leader";
$proto35["m_srcTableName"] = "activators";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "Working_Location",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto37["m_sql"] = "Working_Location";
$proto37["m_srcTableName"] = "activators";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "Batch_Paid",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto39["m_sql"] = "Batch_Paid";
$proto39["m_srcTableName"] = "activators";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "lat",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto41["m_sql"] = "lat";
$proto41["m_srcTableName"] = "activators";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "lon",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto43["m_sql"] = "lon";
$proto43["m_srcTableName"] = "activators";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "mydata",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto45["m_sql"] = "mydata";
$proto45["m_srcTableName"] = "activators";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "activators",
	"m_srcTableName" => "activators"
));

$proto47["m_sql"] = "Manager_Title";
$proto47["m_srcTableName"] = "activators";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto49=array();
$proto49["m_link"] = "SQLL_MAIN";
			$proto50=array();
$proto50["m_strName"] = "activators";
$proto50["m_srcTableName"] = "activators";
$proto50["m_columns"] = array();
$proto50["m_columns"][] = "ID";
$proto50["m_columns"][] = "pos_type";
$proto50["m_columns"][] = "Manager_Name";
$proto50["m_columns"][] = "Manager_Number";
$proto50["m_columns"][] = "Manager_Title";
$proto50["m_columns"][] = "Activator_Name";
$proto50["m_columns"][] = "Activator_Number";
$proto50["m_columns"][] = "business_name";
$proto50["m_columns"][] = "altenative_number";
$proto50["m_columns"][] = "pos_iccid";
$proto50["m_columns"][] = "registration_date";
$proto50["m_columns"][] = "gender";
$proto50["m_columns"][] = "DOB";
$proto50["m_columns"][] = "Area";
$proto50["m_columns"][] = "Route";
$proto50["m_columns"][] = "id_type";
$proto50["m_columns"][] = "id_number";
$proto50["m_columns"][] = "Team_Leader";
$proto50["m_columns"][] = "Working_Location";
$proto50["m_columns"][] = "Batch_Paid";
$proto50["m_columns"][] = "lat";
$proto50["m_columns"][] = "lon";
$proto50["m_columns"][] = "last_chekin";
$proto50["m_columns"][] = "mydata";
$obj = new SQLTable($proto50);

$proto49["m_table"] = $obj;
$proto49["m_sql"] = "activators";
$proto49["m_alias"] = "";
$proto49["m_srcTableName"] = "activators";
$proto51=array();
$proto51["m_sql"] = "";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "";
$proto51["m_havingmode"] = false;
$proto51["m_inBrackets"] = false;
$proto51["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto51);

$proto49["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto49);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="activators";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_activators = createSqlQuery_activators();


	
																						
	
$tdataactivators[".sqlquery"] = $queryData_activators;

$tableEvents["activators"] = new eventsBase;
$tdataactivators[".hasEvents"] = false;

?>