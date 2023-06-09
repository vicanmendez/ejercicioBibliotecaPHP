<?php
if(!defined("URL_BASE")) {
    require_once("../config.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</head>


<body>
    <h2>Login</h2>

    <?php if (isset($error)) : ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>

    <form method="POST" action="../controllers/UserController.php?action=login"  class="col-md-6" style="margin-left: 20px">
    <div class="mb-3">
        <label for="InputEmail" class="form-label">Email </label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="InputPassword" class="form-label">Contraseña</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
    </div>
<button type="submit">Iniciar sesión</button>
</form>
<a href="<?php echo URL_BASE; ?>/views/home.php">Volver</a>
</body>
</html>


