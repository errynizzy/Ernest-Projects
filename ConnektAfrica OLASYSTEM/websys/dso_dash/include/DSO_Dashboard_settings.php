<?php
require_once(getabspath("classes/cipherer.php"));



$tdataDSO_Dashboard = array();	
$tdataDSO_Dashboard[".ShortName"] = "DSO_Dashboard";

//	field labels
$fieldLabelsDSO_Dashboard = array();
$pageTitlesDSO_Dashboard = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDSO_Dashboard["English"] = array();
	$fieldLabelsDSO_Dashboard["English"]["Efficiency_Manager_Name"] = "Manager Name";
	$fieldLabelsDSO_Dashboard["English"]["Efficiency_Date"] = "Date";
	$fieldLabelsDSO_Dashboard["English"]["Efficiency_Actual_Visits"] = "Actual Visits";
	$fieldLabelsDSO_Dashboard["English"]["Efficiency_Planned_Visits"] = "Planned Visits";
	$fieldLabelsDSO_Dashboard["English"]["Effectiveness_Manager_Name"] = "Manager Name";
	$fieldLabelsDSO_Dashboard["English"]["Effectiveness_Total_Visits"] = "Total Visits";
	$fieldLabelsDSO_Dashboard["English"]["Effectiveness_Visits_with_Sales"] = "Visits With Sales";
	$fieldLabelsDSO_Dashboard["English"]["Effectiveness_MY_Sales"] = "MY Sales";
	$fieldLabelsDSO_Dashboard["English"]["Effectiveness_Date"] = "Date";
	$fieldLabelsDSO_Dashboard["English"]["Efficiency_Percent"] = "Percent";
	$fieldLabelsDSO_Dashboard["English"]["Effectiveness_Percent"] = "Percent";
	$fieldLabelsDSO_Dashboard["English"]["Stock_Availability_Manager_Name"] = "Manager Name";
	$fieldLabelsDSO_Dashboard["English"]["Stock_Availability_Previous_Day"] = "Previous Day";
	$fieldLabelsDSO_Dashboard["English"]["Stock_Availability_Current_Day"] = "Current Day";
	$fieldLabelsDSO_Dashboard["English"]["New_Outlets_Per_week_Manager_Name"] = "Manager Name";
	$fieldLabelsDSO_Dashboard["English"]["New_Outlets_Per_week_New_POS"] = "New POS";
	$fieldLabelsDSO_Dashboard["English"]["New_Outlets_Per_week_Start_Date"] = "Start Date";
	$fieldLabelsDSO_Dashboard["English"]["New_Outlets_Per_week_End_Date"] = "End Date";
	$fieldLabelsDSO_Dashboard["English"]["New_Outlets_Per_week_Week_Start"] = "Week Start";
	$fieldLabelsDSO_Dashboard["English"]["New_Outlets_Per_week_Week_End"] = "Week End";
	$fieldLabelsDSO_Dashboard["English"]["New_Outlets_Per_week_Title"] = "Title";
	$fieldLabelsDSO_Dashboard["English"]["Registration_forms_outstanding_Manager_Name"] = "Manager Name";
	$fieldLabelsDSO_Dashboard["English"]["Registration_forms_outstanding_Total_Activations"] = "Total Activations";
	$fieldLabelsDSO_Dashboard["English"]["Registration_forms_outstanding_Rejects"] = "Rejects";
	$fieldLabelsDSO_Dashboard["English"]["SIMS_Sold_from_Outlets__Total_Activations"] = "Total Activations";
	$fieldLabelsDSO_Dashboard["English"]["SIMS_Sold_from_Outlets__With_Airtime"] = "With Airtime";
	$fieldLabelsDSO_Dashboard["English"]["SIMS_Sold_from_Outlets__Manager_Name"] = "Manager Name";
	$fieldLabelsDSO_Dashboard["English"]["SIMS_Sold_from_Outlets__Title"] = "Title";
	$fieldLabelsDSO_Dashboard["English"]["SIMS_Sold_from_Outlets__Date"] = "Date";
	$fieldLabelsDSO_Dashboard["English"]["SIMS_Sold_from_Outlets__No_Airtime"] = "No Airtime";
	$fieldLabelsDSO_Dashboard["English"]["Registration_forms_outstanding_Title"] = "Title";
	$fieldLabelsDSO_Dashboard["English"]["Registration_forms_outstanding_Date"] = "Date";
	$fieldLabelsDSO_Dashboard["English"]["Registration_forms_outstanding_Returned"] = "Returned";
	$fieldLabelsDSO_Dashboard["English"]["Registration_forms_outstanding_Not_Returned"] = "Not Returned";
	$fieldLabelsDSO_Dashboard["English"]["Airtime_into_the_Channel__Activator_Name"] = "Activator Name";
	$fieldLabelsDSO_Dashboard["English"]["Airtime_into_the_Channel__pos_type"] = "Pos Type";
	$fieldLabelsDSO_Dashboard["English"]["Airtime_into_the_Channel__Sales_Into_Channel"] = "Sales Into Channel";
	$fieldLabelsDSO_Dashboard["English"]["Airtime_into_the_Channel__Total_Amount"] = "Total Amount";
	$fieldLabelsDSO_Dashboard["English"]["Airtime_into_the_Channel__TRANSFER_DATE"] = "TRANSFER DATE";
	$fieldLabelsDSO_Dashboard["English"]["Channel_to_Customers__Outlet_Manager"] = "Outlet Manager";
	$fieldLabelsDSO_Dashboard["English"]["Channel_to_Customers__Outlet_Number"] = "Outlet Number";
	$fieldLabelsDSO_Dashboard["English"]["Channel_to_Customers__Date"] = "Date";
	$fieldLabelsDSO_Dashboard["English"]["Channel_to_Customers__Sales"] = "Sales";
	$fieldLabelsDSO_Dashboard["English"]["Channel_to_Customers__Total_Sales"] = "Total Sales";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDSO_Dashboard[""] = array();
}

