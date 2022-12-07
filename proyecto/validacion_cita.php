<?php
    session_start();
    $conn = new mysqli("localhost", "root", "", "peluqueria_ivan");

    $FEC = $_GET['fec'];
    $PRO = $_GET['pro'];
    $HOR = $_GET['hora'];
    $USU = $_GET['usu'];
    $hoy = date("Y-m-d");
    $fecha_formulario = $_GET['fec'];
    $sql = "select fecha from citas";
    $sql2 = "select hora from citas";
    $result = $conn->query($sql);
    $result2 = $conn->query($sql2);  

    if (!isset($_GET['fec']) or $_GET['fec']==''){
        $error = 'Fecha incompleta';
    }else if (!isset($_GET['pro']) or $_GET['pro']==''){
        $error = 'Nombre incompleto';
    }else if($fecha_formulario <= $hoy){
        $error = 'Fecha anterior a hoy';
    }
    else if ($result==$FEC and $result2=$HOR){
        $error = 'Hora reservada';
    }
    


    if (isset($error)){
        $_SESSION['error'] = $error;
        echo "Ha ocurrido un error";
        Header("Location: nuevacita.php");
    }
    elseif (!isset($error)){
        $_SESSION['fec'] = $_GET['fec'];
        $_SESSION['pro'] = $_GET['pro'];
        $_SESSION['hora'] = $_GET['hora'];
        $_SESSION['usu'] = $_GET['usu'];
        $conn = new mysqli("localhost", "root", "", "peluqueria_ivan");
        $sql = "insert into citas (nombre_profesional, nombre_usuario, hora, fecha) values ('$PRO', '$USU', '$HOR', '$FEC')";
        $conn->query($sql);
        $conn->close();
        Header("Location: usuario.php");
    }
?>