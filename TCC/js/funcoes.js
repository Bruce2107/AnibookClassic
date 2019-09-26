$("select[name='turma']").change(function () {
    let url = window.location.href
    url = url.split("?", 2)
    let parametro = param(url[1])
    let turma = $("select[name='turma'] option:selected").text();
    let abrir = url[0] + '?' + parametro
    if (parametro == '')
        abrir += 't=' + turma
    else
        abrir += '&t=' + turma
    window.location(abrir)
})

function param(url) {
    if (url == null)
        return ''
    let r = ''
    if (url.startsWith('v')) {
        r = url.split('&', 2)
        r = r[0]
    }
    return r
}
function buscadados(ra, nome, faltas, comp, ativo) {
    $('#idAluno').val(ra).attr('value', ra).removeAttr('disabled')
    $('#nome').val(nome).attr('value', ra).removeAttr('disabled')
    $('#faltas').val(faltas).attr('value', ra).removeAttr('disabled')
    $('#comp').val(comp).attr('value', ra).removeAttr('disabled')
    $('#ativo').attr('checked', ativo).removeAttr('disabled')
    $('#Salvar').removeAttr('disabled')
}