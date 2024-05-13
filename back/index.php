<?php 

require_once 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM saida");

if ($sql->columnCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - EEEP Adolfo Ferreira de Sousa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/tab.css"> <!-- Seus estilos personalizados -->
    <style>
        /* Seus estilos CSS personalizados aqui */
    </style>
</head>
<body>
    <section class="mt-5">
        <div class="container">
            <h1 class="text-center mb-4">Listagem de Turmas</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <!-- <th>ID</th> -->
                        <th>Ordem</th>
                        <th>Sala</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista as $turmas):?>
                        <tr>
                            <!-- <td><?= $turmas['id'];?></td> -->
                            <td><?= $turmas['ordem'];?></td>
                            <td><?= $turmas['turma'];?></td>
                            <td>
                                <a class="btn btn-primary" href="editar.php?id=<?= $turmas['id'];?>">Editar</a>
                                <a class="btn btn-danger" href="excluir.php?id=<?= $turmas['id'];?>">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <a class="btn btn-success" href="cadastrar.php">Cadastrar Turma</a>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
