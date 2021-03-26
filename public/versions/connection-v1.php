<?php
//Estabelecendo conexão com uma base de dados com a classe PDO
$databasePath = __DIR__ . "\..\..\database.sqlite";
$pdo = new PDO("sqlite:".$databasePath);
