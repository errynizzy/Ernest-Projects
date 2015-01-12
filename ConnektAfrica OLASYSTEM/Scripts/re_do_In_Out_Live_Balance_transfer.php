<title>Re Do In OUT Transfer</title><?php
echo'<title>Smart to Connekt Server</title>';
ini_set('max_execution_time', 90000000);
echo('<meta http-equiv="refresh" content="1500">');

mysql_connect("localhost","root","mahad");
mysql_select_db("iccid");


$t = date("Y-m-d H:i:s");

$d = '09/10/2014';
$msg = '<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
<div align="center">
  <p class="style1">Live balance Data Transfer (Smart to Connekt Africa online server) Query Completed Successfully</p>
  <p class="style1">Last Query Run: </p>
';
$msgl = '</div>';


//query simcards activated

			$resultactive = mysql_query("SELECT * FROM  iccid.InOut_time WHERE EVENT_DATE LIKE '$d%' ORDER BY EVENT_DATE DESC ") or die(mysql_error());
			while ($row = mysql_fetch_array($resultactive))
			{
					$ACCT_BOOK_ID = $row['ACCT_BOOK_ID'];
					$EVENT_DATE = $row['EVENT_DATE'];
					$CUST_NAME = $row['CUST_NAME'];
					$ACC_NBR = $row['ACC_NBR'];
					$PRE_BALANCE = $row['PRE_BALANCE'];
					$CHARGE = $row['CHARGE'];
					$TRANSFER_MODE = $row['TRANSFER_MODE'];
					
					
					//mysql connekt server - localhost
					mysql_connect("connektafrica.net","connektafrica","Password!23");
					mysql_select_db("connektafrica_pos");
					//insert into local / another db
					
					$sql = ("INSERT INTO connektafrica_pos.inout (ACCT_BOOK_ID, EVENT_DATE, CUST_NAME, ACC_NBR, PRE_BALANCE, CHARGE, TRANSFER_MODE)

							VALUES
							(
							
							'".$ACCT_BOOK_ID."',
							
							'".$EVENT_DATE."',
							
							'".$CUST_NAME."',
							
							'".$ACC_NBR."',
							
							'".$PRE_BALANCE."',
							
							'".$CHARGE."',
							
							'".$TRANSFER_MODE."'
							
							)
							
							")or die(mysql_error());
							
							mysql_query($sql);
							
					
			}
			mysql_free_result($resultactive);
			
							//echo
					echo $msg. " ".$t.$msgl;
			
			
			


?>