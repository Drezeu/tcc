<div class="row">
	<div class="col-md-4">
		<a href="admin.php?page=admin_panel" class="btn btn-block btn-info"><- Painel de administração</a>
	</div>
	<div class="col-md-4">
		<center>
			<h1>Novo produto</h1>
		</center>
	</div>
	<div class="col-md-4"></div>
</div>
<?php
	$_GET['product_form_type'] = 'new_product';
	include_once('php/components/product/product_form.php');
?>