<?php
$dalTableactivated_sims = array();
$dalTableactivated_sims["ID"] = array("type"=>20,"varname"=>"ID");
$dalTableactivated_sims["Activator_Number"] = array("type"=>200,"varname"=>"Activator_Number");
$dalTableactivated_sims["Subscriber_ICCID"] = array("type"=>200,"varname"=>"Subscriber_ICCID");
$dalTableactivated_sims["Subscriber_Number"] = array("type"=>200,"varname"=>"Subscriber_Number");
$dalTableactivated_sims["Event_date"] = array("type"=>200,"varname"=>"Event_date");
$dalTableactivated_sims["time"] = array("type"=>200,"varname"=>"time");
	$dalTableactivated_sims["Subscriber_ICCID"]["key"]=true;
$dal_info["activated_sims"]=&$dalTableactivated_sims;

?>