<?php


 include ("config.php");

$sql = "SELECT * FROM counselling";
$result = mysql_query($sql);
while($row=mysql_fetch_assoc($result))
$output[]=$row;
print(json_encode($output));
mysql_close();
?>
