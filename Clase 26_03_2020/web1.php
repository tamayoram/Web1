<?php

// crear clases
// Los nombres de las clases empiezan con letra mayúscula, en formato camelcase y por lo general son en singular.

/* class Persona{

// atributos

public $nombre="Juan Camilo";
public $apellido="Tamayo";

// métodos

public function hablar($mensaje){

    echo $mensaje;
}

}

$persona=new Persona();

// los atributos del objeto es con ->
$persona->hablar("Hola estudiantes"); */

class Persona
{

    // atributos

    public $nombre = array();
    public $apellido = array();

    // métodos

    // en los métodos la primera palabra en minuscula y las otras en mayúscula

    public function addPerson($name, $lastname)
    {

        //modificar atributos
        //$this permite modificar atributos. This sirve para señalar al lenguaje que es lo que se va a modificar.

        $this->nombre[] = $name;
        $this->apellido[] = $lastname;
    }

    public function showPeople()
    {

        //count es para definir el número de elementos que tiene el vector nombre
        for ($i = 0; $i < count($this->nombre); $i++) {

            /*  print "nombre: ".$this->nombre[$i]. " apellido: ".$this->apellido[$i]."<br>"; */


            $this->format($this->nombre[$i], $this->apellido[$i]);
        }
    }

    public function format($name, $lastname)
    {

        print " nombre: " . $name . " apellido: " . $lastname."<br>";
    }
}

$persona = new Persona();
$persona2 = new Persona();

$persona->addPerson("Juan", "Tamayo");
$persona->addPerson("Iveth", "Zapata");

$persona2->addPerson("Camilo", "Tamayo");
$persona2->addPerson("Julian", "Zapata");

$persona->showPeople();
$persona2->showPeople();


