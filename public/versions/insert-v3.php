<?php
//Ataque SQL Injection
use Vicente\Pdo\Model\Student;
use Vicente\Pdo\Infra\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();

$student = new Student(
    null,
    "Carol'); DROP TABLE professores; --");

$statement = "INSERT INTO students (name) VALUES ('{$student->getName()}');";
var_dump($connection->exec($statement));
