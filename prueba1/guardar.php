<?php
    include "./conexion.php";

    $nombre = $_POST['nombre'];
    $palabra = $_POST['palabra'];

    $mysql = "INSERT INTO datos (nombre, palabras) values('$nombre', '$palabra')";
    mysqli_query($conex, $mysql);
    echo $nombre,' ',$palabra;
?>