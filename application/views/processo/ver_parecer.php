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
                        <span><?= str_replace("_"," ",$this->uri->segment(2))?></span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <p></p>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <br>
                <div class="col-md-12">
                    <!-- BEGIN TODO SIDEBAR -->
                    <div class="todo-ui">
                        <div class="todo-sidebar" style="border: 1px solid #eeeeee">
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption" data-toggle="collapse" data-target=".todo-project-list-content">
                                        <span class="caption-subject font-blue uppercase">PROCESSO Nº <?= $processo->codigo;?></span>
                                        <span class="caption-helper visible-sm-inline-block visible-xs-inline-block">click to view project list</span>
                                    </div>
                                </div>
                                <div class="portlet-body todo-project-list-content">
                                    <div class="todo-project-list">
                                        <ul class="nav nav-stacked text-info ul-desc">
                                            <li style="border-top: 1px dotted;padding-bottom: 10px; padding-top: 10px; border-bottom: 1px dotted">
                                                <i class="fa fa-calendar"></i> Recebido aos: <?= date("d-m-Y",strtotime($processo->data_actividade))?>
                                            </li>
                                            <li style="padding-bottom: 10px; padding-top: 10px; border-bottom: 1px dotted">
                                                <i class="fa fa-clock-o"></i> Tempo de espera: <?= substr(tempoEspera($data_criacao, date('Y-m-d')), 1)?>
                                            </li>
                                            <li style="padding-bottom: 10px; padding-top: 10px; border-bottom: 1px dotted">
                                                <i class="fa fa-user"></i> Emissor: <?= user_name($this->processo->get_emissor($processo->emissor)->nome)?>
                                            </li>
                                            <li style="padding-bottom: 10px; padding-top: 10px; border-bottom: 1px dotted">
                                                <?php
                                                if($this->processo->get_estado($this->uri->segment(3))->estado==0) {
                                                    $estado="<span class='label' style='background-color: #ff5b57'><i class='fa fa-pause'></i> - Parado</span>";
                                                }else {
                                                    $estado="<span class='label' style='background-color:#5cb85c'><i class='fa fa-play'></i> - Em curso</span>";
                                                }
                                                ?>
                                                <i class="fa fa-star-half-full"></i> Estado: <?= $estado?>
                                            </li>
                                            <?php if ($this->processo->verifica_estado_processo($processo->estado_processo,$this->session->userdata('id_role')>0) && ($this->utilizador->seccao_1($this->session->userdata('id'))=="Administrador")){?>
                                                <li style="padding-bottom: 10px; padding-top: 10px; border-bottom: 1px dotted">
                                                    <select class="form-control select2" data-placeholder="Definir Prioridade">
                                                        <option value=""></option>
                                                        <option>sds</option>
                                                    </select>
                                                </li>
                                            <?php }?>
                                            <li style="padding-bottom: 10px; padding-top: 10px; border-bottom: 1px dotted" class="text-center">
                                                <?php
                                                $cont=0;
                                                $fa=null;
                                                switch ($processo->estado_processo)
                                                {
                                                    case -1:
                                                        $cont=6;
                                                        break;
                                                    default:
                                                        $cont=$processo->estado_processo;
                                                        break;
                                                }
                                                for ($i=0;$i<$cont;$i++):?>
                                                    <i class="fa fa-star-half-full"></i>
                                                <?php endfor;?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END TODO SIDEBAR -->
                        <!-- BEGIN TODO CONTENT -->
                        <div class="todo-content" style="border: 1px solid #eeeeee">
                            <div class="portlet light ">
                                <!-- PROJECT HEAD -->
                                <div class="portlet-title">
                                    <div class="caption">
                                        <span class="caption-subject font-blue  uppercase">Parecer de <u>“<?= user_name($this->processo->get_emissor($this->parecer->get_parecer($this->uri->segment(3))->id_utilizador)->nome)?>”</u></span>
                                    </div>
                                </div>
                                <!-- end PROJECT HEAD -->
                                <div class="portlet-body">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-4">
                                            <div class="todo-tasklist">
                                                <div class="todo-tasklist-item todo-tasklist-item-border-blue">
<!--                                                    <div class="todo-tasklist-item-title">&nbsp;</div>-->
                                                    <div class="todo-tasklist-item-text">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <p class=""><?= $this->parecer->get_parecer($this->uri->segment(3))->descricao;?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="todo-tasklist-devider"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pull-right m-t-2">
                            <a class="btn btn-default" href="javascript:window.history.go(-1)" title="Retroceder"><i class="fa fa-arrow-left"></i> Voltar</a>
                        </div>
                        <!-- END TODO CONTENT -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
