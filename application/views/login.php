<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
        <title>Dhulka | Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href=<?= site_url("public/assets/global/plugins/font-awesome/css/font-awesome.min.css");?> rel="stylesheet" type="text/css" />
        <link href=<?= site_url("public/assets/global/plugins/simple-line-icons/simple-line-icons.min.css");?> rel="stylesheet" type="text/css" />
        <link href=<?= site_url("public/assets/global/plugins/bootstrap/css/bootstrap.min.css");?> rel="stylesheet" type="text/css" />
        <link href=<?= site_url("public/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css");?> rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href=<?= site_url("public/assets/global/plugins/select2/css/select2.min.css");?> rel="stylesheet" type="text/css" />
        <link href=<?= site_url("public/assets/global/plugins/select2/css/select2-bootstrap.min.css");?> rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href=<?= site_url("public/assets/global/css/components.min.css");?> rel="stylesheet" id="style_components" type="text/css" />
        <link href=<?= site_url("public/assets/global/css/plugins.min.css");?> rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href=<?= site_url("public/assets/pages/css/login-4.min.css");?> rel="stylesheet" type="text/css" />
        <link href=<?= site_url("public/assets/espacamento.css");?> rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a class="lnk-l" href="#">
<!--                <h3 class="logo-l">Dhulka - <span>Gesterra</span></h3>-->
                <img src=<?= site_url("public/logo_fora.png");?> alt="" />
            </a>
            <div class="copyright f-s-14"> Dhulka - Sistema de Gestão de Terras</div>
        </div>
        <!-- END LOGO style="color: #0c39a4"-->
        <!-- BEGIN LOGIN -->
<!--        --><?php
//
//
//             $data1=new DateTime(date("24-09-2018 H:i:s"));
//             $data2=new DateTime(date("d-m-Y H:i:s"));
//             $tempoE=$data2->diff($data1);
//             $ret=$tempoE->format('%R%a dia');
//
//        echo $ret;
//        ?>
        <div class="content" style="margin-top: -2%">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-formq" id="form_login" action="<?= site_url('app/acesso')?>" method="post">
                <h3 class="form-title text-center">Inicie a sua sessão</h3>
                <div class="alert text-center alert-error-display">
                    <button class="close" data-close="alert"></button>
                    <span class="sms-error"></span>
                </div>
                <div class="form-group form-md-line-input has-info">
                    <div class="input-icon left">
                        <input type="text" class="form-control conta" required  autocomplete="off" placeholder="Digite a sua conta" name="user">
                        <label for="form_control_1">Conta</label>
                        <i class="icon-user"></i>
                    </div>
                </div>
                <div class="form-group form-md-line-input has-info">
                    <div class="input-icon left">
                        <input type="password" class="form-control conta" required autocomplete="off" placeholder="Digite a sua senha" name="senha">
                        <label for="form_control_1">Senha</label>
                        <i class="icon-lock"></i>
                    </div>
                </div>
<!--                <div class="form-group form-md-line-input has-error text-center -m-t-5">-->
<!--                    <label for="form_control_1" class="sms-error"></label>-->
<!--                </div>-->
                <div class="form-actions -m-t-10">
                    <div class="md-checkbox">
                        <input type="checkbox" id="reset_pass" name="remember" value="1" class="md-check checkboxes checkable">
                        <label for="reset_pass" class="text-capitalize ">
                            <span></span>
                            <span class="check"></span>
                            <span class="box"></span> Lembrar - me
                        </label>
                        <button type="submit" class="btn blue pull-right"> Entrar </button>
                    </div>

                </div>
                <div class="forget-password text-center">
<!--                    <h4 class="" >&nbsp;</h4>-->
                    <p>&nbsp;</p>
                </div>
<!--                <div class="forget-password text-center">-->
<!--                    <h4 class="" >Esqueceu a sua palavra passe?</h4>-->
<!--                    <p> não te preocupes, clique-->
<!--                        <a href="javascript:;" id="forget-password"> aqui </a> para restituir. </p>-->
<!--                </div>-->
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <form class="forget-form" action="index.html" method="post">
                <h3 class="text-center">Esqueceu a sua palavra passe?</h3>
                <p> Digite seu email abaixo para redefinir sua senha. </p>
                <div class="form-group">
                    <div class="input-icon">
                        <i class="fa fa-envelope"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn red btn-outline">Back </button>
                    <button type="submit" class="btn blue pull-right"> Submit </button>
                </div>
            </form>
            <!-- END FORGOT PASSWORD FORM -->
        </div>
        <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class="copyright"> <?= date('Y')?> &copy;  Cygnus - Corp Todos direitos reservados.</div>
        <!-- END COPYRIGHT -->
        <!--[if lt IE 9]>
<script src=<?= site_url("public/assets/global/plugins/respond.min.js");?></script>
<script src=<?= site_url("public/assets/global/plugins/excanvas.min.js");?></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src=<?= site_url("public/assets/global/plugins/jquery.min.js");?> type="text/javascript"></script>
        <script src=<?= site_url("public/assets/global/plugins/bootstrap/js/bootstrap.min.js");?> type="text/javascript"></script>
        <script src=<?= site_url("public/assets/global/plugins/js.cookie.min.js");?> type="text/javascript"></script>
        <script src=<?= site_url("public/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js");?> type="text/javascript"></script>
        <script src=<?= site_url("public/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js");?> type="text/javascript"></script>
        <script src=<?= site_url("public/assets/global/plugins/jquery.blockui.min.js");?> type="text/javascript"></script>
        <script src=<?= site_url("public/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js");?> type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src=<?= site_url("public/assets/global/plugins/jquery-validation/js/jquery.validate.min.js");?> type="text/javascript"></script>
        <script src=<?= site_url("public/assets/global/plugins/jquery-validation/js/additional-methods.min.js");?> type="text/javascript"></script>
        <script src=<?= site_url("public/assets/global/plugins/select2/js/select2.full.min.js");?> type="text/javascript"></script>
        <script src=<?= site_url("public/assets/global/plugins/backstretch/jquery.backstretch.min.js");?> type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <script src=<?= site_url("public/assets/apps/scripts/acesso/login.js");?> type="text/javascript"></script>
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src=<?= site_url("public/assets/global/scripts/app.min.js");?> type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src=<?= site_url("public/assets/pages/scripts/login-4.js");?> type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>