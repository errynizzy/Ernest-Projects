<?php

$host="localhost"; //replace with database hostname
$username="connektafrica"; //replace with database username
$password="Password!23"; //replace with database password
$db_name="connektafrica_pos"; //replace with database name
 
 $number = $_GET['number'];
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
$sql = "select * from simcards where supplier_number = $number AND status = '' order by batch_number ASC";
$result = mysql_query($sql);
$json = array();
 
if(mysql_num_rows($result)){
while($row=mysql_fetch_assoc($result)){
$json['simcards'][]=$row;
}
}
mysql_close($con);
echo json_encode($json); 


?>