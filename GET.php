<?php

if (is_numeric($_GET['number']) && $_GET['number'] > 0 && $_GET['number'] == round($_GET['number'], 0)) {

  $i = 2;

  $isPrime = true;

  while ($i < $_GET['number']) {

    if ($_GET['number'] % $i == 0) {

      //number is not prime!
      $isPrime = false;

    }

    $i++;

  }

  if ($isPrime) {

    echo "<p>" . $i . " is a prime number!</p>";

  } else {

    echo "<p>" . $i . " is not a prime number!</p>";

  }

} else if ($_GET) {

  // user submitted non-positive whole number
  echo "<p>Please enter a positive whole number.</p>";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Document</title>
</head>
<body>
<p>Please enter a whole number:</p>
<form action="">
	<input type="text" name="number"/>

	<input type="submit" value="Go!"/>
</form>
</body>
</html>
