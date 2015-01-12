<title>Airtime Transfer Script</title><?php
ini_set('max_execution_time', 90000000);
echo('<meta http-equiv="refresh" content="900">');

 include ("config.php");
//$d = date('m/d/Y');

$d = '10/08/2014';

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

//inside stock
			$resultactive = mysql_query("SELECT * FROM pos_out WHERE `TRANSFER_DATE` = '$d' group by DEST_SERVICE_NUMBER" ) or die(mysql_error());
			while ($row = mysql_fetch_array($resultactive))
			{
					$DEST_SERVICE_NUMBER = $row['DEST_SERVICE_NUMBER'];
					$CHARGE = $row['CHARGE'];
					$ORG_SERVICE_NUMBER = $row['ORG_SERVICE_NUMBER'];
					$TRANSFER_DATE = $row['TRANSFER_DATE'];
					
					
					mysql_query("UPDATE simcards_batches
								SET
								simcards_batches.Airtime_transered = '$CHARGE',
								simcards_batches.Transfer_date = '$TRANSFER_DATE'
								WHERE
								
								(simcards_batches.Active_MSISDN = '$DEST_SERVICE_NUMBER' OR simcards_batches.New_MSISDN = '$DEST_SERVICE_NUMBER')
								
								AND
								
								(simcards_batches.Status = 'Active' 
								 AND 
								 simcards_batches.Airtime_transered < 1000)
								")or die(mysql_error());
				//simcards_batches.Airtime_transered < 1000			
					
			}
			mysql_free_result($resultactive);
			
			
			//outside stock
			$resultactive1 = mysql_query("SELECT * FROM pos_out WHERE `TRANSFER_DATE` = '$d' group by DEST_SERVICE_NUMBER" ) or die(mysql_error());
			while ($row = mysql_fetch_array($resultactive1))
			{
					$DEST_SERVICE_NUMBER = $row['DEST_SERVICE_NUMBER'];
					$CHARGE = $row['CHARGE'];
					$ORG_SERVICE_NUMBER = $row['ORG_SERVICE_NUMBER'];
					$TRANSFER_DATE = $row['TRANSFER_DATE'];
					
					
					mysql_query("UPDATE outside_stock
								SET
								outside_stock.Airtime_transered = '$CHARGE',
								outside_stock.Transfer_date = '$TRANSFER_DATE'
								WHERE
								
								(outside_stock.Active_MSISDN = '$DEST_SERVICE_NUMBER' OR outside_stock.New_MSISDN = '$DEST_SERVICE_NUMBER')
								
								AND
								
								(outside_stock.Status = 'Active' 
								 AND 
								 outside_stock.Airtime_transered < 1000)
								")or die(mysql_error());
							
					
			}
			mysql_free_result($resultactive1);
						
		
		//echo
					echo $msg. " ".$t." ".$t1.$msgl;	


?>