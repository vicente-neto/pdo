<?php
//Criando a tabela students
$databasePath = __DIR__ . "\..\..\database.sqlite";
$pdo = new PDO("sqlite:".$databasePath);

$statement = '
    CREATE TABLE IF NOT EXISTS students (
        id INTEGER PRIMARY KEY,
        name TEXT
    );
';
$pdo->exec($statement);






