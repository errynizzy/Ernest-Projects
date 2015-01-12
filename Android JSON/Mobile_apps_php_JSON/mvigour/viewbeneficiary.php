<?php

 include ("config.php");

$table = $_POST["bundleid"];

//the first manipulation
$sql1 = "SELECT * FROM $table";
$result1 = mysql_query($sql1);
while ($row = mysql_fetch_array($result1))
{
$a1 = $row["year"];
$a2 = $row["month"];
$a3 = $row["date"]; 
$y = $row["bundle_days"];
}

//get date from db add it to $expire
$expire = mktime(0,0,0,$a2,$a3,$a1) + ($y * 24 * 60 * 60);
                   // $aa days; 24 hours; 60 mins; 60secs

$today1 = date('Y');
$today2 = date('m');
$today3 = date('d');
$today4 = $today1.'.'.$today2.$today3;
$end1 = date('Y', $expire);
$end2 = date('m', $expire);
$end3 = date('d', $expire);
$end4 = $end1.".".$end2.$end3;



mysql_query($today4);
mysql_query($end4);
//mysql_query($active);

$a = date('Y', $expire); 
$b = date('m', $expire); 
$c = date('d', $expire); 


//the killer substraction of date from the desired one
    $remain = ceil( ( mktime( 0,0,0,$b,$c,$a ) - time() ) / 86400 );

   
mysql_query($remain);



// second manipulation

if ($remain <= 0)
{
$dis = "UPDATE $table SET 
$table.current_date = $today4,
$table.remaining_days = $remain,
$table.expire_date = $end4,
$table.status = 'disabled'

WHERE
$table.mvigourID = '". $_POST["mvigourID"]."'
";
mysql_query($dis);
}

else if ($remain > 0)
{
$sql2 = "UPDATE $table SET 
$table.current_date = $today4,
$table.remaining_days = $remain,
$table.expire_date = $end4,
$table.status = 'active'

WHERE
$table.mvigourID = '". $_POST["mvigourID"]."'
";
mysql_query($sql2);
}



// third manipulation
$sql = "SELECT * FROM users, $table, beneficiary WHERE  

users.pswd = '". $_POST["pswd"]."'
AND
$table.mvigourID = '". $_POST["mvigourID"]."'
AND
beneficiary.mvigourID = '". $_POST["mvigourID"]."'

";


$result = mysql_query($sql);
while($row=mysql_fetch_assoc($result))
$output[]=$row;
print(json_encode($output));




mysql_close();
?>
