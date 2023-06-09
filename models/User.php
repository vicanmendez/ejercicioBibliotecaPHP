<?php
class User
{
    private $id;
    private $name;
    private $password;

    private $email;

    public function __construct0($id, $name,  $email, $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function __construct1($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function __construct2($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }



    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getname()
    {
        return $this->name;
    }

    public function setname($name): void
    {
        $this->name = $name;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }


    public function register($name, $email, $password){
        require_once '../config.php';

        $conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        //insert en SQL
        $sentencia_sql = "INSERT INTO usuario (nombre, email, contraseña) VALUES ('$name', '$email', '$password')";
        $resultado = $conexion->query($sentencia_sql);
        if ($conexion->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    
    /* VERIFICA PARA INICIAR SESIÓN */
    public function verifyUser($email, $password) {
        require '../config.php';

        $conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $name = $conexion->real_escape_string($email);
        $sentencia_sql = "SELECT * FROM usuario WHERE email = '$email' AND contraseña = '$password'";
        $resultado = $conexion->query($sentencia_sql);
        if (isset($resultado->num_rows) and $resultado->num_rows === 1) {
            return true;
        }

        return false;
    }



/*
PRECONDICIÓN: El usuario debe estar logueado
POSTCONDICIÓN: Devuelve un array asociativo con todos los datos del usuario
*/
    public function getAllUserData($email){
        require '../config.php';
        $conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $name = $conexion->real_escape_string($email);
        $sentencia_sql = "SELECT * FROM usuario WHERE email = '$email'";
        $resultado = $conexion->query($sentencia_sql);
        if (isset($resultado->num_rows) and $resultado->num_rows === 1) {
            $fila = $resultado->fetch_assoc();
            return $fila;
        }

        return null;
    }
}
?>
