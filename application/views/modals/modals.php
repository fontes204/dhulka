<!-- Modal para registro de grupos--->
<div id="grupo_novo" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-users"></i> Grupo de Utilizador</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-body">
                        <div class="form-group form-md-line-input has-success">
                            <div class="input-icon left">
                                <input type="text" class="form-control" placeholder="Nome do grupo">
                                <label for="form_control_1">Nome</label>
<!--                                <span class="help-block">Some help goes here...</span>-->
                                <i class="icon-user"></i>
                            </div>
                        </div>
                       <div class="form-group form-md-line-input has-success">
                           <div class="input-icon left">
                               <select id="singles" name="funcao" class="form-control select2" data-placeholder="Selecione a Função">
                                   <option value=""></option>
                                   <option value="C">Administrador Municipal</option>
                                   <option value="D">Secretaria/Operador</option>
                                   <option value="S">DMGUUC</option>
                                   <option value="V">Técnico</option>
                               </select>
                               <label for="form_control_1">Função</label>
                               <span class="help-block">Some help goes here...</span>
                           </div>
                       </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancelar</button>
                <button type="button" data-dismiss="modal" class="btn blue btn-outline">Salvar</button>
            </div>
        </div>
    </div>
</div>

<div id="confirmacao_aquisicao_project" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-success">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-check"></i> Confirmação</h4>
            </div>
            <div class="modal-body">
                    <div class="form-body text-center">
                        O processo será gerado automáticamente
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn red btn-outline"><i class="fa fa-times"></i> Cancelar</button>
                <button type="button" data-dismiss="modal" class="btn blue btn-outline btn-criar-processo-aq-on"><i class="fa fa-save"></i> Salvar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para registro de menu--->
<div id="menu_novo" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-list"></i> Cadastrar Menu</h4>
            </div>
            <div class="modal-body">
                <?= form_open(site_url('menu/store'),array('class'=>'frm_menu'));?>
                    <div class="form-body">
                        <div class="form-group form-md-line-input has-success">
                            <div class="input-icon left">
                                <?= form_input('nome',set_value('nome'),array('class'=>'form-control nome_menu','placeholder'=>'Nome do menu'))?>
                                <?= form_label('Nome','nome')?>
                                <i class="fa fa-list"></i>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancelar</button>
                <button type="submit" class="btn blue menu_store">Salvar</button>
            </div>
            <?= form_close()?>
        </div>
    </div>
</div>


<!-- Modal para registro de sub -  menus--->
<div id="sub_menu_novo" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-edit"></i> Cadastrar sub menu</h4>
            </div>
            <div class="modal-body">
                <?= form_open(site_url('app/sub_menu_store'),array('class'=>'frm_sub_menu'));?>
                <form role="form">
                    <div class="form-body">
                        <div class="form-group form-md-line-input has-success">
                            <div class="input-icon left">
                                <?= form_input('nome',set_value('nome'),array('class'=>'form-control nome_menu','placeholder'=>'Digite o sub-menu'))?>
                                <?= form_label('Nome','nome')?>
                                <i class="fa fa-list"></i>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input has-success">
                            <div class="input-icon left">
                                <?= form_input('icon',set_value('icon'),array('class'=>'form-control icon','placeholder'=>'Digite o ícone'))?>
                                <?= form_label('Ícone','icon')?>
                                <i class="fa fa-list"></i>
                            </div>
                        </div>
                    </div>
                </form>
                <?= form_close()?>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancelar</button>
                <button type="button" class="btn blue sub_menu_store">Salvar</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal para estatística dos grupo--->
<div class="modal fade bs-modal-lg" id="estatistica_grupo" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-full">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-bar-chart-o"></i> Estatísticas para o grupo <span class="estat_grupo_nome text-capitalize"></span></h4>
            </div>
            <div class="modal-body">
                Modal body goes here
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Fechar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!---Modal de teste-->


