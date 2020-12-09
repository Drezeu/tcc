$(document).ready(event=>{
	$('#user_login').focus()
	$('#login').on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'database/login/db_select.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.done(data=>{
			if(data){
				switch(data){
					case '0':
						window.location.href = '/'
					break
					case '1':
						window.location.href = 'admin.php?page=admin_panel'
					break
					case 'password_error':
						alert('Senha incorreta')
						$('#password').focus().val(null)
					break
					case 'user_error':
						alert('Usuário não encontrado')
						if(confirm('Cadastre-se!')){
							window.location.href = 'client_new.php'
						}
						else{
							$('#user_login').focus().val(null)
							$('#password').val(null)
						}
					break
					default:
						console.log(data)
				}
			}
		})
	})
})
