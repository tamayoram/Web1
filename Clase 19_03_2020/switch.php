<?php

// la variable de switch se llama selector, y su principal característica es que es del mismo tipo que lo que va en los cases
$curso="php";

switch ($curso) {
    case 'php':
        echo "Corresponde lunes y jueves";
        break;

    case 'phyton':
        echo "Corresponde martes y viernes";
        break;

    default:
        echo "Revisa el curso ingresado";
        break;
}
