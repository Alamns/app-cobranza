<?php
    $user = "alan5";
    $pass = "1234";
    $host = "localhost";
    $datab = "prueba1";

    $conex = mysqli_connect($host, $user, $pass);
    
    $db = mysqli_select_db($conex,$datab);
?>