<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Peluquería Iván</title>
</head>
<body>
    <?php
        session_start();
    ?>
    <h1>Registro de usuario</h1>
    <form action="validacion.php" method="get">
        Nombre: <input type="text" name="nom"><br>
        Contraseña: <input type="text" name="pass"><br>
        Email: <input type="text" name="email"><br>
        <input type="submit" name="Enviar">
    </form>
    <?php
            if (isset($_SESSION['error'])){    
                echo "<p>".$_SESSION['error']."</p>";
            }
    ?>
</body>
</html>