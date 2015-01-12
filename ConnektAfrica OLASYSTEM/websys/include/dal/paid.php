<?php
$dalTablepaid = array();
$dalTablepaid["ID"] = array("type"=>20,"varname"=>"ID");
$dalTablepaid["Paid_MSISDN"] = array("type"=>200,"varname"=>"Paid_MSISDN");
$dalTablepaid["Date_Paid"] = array("type"=>200,"varname"=>"Date_Paid");
$dalTablepaid["mydata"] = array("type"=>3,"varname"=>"mydata");
	$dalTablepaid["Paid_MSISDN"]["key"]=true;
$dal_info["paid"]=&$dalTablepaid;

?>