<?php 
	session_start();
	include_once('../database/db_connection.php');
	$mysqli->close();
	session_destroy();
	header('location: ../index.php');
?>