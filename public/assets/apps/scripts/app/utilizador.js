/**
 * Created by elviosadoc on 24/08/18.
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

    //adicionar conta ao utilizador
    $('.btn_add_conta').click(function () {
        id_user=$(this).attr('id_utilizador');
        $.get(URL+'utente/detalhe',{id_cidadao:id_user},function (x) {
            var date = new Date();
            var y = date.getFullYear();
            var pass=Math.random()*(+y);
            $('.username_conta').val(user(x[0].nome));
            $('.senha_conta').val(senha(pass+"",x[0].nome));
        },'json');
    });

    //criar conta do utilizador
    $('.btn_criar_conta').click(function () {
        $.post(URL+'app/store_user',{
            user:$('.username_conta').val(),
            senha:$('.senha_conta').val(),
            id_user:id_user,
            id_role:$('.id_role').val()
        },function (x) {
            toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
            setTimeout(function () {
                window.location=URL+'utilizador/listar';
            },1000);
        },'json');
    });

    //verificar se o utilizador já alterou as suas credencias
    $.get(URL+'app/control_cred',{
        id_user:$('.id_user_logado').attr('id_user_logado')
    },function (x) {
        if(x[0].bd==1 && x[0].session!=1)
        {
            $('#alterar_credenciais').modal("show");
        }
    },'json');

    //adiar alteracao da senha
    $('.btn_adiar_alteracao').click(function () {
        $.post(URL+'app/set_session_cred',{valor:1});
    });

    //funcao que serve para pegar o username logado
    $.get(URL+'app/nome_user',
        {
            id_utilizador:$('.id_user_logado').attr('id_user_logado')
        },function (x) {
            $('.user_name').html(usuario(x));
        });

    //funcao que serve para alterar a senha
    $('.btn-trocar-senha').click(function () {

        $.post(URL+'app/alterar_senha',{
            id_utilizador:$('.id_user_logado').attr('id_user_logado'),
            senha_actual:$('.senha_actual').val(),
            senha_nova:$('.senha_nova').val(),
            senha_nova_rep:$('.rep_senha_nova').val()
        },function (x) {
            if(x[0].erro==1)
            {
                $('.div-rep-senha').addClass('has-error');
                $('.sms-rep-senha').html(x[0].sms).css({
                    color:"#e73d4a"
                });
            }else if(x[0].erro==2)
            {
                $('.div-senha-actual').addClass('has-error');
                $('.sms-senha-actual').html(x[0].sms).css({
                    color:"#e73d4a"
                });
            }else
                {
                    toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
                    setTimeout(function () {
                        window.location=URL+'utilizador/perfil';
                    },1000);
                }
        },'json');
    });


    $('.rep_senha_nova,.senha_actual').keypress(function () {
        $(".sms-rep-senha,.sms-senha-actual").html("");
        $('.div-rep-senha,.div-senha-actual').removeClass('has-error');
    });

    //dados do user
    $.get(URL+'utilizador/dados_user',{id_user:$('.id_user_logado').attr('id_user_logado')},function (x) {

        var data=x[0].data_nascimento.split("-");
        $('.data_nsc_utilizador').text(data[2]+' de '+meses[data[1]*1]+' de '+data[0]);
        $('.nome_pais_utlizador').text(x[0].pais);
        $('.img_perfil_user').attr('src',URL+'foto_perfil/'+x[0].foto);
    },'json');

    //mostrar todos processos atendindo por utilizador
    $.get(URL+'processo/total_por_utilizador',{id_user:$('.id_user').attr('id_user')},function (x) {
        $('.num_processo').text(x);
    });

    $('#upload_form').on('submit', function(e){
        e.preventDefault();
        if($('#image_file').val() == '')
        {
            alert("Por favor selecione o ficheiro");
        }
        else
        {
            $.ajax({
                url:URL+"utilizador/add_foto",
                method:"POST",
                data:new FormData(this),
                dataType:'json',
                contentType: false,
                cache: false,
                processData:false,
                success:function(x)
                {
                    toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
                    $('.txt2').removeClass('active');
                    $('.txt1').addClass('active');
                    $('.img_perfil_user').attr('src',x[0].src);
                    $('.img_preview').attr('src','http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image');
                }
            });
        }
    });


    //ligar a camera
    $('.btn-ligar-camera').click(function (e) {
        e.preventDefault();
        Webcam.set({
            // live preview size
            width: 320,
            height: 240,

            // device capture size
            dest_width: 640,
            dest_height: 480,

            // final cropped size
            crop_width: 480,
            crop_height: 480,

            // format and quality
            image_format: 'jpeg',
            jpeg_quality: 90,

            // flip horizontal (mirror mode)
            flip_horiz: true
        });
        Webcam.attach('#camera_utilizador');
    });


    //do upload
    $('.btn_salvar').click(function () {
        Webcam.snap( function(data_uri) {
            // shut down camera, stop capturing
            Webcam.reset();

            var formdata = new FormData();
            formdata.append('foto_capturada',data_uri);
            $.ajax({
                url:URL+"utilizador/add_foto_webCam",
                method:"POST",
                data:formdata,
                dataType:'json',
                contentType: false,
                cache: false,
                processData:false,
                success:function(x)
                {
                    toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
                    $('.img_perfil_user').attr('src',x[0].src);
                }
            });
        } );
    });

});