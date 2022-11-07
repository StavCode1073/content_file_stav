 
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
  <!-- <script type="text/javascript" src="<?php echo RUTA_URL;?>/js/jquery.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo RUTA_URL;?>/js/fontawesome-all.js"></script>

  <script type="text/javascript">
	// funcion de mostrar y ocultar contraseña
	function mostrarPassword(){
			var cambio = document.getElementById("txtPassword");
			if(cambio.type == "password"){
				cambio.type = "text";
				$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
			}else{
				cambio.type = "password";
				$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
			}
			
			var cambio2 = document.getElementById("txtPassword2");
			if(cambio2.type == "password"){
				cambio2.type = "text";
				$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
			}else{
				cambio2.type = "password";
				$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
			}
		} 
		


	// funcion de validacion de contraseña
	function verificarPasswords() {
 
 // Ontenemos los valores de los campos de contraseñas 
	pass1 = document.getElementById('txtPassword');
	pass2 = document.getElementById('txtPassword2');

	// Verificamos si las constraseñas no coinciden 
	if (pass1.value != pass2.value) {

		// Si las constraseñas no coinciden mostramos un mensaje 
		document.getElementById("error").classList.add("mostrar");

		return false;
	} else {

		// Si las contraseñas coinciden ocultamos el mensaje de error
		document.getElementById("error").classList.remove("mostrar");

		// Mostramos un mensaje mencionando que las Contraseñas coinciden 
		document.getElementById("ok").classList.remove("ocultar");

		// Desabilitamos el botón de login 
		document.getElementById("login").disabled = true;

		// Refrescamos la página (Simulación de envío del formulario) 
		setTimeout(function() {
			location.reload();
		}, 3000);

		return true;
	}

	}
</script>

  </body>


</html>