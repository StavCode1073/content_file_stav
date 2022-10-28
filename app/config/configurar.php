<?php
//configuracion de acceso a la base de datos
session_start();
define('DS', DIRECTORY_SEPARATOR);
define('DB_HOST','localhost');
define('DB_USUARIO','root');
define('DB_PASSWORD','');
define('DB_NOMBRE','dbperiodico');
// ruta de la aplicacion
define('RUTA_APP',dirname(dirname(__FILE__)));

//ruta de ejemplo: http://localhost/example/mvcstav/
define('RUTA_URL', 'http://localhost/proyectos_all/mvc_periodico');
//nombre sitio
define('NOMBRESITIO','Mi sistema de gestión de contenido');



// $DOWNLOADED_DIRECTORY_PATH = "img" . DS . "firmas" . DS;



 ?>
