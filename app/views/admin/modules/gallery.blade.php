@extends('admin.layout')

@section('content')

@include('admin.forms.menu')
@yield('menu')

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-picture"></i> Galeria</h2>

            <div class="box-icon">
                <a href="#" class="btn btn-gallery-add btn-round"><i class="icon-plus"></i></a>
            </div>
        </div>
        <div class="box-content">
            <p class="center">
                <button id="toggle-fullscreen" class="btn btn-large btn-primary visible-desktop" data-toggle="button">Pełny ekran</button>
            </p>
            <br/>
            <ul class="thumbnails gallery">

                @foreach($gallery as $item)
                <li id="image-{{$item->id}}" class="thumbnail">
                    <a style="background:url(/files/gallery/{{$item->photo}})" title="Sample Image 1" href="/files/gallery/{{$item->photo}}" data-id="{{$item->id}}"><img class="grayscale"
                                                                                                                             src="/files/gallery/{{$item->photo}}"
                                                                                                                             alt="{{$item->name}}"></a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

</div>

@include('admin.forms.gallery')
@yield('gallerymodal')
@stop