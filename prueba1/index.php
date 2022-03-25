<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba1</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<?php
    include "./conexion.php";
?>
<body>
    <div class="">
        <form id="form">
            <label for="nombre">nombre</label>
            <input type="text" name="nombre" id="nombre">
        
            <label for="palabra">palabra</label>
            <input type="text" name="palabra" id="palabra">

            <button type="submit">Guardar</button>
        </form>

    </div>
</body>
<script>
    $( "#form" ).on( "submit", function( event ) {
    event.preventDefault();
    datos =  $( this ).serialize();
    $.ajax({
        url: "./guardar.php",
        type: "POST",
        data: datos,
        success: function(result){
            if(result != ""){
                alert("correcto" + result);
            }else{
                alert("incorrecto" + result);
            }
        }
    })
});
</script>
</html>