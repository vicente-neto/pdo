<?php

use Vicente\Pdo\Model\Student;
use Vicente\Pdo\Infra\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';


$connection = ConnectionCreator::createConnection();

$statement = "DELETE FROM students WHERE id = ?;";
$statement = $connection->prepare($statement);
$statement->bindValue(1,1,PDO::PARAM_INT);
$statement->execute();
