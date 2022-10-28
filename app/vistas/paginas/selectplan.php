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
                    <a class="nav-link active" href="#">Elíje un plan
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

<div class="row mx-2  mx-md-0 my-5">
    <div class="col-12 col-md-2"></div>
    <div class="col-12 col-md-8">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="mx-2 card-body">
                <h5 class="card-title my-2 ">Hemeroteca + suscripción anual a la revista semanal digital</h5>
                <p class="text-muted mb-2">
                  Prepago
                </p>
                <p class="h2 fw-bold">$1,450.00<small class="text-muted" style="font-size: 18px;">MXN</small></p>
                <p class="text-muted mb-2">
                  Acceso a este contenido por 12 meses
                </p>
                <a href="#" class="btn btn-dark d-block mb-2 mt-3 text-capitalize">Seleccionar plan</a>
              </div>
              <div class="card-footer">
                <p class="text-uppercase fw-bold" style="font-size: 12px;">Incluye</p>
                <ol class="list-unstyled mb-0 px-4">
                  <p class="my-3 text-justify">
                    Contiene 43 años de información + 52 ejemplares semanales digitales. Ambos productos son para consulta en línea, no son descargables, del ejemplar 1 al 1521 está en texto (no tiene imágenes) del ejemplar 1522 a la fecha están con texto y fotos. No están incluidos los libros y ediciones especiales. Tenemos servicio especial para investigadores. informes 55 5636 2083
                  </p>
                  <!--<li class="mb-3">
                    <i class="fas fa-check text-success me-3"></i><small>Lorem Ipsum</small>
                  </li>
                  <li class="mb-3">
                    <i class="fas fa-check text-success me-3"></i><small>Lorem Ipsum</small>
                  </li>-->
                </ol>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border border-dark shadow p-3 mb-5 bg-body rounded">
              <div class="mx-2 card-body">
                <h5 class="card-title my-2 ">Suscripción semestral a la revista semanal digital</h5>
                <p class="text-muted">
                  Prepago
                </p>
                <p class="h2 fw-bold">$650.00<small class="text-muted" style="font-size: 18px;">MXN</small></p>
                    <p class="text-muted mb-2">
                       Acceso a este contenido por 6 mes
                    </p>
                <a  href="<?php echo RUTA_URL;?>/paginas/pymentPricing/" class="btn btn-dark d-block mb-2 mt-3 text-capitalize">Seleccionar plan</a>
              </div>
              <div class="card-footer">
                <p class="text-uppercase fw-bold" style="font-size: 12px;">Incluye</p>
                <ol class="list-unstyled mb-0 px-4">
                  <p class="my-3 text-justify">
                    Adquiere la suscripción a la revista semanal digital por seis meses, no es un producto descargable, es para consulta en línea. No incluye el servicio de Hemeroteca. No están incluidos los libros y ediciones especiales.
                  </p>
                  <!--<li class="mb-3">
                    <i class="fas fa-check text-success me-3"></i><small>Lorem Ipsum</small>
                  </li>
                  <li class="mb-3">
                    <i class="fas fa-check text-success me-3"></i><small>Lorem Ipsum</small>
                  </li>
                  <li class="mb-3">
                    <i class="fas fa-check text-success me-3"></i><small>Lorem Ipsum</small>
                  </li>-->
                </ol>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="mx-2 card-body">
                <h5 class="card-title my-2 ">Suscripción mensual a la revista semanal digital</h5>
                <p class="text-muted">
                  Prepago
                </p>
                <p class="h2 fw-bold">$150.00<small class="text-muted" style="font-size: 18px;">MXN</small></p>
                    <p class="text-muted mb-2">
                       Acceso a este contenido por 1 mes
                    </p>
                <a href="#" class="btn btn-dark d-block mb-2 mt-3 text-capitalize">Seleccionar plan</a>
              </div>
              <div class="card-footer">
                <p class="text-uppercase fw-bold" style="font-size: 12px;">Incluye</p>
                <ol class="list-unstyled mb-0 px-4">
                  <p class="my-3 text-justify">
                    Adquiere la suscripción a la revista semanal digital por un mes, no es un producto descargable, es para consulta en línea. No incluye el servicio de Hemeroteca. Libros y ediciones especiales se adquieren de forma individual.
                  </p>
                 <!-- <li class="mb-3">
                    <i class="fas fa-check text-success me-3"></i><small>Lorem Ipsum</small>
                  </li>
                  <li class="mb-3">
                    <i class="fas fa-check text-success me-3"></i><small>Lorem Ipsum</small>
                  </li>
                  <li class="mb-3">
                    <i class="fas fa-check text-success me-3"></i><small>Lorem Ipsum</small>
                  </li>
                  <li class="mb-3">
                    <i class="fas fa-check text-success me-3"></i><small>Lorem Ipsum</small>
                  </li>-->
                </ol>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="col-12 col-md-2"></div>
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

        }elseif ($datos['access'] == 100) {
            redireccionar('/paginas/inicio');
        }else{
            redireccionar('/paginas/formPasarela1');
        }

    }else{
        redireccionar('/paginas/formPasarela1');
    }
 ?>