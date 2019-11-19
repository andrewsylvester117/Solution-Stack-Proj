<?php
$host = "localhost:3306";
$username = "Andrew";
$password = "12345";
$db_name = "teamproj";
$mysqli = new mysqli($host, $username, $password, $db_name);
if (mysqli_connect_errno()) {
    echo "Error: Could not connect to database.";
    exit;
}
?>