<!---Modal para salvar repartição-->
<div id="reparticao_novo" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-edit"></i> Cadastrar Repartição</h4>
            </div>
            <div class="modal-body">
                <?= form_open(site_url('reparticao/store'),array('class'=>'frm_reparticao_novo'));?>
                    <div class="form-body">
                       <div class="row">
                           <div class="col-md-4">
                               <div class="form-group form-md-line-input has-success">
                                   <div class="input-icon left">
                                       <?= form_dropdown('id_provincia', $provincias, 0, array('class'=>'form-control nome_provincia','id'=>'1','onChange'=>'busca_provincia()'));?>
                                       <?= form_label('Província','nome')?>
                                       <i class="fa fa-list"></i>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-8">
                               <div class="form-group form-md-line-input has-success">
                                   <div class="input-icon left">
                                       <?= form_input('nome',set_value('nome'),array('class'=>'form-control nome_repart','placeholder'=>'Nome do menu','readOnly'=>'true'))?>
                                       <?= form_label('Nome','nome')?>
                                       <i class="fa fa-list"></i>
                                   </div>
                               </div>
                           </div>
                       </div>


                    </div>
                <input type="hidden" name="estado" value="0">
                <input type="hidden" name="id_utilizador" value="<?= $this->session->userdata('id')?>">
                <?= form_close()?>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancelar</button>
                <button type="button" data-dismiss="modal" class="btn blue teste_maiss">Salvar</button>
            </div>
        </div>
    </div>
</div>


<div id="utilizador_repart" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title titulo_repart text-center">Utilizador <i class="fa fa-arrow-right" style="font-size: 9pt"></i> Repartição</h4>
            </div>
            <div class="modal-body">
                <?= form_open(site_url('app/menu_store'),array('class'=>'frm_add_user_repart'));?>
                <div class="form-body">
                    <div class="form-group form-md-line-input has-success">
                        <div class="input-icon left">
                            <?php
                            $utilizador[0]="Selecione o Utilizador";
                            $this->load->model('repositorio/Utilizador_model','utilizador');
                                $rk=$this->utilizador->listar();
                                foreach($rk as $user)
                                {
                                    $utilizador[$user->id]=$user->nome;
                                }
                            ?>
                            <?= form_dropdown('id_utilizador', $utilizador, 0, array('class'=>'form-control nome_user','id'=>'1'));?>
                            <a href="#" title="Novo Utilizador" id="add_novo_user_repart"><span class="pull-right" style="margin-top: -48px"><i class="fa fa-edit"></i></span></a>
                            <?= form_label('Utilizador','nome')?>
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <?= form_close()?>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancelar</button>
                <button type="button" class="btn blue">Salvar</button>
            </div>
        </div>
    </div>
</div>

<!---Modal de cadastro de administracao-->
<div id="administracao_novo" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-edit"></i> Cadastrar Administração Municipal</h4>
            </div>
            <div class="modal-body">
                <?php
                $role=$this->utilizador->retorna_role($this->session->userdata('id'))->nome;
                if($role==master()){
                    @$municipios=$this->municipio->listar_todos();
                    $city[0]="Municípios";
                    foreach($municipios as $muni)
                    {
                        $city[$muni->id]=$muni->nome;
                    }
                    $id_repart=1000;//tem de ser revisto
                }else{
                    @$id_provincia=$this->utilizador->listar_id_prov($this->session->userdata('id'))->id;
                    @$id_repart=$this->utilizador->listar_id_prov($this->session->userdata('id'))->id_repart;
                    @$municipios=$this->municipio->listar_por_id_prov($id_provincia);
                    $city[0]="Municípios";
                    foreach($municipios as $muni)
                    {
                        $city[$muni->id]=$muni->nome;
                    }
                }

                ?>
                <?= form_open(site_url('administracao/store'),array('class'=>'frm_add_administracao'));?>
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group form-md-line-input has-success">
                                    <div class="input-icon left">
                                        <?= form_dropdown('id_municipio', $city, 0, array('class'=>'form-control nome_municipio','id'=>'1','style'=>'width:100%'));?>
                                        <?= form_label('Lista de Municípios','nome_munic')?>
                                        <i class="fa fa-map-pin"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group form-md-line-input has-success">
                                    <div class="input-icon left">
                                        <?= form_input('nome',set_value('nome'),array('class'=>'form-control nome_administrcao','placeholder'=>'Nome da administração'))?>
                                        <?= form_label('Nome','nome')?>
                                        <i class="fa fa-list"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id_reparticao" value="<?= $id_repart?>">
                <input type="hidden" name="id_utilizador" value="<?= $this->session->userdata('id')?>">
                <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancelar</button>
                <button type="submit"  class="btn blue">Salvar</button>
            </div>
            <?= form_close()?>
        </div>
    </div>
