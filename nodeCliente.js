/**
 * Created by elviosadoc on 08/09/18.
 */
$(this).ready(function () {
    //node
    var socket=io.connect("http://localhost:3000");
    //enviar processo
    // $('.btn_enviar_processo').click(function (e) {
        //e.preventDefault();
        var estado=$(this).attr('estado');
        var id_processo=$(this).attr('id_processo');
        $.post(URL+'processo/enviar',
            {
                estado:4,
                id_processo:4
            }
            ,function (x) {
                socket.emit('notificacao',{
                    usuario:"Élvio Sadoc",
                    foto:"http://localhost/dhulka/foto_perfil/bb.jpg",
                    mensagem:"Enviou um processo"
                });
            });
    // });

    socket.on('notificacao',function (data) {

        Push.create(data.usuario, {
            body: data.mensagem,
            icon: data.foto,
            timeout: 15000,
            onClick: function () {
                window.focus();
                this.close();
            }
        });
    });
});