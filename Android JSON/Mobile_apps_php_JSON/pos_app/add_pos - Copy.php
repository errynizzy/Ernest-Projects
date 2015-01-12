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


$sql = "INSERT INTO activators
(
pos_type,
Manager_Name,
Manager_Number,
Activator_Name,
Activator_Number,
business_name,
altenative_number,
pos_iccid,
registration_date,
gender,
DOB,
Area,
id_type,
id_number,
lat,
lon
) 
VALUES 
(
'Static POS',
'". $_POST["valid_rdo_name"]."' ,

'". $_POST["valid_rdo_number"]."' ,

'". $_POST["valid_name"]."' ,

'".$reduced_9."' ,

'". $_POST["valid_business_name"]."' ,

'". $_POST["valid_phone2"]."' ,

'". $_POST["valid_serial_number"]."' ,

'". $_POST["valid_reg_date"]."' ,

'". $_POST["valid_gender"]."' ,

'". $_POST["valid_dob"]."' ,

'". $_POST["valid_address"]."' ,

'". $_POST["valid_id_type"]."' ,

'". $_POST["valid_id_number"]."' ,

'". $_POST["valid_lat"]."' ,

'". $_POST["valid_lon"]."' 

)";

mysql_query($sql);
mysql_query("UPDATE activators SET mydata = '1'");


?>

