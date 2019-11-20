<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

include 'dbconfig.php';

$username = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT * FROM login
        WHERE username  = '".$mysqli->real_escape_string($username)."'
        AND password = '".$mysqli->real_escape_string($password)."';";


$results = $mysqli->query( $query );
$rowcount=mysqli_num_rows($results);

if($rowcount > 0){
    echo "TRUE";
}
else{
    echo "FALSE";
}

$mysqli->close();
?>