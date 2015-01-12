<?php

 include ("config.php");
 
 $aa = rand(1,1000000);
$bb = "BRAND";
$cc = $bb . $aa;
 
 $d = date('d/m/Y H:i:s ');
$a = $_POST["valid_mob_number"];
 
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



$sql = "INSERT INTO pos_profile 
(
name,
phone_number,
reg_date,
serial_number,
phone2,
gender,
dob,
address,
id_type,
id_number,
business_name,
business_type,
items,
lat,
lon,
rdo_name,
rdo_number,
POS_TYPE,
DateTimeadded
) 
VALUES 
(
'". $_POST["valid_name"]."' ,
'$cc' , 
'". $_POST["valid_reg_date"]."' ,
'". $_POST["valid_serial_number"]."' ,
'". $_POST["valid_phone2"]."' ,
'". $_POST["valid_gender"]."' ,
'". $_POST["valid_dob"]."' ,
'". $_POST["valid_address"]."' ,
'". $_POST["valid_id_type"]."' ,
'". $_POST["valid_id_number"]."' ,
'". $_POST["valid_business_name"]."' ,
'". $_POST["valid_business_type"]."' ,
'". $_POST["valid_items"]."' ,
'". $_POST["valid_lat"]."' ,
'". $_POST["valid_lon"]."' ,
'". $_POST["valid_rdo_name"]."' ,
'". $_POST["valid_rdo_number"]."' ,
'POS Branding Only',			       
'$d'
)";

mysql_query($sql);



?>

