<?php


namespace Vicente\Pdo\Infra\Repository;

use Vicente\Pdo\Infra\Persistence\ConnectionCreator;
use Vicente\Pdo\Model\Student;
use \PDO;

class PdoStudentRepository implements StudentRepository
{
    private PDO $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function allStudents(): array
    {
        $sql = 'SELECT * FROM students;';
        $statement = $this->connection->query($sql);
        $studentDataList = $statement->fetchAll();

        $studentList = [];

        foreach ($studentDataList as $studentData) {
            $studentList[] = new Student(
                $studentData['id'],
                $studentData['name']
            );
        }
        return $studentList;
    }



    public function save(Student $student): bool
    {
        if ($student->id() === null) {
            return $this->insert($student);
        }
        return $this->update($student);
    }

    public function insert(Student $student): bool
    {
        $insertQuery = 'INSERT INTO students (name) VALUES (:name);';
        $statement = $this->connection->prepare($insertQuery);

        $success = $statement->execute(
            [
                ':name' => $student->name()
            ]
        );

        $student->setId($this->connection->lastInsertId());

        return $success;
    }

    public function update(Student $student): bool
    {
        $query = 'UPDATE students SET name = :name WHERE id = :id;';
        $statement = $this->connection->prepare($query);
        $statement->bindValue(':name', $student->name());
        $statement->bindValue(':id', $student->id(), PDO::PARAM_INT);

        return $statement->execute();
    }

    public function remove(Student $student): bool
    {
        $statement = $this->connection->prepare('DELETE FROM students WHERE id = :id;');
        $statement->bindValue(":id", $student->getId(),PDO::PARAM_INT);
        return $statement->execute();
    }
}