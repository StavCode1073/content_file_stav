<?php
  // cargamos librerias

  require_once 'config/configurar.php';

  require_once 'helpers/url_helper.php';

  //require_once 'librerias/Base.php';
  //require_once 'librerias/Controlador.php';
  //require_once 'librerias/Core.php';

   // Autoload php
   //spl_autoload_register  recibe el nombre de una funcion  que busca dentro de los archivos
   //y dentrp de spl_autoload_register require y carga el archivo tomando en cuenta que el archivo
   // tiene el mismo nombre que la fucncion para concatenar
   spl_autoload_register(function($nombreClase){
      require_once 'librerias/' .$nombreClase. '.php';
   });

?>
