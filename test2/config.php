<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'hack');
define('DB_PASSWORD', '12345');
define('DB_NAME', 'Hackathon');
$link = mysqli_connect(DB_SERVER, DEB_USERNAM, DB_PASSWORD, DB_NAME);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>