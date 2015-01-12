<title>Form Tracking</title><?php

// add a column for inserting date automatically 
 include ("config.php");
 
  
 
 //query to select total simcards out in outlets
			 $sum = mysql_query( "SELECT sum(batch_size) as total FROM simcards WHERE status = 'Dropped'")or die(mysql_error());
			while ($row = mysql_fetch_array($sum)){
			$summ = $row['total'];
			
			}
			mysql_free_result($sum);
			
			
			//query to select total simcards from sc
			 $sum11 = mysql_query( "SELECT sum( batch_size ) AS total
									FROM simcards
									WHERE supplier_name
									IN (
									'BARAKA SAID', 'JAMILA MASSAWE', 'FRED PAUL', 'EMMANUEL SANCTUS', 'MUHIBU KASSIM'
									)
			 ")or die(mysql_error());
			while ($row = mysql_fetch_array($sum11)){
			$summ1 = $row['total'];
			
			}
			mysql_free_result($sum11);
			
			//query to select total simcards active
			 $sumt = mysql_query( "SELECT count(*) as tot FROM activated_sims")or die(mysql_error());
			while ($row = mysql_fetch_array($sumt)){
			$summm = $row['tot'];
			
			}
			mysql_free_result($sumt);
			
			
			//query to select total simcards in system
			 $sumtt = mysql_query( "SELECT count(*) as tot FROM simcards_batches")or die(mysql_error());
			while ($row = mysql_fetch_array($sumtt)){
			$summmm = $row['tot'];
			
			}
			mysql_free_result($sumtt);
 
 $update = "UPDATE batches, simcards SET batches.Status = 'Out' WHERE batches.Given_Batch_Number = simcards.batch_number";
mysql_query($update);
 // Turn off all error reporting
				error_reporting(0);
 global $size;
 global $active;
 global $newnot_return;
 global $newnot_return1;
 global $mn;
 global $size;
 $cn = $_REQUEST['cn'];
 $sr = $_REQUEST['sr'];
 $sg = $_REQUEST['sg'];
 $sa = $_REQUEST['sa'];
 $srj = $_REQUEST['srj'];
 $snr = $_REQUEST['snr'];
 $mn = $_REQUEST['mn'];
 
 //query to select total simcards out
			 $resulttl = mysql_query( "SELECT sum(batch_size) as total FROM simcards WHERE supplier_name = '$cn'")or die(mysql_error());
			while ($row = mysql_fetch_array($resulttl)){
			$size = $row['total'];
			}
			mysql_free_result($resulttl);
 
				 //query simcards activated
							$resultactive = mysql_query("SELECT COUNT(*) as active FROM simcards_batches, simcards
							where ((simcards.supplier_name = '$cn') AND  (simcards.batch_number = simcards_batches.batch_name))
							AND (simcards_batches.Status = 'Active')") or die(mysql_error());
							while ($row = mysql_fetch_array($resultactive))
							{
									$active = $row['active'];
							}
							mysql_free_result($resultactive);
				 
				//query forms returned
							$returned = mysql_query("SELECT COUNT(*) as returnd FROM simcards_batches, simcards
							where ((simcards.supplier_name = '$cn') AND  (simcards.batch_number = simcards_batches.batch_name))
							AND (simcards_batches.Form_Returned = 'Yes')") or die(mysql_error());
							while ($row = mysql_fetch_array($returned))
							{
									$returnd = $row['returnd'];
							}
							mysql_free_result($returned);
							
							//query forms rejected
							$rej = mysql_query("SELECT COUNT(*) as returnd FROM simcards_batches, simcards
							where ((simcards.supplier_name = '$cn') AND  (simcards.batch_number = simcards_batches.batch_name))
							AND (simcards_batches.Form_Status = 'x')") or die(mysql_error());
							while ($row = mysql_fetch_array($rej))
							{
									$rejct = $row['returnd'];
							}
							mysql_free_result($rej);

			
 if ($_REQUEST["Submit"] == "Show")
{
			
			
			//add form contents
			$returnh = '<td><div align="center"><span class="style16">FORMS RETURNED</span></div></td>';
				 $rejecth = '<td><div align="center"><span class="style16">FORMS REJECTED</span></div></td>';
				 $return = '<td><div align="center">
					  <input name="sr" type="text" id="sr" readonly="true"  value="'.$returnd.'"/>
					</div></td>
					';
				 $reject = '<td><div align="center">
					  <input name="srj" type="text" id="srj" readonly="true" value="'.$rejct.'" />
					</div></td>';
					$save = '<input name="Submit" type="submit" value="Save" />';
	
			
			
			
			
			
			
			
			
			
			//get name match
			$resultname = mysql_query("SELECT * FROM controller
			where controller.Sales_Coordinator_Name = '$cn'") or die(mysql_error());
			while ($row = mysql_fetch_array($resultname))
			{
					$mn = $row['Sales_Coordinator_Name'];
					
					 //add controller name
			$addname = mysql_query( "INSERT INTO form_tracking (D_SL_DSO_RDO) VALUES ('".$mn."')");
					
			}
			mysql_free_result($resultname);
			
			
			
			
			//simcards not returned = Total size - Total returned
			//get values from form_tracking table
			$values = mysql_query("SELECT * FROM form_tracking
			WHERE D_SL_DSO_RDO = '$cn'") or die(mysql_error());
			while ($row = mysql_fetch_array($values))
			{
					$init_val = $row['SIMCARDS_RETURNED'];
					$init_total_simcards_activated = $row['SIMCARDS_ACTIVATED'];
					$init_not_returned = $row['SIMCARDS_NOT_RETURNED'];
			}
			mysql_free_result($values);
			
			
			$newnot_return = $init_total_simcards_activated - $init_val;
			
}

else  if ($_REQUEST["Submit"] == "Save")
{
			
			
			
			//get values from form_tracking table
			$values = mysql_query("SELECT * FROM form_tracking
			WHERE D_SL_DSO_RDO = '$mn'") or die(mysql_error());
			while ($row = mysql_fetch_array($values))
			{
					$init_val = $row['SIMCARDS_RETURNED'];
					$init_total_simcards = $row['TOTAL_SIMCARDS_GIVEN'];
					$init_total_simcards_activated = $row['SIMCARDS_ACTIVATED'];
					$init_rejected = $row['SIMCARDS_REJECTED'];
					$init_not_returned = $row['SIMCARDS_NOT_RETURNED'];
			}
			mysql_free_result($values);
			
			//add init value and new value
			$inc = $sr + $init_val;
			$newreject = $srj + $init_rejected;
			$newnot_return1 = $init_total_simcards_activated - $sr;			
			//insert in inciment returned forms (add wat was there plus new value)
			$addreturned = mysql_query( "UPDATE form_tracking SET SIMCARDS_RETURNED = '$sr' WHERE D_SL_DSO_RDO = '$mn'");
			
			//insert in incliment simcards given
			$addtotalgiven = mysql_query( "UPDATE form_tracking SET TOTAL_SIMCARDS_GIVEN = '$sg' WHERE D_SL_DSO_RDO = '$mn'");
			
			//insert in simcards activated
			$addtotalactive = mysql_query( "UPDATE form_tracking SET SIMCARDS_ACTIVATED = '$sa' WHERE D_SL_DSO_RDO = '$mn'");
			
			//insert in incliment simcards rejected
			$addtotalactive = mysql_query( "UPDATE form_tracking SET SIMCARDS_REJECTED = '$srj' WHERE D_SL_DSO_RDO = '$mn'");
			
			//insert in incliment not returned
			$addtotalactive = mysql_query( "UPDATE form_tracking SET SIMCARDS_NOT_RETURNED = '$newnot_return1' WHERE D_SL_DSO_RDO = '$mn'");
			
			
			//simcards not returned = Total size - Total returned
			
}
 
 echo '<table width="200" border="0" align="center">
  <tr>
    <td> <img src ="img/logo.gif" width=195 height=143 align="middle"></td>
  </tr>
</table> <body bgcolor="#EAEAEA">';
$nn = $summ1 + $summ;
echo '<table width="320" border="0" align="center" >
 <tr>
    <td class="style16">Total Sim cards in System:</td>
    <td class="style16" align="right">'.$summmm.'</td>
  </tr>
  <tr>
    <td class="style16">Total Sim cards in Outlets:</td>
    <td class="style16" align="right">'.$summ.'</td>
  </tr>
  <tr>
    <td class="style16">Total Sim cards Given to Sales Coordinators:</td>
    <td class="style16" align="right">'.$summ1.'</td>
  </tr>
  <tr>
    <td class="style16">TOTAL OF ALL SIMCARDS OUT:</td>
    <td class="style16" align="right">'.$nn.'</td>
  </tr>
  <tr>
    <td class="style1"><font color="#006600">Total Sim cards Active:</font></td>
    <td class="style1" align="right">'.$summm.'</td>
	
  </tr>
</table>';

echo '<style type="text/css">
<!--
.style16 {font-family: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold; }
.style17 {font-size: 11px}
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #006600;
	font-size: 11px;
}
-->

table.curvedEdges { border:8px solid #CCCCCC;-webkit-border-radius:13px;-moz-border-radius:13px;-ms-border-radius:13px;-o-border-radius:13px;border-radius:13px; }
</style>
</style>
<form method="post" action="">

<table width="1300" border="0" align="center" class="curvedEdges">
  <tr>
    <td><div align="center"><span class="style16">SELECT D/SL/DSO/RDO</span></div></td>
	<td><div align="center"><span class="style16">RESULTS OF</span></div></td>
    <td><div align="center"><span class="style16">TOTAL SIMCARDS GIVEN</span></div></td>
    <td><div align="center"><span class="style16">SIMCARDS ACTIVATED</span></div></td>
	'.$returnh.'
	'.$rejecth.'
    <td><div align="center"><span class="style16">FORMS NOT RETURNED</span></div></td>
  </tr>
  <tr>
  <td><div align="center">';
  
  $sqlname=mysql_query("SELECT * FROM controller ORDER BY Sales_Coordinator_Name ASC");
if(mysql_num_rows($sqlname)){
$select= '<select name="cn" type="text" id="cn" required="true">';  
while($rs=mysql_fetch_array($sqlname)){
      $select.='<option value="'.$rs['Sales_Coordinator_Name'].'">'.$rs['Sales_Coordinator_Name'].'</option>';
  }
}
$select.='</select>';
echo $select; 
  
  echo'</div></td>
  <td><div align="center">
      <input name="mn" type="text" id="mn" readonly="true" required="true" value="'.$mn.'" />
    </div></td>
    <td><div align="center">
      <input name="sg" type="text" id="sg" readonly="true" required="true" value="'.$size.'" />
    </div></td>
    <td><div align="center">
      <input name="sa" type="text" id="sa" readonly="true" required="true" value="'.$active.'" />
    </div></td>
    '.$return.'
	'.$reject.'
    <td><div align="center">
      <input name="snr" type="text" id="snr" required="true" readonly="true" value="'.$newnot_return.'"/>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">
      <input name="Submit" type="submit" value="Show" />
    </div></td>
    <td><div align="center"><span class="style17"></span></div></td>
	<td><div align="center"><span class="style17"></span></div></td>
    <td><div align="center"><span class="style17"></span></div></td>
    <td><div align="center"><span class="style17"></span></div></td>
    <td><div align="center"><span class="style17"></span></div></td>
    <td><div align="center">'.$save.'
	</div></td>
  </tr>

</table>
</form>';

echo '<table width="1000" border="0" align="center">
  <tr>
    <td align="center"><iframe align="middle" src="form_tracking_list.php" scrolling="yes"  width="1300" frameborder="0" height="900"> </iframe> </td>
  </tr>
</table>';

echo '<table width="100" border="0" align="center">
			  <tr>
				<td>
				<a href="menu.php">
						<img src=img/rt.gif width="80" height="80" title="Back to Main System" align="middle">
						</a>
				</td>
			  </tr>
			</table>';
echo '<font size=2><p align=center>COPYRIGHTS ©CONNEKT AFRICA 2014</p></font>';
?>

