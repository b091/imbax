<!DOCTYPE html>
<html>
<head>
	<title>JODŁOWSKI NPG</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Styles -->
    <link href="/templates/npg/css/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/templates/npg/css/compiled/bootstrap-overrides.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/templates/npg/css/compiled/theme.css" />

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" href="/templates/npg/css/compiled/index.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/templates/npg/css/lib/animate.css" media="screen, projection" />

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="/templates/npg/css/compiled/contact.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/templates/npg/css/compiled/blog.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/templates/npg/css/compiled/portfolio-item.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/templates/npg/css/compiled/blogpost.css" type="text/css" media="screen" />



</head>
<body class="pull_top">
@if ($currentpage->layout == 'home')
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand"><strong>JODŁOWSKI NPG</strong></a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse" role="navigation">
            <ul class="nav navbar-nav navbar-right">
                @foreach($menu as $item)
                <li class="@if ($currentpage->pagelink === $item->pagelink ) active @endif"><a href="/{{$currentlang}}/{{ $item->pagelink }}">{{strtoupper($item->title)}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@else
<div class="navbar navbar-inverse navbar-static-top" role="navigation">
       <div class="container">
           <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
               <a href="/" class="navbar-brand"><strong>JODŁOWSKI NPG</strong></a>
           </div>

           <div class="collapse navbar-collapse navbar-ex1-collapse" role="navigation">
               <ul class="nav navbar-nav navbar-right">
                   @foreach($menu as $item)
                <li class="@if ($currentpage->pagelink === $item->pagelink ) active @endif"><a href="/{{$currentlang}}/{{ $item->pagelink }}">{{strtoupper($item->title)}}</a></li>
                @endforeach
               </ul>
           </div>
       </div>
   </div>
@endif

    @yield('content')

    <!-- starts footer -->
    <footer id="footer">
        <div class="container">
            <div class="row sections">
                <div class="col-sm-4 recent_posts">
                    <h3 class="footer_header">
                        Polecamy
                    </h3>
                    <div class="post">
                        <a href="blogpost.html">
                            <img src="/templates/npg/img/recent_post1.png" class="img-circle" />
                        </a>
                        <div class="date">
                            Sopot 80 m&sup2;
                        </div>
                        <a href="blogpost.html" class="title">
                            Randomised words which don't look embarrasing hidden.
                        </a>
                    </div>
                    <div class="post">
                        <a href="blogpost.html">
                            <img src="/templates/npg/img/recent_post2.png" class="img-circle" />
                        </a>
                        <div class="date">
                            Gdańsk 56 m&sup2;
                        </div>
                        <a href="blogpost.html" class="title">
                            Randomised words which don't look embarrasing hidden.
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 testimonials">
                    <h3 class="footer_header">
                        Motto
                    </h3>
                    <div class="wrapper">
                        <div class="quote">
                            <span>“</span>
                            Z nami twoja satysfakcja
                            <span></span>
                        </div>
                        <div class="author">
                            <img src="/templates/npg/img/user-display.png" />
                            <div class="name">Anna Maria Kowalska</div>
                            <div class="info">
                                Agent Nieruchomści
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 contact">
                    <h3 class="footer_header">
                        Kontakt
                    </h3>
                    <form action="index.html#" method="post">
                        <input type="text" placeholder="Twoje imię" />
                        <input type="text" placeholder="Twój email" />
                        <textarea rows="3" placeholder="Wiadomość"></textarea>
                        <input type="submit" value="Wyślij" />
                    </form>
                </div>
            </div>
            <div class="row credits">
                <div class="col-md-12">
                    <div class="row copyright">
                        <div class="col-md-12">
                            © 2013 Jodłowski Nieruchomości Pomorza Gdańskiego
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="/templates/npg/js/bootstrap.min.js"></script>
    <script src="/templates/npg/js/theme.js"></script>

    <script type="text/javascript" src="/templates/npg/js/index-slider.js"></script>
</body>
</html>