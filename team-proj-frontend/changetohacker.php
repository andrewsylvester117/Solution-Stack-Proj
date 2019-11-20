<?php
    // Start constructing the request
    $url = "http://pi-asylvester/team-proj-backend/update_css.php";
    $data = array('file' => 'hacker.css');

    // Build the request body
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );

    // Create the request
    $context  = stream_context_create($options);

    // Send the request
    $result = file_get_contents($url, false, $context);

    echo "<script language='javascript' type='text/javascript'> location.href='home.php' </script>";
?>