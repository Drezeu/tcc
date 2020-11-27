<?php
	include_once('php/components/header_includes.php');
?>
<!DOCTYPE html>
<html lang="pt">
	<head>
		<?php
			include_once("php/components/head.php");
			Title('Tieta perfumaria');
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
				<?php
					include_once('php/carousel.php');
				?>
			</div>
			<br>
			<div class="row" id="sale">
				<?php
					include_once('php/sale.php');
				?>
			</div>
			<br>
			<div class="row" id="sobre">
				<?php
					include_once('php/who_we_are.php');
				?>
			</div>
			<div class="row" id="contatc">
				<?php
					include_once('php/contact.php');
					include_once('php/mini_map.php');
				?>
			</div>
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