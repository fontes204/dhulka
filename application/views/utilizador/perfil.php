<?php $this->load->view('head_foot/topo')?>
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <?php $this->load->view('head_foot/menu');?>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
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
            <div class="profile">
                <div class="tabbable-line tabbable-full-width">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab_1_1" data-toggle="tab"> Vista Geral </a>
                        </li>
                        <li>
                            <a href="#tab_1_3" data-toggle="tab"> Conta </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1_1">
                            <div class="row">
                                <div class="mt-element-card mt-element-overlay">
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="mt-card-item">
                                        <div class="mt-card-avatar mt-overlay-1">
                                            <img class="img_perfil_user img-responsive" src=<?=site_url("foto_perfil/padrao.jpg");?> />
                                            <div class="mt-overlay">
                                                <ul class="mt-info">
                                                    <li title="Webcam">
                                                        <a data-toggle="modal" class="btn default btn-outline btn-ligar-camera" href="#camera_imagem_utilizador">
                                                            <i class="icon-camera"></i>
                                                        </a>
                                                    </li>
                                                    <li title="Carregar foto">
                                                        <a data-toggle="modal" class="btn default btn-outline" href="#upload_imagem_utilizador">
                                                            <i class="fa fa-file"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mt-card-content">
                                            <h3 class="mt-card-name"><a href="javascript:;" style="text-decoration: none;" class="efeito-hover user_name"></a></h3>
                                            <p class="mt-card-desc font-grey-mint text-capitalize"><a href="javascript:;" class="efeito-hover" style="text-decoration: none"><?php echo $this->app->nome_grupo($this->session->userdata('id_role'))->nome?></a></p>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-8 profile-info">
                                            <h1 class="font-green sbold uppercase user_name"></h1>
                                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam tincidunt erat volutpat.
                                            </p>
                                            <p>
                                                <a href="javascript:;"> www.mywebsite.com </a>
                                            </p>
                                            <ul class="list-inline">
                                                <li>
                                                    <i class="fa fa-map-marker"></i> <span class="nome_pais_utlizador"></span> </li>
                                                <li>
                                                    <i class="fa fa-calendar"></i> <span class="data_nsc_utilizador"></span> </li>
                                                <li class="text-capitalize">
                                                    <i class="fa fa-briefcase"></i> <?php echo $this->app->nome_grupo($this->session->userdata('id_role'))->nome?> </li>
                                                <li>
                                                    <i class="fa fa-star"></i> Top Seller </li>
                                                <li>
                                                    <i class="fa fa-heart"></i> BASE Jumping </li>
                                            </ul>
                                        </div>
                                        <!--end col-md-8-->
                                        <div class="col-md-4">
                                            <div class="portlet sale-summary">
                                                <div class="portlet-title">
                                                    <div class="caption font-red sbold"> Resumo de Trabalho </div>
                                                    <div class="tools">
                                                        <a class="reload" href="javascript:;"> </a>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                                    <span class="sale-info"> PROCESSO ATENDIDOS
                                                                        <i class="fa fa-img-up"></i>
                                                                    </span>
                                                            <span class="sale-num num_processo">  </span>
                                                        </li>
                                                        <li>
                                                                    <span class="sale-info"> UTENTES CRIADOS
                                                                        <i class="fa fa-img-down"></i>
                                                                    </span>
                                                            <span class="sale-num"> 87 </span>
                                                        </li>
                                                        <li>
                                                            <span class="sale-info"> TOTAL </span>
                                                            <span class="sale-num"> 2377 </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-md-4-->
                                    </div>
                                    <!--end row-->
                                    <div class="tabbable-line tabbable-custom-profile">
                                        <ul class="nav nav-tabs">
                                            <li class="active txt1">
                                                <a href="#tab_1_11" data-toggle="tab"><i class="fa fa-user"></i> Meus Dados </a>
                                            </li>
                                            <li class="txt2">
                                                <a href="#tab_1_22" data-toggle="tab"> Feeds </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_1_11">
                                                <div class="portlet-body">
                                                    <form role="form">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-body">
                                                                    <div class="form-group form-md-line-input">
                                                                        <input type="password" class="form-control" name="" id="form_control_1" placeholder="">
                                                                        <label for="form_control_1">Nome Completo</label>
                                                                        <span class="sms-senha-actual"></span>
                                                                    </div>
                                                                    <div class="form-group form-md-line-input">
                                                                        <input type="password" class="form-control" name="" id="form_control_1" placeholder="">
                                                                        <label for="form_control_1">Nova Senha</label>
                                                                        <span class="help-blocks"></span>
                                                                    </div>
                                                                    <div class="form-group form-md-line-input">
                                                                        <input type="password" class="form-control" name="" id="" placeholder="">
                                                                        <label for="form_control_1">Repetir a Senha</label>
                                                                        <span class="sms-rep-senha"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-body">
                                                                    <div class="form-group form-md-line-input">
                                                                        <input type="password" class="form-control" name="" id="form_control_1" placeholder="">
                                                                        <label for="form_control_1">Nome Completo</label>
                                                                        <span class="sms-senha-actual"></span>
                                                                    </div>
                                                                    <div class="form-group form-md-line-input">
                                                                        <input type="password" class="form-control" name="" id="form_control_1" placeholder="">
                                                                        <label for="form_control_1">Nova Senha</label>
                                                                        <span class="help-blocks"></span>
                                                                    </div>
                                                                    <div class="form-group form-md-line-input">
                                                                        <input type="password" class="form-control" name="" id="form_control_1" placeholder="">
                                                                        <label for="form_control_1">Repetir a Senha</label>
                                                                        <span class="sms-rep-senha"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-actions noborder pull-right">
                                                            <button type="button" class="btn blue">Alterar</button>
                                                            <button type="reset" class="btn default">Limpar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!--tab-pane-->
                                            <div class="tab-pane" id="tab_1_22">
                                                <div class="tab-pane active" id="tab_1_1_1">
                                                    <div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
                                                        <ul class="feeds">
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-success">
                                                                                <i class="fa fa-bell-o"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> You have 4 pending tasks.
                                                                                <span class="label label-danger label-sm"> Take action
                                                                                            <i class="fa fa-share"></i>
                                                                                        </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> Just now </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New version v1.4 just lunched! </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 20 mins </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-danger">
                                                                                <i class="fa fa-bolt"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> Database server #12 overloaded. Please fix the issue. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 24 mins </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-info">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 30 mins </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-success">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 40 mins </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-warning">
                                                                                <i class="fa fa-plus"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New user registered. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 1.5 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-success">
                                                                                <i class="fa fa-bell-o"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> Web server hardware needs to be upgraded.
                                                                                <span class="label label-inverse label-sm"> Overdue </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 2 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-default">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 3 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-warning">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 5 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-info">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 18 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-default">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 21 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-info">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 22 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-default">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 21 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-info">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 22 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-default">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 21 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-info">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 22 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-default">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 21 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-info">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 22 hours </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--tab-pane-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--tab_1_2-->
                        <div class="tab-pane" id="tab_1_3">
                            <div class="row profile-account">
                                <div class="col-md-3">
                                    <ul class="ver-inline-menu tabbable margin-bottom-10">
                                        <li class="active">
                                            <a data-toggle="tab" href="#tab_2-2">
                                                <i class="fa fa-picture-o"></i> Adicionar Foto </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab_3-3">
                                                <i class="fa fa-lock"></i> Trocar Senha </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#tab_4-4">
                                                <i class="fa fa-user"></i> Trocar Username </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-9">
                                    <div class="tab-content">
                                        <div id="tab_2-2" class="tab-pane active">
