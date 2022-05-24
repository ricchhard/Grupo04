function validar() {
	// body...
	var correo, telefono, expresion;
	correo= document.getElementById('txtEmail').value;
	telefono= document.getElementById('txtTelefono').value;
	expresion= /^[a-z][\w.-]+@\w[\w.-]+\.[\w.-]*[a-z][a-z]$/i;
	
	/*if(checkSubmit()){
		alert("Script checkSubmit() ejecutado correctamente");
	}
	else{
		alert("Script checkSubmit() No se ejecuto correctamente");
	}*/

	if(!expresion.test(correo)){
		alert("El correo no es válido");
		return false;
	}
	else{
		alert("Correo válido");
		return true;
	}
	
