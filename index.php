<?php
require_once "./tools/renderTemplate.php";
require_once "./tools/unitConverter.php";
require_once "./tools/processForm.php";
?>


<!Doctype html>
<html lang="en"> 
  <?php render_template("Head", ["title" => "Unit Converter"]) ?>
  <body class="container flex"> 
    <?php render_template("App") ?>
  </body>
</html>
