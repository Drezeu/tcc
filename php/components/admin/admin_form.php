<?php
	switch($_GET['admin_form_type']){
		case 'new_admin':
			$form_id = 'new_admin';
			$data_request = null;
			$form_action = '
				<input type="hidden" name="form_action" value="'.$form_id.'">
			';
			$form_attr_input = 'required';
			$form_file_input = '
				<input class="form-control" type="file" name="photo" id="avatar_input" '.$form_attr_input.'>
			';
			$form_password_input = '
				<br>
				<div class="row">
					<div class="col-md-6 eye-password">
						<label for="password"><strong>Nova senha:</strong></label>
						<input class="form-control" type="password" name="password" id="password" '.$form_attr_input.'>
						<?php
							include_once("php/eye.php");
						?>
					</div>
					<div class="col-md-6 eye-password">
						<label for="conf_password"><strong>Confirmar senha:</strong></label>
						<input class="form-control" type="password" name="conf_password" id="conf_password" '.$form_attr_input.'>
						<?php
							include_once("php/eye_conf.php");
						?>
					</div>
				</div>
			';
			$form_buttons = '
				<div class="row">
					<div class="col-md-6">
						<button type="reset" class="btn btn-block btn-warning">Limpar</button>
					</div>
					<div class="col-md-6">
						<button type="submit" id="submit_cad_form" class="btn btn-block btn-success">Salvar</button>
					</div>
				</div>
			';
		break;
		case 'data_admin':
			$form_id = 'data_admin';
			$data_request = '
				<form id="data_admin_request">
					<input type="hidden" name="form_action" value="data_admin">
				</form>
			';
			$form_action = null;
			$form_attr_input = 'disabled';
			$form_file_input = '
				<input class="form-control" type="file" name="photo" id="avatar_input" '.$form_attr_input.'>
			';
			$form_password_input = null;
			$form_buttons = '
				<div class="row">
					<div class="col-md-6">
						<button class="btn btn-block btn-danger" id="delete_admin">Apagar administrador</button>
					</div>
					<div class="col-md-6">
						<a href="admin.php?page=admin_edit" class="btn btn-block btn-primary">Editar</a>
					</div>
				</div>
			';
		break;
		case 'edit_admin':
			$form_id = 'edit_admin';
			$data_request = '
				<form id="data_admin_request">
					<input type="hidden" name="form_action" value="data_admin">
				</form>
			';
			$form_action = '
				<input type="hidden" name="form_action" value="'.$form_id.'">
			';
			$form_attr_input = 'required';
			$form_file_input = '
				<input class="form-control" type="file" name="photo" id="avatar_input" '.$form_attr_input.'>
			';
			$form_password_input = '
				<br>
				<div class="row">
					<div class="col-md-6 eye-password">
						<label for="password"><strong>Nova senha:</strong></label>
						<input class="form-control" type="password" name="password" id="password" '.$form_attr_input.'>
						<?php
							include_once("php/eye.php");
						?>
					</div>
					<div class="col-md-6 eye-password">
						<label for="conf_password"><strong>Confirmar senha:</strong></label>
						<input class="form-control" type="password" name="conf_password" id="conf_password" '.$form_attr_input.'>
						<?php
							include_once("php/eye_conf.php");
						?>
					</div>
				</div>
			';
			$form_buttons = '
				<div class="row">
					<div class="col-md-6"></div>
					<div class="col-md-6">
						<button type="submit" class="btn btn-block btn-success">Editar</button>
					</div>
				</div>
			';
		break;
	}
?>
<div class="row">
	<div class="col-md-12">
		<?php echo $data_request; ?>
		<form class="form form-group"  enctype="multipart/form-data" id=<?php echo $form_id; ?>>
			<?php echo $form_action; ?>
			<div class="row">
				<div class="col-md-5">
					<hr>
				</div>
				<div class="col-md-2">
					<center>
						<h4>Geral</h4>
					</center>
				</div>
				<div class="col-md-5">
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label for="user"><strong>Usuário:</strong></label>
					<input class="form-control" type="text" name="user" id="user" <?php echo $form_attr_input; ?>>
					<br>
					<label for="email"><strong>Email:</strong></label>
					<input class="form-control" type="email" name="email" id="email" <?php echo $form_attr_input; ?>>
				</div>
				<div class="col-md-6">
					<label for="avatar"><strong>Avatar:</strong></label>
					<br>
					<?php echo $form_file_input; ?>
					<center>
						<img class="avatar" id="avatar" src="" alt='user_avatar'>
					</center>
				</div>
			</div>
			<?php echo $form_password_input; ?>
			<br>
			<div class="row">
				<div class="col-md-6">
				</div>
				<div class="col-md-6"></div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-5">
					<hr>
				</div>
				<div class="col-md-2">
					<center>
						<h4>Dados pessoais</h4>
					</center>
				</div>
				<div class="col-md-5">
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label for="complete_name"><strong>Nome completo:</strong></label>
					<input class="form-control" type="text" name="complete_name" id="complete_name" <?php echo $form_attr_input; ?>>
				</div>
				<div class="col-md-6">
					<label for="birthdate"><strong>Data de nascimento:</strong></label>
					<input class="form-control" type="text" name="birthdate" id="birthdate" <?php echo $form_attr_input; ?> onkeypress="$(this).mask('00/00/0000');">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					<label for="cpf"><strong>CPF:</strong></label>
					<input class="form-control" type="text" name="cpf" id="cpf" <?php echo $form_attr_input; ?> onkeypress="$(this).mask('000.000.000-00');">
				</div>
				<div class="col-md-6">
					<label for="phone"><strong>Telefone/Celular:</strong></label>
					<input class="form-control" type="text" name="phone" id="phone" <?php echo $form_attr_input; ?> onkeypress="$(this).mask('(00) 00000-0000');">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-5">
					<hr>
				</div>
				<div class="col-md-2">
					<center>
						<h4>Endereço</h4>
					</center>
				</div>
				<div class="col-md-5">
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label for="street"><strong>Logradouro:</strong></label>
					<input class="form-control" type="text" name="street" id="street" <?php echo $form_attr_input; ?>>
				</div>
				<div class="col-md-6">
					<label for="neighborhood"><strong>Bairro</strong></label>
					<input class="form-control" type="text" name="neighborhood" id="neighborhood" <?php echo $form_attr_input; ?>>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					<label for="city"><strong>Cidade:</strong></label>
					<input class="form-control" type="text" name="city" id="city" <?php echo $form_attr_input; ?>>
				</div>
				<div class="col-md-6">
					<label for="state"><strong>Estado:</strong></label>
					<input class="form-control" type="text" name="state" id="state" <?php echo $form_attr_input; ?>>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6">
					<label for="complement"><strong>Complemento:</strong></label>
					<input class="form-control" type="text" name="complement" id="complement" <?php echo $form_attr_input; ?>>
				</div>
				<div class="col-md-6">
					<label for="zipcode"><strong>CEP:</strong></label>
					<input class="form-control" type="text" name="zipcode" id="zipcode" <?php echo $form_attr_input; ?> onkeypress="$(this).mask('00000-000');">
				</div>
			</div>
			<br>
			<br>
			<?php echo $form_buttons; ?>
		</form>
	</div>
</div>