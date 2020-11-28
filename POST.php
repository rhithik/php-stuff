<?php

if ($_POST) {

  $users = array(
    'user1' => 'Jeff',
    'user2' => 'Annie',
    'user3' => 'Jamie'
  );

  $isKnown = false;

  foreach ($users as $value) {

    if ($value == $_POST['name']) {

      $isKnown = true;

    }

  }

  if ($isKnown) {

    echo "Hi there " . $_POST['name'] . "!";

  } else {

    echo "I don't know you.";

  }

}

?>
<form method="post">

	<p>What is your name?</p>

	<input type="text" name="name">

	<input type="submit" value="Submit">

</form>