
function DeleteRecord(idDocument){

   if(confirm('¿Desea eliminar el registro?')){

       document.location='delete.php?document='+idDocument;
   }
}

function validate() {

   let idDocument = document.getElementById("idDocument").value;

   
   // let date = document.getElementById("date").value;
   /* let cumpleanos = document.getElementById("cumpleanos").value;
   let email = document.getElementById("email").value;
   let telefono = document.getElementById("telefono").value;
   let tema = document.getElementById("tema").value; */


  /*  let maximo = 10;
   let tamanoNombre = document.getElementById("nombre").value.length;
   let tamanoApellido=document.getElementById("apellido").value.length; */
   

   if (idDocument === "") {

     alert("Debe ingresar el número de su documento");
     return false;
      
   } 

   if (isNaN(idDocument)) {

      alert("El documento debe ser un número");
      return false;

   }

  /*  if (tamanoNombre > maximo) {

      alert("El nombre no debe tener más de 10 dígitos");
      document.getElementById("nombre").focus();
      return false;
   } */

   //  if (date == "") {

   //    alert("Debe ingresar la fecha");
   //    document.getElementById("date").focus();
   //    return false;

   // }

   /*

   if (tamanoApellido > maximo) {

      alert("El apellido no debe tener más de 10 dígitos");
      document.getElementById("apellido").focus();
      return false;
   }

   if (cumpleanos == "") {

      alert("Debe ingresar la fecha de cumpleaños");
      document.getElementById("cumpleanos").focus();
      return false;

   }

   if (email == "") {

      alert("Debe ingresar el correo electrónico (incluya un signo de @)");
      document.getElementById("email").focus();
      return false;

   }

   if (telefono == "") {

      alert("Debe ingresar el telefono");
      document.getElementById("telefono").focus();
      return false;

   }

  

   
   if (tema == "Elija una opción") {

      alert("Debe seleccionar un tema");
      document.getElementById("tema").focus();
      return false;

   }
 */








}