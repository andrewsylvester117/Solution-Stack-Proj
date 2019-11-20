<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

include 'dbconfig.php';

$sitename = $_POST["website"];

$query = "UPDATE page
        SET sitename = '".$mysqli->real_escape_string($sitename)."'
        WHERE 1";

echo $query;
$results = $mysqli->query( $query );
$rowcount=mysqli_num_rows($results);

$mysqli->close();
?>