<?php

namespace Vicente\Pdo\Infra\Repository;

use Vicente\Pdo\Model\Student;

interface StudentRepository
{
    public function allStudents(): array;
    public function save(Student $student): bool;
    public function remove(Student $student): bool;
}
