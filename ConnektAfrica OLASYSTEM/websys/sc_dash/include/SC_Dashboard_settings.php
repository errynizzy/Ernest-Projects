<?php
require_once(getabspath("classes/cipherer.php"));



$tdataSC_Dashboard = array();	
$tdataSC_Dashboard[".ShortName"] = "SC_Dashboard";

//	field labels
$fieldLabelsSC_Dashboard = array();
$pageTitlesSC_Dashboard = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSC_Dashboard["English"] = array();
	$fieldLabelsSC_Dashboard["English"]["Registration_Forms_Outstanding___Manager_Name"] = "Manager Name";
	$fieldLabelsSC_Dashboard["English"]["Registration_Forms_Outstanding___Manager_Title"] = "Manager Title";
	$fieldLabelsSC_Dashboard["English"]["Registration_Forms_Outstanding___Event_date"] = "Event Date";
	$fieldLabelsSC_Dashboard["English"]["Registration_Forms_Outstanding___Activations"] = "Activations";
	$fieldLabelsSC_Dashboard["English"]["Registration_Forms_Outstanding___Returned"] = "Returned";
	$fieldLabelsSC_Dashboard["English"]["Registration_Forms_Outstanding___Missing"] = "Missing";
	$fieldLabelsSC_Dashboard["English"]["Registration_Forms_Outstanding___Percent"] = "Percent";
	$fieldLabelsSC_Dashboard["English"]["Average_Airtime_Consumption_3_Months_Activator_Number"] = "Activator Number";
	$fieldLabelsSC_Dashboard["English"]["Average_Airtime_Consumption_3_Months_Activator_Name"] = "Activator Name";
	$fieldLabelsSC_Dashboard["English"]["Average_Airtime_Consumption_3_Months_Manager_Name"] = "Manager Name";
	$fieldLabelsSC_Dashboard["English"]["Average_Airtime_Consumption_3_Months_Title"] = "Title";
	$fieldLabelsSC_Dashboard["English"]["Average_Airtime_Consumption_3_Months_Subscriber_Number"] = "Subscriber Number";
	$fieldLabelsSC_Dashboard["English"]["Average_Airtime_Consumption_3_Months_Date_Activated"] = "Date Activated";
	$fieldLabelsSC_Dashboard["English"]["Average_Airtime_Consumption_3_Months_Consumption"] = "Consumption";
	$fieldLabelsSC_Dashboard["English"]["Average_Airtime_Consumption_3_Months_End_of_3_Month"] = "End Of 3 Month";
	$fieldLabelsSC_Dashboard["English"]["Active_Freelancers__Manager_Name"] = "Manager Name";
	$fieldLabelsSC_Dashboard["English"]["Active_Freelancers__Date"] = "Date";
	$fieldLabelsSC_Dashboard["English"]["Active_Freelancers_per_TL_Team_Leader"] = "Team Leader";
	$fieldLabelsSC_Dashboard["English"]["Active_Freelancers_per_TL_Manager_Name"] = "Manager Name";
	$fieldLabelsSC_Dashboard["English"]["Active_Freelancers_per_TL_Title"] = "Title";
	$fieldLabelsSC_Dashboard["English"]["Active_Freelancers_per_TL_Date"] = "Date";
	$fieldLabelsSC_Dashboard["English"]["Active_Freelancers_per_TL_Active_FL"] = "Active FL";
	$fieldLabelsSC_Dashboard["English"]["Activations_per_active_FL_Activator_Number"] = "Activator Number";
	$fieldLabelsSC_Dashboard["English"]["Activations_per_active_FL_Activator_Name"] = "Activator Name";
	$fieldLabelsSC_Dashboard["English"]["Activations_per_active_FL_Manager_Name"] = "Manager Name";
	$fieldLabelsSC_Dashboard["English"]["Activations_per_active_FL_Manager_Title"] = "Manager Title";
	$fieldLabelsSC_Dashboard["English"]["Activations_per_active_FL_Date"] = "Date";
	$fieldLabelsSC_Dashboard["English"]["Activations_per_active_FL_Activations"] = "Activations";
	$fieldLabelsSC_Dashboard["English"]["Activations_per_active_FL_With_Airtime"] = "With Airtime";
	$fieldLabelsSC_Dashboard["English"]["Activations_per_active_FL_No_Airtime"] = "No Airtime";
	$fieldLabelsSC_Dashboard["English"]["Activations_per_active_FL_Percent"] = "Percent";
	$fieldLabelsSC_Dashboard["English"]["Activations_and_Airtime_Transfers_Manager_Name"] = "Manager Name";
	$fieldLabelsSC_Dashboard["English"]["Activations_and_Airtime_Transfers_Title"] = "Title";
	$fieldLabelsSC_Dashboard["English"]["Activations_and_Airtime_Transfers_A_Date"] = "A Date";
	$fieldLabelsSC_Dashboard["English"]["Activations_and_Airtime_Transfers_Total_Activations"] = "Total Activations";
	$fieldLabelsSC_Dashboard["English"]["Activations_and_Airtime_Transfers_With_Airtime"] = "With Airtime";
	$fieldLabelsSC_Dashboard["English"]["Activations_and_Airtime_Transfers_No_Airtime"] = "No Airtime";
	$fieldLabelsSC_Dashboard["English"]["Activations_and_Airtime_Transfers_Percent"] = "Percent";
	$fieldLabelsSC_Dashboard["English"]["Active_Freelancers__Manager_Title"] = "Manager Title";
	$fieldLabelsSC_Dashboard["English"]["Active_Freelancers__Freelancers"] = "Freelancers";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSC_Dashboard[""] = array();
}

