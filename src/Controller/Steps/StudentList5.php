<?php

namespace Vicente\Pdo\Controller\Steps;

use Vicente\Pdo\Controller\IController;
use Vicente\Pdo\Infra\Persistence\ConnectionCreator;
use Vicente\Pdo\Infra\Repository\PdoStudentRepository;

class StudentList5 implements IController
{
    private $studentRepository;

    public function __construct()
    {
        $connection = ConnectionCreator::createConnection();
        $this->studentRepository = new PdoStudentRepository($connection);
    }

    public function index():void
    {
        $title = "Estudantes";
        $students = $this->studentRepository->allStudents();
        require __DIR__ . '/../../view/students/list.php';
    }

}