<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapos_visits = array();	
	$tdatapos_visits[".truncateText"] = true;
	$tdatapos_visits[".NumberOfChars"] = 80; 
	$tdatapos_visits[".ShortName"] = "pos_visits";
	$tdatapos_visits[".OwnerID"] = "mydata";
	$tdatapos_visits[".OriginalTable"] = "pos_visits";

//	field labels
$fieldLabelspos_visits = array();
$fieldToolTipspos_visits = array();
$pageTitlespos_visits = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspos_visits["English"] = array();
	$fieldToolTipspos_visits["English"] = array();
	$pageTitlespos_visits["English"] = array();
	$fieldLabelspos_visits["English"]["ID"] = "ID";
	$fieldToolTipspos_visits["English"]["ID"] = "";
	$fieldLabelspos_visits["English"]["pos_type"] = "Pos Type";
	$fieldToolTipspos_visits["English"]["pos_type"] = "";
	$fieldLabelspos_visits["English"]["Manager_Name"] = "Manager Name";
	$fieldToolTipspos_visits["English"]["Manager_Name"] = "";
	$fieldLabelspos_visits["English"]["Manager_Number"] = "Manager Number";
	$fieldToolTipspos_visits["English"]["Manager_Number"] = "";
	$fieldLabelspos_visits["English"]["Activator_Name"] = "POS Owner Name";
	$fieldToolTipspos_visits["English"]["Activator_Name"] = "";
	$fieldLabelspos_visits["English"]["Activator_Number"] = "POS Number";
	$fieldToolTipspos_visits["English"]["Activator_Number"] = "";
	$fieldLabelspos_visits["English"]["business_name"] = "Business Name";
	$fieldToolTipspos_visits["English"]["business_name"] = "";
	$fieldLabelspos_visits["English"]["altenative_number"] = "Altenative Number";
	$fieldToolTipspos_visits["English"]["altenative_number"] = "";
	$fieldLabelspos_visits["English"]["Area"] = "Area";
	$fieldToolTipspos_visits["English"]["Area"] = "";
	$fieldLabelspos_visits["English"]["last_chekin"] = "Last Chekin";
	$fieldToolTipspos_visits["English"]["last_chekin"] = "";
	$fieldLabelspos_visits["English"]["mydata"] = "Mydata";
	$fieldToolTipspos_visits["English"]["mydata"] = "";
	$fieldLabelspos_visits["English"]["Date"] = "Date";
	$fieldToolTipspos_visits["English"]["Date"] = "";
	$fieldLabelspos_visits["English"]["Sale"] = "Transfer";
	$fieldToolTipspos_visits["English"]["Sale"] = "";
	$fieldLabelspos_visits["English"]["Transfer_Amount"] = "Transfer Amount";
	$fieldToolTipspos_visits["English"]["Transfer_Amount"] = "";
	$fieldLabelspos_visits["English"]["Transfer_From"] = "Transfer From";
	$fieldToolTipspos_visits["English"]["Transfer_From"] = "";
	$fieldLabelspos_visits["English"]["Transfer_Date"] = "Transfer Date";
	$fieldToolTipspos_visits["English"]["Transfer_Date"] = "";
	$fieldLabelspos_visits["English"]["My_Transfer"] = "My Transfer";
	$fieldToolTipspos_visits["English"]["My_Transfer"] = "";
	if (count($fieldToolTipspos_visits["English"]))
		$tdatapos_visits[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspos_visits[""] = array();
	$fieldToolTipspos_visits[""] = array();
	$pageTitlespos_visits[""] = array();
	$fieldLabelspos_visits[""]["ID"] = "ID";
	$fieldToolTipspos_visits[""]["ID"] = "";
	if (count($fieldToolTipspos_visits[""]))
		$tdatapos_visits[".isUseToolTips"] = true;
}
	
	
	$tdatapos_visits[".NCSearch"] = true;



