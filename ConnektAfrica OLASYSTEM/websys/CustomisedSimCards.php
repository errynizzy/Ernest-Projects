<?php

// add a column for inserting date automatically 
 include ("config.php");
 global $first;
 $first = '892550800000';
 // Turn off all error reporting
				error_reporting(0);
				$rand1 = rand(1,9);
				$rand2 = rand(1,9);
				$rand3 = rand(1,9);
				$rand4 = rand(1,9);
				$rand5 = rand(1,9);
				$rand6 = rand(1,9);
				$ca = "CA-";
				$batch_number = $ca.$rand1.$rand2.$rand3.$rand4.$rand5.$rand6;
				
				 $range = $_REQUEST['SelectedDate'];
 $lastd = $_REQUEST['lastdigit'];
 $bn = $_REQUEST['bn'];
	$bs = $_REQUEST['bs'];
	$name1 = $bn.'-0';
	$name2 = $bn.'-1';
	$name3 = $bn.'-2';
	$name4 = $bn.'-3';
	$name5 = $bn.'-4';
	$name6 = $bn.'-5';
	$name7 = $bn.'-6';
	$name8 = $bn.'-7';
	$name9 = $bn.'-8';
	$name10 = $bn.'-9';
 
 
 echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Customized Simcards Batch Size</title>
<script src="htmlDatePicker1.js" type="text/javascript"></script>
	<link href="htmlDatePicker.css" rel="stylesheet">
<style type="text/css">
<!--
.style5 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 14px; }
-->

