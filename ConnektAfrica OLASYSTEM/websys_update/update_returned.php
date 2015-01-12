<title>System Update</title><?php
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
  <p class="style1">System Update - Returned Forms - @ ConnektAfrica Server Completed Successfully</p>
  <p class="style1">Last Updated: </p>
';
$msgl = '</div>';
 
 
			$select = mysql_query("SELECT  
										returned_forms.MSISDN,
										returned_forms.ICCID AS return_iccid,
										returned_forms.Status,
										returned_forms.Date,
										simcards_batches.ICCID,
										simcards_batches.Active_MSISDN
									FROM 
										returned_forms, simcards_batches
									WHERE 
										returned_forms.ICCID = simcards_batches.ICCID
										OR
										returned_forms.MSISDN = simcards_batches.Active_MSISDN
										") 
										or die(mysql_error());
			
			
			while ($row = mysql_fetch_array($select))
			{
					
				
					
					//update
					
					
					mysql_query("UPDATE 
								
								 				simcards_batches
								INNER JOIN 
												returned_forms 
								ON
												returned_forms.ICCID = simcards_batches.ICCID OR returned_forms.MSISDN = simcards_batches.Active_MSISDN
															
								SET
										simcards_batches.Form_Returned = 'Yes',
										simcards_batches.Form_Status = returned_forms.Status,
										simcards_batches.Form_Date = returned_forms.Date
										
								
								")or die(mysql_error());
								
								
			}
			
			
			
			//echo
					echo $msg. " ".$t." ".$t1.$msgl;
			mysql_free_result($select);
			
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

