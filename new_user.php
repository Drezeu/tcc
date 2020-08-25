<?php
	session_start();
	include_once('php/db_connection.php');
	if(isset($_SESSION['user'])){
		header('location: index.php');
	}
	else{
?>
<!DOCTYPE html>
<html lang="pt">
	<head>
		<?php
			include_once("php/head.php");
			Title('Novo - Tieta perfumaria');
		?>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<?php
					include_once('php/menu.php');
				?>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<center>
						<h1>
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
							</svg>
							Novo cliente
						</h1>
					</center>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<form class="form form-group">
						<div class="row">
							<div class="col-md-6">
								<label for="name"><strong>Nome:</strong></label>
								<input class="form-control" type="text" name="name" id="name" placeholder="Tieta Perfumaria" required="required">
							</div>
							<div class="col-md-6">
								<label for="email"><strong>Email:</strong></label>
								<input class="form-control" type="email" name="email" id="email" placeholder="tieta@perfumaria.com" required="required">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-6 eye-password">
								<label for="password"><strong>Senha:</strong></label>
								<input class="form-control" type="password" name="password" id="password" required="required">
								<?php
									include_once('php/eye.php');
								?>
							</div>
							<div class="col-md-6 eye-password">
								<label for="conf_password"><strong>Confirmar senha:</strong></label>
								<input class="form-control" type="password" name="conf_password" id="conf_password" required="required">
								<?php
									include_once('php/eye_conf.php');
								?>
							</div>
						</div>
						<br>
						<br>
						<div class="row">
							<div class="col-md-4">
								<a href="login.php" class="btn btn-block btn-dark">Faça login</a>
							</div>
							<div class="col-md-4">
								<button type="reset" class="btn btn-block btn-warning">Limpar</button>
							</div>
							<div class="col-md-4">
								<button type="submit" id="submit_login" class="btn btn-block btn-success">Salvar</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-2"></div>
			</div>
			<br>
			<div class="row">
				<?php
					include_once('php/footer.php');
				?>
			</div>
		</div>
		<?php
			include_once('php/body_links.php');
		?>
	</body>
</html>
<?php
	}
?>