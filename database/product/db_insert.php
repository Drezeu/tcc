<?php
	include_once('db_header.php');
	if(strcasecmp($_POST['form_action'], 'new_product') == 0){
		if(isset($_FILES)){
			$file_tmp_name = $_FILES['photo']['tmp_name'];
			$base_img_path = '/files/img/products/';
			$destination = '../..'.$base_img_path.$_FILES['photo']['name'];
			$img_src = $base_img_path.$_FILES['photo']['name'];
			if(move_uploaded_file($file_tmp_name, $destination)){
				$sql = "INSERT INTO TB_PRODUCTS_IMGS VALUES(NULL, '".$img_src."')";
				if($query = $mysqli->query($sql)){
					unset($_FILES);
				}
				else{
					echo 'image upload error';
				}
			}
		}
		if(isset($_POST['product_name'])){
			$sql = "INSERT INTO TB_PRODUCTS VALUES (NULL, '".$_POST['product_name']."', '".$_POST['product_desc']."', '".$_POST['product_val']."', '".$_POST['product_cat']."', (SELECT CD_PRODUCT_IMG FROM TB_PRODUCTS_IMGS ORDER BY CD_PRODUCT_IMG DESC LIMIT 1))";
			if($query = $mysqli->query($sql)){}
			else{
				echo $mysqli->error;
			}
		}
	}
?>