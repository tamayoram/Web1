<?php

if (isset($_GET['Id'])){
    include_once('db_connection.php');
    
    $Id=$_GET['Id'];
    $sql="SELECT * FROM tasks WHERE Id={$Id}";
    $result=$conn->query($sql);
    
    if ($result->num_rows > 0) {

    ($row = $result->fetch_assoc());
          
    }

?>


<?php include_once('layouts/header.php');?> <!--instrucción para llamar la parte de arriba de la página-->

<form class="my-5" action="update_task.php?Id=<?php echo $row['Id']?>" method="post"> <!--ojo con action y method por que es la manera como se envían los datos a la base de datos -->
    <div class="form-group row">
        <label for="task" class="col-sm-2 col-form-label">Task</label>
        <div class="col-sm-10">
            <input type="text" value= "<?php echo $row['task']?>" name="task" class="form-control" id="task"> <!--muy importante ingresar el name, porque ahí se almacena la información que va a enviar el form-->
        </div>
    </div>
    <div class="form-group row">
        <label for="date" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10">
            <input type="text" value= "<?php echo $row['date']?>" name="date" class="form-control" id="date"> <!--muy importante ingresar el name, porque ahí se almacena la información que va a enviar el form-->
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>


<?php include_once('layouts/footer.php');?> <!--instrucción para llamar la parte de abajo de la página-->