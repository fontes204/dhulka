/**
 * Created by elviosadoc on 15/08/18.
 */
/**
 * Created by elviosadoc on 20/12/16.
 */
 $(this).ready(function () {

     //instrução responsável por esconde a div que contém input para carregar os ficheiros
      doc_apresentado=[];
     $.get(URL+'processo/listar_documento',function (x) {
         var cont_doc=0;
         for (i in x)
         {
            cont_doc+=1;
         }
         for(var i=1;i<=cont_doc;i++)
         {
             $('.agrega-file'+i).hide();
         }
     },'json');


     //instrucao responsavel por mostrar cada input desejado
     $(".btn-check>input[type=checkbox]").click(function () {
            if($(this).is(':checked'))
            {
                doc_apresentado.push($(this).val());
                $('.agrega-file'+$(this).attr('indice')).show();
            }
            else{
                $('.agrega-file'+$(this).attr('indice')).hide();
                doc_apresentado.pop($(this).val());
            }
     });

     // $('body').on('change', '#image', function (s) {
     //     cont = $(this).attr('cont');
     //     var tam = this.files.length, file, i = 0, reader;
     //     var formData=new FormData();
     //     for (; i < tam; i++) {
     //         file = this.files[i];
     //         // if (!!file.type.match('/image.*/'))
     //         // {
     //         // if (window.FileReader) {
     //         //     reader = new FileReader();
     //         //     // reader.onprogress=progress;
     //         //     reader.onloadend = function (e) {
     //         //         mostrarImagemCarregada(e.target.result, cont, file.fileName);
     //         //         $('.btn-upload' + cont).hide();
     //         //         $('.del-file' + cont).show();
     //         //         $('.add-doc-processo').attr('disabled', false);
     //         //         $('.tam-img').css({width: '128px', height: '128px'});
     //         //         $('.titulo1').attr('title', 'Requerimento');
     //         //         $('.titulo2').attr('title', 'Croquís de Localização');
     //         //         $('.titulo3').attr('title', 'Bilhete de Identidade');
     //         //         $('.titulo4').attr('title', 'Fotografia');
     //         //     };
     //         //     reader.readAsDataURL(file);
     //         // }
     //
     //         if (formData) {
     //             formData.append('images[]', file);
     //         }
     //         // }
     //
     //     }
     //
     // });
});