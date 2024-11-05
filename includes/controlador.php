<?php
    session_start();
    if(!empty($_POST["btnIngresar"])){
        if(empty($_POST["username"]) or empty($_POST["password"])){
            echo'<div class="Advertencia">LOS CAMPOS NO PUEDEN IR VACIOS</div>';
        }else{
            $usuario=$_POST["username"];
            $contraseña=$_POST["password"];
            $sql=$conexion->query("Select * from cliente Where Usuario='$usuario' and Contraseña='$contraseña'");
            if($datos=$sql->fetch_object()){
                header("location:cuento.php");
                $_SESSION['Usuario']=$usuario;
            }else{
                echo'<div class="Advertencia">DATOS ERRONEOS</div>';
            }
            
        }
    }
    

?>