<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style1.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "test";

    $conexion = new mysqli($server, $user, $pass, $db);

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset= "utf-8">
        <title>FORMULARIO</title>
    </head>
    <body>
        <form action="">

        <H1>NUESTROS CONTACTOS</H1>

        <H2>
            <input type="text" placeholder="COD. DE CONTACTO">
            <input type="text" placeholder="NOM. DE CONTACTO">
            <input type="text" placeholder="APE. DE CONTACTO">
            <input type="text" placeholder="DIRECCIÓN">
            <input type="text" placeholder="TELÉFONO">
            <input type="text" placeholder="E-MAIL">
            <input type="text" placeholder="FECHA DE NACIMIENTO">
            <input type="text" placeholder="ESTADO CIVIL">
            <input type="submit" class="btn" value="ENVIAR">        
        </H2>

        </form>

    </body>

