<?php
$title = "Create Content";
$website = "Website";
include "head.php";
include "header.php";
include "menu.php";


echo "
<body>
<h1>$title</h1><br />
    <div class=\"content_container\">";
?>
<div class="content_input">
    <label>
        <h2>Website Name:</h2>
    </label>
    <input type="text" class="website_name" placeholder="New website name" name="website" id="website">

    <button class="login_button" name="submit_update" type="submit">
        <h2 class="login_h2">Submit</h2>
</div>
<?php

echo "</div>
</body>";

include "footer.php"
?>