<?php
	include_once('db_header.php');
	if(strcasecmp($_POST['form_action'], 'new_category') == 0){
		$sql = "INSERT INTO TB_PRODUCTS_CATEGORIES VALUES (NULL, '".$_POST['category_name']."' , '".$_POST['category_desc']."')";
		if($query = $mysqli->query($sql)){}else{}
	}
?>