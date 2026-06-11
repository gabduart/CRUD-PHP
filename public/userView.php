<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Usuário</title>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="card">
        <div class="card-header">
            <h4>Visualizar Usuário <a href="../../public/index.php">Voltar</a></h4>
        </div>
        <div class="card-body">
                <div>
                    <label for="nome">Nome</label>
                    <p><?= $usuario['nome'] ?></p>
                </div>
                <div>
                    <label for="email">Email</label>
                    <p><?= $usuario['email'] ?></p>
                </div>
                <div>
                    <label for="data_nascimento">Data de Nascimento</label>
                    <p><?= date('d/m/Y', strtotime($usuario['data_nascimento'])) ?></p>
                </div>
        </div>
    </div>
</body>
</html>