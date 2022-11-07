<?php 
    if(isset($_SESSION['correo']) && isset($datos['access'])) {
    	if ($datos['access'] == 200) {
            $correo=$_SESSION['correo'];
            $user=$_SESSION['usuario'];
?>

<?php require RUTA_APP . '/vistas/inc/header-form.php';?>
<style>
  .iconos-tamanio{
    font-size: 42px;
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
<div class="container my-5">
  <h2 class="text-center">Documento oficial</h2>
</div>
<div class="row mx-2  mx-md-0 my-5">
    <div class="col-12 col-md-6">
        <figure class="text-center">
            <blockquote class="blockquote px-5">
                <p class="mb-5">Para continuar con tu solicitud de publicación oficial le proporcionamos un correo electrónico para que nos envié el documento a publicar.</p>
                <p class="p-3 mb-2 bg-primary text-white">documentooficial@oaxaca.com.mx</p>
            </blockquote>
        </figure>
    </div>
      <div class="col-12 col-md-6">
      <div class="row">
      </div>
    </div>
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
		      <a
		        class="btn btn-link btn-floating btn-lg text-dark m-1 text-iconos"
		        href="#!"
		        role="button"
		        data-mdb-ripple-color="dark"
		        >
            <i class="fa-brands fa-whatsapp"></i>
          
          </a>

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