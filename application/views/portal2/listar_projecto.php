<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>Projectos</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="<?= site_url("portal")?>">Página Inicial</a> <span class="divider">/</span></li>
                    <li><a href="#">Projectos</a> <span class="divider">/</span></li>
                    <li class="active">Listar</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / .title -->

<section id="portfolio" class="container main">
    <ul class="gallery col-4">
        <!--Item 1-->
        <?php
        $cont=0;
        $pos=0;
        $color=array("#ff9c00","#336fff","#63cdb9","#2fa7fd","#f58220","#feec05","#4c7ccc");
        foreach ($projectos as $projecto):
            $cont++;
            $pos=rand(0,6);
            ?>
        <li class="text-center">
            <div class="preview">
                <img alt=" " src="<?= site_url("galeria_projecto/".$projecto->foto)?>">
                <div class="overlay">
                </div>
                <div class="links">
                    <a data-toggle="modal" href="#modal-<?= $cont?>"><i class="icon-eye-open"></i></a><a href="<?= site_url("portal/mais_detalhes/".$projecto->id)?>"><i class="icon-link"></i></a>
                </div>
            </div>
            <div class="desc">
<!--                <small>Portfolio item short description</small>-->
                <h5 style="color: <?= $color[$pos]?>"><?= $projecto->bairro;?></h5>
            </div>
            <div id="modal-<?= $cont?>" class="modal hide fade">
                <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                <div class="modal-body">
                    <h5 class="nome-projecto" style="color: <?= $color[$pos]?>">Projecto - " <?= $projecto->bairro;?> "</h5>
                    <img src="<?= site_url("galeria_projecto/".$projecto->foto)?>" alt=" " width="100%" style="max-height:400px">
                </div>
            </div>
        </li>
        <!--/Item 1-->
    <?php endforeach;?>
    </ul>

</section>

<!--Bottom-->
<section id="bottom" class="main">
    <!--Container-->
    <div class="container">

        <!--row-fluids-->
        <div class="row-fluid">

            <!--Contact Form-->
            <div class="span3">
                <h4>ADDRESS</h4>
                <ul class="unstyled address">
                    <li>
                        <i class="icon-home"></i><strong>Address:</strong> 1032 Wayback Lane, Wantagh<br>NY 11793
                    </li>
                    <li>
                        <i class="icon-envelope"></i>
                        <strong>Email: </strong> support@email.com
                    </li>
                    <li>
                        <i class="icon-globe"></i>
                        <strong>Website:</strong> www.domain.com
                    </li>
                    <li>
                        <i class="icon-phone"></i>
                        <strong>Toll Free:</strong> 631-409-3105
                    </li>
                </ul>
            </div>
            <!--End Contact Form-->

            <!--Important Links-->
            <div id="tweets" class="span3">
                <h4>OUR COMPANY</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Copyright</a></li>
                        <li><a href="#">We are hiring</a></li>
                        <li><a href="#">Clients</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
            </div>
            <!--Important Links-->

            <!--Archives-->
            <div id="archives" class="span3">
                <h4>ARCHIVES</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="#">December 2012 (1)</a></li>
                        <li><a href="#">November 2012 (5)</a></li>
                        <li><a href="#">October 2012 (8)</a></li>
                        <li><a href="#">September 2012 (10)</a></li>
                        <li><a href="#">August 2012 (29)</a></li>
                        <li><a href="#">July 2012 (1)</a></li>
                        <li><a href="#">June 2012 (31)</a></li>
                    </ul>
                </div>
            </div>
            <!--End Archives-->

            <div class="span3">
                <h4>FLICKR GALLERY</h4>
                <div class="row-fluid first">
                    <ul class="thumbnails">
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829540293/" title="01 (254) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7003/6829540293_bd99363818_s.jpg" width="75" height="75" alt="01 (254)"></a>
                        </li>
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829537417/" title="01 (196) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7013/6829537417_465d28e1db_s.jpg" width="75" height="75" alt="01 (196)"></a>
                        </li>
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829527437/" title="01 (65) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7021/6829527437_88364c7ec4_s.jpg" width="75" height="75" alt="01 (65)"></a>
                        </li>
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829524451/" title="01 (6) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7148/6829524451_a725793358_s.jpg" width="75" height="75" alt="01 (6)"></a>
                        </li>
                    </ul>
                </div>
                <div class="row-fluid">
                    <ul class="thumbnails">
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829524451/" title="01 (6) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7148/6829524451_a725793358_s.jpg" width="75" height="75" alt="01 (6)"></a>
                        </li>
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829540293/" title="01 (254) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7003/6829540293_bd99363818_s.jpg" width="75" height="75" alt="01 (254)"></a>
                        </li>
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829537417/" title="01 (196) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7013/6829537417_465d28e1db_s.jpg" width="75" height="75" alt="01 (196)"></a>
                        </li>
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829527437/" title="01 (65) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7021/6829527437_88364c7ec4_s.jpg" width="75" height="75" alt="01 (65)"></a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
        <!--/row-fluid-->
    </div>
    <!--/container-->

</section>