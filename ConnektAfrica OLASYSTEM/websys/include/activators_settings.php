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
	$fieldLabelsactivators["English"]["Manager_Name"] = "Manager Name";
	$fieldToolTipsactivators["English"]["Manager_Name"] = "";
	$fieldLabelsactivators["English"]["Manager_Number"] = "Manager Number";
	$fieldToolTipsactivators["English"]["Manager_Number"] = "";
	$fieldLabelsactivators["English"]["Activator_Name"] = "Activator Name";
	$fieldToolTipsactivators["English"]["Activator_Name"] = "";
	$fieldLabelsactivators["English"]["Activator_Number"] = "Activator Number";
	$fieldToolTipsactivators["English"]["Activator_Number"] = "";
	$fieldLabelsactivators["English"]["mydata"] = "Mydata";
	$fieldToolTipsactivators["English"]["mydata"] = "";
	$fieldLabelsactivators["English"]["pos_type"] = "POS TYPE";
	$fieldToolTipsactivators["English"]["pos_type"] = "";
	$fieldLabelsactivators["English"]["business_name"] = "Business Name";
	$fieldToolTipsactivators["English"]["business_name"] = "";
	$fieldLabelsactivators["English"]["altenative_number"] = "Altenative Number";
	$fieldToolTipsactivators["English"]["altenative_number"] = "";
	$fieldLabelsactivators["English"]["pos_iccid"] = "POS ICCID";
	$fieldToolTipsactivators["English"]["pos_iccid"] = "";
	$fieldLabelsactivators["English"]["registration_date"] = "Registration Date";
	$fieldToolTipsactivators["English"]["registration_date"] = "";
	$fieldLabelsactivators["English"]["gender"] = "Gender";
	$fieldToolTipsactivators["English"]["gender"] = "";
	$fieldLabelsactivators["English"]["DOB"] = "DOB";
	$fieldToolTipsactivators["English"]["DOB"] = "";
	$fieldLabelsactivators["English"]["id_type"] = "Id Type";
	$fieldToolTipsactivators["English"]["id_type"] = "";
	$fieldLabelsactivators["English"]["id_number"] = "Id Number";
	$fieldToolTipsactivators["English"]["id_number"] = "";
	$fieldLabelsactivators["English"]["lat"] = "Lat";
	$fieldToolTipsactivators["English"]["lat"] = "";
	$fieldLabelsactivators["English"]["lon"] = "Lon";
	$fieldToolTipsactivators["English"]["lon"] = "";
	$fieldLabelsactivators["English"]["Area"] = "Area";
	$fieldToolTipsactivators["English"]["Area"] = "";
	$fieldLabelsactivators["English"]["Team_Leader"] = "Team Leader";
	$fieldToolTipsactivators["English"]["Team_Leader"] = "";
	$fieldLabelsactivators["English"]["Working_Location"] = "Working Location";
	$fieldToolTipsactivators["English"]["Working_Location"] = "";
	$fieldLabelsactivators["English"]["Batch_Paid"] = "Batch Paid";
	$fieldToolTipsactivators["English"]["Batch_Paid"] = "";
	$fieldLabelsactivators["English"]["Route"] = "Route";
	$fieldToolTipsactivators["English"]["Route"] = "";
	$fieldLabelsactivators["English"]["last_chekin"] = "Last Chekin";
	$fieldToolTipsactivators["English"]["last_chekin"] = "";
	$fieldLabelsactivators["English"]["Manager_Title"] = "Manager Title";
	$fieldToolTipsactivators["English"]["Manager_Title"] = "";
	if (count($fieldToolTipsactivators["English"]))
		$tdataactivators[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsactivators[""] = array();
	$fieldToolTipsactivators[""] = array();
	$pageTitlesactivators[""] = array();
	$fieldLabelsactivators[""]["ID"] = "ID";
	$fieldToolTipsactivators[""]["ID"] = "";
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

	


$tdataactivators[".showAddInPopup"] = true;

$tdataactivators[".showEditInPopup"] = true;

$tdataactivators[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
					
;
$popupPagesLayoutNames["add"] = "add";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdataactivators[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataactivators[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataactivators[".listAjax"] = true;
else 
	$tdataactivators[".listAjax"] = false;

	$tdataactivators[".audit"] = false;

	$tdataactivators[".locking"] = false;

$tdataactivators[".edit"] = true;
$tdataactivators[".view"] = true;

$tdataactivators[".exportTo"] = true;



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
		$tdataactivators[".allSearchFields"][] = "Manager_Name";
		$tdataactivators[".allSearchFields"][] = "Manager_Number";
		$tdataactivators[".allSearchFields"][] = "Manager_Title";
		$tdataactivators[".allSearchFields"][] = "Activator_Name";
		$tdataactivators[".allSearchFields"][] = "Activator_Number";
		$tdataactivators[".allSearchFields"][] = "business_name";
		$tdataactivators[".allSearchFields"][] = "altenative_number";
		$tdataactivators[".allSearchFields"][] = "pos_iccid";
		$tdataactivators[".allSearchFields"][] = "registration_date";
		$tdataactivators[".allSearchFields"][] = "gender";
		$tdataactivators[".allSearchFields"][] = "DOB";
		$tdataactivators[".allSearchFields"][] = "Area";
		$tdataactivators[".allSearchFields"][] = "Route";
		$tdataactivators[".allSearchFields"][] = "id_type";
		$tdataactivators[".allSearchFields"][] = "id_number";
		$tdataactivators[".allSearchFields"][] = "Team_Leader";
		$tdataactivators[".allSearchFields"][] = "Working_Location";
		$tdataactivators[".allSearchFields"][] = "Batch_Paid";
		$tdataactivators[".allSearchFields"][] = "lat";
		$tdataactivators[".allSearchFields"][] = "lon";
		
$tdataactivators[".googleLikeFields"] = array();
$tdataactivators[".googleLikeFields"][] = "pos_type";
$tdataactivators[".googleLikeFields"][] = "Manager_Name";
$tdataactivators[".googleLikeFields"][] = "Manager_Number";
$tdataactivators[".googleLikeFields"][] = "Manager_Title";
$tdataactivators[".googleLikeFields"][] = "Activator_Name";
$tdataactivators[".googleLikeFields"][] = "Activator_Number";
$tdataactivators[".googleLikeFields"][] = "business_name";
$tdataactivators[".googleLikeFields"][] = "altenative_number";
$tdataactivators[".googleLikeFields"][] = "pos_iccid";
$tdataactivators[".googleLikeFields"][] = "registration_date";
$tdataactivators[".googleLikeFields"][] = "gender";
$tdataactivators[".googleLikeFields"][] = "DOB";
$tdataactivators[".googleLikeFields"][] = "Area";
$tdataactivators[".googleLikeFields"][] = "Route";
$tdataactivators[".googleLikeFields"][] = "id_type";
$tdataactivators[".googleLikeFields"][] = "id_number";
$tdataactivators[".googleLikeFields"][] = "Team_Leader";
$tdataactivators[".googleLikeFields"][] = "Working_Location";
$tdataactivators[".googleLikeFields"][] = "Batch_Paid";
$tdataactivators[".googleLikeFields"][] = "lat";
$tdataactivators[".googleLikeFields"][] = "lon";


$tdataactivators[".advSearchFields"] = array();
$tdataactivators[".advSearchFields"][] = "pos_type";
$tdataactivators[".advSearchFields"][] = "Manager_Name";
$tdataactivators[".advSearchFields"][] = "Manager_Number";
$tdataactivators[".advSearchFields"][] = "Manager_Title";
$tdataactivators[".advSearchFields"][] = "Activator_Name";
$tdataactivators[".advSearchFields"][] = "Activator_Number";
$tdataactivators[".advSearchFields"][] = "business_name";
$tdataactivators[".advSearchFields"][] = "altenative_number";
$tdataactivators[".advSearchFields"][] = "pos_iccid";
$tdataactivators[".advSearchFields"][] = "registration_date";
$tdataactivators[".advSearchFields"][] = "gender";
$tdataactivators[".advSearchFields"][] = "DOB";
$tdataactivators[".advSearchFields"][] = "Area";
$tdataactivators[".advSearchFields"][] = "Route";
$tdataactivators[".advSearchFields"][] = "id_type";
$tdataactivators[".advSearchFields"][] = "id_number";
$tdataactivators[".advSearchFields"][] = "Team_Leader";
$tdataactivators[".advSearchFields"][] = "Working_Location";
$tdataactivators[".advSearchFields"][] = "Batch_Paid";
$tdataactivators[".advSearchFields"][] = "lat";
$tdataactivators[".advSearchFields"][] = "lon";

$tdataactivators[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdataactivators[".pageSize"] = 20;

$tdataactivators[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataactivators[".strOrderBy"] = $tstrOrderBy;

$tdataactivators[".orderindexes"] = array();

$tdataactivators[".sqlHead"] = "SELECT ID,   pos_type,   Manager_Name,   Manager_Number,   Manager_Title,   Activator_Name,   Activator_Number,   business_name,   altenative_number,   pos_iccid,   registration_date,   gender,   DOB,   Area,   Route,   id_type,   id_number,   Team_Leader,   Working_Location,   Batch_Paid,   lat,   lon,   last_chekin,   mydata";
$tdataactivators[".sqlFrom"] = "FROM activators";
$tdataactivators[".sqlWhereExpr"] = "";
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
$tableKeysactivators[] = "ID";
$tdataactivators[".Keys"] = $tableKeysactivators;

$tdataactivators[".listFields"] = array();
$tdataactivators[".listFields"][] = "Activator_Number";
$tdataactivators[".listFields"][] = "pos_type";
$tdataactivators[".listFields"][] = "Manager_Name";
$tdataactivators[".listFields"][] = "Manager_Number";
$tdataactivators[".listFields"][] = "Manager_Title";
$tdataactivators[".listFields"][] = "Activator_Name";

$tdataactivators[".hideMobileList"] = array();


$tdataactivators[".viewFields"] = array();
$tdataactivators[".viewFields"][] = "Activator_Number";
$tdataactivators[".viewFields"][] = "pos_type";
$tdataactivators[".viewFields"][] = "Manager_Name";
$tdataactivators[".viewFields"][] = "Manager_Number";
$tdataactivators[".viewFields"][] = "Manager_Title";
$tdataactivators[".viewFields"][] = "Team_Leader";
$tdataactivators[".viewFields"][] = "Activator_Name";
$tdataactivators[".viewFields"][] = "business_name";
$tdataactivators[".viewFields"][] = "Area";
$tdataactivators[".viewFields"][] = "Route";
$tdataactivators[".viewFields"][] = "altenative_number";
$tdataactivators[".viewFields"][] = "pos_iccid";
$tdataactivators[".viewFields"][] = "registration_date";
$tdataactivators[".viewFields"][] = "gender";
$tdataactivators[".viewFields"][] = "DOB";
$tdataactivators[".viewFields"][] = "id_type";
$tdataactivators[".viewFields"][] = "id_number";
$tdataactivators[".viewFields"][] = "Working_Location";
$tdataactivators[".viewFields"][] = "Batch_Paid";
$tdataactivators[".viewFields"][] = "lat";
$tdataactivators[".viewFields"][] = "lon";

$tdataactivators[".addFields"] = array();

$tdataactivators[".inlineAddFields"] = array();

$tdataactivators[".editFields"] = array();
$tdataactivators[".editFields"][] = "Activator_Number";
$tdataactivators[".editFields"][] = "pos_type";
$tdataactivators[".editFields"][] = "Manager_Name";
$tdataactivators[".editFields"][] = "Manager_Number";
$tdataactivators[".editFields"][] = "Manager_Title";
$tdataactivators[".editFields"][] = "Team_Leader";
$tdataactivators[".editFields"][] = "Activator_Name";
$tdataactivators[".editFields"][] = "business_name";
$tdataactivators[".editFields"][] = "Area";
$tdataactivators[".editFields"][] = "Route";
$tdataactivators[".editFields"][] = "altenative_number";
$tdataactivators[".editFields"][] = "pos_iccid";
$tdataactivators[".editFields"][] = "registration_date";
$tdataactivators[".editFields"][] = "gender";
$tdataactivators[".editFields"][] = "DOB";
$tdataactivators[".editFields"][] = "id_type";
$tdataactivators[".editFields"][] = "id_number";
$tdataactivators[".editFields"][] = "Working_Location";
$tdataactivators[".editFields"][] = "Batch_Paid";
$tdataactivators[".editFields"][] = "lat";
$tdataactivators[".editFields"][] = "lon";

$tdataactivators[".inlineEditFields"] = array();

$tdataactivators[".exportFields"] = array();
$tdataactivators[".exportFields"][] = "Manager_Title";
$tdataactivators[".exportFields"][] = "Activator_Number";
$tdataactivators[".exportFields"][] = "pos_type";
$tdataactivators[".exportFields"][] = "Manager_Name";
$tdataactivators[".exportFields"][] = "Manager_Number";
$tdataactivators[".exportFields"][] = "Team_Leader";
$tdataactivators[".exportFields"][] = "Activator_Name";
$tdataactivators[".exportFields"][] = "business_name";
$tdataactivators[".exportFields"][] = "Area";
$tdataactivators[".exportFields"][] = "Route";
$tdataactivators[".exportFields"][] = "altenative_number";
$tdataactivators[".exportFields"][] = "pos_iccid";
$tdataactivators[".exportFields"][] = "registration_date";
$tdataactivators[".exportFields"][] = "gender";
$tdataactivators[".exportFields"][] = "DOB";
$tdataactivators[".exportFields"][] = "id_type";
$tdataactivators[".exportFields"][] = "id_number";
$tdataactivators[".exportFields"][] = "Working_Location";
$tdataactivators[".exportFields"][] = "Batch_Paid";
$tdataactivators[".exportFields"][] = "lat";
$tdataactivators[".exportFields"][] = "lon";

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
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pos_type"; 
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "title_lookup";
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
	
		
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "controller";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Manager_Number", 'lookupF'=>"Sales_Coordinator_Number");
	$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "Sales_Coordinator_Name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Sales_Coordinator_Name";
	
		
	$edata["LookupOrderBy"] = "Sales_Coordinator_Name";
	
		
			
		
				
	
	
		
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
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Manager_Number"; 
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
		
	// the end of search options settings	

	

	
	$tdataactivators["Manager_Number"] = $fdata;
//	Manager_Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Manager_Title";
	$fdata["GoodName"] = "Manager_Title";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","Manager_Title"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "title_lookup";
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
	
	// the end of search options settings	

	

	
	$tdataactivators["Manager_Title"] = $fdata;
//	Activator_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Activator_Name";
	$fdata["GoodName"] = "Activator_Name";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","Activator_Name"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
	// the end of search options settings	

	

	
	$tdataactivators["Activator_Name"] = $fdata;
//	Activator_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Activator_Number";
	$fdata["GoodName"] = "Activator_Number";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","Activator_Number"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";	
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");
	
	//	End validation
	
		
				
		
		$edata["denyDuplicates"] = true;	

		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
	// the end of search options settings	

	

	
	$tdataactivators["Activator_Number"] = $fdata;
//	business_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "business_name";
	$fdata["GoodName"] = "business_name";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","business_name"); 
	$fdata["FieldType"] = 200;
	
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "business_name"; 
		$fdata["FullName"] = "business_name";
	
		
		
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

	

	
	$tdataactivators["business_name"] = $fdata;
//	altenative_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "altenative_number";
	$fdata["GoodName"] = "altenative_number";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","altenative_number"); 
	$fdata["FieldType"] = 200;
	
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "altenative_number"; 
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
		
	// the end of search options settings	

	

	
	$tdataactivators["altenative_number"] = $fdata;
//	pos_iccid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "pos_iccid";
	$fdata["GoodName"] = "pos_iccid";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","pos_iccid"); 
	$fdata["FieldType"] = 200;
	
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "pos_iccid"; 
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

	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";	
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");
	
	//	End validation
	
		
				
		
		$edata["denyDuplicates"] = true;	

		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
	// the end of search options settings	

	

	
	$tdataactivators["pos_iccid"] = $fdata;
//	registration_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "registration_date";
	$fdata["GoodName"] = "registration_date";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","registration_date"); 
	$fdata["FieldType"] = 200;
	
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "registration_date"; 
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
		
	// the end of search options settings	

	

	
	$tdataactivators["registration_date"] = $fdata;
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","gender"); 
	$fdata["FieldType"] = 200;
	
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "gender"; 
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
	
	// the end of search options settings	

	

	
	$tdataactivators["gender"] = $fdata;
//	DOB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DOB";
	$fdata["GoodName"] = "DOB";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","DOB"); 
	$fdata["FieldType"] = 200;
	
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DOB"; 
		$fdata["FullName"] = "DOB";
	
		
		
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
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 200; 
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
		
	// the end of search options settings	

	

	
	$tdataactivators["DOB"] = $fdata;
//	Area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Area";
	$fdata["GoodName"] = "Area";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","Area"); 
	$fdata["FieldType"] = 200;
	
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
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

	

	
	$tdataactivators["Area"] = $fdata;
//	Route
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Route";
	$fdata["GoodName"] = "Route";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","Route"); 
	$fdata["FieldType"] = 200;
	
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Route"; 
		$fdata["FullName"] = "Route";
	
		
		
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

	

	
	$tdataactivators["Route"] = $fdata;
//	id_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "id_type";
	$fdata["GoodName"] = "id_type";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","id_type"); 
	$fdata["FieldType"] = 200;
	
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id_type"; 
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "PASSPORT";
	$edata["LookupValues"][] = "SCHOOL ID";
	$edata["LookupValues"][] = "WORK ID";
	$edata["LookupValues"][] = "DRIVING LISENCE";
	$edata["LookupValues"][] = "LOCAL GOVERMENT";
	$edata["LookupValues"][] = "VOTER ID";
	$edata["LookupValues"][] = "SOCIAL SECURITY ID";
	$edata["LookupValues"][] = "NATIONAL ID";
	$edata["LookupValues"][] = "OTHERS";

		
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
	
	// the end of search options settings	

	

	
	$tdataactivators["id_type"] = $fdata;
//	id_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "id_number";
	$fdata["GoodName"] = "id_number";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","id_number"); 
	$fdata["FieldType"] = 200;
	
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id_number"; 
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

	

	
	$tdataactivators["id_number"] = $fdata;
//	Team_Leader
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Team_Leader";
	$fdata["GoodName"] = "Team_Leader";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","Team_Leader"); 
	$fdata["FieldType"] = 200;
	
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "team_leader";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "Team_Leader_Name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Team_Leader_Name";
	
		
	$edata["LookupOrderBy"] = "Team_Leader_Name";
	
		
			
		
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
	
	// the end of search options settings	

	

	
	$tdataactivators["Team_Leader"] = $fdata;
//	Working_Location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Working_Location";
	$fdata["GoodName"] = "Working_Location";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","Working_Location"); 
	$fdata["FieldType"] = 200;
	
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Working_Location"; 
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

	

	
	$tdataactivators["Working_Location"] = $fdata;
//	Batch_Paid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Batch_Paid";
	$fdata["GoodName"] = "Batch_Paid";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","Batch_Paid"); 
	$fdata["FieldType"] = 200;
	
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Batch_Paid"; 
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "paid_batch_lookup";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "Batch_Paid";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Batch_Paid";
	
		
	$edata["LookupOrderBy"] = "Batch_Paid";
	
		
			
		
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
	
	// the end of search options settings	

	

	
	$tdataactivators["Batch_Paid"] = $fdata;
//	lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "lat";
	$fdata["GoodName"] = "lat";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","lat"); 
	$fdata["FieldType"] = 5;
	
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "lat"; 
		$fdata["FullName"] = "lat";
	
		
		
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
	
	
	
	
// the field's search options settings
		
	// the end of search options settings	

	

	
	$tdataactivators["lat"] = $fdata;
//	lon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "lon";
	$fdata["GoodName"] = "lon";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","lon"); 
	$fdata["FieldType"] = 5;
	
		
				
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "lon"; 
		$fdata["FullName"] = "lon";
	
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
	// the end of search options settings	

	

	
	$tdataactivators["lon"] = $fdata;
//	last_chekin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "last_chekin";
	$fdata["GoodName"] = "last_chekin";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","last_chekin"); 
	$fdata["FieldType"] = 200;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "last_chekin"; 
		$fdata["FullName"] = "last_chekin";
	
		
		
				
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
	
	
	
	

	

	
	$tdataactivators["last_chekin"] = $fdata;
//	mydata
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "mydata";
	$fdata["GoodName"] = "mydata";
	$fdata["ownerTable"] = "activators";
	$fdata["Label"] = GetFieldLabel("activators","mydata"); 
	$fdata["FieldType"] = 20;
	
		
				
		
		
		
		
		
		
		
		
		
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
	
	
	
	

	

	
	$tdataactivators["mydata"] = $fdata;

	
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
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "ID,   pos_type,   Manager_Name,   Manager_Number,   Manager_Title,   Activator_Name,   Activator_Number,   business_name,   altenative_number,   pos_iccid,   registration_date,   gender,   DOB,   Area,   Route,   id_type,   id_number,   Team_Leader,   Working_Location,   Batch_Paid,   lat,   lon,   last_chekin,   mydata";
$proto3["m_strFrom"] = "FROM activators";
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
	"m_strTable" => "activators"
));

$proto8["m_sql"] = "ID";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "pos_type",
	"m_strTable" => "activators"
));

$proto10["m_sql"] = "pos_type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Name",
	"m_strTable" => "activators"
));

