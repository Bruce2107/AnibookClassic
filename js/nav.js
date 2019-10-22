pag = window.location.pathname
if(pag == "/" || pag == "/index.php"){
    let ordem1 = '<li><a href="index.php" title="Home" alt="Home"><i class="fas fa-home"></i></a></li><li class="sub"><a title="Animes" alt="Animes"><i class="fas fa-tv"></i></a><ul class="drop-menu"><li><a href="paginas/dublados.php">dublados</a></li><li><a href="paginas/filmes.php">filmes</a></li><li><a href="paginas/legendados.php">legendados</a></li></ul></li><li class="sub"><a title="Mangás" alt="MaNgás"><i class="fas fa-book-open"></i></a><ul class="drop-menu"><li><a href="paginas/mangas.php">Mangas</a></li><li><a href="paginas/manhwas.php">Manhwas</a></li><li><a href="paginas/novels.php">Novels</a></li></ul></li><li class="sub search"><a title="Pesquisar" alt="Pesquisar"><i class="fas fa-search"></i></a><ul class="drop-menu"><li id="form"><input type="search" id="pesquisa"></li></ul></li><li><a href="https://www.facebook.com/AniBookOficial/" target="blank" title="Facebook" alt="Facebook"><i class="fab fa-facebook"></i></a></li><li><a href="https://twitter.com/AniBookOficial" target="blank" title="Twitter" alt="Twitter"><i class="fab fa-twitter"></i></a></li><li><a href="https://discord.gg/TsuMHBd" target="blank" title="Discord" alt="Discord"><i class="fab fa-discord"></i></a></li>'
    let ordem2 = '<li><a href="index.php" title="Home" alt="Home"><i class="fas fa-home"></i></a></li><li class="sub"><a title="Animes" alt="Animes"><i class="fas fa-tv"></i></a><ul class="drop-menu"><li><a href="paginas/dublados.php">dublados</a></li><li><a href="paginas/filmes.php">filmes</a></li><li><a href="paginas/legendados.php">legendados</a></li></ul></li><li class="sub"><a title="Mangás" alt="Mangás"><i class="fas fa-book-open"></i></a><ul class="drop-menu"><li><a href="paginas/mangas.php">Mangas</a></li><li><a href="paginas/manhwas.php">Manhwas</a></li><li><a href="paginas/novels.php">Novels</a></li></ul></li><li><a href="https://www.facebook.com/AniBookOficial/" target="blank" title="Facebook" alt="Facebook"><i class="fab fa-facebook"></i></a></li><li><a href="https://twitter.com/AniBookOficial" target="blank" title="Twitter" alt="Twitter"><i class="fab fa-twitter"></i></a></li><li><a href="https://discord.gg/TsuMHBd" target="blank" title="Discord" alt="Discord"><i class="fab fa-discord"></i></a></li><li class="sub search"><a title="Pesquisar" alt="Pesquisar"><i class="fas fa-search"></i></a><ul class="drop-menu"><li id="form"><input type="search" id="pesquisa"></li></ul></li>'
    if(window.innerWidth < 992)
        //alert("q")
        $('header nav ul').prepend(ordem1)
    else
        //alert("Q")
        $('header nav ul').prepend(ordem2)
}
else{
    let ordem1 = '<li><a href="../index.php" title="Home" alt="Home"><i class="fas fa-home"></i></a></li><li class="sub"><a title="Animes" alt="Animes"><i class="fas fa-tv"></i></a><ul class="drop-menu"><li><a href="dublados.php">dublados</a></li><li><a href="filmes.php">filmes</a></li><li><a href="legendados.php">legendados</a></li></ul></li><li class="sub"><a title="Mangás" alt="MaNgás"><i class="fas fa-book-open"></i></a><ul class="drop-menu"><li><a href="mangas.php">Mangas</a></li><li><a href="manhwas.php">Manhwas</a></li><li><a href="novels.php">Novels</a></li></ul></li><li class="sub search"><a title="Pesquisar" alt="Pesquisar"><i class="fas fa-search"></i></a><ul class="drop-menu"><li id="form"><input type="search" id="pesquisa"></li></ul></li><li><a href="https://www.facebook.com/AniBookOficial/" target="blank" title="Facebook" alt="Facebook"><i class="fab fa-facebook"></i></a></li><li><a href="https://twitter.com/AniBookOficial" target="blank" title="Twitter" alt="Twitter"><i class="fab fa-twitter"></i></a></li><li><a href="https://discord.gg/TsuMHBd" target="blank" title="Discord" alt="Discord"><i class="fab fa-discord"></i></a></li>'
    let ordem2 = '<li><a href="../index.php" title="Home" alt="Home"><i class="fas fa-home"></i></a></li><li class="sub"><a title="Animes" alt="Animes"><i class="fas fa-tv"></i></a><ul class="drop-menu"><li><a href="dublados.php">dublados</a></li><li><a href="filmes.php">filmes</a></li><li><a href="legendados.php">legendados</a></li></ul></li><li class="sub"><a title="Mangás" alt="Mangás"><i class="fas fa-book-open"></i></a><ul class="drop-menu"><li><a href="mangas.php">Mangas</a></li><li><a href="manhwas.php">Manhwas</a></li><li><a href="novels.php">Novels</a></li></ul></li><li><a href="https://www.facebook.com/AniBookOficial/" target="blank" title="Facebook" alt="Facebook"><i class="fab fa-facebook"></i></a></li><li><a href="https://twitter.com/AniBookOficial" target="blank" title="Twitter" alt="Twitter"><i class="fab fa-twitter"></i></a></li><li><a href="https://discord.gg/TsuMHBd" target="blank" title="Discord" alt="Discord"><i class="fab fa-discord"></i></a></li><li class="sub search"><a title="Pesquisar" alt="Pesquisar"><i class="fas fa-search"></i></a><ul class="drop-menu"><li id="form"><input type="search" id="pesquisa"></li></ul></li>'
    if(window.innerWidth < 992)
        //alert('a')
        $('header nav ul').prepend(ordem1)
    else
        //alert("A")
        $('header nav ul').prepend(ordem2)
}
/*let ordem1 = '<li><a href="main.php" title="Home" alt="Home"><i class="fas fa-home"></i></a></li><li class="sub"><a title="Animes" alt="Animes"><i class="fas fa-tv"></i></a><ul class="drop-menu"><li><a href="dublados.php">dublados</a></li><li><a href="filmes.php">filmes</a></li><li><a href="legendados.php">legendados</a></li></ul></li><li class="sub"><a title="Mangás" alt="Mnagás"><i class="fas fa-book-open"></i></a><ul class="drop-menu"><li><a href="mangas.php">Mangas</a></li><li><a href="manhwas.php">Manhwas</a></li><li><a href="novels.php">Novels</a></li></ul></li><li class="sub search"><a title="Pesquisar" alt="Pesquisar"><i class="fas fa-search"></i></a><ul class="drop-menu"><li id="form"><input type="search" id="pesquisa"></li></ul></li><li><a href="https://www.facebook.com/AniBookOficial/" target="blank" title="Facebook" alt="Facebook"><i class="fab fa-facebook"></i></a></li><li><a href="https://twitter.com/AniBookOficial" target="blank" title="Twitter" alt="Twitter"><i class="fab fa-twitter"></i></a></li><li><a href="https://discord.gg/TsuMHBd" target="blank" title="Discord" alt="Discord"><i class="fab fa-discord"></i></a></li>'
let ordem2 = '<li><a href="main.php" title="Home" alt="Home"><i class="fas fa-home"></i></a></li><li class="sub"><a title="Animes" alt="Animes"><i class="fas fa-tv"></i></a><ul class="drop-menu"><li><a href="dublados.php">dublados</a></li><li><a href="filmes.php">filmes</a></li><li><a href="legendados.php">legendados</a></li></ul></li><li class="sub"><a title="Mangás" alt="Mangás"><i class="fas fa-book-open"></i></a><ul class="drop-menu"><li><a href="mangas.php">Mangas</a></li><li><a href="manhwas.php">Manhwas</a></li><li><a href="novels.php">Novels</a></li></ul></li><li><a href="https://www.facebook.com/AniBookOficial/" target="blank" title="Facebook" alt="Facebook"><i class="fab fa-facebook"></i></a></li><li><a href="https://twitter.com/AniBookOficial" target="blank" title="Twitter" alt="Twitter"><i class="fab fa-twitter"></i></a></li><li><a href="https://discord.gg/TsuMHBd" target="blank" title="Discord" alt="Discord"><i class="fab fa-discord"></i></a></li><li class="sub search"><a title="Pesquisar" alt="Pesquisar"><i class="fas fa-search"></i></a><ul class="drop-menu"><li id="form"><input type="search" id="pesquisa"></li></ul></li>'
if (window.innerWidth < 922)
    $('header nav ul').prepend(ordem1)
else
    $('header nav ul').prepend(ordem2)*/
