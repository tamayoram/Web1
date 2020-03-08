<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <title>Formulario de registro</title>
</head>

<body>
    <div class="container my-5">
        <form onsubmit="return validar();">
            <a href="Taller.php">
                <h6><i class="fas fa-home">Volver</i></h6>
            </a>
            <h2>Formulario de registro </h2>
            <div class="row">
                <div class="col">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" name="nombre">
                </div>
                <div class="col">
                    <label for="apellido">Apellido:</label>
                    <input type="text" class="form-control" id="apellido" placeholder="Ingres su apellido" name="apellido">
                </div>
            </div>

            <div class="row my-5">
                <div class="col">
                    <label for="cumpleanos">Fecha cumpleaños:</label>
                    <input type="date" class="form-control" id="cumpleanos" name="cumpleanos">
                </div>
                <div class="col">
                    <label for="genero">Género:</label><br>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio" checked>Femenino
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Masculino
                        </label>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico" name="email">
                </div>
                <div class="col">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" class="form-control" id="telefono" placeholder="Ingres su telefono" name="telefono">
                </div>
            </div>

            <div class="row my-5">
                <div class="col">
                    <div class="form-group">
                        <label for="tema">Tema:</label>
                        <select class="form-control" id="tema">
                            <option>Elija una opción</option>
                            <option>Tema 1</option>
                            <option>Tema 2</option>
                            <option>Tema 3</option>
                        </select>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>

        </form>

    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="js/validacion.js"></script>
</body>

</html>