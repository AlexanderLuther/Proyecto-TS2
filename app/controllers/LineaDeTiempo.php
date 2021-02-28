<?php

    class LineaDeTiempo extends Controller{

  
        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->getView('pages/lineaDeTiempo/LineaDeTiempo', [
                'tittle' => 'Linea de Tiempo',
                'currentMenu' => '1'
            ]);
        }

    }

?>