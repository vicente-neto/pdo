<?php
require_once 'vendor/autoload.php';

use Vicente\Pdo\Infra\Repository\PdoStudentRepository;
use Vicente\Pdo\Infra\Persistence\ConnectionCreator;
$connection = ConnectionCreator::createConnectionProducao();
$repository = new PdoStudentRepository($connection);
$students = $repository->allStudents();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
    <body>
        <div class="container">
            <h1 class="display-1 text-center">Estudantes</h1>
            <div class="py-2 d-flex justify-content-end">
                <a href="adicionar-estudante-form.php" type="button" class="btn btn-primary">Novo</a>
            </div>
            <ul class="list-group">
                <?php foreach ($students as $student): ?>
                    <li class="list-group-item d-flex">
                        <span class="p-2 mr-auto"><?= $student->getName(); ?></span>
                        <i class="p-2 fas fa-trash"></i>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </body>
</html>

