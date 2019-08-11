// (function ($) {
/*$.fn.Cpagination = function (options) {
    var pagination = this
    var itemPagination
    var defaults = {
        itens_por_paginas: 6
    }
    var settings = {

    }
    $.extend(settings, defaults, options)
    var itens_por_paginas = settings.itens_por_paginas
    itemPagination = $(settings.itemPagination)
    var nPaginationsLink = Math.ceil(itemPagination.length / itens_por_paginas)
    $("<ul></ul>").prependTo(pagination)
    for (var index = 0; index < nPaginationsLink; index++) {
        pagination.find("ul").append("<li>" + (index + 1) + "</li>")
    }

    itemPagination.filter(":gt(" + (itens_por_paginas - 1) + ")").hide()


    pagination.find("ul li").on('click', function () {
        var linkN = $(this).text()
        var itensHide = itemPagination.filter(":lt(" + ((linkN - 1) * itens_por_paginas) + ")")
        $.merge(itensHide, itemPagination.filter(":gt(" + ((linkN * itens_por_paginas) - 1) + ")"))
        itensHide.hide()
        var itensShow = itemPagination.not(itensHide)
        itensShow.show()
        // window.scrollTo(0,0)
        $('html, body').animate({scrollTop: 0},'slow')
        return false
    })
}*/
// }(jQuery))
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
    '../../imagens/KyoukoTomato.gif',
    '../../imagens/KyoukoTomato.png',
    '../../imagens/TomatoUmaru.png',
    '../../imagens/AquaTransparente.png',
    '../../imagens/construction.gif'

    // '../../imagens/AkariYY.webp',
]
let i = Math.floor(Math.random() * backgroundStickes.length)
$('body').css({
    "backgroundImage": `url(${backgroundStickes[i]})`, 'backgroundSize': '240px'})
// (function ($) {
/*$(document).ready(function () {
    $(".pagination").Cpagination({
        itemPagination: ".card"
    })
})*/
// }(jQuery))
