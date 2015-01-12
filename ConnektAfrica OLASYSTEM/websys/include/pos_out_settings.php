<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapos_out = array();	
	$tdatapos_out[".truncateText"] = true;
	$tdatapos_out[".NumberOfChars"] = 80; 
	$tdatapos_out[".ShortName"] = "pos_out";
	$tdatapos_out[".OwnerID"] = "";
	$tdatapos_out[".OriginalTable"] = "pos_out";

//	field labels
$fieldLabelspos_out = array();
$fieldToolTipspos_out = array();
$pageTitlespos_out = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspos_out["English"] = array();
	$fieldToolTipspos_out["English"] = array();
	$pageTitlespos_out["English"] = array();
	$fieldLabelspos_out["English"]["ACCT_BOOK_ID"] = "ACCT BOOK ID";
	$fieldToolTipspos_out["English"]["ACCT_BOOK_ID"] = "";
	$fieldLabelspos_out["English"]["TRANSFER_DATE"] = "TRANSFER DATE";
	$fieldToolTipspos_out["English"]["TRANSFER_DATE"] = "";
	$fieldLabelspos_out["English"]["ORIGIANL_CUSTOMER"] = "ORIGIANL CUSTOMER";
	$fieldToolTipspos_out["English"]["ORIGIANL_CUSTOMER"] = "";
	$fieldLabelspos_out["English"]["ORG_SERVICE_NUMBER"] = "ORG SERVICE NUMBER";
	$fieldToolTipspos_out["English"]["ORG_SERVICE_NUMBER"] = "";
	$fieldLabelspos_out["English"]["CHARGE"] = "CHARGE";
	$fieldToolTipspos_out["English"]["CHARGE"] = "";
	$fieldLabelspos_out["English"]["DESTINATION_CUSTOMER"] = "DESTINATION CUSTOMER";
	$fieldToolTipspos_out["English"]["DESTINATION_CUSTOMER"] = "";
	$fieldLabelspos_out["English"]["DEST_SERVICE_NUMBER"] = "DEST SERVICE NUMBER";
	$fieldToolTipspos_out["English"]["DEST_SERVICE_NUMBER"] = "";
	if (count($fieldToolTipspos_out["English"]))
		$tdatapos_out[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspos_out[""] = array();
	$fieldToolTipspos_out[""] = array();
	$pageTitlespos_out[""] = array();
	if (count($fieldToolTipspos_out[""]))
		$tdatapos_out[".isUseToolTips"] = true;
}
	
	
	$tdatapos_out[".NCSearch"] = true;



$tdatapos_out[".shortTableName"] = "pos_out";
$tdatapos_out[".nSecOptions"] = 0;
$tdatapos_out[".recsPerRowList"] = 1;
$tdatapos_out[".mainTableOwnerID"] = "";
$tdatapos_out[".moveNext"] = 1;
$tdatapos_out[".nType"] = 0;

$tdatapos_out[".strOriginalTableName"] = "pos_out";

	


$tdatapos_out[".showAddInPopup"] = true;

$tdatapos_out[".showEditInPopup"] = true;

