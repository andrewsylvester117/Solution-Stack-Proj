<?php
if (isset($_SESSION)) {
    session_destroy();
}
$title = "Login";
$website = "Website";
include "head.php";
?>

<body>
    <div class=loginbox_container>
        <div class="loginbox">
            <h1>Login</h1>
            <form method="post">
                <div class="container">
                    <label>
                        <h2>Username:</h2>
                    </label>
                    <input type="text" placeholder="Enter Username" name="username" id="username">

                    <label>
                        <h2>Password:</h2>
                    </label>
                    <input type="password" placeholder="Enter Password" name="password" id="password">

                    <button class="login_button" name="submit_login" type="submit">
                    <h2 class="login_h2">Login</h2>

                    <button class="login_button" name="submit_guest" type="submit">
                        <h2 class="login_h2">Continue as Guest<h2>
                    
                </div>
            </form>
        </div>
    </div>

    <?php

    // If the submit-login button has been clicked
    if (isset($_POST['submit_login'])) {

        // Get the username and password from the form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Start constructing the request
        $url = "http://pi-asylvester/team-proj-backend/get_user.php";
        $data = array('username' => $username, 'password' => $password);

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

        if ($result == 'TRUE') {
            // Start the session for the user.
            $_SESSION['login_user'] = $username;
            include "get_site_name.php";
            echo "<script language='javascript' type='text/javascript'> location.href='home.php' </script>";
        } else {
            echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
        }
    }

    if (isset($_POST['submit_guest'])) {
        $_SESSION['login_user'] = "GUEST";
        include "get_site_name.php";
        echo "<script language='javascript' type='text/javascript'> location.href='home.php' </script>";
    }
    ?>
</body>

<?php
include "footer.php"
?>