<?php


 include ("config.php");

// all in 0ne query...hahhahahaa ernest
$sql = "SELECT * FROM workerstable
WHERE 
workerstable.healthcentername LIKE  '". $_POST["hcsearch"]."%'  
";

$result = mysql_query($sql);
while($row=mysql_fetch_assoc($result))
$output[]=$row;
print(json_encode($output));
mysql_close();
?>
