/**
 * Created by elviosadoc on 14/08/18.
 * 10,30,20,20,10,20,20=130
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

//salvar documentos no banco de dados

    $('.form-add-doc').submit(function (e) {
        e.preventDefault();
        $.post($(this).attr('action'),$(this).serialize(),function (x) {
            $('.documento_nome').val('');
            toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
        },'json');
    });

    // $('.btn-salvar-doc').click(function () {
    //     var documento=$('.documento_nome').val();
    //     $.post(URL+'app/store_documento',{'documento':documento},function (x) {
    //         $('.documento_nome').val('');
    //         toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
    //     },'json');
    // });

    $('.so-letra').keypress(function (e) {
        var tecla = (window.event)?event.keyCode:e.which;
        if((tecla > 47 && tecla <58)) return false;
        else{
            if(tecla == 8 || tecla == 0) return true;
            else return true;
        }
    });
});