<?php
//apagando registro de estudante
use Vicente\Pdo\Model\Student;
use Vicente\Pdo\Infra\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();

$query = "DELETE FROM students WHERE id = ?;";
$statement = $connection->prepare($query);
$statement->bindValue(1,1,PDO::PARAM_INT);
$statement->execute();
