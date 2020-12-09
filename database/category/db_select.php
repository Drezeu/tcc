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
				$data_return .= '<td><center><a class="btn btn-primary" href="admin_category.php?page=category_edit&category_id='.$obj->CD_PRODUCT_CATEGORY.'">Editar</a></center></td>';
				$data_return .= '<td><center><a class="btn btn-danger" href="admin_category.php?page=category_delete&category_id='.$obj->CD_PRODUCT_CATEGORY.'">Deletar</a></center></td>';
				$data_return .= '</tr>';
			}
			echo $data_return;
		}
	}
	if(strcasecmp($_POST['form_action'], 'edit_category') == 0){
		$sql = "SELECT * FROM TB_PRODUCTS_CATEGORIES WHERE CD_PRODUCT_CATEGORY = '".$_POST['category_id']."'";
		if($query = $mysqli->query($sql)){
			echo json_encode($query->fetch_object());
		}
	}
	if(strcasecmp($_POST['form_action'], 'category_menu_list') == 0){
		$sql = "SELECT CD_PRODUCT_CATEGORY, NM_PRODUCT_CATEGORY FROM TB_PRODUCTS_CATEGORIES LIMIT 5";
		if($query = $mysqli->query($sql)){
			$data_return = '';
			while($obj = $query->fetch_object()){
				$data_return .= '<a class="dropdown-item" href="category.php?page=self_category&category_id='.$obj->CD_PRODUCT_CATEGORY.'">'.$obj->NM_PRODUCT_CATEGORY.'</a>';
			}
			$data_return .= '<div class="dropdown-divider"></div>';
			$data_return .= '<a class="dropdown-item" href="category.php?page=all_category">Todas as categorias</a>';
			echo $data_return;
		}
		else{
			echo $mysqli->error;
		}
	}
	if(strcasecmp($_POST['form_action'], 'data_category_page_all_list') == 0){
		$sql = "SELECT CD_PRODUCT_CATEGORY, NM_PRODUCT_CATEGORY FROM TB_PRODUCTS_CATEGORIES";
		if($query = $mysqli->query($sql)){
			$data_return = '';
			while($obj = $query->fetch_object()){
				$data_return .= '<a class="link body_link" href="category.php?page=self_category&category_id='.$obj->CD_PRODUCT_CATEGORY.'">'.$obj->NM_PRODUCT_CATEGORY.'</a>';
			}
			echo $data_return;
		}
	}
	if(strcasecmp($_POST['form_action'], 'data_category_page_self_list') == 0){
		$sql = "SELECT P.CD_PRODUCT, P.NM_PRODUCT, P.VL_PRODUCT, I.DS_PRODUCT_IMG FROM TB_PRODUCTS AS P INNER JOIN TB_PRODUCTS_IMGS AS I ON P.ID_PRODUCT_IMG = I.CD_PRODUCT_IMG WHERE P.ID_PRODUCT_CATEGORY = '".$_POST['category_id']."'";
		if($query = $mysqli->query($sql)){
			$data_return = '';
			while($obj = $query->fetch_object()){
				$data_return .= "
					<div class='col-sm-4'>
						<div class='card' style='width: auto;'>
							<img class='card-img-top' src='".$obj->DS_PRODUCT_IMG."' alt='".$obj->NM_PRODUCT."'>
							<div class='card-body'>
								<h5 class='card-title'>".$obj->NM_PRODUCT."</h5>
								<p class='card-text'>R$".$obj->VL_PRODUCT."</p>
								<a href='product.php?page=self_product&product_id=".$obj->CD_PRODUCT."' class='btn btn-outline-dark'>Veja mais!</a>
							</div>
						</div>
					</div>
				";
			}
			echo $data_return;
		}
		else{
			echo $mysqli->error;
		}
	}
?>