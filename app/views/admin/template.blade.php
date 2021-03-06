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
    <link href="/packages/colorpicker/css/colorpicker.css" rel="stylesheet">

    <!-- The fav icon -->
    <link rel="shortcut icon" href="/assets/charisma/img/favicon.ico">
</head>

<body>
@include('admin.menu')

@yield('topbar')
<div class="container-fluid">

    @yield('content54')
    <hr>

    <footer>
        <p class="pull-left">&copy; b091 <?php echo date('Y') ?></p>
    </footer>

    @include('admin.forms.menu')
    @yield('modalmenu')

</div>

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


<script src="/assets/charisma/js/jquery-1.7.2.min.js"></script>
<script src="/assets/charisma/js/jquery-ui-1.8.21.custom.min.js"></script>
<script src="/assets/charisma/js/bootstrap-transition.js"></script>
<script src="/assets/charisma/js/bootstrap-alert.js"></script>
<script src="/assets/charisma/js/bootstrap-modal.js"></script>
<script src="/assets/charisma/js/bootstrap-dropdown.js"></script>
<script src="/assets/charisma/js/bootstrap-scrollspy.js"></script>
<script src="/assets/charisma/js/bootstrap-tab.js"></script>
<script src="/assets/charisma/js/bootstrap-tooltip.js"></script>
<script src="/assets/charisma/js/bootstrap-popover.js"></script>
<script src="/assets/charisma/js/bootstrap-button.js"></script>
<script src="/assets/charisma/js/bootstrap-typeahead.js"></script>
<script src="/assets/charisma/js/bootstrap-tour.js"></script>
<script src="/assets/charisma/js/jquery.cookie.js"></script>
<script src='/assets/charisma/js/fullcalendar.min.js'></script>
<script src='/assets/charisma/js/jquery.dataTables.min.js'></script>

<!-- chart libraries start -->
<script src="/assets/charisma/js/excanvas.js"></script>
<script src="/assets/charisma/js/jquery.flot.min.js"></script>
<script src="/assets/charisma/js/jquery.flot.pie.min.js"></script>
<script src="/assets/charisma/js/jquery.flot.stack.js"></script>
<script src="/assets/charisma/js/jquery.flot.resize.min.js"></script>
<!-- chart libraries end -->

<script src="/assets/charisma/js/jquery.chosen.min.js"></script>
<script src="/assets/charisma/js/jquery.uniform.min.js"></script>
<script src="/assets/charisma/js/jquery.colorbox.min.js"></script>
<script src="/assets/charisma/js/jquery.cleditor.min.js"></script>
<script src="/assets/charisma/js/jquery.noty.js"></script>
<script src="/assets/charisma/js/jquery.elfinder.min.js"></script>
<script src="/assets/charisma/js/jquery.raty.min.js"></script>
<script src="/assets/charisma/js/jquery.iphone.toggle.js"></script>
<script src="/assets/charisma/js/jquery.autogrow-textarea.js"></script>
<script src="/assets/charisma/js/jquery.uploadify-3.1.min.js"></script>
<script src="/assets/charisma/js/jquery.history.js"></script>
<script src="/assets/charisma/js/charisma.js"></script>

<script type="text/javascript" src="/packages/colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="/packages/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        statusbar : true,
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor", "autoresize"
        ],
        resize: true,
        file_browser_callback: function (field_name, url, type, win) {
            tinymce.activeEditor.windowManager.open({
                file: '/admin/pl/elfinder/tinymce',// use an absolute path!
                title: 'Menadzer plików',
                width: 900,
                height: 450,
                resizable: 'no'
            }, {
                setUrl: function (url) {
                    win.document.getElementById(field_name).value = url;
                }
            });
            return false;
        }
    });


