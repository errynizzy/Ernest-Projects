<?php


 include ("config.php");

$sql = "INSERT INTO complains (mvigourID, Complain) 
VALUES (
'". $_POST["mvigourID"]."' , 
'". $_POST["complain"]."'
)";

mysql_query($sql);
mysql_close();
?>

