<?php


 include ("config.php");

$sql = "INSERT INTO comments (country, comment) 
VALUES (
'". $_POST["autoCompleteTextViewCountry"]."' , 
'". $_POST["editTextComment"]."'
)";

mysql_query($sql);
mysql_close();
?>

