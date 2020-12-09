$(document).ready(event=>{
	$("#new_category").on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'database/category/db_insert.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.done(data=>{
			data ? console.log(data) : window.location.href = 'admin_category.php?page=category_data_list'
		})
	})
	$("#data_category_list_request").on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'database/category/db_select.php',
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
			url: 'database/category/db_select.php',
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
				$('#category_id').val(data.CD_PRODUCT_CATEGORY)
				$('#category_name').val(data.NM_PRODUCT_CATEGORY)
				$('#category_desc').val(data.DS_PRODUCT_CATEGORY)
			}
		})
	}).submit()
	$("#edit_category").on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'database/category/db_update.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.done(data=>{
			data ? console.log(data) : window.location.href = 'admin_category.php?page=category_data_list'
		})
	})
	$("#delete_category").on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'database/category/db_delete.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.done(data=>{
			if(data){
				window.location.href = 'admin_category.php?page=category_data_list'
				alert('Categoria indeletável, pois já está em uso em algum produto!')
			}
			else{
				window.location.href = 'admin_category.php?page=category_data_list'
			}
		})
	}).submit()
})