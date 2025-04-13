<?php
$checked = $_POST["unit"] ?? "Length";

include __DIR__ . "/render.php";
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unit converter</title>
    <style>
      input[type="radio"] { display: none; }
      input[type="radio"]:checked + label { background: #333; color: white;}
    </style>
  </head>
  <body>
    <main>
      <form method="post" action="select.php">
        <?php foreach (["Length", "Weigth", "Temperature"] as $unit_selec): ?>
        <input type="radio" id="<?= $unit_selec ?>" name="unit" value="<?= $unit_selec ?>" onchange="this.form.submit()" <?= $checked ==
$unit_selec
  ? "checked"
  : "" ?>>
        <label for="<?= $unit_selec ?>"><?= $unit_selec ?></label>
        <?php endforeach; ?>
      </form>
      <?php include "select.php"; ?>
    </main>
  </body>
</html>
