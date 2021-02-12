<?php
namespace Vicente\Pdo\Scripts;

use Vicente\Pdo\Model\StudentWithJson as Student;
use PDO;

class Select
{
    public static function run(): Void
    {

        $databasePath = __DIR__ . '/../../database.sqlite';
        $pdo = new PDO('sqlite:' . $databasePath);

        $statement = $pdo->query('SELECT * FROM students;');
//var_dump($statement->fetchAll());
//var_dump($statement->fetchAll(PDO::FETCH_NUM));
//var_dump($statement->fetchAll(PDO::FETCH_ASSOC));

        $students = [];
        foreach($statement->fetchAll() as $studentDB){
            $students[] = new Student($studentDB["id"],$studentDB["name"]);
        }
        /*
        $students = [];
        while($student = $statement->fetch()){
            $students[] = $student;
        }
        */

        header('Content-Type: application/json');
        $result = json_encode($students);
        echo $result;
    }
}

