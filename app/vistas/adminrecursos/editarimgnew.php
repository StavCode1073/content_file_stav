<?php
if(isset($_SESSION['correo'])) {
    date_default_timezone_set("America/Mexico_City");
    $mes = date("m");
    $anio = date("Y");
 ?>
<?php require RUTA_APP . '/vistas/inc/header_admin.php'; ?>
<header class="container">
   <hr>
</header>
<header id="header">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h1><span class="fas fa-cog" aria-hidden="true"></span> Centro de recursos<small> Editar Imagen</small></h1>
      </div>
    </div>
  </div>
</header>

<section id="breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="<?php echo RUTA_URL;?>/inicio">Incio</a></li>
      <li><a href="<?php echo RUTA_URL;?>/recursos/listado">Listado</a></li>
      <li class="active">Editar Imagen</li>
      <li><?php echo $datos['descripcion']; ?></li>
    </ol>
  </div>
</section>

<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <?php require RUTA_APP . '/vistas/inc/izquierda.php'; ?>
      </div>
      <div class="col-md-9">
        <!-- Editar -->
        <div class="panel panel-default">
          <div class="panel-heading main-color-bg">
            <h3 class="panel-title">Editar Imagen Catálogo</h3>
          </div>
          <div class="panel-body">
            <center>
              <?php
              switch ($datos['tipo']) {
              case 'application/pdf':
              echo"
                <h4>Nobre del Archivo: ".$datos['archivo']."</h4>
                <br>
                <a  title='VISUALIZAR IMAGEN' target='_Blank' href='".RUTA_URL."/img/recursos/".$datos['archivo']."'>
                  <span class='fas fa-file-pdf tamanioiconEdit'></span>
                </a>";
              break;
              case 'application/xlsx':
              echo"
                  <h4>Nobre del Archivo: ".$datos['archivo']."</h4>
                  <br>
                  <a  title='VISUALIZAR IMAGEN' target='_Blank' href='".RUTA_URL."/img/recursos/".$datos['archivo']."'>
                    <span class='fas fa-file-excel tamanioiconEditexel'></span>
                  </a>";
              break;
              case 'application/docx':
                  echo"
                  <h4>Nobre del Archivo: ".$datos['archivo']."</h4>
                  <br>
                    <a  title='VISUALIZAR IMAGEN' target='_Blank' href='".RUTA_URL."/img/recursos/".$datos['archivo']."'>
                      <span class='fas fa-file-word tamanioiconEditword'></span>
                    </a>";
              break;
              default:
                  echo"
                  <a title='VISUALIZAR IMAGEN'>
                    <img src='".RUTA_URL."/img/recursos/".$datos['archivo']."' class='img-responsive img-thumbnail'>
                  </a>";
              break;
              }
               ?>
              <br/>
              <br/>
            </center>
            <form role="form"  name="fe" action="<?php echo RUTA_URL;?>/recursos/editarimgnew/<?php echo $datos['id_documento']; ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <div class="alert alert-success" role="alert">
                  <h4 class="alert-heading">¡Aviso!</h4>
                    <p>El sistema no acepta archivos de nombre con acentos y símbolos, ejemplo: catálogos.pdf, año.png, o actualización.jpg.
                    </p>
                </div>
                <p id="obligatorio"><label for="archivo">Imagen *</label></p>
                <input type="file" name="imagen" id="imagen" class="btn btn-danger btn-lg" required>
                <p class="help-block">Maximo 3MB</p>

                <input  id="id_user" name="imgname" type="hidden" value="<?php echo $datos['archivo'];?>" size="26" required />
                <input  id="id_user" name="anio" type="hidden" value="<?php echo $anio;?>" size="26" required />
              </div>
              <input type="submit" class="btn btn-danger" value="Editar Imagen">
            </form>
          </div>
          </div>

      </div>

    </div>
  </div>
</section>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>
<?php
}else{
redireccionar('/paginas/loginadm');
}
 ?>
