<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Área personal</title>
</head>
<body>
    <h1>Área personal</h1>
    <?php
        session_start();
        $USU = $_SESSION['idUsuario'];
        // Compruebo si tenemos session iniciada
        if(isset($_SESSION['logged']) and isset($_SESSION['idUsuario'])){
            
            
            $conn = new mysqli("localhost", "root", "", "peluqueria_ivan");
            echo "<ul>";
            echo "<li><a href='nuevacita.php'>Registrar cita</a></li>";
            echo "</ul>";
            echo "<h1>Tus citas</h1>";
            $conn = new mysqli("localhost", "root", "", "peluqueria_ivan");
            $sql = "select * from citas where nombre_usuario like 'ivan'";
            echo "<table border='1' width='50%'>";
            echo "<tr>";
            echo "<th>Nombre profesional</th>";
            echo "<th>Nombre usuario</th>";
            echo "<th>Hora</th>";
            echo "<th>Día</th>";

            if ($result = $conn->query($sql)) {
                while ($row = $result->fetch_assoc()) {
                    $field1name = $row["Nombre_profesional"];
                    $field2name = $row["nombre_usuario"];
                    $field3name = $row["hora"];
                    $field4name = $row["fecha"]; 
                    echo "<tr>";
                    echo "<td>$field1name</td>";
                    echo "<td>$field2name</td>";
                    echo "<td>$field3name</td>";
                    echo "<td>$field4name</td>";

                }

                $result->free();
            } 
        }
        else{
            // Muestro el acceso a la sección de usuario
            header("location: login.php");
        }
    ?>
</body>
</html>