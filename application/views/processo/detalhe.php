<?php $this->load->view('head_foot/topo') ?>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"></div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <?php $this->load->view('head_foot/menu'); ?>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content" style="background: rgb(238, 241, 245)">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="javascript:;" class="text-capitalize"><?= $this->uri->segment(1) ?></a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li class="text-capitalize">
                        <span><?= $this->uri->segment(2) ?></span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <p></p>
            <?php $this->load->view('dashboard/fetch'); ?>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="alert alert-info">
                        <h3 class="form-section"><?= utf8_decode($processo->utente) ?></h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- BEGIN Portlet PORTLET-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light">
                                <div class="portlet-title">
                                    <div class="caption font-blue">
                                        <span class="caption-subject bold uppercase"><i class="fa fa-list"></i> Dados gerais</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <ul class="list-group">
<!--                                        <li class="list-group-item">-->
<!--                                            <i class="fa fa-user"></i>-->
<!--                                            --><?//= utf8_decode($processo->utente) ?>
<!--                                        </li>-->
                                        <li class="list-group-item">
                                            <i class="fa fa-file-o"></i>
                                            PROCESSO Nº <?= $processo->codigo; ?>
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fa fa-calendar"></i>
                                            Recebido aos: <?= date("d-m-Y", strtotime($processo->data_actividade)) ?>
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fa fa-clock-o"></i>
                                            Tempo de espera: <?= substr(tempoEspera($data_criacao, date('Y-m-d')), 1) ?>
                                        </li>
                                        <li class="list-group-item">
                                            <?php
                                            if ($this->processo->get_estado($this->uri->segment(3))->estado == 0) {
                                                $estado = "<span class='label' style='background-color: #ff5b57'><i class='fa fa-pause'></i> - Parado</span>";
                                            } else {
                                                $estado = "<span class='label' style='background-color:#5cb85c'><i class='fa fa-play'></i> - Em curso</span>";
                                            }
                                            ?>
                                            <i class="fa fa-star-half-full"></i> Estado: <?= $estado ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="portlet light">
                                <div class="portlet-title">
                                    <div class="caption font-blue">
                                        <span class="caption-subject bold uppercase"> <i class="fa fa-map-marker"></i> Localização e Dimensão</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            Comuna: <?= utf8_decode(@$this->caracter_terreno->listar($this->uri->segment(3))->comuna); ?>
                                        </li>
                                        <li class="list-group-item">
                                            Bairro: <?= utf8_decode(@$this->caracter_terreno->listar($this->uri->segment(3))->bairro); ?>
                                        </li>
                                        <li class="list-group-item">
                                            Quarteirão: <?= utf8_decode(@$this->caracter_terreno->listar($this->uri->segment(3))->quarteirao); ?>
                                        </li>
                                        <li class="list-group-item">
                                            Rua: <?= @$this->caracter_terreno->listar($this->uri->segment(3))->rua; ?>
                                        </li>
                                        <li class="list-group-item">
                                            Dimensão: <?= @$this->caracter_terreno->listar($this->uri->segment(3))->dimensao; ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Portlet PORTLET-->
                </div>
                <div class="col-md-5">
                    <!-- BEGIN Portlet PORTLET-->
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption font-blue">
                                <i class="fa fa-"></i>
                                <span class="caption-subject bold uppercase"> <i class="fa fa-clock-o"></i>  Andamento do Processo</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="scroller" style="height:535px">
                                <div class="timeline">
                                    <div class="timeline-item">
                                        <div class="timeline-badge">
                                            <div class="timeline-badge">
                                                <img class="timeline-badge-userpic"
                                                     src="<?= site_url('foto_perfil/' . trim($this->processo->detalhe_1($this->uri->segment(3))->fotografia)) ?>">
                                                <i class="fa fa-arrow-down  font-blue" style="font-size: small"></i>
                                            </div>
                                        </div>
                                        <div class="timeline-body">
                                            <div class="timeline-body-arrow"></div>
                                            <div class="timeline-body-head">
                                                <div class="timeline-body-head-caption">
                                                    <span class="timeline-body-alerttitle font-blue"><i
                                                                class="fa fa-user font-grey-cascade"></i> <?= user_name($this->processo->detalhe_1($this->uri->segment(3))->utilizador) ?></span>
                                                    <span class="timeline-body-time font-grey-cascade"> Criado aos <?= date("d-m-Y", strtotime($this->processo->detalhe_1($this->uri->segment(3))->data_actividade)) ?></span>
                                                </div>
                                            </div>
                                            <div class="timeline-body-content">
                                                                    <span class="font-grey-cascade">
                                                                        <span class="text-capitalize"><i
                                                                                    class="fa fa-folder"></i> <?= $this->processo->detalhe_1($this->uri->segment(3))->role ?></span>
                                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $role = null;
                                    $p=null;
                                    foreach ($detalhes as $detalhe):
                                        if (strcmp($detalhe->role, "Chefe R.U.C") == 0)
                                            $role = "C.R.U.U.C";
