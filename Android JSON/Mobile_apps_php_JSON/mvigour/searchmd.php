<?php


 include ("config.php");

// all in 0ne query...hahhahahaa ernest
$sql = "SELECT * FROM workerstable
WHERE 
workerstable.full_names LIKE  '". $_POST["namesearch"]."%'  
";

$result = mysql_query($sql);
while($row=mysql_fetch_assoc($result))
$output[]=$row;
print(json_encode($output));
mysql_close();
?>
