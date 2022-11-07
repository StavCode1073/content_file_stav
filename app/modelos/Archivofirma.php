<?php
class Archivofirma{
  private $db;

  public function __construct(){
    $this->db = new Base;
  }
  public function obtenerProductos(){
    $this->db->query('SELECT * FROM archivos_certificada WHERE anio = 2019  ORDER BY id_files DESC');

    $resultados = $this->db->registros();
    return $resultados;
  }
  //consultar datos en la tabla para paginador
  public function obtenerArchivosPginador($datos){
    $this->db->query('SELECT * FROM archivos_certificada ORDER BY  id DESC LIMIT :inicio,:registros');

    //vinvular valores
    $this->db->bind(':inicio', $datos['inicio']);
    $this->db->bind(':registros', $datos['registros']);

    $resultados = $this->db->registros();
    return $resultados;
  }
  //numero de regustros en la tabla
  public function numeroR(){
    $this->db->query('SELECT * FROM archivos_certificada ORDER BY id DESC');

    $resultados = $this->db->rowCount();
    return $resultados;
  }
  public function agregarArchivos($datos){
    $this->db->query('INSERT INTO archivos_certificada(nombrearchivo,description,tipo,tamanio,fecha,fecha_r,estado) VALUES (:archivo, :descripcion, :tipo, :tamanio, :fecha, NOW(), 1)');

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
    $this->db->query('SELECT * FROM  archivos_certificada WHERE id = :id');
    $this->db->bind(':id', $id);
    $fila = $this->db->registro();
    return $fila;
  }
  
  public function obtenerRecursoId($id){
    $this->db->query('SELECT * FROM  archivos_certificada WHERE id = :id');
    $this->db->bind(':id', $id);
    $fila = $this->db->registro();
    return $fila;
  }


  public function actualizarRecurso($datos){
    $this->db->query('UPDATE archivos_certificada SET description = :descripcion, fecha = :fechaRegistro WHERE id = :id');
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

  public function actualizarFirmaimg($datos){
    $this->db->query('UPDATE archivos_certificada SET  nombrearchivo = :nombre_archivo, tipo = :tipo WHERE id = :id');
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
  public function borrarArchivo($datos){
    //sentencias preparadas (id_usuario = :id) donde :id es un parametro temporal
    $this->db->query('DELETE FROM archivos_certificada WHERE id = :id');
    //vinvular valores
    $this->db->bind(':id', $datos['id']);

    //Ejecutar
    if ($this->db->execute()) {
      return true;
    }else {
      return false;
    }
  }

  public function agregarfirma($datos){
    $this->db->query('INSERT INTO archivos_firma(textofirma,nombrearchivo,tipo,tamanio,fecha,fecha_r,id_doc,estado) VALUES (:firmatexto, :nombre_arch, :tipo, :tamanio, :fecha, NOW(), :id_doc, 1)');

    //vinvular valores
    $this->db->bind(':firmatexto', $datos['firmatexto']);
    $this->db->bind(':nombre_arch', $datos['nombre_arch']);
    $this->db->bind(':tipo', $datos['type']);
    $this->db->bind(':tamanio', $datos['tamanio']);
    $this->db->bind(':fecha', $datos['fechaActual']);
    $this->db->bind(':id_doc', $datos['id_doc']);
    //$this->db->bind(':estado', $datos['fechaActual']);

    //Ejecutar
    if ($this->db->execute()) {
      return true;
    }else {
      return false;
    }
  }

  public function obtenerfimas($id){
  
      $this->db->query('SELECT * FROM archivos_firma WHERE id_doc = :id');
  
      //vinvular valores
      $this->db->bind(':id', $id);
  
      $resultados = $this->db->registros();
      return $resultados;
  }
}// end class
?>
