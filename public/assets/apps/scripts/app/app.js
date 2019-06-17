/**
 * Created by elviosadoc on 28/04/18.
 */
MUNICIPIO=1;//id do municipio a trabalhar
function busca_provincia()
{
    $('.nome_provincia >option').click(function () {
        $('.nome_repart').val("REPARTIÇÃO PROVINCIAL - "+$(this).text().toUpperCase())
    });
}
function busca_municipio()
{
    $('.nome_municipio >option').click(function () {
        alert($(this).text().toUpperCase());
        $('.nome_administrcao').val("ADMINISTRAÇÃO MUNICIPAL - "+$(this).text().toUpperCase())
    });
}

function add_user_repart(e,id_repart) {
    e.preventDefault();
    var nome = $('#add-user-repart'+id_repart).attr('nome_repart');
    var rota = $('#add-user-repart'+id_repart).attr('rota');
    $('#add_novo_user_repart').attr('href',rota.replace('undefined','novo')+'R'+id_repart);
    $('.titulo_repart').text(nome);
    $('#utilizador_repart').modal('show');
}

function add_user_admin(e,id_admin) {
    e.preventDefault();
    var nome = $('#add-user-administracao'+id_admin).attr('nome_admini');
    var rota = $('#add-user-administracao'+id_admin).attr('rota');
    $('#add_novo_user_admin').attr('href',rota.replace('undefined','novo')+'A'+id_admin);
    $('.titulo_admin').text(nome);
    $('#utilizador_administracao').modal('show');
}

