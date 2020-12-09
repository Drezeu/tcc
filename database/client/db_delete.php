<?php
	include_once('db_header.php');
	if(strcasecmp($_POST['form_action'], 'delete_client') == 0){
		$sql = "SELECT DS_CLIENT_IMG FROM TB_CLIENTS_IMGS WHERE CD_CLIENT_IMG = (SELECT ID_CLIENT_IMG FROM TB_CLIENTS WHERE CD_CLIENT = '".$_SESSION['cd_client']."')";
		if($query = $mysqli->query($sql)){
			while($obj = $query->fetch_object()){
				unlink('../..'.$obj->DS_CLIENT_IMG);
			}
		}
		$sql = "DELETE C, A, I FROM TB_CLIENTS AS C INNER JOIN TB_ADDRESS AS A INNER JOIN TB_CLIENTS_IMGS AS I ON C.ID_ADDRESS = A.CD_ADDRESS AND C.ID_CLIENT_IMG = I.CD_CLIENT_IMG WHERE C.CD_CLIENT = '".$_SESSION['cd_client']."'";
		if($query = $mysqli->query($sql)){
			session_unset();
		}
		else{}
	}
?>