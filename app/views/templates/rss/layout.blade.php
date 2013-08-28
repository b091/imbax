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

    <style type="text/css">
        a {
            color: #575E63;
        }

        .btn-info {
            background-color: #444B52;
            border: 1px solid #444B52;
        }

        .btn-primary {
            background-color: #C4C8CC;
            border: 1px solid #C4C8CC;
        }

        .button-rss-procuct {
            margin-top: 10px;
            padding: 8pt;
        }

        .navbar-rss {
            margin-top: 5pt;
            background-color: #ffffff;
        }

        .navbar-rss li a {
            padding-top: 35px;
            height: 100px;
        }

        .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus {
            background-color: #33383D;
            color: #ffffff;
        }

        .topbar-rss {
            background-color: #1F2326;
            padding: 5pt;
        }

        .topbar-text-rss {
            font-size: 8pt;
            color: #96999b;
        }

        .topinfo-rss {
            padding: 10pt;
            border: 1px solid #e1e1e8;
            border-bottom: none;
        }

        .topinfo-rss span {
            color: #303437;
            font-size: 30px;
        }

        .carousel-rss {
            font-size: 21px;
            text-align: left;
            padding: 0px 15px 0px;
            font-size: 16px;
            text-align: center;
            text-shadow: 0 1px 0 rgba(0, 0, 0, .15);
            color: #cdbfe3;
            background-color: #33383C;
            background-image: url("assets/images/rss_carousel_bg.jpg");
        }

        .carousel-indicators {
            width: auto;
            position: inherit;
        }

        .breadcrumb-rss {
            background-color: transparent;
            padding: 0px;
            margin: 0px;
        }

        .breadcrumb-rss li {
            font-size: 10pt;
        }

        .footer-rss {
            background-color: #F5F9FC;
            padding: 20px;
            /*height: 10px;*/
        }

        .footer-rss p {
            font-size: 12px;
            color: #B1B5B8;
        }

        .thumbnail2 {
            background-image: url('assets/images/thumbnail_bg.jpg');
            background-position: bottom right;
            background-repeat: repeat-x;
            background-color: #F7F8FA;
            height: 90px;
            padding: 10px;
            border-right: 1px solid #D9D9D9;
            border-bottom: 1px solid #D9D9D9;
        }

        .thumbnail2 p {
            color: #c2c2c2;
        }

    </style>
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

<div class="carousel-rss hidden-xs">
    <div class="container">
        <div id="carousel-example-generic" class="carousel slide">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="assets/images/slide_A.jpg" alt="1 slide">
                </div>
                <div class="item">
                    <img src="assets/images/slide_B.jpg" alt="2 slide">
                </div>
                <div class="item">
                    <img src="assets/images/slide_C.jpg" alt="3 slide">
                </div>
                <div class="item">
                    <img src="assets/images/slide_D.jpg" alt="4 slide">
                </div>
                <div class="item">
                    <img src="assets/images/slide_E.jpg" alt="5 slide">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <ol class="breadcrumb breadcrumb-rss pull-left">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="#">Produkty</a></li>
            <li class="active">Łyżka skarpowa RSS STS 1150/700</li>
        </ol>
        <ol class="carousel-indicators pull-right">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
        </ol>
    </div>
</div>


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