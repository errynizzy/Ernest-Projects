<title>Get Scratch Cards</title><?php
//at the end this script should refresh every 15 minutes
ini_set('max_execution_time', 90000000);
echo('<meta http-equiv="refresh" content="1500">');

$dbstr ="(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)(HOST =10.10.10.7)(PORT = 1521))(CONNECT_DATA = (SERVER = DEDICATED)(SERVICE_NAME = cc)))";

//oracle
$conn = oci_connect('cc','smart',$dbstr);
$d = date('m/d/Y');


//mysql in my laptop
mysql_connect("localhost","root","mahad");
mysql_select_db("connekt1");


//fetch from oracle
$sql = "select to_char(payment_date,'MM/DD/YYYY') recharge_date, acc_nbr, -1*submit_amount/100 denomination, scratch_card_pwd serial_no 
from   payment
where  trunc(payment_date) <= trunc(sysdate)
and    scratch_card_pwd is not null and to_char(payment_date,'MM/DD/YYYY') = '$d'
order by 1 desc";

$stmt = oci_parse($conn, $sql);

oci_execute($stmt);

echo '<pre>';

while ( $row = oci_fetch_assoc($stmt) ) {
  print_r($row); // just to dispaly in browser to confirm if it works

 $RECHARGE_DATE = $row['RECHARGE_DATE'];
 $ACC_NBR = $row['ACC_NBR'];
 $DENOMINATION = $row['DENOMINATION'];
 $SERIAL_NO = $row['SERIAL_NO'];
 
  
  //insert to my sql table 
  $sql1 = ("INSERT INTO scratch_cards (RECHARGE_DATE, ACC_NBR, DENOMINATION, SERIAL_NO)

VALUES
(
'".$RECHARGE_DATE."',

'".$ACC_NBR."',

'".$DENOMINATION."',

'".$SERIAL_NO."'

)");

mysql_query($sql);
mysql_query($sql1);

}



?>