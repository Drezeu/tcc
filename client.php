<?php
	session_start();
	include_once('php/db_connection.php');
	if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html lang="pt">
	<head>
		<?php
			include_once("php/head.php");
			if($_GET['status'] == 'client_data'){
				Title('Seus dados');
			}
			if($_GET['status'] == 'client_favs'){
				Title('Favoritos');
			}
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
			<?php
				if($_GET['status'] == 'client_data'){
			?>
			<div class="row">
				<div class="col-md-12">
					<h1>Seus dados</h1>
				</div>
			</div>
			<?php
				}
				if($_GET['status'] == 'client_favs'){
			?>
			<div class="row">
				<div class="col-md-12">
					<h1>Favoritos</h1>
				</div>
			</div>
			<?php
				}
			?>
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
	else{
		header('location: index.php');
	}
?>