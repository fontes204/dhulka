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
                                                                <i class="fa fa-check"></i> Dados Institucional </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab2" data-toggle="tab" class="step">
                                                    <span class="number"> 2 </span>
                                                    <span class="desc">
                                                                <i class="fa fa-check"></i> Morada </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab3" data-toggle="tab" class="step active">
                                                    <span class="number"> 3 </span>
                                                    <span class="desc">
                                                                <i class="fa fa-check"></i> Contacto </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab4" data-toggle="tab" class="step">
                                                    <span class="number"> 4 </span>
                                                    <span class="desc">
                                                                <i class="fa fa-check"></i> Documentos </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab5" data-toggle="tab" class="step">
                                                    <span class="number"> 5 </span>
                                                    <span class="desc">
                                                                <i class="fa fa-check"></i> Localização </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div id="bar" class="progress progress-striped" role="progressbar">
                                            <div class="progress-bar progress-bar-success"> </div>
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
                                                            <label class="control-label"><i class="fa fa-home"></i> Nome da Instituição</label>
                                                            <input type="text" class="form-control" name="nome" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-asterisk"></i> NIF</label>
                                                            <input type="text" class="form-control" name="nif" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-home"></i> Tipo de Instituição</label>
                                                            <select id="singlea" class="form-control select2" data-placeholder="Selecione a instituição">
                                                                <option value=""></option>
                                                                <?php foreach ($instituicoes as $instituicao):?>
                                                                <option value="<?= $instituicao->id?>"><?= $instituicao->nome?></option>
                                                                <?php endforeach;?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-calendar"></i> Data de Fundação</label>
                                                            <input type="text" class="form-control date-picker" name="data_fundacao" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="input-group col-md-12">
                                                            <label><i class="fa fa-venus-mars"></i> Gênero</label>
                                                            <div class="icheck-inline">
                                                                <label>
                                                                    <input type="radio" name="genero" class="icheck"> Feminino </label>
                                                                <label>
                                                                    <input type="radio" name="genero" checked class="icheck"> Masculino </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label">Província</label>
                                                            <select id="single" class="form-control select2" name="provincia" data-placeholder="Selecione a província">
                                                                <option value=""></option>
                                                                <?php foreach ($provincia as $item):?>
                                                                    <option value="<?= $item->id;?>"><?= $item->nome;?></option>
                                                                <?php endforeach;?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label">Município</label>
                                                            <select id="single" class="form-control select2" name="nacionalidade" data-placeholder="Selecione o município">
                                                                <option value=""></option>
                                                                <?php foreach ($provincia as $item):?>
                                                                    <option value="<?= $item->id;?>"><?= $item->nome;?></option>
                                                                <?php endforeach;?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label">Comuna</label>
                                                            <select id="single" class="form-control select2" name="nacionalidade" data-placeholder="Selecione a comuna">
                                                                <option value=""></option>
                                                                <?php foreach ($provincia as $item):?>
                                                                    <option value="<?= $item->id;?>"><?= $item->nome;?></option>
                                                                <?php endforeach;?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label">Bairro</label>
                                                            <input type="text" class="form-control" name="bairro_utente" placeholder="Nome do bairro"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab3">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label">E-mail</label>
                                                            <input type="text" class="form-control" name="email_utente" placeholder="E-mail"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label">Telelfone1</label>
                                                            <input type="text" class="form-control" name="telefone1" placeholder="Telefone1"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label">Telefone2</label>
                                                            <input type="text" class="form-control" name="telefone2" placeholder="Telefone2"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab4">
                                                Documentos
                                            </div><div class="tab-pane" id="tab5">
                                                Localizacao do Terreno
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <a href="javascript:;" class="btn default button-previous">
                                                    <i class="fa fa-angle-left"></i> Voltar </a>
                                                <a href="javascript:;" class="btn btn-outline green button-next"> Avançar
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                                <a href="javascript:;" class="btn green button-submit"> Cadastrar
                                                    <i class="fa fa-check"></i>
                                                </a>
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
