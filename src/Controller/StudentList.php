<?php

namespace Vicente\Pdo\Controller;

use Vicente\Pdo\Infra\Persistence\ConnectionCreator;
use Vicente\Pdo\Infra\Repository\PdoStudentRepository;

class StudentList
{
    private $studentRepository;

    public function __construct()
    {
        $connection = ConnectionCreator::createConnectionProducao();
        $this->studentRepository = new PdoStudentRepository($connection);
    }

    public function process()
    {
        $students = $this->studentRepository->allStudents();
        var_dump($students);
    }

}