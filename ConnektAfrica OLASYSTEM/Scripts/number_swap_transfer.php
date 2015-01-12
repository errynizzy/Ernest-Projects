<title>Number Swap Tansfer</title><?php
echo'<title>Smart to Connekt Server</title>';
ini_set('max_execution_time', 90000000);
echo('<meta http-equiv="refresh" content="1500">');

mysql_connect("localhost","root","mahad");
mysql_select_db("iccid");


$t = date("Y-m-d H:i:s");
$tt = date('d-M-y');
$d = strtoupper ($tt);
$msg = '<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
<div align="center">
  <p class="style1">Number Swap Data Transfer (Smart to Connekt Africa online server) Query Completed Successfully</p>
  <p class="style1">Last Query Run: </p>
';
$msgl = '</div>';


//query simcards activated

			$resultactive = mysql_query("SELECT * FROM  iccid.number_swap WHERE STATE_DATE LIKE '$d%' ORDER BY STATE_DATE DESC ") or die(mysql_error());
			while ($row = mysql_fetch_array($resultactive))
			{
					$SOURCE_ACC_NBR = $row['SOURCE_ACC_NBR'];
					$DES_ACC_NBR = $row['DES_ACC_NBR'];
					$IMSI = $row['IMSI'];
					$ICCID = $row['ICCID'];
					$STATE_DATE = $row['STATE_DATE'];
					
					
					//mysql connekt server - localhost
					mysql_connect("connektafrica.net","connektafrica","Password!23");
					mysql_select_db("connektafrica_pos");
					//insert into local / another db
					
					$sql = ("INSERT INTO connektafrica_pos.swap (SOURCE_ACC_NBR, DES_ACC_NBR, IMSI, ICCID, STATE_DATE)

							VALUES
							(
							
							'".$SOURCE_ACC_NBR."',
							
							'".$DES_ACC_NBR."',
							
							'".$IMSI."',
							
							'".$ICCID."',
							
							'".$STATE_DATE."'
							
							)
							
							")or die(mysql_error());
							
							mysql_query($sql);
							
					
			}
			mysql_free_result($resultactive);
			
							//echo
					echo $msg. " ".$t.$msgl;
			
			
			


?>