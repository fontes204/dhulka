
<div id="escolher_tipo_utente" class="modal fade in"  tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!--                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>-->
                <h4 class="modal-title text-info"><i class="fa fa-user"></i> Selecione o Tipo de Utente</h4>
            </div>
            <div class="modal-body text-center">
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="radio-inline">
                            <input type="radio" name="tipo_utente" value="psf" checked="">
                            Pessoa Física
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="tipo_utente" value="psj">
                            Pessoa Jurídica
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-primary"  data-dismiss="modal">Ok</a>
            </div>
        </div>
    </div>
</div>

<!-- begin #footer-copyright -->
<div id="footer-copyright" class="footer-copyright">
    <!-- begin container -->
    <div class="containerq m-r-20 pull-right">
        <span class="copyright"><?= date('Y')?> &copy; Dhulka - Sistema de Gestão de Terras.</span>
    </div>
    <!-- end container -->
</div>
<!-- end #footer-copyright -->
<!-- ================== BEGIN BASE JS ================== -->
<script src=<?= site_url("public/portal/assets/plugins/jquery/jquery-1.9.1.min.js")?>></script>
<script src=<?= site_url("public/portal/assets/plugins/jquery/jquery-migrate-1.1.0.min.js")?>></script>
<script src=<?= site_url("public/portal/assets/plugins/bootstrap/js/bootstrap.min.js")?>></script>
<!--[if lt IE 9]>
<script src=<?= site_url("public/portal/assets/crossbrowserjs/html5shiv.js")?>></script>
<script src=<?= site_url("public/portal/assets/crossbrowserjs/respond.min.js")?>></script>
<script src=<?= site_url("public/portal/assets/crossbrowserjs/excanvas.min.js")?>></script>
<![endif]-->
<script src=<?= site_url("public/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js");?> type="text/javascript"></script>
<script src=<?= site_url("public/assets/global/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.pt.min.js");?> type="text/javascript"></script>
<script src=<?= site_url("public/assets/apps/scripts/selects/models.js");?> type="text/javascript"></script>
<script src=<?= site_url("public/assets/apps/scripts/app/candidatura.js");?> type="text/javascript"></script>
<script src=<?= site_url("public/assets/global/plugins/masked-input/masked-input.min.js");?> type="text/javascript"></script>
<script src=<?= site_url("public/assets/pages/scripts/components-select2.min.js");?> type="text/javascript"></script>
<script src=<?= site_url("public/assets/global/plugins/select2/js/select2.full.min.js");?> type="text/javascript"></script>
<script src=<?= site_url("public/portal/assets/plugins/isotope/jquery.isotope.min.js")?>></script>
<script src=<?= site_url("public/portal/assets/plugins/lightbox/js/lightbox-2.6.min.js")?>></script>
<script src=<?= site_url("public/portal/assets/js/gallery.demo.min.js")?>></script>
<script src=<?= site_url("public/portal/assets/plugins/jquery.countdown/jquery.plugin.js")?>></script>
<script src=<?= site_url("public/portal/assets/plugins/jquery.countdown/jquery.countdown.js")?>></script>
<script src=<?= site_url("public/portal/assets/js/coming-soon.demo.min.js")?>></script>
<script src=<?= site_url("public/portal/assets/plugins/jquery-cookie/jquery.cookie.js")?>></script>
<script src=<?= site_url("public/portal/assets/js/apps.min.js")?>></script>
<!-- ================== END BASE JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
        // Gallery.init();
//        ComingSoon.init();
        $('.select2').select2();
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