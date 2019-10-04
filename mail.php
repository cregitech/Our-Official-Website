<?php

//Taking all values
$email 		= $_POST['email'];
$output 	= "I want to be informed when Cregitech relaunches. This is my email: ".$email."\n Thanks. Please contact me soon.";

$to 		= ' cregitech@gmail.com';
$headers	= 'FROM: "'.$email.'"';

$send		= mail($to, $email, $output."\n\n***This message has been sent from Cregitech.com by: ", $headers);