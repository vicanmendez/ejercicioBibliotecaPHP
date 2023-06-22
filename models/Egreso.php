<?php
class Egreso {
    private $id;
    private $fecha;
    private $CI;
    private $nombre;
    private $telefono;
    private $IDLibro;
    private $titulo;

    public function __construct0($id, $fecha, $CI, $nombre, $telefono, $IDLibro, $titulo) {
        $this->id = $id;
        $this->fecha = $fecha;
        $this->CI = $CI;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->IDLibro = $IDLibro;
        $this->titulo = $titulo;
    }

    public function __construct1($fecha, $CI, $nombre, $telefono, $IDLibro, $titulo) {
        $this->fecha = $fecha;
        $this->CI = $CI;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->IDLibro = $IDLibro;
        $this->titulo = $titulo;
    }

    public function getID() {
        return $this->id;
    }

    public function setID($id): void {
        $this->id = $id;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($fecha): void {
        $this->fecha = $fecha;
    }

    public function getCI() {
        return $this->CI;
    }

    public function setCI($CI): void {
        $this->CI = $CI;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono): void {
        $this->telefono = $telefono;
    }

    public function getIDLibro() {
        return $this->IDLibro;
    }

    public function setIDLibro($IDLibro): void {
        $this->IDLibro = $IDLibro;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function ingresarEgreso($fecha, $CI, $nombre, $telefono, $IDLibro) {
        require_once '../config.php';
        $conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $sentencia1 = "INSERT INTO egreso (fecha, CI, Nombre_lector, Telefono_lector) VALUES ('$fecha', '$CI', '$nombre', '$telefono')";
        $resultado = $conexion->query($sentencia1);
        if ($conexion->affected_rows > 0) {
            $consultaId = "SELECT MAX(ID) FROM egreso";
            $resultado = $conexion->query($consultaId);
            $fila = $resultado->fetch_row();
            $ID = $fila[0];
            $sentencia2 = "INSERT INTO l_e (Id_l, Id_e) VALUES ('$IDLibro', '$ID')";
            $resultado = $conexion->query($sentencia2);
            if ($conexion->affected_rows > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
        
    }



}


?>