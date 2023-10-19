<?php
session_start();

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obter a quantidade de ingressos e o tipo selecionado
    $quantidade = $_POST["quantidade"];
    $tipo = $_POST["tipo"];

    // Defina um preço padrão se o tipo de ingresso não for válido
    $precoPadrao = 15.00; // Defina o preço padrão desejado

    // Obter o preço com base no tipo de ingresso ou usar o preço padrão
    $preco = ($tipo === "Meia") ? 10.00 : (($tipo === "Inteira") ? 20.00 : $precoPadrao);
    $subtotal = $quantidade * $preco;

    // Criar ou atualizar o carrinho na sessão
    if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = array();
    }

    // Adicionar o item ao carrinho
    $_SESSION["carrinho"][] = array(
        "tipo" => $tipo,
        "quantidade" => $quantidade,
        "preco" => $preco,
        "subtotal" => $subtotal
    );

    // Redirecionar de volta à página inicial
    header("Location: ingressos.php");
    exit();
}
?>
