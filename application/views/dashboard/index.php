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
                        <a href="#">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li class="text-capitalize">
                        <span>Início</span>
                    </li>
                </ul>
            </div>
            <br>
            <?php $this->load->view('dashboard/fetch'); ?>
            <div class="row">
                <?php
                for($i=0;$i<count($menus_topo['fa']);$i++){?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 <?= $menus_topo['cor'][$i]?>" href="<?= base_url($menus_topo['link'][$i])?>">
                            <div class="visual">
                                <i class="fa <?= $menus_topo['fa'][$i]?> m-l-25 f-s-50 text-white"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="1349">&nbsp;</span>
                                </div>
                                <div class="desc f-s-30"><?= $menus_topo['nome'][$i]?> </div>
                            </div>
                        </a>
                    </div>
                <?php  }?>
                <div class="col-md-12">
                    <i class="fa fa-mai"></i>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
