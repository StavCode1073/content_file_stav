<?php
if(isset($_SESSION['correo'])) {
 ?>
<?php require RUTA_APP . '/vistas/inc/header_admin.php'; ?>
  <header class="container mt-4">
    <div class="row">
      <div class="col-md-8">
        <h2 class="">Bienvenido al administrador de contenido</h2>
      </div>
      <div  class="col-md-4">
        <br>
        <div class="pull-right">
        </div>
      </div>
    </div>
  </header>
  <section id="breadcrumb">
    <div class="container">
      <ol class="breadcrumb">
        <li class="active">Inicio</li>
      </ol>
    </div>
  </section>
  <div class="container mb-4">
    <div class="row">
      <div class="col-md-3">
        <?php require RUTA_APP . '/vistas/inc/izquierda.php'; ?>
      </div>
      <div class="col-md-9">
        <!-- Vista rápida del sitio -->
        <div class="panel panel-default">
          <div class="panel-heading main-color-bg mb-3">
            <h3 class="panel-title">Opciones de administración de módulos.</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-6">
                <a href="<?php echo RUTA_URL;?>/Recursos/listado">
                <div class="well dash-box d-flex flex-column align-items-center ">
                  <div class="w-25">
                     <img src="<?php echo RUTA_URL;?>/img/icono-pdf.png" class="img-fluid" alt="...">
                  </div>
                 
                  <h3><span class="fas fa-edit" aria-hidden="true"></span> Administrar publicación</h3>
                  <h4>Agregar,Editar y Eliminar</h4>
                </div>
                </a>
              </div>
              <div class="col-md-6">
                <a href="<?php echo RUTA_URL;?>/Archivosfirma/agregarnew">
                <div class="well dash-box d-flex flex-column align-items-center ">
                  <div class="w-25">
                     <img src="<?php echo RUTA_URL;?>/img/icono-write-pdf.png" class="img-fluid" alt="...">
                  </div>
                 
                  <h3><span class="fas fa-edit" aria-hidden="true"></span> Firma electrónica</h3>
                  <!--<h4>Agregar,Editar y Eliminar</h4>-->
                </div>
                </a>
              </div>
            </div>
          </div>
          </div>
      </div>
    </div>
  </div>
 <!-- <section class="container">
    <iframe id="inlineFrameExample"
            title="Inline Frame Example"
            src="http://www.b32consultores.com/periodico/index.php?page=tabulador-de-precios"  
            scrolling="no" 
            style=" width: 100%; height: 500px;  overflow: hidden;" >
            
    </iframe>
  </section>-->
  
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>
<?php
}else{
redireccionar('/paginas/loginadm');
}
 ?>
