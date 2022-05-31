<?php
$mysqli = new mysqli("localhost","root","","test");

if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

echo "Host info: ", $mysqli->host_info,"<br />";
echo "Server version: ", $mysqli->server_info;
$mysqli -> close();
?>