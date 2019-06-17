<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2019 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Dhulka</a>. Sitema de Gestão de Terras.
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                    <li><a href="#"><i class="icon-tumblr"></i></a></li>
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-rss"></i></a></li>
                    <li><a href="#"><i class="icon-github-alt"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src=<?= site_url("public/portal/nova/js/vendor/jquery-1.9.1.min.js")?>></script>
<script src=<?= site_url("public/portal/nova/js/vendor/bootstrap.min.js")?>></script>
<script src=<?= site_url("public/portal/nova/js/main.js")?>></script>
<!-- Required javascript files for Slider -->
<script src=<?= site_url("public/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js");?> type="text/javascript"></script>
<script src=<?= site_url("public/assets/global/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.pt.min.js");?> type="text/javascript"></script>
<script src=<?= site_url("public/assets/apps/scripts/selects/models.js");?> type="text/javascript"></script>
<script src=<?= site_url("public/assets/apps/scripts/app/candidatura.js");?> type="text/javascript"></script>
<script src=<?= site_url("public/assets/global/plugins/masked-input/masked-input.min.js");?> type="text/javascript"></script>
<script src=<?= site_url("public/assets/pages/scripts/components-select2.min.js");?> type="text/javascript"></script>
<!--<script src=--><?//= site_url("public/assets/global/plugins/select2/js/select2.full.min.js");?><!-- type="text/javascript"></script>-->
<script src=<?= site_url("public/portal/nova/js/jquery.ba-cond.min.js")?>></script>
<script src=<?= site_url("public/portal/nova/js/jquery.slitslider.js")?>></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript">
    $(function() {
        var Page = (function() {

            var $navArrows = $( '#nav-arrows' ),
                slitslider = $( '#slider' ).slitslider( {
                    autoplay : true
                } ),

                init = function() {
                    initEvents();
                },
                initEvents = function() {
                    $navArrows.children( ':last' ).on( 'click', function() {
                        slitslider.next();
                        return false;
                    });

                    $navArrows.children( ':first' ).on( 'click', function() {
                        slitslider.previous();
                        return false;
                    });
                };

            return { init : init };

        })();

        Page.init();
        // $('.select2').select2();

    });
</script>
<!-- /SL Slider -->
</body>
</html>