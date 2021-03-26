<?php

namespace Vicente\Pdo\Controller\Steps;

use Vicente\Pdo\Infra\Persistence\ConnectionCreator;
use Vicente\Pdo\Infra\Repository\PdoStudentRepository;

class StudentList1
{
    private $studentRepository;

    public function process():void
    {
        $connection = ConnectionCreator::createConnection();
        $this->studentRepository = new PdoStudentRepository($connection);
        $students = $this->studentRepository->allStudents();
        var_dump($students);
    }
}