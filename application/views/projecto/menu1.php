<?php
$id=$this->uri->segment(3);
if (!is_numeric($id))
{
    $id=$this->uri->segment(4);
}

?>
<div class="alert alert-info clearfix">
    <ul class="nav nav-pills pull-right">
<!--        <li class="active" disabled="">-->
<!--            <a class="btn-add-descricao" id_projecto="--><?//= $id?><!--" href="--><?//= site_url("projecto/coordenar/add_descricao/".$this->uri->segment(3))?><!--"><i class="fa fa-edit"></i> Adicionar Descrição </a>-->
<!--        </li>-->
<!--        <li class="active">-->
<!--            <a class="btn-novo-terreno-project" id_projecto="--><?//= $id?><!--" href="--><?//= site_url('terreno/novo')?><!--"><i class="fa fa-edit"></i> Adicionar Terreno </a>-->
<!--        </li>-->
<!--        <li class="active">-->
<!--            <a class="btn-carregar-foto" id_projecto="--><?//= $id?><!--" href="--><?//= site_url("projecto/coordenar/carregar_foto/".$id)?><!--""><i class="fa fa-upload"></i> Carregar Fotos</a>-->
<!--        </li>-->
<!--        <li class="active">-->
<!--            <a class="btn-listar-terreno" id_projecto="--><?//= $id?><!--" href="javascript:;"><i class="fa fa-list"></i> Listar Terreno</a>-->
<!--        </li>-->
        <li class="active">
            <a class="btn-galeria" href="javascript:;" id_projecto="<?= $id?>"><i class="fa fa-picture-o"></i> Galeria</a>
        </li>
        <li class="active">
            <a class="btn-listar-estatistica" href="javascript:;" id_projecto="<?= $id?>"><i class="fa fa-area-chart"></i> Estatísticas</a>
        </li>
    </ul>
</div>