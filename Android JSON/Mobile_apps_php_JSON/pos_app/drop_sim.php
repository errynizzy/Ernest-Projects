<?php

 include ("config.php");
 $valid_number = $_REQUEST['valid_number'];
 $valid_name = $_REQUEST['valid_name'];
 $status = $_REQUEST['status'];
 
 $a = $valid_number;
 
 //remove -
$remove1 = str_replace("-", "", $a);

//remove ?
$removee = str_replace("?", "", $remove1);

//remove (
$remove2 = str_replace("(", "", $removee);

//remove )
$remove3 = str_replace(")", "", $remove2);

//remove " "
$remove4 = str_replace(" ", "", $remove3);

$reduced_9 = substr($remove4, -9); //ready to insert


$sql = "UPDATE  simcards SET pos_number = '".$reduced_9."', status =  '".$status."' WHERE batch_number = '".$valid_name."'";

mysql_query($sql);



?>

