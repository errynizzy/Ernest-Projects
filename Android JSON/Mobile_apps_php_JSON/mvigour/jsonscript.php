<?php


 include ("config.php");

$a = rand(1,1000000);
$b = "MVG";
$c = $b . $a;

$sql = "INSERT INTO users (mvigourID, names, gender, phone, address, pswd) 
VALUES (
'$c',
'". $_POST["names"]."' , 
'". $_POST["gender"]."' ,
'". $_POST["phone"]."' ,
'". $_POST["address"]."' ,
'". $_POST["pswd"]."'
)";

mysql_query($sql);
mysql_close();
?>

