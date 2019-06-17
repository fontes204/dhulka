<!DOCTYPE html>
<html>
<head>
	<title>Map teste Google Maps</title>
	<meta name="viewport" content="initial-scale=1.0">
	<meta charset="utf-8">
	<link href=<?= site_url("public/portal/assets/plugins/bootstrap/css/bootstrap.min.css")?> rel="stylesheet" />
	<style>
		/* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
		#map {
			height: 50%;
			width: 50%;
			margin-left: 20%;
		}
		/* Optional: Makes the sample page fill the window. */
		html, body {
			height: 100%;
			margin: 0;
			padding: 0;
		}
	</style>
</head>
<body>
<br>

<div id="map"></div>

<script src=<?= site_url("public/assets/global/plugins/jquery.min.js");?> type="text/javascript"></script>
<script src=<?= site_url("public/assets/global/plugins/bootstrap/js/bootstrap.js");?> type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDokxJVZcmmRCEUTvcvuIHh5kj_JaGl6hY&callback=initMap&libraries=geometry"
		async defer></script>
<script src=<?= site_url("public/assets/apps/scripts/app/functions-map.js");?> type="text/javascript"></script>
<!--<script src=--><?//= site_url("public/assets/apps/scripts/app/google-maps.js");?><!-- type="text/javascript"></script>-->

</body>
</html>
