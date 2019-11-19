<?php
if(isset($_SESSION)){
    session_destroy();
}
$title = "Login";
$website = "Website";
include "head.php";
?>

<body>
    <div class=\"loginbox_container\">
        <div class="loginbox">
            <h1>Login</h1>
            <form method="post">
                <div class="container">
                    <label>
                        <h2>Username:</h2>
                    </label>
                    <input type="text" placeholder="Enter Username" name="username" id="username" required>

                    <label>
                        <h2>Password:</h2>
                    </label>
                    <input type="password" placeholder="Enter Password" name="password" id="password" required>

                    <button name="submit" type="submit">
                        <h3>Login<h3>
                    </button>
                </div>
            </form>

        </div>
    </div>

    <?php

    // If the submit button has been clicked
    if (isset($_POST['submit'])) {

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

        echo $_SESSION['login_user'];
        if ($result == 'TRUE') {

            // Start the session for the user.
            session_start();
            $_SESSION['login_user'] = $username;

            echo "<script language='javascript' type='text/javascript'> location.href='home.php' </script>";
        } else {
            echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
        }
    }
    ?>
</body>

<?php
include "footer.php"
?>