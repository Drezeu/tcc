<?php
	session_start();
	include_once('db_connection.php');
	if(strcasecmp($_POST['action'], '') == 0){
		if(isset($_POST[''])){
			$sql =  "UPDATE  SET  =  ";
			if($query = $mysqli->query($sql)){
				
			}
			else{
				
			}
		}
	}
?>