/**
 * Created by elviosadoc on 21/08/18.
 */
$(this).ready(function () {
    FormWysihtml5.init();
    ///$('.btn_enviar_processo').hide();;
    $('.div-prov').hide();
    $('.tel-mask').mask("+244 999 999 999");

    $('.nacio_utente').change(function () {
        var pais=($('.nacio_utente option:selected').text());
        if(pais=="Angola")
        {
            $('.tipo_doc').hide();
            $('.div-prov').show();
            $('.num-doc1').text('Número do Bilhete de Identidade');
        }else{
            $('.div-prov').hide();
            $('.tipo_doc').show();
            $('.num-doc1').text('Número do Documento');
        }
    });

    $('.select-prov').change(function () {
        $.get(URL+'municipio/get_sigla',{'param':$(this).val()},function (x) {
            $('.num_doc_utente').mask("999999999"+x.trim()+"999");
        });
    });

    var  id_processo=$('.control-processP').attr('id_processo');
    var  estado_processo=$('.control-processP').attr('estado');

    $('.assunto-tipo').hide();

    if(id_processo!=undefined && estado_processo!=undefined) {
        $.get(URL + 'processo/control_botao_enviar',

            {
                id_processo: id_processo,
                estado: estado_processo
            },
            function (x) {
                if (x[0].botao == "1" && x[0].processo == "1")
                    $('.btn_enviar_processo,.ctrl-btns-processo').show();
                else
                    $('.btn_enviar_processo').hide();
            }
            , 'json');

    }
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

    //selecionar o tipo de assunto
    $('.escolher_assunto').click(function () {
        var id_utente=$('.id_utente').val();
        switch ($('.tipo_assunto').val())
        {
            case"1":
                window.location=URL+'processo/novo/aquisicao/'+id_utente.trim();
                break;
            case"2":
                window.location=URL+'processo/novo/legalizacao/'+id_utente.trim();
                break;
        }

    });

    //buscar utente por meio da chave BI
    $('.chave_busca').change(function ()
    {
        $.get(URL+'utente/detalhe1',{id_cidadao:$(this).val()},function (x) {
            $('.nome_utente_resgate').val(x[0].nome);
            $('.id_utente').val(x[0].id_utente);
            $('.data_nasc_utente_resgate').val(x[0].data_nascimento);
            $('.estado_civil_utente_resgate').val(estado_civil(x[0].estado_civil,x[0].genero));
        },'json');
    });


    // enviar processo
    $('.btn_enviar_processo').click(function (e) {
        e.preventDefault();
        var estado=$(this).attr('estado');
        var href=$(this).attr('href');
        var id_processo=$(this).attr('id_processo');
        var id_tecnico=0;
        if(estado >3)
        {
            id_tecnico=$('.id-tecnico').val();
        }

        $.post(URL+'processo/enviar',
            {
                estado:estado,
                id_processo:id_processo,
                id_tecnico:id_tecnico
            }
            ,function (x) {
                toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
                setTimeout(function () {
                    window.location=href;
                },2000);
        },'json');
    });

    $('.btn_enviar_processo_1').click(function (e) {
        e.preventDefault();
        var estado=$(this).attr('estado');
        var id_processo=$(this).attr('id_processo');
        $.post(URL+'processo/enviar',
            {
                estado:estado,
                id_processo:id_processo
            }
            ,function (x) {
                toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
                $('.btn_enviar_processo_1').hide();
                // setTimeout(function () {
                //     //window.location=URL+'processo/listar';
                // },2000);
            },'json');
    });

    // $('#image').change(function () {
    //     //cont = $(this).attr('cont');
    //     var formData = new FormData();
    //     var tam = this.files.length, file, i = 0;
    //     for (; i < tam; i++) {
    //         // file = this.files[i];
    //         if (formData) {
    //             formData.append('documento[]',this.files[i]);
    //         }
    //     }
    //
    //     $.ajax({
    //         url:URL+"processo/teste",
    //         method:"POST",
    //         data:formData,
    //         // dataType:'json',
    //         contentType: false,
    //         cache: false,
    //         processData:false,
    //         success:function(x)
    //         {
    //             alert(x);
    //         }
    //     });
    // });
    // $('body').on('change', '#image', function (s) {
    // });


    //tudo sobre parecer
    $('.parecer-comum').change(function () {

        //$('.parecer-processo').val($(this).val());
        $('#wysihtml5').css({
            color:'#069'
        });
    });

    $('.btn-add-parecer').click(function () {
        $.post(URL+'processo/add_parecer',{
            parecer:$('.parecer-processo').val(),
            id_processo:$('.id_processo').val()
        },
            function (x) {
                toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
                $('.parecer-processo').val("")
            if(x[0].alerta=="success")
                $('.btn_enviar_processo').show();
        },'json');
    });


    //ver parecer
    $('.btn-link-ver-parecer').click(function () {
        window.location=$(this).attr('href');
    });

    $('.btn-sel-assunto').click(function () {
         assunto=$(this).val();
    });

    // utente=0;
    $('.cod-utente').keypress(function (e) {
        if(e.keyCode==13)
        {
            if($(this).val()!=null)
            {
                $.get(URL+'utente/get_utente',{param:$(this).val()},function(x){
                    if(x>0)
                    {
                        $('.get-utente').removeClass('has-error');
                        $('.get-utente').addClass('has-success');
                        $('.callback-get-utente').html('<i class="fa fa-user"></i> Utente encontrado...');
                        $('.assunto-tipo').show();
                        $('.id_utente').val(x);
                    }else {
                        $('.assunto-tipo').hide();
                        $('.get-utente').removeClass('has-success');
                        $('.get-utente').addClass('has-error');
                        $('.callback-get-utente').html('<i class="fa fa-user-times"></i> Utente não encontrado...');
                    }
                });
            }
        }
    });


    //area reservada para mostar os documentos entregues e os docs em falta
    var cont=0;
    $('.button-next').click(function () {
       cont++;

        if(cont==1)
        {
            $.get(URL+'parametrizacao/documento_apresentado',{param:doc_apresentado},function (x) {
                var linha='';
                for (i in x)
                {
                    linha+='<li class="list-group-item list-group-item-success">'+x[i].nome;
                    linha+='<i class="fa fa-check pull-right m-t-3"></i></li>';
                }
                $('.doc-apresentado').html(linha);
            },'json');

            $.get(URL+'parametrizacao/documento_em_falta',{param:doc_apresentado},function (x) {
                var linha1='';
                // var linha1='<span class="pull-right -m-t-17 -m-l-5">Adicionar data de entraga <i class="fa fa-calendar txt-cursor"></i></span>';
                for (i in x)
                {
                    linha1+='<li class="list-group-item list-group-item-danger">'+x[i].nome;
                    linha1+=' <span class="m-l-5 data-de-entrega'+x[i].id+'"></span><i class="fa fa-calendar pull-right m-t-3 txt-cursor add-data-entrega" id="'+x[i].id+'" title="Adicionar data de entrega"></i></li>';
                }
                $('.doc-em-falta').html(linha1);
            },'json');
        }
    });


    //Modal de Adicionar data de entrega Cerimonial=CERI2013
    id_doc_f=null;
    $('.doc-em-falta').on('click','.add-data-entrega',function () {
        id_doc_f=$(this).attr('id');
        $('#add_data_entrega').modal('show');
    });

    $('.btn-add-data-entrega').click(function () {
        var data=$('.data-entrega').val();
        var url = window.location.href;
        var res = url.split('/');
        if(data!=null) {
            $.post(URL + 'data_entrega_doc/store', {
                    id_doc: id_doc_f,
                    data_entrega: data,
                    id_processo:res[7]
                },
                function (x) {
                    toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
                    $('.data-entrega').val('');
                    $('.data-de-entrega'+id_doc_f).text('- Data de entrega: '+data);
                },'json');
        }
    });

    $('.button-previous').click(function () {
       cont--;
    });


    $('.select-projecto').change(function () {
        $.get(URL+'projecto/dimensao_terreno',
            {
                param:$(this).val()
            },
            function (s) {
                var opt=null;
                for (i in s)
                {
                    opt+='<option value=""></option>';
                    opt+='<option value="'+s[i].id+'">'+s[i].combinacao+'</option>';
                }
                $('.select-dimensao').html(opt);
            },'json');
    });

    //btn-criar-processo-aq-on
    $('.btn-criar-processo-aq-on').click(function () {
        var id_utente=$('.id-utente-aq').val();
        $.post(URL+'processo/store',{opcao:'candidatura',id_utente:id_utente,id_assunto:1},function (x) {
            toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
        },'json');
    });

});//fim do carregamento da página