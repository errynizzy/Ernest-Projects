<title>Redo Airtime Transfer Script</title><?php
ini_set('max_execution_time', 90000000);
echo('<meta http-equiv="refresh" content="1500">');

 include ("config.php");
//$d = date('m/d/Y');

$d = '09/23/2014';

 $t = date("Y-m-d");
 $t1 = date("H:i" ,time() + (60*60*3));
 $msg = '<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
<div align="center">
  <p class="style1">System Synchronization @ ConnektAfrica Server Airtime Transfer Update Completed Successfully</p>
  <p class="style1">Last Synchronization: </p>
';
$msgl = '</div>';


			$resultactive = mysql_query("SELECT * FROM pos_out WHERE `ORG_SERVICE_NUMBER` = '333333333' group by DEST_SERVICE_NUMBER" ) or die(mysql_error());
			while ($row = mysql_fetch_array($resultactive))
			{
					$DEST_SERVICE_NUMBER = $row['DEST_SERVICE_NUMBER'];
					$CHARGE = $row['CHARGE'];
					$ORG_SERVICE_NUMBER = $row['ORG_SERVICE_NUMBER'];
					
					
					mysql_query("UPDATE simcards_batches
								SET
								simcards_batches.Airtime_transered = '$CHARGE'
								WHERE
								
								(simcards_batches.Active_MSISDN = '$DEST_SERVICE_NUMBER' OR simcards_batches.New_MSISDN = '$DEST_SERVICE_NUMBER')
								
								AND
								
								(simcards_batches.Status = 'Active' 
								 AND 
								 simcards_batches.Airtime_transered = '')
								")or die(mysql_error());
							
					
			}
			mysql_free_result($resultactive);
			
						
		
		//echo
					echo $msg. " ".$t." ".$t1.$msgl;	


?>