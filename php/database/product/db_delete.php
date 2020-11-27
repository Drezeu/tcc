<?php
	include_once('db_header.php');
	if(strcasecmp($_POST['form_action'], 'delete_product') == 0){
		$sql = "SELECT DS_PRODUCT_IMG FROM TB_PRODUCTS_IMGS WHERE CD_PRODUCT_IMG = (SELECT ID_PRODUCT_IMG FROM TB_PRODUCTS WHERE CD_PRODUCT = '".$_POST['product_id']."')";
		if($query = $mysqli->query($sql)){
			while($obj = $query->fetch_object()){
				unlink('../../..'.$obj->DS_PRODUCT_IMG);
			}
		}
		$sql = "DELETE P, I FROM TB_PRODUCTS AS P INNER JOIN TB_PRODUCTS_IMGS AS I ON P.ID_PRODUCT_IMG = I.CD_PRODUCT_IMG WHERE P.CD_PRODUCT = '".$_POST['product_id']."'";
		if($query = $mysqli->query($sql)){
		}
		else{
			echo $mysqli->error;
		}
	}
?>