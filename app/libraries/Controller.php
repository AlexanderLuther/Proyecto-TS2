<?php 
    class Controller{

        //Cargar modelo
        public function getModel($model){
            require_once '../app/models/' . $model . '.php';
            return new $model();
        }

        //Cargar vista
        public function getView($view, $params = []){
            if(file_exists('../app/views/' . $view . '.php')){
                require_once '../app/views/' . $view . '.php';
            } else{
                die('La vista no existe.');
            }
        }
    }
?>