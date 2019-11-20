<div class="main_nav_container">
   <nav class="main_nav">
      <ul class = "main_nav_ul">
         <?php
            $menu_items = ["Home"=>"home", 
                  "About"=>"about",
                  "Contact"=>"contact"];

               foreach($menu_items as $key => $value){
                  echo "<li class = \"main_nav_li\"><a class=\"main_nav_a\" href=".$menu_items[$key]."><h2>".$key."</h2></a></li>";
               } 

               if($_SESSION['login_user'] != 'GUEST'){
                  echo "<li class = \"main_nav_li\"><a class=\"main_nav_a\" href=\"create_content.php\"><h2>Edit Content</h2></a></li>";
               }

            ?>
         </ul>
   </nav>
</div>