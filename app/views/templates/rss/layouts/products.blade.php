@extends('templates.rss.layout')

@section('content')

<style type="text/css">

    .asd {
        background-color: #FFFFFF;
        border-color: #DDDDDD;
        border-radius: 4px 4px 0 0;
        border-width: 1px;
        box-shadow: none;

    }

</style>

<br/>
<br/>
<br/>
<div class="row">
    <div class="col-md-3">
        <ul class="nav nav-stacked">

            @foreach($product as $item)
            <li><a href="">{{$item->name}}</a></li>
            @endforeach

        </ul>
    </div>

    <div class="col-md-6">
        dsa
    </div>
</div>
<br/>
<br/>
<br/>
<br/>

@stop