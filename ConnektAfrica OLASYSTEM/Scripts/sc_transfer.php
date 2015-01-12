<?php
echo'<title>Smart to Connekt Server</title>';
ini_set('max_execution_time', 90000000);
echo('<meta http-equiv="refresh" content="1500">');

mysql_connect("localhost","root","mahad");
mysql_select_db("connekt1");


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
  <p class="style1">Scratch Cards Data Transfer (Smart to Connekt Africa online server) Query Completed Successfully</p>
  <p class="style1">Last Query Run: </p>
';
$msgl = '</div>';


//query simcards activated

			$resultactive = mysql_query("SELECT * FROM  connekt1.scratch_cards WHERE RECHARGE_DATE = '$d' ") or die(mysql_error());
			while ($row = mysql_fetch_array($resultactive))
			{
					$RECHARGE_DATE = $row['RECHARGE_DATE'];
					 $ACC_NBR = $row['ACC_NBR'];
					 $DENOMINATION = $row['DENOMINATION'];
					 $SERIAL_NO = $row['SERIAL_NO'];

					
					
					//mysql connekt server - localhost
					mysql_connect("connektafrica.net","connektafrica","Password!23");
					mysql_select_db("connektafrica_pos");
					//insert into local / another db
					
					$sql = ("INSERT INTO connektafrica_pos.scratch_cards (RECHARGE_DATE, ACC_NBR, DENOMINATION, SERIAL_NO)

							VALUES
							(
							
							'".$RECHARGE_DATE."',

							'".$ACC_NBR."',
							
							'".$DENOMINATION."',
							
							'".$SERIAL_NO."'

							)
							
							")or die(mysql_error());
							
							mysql_query($sql);
							
					
			}
			mysql_free_result($resultactive);
			
							//echo
					echo $msg. " ".$t.$msgl;
			
			
			


?>