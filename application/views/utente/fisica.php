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
                    <div class="alert alert-info">
                        <h4 class="form-section">Adicionar Utente</h4>
                    </div>
                    <div class="portlet light bordered" id="form_wizard_1">
                        <div class="portlet-body form">
                            <form class="form-horizontal" action="#" id="submit_form" method="POST">
                                <div class="form-wizard">
                                    <div class="form-body">
                                        <ul class="nav nav-pills nav-justified steps">
                                            <li>
                                                <a href="#tab1" data-toggle="tab" class="step">
                                                    <span class="number"> <i class="fa fa-user -m-l-2"></i> </span>
                                                    <span class="desc">
                                                                <i class="fa fa-check"></i> Dados Pessoais </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab2" data-toggle="tab" class="step">
                                                    <span class="number"> <i class="fa fa-home -m-l-2"></i> </span>
                                                    <span class="desc">
                                                                <i class="fa fa-check"></i> Morada </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab3" data-toggle="tab" class="step active">
                                                    <span class="number"> <i class="fa fa-camera -m-l-2"></i> </span>
                                                    <span class="desc">
                                                                <i class="fa fa-check"></i> Contacto & Fotografia</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab4" data-toggle="tab" class="step">
                                                    <span class="number"> <i class="fa fa-check -m-l-2"></i> </span>
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
                                                            <label class="control-label"><i class="fa fa-user"></i> Nome Completo</label>
                                                            <input type="text" class="form-control nome_utente text-capitalize" name="nome" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 margin-top-10">
                                                        <label><i class="fa fa-venus-mars"></i>  Gênero</label>
                                                        <div class="md-radio-inline">
                                                            <div class="md-radio has-feedback">
                                                                <input id="radio55" name="gender" value="F" class="md-radiobtn genero_utente" type="radio">
                                                                <label for="radio55">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Feminino </label>
                                                            </div>
                                                            <div class="md-radio has-feedback">
                                                                <input id="radio51" name="gender" value="M" class="md-radiobtn genero_utente" checked="" type="radio">
                                                                <label for="radio51">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Masculino </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-calendar"></i> Data de Nascimento</label>
                                                            <input type="text" class="form-control date-picker data_nasc_utente" name="data_nasc" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-flag"></i> Nacionalidade</label>
                                                            <select id="single" class="form-control select2 nacio_utente" name="nacionalidade" data-placeholder="Selecione o país">
                                                                <option value=""></option>
                                                                <?php foreach ($paises as $pais):?>
                                                                <option value="<?= $pais->id;?>"><?= $pais->nome;?></option>
                                                                <?php endforeach;?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-3 div-prov">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-map-marker"></i> Província</label>
                                                            <select id="single" class="form-control select2 select-prov" name="provincia" data-placeholder="Selecione a província">
                                                                <option value=""></option>
                                                                <?php foreach ($provincia as $item):?>
                                                                    <option value="<?= $item->id;?>"><?= $item->nome;?></option>
                                                                <?php endforeach;?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 margin-top-10 tipo_doc">
                                                        <label><i class="fa fa-credit-card"></i>  Tipo de Documento</label>
                                                        <div class="md-radio-inline">
                                                            <div class="md-radio has-feedback">
                                                                <input id="radio53" name="tipo_doc" value="pspt" class="md-radiobtn tipo_doc_utente" type="radio">
                                                                <label for="radio53">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Passaporte </label>
                                                            </div>
                                                            <div class="md-radio has-feedback">
                                                                <input id="radio54" name="tipo_doc" value="crt_res" class="md-radiobtn tipo_doc_utente" checked="" type="radio">
                                                                <label for="radio54">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Cartão Residente </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-credit-card"></i> <span class="num-doc1">Número do Documento</span></label>
                                                                <input type="text" class="form-control num_doc_utente" name="num_doc" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-calendar"></i> Data de Emissão</label>
                                                                <input type="text" class="form-control date-picker data_emissao_utente" name="data_emissao" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-genderless"></i> Estado Civil</label>
                                                            <select id="singles" name="estado_civil" class="form-control select2 estado_civil_utente" data-placeholder="Selecione o estado civil">
                                                                <option value=""></option>
                                                                <option value="C">Casado(a)</option>
                                                                <option value="D">Divorciado(a)</option>
                                                                <option value="S">Solteiro(a)</option>
                                                                <option value="V">Viúvo(a)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label">Província</label>
                                                            <select id="single" class="form-control select2 select-prov" name="provincia" data-placeholder="Selecione a província">
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
                                                            <select id="single" class="form-control select2 select-municipio" name="municipio" data-placeholder="Selecione o município">
                                                                <option value=""></option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label">Comuna</label>
                                                            <select id="single" class="form-control select2 select-comuna" name="comuna" data-placeholder="Selecione a comuna">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label">Bairro</label>
