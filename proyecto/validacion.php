<?php
    session_start();

    $NOM = $_GET['nom'];
    $PASS = $_GET['pass'];
    $EMAIL = $_GET['email'];

    if (!isset($_GET['nom']) or $_GET['nom']==''){
        $error = 'Nombre incompleto';
    }else if (!isset($_GET['pass']) or $_GET['pass']==''){
        $error = 'Contraseña incompleta';
    }else if(!filter_var( $_GET['email'], FILTER_VALIDATE_EMAIL)){
        $error = 'Error en el email';
    }



    if (isset($error)){
        $_SESSION['error'] = $error;
        echo "Ha ocurrido un error";
        Header("Location: form.php");
    }
    elseif (!isset($error)){
        $_SESSION['nom'] = $_GET['nom'];
        $_SESSION['pass'] = $_GET['pass'];
        $_SESSION['email'] = $_GET['email'];
        $conn = new mysqli("localhost", "root", "", "peluqueria_ivan");
        $sql = "insert into usuarios (nombre, contraseña, email) values ('$NOM', '$PASS', '$EMAIL')";
        $conn->query($sql);
        $conn->close();
        Header("Location: index.php");
    }
?>