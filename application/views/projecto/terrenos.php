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
                                <span class="caption-subject bold uppercase" style="color: #ff9c00">Listar Terreno - <?= $this->projecto->get_by_id($this->session->userdata('id_projecto'))->bairro?></span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                <thead style="font-weight: bold">
                                <tr>
                                    <th>#</th>
                                    <th>Código</th>
                                    <th>Lote</th>
                                    <th>Área (m<sup>2</sup>)</th>
                                    <th>Largura (m)</th>
                                    <th>Comprimento (m)</th>
                                    <th>Bloco</th>
                                    <th>Quarteirão</th>
                                    <th>Opção</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <?php
                                        $cont=0;
                                        foreach ($this->projecto->listar_terreno($this->session->userdata('id_projecto')) as $item):
                                            $cont++;
                                    ?>
                                        <tr>
                                            <td class="highlight"><?= $cont;?></td>
                                            <td class="highlight"><?= $item->codigo?></td>
                                            <td class="highlight text-center"><?= $item->lote?></td>
                                            <td class="highlight"><?= $item->area?></td>
                                            <td class="highlight"><?= $item->largura?></td>
                                            <td class="highlight"><?= $item->comprimento?></td>
                                            <td class="highlight"><?= $item->bloco?></td>
                                            <td class="highlight"><?= $item->quarteirao?></td>
                                            <td class="text-center">
                                                <a class="btn btn-circle btn-info" id_projecto="" href="<?= site_url('projecto/detalhe_terreno/'.$item->id)?>" estado="" title="">
                                                    <i class="fa fa-gear"></i>
                                            </td>
                                        </tr>
                                <?php
                                    endforeach;
                                ?>
                                </tbody>
                            </table>
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
