<?php
	switch($_GET['category_form_type']){
		case 'new_category':
			$form_id = 'new_category';
			$data_request = null;
			$form_action = '
				<input type="hidden" name="form_action" value="'.$form_id.'">
			';
			$form_attr_input = null;
			$form_buttons = '
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-3">
						<button type="reset" class="btn btn-block btn-warning">Limpar</button>
					</div>
					<div class="col-md-3">
						<button type="submit" class="btn btn-block btn-success">Salvar</button>
					</div>
					<div class="col-md-3"></div>
				</div>
			';
		break;
		case 'edit_category':
			$form_id = 'edit_category';
			$data_request = '
				<form id="data_category_self_request">
					<input type="hidden" name="form_action" value="'.$form_id.'">
					<input type="hidden" name="category_id" value="'.$category_id.'">
				</form>
			';
			$form_action = '
				<input type="hidden" name="form_action" value="'.$form_id.'">
				<input type="hidden" name="category_id" id="category_id" value="">
			';
			$form_attr_input = null;
			$form_buttons = '
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-3">
						<button type="reset" class="btn btn-block btn-warning">Limpar</button>
					</div>
					<div class="col-md-3">
						<button type="submit" class="btn btn-block btn-success">Editar</button>
					</div>
					<div class="col-md-3"></div>
				</div>
			';
		break;
	}
?>
<div class="row">
	<div class="col-md-12">
		<?php echo $data_request; ?>
		<form class="form form-group" id=<?php echo $form_id; ?>>
			<?php echo $form_action; ?>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<label for="category_name"><strong>Nome da categoria:</strong></label>
					<input class="form-control" type="text" name="category_name" id="category_name" <?php echo $form_attr_input; ?>>
				</div>
				<div class="col-md-3"></div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<label for="category_desc"><strong>Descrição da categoria:</strong></label>
					<input class="form-control" type="text" name="category_desc" id="category_desc" <?php echo $form_attr_input; ?>>
				</div>
				<div class="col-md-3"></div>
			</div>
			<br>
			<?php echo $form_buttons; ?>
		</form>
	</div>
</div>