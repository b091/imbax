<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- The styles -->
    <link id="bs-css" href="/assets/charisma/css/bootstrap-cerulean.css" rel="stylesheet">
    <style type="text/css">
        body {
            padding-bottom: 40px;
        }

        .sidebar-nav {
            padding: 9px 0;
        }
    </style>
    <link href="/assets/charisma/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/assets/charisma/css/charisma-app.css" rel="stylesheet">
    <link href="/assets/charisma/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
    <link href='/assets/charisma/css/fullcalendar.css' rel='stylesheet'>
    <link href='/assets/charisma/css/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='/assets/charisma/css/chosen.css' rel='stylesheet'>
    <link href='/assets/charisma/css/uniform.default.css' rel='stylesheet'>
    <link href='/assets/charisma/css/colorbox.css' rel='stylesheet'>
    <link href='/assets/charisma/css/jquery.cleditor.css' rel='stylesheet'>
    <link href='/assets/charisma/css/jquery.noty.css' rel='stylesheet'>
    <link href='/assets/charisma/css/noty_theme_default.css' rel='stylesheet'>
    <link href='/assets/charisma/css/elfinder.min.css' rel='stylesheet'>
    <link href='/assets/charisma/css/elfinder.theme.css' rel='stylesheet'>
    <link href='/assets/charisma/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='/assets/charisma/css/opa-icons.css' rel='stylesheet'>
    <link href='/assets/charisma/css/uploadify.css' rel='stylesheet'>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="/assets/famfamfam_flags/famfamfam-flags.css" rel="stylesheet">

    <!-- The fav icon -->
    <link rel="shortcut icon" href="/assets/charisma/img/favicon.ico">

</head>

<body>
@include('admin.menu')

@yield('topbar')
<div class="container-fluid">
    <div class="row-fluid">
        @if (Auth::check())
        @yield('leftmenu')
        @endif
        <noscript>
            <div class="alert alert-block span10">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="/http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="span10">
            @yield('content')
        </div>
    </div>
    <hr>

    <footer>
        <p class="pull-left">&copy; b091 <?php echo date('Y') ?></p>
    </footer>

    @include('admin.forms.menu')
    @yield('modalmenu')

</div>

<!-- jQuery -->
<script src="/assets/charisma/js/jquery-1.7.2.min.js"></script>
<!-- jQuery UI -->
<script src="/assets/charisma/js/jquery-ui-1.8.21.custom.min.js"></script>
<!-- transition / effect library -->
<script src="/assets/charisma/js/bootstrap-transition.js"></script>
<!-- alert enhancer library -->
<script src="/assets/charisma/js/bootstrap-alert.js"></script>
<!-- modal / dialog library -->
<script src="/assets/charisma/js/bootstrap-modal.js"></script>
<!-- custom dropdown library -->
<script src="/assets/charisma/js/bootstrap-dropdown.js"></script>
<!-- scrolspy library -->
<script src="/assets/charisma/js/bootstrap-scrollspy.js"></script>
<!-- library for creating tabs -->
<script src="/assets/charisma/js/bootstrap-tab.js"></script>
<!-- library for advanced tooltip -->
<script src="/assets/charisma/js/bootstrap-tooltip.js"></script>
<!-- popover effect library -->
<script src="/assets/charisma/js/bootstrap-popover.js"></script>
<!-- button enhancer library -->
<script src="/assets/charisma/js/bootstrap-button.js"></script>
<!-- accordion library (optional, not used in demo) -->
<script src="/assets/charisma/js/bootstrap-collapse.js"></script>
<!-- carousel slideshow library (optional, not used in demo) -->
<script src="/assets/charisma/js/bootstrap-carousel.js"></script>
<!-- autocomplete library -->
<script src="/assets/charisma/js/bootstrap-typeahead.js"></script>
<!-- tour library -->
<script src="/assets/charisma/js/bootstrap-tour.js"></script>
<!-- library for cookie management -->
<script src="/assets/charisma/js/jquery.cookie.js"></script>
<!-- calander plugin -->
<script src='/assets/charisma/js/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='/assets/charisma/js/jquery.dataTables.min.js'></script>

<!-- chart libraries start -->
<script src="/assets/charisma/js/excanvas.js"></script>
<script src="/assets/charisma/js/jquery.flot.min.js"></script>
<script src="/assets/charisma/js/jquery.flot.pie.min.js"></script>
<script src="/assets/charisma/js/jquery.flot.stack.js"></script>
<script src="/assets/charisma/js/jquery.flot.resize.min.js"></script>
<!-- chart libraries end -->

<!-- select or dropdown enhancer -->
<script src="/assets/charisma/js/jquery.chosen.min.js"></script>
<!-- checkbox, radio, and file input styler -->
<script src="/assets/charisma/js/jquery.uniform.min.js"></script>
<!-- plugin for gallery image view -->
<script src="/assets/charisma/js/jquery.colorbox.min.js"></script>
<!-- rich text editor library -->
<script src="/assets/charisma/js/jquery.cleditor.min.js"></script>
<!-- notification plugin -->
<script src="/assets/charisma/js/jquery.noty.js"></script>
<!-- file manager library -->
<script src="/assets/charisma/js/jquery.elfinder.min.js"></script>
<!-- star rating plugin -->
<script src="/assets/charisma/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="/assets/charisma/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="/assets/charisma/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="/assets/charisma/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="/assets/charisma/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="/assets/charisma/js/charisma.js"></script>
<!-- Place inside the <head> of your HTML -->


<div id="confirmModal" class="modal hide">
    <div class="modal-header">
        <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
         <h3>Delete</h3>
    </div>
    <div class="modal-body">
        <p>You are about to delete.</p>
        <p>Do you want to proceed?</p>
    </div>
    <div class="modal-footer">
      <a href="#" id="btnYes" class="btn danger">Yes</a>
      <a href="#" data-dismiss="modal" aria-hidden="true" class="btn secondary">No</a>
    </div>
</div>



<script type="text/javascript" src="/packages/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        statusbar : false,
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor"
        ],
        file_browser_callback: function (field_name, url, type, win) {
            tinymce.activeEditor.windowManager.open({
                file: '/admin/pl/elfinder/tinymce',// use an absolute path!
                title: 'elFinder 2.0',
                width: 900,
                height: 450,
                resizable: 'yes'
            }, {
                setUrl: function (url) {
                    win.document.getElementById(field_name).value = url;
                }
            });
            return false;
        }
    });


$(document).ready(function(){

    $('.btn-menu-add').click(function(e){
        e.preventDefault();
        $('#menu-add').modal('show');
    });

    $('.btn-product-add').click(function(e){
        e.preventDefault();
        $('#product-add').modal('show');
    });

    $('.btn-gallery-add').click(function(e){
        e.preventDefault();
        $('#gallery-add').modal('show');
    });

    $('.confirm-delete').on('click', function(e) {
        e.preventDefault();
        $('#confirmModal').data('id', $(this).data('id')).data('link', $(this).data('link')).modal('show');
    });

    $('#btnYes').click(function() {
      	var confirmWindow = $('#confirmModal');

      //	$('[data-id='+id+']').remove();
        confirmWindow.modal('hide');

        $.post(confirmWindow.data('link'), {
            id: confirmWindow.data('id')
        });
    });

});


</script>

</body>
</html>