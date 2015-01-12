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
$today5 = $today3;
$today4 = $today1.'.'.$today2;
$end1 = date('Y', $expire);
$end2 = date('m', $expire);
$end3 = date('d', $expire);
$end5 = $end3;
$end4 = $end1.'.'.$end2;




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
$table.current_year_month = $today4,
$table.current_day = $today5,
$table.remaining_days = $remain,
$table.expire_year_month = $end4,
$table.expire_day = $end5,
$table.status = 'disabled'

WHERE
$table.mvigourID = '". $_POST["mvigourID"]."'
";
mysql_query($dis);
}

else if ($remain > 0)
{
$sql2 = "UPDATE $table SET 
$table.current_year_month = $today4,
$table.current_day = $today5,
$table.remaining_days = $remain,
$table.expire_year_month = $end4,
$table.expire_day = $end5,
$table.status = 'active'

WHERE
$table.mvigourID = '". $_POST["mvigourID"]."'
";
mysql_query($sql2);
}



// third manipulation
$sql = "SELECT * FROM users, $table WHERE  

users.pswd = '". $_POST["pswd"]."'
AND
$table.mvigourID = '". $_POST["mvigourID"]."'
";


$result = mysql_query($sql);
while($row=mysql_fetch_assoc($result))
$output[]=$row;
print(json_encode($output));




mysql_close();
?>