$proto12["m_sql"] = "Manager_Name";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Number",
	"m_strTable" => "activators"
));

$proto14["m_sql"] = "Manager_Number";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Title",
	"m_strTable" => "activators"
));

$proto16["m_sql"] = "Manager_Title";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Activator_Name",
	"m_strTable" => "activators"
));

$proto18["m_sql"] = "Activator_Name";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Activator_Number",
	"m_strTable" => "activators"
));

$proto20["m_sql"] = "Activator_Number";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "business_name",
	"m_strTable" => "activators"
));

$proto22["m_sql"] = "business_name";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto3["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "altenative_number",
	"m_strTable" => "activators"
));

$proto24["m_sql"] = "altenative_number";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto3["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "pos_iccid",
	"m_strTable" => "activators"
));

$proto26["m_sql"] = "pos_iccid";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto3["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "registration_date",
	"m_strTable" => "activators"
));

$proto28["m_sql"] = "registration_date";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto3["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "activators"
));

$proto30["m_sql"] = "gender";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto3["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DOB",
	"m_strTable" => "activators"
));

$proto32["m_sql"] = "DOB";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto3["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Area",
	"m_strTable" => "activators"
));

$proto34["m_sql"] = "Area";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto3["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Route",
	"m_strTable" => "activators"
));

