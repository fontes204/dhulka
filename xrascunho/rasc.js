var ol=$('.frm-cad-proc-ind li[class="active"]').text().split(" ")[0];
if(ol==4)
{
    var documento=[];
    $('.documento').attr('name','documento[]');
    $("input[name='documento[]']:checked").each(function(){
        documento.push($(this).val());
    });

    var id_sga=$('.id_user').attr('id_user');
    var dados=$('#form_criar_processo').serialize();
    var url=$('#form_criar_processo').attr('action');
    var opcao='segundo';
    if(formData)
    {
        $.ajax({
            url:url,
            type:'POST',
            data:formData,
            processData:false,
            contentType:false,
            dataType:'json',
            success:function (x) {
                var fotos=[];
                for (i in x)
                {
                    fotos.push(x[i].nomes);
                }
                if (x!='')
                {
                    $.post(url,dados+'&id_sga='+id_sga+'&documento='+documento+'&opcao='+opcao+'&foto='+fotos,function (x) {
                        // alert(x);
                        if(x=='1')
                        {

                            $('.calback-sucesso-prcesso').modal('show');
                        }
                    });
                }
            }
        });
    }

}