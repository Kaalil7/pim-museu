<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/quest.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="shortcut icon" href="imagens/icon.ico" type="image/x-icon">
    <link href="https://db.onlinewebfonts.com/c/6f99c824ca1981d3cf4b7bb6cfc2507b?family=ITC+Eras+Bold" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Questionário</title>
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
                <!-- Adicione o botão de fechar aqui -->
                <label for="check" class="close-btn">
                    <i class="fas fa-times"></i>
                </label>
            </ul>
        </nav>
    </header>
    <!-- Conteúdo da página aqui -->
    <div id="container2" class="container2">
        <div class="registration-box2">
            <h3>ACESSE AGORA NOSSAS <span class="dif-color">EXPOSIÇÕES!</span></h3>
            <hr>
            <p>Ainda tem não seu código de acesso? <a class="aviso" href="ingressos.php">Adquira aqui...</a></p>
                <div id="codigo">
                    <p>Insira o código para acessar o <span class="dif-color">questionário das exposições </span></p>
                    <input placeholder="xxxxxxxxxx" type="text" id="codigoInput">
                    <div>
                        <button class="btn-primary" onclick="verificarCodigo()">Acessar</button>
                    </div>
                    <div id="erro">
                        <p>Código de acesso inválido!</p>
                    </div>    
                </div>
            <!-- Fim do Formulário de Login -->
        </div>
            <!-- Divisão para a imagem -->
            <div class="image-container2">
                <img src="imagens/imigjapG.png" alt="Imagem de exemplo">
            </div>
    </div>
    <div id="questBut" class="questBut">
        <div class="container">
            <div class="quadrado" onclick="exibirQuestionario('questionario1')">
                <img src="imagens/imigjap.png" alt="115 anos da Imigração Japonesa">
            </div>
            <div class="quadrado" onclick="exibirQuestionario('questionario2')">
                <img src="imagens/dumont.png" alt="150 anos de Santos Dumont">
            </div>
            <div class="quadrado" onclick="exibirQuestionario('questionario3')">
                <img src="imagens/arteModerna.png" alt="100 anos da Arte Moderna">
            </div>
            <div class="quadrado" onclick="exibirQuestionario('questionario4')">
                <img src="imagens/paris2024.png" alt="Jogos Olímpicos de Paris 2024">
        </div>
    </div>
    <form id="quizFormJap">
    <div id="questionario1" class="quest1">
        <h2><span class="dif-color">115 anos da</span> imigração <span class="dif-color">Japonesa pro Brasil</span></h2>
        <p>Bem-vindo ao <span class="dif-color">Museu Multitematico!</span> Este questionário foi projetado para testar seus conhecimentos sobre a história da 
            imigração japonesa no Brasil e sua influência na cultura brasileira. </p>
             <!-- Pergunta 1 -->
             <div class="Jappergunta">
                <p><span class="dif-color">1.</span> Quando os primeiros imigrantes japoneses chegaram ao Brasil?</p>
                <input type="radio" name="Jappergunta1" value="a"> a) 1888<br>
                <input type="radio" name="Jappergunta1" value="b"> b) 1908<br>
                <input type="radio" name="Jappergunta1" value="c"> c) 1920<br>
                <input type="radio" name="Jappergunta1" value="d"> d) 1935<br>
                <input type="radio" name="Jappergunta1" value="e"> e) 1950<br>
                <input type="hidden" id="Japresposta1" value="b"> <!-- Resposta correta -->
            </div>

            <!-- Pergunta 2 -->
            <div class="Jappergunta">
                <p><span class="dif-color">2.</span> Qual foi o principal motivo da imigração japonesa para o Brasil?</p>
                <input type="radio" name="Jappergunta2" value="a"> a) Fuga da guerra<br>
                <input type="radio" name="Jappergunta2" value="b"> b) Busca por novas oportunidades de trabalho<br>
                <input type="radio" name="Jappergunta2" value="c"> c) Fuga de desastres naturais<br>
                <input type="radio" name="Jappergunta2" value="d"> d) Troca cultural<br>
                <input type="radio" name="Jappergunta2" value="e"> e) Busca por riquezas minerais<br>
                <input type="hidden" id="Japresposta2" value="b"> <!-- Resposta correta -->
            </div>

            <!-- Pergunta 3 -->
            <div class="Jappergunta">
                <p><span class="dif-color">3.</span> Em qual estado brasileiro a maioria dos imigrantes japoneses se estabeleceu inicialmente?</p>
                <input type="radio" name="Jappergunta3" value="a"> a) São Paulo<br>
                <input type="radio" name="Jappergunta3" value="b"> b) Rio de Janeiro<br>
                <input type="radio" name="Jappergunta3" value="c"> c) Minas Gerais<br>
                <input type="radio" name="Jappergunta3" value="d"> d) Bahia<br>
                <input type="radio" name="Jappergunta3" value="e"> e) Amazonas<br>
                <input type="hidden" id="Japresposta3" value="a"> <!-- Resposta correta -->
            </div>

            <!-- Pergunta 4 -->
            <div class="Jappergunta">
                <p><span class="dif-color">4.</span> Qual é o nome do bairro em São Paulo que se tornou conhecido como "Pequeno Japão" devido à alta concentração de imigrantes japoneses?</p>
                <input type="radio" name="Jappergunta4" value="a"> a) Liberdade<br>
                <input type="radio" name="Jappergunta4" value="b"> b) Ibirapuera<br>
                <input type="radio" name="Jappergunta4" value="c"> c) Pinheiros<br>
                <input type="radio" name="Jappergunta4" value="d"> d) Tatuapé<br>
                <input type="radio" name="Jappergunta4" value="e"> e) Vila Madalena<br>
                <input type="hidden" id="Japresposta4" value="a"> <!-- Resposta correta -->
            </div>

            <!-- Pergunta 5 -->
            <div class="Jappergunta">
                <p><span class="dif-color">5.</span> A imigração japonesa influenciou a culinária brasileira. Qual prato tradicional brasileiro foi influenciado pelos japoneses?</p>
                <input type="radio" name="Jappergunta5" value="a"> a) Feijoada<br>
                <input type="radio" name="Jappergunta5" value="b"> b) Acarajé<br>
                <input type="radio" name="Jappergunta5" value="c"> c) Sushi<br>
                <input type="radio" name="Jappergunta5" value="d"> d) Coxinha<br>
                <input type="radio" name="Jappergunta5" value="e"> e) Churrasco<br>
                <input type="hidden" id="Japresposta5" value="c"> <!-- Resposta correta -->
            </div>

            <!-- Pergunta 6 -->
            <div class="Jappergunta">
                <p><span class="dif-color">6.</span> Qual foi o nome do navio que trouxe os primeiros imigrantes japoneses ao Brasil?</p>
                <input type="radio" name="Jappergunta6" value="a"> a) Kasato Maru<br>
                <input type="radio" name="Jappergunta6" value="b"> b) Sakura Maru<br>
                <input type="radio" name="Jappergunta6" value="c"> c) Fujiyama Maru<br>
                <input type="radio" name="Jappergunta6" value="d"> d) Yamato Maru<br>
                <input type="radio" name="Jappergunta6" value="e"> e) Nippon Maru<br>
                <input type="hidden" id="Japresposta6" value="a"> <!-- Resposta correta -->
            </div>

            <!-- Pergunta 7 -->
            <div class="Jappergunta">
                <p><span class="dif-color">7.</span> Qual evento importante marcou o centenário da imigração japonesa no Brasil em 2008?</p>
                <input type="radio" name="Jappergunta7" value="a"> a) Abertura do Museu da Imigração Japonesa<br>
                <input type="radio" name="Jappergunta7" value="b"> b) Visita do Imperador do Japão ao Brasil<br>
                <input type="radio" name="Jappergunta7" value="c"> c) Copa do Mundo de Futebol<br>
                <input type="radio" name="Jappergunta7" value="d"> d) Exposição de arte japonesa<br>
                <input type="radio" name="Jappergunta7" value="e"> e) Lançamento de um filme japonês no Brasil<br>
                <input type="hidden" id="Japresposta7" value="b"> <!-- Resposta correta -->
            </div>

            <!-- Pergunta 8 -->
            <div class="Jappergunta">
                <p><span class="dif-color">8.</span> Qual é a celebração japonesa tradicional que se tornou uma festa popular no Brasil, especialmente em São Paulo?</p>
                <input type="radio" name="Jappergunta8" value="a"> a) Hanami<br>
                <input type="radio" name="Jappergunta8" value="b"> b) Obon<br>
                <input type="radio" name="Jappergunta8" value="c"> c) Hinamatsuri<br>
                <input type="radio" name="Jappergunta8" value="d"> d) Tanabata<br>
                <input type="radio" name="Jappergunta8" value="e"> e) Gion Matsuri<br>
                <input type="hidden" id="Japresposta8" value="d"> <!-- Resposta correta -->
            </div>

            <!-- Pergunta 9 -->
            <div class="Jappergunta">
                <p><span class="dif-color">9.</span> Que importante contribuição cultural os japoneses trouxeram para o Brasil?</p>
                <input type="radio" name="Jappergunta9" value="a"> a) Samba<br>
                <input type="radio" name="Jappergunta9" value="b"> b) Carnaval<br>
                <input type="radio" name="Jappergunta9" value="c"> c) Bossa Nova<br>
                <input type="radio" name="Jappergunta9" value="d"> d) Haicai (poesia)<br>
                <input type="radio" name="Jappergunta9" value="e"> e) Fado<br>
                <input type="hidden" id="Japresposta9" value="d"> <!-- Resposta correta -->
            </div>

            <!-- Pergunta 10 -->
            <div class="Jappergunta">
                <p><span class="dif-color">10.</span> Quem foi a primeira geração de descendentes de imigrantes japoneses nascidos no Brasil?</p>
                <input type="radio" name="Jappergunta10" value="a"> a) Issei<br>
                <input type="radio" name="Jappergunta10" value="b"> b) Nisei<br>
                <input type="radio" name="Jappergunta10" value="c"> c) Sansei<br>
                <input type="radio" name="Jappergunta10" value="d"> d) Yonsei<br>
                <input type="radio" name="Jappergunta10" value="e"> e) Gosei<br>
                <input type="hidden" id="Japresposta10" value="b"> <!-- Resposta correta -->
            </div>
            <div id="resultado1">
                <h2>Resultado</h2>
                <p>Pontuação: <span id="pontuacao1">0</span></p>
            </div>
            <input class="btn-primary2" type="submit" value="Enviar" form="quizFormJap">
            <button class="btn-primary2" type="button" onclick="fecharQuestionario('quizFormJap');">Fechar</button>
        </form>
    </div>
    <form id="quizFormDum">    
    <div id="questionario2" class="quest2">
        <h2><span class="dif-color">150 anos de</span> Santos <span class="dif-color">Dumont</span></h2>
        <p>Bem-vindo a <span class="dif-color">segunda exposição</span> do nosso Museu Multitematico! Este questionário foi projetado para testar seus conhecimentos 
            sobre a história dos 150 anos de santos dumont no Brasil e da sua influência. </p>
            <!-- Pergunta 1 -->
        <div class="Dumpergunta">
            <p>1. Quando Santos Dumont completaria 150 anos?</p>
            <input type="radio" name="Dumpergunta1" value="a"> A) Em 1973.<br>
            <input type="radio" name="Dumpergunta1" value="b"> B) Em 1983.<br>
            <input type="radio" name="Dumpergunta1" value="c"> C) Em 2003.<br>
            <input type="radio" name="Dumpergunta1" value="d"> D) Em 2023.<br>
            <input type="hidden" id="Dumresposta1" value="d"> <!-- Resposta correta -->
        </div>

        <!-- Pergunta 2 -->
        <div class="Dumpergunta">
            <p>2. Qual foi o país de origem de Santos Dumont?</p>
            <input type="radio" name="Dumpergunta2" value="a"> A) Brasil.<br>
            <input type="radio" name="Dumpergunta2" value="b"> B) França.<br>
            <input type="radio" name="Dumpergunta2" value="c"> C) Estados Unidos.<br>
            <input type="radio" name="Dumpergunta2" value="d"> D) Portugal.<br>
            <input type="hidden" id="Dumresposta2" value="b"> <!-- Resposta correta -->
        </div>

        <!-- Pergunta 3 -->
        <div class="Dumpergunta">
            <p>3. Qual aeronave ficou famosa como um dos primeiros aviões a decolar, voar e aterrissar de forma controlada?</p>
            <input type="radio" name="Dumpergunta3" value="a"> A) Demoiselle.<br>
            <input type="radio" name="Dumpergunta3" value="b"> B) 14-Bis.<br>
            <input type="radio" name="Dumpergunta3" value="c"> C) Brésil.<br>
            <input type="radio" name="Dumpergunta3" value="d"> D) Wright Flyer.<br>
            <input type="hidden" id="Dumresposta3" value="b"> <!-- Resposta correta -->
        </div>

        <!-- Pergunta 4 -->
        <div class="Dumpergunta">
            <p>4. Qual prêmio Santos Dumont ganhou após voar com sucesso o 14-Bis?</p>
            <input type="radio" name="Dumpergunta4" value="a"> A) Prêmio Nobel de Física.<br>
            <input type="radio" name="Dumpergunta4" value="b"> B) Prêmio Deutsch de la Meurthe.<br>
            <input type="radio" name="Dumpergunta4" value="c"> C) Prêmio Oscar.<br>
            <input type="radio" name="Dumpergunta4" value="d"> D) Prêmio Pulitzer.<br>
            <input type="hidden" id="Dumresposta4" value="b"> <!-- Resposta correta -->
        </div>

        <!-- Pergunta 5 -->
        <div class="Dumpergunta">
            <p>5. Além da aviação, qual outra área Santos Dumont teve interesse e contribuições notáveis?</p>
            <input type="radio" name="Dumpergunta5" value="a"> A) Literatura.<br>
            <input type="radio" name="Dumpergunta5" value="b"> B) Astronomia.<br>
            <input type="radio" name="Dumpergunta5" value="c"> C) Música.<br>
            <input type="radio" name="Dumpergunta5" value="d"> D) Relojoaria.<br>
            <input type="hidden" id="Dumresposta5" value="d"> <!-- Resposta correta -->
        </div>

        <!-- Pergunta 6 -->
        <div class="Dumpergunta">
            <p>6. Qual foi a última cidade onde Santos Dumont viveu antes de sua morte?</p>
            <input type="radio" name="Dumpergunta6" value="a"> A) Paris, França.<br>
            <input type="radio" name="Dumpergunta6" value="b"> B) Guarujá, Brasil.<br>
            <input type="radio" name="Dumpergunta6" value="c"> C) Nova York, Estados Unidos.<br>
            <input type="radio" name="Dumpergunta6" value="d"> D) Londres, Reino Unido.<br>
            <input type="hidden" id="Dumresposta6" value="b"> <!-- Resposta correta -->
        </div>

        <!-- Pergunta 7 -->
        <div class="Dumpergunta">
            <p>7. Santos Dumont é considerado um herói nacional em qual país?</p>
            <input type="radio" name="Dumpergunta7" value="a"> A) Brasil.<br>
            <input type="radio" name="Dumpergunta7" value="b"> B) França.<br>
            <input type="radio" name="Dumpergunta7" value="c"> C) Estados Unidos.<br>
            <input type="radio" name="Dumpergunta7" value="d"> D) Portugal.<br>
            <input type="hidden" id="Dumresposta7" value="a"> <!-- Resposta correta -->
        </div>
        <!-- Pergunta 8 -->
        <div class="Dumpergunta">
            <p>8. Qual foi a principal contribuição de Santos Dumont para o controle das aeronaves?</p>
            <input type="radio" name="Dumpergunta8" value="a"> A) Criação do motor a jato.<br>
            <input type="radio" name="Dumpergunta8" value="b"> B) Uso de catapultas para decolagem.<br>
            <input type="radio" name="Dumpergunta8" value="c"> C) Desenvolvimento de ailerons para controle de roll.<br>
            <input type="radio" name="Dumpergunta8" value="d"> D) Invenção do paraquedas.<br>
            <input type="hidden" id="Dumresposta8" value="c"> <!-- Resposta correta -->
        </div>

        <!-- Pergunta 9 -->
        <div class="Dumpergunta">
            <p>9. Que tipo de aeronave Santos Dumont projetou em 1907, que foi uma das primeiras aeronaves de produção em série do mundo?</p>
            <input type="radio" name="Dumpergunta9" value="a"> A) Helicóptero.<br>
            <input type="radio" name="Dumpergunta9" value="b"> B) Monomotor.<br>
            <input type="radio" name="Dumpergunta9" value="c"> C) Biplano.<br>
            <input type="radio" name="Dumpergunta9" value="d"> D) Demoiselle.<br>
            <input type="hidden" id="Dumresposta9" value="d"> <!-- Resposta correta -->
        </div>

        <!-- Pergunta 10 -->
        <div class="Dumpergunta">
            <p>10. Qual foi o apelido de Santos Dumont dado à aeronave Demoiselle?</p>
            <input type="radio" name="Dumpergunta10" value="a"> A) Libélula.<br>
            <input type="radio" name="Dumpergunta10" value="b"> B) Águia.<br>
            <input type="radio" name="Dumpergunta10" value="c"> C) Falcão.<br>
            <input type="radio" name="Dumpergunta10" value="d"> D) Abutre.<br>
            <input type="hidden" id="Dumresposta10" value="a"> <!-- Resposta correta -->
        </div>
        <div id="resultado2">
                <h2>Resultado</h2>
                <p>Pontuação: <span id="pontuacao2">0</span></p>
            </div>
            <input class="btn-primary2" type="submit" value="Enviar" form="quizFormDum">
            <button class="btn-primary2" onclick="fecharQuestionario('quizFormDum');">Fechar</button>
        </form>
    </div>    
    <form id="quizFormArt">
    <div id="questionario3" class="quest3">
        <h2><span class="dif-color">100 anos da</span> Artes <span class="dif-color">Moderna</span></h2>
        <p>Bem-vindo a <span class="dif-color">terceira exposição</span> do nosso Museu Multitemático! Este questionário foi projetado para testar seus conhecimentos 
            sobre a história dos 100 anos da arte moderna.</p>
           <!-- Pergunta 1 -->
        <div class="Artpergunta">
            <p><span class="dif-color">1.</span> Quando Santos Dumont completaria 150 anos?</p>
            <input type="radio" name="Artpergunta1" value="a"> A) Em 1973.<br>
            <input type="radio" name="Artpergunta1" value="b"> B) Em 1983.<br>
            <input type="radio" name="Artpergunta1" value="c"> C) Em 2003.<br>
            <input type="radio" name="Artpergunta1" value="d"> D) Em 2023.<br>
            <input type="hidden" id="Artresposta1" value="d"> <!-- Resposta correta -->
        </div>

        <!-- Pergunta 2 -->
        <div class="ArtArtpergunta">
            <p><span class="dif-color">2.</span> Qual foi o país de origem de Santos Dumont?</p>
            <input type="radio" name="ArtArtpergunta2" value="a"> A) Brasil.<br>
            <input type="radio" name="ArtArtpergunta2" value="b"> B) França.<br>
            <input type="radio" name="ArtArtpergunta2" value="c"> C) Estados Unidos.<br>
            <input type="radio" name="ArtArtpergunta2" value="d"> D) Portugal.<br>
            <input type="hidden" id="ArtArtresposta2" value="b"> <!-- Resposta correta -->
        </div>

        <!-- Pergunta 3 -->
        <div class="Artpergunta">
            <p><span class="dif-color">3.</span> Qual aeronave ficou famosa como um dos primeiros aviões a decolar, voar e aterrissar de forma controlada?</p>
            <input type="radio" name="Artpergunta3" value="a"> A) Demoiselle.<br>
            <input type="radio" name="Artpergunta3" value="b"> B) 14-Bis.<br>
            <input type="radio" name="Artpergunta3" value="c"> C) Brésil.<br>
            <input type="radio" name="Artpergunta3" value="d"> D) Wright Flyer.<br>
            <input type="hidden" id="Artresposta3" value="b"> <!-- Resposta correta -->
        </div>

        <!-- Pergunta 4 -->
        <div class="Artpergunta">
            <p><span class="dif-color">4.</span> Qual prêmio Santos Dumont ganhou após voar com sucesso o 14-Bis?</p>
            <input type="radio" name="Artpergunta4" value="a"> A) Prêmio Nobel de Física.<br>
            <input type="radio" name="Artpergunta4" value="b"> B) Prêmio Deutsch de la Meurthe.<br>
            <input type="radio" name="Artpergunta4" value="c"> C) Prêmio Oscar.<br>
            <input type="radio" name="Artpergunta4" value="d"> D) Prêmio Pulitzer.<br>
            <input type="hidden" id="Artresposta4" value="b"> <!-- Resposta correta -->
        </div>

        <!-- Pergunta 5 -->
        <div class="Artpergunta">
            <p><span class="dif-color">5.</span> Além da aviação, qual outra área Santos Dumont teve interesse e contribuições notáveis?</p>
            <input type="radio" name="Artpergunta5" value="a"> A) Literatura.<br>
            <input type="radio" name="Artpergunta5" value="b"> B) Astronomia.<br>
            <input type="radio" name="Artpergunta5" value="c"> C) Música.<br>
            <input type="radio" name="Artpergunta5" value="d"> D) Relojoaria.<br>
            <input type="hidden" id="Artresposta5" value="d"> <!-- Resposta correta -->
        </div>

        <!-- Pergunta 6 -->
        <div class="Artpergunta">
            <p><span class="dif-color">6.</span> Qual foi a última cidade onde Santos Dumont viveu antes de sua morte?</p>
            <input type="radio" name="Artpergunta6" value="a"> A) Paris, França.<br>
            <input type="radio" name="Artpergunta6" value="b"> B) Guarujá, Brasil.<br>
            <input type="radio" name="Artpergunta6" value="c"> C) Nova York, Estados Unidos.<br>
            <input type="radio" name="Artpergunta6" value="d"> D) Londres, Reino Unido.<br>
            <input type="hidden" id="Artresposta6" value="b"> <!-- Resposta correta -->
        </div>

        <!-- Pergunta 7 -->
        <div class="Artpergunta">
            <p><span class="dif-color">7.</span> Santos Dumont é considerado um herói nacional em qual país?</p>
            <input type="radio" name="Artpergunta7" value="a"> A) Brasil.<br>
            <input type="radio" name="Artpergunta7" value="b"> B) França.<br>
            <input type="radio" name="Artpergunta7" value="c"> C) Estados Unidos.<br>
            <input type="radio" name="Artpergunta7" value="d"> D) Portugal.<br>
            <input type="hidden" id="Artresposta7" value="a"> <!-- Resposta correta -->
        </div>

        <!-- Pergunta 8 -->
        <div class="Artpergunta">
            <p><span class="dif-color">8.</span> Qual foi a principal contribuição de Santos Dumont para o controle das aeronaves?</p>
            <input type="radio" name="Artpergunta8" value="a"> A) Criação do motor a jato.<br>
            <input type="radio" name="Artpergunta8" value="b"> B) Uso de catapultas para decolagem.<br>
            <input type="radio" name="Artpergunta8" value="c"> C) Desenvolvimento de ailerons para controle de roll.<br>
            <input type="radio" name="Artpergunta8" value="d"> D) Invenção do paraquedas.<br>
            <input type="hidden" id="Artresposta8" value="c"> <!-- Resposta correta -->
        </div>

        <!-- Pergunta 9 -->
        <div class="Artpergunta">
            <p><span class="dif-color">9.</span> Qual instituição de ensino teve um papel importante na formação de artistas influentes da arte moderna?</p>
            <input type="radio" name="Artpergunta9" value="a"> a) Museu do Louvre<br>
            <input type="radio" name="Artpergunta9" value="b"> b) Museu de Arte Moderna de Nova York<br>
            <input type="radio" name="Artpergunta9" value="c"> c) Academia de Belas Artes de Veneza<br>
            <input type="radio" name="Artpergunta9" value="d"> d) Bauhaus<br>
            <input type="hidden" id="Artresposta9" value="d"> <!-- Resposta correta -->
        </div>
        <!-- Pergunta 10 -->
        <div class="Artpergunta">
            <p><span class="dif-color">10.</span> Qual movimento artístico foi marcado pela ênfase na abstração e na ausência de representação figurativa?</p>
            <input type="radio" name="Artpergunta10" value="a"> a) Impressionismo<br>
            <input type="radio" name="Artpergunta10" value="b"> b) Fauvismo<br>
            <input type="radio" name="Artpergunta10" value="c"> c) Abstracionismo<br>
            <input type="radio" name="Artpergunta10" value="d"> d) Cubismo<br>
            <input type="hidden" id="Artresposta10" value="c"> <!-- Resposta correta -->
        </div>
        <div id="resultado3">
                <h2>Resultado</h2>
                <p>Pontuação: <span id="pontuacao3">0</span></p>
            </div>
            <input class="btn-primary2" type="submit" value="Enviar" form="quizFormArt">
            <button class="btn-primary2" onclick="fecharQuestionario('quizFormArt')">Fechar</button>
        </form>
    </div>
    <form id="quizFormPar">    
    <div id="questionario4" class="quest4">
    <h2>Jogos Olímpicos de <span class="dif-color">Paris 2024</span></h2>
    <p>Bem-vindo a <span class="dif-color">terceira exposição</span> do nosso Museu Multitemático! Este questionário foi projetado para 
    testar seus conhecimentos sobre a história dos 100 anos da arte moderna.</p>
    <div class="Parpergunta">
            <p><span class="dif-color">1.</span> Em que ano ocorreram os Jogos Olímpicos de Paris?</p>
            <input type="radio" name="Parpergunta1" value="a"> a) 1904<br>
            <input type="radio" name="Parpergunta1" value="b"> b) 1924<br>
            <input type="radio" name="Parpergunta1" value="c"> c) 1932<br>
            <input type="radio" name="Parpergunta1" value="d"> d) 1984<br>
            <input type="hidden" id="Parresposta1" value="b"> <!-- Resposta correta -->
        </div>

        <div class="Parpergunta">
            <p><span class="dif-color">2.</span> Qual foi o primeiro país a sediar os Jogos Olímpicos de Paris?</p>
            <input type="radio" name="Parpergunta2" value="a"> a) Estados Unidos<br>
            <input type= "radio" name="Parpergunta2" value="b"> b) França<br>
            <input type="radio" name="Parpergunta2" value="c"> c) Alemanha<br>
            <input type="radio" name="Parpergunta2" value="d"> d) Reino Unido<br>
            <input type="hidden" id="Parresposta2" value="b"> <!-- Resposta correta -->
        </div>

        <div class="Parpergunta">
            <p><span class="dif-color">3.</span> Quantos países participaram dos Jogos Olímpicos de Paris?</p>
            <input type="radio" name="Parpergunta3" value="a"> a) 37<br>
            <input type="radio" name="Parpergunta3" value="b"> b) 52<br>
            <input type="radio" name="Parpergunta3" value="c"> c) 65<br>
            <input type="radio" name="Parpergunta3" value="d"> d) 78<br>
            <input type="hidden" id="Parresposta3" value="b"> <!-- Resposta correta -->
        </div>

        <div class="Parpergunta">
            <p><span class="dif-color">4.</span> Em qual local foram realizadas as cerimônias de abertura e encerramento dos Jogos Olímpicos de Paris?</p>
            <input type="radio" name="Parpergunta4" value="a"> a) Estádio Olímpico de Paris<br>
            <input type="radio" name="Parpergunta4" value="b"> b) Torre Eiffel<br>
            <input type="radio" name="Parpergunta4" value="c"> c) Museu do Louvre<br>
            <input type="radio" name="Parpergunta4" value="d"> d) Champs-Élysées<br>
            <input type="hidden" id="Parresposta4" value="b"> <!-- Resposta correta -->
        </div>

        <div class="Parpergunta">
            <p><span class="dif-color">5.</span> Quantas modalidades esportivas foram disputadas nos Jogos Olímpicos de Paris?</p>
            <input type="radio" name="Parpergunta5" value="a"> a) 22<br>
            <input type="radio" name="Parpergunta5" value="b"> b) 30<br>
            <input type="radio" name="Parpergunta5" value="c"> c) 37<br>
            <input type="radio" name="Parpergunta5" value="d"> d) 42<br>
            <input type="hidden" id="Parresposta5" value="d"> <!-- Resposta correta -->
        </div>

        <div class="Parpergunta">
            <p><span class="dif-color">6.</span> Quem foi o país com o maior número de medalhas nos Jogos Olímpicos de Paris?</p>
            <input type="radio" name="Parpergunta6" value="a"> a) Estados Unidos<br>
            <input type="radio" name="Parpergunta6" value="b"> b) França<br>
            <input type="radio" name="Parpergunta6" value="c"> c) Reino Unido<br>
            <input type="radio" name="Parpergunta6" value="d"> d) Reino Unido<br>
            <input type="hidden" id="Parresposta6" value="a"> <!-- Resposta correta -->
        </div>

        <div class="Parpergunta">
            <p><span class="dif-color">7.</span> Qual foi a modalidade esportiva em que a França conquistou o maior número de medalhas de ouro nos Jogos de Paris?</p>
            <input type="radio" name="Parpergunta7" value="a"> a) Natação<br>
            <input type="radio" name="Parpergunta7" value="b"> b) Atletismo<br>
            <input type="radio" name="Parpergunta7" value="c"> c) Esgrima<br>
            <input type="radio" name="Parpergunta7" value="d"> d) Ciclismo<br>
            <input type="hidden" id="Parresposta7" value="c"> <!-- Resposta correta -->
        </div>

        <div class="Parpergunta">
            <p><span class="dif-color">8.</span> Qual foi o primeiro atleta negro a vencer uma prova de atletismo nos Jogos Olímpicos de Paris?</p>
            <input type="radio" name="Parpergunta8" value="a"> a) Jesse Owens<br>
            <input type="radio" name="Parpergunta8" value="b"> b) Usain Bolt<br>
            <input type="radio" name="Parpergunta8" value="c"> c) Carl Lewis<br>
            <input type="radio" name="Parpergunta8" value="d"> d) DeHart Hubbard<br>
            <input type="hidden" id="Parresposta8" value="d"> <!-- Resposta correta -->
        </div>

        <div class="Parpergunta">
            <p><span class="dif-color">9.</span> Qual foi o mascote oficial dos Jogos Olímpicos de Paris?</p>
            <input type="radio" name="Parpergunta9" value="a"> a) Coubertin<br>
            <input type="radio" name="Parpergunta9" value="b"> b) Amik<br>
            <input type="radio" name="Parpergunta9" value="c"> c) Remi<br>
            <input type="radio" name="Parpergunta9" value="d"> d) Misha<br>
            <input type="hidden" id="Parresposta9" value="b"> <!-- Resposta correta -->
        </div>
        <div class="Parpergunta">
            <p><span class="dif-color">10.</span> Qual foi o lema dos Jogos Olímpicos de Paris?</p>
            <input type="radio" name="Parpergunta10" value="a"> a) Mais rápido, mais alto, mais forte<br>
            <input type="radio" name="Parpergunta10" value="b"> b) Citius, altius, fortius<br>
            <input type="radio" name="Parpergunta10" value="c"> c) Inspire a generation<br>
            <input type="radio" name="Parpergunta10" value="d"> d) Live your passion<br>
            <input type="hidden" id="Parresposta10" value="a"> <!-- Resposta correta -->
        </div>
        <div id="resultado4">
            <h2>Resultado</h2>
            <p>Pontuação: <span id="pontuacao4">0</span></p>
        </div>
            <input class="btn-primary2" type="submit" value="Enviar" form="quizFormPar">
            <button class="btn-primary2" onclick="fecharQuestionario('quizFormPar')">Fechar</button>
        </form>
    </div>
    <script>
        function verificarCodigo() {
            var codigoInserido = document.getElementById("codigoInput").value;
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "cod2js.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var response = xhr.responseText;
                    if (response === "true") {
                        // Se o código for válido, exiba o questionário
                        document.getElementById("container2").style.display = "none";
                        document.getElementById("questBut").style.display = "block";
                    } else {
                        document.getElementById("erro").style.display = "block";
                    }
                }
            };
            xhr.send("codigo_acesso=" + codigoInserido);
        }
            function calcularPontuacao(formId, resultadoId, respostasCorretas) {
        var form = document.getElementById(formId);
        var resultado = document.getElementById(resultadoId);
        var inputs = form.querySelectorAll('input[type="radio"]:checked');
        var pontuacao = 0;

        for (var i = 0; i < inputs.length; i++) {
            var input = inputs[i];
            var perguntaId = input.name;
            var respostaSelecionada = input.value;
            var respostaCorreta = respostasCorretas[perguntaId];

            if (respostaSelecionada === respostaCorreta) {
                pontuacao++;
            }
        }

    resultado.querySelector('span').textContent = pontuacao;
    resultado.style.display = "block";
        }

        document.getElementById("quizFormJap").addEventListener("submit", function (event) {
            event.preventDefault();
            var respostasCorretas = {
                "Jappergunta1": "b",
                "Jappergunta2": "b",
                "Jappergunta3": "a",
                "Jappergunta4": "a",
                "Jappergunta5": "c",
                "Jappergunta6": "a",
                "Jappergunta7": "b",
                "Jappergunta8": "d",
                "Jappergunta9": "d",
                "Jappergunta10": "b"
            };
            calcularPontuacao("quizFormJap", "resultado1", respostasCorretas);
        });

        document.getElementById("quizFormDum").addEventListener("submit", function (event) {
            event.preventDefault();
            var respostasCorretas = {
                "Dumpergunta1": "d",
                "Dumpergunta2": "b",
                "Dumpergunta3": "b",
                "Dumpergunta4": "b",
                "Dumpergunta5": "d",
                "Dumpergunta6": "b",
                "Dumpergunta7": "a",
                "Dumpergunta8": "c",
                "Dumpergunta9": "d",
                "Dumpergunta10": "a"
            };
            calcularPontuacao("quizFormDum", "resultado2", respostasCorretas);
        });

        document.getElementById("quizFormArt").addEventListener("submit", function (event) {
            event.preventDefault();
            var respostasCorretas = {
                "Artpergunta1": "d",
                "Artpergunta2": "b",
                "Artpergunta3": "b",
                "Artpergunta4": "b",
                "Artpergunta5": "d",
                "Artpergunta6": "b",
                "Artpergunta7": "a",
                "Artpergunta8": "c",
                "Artpergunta9": "d",
                "Artpergunta10": "c"
            };
            calcularPontuacao("quizFormArt", "resultado3", respostasCorretas);
        });
        document.getElementById("quizFormPar").addEventListener("submit", function (event) {
        event.preventDefault();
        var respostasCorretas = {
            "Parpergunta1": "c",
            "Parpergunta2": "d",
            "Parpergunta3": "a",
            "Parpergunta4": "a",
            "Parpergunta5": "d",
            "Parpergunta6": "a",
            "Parpergunta7": "b",
            "Parpergunta8": "a",
            "Parpergunta9": "c",
            "Parpergunta10": "a"
        };
        calcularPontuacao("quizFormPar", "resultado4", respostasCorretas);
    });
        function exibirQuestionario(id) {
        // Oculta todos os questionários
        var questionarios = document.querySelectorAll('.questionario'); // Adicione o ponto antes de 'questionario'
        questionarios.forEach(function (questionario) {
            questionario.style.display = 'none';
        });

        // Exibe o questionário com o ID especificado
        var questionario = document.getElementById(id);
        if (questionario) {
            questionario.style.display = 'block';
        }
    }

        
        function fecharQuestionario(formularioNome) {
        // Oculte o formulário do questionário específico
        var formulario = document.getElementById(formularioNome);
        if (formulario) {
            formulario.style.display = "none";
        }

        // Adicione aqui a lógica adicional para exibir uma mensagem de conclusão, por exemplo.
    }

    </script>
</body>
</html>
