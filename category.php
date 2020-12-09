<?php
	include_once('php/components/header_includes.php');
	if(isset($_GET['page']) == false){
		header('location: /');
	}
	else{
		switch($_GET['page']){
			case 'all_category':
				$title = 'Todas as categorias de produtos';
				$page_path = 'php/category/list_category_all.php';
			break;
			case 'self_category':
				$title = 'Categoria de produto';
				$category_id = $_GET['category_id'];
				$page_path = 'php/category/self_category.php';
			break;
			default:
				header('location: /');
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
			$_GET['use_category'] = true;
			include_once('php/components/body_scripts.php');
		?>
	</body>
</html>