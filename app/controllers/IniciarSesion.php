<?php

    class IniciarSesion extends Controller{

        public function __construct(){
        
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
            $this->getView('pages/usuarios/iniciarSesion', [
                ['tittle' => 'Iniciar Sesion',
                'currentMenu' => '6']
            ]);
        }

    }

?>