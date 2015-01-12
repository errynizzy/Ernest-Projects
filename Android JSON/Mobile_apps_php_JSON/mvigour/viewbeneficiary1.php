<?php

 include ("config.php");



$sql = "SELECT * FROM users,beneficiary WHERE  

users.pswd = '". $_POST["pswd"]."'
AND
users.mvigourID = '". $_POST["mvigourID"]."'
AND
beneficiary.mvigourID = '". $_POST["mvigourID"]."'
";

$result = mysql_query($sql);
while($row=mysql_fetch_assoc($result))
$output[]=$row;
print(json_encode($output));
mysql_close();
?>
