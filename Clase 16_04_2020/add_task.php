
<?php include_once('layouts/header.php');?> <!--instrucción para llamar la parte de arriba de la página-->

<script src="js/validate.js"></script>

<form class="my-5" action="save_task.php" method="post" onsubmit="return validar();"> <!--ojo con action y method por que es la manera como se envían los datos a la base de datos -->
    <div class="form-group row">
        <label for="task" class="col-sm-2 col-form-label">Task</label>
        <div class="col-sm-10">
            <input type="text" name="task" class="form-control" id="task"> <!--muy importante ingresar el name, porque ahí se almacena la información que va a enviar el form-->
        </div>
    </div>
    <div class="form-group row">
        <label for="date" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
            <input type="text" name="date" class="form-control" id="date"> <!--muy importante ingresar el name, porque ahí se almacena la información que va a enviar el form-->
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-dark my-3">Enviar</button>
        </div>
    </div>
</form>


<?php include_once('layouts/footer.php');?> <!--instrucción para llamar la parte de abajo de la página-->