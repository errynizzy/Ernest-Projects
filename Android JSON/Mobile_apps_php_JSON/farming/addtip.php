<?php

// add a column for inserting date automatically 
 include ("config.php");
 
 $time = date('D, d M Y H:i:s T');

$sql = "UPDATE tip SET
tipname = '". $_POST["spinnerSelectCrop"]."' ,
usertip = '". $_POST["editTextTip"]."' ,
date = '$time'

WHERE
ID = '". $_POST["editTextID"]."'
AND
tipname = ''
LIMIT 1
";

mysql_query($sql);

//get updating data
$sql11 = "SELECT * FROM tip WHERE tip.ID = '". $_POST["editTextID"]."' ";
$result11 = mysql_query($sql11);
while ($row11 = mysql_fetch_array($result11))
{
$a1 = $row11["names"];
$a2 = $row11["country"];
$a3 = $row11["email"]; 

}
mysql_query($sql11);


//another creating the next empty space

$sql1 = "INSERT INTO tip (ID)
VALUES 
('". $_POST["editTextID"]."')
";

mysql_query($sql1);

//update the table
$final = "UPDATE tip SET
names = '$a1' ,
country = '$a2' ,
email = '$a3'

WHERE
ID = '". $_POST["editTextID"]."'
AND
tipname = ''
LIMIT 1
";

mysql_query($final);






mysql_close();
?>

