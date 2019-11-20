<?php
     $result = file_get_contents( "http://pi-asylvester/team-proj-backend/get_site_name.php");
    echo "<footer>".$result." Created 10/2019</footer>";
?>