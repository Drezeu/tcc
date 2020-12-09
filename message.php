<?php
	include_once('php/components/header_includes.php');
	if(isset($_GET['page']) == false){
		header('location: /');
	}
	else{
		switch($_GET['page']){
			case 'admin_to_admin':
				$title = 'Nova mensagem (Administração)';
				$_GET['use_admin_message'] = true;
				$page_path = 'php/message/admin_to_admin.php';
			break;
			case 'admin_to_everyone':
				$title = 'Nova mensagem (Notificação)';
				$_GET['use_admin_message'] = true;
				$page_path = 'php/message/admin_to_everyone.php';
			break;
			case 'admin_list_messages':
				$title = 'Mensagens';
				$_GET['use_admin_message'] = true;
				$page_path = 'php/message/admin_list_messages.php';
			break;
			case 'admin_message_edit':
				$title = 'Editar mensagem';
				$_GET['use_admin_message'] = true;
				$message_id = $_GET['message_id'];
				$page_path = 'php/message/admin_edit_message.php';
			break;
			case 'admin_message_delete':
				$title = '';
				$_GET['use_admin_message'] = true;
				$message_id = $_GET['message_id'];
				$page_path = 'php/message/admin_delete_message.php';
			break;
			case 'client_to_admin':
				$title = 'Nova mensagem';
				$_GET['use_client_message'] = true;
				$page_path = 'php/message/client_to_admin.php';
			break;
			case 'client_list_messages':
				$title = 'Mensagens';
				$_GET['use_client_message'] = true;
				$page_path = 'php/message/client_list_messages.php';
			break;
			default:
				header('location: /');
		}
	}
?>
<!DOCTYPE html>
<html lang="pt">
	<head>
		<?php
			include_once("php/components/head.php");
			Title($title);
		?>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<?php
					include_once('php/components/menu.php');
				?>
			</div>
			<br>
			<?php
				include_once($page_path);
			?>
			<br>
			<div class="row">
				<?php
					include_once('php/components/footer.php');
				?>
			</div>
		</div>
		<?php
			include_once('php/components/body_scripts.php');
		?>
	</body>
</html>