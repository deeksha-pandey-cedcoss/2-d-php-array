<h3>Original array</h3>


<?php
$total = 0;
$arr = require "config/data.php";
foreach ($arr as $key => $value) {
  echo $key;
  echo "<br>";
  foreach ($value as $vkey => $vvalue) {
    if ($key == "Student 1" && ($vkey == "Maths" || $vkey == "Science")) {
      $total1 += $vvalue;
    }
    if ($key == "Student 2" && ($vkey == "Maths" || $vkey == "Science")) {
      $total2 += $vvalue;
    }
    if ($key == "Student 3" && ($vkey == "Maths" || $vkey == "Science")) {
      $total3 += $vvalue;
    }
    if ($key == "Student 1" && ($vkey == "Science")) {
      $totals1 += $vvalue;
    }
    if ($key == "Student 2" && ($vkey == "Science")) {
      $totals2 += $vvalue;
    }
    if ($key == "Student 3" && ($vkey == "Science")) {
      $totals3 += $vvalue;
    }
    if ($key == "Student 1" && ($vkey == "Maths")) {
      $totalm1 += $vvalue;
    }
    if ($key == "Student 2" && ($vkey == "Maths")) {
      $totalm2 += $vvalue;
    }
    if ($key == "Student 3" && ($vkey == "Maths")) {
      $totalm3 += $vvalue;
    }
    echo "<br>";
    echo $vkey;
    echo "<br>";
    echo $vvalue;
    echo "<br>";
  }
  echo "<br>";
}


$max = ($total1 > $total2) ? (($total1 > $total3) ? $total1 : $total3) : (($total2 > $total3) ? $total2 : $total3);
$maxm = ($totalm1 > $totalm2) ? (($totalm1 > $totalm3) ? $totalm1 : $totalm3) : (($totalm2 > $totalm3) ? $totalm2 : $totalm3);
$maxs = ($totals1 > $totals2) ? (($totals1 > $totals3) ? $totals1 : $totals3) : (($totals2 > $totals3) ? $totals2 : $totals3);


echo "Maximum is :$max for Student 2";
echo "Maximum is :$maxm for Student 3";
echo "Maximum is :$maxs for Student 1";

?>