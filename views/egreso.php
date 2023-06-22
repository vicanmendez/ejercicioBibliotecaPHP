<?php
if(!defined("URL_BASE")) {
    require_once("../config.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Prestamo de Libros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL_BASE; ?>/assets/style/prestamo.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.nav-item').click(function() {
                $(this).find('.submenu').slideToggle();
            });
        });
    </script>
</head>
<body style="background-color:#4686EE ;">
<h1></h1><br>


<h1 style="font-family: 'Courier New', Courier, monospace;text-align:center;" ><strong> Bienvenido  a la gestión de la Biblioteca</strong></h1>
    <header>
    <!--menu-->
    <div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-boxbox-user">
                <div class="majorPage">
                    <h2 class="title">Préstamo de Libros</h2>

                    <form action="../controllers/EgresoController.php?action=ingresar" method="POST" enctype="multipart/form-data">
                    <br>        
                   
                    <label for="autor">Nombre del Estudiante</label>
                        <input type="text" name="nombre-estudiante" id="nombre-estudiante" class="form-control">

                    <label for="cedula">Cédula del Estudiante</label>
                        <input type="text" name="cedula" id="cedula" class="form-control">

                    <label for="titulo">Título del Libro</label>
                        <input type="text" name="titulo" id="titulo" class="form-control">

                        <label for="id-libro">Id Libro</label>
                        <input type="text" name="id-libro" id="id-libro" class="form-control">

                    <label for="telefono">Teléfono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control">

                     
                        
                        <label for="fecha">Fecha</label>
                        <input type="date" name="fecha" id="fecha" class="form-control">
                        <br>

                        <div class="text-center" class="button-box">
                            <input type="submit" value="Aceptar" class="button">
                            <?php if (isset($_GET['envio_exitoso']) && $_GET['envio_exitoso'] == 'true') : ?>
                                 <div id="mensaje-exito" class="alert alert-success">El formulario se ha enviado exitosamente.</div>
                            <?php endif; ?>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>



    <!-- Resto del contenido de la página -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--formulario-->

    


</body>
</html>