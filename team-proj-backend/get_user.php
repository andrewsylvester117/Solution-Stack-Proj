<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

include 'dbconfig.php';

$username = $_POST["username"];
$password = $_POST["password"];

echo "Username: " . $username;
echo "\nPassword: " . $password;

$query = "SELECT * FROM login
        WHERE username  = '".$mysqli->real_escape_string($username)."'
        AND password = '".$mysqli->real_escape_string($password)."';";

echo "\n\n".$query;

$results = $mysqli->query( $query );
$num_results = count($results);

echo "\nCount: ".$num_results;

while( $row = $results->fetch_assoc() ){
    extract($row);
    echo "\n".$username;
    echo "\n".$password;
}

echo "\nDone";

?>