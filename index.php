<?php
switch ($_SERVER['PATH_INFO']) {
    case '/listar-estudantes':
        require 'listar-estudantes.php';
        break;
    case '/adicionar-estudante-form':
        require 'adicionar-estudante-form.php';
        break;
    default:
        echo "Página não encontrada!";
        break;

}
