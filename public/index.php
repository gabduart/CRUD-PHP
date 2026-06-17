<?php

    require_once __DIR__ . '/../app/router/router.php';

    $usuarios = $controller->index();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud - PHP</title>
</head>
<body>
    <?php 
        include 'navbar.php';
        include 'message.php';
    ?>

    <div class="card">
        <div class="card-header">
            <h4>Lista de Usuários <a href="userCreate.php">Adicionar Usuário</a></h4>
        </div>
        <div class="card-body">
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Data de Nascimento</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if ($usuarios == null) {
                            echo "<h4>Lista Vazia</h4>";
                        }
                        foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?= $usuario['id'] ?></td>
                        <td><?= $usuario['nome'] ?></td>
                        <td><?= $usuario['email'] ?></td>
                        <td><?= date('d/m/Y', strtotime($usuario['data_nascimento']))?></td>
                        <td>
                            <a href="../app/router/router.php?action=view&id=<?= $usuario['id'] ?>">Vizualizar</a>
                            <a href="../app/router/router.php?action=edit&id=<?= $usuario['id'] ?>">Editar</a>
                            <form
                                action="../app/router/router.php?action=delete&id=<?= $usuario['id'] ?>"
                                method="post"
                                style="display:inline;"
                                onsubmit="return confirm('Tem certeza que deseja excluir este usuário?')"
                            >
                                <button type="submit">
                                    Excluir
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>