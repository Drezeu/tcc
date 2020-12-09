<div class="row">
	<div class="col-md-4">
		<br>
		<a href="admin.php?page=admin_panel" class="btn btn-block btn-info"><- Painel de administração</a>
	</div>
	<div class="col-md-4">
		<center>
			<h1>Nova mensagem (Notificação)</h1>
		</center>
	</div>
	<div class="col-md-4"></div>
	
</div>
<?php
	$_GET['message_form_type'] = 'new_admin_to_everyone_message';
	include_once('php/components/message/message_form.php');
?>