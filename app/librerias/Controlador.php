<?php
// clase controlador principal
// se encarga de poder cargar los modelos y las vitas

/**
 *
 */
class Controlador
{
    // cargar modelos
    public function modelo($modelo)
    {
      //cargar
          require_once '../app/modelos/' . $modelo . '.php';
          //instanciar el modelos
          return new $modelo();
    }
    // cargar vista
    public function vista($vista, $datos = [])
    {
      //chequear si el archivo vista existe
          if (file_exists('../app/vistas/' . $vista . '.php')) {
            require_once '../app/vistas/' . $vista . '.php';
          }else {
            // si el archivo de la vusta no existe
            die('La vista no existe');
          }

    }
}


 ?>
