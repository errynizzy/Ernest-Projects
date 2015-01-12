<?php


 include ("config.php");


$sql = "SELECT * FROM users, more_prescription WHERE  users.pswd = '". $_POST["pswd"]."' AND more_prescription.pswd = '". $_POST["pswd"]."'";

$result = mysql_query($sql);
while($row=mysql_fetch_assoc($result))
$output[]=$row;
print(json_encode($output));
mysql_close();
?>
