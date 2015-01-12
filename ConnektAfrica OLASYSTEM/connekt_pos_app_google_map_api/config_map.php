<?php
$db = new mysqli("localhost", "conn", "", "connektafri");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


?>