$proto36["m_sql"] = "Route";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto3["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "id_type",
	"m_strTable" => "activators"
));

$proto38["m_sql"] = "id_type";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto3["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "id_number",
	"m_strTable" => "activators"
));

$proto40["m_sql"] = "id_number";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto3["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Team_Leader",
	"m_strTable" => "activators"
));

$proto42["m_sql"] = "Team_Leader";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto3["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Working_Location",
	"m_strTable" => "activators"
));

$proto44["m_sql"] = "Working_Location";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto3["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Batch_Paid",
	"m_strTable" => "activators"
));

$proto46["m_sql"] = "Batch_Paid";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto3["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "lat",
	"m_strTable" => "activators"
));

$proto48["m_sql"] = "lat";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto3["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "lon",
	"m_strTable" => "activators"
));

$proto50["m_sql"] = "lon";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto3["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "last_chekin",
	"m_strTable" => "activators"
));

$proto52["m_sql"] = "last_chekin";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto3["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "mydata",
	"m_strTable" => "activators"
));

$proto54["m_sql"] = "mydata";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto56=array();
$proto56["m_link"] = "SQLL_MAIN";
			$proto57=array();
$proto57["m_strName"] = "activators";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "ID";
$proto57["m_columns"][] = "pos_type";
$proto57["m_columns"][] = "Manager_Name";
$proto57["m_columns"][] = "Manager_Number";
$proto57["m_columns"][] = "Manager_Title";
$proto57["m_columns"][] = "Activator_Name";
$proto57["m_columns"][] = "Activator_Number";
$proto57["m_columns"][] = "business_name";
$proto57["m_columns"][] = "altenative_number";
$proto57["m_columns"][] = "pos_iccid";
$proto57["m_columns"][] = "registration_date";
$proto57["m_columns"][] = "gender";
$proto57["m_columns"][] = "DOB";
$proto57["m_columns"][] = "Area";
$proto57["m_columns"][] = "Route";
$proto57["m_columns"][] = "id_type";
$proto57["m_columns"][] = "id_number";
$proto57["m_columns"][] = "Team_Leader";
$proto57["m_columns"][] = "Working_Location";
$proto57["m_columns"][] = "Batch_Paid";
$proto57["m_columns"][] = "lat";
$proto57["m_columns"][] = "lon";
$proto57["m_columns"][] = "last_chekin";
$proto57["m_columns"][] = "mydata";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "activators";
$proto56["m_alias"] = "";
$proto58=array();
$proto58["m_sql"] = "";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_activators = createSqlQuery_activators();

																								
	
$tdataactivators[".sqlquery"] = $queryData_activators;

$tableEvents["activators"] = new eventsBase;
$tdataactivators[".hasEvents"] = false;

$cipherer = new RunnerCipherer("activators");

?>