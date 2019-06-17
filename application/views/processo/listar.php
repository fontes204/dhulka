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
                    <div class="form-wizard">
                        <div class="form-body">

                            <div class="tab-content">
                                <div class="">
                                    <div class="alert alert-info">
                                        <h4 class="form-section">Listagem de Processos</h4>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead style="font-weight: bold">
                                        <tr>
                                            <th>#</th>
                                            <th><i class="fa fa-barcode"></i> Código </th>
                                            <th><i class="fa fa-user"></i> Utente</th>
                                            <th><i class="fa fa-list"></i> Assunto </th>
                                            <th><i class="fa fa-calendar"></i> Data de Criação </th>
                                            <th><i class="fa fa-star-half-full"></i> Estado </th>
                                            <th><i class="fa fa-exchange"></i> Prioridade </th>
                                            <th><i class="fa fa-gear"></i> Opções </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        if(count($ids_todos_processos->result())==0){
                                            echo "<div class=\"alert alert-danger\"><strong><i class='fa fa-exclamation-triangle'></i></strong> Não existe nenhum processo registrado... </div>";
                                        }else{
                                            $cont=0;
                                            $background='';
                                            $estado='';
                                            foreach($ids_todos_processos->result() as $idsProc):

                                                ?>
                                                <?php foreach ($this->processo->getUtlimosEstados_by_proc($idsProc->id)->result() as $processo):
                                                $cont+=1;
                                                    if($processo->estado==0) {
                                                        $background = 'danger';
                                                        $estado="<span class='label' style='background: #ff5b57' title='Processo parado'><i class='fa fa-pause'></i></span>";
                                                    }else {
                                                        $background = '';
                                                        $estado="<span class='label' style='background-color:#5cb85c' title='Processo em andamento'><i class='fa fa-play'></i></span>";
                                                    }
                                                ?>
                                                <tr class="<?= $background?>">
                                                    <td class="highlight"><?= $cont?></td>
                                                    <td class="highlight"><?= $processo->codigo?></td>
                                                    <td class="highlight"><?= $processo->utente?></td>
                                                    <td class="highlight"><?= $processo->assunto?></td>
                                                    <td class="highlight"><?= date("d-m-Y",strtotime($processo->data_criacao))?></td>
                                                    <td class="highlight text-center"><?= $estado?></td>
                                                    <td class="highlight">Normal</td>
                                                    <td class="text-center">
                                                        <div class="row">
                                                            <?php
                                                            $class=null;
                                                            foreach($menus as $menu){
                                                                $sub_menu=$builder_menu[$menu->nome];
                                                                if(strtolower($menu->nome)!=strtolower($this->uri->segment(1)))continue;
                                                                ?>

                                                                <?php

                                                                foreach ($sub_menu as $sub)
                                                                {
                                                                    if($sub->nome!=dispensado()[0] && $sub->nome!=dispensado()[1] && $sub->nome!=dispensado()[7] && $sub->nome!=dispensado()[8] && $sub->nome!=dispensado()[11] && $sub->nome!=dispensado()[14])continue;
                                                                    if($sub->nome==dispensado()[0])
                                                                        $class="btn-primary";
                                                                    elseif($sub->nome==dispensado()[7])
                                                                        $class="btn-success btn_ver_detalhe_processo";
                                                                    elseif($sub->nome==dispensado()[1])
                                                                        $class="btn-danger";
                                                                    elseif($sub->nome==dispensado()[8])
                                                                        $class="btn-info btn_enviar_processo_1";
                                                                    elseif($sub->nome==dispensado()[11])
                                                                        $class="btn-warning btn_enviar_add_parecer";
                                                                    elseif($sub->nome==dispensado()[14])
                                                                        $class="blue";

                                                                    if($sub->modal==0){?>
                                                                            <div class="col-md-1" ><a
                                                                                        href="<?= $sub->accao . '/' . $processo->id ?>"
                                                                                        id_processo="<?= $processo->id ?>"
                                                                                        class="btn btn-sm <?= $class ?>"
                                                                                        title="<?= $sub->nome ?>"><i
                                                                                            class="<?= $sub->icon ?>"></i></a>
                                                                            </div>
                                                                            <?php
                                                                        }elseif ($sub->modal==1) {
                                                                        ?>
                                                                        <div class="col-md-1"><a data-toggle="modal"
                                                                                                 href="#<?= $sub->controlador . '_' . $sub->accao ?>"
                                                                                                 id_processo="<?= $processo->id ?>"
                                                                                                 class="btn btn-sm <?= $class ?>"
                                                                                                 title="<?= $sub->nome ?>"><i
                                                                                        class="<?= $sub->icon ?>"></i></a>
                                                                        </div>
                                                                        <?php
                                                                    }elseif ($sub->modal==3){
                                                                        if ($this->processo->verifica_estado_processo($processo->estado_processo,$this->session->userdata('id_role'))>0 && ($this->utilizador->retorna_role($this->session->userdata('id'))->nome!="Técnico de Campo")) {?>

                                                                        <div class="col-md-1"><a
                                                                                    href="<?= $sub->accao . '/' . $processo->id ?>"
                                                                                    id_processo="<?= $processo->id ?>"
                                                                                    class="btn btn-sm <?= $class ?>"
                                                                                    title="<?= $sub->nome ?>"><i
                                                                                        class="<?= $sub->icon ?>"></i></a>
                                                                        </div>
                                                                 <?php  } }elseif ($sub->modal==4){
                                                                        if ($this->processo->verifica_estado_processo($processo->estado_processo,$this->session->userdata('id_role'))>0 && ($this->processo->processo_tecnico($this->session->userdata('id'),$processo->id)>0)) {?>
                                                                            <div class="col-md-1"><a
                                                                                        href="<?= $sub->accao . '/' . $processo->id ?>"
                                                                                        id_processo="<?= $processo->id ?>"
                                                                                        class="btn btn-sm <?= $class ?>"
                                                                                        title="<?= $sub->nome ?>"><i
                                                                                            class="<?= $sub->icon ?>"></i></a>
                                                                            </div>

                                                                 <?php }}else{?>
                                                                        <?php
                                                                        if ($this->processo->verifica_estado_processo($processo->estado_processo,$this->session->userdata('id_role'))>0){
                                                                                if ($this->utilizador->seccao_1($this->session->userdata('id'))=="operador"){
                                                                            ?>
                                                                        <div class="col-md-1"><a href="#" id_processo="<?= $processo->id?>" estado="<?= $processo->estado_processo?>" class="btn btn-sm <?= $class?>" title="<?= $sub->nome?>"><i class="<?= $sub->icon?>"></i></a></div>

                                                         <?php      }} }
                                                                }//fim do foreach
                                                            }?>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach;endforeach; }?>
                                        </tbody>
                                    </table>
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
