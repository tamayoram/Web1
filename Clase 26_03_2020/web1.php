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

    public function addPerson($name, $lastname)
    {

        //modificar atributos
        $this->nombre[] = $name;
        $this->apellido[] = $lastname;
    }

    public function hablar($mensaje)
    {

        echo $mensaje;
    }

    public function mostraPersonas()
    {

        for ($i = 0; $i < count($this->nombre); $i++) {

            /*  print "nombre: ".$this->nombre[$i]. " apellido: ".$this->apellido[$i]."<br>"; */

            // this se utiliza para llamar el método format dentro del método mostraPersonas

            // dice algo del método format del vector nombre del vector apellido

            $this->format($this->nombre[$i], $this->apellido[$i]);
        }
    }

    public function format($name, $lastname)
    {

        print "nombre: " . $name . " apellido: " . $lastname;
    }
}

$persona = new Persona();
$persona2 = new Persona();

$persona->addPerson("Juan", "Tamayo");
$persona->addPerson("Iveth", "Zapata");

$persona2->addPerson("Camilo", "Tamayo");
$persona2->addPerson("Julian", "Zapata");

$persona->mostraPersonas();
$persona2->mostraPersonas();


