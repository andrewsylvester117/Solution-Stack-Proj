<header>
    <?php
        session_start();
        if(isset( $_SESSION)){
            echo "<a href=\"logout.php\"><h3> Logout ".$_SESSION['login_user']." </h3></a>";
        }
        echo "<h1>" . $website . "</h1>";
    ?>
</header>