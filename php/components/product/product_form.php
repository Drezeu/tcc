<?php
	switch($_GET['product_form_type']){
		case 'new_product':
			$form_id = 'new_product';
			$data_request = '
				<form id="category_list_request">
					<input type="hidden" name="form_action" value="category_list">
				</form>
			';
			$form_action = '
				<input type="hidden" name="form_action" value="'.$form_id.'">
			';
			$form_attr_input = 'required';
			$form_file_input = '
				<input class="form-control" type="file" name="photo" id="product_picture_input" '.$form_attr_input.'>
			';
			$is_in_carousel = '
				<label for="isInCarousel"><b>Destaque:</b></label>
				<input class="form-control" type="checkbox" name="isInCarousel" id="isInCarousel" '.$form_attr_input.'>
			';
			$is_in_sale = '
				<label for="isInSale"><b>Promoção:</b></label>
				<input class="form-control" type="checkbox" name="isInSale" id="isInSale" '.$form_attr_input.'>
			';
			$form_buttons = '
				<div class="row">
					<div class="col-md-6">
						<button type="reset" class="btn btn-block btn-warning">Limpar</button>
					</div>
					<div class="col-md-6">
						<button type="submit" class="btn btn-block btn-success">Salvar</button>
					</div>
				</div>
			';
		break;
		case 'data_product_self':
		break;
		case 'edit_product':
			$form_id = 'edit_product';
			$data_request = '
				<form id="category_list_request">
					<input type="hidden" name="form_action" value="category_list">
				</form>
				<form id="data_product_self_request">
					<input type="hidden" name="form_action" value="'.$form_id.'">
					<input type="hidden" name="product_id" value="'.$product_id.'">
				</form>
			';
			$form_action = '
				<input type="hidden" name="form_action" value="'.$form_id.'">
				<input type="hidden" name="product_id" id ="product_id" value="">
			';
			$form_attr_input = 'required';
			$form_file_input = '
				<input class="form-control" type="file" name="photo" id="product_picture_input" '.$form_attr_input.'>
			';
			$form_buttons = '
				<div class="row">
					<div class="col-md-6">
						<button type="reset" class="btn btn-block btn-warning">Limpar</button>
					</div>
					<div class="col-md-6">
						<button type="submit" class="btn btn-block btn-success">Salvar</button>
					</div>
				</div>
			';
		break;
	}
?>
<div class="row">
	<div class="col-md-12">
		<?php echo $data_request; ?>
		<form class="form form-group" enctype="multipart/form-data" id=<?php echo $form_id; ?>>
			<?php echo $form_action; ?>
			<div class="row">
				<div class="col-md-12">
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label for="product_name"><strong>Nome do produto:</strong></label>
					<input class="form-control" type="text" name="product_name" id="product_name" <?php echo $form_attr_input; ?>>
				</div>
				<div class="col-md-6">
					<label for="product_cat"><strong>Categoria do produto:</strong></label>
					<select class="form-control" name="product_cat" id="product_cat" <?php echo $form_attr_input; ?>></select>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-3">
					<label for="product_val"><strong>Valor do produto:</strong></label>
					<input class="form-control" type="text" name="product_val" id="product_val" <?php echo $form_attr_input; ?>>
				</div>
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-6">
							<?php echo $is_in_carousel; ?>
						</div>
						<div class="col-md-6">
							<?php echo $is_in_sale; ?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<label for="product_picture_input"><strong>Foto do produto:</strong></label>
					<br>
					<?php echo $form_file_input; ?>
				</div>
				<div class="col-md-2">
					<label for="image_preview">&nbsp;</label>
					<br>
					<button id="image_preview" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Preview</button>
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Preview da imagem</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<img id="product_picture">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<label for="product_desc"><strong>Descrição do produto:</strong></label>
					<textarea class="form-control" name="product_desc" id="product_desc" <?php echo $form_attr_input; ?>></textarea>
				</div>
			</div>
			<br>
			<br>
			<?php echo $form_buttons; ?>
		</form>
	</div>
</div>