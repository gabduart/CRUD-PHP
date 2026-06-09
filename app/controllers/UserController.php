<?php 
    class UserController {
        private UserService $userService;

        public function __construct(UserService $userService) {
            $this->userService = $userService;
        }

        public function store() {
            $resultado = $this->userService->serviceCreate($_POST);

            $_SESSION['mensagem'] = 
                $resultado
                    ? 'Usuário criado com sucesso!'
                    : 'Não foi possível criar o usuário.';
            
            header('Location: ../public/index.php');
            exit;
        }
    }
?>