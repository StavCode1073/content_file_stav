<?php
class Recurso{
  private $db;

  public function __construct(){
    $this->db = new Base;
  }
  public function obtenerProductos(){
    $this->db->query('SELECT * FROM tbl_temp_files WHERE anio = 2019  ORDER BY id_files DESC');

    $resultados = $this->db->registros();
    return $resultados;
  }
  //consultar datos en la tabla para paginador
  public function obtenerRecursosPginador($datos){
    $this->db->query('SELECT * FROM archivos_cms ORDER BY  id DESC LIMIT :inicio,:registros');

    //vinvular valores
    $this->db->bind(':inicio', $datos['inicio']);
    $this->db->bind(':registros', $datos['registros']);

    $resultados = $this->db->registros();
    return $resultados;
  }
  //numero de regustros en la tabla
  public function numeroR(){
    $this->db->query('SELECT * FROM archivos_cms ORDER BY id DESC');

    $resultados = $this->db->rowCount();
    return $resultados;
  }
  public function agregarRecurso($datos){
    $this->db->query('INSERT INTO archivos_cms(nombrearchivo,description,tipo,tamanio,fecha,fecha_r,id_especial,id_user,estado) VALUES (:archivo, :descripcion, :tipo, :tamanio, :fecha, NOW(), :mytoken, :id_user, 1)');

    //vinvular valores
    $this->db->bind(':archivo', $datos['nombre_arch']);
    $this->db->bind(':descripcion', $datos['descripcion']);
    $this->db->bind(':tipo', $datos['type']);
    $this->db->bind(':tamanio', $datos['tamanio']);
    $this->db->bind(':fecha', $datos['fechaActual']);
    $this->db->bind(':mytoken', $datos['mytoken']);
    $this->db->bind(':id_user', $datos['id_user']);
    //$this->db->bind(':estado', $datos['fechaActual']);

    //Ejecutar
    if ($this->db->execute()) {

      $this->db->query('INSERT INTO archivos_cms_info(id_tipo,palabra_clave,id_doc,id_usuario,sujeto,id_clasificacion,fechaCaptura,date_write,id_especial,estado) VALUES (:pub, :clave_sum, :doc, :id_user, :sujeto, :cla, :fecha, NOW(), :mytoken, 1)');

      //vinvular valores
      $this->db->bind(':pub', $datos['pub']);
      $this->db->bind(':clave_sum', $datos['sum']);
      $this->db->bind(':doc', $datos['doc']);
      $this->db->bind(':id_user', $datos['id_user']);
      $this->db->bind(':sujeto', $datos['sujeto']);
      $this->db->bind(':cla', $datos['cla']);
      $this->db->bind(':fecha', $datos['fechaActual']);
      $this->db->bind(':mytoken', $datos['mytoken']);
      //$this->db->bind(':estado', $datos['fechaActual']);
      $this->db->execute();

      return true;
    }else {
      return false;
    }
  }

  public function obtenerRecursoId($id){
    $this->db->query('SELECT * FROM  archivos_cms WHERE id = :id');
    $this->db->bind(':id', $id);
    $fila = $this->db->registro();
    return $fila;
  }

  public function actualizarRecurso($datos){
    $this->db->query('UPDATE archivos_cms SET description = :descripcion, fecha = :fechaRegistro WHERE id = :id');
    //vinvular valores
    $this->db->bind(':id', $datos['id_documento']);
    $this->db->bind(':descripcion', $datos['descripcion']);
    $this->db->bind(':fechaRegistro', $datos['fechaRegistro']);
    //Ejecutar
    if ($this->db->execute()) {
      return true;
    }else {
      return false;
    }
  }

  public function actualizarRecursoimg($datos){
    $this->db->query('UPDATE archivos_cms SET   nombrearchivo = :nombre_archivo, tipo = :tipo WHERE id = :id');
    //vinvular valores
    $this->db->bind(':id', $datos['id']);
    $this->db->bind(':nombre_archivo', $datos['nombre_archivo']);
    $this->db->bind(':tipo', $datos['type']);
    //Ejecutar
    if ($this->db->execute()) {
      return true;
    }else {
      return false;
    }
  }
  public function borrarRecurso($datos){
    //sentencias preparadas (id_usuario = :id) donde :id es un parametro temporal
    $this->db->query('DELETE FROM archivos_cms WHERE id = :id');
    //vinvular valores
    $this->db->bind(':id', $datos['id']);

    //Ejecutar
    if ($this->db->execute()) {
      return true;
    }else {
      return false;
    }
  }

  public function publicTypeAll(){
    $this->db->query('SELECT * FROM tipo_publicacion ORDER BY id ASC');

    $resultados = $this->db->registros();
    return $resultados;
  }
  public function typeDocAll(){
    $this->db->query('SELECT * FROM tipo_documento ORDER BY id ASC');

    $resultados = $this->db->registros();
    return $resultados;
  }
  public function clasificAll(){
    $this->db->query('SELECT * FROM clasificacion_archivo ORDER BY id ASC');

    $resultados = $this->db->registros();
    return $resultados;
  }
  public function consultarUser($datos){
    $this->db->query('SELECT * FROM info_partner_user WHERE email_user = :email_user LIMIT 1;');

      $this->db->bind(':email_user', $datos['email_user']);
      $resultados = $this->db->registro();

      return $resultados;
  }

}// end class
?>
