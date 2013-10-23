@extends('templates.rss.layout')

@section('content')

<style type="text/css">

    .asd {
        border-radius: 4px 4px 4px 4px;
        /*border-width: 1px;*/
        /*box-shadow: none;*/
        border: 1px solid #DDDDDD;
        border-top: none;
    }

    .asd > li {
        border-top: 1px solid #DDDDDD;
    }

    .bs-sidebar .nav > .active > a, .bs-sidebar .nav > .active:hover > a, .bs-sidebar .nav > .active:focus > a {
        background-color: #33383D;
        color: #ffffff;
    }


</style>

<br/>
<br/>
<br/>
<div class="row">
    <div class="col-md-3">

        <div class="bs-sidebar" >
            <ul class="nav asd nav-stacked pcg-help-affix affix-top asdf hidden-sm hidden-md hidden-xs" data-spy="affix" >
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
            <br/><br/><br/>
            <br/><br/><br/>
        </div>
        @endforeach


    </div>
</div>
<br/>
<br/>
<br/>
<br/>

@stop