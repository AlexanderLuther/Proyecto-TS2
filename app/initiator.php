<?php
    //Cargar todas las librerias
    require_once 'config/config.php';

    //Cargar los helpers
    require_once 'helpers/url.php';

    //Autoload php
    spl_autoload_register(function($className){
        require_once 'libraries/' . $className . '.php';    
    });
?>
