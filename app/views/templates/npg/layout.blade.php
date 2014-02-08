<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{@$pageTitle}}</title>
    <meta name="description" content="{{@$pageDescription}}">
    <meta name="Keywords" content="{{@$pageKeywords}}">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/famfamfam_flags/famfamfam-flags.css" rel="stylesheet">
    <link rel="shortcut icon" href="/{{$templateDir}}/ico/favicon.png">

    @stylesheets('bootstrap')
    @javascripts('bootstrap-js')
    <!-- Custom styles for this template -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    @javascripts('bootstrap-ie')
    <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/{{$templateDir}}/css/rss.css"/>

    <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="/packages/gallery/js/bootstrap-image-gallery.js"></script>
</head>

<body>
<div class="row topbar-rss">
    <div class="container">
        <div class="col-xs-6 col-sm-3 topbar-text-rss">
            {{Lang::get('label.choose-language')}}:
            @foreach($langs as $item)
            <a href="/{{$item->code}}/"><i class="famfamfam-flag-{{$item->code}}"></i></a>
            @endforeach
        </div>
        <div class="col-md-9 col-xs-6 col-sm-9 hidden-sm hidden-xs">
            <div class="pull-right topbar-text-rss"><span class="glyphicon glyphicon-earphone"></span><span> {{Lang::get('label.customer-service')}} :</span><span
                    style="color: #fff;"> {{@$pagePhone}}</span>
            </div>
        </div>
        <div class="col-md-9 col-xs-6 col-sm-9 hidden-md hidden-lg">
            <div class="pull-right topbar-text-rss"><span class="glyphicon glyphicon-earphone"></span><span style="color: #fff;"> {{@$pagePhone}}</span>
            </div>
        </div>
    </div>
</div>

@include('templates.rss.menu')
@yield('topmenu')
@include('templates.rss.topbanner')

<div class="col-md-12" style="background-color: #ffffff;">
    <div class="container">
        @yield('content')
        <br/>
    </div>
</div>

@include('templates.rss.footer')

<script type="text/javascript">

    $(document).ready(function () {

        var $window = $(window),
            $body = $(document.body),
            navHeight = $('.navbar').outerHeight(true) + 10;

        $body.scrollspy({
            target: '.bs-sidebar',
            offset: navHeight
        })

        $window.on('load', function () {
            $body.scrollspy('refresh')
        })

        $('.bs-docs-container [href=#]').click(function (e) {
            e.preventDefault()
        })


        setTimeout(function () {
            var $sideBar = $('.bs-sidebar')

            $sideBar.affix({
                offset: {
                    top: function () {
                        var offsetTop = $sideBar.offset().top
                        var sideBarMargin = parseInt($sideBar.children(0).css('margin-top'), 10)
                        var navOuterHeight = $('.bs-docs-nav').height()

                        return (this.top = offsetTop - navOuterHeight - sideBarMargin)
                    }, bottom: function () {
                        return (this.bottom = $('.bs-footer').outerHeight(true))
                    }
                }
            })
        }, 100)

        setTimeout(function () {
            $('.bs-top').affix()
        }, 100);

        $('#carousel-rss').carousel();
    });

</script>

</body>
</html>