<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taller momento 1</title>

  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#"><i class="fas fa-pencil-ruler">   RAUL MOREIRA</a></i>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Sobre mi <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Portafolio
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Servicios
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Tienda<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Contacto<span class="sr-only">(current)</span></a>
        </li>

      </ul>
    </div>
  </nav>


  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="imagen/imagen1.jpg" alt="First slide" style="width:800px;height:600px;">
      </div>
      <div class="carousel-caption d-none d-md-block">
        <h5>Todo en uno. Diseño, Web e impresión.</h5>
        <p>Diseño gráfico,maquetación,logotipos,ilustración, producción e impresión,</p>
        <p>diseño de páginas web,programación, alta y posicionamiento en buscadores.</p>
        <p>Todo al mejor precio y en Madrid.</p>
        <a href="formulario.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Contacta ahora</a>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="imagen/imagen2.jpg" alt="Second slide" style="width:800px;height:600px;">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="imagen/imagen3.jpg" alt="Third slide" style="width:800px;height:600px;">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container my-3">
    <div class="row">
      <div class="col">
        <div class="card" style="width:300px">
          <img class="mx-auto" src="iconos/icono1.jpg" alt="Card image" style="width:180px">
          <div class="card-body">

            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
            <button type="button" class="btn btn-outline-info">Conocer más</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width:300px">
          <img class="mx-auto" src="iconos/icono2.jpg" alt="Card image" style="width:180px">
          <div class="card-body">

            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
            <button type="button" class="btn btn-outline-info">Conocer más</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width:300px">
          <img class="mx-auto" src="iconos/icono3.jpg" alt="Card image" style="width:100px">
          <div class="card-body">

            <p class="card-text">>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <button type="button" class="btn btn-outline-info">Conocer más</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card" style="width:300px">
          <img class="mx-auto" src="iconos/icono1.jpg" alt="Card image" style="width:180px">
          <div class="card-body">

            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
            <button type="button" class="btn btn-outline-info">Conocer más</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width:300px">
          <img class="mx-auto" src="iconos/icono2.jpg" alt="Card image" style="width:180px">
          <div class="card-body">

            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
            <button type="button" class="btn btn-outline-info">Conocer más</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width:300px">
          <img class="mx-auto" src="iconos/icono3.jpg" alt="Card image" style="width:100px">
          <div class="card-body">

            <p class="card-text">>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <button type="button" class="btn btn-outline-info">Conocer más</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card" style="width:300px">
          <img class="mx-auto" src="iconos/icono1.jpg" alt="Card image" style="width:180px">
          <div class="card-body">

            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
            <button type="button" class="btn btn-outline-info">Conocer más</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width:300px">
          <img class="mx-auto" src="iconos/icono2.jpg" alt="Card image" style="width:180px">
          <div class="card-body">

            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
            <button type="button" class="btn btn-outline-info">Conocer más</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width:300px">
          <img class="mx-auto" src="iconos/icono3.jpg" alt="Card image" style="width:100px">
          <div class="card-body">

            <p class="card-text">>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <button type="button" class="btn btn-outline-info">Conocer más</button>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="container my-5">
    <div class="row">
      <div class="col-9">
        <h3 style="color:#FF0000" ;>Ilustraciones profesionales</h3>
        <br>
        <h3>Sube el nivel y seduce a tus clientes</h3>
        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book/p>
      </div>
      <div class="col-3">
        <img src="imagen/imagen4.jpg" class="img-rounded" alt="Joker" style="width:200px">
      </div>
    </div>
  </div>

  <div class="container my-5">
    <div class="row">
      <div class="col-5">
        <img src="imagen/imagen5.jpg" class="img-rounded h-100 w-100" alt="Joker" style="width:300px">
      </div>
      <div class="col-7">

        <h3 class="text-success">Cuanto cuesta una página web?</h3>
        <br>
        <h3 class="text-info">Consulta nuestros servicios y precios</h3>
        <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
      </div>
    </div>
  </div>



  <div class="row">
    <h3 class="mx-auto">Acceso rápido a nuestros servicios</h3>
  </div>

  <div class="container my-5">
    <div class="row">
      <div class="col">
        <h4>Diseño y desarrollo web</h4>
        <h5>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</h5>
      </div>
      <div class="col">
      <h4 class="mx-auto text-dark">Diseño Gráfico</h4>
        <h5>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</h5>
      </div>
      <div class="col">
      <h4>Ilustración</h4>
        <h5>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</h5>
      </div>
      <div class="col">
      <h4>Otros servicios</h4>
        <h5>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</h5>
      </div>
    </div>
  </div>






  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $('body').bootstrapMaterialDesign();
    });
  </script>
</body>

</html>