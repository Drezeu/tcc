<?php
	$form_id = 'login';
	$form_action = $form_id;
?>
<div class="row">
	<div class="col-md-12">
		<form class="form form-group" id=<?php echo $form_id; ?>>
			<input type="hidden" name="form_action" value=<?php echo $form_action; ?>>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<label for="login"><strong>Login ou email:</strong></label>
					<input class="form-control" type="text" name="login" id="user_login" placeholder="Entre com seu nome ou seu email" required="required">
				</div>
				<div class="col-md-3"></div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 eye-password">
					<label for="password"><strong>Senha:</strong></label>
					<input class="form-control" type="password" name="password" id="password" required="required">
					<?php
						include_once('php/eye.php');
					?>
				</div>
				<div class="col-md-3"></div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-3">
					<button type="reset" class="btn btn-block btn-warning">Limpar</button>
				</div>
				<div class="col-md-3">
					<button type="submit" id="submit_login" class="btn btn-block btn-success">Login</button>
				</div>
				<div class="col-md-3"></div>
			</div>
		</form>
	</div>
</div>