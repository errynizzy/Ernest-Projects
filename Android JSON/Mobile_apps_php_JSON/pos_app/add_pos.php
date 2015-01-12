<?php

 include ("config.php");
 // $t = date("Y-m-d");
  $t = date("m/d/Y");
 $t1 = date("H:i" ,time() + (60*60*3));
 $chk = $t. " ".$t1;
 
 $d = date('d/m/Y H:i:s ');
 $a = $_POST["valid_mob_number"];
 
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




				
				$sql1 = "UPDATE activators
			SET	
				Activator_Name = '". $_POST["valid_name"]."',
				registration_date = '". $_POST["valid_reg_date"]."',
				altenative_number = '". $_POST["valid_phone2"]."',
				gender = '". $_POST["valid_gender"]."',
				DOB = '". $_POST["valid_dob"]."',
				Area = '". $_POST["valid_address"]."',
				id_type = '". $_POST["valid_id_type"]."',
				id_number = '". $_POST["valid_id_number"]."',
				business_name = '". $_POST["valid_business_name"]."',
				pos_type = 'STATIC POS',
				lat = '". $_POST["valid_lat"]."',
				lon = '". $_POST["valid_lon"]."',
				last_chekin = '$chk',
				Manager_Name = '". $_POST["valid_rdo_name"]."',
				Manager_Number = '". $_POST["valid_rdo_number"]."'
			WHERE Activator_Number = '".$reduced_9."'
			";

			mysql_query($sql1);
				
				
						$sql = "INSERT INTO activators
						(
						pos_type,
						Manager_Name,
						Manager_Number,
						Activator_Name,
						Activator_Number,
						business_name,
						altenative_number,
						pos_iccid,
						registration_date,
						gender,
						DOB,
						Area,
						id_type,
						id_number,
						lat,
						lon,
						last_chekin
						) 
						VALUES 
						(
						'STATIC POS',
						'". $_POST["valid_rdo_name"]."' ,
						
						'". $_POST["valid_rdo_number"]."' ,
						
						'". $_POST["valid_name"]."' ,
						
						'".$reduced_9."' ,
						
						'". $_POST["valid_business_name"]."' ,
						
						'". $_POST["valid_phone2"]."' ,
						
						'". $_POST["valid_serial_number"]."' ,
						
						'". $_POST["valid_reg_date"]."' ,
						
						'". $_POST["valid_gender"]."' ,
						
						'". $_POST["valid_dob"]."' ,
						
						'". $_POST["valid_address"]."' ,
						
						'". $_POST["valid_id_type"]."' ,
						
						'". $_POST["valid_id_number"]."' ,
						
						'". $_POST["valid_lat"]."' ,
						
						'". $_POST["valid_lon"]."',
						
						'$chk'
						)";
						
						mysql_query($sql);
						
						
						$sql12 = "INSERT INTO pos_visits
						(
						pos_type,
						Manager_Name,
						Manager_Number,
						Activator_Name,
						Activator_Number,
						business_name,
						altenative_number,
						
						Area,
						
						last_chekin
						) 
						VALUES 
						(
						'VISITED POS',
						'". $_POST["valid_rdo_name"]."' ,
						
						'". $_POST["valid_rdo_number"]."' ,
						
						'". $_POST["valid_name"]."' ,
						
						'".$reduced_9."' ,
						
						'". $_POST["valid_business_name"]."' ,
						
						'". $_POST["valid_phone2"]."' ,
						
						
						
						'". $_POST["valid_address"]."' ,
						
						
						
						'$chk'
						)";
						
						mysql_query($sql12);

						

mysql_query("UPDATE activators SET mydata = '1'");
mysql_query("UPDATE pos_visits SET mydata = '1'");


?>

