$(document).ready(event=>{
	$('#data_address_states_list_request').on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'database/client/db_select.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.done(data=>{
			data ? $('#state').html(data) : null
		})
	}).submit()
	$('#data_client_request').on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'database/client/db_select.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.then(data => JSON.parse(data))
		.done(data=>{
			if(data){
				$('#client_id').val(data.CD_CLIENT)
				$('#user').val(data.DS_CLIENT_USER)
				$('#email').val(data.DS_CLIENT_EMAIL)
				$('#complete_name').val(data.NM_CLIENT)
				$('#birthdate').val(data.DS_CLIENT_BIRTHDATE)
				$('#cpf').val(data.DS_CLIENT_CPF)
				$('#phone').val(data.DS_CLIENT_PHONE)
				$('#street').val(data.DS_ADDRESS_STREET)
				$('#neighborhood').val(data.DS_ADDRESS_NEIGHBORHOOD)
				$('#city').val(data.DS_ADDRESS_CITY)
				$('#state').val(data.DS_ADDRESS_STATE_UF)
				$('#complement').val(data.DS_ADDRESS_COMPLEMENT)
				$('#zipcode').val(data.DS_ADDRESS_ZIPCODE)
				$('#avatar').attr('src', data.DS_CLIENT_IMG).css('display', 'block')
				
			}
			else{
				console.log(data)
			}
		})
	}).submit()
	$('#edit_client').on('submit', event=>{
		event.preventDefault()
		if($('#password').val() == $('#conf_password').val()){
			var formData = new FormData(event.target)
			$.ajax({
				url: 'database/client/db_update.php',
				type: 'POST',
				dataType: 'html',
				processData: false,
				contentType: false,
				async: true,
				data: formData
			})
			.done(data=>{
				data ? console.log(data) : window.location.href = 'client.php?page=client_data'
			})
		}
	})
	$('#delete_client').on('click', event=>{
		event.preventDefault()
		var formData = new FormData()
		formData.append('form_action', 'delete_client')
		$.ajax({
			url: 'database/client/db_delete.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.done(data=>{
			data ? console.log(data) : window.location.href = '/'
		})
	})
})