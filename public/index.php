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
    ?>

    <div class="card">
        <div class="card-header">
            <h4>Lista de Usuários <a href="#">Adicionar Usuário</a></h4>
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
                    <tr>
                        <td>1</td>
                        <td>Jurandir</td>
                        <td>juran@gmail.com</td>
                        <td>10/02/1989</td>
                        <td><button type="button">Visualizar</button> <button type="button">editar</button> <button type="button">Excluir</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>