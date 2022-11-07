<?php
if(isset($_SESSION['correo'])) {
    date_default_timezone_set("America/Mexico_City");
    setlocale(LC_ALL,'');
    $mes = strftime("%B");
    $mesFil = ucfirst($mes);
    $anio = date("Y");
    $fecha_actual1 = date("d")."/".date("m")."/".date("Y");
    $fecha_actual2 = date('y/m/d');
    $mimail = $_SESSION['correo'];
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
      <li class="breadcrumb-item"><a href="<?php echo RUTA_URL;?>/recursos/listado">Listado</a></li>
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
            <h3 class="panel-title">Agregar publicación</h3>
          </div>
          <div class="panel-body">
            <form role="form"  name="fe" action="<?php echo RUTA_URL;?>/recursos/agregarnew" method="post" enctype="multipart/form-data">
              <!--<div class="form-group">
                <label>Marca </label>
                <input type="text" name="marca" class="form-control" placeholder="Marca" value="" required>
              </div>-->

              <div class="row">
                <h4 class="text-center">Descripción</h4>
                  <div class="col">
                      <div class="form-group">
                      <label class="col-form-label text-info" for="exampleFormControlSelect1">Tipo de publicación *</label>
                      <select name="pub" class="form-control " id="exampleFormControlSelect1">
                      <?php 
                          foreach ($datos['pubs'] as $pub):
                        ?>
                            <option class="text-bg-light" value="<?php echo $pub->id; ?>"><?php echo $pub->name; ?></option>
                        <?php 
                            endforeach;
                        ?>
                        
                      </select>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                        <label class="col-form-label text-info" for="exampleFormControlSelect1">Tipo de documento *</label>
                        <select name="doc" class="form-control " id="exampleFormControlSelect1">
                        <?php 
                            foreach ($datos['docs'] as $doc):
                          ?>
                              <option class="text-bg-light" value="<?php echo $doc->id; ?>"><?php echo $doc->name; ?></option>
                          <?php 
                              endforeach;
                          ?>
                          
                      </select>
                    </div>
                </div>

                <div class="col">
                  <div class="form-group">
                    <label class="col-form-label text-info" for="inputDefault">Autor de la publicación *: </label>
                    <input type="text" required="true" name="sujeto" class="form-control" placeholder="Nombre: " id="inputDefault" value="">
                  </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label class="col-form-label text-info" for="exampleFormControlSelect1">Casificación *</label>
                        <select name="cla" class="form-control" id="exampleFormControlSelect1">
                        <?php 
                            foreach ($datos['class'] as $cla):
                          ?>
                              <option class="text-bg-light" value="<?php echo $cla->id; ?>"><?php echo $cla->name; ?></option>
                          <?php 
                              endforeach;
                          ?>
                          
                      </select>
                    </div>
                </div>

              </div>

              <div class="form-group my-3">
                <label class="col-form-label text-info">Sumario *</label>
                <textarea name="sum" class="form-control" placeholder="Sumario" required></textarea>
              </div>

              <div class="form-group my-3">
                <label class="col-form-label text-info">Descripción del archivo *</label>
                <textarea name="descripcion" class="form-control" placeholder="Descripción del archivo" required></textarea>
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
              <input  id="mail" name="mail" type="hidden" value="<?php echo $mimail;?>" size="26" required />
              <input type="submit" class="btn btn-danger" value="Agregar">
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
