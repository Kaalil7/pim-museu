<?php
    session_start();
   // Conectar ao banco de dados SQLite
$db = new SQLite3('db/db_member.sqlite3');

// Função para gerar um código de acesso aleatório
function gerarCodigoAcesso($tamanho = 10) {
    $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $codigo = '';
    for ($i = 0; $i < $tamanho; $i++) {
        $codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    return $codigo;
}

// Gerar um código de acesso aleatório
$codigo = gerarCodigoAcesso();

// Inserir o código no banco de dados
$query = "INSERT INTO member (codigo_acesso) VALUES ('$codigo')";
$resultado = $db->exec($query);
// Fechar a conexão com o banco de dados
$db->close();
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/form-compra.css">
  <link rel="shortcut icon" href="imagens/icon.ico" type="image/x-icon">
  <link href="https://db.onlinewebfonts.com/c/6f99c824ca1981d3cf4b7bb6cfc2507b?family=ITC+Eras+Bold" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <title>Finalizar compra - MIHMM</title>
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
<div class="row">
  <div class="col-75">
    <div class="container">
      <form">
        <div class="row">
          <div class="col-50">
          <h3>ENDEREÇO DE <span class="dif-color">COBRANÇA!</span></h3>
          <hr>
            <label for="fname"><i class="fa fa-user"></i> Nome completo</label>
            <input type="text" id="fname" name="firstname" placeholder="João Da Silva Pereira">
            <label for="email"><i class="fa fa-envelope"></i> E-mail</label>
            <input type="text" id="email" name="email" placeholder="joaosilva@exemplo.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Endereço</label>
            <input type="text" id="adr" name="address" placeholder="Av. Paulista, 558">
            <label for="city"><i class="fa fa-institution"></i> Cidade</label>
            <input type="text" id="city" name="city" placeholder="São Paulo">

            <div class="row">
              <div class="col-50">
                <label for="state">Estado</label>
                <input type="text" id="state" name="state" placeholder="SP">
              </div>
              <div class="col-50">
                <label for="zip">CEP</label>
                <input type="text" id="zip" name="zip" placeholder="00000000">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>PAGAMENTO</h3>
            <hr>
            <label for="fname">Cartões Aceitos</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Nome no Cartão</label>
            <input type="text" id="cname" name="cardname" placeholder="JOÃO DA SILVA PEREIRA">
            <label for="ccnum">Número do Cartão de Crédito</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Mês de Vencimento</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Setembro">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Ano de Vencimento</label>
                <input type="text" id="expyear" name="expyear" placeholder="2025">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
          </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Endereço de entrega igual o da cobrança
        </label>
        <button class="btn" id="mostrarPopup">FINALIZAR COMPRA</button>
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
        <h4>CARRINHO <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b></b></span></h4>
        <hr style="margin-top: -15px;">
        <div style="float: right;">
            <img style="width: 150px;" src="imagens/ingresso.png" alt="Ingressos">
        </div>
        <div style="overflow: hidden; font-family: Arial; font-weight: bold;"> <!-- Adicione uma div para os itens do carrinho -->
            <?php
            if (isset($_SESSION["carrinho"])) {
                foreach ($_SESSION["carrinho"] as $item) {
                    echo "{$item['quantidade']}x <tr>";
                    echo "<span class='dif-color'>{$item['tipo']}</span><tr>";
                    echo " R$ {$item['preco']}<br>";
                }
            }
            ?>
        </div>
        <p><br><br><br><br><br><br>Total <span class="price" style="color:black"><b>
        <?php
        $total = 0;
        if (isset($_SESSION["carrinho"])) {
            foreach ($_SESSION["carrinho"] as $item) {
                $total += $item["subtotal"];
            }
        }
        echo "<span class='dif-color'>R$ $total</span>";
        ?>
        </b></span></p>
    </div>
    <button onclick="window.location.href='limpar_carrinho.php'" class="btn">LIMPAR CARRINHO</button>
  </div>
  </div>
  <div id="meuPopup" class="popup">
    <h2 style="font-family: ITC Eras Bold"><i class="fa fa-check-circle"></i> PARABÉNS! OBRIGADO PELA <span class='dif-color'>COMPRA!</span></h2>
    <hr>
    <?php echo "Código de acesso gerado com sucesso: <span class='dif-color'>$codigo</span>"; ?>
    <p>Anote este código com <span class='dif-color'>segurança</span>, com ele você poderá acessar nossas exposições!</p>
    <button class="btn" id="fecharPopup">Fechar</button>
    <button onclick="window.location.href='quest.php'" class="btn">EXPOSIÇÕES</button>
  </div>

  <script src="js/script.js"></script>
  <script>
     // JavaScript para mostrar e ocultar o pop-up
    var botaoMostrar = document.getElementById("mostrarPopup");
    var botaoFechar = document.getElementById("fecharPopup");
    var popup = document.getElementById("meuPopup");

    botaoMostrar.addEventListener("click", function() {
      popup.style.display = "block";
    });

    botaoFechar.addEventListener("click", function() {
      popup.style.display = "none";
    });
</script>

</body>
</html>
