<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>Projecto - <?= $projecto->bairro?></h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="<?= site_url('portal/projectos')?>">Projecto</a> <span class="divider">/ <?= $projecto->bairro?></span></li>
                    <li class="active">Mais Detalhe</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / .title -->

<section id="about-us" class="container main">
    <div class="row-fluid">
        <div class="span8">
            <div class="blog">
                <div class="blog-item well">
                    <p><img src=<?= site_url("galeria_projecto/".$projecto->foto)?> width="100%" alt="" /></p>
                    <p class="text-justify"><?= $projecto->descricao;?></p>
<!--                    <a class="btn btn-link" href="#">Read More <i class="icon-angle-right"></i></a>-->
                </div>
                <div class="gap"></div>

                <!-- Paginationa -->
                <h4>Galeria</h4>
                <div class="pagination">
                    <ul>
                        <li><a href="#"><i class="icon-angle-left"></i></a></li>
                        <?php
                        $cont=0;
                            foreach ($galeria as $foto):
                                $cont++;
                        ?>
                        <li><a data-toggle="modal" href="#modal-<?= $cont?>"><?= $cont?></a></li>
                                <div id="modal-<?= $cont?>" class="modal hide fade">
                                    <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                                    <div class="modal-body">
                                        <img src="<?= site_url("galeria_projecto/".$foto->foto)?>" alt=" " width="100%" style="max-height:400px">
                                    </div>
                                </div>
                        <?php endforeach;?>
                        <li><a href="#"><i class="icon-angle-right"></i></a></li>
                    </ul>
                </div>


            </div>
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