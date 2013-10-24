@extends('templates.rss.layout')

@section('content')
<br/><br/><br/>
<div class="row">
    <div class="col-md-3">
        <div data-spy="affix" data-offset-top="10" class="bs-sidebar" role="complementary">
            <ul class="nav nav-stacked pcg-help-affix affix-top product-left-menu hidden-sm hidden-xs">
                @foreach($product as $key => $item)
                <li class="@if($key == 0) active @endif"><a href="#product{{$item->id}}">{{$item->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="col-md-6" id="scroll-pane" data-spy="scroll" data-target="#left-navbar">
        @foreach($product as $key => $item)
        <div>
            <h2 id="product{{$item->id}}">{{$item->name}}</h2>
            <br/>
            <div>
            @foreach($item->options as $option)
                <span style="background-color: {{$option->color}}; width:90px; height: 90px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <span><strong>{{$option->title}}<strong</span>&nbsp;&nbsp;&nbsp;&nbsp;
            @endforeach
            </div>
            <br/>
            {{$item->description}}
            <br/><br/><br/>
        </div>
        @endforeach
    </div>
</div>
<br/><br/><br/><br/>
@stop