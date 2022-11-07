<?php
  // cargamos librerias

  require_once 'config/configurar.php';

  require_once 'helpers/url_helper.php';

//   require_once('helpers/fpdf/fpdf.php'); 
//   require_once('helpers/fpdi/src/autoload.php'); 

// librerias para editar pdf
require_once('librerias/fpdf/fpdf.php'); 
//libreria fpdi que contioen autoload y namespace
require_once('librerias/fpdi/src/autoload.php');
require_once('helpers/mis_variables_pdf.php'); 


//require_once('helpers/certificararchivo.php'); 

   // Autoload php
   //spl_autoload_register  recibe el nombre de una funcion  que busca dentro de los archivos
   //y dentrp de spl_autoload_register require y carga el archivo tomando en cuenta que el archivo
   // tiene el mismo nombre que la fucncion para concatenar
   
   spl_autoload_register(function($nombreClase){
      require_once 'librerias/' .$nombreClase. '.php';
      
   });

?>
