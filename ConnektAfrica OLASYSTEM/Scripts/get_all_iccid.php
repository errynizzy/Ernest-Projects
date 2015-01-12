<title>Get ICCID from Smart</title><?php
echo('<meta http-equiv="refresh" content="300">');
//at the end this script should refresh every 15 minutes
$dbstr ="(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)(HOST =10.10.10.7)(PORT = 1521))(CONNECT_DATA = (SERVER = DEDICATED)(SERVICE_NAME = cc)))";

//oracle
$conn = oci_connect('cc','smart',$dbstr);
$t = date("Y-m-d H:i:s");
$d = date('m/d/Y');
$msg = '<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
<div align="center">
  <p class="style1">Get ICCID Query Completed Successfully</p>
  <p class="style1">Last Query Run: </p>
';
$msgl = '</div>';

//mysql in my laptop
mysql_connect("localhost","root","mahad");
mysql_select_db("iccid");


//fetch from oracle
$sql = "select substr(eml.command_content,41,12) pos_number, sc.iccid, eml.acc_nbr activated_cust_nbr, to_char(eml.created_date,'mm/dd/yyyy') event_date,
       to_char(eml.created_date,'hh24:mi:ss') time_24hrs
from et_mml_log eml, subs ss, sim_card sc
where substr(eml.d_acc_nbr,4,9)=ss.acc_nbr
and   ss.imsi=sc.imsi
and   eml.command_result_flag='S'
order by 4,5 desc


";

$stmt = oci_parse($conn, $sql);

oci_execute($stmt);

echo '<pre>';


while ( $row = oci_fetch_assoc($stmt) ) {
  print_r($row); // just to dispaly in browser to confirm if it works
 

 $EVENT_DATE = $row['EVENT_DATE'];
 $POS_NUMBER = $row['POS_NUMBER'];
 $ACTIVATED_CUST_NBR = $row['ACTIVATED_CUST_NBR'];
 $ICCID= $row['ICCID'];
 $TIME_24HRS = $row['TIME_24HRS'];
 
  
  //insert to my sql table 
  $sql = ("INSERT INTO activated (Activator_Number, Subscriber_ICCID, Subscriber_Number, Event_date, time)

VALUES
(

'".$POS_NUMBER."',

'".$ICCID."',

'".$ACTIVATED_CUST_NBR."',

'".$EVENT_DATE."',

'".$TIME_24HRS."'

)");

mysql_query($sql);


}
//echo
					echo $msg. " ".$t.$msgl;
			mysql_free_result($resultactive);


?>