<?php 

require_once 'config.php';

$usuario = [];

$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $sql = $pdo->prepare("SELECT * FROM saida WHERE id = :id ");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $turmas = $sql->fetch(PDO::FETCH_ASSOC);
    }else {
        header("Location: index.php");
        exit;
    }
}else {
    header("Location: index.php");
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Organizar Saída</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<section class="d-flex justify-content-center align-items-center vh-100">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="mb-4 text-center">Editar Saída</h1>
                
                <form method="POST" action="editar_action.php" class="max-width-400">
                <input type="hidden" name="id" value="<?= $turmas['id']; ?>"/>
                    <div class="mb-3">
                        <label for="ordem" class="form-label">Ordem:</label>
                        <input type="text" id="ordem" name="ordem" class="form-control" placeholder="Digite a ordem" value="<?= $turmas['ordem']; ?>">
                    </div>
                
                    <div class="mb-3">
                        <label for="turma" class="form-label">Sala:</label>
                        <input type="text" id="turma" name="turma" class="form-control" placeholder="Digite a sala" value="<?= $turmas['turma']; ?>">
                    </div>
                
                    <input type="submit" value="Salvar" class="btn btn-success w-100">
                </form>
            </div>
        </div>
    </div>

</section>

</body>
</html>
    