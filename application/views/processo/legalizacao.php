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
                    <div class="portlet light bordered" id="form_wizard_1">
                        <div class="portlet-body form">
                            <form class="form-horizontal" action="#" id="submit_form" method="POST">
                                <div class="form-wizard">
                                    <div class="form-body">
                                        <ul class="nav nav-pills nav-justified steps">
                                            <li>
                                                <a href="#tab1" data-toggle="tab" class="step">
                                                    <span class="number"> 1 </span>
                                                    <span class="desc">
                                                                <i class="fa fa-check"></i> Associar Utente </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab2" data-toggle="tab" class="step">
                                                    <span class="number"> 2 </span>
                                                    <span class="desc">
                                                                <i class="fa fa-check"></i> Documentos </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab3" data-toggle="tab" class="step">
                                                    <span class="number"> 3 </span>
                                                    <span class="desc">
                                                                <i class="fa fa-check"></i> Localização </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab4" data-toggle="tab" class="step">
                                                    <span class="number"> 4 </span>
                                                    <span class="desc">
                                                                <i class="fa fa-check"></i> Confirmação </span>
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
                                            <div class="tab-pane active" id="tab1">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-search"></i> Digite a chave [ B.I ]</label>
                                                            <select class="form-control select2 chave_busca" data-placeholder="Digite o número do BI">
                                                                <option value=""></option>
                                                                <?php foreach ($utentes as $utente):?>
                                                                    <option value="<?= $utente->id?>"><?= $utente->numero_doc?></option>
                                                                <?php endforeach;?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-user"></i> Nome Completo</label>
                                                            <input type="text" class="form-control nome_utente_resgate" name="" readonly />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-calendar"></i> Data de Nascimento</label>
                                                            <input type="text" class="form-control data_nasc_utente_resgate" name="" readonly />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-cab"></i> Estado Civil</label>
                                                            <input type="text" class="form-control estado_civil_utente_resgate" name="" readonly />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <div class="row text-center">
                                                    <div class="col-md-12">
                                                        <div>
                                                            <?php
                                                            $cont=0;
                                                            foreach ($documentos as $docs):
                                                                $cont+=1;
                                                                ?>
                                                                <div class="fileinput fileinput-new btn-check" data-provides="fileinput"  indice="<?php echo $cont?>">
                                                                    <input type="checkbox" id="ckeck_carrega_" class="documento input-xs" indice="<?php echo $cont?>" value="<?php echo $docs->id?>" name="txt2018" /> <b><?php echo $docs->nome?> <i class=""></i></b>
                                                                    <div class="agrega-file<?php echo $cont?>">
                                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" name="documento[]" alt="" />
                                                                        </div>
                                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                        <div>
                                                                        <span class="btn default btn-file">
                                                                            <span class="fileinput-news"> <i class="fa fa-picture-o"></i> </span>
                                                                            <span class="fileinput-exists"> Trocar </span>
                                                                            <input type="file" accept="image/*" cont="<?php echo $cont?>" name="image" id="foto">
                                                                        </span>
                                                                            <a href="javascript:;" title="Fazer scanner do <?= $docs->nome?>" class="btn btn-info"> <i class="fa fa-print"></i> </a>
                                                                            <a href="javascript:;" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"> <i class="fa fa-trash"></i> </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach;?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab3">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-map-marker"></i> Comuna</label>
                                                            <select class="form-control select2 select-comuna_processo" data-placeholder="Selecione a comuna">
                                                                <option value=""></option>
                                                                <?php foreach ($comunas as $comuna):?>
                                                                    <option value="<?= $comuna->id?>"><?= $comuna->nome?></option>
                                                                <?php endforeach;?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label">Bairro</label>
                                                            <input type="text" class="form-control bairro_processo" name="bairro_processo" placeholder="Bairro"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label">Quarteirão</label>
                                                            <input type="text" class="form-control rua_processo" name="rua_processo" placeholder="Quarteirão"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label">Rua</label>
                                                            <input type="text" class="form-control rua_processo" name="rua_processo" placeholder="Rua"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab4">
                                                <h4 class="form-section">Dados Pessoais</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <a href="javascript:;" class="btn default button-previous">
                                                    <i class="fa fa-angle-left"></i> Voltar </a>
                                                <a href="javascript:;" class="btn btn-outline blue button-next"> Avançar
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                                <a href="javascript:;" class="btn blue button-submit" value="cad_processo"> Cadastrar
                                                    <i class="fa fa-check"></i>
                                                </a>
                                                <input type="hidden" value="<?= $assunto?>" class="id_assunto">
                                                <input type="hidden" value="" class="id_utente">
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
