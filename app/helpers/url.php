<?php

    //Redireccionar paginas.
    function redirect($page){
        header('location: ' . URL_PATH . $page);
    }
    
?>