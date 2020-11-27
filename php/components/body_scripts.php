<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script type="text/javascript" src="js/eye.js"></script>
<script type="text/javascript" src="js/img/image.js"></script>
<?php
	if(isset($_GET['page_source'])){
		switch($_GET['page_source']){
			case 'new_client':
			?>
			<script type="text/javascript" src="js/client/new_client_ajax.js"></script>
			<?php
			break;
			case 'login':
			?>
			<script type="text/javascript" src="js/login_ajax.js"></script>
			<?php
			break;
			case 'payment':
			?>
			<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
			<script type="text/javascript" src="js/payment/payment.js"></script>
			<?php
			break;
		}
	}
	if(isset($_SESSION['st_client_admin'])){
		switch($_SESSION['st_client_admin']){
			case 0:
			?>
			<script type="text/javascript" src="js/client/client_ajax.js"></script>
			<?php
			break;
			case 1:
			?>
			<script type="text/javascript" src="js/admin/admin_ajax.js"></script>
			<script type="text/javascript" src="js/category/category_ajax.js"></script>
			<?php
			break;
		}
	}
?>
<script type="text/javascript" src="js/product/product_ajax.js"></script>