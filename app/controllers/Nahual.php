<?php

    class Nahual extends Controller{
  
        public function __construct(){

        }

        /**
         * Metodo que llama a la vista Nahual ubicada en app/views/pages/nahuales/Nahual y le pasa como parametro un array.
         * currentMenu:
         * 0 Tiempo Maya
         * 1 Linea De Tiempo
         * 2 Calendario Haab
         * 3 Calendario Cholquij
         * 4 Rueda Calendarica
         * 5 Nahuales
         */
        public function index(){
            $this->getView('pages/nahuales/nahual', [
                'tittle' => 'Nahuales',
                'currentMenu' => '5'
            ]);
        }

        /**
         * Metodo que obtiene informacion acerca del nahual y energia en base a la fecha recibida mediante un metodo post.
         */
        public function getInformation(){
            $formato = mktime(0, 0, 0, 1, 1, 1720)/(24*60*60);
            $fecha = date("U", strtotime($_POST['date']))/(24*60*60);
            $id = $fecha-$formato;
            $level = $this->getLevel($id % 13);
            $nahual = $this->getNahual($id %20);
            header('Location: ' . URL_PATH . '/calendarioCholquij?nahual=' . $nahual . '&nivel=' . $level . '#' . $nahual, true, 301);   
        }   
        /**
         * Metodo que retorna el nivel en base al parametro $id que recibe.
         */
        private function getLevel($id){
	        switch ($id){
                case 12: return 1; 
                case 0: case -12: return 2;  
                case 1: case -11: return 3; 
                case 2: case -10: return 4; 
                case 3: case  -9: return 5; 
                case 4: case  -8: return 6; 
                case 5: case  -7: return 7; 
                case 6: case  -6: return 8; 
                case 7: case  -5: return 9; 
                case 8: case  -4: return 10; 
                case 9: case  -3: return 11; 
                case 10: case -2: return 12; 
                case 11: case -1: return 13; 
            }
        }

        /**
         * Metodo que retorna el nahual correspondiente al parametro $id recibido.
         */
        private function getNahual($id){
            switch ($id){
                case 0:  case -19: return "tzikin"; 
                case 1:  case -18: return "ajmaq"; 
                case 2:  case -17: return "noj";
                case 3:  case -16: return "tijax"; 
                case 4:  case -15: return "kawoq"; 
                case 5:  case -14: return "ajpu"; 
                case 6:  case -13: return "imox"; 
                case 7:  case -12: return "iq"; 
                case 8:  case -11: return "aqabal"; 
                case 9:  case -10: return "kat"; 
                case 10: case  -9: return "kan"; 
                case 11: case  -8: return "kame"; 
                case 12: case  -7: return "kej"; 
                case 13: case  -6: return "qanil"; 
                case 14: case  -5: return "toj"; 
                case 15: case  -4: return "tzi"; 
                case 16: case  -3: return "batz"; 
                case 17: case  -2: return "e"; 
                case 18: case  -1: return "aj"; 
                case 19: return "ix";
            }
        }
    
    }

?>