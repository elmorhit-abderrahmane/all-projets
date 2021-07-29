<?php
$dbh = new PDO("mysql:host=localhost:3306;dbname=todolist","root","");
$sql = " INSERT INTO tasks(task,done) VALUES (:task,:done)";
$addStudentsQuery = $dbh->prepare($sql);
$addStudentsQuery->bindParam(":task",$_POST["task"],PDO::PARAM_STR);
$addStudentsQuery->bindParam(":done",$_POST["done"],PDO::PARAM_STR);
$addStudentsQuery->execute();
?>
