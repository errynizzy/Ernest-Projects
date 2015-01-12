<?php


 include ("config.php");


// all in 0ne query...hahhahahaa ernest
$sql = "SELECT * FROM users, personal, treatmenttable, healthissues, allergictable, in_born_issues 
WHERE 
personal.mvigourID = '". $_POST["mvigourID"]."'  
AND
treatmenttable.mvigourID = '". $_POST["mvigourID"]."'  
AND
healthissues.mvigourID = '". $_POST["mvigourID"]."'  
AND
allergictable.mvigourID = '". $_POST["mvigourID"]."' 
AND
in_born_issues.mvigourID = '". $_POST["mvigourID"]."' 

AND users.pswd = '". $_POST["pswd"]."' ";

$result = mysql_query($sql);
while($row=mysql_fetch_assoc($result))
$output[]=$row;
print(json_encode($output));
mysql_close();
?>
