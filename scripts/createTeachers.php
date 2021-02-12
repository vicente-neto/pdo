<?php
    $databasePath = __DIR__ . "\..\..\database.sqlite";
    $pdo = new PDO("sqlite:".$databasePath);

    //criar a tabela Teachers
    $command = '
        CREATE TABLE IF NOT EXISTS teachers (
            id INTEGER PRIMARY KEY,
            name TEXT
        );
    ';
    $pdo->exec($command);






