<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{@$pageTitle}}</title>
    <meta name="description" content="{{@$pageDescription}}">
    <meta name="Keywords" content="{{@$pageKeywords}}">
    <link rel="shortcut icon" href="/{{$templateDir}}/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/famfamfam_flags/famfamfam-flags.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300">
    <link rel="stylesheet" type="text/css" href="/{{$templateDir}}/css/rss.css"/>
    <link rel="stylesheet" type="text/css" href="/packages/blueimp/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" type="text/css" href="/packages/gallery/css/bootstrap-image-gallery.min.css">
</head>

<body>
<div class="row topbar-rss">
    <div class="container">
        <div class="col-xs-6 col-sm-3 topbar-text-rss">
            @foreach($langs as $item)
            <a href="/{{$item->code}}/"><i class="famfamfam-flag-{{$item->code}}"></i></a>
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

<div class="col-md-12" style="background-color: #ffffff;">
    <div class="container">
        @yield('content')
        <br/>
    </div>
</div>

@include('templates.rss.footer')

<script src="//code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="/templates/rss/js/app.js"></script>
<script src="/packages/gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="/packages/gallery/js/bootstrap-image-gallery.min.js"></script>

</body>
</html>