<?php
	include_once('php/components/header_includes.php');
	if(isset($_SESSION['cd_client'])){
		if($_SESSION['st_client_admin'] == 1){
			if(isset($_GET['page']) == false){
				header('location: admin.php?status=admin_panel');
			}
			else{
				switch($_GET['page']){
					case 'category_new':
						$title = 'Nova categoria';
						$page_path = 'php/category/new_category.php';
					break;
					case 'category_data_list':
						$title = 'Lista de  categorias';
						$page_path = 'php/category/data_category.php';
					break;
					case 'category_edit':
						$title = 'Editar categoria';
						$category_id = $_GET['category_id'];
						$page_path = 'php/category/edit_category.php';
					break;
					case 'category_delete':
						$category_id = $_GET['category_id'];
						$page_path = 'php/category/delete_category.php';
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