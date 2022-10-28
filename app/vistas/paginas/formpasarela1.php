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

<div class="container w-75 my-5">
	<form role="form"  name="fe" action="<?php echo RUTA_URL;?>/paginas/formpasarela1" method="post" enctype="multipart/form-data">
	 <div class="row">
	 	<h4 class="text-center">Información personal</h4>
	    <div class="col">
	      	<div class="form-group">
				<label class="col-form-label mt-4" for="inputDefault">Nombre *: </label>
				<input type="text"  required="true" name="name" class="form-control" placeholder="Nombre: " value="<?php echo $datos['name_user'] ?>" id="inputDefault">
			</div>
			<div class="form-group">
			   <label class="col-form-label mt-4" for="inputDefault">Correo *: </label>
			   <input type="email" required="true" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo:" >
			</div>
	    </div>
	    <div class="col">
		    <div class="form-group">
					<label class="col-form-label mt-4" for="inputDefault">Apellidos *: </label>
					<input type="text" required="true" name="apellid" class="form-control" placeholder="Apellidos: " id="inputDefault" value="<?php echo $datos['apellidos_user'] ?>">
		    </div>
		   	<div class="form-group">
				<label class="col-form-label mt-4" for="inputDefault">Teléfono *: </label>
				<input type="text" required="true" name="telefon" class="form-control" placeholder="Teléfono: " id="inputDefault" value="<?php echo $datos['telefono_user'] ?>">
		    </div>
	  </div>
	</div>
	<br>
		<h4 class="text-center mt-4">Domicilio</h4>
		<div class="form-group">
				<label class="col-form-label mt-4" for="inputDefault">Nombre de la empresa *: </label>
				<input type="text" required="true" name="name_company" class="form-control" placeholder="Nombre de la empresa: " id="inputDefault" value="<?php echo $datos['company_user'] ?>">
		</div>
		<div class="form-group">
				<label class="col-form-label mt-4" for="inputDefault">Dirección *: </label>
				<input type="text" required="true" name="direction" class="form-control" placeholder="Dirección: " id="inputDefault" value="<?php echo $datos['direccion_user'] ?>">
		</div>
		<div class="form-group">
				<label class="col-form-label mt-4" for="inputDefault">Dirección 2: </label>
				<input type="text" name="direction2" class="form-control" placeholder="Dirección 2: " id="inputDefault" value="<?php echo $datos['direccion_user2'] ?>">
		</div>
		<div class="row">
				<div class="col">
						<div class="form-group">
						<label class="col-form-label mt-4" for="inputDefault">Estado *: </label>
						<input type="text" required="true" name="estado" class="form-control" placeholder="Estado: " id="inputDefault" value="<?php echo $datos['estado_user'] ?>">
				</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label class="col-form-label mt-4" for="inputDefault">Ciudad *: </label>
						<input type="text" required="true" name="ciudad" class="form-control" placeholder="Ciudad: " id="inputDefault" value="<?php echo $datos['ciudad_user'] ?>">
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label class="col-form-label mt-4" for="inputDefault">C.P.: * </label>
						<input type="text" required="true" name="CP" class="form-control" placeholder="C.P.: " id="inputDefault" value="<?php echo $datos['cp_user'] ?>">
					</div>
				</div>
		</div>
		<br>
		<div class="row">
					<h4 class="text-center mt-4">Seguridad de tu cuenta</h4>
				<div class="col">
					  <div class="form-floating mt-4">
					    <input type="password" required="true" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
					    <label for="floatingPassword">Password *</label>
					  </div>
				</div>
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
	  <input type="submit" class="btn btn-primary" value="Continuar">
	</form>
</div>


  <footer class="bg-dark text-center text-white ">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i
        ></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>

        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="#">Portal de Gobierno del Estado de Oaxaca 2022</a>
    </div>
    <!-- Copyright -->
  </footer>
<?php require RUTA_APP . '/vistas/inc/footer-form.php';?>
<?php
}
 ?>
