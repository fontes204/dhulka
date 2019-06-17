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
                                        <h4 class="form-section">Listagem de Utilizadores</h4>
                                    </div>
<!--                                    <span class="text-primary pull-right"><a href="--><?//= site_url("utilizador/novo")?><!--">Novo</a></span>-->
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead style="font-weight: bold">
                                        <tr>
                                            <th>#</th>
                                            <th><i class="fa fa-user"></i> Nome</th>
                                            <th><i class="fa fa-calendar"></i> Data de Nascimento </th>
                                            <th><i class="fa fa-flag"></i> País </th></th>
                                            <th><i class="fa fa-genderless"></i> Estado Civil </th></th>
                                            <th><i class="fa fa-map-marker"></i> Comuna </th></th>
                                            <th><i class="fa fa-map-marker"></i> Bairro </th></th>
                                            <th><i class="fa fa-phone"></i> Telefone </th></th>
                                            <th><i class="fa fa-gear"></i> Opções </th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        if(count($utilizadores)==0){
                                            echo "<div class=\"alert alert-danger\"><strong><i class='fa fa-exclamation-triangle'></i></strong> Não existe nenhum utilizador registrado... </div>";
                                        }else{
                                            $cont=0;
                                            foreach($utilizadores as $utilizador):
                                                $cont+=1;
                                                ?>

                                                <tr>
                                                    <td class="highlight"><?= $cont?></td>
                                                    <td class="highlight"><?= $utilizador->nome?></td>
                                                    <td class="highlight"><?= date("d-m-Y",strtotime($utilizador->data_nascimento))?></td>
                                                    <td class="highlight"><?= $utilizador->pais?></td>
                                                    <td class="highlight"><?= estado_civil($utilizador->estado_civil,$utilizador->genero)?></td>
                                                    <td class="highlight"><?= $utilizador->comuna?></td>
                                                    <td class="highlight"><?= $utilizador->bairro?></td>
                                                    <td class="highlight"><?= $utilizador->telefone1?></td>
                                                    <td class="text-center">
                                                        <div class="row">
                                                            <?php
                                                            $class=null;
                                                            $dispensado=null;
                                                            if($this->utilizador->controla_add_conta($utilizador->id)==0)
                                                                $dispensado=dispensado()[9];

                                                            foreach($menus as $menu){
                                                                $sub_menu=$builder_menu[$menu->nome];
                                                                if(strtolower($menu->nome)!=strtolower($this->uri->segment(1)))continue;
                                                                ?>

                                                                <?php

                                                                foreach ($sub_menu as $sub){
                                                                    if($sub->nome!=dispensado()[0] && $sub->nome!=dispensado()[1] && $sub->nome!=dispensado()[7] && $sub->nome!=$dispensado)continue;
                                                                    if($sub->nome==dispensado()[0])
                                                                        $class="btn-primary";
                                                                    elseif($sub->nome==dispensado()[7])
                                                                        $class="btn-success btn_ver_detalhe";
                                                                    elseif($sub->nome==dispensado()[1])
                                                                        $class="btn-danger";
                                                                    elseif($sub->nome==$dispensado)
                                                                        $class="btn-info btn_add_conta";

                                                                    if($sub->modal!=1){
                                                                        ?>
                                                                        <div class="col-md-1"><a href="<?= $sub->controlador.'/'.$sub->accao.'/'.$utilizador->id?>" id_utilizador="<?= $utilizador->id?>" class="btn btn-sm <?= $class?>" title="<?= $sub->nome?>"><i class="<?= $sub->icon?>"></i></a></div>
                                                                        <?php
                                                                    }else{?>
                                                                        <div class="col-md-1"><a data-toggle="modal" href="#<?= $sub->controlador.'_'.$sub->accao?>" id_utilizador="<?= $utilizador->id?>" class="btn btn-sm <?= $class?>" title="<?= $sub->nome?>"><i class="<?= $sub->icon?>"></i></a></div>
                                                                    <?php }
                                                                }
                                                                ?>
                                                            <?php  }?>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; }?>
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
