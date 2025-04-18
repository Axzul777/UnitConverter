<?php
// # Lb to K
// function convert(string $unit, string $from, string $to): int {
//   $result = match ($unit) {
//     "Lb", "Kl" => $from

//   }
// // }

function convertUnit($unitVal, $from, $to): int
{
  if ($from == $to) {
    return $unitVal;
  }

  return match ($from) {
    "lb", "k" => $from == "lib" ? $unitVal / 2.205 : $unitVal * 2.205,
    "ft", "inch" => $from == "ft" ? $unitVal / 12 : $unitVal * 12,
    "°C", "°F" => $from == "°F"
      ? ($unitVal * 9) / 5 + 32
      : (($unitVal - 32) * 5) / 9,
  };
}

if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["unitVal"])) {
  $res = convertUnit($_POST["unitVal"], $_POST["from"], $_POST["to"]);
  echo "<h1>{$res}</h1" . PHP_EOL;
  // var_dump($_POST);
  // echo "Maybe";
}

// echo "<h1>Hello </h1>";
