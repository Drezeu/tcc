<?php
	include_once('db_header.php');
	if(strcasecmp($_POST['form_action'], 'carousel_product_data_request') == 0){
		$sql = "SELECT P.NM_PRODUCT, P.DS_PRODUCT, I.DS_PRODUCT_IMG FROM TB_PRODUCTS AS P INNER JOIN TB_PRODUCTS_IMGS AS I ON P.ID_PRODUCT_IMG = I.CD_PRODUCT_IMG WHERE P.ST_CAROUSEL = 1 LIMIT 5";
		if($query = $mysqli->query($sql)){
			$data_return = '';
			while($obj = $query->fetch_object()){
				$data_return .= '
					<div class="carousel-item">
						<img src="'.$obj->DS_PRODUCT_IMG.'" width="1350" height="500">
						<div class="carousel-caption d-none d-md-block">
							<h5>'.$obj->NM_PRODUCT.'</h5>
							<p>'.$obj->DS_PRODUCT.'</p>
						</div>
					</div>
				';
			}
			echo $data_return;
		}
	}
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
				$data_return .= '<td><center><a class="btn btn-primary" href="admin_product.php?page=product_edit&product_id='.$obj->CD_PRODUCT.'">Editar</a></center></td>';
				$data_return .= '<td><center><a class="btn btn-danger" href="admin_product.php?page=product_delete&product_id='.$obj->CD_PRODUCT.'">Deletar</a></center></td>';
				$data_return .= '</tr>';
			}
			echo $data_return;
		}
	}
	if(strcasecmp($_POST['form_action'], 'edit_product') == 0){
		$sql = "SELECT P.CD_PRODUCT, P.NM_PRODUCT, P.DS_PRODUCT, P.VL_PRODUCT, I.DS_PRODUCT_IMG, C.CD_PRODUCT_CATEGORY, C.NM_PRODUCT_CATEGORY FROM TB_PRODUCTS AS P INNER JOIN TB_PRODUCTS_CATEGORIES AS C INNER JOIN TB_PRODUCTS_IMGS AS I ON P.ID_PRODUCT_CATEGORY = C.CD_PRODUCT_CATEGORY AND P.ID_PRODUCT_IMG = I.CD_PRODUCT_IMG WHERE CD_PRODUCT = '".$_POST['product_id']."'";
		if($query = $mysqli->query($sql)){
			echo json_encode($query->fetch_object());
		}
	}
	if(strcasecmp($_POST['form_action'], 'self_product_data_request') == 0){
		$sql = "SELECT P.CD_PRODUCT, P.NM_PRODUCT, P.DS_PRODUCT, P.VL_PRODUCT, I.DS_PRODUCT_IMG, C.NM_PRODUCT_CATEGORY FROM TB_PRODUCTS AS P INNER JOIN TB_PRODUCTS_CATEGORIES AS C INNER JOIN TB_PRODUCTS_IMGS AS I ON P.ID_PRODUCT_CATEGORY = C.CD_PRODUCT_CATEGORY AND P.ID_PRODUCT_IMG = I.CD_PRODUCT_IMG WHERE CD_PRODUCT = '".$_POST['product_id']."'";
		if($query = $mysqli->query($sql)){
			$data_return = json_encode($query->fetch_object());
			echo $data_return;
		}
	}
	if(strcasecmp($_POST['form_action'], 'all_product_data_request') == 0){
		$sql = "SELECT P.CD_PRODUCT, P.NM_PRODUCT, P.VL_PRODUCT, I.DS_PRODUCT_IMG FROM TB_PRODUCTS AS P INNER JOIN TB_PRODUCTS_IMGS AS I ON P.ID_PRODUCT_IMG = I.CD_PRODUCT_IMG";
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
	}
?>