<!--                                                            <input type="text" class="form-control bairro_utente" name="bairro_utente" placeholder="Nome do bairro"/>-->
                                                            <select class="form-control select2 select-bairro bairro_utente" name="bairro_utente" data-placeholder="Escolha um bairro">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label">Rua</label>
                                                            <input type="text" class="form-control rua_utente" name="bairro_utente" placeholder="Nome da Rua"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab3">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-envelope"></i> E-mail</label>
                                                            <input type="text" class="form-control email_utente" name="email_utente" placeholder="E-mail"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-phone"></i> Telelfone1</label>
                                                            <input type="text" class="form-control telefone1_utente tel-mask" name="telefone1" placeholder="Telefone1"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-phone"></i> Telefone2</label>
                                                            <input type="text" class="form-control telefone2_utente tel-mask" name="telefone2" placeholder="Telefone2"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label class="control-label"><i class="fa fa-picture-o"></i> Fotografia</label>
                                                        <p>
                                                            <a href="#camera_imagem_utente" data-toggle="modal" title="Camera" class="btn dark btn-outline btn-ligar-camera-utente"><i class="fa fa-camera"></i></a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab4">
                                                <h4 class="form-section">Dados Pessoais</h4>
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <table class="table table-striped table-bordered table-advance table-hover">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <i class="fa fa-user"></i> Nome </th>

                                                                        <th><i class="fa fa-calendar"></i> Data de Nascimento </th>
                                                                        <th>
                                                                            <i class="fa fa-flag"></i> Nacionalidade </th></th>
                                                                        <th>
                                                                            <i class="fa fa-genderless"></i> Estado Civil </th></th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="highlight">
                                                                            <label class="form-control-static" data-display="nome"> </label>
                                                                        </td>
                                                                        <td class="highlight">
                                                                            <label class="form-control-static" data-display="data_nasc"> </label>
                                                                        </td>
                                                                        <td class="highlight">
                                                                            <label class="form-control-static" data-display="nacionalidade"> </label>
                                                                        </td>
                                                                        <td class="highlight">
                                                                            <label class="form-control-static" data-display="estado_civil"> </label>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <h4 class="form-section">Morada</h4>
                                                                        <table class="table table-striped table-bordered table-advance table-hover">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-location-arrow"></i> Província </th>

                                                                                <th><i class="fa fa-location-arrow"></i> Município </th>
                                                                                <th>
                                                                                    <i class="fa fa-location-arrow"></i> Comuna </th>
                                                                                <th>
                                                                                    <i class="fa fa-location-arrow"></i> Bairro </th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="highlight">
                                                                                    <label class="form-control-static" data-display="provincia"> </label>
                                                                                </td>
                                                                                <td class="highlight">
                                                                                    <label class="form-control-static" data-display="municipio"> </label>
                                                                                </td>
                                                                                <td class="highlight">
                                                                                    <label class="form-control-static" data-display="comuna"> </label>
                                                                                </td>
                                                                                <td class="highlight">
                                                                                    <label class="form-control-static" data-display="bairro_utente"> </label>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h4 class="form-section">Contactos</h4>
                                                                        <table class="table table-striped table-bordered table-advance table-hover">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>
                                                                                    <i class="fa fa-envelope"></i> E-mail </th>

                                                                                <th><i class="fa fa-phone"></i> Telefone 1 </th>
                                                                                <th>
                                                                                    <i class="fa fa-phone"></i> Telefone 2 </th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="highlight">
                                                                                    <label class="form-control-static" data-display="email_utente"> </label>
                                                                                </td>
                                                                                <td class="highlight">
                                                                                    <label class="form-control-static" data-display="telefone1"> </label>
                                                                                </td>
                                                                                <td class="highlight">
                                                                                    <label class="form-control-static" data-display="telefone2"> </label>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 m-t-35">
                                                        <img class="thumbnail image-utente" style="width: 100%" src=<?= site_url("public/assets/pages/img/avatars/team1.jpg")?>>
                                                    </div>
                                                </div>
                                                <h4 class="form-section">(<span class="text-danger">*</span>) Selecione o tipo de assunto</h4>
                                                <div class="alert alert-info text-center">
                                                    <label for="" class="btn-group btn-group-lg">
                                                        <label class="btn blue active">
                                                            <input type="radio" value="aq" name="assunto" class="toggle btn-sel-assunto"> Aquisição
                                                        </label>
                                                        <label class="btn blue m-l-5">
                                                            <input type="radio" value="lg" name="assunto" class="toggle btn-sel-assunto"> Legalização
                                                        </label>
                                                    </label>
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
                                                <a href="javascript:;" class="btn blue button-submit" value="cad_fisica"> Cadastrar
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
