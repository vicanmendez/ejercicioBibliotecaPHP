<?php

require_once('../models/Egreso.php');
$EgresoController = new EgresoController();

if($_GET['action'] == 'ingresar') {
    $EgresoController->ingresar();
} 

class EgresoController {

    public function ingresar() {
        $nombre_estudiante = $_POST['nombre-estudiante'];
        $cedula = $_POST['cedula'];
        $titulo = $_POST['titulo'];
        $id_libro = $_POST['id-libro'];
        $fecha = $_POST['fecha'];
        $telefono = $_POST['telefono'];

        $egreso = new Egreso($fecha, $cedula, $nombre_estudiante, $telefono, $id_libro, $titulo);
        if($egreso->ingresarEgreso($fecha, $cedula, $nombre_estudiante, $telefono, $id_libro) === true){
            $error = 0;
            require_once("../views/egreso.php");
        } else {
            $error = 'Error al registrar el egreso: ERROR EN LA BASE DE DATOS: ';
            require_once("../views/egreso.php");
        }



    }
}


?>