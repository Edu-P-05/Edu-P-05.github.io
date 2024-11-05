
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../Estilo/Estilo_Sesion.css">
    </head>
    <body>
        <form method="POST" action="">
            <h2>Login</h2>
            <?php
            include("Conexion.php");
            include("controlador.php");
            ?>
            <label for="username" class="texto">Usuario</label>
            <input type="text" name="username">
            <label for="password" class="texto">Contraseña</label>
            <input type="password" name="password">

            <input type="submit" class="btn-2" value="Iniciar Sesion" name="btnIngresar">

            <a href="../Vista/index.html" class="btn-2">Volver</a>
            </div>
        </form>
    </body>
</html>

