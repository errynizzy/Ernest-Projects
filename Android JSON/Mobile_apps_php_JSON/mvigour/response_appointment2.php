<?php


 include ("config.php");


// add queries for more 1, 2, 3
$sql = "SELECT * FROM users, more_appointments WHERE more_appointments.pswd = '". $_POST["pswd"]."' AND users.pswd = '". $_POST["pswd"]."' ";

$result = mysql_query($sql);
while($row=mysql_fetch_assoc($result))
$output[]=$row;
print(json_encode($output));
mysql_close();
?>
