<?php

 include ("config.php");



$sql = "DELETE FROM beneficiary WHERE  
beneficiary.mvigourID = '". $_POST["mvigourID1"]."'
AND
beneficiary.fname = '". $_POST["fname"]."'
LIMIT 1
";

$result = mysql_query($sql);
while($row=mysql_fetch_assoc($result))
$output[]=$row;
print(json_encode($output));
mysql_close();
?>
