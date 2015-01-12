<?php
ini_set('max_execution_time', 90000000);

 include ("config.php");
 
 $a = $_POST["posnumber"];
 
//remove -
$remove1 = str_replace("-", "", $a);

//remove (
$remove2 = str_replace("(", "", $remove1);

//remove )
$remove3 = str_replace(")", "", $remove2);

//remove " "
$remove4 = str_replace(" ", "", $remove3);

$reduced_9 = substr($remove4, -9); //ready to insert


$sql = "SELECT * FROM activators WHERE  Activator_Number = '".$reduced_9."' ";

$result = mysql_query($sql);
while($row=mysql_fetch_assoc($result))
$output[]=$row;
print(json_encode($output));
mysql_close();
?>