</div>


<div id="utilizador_administracao" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title titulo_admin text-center">Utilizador <i class="fa fa-arrow-right" style="font-size: 9pt"></i> Repartição</h4>
            </div>
            <div class="modal-body">
                <?= form_open(site_url('app/menu_store'),array('class'=>'frm_add_user_repart'));?>
                <div class="form-body">
                    <div class="form-group form-md-line-input has-success">
                        <div class="input-icon left">
                            <?php
                            $utilizador[0]="Selecione o Utilizador";
                            $this->load->model('repositorio/Utilizador_model','utilizador');
                            $rk=$this->utilizador->listar();
                            foreach($rk as $user)
                            {
                                $utilizador[$user->id]=$user->nome;
                            }
                            ?>
                            <?= form_dropdown('id_utilizador', $utilizador, 0, array('class'=>'form-control nome_user','id'=>'1'));?>
                            <a href="#" title="Novo Utilizador" id="add_novo_user_admin"><span class="pull-right" style="margin-top: -48px"><i class="fa fa-edit"></i></span></a>
                            <?= form_label('Utilizador','nome')?>
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <?= form_close()?>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancelar</button>
                <button type="button" class="btn blue">Salvar</button>
            </div>
        </div>
    </div>
</div>



<!-- cadastro de novo projecto-->
<div id="projecto_novo" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="icon-folder"></i> Novo Projecto</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-body">
                        <div class="form-group form-md-line-input has-info">
                            <div class="input-icons">
                                <input type="text" class="form-control nome-projecto" placeholder="Nome do projecto">
                                <label for="form_control_1">Nome</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input has-info">
                                    <div class="input-icon left">
                                        <select id="singles" name="localizacao" class="form-control select2 id-comuna" data-placeholder="Selecione a Localização">
                                            <option value=""></option>
                                            <?php foreach ($comunas as $comuna):?>
                                                <option value="<?= $comuna->id?>"><?= $comuna->nome?></option>
                                            <?php endforeach;?>
                                        </select>
                                        <label for="form_control_1">Localização</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input has-info">
                                    <div class="input-icon left">
                                        <select id="singles" name="localizacao" class="form-control select2 id-coordenador" data-placeholder="Selecione o Coordenador">
                                            <option value=""></option>
                                            <?php foreach ($this->utilizador->listar_utilizadores() as $utilizador):?>
                                                <option value="<?= $utilizador->id?>"><?= $utilizador->nome?></option>
                                            <?php endforeach;?>
                                        </select>
                                        <label for="form_control_1">Coordenador</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancelar</button>
                <button type="button" data-dismiss="modal" class="btn blue btn-add-projecto">Salvar</button>
            </div>
        </div>
    </div>
</div>

<div id="utente_novo" class="modal fade bs-modal-sm" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-user"></i> Escolher Utente</h4>
            </div>
            <div class="modal-body">
                <select name="tipo_utente" id="" class="select2 form-control tipo_utente" data-placeholder="Selecione o tipo de utente">
                    <option value=""></option>
                    <option value="fsc">Pessoa Física</option>
                    <option value="jur">Pessoa Jurídica</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancelar</button>
                <button type="button" data-dismiss="modal" class="btn blue escolher_utente">OK</button>
            </div>
        </div>
        </div>
    </div>
</div>


<!--modal para cadastro de documentos -->
<div class="modal fade bs-modal-sm" id="documento_novo" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="icon-pencil"></i> Adicionar Documento</h4>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('app/store_documento')?>" class="form-add-doc" method="post">
                <div class="form-group form-md-line-input has-info">
                    <div class="input-icon left">
                        <input type="text" class="form-control documento_nome so-letraNovo Processo" autocomplete="off" placeholder="Digite o nome do documento" name="documento_nome">
                        <label for="form_control_1">&nbsp;</label>
                        <i class="icon-folder"></i>
                    </div>
                </div>
                <div class="form-group form-md-line-input has-info">
                    <div class="input-icon left">
                        <select id="single" class="form-control select2 uso" name="uso" data-placeholder="Selecione o modo de uso">
                        <option value=""></option>
                        <option value="c">Candidatura</option>
                        <option value="l">Legalização</option>
                            <option value="t">Todos</option>
                        </select>
                        <label for="form_control_1">Modo de Uso</label>
                    </div>
                </div>
                <div class="form-group form-md-line-input has-info">
                    <div class="input-icon left">
                        <select id="single" class="form-control select2 prioridade" name="prioridade" data-placeholder="Selecione a Prioridade">
                            <option value=""></option>
                            <?php for ($i=1;$i<=10;$i++):?>
                            <option value="<?= $i?>"><?= $i?></option>
                            <?php endfor;?>
                        </select>
                        <label for="form_control_1">Prioridade</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn blue btn-salvar-doc">Salvar</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!--modal para listagem de documentos -->
