<?php

namespace Vicente\Pdo\Controller;

use Vicente\Pdo\Controller\IController;
use Vicente\Pdo\Infra\Persistence\ConnectionCreator;
use Vicente\Pdo\Infra\Repository\PdoStudentRepository;

class FormStudent extends Controller
{

    public function index():void
    {

        $this->html(
            'students/form.php',
            [
                "title" =>  'Adicionar Estudante'
            ]
        );
    }
}