$(document).ready(function(){


    $('#menu-add').on('show', function () {

        $(this).find('.modal-body').css({width:'auto',
                                   height:'auto',
                                  'max-height':'100%'});
    });

    $('.btn-menu-add').click(function(e){
        e.preventDefault();
        $('#menu-add-form')[0].reset();
        $('#menu-add').modal('show');
    });

    $('.btn-product-add').click(function(e){
        e.preventDefault();
        $('#product-add-form input[name="specjal"]').parents('span').removeClass('checked');
        $('#product-add-form input[name="specjal"]').prop('checked', true);
        $('.thumbnail-upload').find('.thumbnail-upload-img').remove();

        $('#product-add-form')[0].reset();
        $('#product-add-form').attr("action","/admin/{{$lang}}/product/add.html");
        $('#product-add').modal('show');
    });

    $('.btn-product-edit').click(function(e){
        e.preventDefault();

        $('#product-add-form')[0].reset();
        $('.thumbnail-upload').find('.thumbnail-upload-img').remove();

        $('#product-add-form').attr("action","/admin/{{$lang}}/product/update.html");
        $('#product-add').modal('show');

        $.ajax({
            url: "/admin/pl/product/get.html",
            type: 'post',
            data: {
                id: $(this).data('id')
            }
        }).done(function(resp) {
            var input;
                console.log(resp);
            for (var i in resp) {

                input = $('#product-add-form input[name="' + i + '"]');

                if(i == 'description')
                {
                    tinyMCE.get('producttinymce').setContent(resp[i]);
                }
                else if (i == 'options')
                {
                    $(resp[i]).each(function(i, item){
                        var selector = "#product-add-form :checkbox[name='options[]'][value='" + item.id + "']";
                        $(selector).prop('checked', true);
                        $(selector).parents('span').toggleClass('checked');
                    });
                }
                else if(i == 'specjal' || i == 'disabled')
                {
                    resp[i] = resp[i] == 1 ? 'on' : 'off';
                    if (resp[i] == 'on'){
                        $(input).prop('checked', true);
                        $(input).parents('span').addClass('checked');
                    }
                    else {
                        $(input).prop('checked', false);
                        $(input).parents('span').removeClass('checked');
                    }
                }
                else if (i == 'photo' && resp[i] != ''){
                    //append
                    $('.thumbnail-upload').find('.thumbnail-upload-img').remove();
                    $('.thumbnail-upload').append('<div class="thumbnail thumbnail-upload-img" width="100px"><img src="/files/products/' + resp[i] + '" width="100px"/></div>');
                   //gallery controlls container animation
                    $('.thumbnail-upload-img').hover(function(){
                   		$(this).find('.gallery-controls').remove();
                   		$(this).prepend('<div class="thumbnail-controls pull-right">'+
                   							'<a href="#" class="btn-product-photo-delete btn" data-id="' + resp.id + '"><i class="icon-remove"></i></a>'+
                   						'</div>');
                        $('.btn-product-photo-delete').on('click', function(e) {
                            e.preventDefault();
                            var that = this;
                            $.ajax({
                                url: "/admin/{{$lang}}/product/removePhoto.html",
                                type: 'post',
                                data: {
                                    id: $(this).data('id')
                                }
                            }).done(function(resp) {
                                $(that).parents('.thumbnail').fadeOut();
                            });

                        });
                   		$(this).find('.thumbnail-controls').stop().animate({'margin-top':'-1'},400,'easeInQuint');
                   	},function(){
                   		$(this).find('.thumbnail-controls').stop().animate({'margin-top':'-30'},200,'easeInQuint',function(){
                   				$(this).remove();
                   		});
                   	});
                }
                else {
                    input.val(resp[i]);
                }
            }
        });

    });

    $('.btn-gallery-add').click(function(e){
        e.preventDefault();
        $('#gallery-add-form')[0].reset();
        $('#gallery-add').modal('show');
    });

    $('.btn-product-settings').click(function(e){
        e.preventDefault();

        $('#product-settings-form')[0].reset();
        $('#product-settings').modal('show');
    });

    $('.btn-product-option-add').click(function(e){
        e.preventDefault();

        $('#product-option-add-form')[0].reset();
        $('#product-option-add-form').attr("action","/admin/{{$lang}}/productsoptions/add.html");
        $('#product-option-add').modal('show');

    });


    $('.btn-product-option-edit').click(function(e){
        e.preventDefault();

        $('#product-option-add-form')[0].reset();
        $('#product-option-add-form').attr("action","/admin/{{$lang}}/productsoptions/update.html");
        $('#product-option-add').modal('show');

        $.ajax({
            url: "/admin/{{$lang}}/productsoptions/get.html",
            type: 'post',
            data: {
                id: $(this).data('id').replace('"', '').replace('"', '')
            }
        }).done(function(resp) {
            for (var i in resp) {
                $('#product-option-add-form input[name="'+i+'"]').val(resp[i]);
                if(i == 'color'){
                    $('#colorpicker').colorpicker('setValue', resp[i]);
                }
            }
        });
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
        }).done(function( data ) {
            window.location.href = data;
        });;
    });



    $('#colorpicker').colorpicker();




    $('.thumbnails').on('click','.gallery-delete',function(e){
   		e.preventDefault();
   		var that = this;
        $.ajax({
            url: "/admin/{{$lang}}/gallery/remove.html",
            type: 'post',
            data: {
                id: $(this).parents('.thumbnail').attr('id').replace('image-', '')
            }
        }).done(function(resp) {
            $(that).parents('.thumbnail').fadeOut();
        });

   	});
   	//gallery edit
   	$('.thumbnails').on('click','.gallery-edit',function(e){
   		e.preventDefault();
   		//get image id
        console.log($(this), $(this).data('id'), $(this).parents('.thumbnail').attr('id').replace('image-', ''));
   		//alert($(this).parents('.thumbnail').attr('id'));
   	});


});


</script>

</body>
</html>