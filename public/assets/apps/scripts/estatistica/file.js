/**
 * Created by elviosadoc on 18/04/18.
 */
$(this).ready(function () {
    $('.link-estat').click(function () {
       $('.estat_grupo_nome').text($(this).attr('nome_grupo'));
    });


    codigos=new Array;//array com os id's dos sub-menus
    sub_menu=new Array;//array com os id's dos sub-menus
    privilegio=new Array;//array de privilegios
    modals=new Array;
    aux=new Array;

    codigos_del=new Array;//array com os id's dos sub-menus
    sub_menu_del=new Array;//array com os id's dos sub-menus
    privilegio_del=new Array;//array de privilegios
    modals_del=new Array;
    aux_del=new Array;
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

    $('.check-sub-menus').change(function () {

        var id=$(this).attr('id');
        var cod=$(this).attr('cod');
        var accao=$(this).attr('nome');
        var value_modal=$('.radio_'+cod+' input[type=radio]:checked').val();
        if(document.getElementById(id).checked==true)
        {
            var control=$('.aux-slave').attr('testeVal');
            codigos.push(cod);
            modals.push(value_modal);
            $('.control'+cod).attr('disabled',false);
            $('.control'+cod).val(control.toLowerCase());
            $('.accao'+cod).val(accao.toLowerCase());
            $('.accao'+cod).attr('disabled',false);
            $('.hiden_'+cod).html('<input type="hidden" name="id" class="cod'+cod+'" value='+cod+'>');
        }else {
            $('.control'+cod).val('').attr('disabled',true);
            $('.accao'+cod).val('').attr('disabled',true);
            $('.hiden_'+cod).html('');
            codigos.pop(cod);
        }
    });

    $('.frm-add-sub-menu').submit(function (e) {
        e.preventDefault();
        var ver=0;
        if('input[type=checkbox]:checked')
        {
            for (i in codigos) {
                for (var j = 0; j < sub_menu.length; j++) {
                    if (sub_menu[j].id_sub_menu==codigos[i])
                    {
                        ver=1;
                    }
                }
                if(ver!=1)
                {
                    sub_menu.push({
                        'controller': $('.control' + codigos[i]).val(),
                        'action': $('.accao' + codigos[i]).val(),
                        'id_menu': $('#id_menu').val(),
                        'id_sub_menu': codigos[i],
                        'modal':modals[i]
                    });
                }
                ver=0;
            }
            $.post($(this).attr('action'),{param:sub_menu},function (x) {
                toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
            },'json');
        }
    });


    $('.sub-menus').change(function () {
        var id=$(this).attr('id');
        var id_msm=$(this).attr('id_msm');
        var id_role=$('.ul-sub').attr('id_role');
        if(document.getElementById(id).checked==true)
        {
            privilegio.push({
                'id_role':id_role,
                'id_msm':id_msm
            });

        }else {
            for(i in privilegio)
            {
                if (id_msm!=privilegio[i].id_msm)
                    aux.push(privilegio[i]);
            }
            for(i in aux)
            {

                privilegio.push(aux[i]);
            }
            privilegio=aux;
        }


    });

    $('.sub-menus1').change(function () {
        var id=$(this).attr('id');
        var id_msm=$(this).attr('id_msm');
        var id_role=$('.ul-sub').attr('id_role');
        if(document.getElementById(id).checked==true)
        {
            privilegio_del.push({
                'id_role':id_role,
                'id_msm':id_msm
            });

        }else {
            for(i in privilegio_del)
            {
                if (id_msm!=privilegio_del[i].id_msm)
                    aux_del.push(privilegio_del[i]);
            }
            for(i in aux_del)
            {

                privilegio_del.push(aux_del[i]);
            }
            privilegio_del=aux_del;
        }


    });

    $('.btn-add-prv').click(function () {

        $.post($('.ul-sub').attr('action'),{privilegio:privilegio},function (x) {
            toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
        },'json');
    });

    $('.btn-delet-prv').click(function () {
        $.post($('.ul-sub1').attr('action'),{privilegio:privilegio_del},function (x) {
            toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
        },'json');
    });


    $('.checkable').change(function () {
        if(document.getElementById('checkbox1000').checked==true)
        {
            $('input[type=checkbox]').attr('checked',true);
        }else{
            $('input[type=checkbox]').attr('checked',false);
        }
    });

    //cadastro de reparticao
    $('.teste_maiss').click(function () {
        $.post($('.frm_reparticao_novo').attr('action'),$('.frm_reparticao_novo').serialize(),function (x) {
            toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
        },'json');
    });

    //
    $('.nome_municipio').change(function () {
        $('.nome_municipio >option').click(function () {
            $('.nome_administrcao').val("ADMINISTRAÇÃO MUNICIPAL - "+$(this).text().toUpperCase())
        });
    });
});