<?php
	include_once('db_header.php');
	if(strcasecmp($_POST['form_action'], 'address_states_list_request') == 0){
		$sql = "SELECT * FROM TB_ADDRESS_STATES";
		if($query = $mysqli->query($sql)){
			$data_return = '<option value="null" disabled selected>Selecione um estado</option>';
			while($obj = $query->fetch_object()){
				$data_return .= '<option value="'.$obj->DS_ADDRESS_STATE_UF.'">'.$obj->NM_ADDRESS_STATE.'</option>';
			}
			echo $data_return;
		}
	}
	if(strcasecmp($_POST['form_action'], 'data_client') == 0){
		$sql = "SELECT C.*, A.*, S.*, I.* FROM TB_CLIENTS AS C INNER JOIN TB_ADDRESS AS A INNER JOIN TB_ADDRESS_STATES AS S INNER JOIN TB_CLIENTS_IMGS AS I ON C.ID_ADDRESS = A.CD_ADDRESS AND C.ID_CLIENT_IMG = I.CD_CLIENT_IMG AND A.ID_ADDRESS_STATE = S.CD_ADDRESS_STATE WHERE C.CD_CLIENT = '".$_SESSION['cd_client']."'";
		if($query = $mysqli->query($sql)){
			echo json_encode($query->fetch_object());
		}
	}
?>