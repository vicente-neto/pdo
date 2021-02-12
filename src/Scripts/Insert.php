<?php
namespace Vicente\Pdo\Scripts;
use Vicente\Pdo\Model\Student;
use Vicente\Pdo\Infra\Persistence\ConnectionCreator;

class Insert
{
    public static function run(string $name): Void
    {
        $connection = ConnectionCreator::createConnection();

        $student = new Student(null,$name);

        $statement = "INSERT INTO students (name) VALUES (:name);";
        $statement = $connection->prepare($statement);
        $statement->bindValue(":name",$student->getName());
        $statement->execute();
        echo "inserção realizada!";
    }
}

