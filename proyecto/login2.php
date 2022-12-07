<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administración</title>
</head>
<body>
    <h1>Administración</h1>
    <?php
        session_start();
        if (isset($_SESSION['error'])){
            echo "<p>".$_SESSION['error']."</p>";
        }
    ?>
    <form action="loginValidator2.php" method="get">
        <div>
            <label for="nombre">Usuario: </label>
            <input type="text" id="nombre" name="nombre" value=""/>
        </div>
        <div>
            <label for="pass">Contraseña: </label>
            <input type="password" id="pass" name="pass"/>
        </div>
        <input type="submit"/>
    </form>
</body>
</html>