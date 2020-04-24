<?php
if (isset($_GET['Id'])){
include_once('db_connection.php');

$Id=$_GET['Id'];
$taskName=$_POST['taskName'];
$taskDate=$_POST['taskDate'];
$sql="UPDATE tasks SET task='{$taskName}',date='{$taskDate}' where Id={$Id}";
$result=$conn->query($sql);
header("location: index.php");


}

?>