<?php
use Vicente\Pdo\Infra\Persistence\ConnectionCreator;
require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();

