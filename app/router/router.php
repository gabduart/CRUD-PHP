<?php 
    require_once __DIR__ . '/../config/config.php';
    session_start();
    require_once __DIR__ . '/../controllers/UserController.php';
    require_once __DIR__ . '/../services/UserService.php';
    require_once __DIR__ . '/../repositories/UserRepository.php';
    require_once __DIR__ . '/../database/Connection.php';

    $repository = new UserRepository(Connection::getConnection());
    $service = new UserService($repository);
    $controller = new UserController($service);

    $action = $_GET['action'] ?? null;

    if ($action !== null) {

        switch ($action) {

            case 'store':
                $controller->store();
                break;

            case 'view':
                $controller->view();
                break;

            case 'edit':
                $controller->edit();
                break;

            case 'update':
                $controller->update();
                break;

            case 'delete':
                $controller->delete();
                break;

            default:
                http_response_code(404);
                echo "Ação não encontrada";
                exit;
        }
    }
?>