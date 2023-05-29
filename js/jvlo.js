const formulario = document.getElementById('form');
const inputs = document.querySelectorAll('#form input');

const expresiones = {
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+[a-zA-Z0-9-.]+$/,
	contra: /^.{5,8}$/,
}

const campos = {
	correo: false,
	contra: false,
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');
		break;
		case "contra":
			validarCampo(expresiones.contra, e.target, 'contra');
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

inputs.forEach((input) => {
	input.addEventListener('keyup',validarFormulario);
	input.addEventListener('blur',validarFormulario);
});

function acceso(){
	location.href = "index.html";
}

formulario.addEventListener('submit', (e) => {
	e.preventDefault();

	if(campos.correo && campos.contra){
		formulario.reset();

		document.querySelectorAll('.form__grupo-correcto').forEach((icono) => {
			icono.classList.remove('form__grupo-correcto');
		});
		acceso();

	}else {
		document.getElementById('form__mensaje').classList.add('form__mensaje-activo');
		document.getElementById('content').classList.add('content-ex');
		setTimeout(() => {
			document.getElementById('form__mensaje').classList.remove('form__mensaje-activo');
			document.getElementById('content').classList.remove('content-ex');
		},3000);
	}
});