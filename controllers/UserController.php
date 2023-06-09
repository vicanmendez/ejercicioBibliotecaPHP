<?php

require_once('../models/User.php');
$Usercontroller = new UserController();

if($_GET['action'] == 'login') {
    $Usercontroller->login();
} elseif($_GET['action'] == 'register') {
    $Usercontroller->register();
}

class UserController{
     
    
        public function register(){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password1 = $_POST['password'];
            $password2 = $_POST['password2'];
    
            if ($password1 != $password2) {
                $error = 'Las contraseñas no coinciden';
                require_once("../views/register.php");
            } else {
                
                $user = new User($name, $email, $password1);
                if($user->register($name, $email, $password1) === true){
                    $error = 0;
                    require_once("../views/home.php");
                } else {
                    $error = 'Error al registrar el usuario: ERROR EN LA BASE DE DATOS: ';
                    require_once("../views/home.php");
                }
            }
        }

        public function login(){
            $email = $_POST['email'];
            $password = $_POST['password'];
    
            $user = new User($email, $password);
            if($user->verifyUser($email, $password) !== false){
                session_start();
                $arrUser = $user->getAllUserData($email);
                $_SESSION['id'] = $arrUser['ID'];
                $_SESSION['email'] = $arrUser['email'];
                $_SESSION['password'] = $arrUser['contraseña'];
                $_SESSION['name'] = $arrUser['nombre'];
                require_once("../views/home.php");
            } else {
                $error = 'Error al iniciar sesión: ERROR EN LA BASE DE DATOS: ';
                require_once("../views/home.php");
            }
        }
}

?>