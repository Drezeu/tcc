<?php
	include_once('db_header.php');
	if(strcasecmp($_POST['form_action'], 'edit_admin') == 0){
		$sql = "SELECT DS_CLIENT_IMG FROM TB_CLIENTS_IMGS WHERE CD_CLIENT_IMG = (SELECT ID_CLIENT_IMG FROM TB_CLIENTS WHERE CD_CLIENT = '".$_SESSION['cd_client']."' AND ST_CLIENT_ADMIN = 1)";
		if($query = $mysqli->query($sql)){
			while($obj = $query->fetch_object()){
				unlink('../..'.$obj->DS_CLIENT_IMG);
			}
		}
		$file_tmp_name = $_FILES['photo']['tmp_name'];
		$base_img_path = '/files/img/avatars/';
		$destination = '../..'.$base_img_path.$_FILES['photo']['name'];
		$img_src = $base_img_path.$_FILES['photo']['name'];
		if(move_uploaded_file($file_tmp_name, $destination)){
			$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$sql =  "UPDATE TB_CLIENTS AS C INNER JOIN TB_ADDRESS AS A INNER JOIN TB_CLIENTS_IMGS AS I ON C.ID_ADDRESS = A.CD_ADDRESS AND C.ID_CLIENT_IMG = I.CD_CLIENT_IMG SET C.DS_CLIENT_USER = '".$_POST['user']."', C.DS_CLIENT_EMAIL = '".$_POST['email']."', C.DS_CLIENT_PASSWORD = '".$password_hash."', C.NM_CLIENT = '".$_POST['complete_name']."', C.DS_CLIENT_BIRTHDATE = '".$_POST['birthdate']."', C.DS_CLIENT_CPF = '".$_POST['cpf']."', C.DS_CLIENT_PHONE = '".$_POST['phone']."', A.DS_ADDRESS_STREET = '".$_POST['street']."', A.DS_ADDRESS_NEIGHBORHOOD = '".$_POST['neighborhood']."', A.DS_ADDRESS_CITY = '".$_POST['city']."', A.ID_ADDRESS_STATE = (SELECT CD_ADDRESS_STATE FROM TB_ADDRESS_STATES WHERE DS_ADDRESS_STATE_UF = '".$_POST['state']."'), A.DS_ADDRESS_COMPLEMENT = '".$_POST['complement']."', A.DS_ADDRESS_ZIPCODE = '".$_POST['zipcode']."', I.DS_CLIENT_IMG = '".$img_src."' WHERE C.CD_CLIENT = '".$_SESSION['cd_client']."' AND C.ST_CLIENT_ADMIN = 1 AND I.CD_CLIENT_IMG = C.ID_CLIENT_IMG";
			if($query = $mysqli->query($sql)){
				$_SESSION['ds_client_user'] = $_POST['user'];
			}
			else{
				echo $mysqli->error;
			}
		}
	}
	if(strcasecmp($_POST['form_action'], 'edit_admin_message') == 0){
		$sql = "UPDATE TB_MESSAGES SET ID_MESSAGE_TO = '".$_POST['contact_to']."', DS_MESSAGE_SUBJECT = '".$_POST['contact_subject']."', DS_MESSAGE = '".$_POST['contact_message']."' WHERE CD_MESSAGE = '".$_POST['message_id']."'";
		if($query = $mysqli->query($sql)){}else{echo $mysqli->error;}
	}
?>