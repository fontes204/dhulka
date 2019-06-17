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
                                        <h4 class="form-section">Listagem de Projectos</h4>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead style="font-weight: bold">
                                        <tr>
                                            <th>#</th>
                                            <th><i class="fa fa-map-marker"></i> Projecto </th></th>
                                            <th><i class="fa fa-star-half-full"></i> Estado</th>
                                            <th><i class="fa fa-calendar"></i> Data de Criação </th></th>
                                            <th><i class="fa fa-user"></i> Coordenador </th></th>
                                            <th><i class="fa fa-gear"></i> Opções </th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        if(count($projectos)==0){
                                            echo "<div class=\"alert alert-danger\"><strong><i class='fa fa-exclamation-triangle'></i></strong> Não existe nenhum projecto registrado... </div>";
                                        }else{
                                            $cont=0;
                                            $estado=null;
                                                ?>
                                                <?php foreach ($projectos as $projecto):
                                                $cont+=1;
                                                if($projecto->estado==1)
                                                    $estado="<span class='label label-info'>Em andamento</span>";
                                                else
                                                    $estado="<span class='label label-success'>Concluído</span>";
                                                ?>
                                                <tr>
                                                    <td class="highlight"><?= $cont?></td>
                                                    <td class="highlight"><?= $projecto->bairro?></td>
                                                    <td class="highlight text-center"><?= $estado?></td>
                                                    <td class="highlight"><?= date("d-m-Y",strtotime($projecto->data_criacao))?></td>
                                                    <td class="highlight"><?= $projecto->coordenador?></td>
                                                    <td class="text-center">
                                                        <div class="row">
                                                            <?php
                                                            $class=null;
                                                            foreach($menus as $menu){
                                                                $sub_menu=$builder_menu[$menu->nome];
                                                                if(strtolower($menu->nome)!=strtolower($this->uri->segment(1)))continue;

                                                                foreach ($sub_menu as $sub)
                                                                {
                                                                    if($sub->nome!=dispensado()[0] && $sub->nome!=dispensado()[1] && $sub->nome!=dispensado()[7] && $sub->nome!=dispensado()[8] && $sub->nome!=dispensado()[11]  && $sub->nome!=dispensado()[12])continue;
                                                                    if($sub->nome==dispensado()[0])
                                                                        $class="btn-primary";
                                                                    elseif($sub->nome==dispensado()[7])
                                                                        $class="btn-success btn_ver_detalhe_processo";
                                                                    elseif($sub->nome==dispensado()[1])
                                                                        $class="btn-danger";
                                                                    elseif($sub->nome==dispensado()[12])
                                                                        $class="btn-coordenar-projecto btn btn-sm btn-warning";

                                                                    if($sub->modal==0){
                                                                        if($this->projecto->control_btn($this->session->userdata('id_cidadao'),$projecto->id)>0) {
                                                                            ?>
                                                                            <div class="col-md-1"><a
                                                                                        href="<?= $sub->accao . '/' . $projecto->id ?>"
                                                                                        class="btn btn-sm <?= $class ?>"
                                                                                        title="<?= $sub->nome ?>"><i
                                                                                            class="<?= $sub->icon ?>"></i></a>
                                                                            </div>
                                                                            <?php
                                                                        } }elseif ($sub->modal==1){?>
                                                                        <div class="col-md-1"><a data-toggle="modal" href="#<?= $sub->controlador.'_'.$sub->accao?>" id_processo="<?= $projecto->id?>" class="btn btn-sm <?= $class?>" title="<?= $sub->nome?>"><i class="<?= $sub->icon?>"></i></a></div>
                                                                        <?php
                                                                    }else{?>
                                                                            <div class="col-md-1"><a class="<?= $class?>" id_projecto="<?= $projecto->id?>" href="#jwdjs" estado="<?= $projecto->estado_processo?>" title="<?= $sub->nome?>"><i class="<?= $sub->icon?>"></i></a></div>
                                                                        <?php    }
                                                                }//fim do foreach
                                                            }?>
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
