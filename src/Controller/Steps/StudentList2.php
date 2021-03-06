<?php

namespace Vicente\Pdo\Controller\Steps;

use Vicente\Pdo\Infra\Persistence\ConnectionCreator;
use Vicente\Pdo\Infra\Repository\PdoStudentRepository;

class StudentList2
{
    private $studentRepository;

    public function __construct()
    {
        $connection = ConnectionCreator::createConnectionProducao();
        $this->studentRepository = new PdoStudentRepository($connection);
    }

    public function process():void
    {
        $students = $this->studentRepository->allStudents();
        var_dump($students);
    }

}