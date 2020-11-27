<?php
	include_once('php/components/header_includes.php');
	if(isset($_SESSION['cd_client'])){
		header('location: index.php');
	}
	else{
?>
<!DOCTYPE html>
<html lang="pt">
	<head>
		<?php
			include_once("php/components/head.php");
			Title('Cadastro de novo cliente');
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
				include_once('php/client/new_client.php');
			?>
			<br>
			<div class="row">
				<?php
					include_once('php/components/footer.php');
				?>
			</div>
		</div>
		<?php
			$_GET['page_source'] = 'new_client';
			include_once('php/components/body_scripts.php');
		?>
	</body>
</html>
<?php
	}
?>