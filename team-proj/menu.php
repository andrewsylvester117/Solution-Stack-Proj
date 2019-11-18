<div class="main_nav_container">
   <nav class="main_nav">
      <ul>
         <?php
            $menu_items = ["Home"=>"home", 
                  "About"=>"about",
                  "Experience"=>"experience"];

               foreach($menu_items as $key => $value){
                  echo "<li><a href=".$menu_items[$key]."><h2>".$key."</h2></a></li>";
               } 
            ?>
         </ul>
   </nav>
</div>