table.curvedEdges { border:8px solid #CCCCCC;-webkit-border-radius:13px;-moz-border-radius:13px;-ms-border-radius:13px;-o-border-radius:13px;border-radius:13px; }
</style>
</head>

<body bgcolor="#EAEAEA">




<table width="200" border="0" align="center">
  <tr>
    <td> <img src ="img/logo.gif" width=195 height=143 align="middle"></td>
  </tr>
</table>';

if(isset($_POST['bn']) && $_POST['bs'] == 10) {
		echo "<p align='center' class='style5'>Batch Number $_POST[bn] was added successfully!</p>";
		echo "<p align='center' class='style5'>10 packs of Sim Cards were created from $_POST[bn] batch. The packs are:</p>";
		echo '<table width="200" border="0" align="center">
				  <tr>
					<td class="style5">'.$name1.'</td>
				  </tr>
				  <tr>
					<td class="style5">'.$name2.'</td>
				  </tr>
				  <tr>
					<td class="style5">'.$name3.'</td>
				  </tr>
				  <tr>
					<td class="style5">'.$name4.'</td>
				  </tr>
				  <tr>
					<td class="style5">'.$name5.'</td>
				  </tr>
				  <tr>
					<td class="style5">'.$name6.'</td>
				  </tr>
				  <tr>
					<td class="style5">'.$name7.'</td>
				  </tr>
				  <tr>
					<td class="style5">'.$name8.'</td>
				  </tr>
				  <tr>
					<td class="style5">'.$name9.'</td>
				  </tr>
				  <tr>
					<td class="style5">'.$name10.'</td>
				  </tr>
				</table>
				';
						
	}
	
	else if(isset($_POST['bn']) && $_POST['bs'] == 20) {
		echo "<p align='center' class='style5'>Batch Number $_POST[bn] was added successfully!</p>";
		echo "<p align='center' class='style5'>5 packs of Sim Cards were created from $_POST[bn] batch. The packs are:</p>";
		echo '<table width="200" border="0" align="center">
				  <tr>
					<td class="style5">'.$name1.'</td>
				  </tr>
				  <tr>
					<td class="style5">'.$name2.'</td>
				  </tr>
				  <tr>
					<td class="style5">'.$name3.'</td>
				  </tr>
				  <tr>
					<td class="style5">'.$name4.'</td>
				  </tr>
				  <tr>
					<td class="style5">'.$name5.'</td>
				  </tr>
				</table>
				';
		
	}

echo '

<form method="post" action="CustomisedSimCards.php">
<table width="1000" border="0" align="center" class="curvedEdges">
  <tr>
  
  	<td class="style5">Batch Number:</td>
    <td>
	<input type="text" placeholder="Batch Number!" name="bn" id="bn" required="true" value = "'.$batch_number.'" readonly="true"></td>
    <td class="style5">ICCID starting range:</td>
    <td>
	<input type="text" placeholder="ICCID!" name="SelectedDate" id="SelectedDate" required="true"></td>
	<td class="style5">ICCID last digit:</td>
	<td>
	<input type="number" placeholder="ICCID last digit!" name="lastdigit" id="lastdigit" required="true"></td>
   
	
  </tr>
   <tr>
  <td class="style5"></td>
    <td>
	</td>
  	<td class="style5">Customised Batch Size:</td>
    <td>
	<select name="bs" id="bs" required="true" placeholder="Batch Size!">
				<option value=""> </option>
			  <option value="10" name="bs" id="bs">10</option>
			  <option value="20" name="bs" id="bs">20</option>
			</select></td>
    
	<td class="style5"></td>
    <td>
	</td>
    
	
  </tr>
  </table>
  <table align="center">
   <tr align="center">
  
    <td align="center" ><p align="center" ><input type="submit" name="submit" id="submit" ></p></td> 
	
  </tr>
</table>

</form>';

echo '<table width="100" border="0" align="center">
			  <tr>
				<td>
				<a href="menu.php">
						<img src=img/rt.gif width="80" height="80" title="Back to Main System" align="middle">
						</a>
				</td>
			  </tr>
			</table>';

 

	
	if($bs == 10){

			for($i = $range; $i<= $range + 9; $i++)
			{
			$sql1 = "INSERT INTO simcards_batches (batch_name, ICCID)
			VALUES 
			( '".$name1."', '".$first.$i."' '".$lastd."')
			";
			$sql2 = "INSERT INTO batches (Batch_Number, Given_Batch_Number, Batch_size)
			VALUES 
			('".$bn."', '".$name1."', '10')
			";
			mysql_query($sql1);
			mysql_query($sql2);
			$delete = "DELETE FROM simcards_batches WHERE batch_name = ' '";
mysql_query($delete);
$delete1 = "DELETE FROM batches WHERE Batch_Number = ' '";
mysql_query($delete1);
			}
			
			
						for($i = $range + 10; $i<= $range + 19; $i++)
			{
			$sql3 = "INSERT INTO simcards_batches (batch_name, ICCID)
			VALUES 
			( '".$name2."', '".$first.$i."' '".$lastd."')
			";
			$sql4 = "INSERT INTO batches (Batch_Number, Given_Batch_Number, Batch_size)
			VALUES 
			('".$bn."', '".$name2."', '10')
			";
			mysql_query($sql3);
			mysql_query($sql4);
			$delete = "DELETE FROM simcards_batches WHERE batch_name = ' '";
mysql_query($delete);
$delete1 = "DELETE FROM batches WHERE Batch_Number = ' '";
mysql_query($delete1);
			}
			
				for($i = $range + 20; $i<= $range + 29; $i++)
			{
			$sql5 = "INSERT INTO simcards_batches (batch_name, ICCID)
			VALUES 
			( '".$name3."', '".$first.$i."' '".$lastd."')
			";
			$sql6 = "INSERT INTO batches (Batch_Number, Given_Batch_Number, Batch_size)
			VALUES 
			('".$bn."', '".$name3."', '10')
			";
			mysql_query($sql5);
			mysql_query($sql6);
			$delete = "DELETE FROM simcards_batches WHERE batch_name = ' '";
mysql_query($delete);
$delete1 = "DELETE FROM batches WHERE Batch_Number = ' '";
mysql_query($delete1);
			}
			
			for($i = $range + 30; $i<= $range + 39; $i++)
			{
			$sql7 = "INSERT INTO simcards_batches (batch_name, ICCID)
			VALUES 
			( '".$name4."', '".$first.$i."' '".$lastd."')
			";
			$sql8 = "INSERT INTO batches (Batch_Number, Given_Batch_Number, Batch_size)
			VALUES 
			('".$bn."', '".$name4."', '10')
			";
			mysql_query($sql7);
			mysql_query($sql8);
			$delete = "DELETE FROM simcards_batches WHERE batch_name = ' '";
mysql_query($delete);
$delete1 = "DELETE FROM batches WHERE Batch_Number = ' '";
mysql_query($delete1);
			}
			
			for($i = $range + 40; $i<= $range + 49; $i++)
			{
			$sql9 = "INSERT INTO simcards_batches (batch_name, ICCID)
			VALUES 
			( '".$name5."', '".$first.$i."' '".$lastd."')
			";
			$sql10 = "INSERT INTO batches (Batch_Number, Given_Batch_Number, Batch_size)
			VALUES 
			('".$bn."', '".$name5."', '10')
			";
			mysql_query($sql9);
			mysql_query($sql10);
			$delete = "DELETE FROM simcards_batches WHERE batch_name = ' '";
mysql_query($delete);
$delete1 = "DELETE FROM batches WHERE Batch_Number = ' '";
mysql_query($delete1);
			}
			
			for($i = $range + 50; $i<= $range + 59; $i++)
			{
			$sql11 = "INSERT INTO simcards_batches (batch_name, ICCID)
			VALUES 
			( '".$name6."', '".$first.$i."' '".$lastd."')
			";
			$sql12 = "INSERT INTO batches (Batch_Number, Given_Batch_Number, Batch_size)
			VALUES 
			('".$bn."', '".$name6."', '10')
			";
			mysql_query($sql11);
			mysql_query($sql12);
			$delete = "DELETE FROM simcards_batches WHERE batch_name = ' '";
mysql_query($delete);
$delete1 = "DELETE FROM batches WHERE Batch_Number = ' '";
mysql_query($delete1);
			}
			
			for($i = $range + 60; $i<= $range + 69; $i++)
			{
			$sql13 = "INSERT INTO simcards_batches (batch_name, ICCID)
			VALUES 
			( '".$name7."', '".$first.$i."' '".$lastd."')
			";
			$sql14 = "INSERT INTO batches (Batch_Number, Given_Batch_Number, Batch_size)
			VALUES 
			('".$bn."', '".$name7."', '10')
			";
			mysql_query($sql13);
			mysql_query($sql14);
			$delete = "DELETE FROM simcards_batches WHERE batch_name = ' '";
mysql_query($delete);
$delete1 = "DELETE FROM batches WHERE Batch_Number = ' '";
mysql_query($delete1);
			}
			
			for($i = $range + 70; $i<= $range + 79; $i++)
			{
			$sql15 = "INSERT INTO simcards_batches (batch_name, ICCID)
			VALUES 
			( '".$name8."', '".$first.$i."' '".$lastd."')
			";
			$sql16 = "INSERT INTO batches (Batch_Number, Given_Batch_Number, Batch_size)
			VALUES 
			('".$bn."', '".$name8."', '10')
			";
			mysql_query($sql15);
			mysql_query($sql16);
			$delete = "DELETE FROM simcards_batches WHERE batch_name = ' '";
mysql_query($delete);
$delete1 = "DELETE FROM batches WHERE Batch_Number = ' '";
mysql_query($delete1);
			}
			
			for($i = $range + 80; $i<= $range + 89; $i++)
			{
			$sql17 = "INSERT INTO simcards_batches (batch_name, ICCID)
			VALUES 
			( '".$name9."', '".$first.$i."' '".$lastd."')
			";
			$sql18 = "INSERT INTO batches (Batch_Number, Given_Batch_Number, Batch_size)
			VALUES 
			('".$bn."', '".$name9."', '10')
			";
			mysql_query($sql17);
			mysql_query($sql18);
			$delete = "DELETE FROM simcards_batches WHERE batch_name = ' '";
mysql_query($delete);
$delete1 = "DELETE FROM batches WHERE Batch_Number = ' '";
mysql_query($delete1);
			}
			
			for($i = $range + 90; $i<= $range + 99; $i++)
			{
			$sql19 = "INSERT INTO simcards_batches (batch_name, ICCID)
			VALUES 
			( '".$name10."', '".$first.$i."' '".$lastd."')
			";
			$sql20 = "INSERT INTO batches (Batch_Number, Given_Batch_Number, Batch_size)
			VALUES 
			('".$bn."', '".$name10."', '10')
			";
			mysql_query($sql19);
			mysql_query($sql20);
			$delete = "DELETE FROM simcards_batches WHERE batch_name = ' '";
mysql_query($delete);
$delete1 = "DELETE FROM batches WHERE Batch_Number = ' '";
mysql_query($delete1);
			}




 }
 
 
 if($bs == 20){

			for($i = $range; $i<= $range + 19; $i++)
			{
			$sql1 = "INSERT INTO simcards_batches (batch_name, ICCID)
			VALUES 
			( '".$name1."', '".$first.$i."' '".$lastd."')
			";
			$sql2 = "INSERT INTO batches (Batch_Number, Given_Batch_Number, Batch_size)
			VALUES 
			('".$bn."', '".$name1."', '20')
			";
			mysql_query($sql1);
			mysql_query($sql2);
			$delete = "DELETE FROM simcards_batches WHERE batch_name = ' '";
mysql_query($delete);
$delete1 = "DELETE FROM batches WHERE Batch_Number = ' '";
mysql_query($delete1);
			}
			
			
						for($i = $range + 20; $i<= $range + 39; $i++)
			{
			$sql3 = "INSERT INTO simcards_batches (batch_name, ICCID)
			VALUES 
			( '".$name2."', '".$first.$i."' '".$lastd."')
			";
			$sql4 = "INSERT INTO batches (Batch_Number, Given_Batch_Number, Batch_size)
			VALUES 
			('".$bn."', '".$name2."', '20')
			";
			mysql_query($sql3);
			mysql_query($sql4);
			$delete = "DELETE FROM simcards_batches WHERE batch_name = ' '";
mysql_query($delete);
$delete1 = "DELETE FROM batches WHERE Batch_Number = ' '";
mysql_query($delete1);
			}
			
				for($i = $range + 40; $i<= $range + 59; $i++)
			{
			$sql5 = "INSERT INTO simcards_batches (batch_name, ICCID)
			VALUES 
			( '".$name3."', '".$first.$i."' '".$lastd."')
			";
			$sql6 = "INSERT INTO batches (Batch_Number, Given_Batch_Number, Batch_size)
			VALUES 
			('".$bn."', '".$name3."', '20')
			";
			mysql_query($sql5);
			mysql_query($sql6);
			$delete = "DELETE FROM simcards_batches WHERE batch_name = ' '";
mysql_query($delete);
$delete1 = "DELETE FROM batches WHERE Batch_Number = ' '";
mysql_query($delete1);
			}
			
			for($i = $range + 60; $i<= $range + 79; $i++)
			{
			$sql7 = "INSERT INTO simcards_batches (batch_name, ICCID)
			VALUES 
			( '".$name4."', '".$first.$i."' '".$lastd."')
			";
			$sql8 = "INSERT INTO batches (Batch_Number, Given_Batch_Number, Batch_size)
			VALUES 
			('".$bn."', '".$name4."', '20')
			";
			mysql_query($sql7);
			mysql_query($sql8);
			$delete = "DELETE FROM simcards_batches WHERE batch_name = ' '";
mysql_query($delete);
$delete1 = "DELETE FROM batches WHERE Batch_Number = ' '";
mysql_query($delete1);
			}
			
			for($i = $range + 80; $i<= $range + 99; $i++)
			{
			$sql9 = "INSERT INTO simcards_batches (batch_name, ICCID)
			VALUES 
			( '".$name5."', '".$first.$i."' '".$lastd."')
			";
			$sql10 = "INSERT INTO batches (Batch_Number, Given_Batch_Number, Batch_size)
			VALUES 
			('".$bn."', '".$name5."', '20')
			";
			mysql_query($sql9);
			mysql_query($sql10);
			$delete = "DELETE FROM simcards_batches WHERE batch_name = ' '";
mysql_query($delete);
$delete1 = "DELETE FROM batches WHERE Batch_Number = ' '";
mysql_query($delete1);
			}
			
			
 }



$delete = "DELETE FROM simcards_batches WHERE batch_name = ' '";
mysql_query($delete);

mysql_close();
echo '</table>';
echo '<font size=2><p align=center>COPYRIGHTS ©CONNEKT AFRICA 2014</p></font>';
?>

