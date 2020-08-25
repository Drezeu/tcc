<?php
	session_start();
	include_once('php/db_connection.php');
	if(isset($_SESSION['user'])){
		if($_SESSION['user'] == 1){
?>
<!DOCTYPE html>
<html lang="pt">
	<head>
		<?php
			include_once("php/head.php");
			Title('Administração');
		?>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<?php
					include_once('php/menu.php');
				?>
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
		else{
			header('location: login.php');
		}
	}
	else{
		header('location: index.php');
	}
?>