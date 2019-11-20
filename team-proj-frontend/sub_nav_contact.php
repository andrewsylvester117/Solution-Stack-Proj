<div class="sub_container">
   <ul class="sub_ul">
      <?php
      $menu_items = [
         "Contact" => "contact",
         "Email" => "email",
         "Locations" => "locations"
      ];

      foreach ($menu_items as $key => $value) {
         echo "<li class=\"sub_li\"><a class=\"sub_button\" href=" . $menu_items[$key] . "><h2>" . $key . "</h2></a></li>";
      }
      ?>
   </ul>
</div>