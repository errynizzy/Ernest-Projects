<?php


 include ("config.php");


$sql = "UPDATE users SET 
lab_name = '". $_POST["clnc_name"]."' ,
check_up_date = '". $_POST["displayDate"]."',
check_up_time = '". $_POST["time"]."',
issue = '". $_POST["issue"]."',
checkup_response = '..'
WHERE
pswd = '". $_POST["pswd"]."'
";

// remember to use the real field names in the table

mysql_query($sql);
mysql_close();
?>

