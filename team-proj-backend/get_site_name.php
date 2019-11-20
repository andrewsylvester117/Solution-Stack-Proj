<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

include 'dbconfig.php';
$query = "SELECT sitename FROM page;";
$results = $mysqli->query( $query );
$rowcount=mysqli_num_rows($results);

if($rowcount > 0){
    while ($row = $results->fetch_assoc()) {
        echo $row["sitename"];
    }
}
?>