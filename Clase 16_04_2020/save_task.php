<?php

// echo $_GET['task'];
// echo $_GET['date'];
// print_r($_GET);

// post es mejor para agregar datos a la base de datos, mientras get es mejor para obtener datos de la misma. Esto porque get muestra los datos en la URL.

if (isset($_POST['task'])) {

    $taskName = $_POST['task'];
    $taskDate = $_POST['date'];

    try {

        include_once "db_connection.php";
        $sql = "INSERT INTO tasks (task,date) VALUES ('{$taskName}', '{$taskDate}')";
        $result = $conn->query($sql);

        header("location:index.php");
    } catch (exception $Error) {
        echo "Connection failed";
    }
}   


/* if (isset($_POST['task']) && ($_POST['date'])) {

    $taskName = $_POST['task'];
    $taskDate = $_POST['date'];
    //print_r($_POST);

    try {

        include_once "db_connection.php";
        $sql = "INSERT INTO tasks (task,date) VALUES ('{$taskName}', '{$taskDate}')";
        $result = $conn->query($sql);
       
        header("location:index.php");
   
    } catch (exception $Error) {
        echo "Connection failed";
    }

    

    if (($_POST['task'] == "") || ($_POST['date'] == "")) {

        include_once('layouts/header.php');
        $alertTemplate = "<div class='alert alert-primary my-5' role='alert'>
        Data was received but empty.
        </div>";
        echo "$alertTemplate";
        include_once('layouts/footer.php');
    } else {

        include_once('layouts/header.php');
        $alertTemplate = "<div class='alert alert-primary my-5' role='alert'>
        Data was received.
        </div>";
        echo "$alertTemplate";
        include_once('layouts/footer.php');
    }
} else {

    include_once('layouts/header.php');
    $alertTemplate = "<div class='alert alert-primary my-5' role='alert'>
        Data was not received.
        </div>";
    echo "$alertTemplate";
    include_once('layouts/footer.php');
}
 */
