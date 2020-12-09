<?php
	include_once('db_header.php');
	if(strcasecmp($_POST['form_action'], 'delete_category') == 0){
		$sql = "DELETE FROM TB_PRODUCTS_CATEGORIES WHERE CD_PRODUCT_CATEGORY = '".$_POST['category_id']."'";
		if($query = $mysqli->query($sql)){
		}
		else{
			echo $mysqli->error;
		}
	}
?>