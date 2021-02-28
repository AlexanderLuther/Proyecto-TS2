<?php

    class CalendarioCholquij extends Controller{
        
        public function __construct(){

        }

        /**
         * Metodo que llama a la vista CalendarioCholquij ubicada en app/views/pages/calendarios/CalendarioCholquij y le pasa como parametro un array.
         * currentMenu:
         * 0 Tiempo Maya
         * 1 Linea De Tiempo
         * 2 Calendario Haab
         * 3 Calendario Cholquij
         * 4 Rueda Calendarica
         * 5 Nahuales
         */
        public function index(){
            $this->getView('pages/calendarios/CalendarioCholqij', [
                'tittle' => 'Calendario Cholquij',
                'currentMenu' => '3'
            ]);
        }

    }

?>