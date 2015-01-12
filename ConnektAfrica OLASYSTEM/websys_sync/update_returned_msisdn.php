<title>Forms  MSISDN</title><?php
echo('<meta http-equiv="refresh" content="1200">');

// update from activated_sims to simcards_batches 
 include ("config.php");
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
  <p class="style1">Synchronization - Returned Forms MSISDN- @ ConnektAfrica Server Completed Successfully</p>
  <p class="style1">Last Updated: </p>
';
$msgl = '</div>';
 
 
			
					
					//update
					//original MSISDN inside stock
					mysql_query("UPDATE 
								 				simcards_batches
								INNER JOIN 
												returned_msisdn 
								ON
												returned_msisdn.MSISDN = simcards_batches.Active_MSISDN 
												AND returned_msisdn.MSISDN != 0
								SET
										simcards_batches.Form_Returned = 'Yes',
										simcards_batches.Form_Status = returned_msisdn.Status,
										simcards_batches.Form_Date = returned_msisdn.Date
								")or die(mysql_error());
								
								//original MSISDN outside stock
					mysql_query("UPDATE 
								 				outside_stock
								INNER JOIN 
												returned_msisdn 
								ON
												returned_msisdn.MSISDN = outside_stock.Active_MSISDN
												AND returned_msisdn.MSISDN != 0 
								SET
										outside_stock.Form_Returned = 'Yes',
										outside_stock.Form_Status = returned_msisdn.Status,
										outside_stock.Form_Date = returned_msisdn.Date
								")or die(mysql_error());
								
								//new msisdn inside stock
								mysql_query("UPDATE 
								 				simcards_batches
								INNER JOIN 
												returned_msisdn 
								ON
												returned_msisdn.MSISDN = simcards_batches.New_MSISDN
												AND returned_msisdn.MSISDN != 0
								SET
										simcards_batches.Form_Returned = 'Yes',
										simcards_batches.Form_Status = returned_msisdn.Status,
										simcards_batches.Form_Date = returned_msisdn.Date
								")or die(mysql_error());
								
								
								//new msisdn outside stock
								mysql_query("UPDATE 
								 				outside_stock
								INNER JOIN 
												returned_msisdn 
								ON
												returned_msisdn.MSISDN = outside_stock.New_MSISDN
												AND returned_msisdn.MSISDN != 0
								SET
										outside_stock.Form_Returned = 'Yes',
										outside_stock.Form_Status = returned_msisdn.Status,
										outside_stock.Form_Date = returned_msisdn.Date
								")or die(mysql_error());
								
								
								
		$r = ("UPDATE simcards_batches SET returned_msisdn = '' WHERE Status ='' ");
			mysql_query($r);
			
			$r1 = ("UPDATE outside_stock SET returned_msisdn = '' WHERE Status ='' ");
			mysql_query($r1);
			
			
			
			//echo
					echo $msg. " ".$t." ".$t1.$msgl;
			
			$remove = ("UPDATE activated_sims SET Activator_Number = RIGHT(Activator_Number,9)");
			mysql_query($remove);
			
			$remove1 = ("UPDATE simcards_batches SET Activator_Number = RIGHT(Activator_Number,9)");
			mysql_query($remove1);
			
			$remove11 = ("UPDATE outside_stock SET Activator_Number = RIGHT(Activator_Number,9)");
			mysql_query($remove11);
			
			$remove1 = ("UPDATE activated_sims SET Subscriber_Number = RIGHT(Subscriber_Number,9)");
			mysql_query($remove1);
			
			$remove2 = ("UPDATE simcards_batches SET Active_MSISDN = RIGHT(Active_MSISDN,9)");
			mysql_query($remove2);
			
			$remove22 = ("UPDATE outside_stock SET Active_MSISDN = RIGHT(Active_MSISDN,9))");
			mysql_query($remove22);
			
		
?>

