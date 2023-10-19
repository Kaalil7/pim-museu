<?php 
//starting the session
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
	<link rel="stylesheet" href="caminho-para/swiper.min.css">
	<script src="caminho-para/swiper.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Registro - MIHMM</title>
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
    <div class="container">
        <div class="registration-box">
            <h3>REGISTRE-SE! <span class="dif-color">VIRE MEMBRO!</span></h3>
            <hr>
            <!-- Link para redirecionar para a página de login -->
            <p>Já é um membro? <a class="aviso" href="login.php">Faça login aqui...</a></p>
                <!-- Formulário de Registro -->
                <form method="POST" action="save_member.php">    
                    <div class="alert-info">Registro</div>
                    <div class="form-group">
                        <label>Nome - Login</label>
                        <input placeholder="Ex. Roberto" type="text" name="username" class="form-control" required="required"/>
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input placeholder="Senha" type="password" name="password" class="form-control" required="required"/>
                    </div>
                    <div class="form-group">
                        <label>Primeiro nome</label>
                        <input placeholder="Primeiro nome" type="text" name="firstname" class="form-control" required="required"/>
                    </div>
                    <div class="form-group">
                        <label>Último nome</label>
                        <input placeholder="Último nome" type="text" name="lastname" class="form-control" required="required"/>
                    </div>
                    <?php
                        // Verifica se a sessão 'success' está definida. A sessão 'success' contém a mensagem de que as credenciais foram salvas com sucesso.
                        if(ISSET($_SESSION['success'])){
                    ?>
                    <!-- Exibe a mensagem de sucesso no registro -->
                    <div class="alert-success"><?php echo $_SESSION['success']?></div>
                    <?php
                        // Remove a sessão 'success' após exibir a mensagem.
                        unset($_SESSION['success']);
                        }
                    ?>
                    <button class="btn btn-primary btn-block" name="register">Registrar</button>
                </form>    
                <!-- Fim do Formulário de Registro -->
        </div>
        <!-- Divisão para a imagem -->
        <div class="image-container">
            <img src="imagens/dumontG.png" alt="Imagem de exemplo">
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
