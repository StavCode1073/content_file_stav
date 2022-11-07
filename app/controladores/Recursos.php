<?php
/**
 *
 */
class Recursos extends Controlador
{
  public function __construct(){
    $this->usuarioModelo = $this->modelo('Recurso');
  }
  //cargar vista nuevos para el cliente en el index pot default
public function index()
  {
    $id="";
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
    $usuarios = $this->usuarioModelo->obtenerRecursosPginador($datos);
    $datos = [
      'usuarios' => $usuarios,// registros de la tabla
      'pagina' => $id,//pagina
      'Npaginas' => $Npaginas,//total de paginas
      'total'=>$total,// total de registro
      'inicio' =>$inicio// inicio del paginador = 1
        ];
    //enviar y cargar en la vista inicio los datos
    $this->vista('adminrecursos/catalogos',$datos);
  }
// cargar vista nuevos y datos con paginador para el cliente
public function catalogos($id="")
    {
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
      $usuarios = $this->usuarioModelo->obtenerRecursosPginador($datos);
      $datos = [
        'usuarios' => $usuarios,// registros de la tabla
        'pagina' => $id,//pagina
        'Npaginas' => $Npaginas,//total de paginas
        'total'=>$total,// total de registro
        'inicio' =>$inicio// inicio del paginador = 1
          ];
      //enviar y cargar en la vista inicio los datos
      $this->vista('adminrecursos/catalogos',$datos);
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
    $usuarios = $this->usuarioModelo->obtenerRecursosPginador($datos);
    $datos = [
      'usuarios' => $usuarios,// registros de la tabla
      'pagina' => $id,//pagina
      'Npaginas' => $Npaginas,//total de paginas
      'total'=>$total,// total de registro
      'inicio' =>$inicio// inicio del paginador = 1
        ];
    //enviar y cargar en la vista inicio los datos
    $this->vista('adminrecursos/listado',$datos);
  }

// agregar nuevos productos
public function agregarnew(){
  $pubs = $this->usuarioModelo->publicTypeAll();
  $docs = $this->usuarioModelo->typeDocAll();
  $class = $this->usuarioModelo->clasificAll();
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
            $ruta = "img" . DS . "recursos" . DS . $nombre2;
            //$ruta ="public/img/nuevos/" . $nombre;
            move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);

            $datos =[
              'email_user' => trim($_POST['mail']),
            ];
            $usuarioL = $this->usuarioModelo->consultarUser($datos);
  

            $mytoken =  uniqid('cms');
            $datos = [
              //'marca' => trim($_POST['marca']),
              //'descripcion' => trim($_POST['descripcion']),
              'nombre_arch' => $nombre,
              'descripcion' => trim($_POST['descripcion']),
              'type' => $tipo,
              'tamanio' => $tamanio,
              'fechaActual' => trim($_POST['fechaActual']),
              'mytoken' => $mytoken,
              'id_user' => $usuarioL->id,
              'pub' => trim($_POST['pub']),
              'doc' => trim($_POST['doc']),
              'sum' => trim($_POST['sum']),
              'cla' => trim($_POST['cla']),
              'sujeto' => trim($_POST['sujeto']),
            ];
        if ($this->usuarioModelo->agregarRecurso($datos)) {
            redireccionar('/recursos/listado');
          }else{
            die('Algo salio mal');
          }
        }else{
            die('Tipo o tamanio no permitida');
        }
    }else{
      $datos = [
          'pubs' => $pubs,
          'docs' => $docs,
          'class' => $class,
          'nombre' => '',
          'email' => '',
          'telefono' => ''
      ];
      // si algo salio mal datos seran basios y redireciona a paginas
      $this->vista('adminrecursos/agregarnew', $datos);
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
          $ruta_foto_db = "img" . DS . "recursos" . DS . $nameimg;

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
           $ruta = "img" . DS . "recursos" . DS . $nombre2;
           //$ruta ="public/img/nuevos/" . $nombre;
           move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
           $datos = [
             'id' => $id,
             'nombre_archivo' => $nombre,
             'type' => $tipo
           ];

       if ($this->usuarioModelo->actualizarRecursoimg($datos)) {
           redireccionar('/recursos/listado');
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
     $this->vista('adminrecursos/editarimgnew', $datos);
          }

  }
  // eliminar nuevos productos
public function eliminarnew($id){

  // obtener informacion de usuario desde el modelo
  $usuario = $this->usuarioModelo->obtenerRecursoId($id);

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

      if ($this->usuarioModelo->borrarRecurso($datos)) {
          redireccionar('/recursos/listado');
        }else{
          die('Algo salio mal');
        }

  }
   $this->vista('adminrecursos/eliminarnew', $datos);


}

}// end class

?>
