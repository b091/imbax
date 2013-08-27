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
    <link href="jumbotron-narrow.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    @javascripts('bootstrap-ie')
    <![endif]-->

</head>

<body>

<div class="container">
    <nav class="navbar navbar-default navbar-rss" role="navigation" style="margin-top: 5pt;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="assets/images/rss_logo.png"></a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">O nas</a></li>
                <li class="active"><a href="#">Oferta</a></li>
                <li><a href="#">Produkty</a></li>
                <li><a href="#">Galeria</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
        </div>
    </nav>
</div>



<div class="container">
    @yield('content')
    <br/>
</div>



</body>
</html>