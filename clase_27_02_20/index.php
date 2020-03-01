<?php
    echo "Hola mundo";

    // $ es para declarar variables
    // estructura camel case nombreVariable. Primera en minúscula y segunda en mayúscula.
    $numero=5.3;
    echo "<br>";
    echo $numero;
    echo "<br>";
    echo "<h1>Hola mundo </h1>";
    // var_dump imprime la variable y me dice el tipo de variable
    var_dump($numero);

    $saludo="Hola";
    $saludo2="Cómo estás?";
    // el punto es para concatenar string
    echo "<br>";
    echo $saludo." ".$saludo2;
  
    $numero1=7.6;
    $numero2=4.8;
    echo "<br>";
    echo $numero1*$numero2;

    // operadores lógicos en php && (and) || (or)
    // != diferente, <, >, >=, <=, == para comparación

    // estructura if

    $valor=2;
    if($valor>3)
    {
        
        echo "<br>";
        echo "<br>";
        echo "<h2>Es mayor</h2>";
    }
    else
    {
        echo "<br>";
        echo "<h3>No es mayor</h3>";
    }

    // estructura switch
    // el selector y el case tienen que ser del mismo tipo
    // si no se incluye los break se ejecutan todos los casos

    $selector="a";
    
    switch($selector)
    {
        case "a":
            echo "<h2>caso a</h2>";
        break;

        case "b":
            echo "caso b";
        break;

        default:
            echo "Revisar el dato ingresado";
        break;

    }

    //estructura while
    $contador=0;
    while($contador<5)
    {
        echo "<h1>Hola mundo</h1>";
        //$contador++;
        $contador=$contador+1;
    }

    // estructura for

    for($i=0;$i<5;$i++)
    {
        echo "<li>Valor:".$i."</li>";
    }
