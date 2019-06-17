<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Portal Dhulka | Projectos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href=<?= site_url("public/portal/nova/css/bootstrap.min.css")?>>
    <link href=<?= site_url("public/portal/assets/plugins/bootstrap/css/bootstrap.min.css")?> rel="stylesheet" />
    <link href=<?= site_url("public/portal/assets/css/theme/default.css")?> id="theme" rel="stylesheet" />
    <link rel="stylesheet" href=<?= site_url("public/portal/nova/css/bootstrap-responsive.min.css")?>>
    <link rel="stylesheet" href=<?= site_url("public/portal/nova/css/font-awesome.min.css")?>>
    <link rel="stylesheet" href=<?= site_url("public/portal/nova/css/main.css")?>>
    <link href=<?= site_url("public/portal/assets/css/style.min.css")?> rel="stylesheet" />

    <link rel="stylesheet" href=<?= site_url("public/portal/nova/css/sl-slide.css")?>>

    <script src=<?= site_url("public/portal/nova/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js")?>></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href=<?= site_url("public/portal/nova/images/ico/favicon.ico")?>>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href=<?= site_url("public/portal/nova/images/ico/apple-touch-icon-144-precomposed.png")?>>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href=<?= site_url("public/portal/nova/images/ico/apple-touch-icon-114-precomposed.png")?>>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href=<?= site_url("public/portal/nova/images/ico/apple-touch-icon-72-precomposed.png")?>>
    <link rel="apple-touch-icon-precomposed" href=<?= site_url("public/portal/nova/images/ico/apple-touch-icon-57-precomposed.png")?>>
</head>

<body>

<!--Header-->
<header class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a id="logo" class="pull-left" href="<?= site_url("portal")?>"></a>
            <div class="nav-collapse pull-right">
                <ul class="nav">
                    <li class="active"><a href="<?= site_url("portal")?>">Página Inicial</a></li>
                    <li><a href="<?= site_url("portal/projectos")?>">PROJECTOS</a></li>
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
                    <li class="login">
                        <a data-toggle="modal" href="#loginForm"><i class="icon-lock"></i></a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</header>
<!-- /header -->