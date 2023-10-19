<?php
session_start();
require_once 'conexao.php';

if (isset($_POST['codigo_acesso'])) {
    $codigo = $_POST['codigo_acesso'];
    $query = "SELECT COUNT(*) as count FROM `member` WHERE `codigo_acesso` = :codigo_acesso";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':codigo_acesso', $codigo);
    $stmt->execute();
    $row = $stmt->fetch();
    $count = $row['count'];
    if ($count > 0) {
        header('location: quest.php');
    } else {
        $_SESSION['error'] = "Código de acesso inválido!";
        header('location: cod_valid.php');
    }
}
?>
