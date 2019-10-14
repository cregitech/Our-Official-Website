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

if ($_POST['submit']) {
        if (mail($to, $fname, $output."\n\n***This message has been sent from Cregitech.com", $headers)) { 
            echo '<p>Your message has been sent!</p>';
        } else { 
            echo '<p>Something went wrong, go back and try again!</p>'; 
        }
    }

?>
