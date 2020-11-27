$(document).ready(event=>{
	$('#login').on('submit', event=>{
		event.preventDefault()
		var formData = new FormData(event.target)
		$.ajax({
			url: 'php/database/login/db_select.php',
			type: 'POST',
			dataType: 'html',
			processData: false,
			contentType: false,
			async: true,
			data: formData
		})
		.done(data=>{
			if(data){
				switch(data){
					case '0':
						window.location.href = '/'
					break;
					case '1':
						window.location.href = 'admin.php?page=admin_panel'
					break;
				}
			}
		})
	})
})
