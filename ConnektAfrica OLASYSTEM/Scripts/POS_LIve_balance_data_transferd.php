<title>LIVE BALANCE Transfer</title><?php
echo'<title>Smart to Connekt Server</title>';
ini_set('max_execution_time', 90000000);
echo('<meta http-equiv="refresh" content="1500">');


//mysql connekt server - localhost
mysql_connect("connektafrica.net","connektafrica","Password!23");
mysql_select_db("connektafrica_pos");
mysql_query('Truncate table pos_live_balance');
mysql_close();


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
  <p class="style1">Live Balance Data Transfer (Smart to Connekt Africa online server) Query Completed Successfully</p>
  <p class="style1">Last Query Run: </p>
';
$msgl = '</div>';


//query simcards activated

			$resultactive = mysql_query("SELECT * FROM  iccid.pos_balance WHERE Event_date = '$d'") or die(mysql_error());
			while ($row = mysql_fetch_array($resultactive))
			{
					$EVENT_DATE = $row['EVENT_DATE'];
					$ACC_NBR = $row['ACC_NBR'];
					$BALANCE = $row['BALANCE'];
				
					
					
					//mysql connekt server - localhost
					mysql_connect("connektafrica.net","connektafrica","Password!23");
					mysql_select_db("connektafrica_pos");
					//insert into local / another db
					
					$sql = ("INSERT INTO connektafrica_pos.pos_live_balance (EVENT_DATE, ACC_NBR, BALANCE)

							VALUES
							(
							
							'".$EVENT_DATE."',
							
							'".$ACC_NBR."',
							
							'".$BALANCE."'
							)
							
							")or die(mysql_error());
							
							mysql_query($sql);
							
					
			}
			mysql_free_result($resultactive);
			
							//echo
					echo $msg. " ".$t.$msgl;
			
			
			


?>