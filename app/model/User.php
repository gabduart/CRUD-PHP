<?php 
    class User {
        private ?int $id;
        private string $nome;
        private string $email;
        private string $data_nascimento;
        private string $senha;

        public function __construct(
            string $nome,
            string $email,
            string $data_nascimento,
            string $senha
        ){
            $this->nome = $nome;
            $this->email = $email;
            $this->data_nascimento = $data_nascimento;
            $this->senha = $senha;
        }

        public function getId(): ?int
        {
            return $this->id;
        }

        public function setId(?int $id): void
        {
            $this->id = $id;
        }

        public function getNome(): string
        {
            return $this->nome;
        }

        public function setNome(string $nome): void
        {
            $this->nome = $nome;
        }

        public function getEmail(): string
        {
            return $this->email;
        }

        public function setEmail(string $email): void
        {
            $this->email = $email;
        }

        public function getDataNascimento(): string
        {
            return $this->data_nascimento;
        }

        public function setDataNascimento(string $data_nascimento): void
        {
            $this->data_nascimento = $data_nascimento;
        }

        public function getSenha(): string
        {
            return $this->senha;
        }

        public function setSenha(string $senha): void
        {
            $this->senha = $senha;
        }
    }
?>