//                                            $role = "Chefe da Repartição de Urbanismo e Cadastro";
                                        else
                                            $role = $detalhe->role;

                                        if ($detalhe->estado_actual < 0)
                                            $fa = "fa-arrow-up  font-red";
                                        else
                                            $fa = "fa-arrow-down  font-blue";

                                        if($detalhe->id==$this->session->userdata('id'))
                                            $p="Recebido";
                                        else
                                            $p="Entregue";
                                        ?>
                                        <div class="timeline-item">
                                            <div class="timeline-badge">
                                                <img class="timeline-badge-userpic"
                                                     src="<?= site_url('foto_perfil/' . trim($detalhe->fotografia)) ?>">
                                                <i class="fa <?= $fa ?>" style="font-size: small"></i>
                                            </div>
                                            <div class="timeline-body">
                                                <div class="timeline-body-arrow"></div>
                                                <div class="timeline-body-head">
                                                    <div class="timeline-body-head-caption">
                                                        <span class="timeline-body-alerttitle font-blue"><i
                                                                    class="fa fa-user font-grey-cascade"></i> <?= user_name(utf8_decode($detalhe->utilizador)) ?></span>
                                                        <span class="timeline-body-time font-grey-cascade"> <?= $p?> aos <?= date("d-m-Y", strtotime($detalhe->data_actividade)) ?></span>
                                                    </div>
                                                </div>
                                                <div class="timeline-body-content">
                                                                    <span class="font-grey-cascade">
                                                                        <span class="text-capitalize"><i
                                                                                    class="fa fa-folder"></i> <?= $role ?></span>
                                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Portlet PORTLET-->
                </div>
                <div class="col-md-4">
                    <!-- BEGIN Portlet PORTLET-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light">
                                <div class="portlet-title">
                                    <div class="caption font-blue">
                                        <span class="caption-subject bold uppercase">  <i class="fa fa-files-o"></i> Documentos apresentados</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class=" mt-element-list" style="height:230px">
                                        <div class="mt-list-container list-simple ext-1">
                                            <div class="portfolio-content portfolio-2">
                                                <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">
                                                    <div class="cbp-item print motion">
                                                        <ul>
                                                            <?php
                                                            foreach ($apresentados as $apresentado):
                                                                ?>
                                                                <li class="mt-list-item done">
                                                                    <div class="list-icon-container">
                                                                        <i class="icon-check"></i>
                                                                    </div>
                                                                    <div class="list-item-content">
                                                                        <h3 class="">
                                                                            <a href="<?= site_url('uploaded_docs/' . trim($apresentado->foto)) ?>"
                                                                               class="cbp-caption cbp-lightbox"
                                                                               data-title="<i class='fa fa-file-o'></i> <b class='text-danger'>Documento Apresentado</b><br><?= $apresentado->nome ?>">
                                                                                <?= ($apresentado->nome) ?>
                                                                            </a>
                                                                        </h3>
                                                                    </div>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="portlet light">
                                <div class="portlet-title">
                                    <div class="caption font-blue">
                                        <span class="caption-subject bold uppercase">  <i class="fa fa-files-o"></i> Documentos em falta</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class=" mt-element-list" style="height:175px">
                                        <div class="mt-list-container list-simple ext-1">

                                            <?php
                                                if(count($faltas)==0){
                                                echo "<h5 class='text-primary text-center'>Todos os documentos foram entregues.</h5>";
                                                }else{
                                            ?>
                                            <ul>
                                                <?php
                                                foreach ($faltas as $falta):
                                                    ?>
                                                    <li class="mt-list-item text-danger">
                                                        <div class="list-icon-container">
                                                            <i class="icon-close"></i>
                                                        </div>
                                                        <div class="list-datetime"><?= date("d-m-Y", strtotime($falta->data_entrega)) ?></div>
                                                        <div class="list-item-content">
                                                            <h3 class="">
                                                                <a href="javascript:;"
                                                                   style="color: rgb(255, 91, 87);"><?= utf8_decode($falta->nome) ?></a>
                                                            </h3>
                                                        </div>
                                                    </li>
                                                <?php endforeach;
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Portlet PORTLET-->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER 994 738 316 Dudu -->
