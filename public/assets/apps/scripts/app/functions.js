/**
 * Created by elviosadoc on 21/08/18.
 */
//estado civil
function estado_civil(t1,t2) {
    var ret=null;
    switch (t1)
    {
        case "C":
            if(t2=="F")
                ret="Casada";
            else
                ret="Casado";
            break;
        case "D":
            if(t2=="F")
                ret="Divorciada";
            else
                ret="Divorciado";
            break;
        case "S":
            if(t2=="F")
                ret="Solteira";
            else
                ret="Solteiro";
            break;
        case "V":
            if(t2=="F")
                ret="Viúva";
            else
                ret="Viúvo";
            break;
    }
    return ret;
}

//tipo de documento
function tipo_documento(t)
{
    var ret=null;
    switch (t)
    {
        case "pspt":
            ret="Passaporte";
            break;
        case "bi":
            ret="Bilhete de Identidade";
            break;
        case "crt_res":
            ret="Cartão de Residente";
            break;

    }
    return ret;
}

function user(param)
{
    var ret=null;
    var aux=param.split(" ");
    for(var i=0;i<aux.length;i++)
    {
        ret=aux[0]+'.'+aux[i];
    }
    return ret.toLowerCase();
}

function usuario(param)
{
    var ret=null;
    var aux=param.split(" ");
    for(var i=0;i<aux.length;i++)
    {
        ret=aux[1]+' '+aux[i];
    }
    return ret;
}

function user1(param)
{
    var ret=null;
    var aux=param.split(" ");
    for(var i=0;i<aux.length;i++)
    {
        ret=aux[i];
    }
    return ret.toLowerCase();
}

function senha(param1,param2)
{
    var ret=null;
    var aux=param1.split(".");
    for(var i=0;i<aux.length;i++)
    {
        ret=aux[0];
    }
    return user1(param2)+''+ret.toLowerCase();
}


//área dos vértices
function geraInput(i) {

    var html='<div class="col-md-3">'+
        '<div class="form-group col-md-12">'+
        '<label class="control-label">Longitude   <span class="text-info">'+i+'º Vértice</span></label>'+
        '<input type="text" required class="form-control log-ponto'+i+'" name="log-ponto" />'+
        '</div>'+
        '<div class="form-group col-md-12">'+
        '<label class="control-label">Latitude</label>'+
        '<input type="text" required class="form-control lat-ponto'+i+'" name="lat-ponto" />'+
        '</div>'+
        '<div class="form-group col-md-12 text-center">'+
        '<button type="button" class="btn btn-sm blue btn-capturar-v'+i+'">Capturar</button>'+
        '</div>'+
        '</div>';

    return html;
}
function attrDesabilitado() {
    $('.lat-ponto1,.log-ponto1,.desc-ponto1,.btn-capturar-ponto1').attr('disabled',false);
    $('.lat-ponto2,.log-ponto2,.desc-ponto2,.btn-capturar-ponto2,.lat-ponto3,.log-ponto3,.desc-ponto3,.btn-capturar-ponto3,.lat-ponto4,.log-ponto4,.desc-ponto4,.btn-capturar-ponto4').attr('disabled',true);
}

function tiraNumString(valor)
{
    var rx='';
    for (var i=0;i<valor.length;i++)
    {
        rx=valor[i];
    }
    return rx;
}
function alternador(t)
{
    var inct=+t+1;
    var t=+t;
    // setTimeout(function () {
        $('.lat-ponto'+inct+',.log-ponto'+inct+',.desc-ponto'+inct+',.btn-capturar-v'+inct+'').attr('disabled',false);
        $('.lat-ponto'+t+',.log-ponto'+t+',.desc-ponto'+t+',.btn-capturar-v'+t+'').attr('disabled',true);
    // },1000);
}

function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 18,
        center: {lat: -8.818, lng: 13.225},
        mapTypeId: 'terrain'
    });

    // Define the LatLng coordinates for the polygon's path.
    var loteCordenadas = [
        {lat: -8.818443, lng: 13.224977},
        {lat: -8.818344, lng: 13.225240},
        {lat: -8.818491, lng: 13.225319},
        {lat: -8.818585, lng: 13.225061}
    ];

    var loteCordenadas2 = [
        {lat: -8.818633, lng: 13.225107},
        {lat: -8.818590, lng: 13.225313},
        {lat: -8.818708, lng: 13.225370},
        {lat: -8.818743, lng: 13.225156}
    ];

    var lotes = [loteCordenadas, loteCordenadas2];
    var lotesPoly = []

    lotes.map( (values, index) => {
        //var color = "#"+((1<<24)*Math.random()|0).toString(16);
        var color = "#"+Math.random().toString(16).substr(-6); //shorter and faster yes!
    var tracoLote = new google.maps.Polygon({
        paths: values,
        strokeColor: color,
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: color,
        fillOpacity: 0.35
    });
    console.log(tracoLote);
    lotesPoly.push(tracoLote);
    tracoLote.setMap(map);
    tracoLote.addListener('click', showDialog(index));





    var myPoint = new google.maps.LatLng(-8.818488, 13.225126)
    var value = google.maps.geometry.poly.containsLocation(myPoint, tracoLote);
    console.log("value: "+validPoint(myPoint));
})

    function showDialog(index){
        var infoWindow = new google.maps.InfoWindow;
        var contentS = '<b>Lote: </b>' + index+1;
        infoWindow.setContent(contentS);
        infoWindow.open(map);
    }
    function validPoint(point){
        var result;
        lotesPoly.map((values, index) => {
            var value = google.maps.geometry.poly.containsLocation(point, values);
        if(value){
            result = true
        }else{
            result = false
        }
    })

        return result

    }


}

function coordenadas(lat,lng) {

    var t=lat.split("-")[1];
    var lat=$('.'+lat).val();
    var lng=$('.'+lng).val();
    var id_zona=$('.id_zona').val();
    ponto.push({
        'latitude':lat,
        'longitude':lng
    });
    alternador(tiraNumString(t));
    // $.get(URL+'terreno/verificacao',{'lat':lat,'lng':lng,'id_zona':id_zona},function (x) {
    //     // alert(x);
    //     // alert(x[0].nome+' '+x[0].id+' '+x[0].sobre);
    //     if(x[0].nome!=null && x[0].id!=0 && x[0].tipo=="igual")
    //     {
    //         $('.nomeRequerenteIgu').text(x[0].nome);
    //         $('#iguldade-pontos').modal('show');
    //         indices=tiraNumString(t);
    //     }else if(x[0].sobre!=null && x[0].tipo=="sobre")
    //     {
    //         $('.nomeRequerenteIgu').text(x[0].nome);
    //         $('#sobreposicao-terreno').modal('show');
    //     }else if (x[0].nome==null && x[0].id==null && x[0].sobre==null && x[0].tipo==null){
    //         _p_front.push('n');
    //         alternador(tiraNumString(t));
    //     }
    // },'json');
}

function gerarVertices(num) {
    var i=0,k=1;
    for ( ;i<num;i++)
    {
        $('.agregador-input').append(geraInput(i+1));
    }
    for ( ;k<=num;k++)
    {
        if(k==1)
            $('.lat-ponto'+k+',.btn-capturar-v'+k+',.desc-ponto'+k+',.log-ponto'+k).attr('disabled',false);
        else
            $('.lat-ponto'+k+',.btn-capturar-v'+k+',.desc-ponto'+k+',.log-ponto'+k).attr('disabled',true);
    }
}

function removerVertice() {
    $('.agregador-input').html('');
}