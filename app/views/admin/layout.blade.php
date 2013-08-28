<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Free HTML5 Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link id="bs-css" href="assets/charisma/css/bootstrap-cerulean.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-bottom: 40px;
        }

        .sidebar-nav {
            padding: 9px 0;
        }
    </style>
    <link href="assets/charisma/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/charisma/css/charisma-app.css" rel="stylesheet">
    <link href="assets/charisma/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
    <link href='assets/charisma/css/fullcalendar.css' rel='stylesheet'>
    <link href='assets/charisma/css/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='assets/charisma/css/chosen.css' rel='stylesheet'>
    <link href='assets/charisma/css/uniform.default.css' rel='stylesheet'>
    <link href='assets/charisma/css/colorbox.css' rel='stylesheet'>
    <link href='assets/charisma/css/jquery.cleditor.css' rel='stylesheet'>
    <link href='assets/charisma/css/jquery.noty.css' rel='stylesheet'>
    <link href='assets/charisma/css/noty_theme_default.css' rel='stylesheet'>
    <link href='assets/charisma/css/elfinder.min.css' rel='stylesheet'>
    <link href='assets/charisma/css/elfinder.theme.css' rel='stylesheet'>
    <link href='assets/charisma/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='assets/charisma/css/opa-icons.css' rel='stylesheet'>
    <link href='assets/charisma/css/uploadify.css' rel='stylesheet'>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="assets/charisma/img/favicon.ico">

</head>

<body>
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <!-- topbar starts -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <!-- theme selector starts -->
                <div class="btn-group pull-right theme-container">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" id="themes">
                        <li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
                        <li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
                        <li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
                        <li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
                        <li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
                        <li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
                        <li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
                        <li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
                        <li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
                    </ul>
                </div>
                <!-- theme selector ends -->

                <!-- user dropdown starts -->
                <div class="btn-group pull-right">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icon-user"></i><span class="hidden-phone"> admin</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div>
                <!-- user dropdown ends -->

            </div>
        </div>
    </div>
    <!-- topbar ends -->
<?php } ?>
<div class="container-fluid">
    <div class="row-fluid">
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

        <!-- left menu starts -->
        <div class="span2 main-menu-span">
            <div class="well nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    <li class="nav-header hidden-tablet">Main</li>
                    <li><a class="ajax-link" href="index.html"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                    <li><a class="ajax-link" href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
                    <li><a class="ajax-link" href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
                    <li><a class="ajax-link" href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
                    <li><a class="ajax-link" href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
                    <li><a class="ajax-link" href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
                    <li class="nav-header hidden-tablet">Sample Section</li>
                    <li><a class="ajax-link" href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
                    <li><a class="ajax-link" href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
                    <li><a class="ajax-link" href="grid.html"><i class="icon-th"></i><span class="hidden-tablet"> Grid</span></a></li>
                    <li><a class="ajax-link" href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
                    <li><a href="tour.html"><i class="icon-globe"></i><span class="hidden-tablet"> Tour</span></a></li>
                    <li><a class="ajax-link" href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
                    <li><a href="error.html"><i class="icon-ban-circle"></i><span class="hidden-tablet"> Error Page</span></a></li>
                    <li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
                </ul>
                <label id="for-is-ajax" class="hidden-tablet" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
            </div>
            <!--/.well -->
        </div>
    <!--/span-->
    <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block span10">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="span10">
            <!-- content starts -->
            <?php } ?>




            @yield('content')

            <?php if (!isset($no_visible_elements) || !$no_visible_elements)    { ?>
            <!-- content ends -->
        </div>
        <!--/#content.span10-->
    <?php } ?>
    </div>
    <!--/fluid-row-->
    <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

        <hr>

        <div class="modal hide fade" id="myModal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>

        <footer>
            <p class="pull-left">&copy; b091 <?php echo date('Y') ?></p>
        </footer>
    <?php } ?>

</div>
<!--/.fluid-container-->

<!-- external javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- jQuery -->
<script src="assets/charisma/js/jquery-1.7.2.min.js"></script>
<!-- jQuery UI -->
<script src="assets/charisma/js/jquery-ui-1.8.21.custom.min.js"></script>
<!-- transition / effect library -->
<script src="assets/charisma/js/bootstrap-transition.js"></script>
<!-- alert enhancer library -->
<script src="assets/charisma/js/bootstrap-alert.js"></script>
<!-- modal / dialog library -->
<script src="assets/charisma/js/bootstrap-modal.js"></script>
<!-- custom dropdown library -->
<script src="assets/charisma/js/bootstrap-dropdown.js"></script>
<!-- scrolspy library -->
<script src="assets/charisma/js/bootstrap-scrollspy.js"></script>
<!-- library for creating tabs -->
<script src="assets/charisma/js/bootstrap-tab.js"></script>
<!-- library for advanced tooltip -->
<script src="assets/charisma/js/bootstrap-tooltip.js"></script>
<!-- popover effect library -->
<script src="assets/charisma/js/bootstrap-popover.js"></script>
<!-- button enhancer library -->
<script src="assets/charisma/js/bootstrap-button.js"></script>
<!-- accordion library (optional, not used in demo) -->
<script src="assets/charisma/js/bootstrap-collapse.js"></script>
<!-- carousel slideshow library (optional, not used in demo) -->
<script src="assets/charisma/js/bootstrap-carousel.js"></script>
<!-- autocomplete library -->
<script src="assets/charisma/js/bootstrap-typeahead.js"></script>
<!-- tour library -->
<script src="assets/charisma/js/bootstrap-tour.js"></script>
<!-- library for cookie management -->
<script src="assets/charisma/js/jquery.cookie.js"></script>
<!-- calander plugin -->
<script src='assets/charisma/js/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='assets/charisma/js/jquery.dataTables.min.js'></script>

<!-- chart libraries start -->
<script src="assets/charisma/js/excanvas.js"></script>
<script src="assets/charisma/js/jquery.flot.min.js"></script>
<script src="assets/charisma/js/jquery.flot.pie.min.js"></script>
<script src="assets/charisma/js/jquery.flot.stack.js"></script>
<script src="assets/charisma/js/jquery.flot.resize.min.js"></script>
<!-- chart libraries end -->

<!-- select or dropdown enhancer -->
<script src="assets/charisma/js/jquery.chosen.min.js"></script>
<!-- checkbox, radio, and file input styler -->
<script src="assets/charisma/js/jquery.uniform.min.js"></script>
<!-- plugin for gallery image view -->
<script src="assets/charisma/js/jquery.colorbox.min.js"></script>
<!-- rich text editor library -->
<script src="assets/charisma/js/jquery.cleditor.min.js"></script>
<!-- notification plugin -->
<script src="assets/charisma/js/jquery.noty.js"></script>
<!-- file manager library -->
<script src="assets/charisma/js/jquery.elfinder.min.js"></script>
<!-- star rating plugin -->
<script src="assets/charisma/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="assets/charisma/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="assets/charisma/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="assets/charisma/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="assets/charisma/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="assets/charisma/js/charisma.js"></script>


</body>
</html>
