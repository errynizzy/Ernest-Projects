<?php

$host="localhost"; //replace with database hostname
$username="connektafrica"; //replace with database username
$password="Password!23"; //replace with database password
$db_name="connektafrica_pos"; //replace with database name
 
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
$sql = "select * from pos_profile";
$result = mysql_query($sql);
$json = array();
 
if(mysql_num_rows($result)){
while($row=mysql_fetch_assoc($result)){
$json['pos_profile'][]=$row;
}
}
mysql_close($con);
echo json_encode($json); 


?>