<div id="content" class="content">
    <!-- begin container -->
    <div class="container" style="width: 89%">
        <!-- begin row -->
        <div class="row">
            <!-- begin col-9 -->
            <div class="col-md-9">
                <!-- begin post-list -->
                <ul class="post-list">
                    <li>
                        <!-- begin post-content -->
                        <?php
                            if (count($projectos)==0){
                                echo '<br><div class="alert alert-danger text-center">Não há projectos disponíveis.</div>';
                            }else {
                                ?>
                                <div class="post-content">
                                    <!-- begin post-image -->
                                    <div class="post-image post-image-with-carousel">
                                        <!-- begin carousel -->
                                        <div id="carousel-post" class="carousel slide" data-ride="carousel">
                                            <!-- begin carousel-indicators -->
                                            <ol class="carousel-indicators">
                                                <?php
                                                $cont1 = 0;
                                                $active1 = null;
                                                foreach ($projectos as $prs):
                                                    $cont1 += 1;
                                                    if ($cont1 == 1)
                                                        $active1 = "active";
                                                    else
                                                        $active1 = "";
                                                    ?>
                                                    <li data-target="#carousel-post" data-slide-to="0"
                                                        class="<?= $active1 ?>"></li>
                                                <?php endforeach; ?>
                                            </ol>
                                            <!-- end carousel-indicators -->
                                            <!-- begin carousel-inner -->
                                            <div class="carousel-inner">
                                                <?php
                                                $cont = 0;
                                                $active = null;
                                                foreach ($projectos as $projecto):
                                                    $cont += 1;
                                                    if ($cont == 1)
                                                        $active = "active";
                                                    else
                                                        $active = "";
                                                    ?>
                                                    <div class="item <?= $active ?>">
                                                        <div class="carousel-indicators" style="top: 0px">
                                                            <h2 style="color: #fff; padding: 20px;  background-color: rgba(0,0,0,0.2);"
                                                                class="brand-text">
                                                                <?= $projecto->bairro; ?>
                                                            </h2>
                                                        </div>
                                                        <div class="carousel-indicators" style="bottom: 50px;">
                                                            <a href="<?= site_url("portal/mais_detalhes/" . $projecto->id) ?>"
                                                               class="text-primary"
                                                               style="background-color: rgba(255,255,255,0.9);padding: 6px;font-family: Trebuchet MS, Tahoma, Verdana, Arial, sans-serif">Mais
                                                                detalhes...</a>
                                                        </div>
                                                        <a href="javascript:;">
                                                            <img src=<?= site_url("galeria_projecto/" . $projecto->foto) ?> alt=""/>
                                                        </a>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                            <!-- end carousel-inner -->
                                            <!-- begin carousel-control -->
                                            <a class="left carousel-control" href="#carousel-post" role="button"
                                               data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"
                                                      aria-hidden="true"></span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel-post" role="button"
                                               data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"
                                                      aria-hidden="true"></span>
                                            </a>
                                            <!-- end carousel-control -->
                                        </div>
                                        <!-- end carousel -->
                                    </div>
                                </div>
                                <!-- end post-content -->
                                <?php
                            }
                        ?>
                    </li>
                </ul>
                <!-- end post-list -->
            </div>
            <!-- end col-9 -->
            <!-- begin col-3 -->
            <div class="col-md-3 m-t-15">
                <!-- begin section-container -->
                <div class="section-container">
                    <h4 class="section-title"><span>REGRAS DE ACESSO A CANDIDATURA</span></h4>
                    <ul class="sidebar-list">
                        <li><a href="#">Ser maior de idade (18 anos)</a></li>
                        <li><a href="#">Ser trabalhador</a></li>
                    </ul>
                </div>
                <!-- end section-container -->
                <!-- begin section-container -->
                <div class="section-container">
                    <h4 class="section-title"><span>Documentação</span></h4>
                    <ul class="sidebar-list">
                        <li>
                            <?php foreach ($documentos as $documento):?>
                                <a href="#"><?= $documento->nome?></a></h4>
                            <?php endforeach;?>
                        </li>
                    </ul>
                </div>
                <!-- end section-container -->
            </div>
            <!-- end col-3 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<!-- end #content -->