$tdatapos_visits[".shortTableName"] = "pos_visits";
$tdatapos_visits[".nSecOptions"] = 1;
$tdatapos_visits[".recsPerRowList"] = 1;
$tdatapos_visits[".mainTableOwnerID"] = "mydata";
$tdatapos_visits[".moveNext"] = 1;
$tdatapos_visits[".nType"] = 0;

$tdatapos_visits[".strOriginalTableName"] = "pos_visits";

	


$tdatapos_visits[".showAddInPopup"] = true;

$tdatapos_visits[".showEditInPopup"] = true;

$tdatapos_visits[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
			;
$popupPagesLayoutNames["add"] = "login2";
			;
$popupPagesLayoutNames["edit"] = "login2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatapos_visits[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapos_visits[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatapos_visits[".listAjax"] = true;
else 
	$tdatapos_visits[".listAjax"] = false;

	$tdatapos_visits[".audit"] = false;

	$tdatapos_visits[".locking"] = false;

$tdatapos_visits[".view"] = true;

$tdatapos_visits[".exportTo"] = true;



$tdatapos_visits[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapos_visits[".searchSaving"] = false;
//

$tdatapos_visits[".showSearchPanel"] = true;
		$tdatapos_visits[".flexibleSearch"] = true;		

if (isMobile())
	$tdatapos_visits[".isUseAjaxSuggest"] = false;
else 
	$tdatapos_visits[".isUseAjaxSuggest"] = true;

$tdatapos_visits[".rowHighlite"] = true;



$tdatapos_visits[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapos_visits[".isUseTimeForSearch"] = false;





$tdatapos_visits[".allSearchFields"] = array();
$tdatapos_visits[".filterFields"] = array();
$tdatapos_visits[".requiredSearchFields"] = array();

$tdatapos_visits[".allSearchFields"][] = "Manager_Name";
		$tdatapos_visits[".allSearchFields"][] = "Activator_Name";
		$tdatapos_visits[".allSearchFields"][] = "Activator_Number";
		$tdatapos_visits[".allSearchFields"][] = "business_name";
		$tdatapos_visits[".allSearchFields"][] = "altenative_number";
		$tdatapos_visits[".allSearchFields"][] = "Area";
		$tdatapos_visits[".allSearchFields"][] = "Date";
		$tdatapos_visits[".allSearchFields"][] = "last_chekin";
		$tdatapos_visits[".allSearchFields"][] = "Sale";
		$tdatapos_visits[".allSearchFields"][] = "Transfer_Amount";
		$tdatapos_visits[".allSearchFields"][] = "Transfer_From";
		$tdatapos_visits[".allSearchFields"][] = "Transfer_Date";
		$tdatapos_visits[".allSearchFields"][] = "My_Transfer";
		
$tdatapos_visits[".googleLikeFields"] = array();
$tdatapos_visits[".googleLikeFields"][] = "ID";
$tdatapos_visits[".googleLikeFields"][] = "pos_type";
$tdatapos_visits[".googleLikeFields"][] = "Manager_Name";
$tdatapos_visits[".googleLikeFields"][] = "Manager_Number";
$tdatapos_visits[".googleLikeFields"][] = "Activator_Name";
$tdatapos_visits[".googleLikeFields"][] = "Activator_Number";
$tdatapos_visits[".googleLikeFields"][] = "business_name";
$tdatapos_visits[".googleLikeFields"][] = "altenative_number";
$tdatapos_visits[".googleLikeFields"][] = "Area";
$tdatapos_visits[".googleLikeFields"][] = "Date";
$tdatapos_visits[".googleLikeFields"][] = "last_chekin";
$tdatapos_visits[".googleLikeFields"][] = "Sale";
$tdatapos_visits[".googleLikeFields"][] = "Transfer_Amount";
$tdatapos_visits[".googleLikeFields"][] = "Transfer_From";
$tdatapos_visits[".googleLikeFields"][] = "Transfer_Date";
$tdatapos_visits[".googleLikeFields"][] = "My_Transfer";
$tdatapos_visits[".googleLikeFields"][] = "mydata";


$tdatapos_visits[".advSearchFields"] = array();
$tdatapos_visits[".advSearchFields"][] = "Manager_Name";
$tdatapos_visits[".advSearchFields"][] = "Activator_Name";
$tdatapos_visits[".advSearchFields"][] = "Activator_Number";
$tdatapos_visits[".advSearchFields"][] = "business_name";
$tdatapos_visits[".advSearchFields"][] = "altenative_number";
$tdatapos_visits[".advSearchFields"][] = "Area";
$tdatapos_visits[".advSearchFields"][] = "Date";
$tdatapos_visits[".advSearchFields"][] = "last_chekin";
$tdatapos_visits[".advSearchFields"][] = "Sale";
$tdatapos_visits[".advSearchFields"][] = "Transfer_Amount";
$tdatapos_visits[".advSearchFields"][] = "Transfer_From";
$tdatapos_visits[".advSearchFields"][] = "Transfer_Date";
$tdatapos_visits[".advSearchFields"][] = "My_Transfer";

$tdatapos_visits[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdatapos_visits[".pageSize"] = 20;

$tdatapos_visits[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapos_visits[".strOrderBy"] = $tstrOrderBy;

$tdatapos_visits[".orderindexes"] = array();

$tdatapos_visits[".sqlHead"] = "SELECT ID,   pos_type,   Manager_Name,   Manager_Number,   Activator_Name,   Activator_Number,   business_name,   altenative_number,   Area,   `Date`,   last_chekin,   Sale,   Transfer_Amount,   Transfer_From,   Transfer_Date,   My_Transfer,   mydata";
$tdatapos_visits[".sqlFrom"] = "FROM pos_visits";
$tdatapos_visits[".sqlWhereExpr"] = "";
$tdatapos_visits[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapos_visits[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapos_visits[".arrGroupsPerPage"] = $arrGPP;

$tdatapos_visits[".highlightSearchResults"] = true;

$tableKeyspos_visits = array();
$tableKeyspos_visits[] = "ID";
$tdatapos_visits[".Keys"] = $tableKeyspos_visits;

$tdatapos_visits[".listFields"] = array();
$tdatapos_visits[".listFields"][] = "Manager_Name";
$tdatapos_visits[".listFields"][] = "Activator_Name";
$tdatapos_visits[".listFields"][] = "Activator_Number";
$tdatapos_visits[".listFields"][] = "business_name";
$tdatapos_visits[".listFields"][] = "altenative_number";
$tdatapos_visits[".listFields"][] = "Area";
$tdatapos_visits[".listFields"][] = "Date";
$tdatapos_visits[".listFields"][] = "last_chekin";
$tdatapos_visits[".listFields"][] = "Sale";
$tdatapos_visits[".listFields"][] = "Transfer_Amount";
$tdatapos_visits[".listFields"][] = "Transfer_From";
$tdatapos_visits[".listFields"][] = "Transfer_Date";
$tdatapos_visits[".listFields"][] = "My_Transfer";

$tdatapos_visits[".hideMobileList"] = array();


$tdatapos_visits[".viewFields"] = array();
$tdatapos_visits[".viewFields"][] = "Manager_Name";
$tdatapos_visits[".viewFields"][] = "Activator_Name";
$tdatapos_visits[".viewFields"][] = "Activator_Number";
$tdatapos_visits[".viewFields"][] = "business_name";
$tdatapos_visits[".viewFields"][] = "altenative_number";
$tdatapos_visits[".viewFields"][] = "Area";
$tdatapos_visits[".viewFields"][] = "Date";
$tdatapos_visits[".viewFields"][] = "last_chekin";
$tdatapos_visits[".viewFields"][] = "Sale";
$tdatapos_visits[".viewFields"][] = "Transfer_Amount";
$tdatapos_visits[".viewFields"][] = "Transfer_From";
$tdatapos_visits[".viewFields"][] = "Transfer_Date";
$tdatapos_visits[".viewFields"][] = "My_Transfer";

$tdatapos_visits[".addFields"] = array();

$tdatapos_visits[".inlineAddFields"] = array();

$tdatapos_visits[".editFields"] = array();

$tdatapos_visits[".inlineEditFields"] = array();

$tdatapos_visits[".exportFields"] = array();
$tdatapos_visits[".exportFields"][] = "Manager_Name";
$tdatapos_visits[".exportFields"][] = "Activator_Name";
$tdatapos_visits[".exportFields"][] = "Activator_Number";
$tdatapos_visits[".exportFields"][] = "business_name";
$tdatapos_visits[".exportFields"][] = "altenative_number";
$tdatapos_visits[".exportFields"][] = "Area";
$tdatapos_visits[".exportFields"][] = "Date";
$tdatapos_visits[".exportFields"][] = "last_chekin";
$tdatapos_visits[".exportFields"][] = "Sale";
$tdatapos_visits[".exportFields"][] = "Transfer_Amount";
$tdatapos_visits[".exportFields"][] = "Transfer_From";
$tdatapos_visits[".exportFields"][] = "Transfer_Date";
$tdatapos_visits[".exportFields"][] = "My_Transfer";

$tdatapos_visits[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "pos_visits";
	$fdata["Label"] = GetFieldLabel("pos_visits","ID"); 
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
	
	
	
	

	

	
	$tdatapos_visits["ID"] = $fdata;
//	pos_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pos_type";
	$fdata["GoodName"] = "pos_type";
	$fdata["ownerTable"] = "pos_visits";
	$fdata["Label"] = GetFieldLabel("pos_visits","pos_type"); 
	$fdata["FieldType"] = 200;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "pos_type"; 
		$fdata["FullName"] = "pos_type";
	
		
		
				
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
	
	
	
	

	

	
	$tdatapos_visits["pos_type"] = $fdata;
//	Manager_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Manager_Name";
	$fdata["GoodName"] = "Manager_Name";
	$fdata["ownerTable"] = "pos_visits";
	$fdata["Label"] = GetFieldLabel("pos_visits","Manager_Name"); 
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

	

	
	$tdatapos_visits["Manager_Name"] = $fdata;
//	Manager_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Manager_Number";
	$fdata["GoodName"] = "Manager_Number";
	$fdata["ownerTable"] = "pos_visits";
	$fdata["Label"] = GetFieldLabel("pos_visits","Manager_Number"); 
	$fdata["FieldType"] = 20;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Manager_Number"; 
		$fdata["FullName"] = "Manager_Number";
	
		
		
				
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
	
	
	
	

	

	
	$tdatapos_visits["Manager_Number"] = $fdata;
//	Activator_Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Activator_Name";
	$fdata["GoodName"] = "Activator_Name";
	$fdata["ownerTable"] = "pos_visits";
	$fdata["Label"] = GetFieldLabel("pos_visits","Activator_Name"); 
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

	

	
	$tdatapos_visits["Activator_Name"] = $fdata;
//	Activator_Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Activator_Number";
	$fdata["GoodName"] = "Activator_Number";
	$fdata["ownerTable"] = "pos_visits";
	$fdata["Label"] = GetFieldLabel("pos_visits","Activator_Number"); 
	$fdata["FieldType"] = 3;
	
		
				
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapos_visits["Activator_Number"] = $fdata;
//	business_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "business_name";
	$fdata["GoodName"] = "business_name";
	$fdata["ownerTable"] = "pos_visits";
	$fdata["Label"] = GetFieldLabel("pos_visits","business_name"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatapos_visits["business_name"] = $fdata;
//	altenative_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "altenative_number";
	$fdata["GoodName"] = "altenative_number";
	$fdata["ownerTable"] = "pos_visits";
	$fdata["Label"] = GetFieldLabel("pos_visits","altenative_number"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
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

	

	
	$tdatapos_visits["altenative_number"] = $fdata;
//	Area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Area";
	$fdata["GoodName"] = "Area";
	$fdata["ownerTable"] = "pos_visits";
	$fdata["Label"] = GetFieldLabel("pos_visits","Area"); 
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

	

	
	$tdatapos_visits["Area"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "pos_visits";
	$fdata["Label"] = GetFieldLabel("pos_visits","Date"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Date"; 
		$fdata["FullName"] = "`Date`";
	
		
		
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

	

	
	$tdatapos_visits["Date"] = $fdata;
//	last_chekin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "last_chekin";
	$fdata["GoodName"] = "last_chekin";
	$fdata["ownerTable"] = "pos_visits";
	$fdata["Label"] = GetFieldLabel("pos_visits","last_chekin"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "last_chekin"; 
		$fdata["FullName"] = "last_chekin";
	
		
		
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

	

	
	$tdatapos_visits["last_chekin"] = $fdata;
//	Sale
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Sale";
	$fdata["GoodName"] = "Sale";
	$fdata["ownerTable"] = "pos_visits";
	$fdata["Label"] = GetFieldLabel("pos_visits","Sale"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Sale"; 
		$fdata["FullName"] = "Sale";
	
		
		
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
			$edata["EditParams"].= " maxlength=3";
	
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

	

	
	$tdatapos_visits["Sale"] = $fdata;
//	Transfer_Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Transfer_Amount";
	$fdata["GoodName"] = "Transfer_Amount";
	$fdata["ownerTable"] = "pos_visits";
	$fdata["Label"] = GetFieldLabel("pos_visits","Transfer_Amount"); 
	$fdata["FieldType"] = 20;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Transfer_Amount"; 
		$fdata["FullName"] = "Transfer_Amount";
	
		
		
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

	

	
	$tdatapos_visits["Transfer_Amount"] = $fdata;
//	Transfer_From
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Transfer_From";
	$fdata["GoodName"] = "Transfer_From";
	$fdata["ownerTable"] = "pos_visits";
	$fdata["Label"] = GetFieldLabel("pos_visits","Transfer_From"); 
	$fdata["FieldType"] = 3;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Transfer_From"; 
		$fdata["FullName"] = "Transfer_From";
	
		
		
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

	

	
	$tdatapos_visits["Transfer_From"] = $fdata;
//	Transfer_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Transfer_Date";
	$fdata["GoodName"] = "Transfer_Date";
	$fdata["ownerTable"] = "pos_visits";
	$fdata["Label"] = GetFieldLabel("pos_visits","Transfer_Date"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Transfer_Date"; 
		$fdata["FullName"] = "Transfer_Date";
	
		
		
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
			$edata["EditParams"].= " maxlength=12";
	
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

	

	
	$tdatapos_visits["Transfer_Date"] = $fdata;
//	My_Transfer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "My_Transfer";
	$fdata["GoodName"] = "My_Transfer";
	$fdata["ownerTable"] = "pos_visits";
	$fdata["Label"] = GetFieldLabel("pos_visits","My_Transfer"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "My_Transfer"; 
		$fdata["FullName"] = "My_Transfer";
	
		
		
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
			$edata["EditParams"].= " maxlength=3";
	
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

	

	
	$tdatapos_visits["My_Transfer"] = $fdata;
//	mydata
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "mydata";
	$fdata["GoodName"] = "mydata";
	$fdata["ownerTable"] = "pos_visits";
	$fdata["Label"] = GetFieldLabel("pos_visits","mydata"); 
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
	
	
	
	

	

	
	$tdatapos_visits["mydata"] = $fdata;

	
$tables_data["pos_visits"]=&$tdatapos_visits;
$field_labels["pos_visits"] = &$fieldLabelspos_visits;
$fieldToolTips["pos_visits"] = &$fieldToolTipspos_visits;
$page_titles["pos_visits"] = &$pageTitlespos_visits;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pos_visits"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["pos_visits"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pos_visits()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "ID,   pos_type,   Manager_Name,   Manager_Number,   Activator_Name,   Activator_Number,   business_name,   altenative_number,   Area,   `Date`,   last_chekin,   Sale,   Transfer_Amount,   Transfer_From,   Transfer_Date,   My_Transfer,   mydata";
$proto3["m_strFrom"] = "FROM pos_visits";
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
	"m_strTable" => "pos_visits"
));

$proto8["m_sql"] = "ID";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "pos_type",
	"m_strTable" => "pos_visits"
));

$proto10["m_sql"] = "pos_type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Name",
	"m_strTable" => "pos_visits"
));

$proto12["m_sql"] = "Manager_Name";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Manager_Number",
	"m_strTable" => "pos_visits"
));

$proto14["m_sql"] = "Manager_Number";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Activator_Name",
	"m_strTable" => "pos_visits"
));

$proto16["m_sql"] = "Activator_Name";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Activator_Number",
	"m_strTable" => "pos_visits"
));

$proto18["m_sql"] = "Activator_Number";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "business_name",
	"m_strTable" => "pos_visits"
));

$proto20["m_sql"] = "business_name";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "altenative_number",
	"m_strTable" => "pos_visits"
));

