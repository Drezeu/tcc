$(document).ready(event=>{
	$('#admin_message-to_list').on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'database/admin/db_select.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.done(data => $('#contact_to').html(data))
	}).submit()
	$('#new_admin_to_admin_message').on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'database/admin/db_insert.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.done(data =>{
			if(data){
				alert('Impossível mandar mensagem para você mesmo!')
				window.location.href = 'message.php?page=admin_list_messages'
			}
			else{
				window.location.href = 'message.php?page=admin_list_messages'
			}
		})
	})
	$('#new_admin_to_everyone_message').on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'database/admin/db_insert.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.done(data => data ? console.log(data) : window.location.href = 'message.php?page=admin_list_messages')
	})
	$('#admin_message_list_request').on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'database/admin/db_select.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.done(data => $('#message_table_content').html(data))
		//.then(data => JSON.parse(data))
		//.done(data => console.log(data))
	}).submit()
	$('#admin_message_self_request').on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'database/admin/db_select.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.then(data => JSON.parse(data))
		.done(data => {
			$('#contact_to').val(data.ID_MESSAGE_TO)
			$('#contact_subject').val(data.DS_MESSAGE_SUBJECT)
			$('#contact_message').val(data.DS_MESSAGE)
		})
	}).submit()
	$('#edit_admin_message').on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'database/admin/db_update.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.done(data => window.location.href = 'message.php?page=admin_list_messages')
	})
	$('#admin_message_form_delete').on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'database/admin/db_delete.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.done(data => window.location.href = 'message.php?page=admin_list_messages')
	}).submit()
})