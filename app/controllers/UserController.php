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
            
            header('Location: ../../public/index.php');
            exit;
        }

        public function index() {
            return $this->userService->serviceFindAll();
        }

        public function view() {
            $usuario = $this->userService->serviceFindById(
                (int) $_GET['id']
            );

            require __DIR__ . '/../../public/userView.php';
        }

        public function edit() {
            $usuario = $this->userService->serviceEdit(
                (int) $_GET['id']
            );

            require __DIR__ . '/../../public/userEdit.php';
        }

        public function update() {
            $resultado = $this->userService->serviceUpdate(
                $_POST
            );

            $_SESSION['mensagem'] =
                $resultado
                    ? 'Usuário atualizado com sucesso!'
                    : 'Erro ao atualizar usuário.';

            header(
                'Location: ../../public/index.php'
            );

            exit;
        }

        public function delete() {
            $resultado = $this->userService->serviceDelete(
                (int) $_GET['id']
            );

            $_SESSION['mensagem'] =
                $resultado
                    ? 'Usuário excluído com sucesso!'
                    : 'Erro ao excluir usuário.';

            header(
                'Location: ../../public/index.php'
            );

            exit;
        }
    }
?>