<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>Projecto - <?= $projecto->bairro?></h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="<?= site_url('portal/projectos')?>">Projecto</a> <span class="divider">/ <?= $projecto->bairro?></span></li><li class="active">Candidatura</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / .title -->

<section id="about-us" class="container main">
    <div class="row-fluid">
        <div class="span8">
            <?php
            if ($data_expo==0) {
                ?>
                <div class="post-detail section-container">
                    <div class="retorno-candidatura"></div>
                    <div class="panel-body">
                        <form action="<?= site_url('portal/candidatura_store') ?>" class="frm_candidatura"
                              method="POST">
                            <fieldset>
                                <legend>Faça a sua candidatura</legend>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nome Completo</label>
                                            <input type="text" name="nome-utente" required
                                                   class="nome_utente form-control" id="exampleInputEmail1"
                                                   placeholder=""/>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
<!--                                                <div class="col-md-6">-->
<!--                                                    <label for="exampleInputEmail1">Tipo de-->
<!--                                                        Documento</label>-->
<!--                                                </div>-->
                                                <div class="col-md-6 provincia_row"
                                                     style="">
                                                    <label for="exampleInputEmail1">Província de Origem</label>
                                                </div>
                                            </div>
                                            <div class="row">
<!--                                                <div>-->
<!--                                                    <div class="col-md-4">-->
<!--                                                        <label class="radio-inline form-control text-center btn btn-primary">-->
<!--                                                            <input type="radio"-->
<!--                                                                   class="tipo_doc btn-bi-candidato"-->
<!--                                                                   name="tipo_doc" value="bi"/>-->
<!--                                                            <span class="nome-bi">B.I</span>-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                </div>-->
                                                <div class="mostra_combo_provincia">
                                                    <div class="col-md-12">
                                                        <select class="form-control select2s select-prov-mask"
                                                                data-placeholder="Escolha uma">
                                                            <?php foreach ($provincias as $provincia): ?>
                                                                <option value="<?= $provincia->id; ?>"><?= $provincia->nome; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="outro_documento">
<!--                                                    <div class="col-md-4">-->
<!--                                                        <label class="radio-inline form-control text-center btn btn-info">-->
<!--                                                            <input type="radio" required class="tipo_doc"-->
<!--                                                                   name="tipo_doc" value="psp"/>-->
<!--                                                            Pste-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                    <div class="col-md-4">-->
<!--                                                        <label class="radio-inline form-control text-center btn btn-default">-->
<!--                                                            <input type="radio" required class="tipo_doc"-->
<!--                                                                   name="tipo_doc" value="cr"/>-->
<!--                                                            C. Residente-->
<!--                                                        </label>-->
<!--                                                    </div>-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Data de Emissão</label>
                                            <input type="text" name="data_emissao" required
                                                   class="data_emissao form-control date-picker"
                                                   id="exampleInputEmail1" placeholder=""/>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Telefone 1</label>
                                                    <input type="text" name="telefone1" required
                                                           class="telefone1 form-control tel-mask"
                                                           id="exampleInputEmail1" placeholder=""/>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Telefone 2</label>
                                                    <input type="text" name="telefone2"
                                                           class="telefone2 form-control tel-mask"
                                                           id="exampleInputEmail1" placeholder=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Data de Nascimento</label>
                                            <input type="text" name="data_nasc" required
                                                   class="data_nasc form-control date-picker"
                                                   id="exampleInputEmail1" placeholder=""/>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Número do Bilhete</label>
                                            <input type="text" name="num_doc" required
                                                   class="num_doc form-control num-doc"
                                                   id="exampleInputEmail1" placeholder=""/>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nacionalidade</label>
                                            <select name="nacionalidade"
                                                    class="nacionalidade form-control select2"
                                                    data-placeholder="Escolha uma">
                                                <?php foreach ($paises as $pais): ?>
                                                    <option value="<?= $pais->id; ?>"><?= $pais->nome; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">E-mail</label>
                                            <input type="text" name="email" required
                                                   class="email form-control" id="exampleInputEmail1"
                                                   placeholder=""/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Província</label>
                                            <select name="provincia"
                                                    class="form-control select2 select-prov"
                                                    data-placeholder="Escolhe uma Província">
                                                <option value=""></option>
                                                <?php foreach ($provincias as $provincia): ?>
                                                    <option value="<?= $provincia->id; ?>"><?= $provincia->nome; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Município</label>
                                            <select name="municipio"
                                                    class="form-control select2 select-municipio"
                                                    data-placeholder="Escolha um Município">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Comuna</label>
                                            <select name="comuna"
                                                    class="comuna form-control select2 select-comuna"
                                                    data-placeholder="Escolha uma Comuna">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Bairro</label>
                                            <select name="bairro"
                                                    class="bairro form-control select2 select-bairro"
                                                    data-placeholder="Escolha um Bairro">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Rua</label>
                                            <input name="rua" type="text" required class="rua form-control"
                                                   id="exampleInputEmail1" placeholder="Escolha uma Rua"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="exampleInputPassword1">Gênero</label>
                                            </div>
                                            <div class="col-md-6 pull-right">
                                                <label for="exampleInputPassword1">Estado Civil</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="radio-inline form-control text-center btn btn-info"
                                                       style="padding-left: 20%">
                                                    <input type="radio" class="genero" name="genero"
                                                           value="f"/>
                                                    F
                                                </label>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="radio-inline form-control text-center btn btn-default"
                                                       style="padding-left: 25%">
                                                    <input type="radio" class="genero" name="genero"
                                                           value="m"/>
                                                    M
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select name="estado_civil"
                                                            class="estado_civil form-control select2"
                                                            data-placeholder="Selecione o estado civil">
                                                        <option value=""></option>
                                                        <option value="C">Casado(a)</option>
                                                        <option value="D">Divorciado(a)</option>
                                                        <option value="S">Solteiro(a)</option>
                                                        <option value="V">Viúvo(a)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Dimensão do Terreno -
                                                m<sup>2</sup></label>
                                            <select name="dim_terreno"
                                                    class="dim_terreno form-control select2"
                                                    data-placeholder="Escolha uma">
                                                <option value=""></option>
                                                <?php foreach ($caracteristicas as $caracteristica): ?>
                                                    <option value="<?= $caracteristica->id ?>"><?= $caracteristica->combinacao ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <ul>
                                            <div class="row docs-candidatura">
                                                <?php
                                                $cont = 0;
                                                foreach ($documentos as $docs):
                                                    $cont += 1;
                                                    ?>
                                                    <div class="col-md-3 filha">
                                                        <input type="file" class="" id="fotos<?= $cont ?>"
                                                               accept="image/*" cont="<?= $cont ?>"
                                                               name="image">
                                                        <input type="checkbox" class="documento input-xs"
                                                               cont="<?= $cont ?>" value="<?= $docs->id ?>"
                                                               name="txt2018"/> <b><?= $docs->nome ?> <i
                                                                    class=""></i></b>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="btn-group pull-right">
                                            <input type="hidden" value="<?= $param ?>" class="id_projecto">
                                            <button type="button"
                                                    class="btn btn-lg btn-primary m-r-2 btn-save-canditura">
                                                Enviar Candidatura
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <?php
            }else{
                ?>
                <div class="text-center alert alert-danger m-t-40">
                    <h2 class="">Terminou o tempo de exposição!</h2>
                </div>
            <?php }
            ?>
        </div>
        <aside class="span4">
            <div class="section-container m-t-3">
                <h4 class="section-title"><span>Projecto</span></h4>
                <ul class="sidebar-list" style="cursor:pointer; list-style: none">
                    <li><a href="javascript:;"><h5>Nome: <span class="text-info pull-right m-r-2"><?= $projecto->bairro?></span></h5></a></li>
                    <li><a href="javascript:;"><h5>Localização: <span class="text-info pull-right m-r-2"><?= $projecto->comuna?></span></h5></a></li>
                    <li><a href="javascript:;"><h5>Quantidade de Lotes: <span class="text-info pull-right m-r-2"><?= number_format($projecto->num_lotes,0)?></span></h5></a></li>
                </ul>
            </div>
            <!-- end section-container -->
            <!-- begin section-container -->
            <div class="section-container">
                <h4 class="section-title"><span>Características dos Lotes</span></h4>
                <ul class="sidebar-recent-post">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th> Dimensão </th>
                            <th style="text-align: right"> Quantidade </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($caracteristicas as $caracteristica):?>
                            <tr>
                                <td><?= $caracteristica->combinacao?> m<sup>2</sup></td>
                                <td style="text-align: right"><?= $caracteristica->qtde_terreno?></td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </ul>
            </div>
            <!-- end section-container -->
            <!-- begin section-container -->
            <div class="section-container">
                <h4 class="section-title"><span>Público Alvo</span></h4>
                <ul class="sidebar-list" style="cursor:pointer; list-style: none">
                    <li><a href="javascript:;"><h5><?= $projecto->publico_alvo;?> </h5></a></li>
                </ul>
            </div>
            <!-- /.search -->
        </aside>
    </div>

</section>