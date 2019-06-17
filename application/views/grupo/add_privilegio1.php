<?php $this->load->view('head_foot/topo')?>
<!-- END HEADER -->
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
            <h3 class="page-title"> <i class="fa fa-plus"></i> Adicionar privilégio ao grupo <span class="text-primary text-capitalize" style="text-decoration: underline">{nome_grupo}</span></h3>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row" style="padding-left:10px; padding-right: 10px">
                <div class="profile">
                    <div class="tabbable-line tabbable-full-width">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_1_1" data-toggle="tab"> Menus Inativos </a>
                            </li>
                            <li>
                                <a href="#tab_1_3" data-toggle="tab"> Menus Activos </a>
                            </li>
                            <li class="pull-right">
                                    <div class="md-checkbox pull-right">
                                        <input type="checkbox" id="checkbox1000" class="md-check checkboxes checkable">
                                        <label for="checkbox1000" class="text-capitalize" style="margin-top: 0">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Selecionar tudo
                                        </label>
                                    </div>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1_1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-body">
                                            <div class="row">

                                                <?php
                                                foreach($menus as $menu){
                                                    $sub_menu=$sub_menus[$menu->nome];
                                                    if(count($sub_menu)==0)continue;
                                                    ?>

                                                    <div class="col-xs-3">
                                                        <div class="mt-element-ribbon bg-grey-steel">
                                                            <div class="ribbon ribbon-clip ribbon-shadow ribbon-round ribbon-border-dash-hor ribbon-color-info uppercase">
                                                                <div class="ribbon-sub ribbon-clip"></div> <?= $menu->nome?> </div>

                                                            <div class="ribbon-content">
                                                                <ul style="list-style: none;" class="ul-sub nav list-group" action="<?= site_url('app/add_privilegio_store')?>" id_role="<?= $this->uri->segment(3);?>">
                                                                    <?php

                                                                    foreach ($sub_menu as $sub){
                                                                        ?>
                                                                        <li class="mt-list-item list-group-item">
                                                                            <div class="md-checkbox">
                                                                                <input type="checkbox" id="checkbox<?= $sub->id_msm?>" id_msm="<?= $sub->id_msm?>" class="md-check checkboxes sub-menus">
                                                                                <label for="checkbox<?= $sub->id_msm?>" class="text-capitalize " style="margin-top: 0">
                                                                                    <span></span>
                                                                                    <span class="check"></span>
                                                                                    <span class="box"></span> <?= $sub->nome?>
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <?php
                                                                    }?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php  }?>
                                            </div>
                                            <hr>
                                            <div class="form-actions pull-right bg-grey-steel footer">
                                                <input type="hidden" name="id_menu" id="id_menu" value="<?= $this->uri->segment(3)?>">
                                                <button type="reset" class="btn default">Cancelar</button>
                                                <button type="button" class="btn blue btn-add-prv" style="margin-left: 1px"><span style="text-decoration: underline">S</span>alvar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="tab_1_3">
                                <div class="row profile-account">
                                    <div class="col-md-12">
                                        <div class="form-body">
                                            <div class="row">

                                                <?php
                                                foreach($menus as $menu){
                                                    $sub_menu4=$sub_menus4[$menu->nome];
                                                    if(count($sub_menu4)==0)continue;
                                                    ?>

                                                    <div class="col-xs-3">
                                                        <div class="mt-element-ribbon bg-grey-steel">
                                                            <div class="ribbon ribbon-clip ribbon-shadow ribbon-round ribbon-border-dash-hor ribbon-color-info uppercase">
                                                                <div class="ribbon-sub ribbon-clip"></div> <?= $menu->nome?> </div>

                                                            <div class="ribbon-content">
                                                                <ul style="list-style: none;" class="ul-sub1 nav list-group" action="<?= site_url('app/delete_privilegio')?>" id_role="<?= $this->uri->segment(3);?>">
                                                                    <?php

                                                                    foreach ($sub_menu4 as $sub4){
                                                                        ?>
                                                                        <li class="mt-list-item list-group-item">
                                                                            <div class="md-checkbox">
                                                                                <input type="checkbox" id="checkbox<?= $sub4->id_msm?>" id_msm="<?= $sub4->id_msm?>" class="md-check checkboxes sub-menus1">
                                                                                <label for="checkbox<?= $sub4->id_msm?>" class="text-capitalize" style="margin-top: 0">
                                                                                    <span></span>
                                                                                    <span class="check"></span>
                                                                                    <span class="box"></span> <?= $sub4->nome?>
                                                                                </label>
                                                                            </div>
                                                                        </li>
                                                                        <?php
                                                                    }?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php  }?>
                                            </div>
                                            <hr>
                                            <div class="form-actions pull-right">
                                                <input type="hidden" name="id_menu" id="id_menu" value="<?= $this->uri->segment(3)?>">
                                                <button type="reset" class="btn default">Cancelar</button>
                                                <button type="button" class="btn blue btn-delet-prv" style="margin-left: 1px"><span style="text-decoration: underline">S</span>alvar</button>
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
