<?php


 include ("config.php");

$sql = "INSERT INTO more_checkup (pswd, clinic_name4, checkup_date, checkuptime, issue1, response) 
VALUES (
'". $_POST["pswd"]."' , 
'". $_POST["clinic_name4"]."' ,
'". $_POST["displayDate"]."' ,
'". $_POST["time"]."',
 '". $_POST["issue1"]."',
'..'
)";

// remember to use the real field names in the table

mysql_query($sql);
mysql_close();
?>

