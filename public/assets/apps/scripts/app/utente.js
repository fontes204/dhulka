/**
 * Created by elviosadoc on 19/08/18.
 */
$(this).ready(function () {

    //adicionando data ao plugin toastr
    var data = new Date();
    var mes = null;
    var data_actual;
    meses = {
        1: 'Janeiro',
        2: 'Fevereiro',
        3: 'Março',
        4: 'Abril',
        5: 'Maio',
        6: 'Junho',
        7: 'Julho',
        8: 'Agosto',
        9: 'Setembro',
        10: 'Outubro',
        11: 'Novembro',
        12: 'Dezembro'
    };
    formData = null;
    if (window.FormData) {
        formData = new FormData();
    }

    $.each($(".div-agrega-input-file"), function (key, val) {
        // var cont = $(this).find('.filha').length;
        for (var i = 1; i <= $(this).find('.filha').length; i++) {
            $('#foto' + i).change(function () {
                var tam = this.files.length, file, i = 0, reader;
                for (; i < tam; i++) {
                    file = this.files[i];
                    // alert(file);
                    if (window.FileReader) {
                        reader = new FileReader();
                        reader.onloadend = function (e) {
                        };
                        reader.readAsDataURL(file);
                    }
                    if (formData) {
                        formData.append('images[]', file);
                    }
                }
            });
        }
    });

    if ((data.getMonth() + 1) < 9)
        mes = "0" + (data.getMonth() + 1);
    else
        mes = (data.getMonth() + 1);
    data_actual = data.getDate() + ' de ' + meses[+mes] + ' de ' + data.getFullYear();


    //escolhendo o tipo de utente
    $('.escolher_utente').click(function () {
        switch ($('.tipo_utente').val()) {
            case"fsc":
                window.location = URL + 'utente/fisica';
                break;
            case"jur":
                window.location = URL + 'utente/juridica';
                break;
        }

    });

    //salvar utente

    //captura da imagem do utente
    foto_utente = null;
    $('.btn_salvar_imagen_utente').click(function () {
        Webcam.snap(function (data_uri) {
            // shut down camera, stop capturing
            Webcam.reset();

            var form_data = new FormData();
            form_data.append('foto_capturada', data_uri);
            form_data.append('opcao', 'enviar_foto');
            $.ajax({
                url: URL + "utente/store",
                method: "POST",
                data: form_data,
                // dataType:'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (x) {
                    $('.image-utente').attr('src', URL + 'foto_utente/' + x.trim());
                    foto_utente = x;
                    $('.nome-utente').text(usuario($('.nome_utente').val()));
                }
            });
        });
    });

    $('#form_wizard_1 .button-submit').click(function () {

        switch ($(this).attr('value')) {
            case "cad_fisica":
                var nome_nome = $('.nome_utente').val();
                var data_nasc = $('.data_nasc_utente').val();
                var data_emissao_utente = $('.data_emissao_utente').val();
                var nacionalidade = $('.nacio_utente').val();
                var estado_civil = $('.estado_civil_utente').val();
                var comuna = $('.select-comuna').val();
                var bairro = $('.bairro_utente').val();
                var rua = $('.rua_utente').val();
                var email = $('.email_utente').val();
                var telefone1 = $('.telefone1_utente').val();
                var telefone2 = $('.telefone2_utente').val();
                var num_doc_utente = $('.num_doc_utente').val();
                var genero = $('.genero_utente').val();
                var tipo_doc_utente = $('.tipo_doc_utente').val();

                $.post(URL + 'utente/store',
                    {
                        nome_nome: nome_nome,
                        data_nasc: data_nasc,
                        data_emissao_utente: data_emissao_utente,
                        nacionalidade: nacionalidade,
                        estado_civil: estado_civil,
                        comuna: comuna,
                        bairro: bairro,
                        rua: rua,
                        email: email,
                        telefone1: telefone1,
                        telefone2: telefone2,
                        genero: genero,
                        num_doc_utente: num_doc_utente,
                        tipo_doc_utente: tipo_doc_utente,
                        opcao: 'cadastrar_utente',
                        foto: foto_utente
                    }
                    , function (x) {
                        toastr[x[0].alerta](x[0].sms + " <br> Data: " + data_actual, x[0].titulo);
                        setTimeout(function () {
                            switch (assunto) {
                                case"aq":
                                    window.location = URL + 'processo/novo/aquisicao/' + x[0].src;
                                    break;
                                case"lg":
                                    window.location = URL + 'processo/novo/legalizacao/' + x[0].src;
                                    break;
                            }
                        }, 1000);
                    }, 'json');
                break;
            case "cad_terreno":
                var area,largura, comprimento,id_projecto=null;
                if ($('.dim_terreno')!=undefined)
                {
                    var c=$('.dim_terreno').val();
                    var id_projecto=$('.id_projecto').val();
                    var dim=c.split('x');
                    largura=dim[0];
                    comprimento=dim[1];
                    area=dim[0]*dim[1];
                }else
                    {
                        largura=$('.largura').val();
                        comprimento=$('.comprimento').val()
                        area = $('.largura').val() * $('.comprimento').val();
                    }
                $('#submit_form').on('submit', function () {
                    $.ajax({
                        url: URL + 'terreno/store',
                        type: 'post',
                        data: new FormData(this),
                        processData: false,
                        dataType: 'json',
                        contentType: false,
                        cache: false,
                        success: function (x) {
                            var foto = [];
                            for (i in x) {
                                foto.push(x[i].nomes);
                            }
                            if (foto.length > 0) {
                                $.post(URL + 'terreno/store',
                                    {
                                        id_zona: $('.id_zona').val(),
                                        id_projecto: id_projecto,
                                        id_utente: $('.id_utente').val(),
                                        bloco: $('.bloco').val(),
                                        quarteirao: $('.quarteirao').val(),
                                        lote: $('.lote').val(),
                                        largura: largura,
                                        comprimento: comprimento,
                                        numVertice: $('.numVertice').val(),
                                        area: area,
                                        ponto: ponto,
                                        foto: foto,
                                        opcao: 'terreno'
                                    },
                                    function (x) {
                                        toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
                                        if (x[0].src==null)
                                        {
                                            $.post(URL+'terreno/unsetIdProjecto');
                                        }
                                        $(this).reset();
                                    },'json');

                            }
                            // toastr[x[0].alerta](x[0].sms+" <br> Data: "+data_actual, x[0].titulo);
                            // if (x[0].sms!=null && x[0].src==1)
                            // {
                            //     window.location=URL+'terreno/novo';
                            // }
                            //

                        }
                    });
                });
                break;
            case "cad_processo":
                var id_doc = [];
                $('.documento').attr('name', 'documento[]');
                $("input[name='documento[]']:checked").each(function () {
                    id_doc.push($(this).val());
                });

                if (formData) {
                    $.ajax({
                        url: URL + 'processo/store',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        dataType: 'json',
                        success: function (x) {
                            var docs = [];
                            for (i in x) {
                                docs.push(x[i].nomes);
                            }
                            if (x != '') {
                                var dimensao = $('.comprimento_car').val() + '*' + $('.largura_car').val();
                                $.post(URL + 'processo/store',
                                    {
                                        id_utente: $('.id_utente').val(),
                                        id_assunto: $('.id_assunto').val(),
                                        id_bairro: $('.select-bairro').val(),
                                        quarteirao: $('.quarteirao_terreno').val(),
                                        rua: $('.rua_processo').val(),
                                        dimensao: dimensao,
                                        id_doc: id_doc,
                                        docs: docs,
                                        opcao: 'armazenar_dados'
                                    }, function (x) {
                                        toastr[x[0].alerta](x[0].sms + " <br> Data: " + data_actual, x[0].titulo);
                                        setTimeout(function () {
                                            window.location = URL + 'app/dashboard';
                                        }, 500);
                                    }, 'json');
                            }
                        }
                    });
                }


                break;
            case "cad_utilizador":
                var nome_nome = $('.nome_utilizador').val();
                var data_nasc = $('.data_nasc_utilizador').val();
                var data_emissao_utilizador = $('.data_emissao_utilizador').val();
                var nacionalidade = $('.nacio_utilizador').val();
                var estado_civil = $('.estado_civil_utilizador').val();
                var comuna = $('.select-comuna').val();
                var bairro = $('.bairro_utilizador').val();
                var rua = $('.rua_utilizador').val();
                var email = $('.email_utilizador').val();
                var telefone1 = $('.telefone1_utilizador').val();
                var telefone2 = $('.telefone2_utilizador').val();
                var num_doc_utilizador = $('.num_doc_utilizador').val();
                var genero = $('.genero_utilizador').val();
                var tipo_doc_utilizador = $('.tipo_doc_utilizador').val();

                $.post(URL + 'utilizador/store',
                    {
                        nome_nome: nome_nome,
                        data_nasc: data_nasc,
                        data_emissao_utente: data_emissao_utilizador,
                        nacionalidade: nacionalidade,
                        estado_civil: estado_civil,
                        comuna: comuna,
                        bairro: bairro,
                        rua: rua,
                        email: email,
                        telefone1: telefone1,
                        telefone2: telefone2,
                        genero: genero,
                        num_doc_utilizador: num_doc_utilizador,
                        tipo_doc_utilizador: tipo_doc_utilizador
                    }
                    , function (x) {
                        toastr[x[0].alerta](x[0].sms + " <br> Data: " + data_actual, x[0].titulo);
                        setTimeout(function () {
                            window.location = URL + 'utilizador/novo';
                        }, 1000);
                    }, 'json');
                break;
        }

    }).hide();
    //carregado os dados do utente para mostrar com detalhes
    $('.btn_ver_detalhe').click(function () {
        $.get(URL + 'utente/detalhe', {id_cidadao: $(this).attr('id_utente')}, function (x) {
            $('.nome_utente_detalhe').text(x[0].nome);
            $('.pais_utente_detalhe').text(x[0].pais);
            $('.data_nasc_utente_detalhe').text(x[0].data_nascimento);
            $('.estado_civil_utente_detalhe').text(estado_civil(x[0].estado_civil, x[0].genero));
            $('.genero_utente_detalhe').text(x[0].genero);
            $('.comuna_utente_detalhe').text(x[0].comuna);
            $('.provincia_utente_detalhe').text(x[0].provincia);
            $('.municipio_utente_detalhe').text(x[0].municipio);
            $('.bairro_utente_detalhe').text(x[0].bairro);
            $('.rua_utente_detalhe').text(x[0].rua);
            $('.email_utente_detalhe').text(x[0].email);
            $('.telefone1_utente_detalhe').text(x[0].telefone1);
            $('.telefone2_utente_detalhe').text(x[0].telefone2);
            $('.tipo_doc_utente_detalhe').text(tipo_documento(x[0].tipo_doc));
            $('.num_doc_utente_detalhe_utente_detalhe').text(x[0].numero_doc);
            $('.data_emissao_doc_utente_detalhe').text(x[0].data_emissao_doc);
            $('.img-detalhe-utente').attr('src', URL + 'foto_utente/' + x[0].foto.trim());
        }, 'json');
    });


    //Área reservada para script de eliminar Utente
    id_utenteExc = null;
    $('.eliminar-utente').click(function () {
        id_utenteExc = $(this).attr('id_utente');
    });
    $('.btn-eliminar-utente').click(function () {
        alert(id_utenteExc);
    });

    //ligar camera
    $('.btn-ligar-camera-utente').click(function (e) {
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
        Webcam.attach('#camera_utente');
    });

    //ligar camera
    $('.btn-ligar-camera-utente_projecto').click(function (e) {
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
        Webcam.attach('#camera_utente_projecto');
    });

    //alterar a linguagem do calendário
    $('.date-picker').datepicker({
        language: 'pt',
        autoclose: true
    });

    //search-form
    var html_busca = '<div class="col-md-12" style="z-index: inherit;position: inherit">\n' +
        '        <div class="portlet light">\n' +
        '            <div class="portlet-title">\n' +
        '                <div class="caption font-blue">\n' +
        '                    <span class="caption-subject bold uppercase">  <i class="fa fa-search"></i> Resultado da procura</span>\n' +
        '                </div>\n' +
        '            </div>\n' +
        '            <div class="portlet-body">\n' +
        '                <div class=" mt-element-list">\n' +
        '                    <div class="search-page search-content-1">\n' +
        '                                <div class="search-container ">\n' +
        '                                    <ul>\n' +
        '                                        <li class="search-item clearfix">\n' +
        '                                            <div class="search-content">\n' +
        '                                                <h6 class="search-title">\n' +
        '                                                    <a href="javascript:;" class="nome-utente">Élvio Sadoc</a>\n' +
        '                                                </h6>\n' +
        '                                                <p class="search-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur pellentesque auctor. Morbi lobortis, leo in tristique scelerisque, mauris quam volutpat nunc </p>\n' +
        '                                            </div>\n' +
        '                                        </li>\n' +
        '                                    </ul>\n' +
        '                                </div>\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '            </div>\n' +
        '        </div>\n' +
        '    </div>';

    $('.search-form').submit(function (e) {
        e.preventDefault();
        var dados = $(this).serialize();
        if ($('.query').val() != null) {
            alert(dados);
            $('.fetch').show();
            $('.nome-utente').html(dados);
            $('.fetch').html(html_busca);
        }
        $('.query').val("");
    });

    //$('.fetch').hide();

    $('.elemento').click();
});
