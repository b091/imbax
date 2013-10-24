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


@section('content')
<br/>
<div id="links" class="row">
    @foreach($gallery as $key => $image)

    <div class="col-sm-6 col-md-3" style="margin-top: 10px;">
        <div class="thumbnail">
            <a href="/files/gallery/{{$image->photo}}" title="{{$image->name}}" data-gallery>
                <img src="/files/gallery/{{$image->photo}}" alt="{{$image->name}}" width="253px" class="img-responsive"/>
                <div class="caption">
                    {{$image->name}}
                </div>
            </a>
        </div>
    </div>
    @endforeach
</div>
@stop
