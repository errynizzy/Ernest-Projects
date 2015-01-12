<title>Live Balance</title><?php
ini_set('max_execution_time', 90000000);
echo('<meta http-equiv="refresh" content="1500">');

//at the end this script should refresh every 15 minutes
$dbstr ="(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)(HOST =10.10.10.7)(PORT = 1521))(CONNECT_DATA = (SERVER = DEDICATED)(SERVICE_NAME = cc)))";

//oracle
$conn = oci_connect('cc','smart',$dbstr);



//mysql in my laptop
mysql_connect("localhost","root","mahad");
mysql_select_db("iccid");

mysql_query('Truncate table pos_balance');
//$d = date('d-M-y');
//$d = '11142014';
$d = date('Ymd');
$msg = '<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
<div align="center">
  <p class="style1">Get Live Balance (Smart to Connekt Africa online server) Query Completed Successfully</p>
  <p class="style1">Last Query Run: </p>
';
$msgl = '</div>';



//fetch from oracle
$sql = "SELECT  EVENT_DATE,ACC_NBR,BALANCE
FROM
     (
    SELECT  TRUNC(SYSDATE) EVENT_DATE, S.ACC_NBR,-1*((B.GROSS_BAL+B.RESERVE_BAL+B.CONSUME_BAL)/100) AS BALANCE
    FROM  SUBS S,PROD P,BAL_20141114@LINK_RB B
    WHERE S.ACCT_ID =B.ACCT_ID
   AND P.PROD_STATE in ('A','B','D','E','G')
   AND P.PROD_ID = S.SUBS_ID
   AND S.ACC_NBR LIKE '79809%'
   /*and s.price_plan_id like '296'*/
   AND P.PROD_SPEC_ID IN (17) --prepaid customer product
  AND   B.ACCT_RES_ID in (1) -- local currency ie wallet type
    ORDER BY 1 ASC
    )";

$stmt = oci_parse($conn, $sql);

oci_execute($stmt);

echo '<pre>';

while ( $row = oci_fetch_assoc($stmt) ) {
  print_r($row); // just to dispaly in browser to confirm if it works
 

 $EVENT_DATE = $row['EVENT_DATE'];
 $ACC_NBR = $row['ACC_NBR'];
 $BALANCE = $row['BALANCE'];
 
if($BALANCE !=0){

  //insert to my sql table 
  $sql = ("INSERT INTO pos_balance (EVENT_DATE, ACC_NBR, BALANCE )

VALUES
(

'".$EVENT_DATE."',

'".$ACC_NBR."',

'".$BALANCE."'



)");

mysql_query($sql);

}

}

		//echo
					echo $msg. " ".$t.$msgl;


?>