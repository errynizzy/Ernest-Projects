<?php

 include ("config.php");
 // $t = date("Y-m-d");
  $t = date("m/d/Y");
 $t1 = date("H:i" ,time() + (60*60*3));
 $chk = $t. " ".$t1;
 
 $d = date('d/m/Y H:i:s ');
 $a = $_POST["valid_mob_number"];
 $from = $_POST["valid_business_name"];
 $to = $_POST["valid_id_number"];
 
//remove -
$remove1 = str_replace("-", "", $a);

//remove ?
$removee = str_replace("?", "", $remove1);

//remove (
$remove2 = str_replace("(", "", $removee);

//remove )
$remove3 = str_replace(")", "", $remove2);

//remove " "
$remove4 = str_replace(" ", "", $remove3);

$reduced_9 = substr($remove4, -9); //ready to insert


		for($i = $from; $i <= $to ; $i++)
		{
		
					$sql1 = "INSERT INTO scratch_cards_distribution_activities 
					(
					`Dist_ID`, 
					`Dist_Date`, 
					`Serial_No`, 
					`Full_Name`, 
					`POS_ALT_Number`, 
					`Area`, 
					`Alt_Number`, 
					`Denomination`, 
					`DSO_Number`, 
					`DSO_Name`
					)
					
					VALUES 
					(
					'".$_POST["rand_id"]."',
					'".$_POST["valid_reg_date"]."',
					'".$i."',
					'".$_POST["valid_name"]."',
					'".$reduced_9."',
					'".$_POST["valid_address"]."',
					'".$_POST["valid_phone2"]."',
					'".$_POST["valid_gender"]."',
					'".$_POST["valid_rdo_name"]."',
					'".$_POST["valid_rdo_number"]."'
					)
					";
			
			mysql_query($sql1);
		
		}

	
				
						$sql = "INSERT INTO scratch_cards_distribution_records
						(
						`Dist_ID`, 
						`Dist_Date`, 
						`Serial_No_From`, 
						`Serial_No_To`, 
						`Full_Name`, 
						`POS_ALT_Number`, 
						`Area`, 
						`Alt_Number`, 
						`Denomination`, 
						`Quantity`,
						 `Lat`, 
						 `Lon`, 
						 `DSO_Name`, 
						 `DSO_Number`
						 )
						VALUES 
						(
						'". $_POST["rand_id"]."' ,
						'". $_POST["valid_reg_date"]."' ,
						'". $_POST["valid_business_name"]."' ,
						'". $_POST["valid_id_number"]."' ,
						'". $_POST["valid_name"]."' ,
						'".$reduced_9."',
						'".$_POST["valid_address"]."',
						'".$_POST["valid_phone2"]."',
						'".$_POST["valid_gender"]."',
						'".$_POST["valid_serial_number"]."',
						'".$_POST["valid_lat"]."',
						'".$_POST["valid_lon"]."',
						'".$_POST["valid_rdo_name"]."',
						'".$_POST["valid_rdo_number"]."'
						)";
						
						mysql_query($sql);
						
		mysql_query("UPDATE `scratch_cards_distribution_activities` set `DSO_Name` = 'MANSOOR KHALIFA' WHERE `DSO_Number` = '798095523'");
mysql_query("UPDATE `scratch_cards_distribution_records` set `DSO_Name` = 'MANSOOR KHALIFA' WHERE `DSO_Number` = '798095523'");

mysql_query("UPDATE `scratch_cards_distribution_activities` set `DSO_Name` = 'MASHAKA MUSSA' WHERE `DSO_Number` = '798095664'");
mysql_query("UPDATE `scratch_cards_distribution_records` set `DSO_Name` = 'MASHAKA MUSSA' WHERE `DSO_Number` = '798095664'");


mysql_query("UPDATE `scratch_cards_distribution_activities` set `DSO_Name` = 'IPYANA WILLSON' WHERE `DSO_Number` = '798095667'");
mysql_query("UPDATE `scratch_cards_distribution_records` set `DSO_Name` = 'IPYANA WILLSON' WHERE `DSO_Number` = '798095667'");



mysql_query("UPDATE `scratch_cards_distribution_activities` set `DSO_Name` = 'DIBWE SAID' WHERE `DSO_Number` = '798095666'");
mysql_query("UPDATE `scratch_cards_distribution_records` set `DSO_Name` = 'DIBWE SAID' WHERE `DSO_Number` = '798095666'");



mysql_query("UPDATE `scratch_cards_distribution_activities` set `DSO_Name` = 'CHARLES JAMES' WHERE `DSO_Number` = '798095422'");
mysql_query("UPDATE `scratch_cards_distribution_records` set `DSO_Name` = 'CHARLES JAMES' WHERE `DSO_Number` = '798095422'");


mysql_query("UPDATE `scratch_cards_distribution_activities` set `DSO_Name` = 'HAPPY TITUS' WHERE `DSO_Number` = '798095254'");
mysql_query("UPDATE `scratch_cards_distribution_records` set `DSO_Name` = 'HAPPY TITUS' WHERE `DSO_Number` = '798095254'");



mysql_query("UPDATE `scratch_cards_distribution_activities` set `DSO_Name` = 'KAISI AHMAD' WHERE `DSO_Number` = '798095668'");
mysql_query("UPDATE `scratch_cards_distribution_records` set `DSO_Name` = 'KAISI AHMAD' WHERE `DSO_Number` = '798095668'");



mysql_query("UPDATE `scratch_cards_distribution_activities` set `DSO_Name` = 'ANDREW KANYIKA' WHERE `DSO_Number` = '798094946'");
mysql_query("UPDATE `scratch_cards_distribution_records` set `DSO_Name` = 'ANDREW KANYIKA' WHERE `DSO_Number` = '798094946'");



mysql_query("UPDATE `scratch_cards_distribution_activities` set `DSO_Name` = 'DEO PASCAL MARTIN' WHERE `DSO_Number` = '798095662'");
mysql_query("UPDATE `scratch_cards_distribution_records` set `DSO_Name` = 'DEO PASCAL MARTIN' WHERE `DSO_Number` = '798095662'");



mysql_query("UPDATE `scratch_cards_distribution_activities` set `DSO_Name` = 'MSAFIRI MALILO' WHERE `DSO_Number` = '798095665'");
mysql_query("UPDATE `scratch_cards_distribution_records` set `DSO_Name` = 'MSAFIRI MALILO' WHERE `DSO_Number` = '798095665'");



mysql_query("UPDATE `scratch_cards_distribution_activities` set `DSO_Name` = 'MAHMUDU MUSSA MOTO' WHERE `DSO_Number` = '798095663'");
mysql_query("UPDATE `scratch_cards_distribution_records` set `DSO_Name` = 'MAHMUDU MUSSA MOTO' WHERE `DSO_Number` = '798095663'");



mysql_query("UPDATE `scratch_cards_distribution_activities` set `DSO_Name` = 'HASSAN DAFFUR' WHERE `DSO_Number` = '798094990'");
mysql_query("UPDATE `scratch_cards_distribution_records` set `DSO_Name` = 'HASSAN DAFFUR' WHERE `DSO_Number` = '798094990'");



mysql_query("UPDATE `scratch_cards_distribution_activities` set `DSO_Name` = 'JAMILAH KINGU' WHERE `DSO_Number` = '798093866'");
mysql_query("UPDATE `scratch_cards_distribution_records` set `DSO_Name` = 'JAMILAH KINGU' WHERE `DSO_Number` = '798093866'");


			
						




?>

