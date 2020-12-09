<?php
	include_once('db_header.php');
	if(strcasecmp($_POST['form_action'], 'new_client') == 0){
		if(isset($_POST['street']) || isset($_POST['user'])){
			if(isset($_FILES)){
				$file_tmp_name = $_FILES['photo']['tmp_name'];
				$base_img_path = '/files/img/avatars/';
				$destination = '../..'.$base_img_path.$_FILES['photo']['name'];
				$img_src = $base_img_path.$_FILES['photo']['name'];
				if(move_uploaded_file($file_tmp_name, $destination)){
					$query_img = $mysqli->query("INSERT INTO TB_CLIENTS_IMGS VALUES(NULL, '".$img_src."')");
					unset($_FILES);
				}
				else{
					$query_img = false;
				}
			}
			else{
				$query_img = false;
			}
			if($query_img){}else{echo $mysqli->error;}
			$sql_address = "INSERT INTO TB_ADDRESS VALUES (NULL, '".$_POST['street']."', '".$_POST['neighborhood']."', '".$_POST['city']."', (SELECT CD_ADDRESS_STATE FROM TB_ADDRESS_STATES WHERE DS_ADDRESS_STATE_UF = '".$_POST['state']."'), '".$_POST['complement']."', '".$_POST['zipcode']."')";
			$sql_user = "INSERT INTO TB_CLIENTS VALUES (NULL, '".$_POST['user']."', '".$_POST['email']."', '".password_hash($_POST['password'], PASSWORD_DEFAULT)."', 0, '".$_POST['complete_name']."', '".$_POST['birthdate']."', '".$_POST['cpf']."', '".$_POST['phone']."', (SELECT CD_ADDRESS FROM TB_ADDRESS ORDER BY CD_ADDRESS DESC LIMIT 1), (SELECT CD_CLIENT_IMG FROM TB_CLIENTS_IMGS ORDER BY CD_CLIENT_IMG DESC LIMIT 1))";
			if($query = $mysqli->query($sql_address)){}else{echo $mysqli->error;}
			if($query = $mysqli->query($sql_user)){}else{echo $mysqli->error;}
		}
	}
	if(strcasecmp($_POST['form_action'], 'new_client_message_homepage') == 0){
		if(isset($_SESSION['cd_client'])){
			$sql = "INSERT INTO 
			TB_MESSAGES VALUES 
			(NULL, '".$_SESSION['cd_client']."', (SELECT CD_CLIENT FROM TB_CLIENTS WHERE ST_CLIENT_ADMIN = 1 LIMIT 1), '".$_POST['contact_subject']."', '".$_POST['contact_message']."')";
			if($query = $mysqli->query($sql)){
				echo "salvou";
			}
			else{
				echo "Erro: ".$mysqli->error;
			}
		}
		else{
			echo 'session_unknown';
		}
	}
?>