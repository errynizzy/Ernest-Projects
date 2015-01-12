<?php
echo'<title>RE-DO Smart to Connekt POS</title>';
ini_set('max_execution_time', 900000);
echo('<meta http-equiv="refresh" content="1200">');

mysql_connect("localhost","root","mahad");
mysql_select_db("connekt");




$t = date("Y-m-d H:i:s");
$d = "01/11/2015";
$msg = '<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
<div align="center">
  <p class="style1">Data Transfer [POS Transaction History] (Smart to Connekt Africa online server) Query Completed Successfully</p>
  <p class="style1">Last Query Run: </p>
';
$msgl = '</div>';


//query simcards activated
			$resultactive = mysql_query("SELECT * FROM connekt.history WHERE TRANSFER_DATE = '$d' ORDER BY ACCT_BOOK_ID DESC") or die(mysql_error());
			while ($row = mysql_fetch_array($resultactive))
			{
					$ACCT_BOOK_ID = $row['ACCT_BOOK_ID'];
					$TRANSFER_DATE = $row['TRANSFER_DATE'];
					$ORIGIANL_CUSTOMER = $row['ORIGIANL_CUSTOMER'];
					$ORG_SERVICE_NUMBER = $row['ORG_SERVICE_NUMBER'];
					$CHARGE = $row['CHARGE'];
					$DESTINATION_CUSTOMER = $row['DESTINATION_CUSTOMER'];
					$DEST_SERVICE_NUMBER = $row['DEST_SERVICE_NUMBER'];
					
					
					//mysql connekt server - localhost
					mysql_connect("connektafrica.net","connektafrica","Password!23");
					mysql_select_db("connektafrica_pos");
					//insert into local / another db
					//truncate empty table


					
					$sql = ("INSERT INTO connektafrica_pos.pos_out 
						(ACCT_BOOK_ID, TRANSFER_DATE, ORIGIANL_CUSTOMER, ORG_SERVICE_NUMBER, CHARGE, DESTINATION_CUSTOMER, DEST_SERVICE_NUMBER)

							VALUES
							(
							'".$ACCT_BOOK_ID."',
							
							'".$TRANSFER_DATE."',
							
							'".$ORIGIANL_CUSTOMER."',
							
							'".$ORG_SERVICE_NUMBER."',
							
							'".$CHARGE."',
							
							'".$DESTINATION_CUSTOMER."',
							
							'".$DEST_SERVICE_NUMBER."'
							
							)")or die(mysql_error());
							
							mysql_query($sql);
							
					
			}
			mysql_free_result($resultactive);
							//echo
					echo $msg. " ".$t.$msgl;
			
			
			


?>