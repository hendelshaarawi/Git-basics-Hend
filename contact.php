<?php
if(isset($_POST['submit']))}{

	$to = "hendelshaarawi@hotmail.com"; //mijn email
	$from = $_POST['email']; //email verzender
	$first_name = $_POST['name']; //naamveld
	$subject = $_POST['message'];
 
	$message = $first_name . "  "  .  .  " wrote the following:"  .  "\n\n"  . $_POST['message'];

	$headers = "Form: "  . $from;
	mail($to,$subject,$message,$headers);

	echo "Uw bericht is verzonden!";

	}

?>