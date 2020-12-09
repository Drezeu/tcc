<?php
	if(isset($_SESSION['cd_client'])){
		$_GET['message_form_type'] = 'new_client_message_homepage';
		$_GET['use_client_message'] = true;
		include_once('php/components/message/message_form.php');
	}
	else{
	?>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<a style="margin-top: 10rem;" class="btn btn-block btn-warning" href="login.php">Antes, faça login.</a>
		</div>
		<div class="col-md-4"></div>
	</div>
	<?php
	}
?>