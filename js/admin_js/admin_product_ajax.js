$(document).ready(event=>{
	$('#category_list_request').on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'database/product/db_select.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.done(data=>{
			if(data){
				$("#product_cat").html(data)
			}
			else{
				window.location.href = 'category.php?page=category_new'
				alert('Crie uma primeira categoria antes!')
			}
		})
	}).submit()
	$('#new_product').on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'database/product/db_insert.php',
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
	$("#data_product_list_request").on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'database/product/db_select.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.done(data=>{
			data ? $('#product_table_content').html(data) : console.log('erro')
		})
	}).submit()
	$("#data_product_self_request").on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'database/product/db_select.php',
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
				$('#product_id').val(data.CD_PRODUCT)
				$('#product_name').val(data.NM_PRODUCT)
				$('#product_desc').val(data.DS_PRODUCT)
				$('#product_val').val(data.VL_PRODUCT)
				$("#product_cat").val(data.CD_PRODUCT_CATEGORY)
				$('#product_picture').attr('src', data.DS_PRODUCT_IMG).css({
					'display': 'block'
				})
			}
		})
	}).submit()
	$('#edit_product').on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'database/product/db_update.php',
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
	$('#delete_product').on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'database/product/db_delete.php',
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
	}).submit()
})