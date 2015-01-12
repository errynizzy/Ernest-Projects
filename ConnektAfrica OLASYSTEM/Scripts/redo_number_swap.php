<title>REDO-Number Swap</title><?php
echo('<meta http-equiv="refresh" content="3000">');
ini_set('max_execution_time', 900000);
//at the end this script should refresh every 15 minutes
$dbstr ="(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)(HOST =10.10.10.7)(PORT = 1521))(CONNECT_DATA = (SERVER = DEDICATED)(SERVICE_NAME = cc)))";

//oracle
$conn = oci_connect('cc','smart',$dbstr);
$t = date("Y-m-d H:i:s");
$tt = date('d-M-y');
$d = '11-JAN-15';


$msg = '<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
<div align="center">
  <p class="style1">Get Number Swap Query Completed Successfully</p>
  <p class="style1">Last Query Run: </p>
';
$msgl = '</div>';


//mysql in my laptop
mysql_connect("localhost","root","mahad");
mysql_select_db("iccid");




//fetch from oracle
$sql = "SELECT C.ACC_NBR SOURCE_ACC_NBR,
       D.ACC_NBR DES_ACC_NBR,
       (SELECT M.IMSI
          FROM SIM_CARD M, SIM_NBR N
         WHERE M.SIM_CARD_ID = N.SIM_CARD_ID
           AND N.ACC_NBR_ID = D.ACC_NBR_ID AND n.state='A') imsi,
            (SELECT m.iccid
          FROM SIM_CARD M, SIM_NBR N
         WHERE M.SIM_CARD_ID = N.SIM_CARD_ID
           AND N.ACC_NBR_ID = D.ACC_NBR_ID AND n.state='A') iccid,
       b.state_date
  FROM (SELECT *
          FROM (SELECT U.USED_RES_ID,
                       U.PROD_ID,
                       U.RES_TYPE,
                       U.RES_ID,
                       U.STATE_DATE,
                       U.STATE,
                       ROW_NUMBER() OVER(PARTITION BY U.PROD_ID ORDER BY U.STATE_DATE) SN
                  FROM USED_RES U
                 WHERE EXISTS (SELECT 1
                          FROM SUBS_ORDER S
                         WHERE S.SUBS_ID = U.PROD_ID
                           AND S.SUBS_EVENT_ID = '32'  )
                   AND U.RES_TYPE = 'A' AND U.STATE_DATE like '$d%'
                 ORDER BY U.STATE_DATE DESC)
         WHERE SN <= 2) A,
       (SELECT *
          FROM (SELECT U.USED_RES_ID,
                       U.PROD_ID,
                       U.RES_TYPE,
                       U.RES_ID,
                       U.STATE,
                       U.STATE_DATE,
                       ROW_NUMBER() OVER(PARTITION BY U.PROD_ID ORDER BY U.STATE_DATE) SN
                  FROM USED_RES U
                 WHERE EXISTS (SELECT 1
                          FROM SUBS_ORDER S
                         WHERE S.SUBS_ID = U.PROD_ID
                           AND S.SUBS_EVENT_ID = '32')
                   AND U.RES_TYPE = 'A'
                 ORDER BY U.STATE_DATE DESC)
         WHERE SN <= 2) B,
       ACC_NBR C,
       ACC_NBR D
 WHERE A.PROD_ID = B.PROD_ID
   AND A.STATE = 'X'
   AND B.STATE = 'A'
   AND A.RES_ID = C.ACC_NBR_ID
   AND B.RES_ID = D.ACC_NBR_ID
   ";

$stmt = oci_parse($conn, $sql);

oci_execute($stmt);

echo '<pre>';

while ( $row = oci_fetch_assoc($stmt) ) {
  print_r($row); // just to dispaly in browser to confirm if it works


	$SOURCE_ACC_NBR = $row['SOURCE_ACC_NBR'];
 $DES_ACC_NBR = $row['DES_ACC_NBR'];
 $IMSI = $row['IMSI'];
 $ICCID = $row['ICCID'];
 $STATE_DATE = $row['STATE_DATE'];
 
  
  //insert to my sql table 
  $sql1 = ("INSERT INTO number_swap (SOURCE_ACC_NBR, DES_ACC_NBR, IMSI, ICCID, STATE_DATE)

VALUES
(
'".$SOURCE_ACC_NBR."',

'".$DES_ACC_NBR."',

'".$IMSI."',

'".$ICCID."',

'".$STATE_DATE."'

)");

mysql_query($sql1);


}
mysql_query($sql);
echo $msg. " ".$t.$msgl;

?>