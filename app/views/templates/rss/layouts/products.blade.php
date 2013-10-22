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
        /*border-right: 1px solid #563D7C;*/
        /*color: #563D7C;*/
        /*font-weight: bold;*/
    }


</style>

<br/>
<br/>
<br/>
<div class="row">
    <div class="col-md-3">

        @include('templates.rss.menu')
        @yield('leftmenu')

    </div>

    <div class="col-md-6" id="scroll-pane" data-spy="scroll" data-target="#left-navbar">

        @foreach($product as $key => $item)
        <div>
            <h2 id="product{{$key}}">{{$item->name}}</h2>
            <br/>
            {{$item->description}}
            <br/>
            <br/>
            @foreach($item->options as $option)
                <div><span style="background-color: {{$option->color}}; widyh:50px; height: 50px;">&nbsp&nbsp&nbsp&nbsp</span></span> <span>{{$option->title}}</span></div>
            @endforeach
<!--            <img src="/{{$templateDir}}/images/{{$item->photo}}" alt="..." class="pull-left img-responsive"/>-->
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