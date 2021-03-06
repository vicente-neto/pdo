<?php

namespace Vicente\Pdo\Controller;

use Vicente\Pdo\Infra\Persistence\ConnectionCreator;
use Vicente\Pdo\Infra\Repository\PdoStudentRepository;

class StudentList extends Controller
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