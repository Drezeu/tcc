<form id="self_product_data_request">
	<input type="hidden" name="form_action" value="self_product_data_request">
	<input type="hidden" name="product_id" value=<?php echo $product_id; ?>>
</form>
<div class="row">
	<div class="col-md-6">
		<label for="product_img"><b>Imagem do produto:</b></label>
		<br>
		<img id="product_img" src="" alt="">
	</div>
	<div class="col-md-6">
		<form>
			<label for="product_name"><b>Nome do produto:</b></label>
			<input type="text" class="form-control" disabled id="product_name">
			<br>
			<label for="product_desc"><b>Descrição do produto:</b></label>
			<input type="text" class="form-control" disabled id="product_desc">
			<br>
			<label for="product_val"><b>Valor do produto:</b></label>
			<input type="text" class="form-control" disabled id="product_val">
			<br>
			<label for="product_cat"><b>Categoria:</b></label>
			<input type="text" class="form-control" disabled id="product_cat">
		</form>
	</div>
</div>