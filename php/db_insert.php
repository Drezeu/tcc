<?php
	session_start();
	include_once('db_connection.php');
	//new_client_db_insertion
	if(strcasecmp($_POST['form_action'], 'new_client') == 0){
		if(isset($_POST['address_street'])){
			$sql = "INSERT INTO TB_ADDRESS VALUES (NULL, '".$_POST['address_street']."', '".$_POST['address_neighborhood']."', '".$_POST['address_city']."', '".$_POST['address_state']."', '".$_POST['address_complement']."', '".$_POST['address_zipcode']."')";
			if($query = $mysqli->query($sql)){
				echo "address";
			}
			else{
				
			}
		}
		if(isset($_POST['general_user'])){
			$sql = "INSERT INTO TB_CLIENTS VALUES (NULL, '".$_POST['general_user']."', '".$_POST['general_email']."', '".$_POST['general_password']."', 0, '".$_POST['personal_complete_name']."', '".$_POST['personal_birthdate']."', '".$_POST['personal_cpf']."', '".$_POST['personal_phone']."', NULL, NULL)";
			if($query = $mysqli->query($sql)){
				echo 'client';
			}
			else{
				
			}
		}
	}
?>