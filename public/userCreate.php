<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuário</title>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="card">
        <div class="card-header">
            <h4>Adicionar Usuário <a href="index.php">Cancelar</a></h4>
        </div>
        <div class="card-body">
            <form action="../app/router/router.php?action=store" method="post">
                <div>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="id_nome">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="id_email">
                </div>
                <div>
                    <label for="data_nascimento">Data de Nascimento</label>
                    <input type="date" name="data_nascimento" id="id_data_nascimento">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="id_senha">
                </div>
                <div>
                    <button type="submit" name="create_user">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>