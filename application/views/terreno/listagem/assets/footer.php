
</body>
<!-- begin #footer-copyright -->
<div id="footer-copyright" class="footer-copyright">
    <!-- begin container -->
    <div class="containerq m-r-20 pull-right">
        <span class="copyright"><?= date('Y')?> &copy; Dhulka - Sistema de Gestão de Terras.</span>
    </div>
    <!-- end container -->
</div>
<!-- end #footer-copyright -->
<script src=<?= site_url("public/portal/assets/plugins/jquery/jquery-1.9.1.min.js")?>></script>
<script src=<?= site_url("public/portal/assets/plugins/jquery/jquery-migrate-1.1.0.min.js")?>></script>
<script src=<?= site_url("public/portal/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js")?>></script>
<script src=<?= site_url("public/portal/assets/plugins/bootstrap/js/bootstrap.min.js")?>></script>
<!--[if lt IE 9]>
<script src=<?= site_url("public/portal/assets/crossbrowserjs/html5shiv.js")?>></script>
<script src=<?= site_url("public/portal/assets/crossbrowserjs/respond.min.js")?>></script>
<script src=<?= site_url("public/portal/assets/crossbrowserjs/excanvas.min.js")?>></script>
<![endif]-->
<script src=<?= site_url("public/portal/assets/plugins/slimscroll/jquery.slimscroll.min.js")?>></script>
<script src=<?= site_url("public/portal/assets/plugins/jquery-cookie/jquery.cookie.js")?>></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src=<?= site_url("public/portal/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js")?>></script>
<script src=<?= site_url("public/portal/assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js")?>></script>
<script src=<?= site_url("public/portal/assets/js/map-vector.demo.min.js")?>></script>
<script src=<?= site_url("public/portal/assets/js/apps.min.js")?>></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
	$(document).ready(function() {
		App.init();
		MapVector.init();
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
