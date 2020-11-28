<?php

// basic email stuff
$headers = "From: Jeff McHale <rhithiktheawesome@gmail.com>";

$emailTo = "astucker23@yahoo.com";

$subject = "Shopping List";

$body = "I need: 1x 25ft indoor/outdoor extension cord, 4x 4ft or 6ft indoor extension cords, 1x 25lb bag of dog food. \r\nThank you!";

if (mail($emailTo, $subject, $body, $headers))

  echo "The email was sent successfully!";

else

  echo "The email could not be sent.";



