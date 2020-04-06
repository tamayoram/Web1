<?php

// operaciones para insertar registros
function addUsers($connection, $user)
{
    $sql = "INSERT INTO user (name, lastname, age, nationality) VALUES ('{$user['name']}', '{$user['lastname']}',{$user['age']},'{$user['nationality']}')";
    $result = $connection->query($sql);
}

//operaciones para consultar registros
function listUsers($connection)
{

    $sql = "SELECT * from user";
    $result = $connection->query($sql);
    return $result;
}

//operaciones para eliminar registros

function deleteUsers($connection, $id)
{

    $sql = "DELETE FROM user WHERE Id={$id}";
    $result = $connection->query($sql);
}

//operaciones para actualizar registros

function updateUsers($connection, $user, $id)
{

    $sql = "UPDATE user SET name = '{$user['name']}', lastname= '{$user['lastname']}',age={$user['age']},nationality='{$user['nationality']}' WHERE Id = {$id}";
    $result=$connection->query($sql);
}

try {
    require_once "db_connection.php"; // esto es para llamar la conexión y debe estar en la misma carpeta

    // $user = array("name" => "Pablo", "lastname" => "Alvarez", "age" => 34, "nationality" => "Argentina");

    // Ejecución de la función addUsers
    //addUsers($connection, $user);


    //Ejecución de la función listUsers

    /* $result = listUsers($connection);
    if ($result->num_rows > 0) {

        // con fetch assoc el lenguaje itera el arreglo hasta su final y va mostrando cada row
        while ($row = $result->fetch_assoc()) {

            print_r($row);
        }
    } */

    /* //Ejecución de la función deleteUsers
    $id=2;
    deleteUsers($connection,$id); */

    //Ejecución de la función updateUsers


    $user = array("name" => "Carlos", "lastname" => "Gallego", "age" => 24, "nationality" => "Bolivia");
    $id = 1;
    updateUsers($connection, $user, $id);
} catch (Exception $ex) {

    echo $ex;
}
