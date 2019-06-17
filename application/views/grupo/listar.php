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
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <p></p>
            <?php $this->load->view('dashboard/fetch'); ?>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-wizard">
                        <div class="form-body">

                            <div class="tab-content">
                                <div class="">
                                    <div class="alert alert-info">
                                        <h4 class="form-section">Listagem de Grupo</h4>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="mt-element-card mt-element-overlay">
                                            <div class="row">
                                                {grupo}
                                                <div class="col-md-2">
                                                        <div class=" mt-element-ribbon ribbon-content mt-card-item">
                                                            <div class="ribbon ribbon-clip ribbon-shadow ribbon-round ribbon-border-dash-hor ribbon-color-info f-s-12 -m-t-15 uppercase">
                                                                <div class="ribbon-sub ribbon-clip"></div> {nome}
                                                            </div>
                                                            <div class="mt-card-avatar mt-overlay-1 m-t-28">
                                                                <img class="img-thumbnail" src=<?= site_url("public/assets/pages/img/avatars/team17.png");?> />
                                                                <div class="mt-overlay">
                                                                    <ul class="mt-info"></ul>
                                                                </div>
                                                            </div>
                                                            <div class="mt-card-content">
                                                                <div class="mt-card-social">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="<?= site_url('grupo/add_privilegio/{id}')?>"  title="add privilégio">
                                                                                <i class="icon icon-settings"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;" title="Editar">
                                                                                <i class="icon icon-pencil "></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;" title="Eliminar">
                                                                                <i class="icon icon-trash "></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                {/grupo}
                                            </div>
                                        </div>
                                    </div>
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
