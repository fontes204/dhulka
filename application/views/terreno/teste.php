<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?= $titulo?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <!--    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />-->
    <link href=<?= site_url("public/assets/global/plugins/font-awesome/css/font-awesome.min.css");?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/assets/global/plugins/simple-line-icons/simple-line-icons.min.css");?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/assets/global/plugins/bootstrap/css/bootstrap.min.css");?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css");?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css");?> rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href=<?= site_url("public/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css");?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/assets/global/plugins/bootstrap-toastr/toastr.min.css");?> rel="stylesheet" type="text/css" />

    <link href=<?= site_url("public/assets/global/plugins/datatables/datatables.min.css")?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css")?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/assets/pages/css/profile.min.css")?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/assets/global/plugins/select2/css/select2.min.css");?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/assets/global/plugins/select2/css/select2-bootstrap.min.css");?> rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <link href=<?= site_url("public/assets/global/plugins/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css")?> rel="stylesheet" />
    <link href=<?= site_url("public/assets/pages/css/profile-2.min.css");?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/assets/global/plugins/icheck/skins/all.css");?> rel="stylesheet" type="text/css" />
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href=<?= site_url("public/assets/global/css/components.min.css");?> rel="stylesheet" id="style_components" type="text/css" />
    <link href=<?= site_url("public/assets/global/css/plugins.css");?> rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href=<?= site_url("public/assets/layouts/layout/css/layout.min.css");?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/assets/layouts/layout/css/themes/darkblue.min.css");?> rel="stylesheet" type="text/css" id="style_color" />
    <link href=<?= site_url("public/assets/layouts/layout/css/custom.min.css");?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/assets/espacamento.css");?> rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="<?= site_url('public/logo.png')?>" /> </head>
    <link href=<?= site_url("public/assets/apps/css/todo-2.min.css")?> rel="stylesheet" type="text/css" />
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 50%;
            width: 50%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
    <script src="app.js"></script>
</head>
<body>
<?php $this->load->view('head_foot/topo')?>
<div class="clearfix"> </div>
<div class="page-sidebar-wrapper">
    <?php $this->load->view('head_foot/menu');?>
    <!-- END SIDEBAR -->
</div>
<div class="page-content-wrapper1">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content1">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="javascript:;" class="text-capitalize"><?= $this->uri->segment(1)?></a>
                    <i class="fa fa-circle"></i>
                </li>
                <li class="text-capitalize">
                    <span><?= $this->uri->segment(2)?></span>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <p></p>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <div class="form-wizard">
                    <div class="form-body">

                        <div class="tab-content">
                            <div class="">
                                <div class="alert alert-info">
                                    <h4 class="form-section">Listagem de Terrenos</h4>
                                </div>
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
</div>

<script>


    // This example creates a simple polygon representing the Bermuda Triangle.

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
        var lotesPoly = [];

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



</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDokxJVZcmmRCEUTvcvuIHh5kj_JaGl6hY&callback=initMap&libraries=geometry"
        async defer></script>
</body>
</html>