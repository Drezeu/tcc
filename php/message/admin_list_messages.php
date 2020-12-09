<div class="row">
	<div class="col-md-4">
		<a href="admin.php?page=admin_panel" class="btn btn-block btn-info"><- Painel de administração</a>
	</div>
	<div class="col-md-4">
		<h1>Mensagens</h1>
	</div>
	<div class="col-md-4">
		<a href="message.php?page=admin_to_admin" class="btn btn-block btn-info">Nova mensagem (administração)</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<form id="admin_message_list_request">
			<input type="hidden" name="form_action" value="admin_message_list">
		</form>
		<table class="table table-striped table-responsive-md">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">De:</th>
					<th scope="col">Para:</th>
					<th scope="col">Assunto</th>
					<th scope="col">Mensagem</th>
					<th colspan="2" scope="col"><center>Ações</center></th>
				</tr>
			</thead>
			<tbody id="message_table_content"></tbody>
		</table>
	</div>
</div>