jQuery(function ($) {
    $("body").prepend('<div class="animate" id="move-to-top"><i class="fas fa-arrow-up"></i></div>');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 160) {
            $('#move-to-top').addClass('filling').removeClass('hiding');
        } else {
            $('#move-to-top').removeClass('filling').addClass('hiding');
        }
    });
    $("#move-to-top").click(function () {
        $('html, body').animate({ scrollTop: 0 }, 'slow')
    })
});

$(document).ready(function () {
    $('.menu').click(function () {
        $('nav').toggleClass('active')
        $('nav').css({ 'zIndex': '999'})
        $('main,footer').toggleClass('hide')
    })
    $('.sub').click(function () {
        $(this).siblings().removeClass('active')
        $(this).toggleClass('active')
        $("#pesquisa").focus()
    })
    $('.sub').on("mouseover",function(){
        $('#pesquisa').focus()
        // $('#pesquisa').val('')
    })
    $('.sub ul #form').on('mouseout',function() {
        if($('#pesquisa').val() !== '')
            $('.sub.search').toggleClass('active')
    })
    $('#pesquisa').keypress(function(ev){
        if (ev.keyCode == 13) {
            let nome = $(this).val()
            nome = nome.toLowerCase().replace(/ /g, '-')
            let link = open(`${nome}.php`, '_self')
            link.location
        }
    })//fazer validacao
})
// window.addEventListener('load', () => {
    // document.getElementById('preload').className = 'hide'
    // document.querySelector('main').className = 'animated heartBeat'
    let hoje = new Date();
    $('footer .rodape span').text(hoje.getFullYear() + ' © Todos os direitos reservados')
