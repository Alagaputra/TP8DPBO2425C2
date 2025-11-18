<?php

require_once __DIR__ . "/../config/connection.php";

$db = (new Database())->connect();
$route = $_GET['route'] ?? 'lecturers';

switch ($route) {

    // LECTURERS
    case 'lecturers':
        require_once __DIR__ . "/../controllers/LecturersController.php";
        (new LecturersController($db))->index();
        break;

    case 'lecturers/create':
        require_once __DIR__ . "/../controllers/LecturersController.php";
        (new LecturersController($db))->create();
        break;

    case 'lecturers/store':
        require_once __DIR__ . "/../controllers/LecturersController.php";
        (new LecturersController($db))->store();
        break;

    case 'lecturers/edit':
        require_once __DIR__ . "/../controllers/LecturersController.php";
        (new LecturersController($db))->edit();
        break;

    case 'lecturers/update':
        require_once __DIR__ . "/../controllers/LecturersController.php";
        (new LecturersController($db))->update();
        break;

    case 'lecturers/delete':
        require_once __DIR__ . "/../controllers/LecturersController.php";
        (new LecturersController($db))->delete();
        break;

    // COURSES
    case 'courses':
        require_once __DIR__ . "/../controllers/CoursesController.php";
        (new CoursesController($db))->index();
        break;

    case 'courses/create':
        require_once __DIR__ . "/../controllers/CoursesController.php";
        (new CoursesController($db))->create();
        break;

    case 'courses/store':
        require_once __DIR__ . "/../controllers/CoursesController.php";
        (new CoursesController($db))->store();
        break;

    case 'courses/edit':
        require_once __DIR__ . "/../controllers/CoursesController.php";
        (new CoursesController($db))->edit();
        break;

    case 'courses/update':
        require_once __DIR__ . "/../controllers/CoursesController.php";
        (new CoursesController($db))->update();
        break;

    case 'courses/delete':
        require_once __DIR__ . "/../controllers/CoursesController.php";
        (new CoursesController($db))->delete();
        break;

    // DEFAULT
    default:
        echo "404 | Route tidak ditemukan";
        break;
}
