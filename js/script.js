document.addEventListener("DOMContentLoaded", function() {
    const menuToggle = document.getElementById("menu-toggle");
    const menu = document.querySelector(".menu ul");

    menuToggle.addEventListener("click", function() {
        menu.classList.toggle("show-menu");
    });
});

// Defina um objeto que mapeia as informações das imagens
const imagensInfo = {
    1: {
        imagem: "imagens/jap.jpg",
        titulo: '115 anos da Imigração Japonesa no Brasil',
        texto: `No Brasil, a imigração japonesa é um capítulo importante da história do país. Ela teve início em 1908, 
        quando os primeiros imigrantes japoneses chegaram ao Brasil. Inicialmente, a maioria deles foi destinada ao 
        trabalho nas plantações de café no estado de São Paulo, mas ao longo do tempo, muitos se espalharam por 
        diferentes regiões do país. A imigração japonesa trouxe uma influência cultural significativa para o Brasil, 
        contribuindo com sua culinária, tradições e artes. Além disso, os descendentes de japoneses desempenharam papéis 
        importantes na sociedade brasileira, incluindo nas áreas de agricultura, indústria, comércio e cultura. Hoje, 
        a comunidade japonesa no Brasil é uma parte integrante da diversidade étnica e cultural do país, e sua contribuição 
        para a sociedade brasileira é valorizada e reconhecida. A imigração japonesa é um exemplo de como a cultura e a 
        história de diferentes povos se entrelaçam para enriquecer a identidade de uma nação.`
    },
    2: {
        imagem: "imagens/santdu.jpg",
        titulo: '150 anos de Santos Dumont',
        texto: `Alberto Santos Dumont, também conhecido como "O Pai da Aviação", foi um inventor e pioneiro da aviação brasileiro. 
        Nascido em 1873 em Minas Gerais, Santos Dumont é conhecido por seus vários experimentos com balões e aeronaves no início do 
        século XX. Seu avião 14-bis é reconhecido internacionalmente como o primeiro avião a decolar, voar e pousar com um motor a 
        gasolina. Sua dedicação à aviação e suas contribuições significativas ajudaram a pavimentar o caminho para a aviação moderna.`
    },
    3: {
        imagem: "imagens/tar.jpg",
        titulo: '100 anos da Arte Moderna',
        texto: `A Arte Moderna foi um movimento artístico que se desenvolveu no final do século XIX e início do século XX, marcando uma 
        ruptura com as convenções artísticas tradicionais. Caracterizada pela experimentação, abstração e uma rejeição das formas 
        artísticas convencionais, a Arte Moderna deu origem a diversas correntes, como o Cubismo, o Surrealismo e o Expressionismo. 
        Artistas como Pablo Picasso, Wassily Kandinsky e Salvador Dalí são figuras icônicas desse movimento, que teve um impacto 
        duradouro na arte contemporânea.`
    },
    4: {
        imagem: "imagens/2024.jpg",
        titulo: 'Jogos Olímpicos de Paris 2024',
        texto: `Os Jogos Olímpicos de Paris 2024 estão programados para serem realizados na capital da França. Este evento esportivo de 
        prestígio acontecerá entre julho e agosto de 2024 e reunirá atletas de todo o mundo em competições emocionantes. Paris, com sua 
        rica história e cultura, oferece um cenário espetacular para os Jogos Olímpicos, que incluirão uma variedade de esportes, desde 
        atletismo e natação até esportes radicais e muito mais. Os Jogos Olímpicos de Paris 2024 prometem ser uma celebração global do 
        esporte e da diversidade cultural.`
    }
};

// Função para mostrar a imagem e o texto ao lado direito
function mostrarQuadradosGrandes(id) {
    const quadradoGrande = document.getElementById("quadrado-grande");
    const imagemGrande = document.getElementById("imagem-grande");
    const textoGrande = document.getElementById("texto-grande");
    const tituloGrande = document.getElementById("titulo-grande");
    

    // Verifique se as informações estão disponíveis no objeto
    if (imagensInfo[id]) {
        const info = imagensInfo[id];
        imagemGrande.src = info.imagem;
        textoGrande.textContent = info.texto;
        tituloGrande.textContent = info.titulo; // Configura o título do quadrado grande
        // Exiba o quadrado grande
        quadradoGrande.style.display = "flex";
        
    }
}

// Função para fechar o quadrado grande
function fecharQuadradoGrande() {
    const quadradoGrande = document.getElementById("quadrado-grande");

    // Oculte o quadrado grande
    quadradoGrande.style.display = "none";
}