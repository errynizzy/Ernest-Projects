<?php

 include ("config.php");



$sql = "UPDATE  beneficiary SET
beneficiary.fname  = '". $_POST["fname2"]."',
beneficiary.othernames = '". $_POST["othernames"]."',
beneficiary.relation  = '". $_POST["relation"]."',
beneficiary.Age = '". $_POST["Age"]."',
beneficiary.gender = '". $_POST["gender"]."'

WHERE  
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
