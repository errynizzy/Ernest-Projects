<title>RE-DO All_POS_Trans_OUT</title><?php
echo('<meta http-equiv="refresh" content="1200">');
ini_set('max_execution_time', 900000);
//at the end this script should refresh every 15 minutes
$dbstr ="(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)(HOST =10.10.10.7)(PORT = 1521))(CONNECT_DATA = (SERVER = DEDICATED)(SERVICE_NAME = cc)))";

//oracle
$conn = oci_connect('cc','smart',$dbstr);
$t = date("Y-m-d H:i:s");
$d = "01/11/2015";
$msg = '<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
<div align="center">
  <p class="style1">Get POS Transaction History Query Completed Successfully</p>
  <p class="style1">Query POS Number Range [0798090000 to 0798099999] + Maxcom and Selcom</p>
  <p class="style1">Last Query Run: </p>
';
$msgl = '</div>';


//mysql in my laptop
mysql_connect("localhost","root","mahad");
mysql_select_db("connekt");




//fetch from oracle
$sql = "SELECT a.acct_book_id,
			to_char(a.created_date,'MM/DD/YYYY') TRANSFER_DATE,
             h.cust_name ORIGIANL_CUSTOMER,
             g.acc_nbr ORG_SERVICE_NUMBER,
             -1*a.charge / 100 charge,
             e.cust_name DESTINATION_CUSTOMER,
             b.acc_nbr DEST_SERVICE_NUMBER
       FROM acct_book    A,
            subs         B,
            bal_transfer C,
            cust         E,
            acct_book    F,
            subs         G,
            cust         H
       Where -- trunc(a.created_date) >= trunc(sysdate-8)
       -- and   trunc(a.created_date) <= trunc(sysdate-2)
        a.acct_id = b.acct_id
       and b.cust_id = e.cust_id
       and a.acct_book_type in ('L')
       and a.acct_book_id = c.in_acct_book_id
       and c.acct_book_id = f.acct_book_id
       and f.acct_id = g.acct_id
       and g.cust_id = h.cust_id
       and to_char(a.created_date,'MM/DD/YYYY')  = '$d'
       and g.acc_nbr  LIKE '79809%'
       order by 1,2 asc";

$stmt = oci_parse($conn, $sql);

oci_execute($stmt);

echo '<pre>';

while ( $row = oci_fetch_assoc($stmt) ) {
  print_r($row); // just to dispaly in browser to confirm if it works


	$ACCT_BOOK_ID = $row['ACCT_BOOK_ID'];
 $TRANSFER_DATE = $row['TRANSFER_DATE'];
 $ORIGIANL_CUSTOMER = $row['ORIGIANL_CUSTOMER'];
 $ORG_SERVICE_NUMBER = $row['ORG_SERVICE_NUMBER'];
 $CHARGE = $row['CHARGE'];
 $DESTINATION_CUSTOMER = $row['DESTINATION_CUSTOMER'];
 $DEST_SERVICE_NUMBER = $row['DEST_SERVICE_NUMBER'];
  
  //insert to my sql table 
  $sql33 = ("INSERT INTO history (ACCT_BOOK_ID,TRANSFER_DATE, ORIGIANL_CUSTOMER, ORG_SERVICE_NUMBER, CHARGE, DESTINATION_CUSTOMER, DEST_SERVICE_NUMBER)

VALUES
(
'".$ACCT_BOOK_ID."',

'".$TRANSFER_DATE."',

'".$ORIGIANL_CUSTOMER."',

'".$ORG_SERVICE_NUMBER."',

'".$CHARGE."',

'".$DESTINATION_CUSTOMER."',

'".$DEST_SERVICE_NUMBER."'


)");

mysql_query($sql33);


}

//fetch from oracle maxcom selcom
$sql1 = "SELECT a.acct_book_id,
			to_char(a.created_date,'MM/DD/YYYY') TRANSFER_DATE,
             h.cust_name ORIGIANL_CUSTOMER,
             g.acc_nbr ORG_SERVICE_NUMBER,
             -1*a.charge / 100 charge,
             e.cust_name DESTINATION_CUSTOMER,
             b.acc_nbr DEST_SERVICE_NUMBER
       FROM acct_book    A,
            subs         B,
            bal_transfer C,
            cust         E,
            acct_book    F,
            subs         G,
            cust         H
       Where -- trunc(a.created_date) >= trunc(sysdate-8)
       -- and   trunc(a.created_date) <= trunc(sysdate-2)
        a.acct_id = b.acct_id
       and b.cust_id = e.cust_id
       and a.acct_book_type in ('L')
       and a.acct_book_id = c.in_acct_book_id
       and c.acct_book_id = f.acct_book_id
       and f.acct_id = g.acct_id
       and g.cust_id = h.cust_id
       and to_char(a.created_date,'MM/DD/YYYY')  = '$d'
	   and g.acc_nbr  in ('888888888' ,'777777777', '333333333')
       order by 1,2 asc";

$stmt1 = oci_parse($conn, $sql1);

oci_execute($stmt1);

echo '<pre>';

while ( $row = oci_fetch_assoc($stmt1) ) {
  print_r($row); // just to dispaly in browser to confirm if it works


	$ACCT_BOOK_ID = $row['ACCT_BOOK_ID'];
 $TRANSFER_DATE = $row['TRANSFER_DATE'];
 $ORIGIANL_CUSTOMER = $row['ORIGIANL_CUSTOMER'];
 $ORG_SERVICE_NUMBER = $row['ORG_SERVICE_NUMBER'];
 $CHARGE = $row['CHARGE'];
 $DESTINATION_CUSTOMER = $row['DESTINATION_CUSTOMER'];
 $DEST_SERVICE_NUMBER = $row['DEST_SERVICE_NUMBER'];
  
  //insert to my sql table 
  $sql22 = ("INSERT INTO history (ACCT_BOOK_ID,TRANSFER_DATE, ORIGIANL_CUSTOMER, ORG_SERVICE_NUMBER, CHARGE, DESTINATION_CUSTOMER, DEST_SERVICE_NUMBER)

VALUES
(
'".$ACCT_BOOK_ID."',

'".$TRANSFER_DATE."',

'".$ORIGIANL_CUSTOMER."',

'".$ORG_SERVICE_NUMBER."',

'".$CHARGE."',

'".$DESTINATION_CUSTOMER."',

'".$DEST_SERVICE_NUMBER."'


)");

mysql_query($sql22);


}

echo $msg. " ".$t.$msgl;

?>