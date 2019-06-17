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
            <!-- BEGIN THEME PANEL -->
            <!-- END THEME PANEL -->
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
            <h3 class="page-title"> <i class="fa fa-plus"></i> Adicionar sub menu ao menu <span class="text-primary aux-slave" testeVal="{nome_menu}{nome}{/nome_menu}" style="text-decoration: underline">{nome_menu}{nome}{/nome_menu}</span></h3>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <span class="caption-subject font-green-sharp bold uppercase">&nbsp;</span>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form role="form" action="<?= site_url('app/add_sub_menu_menu')?>" class="frm-add-sub-menu">
                                <div class="form-body">
                                    <div class="row">
                                        {submenu}
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="mt-element-ribbon bg-grey-steel">
                                                    <div class="ribbon ribbon-clip ribbon-shadow ribbon-round ribbon-border-dash-hor ribbon-color-info uppercase">
                                                        <div class="ribbon-sub ribbon-clip"></div>
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="checkbox{id}" cod="{id}" nome="{nome}" class="md-check check-sub-menus">
                                                            <label for="checkbox{id}" class="text-capitalize">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> {nome}
                                                            </label>
                                                        </div>
                                                    </div>
                                                        <div class="ribbon-content">
                                                            <div class="icheck-inline radio_{id}"  style="margin-top: 1px">
                                                                <b>Modal?</b>
                                                                <label>
                                                                    <input type="radio" name="radio{id}" value="1"  class="icheck"> <span style="text-decoration: underline;cursor: pointer;">S</span>im </label>
                                                                <label>
                                                                    <input type="radio" name="radio{id}" value="0" checked class="icheck"> <span style="text-decoration: underline;cursor: pointer;">N</span>ão </label>
                                                            </div>
                                                <div class="margin-top-5">
                                                    <input type="text" name="control" class="form-control input-medium control{id}" placeholder="controlador" disabled>
                                                </div>
                                                <div class="hiden_{id}"></div>
                                                <div class="margin-top-10">
                                                    <input type="text" name="accao" class="form-control input-medium accao{id}" placeholder="acção" disabled>
                                                </div>
                                                        </div>
                                            </div>
                                            </div>
                                        </div>
                                        {/submenu}
                                    </div>
                                    </div>

                                <div class="form-actions right">
                                    <input type="hidden" name="id_menu" id="id_menu" value="<?= $this->uri->segment(2)?>">
                                    <button type="reset" class="btn default">Cancelar</button>
                                    <button type="submit" class="btn blue"><span style="text-decoration: underline">S</span>alvar</button>
                                </div>
                            </form>
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
