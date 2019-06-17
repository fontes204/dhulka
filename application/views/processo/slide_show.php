<?php $this->load->view('head_foot/topo')?>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <?php $this->load->view('head_foot/menu');?>
        <!-- END SIDEBAR -->
    </div>

    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN THEME PANEL -->
            <div class="theme-panel hidden-xs hidden-sm">
                <div class="toggler"> </div>
                <div class="toggler-close"> </div>
                <div class="theme-options">
                    <div class="theme-option theme-colors clearfix">
                        <span> THEME COLOR </span>
                        <ul>
                            <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                            <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>
                            <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                            <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                            <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                            <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>
                        </ul>
                    </div>
                    <div class="theme-option">
                        <span> Theme Style </span>
                        <select class="layout-style-option form-control input-sm">
                            <option value="square" selected="selected">Square corners</option>
                            <option value="rounded">Rounded corners</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Layout </span>
                        <select class="layout-option form-control input-sm">
                            <option value="fluid" selected="selected">Fluid</option>
                            <option value="boxed">Boxed</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Header </span>
                        <select class="page-header-option form-control input-sm">
                            <option value="fixed" selected="selected">Fixed</option>
                            <option value="default">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Top Menu Dropdown</span>
                        <select class="page-header-top-dropdown-style-option form-control input-sm">
                            <option value="light" selected="selected">Light</option>
                            <option value="dark">Dark</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Mode</span>
                        <select class="sidebar-option form-control input-sm">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Menu </span>
                        <select class="sidebar-menu-option form-control input-sm">
                            <option value="accordion" selected="selected">Accordion</option>
                            <option value="hover">Hover</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Style </span>
                        <select class="sidebar-style-option form-control input-sm">
                            <option value="default" selected="selected">Default</option>
                            <option value="light">Light</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Sidebar Position </span>
                        <select class="sidebar-pos-option form-control input-sm">
                            <option value="left" selected="selected">Left</option>
                            <option value="right">Right</option>
                        </select>
                    </div>
                    <div class="theme-option">
                        <span> Footer </span>
                        <select class="page-footer-option form-control input-sm">
                            <option value="fixed">Fixed</option>
                            <option value="default" selected="selected">Default</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- END THEME PANEL -->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <a href="#">General</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Portfolio</span>
                    </li>
                </ul>
                <div class="page-toolbar">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a href="#">
                                    <i class="icon-bell"></i> Action</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-shield"></i> Another action</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-user"></i> Something else here</a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="#">
                                    <i class="icon-bag"></i> Separated link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Portfolio 2
                <small>Portfolio 2 - Mosaic Grid</small>
            </h3>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="portfolio-content portfolio-2">
                <div id="js-filters-mosaic" class="cbp-l-filters-button">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item btn green btn-outline uppercase"> All
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".print" class="cbp-filter-item btn green btn-outline uppercase"> Print
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".web-design" class="cbp-filter-item btn green btn-outline uppercase"> Web Design
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".motion" class="cbp-filter-item btn green btn-outline uppercase"> Motion
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".graphic" class="cbp-filter-item btn green btn-outline uppercase"> Graphic
                        <div class="cbp-filter-counter"></div>
                    </div>
                </div>
                <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">
                    <div class="cbp-item web-design graphic">
                        <a href="http://localhost/dhulka/public/assets/global/img/portfolio/1200x900/1.jpg"> class="cbp-caption cbp-lightbox" data-title="Bolt UI<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="http://localhost/dhulka/public/assets/global/img/portfolio/600x600/2.jpg" alt=""> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Bolt UI</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item print motion">
                        <a href="http://localhost/dhulka/public/assets/global/img/portfolio/1200x900/02.jpg" class="cbp-caption cbp-lightbox" data-title="World Clock Widget<br>by Paul Flavius Nechita">
                            <div class="cbp-caption-defaultWrap">
                                <img src="http://localhost/dhulka/public/assets/global/img/portfolio/600x600/3.jpg" alt=""> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">World Clock Widget</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item print motion">
                        <a href="http://localhost/dhulka/public/assets/global/img/portfolio/1200x900/13.jpg" class="cbp-caption cbp-lightbox" data-title="WhereTO App<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="http://localhost/dhulka/public/assets/global/img/portfolio/1200x900/13.jpg" alt=""> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">WhereTO App</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design print">
                        <a href="http://localhost/dhulka/public/assets/global/img/portfolio/1200x900/12.jpg" class="cbp-caption cbp-lightbox" data-title="iDevices<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="http://localhost/dhulka/public/assets/global/img/portfolio/1200x900/12.jpg" alt=""> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">iDevices</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item motion graphic">
                        <a href="http://localhost/dhulka/public/assets/global/img/portfolio/1200x900/07.jpg" class="cbp-caption cbp-lightbox" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="http://localhost/dhulka/public/assets/global/img/portfolio/600x600/6.jpg" alt=""> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Seemple* Music for iPad</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item print motion">
                        <a href="http://localhost/dhulka/public/assets/global/img/portfolio/1200x900/6.jpg" class="cbp-caption cbp-lightbox" data-title="Remind~Me Widget<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="http://localhost/dhulka/public/assets/global/img/portfolio/600x600/45.jpg" alt=""> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Remind~Me Widget</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item web-design graphic print">
                        <a href="http://localhost/dhulka/public/assets/global/img/portfolio/1200x900/41.jpg" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="http://localhost/dhulka/public/assets/global/img/portfolio/600x600/58.jpg" alt=""> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Workout Buddy</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item print graphic">
                        <a href="http://localhost/dhulka/public/assets/global/img/portfolio/1200x900/40.jpg" class="cbp-caption cbp-lightbox" data-title="Digital Menu<br>by Cosmin Capitanu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="http://localhost/dhulka/public/assets/global/img/portfolio/1200x900/40.jpg" alt=""> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Digital Menu</div>
                                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item motion web-design">
                        <a href="http://localhost/dhulka/public/assets/global/img/portfolio/1200x900/84.jpg" class="cbp-caption cbp-lightbox" data-title="Holiday Selector<br>by Cosmin Capitanu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="http://localhost/dhulka/public/assets/global/img/portfolio/600x600/94.jpg" alt=""> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Holiday Selector</div>
                                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item motion">
                        <a href="http://localhost/dhulka/public/assets/global/img/portfolio/1200x900/72.jpg" class="cbp-caption cbp-lightbox" data-title="Holiday Selector<br>by Cosmin Capitanu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="http://localhost/dhulka/public/assets/global/img/portfolio/600x600/62.jpg" alt=""> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Holiday Selector</div>
                                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cbp-item graphic web-design">
                        <a href="http://localhost/dhulka/public/assets/global/img/portfolio/1200x900/05.jpg" class="cbp-caption cbp-lightbox" data-title="Holiday Selector<br>by Cosmin Capitanu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="http://localhost/dhulka/public/assets/global/img/portfolio/600x600/65.jpg" alt=""> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Holiday Selector</div>
                                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
<!--                <div id="js-loadMore-mosaic" class="cbp-l-loadMore-button">-->
<!--                    <a href="http://localhost/dhulka/public/assets/global/plugins/cubeportfolio/ajax/loadMore2.html" class="cbp-l-loadMore-link btn grey-mint btn-outline" rel="nofollow">-->
<!--                        <span class="cbp-l-loadMore-defaultText">LOAD MORE</span>-->
<!--                        <span class="cbp-l-loadMore-loadingText">LOADING...</span>-->
<!--                        <span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>-->
<!--                    </a>-->
<!--                </div>-->
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
</div>