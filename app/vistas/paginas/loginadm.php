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
