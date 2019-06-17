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
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12 col-sm-4">
                    <div class="alert alert-info">
                        <h4 class="form-section">Novo Trespasse</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="portlet light">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <span class="caption-subject bold font-yellow-casablanca uppercase"><i class="fa fa-user font-yellow-casablanca"></i> Cedente </span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="todo-tasklist">
                                        <div class="todo-tasklist-item todo-tasklist-item-border-green">
                                            <img class="todo-userpic pull-left" src="../assets/pages/media/users/avatar4.jpg" width="27px" height="27px">
                                            <div class="todo-tasklist-item-title"> Slider Redesign </div>
                                            <div class="todo-tasklist-item-text"> Lorem dolor sit amet ipsum dolor sit consectetuer dolore. </div>
                                            <div class="todo-tasklist-controls pull-left">
                                                                <span class="todo-tasklist-date">
                                                                    <i class="fa fa-calendar"></i> 21 Sep 2014 </span>
                                                <span class="todo-tasklist-badge badge badge-roundless">Urgent</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="portlet light">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-paper-plane font-yellow-casablanca"></i>
                                        <span class="caption-subject bold font-yellow-casablanca uppercase"> Form Input </span>
                                        <span class="caption-helper">more samples...</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <h4>Heading text goes here...</h4>
                                    <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget
                                        lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet
                                        fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
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
