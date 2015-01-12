<?php
echo'<title>Smart to Connekt Server</title>';
ini_set('max_execution_time', 90000000);
echo('<meta http-equiv="refresh" content="200">');

mysql_connect("localhost","root","mahad");
mysql_select_db("iccid");


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
  <p class="style1">Data Transfer (Smart to Connekt Africa online server) Query Completed Successfully</p>
  <p class="style1">Last Query Run: </p>
';
$msgl = '</div>';


//query simcards activated

			$resultactive = mysql_query("SELECT * FROM  iccid.activated WHERE Event_date = '01/11/2015' ORDER BY time DESC ") or die(mysql_error());
			while ($row = mysql_fetch_array($resultactive))
			{
					$Activator_Number = $row['Activator_Number'];
					$Subscriber_ICCID = $row['Subscriber_ICCID'];
					$Subscriber_Number = $row['Subscriber_Number'];
					$Event_date = $row['Event_date'];
					$time = $row['time'];
					
					
					//mysql connekt server - localhost
					mysql_connect("connektafrica.net","connektafrica","Password!23");
					mysql_select_db("connektafrica_pos");
					//insert into local / another db
					
					$sql = ("INSERT INTO connektafrica_pos.activated_sims (Activator_Number, Subscriber_ICCID, Subscriber_Number, Event_date, time)

							VALUES
							(
							
							'".$Activator_Number."',
							
							'".$Subscriber_ICCID."',
							
							'".$Subscriber_Number."',
							
							'".$Event_date."',
							
							'".$time."'
							
							)
							
							")or die(mysql_error());
							
							mysql_query($sql);
							
					
			}
			mysql_free_result($resultactive);
			
							//echo
					echo $msg. " ".$t.$msgl;
			
			
			


?>