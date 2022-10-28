<div class="list-group mb-3">
  <a href="#" class="list-group-item active color-principal">
    <span class="fas fa-cog" aria-hidden="true"></span> Panel de Control
  </a>
  <a href="<?php echo RUTA_URL;?>/mvc_arb/inicio" class="list-group-item"><span class="fas fa-store-alt" aria-hidden="true"></span> Inicio
  </a>
  <a href="<?php echo RUTA_URL;?>/recursos/listado" class="list-group-item"><span class="fas fa-images" aria-hidden="true"></span> Listado de contenido
  </a>
  <a href="<?php echo RUTA_URL;?>/recursos/listado" class="list-group-item"><span class="fas fa-file-pdf" aria-hidden="true"></span> Firma
  </a>
  <!--<a href="usuarios.html" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuarios <span class="badge">112</span></a>-->
</div>

<div class="well mb-5">
  <h4><span class="fas fa-rss-square"></span> Url del sitio web</h4>
  <div class="progress mb-3">
    <a href="https://poax.b32.mx/index.php" target="_blank">https://poax.b32.mx/index.php</a>
  </div>
<h4><span class="fas fa-share-alt-square"></span> Datos de Sesión</h4>

    Email: <?php echo $correo; ?><br/><br/>
    Usuario: <?php echo $user; ?></br><br/>

<h4><span class="fas fa-share-alt-square"></span> Tamaño de archivos en MegasBytes máximo</h4>
    <div class="progress">
          <div class="barra-progreso" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
            20 MB
          </div>
    </div>
</div>