// })
//modo noturno
const nightModeStorage = localStorage.getItem('gmtNightMode')
const nightMode = document.querySelector('#btnNoturno')
if (nightModeStorage) {
    document.documentElement.classList.add('noturno')
    $("#btnNoturno").html('<i class="fas fa-sun"></i>').attr('title', "Dia")
    // $('#btnNoturno')
    $('body').css({'backgroundColor':'#444'}) 
    nightMode.checked = true
}
else {
    $("#btnNoturno").html('<i class="fas fa-moon"></i>').attr('title', "Noite")
    $('body').css({'backgroundColor': '#d8e0e9'})
    // $('#btnNoturno').
}
nightMode.addEventListener('click', () => {
    document.documentElement.classList.toggle('noturno')

    if (document.documentElement.classList.contains('noturno')) {
        localStorage.setItem('gmtNightMode', true)
        $("#btnNoturno").html('<i class="fas fa-sun"></i>').attr('title', "Dia")
        $('body').css({'backgroundColor': '#444'})
        // $('#btnNoturno').attr('title', "Dia")
        return
    }
    localStorage.removeItem('gmtNightMode')
    $("#btnNoturno").html('<i class="fas fa-moon"></i>').attr('title', "Noite")
    // $('#btnNoturno').attr('title', "Noite")
    $('body').css({'backgroundColor': '#d8e0e9'})

});
const valores = [
        'Akame ga Kill',
        'Ansatsu Kyoushitsu',
        'Boku no Hero Academia',
        'Cavaleiros do Zodiaco',
        'Danshi Koukousei no Nichijou',
        'Dragon Ball',
        'Death Note',
        'Devilman',
        'Dungeon ni Deai',
        'High School DxD',
        'Fullmetal Alchemist',
        'Gantz',
        'Golden Time',
        'Hellsing',
        'Kakegurui',
        'Konosuba',
        'Kaichou wa Maid-Sama',
        'Magi',
        'Myself yourself',
        'Nanatsu no Taizai',
        'Naruto',
        'Noragami',
        'One Punch Man',
        'Overlord',
        'Prison School',
        'Sword Art Online',
        'Seitokai Yakuindomo',
        'Super Onze',
        'Tokyo Ghoul',
        'Tsurezure Children',
        'Violet Evergarden',
        'Yu Yu Hakushou',
        'Chuunibyou demo Koi ga Shintai!',
        'Colorful',
        'Koe no Katachi',
        'No Game No Life',
        'Itsudatte Bokura no Koi wa 10cm datta',
        'Kimi no Koe wo Todoketai',
        'Kimi no Na wa.',
        'Kokoro ga Sakebitagatterun da.',
        'Princesa Mononoke',
        'A Viagem de Chiriro',
        'Byousoku 5 Centimenter',
        'Kumo no Mukou, Yakusoku no Basho',
        'Little Witch Academia',
        'Mahouka Koukou no Rettousei',
        'Saint☆Onii-san',
        'Yamada-kun to 7-nin no Majo',
        'Kimi wa Midara na Boku no Joou',
        'Asagao to Kase-san',
        'Girl Friends',
        'Ano Ko ni Kiss to Shirayuri wo',
        'High Score Girl',
        'karakai Jouzu no Takagi-san',
        'Kishuku Gakkou no Juliet',
        'Sakura Trick',
        'Shingeki no Kyojin',
        'Tonikaku Cawaii',
        'Pusle',
        'Bridesmaid',
        'Lily Love',
        'Lily Love 2',
        'Blooming Sequence'
    ]
