<?php
	include_once('php/components/header_includes.php');
	if(isset($_GET['page']) == false){
		header('location: /');
	}
	else{
		switch($_GET['page']){
			case 'all_product':
				$title = 'Todos os produtos';
				$page_path = 'php/product/list_product_all.php';
			break;
			case 'self_product':
				$title = 'Produto';
				$product_id = $_GET['product_id'];
				$page_path = 'php/product/self_product.php';
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
			include_once('php/components/body_scripts.php');
		?>
	</body>
</html>