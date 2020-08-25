<?php
	if(strcasecmp($_POST['form'], 'mail') == 0){
		ini_set('display_errors', 1);
		error_reporting(E_ALL);
		$to = "otavio21072002@gmail.com";
		$from = $_POST['from'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$headers = "De:". $from;
		mail($to, $subject, $message, $headers);
	}
	else{
		header('location: ../index.php');
	}
?>