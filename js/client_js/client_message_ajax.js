$(document).ready(event=>{
	$('#new_client_message_homepage').on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'database/client/db_insert.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.done(data => {
			if(data){
				$('#new_client_message_homepage')[0].reset()
				$('#home_page_message_alert').addClass('alert-success').css('display', 'block').append('Mensagem enviada com sucesso!')
			}
			else{
				$('#home_page_message_alert').addClass('alert-danger').css('display', 'block').append('Erro!')
			}
		})
	})
})