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
                        <i class="fa fa-arrow-right"></i>
                    </li>
                    <li class="text-capitalize">
                        <span><?= $this->uri->segment(2)?></span>
                    </li>
                </ul>
            </div>
            <br>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-scrollable">
                        <table class="table table-hover table-advance">
                            <thead>
                            <tr>
                                <th> # </th>
                                <th> Nome </th>
                                <th> Estado </th>
                                <th> Criador </th>
                                <th> Data Criação </th>
                                <th> Opções </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $cont_x=0;
                            foreach ($administracao as $res):
                                $cont_x+=1;
                                ?>
                                <tr>
                                    <td> <?= $cont_x?> </td>
                                    <td class="noome_reparticao"><?= $res->nome?></td>
                                    <td> <span class="label label-sm label-success"><?= $res->estado?></span> </td>
                                    <td><?= $res->criador?></td>
                                    <td><?= $res->data_criacao?> </td>
                                    <td>
                                        <div class="row">
                                            <?php
                                            $class=null;
                                            foreach($menus as $menu){
                                                $sub_menu=$builder_menu[$menu->nome];
                                                if(strtolower($menu->nome)!=strtolower("Administração"))continue;
                                                ?>

                                                <?php

                                                foreach ($sub_menu as $sub){
                                                    if($sub->nome!=dispensado()[0] && $sub->nome!=dispensado()[1] || $sub->nome==dispensado()[2])continue;
                                                    if($sub->nome==dispensado()[0])
                                                        $class="btn-primary";
                                                    elseif($sub->nome==dispensado()[1])
                                                        $class="btn-danger";

                                                    if($sub->modal!=1){
                                                        ?>
                                                        <div class="col-md-1"><a href="<?= $sub->controlador.'/'.$sub->accao?>/{id}" class="btn btn-sm <?= $class?>" title="<?= $sub->nome?>"><i class="<?= $sub->icon?>"></i></a></div>
                                                        <?php
                                                    }else{?>
                                                        <div class="col-md-1"><a href="#<?= $sub->controlador.'_'.$sub->accao?>" class="btn btn-sm <?= $class?>" title="<?= $sub->nome?>"><i class="<?= $sub->icon?>"></i></a></div>
                                                    <?php }
                                                }
                                                if($res->estado==0){?>
                                                    <div class="col-md-1"><a rota="<?= site_url('utilizador/novo/')?>"class="btn btn-sm btn-success" id="add-user-administracao<?= $res->id?>" title="<?= $sub->nome?>" nome_admini="<?= $res->nome?>" onclick="add_user_admin(event,<?= $res->id?>)"><i class="<?= $sub->icon?>"></i></a></div>
                                                <?php }?>
                                                <div class="col-md-1"><a rota="<?= site_url('utilizador/novo/')?>"class="btn btn-sm btn-warning" id="add-user-administracao<?= $res->id?>" title="<?= $sub->nome?>" nome_admini="<?= $res->nome?>" ><i class="fa fa-users"></i></a></div>
                                            <?php  }?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
