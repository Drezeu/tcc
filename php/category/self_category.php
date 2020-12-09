<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h1>Categoria</h1>
	</div>
	<div class="col-md-4"></div>
</div>
<form id="category_page_self_request">
	<input type="hidden" name="form_action" value="data_category_page_self_list">
	<input type="hidden" name="category_id" value=<?php echo $category_id; ?>>
</form>
<div class="row" id="self_category_products_list"></div>