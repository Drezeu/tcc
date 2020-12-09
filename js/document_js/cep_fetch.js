const S = selector => document.querySelector(`${selector}`)
const cep_validation = () => S('#zipcode').addEventListener('input', event=>{
	var cep_valid = S('#zipcode').value.replace(/\D/g, '')
	if(S('#zipcode').length == 0 || cep_valid.length == 0){
		form_clear()
	}
	else if(cep_valid.length == 8){
		S('#zipcode').setAttribute('disabled', 'disabled')
		via_cep(cep_valid)
	}
})
const via_cep = req => fetch(`https://viacep.com.br/ws/${req}/json/`)
	.then(res => res.json())
	.then(data => {
		if(data.erro){
			form_clear()
			S('#zipcode').removeAttribute('disabled')
			S('#zipcode').focus()
		}
		else{
			put_in_html([data][0])
		}
	})
	.catch(err => {
		if(err){
			form_clear()
			console.log(err.erro)
		}
	})
const put_in_html = res=>{
	S('#zipcode').removeAttribute('disabled')
	S('#zipcode').value = res['cep']
	S('#street').value = res['logradouro']
	S('#complement').value = res['complemento']
	S('#neighborhood').value = res['bairro']
	S('#city').value = res['localidade']
	S('#state').value = res['uf']
}
const form_clear = ()=>{
	S('#zipcode').value = null
	S('#street').value = null
	S('#complement').value = null
	S('#neighborhood').value = null
	S('#city').value = null
	S('#state').value = null
}
window.onload = cep_validation()