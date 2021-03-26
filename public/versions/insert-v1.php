<?php
//Insert com exec
use Vicente\Pdo\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . "\..\..\database.sqlite";
$connection = new PDO("sqlite:".$databasePath);

$student = new Student(
    null,
    "Ana");

$statement = "INSERT INTO students (name) VALUES ('{$student->getName()}');";
var_dump($connection->exec($statement));
