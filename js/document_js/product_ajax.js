$(document).ready(event=>{
	$('#carousel_product_data_request').on('submit', event=>{
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
				$('.carousel-inner').append(data)
				$('.carousel-item:first-child').addClass('active')
				for(i = 0; i <= $('.carousel-item').length - 1; i++){
					$('.carousel-indicators').append(`<li data-target="#carouselExampleIndicators" data-slide-to="${i}"></li>`)
				}
				$('[data-target]:first-child').addClass('active')
			}
		})
	}).submit()
	$('#self_product_data_request').on('submit', event=>{
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
				$('#product_img').attr({
					'src': data.DS_PRODUCT_IMG,
					'alt': data.NM_PRODUCT
				})
				$('#product_name').attr('value', data.NM_PRODUCT)
				$('#product_desc').attr('value', data.DS_PRODUCT)
				$('#product_val').attr('value', `R$${data.VL_PRODUCT}`)
				$('#product_cat').attr('value', data.NM_PRODUCT_CATEGORY)
			}
		})
	}).submit()
	$('#all_product_data_request').on('submit', event=>{
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
				$('#all_products_list').html(data)
			}
		})
	}).submit()
})