<div class="modal fade bs-modal" id="documento_listar" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="icon-list"></i> Listagem de Documentos</h4>
            </div>
            <div class="modal-body">
                <div class="portlet-body">
<!--                   <a href="#documento_novo" class="text-primary pull-right" title="Adicionar um novo documento">adicionar documento</a>-->
                    <div class="table-scrollable">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th> # </th>
                                <th> Nome </th>
                                <th> Estado </th>
                                <th> Opções </th>
                            </tr>
                            </thead>
                            <tbody>
                        <?php
                            $cont=0;
                        foreach ($documentos as $documento):
                            $cont+=1;
                            ?>
                            <tr>
                                <td><?= $cont?></td>
                                <td><?= $documento->nome?></td>
                                <?php if($documento->estado==1){?>
                                    <td>Activo</td>
                                <?php }else{?>
                                    <td>Inactivo</td>
                                <?php }?>
                                <td>
                                    <div class="row">
                                        <?php
                                        $class=null;
                                        foreach($menus as $menu){
                                            $sub_menu=$builder_menu[$menu->nome];
                                            if(strtolower($menu->nome)!=strtolower('Documento'))continue;
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
                                                    <div class="col-md-1"><a href="<?= $sub->controlador.'/'.$sub->accao.'/'.$documento->id?>" class="btn btn-sm <?= $class?>" title="<?= $sub->nome?>"><i class="<?= $sub->icon?>"></i></a></div>
                                                    <?php
                                                }else{?>
                                                    <div class="col-md-1"><a href="#<?= $sub->controlador.'_'.$sub->accao?>" class="btn btn-sm <?= $class?>" title="<?= $sub->nome?>"><i class="<?= $sub->icon?>"></i></a></div>
                                                <?php }
                                            }
                                            ?>
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
            <div class="modal-footer"></div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!---modal para upload de imagem/foto-->
<div class="modal fade bs-modal-sm" id="upload_imagem_utente" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="icon-picture"></i> Carregar Imagem</h4>
            </div>
            <div class="modal-body text-center">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                    <div>
                        <span class="btn default btn-file">
                            <span class="fileinput-new"> Carregar </span>
                            <span class="fileinput-exists"> Trocar </span>
                            <input type="file" name="..."> </span>
                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remover </a>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn blue btn-salvar-doc">Salvar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!---detalhe do utente-->