$('#pesquisa').autocomplete({
    source: function(request,response){
        response($.ui.autocomplete.filter(valores, request.term).slice(0,3))
    },
    select: function(){
        let nome = $(this).val()
        pag = window.location.pathname
        if(pag == "/" || pag == "/index.php")
            nome = "paginas/"+nome.toLowerCase().replace(/ /g, '-')
        else
            nome = nome.toLowerCase().replace(/ /g, '-')
        // let link = 
        open(`${nome}.php`, '_self')
        // link.location
    },
})

$('.ui-helper-hidden-accessible').hide()
$('img, .titulo').each(function(){
    let titulo = $(this).attr('alt')
    $(this).attr('title',titulo)
    $(this).attr('aria-label',titulo)
})

$('img').each(function () {
    let alt = $(this).attr('alt')
    let nome = alt
    alt = removeAcentos(alt.toLowerCase().replace(/ /g,'-'))
    if(pag == "/" || pag == "/index.php"){
        $(this).closest('a').attr('href',`paginas/${alt}.php`)
        $(this).closest('.conteudo').append(`<span><a href="paginas/${alt}.php">${nome}</a></span>`)
    }
    else{
        $(this).closest('a').attr('href',`${alt}.php`)
        $(this).closest('.conteudo').append(`<span><a href="${alt}.php">${nome}</a></span>`)
        
    }
})
$('i').closest('span').each(function(){
    let titulo =$(this).attr('alt')
    $(this).attr('title',titulo)
})
$('i').closest('a, div, span').each(function(){
    let aria = $(this).attr('alt')
    $(this).attr('aria-label', aria)
})
$(document).on('mousemove', function () {
    let elm = document.createElement('div')
    elm.style.top = event.clientY + 'px'
    elm.style.left = event.clientX + 'px'
    elm.style.opacity = '.1'
    elm.style.zIndex = '-1'
    elm.style.background = cor()
    // elm.style.opacity = op()
    elm.setAttribute('class', 'circle')
    document.body.appendChild(elm)
    setTimeout(function () {
        document.body.removeChild(elm)
    }, 1000)
})
function cor() {
    /*let s = '0123456789abcdef'
    let cor = '#'
    for (i = 0; i < 6; i++)
        cor += s[Math.floor(Math.random() * s.length)]
    return cor*/
    let corDia = ['#ff1493','#ffea00','#00d2d3']
    let corNoite = ['#666666','#ffd700','#2e86de ']
    if(document.documentElement.classList.contains('noturno'))
        return corNoite[Math.floor(Math.random()*corNoite.length)]
    else
        return corDia[Math.floor(Math.random()*corDia.length)]
}
// function op() {
//     let op = Math.random()
//     return op.toFixed(2)
// }
function removeAcentos(text) {
    text = text.toLowerCase();
    text = text.replace(new RegExp('[ÁÀÂÃ]', 'gi'), 'a');
    text = text.replace(new RegExp('[ÉÈÊ]', 'gi'), 'e');
    text = text.replace(new RegExp('[ÍÌÎ]', 'gi'), 'i');
    text = text.replace(new RegExp('[ÓÒÔÕ]', 'gi'), 'o');
    text = text.replace(new RegExp('[ÚÙÛ]', 'gi'), 'u');
    text = text.replace(new RegExp('[Ç]', 'gi'), 'c');
    return text;
}
$('img').on('error',function(){
    $(this).attr('src','../../imagens/MacacoErro.png')
    $(this).attr('title','Erro ao carregar a imagem')
})
// $('body').css({ 'cursor':'../../imagens/AquaTransparente.png'})