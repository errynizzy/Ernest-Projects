<?php
$dalTableusers = array();
$dalTableusers["ID"] = array("type"=>3,"varname"=>"ID");
$dalTableusers["username"] = array("type"=>200,"varname"=>"username");
$dalTableusers["password"] = array("type"=>200,"varname"=>"password");
$dalTableusers["email"] = array("type"=>200,"varname"=>"email");
$dalTableusers["fullname"] = array("type"=>200,"varname"=>"fullname");
$dalTableusers["groupid"] = array("type"=>200,"varname"=>"groupid");
$dalTableusers["active"] = array("type"=>3,"varname"=>"active");
$dal_info["users"]=&$dalTableusers;

?>