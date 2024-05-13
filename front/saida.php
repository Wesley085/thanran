<?php 

require_once '../back/config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM saida");

if ($sql->columnCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<?php ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem de Saída - EEEP Adolfo Ferreira de Sousa</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <nav>
        <div class="logo"><a href="../index.html"><img src="../img/logo-afs.png" alt="AFS" srcset=""> </a></div>
        </nav>
    </header>

    
    <h1>Ordem de Saída</h1>
        <section class="container">

        <?php foreach ($lista as $turmas):?>
            <div class="card">
                <h3 class="header"> <?= $turmas ['ordem'];?> </h3>
                <ul>
                    <li> <?= $turmas ['turma'];?> </li>
                </ul>
            </div>

        <?php endforeach; ?>
        <nav>
            <div class="btn">
                <a href="cardapio.html">Cardápio</a>    
            </div>
            <div class="btn-2">
                <a href="../login/index.php">Editar</a>
            </div>
        </nav>
        </section>

         <footer>
        <div class="container1">
            <div class="column">
                <h3>Equipe de Desenvolvimento</h3>
                <p>@wesley_santto2</p>
                <p>@gusta_flamengo</p>
            </div>
            <div class="column">
                <h3>Escola</h3>
                <p>EEEP Adolfo Ferreira de Sousa</p>
                <p>Endereço: Rua Exemplo, 123 - Cidade</p>
            </div>
        </div>
    </footer> 

</body>

</html>
