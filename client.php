<?php
	include_once('php/components/header_includes.php');
	if(isset($_SESSION['cd_client'])){
		if(isset($_GET['page']) == false){
			header('location: index.php');
		}
		else{
			switch($_GET['page']){
				case 'client_data':
					$title = 'Seus dados';
					$page_path = 'php/client/data_client.php';
				break;
				case 'client_favs':
					$title = 'Seus favoritos';
					$page_path = 'php/client/favs_client.php';
				break;
				case 'client_edit':
					$title = 'Editar dados cadastrais';
					$_GET['use_image'] = true;
					$page_path = 'php/client/edit_client.php';
				break;
			}
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
		header('location: index.php');
	}
?>