<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/famfamfam_flags/famfamfam-flags.css" rel="stylesheet">
    <link rel="shortcut icon" href="/{{$templateDir}}/ico/favicon.png">

    <title>IMBAX</title>
    @stylesheets('bootstrap')
    @javascripts('bootstrap-js')
    <!-- Custom styles for this template -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    @javascripts('bootstrap-ie')
    <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/{{$templateDir}}/css/rss.css" />
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
        <div class="col-md-9 col-xs-6 col-sm-9">
            <div class="pull-right topbar-text-rss"><span class="glyphicon glyphicon-earphone"></span> {{Lang::get('label.customer-service')}}  : <span style="color: #fff;">+48 504 500 6700</span>
            </div>
        </div>
    </div>
</div>

@include('templates.rss.menu')
@yield('topmenu')
@include('templates.rss.topbanner')


<div class="container">
    @yield('content')
    <br/>
</div>

@include('templates.rss.footer')


</body>
</html>