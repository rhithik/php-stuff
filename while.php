<?php

$i = 5;

while ($i <= 50) {

  echo $i . "<br>";

  $i = $i + 5;

}

$i = 1;

while ($i <= 10) {

  $j = $i * 5;

  echo $j . "<br>";

  $i++;

}

$family = array("Jeff", "Annie", "Kaitlyn", "Willa");

$l = 0;

while ($l < sizeof($family)) {

  echo $family[$l] . "<br>";

  $l++;

}

?>