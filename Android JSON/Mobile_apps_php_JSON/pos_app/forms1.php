<?php
include ("config.php");

$a = $_REQUEST['p_number'];
//remove -
$remove1 = str_replace("-", "", $a);

//remove (
$remove2 = str_replace("(", "", $remove1);

//remove )
$remove3 = str_replace(")", "", $remove2);

//remove " "
$remove4 = str_replace(" ", "", $remove3);

$reduced_9 = substr($remove4, -9); //ready to insert



//active and returned
$sql = "SELECT
			Activator_Number,
			count(simcards_batches.Activator_Number) as active,
			count(simcards_batches.Form_Returned) as returned
		FROM simcards_batches
		WHERE  
				(simcards_batches.Activator_Number = '".$reduced_9."')
		 and simcards_batches.Form_Returned = 'Yes'";
$result = mysql_query($sql);
while($row=mysql_fetch_assoc($result))
$output[]=$row;

print(json_encode($output));
mysql_close();
?>
