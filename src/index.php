<h1>Duplicate values in an array</h1>
<h3>Original array</h3>
<?php
$a=array("a"=>"red","b"=>"green","c"=>"red");
echo "<pre>";
print_r($a);
echo "</pre>";
echo "<h3>Unique array</h3>";
$a = array_unique($a);
echo "<pre>";
print_r($a);
echo "</pre>";

?>
