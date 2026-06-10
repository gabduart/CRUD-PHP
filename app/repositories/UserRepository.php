<?php 
    class UserRepository {
        private mysqli $conexao;

        public function __construct(mysqli $conexao) {
            $this->conexao = $conexao;
        }

        public function create(User $user) {
            $stmt = $this->conexao->prepare(
                "INSERT INTO users
                (nome, email, data_nascimento, senha)
                VALUES (?, ?, ?, ?)"
            );

            $stmt->bind_param(
                "ssss",
                $user->getNome(),
                $user->getEmail(),
                $user->getDataNascimento(),
                $user->getSenha()
            );

            return $stmt->execute();
        }

        public function findAll() {
            $sql = "SELECT * FROM users";

            $resultado = $this->conexao->query($sql);

            return $resultado->fetch_all(MYSQLI_ASSOC);
        }
    }
?>