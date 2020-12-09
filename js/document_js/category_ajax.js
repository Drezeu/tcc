$(document).ready(event=>{
	$('#category_menu_list_data_request').on('submit', event=>{
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
		.done(data=> {
			data ? $('#category_menu_list').append(data) : $('#category_menu_list').append('<small><center>Erro: não há categorias</center></small>')
		})
	}).submit()
	$('#category_page_all_request').on('submit', event=>{
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
			if(data){
				$('#link_list').html(data)
			}
		})
	}).submit()
	$('#category_page_self_request').on('submit', event=>{
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
			if(data){
				$('#self_category_products_list').html(data)
			}
		})
	}).submit()
})