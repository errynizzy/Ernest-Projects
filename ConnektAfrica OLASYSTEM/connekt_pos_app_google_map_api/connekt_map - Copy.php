<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>POS Map</title>
<head>
<!--<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />-->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<?php

//*********************************************
// Database stuff - all done with PHP
//*********************************************

// kitu cha map starts here

$db = new mysqli("localhost", "root", "", "testmap");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
	
// STEP 2: Query the table with the marker information

$res = $db->query("select * from marker_info");
	
// STEP 3: Store the marker info in arrays for each row found
// save the count of markers for later

$mrk_cnt = 0;
while ($obj = $res->fetch_object())  // get all rows (markers)
{
    $lat[$mrk_cnt] = $obj->mrk_lat;  // save the lattitude
    $lng[$mrk_cnt] = $obj->mrk_lng;  // save the longitude
    $inf[$mrk_cnt] = $obj->mrk_inf;  // save the info-window
    $mrk_cnt++;                      // increment the marker counter
}
$res->close();
// Now we have the lattitude, longitude and info-window text for each marker 
// stored in php arrays. Now we need to write the marker's JavaScript 
// dynamically with this information
	
?>

<script type='text/javascript'>
var point;
var mrktx;
function load() {
   addTo = 0;
   var latlng = new google.maps.LatLng(-6.8000, 39.2833);
   var myOptions = {
      zoom: 11,
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
for ($lcnt = 0; $lcnt < $mrk_cnt; $lcnt++)
{
		
    echo "var point$lcnt = new google.maps.LatLng($lat[$lcnt], $lng[$lcnt]);\n";
    echo "var mrktx$lcnt = \"$inf[$lcnt]\";\n";
	echo "var infowindow$lcnt = new google.maps.InfoWindow({
   			content: mrktx$lcnt
			});";
    echo "var marker$lcnt = new google.maps.Marker({position: point$lcnt, map: map});\n";
	echo "google.maps.event.addListener(marker$lcnt, 
         'mouseover', function() {
   		     infowindow$lcnt.open(map,marker$lcnt);
          });\n";
}
?>
}
</script>
</head>

<body onload='load()'>
	<table width="900" border="0" align="center">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div id="map_canvas" style="width: 900px; height: 600px; margin: 0 0 0 0;"></div>
	</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>