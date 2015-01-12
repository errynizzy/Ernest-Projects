<?php


 include ("config.php");
 $t = date("m/d/Y");
 $t1 = date("H:i" ,time() + (60*60*3));
 $chk = $t. " ".$t1;
 
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





$sql = "UPDATE activators
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
				pos_type = '". $_POST["valid_business_type"]."',
				lat = '". $_POST["valid_lat"]."',
				lon = '". $_POST["valid_lon"]."',
				last_chekin = '$chk',
				Manager_Name = '". $_POST["valid_rdo_name"]."',
				Manager_Number = '". $_POST["valid_rdo_number"]."'
			WHERE Activator_Number = '".$reduced_9."'
			";

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
						Date,
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
						
						'$t',
						
						'$chk'
						)";
						
						mysql_query($sql12);
						
if($_POST["valid_rdo_number"] == '798095523')
{
mysql_query("UPDATE `activators` set `Manager_Name` = 'MANSOOR KHALIFA' WHERE `Manager_Number` = '798095523'");
mysql_query("UPDATE `pos_visits` set `Manager_Name` = 'MANSOOR KHALIFA' WHERE `Manager_Number` = '798095523'");
}

else if($_POST["valid_rdo_number"] == '798095664')
{
mysql_query("UPDATE `activators` set `Manager_Name` = 'MASHAKA MUSSA' WHERE `Manager_Number` = '798095664'");
mysql_query("UPDATE `pos_visits` set `Manager_Name` = 'MASHAKA MUSSA' WHERE `Manager_Number` = '798095664'");
}

else if($_POST["valid_rdo_number"] == '798095667')
{
mysql_query("UPDATE `activators` set `Manager_Name` = 'IPYANA WILLSON' WHERE `Manager_Number` = '798095667'");
mysql_query("UPDATE `pos_visits` set `Manager_Name` = 'IPYANA WILLSON' WHERE `Manager_Number` = '798095667'");
}

else if($_POST["valid_rdo_number"] == '798095666')
{
mysql_query("UPDATE `activators` set `Manager_Name` = 'DIBWE SAID' WHERE `Manager_Number` = '798095666'");
mysql_query("UPDATE `pos_visits` set `Manager_Name` = 'DIBWE SAID' WHERE `Manager_Number` = '798095666'");
}

else if($_POST["valid_rdo_number"] == '798095422')
{
mysql_query("UPDATE `activators` set `Manager_Name` = 'CHARLES JAMES' WHERE `Manager_Number` = '798095422'");
mysql_query("UPDATE `pos_visits` set `Manager_Name` = 'CHARLES JAMES' WHERE `Manager_Number` = '798095422'");
}

else if($_POST["valid_rdo_number"] == '798095254')
{
mysql_query("UPDATE `activators` set `Manager_Name` = 'HAPPY TITUS' WHERE `Manager_Number` = '798095254'");
mysql_query("UPDATE `pos_visits` set `Manager_Name` = 'HAPPY TITUS' WHERE `Manager_Number` = '798095254'");
}

else if($_POST["valid_rdo_number"] == '798095668')
{
mysql_query("UPDATE `activators` set `Manager_Name` = 'KAISI AHMAD' WHERE `Manager_Number` = '798095668'");
mysql_query("UPDATE `pos_visits` set `Manager_Name` = 'KAISI AHMAD' WHERE `Manager_Number` = '798095668'");
}

else if($_POST["valid_rdo_number"] == '798094946')
{
mysql_query("UPDATE `activators` set `Manager_Name` = 'ANDREW KANYIKA' WHERE `Manager_Number` = '798094946'");
mysql_query("UPDATE `pos_visits` set `Manager_Name` = 'ANDREW KANYIKA' WHERE `Manager_Number` = '798094946'");
}

else if($_POST["valid_rdo_number"] == '798095662')
{
mysql_query("UPDATE `activators` set `Manager_Name` = 'DEO PASCAL MARTIN' WHERE `Manager_Number` = '798095662'");
mysql_query("UPDATE `pos_visits` set `Manager_Name` = 'DEO PASCAL MARTIN' WHERE `Manager_Number` = '798095662'");
}

else if($_POST["valid_rdo_number"] == '798095665')
{
mysql_query("UPDATE `activators` set `Manager_Name` = 'MSAFIRI MALILO' WHERE `Manager_Number` = '798095665'");
mysql_query("UPDATE `pos_visits` set `Manager_Name` = 'MSAFIRI MALILO' WHERE `Manager_Number` = '798095665'");
}

else if($_POST["valid_rdo_number"] == '798095663')
{
mysql_query("UPDATE `activators` set `Manager_Name` = 'MAHMUDU MUSSA MOTO' WHERE `Manager_Number` = '798095663'");
mysql_query("UPDATE `pos_visits` set `Manager_Name` = 'MAHMUDU MUSSA MOTO' WHERE `Manager_Number` = '798095663'");
}

else if($_POST["valid_rdo_number"] == '798094990')
{
mysql_query("UPDATE `activators` set `Manager_Name` = 'HASSAN DAFFUR' WHERE `Manager_Number` = '798094990'");
mysql_query("UPDATE `pos_visits` set `Manager_Name` = 'HASSAN DAFFUR' WHERE `Manager_Number` = '798094990'");
}

else if($_POST["valid_rdo_number"] == '798093866')
{
mysql_query("UPDATE `activators` set `Manager_Name` = 'JAMILAH KINGU' WHERE `Manager_Number` = '798093866'");
mysql_query("UPDATE `pos_visits` set `Manager_Name` = 'JAMILAH KINGU' WHERE `Manager_Number` = '798093866'");
}







mysql_query("UPDATE activators SET mydata = '1'");
mysql_query("UPDATE pos_visits SET mydata = '1'");
mysql_close();
?>
