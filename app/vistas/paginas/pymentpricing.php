<?php 
    if(isset($_SESSION['correo']) && isset($datos['access'])) {
      if ($datos['access'] == 200) {
            $correo=$_SESSION['correo'];
            $user=$_SESSION['usuario'];
            $_SESSION['nombre_user'] = $datos['nombre_user'];
            $_SESSION['apellido_user'] = $datos['apellido_user'];
?>
<style type="text/css">
  .text-small{
    font-size: 11px;
    }
/*#wrapper{
  height:auto;
  width:700px;
  background:#fff;
  border:1px solid grey;
  border-radius:10px;
  margin:3em auto 0 auto;
  overflow:hidden;
  box-shadow:0px 2px 25px #000;
}
.row{
  display:flex;
  justify-content:center;
}
.row:nth-of-type(1) .col-xs-5{
  display:flex;
  flex-direction:column;
  align-items:center;
  background:#e6e6e6;
/*   border:solid 1px transparent; */
 /* border-radius:4px;
  margin:1em 5px;
}
.row:nth-of-type(1) .col-xs-5 #cards{
  display:flex;
  flex-direction:row;
  flex-wrap:nowrap;
  justify-content:center;
}
.row:nth-of-type(1) .col-xs-5 #cards img{
  width:100px;
  height:100px;
}

.row:nth-of-type(2) .col-xs-5{
  display:flex;
  flex-direction:column;
  justify-content:space-around;
  flex-basis:45%;
}
.row:nth-of-type(2) .col-xs-5 input{
  border:2px solid lightgrey;
  height:35px;
  border-radius:10px;
  padding-left:10px;
}
.row .col-xs-5 input:focus, .row:nth-of-type(3) .col-xs-2 input:focus{
  border-color:green;
  outline:0;
}
label{
  position:relative;
}
 .fa{
  position:absolute;
  right:25px;
  bottom:10px;
}
.row-three{
  display:flex;
  justify-content:space-around;
  align-items:baseline;
  align-content:space-between;
  margin:2em 1em 2.4em 1em;
}
.row:nth-of-type(3) .col-xs-2{
  flex-basis:50%;
}
.row:nth-of-type(3) .col-xs-5{
  flex-basis:40%;
  align-items:baseline;
}
.row:nth-of-type(3) .col-xs-2 input{
  height:35px;
  border:2px solid lightgrey;
  border-radius:10px;
  padding-left:10px;
}
.row:nth-of-type(3) .col-xs-5 .small{
  font-size:.70em;
}*/

</style>

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
                    <a class="nav-link active" href="#">Sistema de pago
                    </a>
                  </li>
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

    <section class="d-flex justify-content-center mt-4">
      <div class="card bg-light mb-3" style="max-width: 50rem;">
        <div class="card-header">Sistemas de pagos</div>
        <div class="card-body">
            <form role="form"  name="fe" action="<?php echo RUTA_URL;?>/paginas/pymentPricing/" method="post" enctype="multipart/form-data">
              <div class="row">
                <fieldset class="form-group text-center">
                  <legend class="mt-4">Suscripción semestral a la revista semanal digital</legend>
                  <img class="w-25" src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Visa-icon.png">
                  <img class="w-25" src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Master-Card-icon.png">
                  <div class="form-check text-left">
                    <input class="form-check-input" type="radio" name="paquete" id="optionsRadios1" value="650" checked="">
                    <label class="form-check-label" for="optionsRadios1">
                      Paga $650.00 con tarjeta de crédito
                    </label>
                  </div>
                  <!--<div class="form-check">
                    <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    <label class="form-check-label" for="optionsRadios2">
                      Option two can be something else and selecting it will deselect option one
                    </label>
                  </div>
                  <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
                    <label class="form-check-label" for="optionsRadios3">
                      Option three is disabled
                    </label>
                  </div>-->
                </fieldset>
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label class="col-form-label mt-4" for="inputDefault">Nombre: </label>
                      <input  name="name" type="hidden" value="<?php echo $_SESSION['correo']; ?>" size="26" required />
                      <p><?php echo $_SESSION['usuario']; ?> <?php echo $_SESSION['apellido_user']; ?></p>
                      <!--<input type="text" name="name" class="form-control" placeholder="Nombre: " value="" id="inputDefault">-->
                    </div>
                  </div>
                  
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label class="col-form-label mt-4" for="inputDefault">Número de tarjeta: </label>
                      <input type="text" required="true" name="cart_num" class="form-control" placeholder="Número de tarjeta:" value="" id="inputDefault" title="Campo solo acepta 14 caracteres" maxlength="14">
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label class="col-form-label mt-4" for="inputDefault">CVV / CVC *: </label>
                      <input type="text" required="true" name="num-sdd" class="form-control" placeholder="CVV / CVC *: " value="" id="inputDefault" title="Campo solo acepta 4 caracteres" maxlength="4">
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                  <div class="form-group">
                      <label class="col-form-label mt-4" for="inputDefault"><br> </label>
                      <input type="submit" class="btn btn-primary form-control" value="Pagar">
                  </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <p class="mt-3 fst-italic text-small">
                      * CVV o CVC es el código de seguridad de la tarjeta, un número único de tres dígitos en el reverso de su tarjeta separado de su número.
                    </p>
                  </div>
                  <div class="col-12 col-sm-6"> 
                  </div>
                </div>
            </div>
          </form>
        </div>
      </div>
    </section>

  <footer class="bg-dark text-center text-white">
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
<script type="text/javascript">
  $('input[type="checkbox"]').on('click',function(){
    var selected = $(this).parent().parent().parent();    $(selected).toggleClass('highlight');
    });
</script>
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