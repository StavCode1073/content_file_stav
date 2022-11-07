<?php
/**
 *
 */

class Archivosfirma extends Controlador
{
  public function __construct(){
    $this->usuarioModelo = $this->modelo('Archivofirma');
  }
  //cargar vista nuevos para el cliente en el index pot default
public function index()
  {

    $datos = [];

    //enviar y cargar en la vista inicio los datos
    $this->vista('paginas/inicio',$datos);
  }
  // listado de nuevos productos

public function listado($id=""){
    //numero de registros del paginador
    $registros = 10;
    $id = (isset($id) && $id > 0) ? (int) $id : 1;
    $inicio = ($id>0) ? (($id*$registros)-$registros) : 0;
    $datos = [
        'inicio' => $inicio,
        'registros' => $registros
    ];
    //numero de registro
    $total =  $this->usuarioModelo->numeroR();
    //numero de paginas con el total de registros
    $Npaginas =  ceil($total/$registros);
    //obtener los registros en un array
    $usuarios = $this->usuarioModelo->obtenerArchivosPginador($datos);
    $datos = [
      'usuarios' => $usuarios,// registros de la tabla
      'pagina' => $id,//pagina
      'Npaginas' => $Npaginas,//total de paginas
      'total'=>$total,// total de registro
      'inicio' =>$inicio// inicio del paginador = 1
        ];
    //enviar y cargar en la vista inicio los datos
    $this->vista('adminfirma/listado',$datos);
  }

// agregar nuevos productos
public function agregarnew(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //tipo de imagen
            $permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg", "application/pdf", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet", "application/vnd.openxmlformats-officedocument.wordprocessingml.document");
            $limite = 60024;
            //if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 60024) {
            if (in_array($_FILES['imagen']['type'], $permitidos)) {
            $nombre = date('is') . $_FILES['imagen']['name'];
            $nombre2 = date('is') . utf8_decode($_FILES['imagen']['name']);
            $tamanio = $_FILES['imagen']['size'];
            //$ruta = "Views" . DS . "template" . DS . "imagenes" . DS . "avatars" . DS . $nombre;
            //validar tipos de archivos
            if ($_FILES['imagen']['type'] == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
              $tipo = "application/xlsx";
            }elseif ($_FILES['imagen']['type'] == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') {
              $tipo = "application/docx";
            }else {
              $tipo = $_FILES['imagen']['type'];
            }
            $ruta = "img" . DS . "firmas" . DS . $nombre2;
            //$ruta ="public/img/nuevos/" . $nombre;
            move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
            $datos = [
              //'marca' => trim($_POST['marca']),
              //'descripcion' => trim($_POST['descripcion']),
              'nombre_arch' => $nombre,
              'descripcion' => trim($_POST['descripcion']),
              'type' => $tipo,
              'tamanio' => $tamanio,
              'fechaActual' => trim($_POST['fechaActual'])
            ];
        if ($this->usuarioModelo->agregarArchivos($datos)) {
            redireccionar('/archivosfirma/listado');
          }else{
            die('Algo salio mal');
          }
        }else{
            die('Tipo o tamanio no permitida');
        }
    }else{
      $datos = [
          'nombre' => '',
          'email' => '',
          'telefono' => ''
      ];
      // si algo salio mal datos seran basios y redireciona a paginas
      $this->vista('adminfirma/agregarnew', $datos);
    }
  }
  //editar nuevos productos
public function editarnew($id){
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
           $datos = [
             'id_documento' => $id,
             'descripcion' => trim($_POST['descripcion']),
             'fechaRegistro' => trim($_POST['fechaRegistro'])
           ];

       if ($this->usuarioModelo->actualizarRecurso($datos)) {
           redireccionar('/recursos/listado');
         }else{
           die('Algo salio mal');
         }
   }else{

     // obtener informacion de usuario desde el modelo
     $usuario = $this->usuarioModelo->obtenerRecursoId($id);

     $datos = [
         'id_documento' => $usuario->id,
          'archivo' => $usuario->nombrearchivo,
         'descripcion' => $usuario->description,
         'tipo' => $usuario->tipo,
         'fechaRegistro' => $usuario->fecha
     ];
     // si algo salio mal datos seran basios y redireciona a paginas
     $this->vista('adminrecursos/editarnew', $datos);
   }

}

  //editar imagene nuevos productos
