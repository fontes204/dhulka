<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if($this->session->userdata('valida')==true):
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

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
    <link href=<?= site_url("public/assets/global/plugins/typeahead/typeahead.css");?> rel="stylesheet" type="text/css" />

    <link href=<?= site_url("public/assets/global/plugins/datatables/datatables.min.css")?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css")?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/assets/pages/css/profile.min.css")?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/assets/global/plugins/select2/css/select2.min.css");?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/assets/global/plugins/select2/css/select2-bootstrap.min.css");?> rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <link href=<?= site_url("public/assets/global/plugins/cubeportfolio/css/cubeportfolio.css")?> rel="stylesheet" />
    <link href=<?= site_url("public/assets/global/plugins/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css")?> rel="stylesheet" />
    <link href=<?= site_url("public/assets/pages/css/profile-2.min.css");?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/assets/global/plugins/icheck/skins/all.css");?> rel="stylesheet" type="text/css" />
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href=<?= site_url("public/assets/global/css/components.min.css");?> rel="stylesheet" id="style_components" type="text/css" />
    <link href=<?= site_url("public/assets/global/css/plugins.min.css");?> rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <link href=<?= site_url("public/assets/pages/css/portfolio.min.css")?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/assets/pages/css/search.min.css")?> rel="stylesheet" type="text/css" />
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href=<?= site_url("public/assets/layouts/layout/css/layout.min.css");?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/assets/layouts/layout/css/themes/darkblue.min.css");?> rel="stylesheet" type="text/css" id="style_color" />
    <link href=<?= site_url("public/assets/layouts/layout/css/custom.min.css");?> rel="stylesheet" type="text/css" />
    <link href=<?= site_url("public/assets/espacamento.css");?> rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="<?= site_url('public/logo.png')?>" /> </head>
<link href=<?= site_url("public/assets/apps/css/todo-2.min.css")?> rel="stylesheet" type="text/css" />
<!-- END HEAD -->
<?php else:
    redirect(CONFIG_BASE_URL);
endif;
?>