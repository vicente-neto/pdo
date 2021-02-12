<?php

namespace Vicente\Pdo\Infra\Persistence;

use PDO;

class ConnectionCreator
{
    public static function createConnection(): PDO
    {   echo __DIR__;
        $databasePath = __DIR__."/../../../database.sqlite";
        $connection = new PDO("sqlite:".$databasePath);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $connection;
    }
}
