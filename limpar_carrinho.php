<?php
session_start();
// Limpar o carrinho
unset($_SESSION["carrinho"]);
// Redirecionar para a página inicial
header("Location: ingressos.php");
exit();
?>
