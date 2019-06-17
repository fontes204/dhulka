<?php $this->load->view('head_foot/topo')?>
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
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
                        <a href="index.html">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Page Layouts</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> <i class="icon-list"></i> Menu</h3>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light bordered">
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-body">
                                    <div class="row">
                                        {menu}
                                        <div class="col-xs-2">
                                            <div class="mt-element-ribbon bg-grey-steel">
                                                <div class="ribbon ribbon-border-hor ribbon-clip  ribbon-border-dash-hor ribbon-color-info uppercase">
                                                    <div class="ribbon-sub ribbon-clip"></div> {nome} </div>
                                                <div class="ribbon-content text-center">
                                                    <a href="<?= site_url('add_sub_menu/{id}')?>" class="btn btn-icon-only blue">
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only yellow">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-icon-only red">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        {/menu}
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
