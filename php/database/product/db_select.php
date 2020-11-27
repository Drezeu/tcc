<?php
	include_once('db_header.php');
	if(strcasecmp($_POST['form_action'], 'category_list') == 0){
		$sql = "SELECT CD_PRODUCT_CATEGORY, NM_PRODUCT_CATEGORY FROM TB_PRODUCTS_CATEGORIES";
		if($query = $mysqli->query($sql)){
			$data_return = '';
			while($obj = $query->fetch_object()){
				$data_return .= '<option value="'.$obj->CD_PRODUCT_CATEGORY.'">'.$obj->NM_PRODUCT_CATEGORY.'</option>';
			}
			echo $data_return;
		}
	}
	if(strcasecmp($_POST['form_action'], 'data_product_list') == 0){
		$sql = "SELECT P.CD_PRODUCT, I.DS_PRODUCT_IMG, P.NM_PRODUCT, C.NM_PRODUCT_CATEGORY, P.DS_PRODUCT, P.VL_PRODUCT FROM TB_PRODUCTS AS P INNER JOIN TB_PRODUCTS_CATEGORIES AS C INNER JOIN TB_PRODUCTS_IMGS AS I ON P.ID_PRODUCT_CATEGORY = C.CD_PRODUCT_CATEGORY AND P.ID_PRODUCT_IMG = I.CD_PRODUCT_IMG";
		if($query = $mysqli->query($sql)){
			$data_return = '';
			while($obj = $query->fetch_object()){
				$data_return .= '<tr>';
				$data_return .= '<th scope="row">'.$obj->CD_PRODUCT.'</th>';
				$data_return .= '<td><img class="product_list_img" src="'.$obj->DS_PRODUCT_IMG.'" alt="product_img"></td>';
				$data_return .= '<td>'.$obj->NM_PRODUCT.'</td>';
				$data_return .= '<td>'.$obj->NM_PRODUCT_CATEGORY.'</td>';
				$data_return .= '<td>'.$obj->DS_PRODUCT.'</td>';
				$data_return .= '<td>R$ '.$obj->VL_PRODUCT.'</td>';
				$data_return .= '<td><center><a class="btn btn-primary" href="product.php?page=product_edit&product_id='.$obj->CD_PRODUCT.'">Editar</a></center></td>';
				$data_return .= '<td><center><a class="btn btn-danger" href="product.php?page=product_delete&product_id='.$obj->CD_PRODUCT.'">Deletar</a></center></td>';
				$data_return .= '</tr>';
			}
			echo $data_return;
		}
	}
	if(strcasecmp($_POST['form_action'], 'edit_product') == 0){
		$sql = "SELECT P.CD_PRODUCT, P.NM_PRODUCT, P.DS_PRODUCT, P.VL_PRODUCT, I.DS_PRODUCT_IMG, C.CD_PRODUCT_CATEGORY, C.NM_PRODUCT_CATEGORY FROM TB_PRODUCTS AS P INNER JOIN TB_PRODUCTS_CATEGORIES AS C INNER JOIN TB_PRODUCTS_IMGS AS I ON P.ID_PRODUCT_CATEGORY = C.CD_PRODUCT_CATEGORY AND P.ID_PRODUCT_IMG = I.CD_PRODUCT_IMG WHERE CD_PRODUCT = '".$_POST['product_id']."'";
		if($query = $mysqli->query($sql)){
			$data_return = '';
			while($obj = $query->fetch_object()){
				$data_return .= $obj->CD_PRODUCT;
				$data_return .= "✁";
				$data_return .= $obj->NM_PRODUCT;
				$data_return .= "✁";
				$data_return .= $obj->DS_PRODUCT;
				$data_return .= "✁";
				$data_return .= $obj->VL_PRODUCT;
				$data_return .= "✁";
				$data_return .= $obj->DS_PRODUCT_IMG;
				$data_return .= "✁";
				$data_return .= $obj->CD_PRODUCT_CATEGORY;
				$data_return .= "✁";
				$data_return .= $obj->NM_PRODUCT_CATEGORY;
			}
			echo $data_return;
		}
	}
?>