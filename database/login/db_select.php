<?php
	include_once('db_header.php');
	if(strcasecmp($_POST['form_action'], 'login') == 0){
		$sql = "SELECT CD_CLIENT, DS_CLIENT_USER, ST_CLIENT_ADMIN, DS_CLIENT_PASSWORD FROM TB_CLIENTS WHERE (DS_CLIENT_USER = '".$_POST['login']."' OR DS_CLIENT_EMAIL = '".$_POST['login']."')";
		if($query = $mysqli->query($sql)){
			if($mysqli->affected_rows > 0){
				while($obj = $query->fetch_object()){
					if(password_verify($_POST['password'], $obj->DS_CLIENT_PASSWORD)){
						$_SESSION['cd_client'] = $obj->CD_CLIENT;
						$_SESSION['ds_client_user'] = $obj->DS_CLIENT_USER;
						$_SESSION['st_client_admin'] = $obj->ST_CLIENT_ADMIN;
						echo $obj->ST_CLIENT_ADMIN;
					}
					else{
						echo 'password_error';
					}
				}
			}
			else{
				echo 'user_error';
			}
		}
	}
?>