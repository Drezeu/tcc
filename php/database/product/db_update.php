<?php
	include_once('db_header.php');
	if(strcasecmp($_POST['form_action'], 'edit_product') == 0){
		$sql = "SELECT DS_PRODUCT_IMG FROM TB_PRODUCTS_IMGS WHERE CD_PRODUCT_IMG = (SELECT ID_PRODUCT_IMG FROM TB_PRODUCTS WHERE CD_PRODUCT = '".$_POST['product_id']."')";
		if($query = $mysqli->query($sql)){
			while($obj = $query->fetch_object()){
				unlink('../../..'.$obj->DS_PRODUCT_IMG);
			}
		}
		$file_tmp_name = $_FILES['photo']['tmp_name'];
		$base_img_path = '/img/products/';
		$destination = '../../..'.$base_img_path.$_FILES['photo']['name'];
		$img_src = $base_img_path.$_FILES['photo']['name'];
		if(move_uploaded_file($file_tmp_name, $destination)){
			$sql = "UPDATE TB_PRODUCTS AS P INNER JOIN TB_PRODUCTS_IMGS AS I ON P.ID_PRODUCT_IMG = I.CD_PRODUCT_IMG SET P.NM_PRODUCT = '".$_POST['product_name']."', P.DS_PRODUCT = '".$_POST['product_desc']."', P.VL_PRODUCT = '".$_POST['product_val']."', P.ID_PRODUCT_CATEGORY = '".$_POST['product_cat']."', I.DS_PRODUCT_IMG = '".$img_src."' WHERE P.CD_PRODUCT = '".$_POST['product_id']."' AND P.ID_PRODUCT_IMG = I.CD_PRODUCT_IMG";
			if($query = $mysqli->query($sql)){}else{}
		}
	}
?>