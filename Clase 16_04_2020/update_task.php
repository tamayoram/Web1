<?php
if (isset($_GET['Id'])) {
    include_once('db_connection.php');

    $Id = $_GET['Id'];
    $taskName = $_POST['task'];
    $taskDate = $_POST['date'];
    $sql = "UPDATE tasks SET task='{$taskName}',date='{$taskDate}' where Id={$Id}";
    $result = $conn->query($sql);
    header("location: index.php");
}
