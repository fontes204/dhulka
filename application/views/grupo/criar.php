<?php $this->load->view('head_foot/topo')?>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <?php $this->load->view('head_foot/menu');?>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
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
                        <span>Page Layouts</span>
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
            <h3 class="page-title"> &nbsp;
<!--                <small>&nbsp;</small>-->
            </h3>
            <div class="row">
                <div class="col-md-12 ">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-settings font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> Line Inputs</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group">
                                    <a class="btn btn-sm green dropdown-toggle" href="javascript:;" data-toggle="dropdown"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-pencil"></i> Edit </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-trash-o"></i> Delete </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-ban"></i> Ban </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;"> Make admin </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form role="form">
                                <div class="form-body">
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" id="form_control_1" placeholder="Enter your name">
                                        <label for="form_control_1">Regular input</label>
                                        <span class="help-block">Some help goes here...</span>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <input type="text" class="form-control" id="form_control_1" placeholder="Enter your email">
                                        <label for="form_control_1">Input with help</label>
                                        <span class="help-block">Some help goes here...</span>
                                    </div>
                                    <div class="form-group form-md-line-input has-success">
                                        <input type="text" class="form-control" id="form_control_1" placeholder="Success state">
                                        <label for="form_control_1">Success input</label>
                                    </div>
                                    <div class="form-group form-md-line-input has-warning">
                                        <input type="text" class="form-control" id="form_control_1" placeholder="Warning state">
                                        <label for="form_control_1">Warning input</label>
                                    </div>
                                    <div class="form-group form-md-line-input has-error">
                                        <input type="text" class="form-control" id="form_control_1" placeholder="Error state">
                                        <label for="form_control_1">Error input</label>
                                    </div>
                                    <div class="form-group form-md-line-input has-info">
                                        <input type="text" class="form-control" id="form_control_1" placeholder="Info state">
                                        <label for="form_control_1">Info input</label>
                                    </div>
                                    <div class="form-group form-md-line-input has-info">
                                        <select class="form-control" id="form_control_1">
                                            <option value=""></option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                        </select>
                                        <label for="form_control_1">Dropdown sample</label>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <textarea class="form-control" rows="3" placeholder="Enter more text"></textarea>
                                        <label for="form_control_1">Textarea input</label>
                                    </div>
                                    <div class="form-group form-md-line-input has-error">
                                        <input type="text" class="form-control" disabled id="form_control_1" placeholder="Disable">
                                        <label for="form_control_1">Disabled</label>
                                    </div>
                                    <div class="form-group form-md-line-input has-error">
                                        <input type="text" class="form-control" readonly value="You can't edit this" id="form_control_1">
                                        <label for="form_control_1">Readonly</label>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <div class="form-control form-control-static"> email@example.com </div>
                                        <label for="form_control_1">Static Control</label>
                                    </div>
                                    <div class="form-group form-md-line-input has-info">
                                        <input type="text" class="form-control input-sm" id="form_control_1" placeholder=".input-sm">
                                        <label for="form_control_1">Small input</label>
                                    </div>
                                    <div class="form-group form-md-line-input has-info">
                                        <input type="text" class="form-control input-lg" id="form_control_1" placeholder=".input-lg">
                                        <label for="form_control_1">Large input</label>
                                    </div>
                                </div>
                                <div class="form-actions noborder">
                                    <button type="button" class="btn blue">Submit</button>
                                    <button type="button" class="btn default">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <span class="caption-subject bold uppercase"> Input Groups & Icons</span>
                            </div>
                            <div class="actions">
                                <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                                    <i class="icon-cloud-upload"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                                    <i class="icon-wrench"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                                    <i class="icon-trash"></i>
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form role="form">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="Left icon">
                                                    <label for="form_control_1">Regular input</label>
                                                    <span class="help-block">Some help goes here...</span>
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-warning">
                                                <input type="text" class="form-control" id="form_control_1" placeholder="Warning state">
                                                <label for="form_control_1">Warning input</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-error">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Email Address">
                                                    <label for="form_control_1">Input Group</label>
                                                    <span class="input-group-addon">
                                                                <i class="fa fa-envelope"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="Left icon">
                                                    <label for="form_control_1">Regular input</label>
                                                    <span class="help-block">Some help goes here...</span>
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-error">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Email Address">
                                                    <span class="help-block">Some help goes here...</span>
                                                    <label for="form_control_1">Input Group1</label>
                                                    <span class="input-group-addon">
                                                                <i class="fa fa-envelope"></i>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-error">
                                                <div class="input-group">
                                                    <div class="input-group-control">
                                                        <input type="text" class="form-control" placeholder="Placeholder">
                                                        <label for="form_control_1">Input Group</label>
                                                    </div>
                                                    <span class="input-group-btn btn-right">
                                                                <button type="button" class="btn green-haze dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action
                                                                    <i class="fa fa-angle-down"></i>
                                                                </button>
                                                                <ul class="dropdown-menu pull-right" role="menu">
                                                                    <li>
                                                                        <a href="javascript:;">Action</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">Another action</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">Something else here</a>
                                                                    </li>
                                                                    <li class="divider"> </li>
                                                                    <li>
                                                                        <a href="javascript:;">Separated link</a>
                                                                    </li>
                                                                </ul>
                                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-success">
                                        <div class="input-icon right">
                                            <input type="text" class="form-control" placeholder="Right icon">
                                            <label for="form_control_1">Input With Hint</label>
                                            <span class="help-block">Some help goes here...</span>
                                            <i class="icon-user"></i>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-info">
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                            <input type="text" class="form-control" placeholder="Email Address">
                                            <label for="form_control_1">Input Group</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-error">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Email Address">
                                            <label for="form_control_1">Input Group</label>
                                            <span class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-warning">
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control">
                                            <span class="help-block">Some help goes here...</span>
                                            <span class="input-group-addon">.00</span>
                                            <label for="form_control_1">Input Group</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-warning">
                                        <div class="input-group">
                                                    <span class="input-group-btn btn-left">
                                                        <button class="btn blue-madison" type="button">Go!</button>
                                                    </span>
                                            <div class="input-group-control">
                                                <input type="text" class="form-control edited" placeholder="Placeholder">
                                                <label for="form_control_1">Input Group</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-error">
                                        <div class="input-group">
                                            <div class="input-group-control">
                                                <input type="text" class="form-control" placeholder="Placeholder">
                                                <label for="form_control_1">Input Group</label>
                                            </div>
                                            <span class="input-group-btn btn-right">
                                                        <button type="button" class="btn green-haze dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" role="menu">
                                                            <li>
                                                                <a href="javascript:;">Action</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Another action</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Something else here</a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">Separated link</a>
                                                            </li>
                                                        </ul>
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-info">
                                        <div class="input-group">
                                                    <span class="input-group-btn btn-left">
                                                        <button class="btn red-intense" type="button">Go!</button>
                                                    </span>
                                            <div class="input-group-control">
                                                <input type="text" class="form-control" placeholder="Input group">
                                                <span class="help-block">Some help goes here...</span>
                                                <label for="form_control_1">Input Group</label>
                                            </div>
                                            <span class="input-group-btn btn-right">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" role="menu">
                                                            <li>
                                                                <a href="javascript:;">Action</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Another action</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Something else here</a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">Separated link</a>
                                                            </li>
                                                        </ul>
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-info">
                                        <div class="input-group input-group-sm">
                                                    <span class="input-group-btn btn-left">
                                                        <button class="btn red-intense" type="button">Go!</button>
                                                    </span>
                                            <div class="input-group-control">
                                                <input type="text" class="form-control input-sm" placeholder=".input-sm">
                                                <label for="form_control_1">Small Input Group</label>
                                            </div>
                                            <span class="input-group-btn btn-right">
                                                        <button class="btn green-haze" type="button">Go!</button>
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-info">
                                        <div class="input-group input-group-lg">
                                                    <span class="input-group-btn btn-left">
                                                        <button class="btn red-intense" type="button">Go!</button>
                                                    </span>
                                            <div class="input-group-control">
                                                <input type="text" class="form-control input-lg" placeholder=".input-lg">
                                                <label for="form_control_1">Large Input Group</label>
                                            </div>
                                            <span class="input-group-btn btn-right">
                                                        <button class="btn green-haze" type="button">Go!</button>
                                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions noborder">
                                    <button type="button" class="btn blue">Submit</button>
                                    <button type="button" class="btn default">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-check font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> Checkboxes</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group">
                                    <a class="btn btn-sm red dropdown-toggle" href="javascript:;" data-toggle="dropdown"> Settings
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-pencil"></i> Edit </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-trash-o"></i> Delete </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-ban"></i> Ban </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;"> Make admin </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form role="form">
                                <div class="form-group form-md-checkboxes">
                                    <label>Checkboxes</label>
                                    <div class="md-checkbox-list">
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="checkbox1" class="md-check">
                                            <label for="checkbox1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 1 </label>
                                        </div>
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="checkbox2" class="md-check" checked>
                                            <label for="checkbox2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 2 </label>
                                        </div>
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="checkbox3" class="md-check">
                                            <label for="checkbox3">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 3 </label>
                                        </div>
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="checkbox4" disabled class="md-check">
                                            <label for="checkbox4">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Disabled </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-md-checkboxes">
                                    <label>Inline Checkboxes</label>
                                    <div class="md-checkbox-inline">
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="checkbox6" class="md-check">
                                            <label for="checkbox6">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 1 </label>
                                        </div>
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="checkbox7" class="md-check" checked>
                                            <label for="checkbox7">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 2 </label>
                                        </div>
                                        <div class="md-checkbox">
                                            <input type="checkbox" id="checkbox8" class="md-check">
                                            <label for="checkbox8">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 3 </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-md-checkboxes">
                                    <label>Checkboxes</label>
                                    <div class="md-checkbox-list">
                                        <div class="md-checkbox has-success">
                                            <input type="checkbox" id="checkbox9" class="md-check">
                                            <label for="checkbox9">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 1 </label>
                                        </div>
                                        <div class="md-checkbox has-error">
                                            <input type="checkbox" id="checkbox10" class="md-check" checked>
                                            <label for="checkbox10">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 2 </label>
                                        </div>
                                        <div class="md-checkbox has-warning">
                                            <input type="checkbox" id="checkbox11" class="md-check">
                                            <label for="checkbox11">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 3 </label>
                                        </div>
                                        <div class="md-checkbox has-info">
                                            <input type="checkbox" id="checkbox12" disabled class="md-check">
                                            <label for="checkbox12">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Disabled </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-md-checkboxes">
                                    <label>Inline Checkboxes</label>
                                    <div class="md-checkbox-inline">
                                        <div class="md-checkbox has-success">
                                            <input type="checkbox" id="checkbox14" class="md-check">
                                            <label for="checkbox14">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 1 </label>
                                        </div>
                                        <div class="md-checkbox has-error">
                                            <input type="checkbox" id="checkbox15" class="md-check" checked>
                                            <label for="checkbox15">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 2 </label>
                                        </div>
                                        <div class="md-checkbox has-info">
                                            <input type="checkbox" id="checkbox16" class="md-check">
                                            <label for="checkbox16">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 3 </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
                <div class="col-md-6 ">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-green">
                                <i class="icon-pin font-green"></i>
                                <span class="caption-subject bold uppercase"> Floating Labels</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group">
                                    <a class="btn btn-sm default dropdown-toggle" href="javascript:;" data-toggle="dropdown"> Settings
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-pencil"></i> Edit </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-trash-o"></i> Delete </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-ban"></i> Ban </a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="javascript:;"> Make admin </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form role="form">
                                <div class="form-body">
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="form_control_1" value="test">
                                        <label for="form_control_1">Regular input</label>
                                        <span class="help-block">Some help goes here...</span>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <input type="text" class="form-control" id="form_control_1">
                                        <label for="form_control_1">Input with help</label>
                                        <span class="help-block">Some help goes here...</span>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-success">
                                        <input type="text" class="form-control" id="form_control_1">
                                        <label for="form_control_1">Success input</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-warning">
                                        <input type="text" class="form-control" id="form_control_1">
                                        <label for="form_control_1">Warning input</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-error">
                                        <input type="text" class="form-control" id="form_control_1">
                                        <label for="form_control_1">Error input</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                        <input type="text" class="form-control" id="form_control_1">
                                        <label for="form_control_1">Info input</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                        <select class="form-control edited" id="form_control_1">
                                            <option value=""></option>
                                            <option value="1" selected>Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                            <option value="4">Option 4</option>
                                        </select>
                                        <label for="form_control_1">Dropdown sample</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <textarea class="form-control" rows="3"></textarea>
                                        <label for="form_control_1">Textarea input</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-error">
                                        <input type="text" class="form-control" disabled id="form_control_1">
                                        <label for="form_control_1">Disabled</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-error">
                                        <input type="text" class="form-control" readonly value="You can't edit this" id="form_control_1">
                                        <label for="form_control_1">Readonly</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label">
                                        <div class="form-control form-control-static"> email@example.com </div>
                                        <label for="form_control_1">Static Control</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                        <input type="text" class="form-control input-sm" id="form_control_1">
                                        <label for="form_control_1">Small input</label>
                                    </div>
                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                        <input type="text" class="form-control input-lg" id="form_control_1">
                                        <label for="form_control_1">Large input</label>
                                    </div>
                                </div>
                                <div class="form-actions noborder">
                                    <button type="button" class="btn blue">Submit</button>
                                    <button type="button" class="btn default">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <span class="caption-subject bold uppercase">Input Groups & Icons</span>
                            </div>
                            <div class="actions">
                                <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                                    <i class="icon-cloud-upload"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                                    <i class="icon-wrench"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                                    <i class="icon-trash"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form role="form">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control">
                                                    <label for="form_control_1">Regular input</label>
                                                    <span class="help-block">Some help goes here...</span>
                                                    <i class="fa fa-bell-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                <div class="input-group">
                                                            <span class="input-group-btn btn-left">
                                                                <button class="btn blue-madison" type="button">Go!</button>
                                                            </span>
                                                    <div class="input-group-control">
                                                        <input type="text" class="form-control edited" value="some value">
                                                        <label for="form_control_1">Input Group</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="form_control_1">
                                                <label for="form_control_1">Regular input</label>
                                                <span class="help-block">Some help goes here...</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-success form-md-floating-label">
                                        <div class="input-icon">
                                            <input type="text" class="form-control">
                                            <label for="form_control_1">Regular input</label>
                                            <span class="help-block">Some help goes here...</span>
                                            <i class="fa fa-bell-o"></i>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-success form-md-floating-label">
                                        <div class="input-icon right">
                                            <input type="text" class="form-control">
                                            <label for="form_control_1">Regular input</label>
                                            <span class="help-block">Some help goes here...</span>
                                            <i class="icon-user"></i>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                                        <div class="input-group left-addon">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                            <input type="text" class="form-control">
                                            <label for="form_control_1">Input Group</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-error form-md-floating-label">
                                        <div class="input-group right-addon">
                                            <input type="text" class="form-control">
                                            <label for="form_control_1">Input Group</label>
                                            <span class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                        <div class="input-group left-addon right-addon">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                            <label for="form_control_1">Input Group</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                        <div class="input-group">
                                                    <span class="input-group-btn btn-left">
                                                        <button class="btn blue-madison" type="button">Go!</button>
                                                    </span>
                                            <div class="input-group-control">
                                                <input type="text" class="form-control edited">
                                                <label for="form_control_1">Input Group</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-error form-md-floating-label">
                                        <div class="input-group">
                                            <div class="input-group-control">
                                                <input type="text" class="form-control">
                                                <label for="form_control_1">Input Group</label>
                                            </div>
                                            <span class="input-group-btn btn-right">
                                                        <button type="button" class="btn green-haze dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" role="menu">
                                                            <li>
                                                                <a href="javascript:;">Action</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Another action</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Something else here</a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">Separated link</a>
                                                            </li>
                                                        </ul>
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                                        <div class="input-group">
                                                    <span class="input-group-btn btn-left">
                                                        <button class="btn red-intense" type="button">Go!</button>
                                                    </span>
                                            <div class="input-group-control">
                                                <input type="text" class="form-control">
                                                <label for="form_control_1">Input Group</label>
                                            </div>
                                            <span class="input-group-btn btn-right">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" role="menu">
                                                            <li>
                                                                <a href="javascript:;">Action</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Another action</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">Something else here</a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">Separated link</a>
                                                            </li>
                                                        </ul>
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                                        <div class="input-group input-group-sm">
                                                    <span class="input-group-btn btn-left">
                                                        <button class="btn red-intense" type="button">Go!</button>
                                                    </span>
                                            <div class="input-group-control">
                                                <input type="text" class="form-control input-sm">
                                                <label for="form_control_1">Input Group</label>
                                            </div>
                                            <span class="input-group-btn btn-right">
                                                        <button class="btn green-haze" type="button">Go!</button>
                                                    </span>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                                        <div class="input-group input-group-lg">
                                                    <span class="input-group-btn btn-left">
                                                        <button class="btn red-intense" type="button">Go!</button>
                                                    </span>
                                            <div class="input-group-control">
                                                <input type="text" class="form-control input-lg">
                                                <label for="form_control_1">Input Group</label>
                                            </div>
                                            <span class="input-group-btn btn-right">
                                                        <button class="btn green-haze" type="button">Go!</button>
                                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions noborder">
                                    <button type="button" class="btn blue">Submit</button>
                                    <button type="button" class="btn default">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-drop font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> Radios</span>
                            </div>
                            <div class="actions">
                                <a class="btn btn-circle btn-icon-only blue" href="javascript:;">
                                    <i class="icon-cloud-upload"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only green" href="javascript:;">
                                    <i class="icon-wrench"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only red" href="javascript:;">
                                    <i class="icon-trash"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form role="form">
                                <div class="form-group form-md-radios">
                                    <label>Checkboxes</label>
                                    <div class="md-radio-list">
                                        <div class="md-radio">
                                            <input type="radio" id="radio1" name="radio1" class="md-radiobtn">
                                            <label for="radio1">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 1 </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="radio2" name="radio1" class="md-radiobtn" checked>
                                            <label for="radio2">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 2 </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="radio3" name="radio1" class="md-radiobtn">
                                            <label for="radio3">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 3 </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="radio5" name="radio1" disabled class="md-radiobtn">
                                            <label for="radio5">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Disabled </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-md-radios">
                                    <label>Checkboxes</label>
                                    <div class="md-radio-inline">
                                        <div class="md-radio">
                                            <input type="radio" id="radio6" name="radio2" class="md-radiobtn">
                                            <label for="radio6">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 1 </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="radio7" name="radio2" class="md-radiobtn" checked>
                                            <label for="radio7">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 2 </label>
                                        </div>
                                        <div class="md-radio">
                                            <input type="radio" id="radio8" name="radio2" class="md-radiobtn">
                                            <label for="radio8">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 3 </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-md-radios">
                                    <label>Checkboxes</label>
                                    <div class="md-radio-list">
                                        <div class="md-radio">
                                            <input type="radio" id="radio9" name="radio1" class="md-radiobtn">
                                            <label for="radio9">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 1 </label>
                                        </div>
                                        <div class="md-radio has-error">
                                            <input type="radio" id="radio10" name="radio1" class="md-radiobtn" checked>
                                            <label for="radio10">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 2 </label>
                                        </div>
                                        <div class="md-radio has-warning">
                                            <input type="radio" id="radio11" name="radio1" class="md-radiobtn">
                                            <label for="radio11">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 3 </label>
                                        </div>
                                        <div class="md-radio has-success">
                                            <input type="radio" id="radio13" name="radio1" disabled class="md-radiobtn">
                                            <label for="radio13">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Disabled </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-md-radios">
                                    <label>Checkboxes</label>
                                    <div class="md-radio-inline">
                                        <div class="md-radio">
                                            <input type="radio" id="radio14" name="radio2" class="md-radiobtn">
                                            <label for="radio14">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 1 </label>
                                        </div>
                                        <div class="md-radio has-error">
                                            <input type="radio" id="radio15" name="radio2" class="md-radiobtn" checked>
                                            <label for="radio15">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 2 </label>
                                        </div>
                                        <div class="md-radio has-warning">
                                            <input type="radio" id="radio16" name="radio2" class="md-radiobtn">
                                            <label for="radio16">
                                                <span></span>
                                                <span class="check"></span>
                                                <span class="box"></span> Option 3 </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->