//	search fields
$tdataSC_Dashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"Registration Forms Outstanding  ", "field"=>"Manager_Name" );
$tdataSC_Dashboard[".searchFields"]["Registration_Forms_Outstanding___Manager_Name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Registration Forms Outstanding  ", "field"=>"Manager_Title" );
$tdataSC_Dashboard[".searchFields"]["Registration_Forms_Outstanding___Manager_Title"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Registration Forms Outstanding  ", "field"=>"Event_date" );
$tdataSC_Dashboard[".searchFields"]["Registration_Forms_Outstanding___Event_date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Registration Forms Outstanding  ", "field"=>"Activations" );
$tdataSC_Dashboard[".searchFields"]["Registration_Forms_Outstanding___Activations"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Registration Forms Outstanding  ", "field"=>"Returned" );
$tdataSC_Dashboard[".searchFields"]["Registration_Forms_Outstanding___Returned"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Registration Forms Outstanding  ", "field"=>"Missing" );
$tdataSC_Dashboard[".searchFields"]["Registration_Forms_Outstanding___Missing"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Registration Forms Outstanding  ", "field"=>"Percent" );
$tdataSC_Dashboard[".searchFields"]["Registration_Forms_Outstanding___Percent"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Average Airtime Consumption 3 Months", "field"=>"Activator_Number" );
$tdataSC_Dashboard[".searchFields"]["Average_Airtime_Consumption_3_Months_Activator_Number"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Average Airtime Consumption 3 Months", "field"=>"Activator_Name" );
$tdataSC_Dashboard[".searchFields"]["Average_Airtime_Consumption_3_Months_Activator_Name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Average Airtime Consumption 3 Months", "field"=>"Manager_Name" );
$tdataSC_Dashboard[".searchFields"]["Average_Airtime_Consumption_3_Months_Manager_Name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Average Airtime Consumption 3 Months", "field"=>"Title" );
$tdataSC_Dashboard[".searchFields"]["Average_Airtime_Consumption_3_Months_Title"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Average Airtime Consumption 3 Months", "field"=>"Subscriber_Number" );
$tdataSC_Dashboard[".searchFields"]["Average_Airtime_Consumption_3_Months_Subscriber_Number"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Average Airtime Consumption 3 Months", "field"=>"Date_Activated" );
$tdataSC_Dashboard[".searchFields"]["Average_Airtime_Consumption_3_Months_Date_Activated"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Average Airtime Consumption 3 Months", "field"=>"Consumption" );
$tdataSC_Dashboard[".searchFields"]["Average_Airtime_Consumption_3_Months_Consumption"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Average Airtime Consumption 3 Months", "field"=>"End_of_3_Month" );
$tdataSC_Dashboard[".searchFields"]["Average_Airtime_Consumption_3_Months_End_of_3_Month"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Active Freelancers ", "field"=>"Manager_Name" );
$tdataSC_Dashboard[".searchFields"]["Active_Freelancers__Manager_Name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Active Freelancers ", "field"=>"Date" );
$tdataSC_Dashboard[".searchFields"]["Active_Freelancers__Date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Active Freelancers per TL", "field"=>"Team_Leader" );
$tdataSC_Dashboard[".searchFields"]["Active_Freelancers_per_TL_Team_Leader"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Active Freelancers per TL", "field"=>"Manager_Name" );
$tdataSC_Dashboard[".searchFields"]["Active_Freelancers_per_TL_Manager_Name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Active Freelancers per TL", "field"=>"Title" );
$tdataSC_Dashboard[".searchFields"]["Active_Freelancers_per_TL_Title"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Active Freelancers per TL", "field"=>"Date" );
$tdataSC_Dashboard[".searchFields"]["Active_Freelancers_per_TL_Date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Active Freelancers per TL", "field"=>"Active_FL" );
$tdataSC_Dashboard[".searchFields"]["Active_Freelancers_per_TL_Active_FL"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Activations per active FL", "field"=>"Activator_Number" );
$tdataSC_Dashboard[".searchFields"]["Activations_per_active_FL_Activator_Number"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Activations per active FL", "field"=>"Activator_Name" );
$tdataSC_Dashboard[".searchFields"]["Activations_per_active_FL_Activator_Name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Activations per active FL", "field"=>"Manager_Name" );
$tdataSC_Dashboard[".searchFields"]["Activations_per_active_FL_Manager_Name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Activations per active FL", "field"=>"Manager_Title" );
$tdataSC_Dashboard[".searchFields"]["Activations_per_active_FL_Manager_Title"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Activations per active FL", "field"=>"Date" );
$tdataSC_Dashboard[".searchFields"]["Activations_per_active_FL_Date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Activations per active FL", "field"=>"Activations" );
$tdataSC_Dashboard[".searchFields"]["Activations_per_active_FL_Activations"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Activations per active FL", "field"=>"With_Airtime" );
$tdataSC_Dashboard[".searchFields"]["Activations_per_active_FL_With_Airtime"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Activations per active FL", "field"=>"No_Airtime" );
$tdataSC_Dashboard[".searchFields"]["Activations_per_active_FL_No_Airtime"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Activations per active FL", "field"=>"Percent" );
$tdataSC_Dashboard[".searchFields"]["Activations_per_active_FL_Percent"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Activations and Airtime Transfers", "field"=>"Manager_Name" );
$tdataSC_Dashboard[".searchFields"]["Activations_and_Airtime_Transfers_Manager_Name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Activations and Airtime Transfers", "field"=>"Title" );
$tdataSC_Dashboard[".searchFields"]["Activations_and_Airtime_Transfers_Title"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Activations and Airtime Transfers", "field"=>"A_Date" );
$tdataSC_Dashboard[".searchFields"]["Activations_and_Airtime_Transfers_A_Date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Activations and Airtime Transfers", "field"=>"Total_Activations" );
$tdataSC_Dashboard[".searchFields"]["Activations_and_Airtime_Transfers_Total_Activations"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Activations and Airtime Transfers", "field"=>"With_Airtime" );
$tdataSC_Dashboard[".searchFields"]["Activations_and_Airtime_Transfers_With_Airtime"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Activations and Airtime Transfers", "field"=>"No_Airtime" );
$tdataSC_Dashboard[".searchFields"]["Activations_and_Airtime_Transfers_No_Airtime"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Activations and Airtime Transfers", "field"=>"Percent" );
$tdataSC_Dashboard[".searchFields"]["Activations_and_Airtime_Transfers_Percent"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Active Freelancers ", "field"=>"Manager_Title" );
$tdataSC_Dashboard[".searchFields"]["Active_Freelancers__Manager_Title"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Active Freelancers ", "field"=>"Freelancers" );
$tdataSC_Dashboard[".searchFields"]["Active_Freelancers__Freelancers"] = $dashField;

// all search fields
$tdataSC_Dashboard[".allSearchFields"] = array();
$tdataSC_Dashboard[".allSearchFields"][] = "Registration_Forms_Outstanding___Manager_Name";
$tdataSC_Dashboard[".allSearchFields"][] = "Registration_Forms_Outstanding___Manager_Title";
$tdataSC_Dashboard[".allSearchFields"][] = "Registration_Forms_Outstanding___Event_date";
$tdataSC_Dashboard[".allSearchFields"][] = "Registration_Forms_Outstanding___Activations";
$tdataSC_Dashboard[".allSearchFields"][] = "Registration_Forms_Outstanding___Returned";
$tdataSC_Dashboard[".allSearchFields"][] = "Registration_Forms_Outstanding___Missing";
$tdataSC_Dashboard[".allSearchFields"][] = "Registration_Forms_Outstanding___Percent";
$tdataSC_Dashboard[".allSearchFields"][] = "Average_Airtime_Consumption_3_Months_Activator_Number";
$tdataSC_Dashboard[".allSearchFields"][] = "Average_Airtime_Consumption_3_Months_Activator_Name";
$tdataSC_Dashboard[".allSearchFields"][] = "Average_Airtime_Consumption_3_Months_Manager_Name";
$tdataSC_Dashboard[".allSearchFields"][] = "Average_Airtime_Consumption_3_Months_Title";
$tdataSC_Dashboard[".allSearchFields"][] = "Average_Airtime_Consumption_3_Months_Subscriber_Number";
$tdataSC_Dashboard[".allSearchFields"][] = "Average_Airtime_Consumption_3_Months_Date_Activated";
$tdataSC_Dashboard[".allSearchFields"][] = "Average_Airtime_Consumption_3_Months_Consumption";
$tdataSC_Dashboard[".allSearchFields"][] = "Average_Airtime_Consumption_3_Months_End_of_3_Month";
$tdataSC_Dashboard[".allSearchFields"][] = "Active_Freelancers__Manager_Name";
$tdataSC_Dashboard[".allSearchFields"][] = "Active_Freelancers__Date";
$tdataSC_Dashboard[".allSearchFields"][] = "Active_Freelancers_per_TL_Team_Leader";
$tdataSC_Dashboard[".allSearchFields"][] = "Active_Freelancers_per_TL_Manager_Name";
$tdataSC_Dashboard[".allSearchFields"][] = "Active_Freelancers_per_TL_Title";
$tdataSC_Dashboard[".allSearchFields"][] = "Active_Freelancers_per_TL_Date";
$tdataSC_Dashboard[".allSearchFields"][] = "Active_Freelancers_per_TL_Active_FL";
$tdataSC_Dashboard[".allSearchFields"][] = "Activations_per_active_FL_Activator_Number";
$tdataSC_Dashboard[".allSearchFields"][] = "Activations_per_active_FL_Activator_Name";
$tdataSC_Dashboard[".allSearchFields"][] = "Activations_per_active_FL_Manager_Name";
$tdataSC_Dashboard[".allSearchFields"][] = "Activations_per_active_FL_Manager_Title";
$tdataSC_Dashboard[".allSearchFields"][] = "Activations_per_active_FL_Date";
$tdataSC_Dashboard[".allSearchFields"][] = "Activations_per_active_FL_Activations";
$tdataSC_Dashboard[".allSearchFields"][] = "Activations_per_active_FL_With_Airtime";
$tdataSC_Dashboard[".allSearchFields"][] = "Activations_per_active_FL_No_Airtime";
$tdataSC_Dashboard[".allSearchFields"][] = "Activations_per_active_FL_Percent";
$tdataSC_Dashboard[".allSearchFields"][] = "Activations_and_Airtime_Transfers_Manager_Name";
$tdataSC_Dashboard[".allSearchFields"][] = "Activations_and_Airtime_Transfers_Title";
$tdataSC_Dashboard[".allSearchFields"][] = "Activations_and_Airtime_Transfers_A_Date";
$tdataSC_Dashboard[".allSearchFields"][] = "Activations_and_Airtime_Transfers_Total_Activations";
$tdataSC_Dashboard[".allSearchFields"][] = "Activations_and_Airtime_Transfers_With_Airtime";
$tdataSC_Dashboard[".allSearchFields"][] = "Activations_and_Airtime_Transfers_No_Airtime";
$tdataSC_Dashboard[".allSearchFields"][] = "Activations_and_Airtime_Transfers_Percent";
$tdataSC_Dashboard[".allSearchFields"][] = "Active_Freelancers__Manager_Title";
$tdataSC_Dashboard[".allSearchFields"][] = "Active_Freelancers__Freelancers";

// good like search fields
$tdataSC_Dashboard[".googleLikeFields"] = array();
$tdataSC_Dashboard[".googleLikeFields"][] = "Registration_Forms_Outstanding___Manager_Name";
$tdataSC_Dashboard[".googleLikeFields"][] = "Registration_Forms_Outstanding___Manager_Title";
$tdataSC_Dashboard[".googleLikeFields"][] = "Registration_Forms_Outstanding___Event_date";
$tdataSC_Dashboard[".googleLikeFields"][] = "Registration_Forms_Outstanding___Activations";
$tdataSC_Dashboard[".googleLikeFields"][] = "Registration_Forms_Outstanding___Returned";
$tdataSC_Dashboard[".googleLikeFields"][] = "Registration_Forms_Outstanding___Missing";
$tdataSC_Dashboard[".googleLikeFields"][] = "Registration_Forms_Outstanding___Percent";
$tdataSC_Dashboard[".googleLikeFields"][] = "Average_Airtime_Consumption_3_Months_Activator_Number";
$tdataSC_Dashboard[".googleLikeFields"][] = "Average_Airtime_Consumption_3_Months_Activator_Name";
$tdataSC_Dashboard[".googleLikeFields"][] = "Average_Airtime_Consumption_3_Months_Manager_Name";
$tdataSC_Dashboard[".googleLikeFields"][] = "Average_Airtime_Consumption_3_Months_Title";
$tdataSC_Dashboard[".googleLikeFields"][] = "Average_Airtime_Consumption_3_Months_Subscriber_Number";
$tdataSC_Dashboard[".googleLikeFields"][] = "Average_Airtime_Consumption_3_Months_Date_Activated";
$tdataSC_Dashboard[".googleLikeFields"][] = "Average_Airtime_Consumption_3_Months_Consumption";
$tdataSC_Dashboard[".googleLikeFields"][] = "Average_Airtime_Consumption_3_Months_End_of_3_Month";
$tdataSC_Dashboard[".googleLikeFields"][] = "Active_Freelancers__Manager_Name";
$tdataSC_Dashboard[".googleLikeFields"][] = "Active_Freelancers__Date";
$tdataSC_Dashboard[".googleLikeFields"][] = "Active_Freelancers_per_TL_Team_Leader";
$tdataSC_Dashboard[".googleLikeFields"][] = "Active_Freelancers_per_TL_Manager_Name";
$tdataSC_Dashboard[".googleLikeFields"][] = "Active_Freelancers_per_TL_Title";
$tdataSC_Dashboard[".googleLikeFields"][] = "Active_Freelancers_per_TL_Date";
$tdataSC_Dashboard[".googleLikeFields"][] = "Active_Freelancers_per_TL_Active_FL";
$tdataSC_Dashboard[".googleLikeFields"][] = "Activations_per_active_FL_Activator_Number";
$tdataSC_Dashboard[".googleLikeFields"][] = "Activations_per_active_FL_Activator_Name";
$tdataSC_Dashboard[".googleLikeFields"][] = "Activations_per_active_FL_Manager_Name";
$tdataSC_Dashboard[".googleLikeFields"][] = "Activations_per_active_FL_Manager_Title";
$tdataSC_Dashboard[".googleLikeFields"][] = "Activations_per_active_FL_Date";
$tdataSC_Dashboard[".googleLikeFields"][] = "Activations_per_active_FL_Activations";
$tdataSC_Dashboard[".googleLikeFields"][] = "Activations_per_active_FL_With_Airtime";
$tdataSC_Dashboard[".googleLikeFields"][] = "Activations_per_active_FL_No_Airtime";
$tdataSC_Dashboard[".googleLikeFields"][] = "Activations_per_active_FL_Percent";
$tdataSC_Dashboard[".googleLikeFields"][] = "Activations_and_Airtime_Transfers_Manager_Name";
$tdataSC_Dashboard[".googleLikeFields"][] = "Activations_and_Airtime_Transfers_Title";
$tdataSC_Dashboard[".googleLikeFields"][] = "Activations_and_Airtime_Transfers_A_Date";
$tdataSC_Dashboard[".googleLikeFields"][] = "Activations_and_Airtime_Transfers_Total_Activations";
$tdataSC_Dashboard[".googleLikeFields"][] = "Activations_and_Airtime_Transfers_With_Airtime";
$tdataSC_Dashboard[".googleLikeFields"][] = "Activations_and_Airtime_Transfers_No_Airtime";
$tdataSC_Dashboard[".googleLikeFields"][] = "Activations_and_Airtime_Transfers_Percent";
$tdataSC_Dashboard[".googleLikeFields"][] = "Active_Freelancers__Manager_Title";
$tdataSC_Dashboard[".googleLikeFields"][] = "Active_Freelancers__Freelancers";

$tdataSC_Dashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "Registration_Forms_Outstanding___list", "table" => "Registration Forms Outstanding  ", "type" => 0);
	$dbelement["cellName"] = "cell_0_1";
	
			$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	
	$dbelement["popupAdd"] = 0 > 0;	
	$dbelement["popupEdit"] = 0 > 0;	
	$dbelement["popupView"] = 0 > 0;	
	$tdataSC_Dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Average_Airtime_Consumption_3_Months_list", "table" => "Average Airtime Consumption 3 Months", "type" => 0);
	$dbelement["cellName"] = "cell_1_0";
	
			$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	
	$dbelement["popupAdd"] = 0 > 0;	
	$dbelement["popupEdit"] = 0 > 0;	
	$dbelement["popupView"] = 0 > 0;	
	$tdataSC_Dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Active_Freelancers__list", "table" => "Active Freelancers ", "type" => 0);
	$dbelement["cellName"] = "cell_2_0";
	
			$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	
	$dbelement["popupAdd"] = 0 > 0;	
	$dbelement["popupEdit"] = 0 > 0;	
	$dbelement["popupView"] = 0 > 0;	
	$tdataSC_Dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Active_Freelancers_per_TL_list", "table" => "Active Freelancers per TL", "type" => 0);
	$dbelement["cellName"] = "cell_2_1";
	
			$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	
	$dbelement["popupAdd"] = 0 > 0;	
	$dbelement["popupEdit"] = 0 > 0;	
	$dbelement["popupView"] = 0 > 0;	
	$tdataSC_Dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Activations_per_active_FL_list", "table" => "Activations per active FL", "type" => 0);
	$dbelement["cellName"] = "cell_3_0";
	
			$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	
	$dbelement["popupAdd"] = 0 > 0;	
	$dbelement["popupEdit"] = 0 > 0;	
	$dbelement["popupView"] = 0 > 0;	
	$tdataSC_Dashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Activations_and_Airtime_Transfers_list", "table" => "Activations and Airtime Transfers", "type" => 0);
	$dbelement["cellName"] = "cell_0_0";
	
			$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	
	$dbelement["popupAdd"] = 0 > 0;	
	$dbelement["popupEdit"] = 0 > 0;	
	$dbelement["popupView"] = 0 > 0;	
	$tdataSC_Dashboard[".dashElements"][] = $dbelement;

$tdataSC_Dashboard[".shortTableName"] = "SC_Dashboard";
$tdataSC_Dashboard[".nType"] = 4;


$tableEvents["SC Dashboard"] = new eventsBase;
$tdataSC_Dashboard[".hasEvents"] = false;


$tdataSC_Dashboard[".tableType"] = "dashboard";



$tdataSC_Dashboard[".addPageEvents"] = false;

$tables_data["SC Dashboard"]=&$tdataSC_Dashboard;
$field_labels["SC_Dashboard"] = &$fieldLabelsSC_Dashboard;
$page_titles["SC_Dashboard"] = &$pageTitlesSC_Dashboard;

?>