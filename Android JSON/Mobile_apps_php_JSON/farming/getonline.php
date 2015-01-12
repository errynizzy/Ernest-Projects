<?php

// user inner join
 include ("config.php");

/*$sql = "SELECT * FROM tip 
JOIN account
ON
tip.tipname = '". $_POST["spinnerSelectCrop"]."'  AND (tip.ID = account.ID)
LIMIT 0,15
";*/

$sql = "SELECT * FROM tip WHERE tip.tipname = '". $_POST["spinnerSelectCrop"]."' LIMIT 0,15";
$result = mysql_query($sql);
while($row=mysql_fetch_assoc($result))
$output[]=$row;
print(json_encode($output));
mysql_close();


mysql_close();


?>
