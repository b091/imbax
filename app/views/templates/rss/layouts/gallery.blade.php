@extends('templates.rss.layout')

<link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<link rel="stylesheet" href="/packages/gallery/css/bootstrap-image-gallery.min.css">

<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        {{Lang::get('label.previous')}}
                    </button>
                    <button type="button" class="btn btn-primary next">
                        {{Lang::get('label.next')}}
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    #showcase {
        margin-top: 70px;
    }

    #showcase .container {
        /*width: 980px;*/
    }

    #showcase .image img {
        box-shadow: 3px 3px 5px 0px #B7B6B7;
    }

    #showcase .info {
        margin-top: 30px;
    }

    #showcase .info h4 {
        font-size: 17px;
    }

    #showcase .info p {
        color: #333333;
        line-height: 21px;
        font-size: 13px;
    }

    #showcase .features_op1_row .last {
        margin-right: 0;
    }

    #showcase .features_op1_row .feature .text {
        margin: 32px auto 0;
        width: 87%;
    }

    #showcase .features_op1_row .feature .text h6 {
        margin: 0 0 14px 0;
        font-size: 20px;
    }

    #showcase .features_op1_row .feature .text p {
        margin: 0;
        font-size: 14px;
        line-height: 23px;
    }

    #showcase .features_op1_row .feature .img_box {
        position: relative;
        border-radius: 5px;
    }

    #showcase .features_op1_row .feature .img_box img {
        border-radius: 5px;
        max-width: 98%;
        margin: 0 auto;
        display: block;
    }

    #showcase .features_op1_row .feature .img_box span.circle {
        background: rgba(254, 186, 31, 0.6);
        width: 48px;
        height: 48px;
        display: none;
        text-align: center;
        position: absolute;
        top: 30%;
        left: 38%;
        border-radius: 100%;
    }

    #showcase .features_op1_row .feature .img_box span.circle span.plus {
        display: inline-block;
        font-weight: bold;
        color: white;
        font-size: 32px;
        margin-top: -3px;
    }

    #showcase .features_op1_row .feature .img_box:hover span.circle {
        display: block;
    }

    #showcase .features_op1_row .feature .img_box:hover .img_box {
        box-shadow: 0px 0px 1px 100px black inset;
    }

    #showcase .features_op1_row .feature .img_box:hover img {
        box-shadow: 1px 1px 6px 0px #888;
        border-radius: 5px;
        opacity: 0.9;
        filter: alpha(opacity=90);
    }
</style>

@section('content')
<br/>

<div id="showcase">
    <div class="container">

        <div class="row feature_wrapper">
            <!-- Features Row -->
            <div class="features_op1_row">
                @foreach($gallery as $key => $image)

                <div class="col-sm-6 col-md-3 feature" style="margin-top: 10px;">
                    <div class="thumbnail img_box">
                        <a href="/files/gallery/{{$image->photo}}" title="{{$image->name}}" data-gallery>
                            <img src="/files/gallery/{{$image->photo}}" alt="{{$image->name}}" width="253px" class="img-responsive"/>
                            <span class="circle">
                                <span class="plus">&#43;</span>
                            </span>

                            <div class="caption">
                                {{$image->name}}
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <br/><br/>
</div>

@stop
