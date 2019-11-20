<?php
$title = "Create Content";
$website = "Website";
include "head.php";
include "header.php";
include "menu.php";
?>

<body>
    <h1><?php echo $title; ?></h1>
    <div class="content_container">
        <form method="post">
            <div class="content_input">
                <label>
                    <h2>Website Name:</h2>
                </label>
                <input type="text" class="website_name" placeholder="New website name" name="website" id="website">

                <button class="login_button" name="submit_update" type="submit">
                    <h2 class="login_h2">Submit</h2>
            </div>
        </form>
    </div>
    <?php
    if (isset($_POST['submit_update'])) {

            $new_site = $_POST['website'];
            // Start constructing the request
            $url = "http://pi-asylvester/team-proj-backend/update_site_name.php";
            $data = array('website' => $new_site);

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
            $_SESSION['sitename']=$new_site;
            echo "<script language='javascript' type='text/javascript'> location.href='home.php' </script>";
    }
    ?>
</body>

<?php
include "footer.php"
?>