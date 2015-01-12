<?php


 include ("config.php");

$sql = "UPDATE users SET 
clinic_name = '". $_POST["clnc_name"]."' ,
appointment_date = '". $_POST["displayDate"]."', 
appointment_time = '". $_POST["appo_time"]."',
tomeet = '". $_POST["tomeet"]."',
appointment_response = '..'
WHERE
pswd = '". $_POST["pswd"]."'
";

// remember to use the real field names in the table

mysql_query($sql);
mysql_close();
?>

