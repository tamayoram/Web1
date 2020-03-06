function validate(){

   let email=document.getElementById("email").value;
   let password=document.getElementById("password").value;
   
    if(email!="" && password!="")
    {
        return true;

    }
    else
    {
        alert("Todos los campos deben estar completos");
        return false;

    }


   // el return en false es para impedir que envíe el formulario y que no se borren los datos si hay algún error
   //return true;
}