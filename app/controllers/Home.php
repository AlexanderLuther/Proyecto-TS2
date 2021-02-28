<?php

    class Home extends Controller{

        private $userModel; 

        public function __construct(){
            $this->userModel = $this->getModel('Usuario');
        }

        /**
         * Metodo que hace un llamado a la carga de la pagina de inicio
         * ubicada en app/views/pages/home.php y le pasa como parametro un array.
         * currentMenu:
         * 0 Tiempo Maya
         * 1 Linea De Tiempo
         * 2 Calendario Haab
         * 3 Calendario Cholquij
         * 4 Rueda Calendarica
         * 5 Nahuales
         */
        public function index(){ 
            $this->getView('pages/home', [
                'tittle' => 'Tiempo Maya',
                'currentMenu' => '0'
            ]);
        }

    }

?>