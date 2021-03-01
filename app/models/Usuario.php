<?php

    class Usuario{

        private $db;

        public function __construct(){
            $this->db = new DataBase();
        }

        /**
         * Metodo que valida que las credenciales de inicio de sesion sean correctas.
         * @return 0 No existe el nombre de usuario.
         * @return 1 Credenciales correctas.
         * @return 2 Contraseña incorrecta.
         */
        public function validateLogin($username, $password){
            if(!$this->existUsername($username)){
                return 0;
            } else if($this->isCorrectPassword($username, $password)){
                return 1;
            } else{
                return 2;
            }
        }

        /**
         * Metodo que evalua si el nombre de usuario existe en la base de datos.
         * @param username Nombre de usuario
         * @return true Si el nombre de usuario existe.
         * @return false Si el nombre de usuario no existe. 
         */
        private function existUsername($username){
            if($this->db->executeQuery("SELECT username FROM Usuario WHERE username=?", [$username])){
                return true;
            }
            return false;
        }

        /**
         * Metodo que evalua si la contraseña es correcta para el usuario que se recibe como parametro.
         * @param username Nombre de usuario
         * @param password Contraseña del usuario
         * @return true Si la constraseña es correecta.
         * @return false Si la contraseña no es correcta.
         */
        private function isCorrectPassword($username, $password){
            if($this->db->executeQuery("SELECT username FROM Usuario WHERE username=? && password=?", [$username, $password])){
                return true;
            }
            return false;
        }

        /**
         * Metodo que obtiene el rol del Usuario que recibe como parametro
         * @return Rol del usuario.
         */
        public function getRol($username){
            $user = $this->db->executeQuery("SELECT r.tipo FROM Usuario u INNER JOIN Rol r ON r.IdRol=u.rol WHERE u.username=?" , [$username]);
            return $user['tipo'];
        }
   
        /**
         * Metodo que obtiene toda la informacion del usuario que recibe como parametro
         * @return Array con la informacion del usuario.
         */
        public function getUserData($username){
            return $this->db->executeQuery("SELECT * FROM Usuario WHERE username=?", [$username]);
        }
    }

?>
