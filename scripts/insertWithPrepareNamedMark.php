<?php

use Vicente\Pdo\Model\Student;
use Vicente\Pdo\Infra\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';


$connection = ConnectionCreator::createConnection();

$student = new Student(
    null,
    "Carol'); DROP TABLE professores; --");

$statement = "INSERT INTO students (name) VALUES (:name);";
$statement = $connection->prepare($statement);
$statement->bindValue(":name",$student->getName());
$statement->execute();
