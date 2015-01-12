<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style><table width="200" border="0" align="center">
  <tr>
    <td><img src="snaps/header_index.jpg" width="904" height="237" /></td>
  </tr>
  <tr>
    <td align="center">
	  <p><strong>Please Copy this ID and Paste it to Admin HC Page</strong></p>
	  <title>ID Generator</title>
	  <p>
	    <?php


$a = rand(1,1000000);
$b = "MVG";
$c = "HC";

$d = $b . $a . $c;
echo $d . "<br />";
?> 
    &nbsp;</p>
    <p><a href="web/healthcenterstable/login.php">Back to Admin HC</a> &nbsp;</p>
    <div align="center">
      <p><a href="index.html">Home</a> | <a href="web/service_providers/service_providers.php?operation=insert">Registration</a> | <a href="web/allergictable/login.php">Allergic-Details</a> | <a href="web/counselling/login.php">Counselling</a> | <a href="web/healthissues/login.php">Health-Issues</a> | <a href="web/in_born_issues/login.php">In-Born-Issues</a> | <a href="web/users_appointment/login.php">Appointments</a> | <a href="web/users_checkup/login.php">Check-Ups</a> | <a href="web/users_prescription/login.php">Prescription</a> | <a href="web/mother_and_child/login.php">Maternity</a></p>
      <p> <a href="web/physiotherapy/login.php">Physiotherapy</a> | <a href="web/treatmenttable/login.php">Treatments</a> | <a href="web/vaccination/login.php">Vaccination</a> | <a href="web/healthcenterstable/login.php">Admin HC</a> | <a href="web/usersadmin/login.php">Admin Users</a> | <a href="web/service_providers_admin/login.php">Admin SP</a> | <a href="web/workerstable/login.php">Admin HW</a> </p>
    </div></td>
  </tr>
  <tr>
    <td><img src="snaps/footer_index.jpg" width="906" height="113" /></td>
  </tr>
</table>
