<?php

  class Usuario{
    private $db;

    public function __construct(){
      $this->db = new Base;
    }

    public function validar($datos){
    $this->db->query('SELECT * FROM info_partner_user WHERE email_user = :email AND passw_user = :password LIMIT 1;');

    $this->db->bind(':email', $datos['email']);
    $this->db->bind(':password', $datos['password']);

    $resultados = $this->db->registro();

    return $resultados;
    }
    public function validarUser($datos){
      $this->db->query('SELECT * FROM info_partner_user WHERE email_user = :email_user LIMIT 1;');

        $this->db->bind(':email_user', $datos['email_user']);
        //$this->db->bind(':passw_user', $datos['passw_user']);

        $resultados = $this->db->registro();

        return $resultados;
    }

  public function agregarUser($datos){
    $this->db->query('INSERT INTO info_partner_user
      (name_user,apellidos_user,email_user,telefono_user,company_user,direccion_user,direccion_user2,estado_user, ciudad_user,cp_user,passw_user,fecha_write_user,state_user,access_user) 
    VALUES 
    (:name_user, :apellidos_user, :email_user, :telefono_user, :company_user, :direccion_user, :direccion_user2, :estado_user, :ciudad_user, :cp_user, :passw_user, NOW(), 1, 200)');

    //vinvular valores
    $this->db->bind(':name_user', $datos['name_user']);
    $this->db->bind(':apellidos_user', $datos['apellidos_user']);
    $this->db->bind(':email_user', $datos['email_user']);
    $this->db->bind(':telefono_user', $datos['telefono_user']);
    $this->db->bind(':company_user', $datos['company_user']);
    $this->db->bind(':direccion_user', $datos['direccion_user']);
    $this->db->bind(':direccion_user2', $datos['direccion_user2']);
    $this->db->bind(':estado_user', $datos['estado_user']);
    $this->db->bind(':ciudad_user', $datos['ciudad_user']);
    $this->db->bind(':cp_user', $datos['cp_user']);
    $this->db->bind(':passw_user', $datos['passw_user']);

    //$this->db->bind(':estado', $datos['fechaActual']);

    //Ejecutar
    if ($this->db->execute()) {
      return true;
    }else {
      return false;
    }
  }
    public function consultarUser($datos){
      $this->db->query('SELECT * FROM info_partner_user WHERE email_user = :email_user LIMIT 1;');

        $this->db->bind(':email_user', $datos['email_user']);
        $resultados = $this->db->registro();

        return $resultados;
    }

    public function insertarPago($datos){
        $this->db->query('INSERT INTO account_pyment(id_user,pago,num_card,fecha_write, state) VALUES (:id_user, :pago, :cart_num, NOW(), 1)');

        //vinvular valores
        $this->db->bind(':id_user', $datos['id']);
        $this->db->bind(':pago', $datos['paquete']);
        $this->db->bind(':cart_num', $datos['cart_num']);
        //$this->db->bind(':num-sdd', $datos['num-sdd']);

        //Ejecutar
        if ($this->db->execute()) {
            $this->db->query('UPDATE info_partner_user SET  access_user =  100 WHERE id = :id');
            //vinvular valores
            $this->db->bind(':id', $datos['id']);

            //Ejecutar
            $this->db->execute();

          return true;
        }else {
          return false;
        }
    }

  }

?>
