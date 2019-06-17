<!-- begin #content -->
<div id="content" class="content">
    <!-- begin container -->
    <div class="container"  style="width: 89%">
        <!-- begin row -->
        <div class="row">
            <!-- begin col-9 -->
            <div class="col-md-8">
                <!-- begin post-detail -->
                <div class="post-detail section-container">
                    <h4 class="post-title">
                        <a href="javascript:;"><i class="fa fa-home"></i> Projecto Habitacional - <?= $projecto->bairro?></a>
                    </h4>
                    <div class="post-by">
<!--                        Criado por <a href="#">admin</a> <span class="divider">|</span> 10 June 2015 <span class="divider">|</span> <a href="#">Sports</a>, <a href="#">Mountain</a>, <a href="#">Bike</a> <span class="divider">|</span> 2 Comments-->
                    </div>
                    <!-- begin post-image -->
                    <div class="post-image">
                        <img src=<?= site_url("galeria_projecto/".$projecto->foto)?> alt="" />
                    </div>
                    <!-- end post-image -->
                    <!-- begin post-desc -->
                    <div class="post-desc text-justify">
                        <div class="info">
                            <h4 class="title"> Descrição</h4>
                        </div>
                        <p style="font-size: 12pt; font-family: Trebuchet MS, Tahoma, Verdana, Arial, sans-serif">
                            <?= $projecto->descricao;?>
                        </p>
                    </div>
                </div>
                <!-- end post-detail -->
            </div>
            <!-- end col-9 -->
            <!-- begin col-3 -->
            <div class="col-md-4">
                <!-- begin section-container -->
                <!-- end section-container -->
                <!-- begin section-container -->
                <?php
                    for ($i=0;$i<=2;$i++)
                    {
                        echo "<br>";
                    }
                ?>
                <div class="section-container" style="margin-top: -22px">
                    <h4 class="section-title"><span>Projecto</span></h4>
                    <ul class="sidebar-list" style="cursor:pointer">
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
                    <ul class="sidebar-recent-post">
                        <li>
                            <div class="info">
                                <h4 class="title"> <?= $projecto->publico_alvo;?>.</h4>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end section-container -->
                <!-- begin section-container -->
                <div class="section-container">
                    <h4 class="section-title"><span>Galeria</span></h4>
                    <div id="gallery" class="gallery">
                        <div class="row">
                            <?php
                            $i=0;
                            foreach ($galeria as $foto):
                                $i++;
                            ?>
                            <div class="col-md-3">
                                <div class="image gallery-group-1">
                                    <div class="image-inner">
                                        <a href="http://localhost/dhulka/galeria_projecto/<?= $foto->foto?>" data-lightbox="gallery-group-1">
                                            <img class="img-thumbnail img-polaroid" src="http://localhost/dhulka/galeria_projecto/<?= $foto->foto?>" alt="shjakal" />
                                        </a>
                                        <p class="image-caption text-center">Imagem <?= $i?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
                <!-- end section-container -->
            </div>
            <!-- end col-3 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end #content -->