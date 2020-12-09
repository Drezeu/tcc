<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h1>Lista de categorias</h1>
	</div>
	<div class="col-md-4">
		<a href="admin_category.php?page=category_new" class="btn btn-block btn-info">Nova categoria</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<form id="data_category_list_request">
			<input type="hidden" name="form_action" value="data_category_list">
		</form>
		<table class="table table-striped table-responsive-md">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nome da categoria</th>
					<th scope="col">Descrição da categoria</th>
					<th colspan='2' scope="col"><center>Ações</center></th>
				</tr>
			</thead>
			<tbody id="category_table_content"></tbody>
		</table>
	</div>
</div>