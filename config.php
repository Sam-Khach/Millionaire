<?php
$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "millionair";

$connection =  mysqli_connect($server_name, $username, $password, $db_name);

if (!$connection) {
    die("error " . mysqli_connect_error());
}
$connection->set_charset("utf8mb4");

?>