public function editarimgnew($id){
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $nameimg =  utf8_decode($_POST['imgname']);
          $ruta_foto_db = "img" . DS . "firmas" . DS . $nameimg;

            if(file_exists($ruta_foto_db)){
            unlink($ruta_foto_db);
            }else{
            echo "Ruta no valida ". $ruta_foto_db;
            }
           //tipo de imagen
            $permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg", "application/pdf", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet", "application/vnd.openxmlformats-officedocument.wordprocessingml.document");
           $limite = 60024;
           if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 60024) {
           $nombre = date('is') . $_FILES['imagen']['name'];
           $nombre2 = date('is') . utf8_decode($_FILES['imagen']['name']);
           //$ruta = "Views" . DS . "template" . DS . "imagenes" . DS . "avatars" . DS . $nombre;
           //validar tipos de archivos
           if ($_FILES['imagen']['type'] == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
             $tipo = "application/xlsx";
           }elseif ($_FILES['imagen']['type'] == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') {
             $tipo = "application/docx";
           }else {
             $tipo = $_FILES['imagen']['type'];
           }
           $ruta = "img" . DS . "firmas" . DS . $nombre2;
           //$ruta ="public/img/nuevos/" . $nombre;
           move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
           $datos = [
             'id' => $id,
             'nombre_archivo' => $nombre,
             'type' => $tipo
           ];

       if ($this->usuarioModelo->actualizarFirmaimg($datos)) {
           redireccionar('/archivosfirma/listado');
         }else{
           die('Algo salio mal');
         }
      }
   }else{
     // obtener informacion de usuario desde el modelo
     $usuario = $this->usuarioModelo->obtenerRecursoId($id);

     $datos = [
         'id_documento' => $usuario->id,
          'archivo' => $usuario->nombrearchivo,
         'descripcion' => $usuario->description,
         'tipo' => $usuario->tipo,
         'fechaRegistro' => $usuario->fecha
     ];
     // si algo salio mal datos seran basios y redireciona a paginas
     $this->vista('adminfirma/editarimgnew', $datos);
          }

  }
  // eliminar nuevos productos
public function eliminarnew($id){

  // obtener informacion de usuario desde el modelo
  $usuario = $this->usuarioModelo->obtenerArchivosId($id);

  $datos = [
      'id_documento' => $usuario->id,
      'archivo' => $usuario->nombrearchivo,
      'descripcion' => $usuario->description,
      'tipo' => $usuario->tipo,
      'fechaRegistro' => $usuario->fecha
  ];

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nameimg =  utf8_decode($_POST['imgname']);
        $ruta_foto_db = "img" . DS . "recursos" . DS . $nameimg;

          if(file_exists($ruta_foto_db)){
          unlink($ruta_foto_db);
          }else{
          echo "Ruta no valida ". $ruta_foto_db;
          }
          $datos = [
            'id' => $id
          ];

      if ($this->usuarioModelo->borrarArchivo($datos)) {
          redireccionar('/archivosfirma/listado');
        }else{
          die('Algo salio mal');
        }

  }
   $this->vista('adminfirma/eliminarnew', $datos);

}

  public function firmarArchivo($id){


      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        if(isset($_POST['firma'])){

          $firmatexto = $_POST['firmatexto'];

          if(isset($firmatexto) && $firmatexto != ''){
            $firmatexto = $_POST['firmatexto'];

            $datos =[
              'firmatexto' => $firmatexto,
              'nombre_arch' => '',
              'type' => 'letras',
              'tamanio' => '',
              'fechaActual' => trim($_POST['fechaActual']),
              'id_doc' => $id,
            ];

            if ($this->usuarioModelo->agregarfirma($datos)) {
              redireccionar('/archivosfirma/firmarArchivo/'.$id);
            }else{
              die('Algo salio mal');
            }
          }else{
              //tipo de imagen
                $permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg", "application/pdf", "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet", "application/vnd.openxmlformats-officedocument.wordprocessingml.document");
                $limite = 60024;
                //if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 60024) {
                if (in_array($_FILES['imagen']['type'], $permitidos)) {
                $nombre = date('is') . $_FILES['imagen']['name'];
                $nombre2 = date('is') . utf8_decode($_FILES['imagen']['name']);
                $tamanio = $_FILES['imagen']['size'];
                //$ruta = "Views" . DS . "template" . DS . "imagenes" . DS . "avatars" . DS . $nombre;
                //validar tipos de archivos
                if ($_FILES['imagen']['type'] == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
                  $tipo = "application/xlsx";
                }elseif ($_FILES['imagen']['type'] == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') {
                  $tipo = "application/docx";
                }else {
                  $tipo = $_FILES['imagen']['type'];
                }
                $ruta = "img" . DS . "nuevasfirmas" . DS . $nombre2;
                //$ruta ="public/img/nuevos/" . $nombre;
                move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                $datos = [
                  //'marca' => trim($_POST['marca']),
                  //'descripcion' => trim($_POST['descripcion']),
                  'firmatexto' => '',
                  'nombre_arch' => $nombre,
                  'type' => $tipo,
                  'tamanio' => $tamanio,
                  'fechaActual' => trim($_POST['fechaActual']),
                  'id_doc' => $id,
                ];
            if ($this->usuarioModelo->agregarfirma($datos)) {
                redireccionar('/archivosfirma/firmarArchivo/'.$id);
              }else{
                die('Algo salio mal');
              }
            }else{
                die('Tipo o tamanio no permitida');
            }
          }

          
        }

    }else{
      $usuario = $this->usuarioModelo->obtenerArchivosId($id);
      $firmas = $this->usuarioModelo->obtenerfimas($id);
      $datos = [
         'id_documento' => $usuario->id,
          'archivo' => $usuario->nombrearchivo,
         'descripcion' => $usuario->description,
         'tipo' => $usuario->tipo,
         'fechaRegistro' => $usuario->fecha,
         'firmas' => $firmas,
        ];

    $this->vista('adminfirma/firmararchivo', $datos);
      }
  }

}// end class

?>
