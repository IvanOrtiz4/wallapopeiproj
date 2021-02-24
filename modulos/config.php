<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', '222435');
define('DB_PASSWORD', 'Rentable25');
define('DB_NAME', '222435');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
