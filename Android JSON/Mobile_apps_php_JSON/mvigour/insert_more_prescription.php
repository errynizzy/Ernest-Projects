<?php


 include ("config.php");


$sql = "INSERT INTO more_prescription (pswd, clinic_name3, problem2, symptoms2, response) 
VALUES (
'". $_POST["pswd"]."' , 
'". $_POST["clinic_name3"]."' ,
'". $_POST["problem2"]."' ,
'". $_POST["symptoms2"]."',
'....' 
)";

// remember to use the real field names in the table

mysql_query($sql);
mysql_close();
?>

