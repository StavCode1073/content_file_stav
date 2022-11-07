<?php 
    if(isset($_SESSION['correo']) && isset($datos['access'])) {
    	if ($datos['access'] == 200) {
            $correo=$_SESSION['correo'];
            $user=$_SESSION['usuario'];
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
                    <a class="nav-link active" href="<?php echo RUTA_URL;?>/paginas/selectPlan">Elíje un plan
                    </a>
                  </li>
                <li class="nav-item dropdown text-right">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $user;?></a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Ayuda</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">
                        <form role="form"  name="fe" action="<?php echo RUTA_URL;?>/paginas/logout" method="post">
                          <input  name="usuario" type="hidden" value="<?php echo $_SESSION['correo']; ?>" size="26" required />
                          <button type="submit" class="btn btn-primary btn-flat"><span class="fas fa-power-off" aria-hidden="true"></span> Salir</button>
                        </form>

                      </a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </section>

<div class="container w-75 my-5">
	<form role="form"  onsubmit="verificarPasswords(); return false" name="fe" action="<?php echo RUTA_URL;?>/paginas/formpasarela1" method="post" enctype="multipart/form-data">
	 <div class="row">
	 	<h4 class="text-center">ORDEN DE COMPRA PERIODICO OFICIAL</h4>
	    <div class="col">
	      	<div class="form-group">
				<label class="col-form-label mt-4" for="inputDefault">Fecha *: </label>
				<input type="text" tabindex="1"  required="true" name="Fecha" class="form-control" placeholder="Fecha: " value="" id="inputDefault">
			</div>
			<div class="form-group">
			   <label class="col-form-label mt-4" for="inputDefault">R.F.C *: </label>
			   <input type="email" tabindex="3" required="true" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="R.F.C:" >
			</div>
	    </div>
	    <div class="col">
		    <div class="form-group">
					<label class="col-form-label mt-4" for="inputDefault">Nombre o Razón Social *: </label>
					<input type="text" tabindex="2" required="true" name="apellid" class="form-control" placeholder="Nombre o Razón Social: " id="inputDefault" value="">
		    </div>
		   	<div class="form-group">
				<label class="col-form-label mt-4" for="inputDefault">Numero de páginas del documento *: </label>
				<input type="text" tabindex="4" required="true" name="telefon" class="form-control" placeholder="Numero de páginas del documento: " id="inputDefault" value="">
		    </div>
	  </div>
	</div>
	<br>
	<table class="table">
	<thead>
		<tr>
		<th scope="col">COTIZA A.</th>
		<th scope="col">COSTOS</th>
		<th scope="col">CANTIDAD</th>
		<th scope="col">VECES A PUBLICARSE</th>
		<th scope="col">TOTAL</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<th scope="row">CUARTO DE PLANA</th>
		<td>$ 481.00</td>
		<td></td>
		<td></td>
		<td>$ 0.00</td>
		</tr>
		<tr>
		<th scope="row">MEDIA DE PLANA</th>
		<td>$ 770.00</td>
		<td></td>
		<td></td>
		<td>$ 0.00</td>
		</tr>
		<tr>
		<th scope="row">PLANA COMPLETA</th>
		<td>$ 1,155.00</td>
		<td></td>
		<td></td>
		<td>$ 0.00</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td>Total: </td>
			<td>$ 0.00</td>
		</tr>
	</tbody>
	</table>
	<br>
	<div class="row">
	    <div class="col">
	      	<div class="form-group">
				<label class="col-form-label mt-4" for="inputDefault">Población *: </label>
				<input type="text" tabindex="6"  required="true" name="Fecha" class="form-control" placeholder="Población: " value="" id="inputDefault">
			</div>
	    </div>
	    <div class="col">
		    <div class="form-group">
					<label class="col-form-label mt-4" for="inputDefault">Expediente N. *: </label>
					<input type="text" tabindex="6" required="true" name="apellid" class="form-control" placeholder="Expediente N.: " id="inputDefault" value="">
		    </div>

	  </div>
	</div>
	<br>
	<div class="form-group">
		<label class="col-form-label mt-4" for="inputDefault">Juzgado o Municipo: *: </label>
		<input type="text" tabindex="7" required="true" name="name_company" class="form-control" placeholder="Juzgado o Municipo: " id="inputDefault" value="">
	</div>
<br><br>
	<table class="table table-bordered">
	<thead>
		<tr>
		<th></th>
		<th scope="col">PERIODICO No.</th>
		<th scope="col">DE FECHA</th>
		<th scope="col"></th>

		</tr>
	</thead>
	<tbody>

		<tr>
		<th rowspan="4" scope="col">FECHAS DE PUBLICACIÓN</th>
		<td></td>
		<td></td>
		<td rowspan="2">VECES A PUBLICARSE</td>
		</tr>

		<tr>
		<td></td>
		<td></td>

		</tr>

		<tr>
		<td></td>
		<td></td>
		<td rowspan="2"></td>
		</tr>

		<tr>
			<td></td>
			<td></td>

		</tr>
	</tbody>
	</table>

	<br>
	<div class="row">
	    <div class="col">
	      	<div class="form-group">
				<label class="col-form-label mt-4" for="inputDefault">Cotizo *: </label>
				<input type="text" tabindex="8"  required="true" name="Fecha" class="form-control" placeholder="Cotizo: " value="" id="inputDefault">
			</div>
	    </div>
	    <div class="col">
		    <div class="form-group">
					<label class="col-form-label mt-4" for="inputDefault">Programo *: </label>
					<input type="text" tabindex="9" required="true" name="apellid" class="form-control" placeholder="Programo : " id="inputDefault" value="">
		    </div>

	  </div>
	</div>
    <!--<div class="form-group">
      <label for="exampleSelect1" class="form-label mt-4">Elige paquete: </label>
      <select class="form-select" id="exampleSelect1">
        <option value="99">$99.00/mx</option>
        <option value="209">$209.00/mx</option>
      </select>
    </div>-->
    <br><br>
	<div class="float-end">		
	<a href="<?php echo RUTA_URL;?>/paginas/formsolicitud" class="btn btn-primary">Continuar</a>
		<!-- <input type="submit" tabindex="13" class="btn btn-primary" value="Continuar"> -->
	</div>
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

        }elseif ($datos['access'] == 100) {
            redireccionar('/paginas/inicio');
        }else{
            redireccionar('/paginas/formPasarela1');
        }

    }else{
        redireccionar('/paginas/formPasarela1');
    }
 ?>
