<header>
    <?php
        session_start();
        if(isset( $_SESSION['login_user'])){
            echo "<a class=\"logoutlink\" href=\"logout.php\"><h3> Logout ".$_SESSION['login_user']." </h3></a>";
        }
        else{
            include "logout.php";
        }
        echo "<h1>" . $website . "</h1>";
    ?>
</header>