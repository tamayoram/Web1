<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="estilos.css">

    <title>Calculadora</title>
</head>

<body>

    <form class="caja" action="calculadora.php" method="get">

        <h1>Calculadora PHP</h1>
        <input type="text" name="numero1" value="" placeholder="Ingrese un número">
        <input type="text" name="numero2" value="" placeholder="Ingrese un número">

        <input type="submit" name="" value="Respuesta">

        <!-- output es para controlar donde queda el resultado-->
        
        <output type="number" name="">

        
    </form>

</body>

</html>


<?php

// isset. Permite validar si los valores son no nulos. Con is_numeric se valida que lo que se ingresa son números.

// con get se capturan los datos que están en los inputs a través de sus names. 

if (isset($_GET["numero1"]) && isset($_GET["numero2"]) && is_numeric($_GET["numero1"]) && is_numeric($_GET["numero2"])); {

    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];

    echo $numero1 + $numero2;
}



?>