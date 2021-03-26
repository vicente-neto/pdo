<?php
//Usando uma classe para criar conexão com uma base de dados
use Vicente\Pdo\Infra\Persistence\ConnectionCreator;
require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();

