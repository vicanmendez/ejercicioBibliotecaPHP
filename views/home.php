<?php
if(!defined("URL_BASE")) {
    require_once("../config.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Principal biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>
<body>
    <?php
        if (isset($error)) {
            if($error == 1) {
                echo "<p>Usuario o contraseña incorrectos.</p>";
            } else if($error == 0) {
            echo "<p>Usuario registrado con éxito.</p>";
            } else {
                echo $error;
            }
        }
    ?>
    <?php
    if (isset($_SESSION['email'])) : ?>
        <h2>Bienvenido, <?php echo $_SESSION['name']; ?>!</h2>
        <h4> <?php echo $_SESSION['email']; ?></h4>
        <p>Has iniciado sesión correctamente.</p>
        <p> Ahora puede realizar reservas y préstamos. </p>
        <p>¿Quieres cerrar sesión?</p>
        <a href="<?php echo URL_BASE; ?>/views/logout.php">Cerrar sesión</a>
    <?php else : ?>
        <h2> Biblioteca UTU</h2>
        <p>Por favor, inicia sesión para acceder como funcionario.</p>
        <a href="<?php echo URL_BASE; ?>/views/login.php">Iniciar sesión</a>
        <p> Aún no tienes usuario? <a href="<?php echo URL_BASE; ?>/views/register.php"> Registrarme </a> </p>
    <?php endif; ?>
    <h2> Bienvenides!!! </h2>
    <p> Esta es la página principal de la biblioteca de UTU. </p>
    <p> Aquí podrás encontrar información sobre los libros disponibles, así como también podrás realizar reservas y préstamos. </p>
</body>
</html>
