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
                    <div class="alert alert-info">
                        <h4 class="form-section">Criar Processo - Aquisição</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="profile-sidebar" style="border: 1px solid #e7ecf1">
                        <!-- PORTLET MAIN -->
                        <div class="portlet light profile-sidebar-portlet ">
                            <!-- SIDEBAR USERPIC -->
                            <div class="profile-userpic">
                                <img src="<?= site_url("foto_utente/".trim($this->utente->detalhe2($this->uri->segment(4))->foto))?>" class="img-responsive" alt="">
                            </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name"> <?= user_name($this->utente->detalhe2($this->uri->segment(4))->nome);?> </div>
                            </div>
                            <br>
                        </div>
                        <!-- END PORTLET MAIN -->
                        <!-- PORTLET MAIN -->
                        <div class="portlet light -m-t-20">
                            <div class="row list-separated profile-stat"></div>
                            <!-- STAT -->
                            <div class="row list-separated profile-stat">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="uppercase profile-stat-title"> 0 </div>
                                    <div class="uppercase profile-stat-text"> Processos </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="uppercase profile-stat-title"> 51 </div>
                                    <div class="uppercase profile-stat-text"> Tasks </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="uppercase profile-stat-title"> 61 </div>
                                    <div class="uppercase profile-stat-text"> Uploads </div>
                                </div>
                            </div>
                            <!-- END STAT -->
                            <div class="row list-separated profile-stat">
                                <div class="margin-top-20 profile-desc-link m-l-15">
                                    <i class="fa fa-phone m-t-5"></i>
                                    <a href="javascript:;"><?= $this->utente->detalhe2($this->uri->segment(4))->telefone1;?>, <?= $this->utente->detalhe2($this->uri->segment(4))->telefone2;?></a>
                                </div>
                                <div class="margin-top-20 profile-desc-link m-l-15">
                                    <i class="fa fa-envelope-square"></i>
                                    <a href="javascript:;" class="-m-t-5"><?= $this->utente->detalhe2($this->uri->segment(4))->email;?></a>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET MAIN -->
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="portlet light bordered" id="form_wizard_1">
                        <div class="portlet-body form">
                            <form class="form-horizontal" action="#" id="submit_form" method="POST">
                                <div class="form-wizard">
                                    <div class="form-body">
                                        <ul class="nav nav-pills nav-justified steps">
                                            <li>
                                                <a href="#tab1" data-toggle="tab" class="step">
                                                    <span class="number"> <i class="fa fa-building-o -m-l-2"></i> </span>
                                                    <span class="desc">
                                                                <i class="fa fa-check"></i> <span  style="color: #ff9c00"><b>Projecto</b></span> </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab2" data-toggle="tab" class="step">
                                                    <span class="number"> <i class="fa fa-file-archive-o -m-l-2"></i> </span>
                                                    <span class="desc">
                                                        <i class="fa fa-check"></i> <span  style="color: #ff9c00"><b>Documentos</b></span></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab3" data-toggle="tab" class="step">
                                                    <span class="number"> <i class="fa fa-check -m-l-2"></i> </span>
                                                    <span class="desc">
                                                        <i class="fa fa-check"></i> <span  style="color: #ff9c00"><b>Confirmação</b></span> </span>
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
                                                    <div class="col-md-6">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-map-marker"></i> Selecione o Projecto</label>
                                                            <select class="form-control select2 select-projecto" name="projecto" data-placeholder="Selecione o projecto">
                                                                <option value=""></option>
                                                                <?php foreach ($projectos as $projecto):?>
                                                                    <option value="<?= $projecto->id?>"><?= $projecto->bairro?></option>
                                                                <?php endforeach;?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-calculator"></i> Dimensão</label>
                                                            <select class="form-control select2 select-dimensao" name="dimensao" data-placeholder="Escolha uma Dimensão">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <div class="row text-center">
                                                    <div class="col-md-12">
                                                        <div class="div-agrega-input-file">
                                                            <?php
                                                            $cont=0;
                                                            foreach ($documentos as $docs):
                                                                $cont+=1;
                                                                ?>
                                                                <div class="fileinput fileinput-new btn-check filha" data-provides="fileinput"  indice="<?php echo $cont?>">
                                                                    <input type="checkbox" required="" id="ckeck_carrega_" class="documento input-xs" indice="<?php echo $cont?>" value="<?php echo $docs->id?>" name="txt2018" /> <b><?php echo $docs->nome?> <i class=""></i></b>
                                                                    <div class="agrega-file<?php echo $cont?>">
                                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" name="documento[]" alt="" />
                                                                        </div>
                                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                        <div>
                                                                        <span class="btn default btn-file">
                                                                            <span class="fileinput-news"> <i class="fa fa-picture-o"></i> </span>
                                                                            <span class="fileinput-exists"> Trocar </span>
                                                                            <input type="file" accept="image/*" cont="<?php echo $cont?>" name="image" id="foto<?php echo $cont?>">
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
                                                <div class="row -m-t-20">
                                                    <div class="col-md-6">
                                                        <h4 class="form-section">Documentos préviamente apresentados</h4>
                                                        <ul class="list-group doc-apresentado">

                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h4 class="form-section">Documentos em falta</h4>
                                                        <ul class="list-group doc-em-falta">

                                                        </ul>
                                                    </div>
                                                    <div class="col-md-12 -m-t-20">
                                                        <h4 class="form-section">Localização</h4>
                                                        <table class="table table-striped table-bordered table-advance table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th>Comuna </th>
                                                                <th>Bairro </th>
                                                                <th>Quarteirão </th>
                                                                <th>Rua </th>
                                                                <th>Dimensão</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td class="highlight">
                                                                    <label class="form-control-static" data-display="comuna_terreno"> </label>
                                                                </td>
                                                                <td class="highlight">
                                                                    <label class="form-control-static" data-display="bairro_terreno"> </label>
                                                                </td>
                                                                <td class="highlight">
                                                                    <label class="form-control-static" data-display="quarteirao_terreno"> </label>
                                                                </td>
                                                                <td class="highlight">
                                                                    <label class="form-control-static" data-display="rua_terreno"> </label>
                                                                </td>
                                                                <td class="highlight">
                                                                    <label class="form-control-static" data-display="largura_car"> </label>*<label class="form-control-static" data-display="comprimento_car"> </label>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
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
                                                <a href="javascript:;" class="btn blue button-submit" value="cad_processo"> Cadastrar</a>
                                                <input type="hidden" value="<?= $assunto;?>" class="id_assunto">
                                                <input type="hidden" value="<?= $this->uri->segment(4);?>" class="id_utente">
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
