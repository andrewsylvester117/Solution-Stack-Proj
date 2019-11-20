<header>
    <?php
        session_start();
        if(isset( $_SESSION['login_user'])){
            echo "<a class=\"logoutlink\" href=\"logout.php\"><h3> Logout ".$_SESSION['login_user']." </h3></a>";
            if($_SESSION['login_user'] != "GUEST"){
                include "themechange.php";
            }
        }
        else{
            include "logout.php";
        }
        //$result = file_get_contents( "http://pi-asylvester/team-proj-backend/get_site_name.php");

        echo "<h1 class=\"website_header\">" . $_SESSION['sitename'] . "</h1>";
    ?>
</header>