//	search fields
$tdataDSO_Dashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"Efficiency", "field"=>"Manager_Name" );
$tdataDSO_Dashboard[".searchFields"]["Efficiency_Manager_Name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Efficiency", "field"=>"Date" );
$tdataDSO_Dashboard[".searchFields"]["Efficiency_Date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Efficiency", "field"=>"Actual_Visits" );
$tdataDSO_Dashboard[".searchFields"]["Efficiency_Actual_Visits"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Efficiency", "field"=>"Planned_Visits" );
$tdataDSO_Dashboard[".searchFields"]["Efficiency_Planned_Visits"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Effectiveness", "field"=>"Manager_Name" );
$tdataDSO_Dashboard[".searchFields"]["Effectiveness_Manager_Name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Effectiveness", "field"=>"Total_Visits" );
$tdataDSO_Dashboard[".searchFields"]["Effectiveness_Total_Visits"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Effectiveness", "field"=>"Visits_with_Sales" );
$tdataDSO_Dashboard[".searchFields"]["Effectiveness_Visits_with_Sales"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Effectiveness", "field"=>"MY_Sales" );
$tdataDSO_Dashboard[".searchFields"]["Effectiveness_MY_Sales"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Effectiveness", "field"=>"Date" );
$tdataDSO_Dashboard[".searchFields"]["Effectiveness_Date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Efficiency", "field"=>"Percent" );
$tdataDSO_Dashboard[".searchFields"]["Efficiency_Percent"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Effectiveness", "field"=>"Percent" );
$tdataDSO_Dashboard[".searchFields"]["Effectiveness_Percent"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"New Outlets Per week", "field"=>"Manager_Name" );
$tdataDSO_Dashboard[".searchFields"]["New_Outlets_Per_week_Manager_Name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"New Outlets Per week", "field"=>"New_POS" );
$tdataDSO_Dashboard[".searchFields"]["New_Outlets_Per_week_New_POS"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"New Outlets Per week", "field"=>"Week_Start" );
$tdataDSO_Dashboard[".searchFields"]["New_Outlets_Per_week_Week_Start"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"New Outlets Per week", "field"=>"Week_End" );
$tdataDSO_Dashboard[".searchFields"]["New_Outlets_Per_week_Week_End"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Registration forms outstanding", "field"=>"Manager_Name" );
$tdataDSO_Dashboard[".searchFields"]["Registration_forms_outstanding_Manager_Name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Registration forms outstanding", "field"=>"Total_Activations" );
$tdataDSO_Dashboard[".searchFields"]["Registration_forms_outstanding_Total_Activations"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Registration forms outstanding", "field"=>"Rejects" );
$tdataDSO_Dashboard[".searchFields"]["Registration_forms_outstanding_Rejects"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"SIMS Sold from Outlets ", "field"=>"Total_Activations" );
$tdataDSO_Dashboard[".searchFields"]["SIMS_Sold_from_Outlets__Total_Activations"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"SIMS Sold from Outlets ", "field"=>"With_Airtime" );
$tdataDSO_Dashboard[".searchFields"]["SIMS_Sold_from_Outlets__With_Airtime"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Registration forms outstanding", "field"=>"Title" );
$tdataDSO_Dashboard[".searchFields"]["Registration_forms_outstanding_Title"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Registration forms outstanding", "field"=>"Date" );
$tdataDSO_Dashboard[".searchFields"]["Registration_forms_outstanding_Date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Registration forms outstanding", "field"=>"Returned" );
$tdataDSO_Dashboard[".searchFields"]["Registration_forms_outstanding_Returned"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Registration forms outstanding", "field"=>"Not_Returned" );
$tdataDSO_Dashboard[".searchFields"]["Registration_forms_outstanding_Not_Returned"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"SIMS Sold from Outlets ", "field"=>"Manager_Name" );
$tdataDSO_Dashboard[".searchFields"]["SIMS_Sold_from_Outlets__Manager_Name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"SIMS Sold from Outlets ", "field"=>"Title" );
$tdataDSO_Dashboard[".searchFields"]["SIMS_Sold_from_Outlets__Title"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"SIMS Sold from Outlets ", "field"=>"Date" );
$tdataDSO_Dashboard[".searchFields"]["SIMS_Sold_from_Outlets__Date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"SIMS Sold from Outlets ", "field"=>"No_Airtime" );
$tdataDSO_Dashboard[".searchFields"]["SIMS_Sold_from_Outlets__No_Airtime"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Airtime into the Channel ", "field"=>"Activator_Name" );
$tdataDSO_Dashboard[".searchFields"]["Airtime_into_the_Channel__Activator_Name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Airtime into the Channel ", "field"=>"pos_type" );
$tdataDSO_Dashboard[".searchFields"]["Airtime_into_the_Channel__pos_type"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Airtime into the Channel ", "field"=>"Sales_Into_Channel" );
$tdataDSO_Dashboard[".searchFields"]["Airtime_into_the_Channel__Sales_Into_Channel"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Airtime into the Channel ", "field"=>"Total_Amount" );
$tdataDSO_Dashboard[".searchFields"]["Airtime_into_the_Channel__Total_Amount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Airtime into the Channel ", "field"=>"TRANSFER_DATE" );
$tdataDSO_Dashboard[".searchFields"]["Airtime_into_the_Channel__TRANSFER_DATE"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Channel to Customers ", "field"=>"Outlet_Manager" );
$tdataDSO_Dashboard[".searchFields"]["Channel_to_Customers__Outlet_Manager"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Channel to Customers ", "field"=>"Outlet_Number" );
$tdataDSO_Dashboard[".searchFields"]["Channel_to_Customers__Outlet_Number"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Channel to Customers ", "field"=>"Date" );
$tdataDSO_Dashboard[".searchFields"]["Channel_to_Customers__Date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Channel to Customers ", "field"=>"Sales" );
$tdataDSO_Dashboard[".searchFields"]["Channel_to_Customers__Sales"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Channel to Customers ", "field"=>"Total_Sales" );
$tdataDSO_Dashboard[".searchFields"]["Channel_to_Customers__Total_Sales"] = $dashField;

// all search fields
$tdataDSO_Dashboard[".allSearchFields"] = array();
$tdataDSO_Dashboard[".allSearchFields"][] = "Efficiency_Manager_Name";
$tdataDSO_Dashboard[".allSearchFields"][] = "Efficiency_Date";
$tdataDSO_Dashboard[".allSearchFields"][] = "Efficiency_Actual_Visits";
$tdataDSO_Dashboard[".allSearchFields"][] = "Efficiency_Planned_Visits";
$tdataDSO_Dashboard[".allSearchFields"][] = "Effectiveness_Manager_Name";
$tdataDSO_Dashboard[".allSearchFields"][] = "Effectiveness_Total_Visits";
$tdataDSO_Dashboard[".allSearchFields"][] = "Effectiveness_Visits_with_Sales";
$tdataDSO_Dashboard[".allSearchFields"][] = "Effectiveness_MY_Sales";
$tdataDSO_Dashboard[".allSearchFields"][] = "Effectiveness_Date";
$tdataDSO_Dashboard[".allSearchFields"][] = "Efficiency_Percent";
$tdataDSO_Dashboard[".allSearchFields"][] = "Effectiveness_Percent";
$tdataDSO_Dashboard[".allSearchFields"][] = "New_Outlets_Per_week_Manager_Name";
$tdataDSO_Dashboard[".allSearchFields"][] = "New_Outlets_Per_week_New_POS";
$tdataDSO_Dashboard[".allSearchFields"][] = "New_Outlets_Per_week_Week_Start";
$tdataDSO_Dashboard[".allSearchFields"][] = "New_Outlets_Per_week_Week_End";
$tdataDSO_Dashboard[".allSearchFields"][] = "Registration_forms_outstanding_Manager_Name";
$tdataDSO_Dashboard[".allSearchFields"][] = "Registration_forms_outstanding_Total_Activations";
$tdataDSO_Dashboard[".allSearchFields"][] = "Registration_forms_outstanding_Rejects";
$tdataDSO_Dashboard[".allSearchFields"][] = "SIMS_Sold_from_Outlets__Total_Activations";
$tdataDSO_Dashboard[".allSearchFields"][] = "SIMS_Sold_from_Outlets__With_Airtime";
$tdataDSO_Dashboard[".allSearchFields"][] = "Registration_forms_outstanding_Title";
$tdataDSO_Dashboard[".allSearchFields"][] = "Registration_forms_outstanding_Date";
$tdataDSO_Dashboard[".allSearchFields"][] = "Registration_forms_outstanding_Returned";
$tdataDSO_Dashboard[".allSearchFields"][] = "Registration_forms_outstanding_Not_Returned";
$tdataDSO_Dashboard[".allSearchFields"][] = "SIMS_Sold_from_Outlets__Manager_Name";
$tdataDSO_Dashboard[".allSearchFields"][] = "SIMS_Sold_from_Outlets__Title";
$tdataDSO_Dashboard[".allSearchFields"][] = "SIMS_Sold_from_Outlets__Date";
$tdataDSO_Dashboard[".allSearchFields"][] = "SIMS_Sold_from_Outlets__No_Airtime";
$tdataDSO_Dashboard[".allSearchFields"][] = "Airtime_into_the_Channel__Activator_Name";
$tdataDSO_Dashboard[".allSearchFields"][] = "Airtime_into_the_Channel__pos_type";
$tdataDSO_Dashboard[".allSearchFields"][] = "Airtime_into_the_Channel__Sales_Into_Channel";
$tdataDSO_Dashboard[".allSearchFields"][] = "Airtime_into_the_Channel__Total_Amount";
$tdataDSO_Dashboard[".allSearchFields"][] = "Airtime_into_the_Channel__TRANSFER_DATE";
$tdataDSO_Dashboard[".allSearchFields"][] = "Channel_to_Customers__Outlet_Manager";
$tdataDSO_Dashboard[".allSearchFields"][] = "Channel_to_Customers__Outlet_Number";
$tdataDSO_Dashboard[".allSearchFields"][] = "Channel_to_Customers__Date";
$tdataDSO_Dashboard[".allSearchFields"][] = "Channel_to_Customers__Sales";
$tdataDSO_Dashboard[".allSearchFields"][] = "Channel_to_Customers__Total_Sales";

// good like search fields
$tdataDSO_Dashboard[".googleLikeFields"] = array();
$tdataDSO_Dashboard[".googleLikeFields"][] = "Efficiency_Manager_Name";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Efficiency_Date";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Efficiency_Actual_Visits";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Efficiency_Planned_Visits";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Effectiveness_Manager_Name";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Effectiveness_Total_Visits";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Effectiveness_Visits_with_Sales";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Effectiveness_MY_Sales";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Effectiveness_Date";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Efficiency_Percent";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Effectiveness_Percent";
$tdataDSO_Dashboard[".googleLikeFields"][] = "New_Outlets_Per_week_Manager_Name";
$tdataDSO_Dashboard[".googleLikeFields"][] = "New_Outlets_Per_week_New_POS";
$tdataDSO_Dashboard[".googleLikeFields"][] = "New_Outlets_Per_week_Week_Start";
$tdataDSO_Dashboard[".googleLikeFields"][] = "New_Outlets_Per_week_Week_End";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Registration_forms_outstanding_Manager_Name";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Registration_forms_outstanding_Total_Activations";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Registration_forms_outstanding_Rejects";
$tdataDSO_Dashboard[".googleLikeFields"][] = "SIMS_Sold_from_Outlets__Total_Activations";
$tdataDSO_Dashboard[".googleLikeFields"][] = "SIMS_Sold_from_Outlets__With_Airtime";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Registration_forms_outstanding_Title";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Registration_forms_outstanding_Date";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Registration_forms_outstanding_Returned";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Registration_forms_outstanding_Not_Returned";
$tdataDSO_Dashboard[".googleLikeFields"][] = "SIMS_Sold_from_Outlets__Manager_Name";
$tdataDSO_Dashboard[".googleLikeFields"][] = "SIMS_Sold_from_Outlets__Title";
$tdataDSO_Dashboard[".googleLikeFields"][] = "SIMS_Sold_from_Outlets__Date";
$tdataDSO_Dashboard[".googleLikeFields"][] = "SIMS_Sold_from_Outlets__No_Airtime";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Airtime_into_the_Channel__Activator_Name";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Airtime_into_the_Channel__pos_type";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Airtime_into_the_Channel__Sales_Into_Channel";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Airtime_into_the_Channel__Total_Amount";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Airtime_into_the_Channel__TRANSFER_DATE";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Channel_to_Customers__Outlet_Manager";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Channel_to_Customers__Outlet_Number";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Channel_to_Customers__Date";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Channel_to_Customers__Sales";
$tdataDSO_Dashboard[".googleLikeFields"][] = "Channel_to_Customers__Total_Sales";

$tdataDSO_Dashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "Efficiency_list", "table" => "Efficiency", "type" => 0);
	$dbelement["cellName"] = "cell_0_0";
	
			$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	
	$dbelement["popupAdd"] = 0 > 0;	
	$dbelement["popupEdit"] = 0 > 0;	
	$dbelement["popupView"] = 0 > 0;	
	$tdataDSO_Dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Effectiveness_list", "table" => "Effectiveness", "type" => 0);
	$dbelement["cellName"] = "cell_0_1";
	
			$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	
	$dbelement["popupAdd"] = 0 > 0;	
	$dbelement["popupEdit"] = 0 > 0;	
	$dbelement["popupView"] = 0 > 0;	
	$tdataDSO_Dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Stock_Availability_list", "table" => "Stock Availability", "type" => 0);
	$dbelement["cellName"] = "cell_1_0";
	
			$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	
	$dbelement["popupAdd"] = 0 > 0;	
	$dbelement["popupEdit"] = 0 > 0;	
	$dbelement["popupView"] = 0 > 0;	
	$tdataDSO_Dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "New_Outlets_Per_week_list", "table" => "New Outlets Per week", "type" => 0);
	$dbelement["cellName"] = "cell_1_1";
	
			$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	
	$dbelement["popupAdd"] = 0 > 0;	
	$dbelement["popupEdit"] = 0 > 0;	
	$dbelement["popupView"] = 0 > 0;	
	$tdataDSO_Dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Registration_forms_outstanding_list", "table" => "Registration forms outstanding", "type" => 0);
	$dbelement["cellName"] = "cell_2_0";
	
			$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	
	$dbelement["popupAdd"] = 0 > 0;	
	$dbelement["popupEdit"] = 0 > 0;	
	$dbelement["popupView"] = 0 > 0;	
	$tdataDSO_Dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "SIMS_Sold_from_Outlets__list", "table" => "SIMS Sold from Outlets ", "type" => 0);
	$dbelement["cellName"] = "cell_2_1";
	
			$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	
	$dbelement["popupAdd"] = 0 > 0;	
	$dbelement["popupEdit"] = 0 > 0;	
	$dbelement["popupView"] = 0 > 0;	
	$tdataDSO_Dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Airtime_into_the_Channel__list", "table" => "Airtime into the Channel ", "type" => 0);
	$dbelement["cellName"] = "cell_3_0";
	
			$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	
	$dbelement["popupAdd"] = 0 > 0;	
	$dbelement["popupEdit"] = 0 > 0;	
	$dbelement["popupView"] = 0 > 0;	
	$tdataDSO_Dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Channel_to_Customers__list", "table" => "Channel to Customers ", "type" => 0);
	$dbelement["cellName"] = "cell_3_1";
	
			$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	
	$dbelement["popupAdd"] = 0 > 0;	
	$dbelement["popupEdit"] = 0 > 0;	
	$dbelement["popupView"] = 0 > 0;	
	$tdataDSO_Dashboard[".dashElements"][] = $dbelement;

$tdataDSO_Dashboard[".shortTableName"] = "DSO_Dashboard";
$tdataDSO_Dashboard[".nType"] = 4;


$tableEvents["DSO Dashboard"] = new eventsBase;
$tdataDSO_Dashboard[".hasEvents"] = false;


$tdataDSO_Dashboard[".tableType"] = "dashboard";



$tdataDSO_Dashboard[".addPageEvents"] = false;

$tables_data["DSO Dashboard"]=&$tdataDSO_Dashboard;
$field_labels["DSO_Dashboard"] = &$fieldLabelsDSO_Dashboard;
$page_titles["DSO_Dashboard"] = &$pageTitlesDSO_Dashboard;

?>