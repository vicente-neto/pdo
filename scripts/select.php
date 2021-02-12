<?php

use Vicente\Pdo\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/../database.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$statement = $pdo->query('SELECT * FROM students;');
//var_dump($statement->fetchAll());
//var_dump($statement->fetchAll(PDO::FETCH_NUM));
//var_dump($statement->fetchAll(PDO::FETCH_ASSOC));

$students = [];
foreach($statement->fetchAll() as $studentDB){
    $students[] = new Student(null,$studentDB["name"]);
}
/*
$students = [];
while($student = $statement->fetch()){
    $students[] = $student;
}
*/

var_dump($students);