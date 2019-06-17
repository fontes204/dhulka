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
                        <h4 class="form-section">Adicionar Terreno</h4>
                    </div>
                    <div class="portlet light bordered" id="form_wizard_1">
                        <div class="portlet-body form">
                            <form class="form-horizontal" action="#" id="submit_form" enctype="multipart/form-data" method="POST">
                                <div class="form-wizard">
                                    <div class="form-body">
                                        <ul class="nav nav-pills nav-justified steps">
                                            <li>
                                                <a href="#tab1" data-toggle="tab" class="step">
                                                    <span class="number"> 1 </span>
                                                    <span class="desc">
                                                        <i class="fa fa-check"></i> Dados do Terreno
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab2" data-toggle="tab" class="step">
                                                    <span class="number"> 2 </span>
                                                    <span class="desc">
                                                        <i class="fa fa-check"></i> Capturar Vértices
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab3" data-toggle="tab" class="step">
                                                    <span class="number"> 3 </span>
                                                    <span class="desc">
                                                        <i class="fa fa-check"></i> Carregar Fotos
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab4" data-toggle="tab" class="step">
                                                    <span class="number"> 4 </span>
                                                    <span class="desc">
                                                        <i class="fa fa-check"></i> Confirmação
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div id="bar" class="progress progress-striped" role="progressbar">
                                            <div class="progress-bar progress-bar-info"> </div>
                                        </div>
                                        <div class="tab-content">
                                            <div class="alert alert-danger display-none">
                                                <button class="close" data-dismiss="alert"></button> Ocorreu um determinado erro, por favor veirfica bem os dados. </div>
                                            <div class="alert alert-success display-none">
                                                <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                            <div class="tab-pane" id="tab1">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group col-md-12">
                                                            <?php
                                                            if ($this->session->userdata('projecto_bool')) {
                                                                ?>
                                                                <label class="">Zona</label>
                                                                <select class="select2 form-control id_zona" name="zona"
                                                                        data-placeholder="Selecione a Zona">
<!--                                                                    <option value=""></option>-->
                                                                        <option select="select" value="<?= $this->projecto->get_nome_projecto($this->session->userdata('id_projecto'))->id ?>"><?= $this->projecto->get_nome_projecto($this->session->userdata('id_projecto'))->nome ?></option>
                                                                </select>
                                                                <?php
                                                            }else {
                                                                ?>
                                                                <label class="">Selecione a Zona</label>
                                                                <select class="select2 form-control id_zona" name="zona"
                                                                        data-placeholder="Selecione a Zona">
                                                                    <option value=""></option>
                                                                    <?php foreach ($bairros as $bairro): ?>
                                                                        <option value="<?= $bairro->id ?>"><?= $bairro->nome ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                                <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group col-md-12">
                                                            <label>Bloco</label>
                                                            <input type="text" name="bloco" value=""  placeholder="BP" class="form-control bloco" data-parsley-group="wizard-step-1" required data-parsley-required="true" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group col-md-12">
                                                            <label>Quarteirão</label>
                                                            <input type="text" value="" name="quarteirao"  placeholder="BP1" class="form-control quarteirao" data-parsley-group="wizard-step-1" required data-parsley-required="true" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group col-md-12">
                                                            <label>Lote</label>
                                                            <input type="text" name="areaTerreno" value="" placeholder="129" class="form-control lote so-numero" data-parsley-group="wizard-step-1" required data-parsley-required="true" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="col-md-offset-2">Área do Terreno</label>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" name="areaTerreno" value="" placeholder="L" class="form-control so-numero largura" data-parsley-group="wizard-step-1" required data-parsley-required="true" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="text" name="areaTerreno" value="" placeholder="C" class="form-control so-numero comprimento" data-parsley-group="wizard-step-1" required data-parsley-required="true" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group col-md-12">
                                                            <label>Número de Vértices</label>
                                                            <input type="number" min="4" max="7" class="form-control numVertice"  name="numVertice" id="numVertice" placeholder="Número de Vértices" data-parsley-group="wizard-step-1" required data-parsley-required="true">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <div class="row agregador-input"></div>
                                            </div>
                                            <div class="tab-pane" id="tab3">
                                                <div class="todo-tasklist">
                                                    <div class="todo-tasklist-item todo-tasklist-item-border-blue">
                                                        <div class="todo-tasklist-item-title"><i class="fa fa-file-picture-o"></i> Carregar Foto</div>
                                                        <div class="todo-tasklist-item-text">
                                                            <input type="file" name="foto[]" class="form-control foto" multiple>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane text-center" id="tab4">
                                                Os dados foram preenchido correctamente...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
											<input type="hidden" class="id_utente" value="<?= $id_utente?>">
                                            <div class="col-md-offset-3 col-md-9">
                                                <a href="javascript:;" class="btn default button-previous">
                                                    <i class="fa fa-angle-left"></i> Voltar </a>
                                                <a href="javascript:;" class="btn btn-outline blue button-next"> Avançar
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                                <button type="submit" class="btn blue button-submit" value="cad_terreno"> Cadastrar</button>
                                            </div>
                                        </div>
                                    </div>
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
