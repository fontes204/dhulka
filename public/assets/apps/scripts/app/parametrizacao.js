/**
 * Created by elviosadoc on 14/09/18.
 */
$(this).ready(function () {

    //adicionando data ao plugin toastr
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

    //armazenar bairro
    $('.btn-add-bairro').click(function (e) {
        e.preventDefault();
        $.post(URL+'parametrizacao/store_bairro',
            {
                nome_bairro:$('.nome-bairro').val(),
                id_comuna:$('.id-comuna').val()
            },
            function (x) {
                toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
            }
            ,'json');
    });
});