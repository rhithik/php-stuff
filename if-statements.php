<?php

$user = "Annie";

if ($user == "Jeff") {

  echo "Hello, Jeff!";

} else {

  echo "I don't know you...";

}

echo "<br><br>";

$age = 18;

if ($age >= 18) {

  echo "You may proceed.";

} else {

  echo "You're not old enough to participate.";

}

echo "<br><br>";

if ($age >= 18 && $user == "Jeff") {

  echo "Hi, $user. Proceed.";

} else {

  echo "Unknown minor. No admittance.";

}

echo "<br><br>";

if ($age >= 18 || $user == "Jeff") {

  echo "Hi, $user. Proceed.";

} else {

  echo "Unknown minor. No admittance.";

}

?>