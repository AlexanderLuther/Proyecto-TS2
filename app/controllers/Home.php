<?php

    class Home extends Controller{

        public function __construct(){

        }

        /**
         * Metodo que hace un llamado a la carga de la pagina de inicio
         * ubicada en app/views/pages/home.php
         */
        public function index(){
            $this->getView('pages/home');
        }

    }

?>