<!DOCTYPE html>
<html lang="pt-BR">
	<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="imagens/icon.ico" type="image/x-icon">
    <link href="https://db.onlinewebfonts.com/c/6f99c824ca1981d3cf4b7bb6cfc2507b?family=ITC+Eras+Bold" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Ingresso - MIHMM</title>
	</head>
<body>
<header>
        <nav class="navbar">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <a href="index.html"><label class="logo"><img src="imagens/logo-png.png" alt="Logo do Museu"></label></a>
            <ul class="menu">
                <li><a href="login.php">Login</a></li>
                <li><a href="projeto.html">Projeto</a></li>
                <li><a href="quest.php">Exposições</a></li>ções</a></li>
                <li class="menu-button"><a href="registro.php">Ingressos</a></li>
                <label for="check" class="close-btn">
                    <i class="fas fa-times"></i>
                </label>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="registration-box">
        <h3>ADQUIRA AGORA SEUS <span class="dif-color">INGRESSOS!</span></h3>
        <hr style="border-top: 1px dotted #ccc;" />
        <a class="aviso" href="login.php">Logout</a>
        <h1 class="titulo3">Selecione seus <span class="dif-color">ingressos:</span></h1>
        <form action="adicionar_ao_carrinho.php" method="POST" class="opcoes-compra">
            <div class="opcao-compra">
                <label for="quantidade">Quantidade de <span class="dif-color">Ingresso:</span></label>
                <input type="number" name="quantidade" id="quantidade" min="1" required>
            </div>
            <div class="opcao-compra">
                <label for="tipo">Tipo de <span class="dif-color">Ingresso:</span></label>
                <select name="tipo" id="tipo">
                    <option value="Meia">Meia</option>
                    <option value="Inteira">Inteira</option>
                </select>
            </div>
            <div class="opcao-compra">
                <input class="btn btn-primary btn-block" type="submit" value="Adicionar ao Carrinho">
            </div>
        </form>
        <h2 class="titulo3">Carrinho de <span class="dif-color">compras</span></h2>
        <hr style="border-top: 1px dotted #ccc; width: 300px; margin-top: -10px;" />
        <div id="carrinho">
            <!-- Itens do carrinho serão exibidos aqui -->
            <p>
            <?php
            require_once 'adicionar_ao_carrinho.php';
            // Exibe os itens do carrinho de compras
            if (isset($_SESSION["carrinho"])) {
                foreach ($_SESSION["carrinho"] as $item) {
                    echo "<li>{$item['quantidade']} x  <span class='dif-color'>{$item['tipo']}</span></li>";
                }
            }
            ?>
            </p>
            <a class="buts" href="limpar_carrinho.php">Limpar Carrinho</a>
            <a class="buts" href="finalizar_compra.php">Finalizar Compra</a>
        </div>
    </div>
       <div class="image-container">
            <img src="imagens/ingresso.png" alt="Imagem de exemplo">
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>