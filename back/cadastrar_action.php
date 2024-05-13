<?php 

require_once 'config.php';

$ordem = filter_input(INPUT_POST, 'ordem');
$turma = filter_input(INPUT_POST, 'turma');

if($ordem && $turma){
    $sql = $pdo->prepare("SELECT * FROM saida WHERE turma = :turma");
    $sql->bindValue(':turma', $turma);
    $sql->execute();

    if ($sql->rowCount() === 0) {
        $sql = $pdo->prepare("INSERT INTO saida (ordem, turma) VALUES (:ordem, :turma)");
        $sql->bindValue('ordem', $ordem);
        $sql->bindValue('turma', $turma);
        $sql->execute();
    
        header("Location: index.php");
        exit;
    }else {
        header("Location: cadastrar.php");
    }


}else{
    header("Location: cadastrar.php");
    exit;
};