$proto22["m_sql"] = "altenative_number";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto3["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Area",
	"m_strTable" => "pos_visits"
));

$proto24["m_sql"] = "Area";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto3["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "pos_visits"
));

$proto26["m_sql"] = "`Date`";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto3["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "last_chekin",
	"m_strTable" => "pos_visits"
));

$proto28["m_sql"] = "last_chekin";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto3["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Sale",
	"m_strTable" => "pos_visits"
));

$proto30["m_sql"] = "Sale";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto3["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Transfer_Amount",
	"m_strTable" => "pos_visits"
));

$proto32["m_sql"] = "Transfer_Amount";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto3["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Transfer_From",
	"m_strTable" => "pos_visits"
));

$proto34["m_sql"] = "Transfer_From";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto3["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Transfer_Date",
	"m_strTable" => "pos_visits"
));

$proto36["m_sql"] = "Transfer_Date";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto3["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "My_Transfer",
	"m_strTable" => "pos_visits"
));

$proto38["m_sql"] = "My_Transfer";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto3["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "mydata",
	"m_strTable" => "pos_visits"
));

$proto40["m_sql"] = "mydata";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "pos_visits";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "ID";
$proto43["m_columns"][] = "pos_type";
$proto43["m_columns"][] = "Manager_Name";
$proto43["m_columns"][] = "Manager_Number";
$proto43["m_columns"][] = "Activator_Name";
$proto43["m_columns"][] = "Activator_Number";
$proto43["m_columns"][] = "business_name";
$proto43["m_columns"][] = "altenative_number";
$proto43["m_columns"][] = "Area";
$proto43["m_columns"][] = "Date";
$proto43["m_columns"][] = "last_chekin";
$proto43["m_columns"][] = "Sale";
$proto43["m_columns"][] = "Transfer_Amount";
$proto43["m_columns"][] = "Transfer_From";
$proto43["m_columns"][] = "Transfer_Date";
$proto43["m_columns"][] = "My_Transfer";
$proto43["m_columns"][] = "mydata";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "pos_visits";
$proto42["m_alias"] = "";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_pos_visits = createSqlQuery_pos_visits();

																	
	
$tdatapos_visits[".sqlquery"] = $queryData_pos_visits;

$tableEvents["pos_visits"] = new eventsBase;
$tdatapos_visits[".hasEvents"] = false;

$cipherer = new RunnerCipherer("pos_visits");

?>