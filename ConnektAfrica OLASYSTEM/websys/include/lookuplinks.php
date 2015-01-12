<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["title_lookup"]["activators.pos_type"]["edit"] = array("table" => "activators", "field" => "pos_type", "page" => "edit");
	$lookupTableLinks["controller"]["activators.Manager_Name"]["edit"] = array("table" => "activators", "field" => "Manager_Name", "page" => "edit");
	$lookupTableLinks["title_lookup"]["activators.Manager_Title"]["edit"] = array("table" => "activators", "field" => "Manager_Title", "page" => "edit");
	$lookupTableLinks["team_leader"]["activators.Team_Leader"]["edit"] = array("table" => "activators", "field" => "Team_Leader", "page" => "edit");
	$lookupTableLinks["paid_batch_lookup"]["activators.Batch_Paid"]["edit"] = array("table" => "activators", "field" => "Batch_Paid", "page" => "edit");
	$lookupTableLinks["controller"]["simcards.supplier_name"]["edit"] = array("table" => "simcards", "field" => "supplier_name", "page" => "edit");
	$lookupTableLinks["Copy of batches"]["simcards.batch_number"]["edit"] = array("table" => "simcards", "field" => "batch_number", "page" => "edit");
}

?>