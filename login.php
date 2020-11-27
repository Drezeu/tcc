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
			Title('Login - Tieta perfumaria');
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
			<div class="row">
				<div class="col-md-12">
					<h1>
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
						</svg>
						Login
					</h1>
				</div>
			</div>
			<hr>
			<?php
				include_once('php/components/login_form.php');
			?>
			<br>
			<div class="row">
				<div class="col-md-12">
					<center>
						<a class="body_link" href="client_new.php">Novo por aqui? Cadastre-se!</a>
					</center>
				</div>
			</div>
			<div class="row">
				<?php
					include_once('php/components/footer.php');
				?>
			</div>
		</div>
		<?php
			$_GET['page_source'] = 'login';
			include_once('php/components/body_scripts.php');
		?>
	</body>
</html>
<?php
	}
?>