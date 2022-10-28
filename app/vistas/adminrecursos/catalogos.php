<?php require RUTA_APP . '/vistas/inc/header.php'; ?>
<header class="container pt-4">
  <ol class="breadcrumb mt-4 color-link">
    <li class="breadcrumb-item"><a href="http://arboldeoro.com.mx/paginas/index">Inicio</a></li>
    <li class="breadcrumb-item active">Catálogos, Boletines y Fichas Técnicas</li>
  </ol>
</header>

<div class="container">
  <div class="header-titulo">
    <p class="h6">¡Nuestro centro de recursos está hecho especialmente para ti!</br>
    En esta sección podrás encontrar catálogos, boletines, fichas técnicas, comunicados oficiales, infografías, etc. con información que será de gran utilidad para ti y todo tu equipo. Todos y cada uno de ellos respaldados por las marcas que distribuimos.</p>
  </div>
  <div class="table-responsive">
  <table class="table txt-tama table-hover">
          <thead>
            <tr id="tdtitulo" class="mitabla">
                <th id="todas-firs">Marca</th>
                <th id="descrit">Descripción</th>
                <th id="todas-final">Catálogo</th>
                <th id="todas-final">Fecha</th>
            </tr>
          </thead>
          <tbody>
        <?php
        if ($datos['total']>=1 && $datos['pagina']<=$datos['Npaginas']) {
        foreach ($datos['usuarios'] as $usuario) : ?>
          <tr class="">
                  <td><?php echo $usuario->titulo; ?></td>
                  <td><?php echo $usuario->descripcion; ?></td>
                  <?php
                  switch ($usuario->tipo) {
      						case 'application/pdf':
                  echo"<td><center>
                    <a target='_Blank' href='".RUTA_URL."/img/recursos/".$usuario->nombre_archivo."'>
                      <span class='fas fa-file-pdf tamanioicon'></span>
                    </a>
                  </center></td>";
      							break;
      						case 'application/xlsx':
                  echo"<td><center>
                    <a target='_Blank' href='".RUTA_URL."/img/recursos/".$usuario->nombre_archivo."'>
                      <span class='fas fa-file-excel  tamanioiconexel'></span>
                    </a>
                  </center></td>";
      							break;
      						case 'application/docx':
      								echo"<td><center>
                        <a target='_Blank' href='".RUTA_URL."/img/recursos/".$usuario->nombre_archivo."'>
                          <span class='fas fa-file-word  tamanioiconword'></span>
                        </a>
                      </center></td>";
      							break;
      						default:
      								echo"
                      <td><center><a target='_Blank' href='".RUTA_URL."/img/recursos/".$usuario->nombre_archivo."'>
                        <img src='".RUTA_URL."/img/recursos/".$usuario->nombre_archivo."'  width='100' height='70'>
                      </a></center></td>";
      							break;
      						}
                  $newDate = date("d/m/Y", strtotime($usuario->fecha_r));
                  ?>
                  <td class="text-center"><?php echo $newDate; ?></td>
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
  <?//php require RUTA_APP . '/vistas/inc/paginadornewrecursos.php'; ?>
</div>
<div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item <?php echo $datos['pagina']<=1 ? 'disabled' : ''; ?>">
                <a class="page-link" href="<?php echo RUTA_URL;?>/recursos/catalogos/<?php echo ($datos['pagina']-1)?>/">Anterior</a>
              </li>

              <?php for($i=0; $i<$datos['Npaginas'] ; $i++): ?>
                <li class="page-item <?php echo $datos['pagina'] == $i+1 ? 'active' : ''; ?>">
                  <a class="page-link" href="<?php echo RUTA_URL;?>/recursos/catalogos/<?php echo $i+1 ?>/">
                          <?php echo $i+1; ?>
                  </a>
                </li>

              <?php endfor ?>
              <li class="page-item  <?php echo $datos['pagina']>=$datos['Npaginas'] ? 'disabled' : ''; ?>">
                <a class="page-link" href="<?php echo RUTA_URL;?>/recursos/catalogos/<?php echo ($datos['pagina']+1)?>/">Siguiente</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
</div>  
</br>
<?php require RUTA_APP . '/vistas/inc/footer_front.php'; ?>
