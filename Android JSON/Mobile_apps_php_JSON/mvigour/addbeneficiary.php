<?php


 include ("config.php");


$sql = "INSERT INTO beneficiary (mvigourID, fname, othernames, relation, Age, gender) 
VALUES (
'". $_POST["mvigourID"]."' , 
'". $_POST["fname"]."' ,
'". $_POST["othernames"]."' ,
'". $_POST["relation"]."' ,
'". $_POST["Age"]."',
'". $_POST["gender"]."'
)";

mysql_query($sql);
mysql_close();
?>

