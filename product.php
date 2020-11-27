<?php
	include_once('php/components/header_includes.php');
	if(isset($_SESSION['cd_client'])){
		if($_SESSION['st_client_admin'] == 1){
			if(isset($_GET['page']) == false){
				header('location: admin.php?status=admin_panel');
			}
			else{
				switch($_GET['page']){
					case 'product_new':
						$title = 'Novo produto';
						$page_path = 'php/product/new_product.php';
					break;
					case 'product_data_list':
						$title = 'Lista de produtos';
						$page_path = 'php/product/data_product.php';
					break;
					case 'product_edit':
						$title = 'Editar de produto';
						$product_id = $_GET['product_id'];
						$page_path = 'php/product/edit_product.php';
					break;
					case 'product_delete':
						$product_id = $_GET['product_id'];
						$page_path = 'php/product/delete_product.php';
					break;
				}
			}
		}
		else{
			header('location: /');
		}
?>
<!DOCTYPE html>
<html lang="pt">
	<head>
		<?php
			include_once("php/components/head.php");
			Title($title);
		?>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<?php
					include_once('php/components/menu.php');
				?>
			</div>
			<br>
			<?php
				include_once($page_path);
			?>
			<br>
			<div class="row">
				<?php
					include_once('php/components/footer.php');
				?>
			</div>
		</div>
		<?php
			include_once('php/components/body_scripts.php');
		?>
	</body>
</html>
<?php
	}
	else{
		header('location: admin_login.php');
	}
?>