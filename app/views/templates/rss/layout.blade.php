<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{@$pageTitle}}</title>
    <meta name="description" content="{{@$pageDescription}}">
    <meta name="Keywords" content="{{@$pageKeywords}}">
    <link rel="shortcut icon" href="/{{$templateDir}}/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/assets/bower_vendor/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/assets/bower_vendor/famfamfam-flags-sprite/src/flags-sprite.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300">
    <link rel="stylesheet" type="text/css" href="/{{$templateDir}}/css/rss.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/bower_vendor/blueimp-bootstrap-image-gallery/css/bootstrap-image-gallery.css">
    <link rel="stylesheet" type="text/css" href="/assets/bower_vendor/blueimp-gallery/css/blueimp-gallery.css">
</head>

<body>

<div class="row topbar-rss">
    <div class="container">
        <div class="col-xs-6 col-sm-3 topbar-text-rss">
            @foreach($langs as $item)
            <a href="/{{$item->code}}/"><span class="flag-icon {{$item->code}}"></span></a>
            @endforeach
        </div>
        <div class="col-md-9 col-xs-6 col-sm-9 hidden-sm hidden-xs">
            <div class="pull-right topbar-text-rss"><span class="glyphicon glyphicon-earphone"></span><span> {{Lang::get('label.customer-service')}} :</span><span style="color: #fff;"> {{@$pagePhone}}</span>
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

<script src="/assets/bower_vendor/jquery/dist/jquery.js"></script>

<div class="col-md-12" style="background-color: #ffffff;">
    <div class="container">
        @yield('content')
        <br/>
    </div>
</div>

@include('templates.rss.footer')

<script src="/assets/bower_vendor/bootstrap/dist/js/bootstrap.js"></script>
<script src="/templates/rss/js/app.js"></script>
<script src="/assets/bower_vendor/blueimp-gallery/js/blueimp-gallery.js"></script>
<script src="/assets/bower_vendor/blueimp-gallery/js/jquery.blueimp-gallery.js"></script>
<script src="/assets/bower_vendor/blueimp-bootstrap-image-gallery/js/bootstrap-image-gallery.js"></script>

</body>
</html>