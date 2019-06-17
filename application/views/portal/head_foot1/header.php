<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title><?= $titulo?></title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href=<?= site_url("public/assets/global/plugins/font-awesome/css/font-awesome.min.css");?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/portal/assets/plugins/bootstrap/css/bootstrap.min.css")?> rel="stylesheet" />
    <link href=<?= site_url("public/portal/assets/css/animate.min.css")?> rel="stylesheet" />
    <link href=<?= site_url("public/portal/assets/css/style.min.css")?> rel="stylesheet" />
    <link href=<?= site_url("public/portal/assets/css/style-responsive.min.css")?> rel="stylesheet" />
    <link href=<?= site_url("public/portal/assets/css/theme/default.css")?> id="theme" rel="stylesheet" />
    <link href=<?= site_url("public/assets/global/plugins/select2/css/select2.min.css");?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/assets/global/plugins/select2/css/select2-bootstrap.min.css");?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css");?> rel="stylesheet" type="text/css" />
    <!-- ================== END BASE CSS STYLE ================== -->
    <link href=<?= site_url("public/portal/assets/plugins/jquery.countdown/jquery.countdown.css")?> rel="stylesheet" />
    <link href=<?= site_url("public/portal/assets/plugins/isotope/isotope.css")?> rel="stylesheet" />
    <link href=<?= site_url("public/portal/assets/plugins/lightbox/css/lightbox.css")?> rel="stylesheet" />
    <!-- ================== BEGIN BASE JS ================== -->
    <script src=<?= site_url("public/portal/assets/plugins/pace/pace.min.js")?>></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body>
<!-- begin #header -->
<div id="header" class="header navbar navbar-default navbar-fixed-top">
    <!-- begin container -->
    <div class="container">
        <!-- begin navbar-header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?= site_url("portal")?>" class="navbar-brand">
                <span class="brand-logo"></span>
                <span class="brand-text">Dhulka - Portal</span>
            </a>
        </div>
        <!-- end navbar-header -->
        <!-- begin navbar-collapse -->
        <div class="collapse navbar-collapse" id="header-navbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?= site_url("portal")?>">PÁGINA INICIAL</a>
                </li>
                <li><a href="<?= site_url("portal/projectos")?>">PROJECTOS</a></li>
<!--                <li><a  data-toggle="modal"  href="#escolher_tipo_utente" class="nav-link">LEGALIZAÇÃO</a></li>-->
                <?php if ($this->uri->segment(3)!=null){?>
                <li><a href="<?= site_url("portal/candidatura/".$this->uri->segment(3))?>">CANDIDATURA</a></li>
                    <?php
                        $hidden=null;
                        if ($data_expo==0)
                            $hidden='hidden';
                        else
                            $hidden=null;
                    ?>
                <li class="<?= $hidden?>"><a href="<?= site_url("projecto/listar_candidatos_aprovados_final/".$this->uri->segment(3))?>">CANDIDATOS APURADOS</a></li>
                <?php }?>
            </ul>
        </div>
        <!-- end navbar-collapse -->
    </div>
    <!-- end container -->
</div>
<!-- end #header -->