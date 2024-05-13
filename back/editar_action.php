<?php 

require_once 'config.php';


$id = filter_input(INPUT_POST, 'id');
$ordem = filter_input(INPUT_POST, 'ordem');
$turma = filter_input(INPUT_POST, 'turma');

if ($id && $ordem && $turma) {
    $sql = $pdo->prepare("UPDATE saida SET ordem = :ordem, turma = :turma WHERE id = :id");
    $sql->bindValue('ordem', $ordem);
    $sql->bindValue('turma', $turma);
    $sql->bindValue('id', $id);
    $sql->execute();

    header("Location: index.php");
    exit;
}else {   
    header("Location: index.php");
    exit;
}