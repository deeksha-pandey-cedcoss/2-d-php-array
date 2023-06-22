<h3>Original array</h3>

<?php
$total = 0;
$arr = require "config/data.php";
echo "<pre>";
print_r($arr);
echo "</pre>";
$data = krsort($arr);

foreach ($arr as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>