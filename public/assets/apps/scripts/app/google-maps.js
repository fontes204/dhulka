$(this).ready(function () {
	var coords=[];
	$.get("http://localhost/dhulka/terreno/get_by_id",{
			id:1
		},
		function (x) {
			for(i in x)
			{
				coords.push({
					'lat':x[i].lat,
					'lng':x[i].lng
				});
			}
			alert(coords[0].lat);
		}
		,'json');
});
