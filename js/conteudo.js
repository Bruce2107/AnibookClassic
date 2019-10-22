// $('.container').css({'direction':'rtl'})
$(document).on('click',"#accordion>li>span",function(){
    $(this).siblings('.box').addClass('active')
    $(this).closest('li').siblings('li').find('.box').removeClass('active')
})
$('#accordion').on('click','li>span',function(){
    $('#accordion li span.active').removeClass('active')
    $(this).addClass('active')
}) 

// window.addEventListener('load', () => {
const imgManga = [
    "https://i0.wp.com/www.fatosdesconhecidos.com.br/wp-content/uploads/2017/04/dbz4.jpg",
    "http://randomfandomgirl.com/wp-content/uploads/2016/04/Aladdin_-_Magi.png",
    "https://t00.deviantart.net/M_O6t6dHBeIF1Cne6q9vDqYAgmA=/fit-in/300x900/filters:no_upscale():origin()/pre00/cdc6/th/pre/f/2017/215/6/1/this_ghost__my_shadow____cohabitate___mob_psycho_by_mikittykun-dbirax7.jpg",
    "http://vignette2.wikia.nocookie.net/berserk/images/9/9a/ZoddOverForest.png/revision/latest?cb=20150327120831",
    "https://s-media-cache-ak0.pinimg.com/originals/15/d1/40/15d140f047ae231f87ff873d73475a27.jpg",
    "http://2.bp.blogspot.com/-0XeXTr1xAqk/URfo0YXs9kI/AAAAAAAAARc/qJ4aTNhaDhU/s1600/gantz-35552.jpg",
    "https://bibliotecabrasileirademangas.files.wordpress.com/2015/12/vagabond.jpg?w=1086",
    "http://pm1.narvii.com/6480/a93e7fb4b7da3adee54dd48691eca74f80d04e44_00.jpg",
    "https://i.pinimg.com/originals/a8/40/a3/a840a3b7857f05a96d02e9da228e3d10.jpg",
    "https://i1.wp.com/1realahora.com/wp-content/uploads/2018/11/Shingeki_no_Kyojin_Manga_Volume_20_Eren_vs_Colossus_Titan_30032017.jpg"
]
let i = Math.floor(Math.random() * imgManga.length);
$('body').css({ "backgroundImage": `url(${imgManga[i]})`, 'backgroundSize': '240px'})
// })
var soma = 0
var qtd = 0
$('.nota').each(function(){
    if($(this).text() !== '-')
    {
        soma += parseFloat($(this).text())
        qtd++
    }
})
if(soma === 0)
    $('#media').text('-')
else
    $('#media').text((soma / qtd).toFixed(2))
$('b,.Anime,.nome').each(function(){
    let val = $(this).text().replace(/:/g,'')
    $(this).attr("alt", val)
    $(this).attr("title", val)
})
$('#descer').css({'cursor':'pointer'})
$('#descer').on('click', function () {
    $('html, body').animate({ scrollTop: $('#info').offset().top }, 'slow')
})
/*$('img').on('mouseover', function () {
    $(this).css({ 'filter': 'invert(1)' })
})
$('img').on('mouseout', function () {
    $(this).css({ 'filter': 'invert(0)' })
})*/
