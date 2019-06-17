<!-- begin #content -->
<div id="content" class="content">
    <!-- begin container -->
    <div class="container"  style="width: 89%">
        <!-- begin row -->
        <div class="row row-space-30">
            <!-- begin col-9 -->
            <div class="col-md-9">
                <!-- begin post-list -->
                <h4 class="post-title">
                    <a href="javascript:;"><i class="fa fa-home"></i> Projectos Habitacionais</a>
                </h4>
                <div class="post-list post-grid post-grid-4 row">
                    <?php foreach ($projectos as $projecto):?>
                    <div class="post-li col-md-4 m-b-4">
                        <!-- begin post-content -->
                        <div class="post-content">
                            <!-- begin post-image -->
                            <div class="post-image">
                                <a href="<?= site_url("portal/mais_detalhes/".$projecto->id)?>"><img src=<?= site_url("galeria_projecto/".$projecto->foto)?> alt="" /></a>
                            </div>
                            <!-- end post-image -->
                            <!-- begin post-info -->
                            <div class="post-info text-center">
                                <h4 class="post-title">
                                    <a href="<?= site_url("portal/mais_detalhes/".$projecto->id)?>"><?= $projecto->bairro;?></a>
                                </h4>
                                <div class="post-by">
                                    <i class="fa fa-map-marker"></i>  <a href="<?= site_url("portal/mais_detalhes/".$projecto->id)?>"><?= $projecto->comuna;?></a>
                                </div>
                            </div>
                            <!-- end post-info -->
                        </div>
                        <!-- end post-content -->
                    </div>
                    <?php endforeach;?>

                </div>
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
<!-- end #content -->

<!-- begin #footer -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div id="footer-copyright" class="footer-copyright">
    <!-- begin container -->
    <div class="containerq m-r-20 pull-right">
        <span class="copyright"><?= date('Y')?> &copy; Dhulka - Sistema de Gestão de Terras.</span>
    </div>
    <!-- end container -->
</div>


<!-- ================== BEGIN BASE JS ================== -->
<script src="http://localhost/dhulka/public/portal/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
<script src="http://localhost/dhulka/public/portal/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
<script src="http://localhost/dhulka/public/portal/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script src="http://localhost/dhulka/public/portal/assets/crossbrowserjs/html5shiv.js"></script>
<script src="http://localhost/dhulka/public/portal/assets/crossbrowserjs/respond.min.js"></script>
<script src="http://localhost/dhulka/public/portal/assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="http://localhost/dhulka/public/portal/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
<script src="http://localhost/dhulka/public/portal/assets/plugins/masonry/masonry.min.js"></script>
<script src="http://localhost/dhulka/public/portal/assets/js/apps.min.js"></script>
<!-- ================== END BASE JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-53034621-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>