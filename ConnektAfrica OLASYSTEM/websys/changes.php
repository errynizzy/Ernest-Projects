<?php

// add a column for inserting date automatically 
 include ("config.php");
 
 $update = "UPDATE batches, simcards SET batches.Status = 'Out' WHERE batches.Given_Batch_Number = simcards.batch_number";
mysql_query($update);

header("Location: menu.php");
exit;
?>

