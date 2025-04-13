<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["unit"])) {
  switch ($_POST["unit"]) {
    case "Length":
      render_template("base.php", ["units" => ["ft", "ich"]]);
      break;
    case "Weigth":
      render_template("base.php", [
        "units" => ["lb", "k"],
      ]);
      break;
    case "Temperature":
      render_template("base.php", [
        "units" => ["°C", "°F"],
      ]);
  }
}
