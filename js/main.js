const um_minuto = 60000
const minutos = 2
$('.slide a img:eq(0)').addClass('ativo').show()
let nome = $('.ativo').attr('alt')
let link = nome.toLowerCase().replace(/ /g, '-')
$('.ativo').closest('a').attr('href', `paginas/${link}.php`)
$('.slide').prepend(`<span><a href="paginas/${link}.php">${nome}</a></span>`)
setInterval(slide, um_minuto/20)
function slide() {
    if ($('.ativo').closest('a').next().length) {
        $('.ativo').fadeOut().removeClass('ativo').closest('a').next().find('img').fadeIn().addClass('ativo')
    }
    else {
        $('.ativo').fadeOut().removeClass('ativo')
        $('.slide a img:eq(0)').fadeIn().addClass('ativo')
    }
    nome = $('.ativo').attr('alt')
    link = nome.toLowerCase().replace(/ /g, '-')
    $('.ativo').closest('a').attr('href', `paginas/${link}.php`)
    $('.slide span a').hide().attr('href', `paginas/${link}.php`).html(nome).delay(500).slideDown()
}
const backgroundStickes = [
    '../../imagens/AkariYY.webp',
    '../../imagens/Akko2LWA.webp',
    '../../imagens/AkkoLWA.webp',
    '../../imagens/Android17.webp',
    '../../imagens/AnnieSNK.webp',
    '../../imagens/ChariotLWA.webp',
    '../../imagens/ChorandoFeliz.webp',
    '../../imagens/DekomoriChuuni.webp',
    '../../imagens/Dekomori2Chuuni.webp',
    '../../imagens/Diana2LWA.webp',
    '../../imagens/DianaLWA.webp',
    '../../imagens/Dormindo.webp',
    '../../imagens/Feliz.webp',
    '../../imagens/Fugindo.webp',
    '../../imagens/GokuSSJ.webp',
    '../../imagens/GokuSSJ3.webp',
    '../../imagens/GokuSSJB.webp',
    '../../imagens/GokuSSJBK.webp',
    '../../imagens/KazumaKS.webp',
    '../../imagens/KyokoYY.webp',
    '../../imagens/MaidOver.webp',
    '../../imagens/Megumin.webp',
    '../../imagens/Rikka1Chuuni.webp',
    '../../imagens/RikkaChuuni.webp',
    '../../imagens/RinAssustadaFate.webp',
    '../../imagens/RinChorandoFate.webp',
    '../../imagens/SaitamaOK.webp',
    '../../imagens/SashaSNK.webp',
    '../../imagens/SucyLWA.webp',
    '../../imagens/VegetaSSJ.webp',
    '../../imagens/VegetaSSJ2.webp',
    '../../imagens/VegetaSSJB.webp',
    '../../imagens/YatoAssustado.webp',
    '../../imagens/YatoPensando.webp',
    '../../imagens/YatoRei.webp',
    '../../imagens/Albedo.webp',
    '../../imagens/BibliotecariaBolo.webp',
    '../../imagens/BibliotecariaDancando.webp',
    '../../imagens/ChinatsuYY.webp',
    '../../imagens/Coracao.webp',
    '../../imagens/EmiliaDancando.webp',
    '../../imagens/Erwin.webp',
    '../../imagens/FreezaDourado.webp',
    '../../imagens/GenosAnotando.webp',
    '../../imagens/GohanSSJ2.webp',
    '../../imagens/GohanSurpreso.webp',
    '../../imagens/GokuCansado.webp',
    '../../imagens/GokuDormindo.webp',
    '../../imagens/GokuNuvem.webp',
    '../../imagens/GokuPulando.webp',
    '../../imagens/Historia.webp',
    '../../imagens/KuririnDesconfiado.webp',
    '../../imagens/LCelular.webp',
    '../../imagens/MaidEncantada.webp',
    '../../imagens/MaidFeliz.webp',
    '../../imagens/MajinBoo.webp',
    '../../imagens/MeguminSorrindo.webp',
    '../../imagens/MeninaNeve.webp',
    '../../imagens/Mikasa.webp',
    '../../imagens/RamCaindo.webp',
    '../../imagens/RemArmada.webp',
    '../../imagens/RemDancando.webp',
    '../../imagens/Rikka.webp',
    '../../imagens/Rindo.webp',
    '../../imagens/Ryuk.webp',
    '../../imagens/SaitamaRindo.webp',
    '../../imagens/SaitamaTriste.webp',
    '../../imagens/Sasha1.webp',
    '../../imagens/Sasha2.webp',
    '../../imagens/Shenlong.webp',
    '../../imagens/Trunks.webp',
    '../../imagens/TrunksSSJ.webp',
    '../../imagens/YuiYY.webp',
    '../../imagens/AquaTransparente.png',
    '../../imagens/construction.gif',    
    '../../imagens/KyoukoTomato.gif',
    '../../imagens/KyoukoTomato.png',
    '../../imagens/TomatoUmaru.png',
    // '../../imagens/AkariYY.webp',
]
let i = Math.floor(Math.random() * backgroundStickes.length)
$('body').css({ "backgroundImage": `url(${backgroundStickes[i]})`, 'backgroundSize': '240px' })
function fundo() {
    let i = Math.floor(Math.random() * backgroundStickes.length)
    $('body').css({ "backgroundImage": `url(${backgroundStickes[i]})`, 'backgroundSize': '240px'})
}
setInterval(fundo,um_minuto*minutos)
// setInterval(fundo,1000)