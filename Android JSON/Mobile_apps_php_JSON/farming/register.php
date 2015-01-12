<?php


  include ("config.php");
  
$a = rand(1,1000);
$b = "MFI";
$c = $b . $a;
$d = "farm";

$sql = "INSERT INTO account (ID, pswd, names, gender, country, email, log) 
VALUES (
'$c',
'". $_POST["pswd"]."' , 
'". $_POST["names"]."' ,
'". $_POST["gender"]."' ,
'". $_POST["country"]."' ,
'". $_POST["email"]."',
'$d'
)";

mysql_query($sql);

$sql1 = "INSERT INTO tip (ID, names, country, email)
VALUES 
(
'$c',
'". $_POST["names"]."' ,
'". $_POST["country"]."' ,
'". $_POST["email"]."'
)
";

mysql_query($sql1);

mysql_close();
?>

