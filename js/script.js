/*
const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}

const username = document.getElementById('user')
const password = document.getElementById('password')
const btn_acept = document.getElementById('btn_acept')
const btn_cancel = document.getElementById('btn-cancel')

btn_acept.addEventListener('click', (e) => {
	e.preventDefault()

	const data = {
		username:username.value,
		password: password.value
	}

	console.log(data)
})
*/

function confirmar(){
	return confirm('¿Esta Seguro de Eliminar el Registro?');
}