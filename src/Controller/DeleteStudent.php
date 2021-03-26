<?php


namespace Vicente\Pdo\Controller;


use Vicente\Pdo\Infra\Persistence\ConnectionCreator;
use Vicente\Pdo\Infra\Repository\PdoStudentRepository;
use Vicente\Pdo\Model\Student;

class DeleteStudent extends Controller
{
    public function __construct()
    {
        $connection = ConnectionCreator::createConnection();
        $this->studentRepository = new PdoStudentRepository($connection);
    }

    public function index(): void
    {
        $id = filter_input(INPUT_GET,
            'id',
            FILTER_VALIDATE_INT);

        if (is_null($id) || $id === false) {
            header('Location: /student-list');
        }
        $student = new Student($id,"");
        $this->studentRepository->remove($student);
        header('Location: /student-list');
    }
}