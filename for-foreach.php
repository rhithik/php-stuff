<?php

$family = array("Jeff", "Annie", "Kaitlyn", "Willa");


foreach ($family as $key => $value) {

  $family[$key] = $value . " McHale"; // add "McHale" to each item in the $family array

  echo "Array item " . $key . " is " . $value . "<br>";

}

for ($i = 0; $i < sizeof($family); $i++) { //sizeof allows for the array to grow continuously if necessary.

  echo $family[$i] . "<br>";

}

for ($i = 10; $i >= 0; $i--) {

  echo $i . "<br>";

}

?>