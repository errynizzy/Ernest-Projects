<?php

 include ("config.php");
 
$d = date('d/m/Y');
$a = $_POST["mob_number"];
 
//remove -
$remove1 = str_replace("-", "", $a);

//remove (
$remove2 = str_replace("(", "", $remove1);

//remove )
$remove3 = str_replace(")", "", $remove2);

//remove " "
$remove4 = str_replace(" ", "", $remove3);

$reduced_9 = substr($remove4, -9); //ready to insert
  
 

$sql = "INSERT INTO subscriber_id_image 
(
number_id,
id_pic,
time
) 
VALUES 
(
'$reduced_9' ,
'".$_REQUEST['pic']."',
'$d'

)";

mysql_query($sql);



?>

