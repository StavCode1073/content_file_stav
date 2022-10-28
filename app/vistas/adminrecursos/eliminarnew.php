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
        <h1><span class="fas fa-cog" aria-hidden="true"></span> Centro de recursos<small> Eliminar</small></h1>
      </div>
    </div>
  </div>
</header>

<section id="breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo RUTA_URL;?>/inicio">Incio</a></li>
      <li class="breadcrumb-item"><a href="<?php echo RUTA_URL;?>/recursos/listado">Listado</a></li>
      <li class="active breadcrumb-item">Editar</li>
      <li class="breadcrumb-item"><?php echo $datos['descripcion']; ?></li>
    </ol>
  </div>
</section>

<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <!-- imagen producto -->
        <div class="box">
          <div class="box-header">
            <div class="box-header">
              <center>
                <h3>Editar o Visualizar</h3>
              </center>
            </div>
            <center>
              <?php
              switch ($datos['tipo']) {
              case 'application/pdf':
              echo"
                  <h4><a href='".RUTA_URL."/recursos/editarimgnew/".$datos['id_documento']."' class='alert-link'>Achivo del Catálogo</a></h4>
                <a href='".RUTA_URL."/recursos/editarimgnew/".$datos['id_documento']."'>
                  <span class='fas fa-file-pdf tamanioiconEdit'></span>
                </a>";
              break;
              case 'application/xlsx':
              echo"
                  <h4><a href='".RUTA_URL."/recursos/editarimgnew/".$datos['id_documento']."' class='alert-link'>Achivo del Catálogo</a></h4>
                  <a href='".RUTA_URL."/recursos/editarimgnew/".$datos['id_documento']."'>
                    <span class='fas fa-file-excel tamanioiconEdit'></span>
                  </a>";
              break;
              case 'application/docx':
                  echo"
                    <h4><a href='".RUTA_URL."/recursos/editarimgnew/".$datos['id_documento']."' class='alert-link'>Achivo del Catálogo</a></h4>
                    <a href='".RUTA_URL."/recursos/editarimgnew/".$datos['id_documento']."'>
                      <span class='fas fa-file-word tamanioiconEdit'></span>
                    </a>";
              break;
              default:
                  echo"
                  <h4><a href='".RUTA_URL."/recursos/editarimgnew/".$datos['id_documento']."' class='alert-link'>Achivo del Catálogo</a></h4>
                  <a href='".RUTA_URL."/recursos/editarimgnew/".$datos['id_documento']."'>
                    <img src='".RUTA_URL."/img/recursos/".$datos['archivo']."' class='img-responsive img-thumbnail'>
                  </a>";
              break;
              }
               ?>
              <br/>
              <br/>
            </center>
          </div>
        </div>
      <?php require RUTA_APP . '/vistas/inc/izquierda.php'; ?>
      </div>
      <div class="col-md-9">
        <!-- Editar -->
        <div class="panel panel-default">
          <div class="panel-heading main-color-bg">
            <h3 class="panel-title">Eliminar Catálogo</h3>
          </div>
          <div class="panel-body">
            <form role="form"  name="fe" action="<?php echo RUTA_URL;?>/recursos/eliminarnew/<?php echo $datos['id_documento']; ?>" method="post" enctype="multipart/form-data">
              <div class="form-group mb-2">
                <label>Descripción </label>
                <textarea name="descripcion" class="form-control" placeholder="Mensaje"><?php echo $datos['descripcion']; ?></textarea>
              </div>
              <div class="form-group mb-3 mb-2">
                <label>Fecha registro </label>
                <input type="date" name="fechaRegistro" class="form-control" placeholder="Fecha de registro" value="<?php echo $datos['fechaRegistro']; ?>" required>
                </div>
                <input  id="id_user" name="imgname" type="hidden" value="<?php echo $datos['archivo'];?>" size="26" required />
              <input type="submit" class="btn btn-danger" value="Eliminar Catálogo">
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
