<?php
    // No hago validaciones
    $nombre = $_REQUEST['nombre'];
    $pass = $_REQUEST['pass'];

    session_start();
    $conn = new mysqli("localhost", "root", "", "peluqueria_ivan");
    $sql = "select nombre from usuarios";
    $sql2 = "select contraseña from usuarios";
    $result1 = $conn->query($sql);
    $result2 = $conn->query($sql2);
    if ($nombre = $result1 and $pass = $result2){
        // estamos logeados
        $_SESSION['logged'] = true;
        $_SESSION['idUsuario'] = $nombre;
        header("location: usuario.php");
    } else {
        //no es correcto
        $_SESSION['error'] = "Usuario y/o Contraseña incorrectas";
        header("location: login.php");
    }
    
?>