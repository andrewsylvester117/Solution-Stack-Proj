<nav class="sub_nav">
   <ul>
      <?php
           $menu_items = [
               "Contact"=> "contact",
               "Email"=>"email", 
               "Locations"=>"locations"];

            foreach($menu_items as $key => $value){
               echo "<li><a href=".$menu_items[$key]."><h2>".$key."</h2></a></li>";
            } 
         ?>
      </ul>
</nav>