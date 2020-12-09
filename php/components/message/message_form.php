<?php
	switch($_GET['message_form_type']){
		case 'new_admin_to_admin_message':
			$form_id = 'new_admin_to_admin_message';
			$data_request = '
				<form id="admin_message-to_list">
					<input type="hidden" name="form_action" value="admin_message-to_list">
				</form>
			';
			$form_action = '<input type="hidden" name="form_action" value="'.$form_id.'">';
			$form_attr_input = 'required';
			$message_from = null;
			$message_to = '
				<div class="row">
					<div class="col-md-12">
						<label for="contact_to"><b>Para:</b></label>
						<select name="contact_to" class="form-control" id="contact_to" '.$form_attr_input.'></select>
					</div>
				</div>
				<br>
			';
		break;
		case 'new_admin_to_everyone_message':
			$form_id = 'new_admin_to_everyone_message';
			$data_request = '
				<form id="admin_message-to_list">
					<input type="hidden" name="form_action" value="admin_message-to_list">
				</form>
			';
			$form_action = '<input type="hidden" name="form_action" value="'.$form_id.'">';
			$form_attr_input = 'required';
			$message_from = null;
			$message_to = null;
		break;
		case 'edit_admin_message':
			$form_id = 'edit_admin_message';
			$data_request = '
				<form id="admin_message-to_list">
					<input type="hidden" name="form_action" value="admin_message-to_list">
				</form>
				<form id="admin_message_self_request">
					<input type="hidden" name="form_action" value="admin_message_self">
					<input type="hidden" name="message_id" value="'.$message_id.'">
				</form>
			';
			$form_action = '
				<input type="hidden" name="form_action" value="'.$form_id.'">
				<input type="hidden" name="message_id" value="'.$message_id.'">
			';
			$form_attr_input = 'required';
			$message_from = null;
			$message_to = '
				<div class="row">
					<div class="col-md-12">
						<label for="contact_to"><b>Para:</b></label>
						<select name="contact_to" class="form-control" id="contact_to" '.$form_attr_input.'></select>
					</div>
				</div>
				<br>
			';
		break;
		case 'new_client_message_homepage':
			$form_id = 'new_client_message_homepage';
			$data_request = null;
			$form_action = '<input type="hidden" name="form_action" value="'.$form_id.'">';
			$form_attr_input = 'required';
			$message_from = null;
			$message_to = null;
		break;
		case 'new_client_message':
			$form_id = 'new_client_message';
			$data_request = null;
			$form_action = null;
			$form_attr_input = 'required';
			$message_from = '
				<div class="row">
					<div class="col-md-12">
						<label for="contact_from"><b>Nome:</b></label>
						<input name="contact_from" class="form-control" id="contact_from" '.$form_attr_input.'>
					</div>
				</div>
				<br>
			';
			$message_to = null;
		break;
		case 'edit_client_message':
			$form_id = 'edit_client_message';
			$data_request = '
				<form id="">
					<input type="hidden" name="form_action" value="">
					<input type="hidden" name="message_id" value="'.$message_id.'">
				</form>
			';
			$form_action = null;
			$form_attr_input = 'required';
		break;
	}
?>
<div class="row">
	<div class="col-md-12">
		<?php echo $data_request; ?>
		<form class="form-group" id=<?php echo $form_id; ?>>
			<?php echo $form_action; ?>
			<?php echo $message_from; ?>
			<?php echo $message_to; ?>			
			<div class="row">
				<div class="col-md-12">
					<label for="contact_subject"><b>Assunto:</b></label>
					<input type="text" name="contact_subject" class="form-control" id="contact_subject" <?php echo $form_attr_input; ?>>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<label for="contact_message"><b>Mensagem:</b></label>
					<textarea name="contact_message" id="contact_message" class="form-control" <?php echo $form_attr_input; ?>></textarea>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					<button type="reset" class="btn btn-block btn-warning">Limpar</button>
				</div>
				<div class="col-md-6">
					<button type="submit" class="btn btn-block btn-success">Salvar</button>
				</div>
			</div>
		</form>
	</div>
</div>