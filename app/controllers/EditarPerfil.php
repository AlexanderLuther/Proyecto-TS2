<?php
    class EditarPerfil extends Controller{

        private $userModel;

        public function __construct(){
            $this->userModel = $this->getModel('Usuario');
        }

        public function index(){
            $this->getView("/pages/usuarios/editarPerfil", [
                ['tittle' => 'Editar Perfil', 
                'currentMenu' => 8],
                $this->userModel->getUserData($_SESSION['username'])
            ]); 
        }
    }
?>