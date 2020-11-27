$(document).ready(()=>{
	$('#avatar_input').change(function(){
		if(this.files && this.files[0]){
			let file = new FileReader()
			file.onload = event=>{
				$('#avatar').attr('src', event.target.result)
				$('#avatar').css({
					'display': 'block'
				})
			}
			file.readAsDataURL(this.files[0])
		}
	})
	$('#product_picture_input').change(function(){
		if(this.files && this.files[0]){
			let file = new FileReader()
			file.onload = event=>{
				$('#product_picture').attr('src', event.target.result)
				$('#product_picture').css({
					'display': 'block'
				})
			}
			file.readAsDataURL(this.files[0])
		}
	})
})