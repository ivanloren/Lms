<?php
  $conn = new mysqli("localhost", "root", "", "peluqueria_ivan");
  $id = $_GET['id'];
  $sql = "delete from profesionales where id=$id";
  $conn->query($sql);
  $conn->close();
  header("location: index.php");
?>