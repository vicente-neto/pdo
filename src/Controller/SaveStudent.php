<?php

namespace Vicente\Pdo\Controller;

use Vicente\Pdo\Controller\IController;
use Vicente\Pdo\Infra\Persistence\ConnectionCreator;
use Vicente\Pdo\Infra\Repository\PdoStudentRepository;
use Vicente\Pdo\Model\Student;

class SaveStudent extends Controller
{
    private $studentRepository;

    public function __construct()
    {
        $connection = ConnectionCreator::createConnection();
        $this->studentRepository = new PdoStudentRepository($connection);
    }

    public function index():void
    {
        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT);

        $name = filter_input(
            INPUT_POST,
            'name',
            FILTER_SANITIZE_STRING);
        $student = new Student($id,$name);

        $this->studentRepository->save($student);
        header('Location: /student-list', false, 303);
    }
}