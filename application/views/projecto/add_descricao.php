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
                                <i class="fa fa-edit"  style="color: #ff9c00"></i>
                                <span class="caption-subject bold uppercase" style="color: #ff9c00">Adicionar Descrição - <?= $this->projecto->get_by_id($this->session->userdata('id_projecto'))->bairro?></span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="todo-tasklist">
                                <div class="todo-tasklist-item todo-tasklist-item-border-blue">
                                    <div class="todo-tasklist-item-title"><i class="fa fa-edit"></i> Adicionar Descrição</div>
                                    <div class="todo-tasklist-item-text">
                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="form-body">
                                                    <div class="form-group form-md-line-input">
                                                        <input type="text" class="form-control area_terreno so-numero" id="form_control_1" placeholder="10000ˆ2">
                                                        <label for="form_control_1"><b>Área</b></label>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input">
                                                                <input type="text" class="form-control qtde_terreno so-numero" id="form_control_1" placeholder="Quantidade de terreno">
                                                                <label for="form_control_1"><b>Quantidade de Terreno</b></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input">
                                                                <input type="text" class="form-control data_expo date-picker" id="form_control_1" placeholder="Data Limite Expo">
                                                                <label for="form_control_1"><b>Data Limite de Exposição</b></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-body">
                                                    <div class="form-group form-md-line-input">
                                                        <input type="text" class="form-control publico_alvo" id="form_control_1" placeholder="Funcionário publico, estudantes, vendedores ambulantes">
                                                        <label for="form_control_1"><b>Público Alvo</b></label>
                                                    </div>
                                                    <div class="form-group form-md-line-input" style="top: -31px">
                                                        <div class="mt-checkbox-inline">
                                                            <?php $cont=0; foreach ($dimensoes as $dimensao): $cont+=1;?>
                                                                <label class="mt-checkboxa">
                                                                    <input id="inlineCheckbox21" class="check_dim" cont="<?= $dimensao->id;?>" value="<?= $dimensao->id;?>" type="checkbox"> <?= $dimensao->combinacao;?>
                                                                    <span></span>
                                                                    <input type="text" class="form-control dimqtde<?= $dimensao->id;?> so-numero" id="form_control_1" placeholder="Quantidade" style="width: 80px" disabled>
                                                                </label>
                                                            <?php endforeach;?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-md-line-input">
                                                    <textarea class="form-control descricao" id="wysihtml5" rows="4" placeholder="Faça uma descrição do projecto"></textarea>
                                                    <label for="form_control_1"><b>Descrição</b></label>
                                                </div>
                                                <div class="form-actions noborder pull-right">
                                                    <input type="hidden" class="id_projecto" value="<?= $this->session->userdata('id_projecto')?>">
                                                    <button type="button" class="btn default">Cancelar</button>
                                                    <button type="button" class="btn blue btn_add_descricao_projecto">Salvar</button>
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
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<script src=<?= site_url("public/assets/pages/scripts/components-form-tools.min.js")?> type="text/javascript"></script>