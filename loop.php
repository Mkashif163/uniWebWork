<?php
echo "<h1>FOR LOOP</h1>";
for ($x = 0; $x <= 10; $x++) {
  echo " for loop The number is: $x <br>";
}
$colors = array("red", "green", "blue", "yellow");
echo "<h1>FOR each LOOP</h1>";
foreach ($colors as $value) {
  echo "for each loop $value <br> ";
}
?>