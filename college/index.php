<?php
    $title = "Kris' Games";
    ini_set("log_errors", 1);
    ini_set("error_log", "./php-error.log");
?>
<!DOCTYPE HTML>
<html>

  <?php include "resources/header.php"; ?>

  <body>
    <?php include "resources/bannerAndNavbar.php"; ?>
    <div class="row">
        <div class="large-12 columns"> <h1>Recent additions</h1> </div>
        <div class="large-4 columns panel">
            <h2 style="color:blue">PlayStation</h2>
            <p>This is the start of a paragraph for teh PlayStation content</p>
        </div>
        <div class="large-4 columns panel">
            <h2 style="color:green">Xbox</h2>
            <p>This is the start of a paragraph for teh Xbox content</p>
        </div>
        <div class="large-4 columns panel">
            <h2 style="color:red">PC</h2>
            <p>This is the start of a paragraph for teh PC content ololol</p>
        </div>
    </div>

  </body>
</html>
