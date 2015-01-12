<?php
$dalTablepos_out = array();
$dalTablepos_out["ACCT_BOOK_ID"] = array("type"=>20,"varname"=>"ACCT_BOOK_ID");
$dalTablepos_out["TRANSFER_DATE"] = array("type"=>200,"varname"=>"TRANSFER_DATE");
$dalTablepos_out["ORIGIANL_CUSTOMER"] = array("type"=>200,"varname"=>"ORIGIANL_CUSTOMER");
$dalTablepos_out["ORG_SERVICE_NUMBER"] = array("type"=>3,"varname"=>"ORG_SERVICE_NUMBER");
$dalTablepos_out["CHARGE"] = array("type"=>200,"varname"=>"CHARGE");
$dalTablepos_out["DESTINATION_CUSTOMER"] = array("type"=>200,"varname"=>"DESTINATION_CUSTOMER");
$dalTablepos_out["DEST_SERVICE_NUMBER"] = array("type"=>3,"varname"=>"DEST_SERVICE_NUMBER");
	$dalTablepos_out["ACCT_BOOK_ID"]["key"]=true;
$dal_info["pos_out"]=&$dalTablepos_out;

?>