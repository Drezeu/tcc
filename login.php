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
			Title('Login - Tieta perfumaria');
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
					<h1>
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
						</svg>
						Login do cliente
					</h1>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<form class="form form-group">
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<label for="login"><strong>Login ou email:</strong></label>
								<input class="form-control" type="text" name="login" id="login" placeholder="Entre com seu nome ou seu email" required="required">
							</div>
							<div class="col-md-3"></div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6 eye-password">
								<label for="password"><strong>Senha:</strong></label>
								<input class="form-control" type="password" name="password" id="password" required="required">
								<?php
									include_once('php/eye.php');
								?>
							</div>
							<div class="col-md-3"></div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-3">
								<button type="reset" class="btn btn-block btn-warning">Limpar</button>
							</div>
							<div class="col-md-3">
								<button type="submit" id="submit_login" class="btn btn-block btn-success">Login</button>
							</div>
							<div class="col-md-3"></div>
						</div>
					</form>
				</div>
				<div class="col-md-2"></div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<center>
						<a class="body_link" href="new_user.php">Novo por aqui? Cadastre-se!</a>
					</center>
				</div>
				<div class="col-md-4"></div>
			</div>
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