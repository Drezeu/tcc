<?php
	include_once('php/db_connection.php');
?>
<!DOCTYPE html>
<html lang="pt">
	<head>
		<?php
			include_once("php/head.php");
			Title('Produtos');
		?>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<?php
					include_once('php/menu.php');
				?>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
				</div>
				<div class="col-md-3"></div>
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