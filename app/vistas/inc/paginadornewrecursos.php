<?php
      if ($datos['total']>=1 && $datos['pagina']<=$datos['Npaginas']) {
          echo'<nav class="text-center"><ul class="pagination">';
            if ($datos['pagina']==1) {
            echo '<li class="disabled"><a><span class="fas fa-chevron-circle-left"></span></a></li>';
            }else {
            echo '<li><a href="'.RUTA_URL.'/recursos/catalogos/'.($datos['pagina']-1).'/"><span class="fas fa-chevron-circle-left"></span></a></li>';
            }
              for ($i=1; $i<=$datos['Npaginas'] ; $i++) {
                if ($datos['pagina'] == $i) {
                    echo '<li class="active"><a href="'.RUTA_URL.'/recursos/catalogos/'.$i.'/">'.$i.'</a></li>';
                }else {
                    echo '<li><a href="'.RUTA_URL.'/recursos/catalogos/'.$i.'/">'.$i.'</a></li>';
                }
              }
            if ($datos['pagina']==$datos['Npaginas']) {
            echo '<li class="disabled"><a><span class="fas fa-chevron-circle-right"></span></a></li>';
            }else {
            echo '<li><a href="'.RUTA_URL.'/recursos/catalogos/'.($datos['pagina']+1).'/"><span class="fas fa-chevron-circle-right"></span></a></li>';
            }
          echo'</ul></nav>';
      }
 ?>
