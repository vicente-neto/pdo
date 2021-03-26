<?php


namespace Vicente\Pdo\Controller;


abstract class Controller
{

    public abstract function index(): void;
    public function html(string $rota, array $dados): void
    {
        extract($dados);
        require __DIR__.'/../../View/' . $rota;

    }
}