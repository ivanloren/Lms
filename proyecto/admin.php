<?php
    session_start();
    echo "<h1>Citas pendientes ordenadas por profesional</h1>";
    $conn = new mysqli("localhost", "root", "", "peluqueria_ivan");
    $sql = "select * from citas order by nombre_profesional";
    $sql2 = "select * from profesionales";
    $sql3 = "select * from usuarios";
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
        
        echo "</table>";
        $result->free();

    } 
    echo "<h1>Profesionales</h1>";
    echo "<table border='1' width='50%'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nombre</th>";
    echo "<th>Contraseña</th>";
    if ($result2 = $conn->query($sql2)) {
        while ($row = $result2->fetch_assoc()) {
            $field1name = $row["id"];
            $field2name = $row["nombre"];
            $field3name = $row["contraseña"];
            echo "<tr>";
            echo "<td>$field1name</td>";
            echo "<td>$field2name</td>";
            echo "<td>$field3name</td>";

        }
        echo "</table>";
        $result2->free();
    }
    echo "<h1>Usuarios</h1>";
    echo "<table border='1' width='50%'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nombre</th>";
    echo "<th>Contraseña</th>";
    echo "<th>Email</th>";
    if ($result3 = $conn->query($sql3)) {
        while ($row = $result3->fetch_assoc()) {
            $field1name = $row["id"];
            $field2name = $row["nombre"];
            $field3name = $row["contraseña"];
            $field4name = $row["email"];
            echo "<tr>";
            echo "<td>$field1name</td>";
            echo "<td>$field2name</td>";
            echo "<td>$field3name</td>";
            echo "<td>$field4name</td>";

        }
        echo "</table>";
        $result3->free();
    }
?>