<div class="modal fade bs-modal-lg in" id="utente_detalhe" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Detalhes do Utente</h4>
            </div>
            <div class="modal-body">
                <div class="tab-pane active" id="tab_1_1">
                    <div class="row">
                        <div class="mt-element-card mt-element-overlay">
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mt-card-avatar mt-overlay-1">
                                    <img class="img-detalhe-utente" src=<?= site_url("public/assets/pages/img/avatars/team1.jpg");?> />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-10 profile-info">
                                    <h3 class="font-blue-soft sbold uppercase nome_utente_detalhe"></h3>
                                </div>
                                <div class="col-md-2">
                                    <span class="pull-right"><i class="fa fa-map-marker"></i> <label class="pais_utente_detalhe"></label></span>
                                </div>
                            </div>
                            <!--end row tabbable-line-->
                            <div class="tabbable-custom-profile">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1_11">
                                        <div class="portlet-body">
                                            <h4 class="form-section"><i class="fa fa-user"></i> Dados Pessoais</h4>
                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                <thead>
                                                <tr>
                                                    <th><b>Data de Nascimento</b> </th>
                                                    <th class="hidden-xs"><b>Estado Civil</b></th>
                                                    <th><b>Gênero</b> </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="data_nasc_utente_detalhe"></td>
                                                    <td class="hidden-xs estado_civil_utente_detalhe"> Server hardware purchase </td>
                                                    <td class="genero_utente_detalhe"></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <h4 class="form-section"><i class="fa fa-map-marker"></i> Morada</h4>
                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                <thead>
                                                <tr>
                                                    <th><b>Província</b> </th>
                                                    <th class="hidden-xs"><b>Município</b> </th>
                                                    <th><b>Comuna</b> </th>
                                                    <th><b>Bairro</b> </th>
                                                    <th><b>Rua</b> </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="provincia_utente_detalhe"></td>
                                                    <td class="hidden-xs municipio_utente_detalhe"></td>
                                                    <td class="comuna_utente_detalhe"></td>
                                                    <td class="bairro_utente_detalhe"></td>
                                                    <td class="rua_utente_detalhe"></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <h4 class="form-section"><i class="fa fa-phone"></i> Contacto</h4>
                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                <thead>
                                                <tr>
                                                    <th><b>E-mail</b> </th>
                                                    <th class="hidden-xs"><b>Telefone 1</b> </th>
                                                    <th><b>Telefone 2</b></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="email_utente_detalhe"></td>
                                                    <td class="hidden-xs telefone1_utente_detalhe"></td>
                                                    <td class="telefone2_utente_detalhe"></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <h4 class="form-section"><i class="fa fa-credit-card"></i> Documento de Identificação</h4>
                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                <thead>
                                                <tr>
                                                    <th><b>Tipo</b> </th>
                                                    <th class="hidden-xs"><b>Número</b></th>
                                                    <th><b>Data de Emissão</b></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="tipo_doc_utente_detalhe"></td>
                                                    <td class="hidden-xs num_doc_utente_detalhe_utente_detalhe"></td>
                                                    <td class="data_emissao_doc_utente_detalhe"></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--tab-pane-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Fechar</button>
<!--                <button type="button" class="btn green">Save changes</button>-->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!--Escolher Assunto-->
<div id="processo_novo" class="modal fade bs-modal-sm" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-list"></i> Novo Processo</h4>
            </div>
            <div class="modal-body">
                <div class="form-group form-md-line-input get-utente text-center">
                    <div class="input-icon">
                        <input type="text" class="form-control cod-utente" autocomplete="off" placeholder="Digite o código do Utente" name="documento_nome">
<!--                        <i class="icon-bar"></i>-->
                    </div>
                    <label for="form_control_1" class="callback-get-utente"></label>
                </div>
                <div class="assunto-tipo">
                    <select id="single" class="form-control select2 tipo_assunto -m-t-20" name="assunto" data-placeholder="Selecione o tipo de assunto">
                        <option value=""></option>
                        <?php foreach ($assuntos as $assunto):?>
                            <option value="<?= $assunto->id;?>"><?= $assunto->nome;?></option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" value="" class="id_utente">
                <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancelar</button>
                <button type="button" data-dismiss="modal" class="btn blue escolher_assunto">OK</button>
            </div>
        </div>
    </div>
</div>

<!--camera--->
<div id="camera_imagem_utente" class="modal fade in"  tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-camera"></i> Tirar Fotografia</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 text-center">
                        <div id="camera_utente" class="img-thumbnail"></div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="modal-footer">
                <form>
                    <div id="pre_take_buttons">
                        <!-- This button is shown before the user takes a snapshot -->
                        <button type=button class="btn btn-primary btn-outline" onClick="preview_snapshot()">Capturar Imagem</button>
                    </div>
                    <div id="post_take_buttons" style="display:none">
                        <!-- These buttons are shown after a snapshot is taken -->
                        <input type=button class="btn btn-default btn-outline" value="Tirar Outra" onClick="cancel_preview()">
                        <input type=button class="btn btn-success btn-outline btn_salvar_imagen_utente" value="Salvar" data-dismiss="modal" style="font-weight:bold;">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--camera processo--->
