<?php
if(isset($_SESSION['correo'])) {
 ?>
<?php require RUTA_APP . '/vistas/inc/header_admin.php'; ?>
<header class="container">
   <hr>
</header>
<header id="header">
<div class="container">
<div class="row">
  <div class="col-md-10">
    <h1><span class="fas fa-cog" aria-hidden="true"></span>Lista de <small> administración de contenido</small></h1>
  </div>
  <div class="col-md-2">
    <!--<div class="dropdown create">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Crear Nuevo Catálogo
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">-->
        <!--<li><a href="<?php echo RUTA_URL;?>/productos/agregarnew" type="button" data-toggle="modal" data-target="#addPage">Agregar Productos</a></li>-->
        <!--<li><a href="<?php echo RUTA_URL;?>/recursos/agregarnew">Agregar Nuevo</a></li>-->
        <!--<li><a href="<?php //echo RUTA_URL;?>/productos/agregarnew">Agregar Entrada</a></li>
        <li><a href="#">Agregar Usuario</a></li>-->
      <!--</ul>
    </div>-->
  </div>
</div>
</div>
</header>

<section id="breadcrumb">
<br>
<div class="container">
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?php echo RUTA_URL;?>/mvc_arb/inicio">Inicio</a></li>
  <li class="breadcrumb-item active">Centro de recursos</li>
</ol>
</div>
<br>
</section>

<section id="main">
<div class="container">
<div class="row">
  <div class="col-md-3">
      <?php require RUTA_APP . '/vistas/inc/izquierda.php'; ?>
  </div>
  <div class="col-md-9">
    <!-- Website Overview -->
    <div class="panel panel-default">
      <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Lista de publicaciones <?php echo $datos['pagina'];?></h3>
      </div>
      <div class="panel-body">
        <div class="row">
              <div class="col-md-12">
                <h5 class="text-success">Resultado encontrados: <?php echo $datos['total']; ?></h5>
                <!--  <input class="form-control" type="text" placeholder="Filtrar páginas...">-->
              </div>
        </div>
        <br>
    <div class="table-responsive">
        <table class="table table-striped table-hover" id="tabla">
          <thead>
              <tr id="tdtitulo text-bg-dark">
                <th>Numero</th>
                <th>Archivo</th>
                <th>Tipo</th>
                <th>Tamaño</th>
                <th>Fecha</th>
                <th>Acción</th>
              </tr>
          </thead>
          <tbody>
<?php
                      function formatSizeUnits($bytes)
                        {
                            if ($bytes >= 1073741824)
                            {
                                $bytes = number_format($bytes / 1073741824, 2) . ' GB';
                            }
                            elseif ($bytes >= 1048576)
                            {
                                $bytes = number_format($bytes / 1048576, 2) . ' MB';
                            }
                            elseif ($bytes >= 1024)
                            {
                                $bytes = number_format($bytes / 1024, 2) . ' KB';
                            }
                            elseif ($bytes > 1)
                            {
                                $bytes = $bytes . ' bytes';
                            }
                            elseif ($bytes == 1)
                            {
                                $bytes = $bytes . ' byte';
                            }
                            else
                            {
                                $bytes = '0 bytes';
                            }

                            return $bytes;
                            }
    if ($datos['total']>=1 && $datos['pagina']<=$datos['Npaginas']) {
        $contador = $datos['inicio'] + 1;
       foreach ($datos['usuarios'] as $usuario) : ?>
              <tr>
                <td><?php echo $contador++//$usuario->id_files; ?></td>
                  <?php
                  switch ($usuario->tipo) {
      						case 'application/pdf':
                  echo"<td><center>
                    <a target='_Blank' href='".RUTA_URL."/img/recursos/".$usuario->nombrearchivo."'>
                      <span class='fas fa-file-pdf tamanioicon'></span>
                    </a></center>
                  </td>";
      							break;
      						case 'application/xlsx':
                  echo"<td><center>
                    <a target='_Blank' href='".RUTA_URL."/img/recursos/".$usuario->nombrearchivo."'>
                      <span class='fas fa-file-excel tamanioiconexel'></span>
                    </a></center>
                  </td>";
      							break;
      						case 'application/docx':
      								echo"<td><center>
                        <a target='_Blank' href='".RUTA_URL."/img/recursos/".$usuario->nombrearchivo."'>
                          <span class='fas fa-file-word tamanioiconword'></span>
                        </a></center>
                      </td>";
      							break;
      						default:
      								echo"
                      <td><center>
                      <a target='_Blank' href='".RUTA_URL."/img/recursos/".$usuario->nombrearchivo."'>
                        <img src='".RUTA_URL."/img/recursos/".$usuario->nombrearchivo."' width='80' height='50'>
                      </a></center>
                      </td>";
      							break;
      						}


                  ?>

                <td><?php echo $usuario->tipo; ?></td>
                <td><?php echo formatSizeUnits($usuario->tamanio); ?></td>
                <td><?php echo $usuario->fecha; ?></td>
                <td><a class="btn btn-default" href="<?php echo RUTA_URL;?>/recursos/editarnew/<?php echo $usuario->id; ?>">Editar</a> <a class="btn btn-danger" href="<?php echo RUTA_URL;?>/recursos/eliminarnew/<?php echo $usuario->id; ?>">Borrar</a></td>
              </tr>
<?php
       endforeach;
    }else {
      echo '<tr>
            <td colspan="5"><center>No hay registros en el sistema</center></td>
       </tr>';
    }
?>
            </tbody>
          </table>
        </div>
        <br>
          <?php require RUTA_APP . '/vistas/inc/paginador_admrecursos.php'; ?>
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
