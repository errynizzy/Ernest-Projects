<?php
$dalTablesimcards = array();
$dalTablesimcards["ID"] = array("type"=>20,"varname"=>"ID");
$dalTablesimcards["supplier_name"] = array("type"=>200,"varname"=>"supplier_name");
$dalTablesimcards["supplier_number"] = array("type"=>20,"varname"=>"supplier_number");
$dalTablesimcards["batch_number"] = array("type"=>200,"varname"=>"batch_number");
$dalTablesimcards["batch_size"] = array("type"=>3,"varname"=>"batch_size");
$dalTablesimcards["Date"] = array("type"=>7,"varname"=>"Date");
$dalTablesimcards["pos_number"] = array("type"=>200,"varname"=>"pos_number");
$dalTablesimcards["status"] = array("type"=>200,"varname"=>"status");
$dalTablesimcards["mydata"] = array("type"=>3,"varname"=>"mydata");
	$dalTablesimcards["ID"]["key"]=true;
$dal_info["simcards"]=&$dalTablesimcards;

?>