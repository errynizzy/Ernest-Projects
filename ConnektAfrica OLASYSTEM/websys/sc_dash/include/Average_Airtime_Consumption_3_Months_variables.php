<?php
$strTableName="Average Airtime Consumption 3 Months";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="activated_sims";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Average Airtime Consumption 3 Months");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Average Airtime Consumption 3 Months"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>