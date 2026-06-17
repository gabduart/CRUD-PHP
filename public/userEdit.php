<?php 
    require_once __DIR__ . '/../app/config/config.php';
?>

<form action="<?= BASE_URL ?>/app/router/router.php?action=update" method="post">

    <input
        type="hidden"
        name="id"
        value="<?= $usuario['id'] ?>"
    >

    <div>
        <label>Nome</label>
        <input
            type="text"
            name="nome"
            value="<?= $usuario['nome'] ?>"
        >
    </div>

    <div>
        <label>Email</label>
        <input
            type="email"
            name="email"
            value="<?= $usuario['email'] ?>"
        >
    </div>

    <div>
        <label>Data de Nascimento</label>
        <input
            type="date"
            name="data_nascimento"
            value="<?= $usuario['data_nascimento'] ?>"
        >
    </div>

    <button type="submit">
        Atualizar
    </button>

</form>