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
    if ($nombre = "admin" and $pass = "admin"){
        // estamos logeados
        $_SESSION['logged'] = true;
        $_SESSION['idUsuario'] = $nombre;
        header("location: admin.php");
    } else {
        //no es correcto
        $_SESSION['error'] = "Usuario y/o Contraseña incorrectas";
        header("location: login2.php");
    }
    
?>