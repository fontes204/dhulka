/**
 * Created by elviosadoc on 20/09/18.
 */
$(this).ready(function () {
// $('.div-prov,.retorno-candidatura').hide();
$('.mostra_combo_provincia,.provincia_row,.div-prov,.retorno-candidatura').hide();

    var ctrl=0;
    $('.tel-mask').mask("+244 999 999 999");
    $('.btn-bi-candidato').click(function () {
        ctrl++;
        if(ctrl%2!=0) {
            $('.outro_documento').hide();
            $('.nome-bi').text('Voltar');
            $('.num-doc').val("");
            $('.mostra_combo_provincia,.provincia_row').show();
        }else {
            $('.nome-bi').text('B. Identidade');
            $('.mostra_combo_provincia,.provincia_row').hide();
            $('.outro_documento').show();
            $('.num-doc').unmask("").val("");
        }

        if(ctrl==4)
             ctrl=0;
        // console.log(ctrl);
    });

    $('.date-picker').datepicker({
        language:'pt',
        autoclose:true
    });



    formData1=null;
    if (window.FormData) {
        formData1 = new FormData();
    }

    $.each($(".docs-candidatura"), function(key, val) {
        // var cont = $(this).find('.filha').length;

        for (var i = 1; i <=$(this).find('.filha').length; i++) {
            $('#fotos'+i).change(function () {
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
                    if (formData1) {
                        formData1.append('ficheiro[]', file);
                    }
                }
            });
        }
    });

    $.each($(".docs-candidatura"), function(key, val) {

        for (var i = 1; i <= $(this).find('.filha').length; i++)
        {
            $('#fotos'+i).hide();
        }
    });

    $(".documento").click(function () {
        if($(this).is(':checked'))
            $('#fotos'+$(this).attr('cont')).show();
        else
            $('#fotos'+$(this).attr('cont')).hide();
    });

    $('.btn-save-canditura').click(function () {
        var id_doc=[];
        $('.documento').attr('name','documento[]');
        $("input[name='documento[]']:checked").each(function(){
            id_doc.push($(this).val());
        });

        if(formData1)
        {
            $.ajax({
                url:URL+'portal/candidatura_store',
                type:'POST',
                data:formData1,
                processData:false,
                contentType:false,
                dataType:'json',
                success:function (x) {
                    var docs=[];
                    for (i in x)
                    {
                        docs.push(x[i].nomes);
                    }
                    if (x!='')
                    {

                        $.post(URL+'portal/candidatura_store',
                            {
                                opcao:'armazenar_dados',
                                nome_utente:$('.nome_utente').val(),
                                data_nasc:$('.data_nasc').val(),
                                tipo_doc:$('.tipo_doc').val(),
                                num_doc:$('.num_doc').val(),
                                data_emissao:$('.data_emissao').val(),
                                nacionalidade:$('.nacionalidade').val(),
                                genero:$('.genero').val(),
                                estado_civil:$('.estado_civil').val(),
                                comuna:$('.comuna').val(),
                                bairro:$('.bairro').val(),
                                rua:$('.rua').val(),
                                email:$('.email').val(),
                                telefone1:$('.telefone1').val(),
                                telefone2:$('.telefone2').val(),
                                dim_terreno:$('.dim_terreno').val(),
                                id_doc:id_doc,
                                id_projecto:$('.id_projecto').val(),
                                docs:docs
                            }
                            ,function (x)
                            {
                                $('.retorno-candidatura').addClass('alert');
                                $('.retorno-candidatura').addClass('alert-success');
                                $('.retorno-candidatura').addClass('fade in');
                                $('.retorno-candidatura').addClass('m-b-15');
                                $('.retorno-candidatura').html('<strong>Sucesso: </strong><span class="callback">'+x[0].sms+'</span><span class="close" data-dismiss="alert">×</span>');
                                $('.retorno-candidatura').show();

                                //limpar os campos
                                $('.nome_utente').val('');
                                $('.data_nasc').val('');
                                $('.tipo_doc').val('');
                                $('.num_doc').val('');
                                $('.data_emissao').val('');
                                $('.nacionalidade').val('');
                                $('.genero').val('');
                                $('.estado_civil').val('');
                                $('.comuna').val('');
                                $('.bairro').val('');
                                $('.rua').val('');
                                $('.email').val('');
                                $('.telefone1').val('');
                                $('.telefone2').val('');
                                $('.dim_terreno').val('');
                                // var url = window.location.href.toString();
                                //
                                // setTimeout(function () {
                                //     window.location=url;
                                // },5000);
                            },'json');
                    }
                }
            });
        }
    });

});//fim do carregamento da página