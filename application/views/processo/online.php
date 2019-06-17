<?php $this->load->view('head_foot/topo')?>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
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
                        <i class="fa fa-circle"></i>
                    </li>
                    <li class="text-capitalize">
                        <span><?= $this->uri->segment(3)?></span>
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
                    <div class="alert alert-info">
                        <h4 class="form-section">Criar Processo - Aquisição</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="profile-sidebar" style="border: 1px solid #e7ecf1">
                        <!-- PORTLET MAIN -->
                        <div class="portlet light profile-sidebar-portlet ">
                            <!-- SIDEBAR USERPIC -->
                            <div class="profile-userpic">
                                <img src="<?= site_url("foto_utente/".trim($this->utente->detalhe2($this->uri->segment(4))->foto))?>" class="img-responsive" alt="">
                            </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name"> <?= user_name($this->utente->detalhe2($this->uri->segment(4))->nome);?> </div>
                            </div>
                            <br>
                        </div>
                        <!-- END PORTLET MAIN -->
                        <!-- PORTLET MAIN -->
                        <div class="portlet light -m-t-20">
                            <div class="row list-separated profile-stat"></div>
                            <!-- STAT -->
                            <div class="row list-separated profile-stat">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="uppercase profile-stat-title"> 0 </div>
                                    <div class="uppercase profile-stat-text"> Processos </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="uppercase profile-stat-title"> 51 </div>
                                    <div class="uppercase profile-stat-text"> Tasks </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="uppercase profile-stat-title"> 61 </div>
                                    <div class="uppercase profile-stat-text"> Uploads </div>
                                </div>
                            </div>
                            <!-- END STAT -->
                            <div class="row list-separated profile-stat">
                                <div class="margin-top-20 profile-desc-link m-l-15">
                                    <i class="fa fa-phone m-t-5"></i>
                                    <a href="javascript:;"><?= $this->utente->detalhe2($this->uri->segment(4))->telefone1;?>, <?= $this->utente->detalhe2($this->uri->segment(4))->telefone2;?></a>
                                </div>
                                <div class="margin-top-20 profile-desc-link m-l-15">
                                    <i class="fa fa-envelope-square"></i>
                                    <a href="javascript:;" class="-m-t-5"><?= $this->utente->detalhe2($this->uri->segment(4))->email;?></a>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET MAIN -->
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-edit"></i>
                                <span class="caption-subject bold uppercase">Modo como fez a inscrição</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="mt-element-step">
                                <br/>
                                <div class="row step-background-thin">
                                    <div class="col-md-2">&nbsp;</div>
                                    <div class="col-md-4 bg-grey-steel mt-step-col active">
                                        <a href="#" style="text-decoration: none">
                                            <div class="mt-step-number"><i class="fa fa-desktop"></i></div>
                                            <div class="mt-step-title uppercase font-grey-cascade">On-line</div>
                                            <div class="mt-step-content font-grey-cascade">&nbsp;</div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 bg-grey-steel mt-step-col">
                                        <a href="#" style="text-decoration: none">
                                            <div class="mt-step-number"><i class="fa fa-user"></i></div>
                                            <div class="mt-step-title uppercase font-grey-cascade">Presêncial</div>
                                            <div class="mt-step-content font-grey-cascade">&nbsp;</div>
                                        </a>
                                    </div>
                                    <div class="col-md-2">&nbsp;</div>
                                    <br>
                                </div>
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
