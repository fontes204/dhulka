/**
 * Created by elviosadoc on 28/04/18.
 */
$(this).ready(function () {

    var data=new Date();
    var mes=null;
    var data_actual;
    meses={
        1:'Janeiro',
        2:'Fevereiro',
        3:'Março',
        4:'Abril',
        5:'Maio',
        6:'Junho',
        7:'Julho',
        8:'Agosto',
        9:'Setembro',
        10:'Outubro',
        11:'Novembro',
        12:'Dezembro'
    };

    if((data.getMonth()+1)<9)
        mes="0"+(data.getMonth()+1);
    else
        mes=(data.getMonth()+1);
    data_actual=data.getDate()+' de '+meses[+mes]+' de '+data.getFullYear();

    toastr.options = {
        "closeButton": true,
        "debug": true,
        "positionClass": "toast-top-right",
        "showDuration": "2000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    $('.frm_add_administracao').submit(function (e) {
        e.preventDefault();
        $.post($(this).attr('action'),$(this).serialize(),function (x) {
            toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
            setTimeout(function () {
                $('#administracao_novo').modal('hide');
            },2001);
        },'json');
    });

});