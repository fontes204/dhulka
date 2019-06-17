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
                        <a href="#" class="text-capitalize"><?= $this->uri->segment(1)?></a>
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
                                <?php
                                    $ctrl=$this->processo->verifica_estado_processo($processo->estado_processo,$this->session->userdata('id_role'));
                                ?>
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
                                                    $estado="<span class='label label-danger'><i class='fa fa-pause'></i> - Parado</span>";
                                                }else {
                                                    $estado="<span class='label label-success'><i class='fa fa-play'></i> - Em curso</span>";
                                                }
                                                ?>
                                                <i class="fa fa-star-half-full"></i> Estado: <?= $estado?>
                                            </li>
                                            <?php if ( $ctrl>0 && (strcmp($this->utilizador->seccao_1($this->session->userdata('id')),"Chefe R.U.C")==0) && ($processo->estado_processo!=-1)){?>
                                                <li style="padding-bottom: 10px; padding-top: 10px; border-bottom: 1px dotted">
                                                    <select class="form-control select2 text-center id-tecnico" data-placeholder="Escolher Técnico">
                                                        <option value=""></option>
                                                        <?php foreach ($this->utilizador->get_tecnico("TRUC") as $value):?>
                                                            <option value="<?= $value->id?>"><?= user_name($value->nome)?></option>
                                                        <?php endforeach;?>
                                                    </select>
                                                </li>
                                            <?php }?>
                                            
                                            <?php if ($ctrl>0 && (strcmp($this->utilizador->seccao_1($this->session->userdata('id')),"Administrador")==0)){?>
                                                <li style="padding-bottom: 10px; padding-top: 10px; border-bottom: 1px dotted">
                                                    <select class="form-control select2" data-placeholder="Definir Prioridade">
                                                        <option value=""></option>
                                                        <?php foreach ($this->processo->get_prioridade() as $value):?>
                                                            <option value="<?= $value->id;?>"><?= $value->descricao;?></option>
                                                        <?php endforeach;?>
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
                                                    case -2:
                                                        $cont=7;
                                                        break;
                                                    default:
                                                        $cont=$processo->estado_processo;
                                                        break;
                                                }
                                                for ($i=0;$i<$cont;$i++):?>
                                                    <i class="fa fa-star-half-full"></i>
                                                <?php endfor;?>
                                            </li>
                                            <li style="padding-bottom: 10px; padding-top: 10px; border-bottom: 1px dotted" class="ctrl-btns-processo">
                                                <div class="row">
                                                    <div class="col-sm-6 control-processP" id_processo="<?= $this->uri->segment(3)?>" estado="<?= $processo->estado_processo?>" id_user="<?= $this->session->userdata('id')?>">
                                                        <span href="<?= site_url('processo/parecer/'.$this->uri->segment(3))?>" class="btn btn-info btn-sm btn_enviar_processo" id_processo="<?= $this->uri->segment(3)?>" estado="<?= $processo->estado_processo?>"><i class="fa fa-send-o"></i> Enviar</span>
                                                    </div>
                                                    <div class="col-sm-6 btn-ver-parecer">
                                                        <span href="<?= site_url('processo/ver_parecer/'.$this->uri->segment(3))?>" class="btn btn-success btn-sm btn-link-ver-parecer"><i class="fa fa-list-alt"></i> Parecer</span>
                                                    </div>
                                                </div>
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
                                        <span class="caption-subject font-blue  uppercase">&nbsp;</span>
                                    </div>
                                </div>
                                <!-- end PROJECT HEAD -->
                                <div class="portlet-body">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-4">
                                            <div class="todo-tasklist">
                                                <div class="todo-tasklist-item todo-tasklist-item-border-blue">
                                                    <div class="todo-tasklist-item-title"><i class="fa fa-edit"></i> Adicionar Parecer</div>
                                                    <div class="todo-tasklist-item-text">
                                                        <div class="row">
                                                            <div class="col-md-12" style="margin-top: -1.5%">
                                                                <div class="form-group form-md-line-input">
                                                                    <textarea class="form-control parecer-processo" style="background: #fff; padding-left: 0.5%"   id="wysihtml5"  rows="4" placeholder="Adicionar um parecer"></textarea>
                                                                </div>
                                                                <?php
                                                                        $attr=null;
                                                                    if($this->processo->get_estado($this->uri->segment(3))->estado==0)
                                                                        $attr='disabled="enabled"';
                                                                ?>
                                                                <div class="form-actions noborder pull-right -m-t-7">
                                                                    <input type="hidden" class="id_processo" value="<?= $this->uri->segment(3)?>">
                                                                    <button type="button" <?= $attr?> class="btn default">Cancelar</button>
                                                                    <button type="button" <?= $attr?> class="btn blue btn-add-parecer">Salvar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="todo-tasklist-devider"> </div>
                                    </div>
                                </div>
<!--                                --><?php //for ($i=0;$i<15;$i++)
//                                {
//                                    echo "<br>";
//                                }?>
                            </div>
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
