<div class="sub_container">
      <ul class="sub_ul">
         <?php
         $menu_items = [
            "About" => "about",
            "History" => "history",
            "Mission" => "mission"
         ];

         foreach ($menu_items as $key => $value) {
            echo "<li class=\"sub_li\"><a class=\"sub_button\" href=" . $menu_items[$key] . "><h3>" . $key . "</h3></a></li>";
         }
         ?>
      </ul>
</div>