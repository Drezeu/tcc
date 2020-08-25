<?php 
	session_start();
	include_once('php/db_connection.php');
	$mysqli->close();
	session_destroy();
	header('location: index.php');
?>