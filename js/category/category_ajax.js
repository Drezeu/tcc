$(document).ready(event=>{
	$("#new_category").on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'php/database/category/db_insert.php',
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
	})
	$("#data_category_list_request").on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'php/database/category/db_select.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.done(data=>{
			data ? $('#category_table_content').html(data) : console.log('erro')
		})
	}).submit()
	$("#data_category_self_request").on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'php/database/category/db_select.php',
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
				$('#category_id').val(data_return[0])
				$('#category_name').val(data_return[1])
				$('#category_desc').val(data_return[2])
			}
		})
	}).submit()
	$("#edit_category").on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'php/database/category/db_update.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.done(data=>{
			data ? console.log(data) : window.location.href = 'category.php?page=category_data_list'
		})
	})
	$("#delete_category").on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'php/database/category/db_delete.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.done(data=>{
			if(data){
				window.location.href = 'category.php?page=category_data_list'
				alert('Categoria indeletável, pois já está em uso em algum produto!')
			}
			else{
				window.location.href = 'category.php?page=category_data_list'
			}
		})
	}).submit()
})