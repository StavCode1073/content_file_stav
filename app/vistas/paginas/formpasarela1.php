<?php
    if (isset($datos['email'])&& isset($datos['access'])) {
    	if ($datos['access'] == 200) {
    		    $correo=$_SESSION['correo'] = $datos['email'];
			      $user=$_SESSION['usuario'] = $datos['user'];
			      $_SESSION['access'] = $datos['access'];
			      redireccionar('/paginas/selectPlan');
    	}

    }else {
      $correo = 'Registrate';
    }
    if(isset($_SESSION['correo']) && isset($_SESSION['access'])) {
    	if ($_SESSION['access'] == 200) {
    		  redireccionar('/paginas/selectPlan');
    	}elseif ($_SESSION['access'] == 100) {
    		redireccionar('/paginas/inicio');
    	}else{
    		redireccionar('/paginas/formPasarela1');
    	}

    }else{
?>
<?php require RUTA_APP . '/vistas/inc/header-form.php';?>

<style>
	/* estilos mesajes de validacion de contraseña  */
	.ocultar {
    display: none;
}
 
	.mostrar {
		display: block;
	}
 
</style>
    <header id="encabezadoadmin">
          <div class="container">
          <div class="d-flex justify-content-center">
            <div class="my-3">
              <a href="<?php echo RUTA_URL; ?>"><img src="<?php echo RUTA_URL;?>/img/logos_izq.gif" width="300" height="70"></a>
            </div>
          </div>
        	</div>
    </header>

    <section class="bg-dark">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            
            <div class="container">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Sistema de suscripción
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </section>

	<div id="msg"></div>

	<!-- Mensajes de Verificación -->
	<div id="error" class="alert alert-danger ocultar" role="alert">
		Las Contraseñas no coinciden, vuelve a intentar !
	</div>
	<div id="ok" class="alert alert-success ocultar" role="alert">
		Las Contraseñas coinciden ! (Procesando formulario ... )
	</div>
<!-- Fin Mensajes de Verificación -->



<div class="container w-75 my-5">
	<form role="form"  onsubmit="verificarPasswords(); return false" name="fe" action="<?php echo RUTA_URL;?>/paginas/formpasarela1" method="post" enctype="multipart/form-data">
	 <div class="row">
	 	<h4 class="text-center">Información personal</h4>
	    <div class="col">
	      	<div class="form-group">
				<label class="col-form-label mt-4" for="inputDefault">Nombre *: </label>
				<input type="text" tabindex="1"  required="true" name="name" class="form-control" placeholder="Nombre: " value="<?php echo $datos['name_user'] ?>" id="inputDefault">
			</div>
			<div class="form-group">
			   <label class="col-form-label mt-4" for="inputDefault">Correo *: </label>
			   <input type="email" tabindex="3" required="true" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo:" >
			</div>
	    </div>
	    <div class="col">
		    <div class="form-group">
					<label class="col-form-label mt-4" for="inputDefault">Apellidos *: </label>
					<input type="text" tabindex="2" required="true" name="apellid" class="form-control" placeholder="Apellidos: " id="inputDefault" value="<?php echo $datos['apellidos_user'] ?>">
		    </div>
		   	<div class="form-group">
				<label class="col-form-label mt-4" for="inputDefault">Teléfono *: </label>
				<input type="text" tabindex="4" required="true" name="telefon" class="form-control" placeholder="Teléfono: " id="inputDefault" value="<?php echo $datos['telefono_user'] ?>">
		    </div>
	  </div>
	</div>
	<br>
		<h4 class="text-center mt-4">Domicilio</h4>
		<div class="form-group">
				<label class="col-form-label mt-4" for="inputDefault">Nombre de la empresa *: </label>
				<input type="text" tabindex="5" required="true" name="name_company" class="form-control" placeholder="Nombre de la empresa: " id="inputDefault" value="<?php echo $datos['company_user'] ?>">
		</div>
		<div class="form-group">
				<label class="col-form-label mt-4" for="inputDefault">Dirección *: </label>
				<input type="text" tabindex="6" required="true" name="direction" class="form-control" placeholder="Dirección: " id="inputDefault" value="<?php echo $datos['direccion_user'] ?>">
		</div>
		<div class="form-group">
				<label class="col-form-label mt-4" for="inputDefault">Dirección 2: </label>
				<input type="text" tabindex="7" name="direction2" class="form-control" placeholder="Dirección 2: " id="inputDefault" value="<?php echo $datos['direccion_user2'] ?>">
		</div>
		<div class="row">
				<div class="col">
						<div class="form-group">
						<label class="col-form-label mt-4" for="inputDefault">Estado *: </label>
						<input type="text" tabindex="8" required="true" name="estado" class="form-control" placeholder="Estado: " id="inputDefault" value="<?php echo $datos['estado_user'] ?>">
				</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label class="col-form-label mt-4" for="inputDefault">Ciudad *: </label>
						<input type="text" tabindex="9" required="true" name="ciudad" class="form-control" placeholder="Ciudad: " id="inputDefault" value="<?php echo $datos['ciudad_user'] ?>">
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label class="col-form-label mt-4" for="inputDefault">C.P.: * </label>
						<input type="text" tabindex="10" required="true" name="CP" class="form-control" placeholder="C.P.: " id="inputDefault" value="<?php echo $datos['cp_user'] ?>">
					</div>
				</div>
		</div>
		<br>
		<div class="row my-4">
			<div class="col-md-6">
				<label>Ingrese Contraseña</label>
					<div class="input-group">
				<input id="txtPassword" tabindex="11" type="Password" Class="form-control">
				<div class="input-group-append">
						<button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<label>Repetir Contraseña</label>
				<div class="input-group">
				   <input id="txtPassword2" tabindex="12" type="Password" name="pass" Class="form-control">
				</div>
			</div>
					<!-- <h4 class="text-center mt-4">Seguridad de tu cuenta</h4>
				<div class="col">
					  <div class="form-floating mt-4">
					    <input type="password" tabindex="11" required="true" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
					    <label for="floatingPassword">Password *</label>
					  </div>
				</div> -->
				<!--<div class="col">
					  <div class="form-floating mt-4">
					    <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
					    <label for="floatingPassword">Password</label>
					  </div>
				</div>-->
		</div>
    <!--<div class="form-group">
      <label for="exampleSelect1" class="form-label mt-4">Elige paquete: </label>
      <select class="form-select" id="exampleSelect1">
        <option value="99">$99.00/mx</option>
        <option value="209">$209.00/mx</option>
      </select>
    </div>-->
    <br><br>
	  <input type="submit" tabindex="13" class="btn btn-primary" value="Continuar">
	</form>
</div>

<section class="">
		<footer class="text-center text-white" style="background-color: rgba(0, 0, 0, 0.2);">
		  <!-- Grid container -->
		  <div class="container py-3">
		    <!-- Section: Social media -->
		    <section class="mb-4">
		      <!-- Facebook -->
		      <a
		        class="btn btn-link btn-floating btn-lg text-dark m-1 text-iconos"
		        href="#!"
		        role="button"
		        data-mdb-ripple-color="dark"
		        ><i class="fab fa-facebook-f"></i
		      ></a>

		      <!-- Twitter -->
		      <!-- <a
		        class="btn btn-link btn-floating btn-lg text-dark m-1 text-iconos"
		        href="#!"
		        role="button"
		        data-mdb-ripple-color="dark"
		        >
            <i class="fa-brands fa-whatsapp"></i>
          
          </a> -->

		      <!-- Instagram -->
		      <a
		        class="btn btn-link btn-floating btn-lg text-dark m-1 text-iconos"
		        href="#!"
		        role="button"
		        data-mdb-ripple-color="dark"
		        ><i class="fab fa-instagram"></i
		      ></a>


		    </section>
		    <!-- Section: Social media -->
		  </div>
		  <!-- Grid container -->
		</footer>
	</section>
	<!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-muted mt-2">

  <!-- Section: Links  -->
  <section class="pt-5">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 d-flex flex-column justify-content-center">
          <!-- Content -->
          <h6 class=" fw-bold mb-2 h5 text-center">
            <!--<i class="fas fa-gem me-3 text-secondary"></i>-->Gobierno del Estado de Oaxaca
          </h6>
          <p>
          	<img src="<?php echo RUTA_URL;?>/img/oax-escudo.png" class="rounded mx-auto d-block w-imagen" alt="...">
          </p>
          <!--<p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>-->
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Acceso rapido
          </h6>
					<p><i class="fas fa-home me-3 text-secondary"></i> Inicio</p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contactos</h6>
          
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            contacto@oaxaca.gob.com.mx
          </p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            oaxacaoficial@hotmail.com
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> 558 - 234 - 1212</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © Portal de Gobierno del Estado de Oaxaca 2022
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<?php require RUTA_APP . '/vistas/inc/footer-form.php';?>
<?php
}
 ?>
