<?php
$correo=$_SESSION['correo'];
$user=$_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="id=edge">

    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/fontawesome-all.css">
    <link rel="shortcut icon" href="<?php echo RUTA_URL;?>/img/icono.png" />
    <title><?php echo NOMBRESITIO;?></title>
    <style>
    #tdtitulo{
    /*background: linear-gradient(#b00b00, #f00f00);*/
    color: rgb(251, 255, 254);
    }
    .tamanioicon{
      font-size: 40px;
      /*color: rgb(203, 46, 24);*/
    }
    .tamanioiconEdit{
      font-size: 70px;
      color: rgb(203, 46, 24);
    }
    .tamanioiconexel{
      font-size: 40px;
      color: rgb(6, 158, 40);
    }
    .tamanioiconEditexel{
      font-size: 70px;
      color: rgb(6, 158, 40);
    }
    .tamanioiconword{
      font-size: 40px;
      color: rgb(11, 64, 181);
    }
    .tamanioiconEditword{
      font-size: 70px;
      color: rgb(11, 64, 181);
    }

    .misarchivos{
      display: flex;
      justify-content: center;    
      flex-direction: row;
    }
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
    <section class="bg-dark">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            
            <div class="container">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="<?php echo RUTA_URL;?>/inicio">Inicio
                      <!--<span class="visually-hidden">(current)</span>-->
                    </a>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Registrar</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="<?php echo RUTA_URL;?>/Recursos/agregarnew">Publicación</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="<?php echo RUTA_URL;?>/Archivosfirma/agregarnew">Archivo a certificar</a>
                    </div>
                  </li>
                  <!--<li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>-->
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

