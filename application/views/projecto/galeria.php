<?php $this->load->view('head_foot/topo') ?>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"></div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <?php $this->load->view('head_foot/menu'); ?>
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
                        <a href="javascript:;" class="text-capitalize"><?= $this->uri->segment(1) ?></a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li class="text-capitalize">
                        <span><?= $this->uri->segment(2) ?></span>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li class="text-capitalize">
                        <span><?= $this->uri->segment(3) ?></span>
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
                    <?php $this->load->view('projecto/menu') ?>
                </div>
                <div class="col-md-3">
                    <div class="profile-sidebar" style="border: 1px solid #e7ecf1">
                        <!-- PORTLET MAIN -->
                        <div class="mt-element-card mt-element-overlay">
                            <div class="mt-card-item">
                                <div class="mt-card-avatar mt-overlay-1 mt-scroll-left">
                                    <?php
                                    if ($projecto == "null") {
                                        ?>
                                        <img src="http://localhost/dhulka/foto_perfil/images8.jpg"/>
                                        <?php
                                    } else {

                                        ?>
                                        <img src="<?= site_url("galeria_projecto/" . $projecto->foto) ?>"/>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="mt-card-content">
                                    <h3 class="mt-card-name"></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="portlet light portlet-fit bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-picture-o" style="color: #ff9c00"></i>
                                <span class="caption-subject bold uppercase"
                                      style="color: #ff9c00">Galeria - <?= $this->projecto->get_by_id($this->session->userdata('id_projecto'))->bairro ?></span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="portfolio-content portfolio-2">
                                <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">
                                    <div class="cbp-item print motion">
                                        <div class="tiles">
                                            <?php foreach ($galeria as $item): ?>
                                                <div class="tile image selected">
                                                    <a href="<?= site_url('galeria_projecto/' . trim($item->foto)) ?>"
                                                       class="cbp-caption cbp-lightbox"
                                                       data-title="<i class='fa fa-file-o'></i> <b class='text-danger'>Foto</b><br><?= $item->foto ?>">
                                                    <div class="tile-body">
                                                        <img src="<?= site_url('galeria_projecto/' . trim($item->foto)) ?>"
                                                             alt="">
                                                    </div>
                                                    </a>
                                                    <div class="tile-object">
                                                        <div class="name text-primary m-l-40"> Media</div>
                                                    </div>
                                                </div>
                                            <?php
                                            endforeach;
                                            ?>
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
