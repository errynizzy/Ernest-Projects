<title>System Synchronization</title><?php
ini_set('max_execution_time', 90000000);
echo('<meta http-equiv="refresh" content="180">');

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


$resultactive = mysql_query("SELECT *
													FROM activated_sims
													WHERE activated_sims.Subscriber_ICCID NOT
													IN (
													SELECT simcards_batches.ICCID
													FROM simcards_batches
													)") or die(mysql_error());
			while ($row = mysql_fetch_array($resultactive))
			{
					$Activator_Number = $row['Activator_Number'];
					$Subscriber_ICCID = $row['Subscriber_ICCID'];
					$Subscriber_Number = $row['Subscriber_Number'];
					$Event_date = $row['Event_date'];
					$time = $row['time'];
					
					
					$sql = ("INSERT INTO outside_stock (Activator_Number, ICCID, Active_MSISDN, Event_date, time)

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
			
					//update
					
					//inside stock
					mysql_query("UPDATE 
								 				simcards_batches
								INNER JOIN 
												activated_sims
								ON
												activated_sims.Subscriber_ICCID = simcards_batches.ICCID				
								SET
										simcards_batches.Active_MSISDN = activated_sims.Subscriber_Number,
										simcards_batches.Status = 'Active',
										simcards_batches.Activator_Number = activated_sims.Activator_Number,
										simcards_batches.Event_date = activated_sims.Event_date,
										simcards_batches.time = activated_sims.time
								")or die(mysql_error());
								
								//outside stock
					mysql_query("UPDATE 
								 				outside_stock
								INNER JOIN 
												activated_sims
								ON
												activated_sims.Subscriber_ICCID = outside_stock.ICCID				
								SET
										outside_stock.Active_MSISDN = activated_sims.Subscriber_Number,
										outside_stock.Status = 'Active',
										outside_stock.Activator_Number = activated_sims.Activator_Number,
										outside_stock.Event_date = activated_sims.Event_date,
										outside_stock.time = activated_sims.time
								")or die(mysql_error());
								
								//inside stock
								mysql_query("UPDATE 
								 				simcards_batches
								INNER JOIN 
												activators
								ON
												activators.Activator_Number = simcards_batches.Activator_Number				
								SET
										simcards_batches.Manager_Name = activators.Manager_Name,
										simcards_batches.Activator_Name = activators.Activator_Name,
										simcards_batches.Team_Leader = activators.Team_Leader,
										simcards_batches.Manager_Title = activators.Manager_Title
								")or die(mysql_error());
								
								//outside stock
								mysql_query("UPDATE 
								 				outside_stock
								INNER JOIN 
												activators
								ON
												activators.Activator_Number = outside_stock.Activator_Number				
								SET
										outside_stock.Manager_Name = activators.Manager_Name,
										outside_stock.Activator_Name = activators.Activator_Name,
										outside_stock.Team_Leader = activators.Team_Leader,
										outside_stock.Manager_Title = activators.Manager_Title
								")or die(mysql_error());
								
								//inside stock
								mysql_query("UPDATE 
								 				simcards_batches
								INNER JOIN 
												swap
								ON
												swap.ICCID = simcards_batches.ICCID	
															
								SET
										simcards_batches.New_MSISDN = swap.DES_ACC_NBR,
										simcards_batches.Swap_Date = swap.STATE_DATE
										
								")or die(mysql_error());
								
								//outside stock
								mysql_query("UPDATE 
								 				outside_stock
								INNER JOIN 
												swap
								ON
												swap.ICCID = outside_stock.ICCID				
								SET
										outside_stock.New_MSISDN = swap.DES_ACC_NBR,
										outside_stock.Swap_Date = swap.STATE_DATE
										
								")or die(mysql_error());
								
								
								//To be paid outside stock
					mysql_query("UPDATE outside_stock
								SET
								outside_stock.Form_Commission = 'To be paid'
								WHERE
								outside_stock.Form_Commission = '' 
								and 
								outside_stock.Form_Returned = 'Yes' 
								and 
								outside_stock.Form_Status = ''
								and
								outside_stock.Airtime_transered > 999
								")or die(mysql_error());
								
								
								//To be paid inside stock
					mysql_query("UPDATE simcards_batches
								SET
								simcards_batches.Form_Commission = 'To be paid'
								WHERE
								simcards_batches.Form_Commission = '' 
								and 
								simcards_batches.Form_Returned = 'Yes' 
								and 
								simcards_batches.Form_Status = ''
								and
								simcards_batches.Airtime_transered > 999
								")or die(mysql_error());
								
			
			
			//Paid Query here inside stock
				mysql_query("UPDATE 
								 				simcards_batches
								INNER JOIN 
												paid
								ON
												paid.Paid_MSISDN = simcards_batches.Active_MSISDN				
								SET
										simcards_batches.Form_Commission = 'Paid',
										simcards_batches.Form_Paid_Date = paid.Date_Paid
								WHERE	simcards_batches.Form_Commission = 'To be paid'
								")or die(mysql_error());	
								
								//Paid Query here outside stock
				mysql_query("UPDATE 
								 				outside_stock
								INNER JOIN 
												paid
								ON
												paid.Paid_MSISDN = outside_stock.Active_MSISDN				
								SET
										outside_stock.Form_Commission = 'Paid',
										outside_stock.Form_Paid_Date = paid.Date_Paid
								WHERE	outside_stock.Form_Commission = 'To be paid'	
								")or die(mysql_error());				
											
								
								
			
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
			
			mysql_query("UPDATE title_lookup SET `Title` = UPPER(Title)");

mysql_query("UPDATE simcards_batches SET `Manager_Name` = UPPER(Manager_Name)");

mysql_query("UPDATE outside_stock SET `Manager_Name` = UPPER(Manager_Name)");

mysql_query("UPDATE activators SET `Manager_Name` = UPPER(Manager_Name)");

mysql_query("UPDATE activators SET `Activator_Name` = UPPER(Activator_Name)");

mysql_query("UPDATE activators SET `business_name` = UPPER(business_name)");

mysql_query("UPDATE activators SET `gender` = UPPER(gender)");

mysql_query("UPDATE activators SET `Area` = UPPER(Area)");

mysql_query("UPDATE activators SET `Route` = UPPER(Route)");

mysql_query("UPDATE activators SET `Team_Leader` = UPPER(Team_Leader)");

mysql_query("UPDATE activators SET `Working_Location` = UPPER(Working_Location)");

mysql_query("UPDATE activators SET `Batch_Paid` = UPPER(Batch_Paid)");

mysql_query("UPDATE controller SET `Sales_Coordinator_Name` = UPPER(Sales_Coordinator_Name)");

mysql_query("UPDATE controller SET `Team_Leader_Name` = UPPER(Team_Leader_Name)");

mysql_query("UPDATE form_tracking SET `D_SL_DSO_RDO` = UPPER(D_SL_DSO_RDO)");

mysql_query("UPDATE simcards SET `supplier_name` = UPPER(supplier_name)");

mysql_query("UPDATE simcards SET `pos_type` = UPPER(pos_type)");


mysql_query("UPDATE `simcards_batches` set `Activator_Number` = '' WHERE `Activator_Number` = '0'");

mysql_query("UPDATE `outside_stock` set `Activator_Number` = '' WHERE `Activator_Number` = '0'");

$d = date('Y-m-d');

/*
mysql_query("delete from pos_visits
USING pos_visits, pos_visits as vtable
WHERE (NOT pos_visits.ID=vtable.ID)
AND (pos_visits.Activator_Number = vtable.Activator_Number) AND pos_visits.last_chekin LIKE '$d%' and pos_visits.ID < vtable.ID");
*/
// use this

mysql_query("delete from pos_visits
USING pos_visits, pos_visits as vtable
WHERE (NOT pos_visits.ID=vtable.ID)
AND (pos_visits.Activator_Number = vtable.Activator_Number) AND  pos_visits.ID < vtable.ID and pos_visits.`Date` = vtable.`Date`");



					//INSIDE STOCK
					mysql_query("UPDATE 
								 				simcards_batches
								INNER JOIN 
												pos_out 
								ON
												(simcards_batches.Active_MSISDN = pos_out.DEST_SERVICE_NUMBER 
								OR 				simcards_batches.New_MSISDN = pos_out.DEST_SERVICE_NUMBER) AND simcards_batches.Event_date <= pos_out.TRANSFER_DATE
												
								SET
										simcards_batches.Airtime_transered = pos_out.CHARGE,
										simcards_batches.Transfer_date = pos_out.TRANSFER_DATE
								WHERE simcards_batches.Status = 'Active'  AND simcards_batches.Airtime_transered < 999
								AND simcards_batches.Event_date <= pos_out.TRANSFER_DATE		
								")or die(mysql_error());




								
								//original MSISDN outside stock
					mysql_query("UPDATE 
								 				outside_stock
								INNER JOIN 
												pos_out 
								ON
												(outside_stock.Active_MSISDN = pos_out.DEST_SERVICE_NUMBER 
								OR 				outside_stock.New_MSISDN = pos_out.DEST_SERVICE_NUMBER ) AND outside_stock.Event_date <= pos_out.TRANSFER_DATE
												
								SET
										outside_stock.Airtime_transered = pos_out.CHARGE,
										outside_stock.Transfer_date = pos_out.TRANSFER_DATE
								WHERE outside_stock.Status = 'Active' AND outside_stock.Airtime_transered < 999
								AND outside_stock.Event_date <= pos_out.TRANSFER_DATE
								")or die(mysql_error());


mysql_query("UPDATE simcards_batches SET Activation_Commission = 'PAY 500' where simcards_batches.Event_date = simcards_batches.Transfer_date AND simcards_batches.Status = 'Active' AND simcards_batches.Airtime_transered > 999 and simcards_batches.Activation_Commission = '' and simcards_batches.Event_date != ''");


mysql_query("UPDATE outside_stock SET Activation_Commission = 'PAY 500' where outside_stock.Event_date = outside_stock.Transfer_date AND outside_stock.Status = 'Active' AND outside_stock.Airtime_transered > 999 and outside_stock.Activation_Commission = '' and outside_stock.Event_date != ''");

	//for pos visits
mysql_query("UPDATE 
								 				pos_visits
								INNER JOIN 
												pos_out 
								ON
												pos_visits.Activator_Number = pos_out.DEST_SERVICE_NUMBER 
												
												
								SET
										
										pos_visits.Sale = 'Yes',
										pos_visits.Transfer_Amount = pos_out.CHARGE,
										pos_visits.Transfer_From = pos_out.ORG_SERVICE_NUMBER,
										pos_visits.Transfer_Date = pos_out.TRANSFER_DATE
										
								WHERE
								pos_visits.Date = pos_out.TRANSFER_DATE AND pos_visits.My_Transfer = '' 
								")or die(mysql_error());


								
								mysql_query("UPDATE 
								 				pos_visits
								SET
										pos_visits.My_Transfer = 'Yes'
								WHERE
									Transfer_From = Manager_Number
								
								")or die(mysql_error());
		
		
?>

