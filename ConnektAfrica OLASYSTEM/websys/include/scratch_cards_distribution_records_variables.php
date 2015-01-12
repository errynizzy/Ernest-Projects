<?php
$strTableName="scratch_cards_distribution_records";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="scratch_cards_distribution_records";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("scratch_cards_distribution_records");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["scratch_cards_distribution_records"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>