/**
 * Created by elviosadoc on 25/09/18.
 */
$(this).ready(function () {

    _p_front = [];
    indices = 0;
    cont = 0;
    ponto=[];

    //initMap();

    $('.btn-add_terreno').click(function () {
        window.location=$(this).attr('href');
    });

    $('.so-numero').keypress(function (e) {
        var tecla = (window.event)?event.keyCode:e.which;
        if((tecla > 47 && tecla <58)) return true;
        else{
            if(tecla == 8 || tecla == 0) return true;
            else return false;
        }
    });

    //verificar o tipo de terreno a ser selecionado
    $('.select-num-vertice').change(function () {
        num_vert = $(this).val();
        if ($(this).val() != 4)
            $('.tipo_terreno').val('Irregular');
        else
            $('.tipo_terreno').val('Regular');
    });

    //criando os inputs para receber os valores de longitude e latitude usando a funcao geraInput(i)
    $('.select-num-vertice').change(function () {
        var i = 0, k = 1;
        for (; i < $(this).val(); i++) {
            $('.agregador-input').append(geraInput(i + 1));
        }
        for (; k <= $(this).val(); k++) {
            if (k == 1)
                $('.lat-ponto' + k + ',.btn-capturar-v' + k + ',.desc-ponto' + k + ',.log-ponto' + k).attr('disabled', false);
            else
                $('.lat-ponto' + k + ',.btn-capturar-v' + k + ',.desc-ponto' + k + ',.log-ponto' + k).attr('disabled', true);
        }
    });

    $('.agregador-input').on('click', '.btn-capturar-v1', function () {
        coordenadas('lat-ponto1', 'log-ponto1');
    });

    $('.agregador-input').on('click', '.btn-capturar-v2', function () {
        coordenadas('lat-ponto2', 'log-ponto2');
    });

    $('.agregador-input').on('click', '.btn-capturar-v3', function () {
        coordenadas('lat-ponto3', 'log-ponto3');
    });

    $('.agregador-input').on('click', '.btn-capturar-v4', function () {
        coordenadas('lat-ponto4', 'log-ponto4');
    });

    $('.agregador-input').on('click', '.btn-capturar-v5', function () {
        coordenadas('lat-ponto5', 'log-ponto5');
    });

    $('.agregador-input').on('click', '.btn-capturar-v6', function () {
        coordenadas('lat-ponto6', 'log-ponto6');
    });

    $('.agregador-input').on('click', '.btn-capturar-v7', function () {
        coordenadas('lat-ponto7', 'log-ponto7');
    });

    //area restrita para igualdade de pontos
    $('.btn-pig-front-s').click(function () {
        _p_front.push($(this).attr('valor'));
        alternador(indices);
    });

    $('.btn-pig-front-n').click(function () {
        $('#iguldade-pontos').modal('hide');
        /* _p_front.push($(this).attr('valor'));
         alternador(indices);*/
    });

    var ctrl_btn_prev=0;
    $('.button-next').click(function ()
    {
        ctrl_btn_prev++;
        if (ctrl_btn_prev==1)
        {
            gerarVertices($('.numVertice').val());
        }
    });

    $('.button-previous').click(function () {
            // removerVertice();
    });

    //$('#mapa')
});
