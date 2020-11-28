<?php

$myArray = array("Jeff", "Annie", "Kaitlyn", "Willa");

$myArray[] = "Jamie";

print_r($myArray);

echo $myArray[2];

echo "<br/><br/>";

$anotherArray[0] = "pizza";

$anotherArray[1] = "pasta";

$anotherArray[4] = "ice cream";

$anotherArray["myFavFood"] = "donuts";

print_r($anotherArray);

echo "<br/><br/>";

$thirdArray = array(
  "mom" => "Annie",
  "dad" => "Jeff",
  "childOne" => "Kaitlyn",
  "childTwo" => "Willa"
);

unset($thirdArray["dad"]);

print_r($thirdArray);

echo sizeof($thirdArray);

?>