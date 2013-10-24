@extends('templates.rss.layout')

@section('content')
<div class="row">
    <div class="col-lg-6">
        {{$content}}
    </div>

    <div class="col-lg-6">
        <div class="hidden-xs">
            <br/><br/><br/>
        </div>
        @foreach($homepageproduct as $item)
        <a href="/{{$currentlang}}/{{$productspagelink}}#product{{$item->id}}" class="hidden-xs">
        <div class="thumbnail2">
            <img src="/files/products/{{$item->photo}}" alt="{{$item->name}}" class="pull-left img-responsive" width="84px"/>

            <div class="pull-left">
                <h4>&nbsp;&nbsp; {{$item->name}}</h4>

                <p>&nbsp;&nbsp;&nbsp; {{$item->short_description}}</p>
            </div>
            <br/>
<!--            <a href="/{{$currentlang}}/{{$productspagelink}}#product{{$item->id}}" class="btn btn-sm btn-primary pull-right">{{Lang::get('buttons.check-offer')}} </a>-->
        </div>
        </a>
        <a href="/{{$currentlang}}/{{$productspagelink}}#product{{$item->id}}" class="hidden-sm hidden-md hidden-lg">
            <div class="thumbnail2">
                <img src="/files/products/{{$item->photo}}" alt="..." class="pull-left img-responsive" width="84px"/>

                <div class="col-xs-8 col-sm-9">
                    <h4>{{$item->name}}</h4>
                </div>
            </div>
        </a>
        <br/>
        @endforeach
    </div>
</div>
@stop