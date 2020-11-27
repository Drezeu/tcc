<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h1>Lista de produtos</h1>
	</div>
	<div class="col-md-4">
		<a href="product.php?page=product_new" class="btn btn-block btn-info">Novo produto</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<form id="data_product_list_request">
			<input type="hidden" name="form_action" value="data_product_list">
		</form>
		<table class="table table-striped table-responsive-md">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Imagem</th>
					<th scope="col">Nome do produto</th>
					<th scope="col">Categoria do produto</th>
					<th scope="col">Descrição do produto</th>
					<th scope="col">Valor do produto</th>
					<th colspan='2' scope="col"><center>Ações</center></th>
				</tr>
			</thead>
			<tbody id="product_table_content"></tbody>
		</table>
	</div>
</div>