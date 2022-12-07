<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar cita</title>
</head>
<body>
    <?php
        session_start();
    ?>
    <h1>Nueva cita</h1>
    <form action="validacion_cita.php" method="get">
        Fecha: <input type="date" name="fec"><br>
        Hora: <input type="time" name="hora"><br>
        Nombre usuario: <input type="text" name="usu"><br>
        Nombre profesional: <select name="pro">
        <option value="pepe">Pepe</option>
        <option value="paco">Paco</option>
        <option value="sandra">Sandra</option>
        </select><br>

        <input type="submit" name="Enviar">
    </form>
    <?php
            if (isset($_SESSION['error'])){    
                echo "<p>".$_SESSION['error']."</p>";
            }
    ?>
</body>
</html>