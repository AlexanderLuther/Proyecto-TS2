<?php 
    class Controller{

        public function __construct(){

        }

        //Cargar modelo
        public function getModel($model){
            require '../app/models/' . $model . '.php';
            return new $model();
        }

        //Cargar vista
        public function getView($view, $params = []){
            if(file_exists('../app/views/' . $view . '.php')){
                require '../app/views/' . $view . '.php';
            } else{
                die('../app/views/' . $view . '.php -> La vista no existe.');
            }
        }
    }
?>