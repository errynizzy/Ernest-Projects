<?php


 include ("config.php");

$sql = "INSERT INTO more_appointments (pswd, clinic_name2, date, time, tomeet1, response) 
VALUES (
'". $_POST["pswd"]."' , 
'". $_POST["clinic_name2"]."' ,
'". $_POST["displayDate"]."' ,
'". $_POST["time"]."',
'". $_POST["tomeet1"]."',
'.....'
)";

// remember to use the real field names in the table

mysql_query($sql);
mysql_close();
?>

