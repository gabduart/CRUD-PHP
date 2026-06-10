<?php 
    session_start();
    require_once '../controllers/UserController.php';
    require_once '../services/UserService.php';
    require_once '../repositories/UserRepository.php';
    require_once '../database/Connection.php';

    $repository = new UserRepository(Connection::getConnection());
    $service = new UserService($repository);
    $controller = new UserController($service);

    $action = $_GET['action'] ?? '';

    switch ($action) {
        case 'store':
            $controller->store();
            break;

        default:
            header('Location: ../../public/index.php');
            exit;
    }
?>