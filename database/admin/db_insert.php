<?php
	include_once('db_header.php');
	if(strcasecmp($_POST['form_action'], 'new_admin') == 0){
		if(isset($_FILES)){
			$file_tmp_name = $_FILES['photo']['tmp_name'];
			$base_img_path = '/files/img/avatars/';
			$destination = '../..'.$base_img_path.$_FILES['photo']['name'];
			$img_src = $base_img_path.$_FILES['photo']['name'];
			if(move_uploaded_file($file_tmp_name, $destination)){
				$sql = "INSERT INTO TB_CLIENTS_IMGS VALUES(NULL, '".$img_src."')";
				if($query = $mysqli->query($sql)){
					unset($_FILES);
				}
				else{
					echo 'image upload error';
				}
			}
		}
		if(isset($_POST['street'])){
			$sql = "INSERT INTO TB_ADDRESS VALUES (NULL, '".$_POST['street']."', '".$_POST['neighborhood']."', '".$_POST['city']."', (SELECT CD_ADDRESS_STATE FROM TB_ADDRESS_STATES WHERE DS_ADDRESS_STATE_UF = '".$_POST['state']."'), '".$_POST['complement']."', '".$_POST['zipcode']."')";
			if($query = $mysqli->query($sql)){}
			else{
				echo 'database_client_address_insert_error';
			}
		}
		if(isset($_POST['user'])){
			$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$sql = "INSERT INTO TB_CLIENTS VALUES (NULL, '".$_POST['user']."', '".$_POST['email']."', '".$password_hash."', 1, '".$_POST['complete_name']."', '".$_POST['birthdate']."', '".$_POST['cpf']."', '".$_POST['phone']."', (SELECT CD_ADDRESS FROM TB_ADDRESS ORDER BY CD_ADDRESS DESC LIMIT 1), (SELECT CD_CLIENT_IMG FROM TB_CLIENTS_IMGS ORDER BY CD_CLIENT_IMG DESC LIMIT 1))";
			if($query = $mysqli->query($sql)){}
			else{
				echo 'database_client_data_insert_error';
			}
		}
	}
	if(strcasecmp($_POST['form_action'], 'new_admin_to_admin_message') == 0){
		$sql = "INSERT INTO TB_MESSAGES VALUES (NULL, '".$_SESSION['cd_client']."', '".$_POST['contact_to']."', '".$_POST['contact_subject']."', '".$_POST['contact_message']."')";
		if($query = $mysqli->query($sql)){}else{echo $mysqli->error;}
	}
	if(strcasecmp($_POST['form_action'], 'new_admin_to_everyone_message') == 0){
		$sql = "INSERT INTO TB_MESSAGES VALUES (NULL, '".$_SESSION['cd_client']."', NULL, '".$_POST['contact_subject']."', '".$_POST['contact_message']."')";
		if($query = $mysqli->query($sql)){}else{echo $mysqli->error;}
	}
?>