<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

include 'dbconfig.php';

$filename = $_POST["file"];

$query = "UPDATE page
        SET csspage = '".$mysqli->real_escape_string($filename)."'
        WHERE 1";

$results = $mysqli->query( $query );
$rowcount=mysqli_num_rows($results);

$mysqli->close();
?>