<?php
	include_once('db_header.php');
	if(strcasecmp($_POST['form_action'], 'data_category_list') == 0){
		$sql = "SELECT * FROM TB_PRODUCTS_CATEGORIES";
		if($query = $mysqli->query($sql)){
			$data_return = '';
			while($obj = $query->fetch_object()){
				$data_return .= '<tr>';
				$data_return .= '<th scope="row">'.$obj->CD_PRODUCT_CATEGORY.'</th>';
				$data_return .= '<td>'.$obj->NM_PRODUCT_CATEGORY.'</td>';
				$data_return .= '<td>'.$obj->DS_PRODUCT_CATEGORY.'</td>';
				$data_return .= '<td><center><a class="btn btn-primary" href="category.php?page=category_edit&category_id='.$obj->CD_PRODUCT_CATEGORY.'">Editar</a></center></td>';
				$data_return .= '<td><center><a class="btn btn-danger" href="category.php?page=category_delete&category_id='.$obj->CD_PRODUCT_CATEGORY.'">Deletar</a></center></td>';
				$data_return .= '</tr>';
			}
			echo $data_return;
		}
	}
	if(strcasecmp($_POST['form_action'], 'edit_category') == 0){
		$sql = "SELECT * FROM TB_PRODUCTS_CATEGORIES WHERE CD_PRODUCT_CATEGORY = '".$_POST['category_id']."'";
		if($query = $mysqli->query($sql)){
			$data_return = '';
			while($obj = $query->fetch_object()){
				$data_return .= $obj->CD_PRODUCT_CATEGORY;
				$data_return .= "✁";
				$data_return .= $obj->NM_PRODUCT_CATEGORY;
				$data_return .= "✁";
				$data_return .= $obj->DS_PRODUCT_CATEGORY;
			}
			echo $data_return;
		}
	}
?>