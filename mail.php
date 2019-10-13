<?php

//Taking all values
$fname 		= $_POST['fname'];
$lname 		= $_POST['lname'];
$email 		= $_POST['email'];
$subject 	= $_POST['subject'];
$msg 		= $_POST['message'];
$output 	= "Name: ".$fname.$lname."\n\nSubject: ".$subject."\n\nMessage: ".$msg;

$to 		= 'constancejco@gmail.com';
$headers	= 'FROM: "'.$email.'"';

$send		= mail($to, $fname, $output."\n\n***This message has been sent from Cregitech.com", $headers);

?>
