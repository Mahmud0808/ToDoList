<?php
$hostname = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "user_database";

$db_connection = mysqli_connect($hostname, $dbusername, $dbpassword, $dbname);

if (!$db_connection) {
    die("Something went wrong...");
}
?>