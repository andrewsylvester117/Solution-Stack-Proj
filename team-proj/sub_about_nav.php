<nav class="sub_nav">
   <ul>
      <?php
           $menu_items = [
               "About"=> "about",
               "History"=>"history", 
               "Mission"=>"mission"];

            foreach($menu_items as $key => $value){
               echo "<li><a href=".$menu_items[$key]."><h2>".$key."</h2></a></li>";
            } 
         ?>
      </ul>
</nav>