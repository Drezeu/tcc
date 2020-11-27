<?php
	include_once('db_header.php');
	if(strcasecmp($_POST['form_action'], 'data_admin') == 0){
		$sql = "SELECT C.*, A.*, I.* FROM TB_CLIENTS AS C INNER JOIN TB_ADDRESS AS A INNER JOIN TB_CLIENTS_IMGS AS I ON C.ID_ADDRESS = A.CD_ADDRESS AND C.ID_CLIENT_IMG = I.CD_CLIENT_IMG WHERE C.CD_CLIENT = '".$_SESSION['cd_client']."' AND C.ST_CLIENT_ADMIN = 1";
		if($query = $mysqli->query($sql)){
			while($obj = $query->fetch_object()){
				$data_return = "";
				$data_return .= $obj->CD_CLIENT;
				$data_return .= "✁";
				$data_return .= $obj->DS_CLIENT_USER;
				$data_return .= "✁";
				$data_return .= $obj->DS_CLIENT_EMAIL;
				$data_return .= "✁";
				//$data_return .= $obj->DS_CLIENT_PASSWORD;
				//$data_return .= "✁";
				//$data_return .= $obj->ST_CLIENT_ADMIN;
				//$data_return .= "✁";
				$data_return .= $obj->NM_CLIENT;
				$data_return .= "✁";
				$data_return .= $obj->DS_CLIENT_BIRTHDATE;
				$data_return .= "✁";
				$data_return .= $obj->DS_CLIENT_CPF;
				$data_return .= "✁";
				$data_return .= $obj->DS_CLIENT_PHONE;
				$data_return .= "✁";
				//$data_return .= $obj->ID_ADDRESS;
				//$data_return .= "✁";
				//$data_return .= $obj->ID_DS_IMG;
				//$data_return .= "✁";
				//$data_return .= $obj->CD_ADDRESS;
				//$data_return .= "✁";
				$data_return .= $obj->DS_ADDRESS_STREET;
				$data_return .= "✁";
				$data_return .= $obj->DS_ADDRESS_NEIGHBORHOOD;
				$data_return .= "✁";
				$data_return .= $obj->DS_ADDRESS_CITY;
				$data_return .= "✁";
				$data_return .= $obj->DS_ADDRESS_STATE;
				$data_return .= "✁";
				$data_return .= $obj->DS_ADDRESS_COMPLEMENT;
				$data_return .= "✁";
				$data_return .= $obj->DS_ADDRESS_ZIPCODE;
				//$data_return .= "✁";
				//$data_return .= $obj->CD_CLIENT_IMG;
				$data_return .= "✁";
				$data_return .= $obj->DS_CLIENT_IMG;
				echo $data_return;
			}
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
				$data_return .= '<td><center><a class="btn btn-warning" href="#">Enviar mensagem</a></center></td>';
				$data_return .= '</tr>';
			}
			echo $data_return;
		}
		else{
			echo $mysqli->error;
		}
	}
?>