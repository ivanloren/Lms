<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1>Peluquería Iván</h1>
    <?php
        session_start();
        // Compruebo si tenemos session iniciada
        if(isset($_SESSION['logged']) and isset($_SESSION['idUsuario'])){
            // Muestro el enlace al formulario para iniciar sesion
            echo "<ul>";
            echo "<li><a href='usuario.php'>Acceso a las citas</a></li>";
            echo "<li><a href='cerrarSesion.php'>Cerrar sesion</a></li>";
            
        }else{
            // Muestro el acceso a la sección de usuario
            
            
            echo "<li><a href='login.php'>Iniciar sesión</a></li>";
            echo "<li><a href='login2.php'>Iniciar sesión como administrador</a></li>";
            
        }
        echo "<li><a href='form.php'>Nuevo usuario</a></li>";
        echo "</ul>";
        
    ?>
</body>
</html>