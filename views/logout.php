<?php

if(!defined("URL_BASE")) {
    require_once("../config.php");
}
// Eliminar la sesión

session_start();
session_destroy();

// Eliminar la cookie de sesión
/*
setcookie('nombreUsuario', '', time() - 3600, '/');
setcookie('idUsuario', '', time() - 3600, '/');
*/

header('Location: ../index.php');
exit();

?>