<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/famfamfam_flags/famfamfam-flags.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>IMBAX</title>
    @stylesheets('bootstrap')
    @javascripts('bootstrap-js')
    <!-- Custom styles for this template -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    @javascripts('bootstrap-ie')
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="assets/css/rss.css" />
</head>

<body>

<div class="row topbar-rss">
    <div class="container">
        <div class="col-xs-6 col-sm-3 topbar-text-rss">
            Język strony: <a href=""><i class="famfamfam-flag-pl"></i></a> <a href=""><i class="famfamfam-flag-se"></i></a> <a href=""><i
                    class="famfamfam-flag-gb"></i></a>
        </div>
        <div class="col-md-9 col-xs-6 col-sm-9">
            <div class="pull-right topbar-text-rss"><span class="glyphicon glyphicon-earphone"></span> Obsługa klienta: <span style="color: #fff;">+48 504 500 6700</span>
            </div>
        </div>
    </div>
</div>

@include('templates.rss.menu')
@yield('topmenu')

<div class="container hidden-xs">
    <div class="topinfo-rss">
        <span>Łyżki do koparek</span><span style="color: #FFC04D;"> Real Steel Sweden</span>
        <a class="btn btn-sm btn-warning pull-right button-rss-procuct" href="#">Zobacz nasze produkty</a></p>
    </div>
</div>


<div class="container hidden-sm hidden-md hidden-lg">
    <div class="topinfo-rss" style="border-bottom: 1px solid #e1e1e8 !important;">
        <span>Łyżki do koparek</span><br/><span style="color: #FFC04D;"> Real Steel Sweden</span>
        <a class="btn btn-warning btn-sm pull-right" href="#">Zobacz nasze produkty</a></p>
    </div>
</div>

@include('templates.rss.carousel')

<div class="container">
    @yield('content')
    <br/>
</div>

<div class="col-md-12 footer footer-rss">
    <div class="container">

        <div class="col-lg-2 col-xs-3">
            <img src="assets/images/logo_footer.png" class="img-responsive"></a>
        </div>
        <div class="col-lg-5">
            <p><strong>At vero eos et accusamus et</strong> iusto odio dignissimos ducimus qui blanditiis praesentium
                voluptatum deleniti atque corrupti quos dolores et. </p>
        </div>
        <div class="col-lg-5 hidden-xs">
            @yield('bottommenu')
        </div>
    </div>
</div>


</body>
</html>