/**
 * Created by elviosadoc on 23/04/18.
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

    //registro de utilizador teste
    $('.frm-add-utilizador').submit(function (e) {
        e.preventDefault();
        $.post($(this).attr('action'),$(this).serialize(),function (x) {
            toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
        },'json');
    });
});