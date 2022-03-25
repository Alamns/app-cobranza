<?php
    $user = "uftffoiaijimn9wf";
    $pass = "qnAdXFUQhVxvXmXRCyJy";
    $host = "biuymdmgjfmio6af00a0-mysql.services.clever-cloud.com";
    $datab = "biuymdmgjfmio6af00a0";

    $conex = mysqli_connect($host, $user, $pass);
    
    $db = mysqli_select_db($conex,$datab);
?>
