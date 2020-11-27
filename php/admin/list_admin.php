<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h1>Lista de administradores</h1>
	</div>
	<div class="col-md-4">
		<a href="admin.php?page=admin_new" class="btn btn-block btn-info">Novo administrador</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<form id="data_admin_list_request">
			<input type="hidden" name="form_action" value="data_admin_list">
		</form>
		<table class="table table-striped table-responsive-md">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Avatar</th>
					<th scope="col">Nome</th>
					<th scope="col">Email</th>
					<th scope="col">Tel/Cel</th>
					<th colspan='2' scope="col"><center>Ações</center></th>
				</tr>
			</thead>
			<tbody id="admin_table_content"></tbody>
		</table>
	</div>
</div>