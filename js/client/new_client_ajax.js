$(document).ready(event=>{
	$('#new_client').on('submit', event=>{
		event.preventDefault()
		if($('#password').val() == $('#conf_password').val()){
			var formData = new FormData(event.target)
			$.ajax({
				url: 'php/database/client/db_insert.php',
				type: 'POST',
				dataType: 'html',
				processData: false,
				contentType: false,
				async: true,
				data: formData
			})
			.done(data=>{
				data ? console.log(data) : window.location.href = 'client_login.php'
			})
		}
		else{
			alert("Senhas não conferem")
		}
	})
})