<?php
$dalTablebatches = array();
$dalTablebatches["ID"] = array("type"=>20,"varname"=>"ID");
$dalTablebatches["Batch_Number"] = array("type"=>200,"varname"=>"Batch_Number");
$dalTablebatches["Given_Batch_Number"] = array("type"=>200,"varname"=>"Given_Batch_Number");
$dalTablebatches["Batch_size"] = array("type"=>3,"varname"=>"Batch_size");
$dalTablebatches["Status"] = array("type"=>200,"varname"=>"Status");
	$dalTablebatches["ID"]["key"]=true;
$dal_info["batches"]=&$dalTablebatches;

?>