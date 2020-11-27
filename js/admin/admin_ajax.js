$(document).ready(event=>{
	$('#new_admin').on('submit', event=>{
		event.preventDefault()
		if($('#password').val() == $('#conf_password').val()){
			var formData = new FormData(event.target)
			$.ajax({
				url: 'php/database/admin/db_insert.php',
				type: 'POST',
				dataType: 'html',
				processData: false,
				contentType: false,
				async: true,
				data: formData
			})
			.done(data=>{
				data ? console.log(data) : window.location.href = 'admin.php?page=admin_panel'
			})
		}
		else{
			alert("Senhas não conferem")
		}
	})
	$('#data_admin_request').on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'php/database/admin/db_select.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.done(data=>{
			if(data){
				data_return = data.split('✁')
				$('#client_id').val(data_return[0])
				$('#user').val(data_return[1])
				$('#email').val(data_return[2])
				$('#complete_name').val(data_return[3])
				$('#birthdate').val(data_return[4])
				$('#cpf').val(data_return[5])
				$('#phone').val(data_return[6])
				$('#street').val(data_return[7])
				$('#neighborhood').val(data_return[8])
				$('#city').val(data_return[9])
				$('#state').val(data_return[10])
				$('#complement').val(data_return[11])
				$('#zipcode').val(data_return[12])
				$('#avatar').attr('src', data_return[13]).css('display', 'block')
			}
			else{
				console.log(data)
			}
		})
	}).submit()
	$("#data_admin_list_request").on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'php/database/admin/db_select.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.done(data=>{
			data ? $('#admin_table_content').html(data) : console.log('erro')
		})
	}).submit()
	$('#edit_admin').on('submit', event=>{
		event.preventDefault()
		if($('#password').val() == $('#conf_password').val()){
			var formData = new FormData(event.target)
			$.ajax({
				url: 'php/database/admin/db_update.php',
				type: 'POST',
				dataType: 'html',
				processData: false,
				contentType: false,
				async: true,
				data: formData
			})
			.done(data=>{
				data ? console.log(data) : window.location.href = 'admin.php?page=admin_data'
			})
		}
	})
	$('#delete_admin').on('click', event=>{
		event.preventDefault()
		var formData = new FormData()
		formData.append('form_action', 'delete_admin')
		$.ajax({
			url: 'php/database/admin/db_delete.php',
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