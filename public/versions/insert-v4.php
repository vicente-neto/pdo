<?php
//insert com prepare usando ?
use Vicente\Pdo\Model\Student;
use Vicente\Pdo\Infra\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';


$connection = ConnectionCreator::createConnection();

$student = new Student(
    null,
    "Dani");

$statement = "INSERT INTO students (name) VALUES (?);";
$statement = $connection->prepare($statement);
$statement->bindValue(1,$student->getName());
$statement->execute();
