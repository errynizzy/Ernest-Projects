<title>System Synchronization</title><?php
ini_set('max_execution_time', 90000000);
echo('<meta http-equiv="refresh" content="240">');

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
  <p class="style1">System Synchronization @ ConnektAfrica Server Completed Successfully</p>
  <p class="style1">Last Synchronization: </p>
';
$msgl = '</div>';


				//our stock
			$resultactive1 = mysql_query("SELECT Event_date, Transfer_date FROM simcards_batches" ) or die(mysql_error());
			while ($row = mysql_fetch_array($resultactive1))
			{
					$Event_date = $row['Event_date'];
					$Transfer_date = $row['Transfer_date'];
					
				if($Event_date == $Transfer_date && $Event_date != '' && $Transfer_date != ''){
				mysql_query("UPDATE simcards_batches SET Activation_Commission = 'PAY 500' where Activation_Commission = ''" );
				}
					
					
					
					
			}
			mysql_free_result($resultactive1);


//outside stock
			$resultactive12 = mysql_query("SELECT Event_date, Transfer_date FROM outside_stock" ) or die(mysql_error());
			while ($row = mysql_fetch_array($resultactive12))
			{
					$Event_date = $row['Event_date'];
					$Transfer_date = $row['Transfer_date'];
					
				if($Event_date == $Transfer_date && $Event_date != '' && $Transfer_date != ''){
				mysql_query("UPDATE simcards_batches SET Activation_Commission = 'PAY 500' where Activation_Commission = ''" );
				}
					
					
					
					
			}
			mysql_free_result($resultactive12);
											
								
								
			
			//echo
					echo $msg. " ".$t." ".$t1.$msgl;
			
		
			
		
?>

