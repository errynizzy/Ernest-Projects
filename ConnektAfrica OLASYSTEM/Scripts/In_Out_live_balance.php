<title>In_OUT Balance</title><?php
//at the end this script should refresh every 15 minutes
ini_set('max_execution_time', 90000000);
echo('<meta http-equiv="refresh" content="1500">');
$dbstr ="(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)(HOST =10.10.10.7)(PORT = 1521))(CONNECT_DATA = (SERVER = DEDICATED)(SERVICE_NAME = cc)))";

//oracle
$conn = oci_connect('cc','smart',$dbstr);



//mysql in my laptop
mysql_connect("localhost","root","mahad");
mysql_select_db("iccid");
$d = date('m/d/Y');

$t = date("Y-m-d H:i:s");
$msg = '<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
<div align="center">
  <p class="style1">Live balance (Smart to Connekt Africa online server) Query Completed Successfully</p>
  <p class="style1">Last Query Run: </p>
';
$msgl = '</div>';


//fetch from oracle
$sql = "SELECT a.acct_book_id, TO_CHAR(A.CREATED_DATE,'MM/DD/YYYY HH24:MI') as EVENT_DATE, C.CUST_NAME, S.ACC_NBR,(-1*PRE_BALANCE/100) PRE_BALANCE, ((-1*CHARGE/100)) CHARGE,
          (
          CASE
          WHEN (CHARGE/100) > 0 THEN 'TRANSFER OUT'
          WHEN (CHARGE/100) < 0 THEN 'TRANSFER IN'
          ELSE 'ZERO TRANSFER'
          END
          ) TRANSFER_MODE

     FROM  ACCT_BOOK A, CUST C, SUBS S
     WHERE TO_CHAR(A.CREATED_DATE,'MM/DD/YYYY') like '$d%'
     AND   S.ACCT_ID = A.ACCT_ID
     AND    acct_book_type in ('L','K')
     AND   S.CUST_ID = C.CUST_ID
     AND ACC_NBR between '798090000' and '798099999'

   ";
//LIKE '79809%'
$stmt = oci_parse($conn, $sql);

oci_execute($stmt);

echo '<pre>';

while ( $row = oci_fetch_assoc($stmt) ) {
  print_r($row); // just to dispaly in browser to confirm if it works


 $ACCT_BOOK_ID = $row['ACCT_BOOK_ID'];
 $EVENT_DATE = $row['EVENT_DATE'];
 $CUST_NAME = $row['CUST_NAME'];
 $ACC_NBR = $row['ACC_NBR'];
 $PRE_BALANCE = $row['PRE_BALANCE'];
 $CHARGE = $row['CHARGE'];
 $TRANSFER_MODE = $row['TRANSFER_MODE'];
  
  //insert to my sql table 
  $sql = ("INSERT INTO InOut_time (ACCT_BOOK_ID, EVENT_DATE, CUST_NAME, ACC_NBR, PRE_BALANCE, CHARGE,  TRANSFER_MODE)

VALUES
(
'".$ACCT_BOOK_ID."',

'".$EVENT_DATE."',

'".$CUST_NAME."',

'".$ACC_NBR."',

'".$PRE_BALANCE."',

'".$CHARGE."',

'".$TRANSFER_MODE."'

)");

mysql_query($sql);

}


//maxcom selcom
$sql2 = "SELECT a.acct_book_id, TO_CHAR(A.CREATED_DATE,'MM/DD/YYYY HH24:MI') as EVENT_DATE, C.CUST_NAME, S.ACC_NBR,(-1*PRE_BALANCE/100) PRE_BALANCE, ((-1*CHARGE/100)) CHARGE,
          (
          CASE
          WHEN (CHARGE/100) > 0 THEN 'TRANSFER OUT'
          WHEN (CHARGE/100) < 0 THEN 'TRANSFER IN'
          ELSE 'ZERO TRANSFER'
          END
          ) TRANSFER_MODE

     FROM  ACCT_BOOK A, CUST C, SUBS S
     WHERE TO_CHAR(A.CREATED_DATE,'MM/DD/YYYY') like '$d%'
     AND   S.ACCT_ID = A.ACCT_ID
     AND    acct_book_type in ('L','K')
     AND   S.CUST_ID = C.CUST_ID
     AND ACC_NBR in ('777777777', '888888888')

   ";
//LIKE '79809%'
$stmt1 = oci_parse($conn, $sql2);

oci_execute($stmt1);

echo '<pre>';

while ( $row = oci_fetch_assoc($stmt1) ) {
  print_r($row); // just to dispaly in browser to confirm if it works
 

 $ACCT_BOOK_ID = $row['ACCT_BOOK_ID'];
 $EVENT_DATE = $row['EVENT_DATE'];
 $CUST_NAME = $row['CUST_NAME'];
 $ACC_NBR = $row['ACC_NBR'];
 $PRE_BALANCE = $row['PRE_BALANCE'];
 $CHARGE = $row['CHARGE'];
 $TRANSFER_MODE = $row['TRANSFER_MODE'];
  
  //insert to my sql table 
  $sql1 = ("INSERT INTO InOut_time (ACCT_BOOK_ID, EVENT_DATE, CUST_NAME, ACC_NBR, PRE_BALANCE, CHARGE,  TRANSFER_MODE)

VALUES
(
'".$ACCT_BOOK_ID."',

'".$EVENT_DATE."',

'".$CUST_NAME."',

'".$ACC_NBR."',

'".$PRE_BALANCE."',

'".$CHARGE."',

'".$TRANSFER_MODE."'

)");

mysql_query($sql1);

}

	//echo
					echo $msg. " ".$t.$msgl;


?>