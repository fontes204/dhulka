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
                        <h4 class="form-section">Adicionar Utilizador</h4>
                    </div>
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
                                                                <i class="fa fa-check"></i> Dados Pessoal </span>
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
                                                                <i class="fa fa-check"></i> Contacto</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab4" data-toggle="tab" class="step">
                                                    <span class="number"> 6 </span>
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
                                                            <input type="text" class="form-control nome_utilizador" name="nome" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 margin-top-10">
                                                        <label><i class="fa fa-venus-mars"></i>  Gênero</label>
                                                        <div class="md-radio-inline">
                                                            <div class="md-radio has-feedback">
                                                                <input id="radio55" name="gender" value="F" class="md-radiobtn genero_utilizador" type="radio">
                                                                <label for="radio55">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Feminino </label>
                                                            </div>
                                                            <div class="md-radio has-feedback">
                                                                <input id="radio51" name="gender" value="M" class="md-radiobtn genero_utilizador" checked="" type="radio">
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
                                                            <input type="text" class="form-control date-picker data_nasc_utilizador" name="data_nasc" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-flag"></i> Nacionalidade</label>
                                                            <select id="single" class="form-control select2 nacio_utilizador" name="nacionalidade" data-placeholder="Selecione o país">
                                                                <option value=""></option>
                                                                <?php foreach ($paises as $pais):?>
                                                                    <option value="<?= $pais->id;?>"><?= $pais->nome;?></option>
                                                                <?php endforeach;?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 margin-top-10">
                                                        <label><i class="fa fa-credit-card"></i>  Tipo de Documento</label>
                                                        <div class="md-radio-inline">
                                                            <div class="md-radio has-feedback">
                                                                <input id="radio53" name="tipo_doc" value="pspt" class="md-radiobtn tipo_doc_utilizador" type="radio">
                                                                <label for="radio53">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Passaporte </label>
                                                            </div>
                                                            <div class="md-radio has-feedback">
                                                                <input id="radio54" name="tipo_doc" value="crt_res" class="md-radiobtn tipo_doc_utilizador" checked="" type="radio">
                                                                <label for="radio54">
                                                                    <span class="inc"></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Cartão Residente </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-credit-card"></i> Número do Documento</label>
                                                            <input type="text" class="form-control num_doc_utilizador" name="num_doc" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-calendar"></i> Data de Emissão</label>
                                                            <input type="text" class="form-control date-picker data_emissao_utilizador" name="data_emissao" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-genderless"></i> Estado Civil</label>
                                                            <select id="singles" name="estado_civil" class="form-control select2 estado_civil_utilizador" data-placeholder="Selecione o estado civil">
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
                                                            <label class="control-label"><i class="fa fa-location-arrow"></i> Província</label>
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
                                                            <label class="control-label"><i class="fa fa-location-arrow"></i> Município</label>
                                                            <select id="single" class="form-control select2 select-municipio" name="municipio" data-placeholder="Selecione o município">
                                                                <option value=""></option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-location-arrow"></i> Comuna</label>
                                                            <select id="single" class="form-control select-comuna select2" name="comuna" data-placeholder="Selecione a comuna">
                                                                <option value=""></option>>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label">Bairro</label>
                                                            <!--                                                            <input type="text" class="form-control bairro_utente" name="bairro_utente" placeholder="Nome do bairro"/>-->
                                                            <select class="form-control select2 select-bairro bairro_utilizador" name="bairro_utente" data-placeholder="Escolha um bairro">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                    </div>
<!--                                                    <div class="col-md-2">-->
<!--                                                        <div class="form-group col-md-12">-->
<!--                                                            <label class="control-label"><i class="fa fa-location-arrow"></i> Bairro</label>-->
<!--                                                            <input type="text" class="form-control bairro_utilizador" name="bairro_utente" placeholder="Nome do bairro"/>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
                                                    <div class="col-md-2">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-location-arrow"></i> Rua</label>
                                                            <input type="text" class="form-control rua_utilizador" name="rua_utilizador" placeholder="Nome da Rua"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab3">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-envelope"></i> E-mail</label>
                                                            <input type="text" class="form-control email_utilizador" name="email_utilizador" placeholder="E-mail"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-phone"></i> Telelfone1</label>
                                                            <input type="text" class="form-control telefone1_utilizador" name="telefone1" placeholder="Telefone1"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group col-md-12">
                                                            <label class="control-label"><i class="fa fa-phone"></i> Telefone2</label>
                                                            <input type="text" class="form-control telefone2_utilizador" name="telefone2" placeholder="Telefone2"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab4">
                                                <h4 class="form-section">Dados Pessoais</h4>
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
                                                                    <i class="fa fa-location-arrow"></i> Comuna </th></th>
                                                                <th>
                                                                    <i class="fa fa-location-arrow"></i> Bairro </th></th>
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
                                                                    <i class="fa fa-phone"></i> Telefone 2 </th></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td class="highlight">
                                                                    <label class="form-control-static" data-display="email_utilizador"> </label>
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
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <a href="javascript:;" class="btn default button-previous">
                                                    <i class="fa fa-angle-left"></i> Voltar </a>
                                                <a href="javascript:;" class="btn btn-outline green button-next"> Avançar
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                                <a href="javascript:;" class="btn green button-submit" value="cad_utilizador"> Cadastrar
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
