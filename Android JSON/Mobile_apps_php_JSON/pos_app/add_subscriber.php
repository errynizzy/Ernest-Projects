<?php

 include ("config.php");
 
 $d = date('d/m/Y H:i:s ');
 $a = $_POST["valid_mob_number"];
 
//remove -
$remove1 = str_replace("-", "", $a);

//remove (
$remove2 = str_replace("(", "", $remove1);

//remove )
$remove3 = str_replace(")", "", $remove2);

//remove " "
$remove4 = str_replace(" ", "", $remove3);

$reduced_9 = substr($remove4, -9); //ready to insert



 $a1 = $_POST["valid_rdo_number"];
 
//remove -
$remove11 = str_replace("-", "", $a1);

//remove (
$remove21 = str_replace("(", "", $remove11);

//remove )
$remove31 = str_replace(")", "", $remove21);

//remove " "
$remove41 = str_replace(" ", "", $remove31);

$reduced_91 = substr($remove41, -9); //ready to insert



$sql = "INSERT INTO subscriber 
(
phone_number,
reg_date,
serial_number,
rdo_name,
rdo_number,
DateTimeadded
) 
VALUES 
(
'$reduced_9' , 
'". $_POST["valid_reg_date"]."' ,
'". $_POST["valid_serial_number"]."' ,
'". $_POST["valid_rdo_name"]."' ,
'$reduced_91' ,
'$d'
)";

mysql_query($sql);



?>

