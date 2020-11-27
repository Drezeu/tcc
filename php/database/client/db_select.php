<?php
	include_once('db_header.php');
	if(strcasecmp($_POST['form_action'], 'data_client') == 0){
		$sql = "SELECT C.*, A.*, I.* FROM TB_CLIENTS AS C INNER JOIN TB_ADDRESS AS A INNER JOIN TB_CLIENTS_IMGS AS I ON C.ID_ADDRESS = A.CD_ADDRESS AND C.ID_CLIENT_IMG = I.CD_CLIENT_IMG WHERE C.CD_CLIENT = '".$_SESSION['cd_client']."'";
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
?>