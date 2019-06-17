// This example creates a simple polygon representing the Bermuda Triangle.

initMap = async () => {
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 18,
		center: {lat: -8.818, lng: 13.225},
		mapTypeId: 'terrain'
	});
	var coords=[];

	// var URL = 'http://localhost/dhulka/terreno/get_by_id?id=1';
	var URL = 'http://localhost/dhulka/terreno/listar_todos';

	var data = await fetch(URL).then((response) => response.json());

	var cont=0;
	var Cordlote= new Array();
	var lotes = new Array();
	for (i in data)
	{
		++cont;
		Cordlote.push({
			'lat': parseFloat(data[i].lat),
			'lng': parseFloat(data[i].lng)
		});

		if(cont==4)
		{
			lotes.push(Cordlote);
			Cordlote= new Array();
			cont=0;
		}

	}


	lotes.map( (values, index) => {
		//var color = "#"+((1<<24)*Math.random()|0).toString(16);
		var color = "#"+Math.random().toString(16).substr(-6); //shorter and faster yes!
		var stroke_color="#000";
		var tracoLote = new google.maps.Polygon({
		paths: values,
		strokeColor: stroke_color,
		strokeOpacity: 0.8,
		strokeWeight: 1,
		fillColor: color,
		fillOpacity: 0.35
	});
	// console.log(tracoLote);
	// lotesPoly.push(tracoLote);
	tracoLote.setMap(map);
})

}
