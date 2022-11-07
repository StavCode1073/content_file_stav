<?php
    if (isset($datos['email']) && isset($datos['access'])) {
      if ($datos['access'] == 100) {
        $correo=$_SESSION['correo'] = $datos['email'];
        $user=$_SESSION['usuario'] = $datos['user'];
        $_SESSION['access'] = $datos['access'];
        redireccionar('/paginas/inicio');
        }elseif($datos['access'] == 200){
          $correo=$_SESSION['correo'] = $datos['email'];
          $user=$_SESSION['usuario'] = $datos['user'];
          $_SESSION['access'] = $datos['access'];
          redireccionar('/paginas/selectPlan');
        }else{
          redireccionar('/paginas/formPasarela1');
        }

    }else {
      $correo = 'Iniciar Sesión';
    }
    if(isset($_SESSION['correo']) && isset($_SESSION['access'])) {
      if($_SESSION['access'] == 100){
        redireccionar('/paginas/inicio');
      }elseif($_SESSION['access'] == 200){
        redireccionar('/paginas/selectPlan');
      }else{
         redireccionar('/paginas/formPasarela1');
      }
      
    }else{
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="id=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/estilos_admin.css">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/fontawesome-all.css">
    <!--<link rel="shortcut icon" href="<?php echo RUTA_URL;?>/img/icono.png" />-->
    <title><?php echo NOMBRESITIO;?></title>
    
  	<style type="text/css">
  			.colordiv{
  				top: 150px;
  			}
  			.alto-baner{
  				margin-bottom: 60px;
  			}
  			.w-imagen{
  				width: 90px;
  			}
  			.w-imagen-logo{
  				width: 160px;
  			}
  			.fondo-baner-contacto{
  				background-color: #1380bb;
  			}
  			.text-iconos{
  				font-size: 24px;
  			}
  	</style>
  </head>
<body id="admin">
    <header id="encabezadoadmin">
          <div class="container">
          <div class="d-flex justify-content-center">
            <div class="my-3">
              <a href="<?php echo RUTA_URL; ?>"><img src="<?php echo RUTA_URL;?>/img/logos_izq.gif" width="300" height="70"></a>
            </div>
          </div>
          </div>
    </header>

<div class="container my-5">
<div class="card card-body bg-light">
  <div class="row">
  <div class="col-12 col-sm-3 col-md-4"></div>
   <section  class="col-12 col-sm-6 col-md-4" >
     <header>
          <h3 class=""> <?php echo $correo;?></h3>
          <hr>
     </header>
    <form action="<?php echo RUTA_URL;?>/paginas/loginadm" method="post">
        <div class="form-group">
          <br>
          <label for="nombre">Email: <sup>*  </sup></label>
          <input type="email" name="email" class="form-control form-control-lg" placeholder="Email:" required>
        </div>
        <div class="form-group">
          <br>
          <label for="nombre">Contraseña: <sup>*  </sup></label>
          <input type="password" name="pass" class="form-control form-control-lg" placeholder="Contraseña:" required>
        </div>
        <br><br>
        <!--<input class="btn btn-warning" value="Entrar">-->
        <button type="submit" class="btn btn-warning">Ingresar <i class="fas fa-angle-double-right"></i></button>
    </form>
  </section>
  <div class="col-12 col-sm-3 col-md-4"></div>
</div>
</div>
</div>
<br>
<br>
<br>
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <script type="text/javascript" src="<?php echo RUTA_URL;?>/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo RUTA_URL;?>/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo RUTA_URL;?>/js/fontawesome-all.js"></script>
  </body>
</html>
<?php
}
 ?>
