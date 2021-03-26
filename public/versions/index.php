<?php
require("vendor/autoload.php");

use Vicente\Pdo\Controller\FormStudent;
use Vicente\Pdo\Controller\StudentList;

switch ($_SERVER['PATH_INFO']) {
    case '/student-list':
        $controller = new StudentList();
        $controller->index();
        break;
    case '/student-form':
        $controller = new FormStudent();
        $controller->index();
        break;
    case '/save-student':
        $controller = new PersistenceStudent();
        $controller->process();
        break;
    default:
        echo "404: Page Not Found";
        break;
}