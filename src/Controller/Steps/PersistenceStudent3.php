<?php

namespace Vicente\Pdo\Controller\Steps;

use Vicente\Pdo\Controller\IController;
use Vicente\Pdo\Infra\Persistence\ConnectionCreator;
use Vicente\Pdo\Infra\Repository\PdoStudentRepository;
use Vicente\Pdo\Model\Student;

class PersistenceStudent3 implements IController
{
    private $studentRepository;

    public function __construct()
    {
        $connection = ConnectionCreator::createConnection();
        $this->studentRepository = new PdoStudentRepository($connection);
    }

    public function index():void
    {
        $name =  filter_input(
            INPUT_POST,
            'name',
            FILTER_SANITIZE_STRING);
        $student = new Student(null,$name);
        $this->studentRepository->save($student);
    }

}