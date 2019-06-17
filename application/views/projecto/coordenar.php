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
                    <?php $this->load->view('projecto/menu')?>
                </div>
                <div class="col-md-3">
                    <div class="profile-sidebar" style="border: 1px solid #e7ecf1">
                        <!-- PORTLET MAIN -->
                        <div class="mt-element-card mt-element-overlay">
                                    <div class="mt-card-item">
                                        <div class="mt-card-avatar mt-overlay-1 mt-scroll-left">
                                            <?php
                                                if ($projecto=="null") {
                                                    ?>
                                                    <img src="http://localhost/dhulka/foto_perfil/images8.jpg"/>
                                                    <?php
                                                }else {

                                                    ?>
                                                    <img src="<?= site_url("galeria_projecto/".$projecto->foto) ?>"/>
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
                                <i class="fa fa-list"  style="color: #ff9c00"></i>
                                <span class="caption-subject bold uppercase" style="color: #ff9c00">Detalhes - <?= $this->projecto->get_by_id($this->uri->segment(3))->bairro?></span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="mt-element-step">
                                <br/>
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th class="invoice-title uppercase text-center">Data de criação</th>
                                        <th class="invoice-title uppercase text-center">Comuna</th>
                                        <th class="invoice-title uppercase text-center">Quantidade de Terreno</th>
                                        <th class="invoice-title uppercase text-center">Coordenador</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="sbold text-center"><?= date("d-m-Y",strtotime($this->projecto->listar_projecto_detalhe_prim($this->uri->segment(3))->data_criacao));?></td>
                                        <td class="sbold text-center"><?= $this->projecto->listar_projecto_detalhe_prim($this->uri->segment(3))->comuna?></td>
                                        <td class="sbold text-center"><?php
                                                if ($total_terreno=="null")
                                                    echo number_format(0,2);
                                                else
                                                    echo number_format($total_terreno->qtde_terreno,2);
                                            ?></td>
                                        <td class="sbold text-center"><?= $this->projecto->listar_projecto_detalhe_prim($this->uri->segment(3))->coordenador?></td>
                                    </tr>
                                    </tbody>
                                </table>
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
