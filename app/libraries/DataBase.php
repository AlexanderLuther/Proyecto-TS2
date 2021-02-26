<?php

    //Clase para conectarse a la base de datos y ejecutar consultas PDO
    class DataBase{

        private $host = DB_HOST;
        private $user = DB_USER;
        private $password = DB_PASSWORD;
        private $name = DB_NAME;
        private $dataBaseHandler;

        public function __construct(){
            //Configurar la conexion
            $dataSourceName = 'mysql:host=' . $this->host . ';dbname=' . $this->name;

            //Crear una instancia de PDO
            try{
                $this->dataBaseHandler = new PDO($dataSourceName, $this->user, $this->password, array(
                    PDO::ATTR_PERSISTENT => true,
                    PDO::ATTR_EMULATE_PREPARES => false,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
                ));
            } catch(PDOException $ex){
                echo 'Exception -> ';
                var_dump($ex->getMessage());
            }
        }

        /**
         * Metodo que prepara una sentencia para su ejecucion.
         * @return StatementObject
         */
        private function setQuery($sql){
            try{
                return $this->dataBaseHandler->prepare($sql);
            } catch(PDOException $ex){
                echo 'Exception -> ';
                var_dump($ex->getMessage());
            }
        }

        /**
         * Metodo que ejecuta una consulta.
         */        
        public function executeUpdate($sql){
            $statement = $this->setQuery($sql);
            if(isset($statement)){
                $statement->execute($sql);
            } 
        }

        /**
         * Metodo que ejecuta una consulta, obtiene el resultado de la 
         * consulta y lo retorna. 
         */        
        public function executeQuery($sql){
            $statement = $this->setQuery($sql);
            if(isset($statement)){
                $statement->execute($sql);
                return  $statement->fetchAll(PDO::FETCH_OBJ);
            } 
            return null;
        }

    }

?> 
