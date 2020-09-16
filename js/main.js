$(document).ready((event)=> {
	//password_input_cover
	$('#block_eye').on('click', ()=>{
		if($('#perm_eye').css('display', 'none')){
			$('#block_eye').css('display', 'none')
			$('#perm_eye').css('display', 'block')
			$('#password').attr('type', 'text')
			$('#password').focus()
		}
	})
	$('#perm_eye').on('click', ()=>{
		if($('#block_eye').css('display', 'none')){
			$('#block_eye').css('display', 'block')
			$('#perm_eye').css('display', 'none')
			$('#password').attr('type', 'password')
			$('#password').focus()
		}
	})
	//conf_password_input_cover
	$('#block_eye_conf').on('click', ()=>{
		if($('#perm_eye_conf').css('display', 'none')){
			$('#block_eye_conf').css('display', 'none')
			$('#perm_eye_conf').css('display', 'block')
			$('#conf_password').attr('type', 'text')
			$('#conf_password').focus()
		}
	})
	$('#perm_eye_conf').on('click', ()=>{
		if($('#block_eye_conf').css('display', 'none')){
			$('#block_eye_conf').css('display', 'block')
			$('#perm_eye_conf').css('display', 'none')
			$('#conf_password').attr('type', 'password')
			$('#conf_password').focus()
		}
	})
	//new_client_db_insertion
	$('#new_client').submit((event)=>{
		event.preventDefault()
		if($('#password').val() == $('#conf_password').val()){
			$.ajax({
				url: 'php/db_insert.php',
				type: 'POST',
				dataType: 'html',
				async: true,
				data: {
					'form_action': 'new_client',
					'general_user': $('#user').val(),
					'general_email': $('#email').val(),
					'general_password': $('#password').val(),
					'personal_complete_name': $('#complete_name').val(),
					'personal_birthdate': $('#birthdate').val(),
					'personal_cpf': $('#cpf').val(),
					'personal_phone': $('#phone').val(),
					'address_street': $('#street').val(),
					'address_neighborhood': $('#neighborhood').val(),
					'address_city': $('#city').val(),
					'address_state': $('#state').val(),
					'address_complement': $('#complement').val(),
					'address_zipcode': $('#zipcode').val()
				}
			})
			.done((data)=>{
				window.location.href = 'login.php'
			})
		}
		else{
			
		}
	})
	//login_db_select
	$('#login_client').submit((event)=>{
		event.preventDefault()
		$.ajax({
			url: 'php/db_select.php',
			type: 'POST',
			dataType: 'html',
			async: true,
			data: {
				'form_action': 'login_client',
				'login': $('#login').val(),
				'password': $('#password').val()
			}
		})
		.done((data)=>{
			if(data){
				window.location.reload()
				if(data == 0){
					window.location.href = 'index.php'
				}
				else if(data == 1){
					window.location.href = 'admin_panel.php'
				}
			}
			else{
				window.location.reload()
				alert('login ou senha incorretos')
			}
		})
	})
})