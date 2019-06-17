/**
 * Created by elviosadoc on 14/08/18.
 */
$(this).ready(function () {
    URL='http://localhost/dhulka/';
    // URL='http://169.254.31.165/dhulka/';

    //populando a combo de municipios por provincias
    $('.select-prov').change(function () {

        $.get(URL+'municipio/listById', {'id_prov': $(this).val()}, function (x) {
            var item = '';
            if (x[0].erro) {
                item += '<option class="text-danger">' + x[0].erro + '</option>';
            } else {
                item += '<option value="">Escolhe o município</option>';
                for (i in x) {
                    item += '<option value="' + x[i].id + '">' + x[i].nome + '</option>';
                }
            }
            $('.select-municipio').html(item);
        },'json');

    });

    //populando a combo de comuna por municipios
    $('.select-municipio').change(function () {

        $.get(URL+'municipio/listarComunaByIdMunicipio', {'id_municipio': $(this).val()}, function (x) {
            var item = '';
            if (x[0].erro) {
                item += '<option class="text-danger">' + x[0].erro + '</option>';
            } else {
                item += '<option value="">Escolhe a comuna</option>';
                for (i in x) {
                    item += '<option value="' + x[i].id + '">' + x[i].nome + '</option>';
                }
            }
            $('.select-comuna').html(item);
        },'json');

    });

    //populando a combo de bairro por comunas
    $('.select-comuna').change(function () {

        $.get(URL+'municipio/listarBairroByIdComuna', {'id_comuna': $(this).val()}, function (x) {
            var item = '';
            if (x[0].erro) {
                item += '<option class="text-danger">' + x[0].erro + '</option>';
            } else {
                item += '<option value="">Escolhe o bairro</option>';
                for (i in x) {
                    item += '<option value="' + x[i].id + '">' + x[i].nome + '</option>';
                }
            }
            $('.select-bairro').html(item);
        },'json');

    });

    $('.select-prov-mask').change(function () {
        $.get(URL+'municipio/get_sigla',{'param':$(this).val()},function (x) {
            $('.num-doc').mask("999999999"+x.trim()+"999");
        });
    });
});