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
            <form action="action_page.php" method="post">
                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit">Login</button>
                </div>
            </form>

        </div>
    </div>
</body>

<?php
include "footer.php"
?>