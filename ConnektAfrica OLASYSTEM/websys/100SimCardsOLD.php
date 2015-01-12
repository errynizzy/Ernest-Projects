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
				$ca = "CAOLD";
				$batch_number = $ca.$rand1.$rand6.$rand3.$rand4.$rand5.$rand2;
 
 
 echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>100 Simcards Batch Size</title>
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

if(isset($_POST['bn'])) {
		echo "<p align='center' class='style5'>Batch Number $_POST[bn] was added successfully!</p>";
		
		
	}

echo '

<form method="post" action="100SimCardsOLD.php">
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
    <td><input type="submit"></td> 
	
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

 
 $range = $_POST['SelectedDate'];
 $lastd = $_POST['lastdigit'];
 $bn = $_POST['bn'];

$delete = "DELETE FROM simcards_batches WHERE batch_name = ' '";
mysql_query($delete);

$delete1 = "DELETE FROM batches WHERE Batch_Number = ' '";
mysql_query($delete1);

for($i = $range; $i<= $range + 99; $i++)
{
$sql1 = "INSERT INTO simcards_batches (batch_name, ICCID)
VALUES 
('".$bn."', '".$first.$i."' '".$lastd."')
";

mysql_query($sql1);
$delete = "DELETE FROM simcards_batches WHERE batch_name = ' '";
mysql_query($delete);

$delete1 = "DELETE FROM batches WHERE Batch_Number = ' '";
mysql_query($delete1);
}


$sql2 = "INSERT INTO batches (Batch_Number, Given_Batch_Number, Batch_size)
VALUES 
('".$bn."', '".$bn."', '100')
";
mysql_query($sql2);

$delete = "DELETE FROM simcards_batches WHERE batch_name = ' '";
mysql_query($delete);

$delete1 = "DELETE FROM batches WHERE Batch_Number = ' '";
mysql_query($delete1);
mysql_close();
echo '</table>';
echo '<font size=2><p align=center>COPYRIGHTS ©CONNEKT AFRICA 2014</p></font>';
?>

