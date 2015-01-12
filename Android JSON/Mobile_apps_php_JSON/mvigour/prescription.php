<?php

 include ("config.php");


$sql = "UPDATE users SET 
pharmacy_name = '". $_POST["clnc_name"]."' ,
problem = '". $_POST["problem"]."',
symptoms = '". $_POST["symptom"]."',
prescription_response = '..'
WHERE
pswd = '". $_POST["pswd"]."'
";

// remember to use the real field names in the table

mysql_query($sql);
mysql_close();
?>

