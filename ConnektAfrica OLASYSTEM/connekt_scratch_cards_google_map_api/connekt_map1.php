<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>POS Map</title>
<style type="text/css">
<!--
.style1 {
	font-size: 10px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
table.curvedEdges { border:8px solid #CCCCCC;-webkit-border-radius:13px;-moz-border-radius:13px;-ms-border-radius:13px;-o-border-radius:13px;border-radius:13px; }
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14px;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
<head>
<!--<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />-->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<?php
// Turn off all error reporting
				error_reporting(0);
//*********************************************
//Ernest Mwalusanya 
// Database stuff - all done with PHP
//*********************************************

// kitu cha map starts here

include ("config_map.php");
global $pos;
global 	$mrk_cnt;

// STEP 2: Query the table with the marker information
$res = $db->query("select * from activators, pos_live_balance where activators.lat !=0 AND pos_live_balance.ACC_NBR = activators.Activator_Number");


// STEP 3: Store the marker info in arrays for each row found
// save the count of markers for later

$mrk_cnt = 0;
while ($obj = $res->fetch_object())  // get all rows (markers)
{
	//pos number
	$pos[$mrk_cnt] = $obj->Manager_Number; 
	
	//low balamce
	$low[$mrk_cnt] = $obj->BALANCE; 
	
    $lat[$mrk_cnt] = $obj->lat;  // save the lattitude
    $lng[$mrk_cnt] = $obj->lon;  // save the longitude
    $inf[$mrk_cnt] = "<strong>POS TYPE:</strong> ".$obj->pos_type."<br>".
					"<strong>POS NUMBER:</strong> ".$obj->Activator_Number."<br>".
					"<strong>POS BALANCE:</strong> ".$obj->BALANCE."<br>".
					 "<strong>ACTIVATOR NAME:</strong> ".$obj->Activator_Name."<br>".
					 "<strong>MANAGER NAME:</strong> ".$obj->Manager_Name."<br>".
					 "<strong>BUSSINES NAME:</strong> ".$obj->business_name."<br>".
					 "<strong>POS ALT NUMBER:</strong> ".$obj->altenative_number."<br>".
					 "<strong>ADDRESS:</strong> ".$obj->Area."<br>";  // save the info-window, concatinate the thing magig
    $mrk_cnt++;                      // increment the marker counter
}
$res->close();
// Now we have the lattitude, longitude and info-window text for each marker 
// stored in php arrays. Now we need to write the marker's JavaScript 
// dynamically with this information

if ($_REQUEST["Submit"] == "Show" && $_REQUEST["mn"] == 'ALL')
{
header("Location: connekt_map1.php");
}

//else endelea
//MASHAKA MUSSA 	798095664
else if ($_REQUEST["Submit"] == "Show" && $_REQUEST["mn"] == '798095664')
{
$res = $db->query("select * from activators, pos_live_balance where activators.lat !=0 AND pos_live_balance.ACC_NBR = activators.Activator_Number 
AND activators.Manager_Number = '798095664'");


// STEP 3: Store the marker info in arrays for each row found
// save the count of markers for later

$mrk_cnt = 0;
while ($obj = $res->fetch_object())  // get all rows (markers)
{
	//pos number
	$pos[$mrk_cnt] = $obj->Manager_Number; 
	
	//low balamce
	$low[$mrk_cnt] = $obj->BALANCE; 
	
    $lat[$mrk_cnt] = $obj->lat;  // save the lattitude
    $lng[$mrk_cnt] = $obj->lon;  // save the longitude
    $inf[$mrk_cnt] = "<strong>POS TYPE:</strong> ".$obj->pos_type."<br>".
					"<strong>POS NUMBER:</strong> ".$obj->Activator_Number."<br>".
					"<strong>POS BALANCE:</strong> ".$obj->BALANCE."<br>".
					 "<strong>ACTIVATOR NAME:</strong> ".$obj->Activator_Name."<br>".
					 "<strong>MANAGER NAME:</strong> ".$obj->Manager_Name."<br>".
					 "<strong>BUSSINES NAME:</strong> ".$obj->business_name."<br>".
					 "<strong>POS ALT NUMBER:</strong> ".$obj->altenative_number."<br>".
					 "<strong>ADDRESS:</strong> ".$obj->Area."<br>";  // save the info-window, concatinate the thing magig
    $mrk_cnt++;                      // increment the marker counter
}
$res->close();
// Now we have the lattitude, longitude and info-window text for each marker 
// stored in php arrays. Now we need to write the marker's JavaScript 
// dynamically with this information
}

//MANSOOR KHALIFA 	798095523 	
else if ($_REQUEST["Submit"] == "Show" && $_REQUEST["mn"] == '798095523')
{
$res = $db->query("select * from activators, pos_live_balance where activators.lat !=0 AND pos_live_balance.ACC_NBR = activators.Activator_Number 
AND activators.Manager_Number = '798095523'");


// STEP 3: Store the marker info in arrays for each row found
// save the count of markers for later

$mrk_cnt = 0;
while ($obj = $res->fetch_object())  // get all rows (markers)
{
	//pos number
	$pos[$mrk_cnt] = $obj->Manager_Number; 
	
	//low balamce
	$low[$mrk_cnt] = $obj->BALANCE; 
	
    $lat[$mrk_cnt] = $obj->lat;  // save the lattitude
    $lng[$mrk_cnt] = $obj->lon;  // save the longitude
    $inf[$mrk_cnt] = "<strong>POS TYPE:</strong> ".$obj->pos_type."<br>".
					"<strong>POS NUMBER:</strong> ".$obj->Activator_Number."<br>".
					"<strong>POS BALANCE:</strong> ".$obj->BALANCE."<br>".
					 "<strong>ACTIVATOR NAME:</strong> ".$obj->Activator_Name."<br>".
					 "<strong>MANAGER NAME:</strong> ".$obj->Manager_Name."<br>".
					 "<strong>BUSSINES NAME:</strong> ".$obj->business_name."<br>".
					 "<strong>POS ALT NUMBER:</strong> ".$obj->altenative_number."<br>".
					 "<strong>ADDRESS:</strong> ".$obj->Area."<br>";  // save the info-window, concatinate the thing magig
    $mrk_cnt++;                      // increment the marker counter
}
$res->close();
// Now we have the lattitude, longitude and info-window text for each marker 
// stored in php arrays. Now we need to write the marker's JavaScript 
// dynamically with this information
}

//IPYANA WILLSON 	798095667 	
else if ($_REQUEST["Submit"] == "Show" && $_REQUEST["mn"] == '798095667')
{
$res = $db->query("select * from activators, pos_live_balance where activators.lat !=0 AND pos_live_balance.ACC_NBR = activators.Activator_Number 
AND activators.Manager_Number = '798095667'");


// STEP 3: Store the marker info in arrays for each row found
// save the count of markers for later

$mrk_cnt = 0;
while ($obj = $res->fetch_object())  // get all rows (markers)
{
	//pos number
	$pos[$mrk_cnt] = $obj->Manager_Number;
	//low balamce
	$low[$mrk_cnt] = $obj->BALANCE;  
	
    $lat[$mrk_cnt] = $obj->lat;  // save the lattitude
    $lng[$mrk_cnt] = $obj->lon;  // save the longitude
    $inf[$mrk_cnt] = "<strong>POS TYPE:</strong> ".$obj->pos_type."<br>".
					"<strong>POS NUMBER:</strong> ".$obj->Activator_Number."<br>".
					"<strong>POS BALANCE:</strong> ".$obj->BALANCE."<br>".
					 "<strong>ACTIVATOR NAME:</strong> ".$obj->Activator_Name."<br>".
					 "<strong>MANAGER NAME:</strong> ".$obj->Manager_Name."<br>".
					 "<strong>BUSSINES NAME:</strong> ".$obj->business_name."<br>".
					 "<strong>POS ALT NUMBER:</strong> ".$obj->altenative_number."<br>".
					 "<strong>ADDRESS:</strong> ".$obj->Area."<br>";  // save the info-window, concatinate the thing magig
    $mrk_cnt++;                      // increment the marker counter
}
$res->close();
// Now we have the lattitude, longitude and info-window text for each marker 
// stored in php arrays. Now we need to write the marker's JavaScript 
// dynamically with this information
}

//CHARLES JAMES 	798095422 	
else if ($_REQUEST["Submit"] == "Show" && $_REQUEST["mn"] == '798095422')
{
$res = $db->query("select * from activators, pos_live_balance where activators.lat !=0 AND pos_live_balance.ACC_NBR = activators.Activator_Number 
AND activators.Manager_Number = '798095422'");


// STEP 3: Store the marker info in arrays for each row found
// save the count of markers for later

$mrk_cnt = 0;
while ($obj = $res->fetch_object())  // get all rows (markers)
{
	//pos number
	$pos[$mrk_cnt] = $obj->Manager_Number;
	//low balamce
	$low[$mrk_cnt] = $obj->BALANCE;  
	
    $lat[$mrk_cnt] = $obj->lat;  // save the lattitude
    $lng[$mrk_cnt] = $obj->lon;  // save the longitude
    $inf[$mrk_cnt] = "<strong>POS TYPE:</strong> ".$obj->pos_type."<br>".
					"<strong>POS NUMBER:</strong> ".$obj->Activator_Number."<br>".
					"<strong>POS BALANCE:</strong> ".$obj->BALANCE."<br>".
					 "<strong>ACTIVATOR NAME:</strong> ".$obj->Activator_Name."<br>".
					 "<strong>MANAGER NAME:</strong> ".$obj->Manager_Name."<br>".
					 "<strong>BUSSINES NAME:</strong> ".$obj->business_name."<br>".
					 "<strong>POS ALT NUMBER:</strong> ".$obj->altenative_number."<br>".
					 "<strong>ADDRESS:</strong> ".$obj->Area."<br>";  // save the info-window, concatinate the thing magig
    $mrk_cnt++;                      // increment the marker counter
}
$res->close();
// Now we have the lattitude, longitude and info-window text for each marker 
// stored in php arrays. Now we need to write the marker's JavaScript 
// dynamically with this information
}

//HAPPY TITUS 	798095254 	 	
else if ($_REQUEST["Submit"] == "Show" && $_REQUEST["mn"] == '798095254')
{
$res = $db->query("select * from activators, pos_live_balance where activators.lat !=0 AND pos_live_balance.ACC_NBR = activators.Activator_Number 
AND activators.Manager_Number = '798095254'");


// STEP 3: Store the marker info in arrays for each row found
// save the count of markers for later

$mrk_cnt = 0;
while ($obj = $res->fetch_object())  // get all rows (markers)
{
	//pos number
	$pos[$mrk_cnt] = $obj->Manager_Number; 
	
	//low balamce
	$low[$mrk_cnt] = $obj->BALANCE; 
	
    $lat[$mrk_cnt] = $obj->lat;  // save the lattitude
    $lng[$mrk_cnt] = $obj->lon;  // save the longitude
    $inf[$mrk_cnt] = "<strong>POS TYPE:</strong> ".$obj->pos_type."<br>".
					"<strong>POS NUMBER:</strong> ".$obj->Activator_Number."<br>".
					"<strong>POS BALANCE:</strong> ".$obj->BALANCE."<br>".
					 "<strong>ACTIVATOR NAME:</strong> ".$obj->Activator_Name."<br>".
					 "<strong>MANAGER NAME:</strong> ".$obj->Manager_Name."<br>".
					 "<strong>BUSSINES NAME:</strong> ".$obj->business_name."<br>".
					 "<strong>POS ALT NUMBER:</strong> ".$obj->altenative_number."<br>".
					 "<strong>ADDRESS:</strong> ".$obj->Area."<br>";  // save the info-window, concatinate the thing magig
    $mrk_cnt++;                      // increment the marker counter
}
$res->close();
// Now we have the lattitude, longitude and info-window text for each marker 
// stored in php arrays. Now we need to write the marker's JavaScript 
// dynamically with this information
}

//KAISI AHMAD 	798095668 	 	 	
else if ($_REQUEST["Submit"] == "Show" && $_REQUEST["mn"] == '798095668')
{
$res = $db->query("select * from activators, pos_live_balance where activators.lat !=0 AND pos_live_balance.ACC_NBR = activators.Activator_Number 
AND activators.Manager_Number = '798095668'");


// STEP 3: Store the marker info in arrays for each row found
// save the count of markers for later

$mrk_cnt = 0;
while ($obj = $res->fetch_object())  // get all rows (markers)
{
	//pos number
	$pos[$mrk_cnt] = $obj->Manager_Number; 
	
	//low balamce
	$low[$mrk_cnt] = $obj->BALANCE; 
	
    $lat[$mrk_cnt] = $obj->lat;  // save the lattitude
    $lng[$mrk_cnt] = $obj->lon;  // save the longitude
    $inf[$mrk_cnt] = "<strong>POS TYPE:</strong> ".$obj->pos_type."<br>".
					"<strong>POS NUMBER:</strong> ".$obj->Activator_Number."<br>".
					"<strong>POS BALANCE:</strong> ".$obj->BALANCE."<br>".
					 "<strong>ACTIVATOR NAME:</strong> ".$obj->Activator_Name."<br>".
					 "<strong>MANAGER NAME:</strong> ".$obj->Manager_Name."<br>".
					 "<strong>BUSSINES NAME:</strong> ".$obj->business_name."<br>".
					 "<strong>POS ALT NUMBER:</strong> ".$obj->altenative_number."<br>".
					 "<strong>ADDRESS:</strong> ".$obj->Area."<br>";  // save the info-window, concatinate the thing magig
    $mrk_cnt++;                      // increment the marker counter
}
$res->close();
// Now we have the lattitude, longitude and info-window text for each marker 
// stored in php arrays. Now we need to write the marker's JavaScript 
// dynamically with this information
}

//ANDREW KANYIKA 	798094946 	 	 	
else if ($_REQUEST["Submit"] == "Show" && $_REQUEST["mn"] == '798094946')
{
$res = $db->query("select * from activators, pos_live_balance where activators.lat !=0 AND pos_live_balance.ACC_NBR = activators.Activator_Number 
AND activators.Manager_Number = '798094946'");


// STEP 3: Store the marker info in arrays for each row found
// save the count of markers for later

$mrk_cnt = 0;
while ($obj = $res->fetch_object())  // get all rows (markers)
{
	//pos number
	$pos[$mrk_cnt] = $obj->Manager_Number;
	
	//low balamce
	$low[$mrk_cnt] = $obj->BALANCE;  
	
    $lat[$mrk_cnt] = $obj->lat;  // save the lattitude
    $lng[$mrk_cnt] = $obj->lon;  // save the longitude
    $inf[$mrk_cnt] = "<strong>POS TYPE:</strong> ".$obj->pos_type."<br>".
					"<strong>POS NUMBER:</strong> ".$obj->Activator_Number."<br>".
					"<strong>POS BALANCE:</strong> ".$obj->BALANCE."<br>".
					 "<strong>ACTIVATOR NAME:</strong> ".$obj->Activator_Name."<br>".
					 "<strong>MANAGER NAME:</strong> ".$obj->Manager_Name."<br>".
					 "<strong>BUSSINES NAME:</strong> ".$obj->business_name."<br>".
					 "<strong>POS ALT NUMBER:</strong> ".$obj->altenative_number."<br>".
					 "<strong>ADDRESS:</strong> ".$obj->Area."<br>";  // save the info-window, concatinate the thing magig
    $mrk_cnt++;                      // increment the marker counter
}
$res->close();
// Now we have the lattitude, longitude and info-window text for each marker 
// stored in php arrays. Now we need to write the marker's JavaScript 
// dynamically with this information
}

//DEO PASCAL MARTIN 	798095662 	 	 	
else if ($_REQUEST["Submit"] == "Show" && $_REQUEST["mn"] == '798095662')
{
$res = $db->query("select * from activators, pos_live_balance where activators.lat !=0 AND pos_live_balance.ACC_NBR = activators.Activator_Number 
AND activators.Manager_Number = '798095662'");


// STEP 3: Store the marker info in arrays for each row found
// save the count of markers for later

$mrk_cnt = 0;
while ($obj = $res->fetch_object())  // get all rows (markers)
{
	//pos number
	$pos[$mrk_cnt] = $obj->Manager_Number; 
	
	//low balamce
	$low[$mrk_cnt] = $obj->BALANCE; 
	
    $lat[$mrk_cnt] = $obj->lat;  // save the lattitude
    $lng[$mrk_cnt] = $obj->lon;  // save the longitude
    $inf[$mrk_cnt] = "<strong>POS TYPE:</strong> ".$obj->pos_type."<br>".
					"<strong>POS NUMBER:</strong> ".$obj->Activator_Number."<br>".
					"<strong>POS BALANCE:</strong> ".$obj->BALANCE."<br>".
					 "<strong>ACTIVATOR NAME:</strong> ".$obj->Activator_Name."<br>".
					 "<strong>MANAGER NAME:</strong> ".$obj->Manager_Name."<br>".
					 "<strong>BUSSINES NAME:</strong> ".$obj->business_name."<br>".
					 "<strong>POS ALT NUMBER:</strong> ".$obj->altenative_number."<br>".
					 "<strong>ADDRESS:</strong> ".$obj->Area."<br>";  // save the info-window, concatinate the thing magig
    $mrk_cnt++;                      // increment the marker counter
}
$res->close();
// Now we have the lattitude, longitude and info-window text for each marker 
// stored in php arrays. Now we need to write the marker's JavaScript 
// dynamically with this information
}

//MSAFIRI MALILO 	798095665 	 	 	
else if ($_REQUEST["Submit"] == "Show" && $_REQUEST["mn"] == '798095665')
{
$res = $db->query("select * from activators, pos_live_balance where activators.lat !=0 AND pos_live_balance.ACC_NBR = activators.Activator_Number 
AND activators.Manager_Number = '798095665'");


// STEP 3: Store the marker info in arrays for each row found
// save the count of markers for later

$mrk_cnt = 0;
while ($obj = $res->fetch_object())  // get all rows (markers)
{
	//pos number
	$pos[$mrk_cnt] = $obj->Manager_Number; 
	
	//low balamce
	$low[$mrk_cnt] = $obj->BALANCE; 
	
    $lat[$mrk_cnt] = $obj->lat;  // save the lattitude
    $lng[$mrk_cnt] = $obj->lon;  // save the longitude
    $inf[$mrk_cnt] = "<strong>POS TYPE:</strong> ".$obj->pos_type."<br>".
					"<strong>POS NUMBER:</strong> ".$obj->Activator_Number."<br>".
					"<strong>POS BALANCE:</strong> ".$obj->BALANCE."<br>".
					 "<strong>ACTIVATOR NAME:</strong> ".$obj->Activator_Name."<br>".
					 "<strong>MANAGER NAME:</strong> ".$obj->Manager_Name."<br>".
					 "<strong>BUSSINES NAME:</strong> ".$obj->business_name."<br>".
					 "<strong>POS ALT NUMBER:</strong> ".$obj->altenative_number."<br>".
					 "<strong>ADDRESS:</strong> ".$obj->Area."<br>";  // save the info-window, concatinate the thing magig
    $mrk_cnt++;                      // increment the marker counter
}
$res->close();
// Now we have the lattitude, longitude and info-window text for each marker 
// stored in php arrays. Now we need to write the marker's JavaScript 
// dynamically with this information
}

//MAHMUDU MUSSA MOTO 	798095663	 	 	
else if ($_REQUEST["Submit"] == "Show" && $_REQUEST["mn"] == '798095663')
{
$res = $db->query("select * from activators, pos_live_balance where activators.lat !=0 AND pos_live_balance.ACC_NBR = activators.Activator_Number 
AND activators.Manager_Number = '798095663'");


// STEP 3: Store the marker info in arrays for each row found
// save the count of markers for later

$mrk_cnt = 0;
while ($obj = $res->fetch_object())  // get all rows (markers)
{
	//pos number
	$pos[$mrk_cnt] = $obj->Manager_Number; 
	
	//low balamce
	$low[$mrk_cnt] = $obj->BALANCE; 
	
    $lat[$mrk_cnt] = $obj->lat;  // save the lattitude
    $lng[$mrk_cnt] = $obj->lon;  // save the longitude
    $inf[$mrk_cnt] = "<strong>POS TYPE:</strong> ".$obj->pos_type."<br>".
					"<strong>POS NUMBER:</strong> ".$obj->Activator_Number."<br>".
					"<strong>POS BALANCE:</strong> ".$obj->BALANCE."<br>".
					 "<strong>ACTIVATOR NAME:</strong> ".$obj->Activator_Name."<br>".
					 "<strong>MANAGER NAME:</strong> ".$obj->Manager_Name."<br>".
					 "<strong>BUSSINES NAME:</strong> ".$obj->business_name."<br>".
					 "<strong>POS ALT NUMBER:</strong> ".$obj->altenative_number."<br>".
					 "<strong>ADDRESS:</strong> ".$obj->Area."<br>";  // save the info-window, concatinate the thing magig
    $mrk_cnt++;                      // increment the marker counter
}
$res->close();
// Now we have the lattitude, longitude and info-window text for each marker 
// stored in php arrays. Now we need to write the marker's JavaScript 
// dynamically with this information
}

//HASSAN DAFFUR 	798094990	 	 	
else if ($_REQUEST["Submit"] == "Show" && $_REQUEST["mn"] == '798094990')
{
$res = $db->query("select * from activators, pos_live_balance where activators.lat !=0 AND pos_live_balance.ACC_NBR = activators.Activator_Number 
AND activators.Manager_Number = '798094990'");


// STEP 3: Store the marker info in arrays for each row found
// save the count of markers for later

$mrk_cnt = 0;
while ($obj = $res->fetch_object())  // get all rows (markers)
{
	//pos number
	$pos[$mrk_cnt] = $obj->Manager_Number; 
	
	//low balamce
	$low[$mrk_cnt] = $obj->BALANCE; 
	
    $lat[$mrk_cnt] = $obj->lat;  // save the lattitude
    $lng[$mrk_cnt] = $obj->lon;  // save the longitude
    $inf[$mrk_cnt] = "<strong>POS TYPE:</strong> ".$obj->pos_type."<br>".
					"<strong>POS NUMBER:</strong> ".$obj->Activator_Number."<br>".
					"<strong>POS BALANCE:</strong> ".$obj->BALANCE."<br>".
					 "<strong>ACTIVATOR NAME:</strong> ".$obj->Activator_Name."<br>".
					 "<strong>MANAGER NAME:</strong> ".$obj->Manager_Name."<br>".
					 "<strong>BUSSINES NAME:</strong> ".$obj->business_name."<br>".
					 "<strong>POS ALT NUMBER:</strong> ".$obj->altenative_number."<br>".
					 "<strong>ADDRESS:</strong> ".$obj->Area."<br>";  // save the info-window, concatinate the thing magig
    $mrk_cnt++;                      // increment the marker counter
}
$res->close();
// Now we have the lattitude, longitude and info-window text for each marker 
// stored in php arrays. Now we need to write the marker's JavaScript 
// dynamically with this information
}

//JAMILAH KINGU 	798093866 	 	 	
else if ($_REQUEST["Submit"] == "Show" && $_REQUEST["mn"] == '798093866')
{
$res = $db->query("select * from activators, pos_live_balance where activators.lat !=0 AND pos_live_balance.ACC_NBR = activators.Activator_Number 
AND activators.Manager_Number = '798093866'");


// STEP 3: Store the marker info in arrays for each row found
// save the count of markers for later

$mrk_cnt = 0;
while ($obj = $res->fetch_object())  // get all rows (markers)
{
	//pos number
	$pos[$mrk_cnt] = $obj->Manager_Number;  
	
	//low balamce
	$low[$mrk_cnt] = $obj->BALANCE; 
	
    $lat[$mrk_cnt] = $obj->lat;  // save the lattitude
    $lng[$mrk_cnt] = $obj->lon;  // save the longitude
    $inf[$mrk_cnt] = "<strong>POS TYPE:</strong> ".$obj->pos_type."<br>".
					"<strong>POS NUMBER:</strong> ".$obj->Activator_Number."<br>".
					"<strong>POS BALANCE:</strong> ".$obj->BALANCE."<br>".
					 "<strong>ACTIVATOR NAME:</strong> ".$obj->Activator_Name."<br>".
					 "<strong>MANAGER NAME:</strong> ".$obj->Manager_Name."<br>".
					 "<strong>BUSSINES NAME:</strong> ".$obj->business_name."<br>".
					 "<strong>POS ALT NUMBER:</strong> ".$obj->altenative_number."<br>".
					 "<strong>ADDRESS:</strong> ".$obj->Area."<br>";  // save the info-window, concatinate the thing magig
    $mrk_cnt++;                      // increment the marker counter
}
$res->close();
// Now we have the lattitude, longitude and info-window text for each marker 
// stored in php arrays. Now we need to write the marker's JavaScript 
// dynamically with this information
}
	
	
	
?>

<script type='text/javascript'>
var point;
var mrktx;
function load() {
   addTo = 0;
   var latlng = new google.maps.LatLng(-6.8000, 39.2833);
   var myOptions = {
      zoom: 14,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
   };
   // NOTE: all values: latitude, longitude, zoom, etc.
   //       should also come from the database for flexibility
       
   var map = new google.maps.Map(document.getElementById("map_canvas"), 
              myOptions);
// This next block of JavaScript needs to be generated by PHP 
// to 'add-in' the information from the arrays

<?php
//select ya kizushi

for ($lcnt = 0; $lcnt < $mrk_cnt; $lcnt++)
{
		
    echo "var point$lcnt = new google.maps.LatLng($lat[$lcnt], $lng[$lcnt]);\n";
    echo "var mrktx$lcnt = \"$inf[$lcnt]\";\n";
	echo "var infowindow$lcnt = new google.maps.InfoWindow({
   			content: mrktx$lcnt
			
			});";
			 //big if continuation for all motherfuckes sales coordinators based on their POS numbers
			//mashaka
			if($pos[$lcnt] == 798095664){
			 echo "var marker$lcnt = new google.maps.Marker({position: point$lcnt, map: map, icon: 		              'http://maps.google.com/mapfiles/ms/icons/blue-dot.png'});\n";
			}
			
			/*//low balance
			else if($low[$lcnt] < 10000){
			 echo "var marker$lcnt = new google.maps.Marker({position: point$lcnt, map: map, icon: 		              'http://connektafrica.net/img/lb.png'});\n";
			}
			*/
			//MANSOOR KHALIFA
			else 
			if($pos[$lcnt] == 798095523){
			 echo "var marker$lcnt = new google.maps.Marker({position: point$lcnt, map: map, icon: 		              'http://maps.google.com/mapfiles/ms/icons/yellow-dot.png'});\n";
			}
			
			// 	IPYANA WILLSON 	798095667
			else 
			if($pos[$lcnt] == 798095667){
			 echo "var marker$lcnt = new google.maps.Marker({position: point$lcnt, map: map, icon: 		              'http://maps.google.com/mapfiles/ms/icons/pink-dot.png'});\n";
			}
			
			// 	DIBWE SAID 	798095666
			else 
			if($pos[$lcnt] == 798095666){
			 echo "var marker$lcnt = new google.maps.Marker({position: point$lcnt, map: map, icon: 		              'http://maps.google.com/mapfiles/ms/icons/purple-dot.png'});\n";
			}
			
			// 	CHARLES JAMES 	798095422 	
			else 
			if($pos[$lcnt] == 798095422){
			 echo "var marker$lcnt = new google.maps.Marker({position: point$lcnt, map: map, icon: 		              'http://connektafrica.net/img/black-dot.png'});\n";
			}
			
			// 	HAPPY TITUS 	798095254 	
			else 
			if($pos[$lcnt] == 798095254){
			 echo "var marker$lcnt = new google.maps.Marker({position: point$lcnt, map: map, icon: 		              'http://connektafrica.net/img/orange-dot.png'});\n";
			}
			
			// 	KAISI AHMAD 	798095668 	
			else 
			if($pos[$lcnt] == 798095668){
			 echo "var marker$lcnt = new google.maps.Marker({position: point$lcnt, map: map, icon: 		              'http://connektafrica.net/img/wthblue-dot.png'});\n";
			}
			
			// 	ANDREW KANYIKA 	798094946 	
			else 
			if($pos[$lcnt] == 798094946){
			 echo "var marker$lcnt = new google.maps.Marker({position: point$lcnt, map: map, icon: 		              'http://connektafrica.net/img/glay-dot.png'});\n";
			}
			
			// 	DEO PASCAL MARTIN 	798095662 	
			else 
			if($pos[$lcnt] == 798095662){
			 echo "var marker$lcnt = new google.maps.Marker({position: point$lcnt, map: map, icon: 		              'http://connektafrica.net/img/darkblue-dot.png'});\n";
			}
			
			// 	MSAFIRI MALILO 	798095665 	
			else 
			if($pos[$lcnt] == 798095665){
			 echo "var marker$lcnt = new google.maps.Marker({position: point$lcnt, map: map, icon: 		              'http://connektafrica.net/img/msa.png'});\n";
			}
			
			// 	MAHMUDU MUSSA MOTO 	798095663 	
			else 
			if($pos[$lcnt] == 798095663){
			 echo "var marker$lcnt = new google.maps.Marker({position: point$lcnt, map: map, icon: 		              'http://connektafrica.net/img/moto.png'});\n";
			}
			
			// HASSAN DAFFUR 	798094990 	
			else 
			if($pos[$lcnt] == 798094990){
			 echo "var marker$lcnt = new google.maps.Marker({position: point$lcnt, map: map, icon: 		              'http://maps.google.com/mapfiles/ms/icons/green-dot.png'});\n";
			}
			
			// JAMILAH KINGU 	798093866  	
			else 
			if($pos[$lcnt] == 798093866){
			 echo "var marker$lcnt = new google.maps.Marker({position: point$lcnt, map: map, icon: 		              'http://maps.google.com/mapfiles/ms/icons/red-dot.png'});\n";
			}
			
			
			else{
			 echo "var marker$lcnt = new google.maps.Marker({position: point$lcnt, map: map, icon: 		              'http://connektafrica.net/img/unk.png'});\n";
			}
			
  
   
	
	
	
	
	
	echo "google.maps.event.addListener(marker$lcnt, 
         'mousedown', function() {
   		     infowindow$lcnt.open(map,marker$lcnt);
          });\n";
}
//mouseover

?>
}
</script>
</head>

<body onload='load()'>
<table width="200" border="0" align="center">
  <tr>
    <td> <img src ="img/logo.gif" width=195 height=143 align="middle"></td>
  </tr>
</table>
<table width="1200" border="0" align="center" class="curvedEdges" height="30">
  <tr valign="middle">
    <td valign="middle"><form name="form1" method="post" action="connekt_map.php">
      <label><span class="style2">Manager Name:</span>
      <select name="mn" id = "mn">
	  <option value="ALL">SHOW ALL</option>
        <option value="798095664">MASHAKA MUSSA</option>
        <option value="798095523">MANSOOR KHALIFA</option>
        <option value="798095667">IPYANA WILLSON</option>
        <option value="798095666">DIBWE SAID</option>
        <option value="798095422">CHARLES JAMES</option>
        <option value="798095254">HAPPY TITUS</option>
        <option value="798095668">KAISI AHMAD</option>
        <option value="798094946">ANDREW KANYIKA</option>
        <option value="798095662">DEO PASCAL MARTIN</option>
        <option value="798095665">MSAFIRI MALILO</option>
        <option value="798095663">MAHMUDU MUSSA MOTO</option>
        <option value="798094990">HASSAN DAFFUR</option>
        <option value="798093866 ">JAMILAH KINGU</option>
      </select>
      </label>
        <label>
        <input type="submit" name="Submit" value="Show" id = "Submit">
        </label>
    </form>
    </td>
  </tr>
</table>

<table width="1200" border="0" align="center">
  <tr>
    <td ><span class="style3">Map Results of : <?php 
	mysql_connect("localhost","connektafrica","Password!23");
mysql_select_db("connektafrica_pos");
	 $aa = $_REQUEST['mn'];
	$result = mysql_query("SELECT Sales_Coordinator_Name FROM controller where  Sales_Coordinator_Number = '$aa' limit 1") or die(mysql_error());
while ($row = mysql_fetch_array($result))
{
$name = $row['Sales_Coordinator_Name'];
echo $name;
}
mysql_free_result($result);
	?></span></td>
  </tr>
</table>


	<table width="1200" border="0" align="center" class="curvedEdges">
 
  <tr>
    <td><div id="map_canvas" style="width: 1200px; height: 800px; margin: 0 0 0 0;"></div>
	</div></td>
  </tr>
 
</table>
<table width="200" border="0" align="center">
  <tr>
    <td> <img src ="img/key.jpg"  align="middle"></td>
  </tr>
</table>
    <p align=center class="style1">COPYRIGHTS ©CONNEKT AFRICA 2014</p>
</body>
</html>
