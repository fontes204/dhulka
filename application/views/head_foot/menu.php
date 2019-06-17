<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
        <li class="sidebar-toggler-wrapper hide">
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler">
                <span></span>
            </div>
            <!-- END SIDEBAR TOGGLER BUTTON -->
        </li>
        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
        <li class="heading text-center">
            <h3 class="uppercase">Meus Acessos</h3>
        </li>
        <?php
        $vx=array();
        foreach($menus as $menu){
            $sub_menu=$builder_menu[$menu->nome];
            if(count($sub_menu)==0 || $menu->nome==dispensado()[10] || ($menu->nome==dispensado()[15] && $this->utilizador->retorna_role($this->session->userdata('id'))->nome!="Técnico de Campo"))continue;
            ?>

            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-angle-right"></i>
                    <span class="title"><?= $menu->nome?></span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
            <?php

            $cont=0;
            $class=null;
            foreach ($sub_menu as $sub){
                $cont+=1;
                if($sub->nome==dispensado()[0] || $sub->nome==dispensado()[1] || $sub->nome==dispensado()[2] || $sub->nome==dispensado()[3] || $sub->nome==dispensado()[4] || $sub->nome==dispensado()[5] || $sub->nome==dispensado()[6] || $sub->nome==dispensado()[7] || $sub->nome==dispensado()[8] || $sub->nome==dispensado()[9] || $sub->nome==dispensado()[11] || $sub->nome==dispensado()[12] || $sub->nome==dispensado()[13] || $sub->nome==dispensado()[14] || ($menu->nome==dispensado()[15] && $sub->nome=="Novo") || $sub->nome==dispensado()[16] || $sub->nome==dispensado()[17] || $sub->nome==dispensado()[18] || $sub->nome==dispensado()[19])continue;
                if($sub->modal!=1){
                ?>
                    <li class="nav-item  ">
                        <a href="<?= base_url($sub->controlador.'/'.$sub->accao)?>" class="nav-link ">
                            <span class="title"><i class="<?= $sub->icon?>"></i> <?= $sub->nome?></span>
                        </a>
                    </li>
                <?php
            } else{
                    $class='btn-ver-bairro'
                    ?>
                    <li class="nav-item  ">
                        <a  data-toggle="modal" href="#<?= $sub->controlador.'_'.$sub->accao?>" class="nav-link <?= $class?>">
                            <span class="title"><i class="<?= $sub->icon?>"></i> <?= $sub->nome?></span>
                        </a>
                    </li>
        <?php
                }
            }
            ?>
                </ul>
            </li>
        <?php }?>
    </ul>
    <!-- END SIDEBAR MENU -->
    <!-- END SIDEBAR MENU -->
</div>