<div id="camera_imagem_utente_projecto" class="modal fade in"  tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-camera"></i> Tirar Fotografia</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 text-center">
                        <div id="camera_utente_projecto" class="img-thumbnail"></div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="modal-footer">
                <form>
                    <div id="pre_take_buttons">
                        <!-- This button is shown before the user takes a snapshot -->
                        <button type=button class="btn btn-primary btn-outline" onClick="preview_snapshot()">Capturar Imagem</button>
                    </div>
                    <div id="post_take_buttons" style="display:none">
                        <!-- These buttons are shown after a snapshot is taken -->
                        <input type=button class="btn btn-default btn-outline" value="Tirar Outra" onClick="cancel_preview()">
                        <input type=button class="btn btn-success btn-outline btn_salvar_imagen_utente" value="Salvar" data-dismiss="modal" style="font-weight:bold;">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Traspasse--->
<div id="traspasse_novo" class="modal fade in"  tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-exchange"></i> Novo Traspasse</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Cedente</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user text-warning"></i></span>
                        <input type="text" class="form-control utente-tras1" placeholder="Número do Bilhete ou Número de Telefone">
                    </div>
                </div>
                <div class="resp text-center"></div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-default" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-sm btn-primary link-trespasse-novo" data-dismiss="" href="javascript:;">OK</button>
            </div>
        </div>
    </div>
</div>

<!---Adicionar  conta ao utilizador-->
<div id="utilizador_adicionar_conta" class="modal fade in"  tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-user-plus"></i> Adicionar Conta</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Username</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input type="text" class="form-control username_conta" placeholder="Username">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Senha</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </span>
                                <input type="text" class="form-control senha_conta" placeholder="Senha">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Grupo</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </span>
                                <select class="form-control select2 id_role" name="id_role" data-placeholder="Selecione o grupo">
                                    <option value=""></option>
                                    <?php foreach ($this->app->listar_grupo() as $item):?>
                                    <option value="<?= $item->id?>"><?= $item->nome?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" class="id_user" value="">
                <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancelar</button>
                <button type="button" data-dismiss="modal" class="btn blue btn-outline btn_criar_conta">Adicionar</button>
            </div>
        </div>
    </div>
</div>

<!---Exigir alteracao de credencias-->
<div id="alterar_credenciais" class="modal fade in"  tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
<!--                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>-->
                <h4 class="modal-title text-warning"><i class="fa fa-lock"></i> Alterar Credênciais</h4>
            </div>
            <div class="modal-body">
                <p class="text-center "><strong>Por razões de segurança aconselhamos-te a trocar as tuas credencias de acesso ao sistema.</strong></p>
            </div>
            <div class="modal-footer">
<!--                <button type="button" data-dismiss="modal" class="btn dark btn-outline btn_adiar_alteracao">Adiar</button>-->
                <a href="<?= site_url("utilizador/perfil");?>" class="btn blue btn-outline btn_adiar_alteracao">Alterar</a>
            </div>
        </div>
    </div>
</div>

<!--Webcam utente-->
<div id="camera_imagem_utilizador" class="modal fade in"  tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-camera"></i> Tirar Fotografia</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 text-center">
                        <div id="camera_utilizador" class="img-thumbnail"></div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="modal-footer">
                <form>
                    <div id="pre_take_buttons_user">
                        <!-- This button is shown before the user takes a snapshot -->
                        <button type=button class="btn btn-primary btn-outline" onClick="preview_snapshot_user()">Capturar Imagem</button>
                    </div>
                    <div id="post_take_buttons_user" style="display:none">
                        <!-- These buttons are shown after a snapshot is taken -->
                        <input type=button class="btn btn-default btn-outline" value="Tirar Outra" onClick="cancel_preview_user()">
                        <input type=button class="btn btn-success btn-outline btn_salvar" value="Salvar" data-dismiss="modal" style="font-weight:bold;">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!---modal para upload de imagem/foto-->
<div class="modal fade bs-modal-sm" id="upload_imagem_utilizador" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="icon-picture"></i> Carregar Imagem</h4>
            </div>
            <div class="modal-body text-center">
                <form action="#" role="form" id="upload_form" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" class="img_preview" alt="" /> </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                            <div>
                                                                    <span class="btn default btn-file">
                                                                        <span class="fileinput-new"> <i class="fa fa-picture-o"></i> </span>
                                                                        <span class="fileinput-exists"> Trocar </span>
                                                                        <input type="file" name="image_file" id="image_file"> </span>
                                <a href="javascript:;" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"> Remover </a>
                            </div>
                        </div>
                    </div>
                    <div class="margin-top-10">
                        <button class="btn blue btn_salvar_foto_perfil" name="upload" id="upload"> Salvar </button>
                        <a href="javascript:;" class="btn default"> Cancelar </a>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="margin-top-10">
