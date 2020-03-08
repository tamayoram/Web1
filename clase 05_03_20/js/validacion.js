function validar(){

    let nombre=document.getElementById("nombre").value;
    let apellido=document.getElementById("apellido").value;
    let cumpleanos=document.getElementById("cumpleanos").value;
    let email=document.getElementById("email").value;
    let telefono=document.getElementById("telefono").value;
    let tema=document.getElementById("tema").value;

    
    let maximo=10;
    let tamano=document.getElementById("telefono").value.length;

      
    
     if(nombre=="")
     {
         
        alert("Debe ingresar su nombre");
        document.getElementById("nombre").focus();
        return false;
 
     }

     if(apellido=="")
     {
         
        alert("Debe ingresar su apellido");
        document.getElementById("apellido").focus();
        return false;
 
     }

     if(cumpleanos=="")
     {
         
        alert("Debe ingresar la fecha de cumpleaños");
        document.getElementById("cumpleanos").focus();
        return false;
 
     }

     if(email=="")
     {
         
        alert("Debe ingresar el correo electrónico (incluya un signo de @)");
        document.getElementById("email").focus();
        return false;
 
     }

     if(telefono=="")
     {
         
        alert("Debe ingresar el telefono");
        document.getElementById("telefono").focus();
        return false;
 
     }

     if(isNaN(telefono))
     {
         
        alert("El teléfono debe ser un número. Por favor no utilice caracteres especiales");
        document.getElementById("telefono").focus();
        return false;
 
     }

     if(tamano<maximo)
     {
         
        alert("El telefono debe tener 10 dígitos");
        document.getElementById("telefono").focus();
        return false;
 
     }


     if(tema=="Elija una opción")
     {
         
        alert("Debe seleccionar un tema");
        document.getElementById("tema").focus();
        return false;
 
     }




     

 
 
    
 }