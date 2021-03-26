<?php
    $routers = [
        "/student-list"=>\Vicente\Pdo\Controller\StudentList::class,
        "/student-form"=>\Vicente\Pdo\Controller\FormStudent::class,
        "/save-student"=>\Vicente\Pdo\Controller\SaveStudent::class,
        "/delete-student"=>\Vicente\Pdo\Controller\DeleteStudent::class,
        "/update-student"=>\Vicente\Pdo\Controller\UpdateStudent::class
    ];

    return $routers;
