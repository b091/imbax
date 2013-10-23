@extends('templates.rss.layout')

@section('content')
<div class="row">
    <div class="col-lg-6">
        {{$content}}
    </div>

    <div class="col-lg-6">
        <div class="hidden-xs">
            <br/>
            <br/>
            <br/>
        </div>
        @foreach($homepageproduct as $item)
        <div class="thumbnail2 hidden-xs">
            <img src="/files/products/{{$item->photo}}" alt="{{$item->name}}" class="pull-left img-responsive" width="84px"/>

            <div class="pull-left" style="">
                <h4>&nbsp;&nbsp; {{$item->name}}</h4>

                <p>&nbsp;&nbsp;&nbsp; {{$item->short_description}}</p>
            </div>
            <br/>
            <a href="/{{$currentlang}}/{{$productspagelink}}#product{{$item->id}}" class="btn btn-sm btn-primary pull-right">{{Lang::get('buttons.check-offer')}} </a>
        </div>


        <a href="#">
            <div class="thumbnail2 hidden-sm hidden-md hidden-lg">
                <img src="/{{$templateDir}}/images/rss_A.jpg" alt="..." class="pull-left img-responsive"/>

                <div class="col-xs-8 col-sm-9">
                    <h4>{{$item->name}}</h4>

                    <p>&nbsp;&nbsp;&nbsp;{{$item->short_description}}</p>
                </div>
            </div>
        </a>
        <br/>
        @endforeach
    </div>
</div>
@stop