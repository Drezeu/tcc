<?php
	session_start();
	include_once('php/db_connection.php');
?>
<!DOCTYPE html>
<html lang="pt">
	<head>
		<?php
			include_once("php/head.php");
			Title('Tieta perfumaria');
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
				<?php include_once('php/carousel.php'); ?>
			</div>
			<br>
			<div class="row" id="sale">
				<?php include_once('php/sale.php'); ?>
			</div>
			<br>
			<div class="row" id="sobre">
				<?php
					include_once('php/who_we_are.php');
					include_once('php/contact.php');
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