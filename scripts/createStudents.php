<?php
    $databasePath = __DIR__ . "\..\..\database.sqlite";
    $pdo = new PDO("sqlite:".$databasePath);

    //criar a tabela Student
    $command = '
        CREATE TABLE IF NOT EXISTS students (
            id INTEGER PRIMARY KEY,
            name TEXT
        );
    ';
    $pdo->exec($command);






