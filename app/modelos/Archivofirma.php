<?php
class Archivofirma{
  private $db;

  public function __construct(){
    $this->db = new Base;
  }
  public function obtenerProductos(){
    $this->db->query('SELECT * FROM archivos_firma WHERE anio = 2019  ORDER BY id_files DESC');

    $resultados = $this->db->registros();
    return $resultados;
  }
  //consultar datos en la tabla para paginador
  public function obtenerArchivosPginador($datos){
    $this->db->query('SELECT * FROM archivos_firma ORDER BY  id DESC LIMIT :inicio,:registros');

    //vinvular valores
    $this->db->bind(':inicio', $datos['inicio']);
    $this->db->bind(':registros', $datos['registros']);

    $resultados = $this->db->registros();
    return $resultados;
  }
  //numero de regustros en la tabla
  public function numeroR(){
    $this->db->query('SELECT * FROM archivos_firma ORDER BY id DESC');

    $resultados = $this->db->rowCount();
    return $resultados;
  }
  public function agregarArchivos($datos){
    $this->db->query('INSERT INTO archivos_firma(nombrearchivo,description,tipo,tamanio,fecha,fecha_r,estado) VALUES (:archivo, :descripcion, :tipo, :tamanio, :fecha, NOW(), 1)');

    //vinvular valores
    $this->db->bind(':archivo', $datos['nombre_arch']);
    $this->db->bind(':descripcion', $datos['descripcion']);
    $this->db->bind(':tipo', $datos['type']);
    $this->db->bind(':tamanio', $datos['tamanio']);
    $this->db->bind(':fecha', $datos['fechaActual']);
    //$this->db->bind(':estado', $datos['fechaActual']);

    //Ejecutar
    if ($this->db->execute()) {
      return true;
    }else {
      return false;
    }
  }
  public function obtenerArchivosId($id){
    $this->db->query('SELECT * FROM  archivos_firma WHERE id = :id');
    $this->db->bind(':id', $id);
    $fila = $this->db->registro();
    return $fila;
  }
  
  public function obtenerRecursoId($id){
    $this->db->query('SELECT * FROM  archivos_firma WHERE id = :id');
    $this->db->bind(':id', $id);
    $fila = $this->db->registro();
    return $fila;
  }


  public function actualizarRecurso($datos){
    $this->db->query('UPDATE archivos_firma SET description = :descripcion, fecha = :fechaRegistro WHERE id = :id');
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
    $this->db->query('UPDATE archivos_firma SET   nombrearchivo = :nombre_archivo, tipo = :tipo WHERE id = :id');
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
    $this->db->query('DELETE FROM archivos_firma WHERE id = :id');
    //vinvular valores
    $this->db->bind(':id', $datos['id']);

    //Ejecutar
    if ($this->db->execute()) {
      return true;
    }else {
      return false;
    }
  }
}// end class
?>
