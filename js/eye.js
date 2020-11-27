$(document).ready(()=>{
	$('#block_eye').click(()=>{
		if($('#perm_eye').css('display', 'none')){
			$('#block_eye').css('display', 'none')
			$('#perm_eye').css('display', 'block')
			$('#password').attr('type', 'text')
			$('#password').focus()
		}
	})
	$('#perm_eye').click(()=>{
		if($('#block_eye').css('display', 'none')){
			$('#block_eye').css('display', 'block')
			$('#perm_eye').css('display', 'none')
			$('#password').attr('type', 'password')
			$('#password').focus()
		}
	})
	//conf_password_input_cover
	$('#block_eye_conf').click(()=>{
		if($('#perm_eye_conf').css('display', 'none')){
			$('#block_eye_conf').css('display', 'none')
			$('#perm_eye_conf').css('display', 'block')
			$('#conf_password').attr('type', 'text')
			$('#conf_password').focus()
		}
	})
	$('#perm_eye_conf').click(()=>{
		if($('#block_eye_conf').css('display', 'none')){
			$('#block_eye_conf').css('display', 'block')
			$('#perm_eye_conf').css('display', 'none')
			$('#conf_password').attr('type', 'password')
			$('#conf_password').focus()
		}
	})
})