<!--                    <button data-dismiss="modal" class="btn blue" name="upload" id="upload"> Salvar </button>-->
<!--                    <a data-dismiss="modal" href="javascript:;" class="btn default"> Cancelar </a>-->
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div id="utente_eliminar" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-info text-info"></i> Confirmação</h4>
            </div>
            <div class="modal-body text-center">
                <p> <i class="fa fa-times text-danger"></i> Desejas realmente eliminar este Utente? </p>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn dark btn-outline">Não</button>
                <button type="button" data-dismiss="modal" class="btn blue btn-eliminar-utente">Sim</button>
            </div>
        </div>
    </div>
</div>

<!--Adicionar bairro-->
<div id="bairro_novo" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-edit text-info"></i> Adicionar Bairro</h4>
            </div>
            <div class="modal-body">
                <div class="form-group form-md-line-input has-info">
                    <div class="input-iconss">
                        <input type="text" class="form-control nome-bairro" placeholder="">
                        <label for="form_control_1">Nome do Bairro</label>
                    </div>
                </div>
                <div class="form-group form-md-line-input has-info">
                    <div class="input-icon left">
                        <select id="singles" name="localizacao" class="form-control select2 id-comuna" data-placeholder="Selecione a Localização">
                            <option value=""></option>
                            <?php foreach ($comunas1 as $comuna):?>
                                <option value="<?= $comuna->id?>"><?= $comuna->nome?></option>
                            <?php endforeach;?>
                        </select>
                        <label for="form_control_1">Localização</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancelar</button>
                <button type="button" data-dismiss="modal" class="btn blue btn-add-bairro">Adicionar</button>
            </div>
        </div>
    </div>
</div>

<!--Listar bairro-->
<div class="modal fade bs-modal-lg" id="bairro_listar" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title"><i class="fa fa-list-alt text-info"></i> Listagem de Bairro</h4>
            </div>
            <div class="modal-body">
                <div class="table-scrollable">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th> # </th>
                            <th> Nome </th>
                            <th> Comuna </th>
                            <th> Estado </th>
                            <th> Opções </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $cont=0;
                        foreach ($bairros as $bairro):
                            $cont+=1;
                            ?>
                            <tr>
                                <td><?= $cont?></td>
                                <td><?= $bairro->nome?></td>
                                <td><?= $this->bairro->get_comuna_by_id($bairro->id_comuna)->nome?></td>
                                <?php if($bairro->estado==1){?>
                                    <td>Activo</td>
                                <?php }else{?>
                                    <td>Inactivo</td>
                                <?php }?>
                                <td>
                                    <div class="row">
                                        <?php
                                        $class=null;
                                        foreach($menus as $menu){
                                            $sub_menu=$builder_menu[$menu->nome];
                                            if(strtolower($menu->nome)!=strtolower('Bairro'))continue;
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
                                                    <div class="col-md-1"><a href="<?= $sub->controlador.'/'.$sub->accao.'/'.$bairro->id?>" class="btn btn-sm <?= $class?>" title="<?= $sub->nome?>"><i class="<?= $sub->icon?>"></i></a></div>
                                                    <?php
                                                }else{?>
                                                    <div class="col-md-1"><a href="#<?= $sub->controlador.'_'.$sub->accao?>" class="btn btn-sm <?= $class?>" title="<?= $sub->nome?>"><i class="<?= $sub->icon?>"></i></a></div>
                                                <?php }
                                            }
                                            ?>
                                        <?php  }?>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Fechar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!--Adicionar data de entrega do documento-->
<div id="add_data_entrega" class="modal fade bs-modal-sm" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h5 class="modal-title"><i class="fa fa-calendar"></i> Adicionar data de entrega</h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" data-date-start-date="+0d">
                            <input type="text" class="form-control data-entrega" readonly>
                            <span class="input-group-btn">
                                <button class="btn default" type="button">
                                    <i class="fa fa-calendar"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancelar</button>
                <button type="button" data-dismiss="modal" class="btn blue btn-add-data-entrega">OK</button>
            </div>
        </div>
    </div>
</div>
</div>