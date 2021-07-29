<?php
$id = $_POST["sid"];
$dbh = new PDO("mysql:host=localhost:3306;dbname=todolist","root","");
$sql = "UPDATE tasks SET done = :done WHERE id = $id";
$addStudentsQuery = $dbh->prepare($sql);
$addStudentsQuery->bindParam(":done",$_POST["done"],PDO::PARAM_STR);
$addStudentsQuery->execute();
?>