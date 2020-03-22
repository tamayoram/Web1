<?php

// variable scope. Reglas para utilizar variables dentro de funciones.

function estudiante(){

    $edad=22;
    return $edad;
}

echo estudiante();

// determinar variables como globales. La definición de global me permite utilizar las variables en cualquier lugar del código.

$edad_invitado=25;
function invitado(){

    global $edad_invitado;
    echo $edad_invitado;
}

echo "<br>";
invitado();

?>