<?php
	include_once('php/components/header_includes.php');
	if(isset($_SESSION['cd_client'])){
		if($_SESSION['st_client_admin'] == 1){
			if(isset($_GET['page']) == false){
				header('location: /');
			}
			else{
				switch($_GET['page']){
					case 'admin_panel':
						$title = 'Administração';
						$page_path = 'php/admin/panel_admin.php';
					break;
					case 'admin_data':
						$title = 'Seus dados';
						$page_path = 'php/admin/data_admin.php';
					break;
					case 'admin_edit':
						$title = 'Editar dados cadastrais';
						$page_path = 'php/admin/edit_admin.php';
					break;
					case 'admin_new':
						$title = 'Editar dados cadastrais';
						$page_path = 'php/admin/new_admin.php';
					break;
					case 'admin_list':
						$title = 'Lista de administradores';
						$page_path = 'php/admin/list_admin.php';
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