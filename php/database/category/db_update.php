<?php
	include_once('db_header.php');
	if(strcasecmp($_POST['form_action'], 'edit_category') == 0){
		$sql = "UPDATE TB_PRODUCTS_CATEGORIES SET NM_PRODUCT_CATEGORY = '".$_POST['category_name']."', DS_PRODUCT_CATEGORY = '".$_POST['category_desc']."' WHERE CD_PRODUCT_CATEGORY = '".$_POST['category_id']."'";
		if($query = $mysqli->query($sql)){
		}
	}
?>