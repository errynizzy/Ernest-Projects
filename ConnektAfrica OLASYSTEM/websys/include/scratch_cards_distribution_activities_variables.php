<?php
$strTableName="scratch_cards_distribution_activities";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="scratch_cards_distribution_activities";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("scratch_cards_distribution_activities");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["scratch_cards_distribution_activities"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>