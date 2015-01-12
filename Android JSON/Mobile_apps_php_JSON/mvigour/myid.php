<?php


 include ("config.php");


$sql = "SELECT mvigourID, names FROM users WHERE  pswd = '". $_POST["pswd"]."' ";

$result = mysql_query($sql);
while($row=mysql_fetch_assoc($result))
$output[]=$row;
print(json_encode($output));
mysql_close();
?>
