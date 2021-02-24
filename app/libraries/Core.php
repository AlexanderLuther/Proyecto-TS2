<?php

    /*
     *Mapear la url ingresada en el navegador.
     * 1-Controlador
     * 2-Metodo
     * 3-Parametro
     */
    class Core{
        
        private $currentController = 'Home';
        private $currentMethod = 'index';
        private $params = [];

        public function __construct(){
            $url = $this->getUrl(); 

            //Buscar si el controlador existe. Si existe se configura como controlador por defecto.
            if(file_exists('../app/controllers/'. ucwords($url[0]) .'.php')){
                $this->currentController = ucwords($url[0]);
                unset($url[0]);
            } 

            //Requerir el controlador
            require_once '../app/controllers/' . $this->currentController . '.php';
            $this->currentController = new $this->currentController();

            //Buscar si el metodo actual existe. Si existe se configura como el metodo por defecto.
            if(isset($url[1])){
                if(method_exists($this->currentController, $url[1])){
                    $this->currentMethod = $url[1];    
                    unset($url[1]);
                }
            }

            //Obtener parametros.
            $this->params = $url ? array_values($url) : [];

            //Llamar a callback con los parametros obtenidos.
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        }

        public function getUrl(){
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                return $url;
            }
        }

    }
?>
