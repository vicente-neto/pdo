<?php

namespace Vicente\Pdo\Controller\Steps;

use Vicente\Pdo\Controller\IController;
use Vicente\Pdo\Infra\Persistence\ConnectionCreator;
use Vicente\Pdo\Infra\Repository\PdoStudentRepository;
use Vicente\Pdo\Model\Student;

class PersistenceStudent1 implements IController
{
    private $studentRepository;

    public function __construct()
    {
        $connection = ConnectionCreator::createConnection();
        $this->studentRepository = new PdoStudentRepository($connection);
    }

    public function index():void
    {
        $name = $_POST['name'];
        $student = new Student(null,$name);
        $this->studentRepository->save($student);
    }

}