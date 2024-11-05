<?php
    session_start();
    $varsesion=$_SESSION['Usuario'];
    if($varsesion == null || $varsesion == ''){
        header("location:NOINICIOSESION.php");
        die();
    }
    session_destroy();
    header("Location:../Vista/index.html");
    
?>