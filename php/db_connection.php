<?php
	$server = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'db_tieta_perfumaria';
	$mysqli = new mysqli($server, $user, $password, $database);
	$mysqli->set_charset('utf8');
	if(mysqli_connect_errno()) trigger_error(mysqli_connect_error());
?>