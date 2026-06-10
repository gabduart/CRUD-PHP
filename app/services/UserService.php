<?php 
    require_once __DIR__ . '/../model/User.php';
    class UserService {
        private UserRepository $repository;

        public function __construct(UserRepository $repository) {
            $this->repository = $repository;
        }

        public function serviceCreate(array $dados) {
            $senhaHash = password_hash(
                $dados['senha'],
                PASSWORD_DEFAULT
            );

            $user = new User(
                $dados['nome'],
                $dados['email'],
                $dados['data_nascimento'],
                $senhaHash
            );

            return $this->repository->create($user);
        }

        public function serviceFindAll() {
            return $this->repository->findAll();
        }
    }
?>