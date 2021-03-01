<?php 

    class Sesion extends Controller{

        private $userModel;

        public function __construct(){
            $this->userModel = $this->getModel('Usuario');
        }

        /**
         * Metodo que procesa el inicio de sesion. Si existe algun error llama a la vista 
         * de inicio de sesion y pasa un parametro error. De lo contrario guarda el nombre
         * de usuario y el rol del usuario en la sesion y redirecciona a la pagina de inicio.
         */
        public function login(){
            $username = $_POST['username'];
            $password = $_POST['password'];
            switch($this->userModel->validateLogin($username, $password)){
                //Noombre de usuario no existe.
                case 0: 
                    header('Location: ' . URL_PATH . '/iniciarSesion?error=0', true, 301); 
                break;
                //Credenciales correctas.
                case 1: 
                    session_start();
                    $_SESSION['username'] = $username;
                    $_SESSION['rol'] = $this->userModel->getRol($username);
                    header('Location: ' . URL_PATH . '/home', true, 301); 
                break;
                //Contraseña incorrecta.
                case 2:
                    header('Location: ' . URL_PATH . '/iniciarSesion?error=1', true, 301);  
                break;
            }
        }

        /**
         * Metodo que elimina los datos almacenados en la sesion y destruirla.
         */
        public function logout(){
            session_start();
            session_unset();
            session_destroy();
            header('Location: ' . URL_PATH, true, 301); 
        }

    }

?>