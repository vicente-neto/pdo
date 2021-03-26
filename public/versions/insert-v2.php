<?php
//Entrada com erro não intencional do usuário
use Vicente\Pdo\Model\Student;
use Vicente\Pdo\Infra\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';


$connection = ConnectionCreator::createConnection();

$student = new Student(
    null,
    "Carol'");

$statement = "INSERT INTO students (name) VALUES ('{$student->getName()}');";
var_dump($connection->exec($statement));
