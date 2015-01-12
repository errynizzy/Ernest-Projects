<?php
$dalTableteam_leader = array();
$dalTableteam_leader["ID"] = array("type"=>20,"varname"=>"ID");
$dalTableteam_leader["Team_Leader_Name"] = array("type"=>200,"varname"=>"Team_Leader_Name");
$dalTableteam_leader["POS_Number"] = array("type"=>200,"varname"=>"POS_Number");
$dalTableteam_leader["Sales_Coordinator_Name"] = array("type"=>200,"varname"=>"Sales_Coordinator_Name");
$dalTableteam_leader["mydata"] = array("type"=>3,"varname"=>"mydata");
	$dalTableteam_leader["POS_Number"]["key"]=true;
$dal_info["team_leader"]=&$dalTableteam_leader;

?>