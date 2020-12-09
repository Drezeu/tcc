<?php
	include_once('db_header.php');
	if(strcasecmp($_POST['form_action'], 'data_admin') == 0){
		$sql = "SELECT C.*, A.*, I.*, S.* FROM TB_CLIENTS AS C INNER JOIN TB_ADDRESS AS A INNER JOIN TB_CLIENTS_IMGS AS I INNER JOIN TB_ADDRESS_STATES AS S ON C.ID_ADDRESS = A.CD_ADDRESS AND C.ID_CLIENT_IMG = I.CD_CLIENT_IMG WHERE C.CD_CLIENT = '".$_SESSION['cd_client']."' AND C.ST_CLIENT_ADMIN = 1";
		if($query = $mysqli->query($sql)){
			echo json_encode($query->fetch_object());
		}
		else{
			echo $mysqli->error;
		}
	}
	if(strcasecmp($_POST['form_action'], 'data_admin_list') == 0){
		$sql = "SELECT C.CD_CLIENT, I.DS_CLIENT_IMG, C.NM_CLIENT, C.DS_CLIENT_EMAIL, C.DS_CLIENT_PHONE FROM TB_CLIENTS AS C INNER JOIN TB_CLIENTS_IMGS AS I ON C.ID_CLIENT_IMG = I.CD_CLIENT_IMG WHERE ST_CLIENT_ADMIN = 1";
		if($query = $mysqli->query($sql)){
			$data_return = '';
			while($obj = $query->fetch_object()){
				$data_return .= '<tr>';
				$data_return .= '<th scope="row">'.$obj->CD_CLIENT.'</th>';
				$data_return .= '<td><img class="client_list_img" src="'.$obj->DS_CLIENT_IMG.'" alt="client_img"></td>';
				$data_return .= '<td>'.$obj->NM_CLIENT.'</td>';
				$data_return .= '<td>'.$obj->DS_CLIENT_EMAIL.'</td>';
				$data_return .= '<td>'.$obj->DS_CLIENT_PHONE.'</td>';
				$data_return .= '<td><center><a class="btn btn-warning" disabled>Enviar mensagem</a></center></td>';
				$data_return .= '</tr>';
			}
			echo $data_return;
		}
		else{
			echo $mysqli->error;
		}
	}
	if(strcasecmp($_POST['form_action'], 'admin_message-to_list') == 0){
		$sql = "SELECT CD_CLIENT, NM_CLIENT FROM TB_CLIENTS WHERE ST_CLIENT_ADMIN = 1 AND CD_CLIENT <> '".$_SESSION['cd_client']."'";
		if($query = $mysqli->query($sql)){
			if($mysqli->affected_rows > 0){
				$data_return = '';
				while($obj = $query->fetch_object()){
					$data_return .= '<option value="'.$obj->CD_CLIENT.'">'.$obj->NM_CLIENT.'</option>';
				}
				echo $data_return;
			}
			else{
				echo '<option value="null" disabled selected>Você é o único administrador</option>';
			}
		}
		else{
			echo $mysqli->error;
		}
	}
	if(strcasecmp($_POST['form_action'], 'admin_message_list') == 0){
		$sql = "SELECT M.CD_MESSAGE 'MESSAGE_CODE', CF.NM_CLIENT 'WHO_SENT', CT.NM_CLIENT 'FOR_WHOM', M.DS_MESSAGE_SUBJECT 'SUBJECT', M.DS_MESSAGE 'MESSAGE' FROM TB_MESSAGES AS M INNER JOIN TB_CLIENTS AS CF INNER JOIN TB_CLIENTS AS CT ON M.ID_MESSAGE_FROM = CF.CD_CLIENT AND (M.ID_MESSAGE_TO = CT.CD_CLIENT OR M.ID_MESSAGE_TO IS NULL)";
		if($query = $mysqli->query($sql)){
			$data_return = '';
			while($obj = $query->fetch_object()){
				$data_return .= '<tr>';
				$data_return .= '<th scope="row">'.$obj->MESSAGE_CODE.'</th>';
				$data_return .= '<td>'.$obj->WHO_SENT.'</td>';
				$data_return .= '<td>'.$obj->FOR_WHOM.'</td>';
				$data_return .= '<td>'.$obj->SUBJECT.'</td>';
				$data_return .= '<td>'.$obj->MESSAGE.'</td>';
				$data_return .= '<td><center><a href="message.php?page=admin_message_edit&message_id='.$obj->MESSAGE_CODE.'" class="btn btn-primary">Editar</a></center></td>';
				$data_return .= '<td><center><a href="message.php?page=admin_message_delete&message_id='.$obj->MESSAGE_CODE.'" class="btn btn-danger">Excluir</a></center></td>';
				$data_return .= '</tr>';
			}
			echo $data_return;
		}
		else{
			echo $mysqli->error;
		}
	}
	if(strcasecmp($_POST['form_action'], 'admin_message_self') == 0){
		$sql = "SELECT * FROM TB_MESSAGES WHERE CD_MESSAGE = '".$_POST['message_id']."'";
		if($query = $mysqli->query($sql)){
			echo json_encode($query->fetch_object());
		}
		else{
			echo $mysqli->error;
		}
	}
?>