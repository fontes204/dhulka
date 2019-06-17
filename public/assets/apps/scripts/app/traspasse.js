$(this).ready(function () {

    $('.utente-tras1').keyup(function () {
        var param=$(this).val();
        if(param.length>=9)
        {
            $.get(URL+'utente/buscar_utente',{param:param},function (x) {
                var html='<div class="alert alert-success"><strong>Utente encontrado!</strong> '+x[0].utente+'</div>';
                $('.resp').html(html);
                $('.link-trespasse-novo').attr('href',URL+'traspasse/novo/'+x[0].id);
                $('.link-trespasse-novo').attr('data-dismiss','modal');
            },'json');
        }
    });

    $('.link-trespasse-novo').click(function () {
        window.location=$(this).attr('href');
    });

    $('.utente-tras2').keyup(function () {
        var param=$(this).val();
        if(param.length>=9)
        {
            $.get(URL+'utente/buscar_utente',{param:param},function (x) {
                var html='<div class="alert alert-success"><strong>Utente encontrado!</strong> \n'+x[0].utente+'</div>';
                $('.resp-2').html(html);
            },'json');
        }
    });
});