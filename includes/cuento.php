<?php
    session_start();
    $varsesion=$_SESSION['Usuario'];
    if($varsesion == null || $varsesion == ''){
        header("location:NOINICIOSESION.php");
        die();
    }

?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <h1>Bienvenido, <?php echo $_SESSION['Usuario'];?></h1>
    <a href="Cerrar_sesion.php">Cerrar sesion</a>
    </body>
</html>