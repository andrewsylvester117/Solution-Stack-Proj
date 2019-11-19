<?php
$title = "Login";
$website = "Website";
include "head.php";
include "header.php";
include "menu.php";
?>

<body>
    <div class=\"loginbox_container\">
        <div class="loginbox">
            <h1>Login</h1>
            <form method="post">
                <div class="container">
                    <label><h2>Username:</h2></label>
                    <input type="text" placeholder="Enter Username" name="username" id="username" required>

                    <label><h2>Password:</h2></label>
                    <input type="password" placeholder="Enter Password" name="password" id="password" required>

                    <button name="submit" type="submit"><h3>Login<h3></button>
                </div>
            </form>

        </div>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        session_start();
        $_SESSION['login_user'] = $username;

        $loginUrl = "http://pi-asylvester/team-proj-backend/get_user.php";

    }
    ?>
</body>

<?php
include "footer.php"
?>