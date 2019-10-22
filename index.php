<?php
    function criarCard($link,$nome){
        return '<div class="card"><div class="layer"></div><div class="conteudo"><div class="imagem"><a><img src="'.$link.'" alt="'.$nome.'"></a></div><br></div></div>';
    }
    function tabela(){
    $op = ["Filmes","Dublados","Mangas","Manhwas"];
    return $op[rand(0,count($op)- 1)];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AniBook - Seu livro de animes online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A AniBook é uma webpage que buscas comentar diversos animes e mangás apresentando a sinopse, personagens e uma avalição sobre o que achamos da obra">
    <link rel="icon" href="imagens/Anibook.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/nav.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
</head>
<body>
    <header>
        <div class="logo"><a href="index.php" title="Home">AniBook</a></div>
        <nav>
        <ul>
            <li><a id="btnNoturno" alt="Modo Noturno"><span id="notuno"></span></a></li>
        </ul>
        </nav>
        <div class="menu" alt="Menu"><i class="fas fa-bars"></i></div>
    </header>
    <main>
        <h1 class="tituloH1">AniBook</h1>
        <div class="slide">
            <a><img src="https://images8.alphacoders.com/707/thumb-1920-707447.png" alt="Boku no Hero Academia"></a>
            <a><img src="https://static.zerochan.net/Seitokai.Yakuindomo.full.920804.jpg" alt="Seitokai Yakuindomo"></a>
            <a><img src="https://images4.alphacoders.com/720/720951.jpg" alt="Sword Art Online"></a>
        </div>
        <div class="cards">
            <div class="card">
                <div class="layer"></div>
                <div class="conteudo">
                    <div class="imagem"><a href=""><img src="https://images8.alphacoders.com/707/thumb-1920-707447.png" alt="Boku no Hero Academia"></a></div>
                    <br>
                </div>
            </div>

            <div class="card">
                <div class="layer"></div>
                <div class="conteudo">
                    <div class="imagem"><a href=""><img src="https://images4.alphacoders.com/720/720951.jpg" alt="Sword Art Online"></a></div>
                    <br>
                </div>
            </div>

            <div class="card">
                <div class="layer"></div>
                <div class="conteudo">
                    <div class="imagem"><a href=""><img src="https://static.zerochan.net/Seitokai.Yakuindomo.full.920804.jpg" alt="Seitokai Yakuindomo"></a></div>
                    <br>
                </div>
            </div>
        </div>
    </main>    
    <footer>
        <div class="rodape">
            <span></span>
        </div>
    </footer>
    
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/main.js"></script>
</body>
</html>