$tdatapos_out[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
			;
$popupPagesLayoutNames["add"] = "view2";
			;
$popupPagesLayoutNames["edit"] = "view2";
			;
$popupPagesLayoutNames["view"] = "view2";
$tdatapos_out[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapos_out[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatapos_out[".listAjax"] = true;
else 
	$tdatapos_out[".listAjax"] = false;

	$tdatapos_out[".audit"] = false;

	$tdatapos_out[".locking"] = false;


$tdatapos_out[".exportTo"] = true;



$tdatapos_out[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapos_out[".searchSaving"] = false;
//

$tdatapos_out[".showSearchPanel"] = true;
		$tdatapos_out[".flexibleSearch"] = true;		

if (isMobile())
	$tdatapos_out[".isUseAjaxSuggest"] = false;
else 
	$tdatapos_out[".isUseAjaxSuggest"] = true;

$tdatapos_out[".rowHighlite"] = true;



$tdatapos_out[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapos_out[".isUseTimeForSearch"] = false;





$tdatapos_out[".allSearchFields"] = array();
$tdatapos_out[".filterFields"] = array();
$tdatapos_out[".requiredSearchFields"] = array();

$tdatapos_out[".allSearchFields"][] = "TRANSFER_DATE";
		$tdatapos_out[".allSearchFields"][] = "ORIGIANL_CUSTOMER";
		$tdatapos_out[".allSearchFields"][] = "ORG_SERVICE_NUMBER";
		$tdatapos_out[".allSearchFields"][] = "CHARGE";
		$tdatapos_out[".allSearchFields"][] = "DESTINATION_CUSTOMER";
		$tdatapos_out[".allSearchFields"][] = "DEST_SERVICE_NUMBER";
		
$tdatapos_out[".googleLikeFields"] = array();
$tdatapos_out[".googleLikeFields"][] = "ACCT_BOOK_ID";
$tdatapos_out[".googleLikeFields"][] = "TRANSFER_DATE";
$tdatapos_out[".googleLikeFields"][] = "ORIGIANL_CUSTOMER";
$tdatapos_out[".googleLikeFields"][] = "ORG_SERVICE_NUMBER";
$tdatapos_out[".googleLikeFields"][] = "CHARGE";
$tdatapos_out[".googleLikeFields"][] = "DESTINATION_CUSTOMER";
$tdatapos_out[".googleLikeFields"][] = "DEST_SERVICE_NUMBER";


$tdatapos_out[".advSearchFields"] = array();
$tdatapos_out[".advSearchFields"][] = "TRANSFER_DATE";
$tdatapos_out[".advSearchFields"][] = "ORIGIANL_CUSTOMER";
$tdatapos_out[".advSearchFields"][] = "ORG_SERVICE_NUMBER";
$tdatapos_out[".advSearchFields"][] = "CHARGE";
$tdatapos_out[".advSearchFields"][] = "DESTINATION_CUSTOMER";
$tdatapos_out[".advSearchFields"][] = "DEST_SERVICE_NUMBER";

$tdatapos_out[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdatapos_out[".pageSize"] = 20;

$tdatapos_out[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapos_out[".strOrderBy"] = $tstrOrderBy;

$tdatapos_out[".orderindexes"] = array();

$tdatapos_out[".sqlHead"] = "SELECT ACCT_BOOK_ID,   TRANSFER_DATE,   ORIGIANL_CUSTOMER,   ORG_SERVICE_NUMBER,   CHARGE,   DESTINATION_CUSTOMER,   DEST_SERVICE_NUMBER";
$tdatapos_out[".sqlFrom"] = "FROM pos_out";
$tdatapos_out[".sqlWhereExpr"] = "";
$tdatapos_out[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapos_out[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapos_out[".arrGroupsPerPage"] = $arrGPP;

$tdatapos_out[".highlightSearchResults"] = true;

$tableKeyspos_out = array();
$tableKeyspos_out[] = "ACCT_BOOK_ID";
$tdatapos_out[".Keys"] = $tableKeyspos_out;

$tdatapos_out[".listFields"] = array();
$tdatapos_out[".listFields"][] = "TRANSFER_DATE";
$tdatapos_out[".listFields"][] = "ORIGIANL_CUSTOMER";
$tdatapos_out[".listFields"][] = "ORG_SERVICE_NUMBER";
$tdatapos_out[".listFields"][] = "CHARGE";
$tdatapos_out[".listFields"][] = "DESTINATION_CUSTOMER";
$tdatapos_out[".listFields"][] = "DEST_SERVICE_NUMBER";

$tdatapos_out[".hideMobileList"] = array();


$tdatapos_out[".viewFields"] = array();

$tdatapos_out[".addFields"] = array();

$tdatapos_out[".inlineAddFields"] = array();

$tdatapos_out[".editFields"] = array();

$tdatapos_out[".inlineEditFields"] = array();

$tdatapos_out[".exportFields"] = array();
$tdatapos_out[".exportFields"][] = "TRANSFER_DATE";
$tdatapos_out[".exportFields"][] = "ORIGIANL_CUSTOMER";
$tdatapos_out[".exportFields"][] = "ORG_SERVICE_NUMBER";
$tdatapos_out[".exportFields"][] = "CHARGE";
$tdatapos_out[".exportFields"][] = "DESTINATION_CUSTOMER";
$tdatapos_out[".exportFields"][] = "DEST_SERVICE_NUMBER";

$tdatapos_out[".printFields"] = array();

//	ACCT_BOOK_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ACCT_BOOK_ID";
	$fdata["GoodName"] = "ACCT_BOOK_ID";
	$fdata["ownerTable"] = "pos_out";
	$fdata["Label"] = GetFieldLabel("pos_out","ACCT_BOOK_ID"); 
	$fdata["FieldType"] = 20;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ACCT_BOOK_ID"; 
		$fdata["FullName"] = "ACCT_BOOK_ID";
	
		
		
				
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
	
	
	
	

	

	
	$tdatapos_out["ACCT_BOOK_ID"] = $fdata;
//	TRANSFER_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TRANSFER_DATE";
	$fdata["GoodName"] = "TRANSFER_DATE";
	$fdata["ownerTable"] = "pos_out";
	$fdata["Label"] = GetFieldLabel("pos_out","TRANSFER_DATE"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TRANSFER_DATE"; 
		$fdata["FullName"] = "TRANSFER_DATE";
	
		
		
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

	

	
	$tdatapos_out["TRANSFER_DATE"] = $fdata;
//	ORIGIANL_CUSTOMER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ORIGIANL_CUSTOMER";
	$fdata["GoodName"] = "ORIGIANL_CUSTOMER";
	$fdata["ownerTable"] = "pos_out";
	$fdata["Label"] = GetFieldLabel("pos_out","ORIGIANL_CUSTOMER"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ORIGIANL_CUSTOMER"; 
		$fdata["FullName"] = "ORIGIANL_CUSTOMER";
	
		
		
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

	

	
	$tdatapos_out["ORIGIANL_CUSTOMER"] = $fdata;
//	ORG_SERVICE_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ORG_SERVICE_NUMBER";
	$fdata["GoodName"] = "ORG_SERVICE_NUMBER";
	$fdata["ownerTable"] = "pos_out";
	$fdata["Label"] = GetFieldLabel("pos_out","ORG_SERVICE_NUMBER"); 
	$fdata["FieldType"] = 3;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ORG_SERVICE_NUMBER"; 
		$fdata["FullName"] = "ORG_SERVICE_NUMBER";
	
		
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapos_out["ORG_SERVICE_NUMBER"] = $fdata;
//	CHARGE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CHARGE";
	$fdata["GoodName"] = "CHARGE";
	$fdata["ownerTable"] = "pos_out";
	$fdata["Label"] = GetFieldLabel("pos_out","CHARGE"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CHARGE"; 
		$fdata["FullName"] = "CHARGE";
	
		
		
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
			$edata["EditParams"].= " maxlength=250";
	
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

	

	
	$tdatapos_out["CHARGE"] = $fdata;
//	DESTINATION_CUSTOMER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DESTINATION_CUSTOMER";
	$fdata["GoodName"] = "DESTINATION_CUSTOMER";
	$fdata["ownerTable"] = "pos_out";
	$fdata["Label"] = GetFieldLabel("pos_out","DESTINATION_CUSTOMER"); 
	$fdata["FieldType"] = 200;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DESTINATION_CUSTOMER"; 
		$fdata["FullName"] = "DESTINATION_CUSTOMER";
	
		
		
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
			$edata["EditParams"].= " maxlength=250";
	
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

	

	
	$tdatapos_out["DESTINATION_CUSTOMER"] = $fdata;
//	DEST_SERVICE_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DEST_SERVICE_NUMBER";
	$fdata["GoodName"] = "DEST_SERVICE_NUMBER";
	$fdata["ownerTable"] = "pos_out";
	$fdata["Label"] = GetFieldLabel("pos_out","DEST_SERVICE_NUMBER"); 
	$fdata["FieldType"] = 3;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DEST_SERVICE_NUMBER"; 
		$fdata["FullName"] = "DEST_SERVICE_NUMBER";
	
		
		
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
			$edata["EditParams"].= " maxlength=250";
	
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

	

	
	$tdatapos_out["DEST_SERVICE_NUMBER"] = $fdata;

	
$tables_data["pos_out"]=&$tdatapos_out;
$field_labels["pos_out"] = &$fieldLabelspos_out;
$fieldToolTips["pos_out"] = &$fieldToolTipspos_out;
$page_titles["pos_out"] = &$pageTitlespos_out;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pos_out"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["pos_out"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pos_out()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "ACCT_BOOK_ID,   TRANSFER_DATE,   ORIGIANL_CUSTOMER,   ORG_SERVICE_NUMBER,   CHARGE,   DESTINATION_CUSTOMER,   DEST_SERVICE_NUMBER";
$proto3["m_strFrom"] = "FROM pos_out";
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
	"m_strName" => "ACCT_BOOK_ID",
	"m_strTable" => "pos_out"
));

$proto8["m_sql"] = "ACCT_BOOK_ID";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TRANSFER_DATE",
	"m_strTable" => "pos_out"
));

$proto10["m_sql"] = "TRANSFER_DATE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ORIGIANL_CUSTOMER",
	"m_strTable" => "pos_out"
));

$proto12["m_sql"] = "ORIGIANL_CUSTOMER";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ORG_SERVICE_NUMBER",
	"m_strTable" => "pos_out"
));

$proto14["m_sql"] = "ORG_SERVICE_NUMBER";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CHARGE",
	"m_strTable" => "pos_out"
));

$proto16["m_sql"] = "CHARGE";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DESTINATION_CUSTOMER",
	"m_strTable" => "pos_out"
));

$proto18["m_sql"] = "DESTINATION_CUSTOMER";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto3["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DEST_SERVICE_NUMBER",
	"m_strTable" => "pos_out"
));

$proto20["m_sql"] = "DEST_SERVICE_NUMBER";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "pos_out";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "ACCT_BOOK_ID";
$proto23["m_columns"][] = "TRANSFER_DATE";
$proto23["m_columns"][] = "ORIGIANL_CUSTOMER";
$proto23["m_columns"][] = "ORG_SERVICE_NUMBER";
$proto23["m_columns"][] = "CHARGE";
$proto23["m_columns"][] = "DESTINATION_CUSTOMER";
$proto23["m_columns"][] = "DEST_SERVICE_NUMBER";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "pos_out";
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
$queryData_pos_out = createSqlQuery_pos_out();

							
	
$tdatapos_out[".sqlquery"] = $queryData_pos_out;

$tableEvents["pos_out"] = new eventsBase;
$tdatapos_out[".hasEvents"] = false;

$cipherer = new RunnerCipherer("pos_out");

?>