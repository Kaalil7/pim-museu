<?php 
// Iniciando a sessão
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="shortcut icon" href="imagens/icon.ico" type="image/x-icon">
    <link href="https://db.onlinewebfonts.com/c/6f99c824ca1981d3cf4b7bb6cfc2507b?family=ITC+Eras+Bold" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Login - MIHMM</title>
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
                <li><a href="quest.php">Exposições</a></li>
                <li class="menu-button"><a href="registro.php">Ingressos</a></li>
                <label for="check" class="close-btn">
                    <i class="fas fa-times"></i>
                </label>
            </ul>
        </nav>
    </header>
    <div class="container2">
        <div class="registration-box2">
            <h3>FAÇA LOGIN E  <span class="dif-color">COMPRE INGRESSOS!</span></h3>
            <hr>
            <!-- Link para redirecionar para a página de registro -->
            <p>Ainda não é membro? <a class="aviso" href="registro.php">Se registre aqui...</a></p>
            <!-- Formulário de Login -->
            <form method="POST" action="login_query.php">    
                <div class="alert-info">Login</div>
                <div class="form-group">
                    <label>Nome - Login</label>
                    <input placeholder="Ex. Roberto" type="text" name="username" class="form-control" required="required"/>
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input placeholder="Senha" type="password" name="password" class="form-control" required="required"/>
                </div>
                <?php
                    // Verifica se a sessão 'error' está definida. A sessão 'error' contém a mensagem se 'Nome de usuário' e 'Senha' não forem válidos.
                    if (isset($_SESSION['error'])) {
                ?>
                <!-- Exibe a mensagem de erro de login -->
                <div class="alert-danger"><?php echo $_SESSION['error']?></div>
                <?php
                    // Remove a sessão 'error' após exibir a mensagem.
                    unset($_SESSION['error']);
                    }
                ?>
                <button class="btn btn-primary btn-block" name="login">Login</button>
            </form>    
            <!-- Fim do Formulário de Login -->
        </div>
        <!-- Divisão para a imagem -->
        <div class="image-container2">
            <img src="imagens/arteModernaG.png" alt="Imagem de exemplo">
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
