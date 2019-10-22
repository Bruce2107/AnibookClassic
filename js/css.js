const rosa = '#ff1493', gold = '#ffd700', preto7 = 'rgba(0, 0, 0, .7)', AmareloCinza = '#ffea', azulClaro = '#00d2d3', azulEscuro = '#2e86de'

$('nav').css({
    'text-align':'center',
    'float':'right'
}).find('ul').
css({
    'list-style': 'none',
    'padding': '0',
    'margin': '0',
    'display': 'flex'
}).find('li')
.css({
    'width': '100px',
    'position': 'relative',
    'font-size': '20px',
    'color': preto7,
    'cursor': 'pointer',
    'text-transform': 'uppercase'
}).find('a')
.css({
    'line-height': '50px',
    'padding': '0 20px',
    'display': 'block'
}).on('mouseover',function(){
    $(this).css({ 'background': AmareloCinza })
    $(this).find('i').css({
        'background': `-webkit-linear-gradient(90deg,${azulEscuro},${azulClaro})`,
        '-webkit-background-clip': 'text',
        '-webkit-text-fill-color': 'transparent'
    })
}).on('mouseout', function () {
    $(this).css({ 'background': 'inherit' })
    $(this).find('i').css({
        'background': `-webkit-linear-gradient(90deg,${rosa},${gold})`,
        '-webkit-background-clip': 'text',
        '-webkit-text-fill-color': 'transparent'
    })
}).find('i')
.css({
    'background': `-webkit-linear-gradient(90deg,${rosa},${gold})`,
    '-webkit-background-clip': 'text',
    '-webkit-text-fill-color': 'transparent'
})
// $('.menu').css({
//     'font-size': '24px',
//     'cursor': 'ponteir',
//     'display': 'block'
// }).find('i').css({
//     'background': `-webkit-linear-gradient(90deg,${rosa},${gold})`,
//     '-webkit-background-clip': 'text',
//     '-webkit-text-fill-color': 'transparent',
//     'line-height': '50px'
// }).on('mouseover',function(){
//     $(this).css({
//     'background': `-webkit-linear-gradient(90deg,${azulEscuro},${azulClaro})`,
//     '-webkit-background-clip': 'text',
//     '-webkit-text-fill-color': 'transparent'
//     })
// }).on('mouseout',function() {
//     $(this).css({
//         'background': `-webkit-linear-gradient(90deg,${rosa},${gold})`,
//         '-webkit-background-clip': 'text',
//         '-webkit-text-fill-color': 'transparent'
//     })
// })