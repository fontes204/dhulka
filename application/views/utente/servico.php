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
            <!-- BEGIN THEME PANEL -->
            <!-- END THEME PANEL -->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="javascript:;" class="text-capitalize"><?= $this->uri->segment(1)?></a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li class="text-capitalize">
                        <span><?= $this->uri->segment(2)?>s</span>
                    </li>
                </ul>
            </div>
            <p></p>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info">
                        <h3 class="form-section">Nome do Utente</h3>
                    </div>
                </div>
            </div>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="javascript:;">
                    <div class="dashboard-stat2 ">
                        <div class="display">
                            <div class="number">
                                <h3 class="font-blue-sharp">
                                    <span data-counter="counterup" data-value="567"></span>
                                </h3>
                                <small>Novo Processo</small>
                            </div>
                            <div class="icon">
                                <i class="fa fa-file-o"></i>
                            </div>
                        </div>
                        <div class="progress-info">
                            <div class="progress">
                                        <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only">45% grow</span>
                                        </span>
                            </div>
                            <div class="status">
                                <div class="status-title"> <p></p> </div>
<!--                                <div class="status-number"> 45% </div>-->
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="javascript:;">
                        <div class="dashboard-stat2 ">
                            <div class="display">
                                <div class="number">
                                    <h3 class="font-blue-sharp">
                                        <span data-counter="counterup" data-value="567"></span>
                                    </h3>
                                    <small>Traspasse</small>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-exchange"></i>
                                </div>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                        <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only">45% grow</span>
                                        </span>
                                </div>
                                <div class="status">
                                    <div class="status-title"> <p></p> </div>
<!--                                    <div class="status-number"> 45% </div>-->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="javascript:;">
                        <div class="dashboard-stat2 ">
                            <div class="display">
                                <div class="number">
                                    <h3 class="font-blue-sharp">
                                        <span data-counter="counterup" data-value="567"></span>
                                    </h3>
                                    <small>2ª Via do Recibo</small>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-print"></i>
                                </div>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                        <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only">45% grow</span>
                                        </span>
                                </div>
                                <div class="status">
                                    <div class="status-title"> <p></p> </div>
<!--                                    <div class="status-number"> 45% </div>-->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="javascript:;">
                        <div class="dashboard-stat2 ">
                            <div class="display">
                                <div class="number">
                                    <h3 class="font-blue-sharp">
                                        <span data-counter="counterup" data-value="567"></span>
                                    </h3>
                                    <small>2ª Via do Recibo</small>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-print"></i>
                                </div>
                            </div>
                            <div class="progress-info">
                                <div class="progress">
                                        <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only">45% grow</span>
                                        </span>
                                </div>
                                <div class="status">
                                    <div class="status-title"> <p></p> </div>
<!--                                    <div class="status-number"> 45% </div>-->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
