const formulario = document.getElementById('form');
const inputs = document.querySelectorAll('#form input');

const expresiones = {
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+[a-zA-Z0-9-.]+$/,
	contra: /^.{5,8}$/,
	nombre: /^[a-zA-ZA-y\s]{1,40}$/,
	phone: /^\d{9,9}$/
}

const campos = {
	correo: false,
	contra: false,
	nombre: false,
	apellido: false,
	phone: false
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');
		break;
		case "contra":
			validarCampo(expresiones.contra, e.target, 'contra');
			validarContra2();
		break;
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		case "apellido":
			validarCampo(expresiones.nombre, e.target, 'apellido');
		break;
		case "contra2":
			validarContra2();
		break;
		case "phone":
			validarCampo(expresiones.phone, e.target, 'phone');
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('form__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('form__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-circle-check');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-circle-xmark');
		document.querySelector(`#grupo__${campo} .form__input-error`).classList.remove('form__input-error-activo');
		campos[campo] = true;
	}else{
		document.getElementById(`grupo__${campo}`).classList.add('form__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('form__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-circle-xmark');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-circle-check');
		document.querySelector(`#grupo__${campo} .form__input-error`).classList.add('form__input-error-activo');
		campos[campo] = false;
	}
}

const validarContra2 = () => {
	const inputContra = document.getElementById('contra');
	const inputContra2 = document.getElementById('contra2');

	if (inputContra.value !== inputContra2.value){
		document.getElementById(`grupo__contra2`).classList.add('form__grupo-incorrecto');
		document.getElementById(`grupo__contra2`).classList.remove('form__grupo-correcto');
		document.querySelector(`#grupo__contra2 i`).classList.add('fa-circle-xmark');
		document.querySelector(`#grupo__contra2 i`).classList.remove('fa-circle-check');
		document.querySelector(`#grupo__contra2 .form__input-error`).classList.add('form__input-error-activo');
		campos['contra'] = false;
	}else{
		document.getElementById(`grupo__contra2`).classList.remove('form__grupo-incorrecto');
		document.getElementById(`grupo__contra2`).classList.add('form__grupo-correcto');
		document.querySelector(`#grupo__contra2 i`).classList.add('fa-circle-check');
		document.querySelector(`#grupo__contra2 i`).classList.remove('fa-circle-xmark');
		document.querySelector(`#grupo__contra2 .form__input-error`).classList.remove('form__input-error-activo');
		campos['contra'] = true;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup',validarFormulario);
	input.addEventListener('blur',validarFormulario);
});

function acceso(){
	location.href = "login.html";
}

formulario.addEventListener('submit', (e) => {
	e.preventDefault();
	const terminos = document.getElementById('terminos');
	if(campos.correo && campos.contra && campos.nombre && campos.apellido && campos.phone && terminos.checked){
		formulario.reset();
		document.querySelectorAll('.form__grupo-correcto').forEach((icono) => {
			icono.classList.remove('form__grupo-correcto');
		});
		document.getElementById('form__mensaje-exito').classList.add('form__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('form__mensaje-exito').classList.remove('form__mensaje-exito-activo');
			acceso();
		},2000);
	}else {
		document.getElementById('form__mensaje').classList.add('form__mensaje-activo');
		document.getElementById('content').classList.add('content-ex');
		setTimeout(() => {
			document.getElementById('form__mensaje').classList.remove('form__mensaje-activo');
			document.getElementById('content').classList.remove('content-ex');
		},2500);
	}
});