<!--                                            <p>Escolha uma foto no seu computador</p>-->
                                            <form action="#" role="form" id="upload_form" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" class="img_preview" alt="" /> </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                        <div>
                                                                    <span class="btn default btn-file">
                                                                        <span class="fileinput-new"> <i class="fa fa-picture-o"></i> </span>
                                                                        <span class="fileinput-exists"> Trocar </span>
                                                                        <input type="file" name="image_file" id="image_file"> </span>
                                                            <a href="javascript:;" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"> Remover </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="margin-top-10">
                                                    <button class="btn blue btn_salvar_foto_perfil" name="upload" id="upload"> Salvar </button>
                                                    <a href="javascript:;" class="btn default"> Cancelar </a>
                                                </div>
                                            </form>
                                        </div>
                                        <div id="tab_3-3" class="tab-pane">
                                            <form role="form">
                                                <div class="form-body">
                                                    <div class="form-group form-md-line-input div-senha-actual">
                                                        <input type="password" class="form-control senha_actual" name="senha_actual" id="form_control_1" placeholder="">
                                                        <label for="form_control_1">Informe a Senha Actual</label>
                                                        <span class="sms-senha-actual"></span>
                                                    </div>
                                                    <div class="form-group form-md-line-input">
                                                        <input type="password" class="form-control senha_nova" name="senha_nova" id="form_control_1" placeholder="">
                                                        <label for="form_control_1">Nova Senha</label>
                                                        <span class="help-blocks"></span>
                                                    </div>
                                                    <div class="form-group form-md-line-input div-rep-senha">
                                                        <input type="password" class="form-control rep_senha_nova" name="rep_senha_nova" id="form_control_1" placeholder="">
                                                        <label for="form_control_1">Repetir a Senha</label>
                                                        <span class="sms-rep-senha"></span>
                                                    </div>
                                                </div>
                                                <div class="form-actions noborder pull-right">
                                                    <button type="button" class="btn blue btn-trocar-senha">Alterar</button>
                                                    <button type="reset" class="btn default">Limpar</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div id="tab_4-4" class="tab-pane">
                                            <form role="form">
                                                <div class="form-body">
                                                    <div class="form-group form-md-line-input">
                                                        <input type="text" class="form-control" id="form_control_1" placeholder="">
                                                        <label for="form_control_1">Informe a Senha</label>
                                                        <span class="help-block">Some help goes here...</span>
                                                    </div>
                                                    <div class="form-group form-md-line-input">
                                                        <input type="text" class="form-control" id="form_control_1" placeholder="">
                                                        <label for="form_control_1">Username</label>
                                                        <span class="help-block">Some help goes here...</span>
                                                    </div>
                                                </div>
                                                <div class="form-actions noborder pull-right">
                                                    <button type="button" class="btn blue">Alterar</button>
                                                    <button type="button" class="btn default">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-md-9-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
