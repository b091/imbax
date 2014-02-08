@extends('templates.npg.layout')

@section('content')

<section id="feature_slider" class="lol">
    <!--
        Each slide is composed by <img> and .info
        - .info's position is customized with css in index.css
        - each <img> parallax effect is declared by the following params inside its class:

        example: class="asset left-472 sp600 t120 z3"
        left-472 means left: -472px from the center
        sp600 is speed transition
        t120 is top to 120px
        z3 is z-index to 3
        Note: Maintain this order of params

        For the backgrounds, you can combine from the bgs folder :D
    -->
    <article class="slide" id="showcasing" style="background: url('/templates/npg/img/backgrounds/landscape.png') repeat-x top center;">
        <img class="asset left-30 sp600 t120 z1" src="/templates/npg/img/foto/2.JPG" WIDTH="400px"/>
        <div class="info">
            <h2>Piekny Dom w centrum nadmorskiego kurortu.</h2>
        </div>
    </article>
    <article class="slide" id="ideas" style="background: url('/templates/npg/img/backgrounds/aqua.jpg') repeat-x top center;">
        <div class="info">
            <h2>A może mieszkanie w centrum miasta?</h2>
        </div>
        <img class="asset left-480 sp600 t260 z1" src="/templates/npg/img/foto/3_b.JPG" />
        <img class="asset left-210 sp600 t213 z2" src="/templates/npg/img/foto/4_b.JPG" />
        <img class="asset left60 sp600 t260 z1" src="/templates/npg/img/foto/5_b.JPG" />
    </article>
    <article class="slide" id="tour" style="background: url('/templates/npg/img/backgrounds/color-splash.jpg') repeat-x top center;">
        <img class="asset left-672 sp650 t110 z3" src="/templates/npg/img/foto/6_.JPG" />
        <img class="asset left-265 sp600 t270 z4" src="/templates/npg/img/foto/7_.JPG" />
        <img class="asset left-150 sp450 t135 z2" src="/templates/npg/img/foto/8_.JPG" />
        <img class="asset left-185 sp550 t220 z1" src="/templates/npg/img/foto/9_.JPG" />
        <div class="info">
            <h2>Najlepiej przygotowane oferty!</h2>
            <a href="features.html">SPRAWDŻ JUŻ TERAZ</a>
        </div>
    </article>
<!--    <article class="slide" id="responsive" style="background: url('/templates/npg/img/backgrounds/indigo.jpg') repeat-x top center;">-->
<!--        <img class="asset left-472 sp600 t120 z3" src="/templates/npg/img/slides/scene4/html5.png" />-->
<!--        <img class="asset left-190 sp500 t120 z2" src="/templates/npg/img/slides/scene4/css3.png" />-->
<!--        <div class="info">-->
<!--            <h2>-->
<!--                Responsive <strong>HTML5 & CSS3</strong>-->
<!--                Theme-->
<!--            </h2>-->
<!--        </div>-->
<!--    </article>-->
</section>


<div id="showcase">
    <div class="container">
        <div class="section_header">
            <h3>Wjątkowe Nieruchoomości Pomorza Gdańskiego</h3>
        </div>
        <div class="row feature_wrapper">
            <!-- Features Row -->
            <div class="features_op1_row">
                <!-- Feature -->
                <div class="col-sm-4 feature first">
                    <div class="img_box">
                        <a href="services.html">
                            <img src="/templates/npg/img/service1.png">
                            <span class="circle">
                                <span class="plus">&#43;</span>
                            </span>
                        </a>
                    </div>
                    <div class="text">
                        <h6>Responsive theme</h6>
                        <p>
                            There are many variations of passages of generators on the  embarrassing hidden in   content here making it look like.
                        </p>
                    </div>
                </div>
                <!-- Feature -->
                <div class="col-sm-4 feature">
                    <div class="img_box">
                        <a href="services.html">
                            <img src="/templates/npg/img/service2.png">
                            <span class="circle">
                                <span class="plus">&#43;</span>
                            </span>
                        </a>
                    </div>
                    <div class="text">
                        <h6>Easy customization</h6>
                        <p>
                            There are many variations of passages of generators on the  embarrassing hidden in   content here making it look like.
                        </p>
                    </div>
                </div>
                <!-- Feature -->
                <div class="col-sm-4 feature last">
                    <div class="img_box">
                        <a href="services.html">
                            <img src="/templates/npg/img/service3.png">
                            <span class="circle">
                                <span class="plus">&#43;</span>
                            </span>
                        </a>
                    </div>
                    <div class="text">
                        <h6>Made with love</h6>
                        <p>
                            There are many variations of passages of generators on the  embarrassing hidden in   content here making it look like.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div id="clients">
    <div class="container">
        <div class="section_header">
            <h3>Nasi Klienci</h3>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-4 client">
                <div class="img client1"></div>
            </div>
            <div class="col-md-2 col-sm-4 client">
                <div class="img client2"></div>
            </div>
            <div class="col-md-2 col-sm-4 client">
                <div class="img client3"></div>
            </div>
            <div class="col-md-2 col-sm-4 client">
                <div class="img client1"></div>
            </div>
            <div class="col-md-2 col-sm-4 client">
                <div class="img client2"></div>
            </div>
            <div class="col-md-2 col-sm-4 client">
                <div class="img client3"></div>
            </div>
        </div>
    </div>
</div>


@stop