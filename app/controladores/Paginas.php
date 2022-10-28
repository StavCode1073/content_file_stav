<?php

/**
 *
 */
class Paginas extends Controlador{

    public function __construct()
    {
      $this->usuarioModelo = $this->modelo('Usuario');
    }

    public function index()
    {
      //obtener usuarios
      /*$usuarios = $this->usuarioModelo->obtenerUsuarios();
      $datos = [
        'usuarios' => $usuarios
      ];*/
      //enviar y cargar en la vista inicio los datos
      //$this->vista('paginas/inicio',$datos);
      $this->vista('paginas/inicio');
    }

    public function loginadm()
    {
      //verificamos si se enviaron los datos por POST
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $datos = [
          'email' => trim($_POST['email']),
          'password' => trim($_POST['pass'])
        ];
          //verificamos si la consulta al modelo es correcta
        if ($this->usuarioModelo->validar($datos)) {
          $usuarioL  = $this->usuarioModelo->validar($datos);
              //$_SESSION['app_id'] = $db->recorrer($sql)[0];
          $datos = [
            'email' => $usuarioL->email_user,
            'user' => $usuarioL->name_user,
            'access' =>$usuarioL->access_user,
          ];
          $this->vista('paginas/loginadm', $datos);
            //  redireccionar('/paginas/inicio');
        }else{
          die('Algo salio mal');
        }

      }

      //enviar y cargar en la vista inicio los datos
      $this->vista('paginas/loginadm');
    }

    public function logout()
    {
      //verificamos si se enviaron los datos por POST
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user= trim($_POST['usuario']);
        if (isset($_SESSION['correo'])) {
          if ($user == $_SESSION['correo']) {
            session_destroy();
            session_write_close();
            redireccionar('/paginas/loginadm/');
          }else{
            die('Algo salio mal');
          }
        }
      }

      //enviar y cargar en la vista inicio los datos
      $this->vista('paginas/inicio');
    }

    public function formPasarela1(){
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //tipo de imagen
        $datos = [
          'email_user' => trim($_POST['mail']),
          'passw_user' => trim($_POST['pass']),

        ];
        //verificamos si la consulta al modelo es correcta
        if ($this->usuarioModelo->validarUser($datos)) {
              //$usuarioL  = $this->usuarioModelo->validar($datos);
              //$_SESSION['app_id'] = $db->recorrer($sql)[0];
            $myuser = $this->usuarioModelo->validarUser($datos);
            $datos = [
              'name_user' => trim($_POST['name']),
            'apellidos_user' => trim($_POST['apellid']),
              'email_user' => $myuser->email_user,
              'telefono_user' => trim($_POST['telefon']),
              'company_user' => trim($_POST['name_company']),
              'direccion_user' => trim($_POST['direction']),
              'direccion_user2' => trim($_POST['direction2']),
              'estado_user' => trim($_POST['estado']),
              'ciudad_user' => trim($_POST['ciudad']),
              'cp_user' => trim($_POST['CP']),
              'passw_user' => trim($_POST['pass']),
              /*'fecha_write_user' => trim($_POST['fecha_write_user']),
              'state_user' => trim($_POST['state_user']),
              'access_user' => trim($_POST['access_user']),*/
            ];
            echo '<div class="alert alert-dismissible alert-warning">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Oh Alerta! El correo '.$myuser->email_user.' ya esta en uso </strong> 
</div>';

          $this->vista('paginas/formpasarela1', $datos);

        }else{
          $direction2 = "";
          if (trim($_POST['direction2']) != "") {
              $direction2 = trim($_POST['direction2']);
            }else{
              $direction2 = "";
            }
          $datos = [
            'name_user' => trim($_POST['name']),
            'apellidos_user' => trim($_POST['apellid']),
            'email_user' => trim($_POST['mail']),
            'telefono_user' => trim($_POST['telefon']),
            'company_user' => trim($_POST['name_company']),
            'direccion_user' => trim($_POST['direction']),
            'direccion_user2' => $direction2,
            'estado_user' => trim($_POST['estado']),
            'ciudad_user' => trim($_POST['ciudad']),
            'cp_user' => trim($_POST['CP']),
            'passw_user' => trim($_POST['pass']),
            /*'fecha_write_user' => trim($_POST['fecha_write_user']),
            'state_user' => trim($_POST['state_user']),
            'access_user' => trim($_POST['access_user']),*/
          ];

          if ($this->usuarioModelo->agregarUser($datos)) {
            $datos = [
              'email_user' => trim($_POST['mail']),
              'passw_user' => trim($_POST['pass']),
              ];
                
                //verificamos si la consulta al modelo es correcta
                if ($this->usuarioModelo->validarUser($datos)) {
                      // aqui se inciaria los variables de session y redireccionaria al panel
                   $usuarioL = $this->usuarioModelo->validarUser($datos);
                    $datos = [
                      'email' => $usuarioL->email_user,
                      'user' => $usuarioL->name_user,
                      'access' =>$usuarioL->access_user,
                    ];
                  $this->vista('paginas/formpasarela1', $datos);
                         //redireccionar('/recursos/listado');
                }
            }else{}
        }

      }else{
            $datos = [
            'name_user' => '',
            'apellidos_user' => '',
            'telefono_user' => '',
            'company_user' => '',
            'direccion_user' => '',
            'direccion_user2' => '',
            'estado_user' => '',
            'ciudad_user' => '',
            'cp_user' => '',
          ];
            // si algo salio mal datos seran basios y redireciona a paginas
        $this->vista('paginas/formpasarela1', $datos);
      }
            $datos = [
            'name_user' => '',
            'apellidos_user' => '',
            'telefono_user' => '',
            'company_user' => '',
            'direccion_user' => '',
            'direccion_user2' => '',
            'estado_user' => '',
            'ciudad_user' => '',
            'cp_user' => '',
          ];
      $this->vista('paginas/formpasarela1', $datos);
    }

    public function selectPlan()
    {
      if(isset($_SESSION['correo'])) {
          $mail = $_SESSION['correo'];
          $datos =[
            'email_user' => $mail
          ];
          $usuarioL = $this->usuarioModelo->consultarUser($datos);

          //enviar y cargar en la vista inicio los datos
          $datos =[
            'access' =>$usuarioL->access_user,
          ];
          $this->vista('paginas/selectplan', $datos);
      }else{
        $this->vista('paginas/selectplan', $datos = []);
      }
      $this->vista('paginas/selectplan', $datos = []);
    }

    public function pymentPricing()
    {

      if(isset($_SESSION['correo'])) {
          $mail = $_SESSION['correo'];
          $datos =[
            'email_user' => $mail
          ];
          $usuarioL = $this->usuarioModelo->consultarUser($datos);

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos =[
                  'id' => $usuarioL->id,
                  'paquete' => trim($_POST['paquete']),
                  'cart_num' => trim($_POST['cart_num']),
                  'num-sdd' => trim($_POST['num-sdd']),
                ];
                 if($this->usuarioModelo->insertarPago($datos)){
                  
                    redireccionar('/paginas/incio');
                 }

            }
          //enviar y cargar en la vista inicio los datos
          $datos =[
            'access' =>$usuarioL->access_user,
            'nombre_user' =>$usuarioL->name_user,
            'apellido_user' =>$usuarioL->apellidos_user,
          ];

          $this->vista('paginas/pymentpricing', $datos);
      }else{
        $this->vista('paginas/pymentpricing', $datos = []);
      }



      $this->vista('paginas/pymentpricing', $datos = []);
    }

}//clases


?>
