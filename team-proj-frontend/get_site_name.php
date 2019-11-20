<?php
    $xml = file_get_contents( "http://pi-asylvester/team-proj-backend/get_site_name.php");
    $_SESSION['sitename'] = $xml;
?>