<?php
//Usando ConnectionCreator
require_once 'vendor/autoload.php';
$connection = ConnectionCreator::createConnection();

$statement = '
    CREATE TABLE IF NOT EXISTS students (
        id INTEGER PRIMARY KEY,
        name TEXT
    );
';
$connection->exec($statement);






