<?php 
    require_once '../back/config.php';

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
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Listagem de Turmas</h1>
        <section>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Ordem</th>
                        <th>Sala</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista as $turmas):?>
                        <tr>
                            <td><?= $turmas['ordem'];?></td>
                            <td><?= $turmas['turma'];?></td>
                            <td>
                                <a class="btn btn-primary" href="../back/editar.php?id=<?= $turmas['id'];?>">Editar</a>
                                <a class="btn btn-danger" href="../back/excluir.php?id=<?= $turmas['id'];?>">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </section>
        <a class="btn btn-success" href="../back/cadastrar.php">Cadastrar Turma</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
