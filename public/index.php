<?php

require __DIR__ . '/../vendor/autoload.php';

$rota = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../src/Config/routers.php';

if (!array_key_exists($rota, $rotas)) {
    echo "Erro 404";
    exit();
}

$Controller = $rotas[$rota];
$controller = new $Controller();
$controller->index();