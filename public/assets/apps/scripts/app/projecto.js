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

    //cadastrar projecto
    $('.btn-add-projecto').click(function () {
        $.post(URL+'projecto/store',
            {
                nome_projecto:$('.nome-projecto').val(),
                id_comuna:$('.id-comuna').val(),
                id_coordenador:$('.id-coordenador').val()
            },
            function (x) {
                toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
            }
        ,'json');
    });


    //adicionar características ao prpjecto
    caracteristica=new Array();
    $('.check_dim').click(function () {
        if($(this).is(':checked')) {
            $('.dimqtde'+$(this).attr('cont')).attr('disabled',false).focus();
            caracteristica.push({
                dimensao:$(this).val(),
                quantidade:$('.dimqtde'+$(this).attr('cont')).val(),
                chave:$(this).attr('cont')
            });
        }else{
            $('.dimqtde'+$(this).attr('cont')).attr('disabled',true);
            $('.dimqtde'+$(this).attr('cont')).val("")
            for(i in caracteristica)
            {
                if(caracteristica[i].dimensao==$(this).val())
                {
                    delete caracteristica[i];
                }
            }
        }

    });


    $('.btn_add_descricao_projecto').click(function () {

        var total_terreno=0;
        for(i in caracteristica)
        {
            caracteristica[i].quantidade=$('.dimqtde'+caracteristica[i].chave).val();
            total_terreno+=+(caracteristica[i].quantidade);
        }

        if((+($('.qtde_terreno')).val())<total_terreno)
        {
            alert("Breve descricao da falha");
        }else {
            $.post(URL + 'projecto/add_descricao',
                {
                    caracteristica: caracteristica,
                    area: $('.area_terreno').val(),
                    publico: $('.publico_alvo').val(),
                    qtde_terreno: $('.qtde_terreno').val(),
                    descricao: $('.descricao').val(),
                    id_projecto:$('.id_projecto').val(),
                    data_expo:$('.data_expo').val()
                },
                function (x) {
                    toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
                },'json');
        }
    });

    //carregar fotos para o projecto
    $('#fotoProjecto').on('submit',function (e) {
        e.preventDefault();
        $.ajax({
            url:URL+'projecto/carregar_foto',
            type:'post',
            data:new FormData(this),
            processData:false,
            dataType:'json',
            contentType:false,
            cache: false,
            success:function (x) {
                toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
                $(this).reset();
            }
        });
    });


    //area dos menus

    //coordenar projecto
    $('.btn-coordenar-projecto').click(function (e) {
        e.preventDefault();
        var id=$(this).attr('href');
        id=id.split("/");
        $.post(URL+'terreno/setIdProjecto',{id_projecto:id[1]},function (x) {
            window.location=URL+'projecto/coordenar/'+id[1];
        });
    });

    //add descricao
    $('.btn-add-descricao').click(function (e) {
        e.preventDefault();
        $.post(URL+'terreno/setIdProjecto',{id_projecto:$(this).attr('id_projecto')},function (x) {
            window.location=URL+'projecto/coordenar/add_descricao';
        });
    });

    //novo terreno
    $('.btn-novo-terreno-project').click(function (e) {
        e.preventDefault();
        $.post(URL+'terreno/setIdProjecto',{id_projecto:$(this).attr('id_projecto')},function (x) {
            window.location=URL+'terreno/novo';
        });
    });

    //carregar fotos
    $('.btn-carregar-foto').click(function (e) {
        e.preventDefault();
        $.post(URL+'terreno/setIdProjecto',{id_projecto:$(this).attr('id_projecto')},function (x) {
            window.location=URL+'projecto/coordenar/carregar_foto';
        });
    });

    //listar terreno
    $('.btn-listar-terreno').click(function (e) {
        e.preventDefault();
        $.post(URL+'terreno/setIdProjecto',{id_projecto:$(this).attr('id_projecto')},function (x) {
            window.location=URL+'projecto/listar_terreno';
        });
    });

    //listar estatistica
    $('.btn-listar-estatistica').click(function (e) {
        e.preventDefault();
        $.post(URL+'terreno/setIdProjecto',{id_projecto:$(this).attr('id_projecto')},function (x) {
            window.location=URL+'projecto/coordenar/estatistica';
        });
    });

    //listar galeria
    $('.btn-galeria').click(function (e) {
        e.preventDefault();
        $.post(URL+'terreno/setIdProjecto',{id_projecto:$(this).attr('id_projecto')},function (x) {
            window.location=URL+'projecto/coordenar/galeria';
        });
    });

});//fim do carregamento do documento