<?php

    class Perfil extends Controller{

        private $userModel;

        public function __construct(){
            $this->userModel = $this->getModel('Usuario');
        }

        public function index(){
            session_start();
            $this->getView("/pages/usuarios/perfil", [
                ['tittle' => 'Perfil', 
                'currentMenu' => 8],
                $this->userModel->getUserData($_SESSION['username'])
            ]);
        }
    }

?>