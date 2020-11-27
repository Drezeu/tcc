$(document).ready(event=>{
	$('#category_list_request').on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'php/database/product/db_select.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.done(data=>{
			$("#product_cat").html(data)
		})
	}).submit()
	$('#new_product').on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'php/database/product/db_insert.php',
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
			url: 'php/database/product/db_select.php',
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
			url: 'php/database/product/db_select.php',
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
				$('#product_id').val(data_return[0])
				$('#product_name').val(data_return[1])
				$('#product_desc').val(data_return[2])
				$('#product_val').val(data_return[3])
				$('#product_picture').attr('src', data_return[4]).css({
					'display': 'block'
				})
				$("#product_cat option").each((index, element)=>{
					if(data_return[5] == element.value){
						$('#product_cat option[value='+data_return[5]+']').attr('selected', 'selected')
					}
				})
			}
		})
	}).submit()
	$('#edit_product').on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'php/database/product/db_update.php',
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
			url: 'php/database/product/db_delete.php',
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