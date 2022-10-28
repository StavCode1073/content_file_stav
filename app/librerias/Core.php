<?php
  /*
  Mapear la url ingresado en el navegador
  1- controlador
  2- metodo
  3- parametro
  Ejemplo: artuculo/actualizar/4
  */
  /**
   *
   */
  class Core
  {
    protected $controladorActual = 'Paginas';
    protected $metodoActual = 'index';
    protected $parametros = [];

    //metodo constructos que se carga automaticamente con ello lo que contenga
    public function __construct()
    {
      #print_r($this->getUrl());
        $url = $this->getUrl();

        //buscar en controladores si el controlador existe
        if (file_exists('../app/controladores/' .ucwords($url[0]).'.php')) {
          // Si existe se setea controlador por defecto
          $this->controladorActual = ucwords($url[0]);

          //unset indice
          unset($url[0]);
        }
        //requerir el controladores
        require_once '../app/controladores/' . $this->controladorActual. '.php';
        $this->controladorActual = new $this->controladorActual;

        //chequear la segunda parte de la url que seria el metodo
        if (isset($url[1])) {
            if (method_exists($this->controladorActual, $url[1])) {
              // cchequemos el metodo
              $this->metodoActual = $url[1];
              //unset indice
              unset($url[1]);
            }
        }
        //para probar traer metodos
        //echo $this->metodoActual;

        //obtener los posibles parametros
        $this->parametros = $url ? array_values($url) : [];

        //llamar callbakc  con parametros array
        call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);

    }

    public function getUrl()
    {
      //echo $_GET['url'];
      if (isset($_GET['url'])) {
        // Consegir la url
        $url = rtrim($_GET['url'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);

        return $url;
      }
    }
  }




?>
