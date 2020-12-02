<?php




	
	if (!empty($_POST['email'])){

	$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);}
	
	if (!empty($_POST['notes'])){

	$notes = filter_var($_POST['notes'], FILTER_SANITIZE_STRING);}
	
	if (!empty($_POST['name'])){

	$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);}



if (!empty($_POST['rawmessage'])){

	$rawmessage = filter_var($_POST['rawmessage'], FILTER_SANITIZE_STRING);}
	
$message="Problem Report from: " . $name . "\r\n";
	
	$message=$message . "Email: " . $email  . "\r\n";
	
	
	$message=$message . "Notes: " . $notes .  "\r\n";


$rawmessage = str_replace("&#39;", "'", $rawmessage);




	
		$message = $message . $rawmessage;


	
	
	$to      = 'your_primo_admin@institution.edu'; //change to your Primo admin.
$subject = 'Problem Report';




$headers = "From:" .   $email . "\r\n" .
    "Reply-To:" .  $email  . "\r\n" .
    "X-Mailer: PHP/". phpversion();

//echo $headers;

mail($to, $subject, $message, $headers);
	
	echo "Thank you for submitting this problem report.";
	
	


?>


