<?php

    class Usuario{

        private $db;

        public function __construct(){
            $this->db = new DataBase();
        }

        public function getUsers(){
            return $this->db->executeQuery("SELECT * FROM Usuario");
        }
   
    }


?>