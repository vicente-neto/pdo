<?php


namespace Vicente\Pdo\Controller;

use Vicente\Pdo\Infra\Persistence\ConnectionCreator;
use Vicente\Pdo\Infra\Repository\PdoStudentRepository;

class UpdateStudent extends Controller
{
    /**
     * @var PdoStudentRepository
     */
    private PdoStudentRepository $studentRepository;

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
        $student = $this->studentRepository->find($id);
        $this->html(
            'students/form.php',
            [
                "student" => $student,
                "title" =>  'Estudante: ' . $student->getName()
            ]
        );
    }
}