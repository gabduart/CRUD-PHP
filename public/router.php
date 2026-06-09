<?php 
    session_start();
    require_once '../app/controllers/UserController.php';
    require_once '../app/services/UserService.php';
    require_once '../app/repositories/UserRepository.php';
    require_once '../app/database/Connection.php';

    $repository = new UserRepository(Connection::getConnection());
    $service = new UserService($repository);
    $controller = new UserController($service);

    $action = $_GET['action'] ?? '';

    switch ($action) {
        case 'store':
            $controller->store();
            break;

        default:
            header('Location: index.php');
            exit;
    }
?>