<?php
	session_start();
	include_once('db_connection.php');
	if(strcasecmp($_POST['form_action'], 'login_client') == 0){
		if(isset($_POST['login'])){
			$sql = "SELECT CD_CLIENT, DS_CLIENT_USER, ST_CLIENT_ADMIN FROM TB_CLIENTS WHERE (DS_CLIENT_USER = '".$_POST['login']."' OR DS_CLIENT_EMAIL = '".$_POST['login']."') AND DS_CLIENT_PASSWORD = '".$_POST['password']."'";
			if($query = $mysqli->query($sql)){
				while($obj = $query->fetch_object()){
					$_SESSION['cd_client'] = $obj->CD_CLIENT;
					$_SESSION['ds_client_user'] = $obj->DS_CLIENT_USER;
					$_SESSION['st_client_admin'] = $obj->ST_CLIENT_ADMIN;
					echo $obj->ST_CLIENT_ADMIN;
				}
			}
			else{

			}
		}
	}
?>