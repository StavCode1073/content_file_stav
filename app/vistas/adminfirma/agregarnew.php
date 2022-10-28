<?php
if(isset($_SESSION['correo'])) {
    date_default_timezone_set("America/Mexico_City");
    setlocale(LC_ALL,'');
    $mes = strftime("%B");
    $mesFil = ucfirst($mes);
    $anio = date("Y");
    $fecha_actual1 = date("d")."/".date("m")."/".date("Y");
    $fecha_actual2 = date('y/m/d');
 ?>
<?php require RUTA_APP . '/vistas/inc/header_admin.php'; ?>
<header class="container">
   <hr>
</header>
<header id="header">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h1><span class="fas fa-cog" aria-hidden="true"></span> Registro de<small> contenido <?php echo $fecha_actual1;?></small></h1>
      </div>
    </div>
  </div>
</header>

<section id="breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo RUTA_URL;?>/inicio">Incio</a></li>
      <li class="breadcrumb-item"><a href="<?php echo RUTA_URL;?>/archivosfirma/listado">Listado</a></li>
      <li class="breadcrumb-item active">Agregar</li>
    </ol>
  </div>
</section>

<section id="main" class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
      <?php require RUTA_APP . '/vistas/inc/izquierda.php'; ?>
      </div>
      <div class="col-md-9">
        <!-- Editar -->
        <div class="panel panel-default">
          <div class="panel-heading main-color-bg">
            <h3 class="panel-title">Subir archivo para firmar</h3>
          </div>
          <div class="panel-body">
            <form role="form"  name="fe" action="<?php echo RUTA_URL;?>/archivosfirma/agregarnew" method="post" enctype="multipart/form-data">
              <!--<div class="form-group">
                <label>Marca </label>
                <input type="text" name="marca" class="form-control" placeholder="Marca" value="" required>
              </div>-->
              <div class="form-group mb-3">
                <label>Descripción </label>
                <textarea name="descripcion" class="form-control" placeholder="Descripción" required></textarea>
              </div>
              <div class="form-group">
                <div class="alert alert-success" role="alert">
                  <h4 class="alert-heading">¡Aviso!</h4>
                    <p>El sistema no acepta archivos de nombre con acentos y símbolos, ejemplo: catálogos.pdf, año.png, o actualización.jpg.
                    </p>
                </div>
                <p id="obligatorio"><label for="archivo">Imagen *</label></p>
                <input type="file" name="imagen" id="imagen" class="btn btn-danger btn-lg" required>
                <p class="help-block">Maximo 3MB</p>
              </div>
              <input  id="fechaActual" name="fechaActual" type="hidden" value="<?php echo $fecha_actual2;?>" size="26" required />
              <input type="submit" class="btn btn-danger" value="Subir">
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
