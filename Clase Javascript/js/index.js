

function clickme() {

    alert("Soy una función");


}

function validar() 

{

    let usuario = document.getElementById("usuario").value;
    let password = document.getElementById("password").Value;
    let cedula = document.getElementById("cedula").value;

    

    if (usuario === "") {

        alert("El nombre de usuario es requerido");
        return false;
    }

    if (password=="") {

        alert("El campo password es requerido");
        return false;
    }

    if (cedula === "") {

        alert("El campo cedula es requerido");
        return false;
    }

    if(isNaN(cedula)){

        alert("La cédula debe ser un número");
        return false;


    }

}

